-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 09:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230215145345', '2023-02-15 15:54:08', 57),
('DoctrineMigrations\\Version20230301082442', '2023-03-01 09:24:54', 58),
('DoctrineMigrations\\Version20230301082512', '2023-03-01 09:25:19', 49);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `address`) VALUES
(1, 'hoang', '[]', '$2y$13$eeKuLf9D6x8t9fV7oOkGYeQHedPYNpdb7E9Ra.wxgZnRioQ6V7KWO', ''),
(2, 'hoang2', '[\"ROLE_ADMIN\"]', '$2y$13$aPRepWGhcH7CCZDcC3ms3O5e5uI4BNeMOlmISRBfeDLvwdif8wXzu', ''),
(3, 'hoang3', '[]', '$2y$13$lqqX3aQjwben19PIEUfRa.PKBOlCzS93xKxI3VJpjh5DWOM6gCDeW', ''),
(4, 'hoang4', '[]', '$2y$13$yuJ2rvm7PkKQVlAMWM508eCr0xvXJAvnYnzld6gcw7.CcjJME7IL2', ''),
(5, 'hoang5', '[]', '$2y$13$ANo//Pmombq/w6dfFsPJqOaIO8AkbKBH/eF/JVcHhnAEfU6pBbYQm', ''),
(6, 'hoang6', '[]', '$2y$13$hNYXXC30ZJ8Xk/FhMkAVGui2/0bF2pvyku.XfyG1MWBtWfGOwNaFi', ''),
(7, 'hoang7', '[]', '$2y$13$UUPpX7tMMLK/o9iiaoU2QeClXTaugu/W.Qx9xy8.x5cbUSjG.g7ea', ''),
(8, 'hoang8', '[]', '$2y$13$bwon704DY8JuYZmZHcpEn.tYNAXHg3AiWfInCcROzLDuNuEgPB8yG', ''),
(9, 'hoang9', '[]', '$2y$13$VmIRy6Z73kdAFFYyq7u0de.6N5eJiP/cDCKlE.MYGf2FTQWIi2lyW', ''),
(10, 'hoang10', '[]', '$2y$13$JIL87cHC0ha3E2PtwpCjRu/FFH7y5HH0GtaDlMQB3mAuqmcQRfyTO', ''),
(11, 'hoang11', '[]', '$2y$13$RapduNXs5Ut225ARXba6BOsFoSOwDzFykM1VyMPeY2sQEdgfBnkUS', ''),
(12, 'hoang12', '[]', '$2y$13$mEy9d5y2A9mbsg46qkAyMukZvKbVSB4q7J15lnAvLbSmh1HanFKGi', ''),
(13, 'hoang21', '[]', '$2y$13$bDr/k0.cig2zIGwsumiJau9pVD9R9lsE4skiFDWWlqlDpu5cCdS7K', ''),
(14, 'hoang22', '[]', '$2y$13$w084rxg.5xNVGEbqzjNJnuG5aNZylvgsMiEonoZ0hiiFoIbz/ZDgK', ''),
(15, 'hoang31', '[]', '$2y$13$c/r6oIGvLdD8hUEtQSm6D.9UtRWJbrhYqfXw.kILVIe.DCraNvQO.', ''),
(16, 'hoang32', '[]', '$2y$13$WitPt6KmZ2.VQ2AqdXbJM.fij6wG/jhVcGQZ1lnUOAL.OipJmTZ.6', ''),
(17, 'hoang33', '[]', '$2y$13$rEPCMaP1QiX4p9baIaF0O.xsAzLOrp48huzFnldmh7VXBrp3a03J2', ''),
(18, 'hoang34', '[]', '$2y$13$SwEflNPczCjb846YKlr8i.8UWyhuQ38QWhgc6UL/5u8pgNUN8p8wi', ''),
(19, 'hoang35', '[]', '$2y$13$w5TIGgwuiwIrf6ZDRpqVFuIYJYaJNTI0yvXoh1X2gUt0ibpLzw1uC', ''),
(20, 'hoang36', '[]', '$2y$13$uLYJvsAWYY2e1MYQ7oPG5ebi0WY7JWx4xI8DIvtvmOHlsL3Vrmhnu', '');

-- --------------------------------------------------------

--
-- Table structure for table `workplace`
--

CREATE TABLE `workplace` (
  `id` int(11) NOT NULL,
  `workplace_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- Indexes for table `workplace`
--
ALTER TABLE `workplace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `workplace`
--
ALTER TABLE `workplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
