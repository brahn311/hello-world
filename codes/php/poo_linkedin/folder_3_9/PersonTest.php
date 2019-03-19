<?php
require_once('Person.php');
// incluimos la clase o codigo que deceamos hacer pruebas
// deberiamos usar un autoload

class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPersonConstruct()
    {
		// sin tener la clase lista se empieza a comprobar...
		$person = new Person();

		$this->assertTrue($person instanceof Person, 'It should be instance of class Person');
		// assertTrue() verifica si la expresion es verdadera, requiere dos parametros: ('expresion a evaluar', 'mensaje en caso de error')

		$person = new Person('Abrahan');
		$this->assertTrue($person->getName() == 'Abrahan', "It should be 'Abrahan'");

	}

}

?>
