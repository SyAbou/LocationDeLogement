-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 21 sep. 2018 à 12:53
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
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

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id_offre` int(20) NOT NULL AUTO_INCREMENT,
  `id_createur` int(20) NOT NULL,
  `tarif_offre` int(10) NOT NULL,
  `desc_offre` text NOT NULL,
  `cordonne` longtext NOT NULL,
  `libelle_offre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `id-createur` (`id_createur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `id_createur`, `tarif_offre`, `desc_offre`, `cordonne`, `libelle_offre`) VALUES
(1, 1, 500, '', '{\r\n        \"type\": \"Point\",\r\n        \"coordinates\": [\r\n          4.8319244384765625,\r\n          45.75758315373073\r\n        ]\r\n      }', 'maison à lyon'),
(2, 1, 600, 'Ce charmant appartement se trouve au pied de la Tour Eiffel, au coeur des principaux sites touristiques de Paris. \r\nLa vue imprenable sur la Tour Eiffel vous laissera des souvenirs inoubliables. \r\nSentez-vous comme chez vous et profitez de votre séjour à Paris\r\n\r\nMore information\r\nLe logement\r\n<br /><br />\r\n<i>La vue imprenable sur la Tour Eiffel!</i>\r\n<br /><br />\r\n<b>Équipements:</b><br />\r\nAscenseur<br />\r\nWi-Fi<br />\r\nCuisine<br />\r\nEspace de travail pour ordinateur portable<br />\r\nTélévision par câble<br />\r\nFer à repasser', '{\r\n        \"type\": \"Point\",\r\n        \"coordinates\": [\r\n          2.3319244384765625,\r\n          48.85758315373073\r\n        ]\r\n      }', '<b>VUE SURTOUT DE LA TOUR EIFFEL!</b>'),
(3, 3, 500, '', '{\r\n        \"type\": \"Point\",\r\n        \"coordinates\": [\r\n          4.8319244384765625,\r\n          45.95758315373073\r\n        ]\r\n      }', ''),
(4, 4, 450, 'studio fonctionnel refait totalement,3ème étage d\'un immeuble typique du quartier. il est tout équipé et de plus il y a internet avec la box!\r\n. AU CALME SUR COUR . 10 EUROS à VERSER POUR LE LINGE à votre arrivée.\r\n\r\n<br /><br />\r\n<b>Le logement</b>\r\n<br /><br />\r\nidéalement situé au coeur du marais.certes petit mais rien ne manque, il vous suffit de déposer votre sac, le reste vous est fourni!!! pas besoin d\'amener les serviettes, draps....ETC tout est sur place.\r\ntout pour faire la cuisine sur place si vous le souhaitez.\r\n<br /><br />\r\n<b>Accès des voyageurs</b>\r\n<br /><br />\r\ninternet avec box ses <b>250 CHAINES DE TOUS LES PAYS</b>.Bouilloire,cafetière, théière,micro ondes, frigo,plaques de cuisson a disposition. De plus, un sèche cheveux ainsi qu\'un fer à repasser sont également utilisables.\r\n<br /><br />\r\n<b>Échanges avec les voyageurs</b>\r\n<br /><br />\r\nDISPONIBLE RAPIDEMENT EN CAS DE SOUCIS.\r\n<br /><br />\r\n<b>Autres remarques</b>\r\n<br /><br />\r\nimmeuble trés sécurisé avec double code entrée : <i>14563</i><br />\r\nCour intérieure refaite. PAS DE TRAVAUX; calme absolu.', '{\r\n        \"type\": \"Point\",\r\n        \"coordinates\": [\r\n          2.3319244384765625,\r\n          48.87758315373073\r\n        ]\r\n      }', '<b>STUDIO AU COEUR DU MARAIS</b>'),
(6, 1, 987, 'bbqufqhjfoihfqhfqjfpqofhpqjqfpfhqd', '{         \"type\": \"Point\",         \"coordinates\": [           2.3319244384765625,           48.97758315373073         ]       }', 'efsefssfefsefsedsff'),
(7, 1, 200, 'une petit offre de test numero un', '{\r\n    \"type\": \"Point\",\r\n    \"coordinates\": [\r\n        2.3488,\r\n        48.8934\r\n    ]\r\n}', 'maison de test'),
(8, 1, 457, 'la petite maison de billel', '{\r\n    \"type\": \"Point\",\r\n    \"coordinates\": [\r\n        2.3744,\r\n        48.8443\r\n    ]\r\n}', 'maison de bibi'),
(9, 1, 1, 'on va chez nos amies les grecques', '{\r\n    \"type\": \"Point\",\r\n    \"coordinates\": [\r\n        23.7162200,\r\n        37.9794500\r\n    ]\r\n}', 'Maison vue sur l\'acropole');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(20) NOT NULL AUTO_INCREMENT,
  `id_offre` int(20) NOT NULL,
  `id_use` int(20) NOT NULL,
  `date_res` date NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id_res`),
  KEY `id-offre` (`id_offre`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_res`, `id_offre`, `id_use`, `date_res`, `date_deb`, `date_fin`) VALUES
(2, 2, 1, '2018-09-19', '2018-09-21', '2018-09-23'),
(3, 2, 1, '2018-09-19', '2018-09-06', '2018-09-22'),
(4, 1, 1, '2018-09-19', '2018-09-19', '2018-09-23'),
(5, 2, 1, '2018-09-20', '2018-10-11', '2018-11-08'),
(6, 2, 1, '2018-09-20', '2018-10-11', '2018-11-08'),
(7, 7, 1, '2018-09-21', '2018-09-23', '2018-09-24'),
(8, 2, 1, '2018-09-21', '2018-09-04', '2018-09-06'),
(9, 4, 1, '2018-09-21', '2018-09-11', '2018-09-13'),
(10, 4, 1, '2018-09-21', '2018-09-15', '2018-09-16'),
(11, 2, 1, '2018-09-21', '2018-09-12', '2018-09-20'),
(12, 2, 1, '2018-09-21', '2018-09-15', '2018-09-30'),
(13, 9, 1, '2018-09-21', '2018-09-28', '2018-09-30'),
(14, 9, 1, '2018-09-21', '2018-09-27', '2018-09-28');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(20) NOT NULL AUTO_INCREMENT,
  `nom_users` varchar(30) NOT NULL,
  `prenom_users` varchar(30) NOT NULL,
  `mail_users` varchar(30) NOT NULL,
  `pasword_users` varchar(15) NOT NULL,
  `role_users` int(1) NOT NULL,
  `sex_users` int(1) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom_users`, `prenom_users`, `mail_users`, `pasword_users`, `role_users`, `sex_users`) VALUES
(1, 'cabrisseau', 'Sonny', 'sonny.cabrisseau@gmail.com', 'sonnysonny', 1, 1),
(2, 'Danielle', 'Yves', 'dada@gmail.com', 'danieldaniel', 0, 1),
(3, 'Yvette', 'Rene', 'yvette@gmail.com', 'yevetteyvette', 0, 1),
(4, 'janine', 'tatiana', 'jaja@gmail.com', 'janinejanine', 0, 1),
(5, 'Tamriel', 'Skyrim', 'tata@hotmail.fr', 'azerty', 1, 0),
(6, 'samsung', 'shuit', 'samsung@gmail.com', 'shuit', 0, 1),
(7, 'atouchi', 'billel', 'atouchi@gmail.com', 'atouchiatouchi', 0, 1);

--
-- Contraintes pour les tables déchargées
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
