-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 25 mars 2022 à 10:31
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `jeuxoo`
--
DROP DATABASE IF EXISTS `jeuxoo`;
CREATE DATABASE IF NOT EXISTS `jeuxoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jeuxoo`;

-- --------------------------------------------------------

--
-- Structure de la table `mechant`
--

DROP TABLE IF EXISTS `mechant`;
CREATE TABLE IF NOT EXISTS `mechant` (
  `idMechant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nameMechant` varchar(60) NOT NULL,
  `forceMechant` int(10) UNSIGNED NOT NULL,
  `experienceMechant` int(10) UNSIGNED NOT NULL,
  `statusMechant` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idMechant`),
  UNIQUE KEY `nameMechant` (`nameMechant`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mechant`
--

INSERT INTO `mechant` (`idMechant`, `nameMechant`, `forceMechant`, `experienceMechant`, `statusMechant`) VALUES
(1, 'Michaël', 3, 45, 1),
(2, 'Joe', 1, 1, 1),
(3, 'Pierre', 3, 45, 1),
(4, 'André', 999, 200, 1),
(5, 'DameAuMasque', 9999, 9999, 0),
(6, 'fghj', 2, 3, 1),
(7, 'Lulu', 10, 25, 1),
(9, 'michael pitz', 2, 1, 0),
(11, 'Lulu7', 2, 2, 1),
(15, 'gygfu', 1, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `idPersonnage` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `forcePerso` int(10) UNSIGNED DEFAULT NULL,
  `degats` float UNSIGNED DEFAULT NULL,
  `niveau` int(10) UNSIGNED DEFAULT NULL,
  `experience` int(10) UNSIGNED DEFAULT NULL,
  `vie` int(10) UNSIGNED DEFAULT NULL,
  `theclassID` int(10) UNSIGNED DEFAULT 1,
  PRIMARY KEY (`idPersonnage`),
  UNIQUE KEY `nom` (`nom`),
  KEY `theclassID` (`theclassID`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`idPersonnage`, `nom`, `forcePerso`, `degats`, `niveau`, `experience`, `vie`, `theclassID`) VALUES
(1, 'Joel', 10, 25.3, 1, 0, 1, 1),
(11, 'Mahmoud', 12, 21.8, 1, 0, 1, 2),
(46, 'Joelina', 10, 25.3, 1, 0, 1, 3),
(75, 'Bilel', 25, 2, 1, 0, 2, 4),
(76, 'Lulu', 21, 15, 21, 21, 111, 1),
(77, 'Lulu2', 576, 876, 8796, 749, 879, 2),
(78, 'Cahit', 150, 30, 50, 1, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `theclass`
--

DROP TABLE IF EXISTS `theclass`;
CREATE TABLE IF NOT EXISTS `theclass` (
  `idtheClass` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nametheClass` varchar(60) NOT NULL,
  `desctheClass` varchar(300) NOT NULL,
  PRIMARY KEY (`idtheClass`),
  UNIQUE KEY `nametheClass` (`nametheClass`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `theclass`
--

INSERT INTO `theclass` (`idtheClass`, `nametheClass`, `desctheClass`) VALUES
(1, 'Magicien', 'Un magicien est une personne pratiquant la magie.'),
(2, 'Guerrier', 'Personne dont le métier était de faire la guerre.'),
(3, 'Voleur', 'Personne qui vole ou a volé le bien d\'autrui.'),
(4, 'Paladin', 'Le paladin est un chevalier ayant atteint l\'un des plus hauts grades, faisant partie d\'un ordre religieux et porteur du pouvoir sacré de la foi.'),
(5, 'Démoniste', 'Les démonistes soumettent des démons à leur volonté. Ces créatures infernales défendent leur maître au péril de leur vie, ou font s\'abattre la mort sur l\'ennemi');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD CONSTRAINT `personnage_ibfk_1` FOREIGN KEY (`theclassID`) REFERENCES `theclass` (`idtheClass`) ON DELETE SET NULL;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
