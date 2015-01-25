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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('AD','CR','DO','EX','TC') NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `name` varchar(60) NOT NULL,
  `address` text,
  `phone` varchar(10) NOT NULL,
  `center` enum('Ulloor','Attakulangara') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','AD','A','Admin','asdasdasfasf\r\ndfgdsfgdsfg\r\nlkhjkjhkjh\r\njkhjkhkjhk\r\nklkhjh,hjkho','1234567890','Ulloor'),(2,'counsellor','e10adc3949ba59abbe56e057f20f883e','CR','A','counsellor','dfsdfsd','9876543210','Ulloor'),(3,'telecaller','e10adc3949ba59abbe56e057f20f883e','TC','A','Telecaller','telecaller address','9874563210','Ulloor'),(4,'executive','e10adc3949ba59abbe56e057f20f883e','EX','A','executive','asdasfiuou\r\ndsdgsdfg','0147852369','Ulloor'),(5,'data','e10adc3949ba59abbe56e057f20f883e','DO','A','Data Entry','dghfdhfdthfd','3216549870','Attakulangara'),(6,'test','e10adc3949ba59abbe56e057f20f883e','AD','A','test',NULL,'','Ulloor');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-06  9:33:25
