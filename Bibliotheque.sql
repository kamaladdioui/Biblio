-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mars 16, 2021 at 11:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotheque`
--

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id_livre` int(11) NOT NULL,
  `nom_livre` varchar(255) NOT NULL,
  `editeur_livre` varchar(255) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `situation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `auteurs`
--

CREATE TABLE `auteurs` (
  `id_auteur` int(11) NOT NULL,
  `nom_auteur` varchar(255) NOT NULL,
  `prenom_auteur` varchar(255) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utls` int(11) NOT NULL,
  `unique_id_utls` int(255) NOT NULL,
  `nom_utls` varchar(255) NOT NULL,
  `prenom_utls` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `statu` varchar(255),
  `max_emprint` int(11) NOT NULL,
  `nbr_emprint` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `unique_id_admin` int(255) NOT NULL,
  `nom_admin` varchar(255) NOT NULL,
  `prenom_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `appartient`
--

CREATE TABLE `appartient` (
  `id_appartient` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 
-- --------------------------------------------------------
--
-- Table structure for table `emprint`
--

CREATE TABLE `emprint` (
  `id_emprint` int(11) NOT NULL,
  `id_utls` int(11) NOT NULL ,
  `id_livre` int(11) NOT NULL,
  `date_emprint` date NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id_livre`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utls`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Indexes for table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`id_appartient`),
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `id_auteur` (`id_auteur`);

--
-- Indexes for table `emprint`
--
ALTER TABLE `emprint`
  ADD PRIMARY KEY (`id_emprint`),
  ADD KEY `id_utls` (`id_utls`),
  ADD KEY `id_livre` (`id_livre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utls` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appartient`
--
ALTER TABLE `appartient`
  MODIFY `id_appartient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emprint`
--
ALTER TABLE `emprint`
  MODIFY `id_emprint` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
