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

echo class_exists('Cerdo') . "\n";

$classes = ['Being', 'Animal', 'Plant', 'Dog', 'Cat', 'Mouse', 'Captus'];
// notacion de arrays desde php7

foreach ($classes as $class_)
{
    echo $class_ .  " Existe? " . (class_exists($class_) ? 'Si' : 'No') . "\n";
}
?>
