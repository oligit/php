<?php 
	const EJERCICIO = 'Ejercicio 9';
	$paises = array('espana' => 'madrid', 'francia' => 'paris', 'italia' => 'roma');
	$salida = '';
	if ($_POST['capital'] != '') {
		// $clave = array_search($_POST["capital"], $paises);
		$country = $_POST['pais'];
		$capi = $_POST["capital"];
		foreach ($paises as $pais => $capital) {
			if ($paises[$country] == $capi) {
				// echo "La capital de $country es $capi";
				$salida = "La capital de $country es $capi";
				break;
			}else{
				$salida = "Has fallado paleto";
			}
		}
	}
	
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
				<select name="pais" id="pais">
					<option value="espana">España</option>
					<option value="francia">Francia</option>
					<option value="italia">Italia</option>
				</select>
				<input type="text" name="capital" id="capital">
				<input type="submit" value="Comprobar">
			</div>
			<p><?php echo $salida; ?></p>
		</div>
	</form>
	
</div>
	
</body>
</html>