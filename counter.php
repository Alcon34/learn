<?php
$count = $_COOKIE["couneter"];
setcookie("couneter", $count+1);
echo $_COOKIE["couneter"];




