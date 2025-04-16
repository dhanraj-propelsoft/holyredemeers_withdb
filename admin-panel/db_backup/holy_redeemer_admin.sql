/*
SQLyog Ultimate v11.5 (64 bit)
MySQL - 10.1.38-MariaDB : Database - holy_redeemer_admin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`holy_redeemer_admin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `holy_redeemer_admin`;

/*Table structure for table `admin_accounts` */

DROP TABLE IF EXISTS `admin_accounts`;

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `admin_accounts` */

insert  into `admin_accounts`(`id`,`user_name`,`password`,`series_id`,`remember_token`,`expires`,`admin_type`) values (3,'root','$2y$10$syHHgu.lgAUcLH/p1bJNRuQcLqwBVDNsL5mYnS3uVL4gs7apT1pni',NULL,NULL,NULL,'admin'),(4,'superadmin','$2y$10$xpZc5KC.aU2XHkcqhuZGFuAnqmtL4Unt8MysOyylceq.19XIyoZpG','DJf6u76sLwu3CVpw','$2y$10$ltxNketjQ7xG.XjwoDIqAOB5TxlUr6QQdzAFqkf6y8UMIKWDHX0Ji','2018-12-21 15:17:46','super'),(5,'admin','$2y$10$12mUh2Gm8whTplS1zqfdRenBp24osPFe7Llli3OKxn2ijYkHuxxve',NULL,NULL,NULL,'admin'),(6,'chetanw','$2y$10$iJSznl9t/iJmJWW1GcJyS.QJJ/pt8bR.jaixq5eZRzhbmGTW2QMLK',NULL,NULL,NULL,'admin');

/*Table structure for table `admin_council` */

DROP TABLE IF EXISTS `admin_council`;

CREATE TABLE `admin_council` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `address` text,
  `from_year` int(11) DEFAULT NULL,
  `to_year` int(11) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `admin_council` */

insert  into `admin_council`(`id`,`name`,`designation`,`address`,`from_year`,`to_year`,`contact_no`) values (1,'Rev. Fr. A. Amalraj,','President, Parish Priest & parish Council President.',NULL,NULL,NULL,9442781785),(2,'Mr. A. John Alex','Assistant Parish Council ',NULL,NULL,NULL,9994204666),(3,'Mr. a. Victor Adaikalam ','Parish Council Secretary ',NULL,NULL,NULL,9789787718),(4,'Mr. A. William','Anbiyam Council Manager',NULL,NULL,NULL,9442842690),(5,'Mrs. S. Piyula Carolinmary','Parish Council Joint secretary',NULL,NULL,NULL,9750177359);

/*Table structure for table `anbiyam` */

DROP TABLE IF EXISTS `anbiyam`;

