/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.19-MariaDB : Database - selkar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`selkar` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `selkar`;

/*Table structure for table `areas` */

DROP TABLE IF EXISTS `areas`;

CREATE TABLE `areas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `areas` */

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorias_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `categorias_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categorias` */

insert  into `categorias`(`id`,`nombre`,`descripcion`,`estatus_id`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'Carrocerias','Carrocerias varias',1,NULL,'2021-08-13 23:49:00','2021-08-13 23:49:00'),
(2,'Remolques','Remolques varios',2,NULL,'2021-08-13 23:49:00','2021-08-13 23:49:00'),
(3,'Pipas','<div>Prueba</div>',1,NULL,'2021-08-14 02:06:05','2021-08-14 02:06:05');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `razonsocial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus_id` bigint(20) unsigned NOT NULL,
  `tipocliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatuscliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `clientes_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`razonsocial`,`telefono`,`email`,`direccion`,`representante`,`celular`,`estatus_id`,`tipocliente`,`estatuscliente`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'Sipro','7291039802','al221811717@gmail.com','Calle benito Juarez #1','Omar Chong Lopez','7282841804',1,'Empresa','Prospecto','2021-08-14 01:58:36','2021-08-13 23:49:01','2021-08-14 01:58:36'),
(2,'Absara','7291039802','al221811717@gmail.com','Calle benito Juarez #1','Norma Ranguel Aguilar','7282841804',2,'Particular','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(3,'Oscar Chong Lopez','7291039802','al221811717@gmail.com','Calle benito Juarez #1','Oscar Chong Lopez','7282841804',2,'Empresa','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(4,'Komatsu','7222619290','al221811717@gmail.com','Calle benito Juarez #1','Carlos Perez Suarez','7282841804',1,'Empresa','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(5,'Grupo Insustrial Miro','72282841804','al221811717@gmail.com','Calle benito Juarez #1','Marco Antonio Gonzalez','7282841804',1,'Empresa','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(6,'Bocar','7291039802','al221811717@gmail.com','Calle benito Juarez #1','Cristian Gonzalez Chong','7282841804',1,'Cliente','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(7,'Utvt','7291039802','al221811717@gmail.com','Calle benito Juarez #1','Jose Perez Sanchez','7282841804',1,'Empresa','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(8,'Spring Air','7291039802','spring@gmail.com','Calle benito Juarez #1','Nayeli Gonzales Hernandez','7282841804',1,'Empresa','Cliente',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(9,'Barcel','7291417611','ventas.barcel@gmail.com','Calle benito Juarez #1','Omar Chong Lopez','7282841804',2,'Empresa','Prospecto',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(10,'Lerka SA.DE.CV','7291417611','lerka@gmail.com','Calle benito Juarez #1','Daniel Lopez Contreras','7282841804',1,'Empresa','Cliente',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01');

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) values 
(1,'Omar Chong Lopez','al221811717@gmail.com','7291039802','Cotizacion','Requiero de un producto','2021-08-14 00:30:26','2021-08-14 00:30:26'),
(2,'Omar Chong Lopez','omar.13.chong@gmail.com','7291039802','Cotizacion','Pruebas','2021-08-14 01:46:47','2021-08-14 01:46:47'),
(3,'Omar Chong Lopez','al221811717@gmail.com','7291039802','Cotizacion','Prueba','2021-08-14 01:50:57','2021-08-14 01:50:57');

/*Table structure for table `detallesproducciones` */

DROP TABLE IF EXISTS `detallesproducciones`;

CREATE TABLE `detallesproducciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `materialadicional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `razones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producciones_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detallesproducciones_producciones_id_foreign` (`producciones_id`),
  CONSTRAINT `detallesproducciones_producciones_id_foreign` FOREIGN KEY (`producciones_id`) REFERENCES `producciones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detallesproducciones` */

/*Table structure for table `estatus` */

DROP TABLE IF EXISTS `estatus`;

CREATE TABLE `estatus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `estatus` */

insert  into `estatus`(`id`,`nombre`,`descripcion`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'Activo','Este estatus estara activo siempre',NULL,'2021-08-13 23:49:00','2021-08-13 23:49:00'),
(2,'Inactivo','Este estatus estara inactivo',NULL,'2021-08-13 23:49:00','2021-08-13 23:49:00'),
(3,'Cancelado','Este estatus estara cancelado',NULL,'2021-08-13 23:49:00','2021-08-13 23:49:00');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `fases` */

DROP TABLE IF EXISTS `fases`;

CREATE TABLE `fases` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fases_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `fases_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fases` */

