-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 17:32
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
-- Base de données : `raccourcis_clavier_proj`
--

-- --------------------------------------------------------

--
-- Structure de la table `raccourcis`
--

CREATE TABLE `raccourcis` (
  `id` int(11) NOT NULL,
  `shortcut` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `raccourcis`
--

INSERT INTO `raccourcis` (`id`, `shortcut`, `description`) VALUES
(1, 'Ctrl + C', 'Copier l\'élément ou le texte sélectionné.'),
(2, 'Ctrl + V', 'Coller l\'élément ou le texte copié.'),
(3, 'Ctrl + X', 'Couper l\'élément ou le texte sélectionné.'),
(4, 'Ctrl + Z', 'Annuler l\'action précédente.'),
(5, 'Ctrl + Y', 'Rétablir l\'action annulée.'),
(6, 'Ctrl + A', 'Sélectionner tous les éléments dans un document ou une fenêtre.'),
(7, 'Ctrl + N', 'Ouvrir une nouvelle fenêtre ou un nouveau document.'),
(8, 'Ctrl + W', 'Ferme la page sur laquelle vous êtes.'),
(9, 'Ctrl + F', 'Ouvrir la fonction de recherche dans une fenêtre ou un document.'),
(10, 'Ctrl + S', 'Sauvegarder le document ou fichier en cours.'),
(11, 'Ctrl + Shift + Esc', 'Ouvrir le gestionnaire des tâches.'),
(12, 'Ctrl + F5', 'Rafraîchir la fenêtre ou l\'application active.'),
(13, 'Ctrl + R', 'Rafraîchir la fenêtre ou la page web.'),
(14, 'Ctrl + Tab', 'Passer d\'un onglet à l\'autre dans une application à onglets.'),
(15, 'Ctrl + → ou ←', 'Déplacer le curseur d\'un mot à l\'autre, à gauche ou à droite.'),
(16, 'Ctrl + Backspace', 'Supprimer le mot précédent.'),
(17, 'Ctrl + Shift + → ou ←', 'Sélectionner du texte mot par mot à gauche ou à droite.'),
(18, 'Windows + E', 'Ouvrir l\'explorateur de fichiers.'),
(19, 'Windows + D', 'Afficher ou masquer le bureau.'),
(20, 'Windows + P', 'Sélectionner le mode d\'affichage pour une présentation.'),
(21, 'Windows + Ctrl + → ou ←', 'Passer d\'un bureau virtuel à un autre à droite/gauche.'),
(22, 'Alt + Tab', 'Passer d\'une application ou fenêtre à une autre.'),
(23, 'Shift + → ou ←', 'Sélectionner un texte caractère par caractère.'),
(24, 'Shift + Clic', 'Sélectionner plusieurs éléments dans une liste ou une fenêtre.'),
(25, 'F2', 'Renommer l\'élément sélectionné.'),
(26, 'F12', 'Ouvre les outils de développement du navigateur.'),
(27, 'Ctrl + Shift + C', 'Ouvre les outils de développement du navigateur et active l\'outil de sélection d\'éléments.'),
(29, 'Ctrl + 0', 'Permet de réinitialisé le zoom à 100% (Par défaut)');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `raccourcis`
--
ALTER TABLE `raccourcis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `raccourcis`
--
ALTER TABLE `raccourcis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
