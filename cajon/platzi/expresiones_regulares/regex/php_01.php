<?php
// echo `ls -l`;


$file = fopen("./results.csv", "r");

$match = 0;
$nomatch = 0;

echo "Buscando todos los juegos de Enero 2018.\n";

while(!feof($file))
{
	$line = fgets($file);
	if(preg_match(
		'/^2018\-01\-(\d\d),.*$/',
		# REGEX
		$line,
		# Linea
		$m
		# match
		)
	)
	{
		print_r($m);
		$match++;
	}
	else
	{
		$nomatch++;
	}
	// die;
	# detiene la ejecucion en la primera vuelta 
	# como la primera linea no concuerda, no da salida
}
printf("\nmatch: %d\nnomatch: %d\n",$match,$nomatch);

fclose($file);
