<?php if ( ! defined('B_ROOT')) exit('No direct script access allowed');

function b_init(){
    //init  conf
    require_once B_ROOT . 'conf.php';

    //init db class
    require_once B_ROOT . 'inc/myMysql.class.php';

    //init page manager class
    require_once B_ROOT . 'inc/page.class.php';
}