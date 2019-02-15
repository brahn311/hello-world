<?php

/*
require_once ('php_poo_3_1_config.php');
// Metodo anterior para cargar clases, se debia hacer por cada clase
*/

require_once ('php_poo_3_1_autoload.php');
// Metodo dinamico para cargar archivos externos de clases al ser solicitadas y que no esten cargadas previamente

echo Config::ENVIRONMENT . "\n";

?>
