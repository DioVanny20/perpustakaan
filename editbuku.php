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
	$sql = "update buku set judul='$judul',pengarang='$pengarang',penerbit='$penerbit',tahun='$tahun',stok='$stok' where id_buku='$id_buku'";
	if ($koneksi->query($sql) === TRUE) {
		header('location: databuku.php');
	} else {
		echo "<br>Error: ".$sql."<br>".$koneksi->error;
	}
	?>
</body>
</html>