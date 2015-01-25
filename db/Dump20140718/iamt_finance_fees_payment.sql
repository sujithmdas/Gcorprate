CREATE DATABASE  IF NOT EXISTS `iamt_finance` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `iamt_finance`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: iamt_finance
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fees_payment`
--

DROP TABLE IF EXISTS `fees_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_receipt_number` varchar(20) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `fees_collection_id` int(11) NOT NULL,
  `fees_payment_date` date NOT NULL DEFAULT '0000-00-00',
  `payment_mode` enum('Cash','Cheque','DD') NOT NULL,
  `payment_remark` varchar(60) DEFAULT NULL,
  `paid_amount` double(15,2) NOT NULL DEFAULT '0.00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fees_collection_id` (`fees_collection_id`),
  KEY `fk_fees_payment_1_idx` (`batch_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `fees_collection_id` FOREIGN KEY (`fees_collection_id`) REFERENCES `fees_collection` (`id`),
  CONSTRAINT `fk_fees_payment_1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `students_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees_payment`
--

LOCK TABLES `fees_payment` WRITE;
/*!40000 ALTER TABLE `fees_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `fees_payment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-18  4:31:49
