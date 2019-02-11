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
$intervalo = array("Mon","Wed","Fri");

// deficinion del stock del medicamento
$pastillas_en_blister = 10;
$total_de_blisters = 6;
$pastillas_sueltas = 8;
$balance = ($pastillas_en_blister * $total_de_blisters) + $pastillas_sueltas;

// calculo de tomas del medicamento
$tomas = $balance / $cantidad;

// formatos para las fechas
$dma = "d-m-o";
$amd = "Y-m-d";
$d = "D";

// fecha actual como dia inical
$time = time();
echo "Inicio: ". $inicio = date($dma, $time) . "\n";

$day = strtotime(date($amd,$time));
$i = 0;

// calculo del consumo de pastillas
while($balance > 0)
{
	// si el dia de la fecha coincide con un dia del intervalo
	if (in_array(date($d,$day),$intervalo))
	{
		// contador de tomas
		$i++;
		// actualizar el balance de pastillas
		$balance = $balance - $cantidad;
		// imprimir la fecha y el balance restante
		echo "Toma $i: ". date($dma, $day) . " Restan: " .$balance. "\n";
	}
	// redifinir la fecha al dia siguiente
	$day = strtotime("1 days",$day);
}

?>
