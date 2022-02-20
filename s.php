<?php
require_once 'class/MySessionMySQL.php';
require_once 'class/MySessionJSON.php';
require_once 'class/MyJson.php';
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
/*
$mySessionMySQL = new MySessionMySQL();
session_set_save_handler($mySessionMySQL, true);
session_start();
$_SESSION['var1'] = "$ 1!";
$_SESSION['var2'] = "sdfsdf";
print_r ($_SESSION);
session_write_close();
*/

$mySessionJSON = new MySessionJSON();
session_set_save_handler($mySessionJSON, true);
session_start();

$_SESSION['var1'] = "glass";
$_SESSION['var2'] = "bar!gfhj";


print_r ($_SESSION);
session_write_close();
phpinfo();

