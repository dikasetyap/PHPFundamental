
<?php 

	echo "<b>Looping For</b><br><br>";

	$a = 0; 
	$b = 0;
	
	for( $i=0; $i<5; $i++ ) {
		$a += 10; //$a=a+10
		$b += 5;  //$a=a+5

		/*looping dimulai dani nilai i = 0 sd i < 5
			jadi looping ke 0, a = 0 + 10 = 10
				 looping ke 1, a = 10 + 10 = 20
				 looping ke 2, a = 20 + 10 = 30
				 looping ke 3, a = 30 + 10 = 40
				 looping ke 4, a = 40 + 10 = 50

			begitupula b
				 looping ke 0, b = 0 + 5 = 5
				 looping ke 1, b = 5 + 5 = 10
				 looping ke 2, b = 10 + 5 = 15
				 looping ke 3, b = 15 + 5 = 20
				 looping ke 4, b = 25 + 5 = 30
		*/		

	} 
	
	echo 'Hasil akhir a = '.$a.' dan b = '.$b; //beda nya kalau pakai ' atau "
	echo "<br>";
	echo "Hasil akhir a = $a dan b = $b";
?>