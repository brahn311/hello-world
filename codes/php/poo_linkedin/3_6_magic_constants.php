<?php

trait myUtilities
{
	function sayMyName()
	{
		if (!($this->name))
		{
			Logger::log(
						'Error. Debe tener nombre. Error en el archivo ' . __FILE__
						. ', en la linea ' . __LINE__
						. ', en la clase ' . __CLASS__
						. ', en el metodo ' . __METHOD__
						. ', en el trait ' . __TRAIT__
			);
			throw new Exception('No tiene Nombre');
		}
		echo "My name is " . $this->name ."\n";
	}
}

class Logger
{
	public static function log($text)
	{
		$prefix = date('d-m-Y- h:i:s ::: ');
		file_put_contents('3_6_log.txt', $prefix . $text . "\n", FILE_APPEND);
	}
}

abstract class Animal
{
	abstract function makesound();
	public function run()
	{
		Logger::log(
					'Informacion. ha sido ejecutada una accion en el archivo ' . __FILE__
					. ', en la linea ' . __LINE__
					. ', en la clase ' . __CLASS__
					. ', en el metodo ' . __METHOD__
					. ', en el trait ' . __TRAIT__
		);
		echo "Corriendo\n";
	}
}

class Dog extends Animal
{
	use myUtilities;

	//public $name = "Marxcelino";

	public function makesound()
	{
		Logger::log(
					'Informacion. ha sido ejecutada una accion en el archivo ' . __FILE__
					. ', en la linea ' . __LINE__
					. ', en la clase ' . __CLASS__
					. ', en el metodo ' . __METHOD__
					. ', en el trait ' . __TRAIT__
		);
		echo "Guauf\n";
	}
}

class Cat extends Animal
{
	use myUtilities;

	public $name = "Luna";

	public function makesound()
	{
		Logger::log(
					'Informacion. ha sido ejecutada una accion por el archivo ' . __FILE__
					. ', en la linea ' . __LINE__
					. ', en la clase ' . __CLASS__
					. ', en el metodo ' . __METHOD__
					. ', en el trait ' . __TRAIT__
		);
		echo "Miau\n";
	}
}

$instDog = new Dog;
$instCat = new Cat;

$instDog->sayMyName();
$instCat->sayMyName();
$instCat->run();
$instDog->makeSound();

?>