CREATE TABLE `anbiyam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `address` text,
  `from_year` int(11) DEFAULT NULL,
  `to_year` int(11) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `anbiyam` */

insert  into `anbiyam`(`id`,`name`,`designation`,`address`,`from_year`,`to_year`,`contact_no`) values (1,'Adaikala Madha',NULL,NULL,NULL,NULL,NULL),(2,'Alphonsa',NULL,NULL,NULL,NULL,NULL),(3,'Annai Theresal',NULL,NULL,NULL,NULL,NULL),(4,'Anthoniyar',NULL,NULL,NULL,NULL,NULL),(5,'Arokiya Annai',NULL,NULL,NULL,NULL,NULL),(6,'Arulanandhar',NULL,NULL,NULL,NULL,NULL),(7,'Divine',NULL,NULL,NULL,NULL,NULL),(8,'Ingnasiyar',NULL,NULL,NULL,NULL,NULL),(9,'Kirusthu Arasar',NULL,NULL,NULL,NULL,NULL),(10,'Kulanthai Yesu',NULL,NULL,NULL,NULL,NULL),(11,'Lourdu Annai',NULL,NULL,NULL,NULL,NULL),(12,'Mariyannai',NULL,NULL,NULL,NULL,NULL),(13,'Mary',NULL,NULL,NULL,NULL,NULL),(14,'Michel Thudhar',NULL,NULL,NULL,NULL,NULL),(15,'Nallayan',NULL,NULL,NULL,NULL,NULL),(16,'Padhuva',NULL,NULL,NULL,NULL,NULL),(17,'Paul',NULL,NULL,NULL,NULL,NULL),(18,'Poondi Madha',NULL,NULL,NULL,NULL,NULL),(19,'Sagaya Madha',NULL,NULL,NULL,NULL,NULL),(20,'Santhana Madha',NULL,NULL,NULL,NULL,NULL),(21,'Santhiyagapper',NULL,NULL,NULL,NULL,NULL),(22,'Sebastin',NULL,NULL,NULL,NULL,NULL),(23,'Sebestiyar',NULL,NULL,NULL,NULL,NULL),(24,'St. Antony',NULL,NULL,NULL,NULL,NULL),(25,'St.Arokiya Madha',NULL,NULL,NULL,NULL,NULL),(26,'St.Savariyar',NULL,NULL,NULL,NULL,NULL),(27,'Susaiyapper',NULL,NULL,NULL,NULL,NULL),(28,'Theresal',NULL,NULL,NULL,NULL,NULL),(29,'Thirukkudumbam',NULL,NULL,NULL,NULL,NULL),(30,'Thon Bosco',NULL,NULL,NULL,NULL,NULL),(31,'St.Savariyar',NULL,NULL,NULL,NULL,NULL),(32,'Viyagula Madha',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `customers` */

insert  into `customers`(`id`,`f_name`,`l_name`,`gender`,`address`,`city`,`state`,`phone`,`email`,`date_of_birth`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (18,'bhushan','Chhadva','male','Padmavati','mumbai','Maharashtra','34343432','bhusahan2@gmail.com','1991-06-18',0,NULL,0,NULL),(19,'Jayant','atre','male','Priyadarshini A102, adwa2','wad','Maharashtra','34343432','bhusahan2@gmail.com','1998-05-18',0,NULL,0,NULL),(21,'bhushan','sutar','male','Priyadarshini A102, adwa2','mumbai','Maharashtra','34343432','bhusahan2@gmail.com','2016-11-24',0,NULL,0,NULL),(23,'Paolo',' Accorti','male','Priyadarshini A102, adwa2','mumbai','Maharashtra','34343432','bhusahan2@gmail.com','1992-02-04',0,NULL,0,NULL),(24,'Roland',' Mendel','male','Priyadarshini A102, adwa2','mumbai','Maharashtra','34343432','bhusahan2@gmail.com','2016-11-30',0,NULL,0,NULL),(25,'John','doe','male','City, view','','Maharashtra','8875207658','john@abc.com','2017-01-27',0,NULL,0,NULL),(26,'Maria','Anders','female','New york city','','Maharashtra','8856705387','chetanshenai9@gmail.com','2017-01-28',0,NULL,0,NULL),(27,'Ana',' Trujillo','female','Street view','','Maharashtra','9975658478','chetanshenai9@gmail.com','1992-07-16',0,NULL,0,NULL),(28,'Thomas','Hardy','male','120 Hanover Sq','','Maharashtra','885115323','abc@abc.com','1985-06-24',0,NULL,0,NULL),(29,'Christina','Berglund','female','Berguvsvägen 8','','Maharashtra','9985125366','chetanshenai9@gmail.com','1997-02-12',0,NULL,0,NULL),(30,'Ann','Devon','male','35 King George','','Maharashtra','8865356988','abc@abc.com','1988-02-09',0,NULL,0,NULL),(31,'Helen','Bennett','female','Garden House Crowther Way','','Maharashtra','75207654','chetanshenai9@gmail.com','1983-06-15',0,NULL,0,NULL),(32,'Annette','Roulet','female','1 rue Alsace-Lorraine','',' ','3410005687','abc@abc.com','1992-01-13',0,NULL,0,NULL),(33,'Yoshi','Tannamuri','male','1900 Oak St.','','Maharashtra','8855647899','chetanshenai9@gmail.com','1994-07-28',0,NULL,0,NULL),(34,'Carlos','González','male','Barquisimeto','','Maharashtra','9966447554','abc@abc.com','1997-06-24',0,NULL,0,NULL),(35,'Fran',' Wilson','male','Priyadarshini ','','Maharashtra','5844775565','fran@abc.com','1997-01-27',0,NULL,0,NULL),(36,'Jean',' Fresnière','female','43 rue St. Laurent','','Maharashtra','9975586123','chetanshenai9@gmail.com','2002-01-28',0,NULL,4,'2020-02-12 09:14:16'),(37,'Jose','Pavarotti','male','187 Suffolk Ln.','','Maharashtra','875213654',' Pavarotti@gmail.com','1997-02-04',0,NULL,0,NULL),(38,'Palle','Ibsen','female','Smagsløget 45','','Maharashtra','9975245588','Palle@gmail.com','1991-06-17',0,NULL,0,'2018-01-14 22:41:42'),(39,'Paula','Parente','male','Rua do Mercado, 12','','Maharashtra','659984878','abc@gmail.com','1996-02-06',0,NULL,0,NULL),(40,'Matti',' Karttunen','female','Keskuskatu 45','','Maharashtra','845555125','abc@abc.com','1984-06-19',0,NULL,0,NULL),(47,'Chetan ','Doe','male','afa',NULL,'Maharashtra','9934678658','chetanshenai9@gmail.com',NULL,0,'2018-11-17 23:56:16',0,NULL),(48,'Chetan ','Singh','male','',NULL,' ','','','0000-00-00',0,'2018-11-18 12:21:27',4,'2020-02-12 09:14:34'),(49,'gdg','gdrrrrrwr','male','sftr',NULL,'Maharashtra','27534.','aeref@test.com','2020-02-10',4,'2020-02-13 07:15:43',0,NULL),(50,'dgdhh','hdrye','male',NULL,NULL,'Kerala',NULL,NULL,'2020-02-03',4,'2020-02-13 07:16:47',0,NULL),(51,'gdg','gdrrrrrwr','male',NULL,NULL,'Kerala',NULL,NULL,NULL,4,'2020-02-13 07:30:23',0,NULL),(52,'dgdhh','gdrrrrrwr','male',NULL,NULL,'Madhya pradesh',NULL,NULL,NULL,4,'2020-02-13 08:05:40',0,NULL);

/*Table structure for table `movements` */

DROP TABLE IF EXISTS `movements`;

CREATE TABLE `movements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `address` text,
  `from_year` int(11) DEFAULT NULL,
  `to_year` int(11) DEFAULT NULL,
  `contact_no` bigint(25) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `movements` */

