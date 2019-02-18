<?php
class Profile
{
  // atributos publicos: podemos acceder a ellos y verlos
  public $name;
  public $last_name;

  private $email;
  // si dejamos public email, el usuario podra colocar correos invalidos
  // los atributos privados pueden ser usados cuando no interesa que los atributos sean visibles o accesibles

  public function __construct($name,$last_name,$email)
  {
    $this->name = $name;
    $this->last_name = $last_name;
    $this->setEmail($email);
  }

  // atributo privado, no podemos acceder directamente, solo mediante un metodo
  public function setEmail($email)
  {
    // podriamos incorporar reglas de validacion
    $this->email = $email."@gmail.com";
  }
  public function getEmail()
  {
    return $this->email;
  }
}

$perfil= new Profile('Abrahan','Omana','abrahannn311');
echo $perfil->name . " " .$perfil->last_name;
echo "\n";

echo $perfil->getEmail();
echo "\n";
?>
