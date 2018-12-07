-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 07 déc. 2018 à 10:58
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mememaker`
--

-- --------------------------------------------------------

--
-- Structure de la table `images_brutes`
--

DROP TABLE IF EXISTS `images_brutes`;
CREATE TABLE IF NOT EXISTS `images_brutes` (
  `ID_imgbrutes` int(11) NOT NULL AUTO_INCREMENT,
  `Url_imgbrutes` varchar(1000) DEFAULT NULL,
  `nom_imgbrutes` varchar(255) DEFAULT NULL,
  `chemin_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_imgbrutes`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images_brutes`
--

INSERT INTO `images_brutes` (`ID_imgbrutes`, `Url_imgbrutes`, `nom_imgbrutes`, `chemin_img`) VALUES
(1, NULL, '1.jpg', 'purememe/1.jpg'),
(2, NULL, '2.jpg', 'purememe/2.jpg'),
(3, NULL, '3.jpg', 'purememe/3.jpg'),
(4, NULL, '4.jpg', 'purememe/4.jpg'),
(5, NULL, '5.jpg', 'purememe/5.jpg'),
(6, NULL, '6.jpg', 'purememe/6.jpg'),
(7, NULL, '7.jpg', 'purememe/7.jpg'),
(8, NULL, '8.jpg', 'purememe/8.jpg'),
(9, NULL, '9.jpg', 'purememe/9.jpg'),
(10, NULL, '10.jpg', 'purememe/10.jpg'),
(11, NULL, '11.jpg', 'purememe/11.jpg'),
(12, NULL, '12.jpg', 'purememe/12.jpg'),
(13, NULL, '13.jpg', 'purememe/13.jpg'),
(14, NULL, '14.jpg', 'purememe/14.jpg'),
(15, NULL, '15.jpg', 'purememe/15.jpg'),
(16, NULL, '16.jpg', 'purememe/16.jpg'),
(17, NULL, '17.jpg', 'purememe/17.jpg'),
(18, NULL, '18.jpg', 'purememe/18.jpg'),
(19, NULL, '19.jpg', 'purememe/19.jpg'),
(20, NULL, '20.jpg', 'purememe/20.jpg'),
(21, NULL, '21.jpg', 'purememe/21.jpg'),
(22, NULL, '22.jpg', 'purememe/22.jpg'),
(23, NULL, '23.jpg', 'purememe/23.jpg'),
(24, NULL, '24.jpg', 'purememe/24.jpg'),
(25, NULL, '25.jpg', 'purememe/25.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `memes`
--

DROP TABLE IF EXISTS `memes`;
CREATE TABLE IF NOT EXISTS `memes` (
  `Id_memes` int(11) NOT NULL AUTO_INCREMENT,
  `url_memes` varchar(1000) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `cheminlocal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_memes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
