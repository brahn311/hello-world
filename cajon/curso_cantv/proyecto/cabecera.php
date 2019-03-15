<header>
	<p>
	<?php
	if(isset($_SESSION["user"])) {
		echo "Bienvenido ";
		?>
		<a href="perfil.php"><?php echo $_SESSION["user"]?></a>
		<a href="salir.php">salir</a>
		<?php
	}
	else {
		echo "Si no eres usuario puedes registrarte";
	}
	?>
	</p>
</header>