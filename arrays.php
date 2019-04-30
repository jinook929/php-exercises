<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
<body>

<?php 

$numberList = array(123, '456', '<h1>Hello</h1>');

print_r($numberList);
echo '<br>';
echo $numberList[0];
echo '<br>';
echo $numberList[1];
echo '<br>';
echo $numberList[2];
echo '<br>';

// NEWER WAY FOR ARRAYS
$numberList_ = ["name" => 'Jinook'];
print_r($numberList_);
echo '<br>';
echo $numberList_;

?>
  
</body>
</html>