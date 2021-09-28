<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Convertir el N&uacute;mero decimal a N&uacute;mero Binario</h1>
		<form action="" method="get">
			<!-- Formulario para convertir numeros naturales a numeros binarios -->
			<label for="numero">Inserte el numero a convertir:
			<input type="text" id="numero" name="n">
			<!-- Los datos se enviaran y seran recibidos por la misma pagina (form recursivo)-->
			<input type="submit" name="submit" value="Calcular">
		</form>
		<br>
		<br>
		<?php
			// Validacion de la variable global GET para realizar calculos
			if (isset($_GET["n"])&&(is_numeric($_GET["n"]))) {
				// Recuperando datos de la variable global GET
				$n = $_GET["n"];
				// Iniciando las variables
				$i = 0;
				// Los digitos binarios se guardaran en la matriz
				$b = array();
				// Bucle para realizar los calculos
				while ($n > 1) {
					$i++;
					echo "Vuelta $i...";
					echo " - Dividendo: $n";
					// Calculando el resto de la division
					$r = $n % 2;
					echo " - Resto: ". $r;
					// Calculando y almacenando el cociente entero
					$n = intdiv($n,2);
					echo " - Cociente: $n <br>";
					// Almacenando el resto para formar el numero binario
					$b[] = $r;
				}
				// Añadiendo el cociente (menor al numero 2)
				$b[] = $n;
				// Invirtiendo el orden de los vectores de la matriz
				krsort($b);
				// Mostrando mensaje con resultados
				echo "<br>El numero: ".$_GET["n"]." es: ";
				foreach ($b as $key => $value) echo $value;
				echo " en binario.";
			}
			// Mensaje de error si los datos no son validos
			else echo "Primero debe insertar el numero.";
		?>
	</body>
</html>
