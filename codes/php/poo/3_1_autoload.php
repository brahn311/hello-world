<?php
// para autocargar cada clase que sea invocada, extrayendo el nombre de la clase invocada

// metodo uno, funcion generica (apartir de php 5.3)
spl_autoload_register(function($class){
  include 'php_poo_3_1_' . strtolower($class) . '.php';
});

/*
// metodo dos, funcion definida (puede ser cualquier nombre)
function app_autoloader($class)
{
  include 'php_poo_3_1_' . strtolower($class) . '.php';
}
spl_autoload_register('app_autoloader');
*/

// primer requisito es que el nombre de la clase, sea el nombre del archivo o bien formateado
// podemos definir la ruta de otras carpetas o archivos concatenando luego del include

// spl_autoload_register hacemos que escuchar cada vez que queramos acceder a una clase
// y si no esta cargada, ejecuta la funcion app_autoload

// hice trampa para este ejemplo, pues la clase Config se encuentra en un archivo con texto adicional, en minusculas

?>
