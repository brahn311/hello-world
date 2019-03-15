<?php 
$b=rand(1,10);# numero b
$o="+";/* operador */
?>
<!DOCTYPE html>
<html>
<head>
<title>Tabla del <?php echo $b; ?> </title>
</head>
<body>
  <table>
  <?php
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
	?>
	</table>
</body>
</html>