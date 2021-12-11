-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 déc. 2021 à 21:49
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `ID_admin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `ID_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `ID_client` int(11) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CP` int(7) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Tél` int(10) NOT NULL,
  PRIMARY KEY (`ID_adresse`),
  KEY `ID_client` (`ID_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_client` int(11) NOT NULL AUTO_INCREMENT,
  `ID_panier` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_client`),
  KEY `ID_panier` (`ID_panier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

DROP TABLE IF EXISTS `objet`;
CREATE TABLE IF NOT EXISTS `objet` (
  `ID_objet` int(11) NOT NULL AUTO_INCREMENT,
  `ID_vendeur` int(11) NOT NULL,
  `ID_admin` int(11) NOT NULL,
  `ID_panier` int(11) DEFAULT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Prix` int(10) NOT NULL,
  `Rareté` varchar(255) NOT NULL,
  `Mode_achat` varchar(255) NOT NULL,
  `Vidéo` varchar(255) NOT NULL,
  `Photo_objet1` varchar(255) NOT NULL,
  `Photo_objet2` varchar(255) NOT NULL,
  `Photo_objet3` varchar(255) NOT NULL,
  `Debut_enchere` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Fin_enchere` date NOT NULL,
  PRIMARY KEY (`ID_objet`),
  KEY `ID_vendeur` (`ID_vendeur`),
  KEY `ID_admin` (`ID_admin`),
  KEY `ID_panier` (`ID_panier`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`ID_objet`, `ID_vendeur`, `ID_admin`, `ID_panier`, `Nom`, `Description`, `Prix`, `Rareté`, `Mode_achat`, `Vidéo`, `Photo_objet1`, `Photo_objet2`, `Photo_objet3`, `Debut_enchere`, `Fin_enchere`) VALUES
(32, 1, 1, NULL, 'dfdsfd', 'dfqfdsdf', 22, 'Rare', 'MeilleureOffre', 'qsdqdqs', 'qsdqsd', 'qsdqd', 'qsdqds', '2021-12-10 21:42:53', '2021-12-30'),
(31, 1, 1, NULL, 'Oui', 'qsdqd', 8, 'Rare', 'MeilleureOffre', 'sfdsfsf', 'dfds', 'fdfff', 'dsfdfsf', '2021-12-10 15:42:16', '2021-12-25');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `ID_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `ID_client` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `NumCarte` int(20) NOT NULL,
  `NomCarte` varchar(255) NOT NULL,
  `DateExp` date NOT NULL,
  `Code` int(7) NOT NULL,
  PRIMARY KEY (`ID_paiement`),
  KEY `ID_client` (`ID_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID_panier` int(11) NOT NULL AUTO_INCREMENT,
  `ID_client` int(11) NOT NULL,
  `Photo_panier` varchar(255) NOT NULL,
  `Prix_panier` int(10) NOT NULL,
  PRIMARY KEY (`ID_panier`),
  KEY `ID_client` (`ID_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `ID_vendeur` int(11) NOT NULL AUTO_INCREMENT,
  `ID_admin` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Image_fond` varchar(255) NOT NULL,
  `Image_vendeur` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_vendeur`),
  KEY `ID_admin` (`ID_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
