-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Versie:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van boodschapp wordt geschreven
CREATE DATABASE IF NOT EXISTS `boodschapp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `boodschapp`;

-- Structuur van  tabel boodschapp.boodschappen wordt geschreven
CREATE TABLE IF NOT EXISTS `boodschappen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `boodschap` varchar(50) NOT NULL DEFAULT '0',
  `categorie` varchar(50) NOT NULL DEFAULT '0',
  `afvinken` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel boodschapp.boodschappen: ~0 rows (ongeveer)
INSERT INTO `boodschappen` (`id`, `boodschap`, `categorie`, `afvinken`) VALUES
	(2, 'Bananen', 'Fruit', NULL),
	(3, 'WC Papier', 'Toiletartikelen', NULL),
	(4, 'Winegums', 'Snoep', NULL),
	(5, 'Groentesoep', 'Soepen', NULL),
	(6, 'Appels', 'Fruit', NULL),
	(7, 'Pindakaas', 'Beleg', NULL),
	(8, 'Shampoo', 'Toiletartikelen', NULL);

-- Structuur van  tabel boodschapp.gebruikers wordt geschreven
CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(50) DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `wachtwoord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel boodschapp.gebruikers: ~1 rows (ongeveer)
INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `email`, `wachtwoord`) VALUES
	(1, 'user', 'test@test.nl', '$2y$10$8Y95wZ3k87XRZWmfJ/PJMuzG35SrMXtLPBQjBktyg58mJI1YV6TTy');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
