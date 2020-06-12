<?php
	echo "<h2>Operator Comparison</h2><br><br>";

	$a = 2; // interger
	$b = "2"; //string


	echo "<b>Equal </b><br>";

	if ($a == $b) {
		echo "value sama<br>";
	} else {
		echo "value tidak sama<br>";
	}

	/*
	echo "<br>";
	//mengecek tipe data juga
	if ($a === $b) {
		echo "value sama";
	} else {
		echo "value tidak sama";
	}
	*/


	echo "<br><b>Tidak Sama </b><br>";
	
	if ($a != 1) {
		echo 'value $a adalah ' .$a.' tidak sama dengan 1<br>';
	} else {
		echo 'value $a adalah ' .$a.'<br>';
	}


	echo "<br><b>Lebih dari </b><br>";
	
	if ($a > 1) {
		echo 'value $a adalah ' .$a.' lebih dari 1<br>';
	} else {
		echo 'value $a adalah ' .$a.'<br>';
	}


	echo "<br><b>Kurang dari </b><br>";
	
	if ($a < 1) {
		echo 'value $a adalah ' .$a.' kurang dari 1<br>';
	} else {
		echo 'value $a adalah ' .$a.'<br>';
	}



	echo "<br><b>Lebih dari sama dengan </b><br>";
	
	if ($a >= 2) {
		echo 'value $a adalah ' .$a.'<br>';
	} else {
		echo 'value $a adalah ' .$a.'<br> bukan lebih dari sama dengan 2';
	}


	echo "<br><b>Kurang dari sama dengan </b><br>";
	
	if ($a <= 2) {
		echo 'value $a adalah ' .$a.'<br>';
	} else {
		echo 'value $a adalah ' .$a.'<br> bukan kurang dari sama dengan 2';
	}



?>
