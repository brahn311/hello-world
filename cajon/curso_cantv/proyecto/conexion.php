<?php
function nueva_conexion(){
	$user = 'postgres';
	$passwd = '1234';
	$db = 'proyecto';
	$port = 5432;
	$host = 'localhost';
	$cadena_conexion = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$conexion = pg_connect($cadena_conexion) or die ("Error de conexion. ". pg_last_error());
	return $conexion;
}
function nueva_consulta($cadena_consulta) {
	$conexion = nueva_conexion();
	$resultado = pg_query($conexion,$cadena_consulta);
	return $resultado;
	pg_close($conexion);
}
?>