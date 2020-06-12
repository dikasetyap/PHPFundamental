<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<body>
	<a href="calculator.php">Back</a> <br>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$angka1 = $_POST["angka1"];
			$angka2 = $_POST["angka2"];
			$operator = $_POST["operator"];
			if($operator == '+') {
				$result = $angka1+$angka2; 
				echo 'Hasil Perhitungan '.$angka1.' dan '.$angka2.' adalah '.$result;
				} else if ($operator == '-') {
					$result = $angka1-$angka2;
					echo 'Hasil Perhitungan '.$angka1.' dan '.$angka2.' adalah '.$result;
					} else if ($operator == 'x') {
						$result = $angka1*$angka2;
						echo 'Hasil Perhitungan '.$angka1.' dan '.$angka2.' adalah '.$result;
						} else if ($operator == '/') { 
							$result = $angka1/$angka2;
							echo 'Hasil Perhitungan '.$angka1.' dan '.$angka2.' adalah '.$result;
						} else {//untuk cek 
							echo 'Anda Belum Pilih operator <br>';
						}
		}	

	?>
</body>
</html>