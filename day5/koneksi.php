<?php
	$host = "localhost"; //nama host
	$username = "root"; //username
	$password = ""; // password root
	$database ="phpfundamental";//nama database

	$connect = mysqli_connect ($host, $username, $password, $database); //koneksi ke mysql

	if (!$connect){
		die('Gagal terhubung dengan database: '.mysqli_connect.error());//petik satu harus dibedakan string dan variabel
	}	else {
		echo '';
	}

?>