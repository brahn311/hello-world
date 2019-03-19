<?php 
$error=0;
if (isset($_GET["n"])) {
  $b=$_GET["n"];# numero recibido por la pagina anterior
} else {
  $error=1; // iniciamos $error con 1
}
$o="+";/* operador */
?>
<!DOCTYPE html>
<html>
<head>
<title>Tabla del <?php echo $b; ?> </title>
</head>
<body>
<a href="enlaces.php">regresar</a>
  <?php
  if ($error==0) {
    echo "<table>";
    for ($i=0; $i < 11; $i++) 
    { 
      $r=$i+$b;
      echo "<tr>
              <td>$i</td>
              <td>+</td>
              <td>$b</td>
              <td>=</td>
              <td>$r</td>
            </tr>";
    }
    echo "</table>";
  } else {
    echo "Enlace incorrecto, faltan datos";
  }
  ?>
</body>
</html>