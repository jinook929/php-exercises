<?php

class Car {
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 5;

  function MoveWheels(){
    echo "Wheels move";
    echo "<br>";
    $this->wheels = 10; // '$this' points to the function 'MoveWheels'.
  }

  function createDoors () {
    $this->doors = 6;
  }

}

$bmw = new Car();
echo $bmw->wheels . "<br>";
echo $bmw->MoveWheels();
echo $bmw->doors . "<br>";

class Plane extends Car {
  var $doors = 20;
}

$jet = new Plane();
echo $jet->wheels . "<br>";
echo $jet->MoveWheels();
echo $jet->doors . "<br>";