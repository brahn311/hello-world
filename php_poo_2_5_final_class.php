<?php
// cuando se desarrollan clases heredadas podemos crear padre, hijo, nieto, bisnieto...

class Pet
{
  public $type;
  public $name;
}

class Dog extends Pet
{
  protected $breed;
}

final class Golden extends Dog
// las clases finales se usan para evitar continuando con el uso excesivo de la herencia
{
  public function __construct($name)
  {
    $this->name = $name;
    $this->type = "Perro";
    $this->breed = "golden";
  }

  public function howIAm()
  {
    echo "Mi nombre es: " . $this->name ."\n";
    echo "Soy un: " . $this->type ."\n";
    echo "Mi raza es: " . $this->breed ."\n";
  }
}

// class other_breed extends Golden{}
// si algun pariente en posee su clase como final, y no permite crear mas hijos de ella

$golden = new Golden('Tommy');
echo $golden->howIAm();
?>
