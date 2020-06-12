
<?php 

	echo "<b>Looping Foreach</b><br><br><br>";

	$array = array(1,2,3,4,5);
	
	var_dump($array); //untuk mencetak output ke browser, lebih tepatnya mengetahui informasi pada suatu nilai variable
	echo '<br><br><br>';



	foreach($array as $value){ 
		echo 'Value = '.$value.', ';
	}
	echo '<br><br><br>';



	//atau bisa menggunakan looping for dengan menambahkan variable untuk mengetahui panjang array dan memanggilnya menggunakan index array

	$lengthArray = count($array); //mengetahui panjang array
	echo 'panjang array = '.$lengthArray.' <br>';

	for($i=0; $i<$lengthArray; $i++) {
		echo 'Value = '.$array[$i].', '; //yang diperhatikan $array[$i] (index arraynya)
	}



	echo '<br><br><br>';
	echo "<b>Looping Foreach dengan Break</b><br>";

	foreach($array as $value){ 
		echo 'Value = '.$value.', ';
		if ($value ==3){ //kondisi tertentu
			break; //untuk menghentikan proses (disini proses foreach dientikan)
		}
	}



?>