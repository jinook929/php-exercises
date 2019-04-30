<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Scope</title>
</head>
<body>

<?php

$x = "outside";
echo $x . "<br>";

$y = 7;

function show_scope() {
  // global $x;
  $x = "inside";
  echo $x . "<br>";
  global $y;
  echo $y + 10 . "<br>";
}

show_scope();
echo $x . "<br>";


?>
  
</body>
</html>