-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.20-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema cashmate_v2
--

CREATE DATABASE IF NOT EXISTS cashmate_v2;
USE cashmate_v2;

--
-- Definition of table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements` (
  `announcement_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `announcement_title` varchar(200) NOT NULL,
  `announcement_description` longtext NOT NULL,
  `announcement_start_date` date NOT NULL,
  `announcement_end_date` date NOT NULL,
  `announcement_type` tinyint(3) unsigned NOT NULL COMMENT '''1 for branch 2 for company''',
  `branch_id` int(10) unsigned DEFAULT NULL,
  `user_created` int(10) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`announcement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` (`announcement_id`,`announcement_title`,`announcement_description`,`announcement_start_date`,`announcement_end_date`,`announcement_type`,`branch_id`,`user_created`,`date_created`) VALUES 
 (1,'sample','djsalk','2012-08-17','2012-08-18',0,3,1,'2012-08-16 14:24:36'),
 (2,'Specific','asjdlk','2012-08-16','2012-08-17',1,1,1,'2012-08-16 14:20:51');
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;


--
-- Definition of table `area_representatives`
--

DROP TABLE IF EXISTS `area_representatives`;
CREATE TABLE `area_representatives` (
  `area_representative_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(10) unsigned NOT NULL,
  `employee_id` int(10) unsigned NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_updated` int(10) unsigned NOT NULL,
  PRIMARY KEY (`area_representative_id`),
  KEY `FK_employee1` (`employee_id`),
  CONSTRAINT `FK_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_representatives`
--

/*!40000 ALTER TABLE `area_representatives` DISABLE KEYS */;
/*!40000 ALTER TABLE `area_representatives` ENABLE KEYS */;


--
-- Definition of table `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_code` varchar(45) NOT NULL,
  `area_name` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `branch_id` int(11) NOT NULL,
  `effectivity_date` date NOT NULL,
  PRIMARY KEY (`area_id`),
  UNIQUE KEY `UK_area_code` (`area_code`),
  KEY `FK_areas_1` (`branch_id`),
  CONSTRAINT `FK_areas_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`area_id`,`area_code`,`area_name`,`status`,`branch_id`,`effectivity_date`) VALUES 
 (1,'URD01','Urdaneta 1',1,1,'2012-08-15'),
 (3,'URD02','Urdaneta 2',1,1,'2012-08-16'),
 (4,'DAG01','Dagupan 01',1,2,'2012-08-15'),
 (5,'URD03','Urdaneta 03',1,1,'2012-08-23');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;


--
-- Definition of table `background_investigation`
--

DROP TABLE IF EXISTS `background_investigation`;
CREATE TABLE `background_investigation` (
  `background_check_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `background_check_values` varchar(45) NOT NULL,
  PRIMARY KEY (`background_check_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background_investigation`
--

/*!40000 ALTER TABLE `background_investigation` DISABLE KEYS */;
INSERT INTO `background_investigation` (`background_check_id`,`background_check_values`) VALUES 
 (1,'Good Moral Character'),
 (2,'Notorious'),
 (3,'Heavily Indebted'),
 (4,'Extravagant'),
 (5,'Compulsive Gambler'),
 (6,'Adulterous'),
 (7,'Drug User');
/*!40000 ALTER TABLE `background_investigation` ENABLE KEYS */;


--
-- Definition of table `bank_accounts`
--

DROP TABLE IF EXISTS `bank_accounts`;
CREATE TABLE `bank_accounts` (
  `bank_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_account_no` varchar(128) DEFAULT NULL,
  `bank_name` varchar(128) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `effectivity_date` date NOT NULL,
  PRIMARY KEY (`bank_account_id`),
  KEY `fk_branch_id` (`branch_id`),
  CONSTRAINT `fk_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_accounts`
--

/*!40000 ALTER TABLE `bank_accounts` DISABLE KEYS */;
INSERT INTO `bank_accounts` (`bank_account_id`,`bank_account_no`,`bank_name`,`branch_id`,`status`,`update_ts`,`update_user`,`effectivity_date`) VALUES 
 (1,'BDO','safdf',2,1,'2012-08-16 10:53:21',1,'2012-08-16'),
 (2,'1236863781','BPI',1,1,'2012-08-16 10:54:04',1,'2012-08-01');
/*!40000 ALTER TABLE `bank_accounts` ENABLE KEYS */;


--
-- Definition of table `borrowers`
--

DROP TABLE IF EXISTS `borrowers`;
CREATE TABLE `borrowers` (
  `borrower_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(500) DEFAULT NULL,
  `religion` varchar(200) DEFAULT NULL,
  `citizenship` varchar(200) DEFAULT NULL,
  `civil_status` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `contact_number` varchar(200) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '1' COMMENT 'hold if the borrower is visible or not',
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_user` int(11) NOT NULL,
  `old_borrower_id` int(11) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `educational_attainment` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `monthly_salary` double DEFAULT NULL,
  `employer` varchar(100) DEFAULT NULL,
  `employer_phone_no` varchar(45) DEFAULT NULL,
  `employer_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`borrower_id`),
  KEY `borrower_areas` (`area_id`),
  CONSTRAINT `FK_borrower_areas` FOREIGN KEY (`area_id`) REFERENCES `areas` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers`
--

/*!40000 ALTER TABLE `borrowers` DISABLE KEYS */;
INSERT INTO `borrowers` (`borrower_id`,`first_name`,`middle_name`,`last_name`,`date_of_birth`,`place_of_birth`,`religion`,`citizenship`,`civil_status`,`gender`,`contact_number`,`area_id`,`visible`,`update_ts`,`update_user`,`old_borrower_id`,`nickname`,`educational_attainment`,`occupation`,`monthly_salary`,`employer`,`employer_phone_no`,`employer_address`) VALUES 
 (1,'Charmaine','Rebo','Ayaoan','1988-07-05','Itogon, Gumatdang','RC','Filipino','Married','Female','09395676792',1,1,'2012-08-16 11:47:10',1,33000,'Main','BSIT','java developer',33000,'5thleg','232323','Ayala Avenue'),
 (2,'First Nams','Middle Name','Last Name','2012-08-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2012-08-16 10:55:34',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (3,'Lucky','Dwaine','Valbuena','2012-08-17',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2012-08-16 10:59:27',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (4,'Dwaine','De La Cruz','Valbuena','2012-08-01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2012-08-16 10:59:27',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (5,'Allison','Pangilinan','Aquino','1991-05-13','',NULL,NULL,'-1','-1',NULL,1,1,'2012-09-04 09:22:24',1,0,NULL,NULL,NULL,0,NULL,NULL,NULL),
 (6,'Alfred','John','Laygo','1991-08-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2012-08-16 11:48:13',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (7,'Joshua','De guzman','Lumague','1991-08-13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2012-08-16 11:49:21',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `borrowers` ENABLE KEYS */;


--
-- Definition of table `borrowers_addresses`
--

DROP TABLE IF EXISTS `borrowers_addresses`;
CREATE TABLE `borrowers_addresses` (
  `borrowers_address_id` int(11) NOT NULL AUTO_INCREMENT,
  `address_type_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `address_status` varchar(45) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `years_of_stay` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `floor_area` double DEFAULT NULL,
  `lot_area` double DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `make` varchar(100) DEFAULT NULL,
  `land_lord_id` varchar(100) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `borrower_id` int(11) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  `land_class` varchar(45) DEFAULT NULL,
  `stability` varchar(45) DEFAULT NULL,
  `monthly_rental` double DEFAULT NULL,
  PRIMARY KEY (`borrowers_address_id`),
  KEY `FK_borrowers` (`borrower_id`),
  CONSTRAINT `FK_borrowers` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers_addresses`
--

/*!40000 ALTER TABLE `borrowers_addresses` DISABLE KEYS */;
INSERT INTO `borrowers_addresses` (`borrowers_address_id`,`address_type_id`,`address`,`postal_code`,`address_status`,`area_id`,`years_of_stay`,`description`,`floor_area`,`lot_area`,`model`,`make`,`land_lord_id`,`visible`,`borrower_id`,`update_ts`,`update_user`,`land_class`,`stability`,`monthly_rental`) VALUES 
 (1,1,'1124 Tanay',1200,'Renting',1,2,NULL,4545,4,'fggf','4343','1fgfg',1,1,'2012-07-16 21:42:08',1,'fgfg','fgfgf',4545),
 (2,2,'Baguio',2600,'Own/Mortgage',1,8,NULL,0,0,NULL,NULL,'1',1,1,'2012-07-16 21:42:08',1,'test','sdfdf',0),
 (3,3,'Baguio 23',2600,'Renting',1,1,NULL,0,0,NULL,NULL,'1',1,1,'2012-07-16 21:42:08',1,NULL,NULL,0);
/*!40000 ALTER TABLE `borrowers_addresses` ENABLE KEYS */;


--
-- Definition of table `borrowers_relatives`
--

DROP TABLE IF EXISTS `borrowers_relatives`;
CREATE TABLE `borrowers_relatives` (
  `relative_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `citizenship` varchar(45) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `relationship_id` int(11) NOT NULL,
  `monthly_income` double DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(500) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `dependents` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  `years_together` int(10) unsigned DEFAULT NULL,
  `provincial_address` varchar(100) DEFAULT NULL,
  `educational_attainment` varchar(50) DEFAULT NULL,
  `employer` varchar(45) DEFAULT NULL,
  `employer_address` varchar(100) DEFAULT NULL,
  `employer_phone_no` varchar(45) DEFAULT NULL,
  `name_of_school` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`relative_id`),
  KEY `FK_borrower` (`borrower_id`),
  KEY `FK_borrower_relationship` (`relationship_id`),
  CONSTRAINT `FK_borrower` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_borrower_relationship` FOREIGN KEY (`relationship_id`) REFERENCES `relationships` (`relationship_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers_relatives`
--

/*!40000 ALTER TABLE `borrowers_relatives` DISABLE KEYS */;
INSERT INTO `borrowers_relatives` (`relative_id`,`first_name`,`middle_name`,`last_name`,`citizenship`,`occupation`,`relationship_id`,`monthly_income`,`date_of_birth`,`place_of_birth`,`address`,`borrower_id`,`visible`,`dependents`,`update_ts`,`update_user`,`years_together`,`provincial_address`,`educational_attainment`,`employer`,`employer_address`,`employer_phone_no`,`name_of_school`) VALUES 
 (2,'Rinoa Elisha','Rebollido','Ayaoan',NULL,NULL,4,NULL,'2010-09-26',NULL,'Baguio City',1,1,1,'2012-08-02 21:05:01',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (3,'Seth Lawrence','','Rebollido',NULL,NULL,3,NULL,'2006-07-14',NULL,'Baguio City',1,0,1,'2012-08-02 21:07:49',1,NULL,NULL,NULL,NULL,NULL,NULL,'Maranatha'),
 (4,'Testt','','tes',NULL,NULL,3,NULL,'2000-10-04',NULL,'Baguio City',1,0,1,'2012-08-02 21:15:34',1,NULL,NULL,NULL,NULL,NULL,NULL,'Test');
/*!40000 ALTER TABLE `borrowers_relatives` ENABLE KEYS */;


--
-- Definition of table `branches`
--

DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(50) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'holds if the row is deleted or not',
  `web_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'holds the value if the branch is open or not',
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  `minimum_quota` double DEFAULT NULL,
  `effectivity_date` date NOT NULL,
  PRIMARY KEY (`branch_id`),
  UNIQUE KEY `branch_code_UNIQUE` (`branch_code`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- Dumping data for table `branches`
--

/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` (`branch_id`,`branch_code`,`branch_name`,`password`,`status`,`web_status`,`update_ts`,`update_user`,`minimum_quota`,`effectivity_date`) VALUES 
 (1,'URD','Urdaneta','5f4dcc3b5aa765d61d8327deb882cf99',1,1,'2012-08-16 10:14:55',1,100000,'2012-08-14'),
 (2,'DAG','Dagupan','21232f297a57a5a743894a0e4a801fc3',1,1,'2012-08-13 08:29:06',1,100000,'2012-08-13'),
 (3,'SNC','San Carlos','21232f297a57a5a743894a0e4a801fc3',1,1,'2012-08-13 08:29:06',1,100000,'2012-08-13'),
 (4,'TLC','Tarlac','21232f297a57a5a743894a0e4a801fc3',1,1,'2012-08-13 08:29:06',1,100000,'2012-08-13'),
 (5,'SFN','San Fernando','21232f297a57a5a743894a0e4a801fc3',1,1,'2012-08-13 08:29:06',1,100000,'2012-08-13'),
 (6,'ALM','Alaminos','21232f297a57a5a743894a0e4a801fc3',1,1,'2012-08-13 08:29:06',1,100000,'2012-08-13'),
 (7,'CDN','Candon','5f4dcc3b5aa765d61d8327deb882cf99',1,1,'2012-08-16 10:23:59',1,100000,'2012-08-13'),
 (8,'AGL','Angeles','21232f297a57a5a743894a0e4a801fc3',1,1,'2012-08-13 08:29:06',1,100000,'2012-08-13'),
 (9,'URD2','Baguio City','5f4dcc3b5aa765d61d8327deb882cf99',0,1,'2012-08-16 09:49:28',1,100,'2012-08-16'),
 (10,'BNG','Baguio','5f4dcc3b5aa765d61d8327deb882cf99',0,1,'2012-08-16 09:49:47',1,100,'2012-08-16');
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;


--
-- Definition of table `business_income_statement`
--

DROP TABLE IF EXISTS `business_income_statement`;
CREATE TABLE `business_income_statement` (
  `business_income_statement_id` int(11) NOT NULL AUTO_INCREMENT,
  `statement_of_income_id` int(11) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `business_salary` double DEFAULT NULL,
  `business_rent` double DEFAULT NULL,
  `business_utilities` double DEFAULT NULL,
  `business_incidental_expenses` double DEFAULT NULL,
  `business_taxes_licenses` double DEFAULT NULL,
  `business_transportation` double DEFAULT NULL,
  `business_insurance` double DEFAULT NULL,
  `business_sales` double DEFAULT NULL,
  `business_cost_of_goods_sold` double DEFAULT NULL,
  PRIMARY KEY (`business_income_statement_id`),
  KEY `FK_business_income_business_id` (`business_id`),
  KEY `FK_business_income_income_statement` (`statement_of_income_id`),
  CONSTRAINT `FK_business_income_business_id` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`business_id`) ON DELETE CASCADE,
  CONSTRAINT `FK_business_income_income_statement` FOREIGN KEY (`statement_of_income_id`) REFERENCES `income_statement` (`statement_of_income_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_income_statement`
--

/*!40000 ALTER TABLE `business_income_statement` DISABLE KEYS */;
INSERT INTO `business_income_statement` (`business_income_statement_id`,`statement_of_income_id`,`business_id`,`business_salary`,`business_rent`,`business_utilities`,`business_incidental_expenses`,`business_taxes_licenses`,`business_transportation`,`business_insurance`,`business_sales`,`business_cost_of_goods_sold`) VALUES 
 (1,1,3,54,54,54,54,100,54,54,45678,54),
 (2,1,4,54,54,54,54,100,54,54,454545,54);
/*!40000 ALTER TABLE `business_income_statement` ENABLE KEYS */;


--
-- Definition of table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
CREATE TABLE `businesses` (
  `business_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(200) NOT NULL,
  `business_type` varchar(100) DEFAULT NULL,
  `business_address` varchar(500) DEFAULT NULL,
  `business_address_status` varchar(50) DEFAULT NULL,
  `business_existence` int(11) DEFAULT NULL,
  `business_floor_area` int(11) DEFAULT NULL,
  `business_land_area` int(11) DEFAULT NULL,
  `business_daily_average_sales` double DEFAULT NULL,
  `business_stock_amount` double DEFAULT NULL,
  `business_monthly_rental` double DEFAULT NULL,
  `relationship_id` int(11) DEFAULT NULL,
  `land_lord_id` int(11) DEFAULT NULL,
  `borrower_id` int(11) DEFAULT NULL,
  `visible` int(11) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  `business_status` varchar(45) DEFAULT NULL,
  `business_permit_no` varchar(45) DEFAULT NULL,
  `business_permit_expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`business_id`),
  KEY `FK_business_borrower` (`borrower_id`),
  KEY `FK_business_land_lord` (`land_lord_id`),
  CONSTRAINT `FK_business_borrower` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

/*!40000 ALTER TABLE `businesses` DISABLE KEYS */;
INSERT INTO `businesses` (`business_id`,`business_name`,`business_type`,`business_address`,`business_address_status`,`business_existence`,`business_floor_area`,`business_land_area`,`business_daily_average_sales`,`business_stock_amount`,`business_monthly_rental`,`relationship_id`,`land_lord_id`,`borrower_id`,`visible`,`update_ts`,`update_user`,`business_status`,`business_permit_no`,`business_permit_expiry_date`) VALUES 
 (1,'Canteen','Food','Baguio','GOOD',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2012-07-16 21:42:08',1,'Great','32323','2012-07-02'),
 (2,'Farm','Meat and Vegetables','La Union','GREAT',30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2012-07-16 21:42:09',1,'Excellent','3434','2012-07-16'),
 (3,'Test','Farm','wwe','sdfsdf',3434,NULL,NULL,0,0,NULL,1,NULL,1,1,'2012-07-16 21:53:54',1,'wewe','343434','2020-07-30'),
 (4,'Canteen','Food','dfdf','dfdfg',3,NULL,NULL,0,0,NULL,1,NULL,1,1,'2012-07-16 22:11:29',1,'dfdf','2323','2020-09-24');
/*!40000 ALTER TABLE `businesses` ENABLE KEYS */;


--
-- Definition of table `character_references`
--

DROP TABLE IF EXISTS `character_references`;
CREATE TABLE `character_references` (
  `character_reference_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`character_reference_id`),
  KEY `FK_loan_application_character_references` (`loan_application_id`),
  CONSTRAINT `FK_loan_application_character_references` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `character_references`
--

/*!40000 ALTER TABLE `character_references` DISABLE KEYS */;
INSERT INTO `character_references` (`character_reference_id`,`loan_application_id`,`first_name`,`middle_name`,`last_name`,`occupation`,`address`,`visible`,`update_user`,`update_ts`,`contact_number`) VALUES 
 (1,2,'test3434','test','test',NULL,'test',1,1,'2012-07-26 22:20:06','3434'),
 (2,2,'test','test','test',NULL,'sdsf',1,1,'2012-08-02 22:41:09','090');
/*!40000 ALTER TABLE `character_references` ENABLE KEYS */;


--
-- Definition of table `co_borrowers`
--

DROP TABLE IF EXISTS `co_borrowers`;
CREATE TABLE `co_borrowers` (
  `co_borrower_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `gross_income` double DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `spouse_name` varchar(100) DEFAULT NULL,
  `business_name` varchar(100) DEFAULT NULL,
  `business_type` varchar(45) DEFAULT NULL,
  `business_status` varchar(45) DEFAULT NULL,
  `business_address` varchar(100) DEFAULT NULL,
  `business_address_status` varchar(45) DEFAULT NULL,
  `business_existence_in_years` int(10) unsigned DEFAULT NULL,
  `business_permit_no` varchar(45) DEFAULT NULL,
  `business_expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`co_borrower_id`),
  KEY `FK_co_borrowers_loan_application` (`loan_application_id`),
  CONSTRAINT `FK_co_borrowers_loan_application` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_borrowers`
--

/*!40000 ALTER TABLE `co_borrowers` DISABLE KEYS */;
INSERT INTO `co_borrowers` (`co_borrower_id`,`loan_application_id`,`first_name`,`middle_name`,`last_name`,`occupation`,`contact_number`,`address`,`gross_income`,`visible`,`update_user`,`update_ts`,`spouse_name`,`business_name`,`business_type`,`business_status`,`business_address`,`business_address_status`,`business_existence_in_years`,`business_permit_no`,`business_expiry_date`) VALUES 
 (1,2,'CoBorrower1','M','L','dfsf','34343434','sdfsfsdf',343,1,1,'2012-07-26 22:20:06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (2,2,'test','test','tset','g4545','54545','rrtf 4545',454545,1,1,'2012-08-02 22:46:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `co_borrowers` ENABLE KEYS */;


--
-- Definition of table `collateral_types`
--

DROP TABLE IF EXISTS `collateral_types`;
CREATE TABLE `collateral_types` (
  `collateral_type_id` int(11) NOT NULL,
  `collateral_type` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`collateral_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collateral_types`
--

/*!40000 ALTER TABLE `collateral_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `collateral_types` ENABLE KEYS */;


--
-- Definition of table `credit_matrices`
--

DROP TABLE IF EXISTS `credit_matrices`;
CREATE TABLE `credit_matrices` (
  `credit_matrix_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `loan_application_id` int(11) DEFAULT NULL,
  `credit_rating` double DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`credit_matrix_id`),
  KEY `FK_loan_credit_matrix` (`loan_application_id`),
  KEY `FK_document_credit_matrix` (`document_id`),
  CONSTRAINT `FK_document_credit_matrix` FOREIGN KEY (`document_id`) REFERENCES `documents` (`document_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_loan_credit_matrix` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='list of all credit ratings per loan application';

--
-- Dumping data for table `credit_matrices`
--

/*!40000 ALTER TABLE `credit_matrices` DISABLE KEYS */;
INSERT INTO `credit_matrices` (`credit_matrix_id`,`document_id`,`loan_application_id`,`credit_rating`,`visible`,`update_user`,`update_ts`) VALUES 
 (8,1,1,69.92,1,1,'2012-09-03 11:57:56'),
 (9,2,2,0.37,1,1,'2012-09-04 09:06:03'),
 (10,3,3,0.16,1,1,'2012-09-04 09:26:05');
/*!40000 ALTER TABLE `credit_matrices` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_categories`
--

DROP TABLE IF EXISTS `credit_matrix_categories`;
CREATE TABLE `credit_matrix_categories` (
  `credit_matrix_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL,
  `category_percentage` double NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`credit_matrix_category_id`) USING BTREE,
  UNIQUE KEY `credit_matrix_category_name_UNIQUE` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='list of credit matrix categories';

--
-- Dumping data for table `credit_matrix_categories`
--

/*!40000 ALTER TABLE `credit_matrix_categories` DISABLE KEYS */;
INSERT INTO `credit_matrix_categories` (`credit_matrix_category_id`,`category_name`,`category_percentage`,`visible`,`create_user`,`update_ts`) VALUES 
 (1,'Capacity',32,1,1,'2012-08-29 07:11:35'),
 (2,'Condition',18,1,1,'2012-08-29 07:11:49'),
 (3,'Character',15,1,1,'2012-08-29 07:11:57'),
 (4,'Capital',15,1,1,'2012-08-29 07:12:08'),
 (5,'Collateral',10,1,1,'2012-08-29 07:12:15'),
 (6,'Cash Flow',10,1,1,'2012-08-29 07:12:36');
/*!40000 ALTER TABLE `credit_matrix_categories` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_criterias`
--

DROP TABLE IF EXISTS `credit_matrix_criterias`;
CREATE TABLE `credit_matrix_criterias` (
  `credit_matrix_criteria_id` int(11) NOT NULL AUTO_INCREMENT,
  `criteria_name` varchar(500) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`credit_matrix_criteria_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='list of criteria for credit matrix';

--
-- Dumping data for table `credit_matrix_criterias`
--

/*!40000 ALTER TABLE `credit_matrix_criterias` DISABLE KEYS */;
INSERT INTO `credit_matrix_criterias` (`credit_matrix_criteria_id`,`criteria_name`,`visible`,`create_user`,`create_date`) VALUES 
 (1,'Documents Presented',1,1,'2012-08-29 07:24:15'),
 (2,'Place of Business Description',1,1,'2012-08-29 07:24:16'),
 (3,'Neighborhood Background Investigation',1,1,'2012-08-29 07:24:16'),
 (4,'Personal/Real Properties Owned',1,1,'2012-08-29 07:24:16'),
 (5,'Source of Income',1,1,'2012-08-29 07:24:16'),
 (6,'Documents Presented',1,1,'2012-08-29 07:24:16');
/*!40000 ALTER TABLE `credit_matrix_criterias` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_detail_types`
--

DROP TABLE IF EXISTS `credit_matrix_detail_types`;
CREATE TABLE `credit_matrix_detail_types` (
  `credit_matrix_detail_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(128) NOT NULL,
  `user_created` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`credit_matrix_detail_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_matrix_detail_types`
--

/*!40000 ALTER TABLE `credit_matrix_detail_types` DISABLE KEYS */;
INSERT INTO `credit_matrix_detail_types` (`credit_matrix_detail_type_id`,`type`,`user_created`,`date_created`) VALUES 
 (1,'Account Representative',1,'2012-08-29 07:33:46'),
 (2,'Field Auditor',1,'2012-08-29 07:33:46'),
 (3,'Branch Manager',1,'2012-08-29 07:34:00');
/*!40000 ALTER TABLE `credit_matrix_detail_types` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_details`
--

DROP TABLE IF EXISTS `credit_matrix_details`;
CREATE TABLE `credit_matrix_details` (
  `credit_matrix_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `credit_matrix_id` int(11) NOT NULL,
  `credit_matrix_item_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `credit_matrix_detail_type_id` int(11) NOT NULL,
  PRIMARY KEY (`credit_matrix_detail_id`),
  KEY `FK_criteria` (`credit_matrix_item_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_matrix_details`
--

/*!40000 ALTER TABLE `credit_matrix_details` DISABLE KEYS */;
INSERT INTO `credit_matrix_details` (`credit_matrix_detail_id`,`credit_matrix_id`,`credit_matrix_item_id`,`rate`,`visible`,`update_user`,`update_ts`,`credit_matrix_detail_type_id`) VALUES 
 (79,4,1,5,1,1,'2012-08-30 09:54:55',1),
 (80,4,1,5,1,1,'2012-08-30 09:54:55',2),
 (81,4,1,5,1,1,'2012-08-30 09:54:55',3),
 (82,4,2,5,1,1,'2012-08-30 09:54:55',1),
 (83,4,2,5,1,1,'2012-08-30 09:54:55',2),
 (84,4,2,5,1,1,'2012-08-30 09:54:55',3),
 (85,4,3,5,1,1,'2012-08-30 09:54:55',1),
 (86,4,3,5,1,1,'2012-08-30 09:54:55',2),
 (87,4,3,5,1,1,'2012-08-30 09:54:56',3),
 (88,4,4,5,1,1,'2012-08-30 09:54:56',1),
 (89,4,4,5,1,1,'2012-08-30 09:54:56',2),
 (90,4,4,5,1,1,'2012-08-30 09:54:57',3),
 (91,4,5,5,1,1,'2012-08-30 09:54:57',1),
 (92,4,5,5,1,1,'2012-08-30 09:54:57',2),
 (93,4,5,5,1,1,'2012-08-30 09:54:57',3),
 (94,4,6,5,1,1,'2012-08-30 09:54:57',1),
 (95,4,6,5,1,1,'2012-08-30 09:54:57',2),
 (96,4,6,5,1,1,'2012-08-30 09:54:57',3),
 (97,4,7,5,1,1,'2012-08-30 09:54:57',1),
 (98,4,7,5,1,1,'2012-08-30 09:54:57',2),
 (99,4,7,5,1,1,'2012-08-30 09:54:58',3),
 (100,4,8,5,1,1,'2012-08-30 09:54:58',1),
 (101,4,8,5,1,1,'2012-08-30 09:54:58',2),
 (102,4,8,5,1,1,'2012-08-30 09:54:58',3),
 (103,4,9,5,1,1,'2012-08-30 09:54:59',1),
 (104,4,9,5,1,1,'2012-08-30 09:54:59',2),
 (105,4,9,5,1,1,'2012-08-30 09:54:59',3),
 (106,4,10,5,1,1,'2012-08-30 09:54:59',1),
 (107,4,10,5,1,1,'2012-08-30 09:54:59',2),
 (108,4,10,5,1,1,'2012-08-30 09:54:59',3),
 (109,4,11,5,1,1,'2012-08-30 09:54:59',1),
 (110,4,11,5,1,1,'2012-08-30 09:54:59',2),
 (111,4,11,5,1,1,'2012-08-30 09:54:59',3),
 (112,4,12,5,1,1,'2012-08-30 09:54:59',1),
 (113,4,12,5,1,1,'2012-08-30 09:55:00',2),
 (114,4,12,5,1,1,'2012-08-30 09:55:00',3),
 (115,4,13,5,1,1,'2012-08-30 09:55:00',1),
 (116,4,13,5,1,1,'2012-08-30 09:55:00',2),
 (117,4,13,5,1,1,'2012-08-30 09:55:00',3),
 (118,5,1,100,1,1,'2012-09-03 11:48:18',1),
 (119,5,1,100,1,1,'2012-09-03 11:48:19',2),
 (120,5,1,5,1,1,'2012-09-03 11:48:22',3),
 (121,5,2,100,1,1,'2012-09-03 11:48:18',1),
 (122,5,2,100,1,1,'2012-09-03 11:48:20',2),
 (123,5,2,5,1,1,'2012-09-03 11:48:22',3),
 (124,5,3,100,1,1,'2012-09-03 11:48:18',1),
 (125,5,3,100,1,1,'2012-09-03 11:48:20',2),
 (126,5,3,5,1,1,'2012-09-03 11:48:22',3),
 (127,5,4,100,1,1,'2012-09-03 11:48:18',1),
 (128,5,4,100,1,1,'2012-09-03 11:48:20',2),
 (129,5,4,5,1,1,'2012-09-03 11:48:22',3),
 (130,5,5,100,1,1,'2012-09-03 11:48:18',1),
 (131,5,5,100,1,1,'2012-09-03 11:48:20',2),
 (132,5,5,5,1,1,'2012-09-03 11:48:22',3),
 (133,5,6,100,1,1,'2012-09-03 11:48:18',1),
 (134,5,6,100,1,1,'2012-09-03 11:48:20',2),
 (135,5,6,5,1,1,'2012-09-03 11:48:22',3),
 (136,5,7,100,1,1,'2012-09-03 11:48:18',1),
 (137,5,7,100,1,1,'2012-09-03 11:48:21',2),
 (138,5,7,5,1,1,'2012-09-03 11:48:22',3),
 (139,5,8,100,1,1,'2012-09-03 11:48:18',1),
 (140,5,8,100,1,1,'2012-09-03 11:48:21',2),
 (141,5,8,5,1,1,'2012-09-03 11:48:22',3),
 (142,5,9,100,1,1,'2012-09-03 11:48:18',1),
 (143,5,9,100,1,1,'2012-09-03 11:48:21',2),
 (144,5,9,5,1,1,'2012-09-03 11:48:22',3),
 (145,5,10,100,1,1,'2012-09-03 11:48:19',1),
 (146,5,10,100,1,1,'2012-09-03 11:48:21',2),
 (147,5,10,5,1,1,'2012-09-03 11:48:23',3),
 (148,5,11,100,1,1,'2012-09-03 11:48:19',1),
 (149,5,11,100,1,1,'2012-09-03 11:48:21',2),
 (150,5,11,5,1,1,'2012-09-03 11:48:23',3),
 (151,5,12,100,1,1,'2012-09-03 11:48:19',1),
 (152,5,12,100,1,1,'2012-09-03 11:48:21',2),
 (153,5,12,5,1,1,'2012-09-03 11:48:23',3),
 (154,5,13,100,1,1,'2012-09-03 11:48:19',1),
 (155,5,13,100,1,1,'2012-09-03 11:48:21',2),
 (156,5,13,100,1,1,'2012-09-03 11:48:23',3),
 (157,8,1,0,1,1,'2012-09-03 12:02:40',1),
 (158,8,1,0,1,1,'2012-09-03 12:02:40',2),
 (159,8,1,0,1,1,'2012-09-03 12:02:41',3),
 (160,8,2,0,1,1,'2012-09-03 12:02:41',1),
 (161,8,2,0,1,1,'2012-09-03 12:02:41',2),
 (162,8,2,0,1,1,'2012-09-03 12:02:41',3),
 (163,8,3,0,1,1,'2012-09-03 12:02:41',1),
 (164,8,3,0,1,1,'2012-09-03 12:02:41',2),
 (165,8,3,0,1,1,'2012-09-03 12:02:41',3),
 (166,8,4,0,1,1,'2012-09-03 12:02:41',1),
 (167,8,4,0,1,1,'2012-09-03 12:02:42',2),
 (168,8,4,0,1,1,'2012-09-03 12:02:42',3),
 (169,8,5,0,1,1,'2012-09-03 12:02:42',1),
 (170,8,5,0,1,1,'2012-09-03 12:02:42',2),
 (171,8,5,0,1,1,'2012-09-03 12:02:42',3),
 (172,8,6,0,1,1,'2012-09-03 12:02:42',1),
 (173,8,6,0,1,1,'2012-09-03 12:02:42',2),
 (174,8,6,0,1,1,'2012-09-03 12:02:42',3),
 (175,8,7,0,1,1,'2012-09-03 12:02:43',1),
 (176,8,7,0,1,1,'2012-09-03 12:02:43',2),
 (177,8,7,0,1,1,'2012-09-03 12:02:43',3),
 (178,8,8,0,1,1,'2012-09-03 12:02:43',1),
 (179,8,8,0,1,1,'2012-09-03 12:02:43',2),
 (180,8,8,0,1,1,'2012-09-03 12:02:43',3),
 (181,8,9,0,1,1,'2012-09-03 12:02:43',1),
 (182,8,9,0,1,1,'2012-09-03 12:02:43',2),
 (183,8,9,0,1,1,'2012-09-03 12:02:44',3),
 (184,8,10,0,1,1,'2012-09-03 12:02:44',1),
 (185,8,10,0,1,1,'2012-09-03 12:02:44',2),
 (186,8,10,0,1,1,'2012-09-03 12:02:44',3),
 (187,8,11,0,1,1,'2012-09-03 12:02:44',1),
 (188,8,11,0,1,1,'2012-09-03 12:02:44',2),
 (189,8,11,0,1,1,'2012-09-03 12:02:44',3),
 (190,8,12,0,1,1,'2012-09-03 12:02:44',1),
 (191,8,12,0,1,1,'2012-09-03 12:02:45',2),
 (192,8,12,0,1,1,'2012-09-03 12:02:45',3),
 (193,8,13,0,1,1,'2012-09-03 12:02:45',1),
 (194,8,13,0,1,1,'2012-09-03 12:02:45',2),
 (195,8,13,0,1,1,'2012-09-03 12:02:45',3),
 (196,9,1,4,1,1,'2012-09-04 09:06:04',1),
 (197,9,1,0,1,1,'2012-09-04 09:06:05',2),
 (198,9,1,0,1,1,'2012-09-04 09:06:07',3),
 (199,9,2,0,1,1,'2012-09-04 09:06:04',1),
 (200,9,2,0,1,1,'2012-09-04 09:06:05',2),
 (201,9,2,0,1,1,'2012-09-04 09:06:07',3),
 (202,9,3,0,1,1,'2012-09-04 09:06:04',1),
 (203,9,3,0,1,1,'2012-09-04 09:06:05',2),
 (204,9,3,0,1,1,'2012-09-04 09:06:07',3),
 (205,9,4,0,1,1,'2012-09-04 09:06:04',1),
 (206,9,4,3,1,1,'2012-09-04 09:06:05',2),
 (207,9,4,0,1,1,'2012-09-04 09:06:07',3),
 (208,9,5,0,1,1,'2012-09-04 09:06:04',1),
 (209,9,5,0,1,1,'2012-09-04 09:06:05',2),
 (210,9,5,0,1,1,'2012-09-04 09:06:07',3),
 (211,9,6,0,1,1,'2012-09-04 09:06:04',1),
 (212,9,6,0,1,1,'2012-09-04 09:06:06',2),
 (213,9,6,0,1,1,'2012-09-04 09:06:07',3),
 (214,9,7,0,1,1,'2012-09-04 09:06:04',1),
 (215,9,7,0,1,1,'2012-09-04 09:06:06',2),
 (216,9,7,0,1,1,'2012-09-04 09:06:07',3),
 (217,9,8,0,1,1,'2012-09-04 09:06:04',1),
 (218,9,8,0,1,1,'2012-09-04 09:06:06',2),
 (219,9,8,0,1,1,'2012-09-04 09:06:07',3),
 (220,9,9,0,1,1,'2012-09-04 09:06:04',1),
 (221,9,9,10,1,1,'2012-09-04 09:06:06',2),
 (222,9,9,0,1,1,'2012-09-04 09:06:08',3),
 (223,9,10,0,1,1,'2012-09-04 09:06:04',1),
 (224,9,10,0,1,1,'2012-09-04 09:06:06',2),
 (225,9,10,0,1,1,'2012-09-04 09:06:08',3),
 (226,9,11,0,1,1,'2012-09-04 09:06:04',1),
 (227,9,11,0,1,1,'2012-09-04 09:06:06',2),
 (228,9,11,0,1,1,'2012-09-04 09:06:08',3),
 (229,9,12,0,1,1,'2012-09-04 09:06:05',1),
 (230,9,12,0,1,1,'2012-09-04 09:06:06',2),
 (231,9,12,0,1,1,'2012-09-04 09:06:08',3),
 (232,9,13,0,1,1,'2012-09-04 09:06:05',1),
 (233,9,13,0,1,1,'2012-09-04 09:06:06',2),
 (234,9,13,0,1,1,'2012-09-04 09:06:08',3),
 (235,10,1,3,1,1,'2012-09-04 09:26:05',1),
 (236,10,1,0,1,1,'2012-09-04 09:26:07',2),
 (237,10,1,0,1,1,'2012-09-04 09:26:08',3),
 (238,10,2,0,1,1,'2012-09-04 09:26:05',1),
 (239,10,2,0,1,1,'2012-09-04 09:26:07',2),
 (240,10,2,0,1,1,'2012-09-04 09:26:09',3),
 (241,10,3,0,1,1,'2012-09-04 09:26:05',1),
 (242,10,3,0,1,1,'2012-09-04 09:26:07',2),
 (243,10,3,0,1,1,'2012-09-04 09:26:09',3),
 (244,10,4,0,1,1,'2012-09-04 09:26:05',1),
 (245,10,4,0,1,1,'2012-09-04 09:26:07',2),
 (246,10,4,0,1,1,'2012-09-04 09:26:09',3),
 (247,10,5,0,1,1,'2012-09-04 09:26:06',1),
 (248,10,5,0,1,1,'2012-09-04 09:26:07',2),
 (249,10,5,0,1,1,'2012-09-04 09:26:09',3),
 (250,10,6,0,1,1,'2012-09-04 09:26:06',1),
 (251,10,6,0,1,1,'2012-09-04 09:26:07',2),
 (252,10,6,0,1,1,'2012-09-04 09:26:09',3),
 (253,10,7,0,1,1,'2012-09-04 09:26:06',1),
 (254,10,7,0,1,1,'2012-09-04 09:26:07',2),
 (255,10,7,0,1,1,'2012-09-04 09:26:09',3),
 (256,10,8,0,1,1,'2012-09-04 09:26:06',1),
 (257,10,8,0,1,1,'2012-09-04 09:26:07',2),
 (258,10,8,0,1,1,'2012-09-04 09:26:09',3),
 (259,10,9,0,1,1,'2012-09-04 09:26:06',1),
 (260,10,9,0,1,1,'2012-09-04 09:26:07',2),
 (261,10,9,0,1,1,'2012-09-04 09:26:09',3),
 (262,10,10,0,1,1,'2012-09-04 09:26:06',1),
 (263,10,10,0,1,1,'2012-09-04 09:26:07',2),
 (264,10,10,0,1,1,'2012-09-04 09:26:09',3),
 (265,10,11,0,1,1,'2012-09-04 09:26:06',1),
 (266,10,11,0,1,1,'2012-09-04 09:26:08',2),
 (267,10,11,0,1,1,'2012-09-04 09:26:09',3),
 (268,10,12,0,1,1,'2012-09-04 09:26:06',1),
 (269,10,12,0,1,1,'2012-09-04 09:26:08',2),
 (270,10,12,0,1,1,'2012-09-04 09:26:10',3),
 (271,10,13,0,1,1,'2012-09-04 09:26:06',1),
 (272,10,13,0,1,1,'2012-09-04 09:26:08',2),
 (273,10,13,0,1,1,'2012-09-04 09:26:10',3);
/*!40000 ALTER TABLE `credit_matrix_details` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_items`
--

DROP TABLE IF EXISTS `credit_matrix_items`;
CREATE TABLE `credit_matrix_items` (
  `credit_matrix_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `credit_matrix_criteria_id` int(11) NOT NULL,
  `credit_matrix_category_id` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `user_created` int(11) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`credit_matrix_item_id`) USING BTREE,
  KEY `FK_credit_matrix_items_creator` (`user_created`),
  KEY `FK_credit_matrix_items_criteria` (`credit_matrix_criteria_id`) USING BTREE,
  KEY `FK_credit_matrix_items_category` (`credit_matrix_category_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_matrix_items`
--

/*!40000 ALTER TABLE `credit_matrix_items` DISABLE KEYS */;
INSERT INTO `credit_matrix_items` (`credit_matrix_item_id`,`credit_matrix_criteria_id`,`credit_matrix_category_id`,`visible`,`user_created`,`date_created`) VALUES 
 (1,1,1,1,1,'2012-08-29 00:00:00'),
 (2,1,6,1,1,'2012-08-29 00:00:00'),
 (3,2,2,1,1,'2012-08-29 00:00:00'),
 (4,2,4,1,1,'2012-08-29 00:00:00'),
 (5,2,3,1,1,'2012-08-29 00:00:00'),
 (6,2,5,1,1,'2012-08-29 00:00:00'),
 (7,3,3,1,1,'2012-08-29 00:00:00'),
 (8,4,4,1,1,'2012-08-29 00:00:00'),
 (9,4,6,1,1,'2012-08-29 00:00:00'),
 (10,5,4,1,1,'2012-08-29 00:00:00'),
 (11,5,1,1,1,'2012-08-29 00:00:00'),
 (12,5,6,1,1,'2012-08-29 00:00:00'),
 (13,6,3,1,1,'2012-08-29 00:00:00');
/*!40000 ALTER TABLE `credit_matrix_items` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_remark_types`
--

DROP TABLE IF EXISTS `credit_matrix_remark_types`;
CREATE TABLE `credit_matrix_remark_types` (
  `credit_matrix_remark_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`credit_matrix_remark_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_matrix_remark_types`
--

/*!40000 ALTER TABLE `credit_matrix_remark_types` DISABLE KEYS */;
INSERT INTO `credit_matrix_remark_types` (`credit_matrix_remark_type_id`,`type`,`date_created`) VALUES 
 (1,'Account Representative','2012-09-04 07:47:09'),
 (2,'Area Manager','2012-09-04 07:51:09'),
 (3,'Field Auditor','2012-09-04 07:51:16'),
 (4,'Branch Manager','2012-09-04 07:52:02'),
 (5,'Branch Custodian','2012-09-04 07:52:11');
/*!40000 ALTER TABLE `credit_matrix_remark_types` ENABLE KEYS */;


--
-- Definition of table `credit_matrix_remarks`
--

DROP TABLE IF EXISTS `credit_matrix_remarks`;
CREATE TABLE `credit_matrix_remarks` (
  `credit_matrix_remark_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `credit_matrix_id` int(10) unsigned NOT NULL,
  `employee_id` int(10) unsigned NOT NULL,
  `remarks` varchar(256) NOT NULL,
  `update_user` int(10) unsigned NOT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `credit_matrix_remark_type_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`credit_matrix_remark_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_matrix_remarks`
--

/*!40000 ALTER TABLE `credit_matrix_remarks` DISABLE KEYS */;
INSERT INTO `credit_matrix_remarks` (`credit_matrix_remark_id`,`credit_matrix_id`,`employee_id`,`remarks`,`update_user`,`update_ts`,`credit_matrix_remark_type_id`) VALUES 
 (11,9,1,'hahahaha',1,'2012-09-04 00:00:00',1),
 (12,9,8,'wew',1,'2012-09-04 00:00:00',2),
 (13,9,0,'',1,'2012-09-04 00:00:00',3),
 (14,9,0,'',1,'2012-09-04 00:00:00',4),
 (15,9,0,'',1,'2012-09-04 00:00:00',5),
 (16,10,1,'',1,'2012-09-04 09:26:10',1),
 (17,10,0,'',1,'2012-09-04 09:26:10',2),
 (18,10,0,'',1,'2012-09-04 09:26:10',3),
 (19,10,0,'',1,'2012-09-04 09:26:10',4),
 (20,10,0,'',1,'2012-09-04 09:26:10',5);
/*!40000 ALTER TABLE `credit_matrix_remarks` ENABLE KEYS */;


--
-- Definition of table `document_types`
--

DROP TABLE IF EXISTS `document_types`;
CREATE TABLE `document_types` (
  `document_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(200) DEFAULT NULL,
  `document_code` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`document_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_types`
--

/*!40000 ALTER TABLE `document_types` DISABLE KEYS */;
INSERT INTO `document_types` (`document_type_id`,`document_name`,`document_code`,`status`,`update_ts`,`update_user`) VALUES 
 (1,'Loan Application Form','LAF',1,'2012-02-23 13:44:46',1),
 (2,'Credit Investigation Report','CIR',1,'2012-02-23 13:44:46',1),
 (3,'Appraisal Report','LAR',1,'2012-02-23 13:44:46',1),
 (4,'Credit Matrix','LCM',1,'2012-02-23 13:44:46',1),
 (5,'Create Loan Request','CLR',1,'2012-02-23 13:44:46',1),
 (6,'Send Loan Request','SLR',1,'2012-02-23 13:44:46',1),
 (7,'Loan Approval','APP',1,'2012-02-24 19:35:05',1),
 (8,'Loan Release Check','LRC',1,'2012-02-24 19:35:05',1),
 (9,'Loan Release Voucher','LRV',1,'2012-02-24 19:35:05',1);
/*!40000 ALTER TABLE `document_types` ENABLE KEYS */;


--
-- Definition of table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_type_id` int(11) DEFAULT NULL,
  `document_number` varchar(45) DEFAULT NULL,
  `document_date` date DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 for visible 0 for not visible',
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`document_id`),
  UNIQUE KEY `document_number_UNIQUE` (`document_number`),
  KEY `FK_document_area` (`area_id`),
  CONSTRAINT `FK_document_area` FOREIGN KEY (`area_id`) REFERENCES `areas` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`document_id`,`document_type_id`,`document_number`,`document_date`,`area_id`,`visible`,`update_ts`,`update_user`) VALUES 
 (1,1,'LAFURD000002','2012-07-16',1,1,'2012-09-03 11:48:16',1),
 (2,5,'CLRURD41145','2012-08-24',1,1,'2012-08-24 13:36:57',1),
 (3,5,'CLRURD41151','2012-08-30',1,1,'2012-08-30 13:56:57',1),
 (4,5,'CLRURD41155','2012-09-03',1,1,'2012-09-03 11:57:56',1),
 (5,1,'LAFURD000007','2012-09-03',1,1,'2012-09-04 09:06:02',1),
 (6,1,'LAFURD000008','2012-09-04',1,1,'2012-09-04 09:26:04',1);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;


--
-- Definition of table `documents_presented`
--

DROP TABLE IF EXISTS `documents_presented`;
CREATE TABLE `documents_presented` (
  `documents_presented_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `document_type` varchar(45) DEFAULT NULL,
  `document_number` varchar(45) DEFAULT NULL,
  `document_copy` varchar(45) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  `loan_application_id` int(11) NOT NULL,
  PRIMARY KEY (`documents_presented_id`),
  KEY `FK_documents_presented` (`loan_application_id`),
  CONSTRAINT `FK_documents_presented` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents_presented`
--

/*!40000 ALTER TABLE `documents_presented` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_presented` ENABLE KEYS */;


--
-- Definition of table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `employee_id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `UK_NAME` (`first_name`,`last_name`,`middle_name`),
  KEY `FK_employee_roles` (`role_id`),
  CONSTRAINT `FK_employee_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='list of all cashmate employees';

--
-- Dumping data for table `employees`
--

/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`employee_id`,`first_name`,`middle_name`,`last_name`,`contact_number`,`address`,`password`,`gender`,`date_of_birth`,`area_id`,`visible`,`update_ts`,`update_user`,`role_id`) VALUES 
 (00000000001,'ARNOLD JR.','DINO','AYAOAN','','','5f4dcc3b5aa765d61d8327deb882cf99','M','2012-06-19',1,1,'2012-08-26 16:02:19',1,3),
 (00000000002,'DAVELYN','TESTSDFDSF','TEST hjhjh','45898989898','Urdaneta City','21232f297a57a5a743894a0e4a801fc3','F','2012-07-05',18,1,'2012-07-05 22:53:20',1,3),
 (00000000005,'TESTING','T','TESTING','43434','343434','912ec803b2ce49e4a541068d495ab570','F','2012-07-05',77,1,'2012-07-05 22:55:23',1,1),
 (00000000007,'Rinoa Elisha','Rebollido','Ayaoan','343434','34343','827ccb0eea8a706c4c34a16891f84e7b','F','2010-09-26',61,0,'2012-07-04 23:06:27',1,3),
 (00000000008,'Lucky','Dwaine','Valbuena','6199570','','adbf5a778175ee757c34d0eba4e932bc','M','1999-08-18',1,1,'2012-08-26 16:01:57',1,3);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;


--
-- Definition of table `holidays`
--

DROP TABLE IF EXISTS `holidays`;
CREATE TABLE `holidays` (
  `holiday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `holiday_date` date NOT NULL,
  `holiday_description` varchar(45) NOT NULL,
  PRIMARY KEY (`holiday_id`),
  UNIQUE KEY `Index_2` (`holiday_date`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

/*!40000 ALTER TABLE `holidays` DISABLE KEYS */;
INSERT INTO `holidays` (`holiday_id`,`holiday_date`,`holiday_description`) VALUES 
 (1,'2012-08-08','dsada');
/*!40000 ALTER TABLE `holidays` ENABLE KEYS */;


--
-- Definition of table `income_statement`
--

DROP TABLE IF EXISTS `income_statement`;
CREATE TABLE `income_statement` (
  `statement_of_income_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `employment_income` double DEFAULT NULL,
  `visible` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inward_remittance_income` double DEFAULT NULL,
  `other_income` double DEFAULT NULL,
  `family_rental` double DEFAULT NULL,
  `family_utilities` double DEFAULT NULL,
  `family_food` double DEFAULT NULL,
  `family_clothing` double DEFAULT NULL,
  `family_education` double DEFAULT NULL,
  `family_mortgage` double DEFAULT NULL,
  `family_medicine` double DEFAULT NULL,
  `family_insurance` double DEFAULT NULL,
  `family_other_loans` double DEFAULT NULL,
  `max_loan_to_avail` double DEFAULT NULL,
  `equipment` double DEFAULT NULL,
  `stocks` double DEFAULT NULL,
  `stocks_worth` double DEFAULT NULL,
  PRIMARY KEY (`statement_of_income_id`) USING BTREE,
  KEY `FK_loan_application` (`loan_application_id`),
  CONSTRAINT `FK_loan_application` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_statement`
--

/*!40000 ALTER TABLE `income_statement` DISABLE KEYS */;
INSERT INTO `income_statement` (`statement_of_income_id`,`loan_application_id`,`employment_income`,`visible`,`update_user`,`update_ts`,`inward_remittance_income`,`other_income`,`family_rental`,`family_utilities`,`family_food`,`family_clothing`,`family_education`,`family_mortgage`,`family_medicine`,`family_insurance`,`family_other_loans`,`max_loan_to_avail`,`equipment`,`stocks`,`stocks_worth`) VALUES 
 (1,1,0,1,1,'2012-07-16 22:11:29',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
 (2,2,0,1,1,'2012-09-03 12:03:13',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
 (3,3,0,1,1,'2012-09-04 09:22:25',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `income_statement` ENABLE KEYS */;


--
-- Definition of table `informants`
--

DROP TABLE IF EXISTS `informants`;
CREATE TABLE `informants` (
  `informant_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `relationship_to_borrower` varchar(100) NOT NULL,
  `relationship_length` int(11) NOT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `loan_application_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`informant_id`),
  KEY `FK_loan_app_informant` (`loan_application_id`),
  CONSTRAINT `FK_loan_app_informant` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informants`
--

/*!40000 ALTER TABLE `informants` DISABLE KEYS */;
/*!40000 ALTER TABLE `informants` ENABLE KEYS */;


--
-- Definition of table `investments`
--

DROP TABLE IF EXISTS `investments`;
CREATE TABLE `investments` (
  `investment_id` int(11) NOT NULL,
  `company` varchar(500) DEFAULT NULL COMMENT 'same as bank or institution',
  `type` varchar(50) DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `borrower_id` int(11) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`investment_id`),
  KEY `FK_borrower_investments` (`borrower_id`),
  CONSTRAINT `FK_borrower_investments` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investments`
--

/*!40000 ALTER TABLE `investments` DISABLE KEYS */;
/*!40000 ALTER TABLE `investments` ENABLE KEYS */;


--
-- Definition of table `loan_application_appraisals`
--

DROP TABLE IF EXISTS `loan_application_appraisals`;
CREATE TABLE `loan_application_appraisals` (
  `loan_application_appraisal_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `total_appraisal_value` double(11,2) DEFAULT NULL,
  PRIMARY KEY (`loan_application_appraisal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_application_appraisals`
--

/*!40000 ALTER TABLE `loan_application_appraisals` DISABLE KEYS */;
INSERT INTO `loan_application_appraisals` (`loan_application_appraisal_id`,`loan_application_id`,`employee_id`,`total_appraisal_value`) VALUES 
 (22,1,1,123213.00),
 (23,2,1,123213.00);
/*!40000 ALTER TABLE `loan_application_appraisals` ENABLE KEYS */;


--
-- Definition of table `loan_application_background_investigation`
--

DROP TABLE IF EXISTS `loan_application_background_investigation`;
CREATE TABLE `loan_application_background_investigation` (
  `loan_background_investigation_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `background_investigation_id` int(11) NOT NULL,
  PRIMARY KEY (`loan_background_investigation_id`),
  KEY `FK_loan_application_check` (`loan_application_id`),
  CONSTRAINT `FK_loan_application_check` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_application_background_investigation`
--

/*!40000 ALTER TABLE `loan_application_background_investigation` DISABLE KEYS */;
INSERT INTO `loan_application_background_investigation` (`loan_background_investigation_id`,`loan_application_id`,`background_investigation_id`) VALUES 
 (25,1,0),
 (33,2,0),
 (35,3,0);
/*!40000 ALTER TABLE `loan_application_background_investigation` ENABLE KEYS */;


--
-- Definition of table `loan_application_collateral_types`
--

DROP TABLE IF EXISTS `loan_application_collateral_types`;
CREATE TABLE `loan_application_collateral_types` (
  `loan_application_collateral_type_id` int(11) NOT NULL,
  `loan_appliction_id` int(11) DEFAULT NULL,
  `collateral_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`loan_application_collateral_type_id`),
  KEY `FK_loan_applicaitons` (`loan_appliction_id`),
  KEY `FK_collateral_types` (`collateral_type_id`),
  CONSTRAINT `FK_collateral_types` FOREIGN KEY (`collateral_type_id`) REFERENCES `collateral_types` (`collateral_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_loan_applicaitons` FOREIGN KEY (`loan_appliction_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_application_collateral_types`
--

/*!40000 ALTER TABLE `loan_application_collateral_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_application_collateral_types` ENABLE KEYS */;


--
-- Definition of table `loan_application_collaterals`
--

DROP TABLE IF EXISTS `loan_application_collaterals`;
CREATE TABLE `loan_application_collaterals` (
  `loan_application_collateral_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_appraisal_id` int(11) DEFAULT NULL,
  `make_and_type` varchar(200) DEFAULT NULL,
  `brand` varchar(500) DEFAULT NULL,
  `series_number` varchar(100) DEFAULT NULL,
  `model_number` varchar(45) DEFAULT NULL,
  `registration_number` varchar(100) DEFAULT NULL,
  `motor_number` varchar(100) DEFAULT NULL,
  `chasis_number` varchar(100) DEFAULT NULL,
  `ctc_number` varchar(100) DEFAULT NULL,
  `plate_number` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL COMMENT 'for lot collaterals',
  `fair_market_value` double DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL COMMENT 'lot location',
  `general_condition` varchar(45) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `document_number` varchar(45) DEFAULT NULL,
  `reviewer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`loan_application_collateral_id`),
  KEY `FK_loan_appraisals` (`loan_application_appraisal_id`),
  CONSTRAINT `FK_loan_application_appraisals` FOREIGN KEY (`loan_application_appraisal_id`) REFERENCES `loan_application_appraisals` (`loan_application_appraisal_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_application_collaterals`
--

/*!40000 ALTER TABLE `loan_application_collaterals` DISABLE KEYS */;
INSERT INTO `loan_application_collaterals` (`loan_application_collateral_id`,`loan_application_appraisal_id`,`make_and_type`,`brand`,`series_number`,`model_number`,`registration_number`,`motor_number`,`chasis_number`,`ctc_number`,`plate_number`,`area`,`fair_market_value`,`location`,`general_condition`,`visible`,`update_user`,`update_ts`,`document_number`,`reviewer_id`) VALUES 
 (21,22,'asd','as','as','as',NULL,'as','as',NULL,'as','1',1000,'as','new',1,1,'2012-09-03 11:48:17','as',1),
 (31,23,'asd','as','as','as',NULL,'as','as',NULL,'as','1',1000,'as','new',1,1,'2012-09-04 09:06:03','as',1);
/*!40000 ALTER TABLE `loan_application_collaterals` ENABLE KEYS */;


--
-- Definition of table `loan_application_requirements`
--

DROP TABLE IF EXISTS `loan_application_requirements`;
CREATE TABLE `loan_application_requirements` (
  `loan_requirement_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `requirement_id` int(11) NOT NULL,
  PRIMARY KEY (`loan_requirement_id`),
  KEY `FK_loans` (`loan_application_id`),
  KEY `FK_requirements` (`requirement_id`),
  CONSTRAINT `FK_loan_application2` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_requirements` FOREIGN KEY (`requirement_id`) REFERENCES `requirements` (`requirement_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_application_requirements`
--

/*!40000 ALTER TABLE `loan_application_requirements` DISABLE KEYS */;
INSERT INTO `loan_application_requirements` (`loan_requirement_id`,`loan_application_id`,`requirement_id`) VALUES 
 (47,1,1),
 (48,1,5),
 (67,2,1),
 (68,2,5);
/*!40000 ALTER TABLE `loan_application_requirements` ENABLE KEYS */;


--
-- Definition of table `loan_applications`
--

DROP TABLE IF EXISTS `loan_applications`;
CREATE TABLE `loan_applications` (
  `loan_application_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL COMMENT 'holds the ',
  `borrower_id` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'determines if it is deleted or not',
  `area_id` int(11) DEFAULT NULL,
  `background_check_remarks` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`loan_application_id`),
  KEY `FK_loan_borrowers` (`borrower_id`),
  KEY `FK_loan_area` (`area_id`),
  KEY `FK_loan_document` (`document_id`),
  CONSTRAINT `FK_loan_area` FOREIGN KEY (`area_id`) REFERENCES `areas` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_loan_borrowers` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_loan_document` FOREIGN KEY (`document_id`) REFERENCES `documents` (`document_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_applications`
--

/*!40000 ALTER TABLE `loan_applications` DISABLE KEYS */;
INSERT INTO `loan_applications` (`loan_application_id`,`document_id`,`borrower_id`,`create_date`,`create_user`,`visible`,`area_id`,`background_check_remarks`) VALUES 
 (1,1,1,'2012-07-16',1,1,1,''),
 (2,5,1,'2012-09-03',1,1,1,''),
 (3,6,5,'2012-09-04',1,1,1,'');
/*!40000 ALTER TABLE `loan_applications` ENABLE KEYS */;


--
-- Definition of table `loan_approvals`
--

DROP TABLE IF EXISTS `loan_approvals`;
CREATE TABLE `loan_approvals` (
  `loan_approval_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `loan_requests_for_approval_id` int(11) DEFAULT NULL,
  `amount_approved` double DEFAULT NULL,
  `date_approved` date DEFAULT NULL,
  `user_approved` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL COMMENT 'status if the request has been approved or not',
  `visible` tinyint(4) DEFAULT NULL COMMENT 'flag if the record has been deleted or not\n',
  `date_updated` date DEFAULT NULL COMMENT 'the date where the status has been changed',
  `user_updated` int(11) DEFAULT NULL COMMENT 'user who sent the request for approval',
  `loan_account_number` varchar(45) DEFAULT NULL,
  `date_verified` date DEFAULT NULL,
  `user_verified` int(11) DEFAULT NULL,
  PRIMARY KEY (`loan_approval_id`),
  UNIQUE KEY `loan_requests_for_approval_id_UNIQUE` (`loan_requests_for_approval_id`),
  KEY `FK_status` (`status_id`),
  CONSTRAINT `FK_loan_req_approval` FOREIGN KEY (`loan_requests_for_approval_id`) REFERENCES `loan_requests_for_approvals` (`loan_requests_for_approval_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_status` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_approvals`
--

/*!40000 ALTER TABLE `loan_approvals` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_approvals` ENABLE KEYS */;


--
-- Definition of table `loan_checks_and_vouchers`
--

DROP TABLE IF EXISTS `loan_checks_and_vouchers`;
CREATE TABLE `loan_checks_and_vouchers` (
  `loan_check_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `loan_approval_id` int(10) unsigned NOT NULL,
  `loan_account_number` varchar(50) DEFAULT NULL,
  `check_number` varchar(45) NOT NULL,
  `bank_account_number` varchar(45) NOT NULL,
  `check_date` date NOT NULL,
  `check_amount` double NOT NULL,
  `user_updated` int(10) unsigned NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visible` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `voucher_number` varchar(45) NOT NULL,
  `date_released` date DEFAULT NULL,
  `prepared_voucher` int(10) unsigned DEFAULT NULL,
  `maturity_date` date DEFAULT NULL,
  `loan_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`loan_check_id`) USING BTREE,
  KEY `loan_approval_id` (`loan_approval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_checks_and_vouchers`
--

/*!40000 ALTER TABLE `loan_checks_and_vouchers` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_checks_and_vouchers` ENABLE KEYS */;


--
-- Definition of table `loan_collection_details`
--

DROP TABLE IF EXISTS `loan_collection_details`;
CREATE TABLE `loan_collection_details` (
  `loan_collection_detail_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `loan_collection_id` int(10) unsigned NOT NULL,
  `loan_check_id` int(10) unsigned NOT NULL,
  `receipt_number` varchar(45) NOT NULL,
  `loan_collection_amount` double NOT NULL,
  `debited_amount` double DEFAULT NULL,
  `adjustment` double DEFAULT NULL,
  `area_id` int(10) NOT NULL,
  `user_collected` int(10) unsigned NOT NULL,
  `date_collected` date NOT NULL,
  PRIMARY KEY (`loan_collection_detail_id`) USING BTREE,
  KEY `FK_loan_collections_1` (`loan_check_id`),
  KEY `FK_loan_collections2` (`loan_collection_id`),
  CONSTRAINT `FK_loan_collections2` FOREIGN KEY (`loan_collection_id`) REFERENCES `loan_collections` (`loan_collection_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_loan_collections_1` FOREIGN KEY (`loan_check_id`) REFERENCES `loan_checks_and_vouchers` (`loan_check_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_collection_details`
--

/*!40000 ALTER TABLE `loan_collection_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_collection_details` ENABLE KEYS */;


--
-- Definition of table `loan_collections`
--

DROP TABLE IF EXISTS `loan_collections`;
CREATE TABLE `loan_collections` (
  `loan_collection_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(10) NOT NULL,
  `user_collected` int(10) unsigned NOT NULL,
  `date_collected` date NOT NULL,
  `cash_on_hand` double NOT NULL,
  `cash_on_bank` double DEFAULT NULL,
  `deposit_slip_number` varchar(100) DEFAULT NULL,
  `date_deposited` date DEFAULT NULL,
  `bank_account_number` varchar(100) DEFAULT NULL,
  `total_collected_amount` double DEFAULT NULL,
  PRIMARY KEY (`loan_collection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_collections`
--

/*!40000 ALTER TABLE `loan_collections` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_collections` ENABLE KEYS */;


--
-- Definition of table `loan_deductions`
--

DROP TABLE IF EXISTS `loan_deductions`;
CREATE TABLE `loan_deductions` (
  `loan_deduction_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `loan_approval_id` int(10) unsigned NOT NULL,
  `loan_deduction_amount` double NOT NULL,
  `rate_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`loan_deduction_id`),
  KEY `FK_rates` (`rate_id`),
  CONSTRAINT `FK_rates` FOREIGN KEY (`rate_id`) REFERENCES `rates` (`rate_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_deductions`
--

/*!40000 ALTER TABLE `loan_deductions` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_deductions` ENABLE KEYS */;


--
-- Definition of table `loan_number_counter`
--

DROP TABLE IF EXISTS `loan_number_counter`;
CREATE TABLE `loan_number_counter` (
  `loan_counter_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(6) unsigned zerofill NOT NULL DEFAULT '000001',
  `branch_id` int(11) NOT NULL,
  `document_type_id` int(11) NOT NULL,
  PRIMARY KEY (`loan_counter_id`),
  KEY `branch_loan_applicaiton_number` (`branch_id`),
  KEY `FK_doc_type` (`document_type_id`),
  CONSTRAINT `FK_doc_type` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`document_type_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='list of number series by branch on any document';

--
-- Dumping data for table `loan_number_counter`
--

/*!40000 ALTER TABLE `loan_number_counter` DISABLE KEYS */;
INSERT INTO `loan_number_counter` (`loan_counter_id`,`number`,`branch_id`,`document_type_id`) VALUES 
 (1,000008,1,1);
/*!40000 ALTER TABLE `loan_number_counter` ENABLE KEYS */;


--
-- Definition of table `loan_requests`
--

DROP TABLE IF EXISTS `loan_requests`;
CREATE TABLE `loan_requests` (
  `loan_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `loan_type` varchar(100) NOT NULL DEFAULT 'none',
  `loan_class` varchar(100) NOT NULL,
  `loan_term` varchar(100) NOT NULL DEFAULT 'none',
  `amount_requested` double NOT NULL,
  `requested_date_release` date NOT NULL,
  `create_date` date NOT NULL,
  `create_user` int(11) NOT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `posted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loan_request_id`),
  KEY `FK_loan_application_request` (`loan_application_id`),
  KEY `FK_document1` (`document_id`),
  CONSTRAINT `FK_document1` FOREIGN KEY (`document_id`) REFERENCES `documents` (`document_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_loan_application_request` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_requests`
--

/*!40000 ALTER TABLE `loan_requests` DISABLE KEYS */;
INSERT INTO `loan_requests` (`loan_request_id`,`loan_application_id`,`document_id`,`loan_type`,`loan_class`,`loan_term`,`amount_requested`,`requested_date_release`,`create_date`,`create_user`,`visible`,`posted`) VALUES 
 (1,1,4,'30','30','30',1000,'2012-09-06','2012-09-03',1,1,0);
/*!40000 ALTER TABLE `loan_requests` ENABLE KEYS */;


--
-- Definition of table `loan_requests_for_approvals`
--

DROP TABLE IF EXISTS `loan_requests_for_approvals`;
CREATE TABLE `loan_requests_for_approvals` (
  `loan_requests_for_approval_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `loan_request_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visible` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`loan_requests_for_approval_id`),
  UNIQUE KEY `loan_request_id_UNIQUE` (`loan_request_id`),
  CONSTRAINT `FK_sent_request` FOREIGN KEY (`loan_request_id`) REFERENCES `loan_requests` (`loan_request_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='List of all posted loan requests';

--
-- Dumping data for table `loan_requests_for_approvals`
--

/*!40000 ALTER TABLE `loan_requests_for_approvals` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_requests_for_approvals` ENABLE KEYS */;


--
-- Definition of table `memos`
--

DROP TABLE IF EXISTS `memos`;
CREATE TABLE `memos` (
  `memo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `memo_title` varchar(500) NOT NULL,
  `memo_description` longtext NOT NULL,
  `user_created` int(10) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expiration_date` date NOT NULL,
  `employee_id` int(10) unsigned DEFAULT NULL,
  `memo_type` tinyint(3) unsigned NOT NULL DEFAULT '3' COMMENT '1 - for employee 2 for branch 3 for company',
  `branch_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`memo_id`) USING BTREE,
  KEY `FK_employees2` (`employee_id`),
  CONSTRAINT `FK_employees2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memos`
--

/*!40000 ALTER TABLE `memos` DISABLE KEYS */;
INSERT INTO `memos` (`memo_id`,`memo_title`,`memo_description`,`user_created`,`date_created`,`expiration_date`,`employee_id`,`memo_type`,`branch_id`) VALUES 
 (1,'djhsak','dhsjakl',1,'2012-08-16 14:39:38','2012-08-17',1,1,NULL),
 (2,'dsada','dsadsa',1,'2012-08-13 08:57:14','2012-08-09',NULL,1,2),
 (3,'dsada','dsada',1,'2012-08-13 08:55:04','2012-08-01',1,1,NULL),
 (4,'dsadsa','dsada',1,'2012-08-13 08:57:25','2012-08-01',1,1,NULL),
 (5,'dsad','dhsajkdh',1,'2012-08-13 09:21:57','2012-08-13',1,1,NULL),
 (6,'dsada','dsadsa',1,'2012-08-13 09:22:17','2012-08-02',NULL,1,2);
/*!40000 ALTER TABLE `memos` ENABLE KEYS */;


--
-- Definition of table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `module_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(100) NOT NULL,
  `module_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`module_id`,`module_name`,`module_description`) VALUES 
 (1,'authentication','Login Authentication - Do not delete'),
 (2,'home','Home - Do not delete'),
 (3,'loanApplication','Loan Application'),
 (4,'createRequest','Create Loan Request'),
 (5,'sendRequest','Send Loan Request'),
 (6,'loanApproval','Loan Approval'),
 (7,'releaseCheck','Check Release'),
 (8,'releaseVoucher','Voucher Release'),
 (9,'loanCollection','Loan Collection'),
 (10,'dailyCashCustodianReport','Daily Cash Custodian Report'),
 (11,'borrower','Admin - Borrowers'),
 (12,'collateral','Admin - Collaterals'),
 (13,'relative','Admin - Relatives'),
 (14,'otherLoans','Admin - Other Loans'),
 (15,'characterReference','Admin - Character Reference'),
 (16,'business','Admin - Businesses'),
 (17,'document','Admin - Documents'),
 (18,'area','Admin - Areas'),
 (19,'branch','Admin - Branches'),
 (20,'employee','Admin - Employees'),
 (21,'privilege','Admin - Privileges');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


--
-- Definition of table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(500) NOT NULL,
  `news_description` longtext NOT NULL,
  `news_type` tinyint(3) unsigned NOT NULL COMMENT '1 for branch 2 for company',
  `branch_id` int(10) unsigned DEFAULT NULL,
  `user_created` int(10) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_expiration_date` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`news_id`,`news_title`,`news_description`,`news_type`,`branch_id`,`user_created`,`date_created`,`news_expiration_date`) VALUES 
 (1,'asdf','asdfasf',0,2,1,'2012-08-04 14:47:49','2012-08-22'),
 (2,'dsadsa','dsadsa',1,2,1,'2012-08-13 08:55:31','2012-08-01');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


--
-- Definition of table `other_loans`
--

DROP TABLE IF EXISTS `other_loans`;
CREATE TABLE `other_loans` (
  `other_loans_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_application_id` int(11) NOT NULL,
  `creditor_name` varchar(500) NOT NULL,
  `creditor_address` varchar(500) NOT NULL,
  `other_loan_balance` double NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  `update_user` int(11) DEFAULT NULL,
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`other_loans_id`),
  KEY `FK_borrower_loans` (`loan_application_id`),
  CONSTRAINT `FK_borrower_loans` FOREIGN KEY (`loan_application_id`) REFERENCES `loan_applications` (`loan_application_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_loans`
--

/*!40000 ALTER TABLE `other_loans` DISABLE KEYS */;
INSERT INTO `other_loans` (`other_loans_id`,`loan_application_id`,`creditor_name`,`creditor_address`,`other_loan_balance`,`visible`,`update_user`,`update_ts`) VALUES 
 (1,1,'test','test',4545,0,1,'2012-08-02 22:21:54'),
 (2,1,'test','test',4545,0,1,'2012-08-02 22:22:44'),
 (3,1,'try','try',90,0,1,'2012-08-02 22:22:44'),
 (4,1,'test','test',878787,0,1,'2012-08-02 23:27:52'),
 (5,1,'asdas','asdad',123,0,1,'2012-08-20 21:58:01'),
 (6,1,'asd','asd',100,0,1,'2012-08-22 09:15:33');
/*!40000 ALTER TABLE `other_loans` ENABLE KEYS */;


--
-- Definition of table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes` (
  `quote_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quote_value` varchar(1000) NOT NULL,
  `quote_explanation` longtext NOT NULL,
  `user_created` int(10) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quote_expiration_date` date NOT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` (`quote_id`,`quote_value`,`quote_explanation`,`user_created`,`date_created`,`quote_expiration_date`) VALUES 
 (1,'hdjsak','hdjska',1,'2012-08-13 08:54:00','2012-08-13');
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;


--
-- Definition of table `rates`
--

DROP TABLE IF EXISTS `rates`;
CREATE TABLE `rates` (
  `rate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rate_operand` varchar(45) DEFAULT NULL COMMENT 'please indicate the operate if this value will added subtracted divided or multiplied to the approved amount',
  `rate_value` double NOT NULL,
  `loan_class` varchar(50) NOT NULL,
  `rate_description` varchar(45) NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='Please do not delete here';

--
-- Dumping data for table `rates`
--

/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
INSERT INTO `rates` (`rate_id`,`rate_operand`,`rate_value`,`loan_class`,`rate_description`) VALUES 
 (1,'*',0.05,'30','Interest Earned'),
 (2,'*',0.03,'30','Handling and Service Charge'),
 (3,'*',0.002,'30','Documentation and Notarial fee'),
 (4,'*',0,'30','Credit Shield'),
 (5,'*',0.1,'60','Interest Earned'),
 (6,'*',0.03,'60','Handling and Service Charge'),
 (7,'*',0.004,'60','Documentation and Notarial fee'),
 (8,'*',0,'60','Credit Shield'),
 (9,'*',0.13,'100','Interest Earned'),
 (10,'*',0.03,'100','Handling and Service Charge'),
 (11,'*',0.012,'100','Documentation and Notarial fee'),
 (12,'*',0.016,'100','Credit Shield');
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;


--
-- Definition of table `real_properties`
--

DROP TABLE IF EXISTS `real_properties`;
CREATE TABLE `real_properties` (
  `real_property_id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `nature` varchar(100) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `value` double DEFAULT NULL,
  `borrower_id` int(11) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`real_property_id`),
  KEY `FK_borrowers_real_properties` (`borrower_id`),
  CONSTRAINT `FK_borrowers_real_properties` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_properties`
--

/*!40000 ALTER TABLE `real_properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `real_properties` ENABLE KEYS */;


--
-- Definition of table `relationships`
--

DROP TABLE IF EXISTS `relationships`;
CREATE TABLE `relationships` (
  `relationship_id` int(11) NOT NULL,
  `relationship_value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`relationship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationships`
--

/*!40000 ALTER TABLE `relationships` DISABLE KEYS */;
INSERT INTO `relationships` (`relationship_id`,`relationship_value`) VALUES 
 (1,'Personal'),
 (2,'Spouse'),
 (3,'Son'),
 (4,'Daughter'),
 (5,'Father'),
 (6,'Mother'),
 (7,'Father in Law'),
 (8,'Mother in Law');
/*!40000 ALTER TABLE `relationships` ENABLE KEYS */;


--
-- Definition of table `reputations`
--

DROP TABLE IF EXISTS `reputations`;
CREATE TABLE `reputations` (
  `reputation_id` int(11) NOT NULL,
  `reputation_value` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`reputation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reputations`
--

/*!40000 ALTER TABLE `reputations` DISABLE KEYS */;
INSERT INTO `reputations` (`reputation_id`,`reputation_value`) VALUES 
 (1,'Good Moral Character'),
 (2,'Extravagant'),
 (3,'Heavily Indebted'),
 (4,'Adulterous'),
 (5,'Notorious Character'),
 (6,'Gambler'),
 (7,'Frequented by collectors'),
 (8,'Separated');
/*!40000 ALTER TABLE `reputations` ENABLE KEYS */;


--
-- Definition of table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
CREATE TABLE `requirements` (
  `requirement_id` int(11) NOT NULL,
  `requirement_value` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`requirement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;
INSERT INTO `requirements` (`requirement_id`,`requirement_value`) VALUES 
 (1,'Business Permit'),
 (2,'Barangay Clearance'),
 (3,'2 x 2 ID Picture'),
 (4,'Residence Certificate'),
 (5,'Picture of Collaterals'),
 (6,'Picture of Business Establishments'),
 (7,'Photocopy of business permit (barangay/mayor)'),
 (8,'Photocopy of permit to operate (PUJ & TODA)'),
 (9,'Photocopy of 1 valid ID (borrower)'),
 (10,'Picture of business establishment with the borrower'),
 (11,'Original proof of billing'),
 (12,'Authorization of spouse with photocopy of ID');
/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;


--
-- Definition of table `role_modules`
--

DROP TABLE IF EXISTS `role_modules`;
CREATE TABLE `role_modules` (
  `role_module_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `module_id` int(10) unsigned NOT NULL,
  `view` tinyint(1) DEFAULT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `save` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  `print` tinyint(1) DEFAULT NULL,
  `export` tinyint(1) DEFAULT NULL,
  `send` tinyint(1) DEFAULT NULL,
  `verify` tinyint(1) DEFAULT NULL,
  `approve` tinyint(1) DEFAULT NULL,
  `disapprove` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`role_module_id`) USING BTREE,
  UNIQUE KEY `UK_role_modules` (`role_id`,`module_id`),
  KEY `FK_role_modules_1` (`module_id`),
  KEY `FK_role_modules_2` (`role_id`),
  CONSTRAINT `FK_role_modules_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_role_modules_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COMMENT='list of all permission for a specific role';

--
-- Dumping data for table `role_modules`
--

/*!40000 ALTER TABLE `role_modules` DISABLE KEYS */;
INSERT INTO `role_modules` (`role_module_id`,`role_id`,`module_id`,`view`,`create`,`save`,`delete`,`print`,`export`,`send`,`verify`,`approve`,`disapprove`) VALUES 
 (1,1,1,1,1,1,1,1,1,1,1,1,1),
 (2,1,2,1,1,1,1,1,1,1,1,1,1),
 (3,1,3,1,1,1,1,1,1,1,1,1,0),
 (4,1,4,1,1,1,1,1,1,1,1,1,1),
 (5,1,5,1,1,1,1,1,1,1,1,1,0),
 (6,1,6,1,1,1,1,1,1,1,1,1,1),
 (7,1,7,1,1,1,1,1,1,1,1,1,1),
 (8,1,8,1,1,1,1,1,1,1,1,1,1),
 (9,1,9,1,1,1,1,1,1,1,1,1,0),
 (10,1,10,1,1,1,1,1,1,1,1,1,1),
 (11,1,11,1,1,1,1,1,1,1,1,0,0),
 (12,1,12,1,1,1,1,1,0,1,0,0,0),
 (13,1,13,1,1,1,1,1,1,1,1,1,1),
 (14,1,14,1,1,1,1,1,1,1,1,1,1),
 (15,1,15,1,1,1,1,1,1,1,1,1,0),
 (16,1,16,1,1,1,1,1,1,1,1,1,1),
 (17,1,17,1,1,1,1,1,1,1,1,1,1),
 (18,1,18,1,1,1,1,1,1,0,1,1,0),
 (19,1,19,1,1,1,1,1,1,1,1,1,1),
 (20,1,20,1,0,0,0,1,0,0,0,0,0),
 (21,1,21,1,1,1,1,1,1,1,0,0,0),
 (22,2,3,1,1,1,1,1,1,1,1,1,NULL),
 (23,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (24,3,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (25,4,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (26,2,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (27,3,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (28,4,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (29,3,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (30,4,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (31,2,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (32,3,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (33,4,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (34,2,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (35,3,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (36,4,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (37,2,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (38,3,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (39,4,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (40,2,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (41,3,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (42,4,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (43,2,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (44,3,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (45,4,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (46,2,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (47,3,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (48,4,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (49,2,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (50,3,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (51,4,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (52,2,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (53,3,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),
 (54,4,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (55,2,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (56,3,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (57,4,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (58,2,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (59,3,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (60,4,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (61,2,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (62,3,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (63,4,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (64,2,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (65,3,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (66,4,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (67,2,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (68,3,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (69,4,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (70,2,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (71,3,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (72,4,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (73,2,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (74,3,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,1,NULL),
 (75,4,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (76,2,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (77,3,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (78,4,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (79,2,20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (80,3,20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (81,4,20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (82,2,21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (83,3,21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (84,4,21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `role_modules` ENABLE KEYS */;


--
-- Definition of table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `update_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `UK_ROLE_NAME` (`role_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='list of different roles available for an employee';

--
-- Dumping data for table `roles`
--

/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`role_id`,`role_name`,`visible`,`update_ts`,`update_user`) VALUES 
 (1,'Branch Secretary',1,'2011-12-29 17:28:18',1),
 (2,'Branch Manager',1,'2012-06-27 00:00:00',1),
 (3,'Administrator',1,'2012-06-30 20:50:34',1),
 (4,'Branch Custodian',1,'2012-06-30 19:20:42',1);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


--
-- Definition of table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE `statuses` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(45) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='List of all status';

--
-- Dumping data for table `statuses`
--

/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` (`status_id`,`status_name`,`visible`,`create_user`,`create_ts`) VALUES 
 (1,'New',1,1,'2012-02-24 13:52:22'),
 (2,'Pending',1,1,'2012-02-24 13:52:22'),
 (3,'Verified',1,1,'2012-02-24 13:52:22'),
 (4,'Disapproved',1,1,'2012-03-06 10:39:35'),
 (5,'Approved',1,1,'2012-03-06 10:39:35');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;


--
-- Definition of table `top_performers`
--

DROP TABLE IF EXISTS `top_performers`;
CREATE TABLE `top_performers` (
  `top_performer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) unsigned NOT NULL,
  `month` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `top_performer_description` longtext NOT NULL,
  `user_created` int(10) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`top_performer_id`),
  KEY `FK_employees4` (`employee_id`),
  CONSTRAINT `FK_employees4` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_performers`
--

/*!40000 ALTER TABLE `top_performers` DISABLE KEYS */;
INSERT INTO `top_performers` (`top_performer_id`,`employee_id`,`month`,`year`,`top_performer_description`,`user_created`,`date_created`) VALUES 
 (1,1,0,2012,'asfda',1,'2012-08-16 14:08:22');
/*!40000 ALTER TABLE `top_performers` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
