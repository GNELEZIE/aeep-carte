-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 oct. 2022 à 14:19
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aeep_pongala`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `id_carte` int(11) NOT NULL,
  `date_carte` datetime DEFAULT NULL,
  `genre` varchar(55) DEFAULT NULL,
  `nom` varchar(225) DEFAULT NULL,
  `prenom` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `iso_phone` varchar(225) DEFAULT NULL,
  `dial_phone` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `niveau` varchar(225) DEFAULT NULL,
  `village` varchar(225) DEFAULT NULL,
  `piece` varchar(225) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `statut` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id_carte`, `date_carte`, `genre`, `nom`, `prenom`, `slug`, `iso_phone`, `dial_phone`, `phone`, `niveau`, `village`, `piece`, `photo`, `statut`) VALUES
(1, '2022-10-02 12:11:00', 'Femme', 'mmpo', 'Ouattara', 'controle/carte.save', 'af', '93', '000000000', 'Master 2', 'Blagounon', '63397ff00a633.jpg', '63397ff00aa0e.jpg', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id_carte`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id_carte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
