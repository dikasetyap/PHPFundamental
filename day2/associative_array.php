
<?php 
	$gaji = [
		'budi' => 2000000,
		'tono' => 1000000,
		'gadis'=> 2500000
	];

	//cara 1
	echo 'gaji budi  = '.$gaji['budi'].'<br>';
	echo 'gaji tono  = '.$gaji['tono'].'<br>';
	echo 'gaji gadis = '.$gaji['gadis'].'<br>';

	//cara 2
	echo'<br> Akses menggunakan foreach<br>';
	foreach ($gaji as $key => $value) {
	echo 'gaji '.$key.' adalah '.$value. '<br>';
	}

?>