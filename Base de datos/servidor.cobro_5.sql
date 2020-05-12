/*
SQLyog Community- MySQL GUI v8.21 
MySQL - 5.6.12-log : Database - servidor.cobro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`servidor.cobro` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `servidor.cobro`;

/*Table structure for table `alumnos` */

DROP TABLE IF EXISTS `alumnos`;

CREATE TABLE `alumnos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `beca_id` tinyint(4) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `seccion` varchar(10) DEFAULT NULL,
  `grado` varchar(10) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `observacion` text NOT NULL,
  `credito_comida` int(10) NOT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `alumnos` */

insert  into `alumnos`(`id`,`nombre`,`beca_id`,`celular`,`seccion`,`grado`,`codigo`,`observacion`,`credito_comida`,`estatus`) values (6,'JOSE ANTONIO CARRO FLORES ',2,'5528828828','a','1','402','tiene un adeudo pasado dela fecha 10-01-2020',5,'Activo'),(7,'GABRIEL JOANGEL CORDERO SANCHEZ ',1,'5511993273','a','2','587','sin adeude',5,'Activo'),(8,'ANA GABRIEL REQUENA OVALLES ',1,'5562726262','a','4','303','sin adeudo ',5,'Activo'),(9,'CARLOS EDUARDO ESCOBAR LIMONCHE',1,'5522525252','b','4','690','sin adeudo',5,'Activo'),(10,'PEDRO JOSE PEREZ ',1,'5539838839','b','1','749','sin adeudo',5,'Activo'),(11,'TEREZA MARIA CORTEZ MIJARES',1,'5556566343','a','1','375','sin adeudo',5,'Activo'),(12,'JUAN JOSE LANDAETA CORONA',1,'5524452322','a','5','159','sin adeudos',5,'Activo'),(13,'ANGELICA MARIA MARTINEZ ARIAS ',1,'5538865222','a','3','071','sin adeudo',5,'Activo'),(14,'JUANA ANDREINA PEREZ ',1,'5533343433','b','4','694','sin adeudo',5,'Activo'),(15,'RAFAEL HERNADEZ',1,'6534563632','a','3','381','aduskdbhdu',5,'Activo'),(16,'AMERICA MARIA LOPEZ DORANTE',1,'5533322111','b','1','091','sin andeudo',5,'Activo');

/*Table structure for table `asistencias` */

DROP TABLE IF EXISTS `asistencias`;

CREATE TABLE `asistencias` (
  `id` bigint(20) NOT NULL,
  `alumno_id` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `asistencias` */

insert  into `asistencias`(`id`,`alumno_id`,`fecha`) values (0,9,'2020-03-16'),(0,10,'2020-03-16'),(0,11,'2020-03-16'),(0,12,'2020-03-16'),(0,13,'2020-03-16'),(0,11,'2020-03-17'),(0,11,'2020-03-18'),(0,11,'2020-03-19'),(0,11,'2020-03-20'),(0,11,'2020-03-23'),(0,11,'2020-03-24'),(0,11,'2020-03-27');

/*Table structure for table `becas` */

DROP TABLE IF EXISTS `becas`;

CREATE TABLE `becas` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `precio_comida` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `becas` */

insert  into `becas`(`id`,`nombre`,`precio_comida`) values (1,'Regular',24),(2,'Becado al 50%',15),(3,'Bacado al 100%',0);

/*Table structure for table `billetera` */

DROP TABLE IF EXISTS `billetera`;

CREATE TABLE `billetera` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(10) NOT NULL,
  `numero_comida` int(10) NOT NULL,
  `credito_comida` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `billetera` */

insert  into `billetera`(`id`,`alumno_id`,`numero_comida`,`credito_comida`,`fecha`) values (27,9,6,5,'2020-03-16'),(28,11,0,3,'2020-03-16'),(29,10,8,5,'2020-03-16'),(30,13,4,5,'2020-03-16'),(31,12,11,5,'2020-03-16');

/*Table structure for table `pagos` */

DROP TABLE IF EXISTS `pagos`;

CREATE TABLE `pagos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(10) NOT NULL,
  `precio_beca` double NOT NULL,
  `tipo_pago_id` int(10) NOT NULL,
  `monto` double DEFAULT NULL,
  `credito_generado` int(10) DEFAULT NULL,
  `credito_total` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `pagos` */

insert  into `pagos`(`id`,`alumno_id`,`precio_beca`,`tipo_pago_id`,`monto`,`credito_generado`,`credito_total`,`fecha`) values (81,9,24,1,168,7,12,'2020-03-16'),(82,11,24,1,96,4,9,'2020-03-16'),(83,10,24,1,216,9,14,'2020-03-16'),(84,13,24,1,120,5,10,'2020-03-16'),(85,12,24,1,288,12,17,'2020-03-16'),(86,11,24,1,48,2,4,'2020-03-24');

/*Table structure for table `tabla_r_precio` */

DROP TABLE IF EXISTS `tabla_r_precio`;

CREATE TABLE `tabla_r_precio` (
  `id_precio_actual` int(10) NOT NULL AUTO_INCREMENT,
  `precio_actual` varchar(10) DEFAULT NULL,
  `credito_actual` varchar(10) DEFAULT NULL,
  `fecha_cambio` date DEFAULT NULL,
  PRIMARY KEY (`id_precio_actual`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `tabla_r_precio` */

insert  into `tabla_r_precio`(`id_precio_actual`,`precio_actual`,`credito_actual`,`fecha_cambio`) values (23,'24','1','2020-01-29');

/*Table structure for table `tipo_pago` */

DROP TABLE IF EXISTS `tipo_pago`;

CREATE TABLE `tipo_pago` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_pago` */

insert  into `tipo_pago`(`id`,`nombre`,`fecha`) values (1,'Efectivo','2020-02-09'),(2,'Deposito','2020-02-09'),(3,'Pago Diario','2020-02-09'),(4,'Vale','2020-02-09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
