<?php 
	require_once 'Botella.php';

	$botella1 = new Botella(40, 'whisky', 'Red Label');
	$botella2 = new Botella(37.5, 'Ginebra', 'Bombay Sapphire');
	$botella3 = new Botella(37.5, 'Ron', 'Brugal');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/main.css">
	<script>
		window.onload = main;
		function main() {

		};
	</script>
</head>
<body>

<header>
	<h1><?= EJERCICIO?></h1>
</header>
<div class="main">
	<h2>Botella 1</h2>
	<?= $botella1->getBotella(); ?>
	 <h2>Botella 2</h2>
	 <?= $botella2->getBotella(); ?>
	 <h2>Botella 3</h2>
	 <?= $botella3->getBotella(); ?>
</div>
</body>
</html>