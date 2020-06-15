<!DOCTYPE html>
<html>
<head>
	<title>Add Siswa</title>
</head>
<body>
		<a href="tugas_view_siswa.php">Lihat Data User</a>
		<br/><br/>

		<form action="tugas_tambah_datasiswa.php" method="post" name="form2">
			<table width="25%" border ="0">
				<tr>
					<td>No Induk</td>
					<td><input type="text" name="noinduks"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="namas"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="notelps"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamats"></td>
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
		$noinduks = strtoupper($_POST['noinduks']);
		$namas = strtoupper($_POST['namas']);
		$notelps = strtoupper($_POST['notelps']);
		$alamats = strtoupper($_POST['alamats']);	

		//include database connection file
		include_once("koneksi.php");

		$result=mysqli_query($connect, "INSERT INTO siswa(no_induk_siswa,nama_siswa,no_telp_siswa,alamat_siswa) VALUES('$noinduks','$namas','$notelps','$alamats')"); // insert siswa data into table

		// show message when user added
		echo"User added succesfully. <a href ='tugas_view_siswa.php'>View Siswa</a>";
	}
?>