/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - mathmanipulative
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

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('05amtc7eu6pptfrsshdh05gussh2lmil','::1',1556764860,'__ci_last_regenerate|i:1556764860;'),
('c4h4e442n6luh90flspuvq46e8p9nv1s','::1',1556765186,'__ci_last_regenerate|i:1556765186;'),
('ovlu4ih7r9ldck5o0ktb1aqc24hf8fne','::1',1556765623,'__ci_last_regenerate|i:1556765623;'),
('t5pin8dfm3hbkp8tvc82vhuracec5el1','::1',1556766712,'__ci_last_regenerate|i:1556766712;'),
('o0mbai8fhobvl3ib7qhdaju7dce25i7j','::1',1556767502,'__ci_last_regenerate|i:1556767502;'),
('cefjl1pvfmb8n0n2j4umj38jksbst9p2','::1',1556768097,'__ci_last_regenerate|i:1556768097;'),
('jvsi8v993r4j90th234egl4d7rbe1ks4','::1',1556768415,'__ci_last_regenerate|i:1556768415;'),
('2j9rvu942q8p7j9ssc1q7nj067j9fvgp','::1',1556768761,'__ci_last_regenerate|i:1556768761;'),
('g9a3t216c5otavm0gl8d7ck2fijese6t','::1',1556769130,'__ci_last_regenerate|i:1556769130;'),
('c2ed2cit6811tvqu2cd6ti97g292thps','::1',1556769440,'__ci_last_regenerate|i:1556769440;'),
('ahu7i3p07o0qjb9pse1bgpq5mgbsdk6o','::1',1556769750,'__ci_last_regenerate|i:1556769750;'),
('t68lrbg530p2r86tj5v62vpv35pdmd0u','::1',1556770062,'__ci_last_regenerate|i:1556770062;'),
('aspd3ubi6lg90ldrqdbshvicr7ud38p7','::1',1556770373,'__ci_last_regenerate|i:1556770373;'),
('tjqbvsjdtdsicrrnq5c2730siqnhkv4k','::1',1556770689,'__ci_last_regenerate|i:1556770689;'),
('pgnr2tss9bua1kd14kl6cffv982ljp7a','::1',1556770993,'__ci_last_regenerate|i:1556770993;'),
('so8e882eri5t8ees6oi5ac0ulnhls1ha','::1',1556771304,'__ci_last_regenerate|i:1556771304;'),
('dn7k1f7a8fhmah6cnno94uq79beb6tp8','::1',1556771869,'__ci_last_regenerate|i:1556771869;logged_in|s:5:\"user1\";'),
('q282f59s87a8u0gu2kndd3rri1pmjo57','::1',1556772225,'__ci_last_regenerate|i:1556772225;logged_in|s:5:\"user1\";'),
('n5e01pqgsphe5ah8oc5er1noisqouq2c','::1',1556772225,'__ci_last_regenerate|i:1556772225;logged_in|s:5:\"user1\";');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`) values 
(1,'user1','123',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
