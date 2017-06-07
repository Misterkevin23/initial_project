-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Juin 2017 à 01:11
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation-poec`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `entraineur` varchar(255) NOT NULL,
  `couleurs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `entraineur`, `couleurs`) VALUES
(1, 'Juventus', 'Massimiliano Allegri', 'noir, blanc'),
(2, 'Strasbourg', 'Jean-Pierre Papin', 'bleu, blanc');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `numeros_maillot` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `nom`, `prenom`, `age`, `numeros_maillot`) VALUES
(1, 'Bonucci', 'Leonardo', 29, 0),
(2, 'Veratti', 'Marco', 24, 0),
(3, 'Ronaldo', 'Cristiano', 32, 7),
(4, 'Pogba', 'Paul', 23, 18),
(5, 'cantona', 'eric', 50, 0),
(6, 'zinedine', 'zidane', 50, 10);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `habitants` varchar(255) NOT NULL,
  `superficie` varchar(255) NOT NULL,
  `langues` varchar(255) NOT NULL,
  `drapeaux` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `capital`, `habitants`, `superficie`, `langues`, `drapeaux`) VALUES
(1, 'France', 'Paris', '67 595 000', '551 806', 'francaise', 'drapeau/drapeau_france.png'),
(2, 'Allemagne', 'Berlin', '82 800 000', '357 340', 'allemand', 'drapeau/drapeau_allemand.png'),
(3, 'Nouvelle-Zelande', 'Wellington', '4 725 487', '268 680', 'Anglais, Maorie', 'drapeau/drapeau_New_Zealand.png'),
(4, 'Espagne', 'Madrid', '46 439 864', '505 911', 'espagnole', 'drapeau/drapeau_espagne.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
