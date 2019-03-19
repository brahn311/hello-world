<?php
$sexo = "masculino";
if ($sexo == "femenino" ) {
	echo "es mujer";
}
else {
	echo "es hombre";
}
echo "<br>";













$a =3;
$b =5;
if (($a%2==0)&&($b%2==0)){
	echo "ambos numeros son pares";
}elseif (($a%2<>0)&&($b%2<>0)) {
	echo "ambos numeros son impares";
}else{
	echo "un numero es par y el otro impar";
}
echo "<br>";












$edad = 9;
if ($edad<13) {
	echo "es infante";
}elseif ($edad<18) {
	echo "es adolescente";
}elseif ($edad<55) {
	echo "es adulto";
}else {
	echo "es anciano";
}
echo "<br>";










$n=1;
$r=$n%2;


switch ($r) {
	case 0:
		echo $n," es par";
		break;
	default:
		echo $n," es impar";
		break;
}
echo "<br>";











switch ($edad) {
	case $edad<18: echo "menor de edad"; break;
	case $edad<60: echo "adulto"; break;
	default:
		echo "anciano";
		break;
}
echo "<br>";













$c = "o";
if (($c == "a")||($c == "e")||($c == "i")||($c == "o")||($c == "u")){
	echo "es una vocal";
}elseif (($c == "0")||($c == "1")||($c == "2")||($c == "3")||($c == "4")||($c == "5")||($c == "6")||($c == "7")||($c == "8")||($c == "9")) {
	echo "es un numero";
}else{
	echo "es una consonante";
}
echo "<br>";













switch ($c) {
	case 'a': case 'e':	case 'i': case 'o': case 'u':
		echo "es una vocal";
		break;
	case '0':
	case '1':
	case '2':
	case '3':
	case '4':
	case '5':
	case '6':
	case '7':
	case '8':
	case '9':
		echo "es un numero";
		break;
	default:
		echo "es una consonante";
		break;
}
echo "<br>";



















// entre dos variables $a1 = 1; $a2 ="1";
// cual es la diferencia entre == y ===





















// Quien es mayor: "Norte" o "Sur"





















// Compara dos variables numericas iguales y trata de mostrar el resultado

// bucles

for ($i =0; $i < 10; $i++){
	for ($j =0; $j< 10; $j++) {
		if ($j%2!=0) 
			echo $i,"...",$j,"<br />";
	}
}















// donde esta el if, luego de la condicion añade:
// continue; 
// continue 2;
// break;
// break 2;




















?>