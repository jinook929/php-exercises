<?php

$file = "example.txt";

if($handle = fopen($file, 'w')){
  fwrite($handle, 'I love PHP!');
  fclose($handle);
} else {
  echo "This file cannot be written on.";
}



?>