insert  into `movements`(`id`,`name`,`designation`,`address`,`from_year`,`to_year`,`contact_no`) values (1,'Choir',NULL,'Mr. S. Augustin\r\n22, Old Koil Street,\r\nTrichy - 1.\r\n',NULL,NULL,9244633108),(2,'Sagaya Matha Youth Boys',NULL,' J. Arunraj\r\nNo. 3/21, Periya palayam,\r\nVaraganery, Trichy â€“ 8.\r\n					  	\r\n					  ',NULL,NULL,9171542200),(3,'Annai theresal Youth Girls',NULL,'S.Claura\r\nNo.5/A/14, Periyar Nagar,\r\nVaraganery, Trichy- 8.\r\n',NULL,NULL,8015945320),(4,'Womenâ€™s commission',NULL,'Mrs. A. Victoria,\r\nNo.18/43, Anandha Puram New Street,\r\nVaraganery, Trichy â€“ 8.\r\n',NULL,NULL,9965814103),(5,'Christian Workers Movement',NULL,'Mr. M. Sagaya Arockiaraj,\r\nNo.55, Anandha Puram New Street,\r\nVaraganery, Trichy â€“ 8.\r\n',NULL,NULL,9944704855),(6,'Catholic Association',NULL,'Mr. F. Babu Fernandez,\r\nNo.18, Anthoniyar Koil Street,\r\nVaraganery, Trichy â€“ 8.\r\n',NULL,NULL,9442143402),(7,'Good News Prayer Group',NULL,'Mr. S.A. Xavier,\r\nNo.7, Agraharam,\r\nVaraganery, Trichy â€“ 8.\r\n',NULL,NULL,8973609303),(8,'Matha Magimai Parai Satrum Commission',NULL,'Mrs. P. Bakiya Sheeli,\r\nNo.30/26C, Sandhanapuram\r\nVaraganery, Trichy â€“ 8.\r\n',NULL,NULL,9894086801);

