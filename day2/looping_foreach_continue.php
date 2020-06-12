
<?php 

	echo "<b>Looping Foreach</b><br><br><br>";

	$array = array(1,2,3,4,5);
	
	echo "<b>Looping Foreach dengan Continue</b><br>";

	$lengthArray = count($array); //mengetahui panjang array
	echo 'panjang array = '.$lengthArray.' <br>';

	foreach($array as $value)
	{ 
	
		if ($value < 3){ //kondisi tertentu
			continue; //untuk melewati kondisi ttp tetap melanjutkan proses (foreach tetap dilanjutkan)			
		}
		echo 'Value = '.$value.', ';
	}


?>