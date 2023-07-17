<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "config.php";
	$username = $_POST['username'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$sql = "insert into user(username,jenis_kelamin,tempat_lahir,tgl_lahir,no_telp,alamat,email,password,level) 
	values('$username','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$no_telp','$alamat','$email','$password','$level')";
	if ($koneksi->query($sql) === TRUE) {
		header('location: index.php');
	} else {
		echo "<br>Error: ".$sql."<br>".$koneksi->error;
	}
	?>
</body>
</html>