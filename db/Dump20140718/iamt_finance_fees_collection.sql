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
-- Table structure for table `fees_collection`
--

DROP TABLE IF EXISTS `fees_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_collection_name` varchar(45) NOT NULL,
  `fees_category_id` int(11) NOT NULL,
  `fine_id` int(11) NOT NULL,
  `start_date` date NOT NULL DEFAULT '0000-00-00',
  `end_date` date NOT NULL DEFAULT '0000-00-00',
  `due_date` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `fees_category_id` (`fees_category_id`),
  KEY `fine_id` (`fine_id`),
  CONSTRAINT `fees_category_id` FOREIGN KEY (`fees_category_id`) REFERENCES `fees_category` (`id`),
  CONSTRAINT `fine_id` FOREIGN KEY (`fine_id`) REFERENCES `fine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees_collection`
--

LOCK TABLES `fees_collection` WRITE;
/*!40000 ALTER TABLE `fees_collection` DISABLE KEYS */;
INSERT INTO `fees_collection` VALUES (1,'fees collection name',1,1,'2014-07-07','2014-07-15','2014-07-15','A'),(2,'fees collection 2',1,1,'2014-07-07','2014-07-15','2014-07-15','I');
/*!40000 ALTER TABLE `fees_collection` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-18  4:31:50
