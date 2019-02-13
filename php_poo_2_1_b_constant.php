<?php
class Config
{
  const ENVIRONMENT = 'production';
  // la utilidad practica es tener definidos datos que no cambiaran en toda la ejecucion
  // y tener todos los datos de configuracion en un solo sitio
}

class BaseProfile extends Config
{
  protected function connect2DB()
  {
    if ( self::ENVIRONMENT == 'production')
    {
      echo "Conectando a ambiente de produccion";
    }
    if ( self::ENVIRONMENT == 'development')
    {
      echo "Conectando a ambiente de desarrollo";
    }
    if ( self::ENVIRONMENT == 'staging')
    {
      echo "Conectando a ambiente de preproduccion";
    }
  }

  public function __construct()
  {
    // este constructor no se ejecuta dado a que el nieto tiene su propio constructor
    $this->connect2DB();
  }
}

class Profile extends BaseProfile
{
  const DOMAIN_NAME = 'abrahanredsocial.com';

  public function __construct()
  {
    $this->connect2DB();
  }

}

$perfil = new Profile;
echo "\n";

?>
