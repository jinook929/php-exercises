<?php

class Car {
  public $wheels = 4; // public can be accessed from anywhere
  protected $hood = 1; // protected only inside class or subclass(extends)
  private $engine = 1; // private only in this class
  var $doors = 5;

  function addWheelsShowHood(){
    echo $this->wheels = 18; // '$this' points to the function 'addWheelsShowHood'.
    echo "...";
    echo $this->hood;
    echo "...";
    echo $this->engine;
  }
}

$suv = new Car();
$semi = new Semi();

class Semi extends Car {
  function showProperty(){
    echo $this->wheels = 10; // '$this' points to the function 'showProperty'.
    echo "...";
    echo $this->hood;
    echo "...";
    echo $this->engine; // It will not bring any result.
  }
}

echo $suv->wheels."<br>";
// echo $suv->hood; => It causes error b/c $hood is pretected.
echo $suv->addWheelsShowHood()."<br>";

echo $semi->wheels."<br>";
echo $semi->showProperty()."<br>";