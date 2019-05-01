<?php

$file = "example.txt";
$handle = fopen($file, 'w');

$file0 = "delete_test.php";
$handle0 = fopen($file0, 'w');

fclose($handle);

?>