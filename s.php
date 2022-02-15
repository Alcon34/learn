<?php
require_once 'class/MySessionMySQL.php';
require_once 'class/MySessionJSON.php';

$mySessionMySQL = new MySessionMySQL();
session_set_save_handler($mySessionMySQL, true);
session_start();
$_SESSION['var1'] = "$ 1!";
$_SESSION['var2'] = "sdfsdf";
print_r ($_SESSION);
session_write_close();


$mySessionJSON = new MySessionJSON();
session_set_save_handler($mySessionJSON, true);
session_start();

$_SESSION['var1'] = "glass";
$_SESSION['var2'] = "bar!";
$_SESSION['var3'] = "sar!";
$_SESSION['var4'] = "sa4";
$_SESSION['var5'] = "ssa4";
echo '<br>';
print_r ($_SESSION);
session_write_close();

