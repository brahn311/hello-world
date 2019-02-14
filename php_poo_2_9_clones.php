<?php

class DB
// esta clase implementa el patron de diseño "singleton" (instancia unica)
// busca que exista una y solo una intancia de dicha clase
{
  private static $instance;

  public $name = '';

  public static function getInstance()
  {
    if (null === static::$instance)
    {
      static::$instance = new static();
    }

    return static::$instance;
  }

  protected function __construct(){}

  //agregamos un metodo para acceder al nombre de la instancia estatica
  public function getName()
  {
    return $this->name . "\n";
  }

}

// $mysql = new DB;
// nos marca el error, debido al patron se evita que el usuario realize una nueva instancia con el new
// lo que busca es que usemos el metodo estatico getInstance

$mysql = DB::getInstance();
$oracle = DB::getInstance();
$postgresql = DB::getInstance();
// cambiamos el nombre solo a $mysql
$mysql->name = "MySQL";

// pero volveremos a mostrar el nombre de $mysql
echo "Monstrando todos los nombres (1):\n";
echo "MySQL : " . $mysql->getName();
echo "Oracle : " . $oracle->getName();
echo "PostgreSQL : " . $postgresql->getName();
// el patron hace que sean la misma instancia (no es una copia nueva, es una referencia a la misma instancia)

// cambiando el nombre de oracle
echo "cambiando nombre solo a oracle\n";
$oracle->name = "Oracle";

echo "Monstrando todos los nombres (2):\n";
echo "MySQL : " . $mysql->getName();
echo "Oracle : " . $oracle->getName();
echo "PostgreSQL : " . $postgresql->getName();
// volvemos a ver que se cambiaron todos los nombres

// sustituimos el valor de $postgresql
echo "Usando clone y cambiando nombre a postresql\n";
$postgresql = clone $mysql;
$postgresql->name = "PostgreSQL";

echo "Monstrando todos los nombres (3):\n";
echo "MySQL : " . $mysql->getName();
echo "Oracle : " . $oracle->getName();
echo "PostgreSQL : " . $postgresql->getName();
// ahora vemos que usando clone solo cambiamos $postgresql siendo este en si una instancia distina e independiente

?>
