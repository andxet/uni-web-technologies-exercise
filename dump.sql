-- MySQL dump 10.13  Distrib 5.5.9, for osx10.6 (i386)
--
-- Host: localhost    Database: Sito04_718024
-- ------------------------------------------------------
-- Server version	5.5.9

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
-- Table structure for table `Dischi`
--

DROP TABLE IF EXISTS `Dischi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Dischi` (
  `Nome` varchar(60) NOT NULL COMMENT 'Nome dell''album',
  `Anno` int(10) unsigned NOT NULL COMMENT 'Anno dell''album'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Dischi`
--

LOCK TABLES `Dischi` WRITE;
/*!40000 ALTER TABLE `Dischi` DISABLE KEYS */;
INSERT INTO `Dischi` VALUES ('High Voltage',1975),('T.N.T.',1975),('High Voltage',1976),('Dirty Deeds Done Dirt Cheap',1976),('Let There Be Rock',1977),('Powerage',1978),('If You Want Blood You\'ve Got It',1978),('Highway to Hell',1979),('Back in Black',1980),('For Those About to Rock We Salute You',1981),('Flick of the Switch',1983),('\'74 Jailbreak',1984),('Fly on the Wall',1985),('Who Made Who',1986),('Blow Up Your Video',1988),('The Razors Edge',1990),('AC/DC Live',1992),('Ballbreaker',1995),('Stiff Upper Lip',2000),('Black Ice',2008),('AC/DC: Iron Man 2',2010);
/*!40000 ALTER TABLE `Dischi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Menu`
--

DROP TABLE IF EXISTS `Menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Menu` (
  `posizione` int(10) unsigned NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`posizione`),
  UNIQUE KEY `posizione` (`posizione`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Menu`
--

LOCK TABLES `Menu` WRITE;
/*!40000 ALTER TABLE `Menu` DISABLE KEYS */;
INSERT INTO `Menu` VALUES (0,'Menu'),(1,'Lineup');
/*!40000 ALTER TABLE `Menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pagine`
--

DROP TABLE IF EXISTS `Pagine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pagine` (
  `posizione` int(10) unsigned NOT NULL,
  `nome` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `menu` int(11) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  PRIMARY KEY (`posizione`),
  UNIQUE KEY `posizione` (`posizione`),
  UNIQUE KEY `link` (`link`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pagine`
--

LOCK TABLES `Pagine` WRITE;
/*!40000 ALTER TABLE `Pagine` DISABLE KEYS */;
INSERT INTO `Pagine` VALUES (0,'Story','index.php',0,'AC/DC fan page'),(1,'Albums','albums.php',0,'Albums'),(2,'Newsletter','newsletter.php',0,'Newsletter'),(3,'Galleria','photo.php',0,'Galleria'),(4,'Brian Johnson','artisti.php?artista=brian',1,'Brian Johnson'),(5,'Angus Young','artisti.php?artista=angus',1,'Angus Young'),(6,'Malcolm Young','artisti.php?artista=malcolm',1,'Malcolm Young'),(7,'Phil Rudd','artisti.php?artista=phil',1,'Phil Rudd');
/*!40000 ALTER TABLE `Pagine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-12-20 15:30:03
