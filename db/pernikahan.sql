-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_pernikahan
CREATE DATABASE IF NOT EXISTS `db_pernikahan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_pernikahan`;

-- Dumping structure for table db_pernikahan.tb_pernikahan
CREATE TABLE IF NOT EXISTS `tb_pernikahan` (
  `idnikah` int(11) NOT NULL AUTO_INCREMENT,
  `niksuami` varchar(40) DEFAULT NULL,
  `nikistri` varchar(40) DEFAULT NULL,
  `tglnikah` date DEFAULT NULL,
  `penghulu` varchar(30) DEFAULT NULL,
  `statusnikah` varchar(40) DEFAULT NULL,
  `lokasinikah` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idnikah`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_pernikahan: ~2 rows (approximately)
DELETE FROM `tb_pernikahan`;
/*!40000 ALTER TABLE `tb_pernikahan` DISABLE KEYS */;
INSERT INTO `tb_pernikahan` (`idnikah`, `niksuami`, `nikistri`, `tglnikah`, `penghulu`, `statusnikah`, `lokasinikah`) VALUES
	(2, '1234567890', '0987654321', '2019-10-06', 'Penghulu 1', '2', 'Bandar Lampung'),
	(3, '1234567890', '3434343434', '2019-10-16', 'Penghulu 2', '2', '-'),
	(4, '22323232455', '2322424244', '2019-09-30', 'Penghulu 3', '2', 'w');
/*!40000 ALTER TABLE `tb_pernikahan` ENABLE KEYS */;

-- Dumping structure for table db_pernikahan.tb_statusnikah
CREATE TABLE IF NOT EXISTS `tb_statusnikah` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `namastatus` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_statusnikah: ~4 rows (approximately)
DELETE FROM `tb_statusnikah`;
/*!40000 ALTER TABLE `tb_statusnikah` DISABLE KEYS */;
INSERT INTO `tb_statusnikah` (`idstatus`, `namastatus`) VALUES
	(1, 'Belum Menikah'),
	(2, 'Menikah'),
	(3, 'Janda'),
	(4, 'Duda'),
	(5, 'Cerai');
/*!40000 ALTER TABLE `tb_statusnikah` ENABLE KEYS */;

-- Dumping structure for table db_pernikahan.tb_tanggapan
CREATE TABLE IF NOT EXISTS `tb_tanggapan` (
  `idtanggapan` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(40) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `isitanggapan` text,
  PRIMARY KEY (`idtanggapan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_tanggapan: ~0 rows (approximately)
DELETE FROM `tb_tanggapan`;
/*!40000 ALTER TABLE `tb_tanggapan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tanggapan` ENABLE KEYS */;

-- Dumping structure for table db_pernikahan.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `namauser` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_user: ~0 rows (approximately)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

-- Dumping structure for table db_pernikahan.tb_warga
CREATE TABLE IF NOT EXISTS `tb_warga` (
  `nik` varchar(40) NOT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `alamat` text,
  `jk` varchar(20) DEFAULT NULL,
  `statusnikah` varchar(30) DEFAULT NULL,
  `statuslain` varchar(40) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_warga: ~2 rows (approximately)
DELETE FROM `tb_warga`;
/*!40000 ALTER TABLE `tb_warga` DISABLE KEYS */;
INSERT INTO `tb_warga` (`nik`, `namalengkap`, `alamat`, `jk`, `statusnikah`, `statuslain`, `foto`) VALUES
	('0987654321', 'Perempuan 1', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png'),
	('1234567890', 'Laki Laki 1', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png'),
	('2232323243', 'Perempuan 4', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png'),
	('22323232455', 'Laki Laki 4', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png'),
	('2322424244', 'Perempuan 3', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png'),
	('23333', 'Perempuan 5', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png'),
	('23923892881', 'Laki Laki 2', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png'),
	('3232323232', 'Laki Laki 3', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png'),
	('3434343434', 'Perempuan 2', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png');
/*!40000 ALTER TABLE `tb_warga` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
