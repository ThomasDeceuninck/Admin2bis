-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
-- DROP TABLE IF EXISTS `Customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE DATABASE b2b;
USE b2b;
CREATE TABLE `inventory` (`id` INT AUTO_INCREMENT PRIMARY KEY,`name` varchar(255) DEFAULT NULL,`price` FLOAT(10) DEFAULT NULL);

INSERT INTO `inventory` VALUES (NULL, 'buzz' , 11.50);
INSERT INTO `inventory` VALUES (NULL, 'woody' , 5.36);
INSERT INTO `inventory` VALUES (NULL, 'playmobil' , 9.99);

CREATE USER 'userb2b'@'%' IDENTIFIED BY 'Zh0qtDbBRiKsmX4V8dES';
 
GRANT ALL PRIVILEGES ON b2b.* TO 'userb2b'@'172.20.2.4';

CREATE DATABASE internal;
USE internal;
CREATE TABLE `employee` (`id` INT AUTO_INCREMENT PRIMARY KEY,`name` varchar(255) DEFAULT NULL,`surname` varchar(255) DEFAULT NULL, `email` varchar(255) DEFAULT NULL);

INSERT INTO `employee` VALUES (NULL, 'Jepson' , 'Noham', 'aa@gmail.com');
INSERT INTO `employee` VALUES (NULL, 'Jerome' , 'Liam', 'bb@gmail.com');
INSERT INTO `employee` VALUES (NULL,  'Jarrett' , 'Den', 'cc@gmail.com');

CREATE USER 'userinternal'@'%' IDENTIFIED BY '9Y8WlgYjPzZznK5SMn2Z';
 
GRANT ALL PRIVILEGES ON internal.* TO 'userinternal'@'172.20.4.6';
