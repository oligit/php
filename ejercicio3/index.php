<?php
	const EJERCICIO = 'Ejercicio 3';
	const CAMBIO = 1.115002469;
	$salida = '';
	$ok = false;
	fun
	if (isset($_POST["estado"]) && $_POST["estado"] == 1){
		$ok = true;
		if ($_POST["select"] == 'dTe'){
			$salida = ($_POST["num1"] / CAMBIO).' €';
		}else if($_POST["select"] == 'eTd'){
			$salida = ($_POST["num1"] * CAMBIO).' $';
		}else{
			$salida = 'algo has hecho mal, máquina, que ereh un máquina';
		}
		function pinta(){
			return $_POST["num1"];
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
				<input type="number" name="num1" min="0" value="<?php if (isset($_POST["estado"]) && $_POST["estado"] == 1){ echo pinta();}?>">
				<select name="select">
					<option value="dTe">Dólares a Euros</option>
					<option value="eTd">Euros a Dólares</option>
				</select>
				<input type="hidden" name="estado" value="1">
				<input type="submit" value="Calcular cambio">
				<p>
					<?=$salida	?>
				</p>
			</div>
		</div>
	</form>
</div>
</body>
</html>
