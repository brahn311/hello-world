<nav>
	<ul>
	<?php
	// $pagina formato: array("TITULO","RUTA_DOCUMENTO","PERFIL VALIDO");
	$pagina = array(
		array("Iniciar Sesion","iniciar_sesion.php","0"),
		array("Registrate","registro.php","0"),
		array("Inicio","index.php","1"),
		array("Cuentas","cuentas.php","1"),
		array("Movimientos","movimientos.php","1"),
		array("Listado de Usuarios","usuarios.php","2")
		);
	foreach ($pagina as $enlace){
		list($titulo,$ruta,$perfil_requerido) = $enlace;
		if (!isset($_SESSION["perfil"])) {
			if ($perfil_requerido == 0)
				echo '<li><a href="'.$ruta.'">'.$titulo.'</a></li>';
		}
		else {
			if (($perfil_requerido <> 0)&&($perfil_requerido <= $_SESSION["perfil"]))
				echo '<li><a href="'.$ruta.'">'.$titulo.'</a></li>';
		}
	}
	?>
	</ul>
</nav>