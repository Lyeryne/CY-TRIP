-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 mai 2024 à 13:46
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
-- Base de données : `cytrip`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `sender` varchar(128) NOT NULL,
  `country` varchar(128) NOT NULL,
  `likes` int(255) NOT NULL,
  `category` varchar(128) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `sender`, `country`, `likes`, `category`, `content`) VALUES
(9, 'NayJi7', 'france', 5, 'activities', 'hihi\r\n'),
(14, 'mjidoug', 'spain', 1, 'activities', 'ui'),
(15, 'mjidoug', 'morocco', 2, 'activities', '3la slamtkoum'),
(16, 'NayJi7', 'france', 2, 'spots', 'lalala'),
(18, 'mjidoug', 'france', 2, 'dishes', 'lala'),
(20, 'aaaa', 'france', 0, 'activities', 'les delices hehe'),
(22, 'NayJi7', 'spain', 0, 'spots', 'hehe\r\n'),
(23, 'NayJi7', 'spain', 0, 'dishes', 'miam miam'),
(24, 'NayJi7', 'spain', 0, 'activities', 'lolilol'),
(25, 'mjidoug', 'spain', 2, 'activities', 'tfou les espagne ça pue di fesses'),
(28, 'NayJi7', 'france', 1, 'spots', 'place vendome c\'est incroyable hehe trop cool la famille.'),
(29, 'NayJi7', 'france', 0, 'dishes', 'hehe');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`user_id`, `comment_id`) VALUES
(1, 4),
(1, 3),
(1, 8),
(2, 5),
(2, 12),
(1, 11),
(2, 19),
(11, 11),
(1, 10),
(2, 25),
(2, 13),
(2, 12),
(2, 11),
(2, 25),
(2, 18),
(2, 15),
(1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE `ratings` (
  `liker_id` int(11) NOT NULL,
  `country` varchar(128) NOT NULL,
  `grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ratings`
--

INSERT INTO `ratings` (`liker_id`, `country`, `grade`) VALUES
(3, 'france', 1),
(1, 'morocco', 3),
(2, 'france', 5),
(11, 'france', 5),
(1, 'spain', 5),
(2, 'spain', 1),
(2, 'morocco', 5),
(1, 'france', 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `isroot` tinyint(1) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `isroot`, `user_name`, `user_email`, `user_password`) VALUES
(1, 1, 'NayJi7', 'nayji@exemple.com', 'mdp'),
(2, 0, 'mjidoug', 'mjidoug@maroc.ma', 'youyou'),
(3, 0, 'ayman', 'aplus@lol', 'a'),
(10, 0, 'abdelah', 'delice@evy', 'miam'),
(11, 0, 'aaaa', 'aaa@aaa', 'aaa'),
(13, 0, 'mmmmmmm', 'mm@mm.mm', 'mm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
