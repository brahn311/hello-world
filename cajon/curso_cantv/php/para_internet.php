
Felicidades!
Al fin creo que no hablaremos mas de teoria!
Creen una nueva carpeta llamada: "proyecto"
primer archivo php: iniciar_sesion.php
alli deben hacer un formulario con

usuario
contraseña

solo con html.
se acuerdan de como hacerlo no? suerte!!!





















<form method="post" action="usuario2.php" >
<input name="lenguaje" type="checkbox" value="php">php
<input name="lenguaje" type="checkbox" value="perl">perl
<input name="lenguaje" type="checkbox" value="java">java
<input name="lenguaje" type="checkbox" value="html">html
<input name="lenguaje" type="checkbox" value="js">js
<input name="lenguaje" type="checkbox" value="otros">otros
<input type="submit" value="Enviar" name="f1">
</form>

<form method="post" action="usuario2.php" >
<input name="lenguaje[]" type="checkbox" value="php">php
<input name="lenguaje[]" type="checkbox" value="perl">perl
<input name="lenguaje[]" type="checkbox" value="java">java
<input name="lenguaje[]" type="checkbox" value="html">html
<input name="lenguaje[]" type="checkbox" value="js">js
<input name="lenguaje[]" type="checkbox" value="otros">otros
<input type="submit" value="Enviar" name="f2">
</form>

<form method="post" action="usuario2.php" >
<input name="lenguaje[0]" type="checkbox" value="php">php
<input name="lenguaje[1]" type="checkbox" value="perl">perl
<input name="lenguaje[2]" type="checkbox" value="java">java
<input name="lenguaje[3]" type="checkbox" value="html">html
<input name="lenguaje[4]" type="checkbox" value="js">js
<input name="lenguaje[5]" type="checkbox" value="otros">otros
<input type="submit" value="Enviar" name="f3">
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  //...
}

// include
include 'filename';
//o
require 'filename';













//headers
header("location: www.google.co.ve");
exit();


$_SESSION

//session
session_start();










session_name("nombre_sesion");
session_id();
session_register("v1");
$_SESSION["v1"] = $variable;
session_is_registered();

session_unset(); 
session_destroy(); 


