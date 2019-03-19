<?php
session_start();
//error_reporting(E_PARSE);
if (array_key_exists("registro",$_POST)) {
	include 'conexion.php';
	unset($_POST["registro"]);
	if($_POST["usuario"]=="") {
		$error_usuario=1; 
	} else {
		$cadena_consulta="
			SELECT alias FROM usuarios WHERE (alias ='$_POST[usuario]')
			";
		$resultado_consulta=nueva_consulta($cadena_consulta);
		if ($consulta = pg_fetch_array($resultado_consulta)){
			$error_usuario = 2;
		}
	}
	if($_POST["cedula"]=="") $error_cedula=1; else {
		$cadena_consulta="
			SELECT cedula FROM usuarios WHERE (cedula ='$_POST[cedula]')
			";
		$resultado_consulta=nueva_consulta($cadena_consulta);
		if ($consulta = pg_fetch_array($resultado_consulta)){
			$error_cedula = 2;
		}
	}
	if($_POST["nombre"]=="") $error_nombre=1;
	if(($_POST["clave"][1]=="")||($_POST["clave"][2]=="")) $error_clave=1;
	if($_POST["clave"][1]<>$_POST["clave"][2]) $error_clave=2; else $clave=$_POST["clave"][1];
	if($_POST["correo"] =="") $error_correo=1;
	if ((!isset($error_usuario))&&
		(!isset($error_clave))&&
		(!isset($error_nombre))&&
		(!isset($error_cedula))&&
		(!isset($error_correo))){
		$cadena_consulta="
			INSERT INTO usuarios (alias, nombre, cedula, correo, clave, perfil) 
			VALUES ('$_POST[usuario]','$_POST[nombre]','$_POST[cedula]','$_POST[correo]','$clave','1')
			";
		$resultado_consulta=nueva_consulta($cadena_consulta);
		if ($resultado_consulta){
			$mensaje = "Ya estas registrado. Ingresa con tu Alias y la Contrase&ntilde;a.";
		}
		else {
			$mensaje = "Error al registrar los datos en la base de datos, intente nuevamente."; 
		}
	} else {
		$mensaje = "Existen errores en los datos suministrados, intente nuevamente.";
	}
}
$titulo="Nuevo Usuario";
include 'head.php';
include 'cabecera.php';
include 'barra_navegacion.php';
?>
<body>
	<h1>Registro de Nuevo Usuario</h1>
	<p><?php if (isset($mensaje)) echo $mensaje; ?></p>
	<form method="post" action="registro.php" >
	<table>
		<tr>
		<td><label>Alias</label></td>
		<td><input type="text" name="usuario" placeholder="Ingresa tu alias" maxlength="8"></td>
		<td><?php 
			if (isset($error_usuario)) {
				switch ($error_usuario) {
					case 1: echo "*El alias es requerido"; break;
					case 2: echo "*El alias no se encuentra disponible"; break;
				}
			}
			?></td>
		</tr>
		<tr>
		<td><label>Nombre</label></td>
		<td><input type="text" name="nombre" placeholder="Ingresa tu nombre"></td>
		<td><?php if (isset($error_nombre)) echo "*El nombre es requerido"; ?></td>
		</tr>
		<tr>
		<td><label>Cedula</label></td>
		<td><input type="text" name="cedula" placeholder="Ingresa tu Cedula"></td>
		<td><?php 
			if (isset($error_cedula)) {
				switch ($error_cedula) {
					case 1: echo "*La cedula es requerida"; break;
					case 2: echo "*La cedula ya se encuentra registrada"; break;
				}
			}
			?></td>
		</tr>		
		<tr>
		<td><label>Contrase&ntilde;a</label></td>
		<td><input type="password" name="clave[1]" placeholder="Ingresa tu contraseña" maxlength="8"></td>
		<td><?php if (isset($error_clave)&&($error_clave==1)) echo "*La contraseña es requerida"; ?></td>
		</tr>
		<tr>
		<td><label>Confirme su Contrase&ntilde;a</label></td>
		<td><input type="password" name="clave[2]" placeholder="Repite tu contraseña" maxlength="8"></td>
		<td><?php if (isset($error_clave)&&($error_clave==2)) echo "*Ambas contraseñas deben ser iguales."; ?></td>
		</tr>
		<tr>
		<td><label>Correo</label></td>
		<td><input type="text" name="correo" placeholder="Introduce tu correo"></td>
		<td><?php if (isset($error_correo)) echo "*El correo es requerido"; ?></td>
		</tr>
	</table>
	<input type="submit" name="registro" value="Registrar">
	</form>
	<br>
	<p>Si ya estas registrado, ya puedes iniciar sesion <a href="index.php">AQUI</a></p>
</body>
<?php
//include 'pie_pagina.php';
//include 'script.js';	
?>
</html>