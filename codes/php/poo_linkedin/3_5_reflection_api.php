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

echo $reflection_class->getName() . "\n";
var_dump($reflection_class->isAbstract());
var_dump($reflection_class->isInstantiable());
var_dump($reflection_class->isInternal());

// tambien podemos ver el comportamiento de metodos y los parametros que reciben
// puede ser util para:
// cuando generamos clases dinamicas
// cuando diseñamos una suite de pruebas podemos probar los metodo de una clase de manera generica

// pueder investigar buscar mas usos Reflection API en el manual de referencia

?>
