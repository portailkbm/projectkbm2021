-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Août 2021 à 17:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `demenjala`
--

-- --------------------------------------------------------

--
-- Structure de la table `lakou`
--

CREATE TABLE IF NOT EXISTS `lakou` (
  `idlak` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomlak` varchar(100) DEFAULT NULL,
  `activitelak` varchar(300) DEFAULT NULL,
  `photolak_1` varchar(100) DEFAULT NULL,
  `photolak_2` varchar(100) DEFAULT NULL,
  `photolak_3` varchar(100) DEFAULT NULL,
  `Presentation` varchar(256) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  `nom_respon1` varchar(50) DEFAULT NULL,
  `prenom_respon1` varchar(50) DEFAULT NULL,
  `mail_respon1` varchar(50) DEFAULT NULL,
  `mobile_respon1` varchar(50) DEFAULT NULL,
  `nom_respon2` varchar(50) DEFAULT NULL,
  `prenom_respon2` varchar(50) DEFAULT NULL,
  `mail_respon2` varchar(50) DEFAULT NULL,
  `mob_respon2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlak`),
  KEY `FK_ville_lakou` (`cp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lakou`
--

INSERT INTO `lakou` (`idlak`, `nomlak`, `activitelak`, `photolak_1`, `photolak_2`, `photolak_3`, `Presentation`, `cp`, `nom_respon1`, `prenom_respon1`, `mail_respon1`, `mobile_respon1`, `nom_respon2`, `prenom_respon2`, `mail_respon2`, `mob_respon2`) VALUES
(1, 'LAKOU PSE', 'bokantaj', NULL, NULL, NULL, 'Lakou d''expérimentation sociale\r\n\r\nRemet  la plantation au centre dans la ville et crée le lien social et la solidarité.', 97139, 'test', 'un', 'az@fd.fr', '0690123456', 'tset', 'nu', 'az@fd.fr', '0690118218'),
(2, 'LAKOU\n\nGERTY ARCHIMEDE', 'bokantaj', NULL, NULL, NULL, 'Lakou d''expérimentation sociale\r\n\r\nRemet  la plantation au centre dans la ville et crée le lien social et la solidarité.', 97139, 'test', 'un', 'az@fd.fr', '0690123456', 'tset', 'nu', 'az@fd.fr', '0690118218');

DELIMITER $$
--
-- Événements
--
CREATE DEFINER=`demen1587164`@`localhost` EVENT `e_archive_event` ON SCHEDULE EVERY 1 HOUR STARTS '2021-03-23 11:15:00' ON COMPLETION PRESERVE ENABLE DO CALL p_archive_event()$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
