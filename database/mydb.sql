CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database:3306
-- Généré le :  mer. 28 avr. 2021 à 15:47
-- Version du serveur :  10.4.2-MariaDB-1:10.4.2+maria~bionic
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `rest_loc` varchar(40) NOT NULL,
  `msg_subject` varchar(40) NOT NULL,
  `msg` text NOT NULL,
  `msg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `mail`, `rest_loc`, `msg_subject`, `msg`, `msg_date`) VALUES
(32, 'q db,qsdbsq,dbqsdn,s', 'q db,qsdbsq,dbqsdn,s', 'sqdjlsqhds@dsfds.com', '1', '1', 'q db,qsdbsq,dbqsdn,s q db,qsdbsq,dbqsdn,s q db,qsdbsq,dbqsdn,s q db,qsdbsq,dbqsdn,s q db,qsdbsq,dbqsdn,s q db,qsdbsq,dbqsdn,s q db,qsdbsq,dbqsdn,s v q db,qsdbsq,dbqsdn,s', '2021-03-27'),
(33, 'rature, discovered t', 'rature, discovered t', 'ssssssssssssssssssssss@sqds.cm', '2', '3', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2021-03-27'),
(35, 'SQ?Nk', 'qskdLSQJK', 'gezin@zgz.com', '1', '1', 'QSDSDf sdFQSFSQFQSq dQD Dq QDQSDSQ QSFSQFSQ', '2021-03-27');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_by` varchar(100) NOT NULL,
  `img_text` varchar(255) NOT NULL,
  `img_date` date NOT NULL DEFAULT current_timestamp(),
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `img_path`, `img_by`, `img_text`, `img_date`, `img_name`) VALUES
(30, 'uploads/photo-12.jpg', 'Lexi-Mai Luna', 'Monday Salad.', '2021-03-28', 'photo-12.jpg'),
(31, 'uploads/photo-11.jpg', 'Reginald Cassidy', 'Rice With Zucchini.', '2021-03-28', 'photo-11.jpg'),
(32, 'uploads/photo-10.jpg', 'Humairaa Ferrell', 'Salad On A Plate.', '2021-03-28', 'photo-10.jpg'),
(33, 'uploads/photo-09.jpg', 'Michelle Finnegan', 'Crop Person Pouring Seasoning On Aperitifs.', '2021-03-28', 'photo-09.jpg'),
(34, 'uploads/photo-08.jpg', 'Sofia Beil', 'Food Cooked In A Stainless Steel Plate.', '2021-03-28', 'photo-08.jpg'),
(35, 'uploads/photo-07.jpg', 'Bear Carty', 'Plate Photography Of Vegetable Salad On A Plate.', '2021-03-28', 'photo-07.jpg'),
(36, 'uploads/photo-06.jpg', 'Salahuddin Matthams', 'Pizza On Brown Wooden Table.', '2021-03-28', 'photo-06.jpg'),
(37, 'uploads/photo-05.jpg', 'Bree Finnegan', 'Strawberries And Blueberries On White Ceramic Plate.', '2021-03-28', 'photo-05.jpg'),
(38, 'uploads/photo-04.jpg', 'Benito Clarke', 'Best Thursday Lunch.', '2021-03-28', 'photo-04.jpg'),
(39, 'uploads/photo-03.jpg', 'Harlen Morse', 'Healthy Breakfast Coffee Table', '2021-03-28', 'photo-03.jpg'),
(40, 'uploads/photo-02.jpg', 'Cathy Palacios', 'A Dish On A Bowl', '2021-03-28', 'photo-02.jpg'),
(41, 'uploads/photo-01.jpg', 'Yara Fowler', 'Appetizing Meal Near A Cup Of Coffee', '2021-03-28', 'photo-01.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `pass`) VALUES
(4, 'becodeAdmin', '$2y$10$V.RnuUDAmhW511nT.jx6kOgIDH5NVKilWUbOb4pAmkq7ZXPVMXx5u');

-- --------------------------------------------------------

--
-- Structure de la table `Persons`
--

CREATE TABLE `Persons` (
  `PersonID` int(11) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;