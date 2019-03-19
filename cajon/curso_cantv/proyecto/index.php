<?php
session_start();
include 'conexion.php';
if(!isset($_SESSION["user"])) {
	header("location: iniciar_sesion.php");
	exit();
}
else {
	// aqui se colocan los script php requeridos en la pagina

	$titulo="Inicio";
	include 'head.php';
	include 'cabecera.php';
	include 'barra_navegacion.php';
	//include 'conexion.php';
	?>
	<body>

	</body>
	<?php
	//include 'pie_pagina.php';
	//include 'script.js';
}
?>
</html>