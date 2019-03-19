<?php
if (empty($_SESSION)) {
	session_start();
	echo "No se habia iniciado la sesion.";
}
else {
	echo "Las variables de sesion ya se encuentran activas.";
}
echo "<br>".$_SESSION['usuario_red'];
?>