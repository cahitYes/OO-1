-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 14 mars 2022 à 10:25
-- Version du serveur : 10.5.13-MariaDB
-- Version de PHP : 8.0.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `jeuxoo`
--
CREATE DATABASE IF NOT EXISTS `jeuxoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jeuxoo`;

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
                                            PRIMARY KEY (`idPersonnage`),
                                            UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
