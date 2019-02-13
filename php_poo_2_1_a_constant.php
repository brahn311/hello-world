<?php
class Config
{
  const DB_USER_NAME = 'aomana03';
  const DB_USER_PASSWORD = '1234';
  const DB_DATABASE_NAME = 'mydb';
  // por norma en poo en php, las constantes se declaran en mayusculas, pero no es una regla
}

class BaseProfile extends Config
{

}

class Profile extends BaseProfile
{
  const DOMAIN_NAME = 'abrahanredsocial.com';

  public function __construct()
  {
    echo "Conectando a " . self::DB_DATABASE_NAME;
  }

}

$perfil = new Profile;
echo "\n";

?>
