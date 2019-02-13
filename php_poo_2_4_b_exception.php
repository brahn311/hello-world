<?php
// el manejo de errores se maneja usando una clase llamada Exception, y tiene sus metodos
// podemos crear una clase hijo y heredar sus metodos para personalizar nuestras propias excepciones

class DBException extends Exception{}

class Main
{
  public function __construct()
  {
    try
    {
      throw new DBException("No hay conexion");
      // throw new Exception("No hay espacio en memoria");
    }

    // como la herencia instancia por igual hijos como padres...
    // para atrapar las excepciones debemos ubicarlas desde lo mas especifico a lo mas general
    catch (DBException $e)
    {
      echo "Error Especifico: " . $e->getMessage() . "\n";
    }

    catch (Exception $e)
    {
      echo "Error Generico: " . $e->getMessage() . "\n";
    }

  }
}

$main = new Main;

?>
