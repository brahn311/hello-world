<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Tabla del 0 al 10 de potencias</h1>
		<form action="" method="get">
			<label for="exponente">Exponente:
			<input type="text" id="exponente" name="e">
			<input type="submit" name="submit" value="Enviar">
		</form>
		<br>
		<br>
		<?php
		// Validacion de la variable global GET para realizar calculos
		if (isset($_GET["e"])&&(is_numeric($_GET["e"]))) {
			// Recuperando datos de la variable global GET
			$exponente = $_GET["e"];
			for ($i=0; $i < 11; $i++) {
				print "$i<sup>$exponente</sup> = (";
				for ($j=0; $j < $exponente; $j++) {
					if ($j <> 0) {
						echo " x ";
					}
					echo $i;
				}
				echo ") = ". $i ** $exponente ."<br>";
			}
		}
		// Mensaje de error si el valor de parametro no es valido
		else echo "Primero debe insertar el exponente.";
		?>
	</body>
</html>
