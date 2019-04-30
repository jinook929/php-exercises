<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Associative Arrays</title>
</head>
<body>

<?php

$number = [10, 20, 49];

echo $number[1] . "<br>";
print_r($number);

$names = array("first_name" => 'Jinook', "last_name" => 'Jung');
echo "<br>";
print_r($names);
echo "<br>";
echo $names;
echo "<br>";
echo $names['first_name'] . " " . $names['last_name'];
echo "<br>";
echo $names[0]; // This will not echo anything.

?>
  
</body>
</html>