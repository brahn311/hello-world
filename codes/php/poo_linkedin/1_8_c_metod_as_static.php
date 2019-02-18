<?php
error_reporting(-1);

class DBStatic
{
  // la accesibilidad protected permite que los atributos pueden ser accedidos por herencia
  protected static $db_user = 'aomana03';
  protected static $db_password = '1234';
  protected static $db_database_name = 'PHP_OO_BD';

  protected static function conect()
  {
    echo "Conectando con: " . self::$db_user .":". self::$db_password .":". self::$db_database_name;
  }
}

class BaseProfile extends DBStatic
{
  public function __construct()
  {
    self::conect();
    echo "\n";
  }
}

Class Profile extends BaseProfile
{
  // comentar para que pueda acceder al constructor padre
  /*
  public function __construct()
  {
    self::conect();
    echo "\n";
  }
  */

  public function check()
  {
    echo "Accediendo a metodo\n";
  }
}

// $perfil = new Profile;

Profile::check();
// por motivos funcionales php aun permite acceder de manera estatica a los metodos de una instancia de un objeto
// esto es un error y no deberia realizarce
// si se tiene activo mostrar todos los errores, si se muestra la advertencia.

?>
