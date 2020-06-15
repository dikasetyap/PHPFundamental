<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
		<a href="view.php">Lihat Data User</a>
		<br/><br/>

		<form action="tambah_data.php" method="post" name="form1">
			<table width="25%" border ="0">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
		</form>
</body>
</html>
<?php 
	// check if form submitted, insert from data into user table.
	if (isset($_POST['submit'])){
		$nama = strtoupper($_POST['nama']);
		$alamat = strtoupper($_POST['alamat']);	

		//include database connection file
		include_once("koneksi.php");

		$result=mysqli_query($connect, "INSERT INTO user(nama,alamat) VALUES('$nama','$alamat')"); // insert user data into table

		// show message when user added
		echo"User added succesfully. <a href ='view.php'>View User</a>";
	}
?>