/*Table structure for table `news_one` */

DROP TABLE IF EXISTS `news_one`;

CREATE TABLE `news_one` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title_one` varchar(100) DEFAULT NULL,
  `date_one` date DEFAULT NULL,
  `description_one` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `news_one` */

insert  into `news_one`(`id`,`title_one`,`date_one`,`description_one`) values (1,'Sadham','2020-02-20','testingkjmlml');

/*Table structure for table `news_three` */

DROP TABLE IF EXISTS `news_three`;

CREATE TABLE `news_three` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title_three` varchar(100) DEFAULT NULL,
  `date_three` date DEFAULT NULL,
  `description_three` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `news_three` */

insert  into `news_three`(`id`,`title_three`,`date_three`,`description_three`) values (1,'new year','2020-01-01','May joy and happiness snow on you, may the bells jingle for you and may Santa be extra good to you. Merry Christmas. I wish that you get what you wish for, I wish that you get what you want, To me, you are my life, So go out there and flaunt, All your new dresses and gifts, Merry Christmas and happy new-year!');

/*Table structure for table `news_two` */

DROP TABLE IF EXISTS `news_two`;

CREATE TABLE `news_two` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title_two` varchar(100) DEFAULT NULL,
  `date_two` date DEFAULT NULL,
  `description_two` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `news_two` */

insert  into `news_two`(`id`,`title_two`,`date_two`,`description_two`) values (1,'Ester','2020-02-18','Christmas is so much more fun when I get to celebrate with you.!!\r\nMerry Christmas to the coolest kid I know.!!\r\nNothing is better at Christmas time than hanging out with a cute kid.!!');

/*Table structure for table `parish_finance` */

DROP TABLE IF EXISTS `parish_finance`;

CREATE TABLE `parish_finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `address` text,
  `from_year` int(11) DEFAULT NULL,
  `to_year` int(11) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `parish_finance` */

