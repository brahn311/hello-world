<?php
echo "<h1>Conceptos Basicos</h1>";
echo "<p>Cadenas</p>";
$cadena1="Programando en PHP";
echo "Esto es texto simple mostrado con ECHO.";
echo "<br>";
echo "Concatenamos un texto con una variable llamada &#36;cadena1 y su valor es: ".$cadena1;
echo "<p>Funciones de Cadenas</p>";
echo "strlen() = ".strlen($cadena1);
echo "<br>";
echo "str_word_count() = ".str_word_count($cadena1)."<br>";
echo "strrev() = ".strrev($cadena1)."<br>";
echo "strpos() 'PHP'  = ".strpos($cadena1,"PHP")."<br>";
echo "str_replace() Programando por Aprendiendo= ".str_replace("Programando","Aprendiendo",$cadena1)."<br>";

echo "<p>Constantes</p>";
define("MENSAJE","CONSTANTE",true);
echo "define(name, value, case-insensitive) = ".     mensaje;
echo "<p>Operadores</p>";
echo "<pre>
Operaciones
+	suma
-	resta
*	multiplicacion
/	division
%	resto
**	potencia

Asignaciones
x = y	/ x = y	
x += y	/ x = x + y
x -= y	/ x = x - y
x *= y	/ x = x * y
x /= y	/ x = x / y
x %= y	/ x = x % y

Comparaciones
==	iqual
===	identico
!=	diferente
<>	diferente
!==	no identico
>	mayor que	
<	menor que		
>=	mayor o igual que
<=	menor o igual que

Incrementadores
++&#36;x	Pre-incrementa
&#36;x++	Post-incrementa
--&#36;x	Pre-decrementa
&#36;x--	Post-decrementa

Logicos
and	And	&#36;x and &#36;y
or	Or	&#36;x or &#36;y
xor	Xor	&#36;x xor &#36;y
&&	And	&#36;x && &#36;y
||	Or	&#36;x || &#36;y
!	Not	!&#36;x
</pre>";
?>