insert  into `fases`(`id`,`nombre`,`descripcion`,`estatus_id`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'Diseño','Desarrollo del Dibujo',1,NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(2,'Habilitacion del material','Cortes, Soldadura, etc..',1,NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(3,'Paileria','Estructura del producto',1,NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(4,'Acabado','Detallar el producto',1,NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(5,'Prod area 1','<div>Hola</div>',2,NULL,'2021-08-14 02:05:23','2021-08-14 02:05:23');

/*Table structure for table `material_vehiculos` */

DROP TABLE IF EXISTS `material_vehiculos`;

CREATE TABLE `material_vehiculos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int(10) unsigned NOT NULL,
  `observaciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `fase_id` bigint(20) unsigned NOT NULL,
  `material_id` bigint(20) unsigned NOT NULL,
  `vehiculo_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `material_vehiculos_fase_id_foreign` (`fase_id`),
  KEY `material_vehiculos_material_id_foreign` (`material_id`),
  KEY `material_vehiculos_vehiculo_id_foreign` (`vehiculo_id`),
  CONSTRAINT `material_vehiculos_fase_id_foreign` FOREIGN KEY (`fase_id`) REFERENCES `fases` (`id`),
  CONSTRAINT `material_vehiculos_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materiales` (`id`),
  CONSTRAINT `material_vehiculos_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `material_vehiculos` */

insert  into `material_vehiculos`(`id`,`cantidad`,`observaciones`,`fecha`,`fase_id`,`material_id`,`vehiculo_id`,`created_at`,`updated_at`) values 
(1,20,'<div>Pruebas</div>','2021-08-27',2,1,3,NULL,NULL),
(2,20,'<div>Material para un trailer</div>','2021-08-14',3,1,6,NULL,NULL);

/*Table structure for table `materiales` */

DROP TABLE IF EXISTS `materiales`;

CREATE TABLE `materiales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `medida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipomaterial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existente` int(10) unsigned NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materiales_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `materiales_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `materiales` */

insert  into `materiales`(`id`,`clave`,`nombre`,`medida`,`tipomaterial`,`existente`,`descripcion`,`estatus_id`,`created_at`,`updated_at`) values 
(1,'LAM-03','Lamina galvanizada','Mts','Acabado',2000,'Laminas',2,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(2,'SEL-12','Sellador para conexiones','Lts','Estructural',10,'Selladores',1,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(3,'TAQ-1','Taquetes expansicos','\"','Estructural',1,'Laminas',1,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(4,'TUE-10','	Tuercas de seguridad','\"','Acabado',50,'Tuercas de ensamble',2,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(5,'TUB-10','Tubo mecanico','Mts','Acabado',70,'Tubos para ensamble',1,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(6,'GAL-10','Galon de pintura','Mts','Estructural',5,'<div>Pintura para el chasis</div>',3,'2021-08-14 02:00:21','2021-08-14 02:00:41');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2013_07_09_032648_create_areas_table',1),
(2,'2014_10_12_000000_create_users_table',1),
(3,'2014_10_12_100000_create_password_resets_table',1),
(4,'2019_07_08_053227_create_estatus_table',1),
(5,'2019_08_19_000000_create_failed_jobs_table',1),
(6,'2020_07_14_052310_create_categorias_table',1),
(7,'2021_07_06_171423_create_productos_table',1),
(8,'2021_07_07_044521_create_procesos_table',1),
(9,'2021_07_07_051854_create_fases_table',1),
(10,'2021_07_09_011832_create_ventas_table',1),
(11,'2021_07_09_012158_create_producciones_table',1),
(12,'2021_07_09_012408_create_detallesproducciones_table',1),
(13,'2021_07_12_013359_create_materiales_table',1),
(14,'2021_07_12_152953_create_clientes_table',1),
(15,'2021_07_29_022748_create_vehiculos_table',1),
(16,'2021_07_30_011522_create_material_vehiculos_table',1),
(17,'2021_08_12_175937_create_contacts_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('al221810633@gmail.com','$2y$10$/fpemEqM/o2ZRGFu/wiFZuBVqzayy/dDBPqqxEiBPQtg1L7UW/p.m','2021-08-14 01:04:24');

/*Table structure for table `procesos` */

DROP TABLE IF EXISTS `procesos`;

CREATE TABLE `procesos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `procesos_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `procesos_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `procesos` */

insert  into `procesos`(`id`,`nombre`,`descripcion`,`estatus_id`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'En produccion','Este proceso esta apunto de empezar',1,'2021-08-13 23:49:01','2021-08-13 23:49:01',NULL),
(2,'Anulado','Este proceso esta cancelado',1,'2021-08-13 23:49:01','2021-08-13 23:49:01',NULL),
(3,'Finalizado','Este proceso esta terminado',1,'2021-08-13 23:49:01','2021-08-13 23:49:01',NULL),
(4,'Revision','Este proceso se encuentra en revision',2,'2021-08-13 23:49:01','2021-08-13 23:49:01',NULL),
(5,'Phaileria','<div>Pipa de 10000 L</div>',2,'2021-08-14 01:12:05','2021-08-14 01:12:05',NULL);

/*Table structure for table `producciones` */

DROP TABLE IF EXISTS `producciones`;

CREATE TABLE `producciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentaje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ventas_id` bigint(20) unsigned NOT NULL,
  `fases_id` bigint(20) unsigned NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producciones_ventas_id_foreign` (`ventas_id`),
  KEY `producciones_fases_id_foreign` (`fases_id`),
  CONSTRAINT `producciones_fases_id_foreign` FOREIGN KEY (`fases_id`) REFERENCES `fases` (`id`),
  CONSTRAINT `producciones_ventas_id_foreign` FOREIGN KEY (`ventas_id`) REFERENCES `ventas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `producciones` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorias_id` bigint(20) unsigned NOT NULL,
  `estatus_id` bigint(20) unsigned NOT NULL,
  `stock` int(11) NOT NULL,
  `presentacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preciodistribuidor` double NOT NULL,
  `preciocontado` double NOT NULL,
  `preciopublico` double NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoproducto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categorias_id_foreign` (`categorias_id`),
  KEY `productos_estatus_id_foreign` (`estatus_id`),
  CONSTRAINT `productos_categorias_id_foreign` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `productos_estatus_id_foreign` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `productos` */

insert  into `productos`(`id`,`clave`,`nombre`,`imagen`,`categorias_id`,`estatus_id`,`stock`,`presentacion`,`dimension`,`preciodistribuidor`,`preciocontado`,`preciopublico`,`descripcion`,`tipoproducto`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'VOL-0721-10','Carroceria de redilla cerrada','imagen',1,2,10,'Pza','2.3M',3515479,3707232,3898984,'Producto terminado','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(2,'VOL-0721','Carrocerias tipo estacas','imagen',1,2,10,'Pza','3.5M',2273498,2400530,252492,'Producto en piso de venta','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(3,'VOL-0721','Plataformas','imagen',2,2,3,'Pza','2.3M',2398770,2529512,25504,'Producto terminado','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(4,'VOL-0721','Cajas secas','imagen',2,2,1,'Pza','2.3M',7077012,5408421,5789958,'Producto terminado','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(5,'PLA-0821','Plataforma chica','20210814001335.jpg',1,2,7,'Pza','2.3M',1058451,10034134,111284878,'<div>Producto de planta</div>','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-14 00:13:35'),
(7,'Volteos','Volteos de todas las medidas','imagen',1,2,1,'Pza','2.3M',55000,55000,2587,'Producto terminado','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(8,'Volteos','Volteos de todas las medidas','imagen',1,2,8,'Pza','2.3M',55000,55000,2587,'Producto terminado','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(10,'Vol-21','Volteos de todas las medidas','imagen',1,1,2,'Pza','2.3M',55000,55000,2587,'Producto terminado','Producto comercial',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`rol`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Selkar','al221810633@gmail.com',NULL,'selkar12345','Ventas',NULL,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(2,'Selkar','al221811717@gmail.com',NULL,'$2y$10$41IOAf9ICV.s6TcNSxEVP.HiDcI5pCGpgUzpJbUZwZIfMPeBrLWS.','Admin','aKCXdkQeAYyl44T4RSyWaosszg6ip4FncPPFPp4pcTdD23KpMOIQVgPDVFdZ','2021-08-13 23:49:01','2021-08-14 01:53:09'),
(3,'Luis Fernando DIaz Ramos','al221810737@gmail.com',NULL,'$2y$10$citEnhEIJHFggWR5hCivzukc7z1goDOjVyJIeV0t8BCvz0l4tRV52','Admin',NULL,'2021-08-14 01:09:59','2021-08-14 01:09:59'),
(4,'Roberto Vinicio Camacho Mendoza','robertoviniciocamachomendoza@gmail.com',NULL,'$2y$10$y3shuhI70b9v04Qza35.1eLIFMkIIHXdY8gFWeD.iY7pLaWw83ma.','Admin',NULL,'2021-08-14 01:54:22','2021-08-14 02:23:11');

/*Table structure for table `vehiculos` */

DROP TABLE IF EXISTS `vehiculos`;

CREATE TABLE `vehiculos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroserie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_id` bigint(20) unsigned NOT NULL,
  `producto_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehiculos_cliente_id_foreign` (`cliente_id`),
  KEY `vehiculos_producto_id_foreign` (`producto_id`),
  CONSTRAINT `vehiculos_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  CONSTRAINT `vehiculos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vehiculos` */

insert  into `vehiculos`(`id`,`nombre`,`marca`,`fecha`,`descripcion`,`numeroserie`,`cliente_id`,`producto_id`,`created_at`,`updated_at`) values 
(1,'International','Ford','2021-08-21','Camion nuevo, sin placas','221811717301099',1,4,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(2,'Camion','Nissan','2021-08-21','Con rayones en los costados','1909199720',2,1,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(3,'Camioneta de 2 toneladas','Mercedes','2021-08-21','N/a','13101522200101',2,3,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(4,'Plataforma camion','Ram','2021-08-21','Camion nuevo, sin placas','13082139742',2,1,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(5,'Camion de basura','Nissan','2021-08-21','Camion con detalles','221811717301099',2,3,'2021-08-13 23:49:01','2021-08-13 23:49:01'),
(6,'Trailer grande','Ford','2021-08-20','<div>Vehículo con raspones en la parte trasera.</div>','2218109873010',2,1,'2021-08-14 02:07:35','2021-08-14 02:07:55');

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refrencia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientes_id` bigint(20) unsigned NOT NULL,
  `productos_id` bigint(20) unsigned NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ventas_productos_id_foreign` (`productos_id`),
  CONSTRAINT `ventas_productos_id_foreign` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ventas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
