<pre>
<?php
$c = array("G","H","I");
$a = array("A","B","C");
$arreglo8 = array_merge($a,$c);


$clave_aleatoria = array_rand($arreglo8,3); 
foreach ($clave_aleatoria as $valor) {
	echo $arreglo8[$valor];
}



















/*
$arreglo[] = array("a","b","9","c","8");
$arreglo[] = array("1","3","d","u","7");
$arreglo[] = array("e","2","f","g","h");
$arreglo[] = array("5","i","j","4","k");
$arreglo[] = array("x","y","w","6","z");

if (isset($_REQUEST['o'])) {
	$suma_numeros = $contadorletra = 0;
	$mostrarvocal = "";
	$vocales=array("a","e","i","o","u");
	for ($i = 0;$i<5; $i++){
		for ($j= 0; $j<5;$j++) {
			if (is_numeric($arreglo[$i][$j])) {
				$suma_numeros += $arreglo[$i][$j];
				$arreglo[$i][$j] *= $arreglo[$i][$j]; 
			}
			else {
				$contadorletra++;
				foreach ($vocales as $vocal){
					if ($arreglo[$i][$j]==$vocal)
						$mostrarvocal .= $arreglo[$i][$j].", ";
				}
				$arreglo[$i][$j] = $contadorletra;
			}
			echo $arreglo[$i][$j]," ";
		}
		echo "<br>";
	}
	echo $suma_numeros," total de la suma de numeros.<br>" ;
	echo $contadorletra, " letras.<br>" ;
	echo $mostrarvocal," son las vocales encontradas.<br>";
}
else {
	$suma_numeros = $contadorletra = 0;
	$mostrarvocal = "";
	//print_r($arreglo);
	for ($i = 0;$i<5; $i++){
		for ($j= 0; $j<5;$j++) {
			if (is_numeric($arreglo[$i][$j])) {
				$suma_numeros += $arreglo[$i][$j];
				$arreglo[$i][$j] *= $arreglo[$i][$j]; 
			}
			else {
				$contadorletra++;
				switch($arreglo[$i][$j]){
					case "a":case "e":case "i":case "o":case "u":
					$mostrarvocal .= $arreglo[$i][$j].", ";
					break;
				}
				$arreglo[$i][$j] = $contadorletra;
			}
			echo $arreglo[$i][$j]," ";
		}
		echo "<br>";
	}
	echo $suma_numeros," numeros.<br>" ;
	echo $contadorletra, " letras.<br>" ;
	echo $mostrarvocal," son las vocales encontradas.<br>" ;
}
*/
?>
</pre>