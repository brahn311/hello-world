<?php
// La clase abstracta es un tipo especial de clase que no puede ser instanciada
// pero define estructura y puede definir funcionalidad
abstract class Animal
// una clase que posea al menos un metodo abstracto, debe ser considerada y declarada como clase abstracta
{
  abstract public function makeSound();
  // cada metodo definido como abstracto debe estar definido en la clase que lo implementa

  public function run()
  {
    echo "Corriendo\n";
  }
}
class Dog extends Animal
{
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

$oracle = new Oracle;
$oracle->connect();
$mysql = new MySQL;
$mysql->connect();

$dog = new Dog;
$dog->makeSound();
$dog->run();

$cat = new Cat;
$cat->makeSound();
$cat->run();

?>
