<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<?php  
		
		/*
		Persyaratannya :
		Grade < 60 = Tidak Lulus
		Grade 60 sd 69 = C
		Grade 70 sd 79 = B
		Grade 80 sd 100 = A
		*/

		$nilai = 90;
		echo 'Nilai Anda = '.$nilai.'<br>';

		if ($nilai < 60){
			echo 'Anda Tidak Lulus';
		} else if ($nilai >= 60 && $nilai < 69){
			echo 'Grade Anda C';
		} else if ($nilai >= 70 && $nilai <=79){
			echo 'Grade Anda B';
		} else {
			echo 'Grade Anda A';
		}	

		/*
		atau 
		if ($nilai >= 80 && $nilai <=100){
			echo 'Grade Anda A';
		} else if ($nilai >= 70 && $nilai_akhir <=79){
			echo 'Grade Anda B';
		} else if ($nilai >= 60 && $nilai_akhir <=76){
			echo 'Grade Anda C';
		} else {
			echo 'Anda Tidak Lulus';
		}
		*/
	?>
</body>
</html>
