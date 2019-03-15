<?php
// tipos de numeros

define("nombre_completo","Abrahan Jose Omaña Oropeza",true);
echo nombre_completo;
//$usuario = nombre_completo;



















$decimal = 1517;
$hexadecimal = 0x5ED; // pueden ser minusculas
$octal = 02755;
echo "<br>";















// declarando decimales
$flotante = 763747.56;
$exponente = 17E23; // pueden ser minusculas
echo "<br>";

$nueva = "0";
$nueva += 2;
$nueva += 1.3;
$nueva = 5 + "20 carros";



















// casting
echo ((0.1 + 0.7)*10),"<br>";



















echo (int) ((0.1 + 0.7)*10),"<br>";





















// booleanos
$cadena = "0";
//$cadena = "";
//$cadena = "a";
//$cadena = 0;
//$cadena = 1;
//$cadena = 9;
if ($cadena) {
	echo "la cadena se eval&uacute;a como -true-.";
}
else {
	echo "la cadena se eval&uacute;a como -false-.";
}

// tipos de datos
echo gettype($cadena); // el resultado es -NULL-


// tambien es el valor asignado luego de unset();
// tambien podemos inicializar una variable al asignarle null cuando no tiene valor especifico
echo $otravariable = null;









$nombre  = $apellido = "";









// llamando a variables usando doble $$ usas el valor como otra variable
$variable = "esto es una cadena";
$cadena = "variable";
echo $$cadena; // mostrara "esto es una cadena"











function f1() {
	echo "esto es f1";
}
function f2() {
	echo "esto es f2";
}

$llamada = "f1";
$llamada(); // llamamos a la funcion con la variable






// constantes
define('usuario','aomana03',true);
echo USUARIO;

// mostrar valores
$otravariablemas = print("esta es otra cadena"); // imprime "esta es otra cadena y a $otravariablemas asigna 1
// print no es una funcion (los parentesis son opcionales)
// print puede formar parte de expresiones complejas
$otravariablemas = null;
echo "esta es otra cadena<br>";

// comandos el sistema operativo
echo `ls -lrta`;














?>
