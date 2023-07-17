<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "config.php";
	$id_buku = $_POST['id_buku'];
	$id_user = $_POST['id_user'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];
	$sql1 = "SELECT * FROM buku WHERE id_buku='$id_buku'";
	$result = $koneksi->query($sql1);
	$row = $result->fetch_array();
	$stok = $row['stok'];
	$stok1 = $stok - 1;
	$sql = "insert into peminjaman(id_buku,id_user,tgl_pinjam,tgl_kembali) values('$id_buku','$id_user','$tgl_pinjam','$tgl_kembali')";
	$sql2 = "UPDATE buku SET stok='$stok1' WHERE id_buku='$id_buku'";
	if ($koneksi->query($sql) === TRUE) {
		
		$koneksi->query($sql2);
		header('location: peminjaman.php');
	} else {
		echo "<br>Error: ".$sql."<br>".$koneksi->error;
	}
	?>
</body>
</html>