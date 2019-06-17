<?php
// echo `ls -l`;


$file = fopen("./results.csv", "r");

$match = 0;
$nomatch = 0;
$t = time();

echo "Buscando todos empates de la historia en selecciones nacionales.\n";

while(!feof($file))
{
	$line = fgets($file);
	
	# date,home_team,away_team,home_score,away_score,tournament,city,country,neutral
	# 2018-06-03,South Africa,Madagascar,0,0,COSAFA Cup,Polokwane,South Africa,FALSE
	# ejemplo de linea

	# date,      home_team,   away_team, home_score,away_score,tournament,city,     country,     neutral
	# 2018-06-03,South Africa,Madagascar,0,         0,         COSAFA Cup,Polokwane,South Africa,FALSE

	// echo $line."\n"; die;

	if(preg_match(
		'/^(\d{4}-\d\d-\d\d),(.+),(.+),(\d+),(\d+).*$/i',
		# REGEX
		$line,
		# Linea
		$m
		# match (array con todos los resultados [0] => toda la line [1...] => grupos
		)
	)
	{
		$match++;

		// print_r($m);
		# imprime todos los valores del arreglo

		if ($m[4] == $m[5])
		{
			
			print("Empate, ");
		}
		else if($m[4] > $m[5])
		{
			print("Locales, ");
		}
		else
		{
			print("Visitante, ");

		}

		//printf("%s,%s,%s,%d,%d\n",$m[1],$m[2],$m[3],$m[4],$m[5]);
		printf("%s %d, %s %d\n",$m[2],$m[4],$m[3],$m[5]);	
		
	}
	else
	{
		$nomatch++;
		// echo $line."\n";
	}
	// die;
	# detiene la ejecucion en la primera vuelta 
	# como la primera linea no concuerda, no da salida
}


printf("\nmatch: %d\nnomatch: %d\ntime: %s\n\n", $match, $nomatch, time()-$t);

fclose($file);
