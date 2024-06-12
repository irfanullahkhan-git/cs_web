/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.10.2-MariaDB : Database - students_database
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Picture` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_info` */

insert  into `user_info`(`ID`,`Name`,`Gender`,`Email`,`Password`,`Picture`) values 
(1,'Irfan Khan','M','irfan@gmail.com','$2y$10$t310603ZjucwZiHBtvaguO5XhPX.3vBhVt7O/niguwNTOyrQJ8u9O','uploads/1718133337_display_picture.jpg'),
(2,'Irfan Khan','M','irfan1@gmail.com','$2y$10$BwwbedVcyzSvGTBtQru5Y.ECBm7bTC8ZwpK21uoaEYGJhRzB6fgvW','uploads/1718133362_display_picture.jpg'),
(3,'Irfan Khan','M','irfan11@gmail.com','$2y$10$GPITmYiWJweP8i7/wxQF0e95.4Shwra8NYQT3C5giDnXRp6vJGJuu','uploads/1718174100_display_picture.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
