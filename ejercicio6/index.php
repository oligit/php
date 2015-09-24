<?php
$array = array(0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

const EJERCICIO = 'Ejercicio 6';
echo `ls -l`;
function pintaArray($a){
	for ($i = 0; $i<count($a); $i++){
		echo "<li>$a[$i]</li>";
	}
}
function pintarArray2(){
	if ($_POST["num1"] != '' && $_POST["estado"] == 1){
		$array2 = array();
		$j = 0;
		for ($i = 0; $i<$_POST["num1"]; $i++){
			if ($i%2 == 0) {
				$array2[$j] = $i;
				echo "<li>$array2[$j]</li>";
				$j++;
			}
		}
	}
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
		<div class="form-inside">
			<div class="margin-0-auto border-gold">
				<h2>Array pintado con un for</h2>
				<ul>
					<?php pintaArray($array); ?>
				</ul>
				<br>
				<form action="index.php" method="post">
					<div class="margin-0-auto border-gold">
						<input type="text" name="num1" min="0">
						<input type="hidden" name="estado" value="1">
						<input type="submit" name="enviar" value="Pedir números pares">
					</div>
				</form>
				<ul>
					<?php pintarArray2(); ?>
				</ul>
			</div>
		</div>
	
</div>
</body>
</html>