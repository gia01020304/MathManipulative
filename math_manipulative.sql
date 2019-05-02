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
('n5e01pqgsphe5ah8oc5er1noisqouq2c','::1',1556775942,'__ci_last_regenerate|i:1556775942;logged_in|s:5:\"user1\";'),
('fm3c1miiu59n8604bl9v2b9vk1sft6gr','::1',1556776661,'__ci_last_regenerate|i:1556776661;logged_in|s:5:\"user1\";'),
('b1eg7j0ma661qcrlj7ulihmkhs97jrea','::1',1556776673,'__ci_last_regenerate|i:1556776673;'),
('vl59f70sencbo9r240purae697a73bjn','::1',1556777505,'__ci_last_regenerate|i:1556777505;logged_in|s:5:\"user1\";'),
('apsrb63o1uksrvk69run1lhjdkul50qa','::1',1556780563,'__ci_last_regenerate|i:1556780563;logged_in|s:5:\"user1\";'),
('b0qkveihrd1smcdjo8g0s3o4i3t1557v','::1',1556778087,'__ci_last_regenerate|i:1556778087;logged_in|s:5:\"user1\";'),
('7564rmgmur6ngakftfisj9pedm492vdo','::1',1556778915,'__ci_last_regenerate|i:1556778915;logged_in|s:5:\"user1\";'),
('dgqq2njo84dqmndheo97mvv8tu3eojth','::1',1556780347,'__ci_last_regenerate|i:1556780347;logged_in|s:5:\"user1\";'),
('jk6rqaskj2cin0rvo87htltqvod77lla','::1',1556780694,'__ci_last_regenerate|i:1556780694;logged_in|s:5:\"user1\";'),
('nvughaq453pv7k8t2tj8vip849gtr3gc','::1',1556780787,'__ci_last_regenerate|i:1556780563;logged_in|s:5:\"user1\";'),
('45khosfk5bm4t6lj4najs9moib5dhefm','::1',1556781054,'__ci_last_regenerate|i:1556781054;logged_in|s:5:\"user1\";'),
('93ej3g0n20s2gnf13rukps61v4id0j78','::1',1556781413,'__ci_last_regenerate|i:1556781413;logged_in|s:5:\"user1\";'),
('m6lnuu1ujl8v8ekcdtbp431t5jn69ntp','::1',1556782080,'__ci_last_regenerate|i:1556782080;logged_in|s:5:\"user1\";'),
('2t17svb067ka1sora7igkkpcs7b1h0j3','::1',1556782389,'__ci_last_regenerate|i:1556782389;'),
('37j3mkvrdladeu9ikbvm8cgdf1u57s54','::1',1556782777,'__ci_last_regenerate|i:1556782777;'),
('rqkgvmqad9h4i2bjrtsmalanj7i97e1e','::1',1556782703,'__ci_last_regenerate|i:1556782703;'),
('7m0j7bd289p3q4hf5h4ienbnne8p4h61','::1',1556789237,'__ci_last_regenerate|i:1556789237;'),
('id1ktsbof3852qv94d31p44a8e2475f7','::1',1556789910,'__ci_last_regenerate|i:1556789910;'),
('d8ohc35fh1sp3usvqmeu18rjet2r74qj','::1',1556790348,'__ci_last_regenerate|i:1556790348;'),
('pp3qmqm9j83lhneh89hbq1lvccv7t2m4','::1',1556791365,'__ci_last_regenerate|i:1556791365;'),
('q26oo49je401v6qb0jashb7ut6c44ik1','::1',1556793416,'__ci_last_regenerate|i:1556793416;'),
('v7t1kvhnms11thtuns8m135ctkusvgpu','::1',1556793835,'__ci_last_regenerate|i:1556793835;'),
('1vj8n9ip2mbs405pki2evut21mjd4ps5','::1',1556795021,'__ci_last_regenerate|i:1556795021;'),
('a3fi64mfiv7nhfsk4tu1sguq58scj3v2','::1',1556795848,'__ci_last_regenerate|i:1556795848;'),
('gt32s3e9d8pqlbf3j5eun4q7nqalfpev','::1',1556796189,'__ci_last_regenerate|i:1556796189;'),
('95hif8kt4vpf1r91kk27m6ainnvjvffb','::1',1556796511,'__ci_last_regenerate|i:1556796511;'),
('br6bi8vjerff6lia6v0355e1gvfcek0q','::1',1556796863,'__ci_last_regenerate|i:1556796863;'),
('6q68vj3494oiu8kf6svudrnmhplsqfc0','::1',1556798324,'__ci_last_regenerate|i:1556798324;logged_in|s:5:\"user2\";'),
('4bajoksl9ggukles0imfqcntfpelfacb','::1',1556799227,'__ci_last_regenerate|i:1556799227;logged_in|s:18:\"student1@gmail.com\";id_user|s:1:\"3\";'),
('9rcsnlgtctg1v72c4th3pfbkfl47dc6b','::1',1556798830,'__ci_last_regenerate|i:1556798829;logged_in|s:5:\"user2\";'),
('tdh904imcobt28cmf4f0rqfj0ucqjbnm','::1',1556799606,'__ci_last_regenerate|i:1556799606;id_user|s:1:\"3\";'),
('jad4f37cns1khn3j4ae74a8up7ptm0cs','::1',1556799954,'__ci_last_regenerate|i:1556799954;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('dnk80glpmj7m5usn769asal9lsb6f9d3','::1',1556800733,'__ci_last_regenerate|i:1556800733;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('g5g2tgg29rf7pnqv2o0cksic4grilsd3','::1',1556801105,'__ci_last_regenerate|i:1556801105;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('2r9hu82vfbq6dt8gigfng0arl6gubvnh','::1',1556801432,'__ci_last_regenerate|i:1556801432;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('l4fghmhceboj1e6jdgkf6a70k5u27tte','::1',1556801780,'__ci_last_regenerate|i:1556801780;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('3o6uik2ehl5v91lbrv63e47taaca50bi','::1',1556802301,'__ci_last_regenerate|i:1556802301;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('tegkp091ensd8r5gs2vlmiofujt6j57n','::1',1556802676,'__ci_last_regenerate|i:1556802676;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('thuosbvdncnfcq524p6i6vua049fdls4','::1',1556802982,'__ci_last_regenerate|i:1556802982;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('6fq6kf0f98luu61cglbalihu2a0uam3m','::1',1556803323,'__ci_last_regenerate|i:1556803323;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('94oksrblaa01qfe20ra09r6dc8j9s1e3','::1',1556803689,'__ci_last_regenerate|i:1556803689;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('1nasobloepg7dgf5dbtc7aeh6m9el1hh','::1',1556804026,'__ci_last_regenerate|i:1556804026;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('8ul1ip7bfv4fpl4lon8cfknv8l7ate5e','::1',1556804332,'__ci_last_regenerate|i:1556804327;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('duhe8hi11kradirg3en0vc4c71r59lo6','::1',1556804706,'__ci_last_regenerate|i:1556804706;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('ni2kk8kgb5a5olst35h9bustgf55voee','::1',1556805211,'__ci_last_regenerate|i:1556805211;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('8k3gm36kj12ofac4r47915v5da2httbg','::1',1556805529,'__ci_last_regenerate|i:1556805529;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('qujlv18rhukff5e037nu1fm8j7qkei11','::1',1556806049,'__ci_last_regenerate|i:1556806049;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('tnm0mb8rh4f1uvv2jl9a7ke9s7r407h8','::1',1556806388,'__ci_last_regenerate|i:1556806388;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('9538f45ojq70n0a6rm1oscbovctq0b64','::1',1556806761,'__ci_last_regenerate|i:1556806761;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('adv0rgqacq3nu1i6vh2fr6ka4317abtc','::1',1556807161,'__ci_last_regenerate|i:1556807161;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('9rqf15i4e344lgklro40o5ifk9m0msnj','::1',1556807495,'__ci_last_regenerate|i:1556807495;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('avs16n7v3ireehbmfu2vt49s2thddebb','::1',1556807552,'__ci_last_regenerate|i:1556807495;id_user|s:1:\"2\";logged_in|s:5:\"user2\";');

/*Table structure for table `shares` */

DROP TABLE IF EXISTS `shares`;

CREATE TABLE `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(8) DEFAULT NULL,
  `value` text,
  `iduser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `shares` */

insert  into `shares`(`id`,`key`,`value`,`iduser`) values 
(11,'4s9hitW8','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',2),
(12,'kLy4Xqs5','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"121\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"222\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"273\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw><polyline id=\"SvgjsPolyline1007\" points=\"1246,537 1246,537 1246,536 1247,536 1248,536 1250,540 1260,550 1279,565 1316,578 1365,582 1412,579 1460,564 1496,546 1512,529 1512,518 1503,509 1478,500 1419,497 1348,498 1261,510 1197,529 1163,551 1147,571 1145,589 1150,607 1166,621 1200,631 1243,630 1292,612 1322,589 1333,562 1322,539 1289,518 1232,507 1141,508 1057,523 1001,547 983,569 993,586 1040,608 1125,620 1238,617 1337,595 1386,572 1392,554 1372,539 1316,528 1250,528 1198,543 1176,561 1182,579 1216,600 1281,612 1354,607 1406,588 1424,564 1413,539 1370,516 1279,502 1175,509 1112,530 1094,551 1106,572 1150,596 1221,604 1316,596 1377,573 1406,544 1399,519 1353,497 1253,492 1128,515 1055,550 1034,582 1047,608 1110,630 1186,630 1283,605 1349,566 1366,534 1349,516 1288,506 1192,518 1099,548 1055,581 1054,600 1082,616 1160,622 1262,604 1358,568 1398,538 1390,528 1344,523 1249,533 1144,563 1098,592 1100,608 1113,615\" stroke=\"red\" stroke-width=\"2\" fill-opacity=\"0\"></polyline></draw><background><url>http://localhost:8080/MathManipulative//lib/stencils/background/5.png</url><width>827</width><height>450</height></background>',2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`) values 
(1,'user1','123',NULL),
(2,'user2','123','gia01020304@gmail.com'),
(3,'student1@gmail.com','123','gia01020304@gmail.comd');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
