<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<?php  
		$d = date("D"); //date adl librarynya PHP (D = parameter tanggal)

		var_dump($d); //untuk mencetak output ke browser, lebih tepatnya mengetahui informasi pada suatu nilai variabel (disini variable d)

		echo "<br> Kondisi If Else<br>";
		if ($d == "Fri") {
			echo "Have a nice weekend!<br>";
		}	else {
			echo "Have a nice day!<br>";
		}


		echo "<br> Kondisi If Else If<br>"; //persyaratan lebih dari 1
		if ($d == "Fri") {
			echo "Have a nice weekend!<br>";
		}	else if($d == "Wed"){
			echo "Today is wednesday<br>";
		}   else {
			echo "Have a nice day!<br>";
		}

		$nilai_akhir = 90;
		echo 'Nilai akhir = '.$nilai_akhir.'<br>';

		/*
		Persyaratannya :
		A = 90 sd 100
		B = 80 sd 89
		C = 70 sd 79
		D = < 70
		*/

		if ($nilai_akhir >= 90 && $nilai_akhir <=100){
			echo 'Nilai anda A';
		} else if ($nilai_akhir >= 80 && $nilai_akhir <=89){
			echo 'Nilai anda B';
		} else if ($nilai_akhir >= 70 && $nilai_akhir <=79){
			echo 'Nilai anda C';
		} else {
			echo 'Nilai anda D';
		}
	?>
</body>
</html>
