<?php
class BaseProfile
{
  private $connection_data = 'Conexion BD';
  private function connect2db()
  {
    echo $this->connection_data;
  }

  public function __construct()
  {
    $this->connect2db();
  }
}

// funciona cuando queremos acceder desde la clase BaseProfile
// tambien funciona en caso de que Profile sea hijo de BaseProfile
// (invierta los comentarios para probar)

class Profile
// Class Profile extends BaseProfile
{
  public $name;
}

$ins_conn = new BaseProfile;
//$ins_conn = new Profile;
echo "\n";

?>
