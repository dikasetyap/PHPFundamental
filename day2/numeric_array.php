
<?php 
	//cara pertama deklarasi array
	$data = [1,2,3,4,5,'enam'];
	//

	foreach ($data as $val){
		echo 'value = '.$val.'<br>';
	}

	echo "<br>";
	foreach ($data as $key => $val){//$key => adl variable untuk memanggil index array 
		echo 'value index ke-'.$key. ' = '.$val.'<br>';
	}


	//cara ke-2 dekalrasi array dengan indexnya
	$number[0] = 'satu';
	$number[1] = 'dua';
	$number[2] = 'tiga';
	array_push($number, 'empat'); //array_push untuk melanjutkan deklarasi array tana tahu index ke berapa
	array_push($number, 'lima');
	//

	echo '<br>';
	foreach ($number as $key => $value){//$key => adl variable untuk memanggil index array 
		echo 'value index ke-'.$key. ' = '.$value.'<br>';
	}
	
?>