<?php
$file = fopen(".\regex\results.csv", "r");

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
}
printf("\nmatch: %d\nnomatch: %d\n",$match,$nomatch);

fclose($file);