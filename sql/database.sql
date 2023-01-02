-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: proyecto-tesis
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_001_usuarios`
--

DROP TABLE IF EXISTS `tb_001_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_001_usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(45) DEFAULT NULL,
  `tx_apellido` varchar(45) DEFAULT NULL,
  `tx_cedula` varchar(45) DEFAULT NULL,
  `tx_usuario` varchar(45) DEFAULT NULL,
  `tx_password` varchar(255) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `fe_creacion` date DEFAULT NULL,
  `fe_actualizacion` date DEFAULT NULL,
  PRIMARY KEY (`id_usuarios`),
  KEY `fk_tb_001_usuarios_1_idx` (`id_rol`),
  CONSTRAINT `fk_tb_001_usuarios_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_002_rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_001_usuarios`
--

LOCK TABLES `tb_001_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_001_usuarios` DISABLE KEYS */;
INSERT INTO `tb_001_usuarios` VALUES (2,'Eduardo','Moron Meneses','20740857','moronen','123456',1,NULL,'2023-01-02'),(7,'Jose','Dominguez','123456789','dominguezj','123456789',1,'2023-01-02','2023-01-02');
/*!40000 ALTER TABLE `tb_001_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_002_rol`
--

DROP TABLE IF EXISTS `tb_002_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_002_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(45) DEFAULT NULL,
  `tx_descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_002_rol`
--

LOCK TABLES `tb_002_rol` WRITE;
/*!40000 ALTER TABLE `tb_002_rol` DISABLE KEYS */;
INSERT INTO `tb_002_rol` VALUES (1,'Administrador','Este es el rol admin'),(2,'Responsable','Rol responsable del sistema'),(3,'Tecnico','Este es el rol tecnico'),(4,'Usuario','Rol del usuario comun');
/*!40000 ALTER TABLE `tb_002_rol` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-02 13:21:39
