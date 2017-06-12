-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 12 Juin 2017 à 09:29
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pizza`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `ID` int(255) NOT NULL,
  `date` datetime NOT NULL,
  `nom` varchar(50) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `fourframeworks` int(255) NOT NULL,
  `gitpushpizza` int(255) NOT NULL,
  `beautifulcss` int(255) NOT NULL,
  `jqueryui` int(255) NOT NULL,
  `labootstrap` int(255) NOT NULL,
  `lhtmlauseo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`ID`, `date`, `nom`, `tel`, `adresse`, `fourframeworks`, `gitpushpizza`, `beautifulcss`, `jqueryui`, `labootstrap`, `lhtmlauseo`) VALUES
(1, '2017-06-07 00:00:00', 'eszgtwszgrz<g', 'erf<seg<eg', 'egf<seg<zegt<zegt', 0, 0, 0, 0, 0, 0),
(2, '2017-06-07 00:00:00', 'Benneth', 'erf<seg<eg', 'egf<seg<zegt<zegt', 7, 3, 3, 5, 3, 3),
(3, '2017-06-09 00:00:00', 'drhyerh', 'erheher', 'herherher', 2, 0, 0, 0, 0, 0),
(4, '2017-06-09 00:00:00', 'drhyerh', 'erheher', 'herherher', 2, 0, 0, 0, 0, 0),
(5, '2017-06-09 11:06:18', 'gtuy', 'gugu', 'gu', 0, 2, 0, 0, 1, 1),
(6, '2017-06-09 11:20:16', 'zefgqreg', 'rgfzqreg', 'egfqezrg', 0, 3, 2, 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
