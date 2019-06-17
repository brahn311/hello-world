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
# Contadores

# Leyendo el archivo para usar expresiones regulares
# El archivo posee todos los partidos de futbol

open (my $f, "<../regex/results.csv") or die ("No hay archivo");
# Windows

#
# Linux

printf("Buscaremos los partidos jugados en el mes de febrero de cualquier año\n");
# Titulo

while(<$f>) {
	# Iteramos en cada linea
	# print $_;
	# Prueba de lectura, imprimir la linea del archivo

	chomp;
	# Limpiamos (escapamos) caracteres raros
	
	# Muestra de una linea cualquiera del archivo
	# 2018-06-04,Italy,Netherlands,1,1,Friendly,Turin,Italy,FALSE
	
	if(m/^[\d]{4,4}-02-.*$/){
		# Funcion m (match) para hacer comparaciones. dentro de las barras colocamos la REGEX 
		# "Solo por perl" necesitamos colocar el "\d" dentro de una clase construida
		
		$match++;
		# Incrementar contador de los match
		
		print $_."\n";
		# Imprimir linea del archivo concatenando el salto de linea
	} else {
		$nomatch++;
		# Incrementar contador de los nomatch
	}
}
printf("Se encontraron:\n%d matches\nTiempo: %d\n",$match,time-$t);
# Imprimimos resultados

close($f);
# Cerrando el archivo
