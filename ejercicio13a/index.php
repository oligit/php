<?php
	require_once 'array.php';
	echo "Entra en index <br>";
	for ($i = 0; $i<=count($alibro); $i++){
		echo '*';
		echo $aLibro[$i][título_original];
		for ($j = 0; $j<count($aLibro[$i]); $j++){
			echo '#';
			echo mb_strtoupper(str_replace("_", " ", key($aLibro[$i])), "UTF-8");
			echo current($aLibro[$i]);
		}
		echo "<hr>";
	}
?>