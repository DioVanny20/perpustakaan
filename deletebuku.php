<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "config.php";
	$id_buku = $_GET['id_buku'];
	$sql = "delete from buku where id_buku='$id_buku'";
	if ($koneksi->query($sql) === TRUE) {
		header('location: databuku.php');
	} else {
		echo "<br>Error: ".$sql."<br>".$koneksi->error;
	}
	?>
</body>
</html>