-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2021 at 12:39 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `aliment`
--

CREATE TABLE `aliment` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `calories` double DEFAULT NULL,
  `glucides` double DEFAULT NULL,
  `proteines` double DEFAULT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aliment`
--

INSERT INTO `aliment` (`id`, `nom`, `calories`, `glucides`, `proteines`, `type`) VALUES
(1, 'carotte', 180, 13, 12, 'Légume'),
(2, 'pomme', 134, 13, 13, 'Fruit'),
(3, 'caramel', 390, 80, 9, 'friandise'),
(4, 'pomme d\'amour', 300, 70, 13, 'friandise');

-- --------------------------------------------------------

--
-- Table structure for table `composition`
--

CREATE TABLE `composition` (
  `id_compose` int(11) NOT NULL,
  `id_composant` int(11) NOT NULL,
  `proportion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `composition`
--

INSERT INTO `composition` (`id_compose`, `id_composant`, `proportion`) VALUES
(4, 2, 90),
(4, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `consommation`
--

CREATE TABLE `consommation` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_repas` int(11) NOT NULL,
  `id_aliment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consommation`
--

INSERT INTO `consommation` (`id`, `quantite`, `id_repas`, `id_aliment`) VALUES
(1, 200, 1, 4),
(2, 500, 2, 4),
(3, 100, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `repas`
--

CREATE TABLE `repas` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repas`
--

INSERT INTO `repas` (`id`, `date`, `heure`, `type`, `id_utilisateur`) VALUES
(1, '2021-04-01', '17:00:00', 'goûter', 1),
(2, '2021-04-01', '17:00:00', 'goûter', 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `age` varchar(25) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `pratique_sportive` varchar(50) NOT NULL,
  `besoin energetique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `mdp`, `age`, `sexe`, `pratique_sportive`, `besoin energetique`) VALUES
(1, 'Pauline', 'paupau', '21', 'femme', 'moyen', 2300),
(2, 'Nassim', 'nass', '22', 'homme', 'faible', 2400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `composition`
--
ALTER TABLE `composition`
  ADD KEY `id_composant` (`id_composant`),
  ADD KEY `id_compose` (`id_compose`);

--
-- Indexes for table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_repas` (`id_repas`),
  ADD KEY `id_aliment` (`id_aliment`);

--
-- Indexes for table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aliment`
--
ALTER TABLE `aliment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repas`
--
ALTER TABLE `repas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `composition`
--
ALTER TABLE `composition`
  ADD CONSTRAINT `composition_ibfk_1` FOREIGN KEY (`id_composant`) REFERENCES `aliment` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `composition_ibfk_2` FOREIGN KEY (`id_compose`) REFERENCES `aliment` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_ibfk_1` FOREIGN KEY (`id_repas`) REFERENCES `repas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `consommation_ibfk_2` FOREIGN KEY (`id_aliment`) REFERENCES `aliment` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `repas`
--
ALTER TABLE `repas`
  ADD CONSTRAINT `repas_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
