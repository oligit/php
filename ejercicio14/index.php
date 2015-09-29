<?php 
	const EJERCICIO = 'Ejercicio 14';
	require_once "Persona.php";
	$salida = '';
	if ($_POST["nombre"] != '' && $_POST["apellido"] != '' && $_POST["fecha"] != '') {
		
		$humano = new Persona($_POST["nombre"], $_POST["apellido"], $_POST["fecha"]);

		$salida = $humano->getNombreCompleto();
		$salida.= ', tiene '.$humano->getEdad();
		$salida.= ' por haber nacido el '.$humano->getFechaNacimiento();
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title><?= EJERCICIO ?></title>
	<link rel="stylesheet" href="../css/main.css">
 </head>
 <body>
 	<header>
		<h1><?= EJERCICIO?></h1>
	</header>
	<div class="main">
		<form action="index.php" method="post">
			<div class="form-inside">
				<div class="margin-0-auto border-gold">
					<input type="text" name="nombre" id="nombre">
					<input type="text" name="apellido" id="apellido">
					<input type="date" name="fecha">
					<input type="submit" value="Enviar">
				</div>
				<p><?= $salida; ?></p>
			</div>
		</form>
	</div>
 </body>
 </html>