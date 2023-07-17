-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_perpustakaan.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `stok` int DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpustakaan.buku: ~7 rows (approximately)
INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun`, `stok`) VALUES
	(1, 'WHY ?', 'Saputra', 'Elex Media Komputindo', '2017', 100),
	(2, 'Algoritma', 'Naila', 'UIN Malang Press', '2015', 100),
	(3, 'Apa itu Rekayasa perangkat Lunak?', 'Ramadhani', 'Elex Media Komputindo', '2018', 100),
	(4, 'Jendela Dunia', 'Hamdan', 'Elex Media Komputindo', '2016', 100),
	(5, 'Bahasa Arab Mendunia', 'Fatimah', 'Elex Media Komputindo', '2019', 99),
	(6, 'Filsafat Ilmu', 'Khadijah', 'UIN Malang Press', '2021', 100),
	(7, 'Mengapa Kau Pergi?', 'Ginanjar', 'Malang Press', '2020', 100);

-- Dumping structure for table db_perpustakaan.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int NOT NULL AUTO_INCREMENT,
  `id_buku` int NOT NULL,
  `id_user` int NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_terima` date DEFAULT NULL,
  `denda_terlambat` int DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `FK_buku_peminjaman` (`id_buku`),
  KEY `FK_user_peminjaman` (`id_user`),
  CONSTRAINT `FK_buku_peminjaman` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  CONSTRAINT `FK_user_peminjaman` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpustakaan.peminjaman: ~9 rows (approximately)
INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `tgl_terima`, `denda_terlambat`) VALUES
	(1, 1, 2, '2023-06-08', '2023-06-10', '2023-06-13', 6000),
	(2, 1, 3, '2023-06-08', '2023-06-10', '2023-06-11', 2000),
	(3, 1, 2, '2023-06-13', '2023-06-16', '2023-06-17', 2000),
	(4, 1, 3, '2023-06-11', '2023-06-15', '2023-06-18', 6000),
	(5, 1, 2, '2023-06-17', '2023-06-23', '2023-06-28', 10000),
	(6, 1, 3, '2023-06-18', '2023-06-25', '2023-06-25', 0),
	(7, 2, 2, '2023-06-28', '2023-07-04', '2023-07-05', 2000),
	(8, 2, 3, '2023-06-25', '2023-07-01', '2023-07-03', 4000),
	(9, 1, 3, '2023-07-03', '2023-07-06', '2023-06-12', 0),
	(10, 5, 7, '2023-06-12', '2023-06-13', NULL, NULL);

-- Dumping structure for table db_perpustakaan.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpustakaan.user: ~0 rows (approximately)
INSERT INTO `user` (`id_user`, `username`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `alamat`, `email`, `password`, `level`) VALUES
	(1, 'Admin', 'Laki-laki', 'Malang', '2000-01-01', '082245388062', 'Teknik Informatika-UIN Maliki Malang', 'admin@gmail.com', 'adminperpus', NULL),
	(2, 'Condro Prio Utomo', 'Laki-laki', 'Pasuruan', '2002-03-28', '082245388062', 'Purwosari-Pasuruan', 'condropriyoutomo@gmail.com', 'condro123', NULL),
	(3, 'Siti Fatimah Zahro', 'Perempuan', 'Malang', '2002-05-31', '085546731564', 'Wagir-Malang', 'zahrositi@gmail.com', 'zahroitis31', NULL),
	(6, 'DioVanny', 'Laki-laki', 'jember', '2023-06-12', '089680371563', 'Bondowoso', 'dvanny94@gmail.com', '123', 'admin'),
	(7, 'dio', 'Laki-laki', 'jember', '2023-05-28', '089680371563', 'Bondowoso', 'diosyahputra20@gmail.com', '123', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
