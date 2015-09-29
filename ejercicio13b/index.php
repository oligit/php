<?php
	$string = '{123[567()]}';
	$array;
	
	$encontrados = array();
	$cierres = array();
	for ($i = 0; $i < strlen($string); $i++){
		$temp = $string[$i];
		if (ereg('{', $temp)){
			array_push($encontrados, $string[$i]);
			array_push($cierres, '}');
		}
		if (ereg('\(', $temp)){
			array_push($encontrados, $string[$i]);
			array_push($cierres, ')');
		}
		if (ereg('\[', $temp)){
			array_push($encontrados, $string[$i]);
			array_push($cierres, ']');
		}
		
	}