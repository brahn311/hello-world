<?php
class indestructible
{
  public function __construct($name)
  {
    $this->name = $name;
    echo "Creada la clase: " . $this->name . "\n";
  }

  public function __destruct()
  // metodo que se ejecuta automaticamente cuando regularmente cuando se llega al final del script
  // o tambien cuando se llama explicitamente el destructor de la instancia, o se escribe "exit();"
  // su funcion es liberar recursos o hacer alguna accion en especifico
  {
    print "Destruyendo la clase: " . $this->name . "\n";
  }
}

$instIndestructible = new Indestructible("Indestructible");
$instdestructible = new Indestructible("Destructible");

$fin = rand(0,50);
if ($fin < 5)
{
  exit();
  // Prueba para detener todo por medio de un exit()
}

echo "Deneter en: " . $fin . "\n";

for ($i = 0; $i < 60; $i++)
{
  echo "$i \n";
  if ($i == $fin)
  {
    unset($instIndestructible);
    // Prueba para destruir una instancia a una clase por unset()
  }
}

// al finalizar el script, cuando ya no hay mas referencias a instancias, estos se destruyen

?>
