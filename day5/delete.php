<?php
//create database connection using config file
include_once("koneksi.php");

// gET ID FROM url TO DELETE THAT USER
$id = $_GET['id_user'];

//Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM user WHERE id = $id");

// After delete redirect to Home, so the latest user list 
header("Location: view.php");

?>