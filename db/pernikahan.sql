<<<<<<< HEAD
/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.5-10.1.36-MariaDB : Database - db_pernikahan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pernikahan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pernikahan`;

/*Table structure for table `tb_pencarian` */

DROP TABLE IF EXISTS `tb_pencarian`;

CREATE TABLE `tb_pencarian` (
  `idpencarian` int(11) NOT NULL AUTO_INCREMENT,
  `nikcari` varchar(40) DEFAULT NULL,
  `tglcari` datetime DEFAULT NULL,
  PRIMARY KEY (`idpencarian`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pencarian` */

insert  into `tb_pencarian`(`idpencarian`,`nikcari`,`tglcari`) values (1,'1871036507920003','2019-10-20 13:46:30');

/*Table structure for table `tb_pernikahan` */

DROP TABLE IF EXISTS `tb_pernikahan`;

CREATE TABLE `tb_pernikahan` (
  `idnikah` int(11) NOT NULL AUTO_INCREMENT,
  `niksuami` varchar(40) DEFAULT NULL,
  `nikistri` varchar(40) DEFAULT NULL,
  `tglnikah` date DEFAULT NULL,
  `penghulu` varchar(30) DEFAULT NULL,
  `statusnikah` varchar(40) DEFAULT NULL,
  `lokasinikah` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idnikah`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pernikahan` */

insert  into `tb_pernikahan`(`idnikah`,`niksuami`,`nikistri`,`tglnikah`,`penghulu`,`statusnikah`,`lokasinikah`) values (1,'1871080203880005','1871036507920003','2019-08-29','H. HAFIZULLAH, S.Ag, M.E.Sy.','2','-');

/*Table structure for table `tb_statusnikah` */

DROP TABLE IF EXISTS `tb_statusnikah`;

CREATE TABLE `tb_statusnikah` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `namastatus` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_statusnikah` */

insert  into `tb_statusnikah`(`idstatus`,`namastatus`) values (1,'Belum Menikah'),(2,'Menikah'),(3,'Janda'),(4,'Duda'),(5,'Cerai');

/*Table structure for table `tb_tanggapan` */

DROP TABLE IF EXISTS `tb_tanggapan`;

CREATE TABLE `tb_tanggapan` (
  `idtanggapan` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(40) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `isitanggapan` text,
  PRIMARY KEY (`idtanggapan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_tanggapan` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `namauser` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`iduser`,`namauser`,`password`,`namalengkap`,`lastlogin`) values (1,'admin','admin','Administrator','2019-10-17 22:37:51');

/*Table structure for table `tb_warga` */

DROP TABLE IF EXISTS `tb_warga`;

CREATE TABLE `tb_warga` (
  `nik` varchar(40) NOT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `alamat` text,
  `jk` varchar(20) DEFAULT NULL,
  `statusnikah` varchar(30) DEFAULT NULL,
  `statuslain` varchar(40) DEFAULT NULL,
  `foto` text,
  `tanggallahir` date DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_warga` */

insert  into `tb_warga`(`nik`,`namalengkap`,`alamat`,`jk`,`statusnikah`,`statuslain`,`foto`,`tanggallahir`,`pekerjaan`,`pendidikan`) values ('1871036507920003','YULI RAHMAWATI','-','Perempuan','1',NULL,'noimage5.png','1992-07-25','KARYAWAN SWASTA','-'),('1871080203880005','SERDIAWAN','-','Laki-Laki','1',NULL,'noimage4.png','1988-03-02','KARYAWAN SWASTA','-');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
=======
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

-- Dumping structure for table db_pernikahan.tb_pencarian
CREATE TABLE IF NOT EXISTS `tb_pencarian` (
  `idpencarian` int(11) NOT NULL AUTO_INCREMENT,
  `nikcari` varchar(40) DEFAULT NULL,
  `tglcari` datetime DEFAULT NULL,
  PRIMARY KEY (`idpencarian`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_pencarian: ~18 rows (approximately)
DELETE FROM `tb_pencarian`;
/*!40000 ALTER TABLE `tb_pencarian` DISABLE KEYS */;
INSERT INTO `tb_pencarian` (`idpencarian`, `nikcari`, `tglcari`) VALUES
	(1, '1234', '2019-10-16 18:57:16'),
	(2, '1234', '2019-10-16 19:01:19'),
	(3, '232333', '2019-10-17 15:53:12'),
	(4, '4543', '2019-10-17 15:53:15'),
	(5, '11', '2019-10-17 15:53:17'),
	(6, '1', '2019-10-17 15:53:20'),
	(7, '1', '2019-10-17 15:58:19'),
	(8, '123', '2019-10-18 14:41:52'),
	(9, NULL, '2019-10-18 14:42:05'),
	(10, '1234', '2019-10-19 17:10:40'),
	(11, '1', '2019-10-19 17:10:51'),
	(12, '1', '2019-10-19 17:10:53'),
	(13, '00', '2019-10-19 17:16:48'),
	(14, '343', '2019-10-19 17:16:50'),
	(15, '566', '2019-10-19 17:16:53'),
	(16, '2099', '2019-10-19 17:16:56'),
	(17, '22', '2019-10-19 17:17:07'),
	(18, '22', '2019-10-19 17:17:11');
/*!40000 ALTER TABLE `tb_pencarian` ENABLE KEYS */;

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

-- Dumping data for table db_pernikahan.tb_pernikahan: ~3 rows (approximately)
DELETE FROM `tb_pernikahan`;
/*!40000 ALTER TABLE `tb_pernikahan` DISABLE KEYS */;
INSERT INTO `tb_pernikahan` (`idnikah`, `niksuami`, `nikistri`, `tglnikah`, `penghulu`, `statusnikah`, `lokasinikah`) VALUES
	(2, '1234567890', '0987654321', '2019-10-06', 'Penghulu 1', '2', 'Bandar Lampung'),
	(3, '1234567890', '3434343434', '2019-10-16', 'Penghulu 2', '5', '-'),
	(4, '22323232455', '2322424244', '2019-09-30', 'Penghulu 3', '2', 'w');
/*!40000 ALTER TABLE `tb_pernikahan` ENABLE KEYS */;

-- Dumping structure for table db_pernikahan.tb_statusnikah
CREATE TABLE IF NOT EXISTS `tb_statusnikah` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `namastatus` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_statusnikah: ~5 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_tanggapan: ~12 rows (approximately)
DELETE FROM `tb_tanggapan`;
/*!40000 ALTER TABLE `tb_tanggapan` DISABLE KEYS */;
INSERT INTO `tb_tanggapan` (`idtanggapan`, `nik`, `namalengkap`, `isitanggapan`) VALUES
	(5, '22222222222222222', 'sadasdasd', 'asdasdsad'),
	(6, '24342342342342342', 'Laki Laki 1', 'asdasd'),
	(7, '232323232323', 'asasa', 'asas'),
	(8, '111111111111', 'asdasd', 'asdad'),
	(9, '2323232323', 'adsad', 'asda'),
	(10, '223233232323', 'adsd', 'asad'),
	(11, '12121212212122', 'aadasd', 'sdsad'),
	(12, '111111111111111', 'adsadsa', 'asdasd'),
	(13, '111111111111111', 'sadsad', 'asdasd'),
	(14, '111111111111111', 'sadsad', 'asdasd'),
	(15, '111111111111111', 'sadsad', 'asdasd'),
	(16, '2323232323', 'asdsad', 'asdasd');
/*!40000 ALTER TABLE `tb_tanggapan` ENABLE KEYS */;

-- Dumping structure for table db_pernikahan.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `namauser` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_user: ~1 rows (approximately)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`iduser`, `namauser`, `password`, `namalengkap`, `lastlogin`) VALUES
	(1, 'admin', 'admin', 'Administrator', '2019-10-17 22:37:51');
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
  `umur` int(11) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `no_ktp` int(11) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_pernikahan.tb_warga: ~10 rows (approximately)
DELETE FROM `tb_warga`;
/*!40000 ALTER TABLE `tb_warga` DISABLE KEYS */;
INSERT INTO `tb_warga` (`nik`, `namalengkap`, `alamat`, `jk`, `statusnikah`, `statuslain`, `foto`, `umur`, `tanggallahir`, `no_ktp`, `pekerjaan`, `pendidikan`) VALUES
	('0987654321', 'Perempuan 1', 'Bandar Lampung', 'Perempuan', '2', NULL, 'decode1.jpg', 24, '1995-10-01', 898989898, 'Swasta', 'SMA Sederajat'),
	('1234567890', 'Laki Laki 1', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png', NULL, NULL, NULL, NULL, NULL),
	('2232323243', 'Perempuan 4', 'Bandar Lampung', 'Perempuan', '2', NULL, 'decode3.jpg', 22, '1997-10-01', 9989898, '-', '-'),
	('22323232455', 'Laki Laki 4', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png', NULL, NULL, NULL, NULL, NULL),
	('2322424244', 'Perempuan 3', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png', NULL, NULL, NULL, NULL, NULL),
	('23333', 'Perempuan 5', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png', NULL, NULL, NULL, NULL, NULL),
	('23923892881', 'Laki Laki 2', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png', NULL, NULL, NULL, NULL, NULL),
	('3232323232', 'Laki Laki 3', 'Bandar Lampung', 'Laki-Laki', '2', NULL, '1.png', NULL, NULL, NULL, NULL, NULL),
	('3434343434', 'Perempuan 2', 'Bandar Lampung', 'Perempuan', '2', NULL, '2.png', NULL, NULL, NULL, NULL, NULL),
	('878787890', 'Saitama Botak', '-', 'Laki-Laki', '1', NULL, 'saitama.jpg', 70, '1945-08-17', 2147483647, 'Pahlawan', 'SD');
/*!40000 ALTER TABLE `tb_warga` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
>>>>>>> cd3f638fa0637856374c1c01016da9e81a929b53
