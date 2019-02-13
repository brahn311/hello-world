<?php
// el manejo de errores se maneja usando una clase llamada Exception, y tiene sus metodos
// la cual, no detiene la ejecucion del codigo, a pesar de que se genere un error.

/*
// creando una exception generica
throw new Exception("No hay archivo de configuracion");
// ello genera automaticamente un mensaje muy grande por parte de php pero incluye el mensaje que marcamos
*/

// tratando de realizar un bloque de instruccion
try
{
  // generando un excepcion
  throw new Exception("No hay archivo de configuracion");
}
// atrapando la excepcion creada
catch(Exception $e)
// el catch tiene como validacion aceptar una instancia de Exception y la almacena en $e
{
  // podemos mostrar un mensaje, ademas podemos recuperar el mensaje de esa exception con el metodo getMessage() para $e
  echo "Hubo un error. " . $e->getMessage() . "\n";
}
finally
// para cuando es necesario ejecutar algo extra, a pesar de que hubo una exception
{
  echo "Cerrando DB\n";
}
?>
