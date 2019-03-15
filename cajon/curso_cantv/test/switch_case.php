<a href="switch_case.php?operador=suma">Sumar</a><br>
<a href="switch_case.php?operador=resta">Restar</a><br>
<a href="switch_case.php?operador=multiplicacion">Multiplicar</a><br>
<a href="switch_case.php?operador=division">Dividir</a><br>
<?php
if (isset($_GET["operador"])) {
    $operador = $_GET["operador"];
}
else {
    $operador="suma";
}
$a=5;
$b=5;
switch ($operador) {
    case "resta":
        $resultado = $a-$b;
        $operador = "-";
        break;
    case "multiplicacion":
        $resultado = $a*$b;
        $operador = "*";
        break;
    case "division":
        $resultado = $a/$b;
        $operador = "/";
        break;
    default:
        $resultado = $a+$b;
        $operador = "+";
}
echo $a,$operador,$b."=".$resultado;
?>
       