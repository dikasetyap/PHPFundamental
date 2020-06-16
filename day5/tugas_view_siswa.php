<?php
//create database connection using config file
include_once("koneksi.php");

//fetch all users data from database
$result =mysqli_query($connect,"SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Data Siswa</title>
</head>
<body>
	<a href="tugas_tambah_datasiswa.php">Tambah Data</a><br/><br/>
		<table with='80%' border=1>
			<tr>
				<th>No</th>
				<th>No Induk</th>
				<th>Nama</th>
				<th>No Telepon</th>
				<th>Alamat</th>
			</tr>
			<?php  
				$nos = 1;
				while($user_data = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$nos++."</td>";
					echo "<td>".$user_data['no_induk_siswa']."</td>";
					echo "<td>".$user_data['nama_siswa']."</td>";
					echo "<td>".$user_data['no_telp_siswa']."</td>";
					echo "<td>".$user_data['alamat_siswa']."</td>";
					echo "</tr>";
				}
			?>
		</table>
</body>
</html>