<?php

abstract class Animal
{
  abstract function makesound();
  public function run()
  {
    echo "Corriendo\n";
  }
}

class Dog extends Animal {
  public $name = "Marxcelino";
  public function makesound()
  {
    echo "Guauf\n";
  }
}

class Cat extends Animal {
  public $name = "Luna";
  public function makesound()
  {
    echo "Miau\n";
  }
}

$reflection_class = new ReflectionClass('Dog'); 
?>
