<?php

	echo "<h2>Logical Operator</h2><br><br>";

	$tes_tpa = 70;
	$tes_bhs_inggris = 85;

	echo "<b>Logical AND </b><br>";
	if ($tes_tpa > 70 && $tes_bhs_inggris>70){
		echo "Selamat anda lulus tes masuk perusahaan";
	} else {
		echo "Mohon maaf anda belum lulus tes masuk";
	}

	echo "<br>";	
	echo "<br><b>Logical OR </b><br>";
	if ($tes_tpa > 70 || $tes_bhs_inggris>70){
		echo "Selamat anda lulus tes masuk perusahaan";
	} else {
		echo "Mohon maaf anda belum lulus tes masuk";
	}

	echo "<br>";
	echo "<br><b>Logical NOT </b><br>";

	$x = true;
	if (!$x) {
		echo "false";
	}	else {
		echo "true";
	}
?>
