
<?php 
	$nilai = [
		'budi' => 
		['matematika' => 70, 'bhs indonesia' => 80, 'bhsinggris' => 90],

		'tono' => 
		['matematika' => 60, 'bhs indonesia' => 70, 'bhsinggris' => 80],

		'gadis' => 
		['matematika' => 55, 'bhs indonesia' => 75, 'bhsinggris' => 95],
	];

	
	echo"<b>Menampilkan Nilai Matematika dengan Nilai >=60 :</b><br><br>";
	foreach ($nilai as $key => $value) {
		foreach ($value as $k => $v) {
			if($k == 'matematika' && $v >=60) {
				echo "Nama : ".$key." , Nilai Matematika : ".$v."<br>";
			};
		};
	};
		
	echo '<br>';
		
?>