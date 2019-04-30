<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch Statement</title>
</head>
<body>

<?php

$num = 34;

switch($num) {
  case 30:
    echo "It is 30!";
    break;
  case 31:
    echo "It is 31!";
    break;
  case 32:
    echo "It is 32!";
    break;
  case 33:
    echo "It is 33!";
    break;
  // case 34:
    // echo "It is 34!";
    // break;
  default:
    echo "It was 34...";
}

?>
  
</body>
</html>