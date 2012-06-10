<?php if ( ! defined('B_ROOT')) exit('No direct script access allowed');

class page
{
    //first position to output
    public $pos;
    //number to output
    public $num;
    //position for query 'limit' (less that 1, because numbering limit from zero)
    public $lim;

    public $orderName;

    function __construct() {
        //if unknown or error - set 1
        $this->pos = @$_GET['pos'] ? (int)$_GET['pos']: 1;

        if($this->pos < 0){
            $this->pos = 1;
        }

        // Start PHP session.
        $this->start_session();

        $this->num = '5';
        $this->lim = $this->pos - 1;

        //if select order to link - save to session
        if(!empty($_GET['order']))  {
            $_SESSION['order'] = $_GET['order'];
        }

        //default order - on name
        $this->orderName = !empty($_SESSION['order'])? $_SESSION['order'] : $_SESSION['order'] = 'name';
    }

    function orderBy(){
        $order = $this->orderName;
        return $order;
    }

    /**
     * param $count - total number to output
     */
    function pager($count){
        //x if > 0 - decrement on num
        //y - number position of ouput increment on num
        //z - number of account increment on 1
        for($x=$count, $y=1, $z=1;
            $x>0;
            $x-=$this->num, $y+=$this->num ,$z++){
            if($this->pos == $y){
                echo $z;
            } else {
                echo "<a href=?pos=",$y,"> ",$z," </a>" ;
            }
        }
    }

    //session
    protected function start_session() {
        ini_set('session.use_cookies', 1);
        ini_set('session.use_trans_sid', 0);
        session_start();
    }
}
