<?php
const EJERCICIO = 'Ejercicio 11 a';
include 'Calculadora.php';

function dale(){
	$salida = ($_POST["num1"] != '' && $_POST["estado"] == 1) ? true : false ;
	return $salida;
}
function calcular()
{
	$html = '';
	if (dale()){
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$calculadora = new Calculadora($num1, $num2);
		$html = $calculadora->calcular($_POST["operacion"]);
	}
	return $html;
}


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
			var op = document.getElementById('select');
			var num1 = document.getElementById('num1');
			var num2 = document.getElementById('num2');
			op.addEventListener('click', borraSi, false);
			function borraSi(){
				if (op.value == 'factorial'){
					console.dir(num2);
					num1.disabled = true;
					num2.disabled = true;
					num1.innerHTML = 'El factorial no funsiona tt pta bida';
				};
			};
		};
	</script>
</head>
<body>

<header>
	<h1><?= EJERCICIO?></h1>
</header>
<div class="main">
		<div class="form-inside">
			<div class="margin-0-auto border-gold">
				<h2>Array pintado con un for</h2>
				
				<br>
				<form action="index.php" method="post">
					<div class="margin-0-auto border-gold">
						<input type="number" name="num1" min="0" id="num1">
						<select name="operacion" id="select">
							<option value="sumar">+</option>
							<option value="restar">-</option>
							<option value="multiplicar">*</option>
							<option value="dividir">/</option>
							<option value="potencia">^</option>
							<option value="factorial">!</option>
						</select>
						<input type="number" name="num2" min="0" id="num2">
						<input type="hidden" name="estado" value="1">
						<input type="submit" name="enviar" value="=">
					</div>
				</form>
				<label for="resultado"></label><p><?php echo calcular(); ?></p>
			</div>
		</div>
	
</div>
</body>
</html>