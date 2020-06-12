
<?php 

	echo "<b>Looping Do While</b><br><br>";

	$i = 0; 	
	$a = 0;
	do {
		$i++;
		$a += 10;
		print $i." <br>";
		print $a." <br>";
		print "<br>";
	} while( $i < 10);
	{
		/*looping dimulai dani nilai i = 0 sd i < 10
			jadi looping ke 0, i = 0 + 1 = 1
				 looping ke 1, i = 1 + 1 = 2
				 looping ke 2, i = 2 + 1 = 3
				 looping ke 3, i = 3 + 1 = 4
				 looping ke 4, i = 4 + 1 = 5
				 looping ke 5, i = 5 + 1 = 6
				 looping ke 6, i = 6 + 1 = 7
				 looping ke 7, i = 7 + 1 = 8
				 looping ke 8, i = 8 + 1 = 9
				 looping ke 9, i = 9 + 1 = 10
		*/
	}

	echo 'Nilai i adalah '.$i.' dan a = '.$a; //beda nya kalau pakai ' atau "
	echo "<br>";
	echo "Nilai i adalah $i dan a = $a ";
?>