<?php

class Person
{
	public $age;
	public $name;

	// accion que realiza la clase...
	public function run()
	{
		echo " Estoy corriendo\n";
	}

	// el objeto de dicha clase puede realizar muchas acciones
	// correctamente se dice que "un objeto puede poseer multiples metodos"

	public function walk()
	{
		echo " Estoy caminando\n";
	}

	public function greet( $other_person )
	{
		echo " Saludos para " . $other_person . "\n";
	}

	// constructor de la clase "Person" recibiendo sus atributos de entrada
	// metodo que se ejecuta al momento de instanciar un nuevo objeto de dicha clase
	// es usado para generar un comportamiento especial a cada objeto
	// aunque no es obligatorio usarlo
	public function __construct()
	{
		// bloque de instrucciones
		echo " Estoy siendo creado " . rand(1,99) . "\n";
	}
}

// ciclo para instanciar objetos de la clase "Person"
for ($i = 0;$i < 5;$i++)
{
		$person = new Person();
}

$person->run();
$person->walk();
$person->greet('Marco');

?>
