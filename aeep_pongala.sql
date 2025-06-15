-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 15 juin 2025 à 20:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

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
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `date_admin` datetime DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `email_valid` int(1) NOT NULL DEFAULT 0,
  `mot_de_passe` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `iso_phone` varchar(225) DEFAULT NULL,
  `dial_phone` varchar(225) DEFAULT NULL,
  `fonction` varchar(225) DEFAULT NULL,
  `niveau` varchar(225) DEFAULT NULL,
  `biographie` varchar(225) DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `linkedin` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `role` int(1) DEFAULT 0,
  `bloquer` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `date_admin`, `email`, `nom`, `prenom`, `email_valid`, `mot_de_passe`, `slug`, `phone`, `iso_phone`, `dial_phone`, `fonction`, `niveau`, `biographie`, `facebook`, `twitter`, `linkedin`, `instagram`, `photo`, `role`, `bloquer`) VALUES
(1, '2022-05-30 11:14:40', 'zie.nanien@gmail.com', 'Ouattara', 'Gnelezie', 1, '$2y$12$pOGTVYKlboX25jpPsGfnbO5swWhVQW05ejZ9U0sUjw9NhmYVjYzH.', 'ouattara', '0546859936', 'ci', '225', 'D&eacute;veloppeur web', '', 'e lorem ipsum est, en imprimerie, une suite de mots sans signification utilis&eacute;e &agrave; titre provisoire pour calibrer une mise en page, le texte d&eacute;finitif venant remplacer le faux-texte d&egrave;s qu\\\'il est p', '', '', '', '', '62948daa2bc12.jpg', 1, 1),
(3, NULL, 'beh@aeep-pongala.net', 'Beh', 'Brahima', 1, '$2y$12$aMjlUpDdzEalVvvnpL/mtuzYFaTxFpVIrBRBgIKQiADNiW96r40nG', 'beh-brahima', '0504960111', 'ci', '225', 'Président', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `id_carte` int(11) NOT NULL,
  `date_carte` datetime DEFAULT NULL,
  `date_nais` datetime DEFAULT NULL,
  `genre` varchar(55) DEFAULT NULL,
  `nom` varchar(225) DEFAULT NULL,
  `prenom` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `iso_phone` varchar(225) DEFAULT NULL,
  `dial_phone` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `niveau` varchar(225) DEFAULT NULL,
  `village` varchar(225) DEFAULT NULL,
  `lieu_nais` varchar(11) DEFAULT NULL,
  `piece` varchar(225) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `statut` int(1) NOT NULL DEFAULT 0,
  `trans_id` varchar(225) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 0,
  `demande` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id_carte`, `date_carte`, `date_nais`, `genre`, `nom`, `prenom`, `slug`, `iso_phone`, `dial_phone`, `phone`, `niveau`, `village`, `lieu_nais`, `piece`, `photo`, `statut`, `trans_id`, `etat`, `demande`) VALUES
(2, '2025-06-13 22:07:00', '2025-06-14 00:00:00', 'Femme', 'Gnelezie Arouna', 'Ouattara', 'gnelezie-arounaouattara', 'ci', '225', '000000000', 'Master 2', '2', '655555', '684ca113dc19f.png', '684ca113dc6da.png', 0, NULL, 0, 0),
(3, '2025-06-13 22:07:00', '2025-06-14 00:00:00', 'Femme', 'Gnelezie Arouna', 'Ouattara', 'gnelezie-arounaouattara-1', 'ci', '225', '000000000', 'Master 2', '2', '655555', '684ca1347f8a8.png', '684ca1347fc73.png', 0, '20250614000748', 0, 0),
(4, '2025-06-13 22:18:00', '2025-06-14 00:00:00', 'Femme', 'mmpo', 'Ouattara 2', 'mmpoouattara-2', 'ci', '225', '0000000005', 'Master 2', '2', '65555500000', '684ca3c076890.png', '684ca3c076c2f.png', 1, '20250614001840', 0, 0),
(5, '2025-06-13 23:25:00', NULL, NULL, 'mmpo', 'Ouattara', 'mmpoouattara-1', 'ci', '225', '0000000005', NULL, '2', NULL, NULL, NULL, 0, NULL, 0, 0),
(8, '2025-06-14 17:07:00', NULL, NULL, 'Cisse', 'Beh', 'cissebeh', 'ci', '225', '11111125', NULL, '16', NULL, NULL, '684dac64c88f2.jpg', 0, NULL, 0, 0),
(9, '2025-06-14 19:11:00', '2025-06-15 00:00:00', 'Homme', 'Gnelezie Arouna', 'Ouattara', 'gnelezie-arounaouattara-2', 'ci', '225', '06699985588', '', '17', 'Kass&eacute', '684dc96947186.png', '684dc96947bed.png', 0, '20250614211137', 0, 1),
(10, '2025-06-14 19:20:00', '1996-02-01 00:00:00', 'Femme', 'BEH', 'DOH', 'behdoh', 'ci', '225', '0000000005', 'Master 2', '2', 'Kass&eacute', '684dcb70b9bb6.jpg', '684dcb70b9ea4.jpg', 0, '20250614212016', 0, 1),
(11, '2025-06-15 09:33:00', '2025-06-28 00:00:00', 'Homme', 'Gnelezie Arouna', 'Ouattara', 'gnelezie-arounaouattara-3', 'ci', '225', '0546859936', 'Master 2', '8', 'Kass&eacute', '684e9358e9c38.png', '684e9358ea569.jpg', 1, '20250615113312', 0, 1),
(12, '2025-06-15 09:33:00', NULL, NULL, 'Gnelezie Arouna', 'Ouattara', 'gnelezie-arounaouattara-4', 'ci', '225', '0759716483', NULL, '3', NULL, NULL, '684e937359e7c.png', 0, NULL, 0, 0),
(13, '2025-06-15 09:47:00', NULL, NULL, 'Kone', 'Pathe', 'konepathe', 'ci', '225', '0700289629', NULL, '13', NULL, NULL, '684e96ba986ca.jpeg', 1, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `miss`
--

CREATE TABLE `miss` (
  `id_miss` int(11) NOT NULL,
  `date_miss` datetime DEFAULT NULL,
  `nom` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `village` varchar(11) DEFAULT NULL,
  `note` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `miss`
--

INSERT INTO `miss` (`id_miss`, `date_miss`, `nom`, `slug`, `phone`, `village`, `note`) VALUES
(1, '2024-06-14 09:10:00', 'Gnelezie Arouna', 'gnelezie-arouna', '225555555', '3', 2),
(2, '2024-06-14 09:14:00', 'NAGANA', 'nagana', '01111111', '11', 6),
(3, '2024-06-14 09:15:00', 'yougone', 'yougone', '5555555555', '14', 0),
(4, '2024-06-14 09:23:00', 'Coulibaly', 'coulibaly', '050505053', '11', 0),
(5, '2024-06-14 09:23:00', 'Siaka', 'siaka', '0999090902', '15', 10),
(6, '2024-06-14 09:27:00', 'AAABA', 'aaaba', '0546859936', '2', 10),
(7, '2024-06-14 09:36:00', 'Yougone', 'yougone-1', '0708050304', '6', 2);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_questions` int(11) NOT NULL,
  `date_questions` datetime DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT 0,
  `quest_t` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_questions`, `date_questions`, `type`, `quest_t`) VALUES
(1, '2024-06-12 14:11:00', 0, 'Qu\\&#039;est ce que AEEP ?'),
(2, '2024-06-12 14:11:00', 0, 'Que signifie AEEK ?'),
(3, '2024-06-12 14:11:00', 0, 'Qui est Beh ?'),
(4, '2024-06-12 14:11:00', 0, 'Qui est Zie ?'),
(5, '2024-06-12 14:12:00', 0, 'Qui est Alasco ?'),
(6, '2024-06-12 14:12:00', 0, 'Qui Lazeni'),
(8, '2024-06-12 14:15:00', 0, 'Qui est Kolo ?');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id_reponses` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `reponse_s` varchar(225) DEFAULT NULL,
  `point` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id_reponses`, `question_id`, `reponse_s`, `point`) VALUES
(4, 6, 'CM', 0),
(6, 8, 'WAVE', 2),
(7, 8, 'MTN', 0),
(8, 8, 'OM', 0),
(9, 6, 'SGA', 0),
(10, 6, 'SG', 2),
(11, 6, 'SOY', 0),
(12, 5, 'Pr&eacute;sident', 2),
(13, 5, 'SGA', 0),
(14, 4, 'EX PR', 2),
(15, 4, 'PR', 0),
(16, 4, 'PRO', 0),
(17, 3, 'PR AEEP', 2),
(18, 3, 'PR AEEK', 0),
(19, 3, 'PR AEETI', 0),
(20, 2, 'KASSERE', 2),
(21, 2, 'LAFI', 0),
(22, 2, 'TIASSO', 0),
(23, 2, 'SIOMFA', 0),
(24, 1, 'Pongala', 2),
(25, 1, 'AZERTY', 0);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id_resultats` int(11) NOT NULL,
  `miss_id` int(11) DEFAULT NULL,
  `q_id` int(11) DEFAULT NULL,
  `rep_id` int(11) DEFAULT NULL,
  `not_es` float NOT NULL DEFAULT 0,
  `checked` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`id_resultats`, `miss_id`, `q_id`, `rep_id`, `not_es`, `checked`) VALUES
