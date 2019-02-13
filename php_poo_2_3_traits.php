<?php
// en php no hay herencia multiple directamente pero traits es otro mecanismo para desarrollo
// traits permite compartir funcionalidad entre clases en primera instancia no relacionada (que no heredan)
trait myUtilities
// traits pareciera ser una clase, pero no lo es, pero su funcionalidad puede ser usuada por otras clases
{
  function sayMyName()
  {
    // traits tiene accesibilidad a los demas atributos de la clase de la instancia
    echo "Mi nombre es " . $this->name . "\n";
  }
}

abstract class Animal
// una clase que posea al menos un metodo abstracto, debe ser considerada y declarada como clase abstracta
{
  public $name;

  abstract public function makeSound();
  // cada metodo definido como abstracto debe estar definido en la clase que lo implementa

  public function run()
  {
    echo "Corriendo\n";
  }

  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Dog extends Animal
{
  use myUtilities;
  // instruccion necesaria para acceder a los metodos en traits

  public function makeSound()
  // este metodo implementa un metodo abstracto
  {
    echo "Guau\n";
  }

}
class Cat extends Animal
{
  public function makeSound()
  // este metodo implementa un metodo abstracto
  {
    echo "Miau\n";
  }

}

// las interfaces son similares a la clase abstracta, pero no se puede definir ningun tipo de funcionalidad
interface iDB
{
  public function connect();
}

class MySQL implements iDB
{
  use myUtilities;

  public $name = "MySQL vers 9.5.2";

  public function connect()
  {
    echo "Conectando con MySQL\n";
  }
}

class Oracle implements iDB
{
  public function connect()
  {
    echo "Conectando con Oracle\n";
  }
}
// las clases que implemetan una interfaz podrian tender la misma estructura y la misma forma de acceder a los metodos

$mysql = new MySQL;
$mysql->connect();
$mysql->sayMyName();

$oracle = new Oracle;
$oracle->connect();
// la instancia $oracle no posee el atributo name, por ello, el metodo solo lo llamamos para $mysql

$dog = new Dog('Firulais');
$dog->sayMyName();
$dog->makeSound();
$dog->run();

$cat = new Cat('Mia');
// $cat->sayMyName();
// la instancia $cat si tiene nombre, pero no usa myUtilities, por ello no tiene acceso al metodo
$cat->makeSound();
$cat->run();

?>
