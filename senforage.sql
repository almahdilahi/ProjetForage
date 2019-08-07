-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mer 07 Août 2019 à 11:28
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `senforage`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE IF NOT EXISTS `abonnement` (
  `Nab` int(11) NOT NULL AUTO_INCREMENT,
  `dateab` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(500) NOT NULL,
  `numero` varchar(500) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`Nab`),
  UNIQUE KEY `numero` (`numero`),
  KEY `idC` (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Contenu de la table `abonnement`
--

INSERT INTO `abonnement` (`Nab`, `dateab`, `description`, `numero`, `idClient`) VALUES
(1, '2018-04-10 00:59:39', 'Senndokh votre plaisir', '0000485351575157555452555000', 3),
(81, '2018-05-28 14:33:29', 'Senndokh votre plaisir', '0000514856495753535053485000', 4),
(82, '2018-05-29 15:56:48', 'Senndokh votre plaisir', '0000535648545651515153565700', 2),
(83, '2018-05-25 16:18:15', 'today', '00004956535357574851554852009', 9),
(84, '2019-07-26 13:42:06', 'SEN NDOKH', '0000535150545155545649535000', 4);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nomCV` varchar(100) NOT NULL,
  `village` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel` int(9) NOT NULL,
  PRIMARY KEY (`idC`),
  UNIQUE KEY `cin` (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idC`, `cin`, `nom`, `prenom`, `nomCV`, `village`, `adresse`, `tel`) VALUES
(1, 'C0019961007', 'Ka', 'Limamou Laye', 'Ablaye Sene', 'Malika', 'Malika Est Quatier Aliou Diallo', 781376646),
(2, 'C0019980114', 'Ndiaye', 'Samba', 'Aly Ndiaye', 'Golf', 'Golf unite 18', 776543647),
(3, 'C0020000610', 'Laye', 'Magui', 'Mathioro Thaiw', 'Yoff ', 'Yoff Diamalaye', 776589089),
(4, 'C0020001709', 'Laye', 'Fatima', 'Ablaye Sene', 'Malika', 'Malika Est Quatier Aliou Diallo', 775689043),
(5, 'C0019900208', '  edit  ', '  edit ', '  edit ', '  edit ', '  edit ', 770000000),
(9, 'today', 'today', 'today', 'today', 'today', 'today', 3782);

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE IF NOT EXISTS `compteur` (
  `idCompteur` int(11) NOT NULL AUTO_INCREMENT,
  `NumC` varchar(50) NOT NULL,
  `consChiffre` float NOT NULL,
  `consLettre` varchar(100) NOT NULL,
  `idAbonnement` int(11) NOT NULL,
  `etat` int(1) NOT NULL,
  PRIMARY KEY (`idCompteur`),
  UNIQUE KEY `NumC` (`NumC`),
  KEY `idAbonnement` (`idAbonnement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Contenu de la table `compteur`
--

INSERT INTO `compteur` (`idCompteur`, `NumC`, `consChiffre`, `consLettre`, `idAbonnement`, `etat`) VALUES
(52, 'SNZ50jSg57', 168, 'cent soixante-huit Littre', 81, 0),
(53, 'SNE50eEl57', 145, 'cent quarante-cinq Littre', 82, 1),
(54, 'SNR52rTs579', 134, 'cent trente-quatre Littre', 83, 1),
(55, 'SNW51rAs50', 0, 'zero', 81, 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `idF` int(11) NOT NULL AUTO_INCREMENT,
  `conso` float NOT NULL,
  `periode` varchar(50) NOT NULL,
  `edition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `montant` int(100) NOT NULL,
  `numero` varchar(500) NOT NULL,
  `idAbonnement` int(11) NOT NULL,
  PRIMARY KEY (`idF`),
  UNIQUE KEY `numero` (`numero`),
  KEY `idA` (`idAbonnement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`idF`, `conso`, `periode`, `edition`, `montant`, `numero`, `idAbonnement`) VALUES
(28, 1500, 'MAI - JUIN', '2018-07-10 02:10:15', 487500, '000057505150485757574948001', 1),
(33, 168, 'MAI - JUILLET', '2018-07-31 14:34:40', 54600, '0000534950505455515653520081', 81),
(34, 145, 'MAI - JUILLET', '2018-07-31 15:59:03', 47125, '0000544950544948575055490082', 82),
(35, 134, 'MAI - JUILLET', '2018-07-31 16:19:09', 43550, '0000485050555055565350490083', 83);

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE IF NOT EXISTS `reglement` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `montant` int(150) NOT NULL,
  `montantL` varchar(500) NOT NULL,
  `idFacture` int(11) NOT NULL,
  PRIMARY KEY (`idR`),
  UNIQUE KEY `idFacture_2` (`idFacture`),
  KEY `idFacture` (`idFacture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `reglement`
--

INSERT INTO `reglement` (`idR`, `date`, `montant`, `montantL`, `idFacture`) VALUES
(3, '2018-07-17 04:13:56', 487500, 'quatre cent quatre-vingt-sept mille cinq cent', 28),
(6, '2018-07-31 16:21:32', 43550, 'quarante-trois mille cinq cent cinquante', 35);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idU`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idU`, `nom`, `prenom`, `login`, `password`) VALUES
(1, 'Ka', 'Limamou Laye', 'admin', '1');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD CONSTRAINT `compteur_ibfk_1` FOREIGN KEY (`idAbonnement`) REFERENCES `abonnement` (`Nab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`idAbonnement`) REFERENCES `abonnement` (`Nab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `reglement_ibfk_1` FOREIGN KEY (`idFacture`) REFERENCES `facture` (`idF`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
