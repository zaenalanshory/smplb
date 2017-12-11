/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.28-MariaDB : Database - smplbaypab
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`smplbaypab` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;

USE `smplbaypab`;

/*Table structure for table `akun_pegawai` */

DROP TABLE IF EXISTS `akun_pegawai`;

CREATE TABLE `akun_pegawai` (
  `nip` int(11) NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `hak_akses` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `akun_pegawai` */

insert  into `akun_pegawai`(`nip`,`password`,`hak_akses`) values (32221,'hahaha',1),(32227,'lumpiaaaaa',0);

/*Table structure for table `akun_siswa` */

DROP TABLE IF EXISTS `akun_siswa`;

CREATE TABLE `akun_siswa` (
  `no_induk` int(12) NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no_induk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `akun_siswa` */

insert  into `akun_siswa`(`no_induk`,`password`) values (15151,'kucing'),(15152,'anjing1');

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `no_komentar` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` char(250) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`no_komentar`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `contact_us` */

insert  into `contact_us`(`no_komentar`,`foto`,`nama`,`email`,`komentar`) values (1,'cek','cek','cek','cek');

/*Table structure for table `data_ajar` */

DROP TABLE IF EXISTS `data_ajar`;

CREATE TABLE `data_ajar` (
  `id_ajar` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kode_mapel` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_ajar`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `data_ajar` */

insert  into `data_ajar`(`id_ajar`,`nip`,`kode_mapel`) values (3,'32333','MPA03'),(2,'32221','MPA01'),(1,'32222','MPA06');

/*Table structure for table `data_guru` */

DROP TABLE IF EXISTS `data_guru`;

CREATE TABLE `data_guru` (
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(15) COLLATE latin1_general_ci DEFAULT '',
  `jenis_kelamin` char(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tempat_lahir` char(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pangkat` char(30) COLLATE latin1_general_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `jabatan` char(30) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` char(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `data_guru` */

insert  into `data_guru`(`nip`,`foto`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`pangkat`,`pendidikan_terakhir`,`jabatan`,`agama`,`alamat`) values ('32222',NULL,'jualliiiajaja','Perempuan','','0000-00-00','','D-2','','Katolik',''),('32221','','tukimen','Laki-Laki','hh','0000-00-00','hh','SMA/SMK','hh','Muslim','hh');

/*Table structure for table `data_siswa` */

DROP TABLE IF EXISTS `data_siswa`;

CREATE TABLE `data_siswa` (
  `no_induk` decimal(10,0) NOT NULL,
  `nama_siswa` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_ayah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `no_telp_orangtua` decimal(10,0) NOT NULL,
  PRIMARY KEY (`no_induk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `data_siswa` */

insert  into `data_siswa`(`no_induk`,`nama_siswa`,`foto`,`alamat`,`nama_ayah`,`nama_ibu`,`no_telp_orangtua`) values ('15151','hujiku','','gg','ss','fff','0');

/*Table structure for table `ekskul` */

DROP TABLE IF EXISTS `ekskul`;

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ekskul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `deskripsi` varchar(700) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `ekskul` */

insert  into `ekskul`(`id`,`nama_ekskul`,`foto`,`deskripsi`) values (8,'coba','Bahasa Jepang.JPG','gg'),(9,'hmmmmm','Bahasa Jepang.JPG','o'),(10,'jj','Bahasa Jepang.JPG','row'),(13,'ff','ekskulfoto/hijabdosa1.jpg','');

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `galeri` */

insert  into `galeri`(`id`,`tgl_upload`,`nama`) values (1,'2017-07-16','1.jpg'),(2,'2017-07-16','2.jpg'),(3,'2017-07-16','3.jpg'),(4,'2017-07-16','4.jpg'),(5,'2017-07-16','2.jpg'),(6,'2017-07-16','6.jpg'),(7,'2017-07-16','7.jpg'),(8,'2017-07-16','8.jpg'),(9,'2017-07-16','hijabdosa1.jpg'),(10,'2017-07-16','Cup-with-coffee-abstract-illustration-vector-02.jpg'),(11,'2017-07-16','miulan-logo.jpg');

/*Table structure for table `gallery_foto` */

DROP TABLE IF EXISTS `gallery_foto`;

CREATE TABLE `gallery_foto` (
  `no_foto` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`no_foto`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `gallery_foto` */

insert  into `gallery_foto`(`no_foto`,`foto`) values (95,'gambar/8.jpg'),(4,'Tutus Setiawan.JPG'),(94,'gambar/WIN_20170708_18_30_49_Pro.jpg'),(92,'crcek'),(93,'gambar/WIN_20170618_04_38_34_Pro.jpg');

/*Table structure for table `gallery_video` */

DROP TABLE IF EXISTS `gallery_video`;

CREATE TABLE `gallery_video` (
  `no_video` int(10) NOT NULL AUTO_INCREMENT,
  `link` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`no_video`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `gallery_video` */

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_kegiatan` int(11) DEFAULT NULL,
  `bulan_kegiatan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `foto_judul` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `foto1` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `foto2` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `foto3` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`id_kegiatan`,`judul_kegiatan`,`tgl_kegiatan`,`bulan_kegiatan`,`foto_judul`,`foto1`,`foto2`,`foto3`,`isi`) values (1,'yuk',12,'jjjj','imunisasi.png','','','',''),(2,'Performance Musik Di Convention Hall',22,'Agustus','band.png','imunisasi.png','kartini.png','angklungch.png','Performance Musik Di Convention HallPerformance Musik Di Convention HallPerformance Musik Di Convent'),(3,'Kegiatan imunisasi',20,'maret','imunisasi.png',NULL,NULL,NULL,NULL),(15,'lagi',77,'ss','imunisasi.png',NULL,NULL,NULL,NULL),(14,'cek',2,'cek','imunisasi.png',NULL,NULL,NULL,NULL),(13,'humb',0,'','imunisasi.png','','','',' '),(18,'cek banyak',22,'kul','kegiatanfoto/1.jpg','kegiatanfoto/2.jpg','kegiatanfoto/3.jpg','kegiatanfoto/4.jpg','rrrrr');

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `kode_mapel` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nama_mapel` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`kode_mapel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `mapel` */

insert  into `mapel`(`kode_mapel`,`nama_mapel`) values ('MPA01','Pendidikan Agama dan Budi baik'),('MPA02','Pendidikan Pancasila dan Kewarganegaraan'),('MPA03','Bahasa Indonesia'),('MPA04','Matematika'),('MPA07','Bahasa Inggris'),('MPB01','Seni Budaya'),('MPB02','Pendidikan Jasmani, Olah Raga dan Kesehatan'),('MPC01','Program Khusus (Orientasi Mobilitas)'),('MPC02','Bahasa Daerah/Jawa'),('MPC03','Massage'),('MPC04','Prakarya/Ketrampilan'),('MPC05','Teknologi Informasi dan Komunikasi (TIK)'),('MPA08',' dd');

/*Table structure for table `prestasi` */

DROP TABLE IF EXISTS `prestasi`;

CREATE TABLE `prestasi` (
  `nomor` int(10) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ket_prestasi` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  UNIQUE KEY `nomor` (`nomor`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `prestasi` */

insert  into `prestasi`(`nomor`,`nama_siswa`,`ket_prestasi`,`gambar`) values (1,'toyib','   ser   ',''),(4,'juli','  kom',''),(5,'hhu','  ss',''),(6,'saiton','    kayang',''),(21,'juminten','  atlit makan bambu','prestasifoto/5.jpg');

/*Table structure for table `rapot` */

DROP TABLE IF EXISTS `rapot`;

CREATE TABLE `rapot` (
  `no` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `kode_mapel` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `deskripsi` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `rapot` */

insert  into `rapot`(`no`,`no_induk`,`kode_mapel`,`nilai`,`deskripsi`) values (1,15151,'MPA01',70,'asik oyyy'),(5,15153,'MPC03',78,NULL),(3,15151,'MPA02',80,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;