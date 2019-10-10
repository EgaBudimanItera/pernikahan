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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pernikahan` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

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
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_warga` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
