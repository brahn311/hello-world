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

$cat = new Cat;
var_dump(get_class_methods($cat));
var_dump(get_class_methods(new Dog));
var_dump(get_class_methods('Animal'));

?>
