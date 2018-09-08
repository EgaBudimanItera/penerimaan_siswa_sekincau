/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.25 : Database - pmb_sekincau
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`pmb_sekincau` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pmb_sekincau`;

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `nobayar` varchar(15) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `nodaftar` varchar(15) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`nobayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

/*Table structure for table `pendaftaran` */

DROP TABLE IF EXISTS `pendaftaran`;

CREATE TABLE `pendaftaran` (
  `nodaftar` varchar(15) NOT NULL,
  `idperiode` int(11) DEFAULT NULL,
  `tgldaftar` date DEFAULT NULL,
  `namasiswa` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(40) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `notelp` varchar(12) DEFAULT NULL,
  `alamat` text,
  `email` varchar(40) DEFAULT NULL,
  `asalsmp` varchar(30) DEFAULT NULL,
  `alamatsmp` text,
  `nilaiun` double DEFAULT NULL,
  `namaayah` varchar(30) DEFAULT NULL,
  `pendidikanayah` varchar(5) DEFAULT NULL,
  `pekerjaanayah` varchar(50) DEFAULT NULL,
  `penghasilanayah` double DEFAULT NULL,
  `namaibu` varchar(30) DEFAULT NULL,
  `pendidikanibu` varchar(5) DEFAULT NULL,
  `pekerjaanibu` varchar(30) DEFAULT NULL,
  `penghasilanibu` double DEFAULT NULL,
  `pasfoto` text,
  `ijasah` text,
  `skhu` text,
  `skl` text,
  `password` varchar(30) DEFAULT NULL,
  `statusdaftar` enum('0','1','2','3') DEFAULT '0' COMMENT '0=daftar, 1=terverififkasi 2=diterima 3=ditolak',
  `statusbayar` enum('0','1') DEFAULT '0' COMMENT '0=belumbayar 1=udah bayar',
  `nilaiujian` double DEFAULT NULL,
  PRIMARY KEY (`nodaftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendaftaran` */

/*Table structure for table `periode` */

DROP TABLE IF EXISTS `periode`;

CREATE TABLE `periode` (
  `idperiode` int(11) NOT NULL AUTO_INCREMENT,
  `ta` varchar(15) DEFAULT NULL,
  `ket` text,
  `status` enum('0','1') DEFAULT '0' COMMENT '0=tidak aktif 1=aktif',
  PRIMARY KEY (`idperiode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `periode` */

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `namasiswa` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(40) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `notelp` varchar(12) DEFAULT NULL,
  `alamat` text,
  `email` varchar(40) DEFAULT NULL,
  `asalsmp` varchar(30) DEFAULT NULL,
  `alamatsmp` text,
  `nilaiun` double DEFAULT NULL,
  `namaayah` varchar(30) DEFAULT NULL,
  `pendidikanayah` varchar(5) DEFAULT NULL,
  `pekerjaanayah` varchar(50) DEFAULT NULL,
  `penghasilanayah` double DEFAULT NULL,
  `namaibu` varchar(30) DEFAULT NULL,
  `pendidikanibu` varchar(5) DEFAULT NULL,
  `pekerjaanibu` varchar(30) DEFAULT NULL,
  `penghasilanibu` double DEFAULT NULL,
  `pasfoto` text,
  `ijasah` text,
  `skhu` text,
  `skl` text,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
