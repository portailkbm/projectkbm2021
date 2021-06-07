-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 19 mai 2021 à 20:41
-- Version du serveur :  10.3.25-MariaDB-0+deb10u1
-- Version de PHP : 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `demen1587164`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`demen1587164`@`localhost` PROCEDURE `p_archive_event` ()  BEGIN

INSERT INTO archive_evenement(typeevent, libevent, desevent,
photoevent,flyer,debutevent,debutevent_hr,finevent,finevent_hr,
cr_event,visevent,cp,idlak)
SELECT typeevent, libevent, desevent,photoevent,flyer,debutevent,
debutevent_hr,finevent,finevent_hr, cr_event,visevent,cp,idlak 
FROM evenement 
WHERE finevent < CURDATE() AND finevent_hr < CURRENT_TIME();

DELETE FROM evenement 
WHERE
(finevent < CURDATE()) OR (finevent = CURDATE() AND finevent_hr < CURRENT_TIME());

END$$

CREATE DEFINER=`demen1587164`@`localhost` PROCEDURE `p_insert_client_membre` (IN `id` INT)  BEGIN
INSERT INTO client(nomcli, prencli, telcli, mailcli, pseudocli, mdpcli, cp, categoriecli)
SELECT nommembre, prenmembre, telmembre, mailmembre, CONCAT("M_", pseudomembre), mdpmembre, cp, 1 FROM membre WHERE idmembre=id;
END$$

CREATE DEFINER=`demen1587164`@`localhost` PROCEDURE `p_update_client_membre` (IN `old_pseudo` VARCHAR(32), IN `new_pseudo` VARCHAR(32), IN `target` VARCHAR(6))  BEGIN
IF target = 'client' AND old_pseudo != new_pseudo THEN
UPDATE membre SET pseudomembre = new_pseudo WHERE pseudomembre = old_pseudo;
END IF;

IF target = 'membre' AND old_pseudo != new_pseudo THEN
UPDATE client SET pseudocli = CONCAT("M_", new_pseudo) WHERE pseudocli = old_pseudo;
END IF;

END$$

CREATE DEFINER=`demen1587164`@`localhost` PROCEDURE `p_verify_pseudo` (IN `new_pseudo` VARCHAR(32), IN `target` VARCHAR(6))  BEGIN
DECLARE temp VARCHAR(32);
SET temp = "";
SELECT pseudocli INTO temp FROM client WHERE pseudocli = new_pseudo;

IF target = 'membre' THEN
SELECT pseudomembre INTO temp FROM membre WHERE pseudomembre = new_pseudo;
END IF;

IF temp != "" THEN
SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'Le pseudo existe déja dans la base';
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `idassoc` bigint(20) NOT NULL,
  `nomassoc` varchar(200) DEFAULT NULL,
  `activassoc` varchar(300) DEFAULT NULL,
  `photoassoc_1` varchar(100) DEFAULT NULL,
  `photoassoc_2` varchar(100) DEFAULT NULL,
  `photoassoc_3` varchar(100) DEFAULT NULL,
  `mailassoc` varchar(100) DEFAULT NULL,
  `categorie` smallint(6) DEFAULT NULL,
  `distribution` tinyint(1) DEFAULT NULL,
  `adresseassoc` varchar(100) DEFAULT NULL,
  `cp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idcli` bigint(20) NOT NULL,
  `nomcli` varchar(50) DEFAULT NULL,
  `prencli` varchar(50) DEFAULT NULL,
  `telcli` varchar(20) DEFAULT NULL,
  `mailcli` varchar(100) DEFAULT NULL,
  `categoriecli` smallint(6) DEFAULT NULL,
  `pseudocli` varchar(32) DEFAULT NULL,
  `mdpcli` varchar(32) DEFAULT NULL,
  `cp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idcli`, `nomcli`, `prencli`, `telcli`, `mailcli`, `categoriecli`, `pseudocli`, `mdpcli`, `cp`) VALUES
(1, 'janky', 'michelle', '0690252525', 'aze@der.fg', 1, 'M_mich_jan01', '55555', 97180),
(2, 'BILBA', 'Enrick', '+330690942753', 'enlive1.eb@gmail.com', 1, 'C_test', '5a105e8b9d40e1329780d62ea2265d8a', 97139),
(3, 'COLVIL', 'Anthony', '+590690819268', 'anthonycolvil@gmail.com', 1, 'C_blackol', 'b8243ae2ff185e7e43cacbb982cbe311', 97122),
(5, 'Rinaldo', 'Gilbert', '+330685432976', 'gilbert.rinaldo@gmail.com', 1, 'C_girinaldo', '5ae7d00d07d7b72981bdb2fbbf5f569d', 97190);

--
-- Déclencheurs `client`
--
DELIMITER $$
CREATE TRIGGER `verify_pseudo1` BEFORE INSERT ON `client` FOR EACH ROW CALL p_verify_pseudo(NEW.pseudocli, 'client')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `verify_pseudo2` BEFORE UPDATE ON `client` FOR EACH ROW CALL p_verify_pseudo(NEW.pseudocli, 'client')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` bigint(20) NOT NULL,
  `datecommande` date DEFAULT NULL,
  `validationcommande` tinyint(1) DEFAULT NULL,
  `etatlivraison` varchar(50) DEFAULT NULL,
  `datelivraison` date DEFAULT NULL,
  `daterecuperation` date DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `coutlivraison` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `platforme` varchar(100) DEFAULT NULL,
  `idcli` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE `commande_produit` (
  `idcommande` bigint(20) NOT NULL,
  `idproduit` bigint(20) NOT NULL,
  `quantite` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idevent` bigint(20) NOT NULL,
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
  `idassoc` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement_archives`
--

CREATE TABLE `evenement_archives` (
  `idevent` bigint(20) NOT NULL,
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
  `idassoc` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lakou`
