<?php
class BaseProfile
{
  // el acceso protegido permite que los hijos puedan acceder al atributos y metodos del padre
  protected $connection_data = 'Conexion BD';
  protected function connect2db()
  // No tenemos acceso a los atributos y metodos private si se ejecuta el constructor desde el hijo
  {
    echo $this->connection_data;
  }

}

Class Profile extends BaseProfile
{
  public $name;

  public function __construct()
  {
    $this->connect2db();
  }

}

$ins_conn = new Profile;
echo "\n";

?>
