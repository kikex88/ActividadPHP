<?php require("datos.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actividad</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="top">
		<h2 class="titulo">Nombre:</h2>
		<span>
			<?php echo $nombre; ?>
		</span>

		<h2 class="titulo">Carne:</h2>
		<span>
			<?php echo $carne; ?>
		</span>

		<h2 class="titulo">Asignatura:</h2>
		<span>
			<?php echo $asignatura; ?>
		</span>
	</div>

	<hr>

	<div class="content-box">
		<h3>opinion de la programación:</h3>
		<p>
			<?php echo $opinion; ?>
		</p>
	</div>

	<hr>

	<div class="content-box">
		<h3>Vacaciones:</h3>
		<p>
			<?php echo $vacaciones; ?>
		</p>
	</div>

</body>
</html>