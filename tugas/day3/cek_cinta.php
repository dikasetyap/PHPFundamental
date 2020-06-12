<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cek Seberapa Cinta</title>
</head>
<body>
	<a href="cinta.php">Back</a> <br>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$siapa = $_POST["sukasiapa"];
			$seberapa = $_POST["berapa"];
			for( $i=0; $i<$seberapa; $i++ ) {
				echo 'Saya Cinta '.$siapa.'<br>';
			}

		}
	?>
</body>
</html>