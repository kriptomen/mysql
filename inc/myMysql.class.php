<?php if ( ! defined('B_ROOT')) exit('No direct script access allowed');

class myMysql
{
    private $connect;
    private $result;

    function __construct(){
        $this->connect = mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die(mysql_error());
        mysql_select_db(DB_NAME) or die (mysql_error());
    }

    function myQuery($query) {
        $this->result = mysql_query($query, $this->connect);
        if($this->result === false) {
            die(mysql_error());
        }
        return $this;
    }
     //
    function fetch_all(){
        $rows = array();
        while ($row = mysql_fetch_assoc($this->result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function fetch_single(){
        $row = mysql_fetch_assoc($this->result);
        return $row;
    }

    function escape($string) {
        return mysql_real_escape_string((string) $string);
    }

    //Вот тут я что-то не придумал как красиво сделать.   return $count['c']; - костыль какой-то
    function count($table) {
        $queryCount = "SELECT COUNT(*) as c FROM $table";
        $count = $this->myQuery($queryCount)->fetch_single();
        return $count['c'];
    }


    function __destruct(){
        $this->result = mysql_close($this->connect);

    }
}
