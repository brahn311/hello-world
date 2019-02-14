<?php

class Person
{
	private $name;
	private $last_name;
	
	public function __construct($name, $last_name)
	{
		$this->name = $name;
		$this->last_name = $last_name;
	} 
	
	// funcion magica para mantener la funcionalidad al acceder a una instancia como texto 
	public function __toString()
	{
		return $this->name . " " . $this->last_name . "\n";
	}
}

$persona = new Person('Abrahan', 'Omana');
echo $persona;
// como $persona es una instancia, deberiamos un error acceder a ella como si fuera una variable
// a menos que usemos la funcion magica para convertir instancia como si fuera una cadena de texto

?>
