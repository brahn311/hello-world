<?php
session_start();
if (array_key_exists("sesion",$_POST)) {
	include 'conexion.php';
	//$cadena_consulta="SELECT * FROM usuarios where nombre='$_POST[usuario]' and clave='$_POST[clave]'";
	$cadena_consulta="
		SELECT * FROM usuarios 
		WHERE Alias='$_POST[usuario]' AND clave='$_POST[clave]'
		";
	$resultado_consulta=nueva_consulta($cadena_consulta);
	if ($consulta = pg_fetch_array($resultado_consulta)){
		$_SESSION['user']=$_POST["usuario"];
		$_SESSION['id']=$consulta["id_usuario"];
		$_SESSION['perfil']=$consulta["perfil"];
		header("location: index.php");
		exit();
	}
	else {
		$mensaje = "El usuario o la contrase&ntilde;a son incorrectos";
	}
}
$titulo="Inicio de Sesion";
include 'head.php';
include 'cabecera.php';
include 'barra_navegacion.php'
?>
<body>
	<h1>Iniciar Sesion</h1>
	<p><?php if (isset($mensaje)) echo $mensaje; ?></p>
	<form method="post" action="iniciar_sesion.php" >
		<table>
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="usuario" placeholder=""></td>
			</tr>
			<tr>
				<td><label>Contrase&ntilde;a</label></td>
				<td><input type="password" name="clave" placeholder=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="sesion" value="Entrar"></td>
			</tr>
		</table>
	</form>
	<br>
	<p>&#191;Eres un nuevo usuario&#63; Registrate <a href="registro.php">AQUI</a></p>
	<p>&#191;Olvidaste tu contraseña&#63; Recupera tu contrase&ntilde;a <a href="#">AQUI</a></p>
</body>
<?php
//include 'pie_pagina.php';
//include 'script.js';	
?>
