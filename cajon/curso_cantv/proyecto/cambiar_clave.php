<?php
session_start();
include 'conexion.php';
if(!isset($_SESSION["user"])) {
	header("location: iniciar_sesion.php");
	exit();
}
else {
	if (array_key_exists("actualizar",$_POST)) {
		/*
		$cadena_consulta="SELECT * FROM usuarios where id_usuario='$_SESSION[id]'";
		$resultado_consulta=nueva_consulta($cadena_consulta);
		if ($consulta = pg_fetch_array($resultado_consulta)){
			if ($_POST["correo"]<>$consulta["correo"]) {
				$cadena_consulta="
					UPDATE usuarios SET correo='$_POST[correo]' WHERE id_usuario='$_SESSION[id]'
					";
				$resultado_consulta=nueva_consulta($cadena_consulta);
				if ($consulta = pg_fetch_array($resultado_consulta)){
					$mensaje = "Error al actualizar los datos.";
				}
				else {
					$mensaje = "Los datos han sido actualizados correctamente.";
				}
			}
		}
		*/
	}
	$titulo="Inicio";
	include 'head.php';
	include 'cabecera.php';
	include 'barra_navegacion.php';
	?>
	<body>
		<h1>Actualizar Clave</h1>
		<p><?php if (isset($mensaje)) echo $mensaje; ?></p>
		<form method="post" action="cambiar_clave.php" >
		<table>
			<tr>
				<td><label>Contrase&ntilde;a Actual</label></td>
				<td><input type="password" name="clave_actual" placeholder="Introduce tu contraseña" maxlength="8"></td>
			</tr>
			<tr>
				<td><label>Nueva Contrase&ntilde;a</label></td>
				<td><input type="password" name="clave[1]" placeholder="Ingresa nueva contraseña" maxlength="8"></td>
			</tr>
			<tr>
				<td><label>Confirme su Contrase&ntilde;a</label></td>
				<td><input type="password" name="clave[2]" placeholder="Repite la contraseña" maxlength="8"></td>
			</tr>
		</table>
		<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>
		<p>Puedes cambiar tus datos personales <a href="perfil.php">AQUI</a></p>
	</body>
	<?php
	//include 'pie_pagina.php';
	//include 'script.js';
}
?>
</html>