-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 11 déc. 2021 à 17:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

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
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID_admin`, `Nom`, `Prenom`, `Mail`, `Mdp`) VALUES
(1, 'Gao', 'Camille', 'gc@gmil.com', '123'),
(4, 'KOON', 'Jimmy', 'jimmy@test', 'test');

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
  `Prenom` varchar(255) NOT NULL,
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
  `Rarete` varchar(255) NOT NULL,
  `Mode_achat` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Photo_objet1` varchar(255) NOT NULL,
  `Photo_objet2` varchar(255) NOT NULL,
  `Photo_objet3` varchar(255) NOT NULL,
  `Debut_enchere` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Fin_enchere` date NOT NULL,
  PRIMARY KEY (`ID_objet`),
  KEY `ID_vendeur` (`ID_vendeur`),
  KEY `ID_admin` (`ID_admin`),
  KEY `ID_panier` (`ID_panier`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`ID_objet`, `ID_vendeur`, `ID_admin`, `ID_panier`, `Nom`, `Description`, `Prix`, `Rarete`, `Mode_achat`, `Video`, `Photo_objet1`, `Photo_objet2`, `Photo_objet3`, `Debut_enchere`, `Fin_enchere`) VALUES
(1, 1, 1, NULL, 'Chaussure poisson', 'Les chaussures poisson sont les chaussures du moment, idéales pour vous balader en toute sérénité, avec un style incomparable et pour un prix vraiment très abordable! N\'hésitez plus!', 50, 'Regulier', 'Immediat', 'poisson.jpg', 'poisson.jpg', 'poisson_2.jpg', 'poisson.jpg', '2021-12-11 16:13:38', '2021-12-31'),
(34, 1, 1, NULL, 'Nike Dunk Low Cider', 'Chaussures maroon et noir', 100, 'Regulier', 'Immediat', 'indispo.jpg', 'indispo.jpg', 'indispo_2.jpg', 'indispo.jpg', '2021-12-11 01:55:33', '2021-12-31'),
(35, 2, 2, NULL, 'Nike SB Dunk Low Parra', 'Chaussures colorées', 150, 'Haut de gamme', 'Indisponible', 'indispo2.jpg', 'indispo2.jpg', 'indispo2_2.jpg', 'indispo2.jpg', '2021-12-11 13:06:20', '2021-12-31'),
(2, 1, 1, NULL, 'Ben & Jerry\'s Chunky Dunky', 'Les Nike x Ben&Jerry sont à la fois une des collabs les plus loufoques mais surtout l\'une des plus réussies du marché, vous ferez à coup sûr des jaloux (glaces non fournies)', 200, 'Rare', 'Meilleure offre', 'BJ.jpg', 'BJ.jpg', 'BJ_2.jpg', 'BJ.jpg', '2021-12-11 16:15:08', '2021-12-31'),
(3, 2, 2, NULL, 'Sail off-white', 'Les Air Jordan 4 beige sont sûrement le modèle le plus élégant que nous pouvons proposer à l\'heure actuelle, parfaite pour un mariage, une sortie entre pote ou même au coin d\'un feu', 150, 'Haut de gamme', 'Meilleure offre', 'sail.jpg', 'sail.jpg', 'sail_2.jpg', 'sail.jpg', '2021-12-11 16:16:05', '2021-12-31'),
(4, 3, 2, NULL, 'Yeezy black', 'Les Yeezys sont passées d\'une paire de chaussure critiquée à un classique qui nous colle aux basques depuis maintenant quelques années par la finesse, le confort et la confiance qu\'elle nous offre', 200, 'Luxe', 'Transaction', 'yeezyblack.jpg', 'yeezyblack.jpg', 'yeezyblack_2.jpg', 'yeezyblack.jpg', '2021-12-11 16:16:57', '2021-12-31'),
(5, 3, 3, NULL, 'Nike Dunk Low Black White', 'La Nike Dunk Low Black White arbore une tige en cuir blanc, rehaussée par des empiècements en cuir noir pour un contraste tout en sobriété.', 100, 'Rare', 'Immediat', 'AI.jpg', 'AI.jpg', 'AI_2.jpg', 'AI.jpg', '2021-12-11 16:18:12', '2021-12-31'),
(6, 1, 2, NULL, 'Nike SB Dunk Low Sean Cliver', 'La Nike SB Dunk Low Sean Cliver est une création conçue avec soin et avec des matériaux de qualité supérieure. Elle présente un upper en cuir premium.', 200, 'Haut de gamme', 'Immediat', 'AI2.jpg', 'AI2.jpg', 'AI2_2.jpg', 'AI2.jpg', '2021-12-11 16:19:19', '2021-12-31'),
(7, 1, 2, NULL, 'Archeo Pink', 'Un des coloris les plus populaires de la célèbre Moore, la Archeo Pink vous permettra d’apposer une touche de glamour sur chacun de vos looks.', 50, 'Regulier', 'Immediat', 'AI3.jpg', 'AI3.jpg', 'AI3_2.jpg', 'AI3.jpg', '2021-12-11 16:20:27', '2021-12-31'),
(8, 3, 1, NULL, 'Nike Dunk Low UNC', 'Le blanc et le bleu de l\'Université de Caroline du Nord sont mis à l\'honneur et habille la Nike Dunk Low UNC, le blanc prenant le rôle de base à laquelle se superpose le bleu.', 300, 'Rare', 'Transaction', 'CV.jpg', 'CV.jpg', 'CV_2.jpg', 'CV.jpg', '2021-12-11 16:22:25', '2021-12-31'),
(9, 3, 3, NULL, 'Nike Dunk Low Laser Orange', 'La Nike Dunk Low Laser Orange se pare d\'une base en cuir blanc, simplement rehaussée de superpositions d\'un jaune vif, du swoosh central au mudguard en passant par le talon et les oeillets.', 250, 'Haut de gamme', 'Transaction', 'CV2.jpg', 'CV2.jpg', 'CV2_2.jpg', 'CV2.jpg', '2021-12-11 16:23:16', '2021-12-31'),
(10, 3, 2, NULL, 'Nike Dunk Low Green Glow', '>Cette Dunk Low Green Glow women mélange un coloris vert pastel brillant et blanc dans un style efficace parfait pour la saison estivale. Faites parties des premiers à posséder cette paire', 60, 'Régulier', 'Transaction', 'CV3.jpg', 'CV3.jpg', 'CV3_2.jpg', 'CV3.jpg', '2021-12-11 16:24:30', '2021-12-31'),
(11, 3, 2, NULL, 'Nike SB Dunk Low Grateful Dead Bears Green', 'La Nike SB Dunk Low Grateful Dead Bears Green opte pour une base verte alternant cuir suédé et revêtement en fausse fourrure. On retrouve des accents de bleu vif au niveau des Swoosh latéraux terminés par un contour dentelé noir.', 400, 'Rare', 'Meilleure offre', 'MO.jpg', 'MO.jpg', 'MO_2.jpg', 'MO.jpg', '2021-12-11 16:25:26', '2021-12-31'),
(12, 3, 1, NULL, 'Nike SB Dunk Low Grateful Dead Opti Yellow', 'La Nike SB Dunk Low Grateful Dead ‘Opti Yellow’ sent bon le début des années 2000. La chaussure à base de peluche jaune remet au goût du jour le concept de la « sneaker nounours » impulsée par le pack Teddy Bears.', 340, 'Haut de gamme', 'Meilleure offre', 'MO2.jpg', 'MO2.jpg', 'MO2_2.jpg', 'MO2.jpg', '2021-12-11 16:26:25', '2021-12-31'),
(13, 3, 2, NULL, 'Nike SB Dunk Low Grateful Dead Bears Orange ', 'Cette fois-ci la division skateboarding de Nike s\'associe avec le groupe Grateful Dead. Le coloris est inspiré de l\'ourson orange présent sur la pochette d\'un de leurs albums. Ce coloris est le plus limité du pack.', 220, 'Regulier', 'Meilleure offre', 'MO3.jpg', 'MO3.jpg', 'MO3_2.jpg', 'MO3.jpg', '2021-12-11 16:27:45', '2021-12-31'),
(36, 3, 1, NULL, 'Nike Dunk Low Community Garden', 'Chaussure Motiif Gris et rouge', 220, 'Haut de gamme', 'Indisponible', 'indispo3.jpg', 'indispo3.jpg', 'indispo3_2.jpg', 'indispo3.jpg', '2021-12-11 16:30:53', '2021-12-31');

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
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Image_fond` varchar(255) NOT NULL,
  `Image_vendeur` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_vendeur`),
  KEY `ID_admin` (`ID_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
