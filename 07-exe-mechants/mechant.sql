-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 16 mars 2022 à 10:47
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `jeuxoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeuxoo`.`mechant`
--

DROP TABLE IF EXISTS `jeuxoo`.`mechant`;
CREATE TABLE IF NOT EXISTS `jeuxoo`.`mechant` (
  `idMechant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nameMechant` varchar(60) NOT NULL,
  `forceMechant` int(10) UNSIGNED NOT NULL,
  `experienceMechant` int(10) UNSIGNED NOT NULL,
  `statusMechant` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idMechant`),
  UNIQUE KEY `nameMechant` (`nameMechant`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mechant`
--

INSERT INTO `jeuxoo`.`mechant` (`idMechant`, `nameMechant`, `forceMechant`, `experienceMechant`, `statusMechant`) VALUES
(1, 'Michaël', 3, 45, 1),
(2, 'Joe', 1, 1, 1),
(3, 'Pierre', 3, 45, 1),
(4, 'André', 999, 200, 1),
(5, 'DameAuMasque', 9999, 9999, 0);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;