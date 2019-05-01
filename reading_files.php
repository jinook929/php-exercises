<?php

$file = "example.txt";

if($handle = fopen($file, 'r')){
  // $excerpt = fread($handle, 7); // Each bit equals to a character.
  // echo $excerpt;

  $content = fread($handle, filesize($file));
  echo $content;
  
  fclose($handle);
} else {
  echo "This file cannot be written on.";
}



?>