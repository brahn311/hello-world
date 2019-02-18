<?php
// crear una nueva clase llamada "Person"
class Person
{
	// atributos publicos de la clase "Person"
	public $age;
	public $name;

	// creando un metodo para la clase "Person"
	// accion que realiza la clase...
	public function run()
	{
		echo " Estoy corriendo";
	}

	// constructor de la clase "Person" recibiendo sus atributos de entrada
	public function __construct($name, $age)
	{
		// con los atributos de entrada recibidos se construye el objeto
		$this->age = $age;
		$this->name = $name;
	}
}

// primer objeto instancia de la clase "Person" con $name y $age
$person1 = new Person('Bernardo',10);
// mostrando el atributo $name del objeto $person1 de clase "person"
echo $person1->name;
// llamando al metodo (funcion) run para el objeto $person1
$person1->run();

// salto de linea
echo "\n";

// segundo objeto, instancia de la clase "Person" con $name y $age
$person2 = new Person('Marcos', 24);
// mostrando el atributo $name del objeto $person2 de clase "Person"
echo $person2->name;
// llamando al metodo (funcion) run para el objeto $person2
$person2->run();

// salto de linea
echo "\n";
?>