--

CREATE TABLE `lakou` (
  `idlak` bigint(20) NOT NULL,
  `nomlak` varchar(100) DEFAULT NULL,
  `activitelak` varchar(300) DEFAULT NULL,
  `photolak_1` varchar(100) DEFAULT NULL,
  `photolak_2` varchar(100) DEFAULT NULL,
  `photolak_3` varchar(100) DEFAULT NULL,
  `maillak` varchar(100) DEFAULT NULL,
  `cp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idmembre` bigint(20) NOT NULL,
  `nommembre` varchar(50) DEFAULT NULL,
  `prenmembre` varchar(50) DEFAULT NULL,
  `pseudomembre` varchar(32) DEFAULT NULL,
  `mdpmembre` varchar(32) DEFAULT NULL,
  `telmembre` varchar(20) DEFAULT NULL,
  `mailmembre` varchar(100) DEFAULT NULL,
  `cp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idmembre`, `nommembre`, `prenmembre`, `pseudomembre`, `mdpmembre`, `telmembre`, `mailmembre`, `cp`) VALUES
(1, 'janky', 'michelle', 'mich_jan01', '55555', '0690252525', 'aze@der.fg', 97180);

--
-- Déclencheurs `membre`
--
DELIMITER $$
CREATE TRIGGER `insert_client_membre` AFTER INSERT ON `membre` FOR EACH ROW CALL p_insert_client_membre(NEW.idmembre)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_client_membre1` AFTER UPDATE ON `membre` FOR EACH ROW CALL p_update_client_membre(OLD.pseudomembre, NEW.pseudomembre, 'membre')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `verify_pseudo3` BEFORE INSERT ON `membre` FOR EACH ROW CALL p_verify_pseudo(NEW.pseudomembre, 'membre')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `verify_pseudo4` BEFORE UPDATE ON `membre` FOR EACH ROW CALL p_verify_pseudo(NEW.pseudomembre, 'membre')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `membre_lakou`
--

CREATE TABLE `membre_lakou` (
  `idmembre` bigint(20) NOT NULL,
  `idlak` bigint(20) NOT NULL,
  `responsable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `idproduit` bigint(20) NOT NULL,
  `idprod` bigint(20) NOT NULL,
  `debutoffre` date DEFAULT NULL,
  `finoffre` date DEFAULT NULL,
  `quantiteoffre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

CREATE TABLE `producteur` (
  `idprod` int(11) NOT NULL,
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
  `cp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idproduit` int(11) NOT NULL,
  `nomkreyol` varchar(100) DEFAULT NULL,
  `nomfranse` varchar(100) DEFAULT NULL,
  `nomsavan` varchar(100) DEFAULT NULL,
  `descproduit` varchar(200) DEFAULT NULL,
  `apportelem` varchar(300) DEFAULT NULL,
  `apportpharm` varchar(255) DEFAULT NULL,
  `validationproduit` tinyint(1) DEFAULT NULL,
  `stock` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `cp` bigint(20) NOT NULL,
  `nomville` varchar(50) DEFAULT NULL,
  `idzone` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
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
(97129, 'Morne-à-l\'Eau', 0),
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

CREATE TABLE `zone` (
  `idzone` int(11) NOT NULL,
  `nomzone` bigint(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zone`
--

INSERT INTO `zone` (`idzone`, `nomzone`) VALUES
(1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`idassoc`),
  ADD KEY `FK_ville_asso` (`cp`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idcli`),
  ADD KEY `FK_ville_cli` (`cp`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD KEY `FK_client` (`idcli`);

--
-- Index pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD PRIMARY KEY (`idcommande`,`idproduit`),
  ADD KEY `FK_produit_commprod` (`idproduit`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `FK_lakou_assoc` (`idassoc`),
  ADD KEY `FK_lakou_event` (`idlak`);

--
-- Index pour la table `evenement_archives`
--
ALTER TABLE `evenement_archives`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `FK_lakou_assoc_arch` (`idassoc`),
  ADD KEY `FK_lakou_arch` (`idlak`);

--
-- Index pour la table `lakou`
--
ALTER TABLE `lakou`
  ADD PRIMARY KEY (`idlak`),
  ADD KEY `FK_ville_lakou` (`cp`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idmembre`);

--
-- Index pour la table `membre_lakou`
--
ALTER TABLE `membre_lakou`
  ADD PRIMARY KEY (`idmembre`,`idlak`),
  ADD KEY `FK_lakou_membrelak` (`idlak`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`idproduit`,`idprod`),
  ADD KEY `FK_producteur_offre` (`idprod`);

--
-- Index pour la table `producteur`
--
ALTER TABLE `producteur`
  ADD PRIMARY KEY (`idprod`),
  ADD KEY `FK_ville_prod` (`cp`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`cp`),
  ADD KEY `FK_zone` (`idzone`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`idzone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `idassoc` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idcli` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  MODIFY `idcommande` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `idevent` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement_archives`
--
ALTER TABLE `evenement_archives`
  MODIFY `idevent` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lakou`
--
ALTER TABLE `lakou`
  MODIFY `idlak` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idmembre` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `idproduit` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `producteur`
--
ALTER TABLE `producteur`
  MODIFY `idprod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `idzone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

DELIMITER $$
--
-- Évènements
--
CREATE DEFINER=`demen1587164`@`localhost` EVENT `e_archive_event` ON SCHEDULE EVERY 1 HOUR STARTS '2021-03-23 11:15:00' ON COMPLETION PRESERVE ENABLE DO CALL p_archive_event()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
