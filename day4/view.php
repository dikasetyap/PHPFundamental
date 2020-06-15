<?php
//create database connection using config file
include_once("koneksi.php");

//fetch all users data from database
$result =mysqli_query($connect,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Data User</title>
</head>
<body>
	<a href="tambah_data.php">Tambah Data</a><br/><br/>
		<table with='80%' border=1>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
			<?php  
				$no = 1;
				while($user_data = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$no++."</td>";
					echo "<td>".$user_data['nama']."</td>";
					echo "<td>".$user_data['alamat']."</td>";
					echo "</tr>";
				}
			?>
		</table>
</body>
</html>