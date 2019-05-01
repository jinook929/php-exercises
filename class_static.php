<?php

class Car {
  static $wheels = 4;
  var $hood = 1;

  function addWheelsShowHood(){
    Car::$wheels = 18; 
  }
}

$suv = new Car();

// $bmw->wheels; it will not work b/c wheels is now static.

echo Car::$wheels;
echo "<br>";
Car::addWheelsShowHood();
echo Car::$wheels;