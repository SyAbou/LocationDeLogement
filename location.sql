-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 17 Septembre 2018 à 13:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE IF NOT EXISTS `carte` (
  `num-carte` int(16) NOT NULL,
  `date-exipiration` date NOT NULL,
  `ccv` int(3) NOT NULL,
  `id-users` int(20) NOT NULL,
  KEY `id-users` (`id-users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `id-offre` int(20) NOT NULL AUTO_INCREMENT,
  `id-createur` int(20) NOT NULL,
  `tarif-offre` int(10) NOT NULL,
  `desc-offre` varchar(500) NOT NULL,
  `coordonnee X` float NOT NULL,
  `cordonee Y` float NOT NULL,
  `libelle-offre` varchar(20) NOT NULL,
  PRIMARY KEY (`id-offre`),
  KEY `id-createur` (`id-createur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id-res` int(20) NOT NULL AUTO_INCREMENT,
  `id-offre` int(20) NOT NULL,
  `id-use` int(20) NOT NULL,
  `date-res` date NOT NULL,
  `date-deb` date NOT NULL,
  `date-fin` date NOT NULL,
  PRIMARY KEY (`id-res`),
  KEY `id-offre` (`id-offre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id-users` int(20) NOT NULL AUTO_INCREMENT,
  `nom-users` varchar(30) NOT NULL,
  `prenom-users` varchar(30) NOT NULL,
  `mail-users` varchar(30) NOT NULL,
  `pasword-users` varchar(15) NOT NULL,
  `role-users` int(1) NOT NULL,
  `sex-users` int(1) NOT NULL,
  PRIMARY KEY (`id-users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `carte-users` FOREIGN KEY (`id-users`) REFERENCES `users` (`id-users`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `location-users` FOREIGN KEY (`id-createur`) REFERENCES `users` (`id-users`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `offre-users` FOREIGN KEY (`id-offre`) REFERENCES `offre` (`id-offre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
