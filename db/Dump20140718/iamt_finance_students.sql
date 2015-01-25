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
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(45) NOT NULL,
  `admission_date` date NOT NULL DEFAULT '0000-00-00',
  `name` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `gender` enum('0','1') NOT NULL,
  `address` text,
  `date_of_birth` date NOT NULL DEFAULT '0000-00-00',
  `pincode` int(11) DEFAULT NULL,
  `parent_name` varchar(45) NOT NULL,
  `parent_phone` varchar(14) NOT NULL,
  `home_number` varchar(14) DEFAULT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `batch_id_idx` (`batch_id`),
  KEY `course_id_idx` (`course_id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `batch_id` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `student_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'001','2014-07-05','student1','',1,'0','address','1998-07-05',NULL,'parent','9874563210','','',1,1,'A');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
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
