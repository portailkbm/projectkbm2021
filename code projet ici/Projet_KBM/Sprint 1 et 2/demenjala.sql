-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 13 Août 2021 à 21:09
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
-- Structure de la table `admi`
--

CREATE TABLE IF NOT EXISTS `admi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logi` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admi`
--

INSERT INTO `admi` (`id`, `logi`, `mdp`) VALUES
(1, 'admin', 'nistrator');

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `idassoc` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomassoc` varchar(200) DEFAULT NULL,
  `activassoc` varchar(300) DEFAULT NULL,
  `photoassoc_1` varchar(100) DEFAULT NULL,
  `photoassoc_2` varchar(100) DEFAULT NULL,
  `photoassoc_3` varchar(100) DEFAULT NULL,
  `mailassoc` varchar(100) DEFAULT NULL,
  `categorie` smallint(6) DEFAULT NULL,
  `distribution` tinyint(1) DEFAULT NULL,
  `adresseassoc` varchar(100) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  PRIMARY KEY (`idassoc`),
  KEY `FK_ville_asso` (`cp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idcli` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomcli` varchar(50) DEFAULT NULL,
  `prencli` varchar(50) DEFAULT NULL,
  `telcli` varchar(20) DEFAULT NULL,
  `mailcli` varchar(100) DEFAULT NULL,
  `categoriecli` smallint(6) DEFAULT NULL,
  `pseudocli` varchar(32) DEFAULT NULL,
  `mdpcli` varchar(32) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  `admin` bigint(20) NOT NULL,
  PRIMARY KEY (`idcli`),
  KEY `FK_ville_cli` (`cp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idcli`, `nomcli`, `prencli`, `telcli`, `mailcli`, `categoriecli`, `pseudocli`, `mdpcli`, `cp`, `admin`) VALUES
(1, 'janky', 'michelle', '0690252525', 'aze@der.fg', 1, 'M_mich_jan01', '55555', 97180, 0),
(2, 'BILBA', 'Enrick', '+330690942753', 'enlive1.eb@gmail.com', 1, 'C_test', '5a105e8b9d40e1329780d62ea2265d8a', 97139, 0),
(3, 'COLVIL', 'Anthony', '+590690819268', 'anthonycolvil@gmail.com', 1, 'C_blackol', 'b8243ae2ff185e7e43cacbb982cbe311', 97122, 0),
(5, 'Rinaldo', 'Gilbert', '+330685432976', 'gilbert.rinaldo@gmail.com', 1, 'C_girinaldo', '5ae7d00d07d7b72981bdb2fbbf5f569d', 97190, 0),
(6, 'AY', 'AX', '+330690942753', 'ecx@dfcs', 1, 'C_aye', '072c4fe6d8f97737be029b3f8937fd43', 97139, 0),
(7, 'TEST2', 'TEST2', '+330690942753', 'erldf@fdmfs', 1, 'C_L3', '3f816a388569d5a30f20546196aaabd6', 97125, 0),
(8, 'BILBA', 'E', '+590690942753', 'test@gr.fr', 1, 'C_biga', '202cb962ac59075b964b07152d234b70', 97127, 0);

--
-- Déclencheurs `client`
--
DROP TRIGGER IF EXISTS `verify_pseudo2`;
DELIMITER //
CREATE TRIGGER `verify_pseudo2` BEFORE UPDATE ON `client`
 FOR EACH ROW CALL p_verify_pseudo(NEW.pseudocli, 'client')
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idcommande` bigint(20) NOT NULL AUTO_INCREMENT,
  `datecommande` date DEFAULT NULL,
  `validationcommande` tinyint(1) DEFAULT NULL,
  `etatlivraison` varchar(50) DEFAULT NULL,
  `datelivraison` date DEFAULT NULL,
  `daterecuperation` date DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `coutlivraison` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `platforme` varchar(100) DEFAULT NULL,
  `idcli` bigint(20) NOT NULL,
  PRIMARY KEY (`idcommande`),
  KEY `FK_client` (`idcli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE IF NOT EXISTS `commande_produit` (
  `idcommande` bigint(20) NOT NULL AUTO_INCREMENT,
  `idproduit` bigint(20) NOT NULL,
  `quantite` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idcommande`,`idproduit`),
  KEY `FK_produit_commprod` (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `idevent` bigint(20) NOT NULL AUTO_INCREMENT,
  `classement` tinyint(1) DEFAULT NULL,
  `typeevent` tinyint(1) DEFAULT NULL,
  `libevent` varchar(100) DEFAULT NULL,
  `desevent` varchar(300) DEFAULT NULL,
  `photoevent` varchar(100) DEFAULT NULL,
  `flyer` varchar(100) DEFAULT NULL,
  `debutevent` date DEFAULT NULL,
  `debutevent_hr` time DEFAULT NULL,
  `finevent` date DEFAULT NULL,
  `finevent_hr` time DEFAULT NULL,
  `cr_event` varchar(300) DEFAULT NULL,
  `visevent` tinyint(1) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  `idlak` bigint(20) DEFAULT NULL,
  `idassoc` bigint(20) DEFAULT NULL,
  `imagevent` varchar(100) NOT NULL,
  PRIMARY KEY (`idevent`),
  KEY `FK_lakou_assoc` (`idassoc`),
  KEY `FK_lakou_event` (`idlak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`idevent`, `classement`, `typeevent`, `libevent`, `desevent`, `photoevent`, `flyer`, `debutevent`, `debutevent_hr`, `finevent`, `finevent_hr`, `cr_event`, `visevent`, `cp`, `idlak`, `idassoc`, `imagevent`) VALUES
(1, NULL, NULL, 'Foot', NULL, NULL, '', '2021-08-11', '13:30:00', '2021-08-11', '13:30:00', NULL, 1, 97139, NULL, NULL, '../Ressources/71kYjiQBArL._AC_SX425_.jpg'),
(5, NULL, NULL, 'Belote', 'Tournoi de belote prix du vainqueur un cochon ', NULL, NULL, '2021-05-04', '10:00:00', '2021-05-04', '12:00:00', NULL, 1, 97110, NULL, NULL, ''),
(6, NULL, NULL, 'Dominos', 'Tournoi de dominos prix du vainqueur un coq ', NULL, NULL, '2021-05-25', '00:00:00', '2021-05-25', '00:00:00', NULL, 1, 97100, NULL, NULL, ''),
(7, NULL, NULL, 'Igniamus3', 'Cours en voile traditionnel prix du vainqueur une bouée', NULL, '', '2021-08-10', '18:30:00', '2021-08-10', '19:30:00', NULL, 1, 97170, NULL, NULL, ''),
(9, NULL, NULL, NULL, NULL, NULL, '../Ressources/td2 exo 1.c', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, ''),
(10, NULL, NULL, NULL, NULL, NULL, '../Ressources/71kYjiQBArL._AC_SX425_.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, ''),
(11, NULL, NULL, 'Igniamus', NULL, NULL, NULL, '2021-08-12', '17:30:00', '2021-08-12', '18:30:00', NULL, NULL, 97126, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `evenement_archives`
--

CREATE TABLE IF NOT EXISTS `evenement_archives` (
  `idevent` bigint(20) NOT NULL AUTO_INCREMENT,
  `classement` tinyint(1) DEFAULT NULL,
  `typeevent` tinyint(1) DEFAULT NULL,
  `libevent` varchar(100) DEFAULT NULL,
  `desevent` varchar(300) DEFAULT NULL,
  `photoevent` varchar(100) DEFAULT NULL,
  `fllyer` varchar(100) DEFAULT NULL,
  `debutevent` date DEFAULT NULL,
  `debutevent_hr` time DEFAULT NULL,
  `finevent` date DEFAULT NULL,
  `finevent_hr` time DEFAULT NULL,
  `cr_event` varchar(300) DEFAULT NULL,
  `visevent` tinyint(1) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  `idlak` bigint(20) DEFAULT NULL,
  `idassoc` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idevent`),
  KEY `FK_lakou_assoc_arch` (`idassoc`),
  KEY `FK_lakou_arch` (`idlak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `exploitation`
--

CREATE TABLE IF NOT EXISTS `exploitation` (
  `nomex` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `surface` varchar(50) DEFAULT NULL,
  `nomproducteur` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `exploitation`
--

INSERT INTO `exploitation` (`nomex`, `ville`, `type`, `surface`, `nomproducteur`, `id`) VALUES
('value-1', '97121', 'Mme', '10m²', 'fze', 1),
('BILBA', '97121', 'Mme', '10m²', 'fze', 2),
('Enrick', '97139', 'Mr', '12m²', 'jimmy', 4);

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

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `idmembre` bigint(20) NOT NULL AUTO_INCREMENT,
  `nommembre` varchar(50) DEFAULT NULL,
  `prenmembre` varchar(50) DEFAULT NULL,
  `pseudomembre` varchar(32) DEFAULT NULL,
  `mdpmembre` varchar(32) DEFAULT NULL,
  `telmembre` varchar(20) DEFAULT NULL,
  `mailmembre` varchar(100) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`idmembre`, `nommembre`, `prenmembre`, `pseudomembre`, `mdpmembre`, `telmembre`, `mailmembre`, `cp`) VALUES
(1, 'janky', 'michelle', 'mich_jan01', '55555', '0690252525', 'aze@der.fg', 97180);

--
-- Déclencheurs `membre`
--
DROP TRIGGER IF EXISTS `insert_client_membre`;
DELIMITER //
CREATE TRIGGER `insert_client_membre` AFTER INSERT ON `membre`
 FOR EACH ROW CALL p_insert_client_membre(NEW.idmembre)
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_client_membre1`;
DELIMITER //
CREATE TRIGGER `update_client_membre1` AFTER UPDATE ON `membre`
 FOR EACH ROW CALL p_update_client_membre(OLD.pseudomembre, NEW.pseudomembre, 'membre')
//
DELIMITER ;
DROP TRIGGER IF EXISTS `verify_pseudo3`;
DELIMITER //
CREATE TRIGGER `verify_pseudo3` BEFORE INSERT ON `membre`
 FOR EACH ROW CALL p_verify_pseudo(NEW.pseudomembre, 'membre')
//
DELIMITER ;
DROP TRIGGER IF EXISTS `verify_pseudo4`;
DELIMITER //
CREATE TRIGGER `verify_pseudo4` BEFORE UPDATE ON `membre`
 FOR EACH ROW CALL p_verify_pseudo(NEW.pseudomembre, 'membre')
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `membre_lakou`
--

CREATE TABLE IF NOT EXISTS `membre_lakou` (
  `idmembre` bigint(20) NOT NULL,
  `idlak` bigint(20) NOT NULL,
  `responsable` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idmembre`,`idlak`),
  KEY `FK_lakou_membrelak` (`idlak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `idproduit` bigint(20) NOT NULL AUTO_INCREMENT,
  `idprod` bigint(20) NOT NULL,
  `debutoffre` date DEFAULT NULL,
  `finoffre` date DEFAULT NULL,
  `quantiteoffre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproduit`,`idprod`),
  KEY `FK_producteur_offre` (`idprod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

CREATE TABLE IF NOT EXISTS `producteur` (
  `idprod` int(11) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(100) DEFAULT NULL,
  `classprod` smallint(6) DEFAULT NULL,
  `telprod` varchar(20) DEFAULT NULL,
  `mailprod` varchar(100) DEFAULT NULL,
  `siteprod` varchar(100) DEFAULT NULL,
  `photoprod` varchar(100) DEFAULT NULL,
  `qualifprod` varchar(100) DEFAULT NULL,
  `gps_1` varchar(50) DEFAULT NULL,
  `gps_2` varchar(50) DEFAULT NULL,
  `nomcontact` varchar(50) DEFAULT NULL,
  `prencontact` varchar(50) DEFAULT NULL,
  `mailcontact` varchar(100) DEFAULT NULL,
  `telcontact` varchar(20) DEFAULT NULL,
  `cp` bigint(20) NOT NULL,
  `prenomprod` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `identifiant` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`idprod`),
  KEY `FK_ville_prod` (`cp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `producteur`
--

INSERT INTO `producteur` (`idprod`, `nomprod`, `classprod`, `telprod`, `mailprod`, `siteprod`, `photoprod`, `qualifprod`, `gps_1`, `gps_2`, `nomcontact`, `prencontact`, `mailcontact`, `telcontact`, `cp`, `prenomprod`, `adresse`, `identifiant`, `mdp`) VALUES
(1, 'jimmy', 1, '+3356158518', 'dzf@fred.fr', 'http://def.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 97139, NULL, NULL, '', '123'),
(2, '$nom', 123, '$mob', '$mail', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '$prcenom', '$adresse', '', ''),
(3, 'BILBA', NULL, '+5502151012', 'test@gr.fr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 97139, 'E', '', '', '123');

-- --------------------------------------------------------

--
-- Structure de la table `production`
--

CREATE TABLE IF NOT EXISTS `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(50) DEFAULT NULL,
  `idproducteur` int(11) DEFAULT NULL,
  `exploitation` int(11) NOT NULL,
  `idproduit` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `quantité` varchar(11) DEFAULT NULL,
  `unité` varchar(50) DEFAULT NULL,
  `cp` int(20) NOT NULL,
  `prix_unité` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `production`
--

INSERT INTO `production` (`id`, `nomprod`, `idproducteur`, `exploitation`, `idproduit`, `date_debut`, `date_fin`, `quantité`, `unité`, `cp`, `prix_unité`) VALUES
(1, '$nom', 1, 0, 2, '0000-00-00', '0000-00-00', '0', '$unité', 0, '0'),
(2, 'Igniamus', 3, 1, 9, '2021-08-13', '2017-06-30', '200', 'kg', 0, '4'),
(3, 'Igniamus3', 1, 0, 9, '2021-08-12', '2017-06-30', '200', 'kg', 0, '2'),
(5, 'new', 1, 0, 0, '0000-00-00', '0000-00-00', '$quantité', '$unité', 0, '$prix_unité'),
(7, 'Igniamus', 2, 1, 10, '2021-08-12', '2017-06-21', '200', 'kg', 0, '2'),
(8, 'Ziam', 3, 1, 1, '2021-08-12', '2021-09-12', '200', 'kg', 0, '2'),
(9, 'Production', 6, 2, 9, '2021-08-13', '2021-11-30', '300', 'kg', 0, '5');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomkreyol` varchar(100) DEFAULT NULL,
  `nomfranse` varchar(100) DEFAULT NULL,
  `nomsavan` varchar(100) DEFAULT NULL,
  `descproduit` varchar(200) DEFAULT NULL,
  `apportelem` varchar(300) DEFAULT NULL,
  `apportpharm` varchar(255) DEFAULT NULL,
  `validationproduit` tinyint(1) DEFAULT NULL,
  `stock` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idproduit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `nomkreyol`, `nomfranse`, `nomsavan`, `descproduit`, `apportelem`, `apportpharm`, `validationproduit`, `stock`) VALUES
(1, 'tomat', 'tomate', 'tomatus', 'fruit', 'd', 'de', 1, 200),
(9, 'Madais', 'Madaire', 'madairus', 'Légume', NULL, NULL, NULL, NULL),
(10, 'd', 'd', 'd', 'Légume', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `cp` bigint(20) NOT NULL,
  `nomville` varchar(50) DEFAULT NULL,
  `idzone` smallint(6) NOT NULL,
  PRIMARY KEY (`cp`),
  KEY `FK_zone` (`idzone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`cp`, `nomville`, `idzone`) VALUES
(97100, 'Basse-Terre', 0),
(97110, 'Pointe-à-Pitre', 0),
(97111, 'Lamentin', 0),
(97112, 'Grand-Bourg', 0),
(97113, 'Gourbeyre', 0),
(97114, 'Trois-Rivières', 0),
(97115, 'Sainte-Rose', 0),
(97116, 'Pointe-Noire', 0),
(97118, 'Saint-François', 0),
(97119, 'Vieux-Habitants', 0),
(97120, 'Saint-Claude', 0),
(97121, 'Anse-Bertrand', 0),
(97122, 'Baie-mahault', 0),
(97123, 'Baillif', 0),
(97125, 'Bouillante', 0),
(97126, 'Deshaies', 0),
(97127, 'La Désirade', 0),
(97128, 'Goyave', 0),
(97129, 'Morne-à-l''Eau', 0),
(97130, 'Capesterre-Belle-Eau', 0),
(97131, 'Petit-Canal', 0),
(97134, 'Saint-Louis', 0),
(97136, 'Terre-de-Bas', 0),
(97137, 'Terre-de-Haut', 0),
(97139, 'les Abymes', 0),
(97140, 'Capesterre-de-Marie-Galante', 0),
(97141, 'Vieux-Fort', 0),
(97160, 'le Moule', 0),
(97170, 'Petit-Bourg', 0),
(97180, 'Sainte-Anne', 0),
(97190, 'le Gosier', 0);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `idzone` int(11) NOT NULL AUTO_INCREMENT,
  `nomzone` bigint(50) DEFAULT NULL,
  PRIMARY KEY (`idzone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `zone`
--

INSERT INTO `zone` (`idzone`, `nomzone`) VALUES
(1, 1);

DELIMITER $$
--
-- Événements
--
CREATE DEFINER=`demen1587164`@`localhost` EVENT `e_archive_event` ON SCHEDULE EVERY 1 HOUR STARTS '2021-03-23 11:15:00' ON COMPLETION PRESERVE ENABLE DO CALL p_archive_event()$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
