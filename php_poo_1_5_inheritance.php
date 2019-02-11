<?php
class Animal
{
  public $sound_type = "hago un sonido";

  public function run()
  {
    echo "Ya esta corriendo\n";
  }

  public function walk()
  {
    echo "Ya esta caminando\n";
  }

  public function __construct()
  {
    echo 'Ha nacido un animal, ';
  }
  // cuando se instancia un objeto hijo pero padre e hijo tienen constructor
  // solo se ejecutara el constructor solo del hijo

  // esta clase muestra el valor de la instancia que lo solicita y no de la clase padre
  public function getSound()
  {
    echo "Yo " . $this->sound_type . "\n";
  }

}
// lo ideal es que cada clase tenga su propio archivo
// dejar clase padre y clase hijo en el mismo archivo es una mala practica

class Dog extends Animal
{
  // asignar un atributo solo a la clase "Dog"
  public $sound_type = "ladro";

  public function __construct()
  {
    parent::__construct();
    // con esta instruccion se ejecuta tambien el constructor padre
    echo "es un perro\n";
  }
}

class Cat extends Animal
{
  // asignar un atributo solo a la clase "Cat"
  public $sound_type = "mahullo";

  public function __construct()
  {
    parent::__construct();
    echo "es un gato\n";
  }
}

$dog = new Dog();

$dog->run();
$dog->getSound();

$cat = new Cat();
$cat->walk();
$cat->getSound();
// el hijo puede acceder a metodos del padre y mostrar sus atributos unicos de hijo

// comprobando las instancias
if ($dog instanceof Dog)
{
  echo "Si, es un perro\n";
}

if ($dog instanceof Animal)
{
  echo "Si, es un Animal\n";
}
// con la herencia, el objeto instanciado de la clase hijo, tambien es instancia de la clase padre.

?>
