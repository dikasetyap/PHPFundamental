<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
</head>
<body>
	<form method="POST" action="hasil_calculator.php">
		<input type="text" name="angka1" required>
		<select name="operator" required>
			<option selected="selected">-Pilih Operator-</option>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="x">x</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="angka2" required>
		<input type="submit" name="submit" value="Hitung">

</body>
</html>

