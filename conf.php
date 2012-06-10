<?php if ( ! defined('B_ROOT')) exit('No direct script access allowed');
// BASE SETTING ------------------------
//level of error
error_reporting( E_ALL );

//encoding
header ("Content-type: text/html; charset=utf-8");

// DB SETTING ---------------------------
//database username
define ('DB_UNAME', 'root');

//database password
define ('DB_PWD', null);

//database host
define ('DB_HOST', 'localhost');

//database name
define ('DB_NAME', 'biblio');

//
$error = array();