insert  into `parish_finance`(`id`,`name`,`designation`,`address`,`from_year`,`to_year`,`contact_no`) values (1,'Rev. Fr. S. Luis Britto (President & Parish priest)',NULL,NULL,NULL,NULL,NULL),(2,'Mr. Babu Fernandez',NULL,NULL,NULL,NULL,NULL),(3,'Mr. Raja Manickam',NULL,NULL,NULL,NULL,NULL),(4,'Mr. Paulraj',NULL,NULL,NULL,NULL,NULL),(5,'Mrs. Jesintha',NULL,NULL,NULL,NULL,NULL),(6,'Mrs. Terasa',NULL,NULL,NULL,NULL,NULL),(7,'Mr. Selvaraj',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `parish_priest` */

DROP TABLE IF EXISTS `parish_priest`;

CREATE TABLE `parish_priest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `address` text,
  `from_year` int(11) DEFAULT NULL,
  `to_year` int(11) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

/*Data for the table `parish_priest` */

insert  into `parish_priest`(`id`,`name`,`designation`,`address`,`from_year`,`to_year`,`contact_no`) values (1,'Rev.Fr.S.S.Lonvei',NULL,NULL,1881,1882,NULL),(2,'Rev.Fr.S.S.Lassers SJ',NULL,NULL,1882,1884,NULL),(3,' Rev.Fr. T. Ginger SJ 		',NULL,NULL,1884,1888,NULL),(4,'Rev.Fr. G. Baruns SJ ',NULL,NULL,1888,1890,NULL),(5,'Rev.Fr. Y. Yagapper ',NULL,NULL,1890,1891,NULL),(6,'Rev.Fr. A. Sinnapper ',NULL,NULL,1891,1898,NULL),(7,'Rev.Fr. A. Goris ',NULL,NULL,1898,1901,NULL),(8,'Rev.Fr.Nespelous ',NULL,NULL,1901,1903,NULL),(9,'Rev.Fr. A. Gor ',NULL,NULL,1903,1908,NULL),(10,'Rev.Fr. L. Carty ',NULL,NULL,1908,1911,NULL),(11,'Rev.Fr. T. Roche ',NULL,NULL,1911,1923,NULL),(12,'Rev.Fr. A. Mona ',NULL,NULL,1923,1925,NULL),(13,'Rev.Fr. F.X. Selvam ',NULL,NULL,1925,1934,NULL),(14,'Rev.Fr. J. Maria Louis ',NULL,NULL,1934,1936,NULL),(15,'Rev.Fr.M. Ignatius ',NULL,NULL,1936,1939,NULL),(16,'Rev.Fr. S.A. Marianayagam ',NULL,NULL,1939,1944,NULL),(17,'Rev.Fr. A. Arulsamy ',NULL,NULL,1944,1945,NULL),(18,'Rev.Fr. M.A. Antony ',NULL,NULL,1945,1946,NULL),(19,'Rev.Fr. K.V. Peter ',NULL,NULL,1946,1949,NULL),(20,'Rev.Fr. A. Thomas	',NULL,NULL,1949,1969,NULL),(21,'Rev.Fr. J. Stanislaus',NULL,NULL,1969,1971,NULL),(22,'Rev.Fr. K.S. Michael	',NULL,NULL,1971,1974,NULL),(23,'Rev.Fr. M. Arulanandam',NULL,NULL,1974,1980,NULL),(24,'Rev.Fr. T.L. Sundararaj',NULL,NULL,1980,1984,NULL),(25,'Rev.Fr. I. Selvanathan',NULL,NULL,1984,1987,NULL),(26,'Rev.Fr. Y. Irudhayaraj',NULL,NULL,1987,1988,NULL),(27,'Rev.Fr. S. Mariagnasekaran',NULL,NULL,1988,1995,NULL),(28,'Rev.Fr. P. Thomas Paulsamy',NULL,NULL,1995,2002,NULL),(29,'Rector Rev.Fr. A. Gabriel	',NULL,NULL,2002,2007,NULL),(30,'Rector Rev.Fr. S. Alphonse Raj Prabu',NULL,NULL,2007,2009,NULL),(31,'Rector Rev.Fr. S. Louis Britto',NULL,NULL,2009,2020,NULL),(73,'sadham',NULL,NULL,2023,2027,NULL);

/*Table structure for table `pious` */

DROP TABLE IF EXISTS `pious`;

CREATE TABLE `pious` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `address` text,
  `from_year` int(11) DEFAULT NULL,
  `to_year` int(11) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `pious` */

insert  into `pious`(`id`,`name`,`designation`,`address`,`from_year`,`to_year`,`contact_no`) values (1,'Poongavana Sabai',NULL,'Mrs. X. Joysi\r\n1A/ 13, Nithyanantha Puram,\r\nNorth Street, Varaganery,\r\nTrichy - 8.\r\n',NULL,NULL,9842004140),(2,'St. Vincent de Paul',NULL,'  Mr. Sebastin Thomas\r\n35 / 35, Redsagar Puram,\r\nPalakkarai,\r\nTrichy - 8.\r\n',NULL,NULL,2711958),(3,'Legion of Mary',NULL,'Mr. M. Selvaraj\r\n23B, Santhana Puram,\r\nVaraganery,\r\nTrichy - 8.\r\n',NULL,NULL,9698637959);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
