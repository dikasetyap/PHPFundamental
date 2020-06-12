<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$nilai = 70;
		echo 'Nilai Anda = '.$nilai;
		switch (true)
		{
			case ($nilai < 60) :
				echo '<br>Anda Tidak Lulus';
				break;
			case ($nilai >= 60 && $nilai < 69 ) :
				echo '<br>Grade Anda C';
				break;
			case ($nilai >= 70 && $nilai < 79) :
				echo '<br>Grade Anda B';
				break;
				default : 
			echo '<br>Grade Anda A';
		}
	?>

</body>
</html><?php

?>