/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 10.4.14-MariaDB : Database - db_potensidesa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `db_tempatibadah` */

DROP TABLE IF EXISTS `db_tempatibadah`;

CREATE TABLE `db_tempatibadah` (
  `id` int(11) NOT NULL,
  `potensi_id` int(11) DEFAULT NULL,
  `agama_id` int(11) DEFAULT NULL,
  `nama_tempatibadah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agama_id` (`agama_id`),
  KEY `potensi_id` (`potensi_id`),
  CONSTRAINT `db_tempatibadah_ibfk_2` FOREIGN KEY (`agama_id`) REFERENCES `tb_agama` (`id`),
  CONSTRAINT `db_tempatibadah_ibfk_3` FOREIGN KEY (`potensi_id`) REFERENCES `tb_jenispotensi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `db_tempatibadah` */

/*Table structure for table `tb_agama` */

DROP TABLE IF EXISTS `tb_agama`;

CREATE TABLE `tb_agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_agama` */

/*Table structure for table `tb_desa` */

DROP TABLE IF EXISTS `tb_desa`;

CREATE TABLE `tb_desa` (
  `id` int(11) NOT NULL,
  `namadesa` varchar(255) DEFAULT NULL,
  `batasdesa` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_desa` */

insert  into `tb_desa`(`id`,`namadesa`,`batasdesa`) values (1,'Abiansemal',NULL);

/*Table structure for table `tb_jenispotensi` */

DROP TABLE IF EXISTS `tb_jenispotensi`;

CREATE TABLE `tb_jenispotensi` (
  `id` int(11) NOT NULL,
  `namapotensi` varchar(255) DEFAULT NULL,
  `tablelink` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_jenispotensi` */

insert  into `tb_jenispotensi`(`id`,`namapotensi`,`tablelink`,`icon`) values (1,'Sekolah','tb_sekolah','sekolah.png');
insert  into `tb_jenispotensi`(`id`,`namapotensi`,`tablelink`,`icon`) values (2,'Tempat Ibadah','tb_tempatibadah','tibadah.png');
insert  into `tb_jenispotensi`(`id`,`namapotensi`,`tablelink`,`icon`) values (3,'Mata Air','tb_sumberair','mataair.png');

/*Table structure for table `tb_jenissekolah` */

DROP TABLE IF EXISTS `tb_jenissekolah`;

CREATE TABLE `tb_jenissekolah` (
  `id` int(11) NOT NULL,
  `jenissekolah` varchar(255) DEFAULT NULL COMMENT 'Negeri, Swasta',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_jenissekolah` */

insert  into `tb_jenissekolah`(`id`,`jenissekolah`) values (1,'Negeri');
insert  into `tb_jenissekolah`(`id`,`jenissekolah`) values (2,'Swasta');

/*Table structure for table `tb_potensidesa` */

DROP TABLE IF EXISTS `tb_potensidesa`;

CREATE TABLE `tb_potensidesa` (
  `id` int(11) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `potensijenis_id` int(11) DEFAULT NULL,
  `potensi_id` int(11) DEFAULT NULL,
  KEY `potensijenis_id` (`potensijenis_id`),
  KEY `desa_id` (`desa_id`),
  KEY `potensi_id` (`potensi_id`),
  CONSTRAINT `tb_potensidesa_ibfk_1` FOREIGN KEY (`potensijenis_id`) REFERENCES `tb_jenispotensi` (`id`),
  CONSTRAINT `tb_potensidesa_ibfk_2` FOREIGN KEY (`desa_id`) REFERENCES `tb_desa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_potensidesa` */

insert  into `tb_potensidesa`(`id`,`desa_id`,`potensijenis_id`,`potensi_id`) values (1,1,1,1);

/*Table structure for table `tb_sekolah` */

DROP TABLE IF EXISTS `tb_sekolah`;

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `potensi_id` int(11) DEFAULT NULL,
  `tingkat_id` int(11) DEFAULT NULL,
  `jenis_sekolah_id` int(11) DEFAULT NULL,
  `namasekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jenis_sekolah_id` (`jenis_sekolah_id`),
  KEY `tingkat_id` (`tingkat_id`),
  KEY `potensi_id` (`potensi_id`),
  CONSTRAINT `tb_sekolah_ibfk_2` FOREIGN KEY (`jenis_sekolah_id`) REFERENCES `tb_jenissekolah` (`id`),
  CONSTRAINT `tb_sekolah_ibfk_3` FOREIGN KEY (`tingkat_id`) REFERENCES `tb_tingkatsekolah` (`id`),
  CONSTRAINT `tb_sekolah_ibfk_4` FOREIGN KEY (`potensi_id`) REFERENCES `tb_jenispotensi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_sekolah` */

insert  into `tb_sekolah`(`id`,`potensi_id`,`tingkat_id`,`jenis_sekolah_id`,`namasekolah`,`alamat`,`lat`,`lng`) values (1,1,1,1,'SD N 4 Abiansemal','Br Pande','0.87198','0.187841');

/*Table structure for table `tb_sumberair` */

DROP TABLE IF EXISTS `tb_sumberair`;

CREATE TABLE `tb_sumberair` (
  `id` int(11) NOT NULL,
  `potensi_id` int(11) DEFAULT NULL,
  `namasumber` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `debit` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `potensi_id` (`potensi_id`),
  CONSTRAINT `tb_sumberair_ibfk_2` FOREIGN KEY (`potensi_id`) REFERENCES `tb_jenispotensi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_sumberair` */

/*Table structure for table `tb_tingkatsekolah` */

DROP TABLE IF EXISTS `tb_tingkatsekolah`;

CREATE TABLE `tb_tingkatsekolah` (
  `id` int(11) NOT NULL,
  `tingkatsekolah` varchar(255) DEFAULT NULL COMMENT 'TK, SD, SMP, SMA',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_tingkatsekolah` */

insert  into `tb_tingkatsekolah`(`id`,`tingkatsekolah`) values (1,'SD');
insert  into `tb_tingkatsekolah`(`id`,`tingkatsekolah`) values (2,'SMP');
insert  into `tb_tingkatsekolah`(`id`,`tingkatsekolah`) values (3,'SMA');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
