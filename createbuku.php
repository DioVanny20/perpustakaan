<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "config.php";
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$stok = $_POST['stok'];
	$sql = "insert into buku (judul,pengarang,penerbit,tahun,stok) values('$judul','$pengarang','$penerbit','$tahun','$stok')";
	if ($koneksi->query($sql) === TRUE) {
		header('location: databuku.php');
	} else {
		echo "<br>Error: ".$sql."<br>".$koneksi->error;
	}
	?>
</body>
</html>