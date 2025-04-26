-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 19:15
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
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `message`) VALUES
(1, 'adzazd', 'azdazdazd'),
(2, 'adzazd', 'azdazdazd'),
(3, 'adzazd', 'azdazdazd'),
(4, 'azdddddd', 'azdddddddddddddddddddddddddddddddddd'),
(5, 'adzdzdzdzdzdzdzdz', 'azdddddddddddddddddddddddddddddddd'),
(6, 'azddddddd', 'dazdazdazdazdazdazdazdazdazdazdazdazdazdazdazdaz'),
(7, 'dazdazdaz', 'dazdazdazdazdaz'),
(8, 'dazdazd', 'azdazdazdazd'),
(9, 'AGIMOZORUSREX', 'Le test est fini, let go');

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

-- --------------------------------------------------------

--
-- Structure de la table `raccourcis_vscode`
--

CREATE TABLE `raccourcis_vscode` (
  `id` int(11) NOT NULL,
  `shortcut` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `raccourcis_vscode`
--

INSERT INTO `raccourcis_vscode` (`id`, `shortcut`, `description`) VALUES
(1, 'Shift + Alt + ↓ ou ↑', 'Dupliquer la ligne vers le bas/haut'),
(2, 'Alt + ↓ ou ↑', 'Déplacer la ligne sélectionnée vers le bas/haut'),
(3, 'Ctrl + Enter', 'Insérer une ligne en dessous sans bouger le curseur'),
(4, 'Ctrl + Shift + L', 'Sélectionner toutes les occurrences du mot sélectionné'),
(5, 'Ctrl + /', 'Commenter / Décommenter la ligne'),
(6, 'Ctrl + Tab', 'Naviguer entre les fichiers récemment ouverts'),
(7, 'Ctrl + Shift + → ou ←', 'Sélectionner mot par mot'),
(8, 'Ctrl + ù', 'Basculer le terminal intégré'),
(9, 'Ctrl + Clic', 'Sélectionner plusieurs éléments individuellement'),
(10, 'Ctrl + D', 'Sélectionner les occurences du mot un par un');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `rôle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `rôle`) VALUES
(177, 'a', '$2y$10$UqQ5WfPwLSAVgwdP/zTRke0SEOANrlo3obn6EP8xRqCeh5RMo5aQK', 'simple'),
(178, 'Agim Coroli', '$2y$10$zGEuidXZF1ba4mQYwAVdDO0M1TM/TzTjLOqv8HrfkLZUD/UaClmr6', 'simple'),
(179, 'Jean-Albert-matuidi', '$2y$10$U5UV81nEtxtOvfkBmgY/aufq6DiJAO6opNUlZP2PJ1cRiZwuqqdKq', 'simple'),
(180, 'agim', '$2y$10$A2W5v42ishqEEU.xw223nuY4tcX23BUF.Vku1wajTmNrc8akaLhbS', 'admin'),
(181, 'adzazdazdazd', '$2y$10$CTHXX2EHjDBYz.TEMnEDPe46woVpdY6If6ReE652gUoCDHDCurDHS', 'simple'),
(182, 'dav', '$2y$10$t9kWBW0sbzRi0UUarm2rkeX5GjoNHeTwKC4IwrhcOBSsiMNa3UZjy', 'simple'),
(184, 'dazdazdazdazd', '$2y$10$EXLwOwvYPoMziVKSUmv/wOfyJOI45Hv1CvhjhqRGOjNfrVZqUTNPW', 'simple');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `raccourcis`
--
ALTER TABLE `raccourcis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `raccourcis_vscode`
--
ALTER TABLE `raccourcis_vscode`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `raccourcis`
--
ALTER TABLE `raccourcis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `raccourcis_vscode`
--
ALTER TABLE `raccourcis_vscode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
