#!/usr/bin/perl
# Linux

# Video_22
# Perl

use strict;
use warnings;
# Practica de expresiones regulares usando perl

my $t = time;
# Creando variable para capturar el tiempo inicail de proceso

my $match=0;
my $nomatch=0;
my $error=0;
# Contadores

# Leyendo el archivo para usar expresiones regulares
# El archivo posee todos los partidos de futbol

open (my $f, "<../regex/results.csv") or die ("No hay archivo");
# Windows

#
# Linux

printf("Buscaremos cada vez que ganen los visitantes\n");
# Titulo

while(<$f>) {
	# Iteramos en cada linea
	# print $_;
	# Prueba de lectura, imprimir la linea del archivo

	chomp;
	# Limpiamos (escapamos) caracteres raros
	
	# Muestra de una linea cualquiera del archivo
	# 2018-06-04,Italy,Netherlands,1,1,Friendly,Turin,Italy,FALSE
	# 1---       2---- 3---------- 4 5
	
	if(m/^([\d]{4,4}).*?,(.*?),(.*?),(\d+),(\d+),.*$/){
		# Funcion: m (match) hace comparaciones, dentro de las barras // colocamos la REGEX 
		# "Solo por perl" necesitamos colocar el "\d" dentro de una clase construida
		if($5>$4){
			$match++;
			# Incrementar contador de los match
			
			printf ("%d: %s (%d) - (%d) %s\n",$1,$2,$4,$5,$3);
			# Imprimir linea los datos extraidos y salto de linea
		} else {
			$nomatch++;
			# Incrementar contador de los nomatch
		}
	} else {
		$error++;
		# Incrementamos contador de errores
	}
}
printf("Results:\n%d matches\n%d nomatch\nTime %d\nErrors %d\n",$match,$nomatch,time-$t,$error);
# Imprimimos resultados

close($f);
# Cerrando el archivo
