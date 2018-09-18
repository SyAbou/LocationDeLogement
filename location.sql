-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Septembre 2018 à 10:40
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
  `num_carte` int(16) NOT NULL,
  `date_exipiration` date NOT NULL,
  `ccv` int(3) NOT NULL,
  `id_users` int(20) NOT NULL,
  KEY `id-users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `id_offre` int(20) NOT NULL AUTO_INCREMENT,
  `id_createur` int(20) NOT NULL,
  `tarif_offre` int(10) NOT NULL,
  `desc_offre` varchar(500) NOT NULL,
  `cordonne` longtext NOT NULL,
  `libelle_offre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `id-createur` (`id_createur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(20) NOT NULL AUTO_INCREMENT,
  `id_offre` int(20) NOT NULL,
  `id_use` int(20) NOT NULL,
  `date_res` date NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id_res`),
  KEY `id-offre` (`id_offre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(20) NOT NULL AUTO_INCREMENT,
  `nom_users` varchar(30) NOT NULL,
  `prenom_users` varchar(30) NOT NULL,
  `mail_users` varchar(30) NOT NULL,
  `pasword_users` varchar(15) NOT NULL,
  `role_users` int(1) NOT NULL,
  `sex_users` int(1) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `carte-users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `location-users` FOREIGN KEY (`id_createur`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `offre-users` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
