<!DOCTYPE html>
<html>
<head>
	<title>Prueba de formulario</title>
</head>
<body>

	<?php
	if (isset($_GET["usuario"])){
		unset($_GET["usuario"]);
		foreach ($_GET as $indice => $valor) {
			if ($valor=="on")
				echo "programa: {$indice}<br>";
				// echo "programa: ".$indice."<br>";
			else

				echo $indice.": ".$valor."<br>";
		}
/*		
		foreach ($_GET as $valor) {
			echo $valor."<br>";
		}
		echo "nombre: ".$_GET["nombre"]."<br>";
		echo "hora: ".$_GET["hora"]."<br>";
		echo "identificacion: ".$_GET["identificacion"]."<br>";
		echo "contrasena: ".$_GET["contrasena"]."<br>";
		echo "seccion: ".$_GET["seccion"]."<br>";
		echo "pais: ".$_GET["pais"]."<br>";
		echo "comentarios: ".$_GET["comentarios"]."<br>";
		$programas ="";
		if (isset($_GET["java"]))
			$programas .= "java";
		if (isset($_GET["cmasmas"])) {
			if($programas<>"") $programas .= ",";
			$programas .= "cmasmas";
		}
		if (isset($_GET["c"])) {
			if($programas<>"") $programas .= ",";
			$programas .= "c";
		}
		if (isset($_GET["csharp"])) {
			if($programas<>"") $programas .= ",";
			$programas .= "csharp";
		}
		// "java,cmasmas,c csharp"
		echo "programas conocidos: ".$programas;
*/
	}
	else {
		?>
	<!-- Mostrar formulario si no hay parametros previos por POST -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
	<!-- input -->
		<label for="nombre">Ingrese su nombre</label>
		<input type="text" name="nombre" size="20">
		<br>
		<input type="hidden" value="10:20" name="hora">
		<br>
		Identificacion
		<input readonly type="text" name="identificacion" value="12345" size="20">		
		<br>
		Contrase&ntilde;a
		<input type="password" name="contrasena">
		<br>
		<!-- Radio -->
		Seleccione la secci&oacute;n donde desea ingresar:
		<br>
		<input type="radio" name="seccion" value="1" required>Ni&ntilde;os<br>
		<input type="radio" name="seccion" value="2">Adolescentes<br>
		<input type="radio" name="seccion" value="3">Mayores<br>
		Seleccione los lenguajes que conoce:
		<br>
		<!-- checkbox -->
		<input type="checkbox" name="java" >Java<br>
		<input type="checkbox" name="cmasmas">C++<br>
		<input type="checkbox" name="c">C<br>
		<input type="checkbox" name="csharp">C#<br>
		<!-- select -->
		Seleccione su pais:
		<select name="pais" required>
			<option disabled selected>Seleccione uno</option>
			<option value="1">Argentina</option>
			<option value="2">Espa&ntilde;a</option>
			<option value="3">M&eacute;xico</option>
			<option value="4">Guatemala</option>
			<option value="5">Honduras</option>
			<option value="7">El Salvador</option>
			<option value="8">Venezuela</option>
			<option value="9">Colombia</option>
			<option value="10">Cuba</option>
			<option value="11">Bolivia</option>
			<option value="13">Per&uacute;</option>
			<option value="14">Ecuador</option>
			<option value="15">Paraguay</option>
			<option value="16">Uruguay</option>
			<option value="17">Chile</option>
		</select>
		<br>
		<!-- textarea -->
		Observaciones:<br>
		<textarea name="comentarios" rows="5" cols="60" placeholder="Escriba aqu&iacute;"></textarea>
		<br>
		<input type="submit" value="enviar" name="usuario">
	</form>
	<?php
	}
	?>
</body>
</html>
