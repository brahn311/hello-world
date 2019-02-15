<?php

class Pet
{
  public $name;

  public function __construct($name)
  {
    $this->name  = $name;
    echo "Aqui tenemos a " . $this->name . "\n";
  }
}

class Person
{
  public $name;

  // el objeto de la clase persona puede adoptar un objeto de la clase mascosa
	public function adopt(Pet $mascota)
	{
		echo $this->name . " esta adoptando a " . $mascota->name . "\n";
	}

	public function __construct($name)
	{
    $this->name = $name;
		echo "Bienvenido " . $this->name . "\n";
	}
}

$person1 = new Person('Abrahan');
$person2 = new Person('Franyer');

$pet1 = new Pet('Marxcelino');
$pet2 = new Pet('Julio');

$person1->adopt($pet1);
$person2->adopt($pet2);

?>
