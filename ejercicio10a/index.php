<?php
const EJERCICIO = 'Ejercicio 10 a';
require_once('Calculadora.php');
function load(){
	
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
					num1.innerHTML = 'El factorial no funsiona tt pta bida';
					num1.disabled = true;
					num2.disabled = true;
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
							<option value="suma">+</option>
							<option value="resta">-</option>
							<option value="multiplicacion">*</option>
							<option value="division">/</option>
							<option value="potencia">^</option>
							<option value="factorial">!</option>
						</select>
						<input type="number" name="num2" min="0" id="num2">
						<input type="hidden" name="estado" value="1">
						<input type="submit" name="enviar" value="=">
					</div>
				</form>
				<label for="resultado"></label><p><?= calculadora();?></p>
			</div>
		</div>
	
</div>
</body>
</html>