/*
SQLyog Trial v10.4 
MySQL - 5.5.24-log : Database - db_cashmate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_cashmate` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_cashmate`;

/*Table structure for table `announcements` */

DROP TABLE IF EXISTS `announcements`;

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `branch_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `announcements` */

/*Table structure for table `areas` */

DROP TABLE IF EXISTS `areas`;

CREATE TABLE `areas` (
  `id` varchar(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `default_date` date DEFAULT NULL,
  `branch_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `areas` */

/*Table structure for table `borrowers` */

DROP TABLE IF EXISTS `borrowers`;

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `old_id` int(11) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(200) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `citizenship` varchar(20) DEFAULT NULL,
  `civil_status` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `educational_attainment` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `monthly_salary` double DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `employer_contact_number` varchar(20) DEFAULT NULL,
  `employer_address` varchar(50) DEFAULT NULL,
  `area_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `borrowers` */

/*Table structure for table `branches` */

DROP TABLE IF EXISTS `branches`;

CREATE TABLE `branches` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `web_status` tinyint(4) DEFAULT NULL,
  `quota` double DEFAULT NULL,
  `default date` date DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `branches` */

insert  into `branches`(`id`,`name`,`web_status`,`quota`,`default date`,`password`) values ('AGL','Angeles',NULL,NULL,NULL,NULL),('ALM','Alaminos',NULL,NULL,NULL,NULL),('CDN','Candon',NULL,NULL,NULL,NULL),('DAG','Dagupan',NULL,NULL,NULL,NULL),('SFN','San Fernando',NULL,NULL,NULL,NULL),('SNC','San Carlos',NULL,NULL,NULL,NULL),('TLC','Tarlac',NULL,NULL,NULL,NULL),('URD','Urdaneta',NULL,NULL,NULL,NULL);

/*Table structure for table `document_types` */

DROP TABLE IF EXISTS `document_types`;

CREATE TABLE `document_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `code` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `document_types` */

insert  into `document_types`(`id`,`name`,`code`,`status`,`date_modified`) values (1,'Loan Application Form','LAF',1,2012-02-23 13:44:46),(2,'Credit Investigation Report','CIR',1,2012-02-23 13:44:46),(3,'Appraisal Report','LAR',1,2012-02-23 13:44:46),(4,'Credit Matrix','LCM',1,2012-02-23 13:44:46),(5,'Create Loan Request','CLR',1,2012-02-23 13:44:46),(6,'Send Loan Request','SLR',1,2012-02-23 13:44:46),(7,'Loan Approval','APP',1,2012-02-24 19:35:05),(8,'Loan Release Check','LRC',1,2012-02-24 19:35:05),(9,'Loan Release Voucher','LRV',1,2012-02-24 19:35:05);

/*Table structure for table `documents` */

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `id` varchar(45) NOT NULL,
  `document_type_id` int(11) DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `area_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_document_area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `documents` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
