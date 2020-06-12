
<?php 
	$nilai = [
		'tono' => 
		['matematika' => 70, 'fisika' => 80, 'biologi' => 60],

		'gadis' => 
		['matematika' => 80, 'fisika' => 50, 'biologi' => 75],

		'budi' => 
		['matematika' => 80, 'fisika' => 50, 'biologi' => 75],
	];

	//cara 1 cetak satu satu 
	echo 'nilai matematika tono adalah '.$nilai['tono']['matematika'];

	//cara 2 menggunakan foreach
	echo'<br><br>  Akses menggunakan foreach<br>';
	foreach ($nilai as $key => $value) {
		if($key == 'tono') {
			foreach ($value as $k => $v) {
				echo 'Nilai '.$k.' '.$key.' adalah '.$v.'<br>';
		};
		echo '<br>';
		}
	}
?>