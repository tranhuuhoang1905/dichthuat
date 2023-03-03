-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table mydatabase.doctrine_migration_versions
DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table mydatabase.doctrine_migration_versions: ~19 rows (approximately)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20230215145345', '2023-02-15 15:54:08', 57),
	('DoctrineMigrations\\Version20230301082442', '2023-03-01 09:24:54', 58),
	('DoctrineMigrations\\Version20230301082512', '2023-03-01 09:25:19', 49),
	('DoctrineMigrations\\Version20230302030155', '2023-03-02 04:02:01', 52),
	('DoctrineMigrations\\Version20230302030949', '2023-03-02 04:09:56', 56),
	('DoctrineMigrations\\Version20230302031340', '2023-03-02 04:16:05', 50),
	('DoctrineMigrations\\Version20230302031731', '2023-03-02 04:17:37', 49),
	('DoctrineMigrations\\Version20230302032424', '2023-03-02 04:24:32', 53),
	('DoctrineMigrations\\Version20230302033139', '2023-03-02 04:31:48', 99),
	('DoctrineMigrations\\Version20230302034334', '2023-03-02 04:43:42', 52),
	('DoctrineMigrations\\Version20230302034648', '2023-03-02 04:46:54', 119),
	('DoctrineMigrations\\Version20230302094014', '2023-03-02 10:41:40', 92),
	('DoctrineMigrations\\Version20230302094252', '2023-03-02 10:42:59', 60),
	('DoctrineMigrations\\Version20230302094502', '2023-03-02 10:45:08', 70),
	('DoctrineMigrations\\Version20230302095828', '2023-03-02 10:58:39', 87),
	('DoctrineMigrations\\Version20230302100337', '2023-03-02 11:03:57', 58),
	('DoctrineMigrations\\Version20230302100744', '2023-03-02 11:07:50', 70),
	('DoctrineMigrations\\Version20230302101855', '2023-03-02 11:19:05', 294),
	('DoctrineMigrations\\Version20230302102702', '2023-03-02 11:27:12', 55);

-- Dumping structure for table mydatabase.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mydatabase.languages: ~0 rows (approximately)

-- Dumping structure for table mydatabase.translation_work
DROP TABLE IF EXISTS `translation_work`;
CREATE TABLE IF NOT EXISTS `translation_work` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vocabulary_id` int DEFAULT NULL,
  `translate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` int DEFAULT NULL,
  `produnciation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` int NOT NULL,
  `update_at` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7E6CCB1BAD0E05F6` (`vocabulary_id`),
  KEY `IDX_7E6CCB1B82F1BAF4` (`language_id`),
  CONSTRAINT `FK_7E6CCB1B82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  CONSTRAINT `FK_7E6CCB1BAD0E05F6` FOREIGN KEY (`vocabulary_id`) REFERENCES `words` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mydatabase.translation_work: ~0 rows (approximately)

-- Dumping structure for table mydatabase.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creat_at` int DEFAULT NULL,
  `update_at` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mydatabase.user: ~2 rows (approximately)
INSERT INTO `user` (`id`, `username`, `roles`, `password`, `first_name`, `last_name`, `phone_number`, `avatar`, `sex`, `status`, `address`, `creat_at`, `update_at`) VALUES
	(21, 'hoang310', '["ROLE_ADMIN"]', '$2y$13$DaKe577UmxWjhKK6OCUo.OfJujsQ4J.qeEsit2Z00FPHKWuTGJ3wK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(22, 'hoang', '[]', '$2y$13$K26mR1eyM7wYz3z0wLVShe6KShVyEQqLyiGZaxkXfjc02Bty/wMNW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table mydatabase.words
DROP TABLE IF EXISTS `words`;
CREATE TABLE IF NOT EXISTS `words` (
  `id` int NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int DEFAULT NULL,
  `number_search` int NOT NULL,
  `number_add_notebook` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pronunciation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `synonym` longtext COLLATE utf8mb4_unicode_ci,
  `create_at` int NOT NULL,
  `update_at` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_717D1E8C82F1BAF4` (`language_id`),
  CONSTRAINT `FK_717D1E8C82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mydatabase.words: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
