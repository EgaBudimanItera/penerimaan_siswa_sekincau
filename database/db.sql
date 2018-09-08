/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.5-10.1.16-MariaDB : Database - tsamania
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tsamania` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tsamania`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `nik` varchar(20) NOT NULL,
  `namaadmin` varchar(30) DEFAULT NULL,
  `alamatadmin` varchar(30) DEFAULT NULL,
  `jkadmin` varchar(10) DEFAULT NULL,
  `teleponadmin` varchar(20) DEFAULT NULL,
  `agamaadmin` varchar(10) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `fotoadmin` text,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`nik`,`namaadmin`,`alamatadmin`,`jkadmin`,`teleponadmin`,`agamaadmin`,`username`,`password`,`fotoadmin`) values ('1','agustian','kkjjhkj','Perempuan','08978786','islam','123','555','004957700_1427686903-FN_517_HL_BOX.jpg');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kodekategori` varchar(20) NOT NULL,
  `namakategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kodekategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`kodekategori`,`namakategori`) values ('1','new pick up');
insert  into `kategori`(`kodekategori`,`namakategori`) values ('2','sedan');

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `kodemerk` varchar(20) NOT NULL,
  `namamerk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kodemerk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `merk` */

insert  into `merk`(`kodemerk`,`namamerk`) values ('1','suzuki');
insert  into `merk`(`kodemerk`,`namamerk`) values ('2','honda');

/*Table structure for table `mobil` */

DROP TABLE IF EXISTS `mobil`;

CREATE TABLE `mobil` (
  `kodemobil` varchar(20) NOT NULL,
  `jenismobil` varchar(30) DEFAULT NULL,
  `gambar` text,
  `hargasewa` double DEFAULT NULL,
  `deskripsi` text,
  `kodekategori` varchar(20) DEFAULT NULL,
  `promo` varchar(50) DEFAULT NULL,
  `kodemerk` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kodemobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mobil` */

insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('1223','ad','7.jpg',1213,'adads','2','10000','2');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('213342','ferrari','18.jpg',666666,'mobil ampuh murah anti lapar pencegah penyakit\r\n','2','12','2');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('2342','efsdf','21.jpg',2323,'dsfdf','1','11','1');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('4334','dg','6.jpg',9,'fddgdg','1','2','1');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('4353','sdff','6.jpg',1212,'dsfsf','1','121','1');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('4656','ffgh','18.jpg',2323,'sdfs','1','121','1');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('7568','dfghhj','9.jpg',6558,'ghghj','1','54','1');
insert  into `mobil`(`kodemobil`,`jenismobil`,`gambar`,`hargasewa`,`deskripsi`,`kodekategori`,`promo`,`kodemerk`) values ('9876','bfhjkl','19.jpg',56789,'nmbj','1','45','1');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `kodepemesanan` varchar(20) NOT NULL,
  `tanggalpemesanan` date DEFAULT NULL,
  `kodemobil` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `jumlahhari` int(11) DEFAULT NULL,
  `uangmuka` double DEFAULT NULL,
  `buktitransfer` varchar(255) DEFAULT NULL,
  `totalbiaya` double DEFAULT NULL,
  `sisapembayaran` double DEFAULT NULL,
  PRIMARY KEY (`kodepemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`kodepemesanan`,`tanggalpemesanan`,`kodemobil`,`username`,`jumlahhari`,`uangmuka`,`buktitransfer`,`totalbiaya`,`sisapembayaran`) values ('2017090772138','2017-09-07','9876','6',1,0,'',56789,56789);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `nama_awal` varchar(50) DEFAULT NULL,
  `nama_akhir` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `negara` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_awal`,`nama_akhir`,`email`,`phone`,`fax`,`alamat`,`kota`,`kode_pos`,`negara`,`provinsi`,`username`,`password`) values ('2017090344322','adsd','a','a@gmail.com','0','434','sddfs','dgfd','23','df','hhhh','6','6');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