(1, 1, 1, 24, 0, 1),
(2, 1, 1, 25, 0, 1),
(3, 1, 3, 17, 0, 1),
(4, 1, 3, 18, 0, 1),
(5, 1, 3, 19, 0, 0),
(6, 1, 5, 12, 0, 1),
(7, 1, 5, 13, 0, 1),
(8, 1, 8, 6, 2, 1),
(9, 1, 8, 7, 0, 0),
(10, 1, 8, 8, 0, 0),
(11, 1, 4, 14, 0, 1),
(12, 1, 4, 15, 0, 1),
(13, 1, 4, 16, 0, 0),
(14, 2, 3, 17, 0, 1),
(15, 2, 3, 18, 0, 0),
(16, 2, 3, 19, 0, 1),
(17, 2, 6, 4, 0, 1),
(18, 2, 6, 9, 0, 0),
(19, 2, 6, 10, 0, 0),
(20, 2, 6, 11, 0, 1),
(21, 2, 5, 12, 2, 1),
(22, 2, 5, 13, 0, 0),
(23, 2, 2, 20, 2, 1),
(24, 2, 2, 21, 0, 0),
(25, 2, 2, 22, 0, 0),
(26, 2, 2, 23, 0, 0),
(27, 2, 8, 6, 2, 1),
(28, 2, 8, 7, 0, 0),
(29, 2, 8, 8, 0, 0),
(30, 3, 4, 14, 0, 1),
(31, 3, 4, 15, 0, 0),
(32, 3, 4, 16, 0, 1),
(33, 3, 3, 17, 0, 1),
(34, 3, 3, 18, 0, 0),
(35, 3, 3, 19, 0, 1),
(36, 3, 2, 20, 0, 0),
(37, 3, 2, 21, 0, 1),
(38, 3, 2, 22, 0, 0),
(39, 3, 2, 23, 0, 1),
(40, 3, 6, 4, 0, 1),
(41, 3, 6, 9, 0, 1),
(42, 3, 6, 10, 0, 1),
(43, 3, 6, 11, 0, 0),
(44, 3, 5, 12, 0, 1),
(45, 3, 5, 13, 0, 1),
(46, 4, 3, 17, 0, 0),
(47, 4, 3, 18, 0, 0),
(48, 4, 3, 19, 0, 0),
(49, 4, 1, 24, 0, 0),
(50, 4, 1, 25, 0, 0),
(51, 4, 5, 12, 0, 0),
(52, 4, 5, 13, 0, 0),
(53, 4, 4, 14, 0, 0),
(54, 4, 4, 15, 0, 0),
(55, 4, 4, 16, 0, 0),
(56, 4, 2, 20, 0, 0),
(57, 4, 2, 21, 0, 0),
(58, 4, 2, 22, 0, 0),
(59, 4, 2, 23, 0, 0),
(60, 5, 2, 20, 2, 1),
(61, 5, 2, 21, 0, 0),
(62, 5, 2, 22, 0, 0),
(63, 5, 2, 23, 0, 0),
(64, 5, 5, 12, 2, 1),
(65, 5, 5, 13, 0, 0),
(66, 5, 8, 6, 2, 1),
(67, 5, 8, 7, 0, 0),
(68, 5, 8, 8, 0, 0),
(69, 5, 3, 17, 2, 1),
(70, 5, 3, 18, 0, 0),
(71, 5, 3, 19, 0, 0),
(72, 5, 6, 4, 0, 0),
(73, 5, 6, 9, 0, 0),
(74, 5, 6, 10, 2, 1),
(75, 5, 6, 11, 0, 0),
(76, 6, 1, 24, 2, 1),
(77, 6, 1, 25, 0, 0),
(78, 6, 6, 4, 0, 0),
(79, 6, 6, 9, 0, 0),
(80, 6, 6, 10, 2, 1),
(81, 6, 6, 11, 0, 0),
(82, 6, 8, 6, 2, 1),
(83, 6, 8, 7, 0, 0),
(84, 6, 8, 8, 0, 0),
(85, 6, 4, 14, 2, 1),
(86, 6, 4, 15, 0, 0),
(87, 6, 4, 16, 0, 0),
(88, 6, 5, 12, 2, 1),
(89, 6, 5, 13, 0, 0),
(90, 7, 1, 24, 0, 0),
(91, 7, 1, 25, 0, 0),
(92, 7, 3, 17, 0, 0),
(93, 7, 3, 18, 0, 1),
(94, 7, 3, 19, 0, 0),
(95, 7, 8, 6, 0, 1),
(96, 7, 8, 7, 0, 0),
(97, 7, 8, 8, 0, 1),
(98, 7, 2, 20, 0, 0),
(99, 7, 2, 21, 0, 0),
(100, 7, 2, 22, 0, 1),
(101, 7, 2, 23, 0, 0),
(102, 7, 5, 12, 2, 1),
(103, 7, 5, 13, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE `reunion` (
  `id_reunion` int(11) NOT NULL,
  `date_reunion` datetime DEFAULT NULL,
  `nom` varchar(225) DEFAULT NULL,
  `phone` varchar(111) DEFAULT NULL,
  `iso_phone` varchar(11) DEFAULT NULL,
  `dial_phone` varchar(11) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `ville` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reunion`
--

INSERT INTO `reunion` (`id_reunion`, `date_reunion`, `nom`, `phone`, `iso_phone`, `dial_phone`, `email`, `ville`) VALUES
(1, '2023-11-10 09:51:00', 'Ouattara mmpo', '0546859936', 'ci', '225', 'zie.nanien@gmail.com', 'Abidjan'),
(2, '2023-11-10 11:05:00', 'COULIBALY NIDJATCHIN', '0759996270', 'ci', '225', 'Cnidjatchin12@gmail.com', 'Boundiali'),
(3, '2023-11-10 11:10:00', 'COULIBALY djakaridja', '0708988311', 'ci', '225', 'dc0493954@gmail.com', 'Korhogo'),
(4, '2023-11-10 11:18:00', 'COULIBALY Tenon', '0506483048', 'ci', '225', 'ningnanmancoulibaly@gmail.com', 'Maf&eacute;r&eacute;'),
(5, '2023-11-10 11:33:00', 'Ouattara fotcha', '0584538923', 'ci', '225', 'affououattara016@gmail.com', 'Korhogo'),
(6, '2023-11-10 12:41:00', 'Coulibaly Sourounan', '0564774493', 'ci', '225', 'souroucly77@gmail.com', 'Korhogo'),
(7, '2023-11-10 14:01:00', 'Coulibaly tialafola kassoum', '0575398390', 'ci', '225', 'tialafolokassoumcoul@gmail.com', 'Korhogo'),
(8, '2023-11-10 14:27:00', 'Ouattara lozeni', '0556671000', 'ci', '225', 'lozeniouattara47@gmail.com', 'Yamoussoukro'),
(9, '2023-11-10 17:42:00', 'Ouattara beh Allassane', '0788480300', 'ci', '225', 'behallassaneouattara4@gmail.com', 'Bouak&eacute;'),
(10, '2023-11-10 18:29:00', 'Traor&eacute; Adama', '0709740854', 'ci', '225', 'adamakaderzie91@gemail.com', 'Korhogo'),
(11, '2023-11-10 18:30:00', 'Kon&eacute; MEHIN', '0544651031', 'ci', '225', 'mehinkone79@gmail.com', 'Korhogo'),
(12, '2023-11-10 18:30:00', 'Kon&eacute; MEHIN', '0544651031', 'ci', '225', 'mehinkone79@gmail.com', 'Korhogo'),
(13, '2023-11-10 18:46:00', 'Coulibaly Natogoma', '0566468186', 'ci', '225', 'Coulibalyn353@gmail.com', 'Korhogo'),
(14, '2023-11-10 19:02:00', 'Ouattara Karitia Affoussiata', '0708855019', 'ci', '225', 'ouattaraaffoussiata427@gmail.com', 'Katiola'),
(15, '2023-11-10 19:54:00', '???????????????????????????????????? ????????????????????????????', '0707945038', 'ci', '225', 'wodanhancoulibaly9@gmail.com', '????????????????????????'),
(16, '2023-11-10 19:58:00', 'Diarrassouba Mamb&eacute;', '0556530153', 'ci', '225', 'mdiarra0103@gmail.com', 'Abidjan'),
(17, '2023-11-10 19:59:00', 'Siriki Diawara', '0502489619', 'ci', '225', 'sirikidwr@gmail.com', 'Korhogo'),
(18, '2023-11-10 20:08:00', 'Ouattara n\\&#039;golo Moussa', '0709098948', 'ci', '225', 'ngolomoussaouattara07@gmail.com', 'Korhogo'),
(19, '2023-11-10 20:43:00', 'Kone DONITIEN', '0703892726', 'ci', '225', 'donitienkone@gmail.com', 'Abidjan'),
(20, '2023-11-10 22:37:00', 'Yeo Zie seydou', '0544168491', 'ci', '225', 'Zieseydou@gmail.com', 'Abidjan'),
(21, '2023-11-10 22:47:00', 'Coulibaly Ngamgolo Lacina', '0708974832', 'ci', '225', 'ngamgolo@gmail.com', 'Bondoukou'),
(22, '2023-11-11 09:13:00', 'Coulibaly watami', '0709318273', 'ci', '225', 'gnanimacoulibaly@gmail.com', 'Korhogo'),
(23, '2023-11-11 11:13:00', 'Tornan COULIBALY', '0708290045', 'ci', '225', 'coultornan93@gmail.com', 'Katiola'),
(24, '2023-11-11 11:19:00', 'OUATTARA ZANA MOUMINE', '0554081812', 'ci', '225', 'moumineouatt040@gmail.com', 'Korhogo'),
(25, '2023-11-12 08:58:00', 'Ouattara beh Allassane', '0788480300', 'ci', '225', 'behallassaneouattara4@gmail.com', 'Bouak&eacute;'),
(26, '2023-11-12 09:16:00', 'COULIBALY djakaridja', '0708988311', 'ci', '225', 'dc0493954@gmail.com', 'Korhogo'),
(27, '2023-11-12 09:20:00', 'Traor&eacute; Adama', '0505197170', 'ci', '225', 'adamakaderzie91@gemail.com', 'Korhogo'),
(28, '2023-11-12 10:39:00', 'Kon&eacute; Gn&eacute;l&eacute; Mariam', '0564751986', 'ci', '225', 'gnelemariamkone02@gmail.com', 'Yamoussoukro'),
(29, '2023-11-12 10:39:00', 'Kon&eacute; Gn&eacute;l&eacute; Mariam', '0564751986', 'ci', '225', 'gnelemariamkone02@gmail.com', 'Yamoussoukro'),
(30, '2023-11-12 12:37:00', 'Kon&eacute; Gn&eacute;l&eacute; Mariam', '0564751986', 'ci', '225', 'gnelemariamkone02@gmail.com', 'Yamoussoukro'),
(31, '2023-11-12 19:44:00', 'Koulibaly N\\&#039;golo Drissa', '0701369447', 'ci', '225', 'koulibalydrissa33@gmail.com', 'Toungboli'),
(32, '2023-11-13 19:29:00', 'Diarrassouba b&ecirc;h Souleymane', '0153682276', 'ci', '225', 'diarrassoubabehsouleymane@gmail.com', 'Abidjan'),
(33, '2023-11-13 19:32:00', 'Diarrassouba b&ecirc;h Souleymane', '0153682276', 'ci', '225', 'diarrassoubabehsouleymane@gmail.com', 'Kass&eacute;r&eacute;');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `id_sortie` int(11) NOT NULL,
  `date_sortie` datetime DEFAULT NULL,
  `nom` varchar(225) DEFAULT NULL,
  `prenom` varchar(225) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `village` varchar(55) DEFAULT NULL,
  `etat` int(1) NOT NULL DEFAULT 0,
  `trans_id` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`id_sortie`, `date_sortie`, `nom`, `prenom`, `phone`, `village`, `etat`, `trans_id`) VALUES
(8, '2023-12-28 08:14:00', 'OUATTARA', 'BEH BRAHIMA', '0504960111', 'Kasséré', 0, NULL),
(9, '2023-12-28 09:10:00', 'COULIBALY', 'LAZENI', '0798040755', 'Yélé', 0, NULL),
(10, '2024-01-22 13:53:00', 'Ouattara', 'Fanhanyir&eacute; Alassane', '0556054466', 'Kasséré', 0, NULL),
(11, '2024-01-25 21:04:00', 'OUATTARA', 'NABAHA BRAHIMA', '0546881001', 'Kasséré', 0, NULL),
(12, '2024-01-25 21:21:00', 'Coulibaly', 'Wodanhan', '0707945038', 'Lafi', 0, NULL),
(13, '2024-01-25 21:41:00', 'KONE', 'DONITIEN', '0703892726', 'Categories', 0, NULL),
(14, '2024-01-25 21:41:00', 'COULIBALY', 'Zana', '0777970113', 'Categories', 0, NULL),
(15, '2024-01-25 23:01:00', 'Ouattara', 'Singuefolo', '0747284634', 'Landiougou', 0, NULL),
(16, '2024-01-26 00:40:00', 'Diawara', 'Siriki', '0576409832', 'Blagounon', 0, NULL),
(17, '2024-01-26 07:50:00', 'OUATTARA', 'Adama', '0586683050', 'Kasséré', 0, NULL),
(18, '2024-01-26 08:19:00', 'OUATTARA', 'BEH SIAKA', '0566132283', 'Kasséré', 0, NULL),
(19, '2024-01-26 09:44:00', 'Ouattara', 'Yahafe Adama', '0546492544', 'Kasséré', 0, NULL),
(20, '2024-01-27 06:31:00', 'Coulibaly', 'Sienr&ecirc;h', '0594522712', 'Landiougou', 0, NULL),
(21, '2024-01-30 15:14:00', 'YEO', 'Gnama Brigitte', '0555632713', 'Gbalo', 0, NULL),
(27, '2024-02-08 12:48:00', 'Gnelezie Arouna', 'Ouattara', '0546859936', 'Kasséré', 0, '20240208134825'),
(28, '2024-02-08 18:19:00', 'Gnelezie Arouna', 'Ouattara', '0759716483', 'Gbalo', 0, '20240208191955'),
(29, '2024-02-08 19:20:00', 'Gnelezie Arouna', 'Ouattara', '0105060809', 'Baya', 0, '20240208202022'),
(30, '2024-02-08 19:39:00', 'Gnelezie Arouna', 'Ouattara', '0566235874', 'Blagounon', 0, '20240208203955'),
(31, '2024-02-09 07:55:00', 'Gnelezie Arouna', 'Ouattara', '0303030303', 'Gbalo', 0, '20240209085506'),
(32, '2024-02-09 12:03:00', 'Gnelezie Arouna', 'Ouattara', '05050456825', 'Blagounon', 0, '20240209130312'),
(33, '2024-02-09 21:35:00', 'Gnelezie Arouna', 'Ouattara', '0707070707', 'Blagounon', 0, '20240209223505'),
(34, '2024-02-13 12:55:00', 'Gnelezie Arouna', 'Ouattara', '00000000087', 'Baya', 0, '20240213135501'),
(35, '2024-02-13 12:55:00', 'Gnelezie Arouna', 'Ouattara', '00000000078', 'Blagounon', 0, '20240213135552'),
(36, '2024-02-13 13:11:00', 'Gnelezie Arouna', 'Ouattara', '00000000089', '1', 0, '20240213141109'),
(37, '2024-02-13 14:25:00', 'Gnelezie Arouna', 'Ouattara', '0000000006', 'Blagounon', 0, '20240213152547'),
(38, '2024-02-13 14:29:00', 'Gnelezie Arouna', 'Ouattara', '000000000', 'Gbalo', 0, '20240213152926'),
(39, '2024-02-15 13:09:00', 'Gnelezie Arouna', 'Ouattara', '0000000004', 'Landiougou', 0, '20240215140910'),
(40, '2024-02-15 13:22:00', 'Gnelezie Arouna', 'Ouattara', '05468599363', 'Blagounon', 0, '20240215142239'),
(41, '2024-02-15 15:30:00', 'Gnelezie Arouna', 'Ouattara', '00000000069', 'Koundin', 0, '20240215163016'),
(42, '2024-02-15 16:13:00', 'Gnelezie Arouna', 'Ouattara', '00000000001', 'Baya', 0, '20240215171341'),
(43, '2024-02-16 21:24:00', 'Gnelezie Arouna', 'Ouattara', '05255555555', 'Blagounon', 0, NULL),
(44, '2024-02-21 17:28:00', 'Gnelezie Arouna', 'Ouattara', '0000000009', 'Baya', 0, '20240221182807'),
(45, '2024-02-21 17:34:00', 'Gnelezie Arouna', 'Ouattara', '00000000054', 'Blagounon', 0, '20240221183451');

-- --------------------------------------------------------

--
-- Structure de la table `uesdm`
--

CREATE TABLE `uesdm` (
  `id_uesdm` int(11) NOT NULL,
  `date_uesdm` datetime DEFAULT NULL,
  `nom` varchar(225) DEFAULT NULL,
  `prenom` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `dial` varchar(10) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `date_naiss` datetime DEFAULT NULL,
  `lieu_naiss` varchar(11) DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `profession` varchar(110) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `piece` varchar(225) DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `statut` int(1) NOT NULL DEFAULT 0,
  `motif` text DEFAULT NULL,
  `etat` int(1) NOT NULL DEFAULT 0,
  `trans_id` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `uesdm`
--

INSERT INTO `uesdm` (`id_uesdm`, `date_uesdm`, `nom`, `prenom`, `slug`, `dial`, `phone`, `date_naiss`, `lieu_naiss`, `fonction`, `profession`, `genre`, `piece`, `photo`, `statut`, `motif`, `etat`, `trans_id`) VALUES
(1, '2024-01-25 20:58:00', 'Kone', 'Maimouna', 'maimouna', '225', '0546859936', '2024-01-28 00:00:00', 'Kass&eacute', 'D&eacute;veloppeur web', 'Etudiant', 'Femme', '65b2cb5ccf299.png', '65b2cb5ccf56a.png', 2, 'D&eacute;signe un inanim&eacute; abstr.] Ne pas accepter, refuser. Synon. repousser.Rejeter un conseil, un sentiment, une id&eacute;e, une hypoth&egrave;se, une m&eacute;thode, une', 1, '0'),
(2, '2024-01-30 10:28:00', 'Gnelezie Arouna', 'Ouattara', 'ouattara', '225', '0759716483', '2024-01-07 00:00:00', 'Kass&eacute', 'D&eacute;veloppeur web', 'Etudiant', 'Homme', '65b8cf331e53d.png', '65b8cf331e643.jpg', 1, NULL, 0, '0'),
(4, '2024-03-06 15:09:00', 'yougone', 'Ouattara', 'yougoneouattara', '225', '000000000', '2024-03-08 00:00:00', 'Kass&eacute', 'User', 'Etudiant', 'Femme', '65e8873f28c6e.jpg', '65e8873f29263.jpg', 1, NULL, 0, '2147483647'),
(5, '2024-03-06 17:56:00', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, 0, NULL, 0, '2147483647');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id_carte`);

--
-- Index pour la table `miss`
--
ALTER TABLE `miss`
  ADD PRIMARY KEY (`id_miss`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_questions`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id_reponses`);

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id_resultats`);

--
-- Index pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`id_reunion`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`id_sortie`);

--
-- Index pour la table `uesdm`
--
ALTER TABLE `uesdm`
  ADD PRIMARY KEY (`id_uesdm`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id_carte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `miss`
--
ALTER TABLE `miss`
  MODIFY `id_miss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id_reponses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id_resultats` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `reunion`
--
ALTER TABLE `reunion`
  MODIFY `id_reunion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `id_sortie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `uesdm`
--
ALTER TABLE `uesdm`
  MODIFY `id_uesdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
