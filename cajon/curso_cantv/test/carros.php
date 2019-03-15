<?php
$carros = array("BMW","DODGE","PORCHE","FERRARI","LAMBORGHINI");
echo count($carros)."<br>";
	foreach ($carros as $indice => $marca) {
		echo $indice." = ".$marca."<br>";

		$pisos = "1 2 3 4 5 6 7 8 9"
		$edificio = explode(" ", $pisos);
	}
	echo "<br>Ordenando<br><br>";
for ($i=0 ; $i<5; ++$i){	
	switch ($i) {
		case 0: 
			echo strtoupper("sort")."<br>".str_repeat("-.=",10)."<br>";
			sort($carros);

			echo $arreglo =implode(", ",$carros);
			
			break;
		case 1: 
			echo strtoupper("rsort")."<br>".str_repeat("-.=",10)."<br>";
			rsort($carros);
			echo $arreglo =implode(", ",$carros);
			break;
		case 2: 
			echo strtoupper("asort")."<br>".str_repeat("-.=",10)."<br>";
			asort($carros);
			echo $arreglo =implode(", ",$carros);
			break;
		case 3: 
			echo strtoupper("ksort")."<br>".str_repeat("-.=",10)."<br>";
			ksort($carros);
			echo $arreglo =implode(", ",$carros);
			break;
		case 4: 
			echo strtoupper("arsort")."<br>".str_repeat("-.=",10)."<br>";
			arsort($carros);
			echo $arreglo =implode(", ",$carros);
			break;
		case 5: 
			echo strtoupper("krsort")."<br>".str_repeat("-.=",10)."<br>";
			krsort($carros);
			echo $arreglo =implode(", ",$carros);
			break;
	}
echo "<br><br>";
}
?>
