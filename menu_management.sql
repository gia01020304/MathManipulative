/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.7.21 : Database - mathmanipulative
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mathmanipulative` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mathmanipulative`;

/*Table structure for table `menu_management` */

DROP TABLE IF EXISTS `menu_management`;

CREATE TABLE `menu_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `visible` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `menu_management` */

insert  into `menu_management`(`id`,`key`,`value`,`text`,`visible`) values 
(29,'background','background','Backgrounds',''),
(30,'attributeBlock','attributeBlock','Attribute Blocks',''),
(31,'algebraTiles','algebraTiles','Algebra Tiles',''),
(32,'baseTenBlocks','baseTenBlocks','Base Ten Blocks',''),
(33,'centimeterCubes','centimeterCubes','Centimeter Cubes',''),
(34,'connectingcubes','connectingcubes','Connecting Cubes',''),
(35,'clock','clock','Clock',''),
(36,'integerCounters','integerCounters','Integer Counters',''),
(37,'fractionTiles','fractionTiles','Fraction Tiles',''),
(38,'fractioncircle','fractioncircle','Fraction Circles',''),
(39,'money','money','Money',''),
(40,'numberLine','numberLine','Number Line',''),
(41,'thermometer','thermometer','Thermometer',''),
(42,'patternBlocks','patternBlocks','Pattern Blocks','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
