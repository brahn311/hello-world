<?php
session_start();
include 'conexion.php';
if(!isset($_SESSION["user"])) {
	header("location: iniciar_sesion.php");
	exit();
}
else {
	if (array_key_exists("actualizar",$_POST)) {
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
	}
	$cadena_consulta="
		SELECT * FROM usuarios WHERE id_usuario='$_SESSION[id]'
		";
	$resultado_consulta=nueva_consulta($cadena_consulta);
	$id_usuario = $alias = $nombre = $cedula = $correo = "";
	if ($datos = pg_fetch_array($resultado_consulta)) {
		$id_usuario = $datos["id_usuario"];
		$alias = $datos["alias"];
		$nombre = $datos["nombre"];
		$cedula = $datos["cedula"];
		$correo = $datos["correo"];
		$perfil = $datos["perfil"];
	} else {
		$mensaje = "Error al consultar los datos en la base de datos.";
	}
	$titulo="Inicio";
	include 'head.php';
	include 'cabecera.php';
	include 'barra_navegacion.php';
	//include 'conexion.php';
	?>
	<body>
		<h1>Perfil de Datos Personales</h1>
		<p><?php if (isset($mensaje)) echo $mensaje; ?></p>
		<form method="post" action="perfil.php" >
		<table>
			<tr>
			<td><label>Alias</label></td>
			<td><input readonly type="text" name="usuario" maxlength="8" value="<?php echo $alias; ?>"></td>
			</tr>
			<tr>
			<td><label>Nombre</label></td>
			<td><input readonly type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr>
			<td><label>Cedula</label></td>
			<td><input readonly type="text" name="cedula" value="<?php echo $cedula; ?>"></td>
			</tr>
			<tr>
			<td><label>Correo</label></td>
			<td><input type="text" name="correo" value="<?php echo $correo; ?>"></td>
			</tr>
		</table>
		<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>
		<p>Puedes cambiar tu contrase&ntilde;a <a href="cambiar_clave.php">AQUI</a></p>
		<br>
	</body>
	<?php
	//include 'pie_pagina.php';
	//include 'script.js';
}
?>
</html>