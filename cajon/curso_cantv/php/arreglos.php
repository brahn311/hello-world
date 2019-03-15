<pre>
<?php
$arreglo1 = array("Amarillo","Azul","Rojo");

$arreglo2[] = "Amarillo";
$arreglo2[] = "Azul";
$arreglo2[] = "Rojo";

















//comentarios de indices, que sucedera con un arreglo con indice [1] y ["1"]?

// matrices profundas

$arreglo3 = array("Amarillo",array("Azul","Estrellas"),"Rojo");

$arreglo3[] = "Amarillo";
$arreglo3[] = array("Azul","Estrellas");
$arreglo3[] = "Rojo";

$arreglo3[1][0]=="Azul";
$arreglo3[1][1]=="Estrellas";
$arreglo3[2]=="Rojo";









$hermana=array("maria","whendy","carolina");
$hermanas=array(2);
$hermanas=array(2);
$hermanas=array(2,1);









// cual sera el indice para modificar el espacio donde esta "Estrellas"?















$clave =10;
$arreglo4[10] = "elemento 1";
$arreglo4["$clave"] = "elemento 2";
$arreglo4['$clave'] = "elemento 3";
print_r($arreglo4);

// cual es la diferencia de usar comillas dobles o simples en las variables como indices de un arreglo?












$b = array("3"=>"D","4"=>"E","5"=>"F");
$c = array("G","H","I");
$r1 = $a + $b;
$r2 = $a + $c;
// cuales serian los resultados?

$r3 = array_diff($a,$c);
// array_diff_assoc(); // diferenciacion clave-valor
// array_diff_key(); // diferenciacion solo claves
print_r($r3);

$r4 = array_intersect($a,$c);
// array_intersect_assoc(); // interseccion clave-valor
// array_intersect_key(); // interseccion solo claves
print_r($r4);












$d = array(0=>"D",1=>"E",2=>"F");
$e = array(1=>"D",0=>"E",2=>"F");
var_dump ($d == $e);
echo "<br />";
var_dump ($d === $e);


$a = array("A","B","C");
$f = array("a","B","c");
var_dump ($a > $f);
echo "<br />";
var_dump ($a < $f);















$g = 1;
$h = "cadena";
echo $h[1];


echo "Elementos en la matriz f: ".count($f)."<br>";
echo "Elementos en la matriz g: {count($g)}<br>";
echo "Elementos en la matriz h: {count($h)}<br>";
var_dump (is_array($f));
var_dump (is_array($g));
var_dump (is_array($h));














var_dump (array_key_exists(4,$f));

foreach($f as $letra) {
    if ($letra == "B") {
        echo "El valor \"B\" existe en la matriz;
        break;
    }
}
var_dump (in_array("B",$f));

list($color1, $color2, $color3) = $arreglo2;
echo "color n1:{$color1}<br>";
echo "color n2:{$color2}<br>";
echo "color n3:{$color3}<br>";

$arreglo6 = array("x","y","z");
$arreglo6 = array(1,2,3);
$arreglo6 = array(array(1,2,3),array(4,5,6),array(1,8,9));
foreach ($arreglo6 as $clave => $bloque) {
    list($x,$y,$z) = $bloque;
    echo "x{$clave}: {$x}<br>";
    echo "y{$clave}: {$y}<br>";
    echo "z{$clave}: {$z}<br>";
}

array_flip($a);
array_reverse($a);
$i = implode(" - ",$a);
$j = "A,B,C,D,E,F,G,H"; $k = explode(",",$j,3);
shuffle($j);
$arreglo7 = array_combine($a,$arreglo);
$arreglo8 = array_merge($a,$c);
$clave_aleatoria = array_rand($arreglo8,1); echo $arreglo8[$clave_aleatoria];

$matriz1 = array(10,11,12,13,14,15,16,17,18,19);
$matriz2 = range (10,19);
$matriz3 = range (19,10);
$matriz4 = range ("a","h");
$matriz5 = range ("h","a");
$matriz6 = range (0,100,10);

?>
</pre>