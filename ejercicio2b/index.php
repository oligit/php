<?php
	const EJERCICIO = 'Ejercicio 2b';
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	function potencia($base, $exp){
		return $base**$exp;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
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
				<input type="number" name="num1" min="0">
				<input type="number" name="num2" min="0">
				<input type="hidden" name="estado" value="1">
				<input type="submit" value="Calcular potencia">
				<p>
					<?php 
						if (isset($_POST["estado"]) && $_POST["estado"] == 1){
							echo potencia($num1, $num2);
						}
					?>
				</p>
			</div>
		</div>
	</form>
	
</div>
	
</body>
</html>