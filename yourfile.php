<?php
if (isset($_GET['filename'])){
    $fileName = $_GET['filename'];
}
$dir = './downloads/';
$url = $dir. $fileName;

include_once 'yourfile.html';

$files = scandir($dir, 1);

for ($i = 0; $i < count($files)-2; $i++) {
    echo '<img src="'.$dir . $files[$i].'" width="400">';
    echo '<br>';
}