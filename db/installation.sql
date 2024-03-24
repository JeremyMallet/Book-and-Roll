-- Adminer 4.8.1 MySQL 5.5.5-10.4.19-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(180) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `evenements` (`id`, `titre`, `description`, `date`) VALUES
(2,	'tueurs de dragons',	'une quete flamboyante',	'2024-03-14'),
(3,	'knight',	'des chevaliers futuristes',	'2024-03-22'),
(4,	'pathfinder',	'une formidable aventure',	'2024-03-31');

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_places` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `nom` varchar(180) NOT NULL,
  `decription` text NOT NULL,
  `evenement` int(11) NOT NULL,
  `places_min` int(11) NOT NULL,
  `places_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `givenName` varchar(180) NOT NULL,
  `familyName` varchar(180) NOT NULL,
  `password` varchar(180) NOT NULL,
  `image` varchar(180) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2024-03-24 06:47:12
