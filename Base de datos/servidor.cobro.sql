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

/*Table structure for table `tabla_alumno` */

DROP TABLE IF EXISTS `tabla_alumno`;

CREATE TABLE `tabla_alumno` (
  `id_alumno` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_alumno` varchar(50) DEFAULT NULL,
  `curp_alumno` varchar(50) DEFAULT NULL,
  `celular_alumno` varchar(50) DEFAULT NULL,
  `estatus_alumno` varchar(50) DEFAULT NULL,
  `seccion_alumno` varchar(10) DEFAULT NULL,
  `grado_alumno` varchar(10) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

/*Data for the table `tabla_alumno` */

insert  into `tabla_alumno`(`id_alumno`,`nombre_alumno`,`curp_alumno`,`celular_alumno`,`estatus_alumno`,`seccion_alumno`,`grado_alumno`,`codigo`) values (95,'GABRIEL JOANGEL CORDERO SANCHEZ ','43435NHDFHJRHJEHR4','4262490527','1','4','a','0263'),(97,'MARIA SANCHEZ ','363263HDD636353227','5525187363','1','4','a','290'),(98,'GABRELE','363263HDD636353222','3423423424','1','4','a','076');

/*Table structure for table `tabla_control_abono` */

DROP TABLE IF EXISTS `tabla_control_abono`;

CREATE TABLE `tabla_control_abono` (
  `id_abono` int(10) NOT NULL,
  `id_control_pago` int(10) DEFAULT NULL,
  `monto_abono` varchar(20) DEFAULT NULL,
  `fecha_actual` varchar(10) DEFAULT NULL,
  `fecha_limite` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_abono`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tabla_control_abono` */

/*Table structure for table `tabla_control_pago` */

DROP TABLE IF EXISTS `tabla_control_pago`;

CREATE TABLE `tabla_control_pago` (
  `id_control_pago` int(10) NOT NULL,
  `id_alumno` int(10) DEFAULT NULL,
  `id_tipo_pago` int(10) DEFAULT NULL,
  `monto_pago` varchar(50) DEFAULT NULL,
  `credito_pago` varchar(50) DEFAULT NULL,
  `cantidad_comida_dia` varchar(20) DEFAULT NULL,
  `fecha_pago` varchar(20) DEFAULT NULL,
  `id_precio_comiga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_control_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tabla_control_pago` */

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

insert  into `tabla_r_precio`(`id_precio_actual`,`precio_actual`,`credito_actual`,`fecha_cambio`) values (23,'24','5','2020-01-29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
