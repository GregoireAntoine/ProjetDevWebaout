-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : jeu. 27 août 2020 à 17:24
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `toothy`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pac` int(11) NOT NULL,
  `croissant` int(11) NOT NULL,
  `pistolet` int(11) NOT NULL,
  `couque` int(11) NOT NULL,
  `brioche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`nom`, `prenom`, `pac`, `croissant`, `pistolet`, `couque`, `brioche`) VALUES
('fefd', 'a', 1, 0, 1, 0, 0),
('fefd', 'a', 1, 0, 1, 0, 0),
('fefd', 'a', 1, 0, 1, 0, 0),
('fefd', 'a', 1, 0, 1, 0, 0),
('fefd', 'a', 1, 0, 1, 0, 0),
('fefd', 'a', 1, 0, 1, 0, 0),
('fefd', 'a', 1, 0, 1, 0, 0),
('Titanic', 'Grégoire', 1, 0, 0, 0, 0),
('tesgfdfr', 'test', 3, 3, 4, 3, 3),
('Skyfall', 'a', 1, 1, 1, 2, 2),
('testeure', 'testeur', 1, 1, 1, 1, 2),
('a', 'a', 2, 2, 2, 6, 0),
('tt', 'testu', 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`Nom`, `Prenom`, `mail`, `mdp`) VALUES
('Antoine', 'Grégoire', 'HE201703@students.ephec.be', 'greg'),
('Antoine', 'Grégoire', 'HE201703@students.ephec.be', 'greg'),
('aa', 'aa', 'a@a', 'aa'),
('aa', 'aa', 'a@a', 'aa'),
('fezfdsdfez', 'rezfzfe', 'faef@a', 'a'),
('Antoine', 'Grégoire', 'HE201703@students.ephec.be', 'fezfezfesd'),
('test', 'test', 'HE201703@students.ephec.be', 'tzst'),
('a', 'a', 'a@a', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
