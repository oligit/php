<?php
	const EJERCICIO = 'Ejercicio 14b';
	class Index{
		static public function main(){
			require_once 'Encriptador.php';
			if (isset($_POST["texto1"])) {
				$texto = $_POST["texto1"];
				$encriptador = new Encriptador($texto);
				global $salida1;
				$salida1 = $encriptador->encriptar();
			}
		}
	}
	Index::main();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= EJERCICIO?></title>
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
					<textarea name="texto1" id="texto1" cols="30" rows="10"></textarea>
					<input type="submit" value="Enviar">
					<p><?php echo $salida1;?> </p>
					<!-- <div></div> -->
				</div>
			</div>
		</form>
	</div>
</body>
</html>