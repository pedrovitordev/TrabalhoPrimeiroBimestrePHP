CREATE DATABASE  IF NOT EXISTS `trabalhogildo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `trabalhogildo`;
-- MariaDB dump 10.19  Distrib 10.5.9-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: trabalhogildo
-- ------------------------------------------------------
-- Server version	10.5.9-MariaDB

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
-- Table structure for table `atendente`
--

DROP TABLE IF EXISTS `atendente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atendente` (
  `idatendente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `nascimento` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idatendente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atendente`
--

LOCK TABLES `atendente` WRITE;
/*!40000 ALTER TABLE `atendente` DISABLE KEYS */;
/*!40000 ALTER TABLE `atendente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `idconsulta` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `idmedico` int(11) DEFAULT NULL,
  `idpaciente` int(11) DEFAULT NULL,
  `motivo` varchar(200) DEFAULT NULL,
  `historico` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idconsulta`),
  KEY `fk_medico_idx` (`idmedico`),
  KEY `fk_paciente_idx` (`idpaciente`),
  CONSTRAINT `fk_medico` FOREIGN KEY (`idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_paciente` FOREIGN KEY (`idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (5,'2021-05-18','21:56',3,2,'Java','Java'),(6,'2021-05-18','21:56',3,2,'Java','Java'),(7,'2021-05-18','21:56',3,2,'Java','Java'),(8,'2021-05-18','21:56',3,2,'Java','Java'),(9,'2021-05-18','21:56',3,2,'Java','Java'),(10,'2021-05-18','21:56',3,2,'Java','Java'),(11,'2021-05-18','21:56',3,2,'Java','Java'),(12,'2021-05-18','21:56',3,2,'Java','Java'),(13,'2021-05-18','21:56',3,2,'Java','Java'),(14,'2021-05-18','21:56',3,2,'Java','Java'),(15,'2021-05-18','21:56',3,2,'Java','Java'),(16,'2021-05-18','21:56',3,2,'Java','Java'),(17,'2021-05-18','21:56',3,2,'Java','Java'),(18,'2021-05-18','sadas',1,1,'sadsa','dasd'),(19,'2021-05-18','sadas',1,1,'sadas','dasd'),(20,'2021-05-18','14:00',3,2,'Dengue','Já teve dengue'),(21,'2021-05-21','14:00',1,1,'febre','febre'),(22,'2021-05-21','14:00',1,1,'febre','febre'),(23,'2021-05-20','14:00',1,3,'eee','tet'),(33,'2021-05-28','16:00',3,2,'Depressão pós Java','Hemorragia intensa'),(34,'2021-05-13','dfd',2,2,'frgrg','rgrg');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medico`
--

DROP TABLE IF EXISTS `medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medico` (
  `idmedico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `nascimento` varchar(45) DEFAULT NULL,
  `cnm` varchar(45) DEFAULT NULL,
  `especialidade` varchar(45) DEFAULT NULL,
  `senha` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmedico`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medico`
--

LOCK TABLES `medico` WRITE;
/*!40000 ALTER TABLE `medico` DISABLE KEYS */;
INSERT INTO `medico` VALUES (1,'Pedro','123','123','123','123','123',456),(2,'Gildo','456','555','1010','1010','sadas',1234),(3,'Daves','666','123','777','999','dasdas',555);
/*!40000 ALTER TABLE `medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `nascimento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'teste','564','888','08/01/2020'),(2,'Pedro','5456','56465','564654'),(3,'Daniell','25132','8888','4444');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-16 19:42:55
