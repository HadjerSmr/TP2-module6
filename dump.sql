-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 jan. 2024 à 15:16
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `module6`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` text COLLATE utf8mb4_general_ci NOT NULL,
  `dt_naissance` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `dt_mis_a_jour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`, `dt_mis_a_jour`) VALUES
(1, 'Hadjer', 'Soumar', 'hadjer-mebitil@laposte.net', 'DWWM ', '2001-05-28', 1, '2024-01-26 15:01:03'),
(2, 'Najwa', 'ELmernissi', 'najwa@gmail.com', 'DWWM', '1996-02-25', 0, '2024-01-26 15:01:03'),
(3, 'Djidji', 'Louni', 'djidji@yahoo.net', 'php', '1989-08-02', 0, '2024-01-26 15:03:30'),
(4, 'Marizia', 'Gomez', 'gomez@gmail.net', 'HTML', '1974-12-17', 0, '2024-01-26 15:05:26'),
(5, 'Aissa', 'Mebitil', 'mebitil@lapostte.net', 'technicien audioVisuel', '1987-06-25', 1, '2024-01-26 15:06:34'),
(6, 'JeanPierre', 'Lam', 'lam@gmail.com', 'DWWM', '1977-05-20', 0, '2024-01-26 15:08:18'),
(7, 'Nabil', 'Soumar', 'nabil-sm@gmail.com', 'CP', '2016-07-15', 1, '2024-01-26 15:09:25'),
(8, 'Chakib', 'Djeziri', 'chakib@yahoo.com', 'PHP ', '1990-04-11', 0, '2024-01-26 15:11:16'),
(9, 'Mathieu', 'Charles-Rolando', 'mathieu-ch@gmail.com', 'JS', '1996-01-08', 1, '2024-01-26 15:13:06'),
(10, 'etudiant10', 'nom10', 'etudi@email.com', 'CSS', '2000-03-24', 0, '2024-01-26 15:14:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
