<?php


class Car {
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function MoveWheels(){
    echo "Wheels move";
    echo "<br>";
    $this->wheels = 10; // here '$this' points to the function 'MoveWheels'.
  }

  function createDoors () {
    $this->doors = 5;
  }

}

$bmw = new Car();
$benz = new Car();

echo $bmw->wheels;
echo "<br>";

$bmw->MoveWheels();
$benz->MoveWheels(); // this will use method 'MoveWheels' to make 'var $wheels = 10'.

echo $bmw->wheels;
echo "<br>";

$bmw->wheels = 8; // this will make 'var $wheels = 8'.
echo $bmw->wheels;
echo "<br>";

$truck = new Car();
echo $truck->wheels = 18;
echo "<br>";

$truck->createDoors();
echo $truck->doors;
echo "<br>";

// echo $truck->wheels = 18;
// echo "<br>";





// if(method_exists('Car', 'MoveWheels')){
//   echo "The Method Exists";
// } else {
//   echo "No, it does not...";
// }

// if(class_exists('Car')){
//   echo "Yeah!!! Nice~";
// } else {
//   echo "No...";
// }

?>