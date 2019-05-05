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
('avs16n7v3ireehbmfu2vt49s2thddebb','::1',1556807552,'__ci_last_regenerate|i:1556807495;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('s066n9lhh4ufg4ano3ttp571p1dr2jgg','::1',1556850275,'__ci_last_regenerate|i:1556850275;id_user|s:1:\"1\";'),
('15ub41m39ikjehj5gu3ijgn42i6hqm7q','::1',1556850632,'__ci_last_regenerate|i:1556850632;id_user|s:1:\"1\";'),
('itoi8phcsuqk9f2o7hc6mvg0uf211fn3','::1',1556850992,'__ci_last_regenerate|i:1556850992;id_user|s:1:\"1\";'),
('t6s35p8hnbfgd6rpd772rkav6vsmp31d','::1',1556851331,'__ci_last_regenerate|i:1556851331;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('rsraa4gi98l44vql8ipncbmfj79677p2','::1',1556851486,'__ci_last_regenerate|i:1556851331;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('1s2o1k92bkb30mql3218ue45mjsimc7f','::1',1556884568,'__ci_last_regenerate|i:1556884568;'),
('ks0s59tt9v7sn2fg307l1kpkihb7bde5','::1',1556884941,'__ci_last_regenerate|i:1556884941;'),
('gihh8b70jc43fn1vk08ilv5ah1rtq5an','::1',1556885271,'__ci_last_regenerate|i:1556885271;'),
('jb2tcmb6u779l9hli90pp0u393i5li64','::1',1556885673,'__ci_last_regenerate|i:1556885673;'),
('7s0rl37eqva5r429c0du8ce1g2jj00s4','::1',1556886167,'__ci_last_regenerate|i:1556886167;'),
('ph0c80nig271a906ieb5i4dae73lj4he','::1',1556886478,'__ci_last_regenerate|i:1556886478;'),
('2nmrpj0t347ovm15189np51vbkbeg4ks','::1',1556886850,'__ci_last_regenerate|i:1556886850;'),
('icj4b8a4k4ui53grisjvhhe0tg4m18ik','::1',1556887158,'__ci_last_regenerate|i:1556887158;'),
('e5i5krcon5c2korl0ser5veraeiahcjf','::1',1556887479,'__ci_last_regenerate|i:1556887479;'),
('fst2ddvc00fkiovqtaer3qq02jcj0cpg','::1',1556887844,'__ci_last_regenerate|i:1556887844;'),
('v3rr3kiadmmmn0kludnh2hu0fvaut0q7','::1',1556888151,'__ci_last_regenerate|i:1556888151;'),
('3891jgijtvpk5asbi92pr7tvvts82ce1','::1',1556888508,'__ci_last_regenerate|i:1556888508;'),
('ko4gke1l0ac0sesars2v7mkrnej7unof','::1',1556888921,'__ci_last_regenerate|i:1556888921;'),
('5oc98vk64ktj7f5p7rt6jcqr2rh2rf29','::1',1556889996,'__ci_last_regenerate|i:1556889996;'),
('5o4s00lqne4efm775t2b5fl6tih8827d','::1',1556890422,'__ci_last_regenerate|i:1556890422;'),
('7qfjol5g9dva5op2ojdg1g98hn1i3nfd','::1',1556891212,'__ci_last_regenerate|i:1556891212;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('kq2n8gvmp2eoanmaq5qkc7hmm7rs4vcl','::1',1556892153,'__ci_last_regenerate|i:1556892153;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('btc6pmmb9fnm2pvgq7f6bbn0sb54qahs','::1',1556892636,'__ci_last_regenerate|i:1556892636;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('m8a82582aejf627scj51hm004arrqqp4','::1',1556893508,'__ci_last_regenerate|i:1556893508;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('6h1cok7baukf26ne60dqu2joopu6umac','::1',1556893822,'__ci_last_regenerate|i:1556893822;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('rknkujb0g0lnb26co4oilcag99ha1bhi','::1',1556894158,'__ci_last_regenerate|i:1556894158;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('a9algni1l457o125v6imgotur0ft3htg','::1',1556894945,'__ci_last_regenerate|i:1556894945;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('6rekp997kbfab9n456a084r3er4026hd','::1',1556895490,'__ci_last_regenerate|i:1556895490;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('sdn8d1pdvd7j47um02s33h3ab8chd0k9','::1',1556895795,'__ci_last_regenerate|i:1556895795;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('bt7eivf7kflht6qtqk6cpogc1ck90ob6','::1',1556896117,'__ci_last_regenerate|i:1556896117;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('gbcq1fce9ebcjpi6pge96jp0ohjqiidd','::1',1556896455,'__ci_last_regenerate|i:1556896455;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('j5901fs6tp4c4go33dvsnnbmbt1r8ej8','::1',1556897095,'__ci_last_regenerate|i:1556897095;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('9jmoi9pq556fjokf024ffgbkn4kde7ff','::1',1556897473,'__ci_last_regenerate|i:1556897473;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('srku58t3t4voron3arkd5hiqq71gioab','::1',1556898556,'__ci_last_regenerate|i:1556898556;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('g987a20qaldi135tj1oi5e4t14jffgmi','::1',1556898904,'__ci_last_regenerate|i:1556898904;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('5qqukvm90dav7hqncktic5b3khnlsmuj','::1',1556899275,'__ci_last_regenerate|i:1556899275;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('c9kln6ipbehpspf37tht40so892gv885','::1',1556899309,'__ci_last_regenerate|i:1556899275;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('k8k0iiq72m9qfm4nb48fp9mo0ejfdmdl','::1',1556928495,'__ci_last_regenerate|i:1556928495;'),
('ibkae51ks2bh6jl22tvsj0l74vkfqvve','::1',1556931747,'__ci_last_regenerate|i:1556931747;logged_in|s:5:\"user1\";id_user|s:1:\"1\";'),
('itf7411sn41fu898sj3utr7or21g5g2e','::1',1556932277,'__ci_last_regenerate|i:1556932277;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('6d12icvlhavrmu19dkmschq9ja010q1j','::1',1556934938,'__ci_last_regenerate|i:1556934938;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('vsg6tsbsnhj13atifci7h4mehl788s4k','::1',1556935676,'__ci_last_regenerate|i:1556935676;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('tha6tqjhn18tccjv6rbq04r1ept0qrus','::1',1556936744,'__ci_last_regenerate|i:1556936744;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('lpf5n21fh89f61rcujim6gtamgch8fe2','::1',1556944181,'__ci_last_regenerate|i:1556944181;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('uh074lrcubnv1qo8krh0s3l1g69goahp','::1',1556944676,'__ci_last_regenerate|i:1556944676;id_user|s:1:\"1\";'),
('q8gdel6jv3eevga9qqp4snj5islfi9aq','::1',1556945048,'__ci_last_regenerate|i:1556945048;id_user|s:1:\"1\";'),
('h0sbb43ji7id9j9f8beagls1mc1181t2','::1',1556945573,'__ci_last_regenerate|i:1556945573;id_user|s:1:\"1\";'),
('snoj2vdnh7kq37g7dg31jj6npkhdhtfl','::1',1556945955,'__ci_last_regenerate|i:1556945955;id_user|s:1:\"1\";'),
('d5etj4g22fg8k9uiuctf7p6uakqvt7ik','::1',1556946776,'__ci_last_regenerate|i:1556946776;id_user|s:1:\"1\";'),
('8dmk4hft1iqmfm45hdfvklau1vs1g4r2','::1',1556946405,'__ci_last_regenerate|i:1556946404;id_user|s:1:\"1\";'),
('leuk793h65djojoarakvosensl3g0a93','::1',1556947133,'__ci_last_regenerate|i:1556947133;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('lks1co7rstta00rtde8rja654ob4iera','::1',1556947477,'__ci_last_regenerate|i:1556947477;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('jbei961tjt7k5bdgpkmva0dfnnfdi1j8','::1',1556947830,'__ci_last_regenerate|i:1556947830;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('apso3c40mgk8dbmv37hpcvngcd5bj24t','::1',1556948438,'__ci_last_regenerate|i:1556948438;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('qlqsaeui9ekqn5gbbi302idpd6mjt3b3','::1',1556948745,'__ci_last_regenerate|i:1556948745;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('pqovspn49bsvaobslu9l756pkupapt45','::1',1556949073,'__ci_last_regenerate|i:1556949073;id_user|s:1:\"1\";logged_in|s:5:\"user1\";'),
('9mg54p5oea9bblvt9fug19ve5jo7a400','::1',1556949720,'__ci_last_regenerate|i:1556949720;id_user|s:1:\"2\";logged_in|s:5:\"user2\";'),
('t2ifpcdkc0s83rgrp2gdujjii8187r1q','::1',1556950226,'__ci_last_regenerate|i:1556950226;'),
('varls2rk0u1jko3nbt6mugpksj9tingv','::1',1556950942,'__ci_last_regenerate|i:1556950942;'),
('fkrc5612u6d0h29o40mk8fredqnovdkd','::1',1556951310,'__ci_last_regenerate|i:1556951310;'),
('am1iqh0to60pof4s7qjkvj9nbsavbmdo','::1',1556951631,'__ci_last_regenerate|i:1556951631;'),
('frbg559bfg0ggjg6sum0km4ck9qpm4s8','::1',1556951964,'__ci_last_regenerate|i:1556951964;logged_in|s:5:\"user1\";'),
('ci4q2qadremrreiujghehn5qnoe006gs','::1',1556952325,'__ci_last_regenerate|i:1556952325;logged_in|s:5:\"user1\";'),
('ha62diku5977t6lm3a0s7uetlmmcrdf0','::1',1556952669,'__ci_last_regenerate|i:1556952669;');

/*Table structure for table `shares` */

DROP TABLE IF EXISTS `shares`;

CREATE TABLE `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(8) DEFAULT NULL,
  `value` text,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `isshare` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `shares` */

insert  into `shares`(`id`,`key`,`value`,`iduser`,`name`,`isshare`) values 
(37,'LDCoQcV1','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"120\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"170\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"220\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,NULL,'\0'),
(38,'gUPbhY0k','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"120\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"170\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"220\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"6\" value=\"-x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"320\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"7\" value=\"-x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"420\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'a','\0'),
(39,'OC0Yv1G4','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"70\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"120\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"220\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'b','\0'),
(40,'zAHYZnVF','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"-x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"120\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"-x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"220\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"320\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"6\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"420\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'c','\0'),
(41,'vVHGc65u','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'dsadsad','\0'),
(42,'67n5Fz8N','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'cxzcxc','\0'),
(43,'1wq2PkWz','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'asfafdd','\0'),
(44,'yAprx2EX','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'cxzcx','\0'),
(45,'51nj9KIs','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'AC','\0'),
(46,'vfwZhH17','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'cxzc','\0'),
(47,'d5FGupaY','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'ihjujh',''),
(48,'GJHvA74i','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'czxcxz',''),
(49,'e3IJrK1Q','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'cvvc',''),
(50,'mPu7E8AJ','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"440\" y=\"160\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"-x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"170\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"-x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"270\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'share1',''),
(51,'4St8kBYT','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'share2',''),
(52,'G6CSRZXV','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'cxzczxc',''),
(53,'25SdfI7t','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'xczcxzc',''),
(54,'9YUS7KkR','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/></root></mxGraphModel><draw></draw>',1,'cxzcxzcx',''),
(55,'iHlqtgUu','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"70\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"120\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"220\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"6\" value=\"-x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"320\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"7\" value=\"-x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"420\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'acsac',''),
(56,'5u6qYAko','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"20\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"120\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"170\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"220\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"6\" value=\"-x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"320\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"7\" value=\"-x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"420\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'cxzcxz',''),
(57,'EUe5rwZH','<mxGraphModel><root><mxCell id=\"0\"/><mxCell id=\"1\" parent=\"0\"/><mxCell id=\"2\" value=\"-1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#D13433;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"110\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell><mxCell id=\"3\" value=\"x\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#2C883E;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"160\" width=\"20\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"4\" value=\"x&lt;sup&gt;2&lt;/sup&gt;\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#6DB0CE;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"260\" width=\"80\" height=\"80\" as=\"geometry\"/></mxCell><mxCell id=\"5\" value=\"1\" style=\"html=1;whiteSpace=wrap;aspect=fixed;fontFamily=Comic Sans MS;fontStyle=1;fillColor=#E4C564;\" vertex=\"1\" parent=\"1\"><mxGeometry x=\"20\" y=\"360\" width=\"30\" height=\"30\" as=\"geometry\"/></mxCell></root></mxGraphModel><draw></draw>',1,'cxzcsad','');

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
