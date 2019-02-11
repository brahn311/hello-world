<?php 
/*
calcular la fecha en que se me acaban las pastillas
anotar como se esta tomando la pastilla
anotar la cantidad de pastillas que poseo
mostrar los dias en que debo tomarme la pastilla
*/

// definicion del tratamiento
$medicamento = "Bactron";
$periodo = "Indefinido";
$cantidad = "2";
$intervalo = array("lunes","miercoles","viernes");
// deficinion del stock del medicamento
$pastillas_en_blister = 10;
$total_de_blisters = 6;
$pastillas_sueltas = 8;
$balance = ($pastillas_en_blister * $total_de_blisters) + $pastillas_sueltas;
// calculo de tomas del medicamento
$tomas = $balance / $cantidad;
// fecha actual como dia inical
$format = "DDMMAAAA";
$fecha = date($format, $timestamp = null);
// calculo del consumo de pastillas
while($balance > 0)
{
	$fecha = $fecha+1;
	// si el dia de la fecha coincide con un dia del intervalo
	if() {
		
		$balance = $balance - $cantidad;
	}	
	// imprimir la fecha y el balance
	echo "fecha: ".$fecha." pastillas restantes: ".$balance; 
}	
?>