<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "config.php";
	$id_peminjaman = $_POST['id_peminjaman'];
	$tgl_terima = $_POST['tgl_terima'];
	$sql1 = "SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
	$result = $koneksi->query($sql1);
	$row = $result->fetch_array();
	$id_buku = $row['id_buku'];
	$tgl_kembali = $row['tgl_kembali'];
	$interval=strtotime($tgl_terima) - strtotime($tgl_kembali);
	$hari = $interval/(60*60*24);
	if ($hari <= 0) {
		$denda = 0;
	} else {
		$denda=$hari*2000;
	}
	$sql2 = "SELECT * FROM buku WHERE id_buku='$id_buku'";
	$result = $koneksi->query($sql2);
	$row = $result->fetch_array();
	$stok = $row['stok'];
	$stok1 = $stok + 1;
	$sql3 = "UPDATE buku SET stok='$stok1' WHERE id_buku='$id_buku'";
	$sql = "update peminjaman set tgl_terima='$tgl_terima', denda_terlambat='$denda' where id_peminjaman='$id_peminjaman'";
	if ($koneksi->query($sql) === TRUE) {
		$koneksi->query($sql3);
		header('location: peminjaman.php');
	} else {
		echo "<br>Error: ".$sql."<br>".$koneksi->error;
	}
	?>
</body>
</html>