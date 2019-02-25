<?php
require_once('Person.php');
// incluimos la clase o codigo que deceamos hacer pruebas

class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPersonConstruct()
    {
        // incluimos un test para comprender el funcionamiento de los assertions
		$this->assertFalse(false, 'Deberia ser verdadero');
		// ese assert con el parametro false es falso, por ello dara 1 assertion
		$this->assertTrue(true, 'Deberia ser verdadero');
		// ese assert con el parametro true es verdadero, por ello dara 1 assertion

		$persona = new Person('Abrahan', 'Omana', '(+58)212-251.6461','(+58)426-714.9976');

		$this->assertEquals($persona->getName(), 'Abrahan', "Debe ser:\n" . "'Abrahan'");
		$this->assertEquals($persona->getFamilyName(), 'Omana', "Debe ser:\n" . "'Omana'");

	}

	/**
	* @expectedException Exception
	**/
	public function testThrowException()
	{
		$persona = new Person('Abrahan', 'Omana', '(+58)212-251.6461','(+58)426-714.9976');

		$this->assertEquals($persona->geName(), 'Abrahan', "Debe ser:\n" . "'Abrahan'");
		// el nombre de este metodo no existe y debe dar error, se espera que de error y genere una exception
	}

}

?>
