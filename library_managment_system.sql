-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 mars 2023 à 01:01
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library_managment_system`
--

-- --------------------------------------------------------

--
-- Structure de la table `borrowings`
--

CREATE TABLE `borrowings` (
  `Borrowing_Code` int(11) NOT NULL,
  `Borrowing_Date` date DEFAULT current_timestamp(),
  `Borrowing_Return_Date` date DEFAULT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Borrowed',
  `Nickname` varchar(150) NOT NULL,
  `Collection_Code` int(11) NOT NULL,
  `Reservation_Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `borrowings`
--

INSERT INTO `borrowings` (`Borrowing_Code`, `Borrowing_Date`, `Borrowing_Return_Date`, `Status`, `Nickname`, `Collection_Code`, `Reservation_Code`) VALUES
(45, '2023-03-27', '2023-04-11', 'Returned', 'hamido123', 3, 30),
(46, '2023-03-28', '2023-04-12', 'Returned', 'hamido123', 6, 31),
(48, '2023-03-28', '2023-04-12', 'Returned', 'hamido123', 65, 32);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Nickname` varchar(150) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `CIN` varchar(50) DEFAULT NULL,
  `Occupation` varchar(50) DEFAULT NULL,
  `Penalty_Count` int(11) DEFAULT 0,
  `Birth_Date` date DEFAULT NULL,
  `Creation_Date` date DEFAULT current_timestamp(),
  `Admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Nickname`, `Name`, `Password`, `Address`, `Email`, `Phone`, `CIN`, `Occupation`, `Penalty_Count`, `Birth_Date`, `Creation_Date`, `Admin`) VALUES
('ALI123', 'ALI', '$2y$10$hTIdYxl58Js86qnBnvbdxupgfIDsqLiRH46u9o82abtT3.ORCBGs2', 'Al-Hasani Complex', 'ali@gmail.com', '97389494', 'JH7368374', 'etudiant(e)', 0, '2023-03-16', '2023-03-26', 0),
('hamido123', 'hamid achaou', '$2y$10$5J.DncMSz.4VS71jDUAGi.q1SBtj5vGCcr.Bga9yp8Px/9Sji0hhS', 'Al-Hasani Complex', 'hamid@gmail.com', '0787987654', 'HG654323', 'etudiant(e)', 0, '1999-03-08', '2023-03-26', 0),
('jalil01', 'jalil', '$2y$10$eweLQX4PWwnlW6b3ulze/.VMUkIXYg2m2Nn0KGO2Z7e7flH2CE54.', 'Al-Hasani Complex', 'jalil@gmail.com', '069834332', 'jk2365784', 'etudiant(e)', 0, '2001-01-02', '2023-03-26', 1);

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE `collection` (
  `Collection_Code` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Author_Name` varchar(100) DEFAULT NULL,
  `Cover_Image` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Edition_Date` date DEFAULT NULL,
  `Buy_Date` date DEFAULT NULL,
  `Status` varchar(150) DEFAULT 'Available',
  `Type` varchar(100) DEFAULT NULL,
  `Pages_Number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`Collection_Code`, `Title`, `Author_Name`, `Cover_Image`, `State`, `Edition_Date`, `Buy_Date`, `Status`, `Type`, `Pages_Number`) VALUES
(1, 'To Kill a Mockingbird', 'Harper Lee', '../uploads/ToKillAMochingbird.jpg', 'New', '1960-07-11', '2021-03-26', 'Available', 'Books', 245),
(2, 'Rich Dad Poor Dad', 'George Orwell', '../uploads/rich-dad-poor-dad-24.jpg', 'New', '1949-06-08', '2020-10-15', 'Available\r\n', 'Books\r\n', 234),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', '../uploads/The Great Gatsby.jpg', 'New', '1925-04-10', '2022-01-02', 'Available', 'Books', 456),
(4, 'The Richest Man in Babylon', 'George Samuel Clason', '../uploads/download.jpg', 'New', '1926-01-28', '2022-02-14', 'Available', 'Books', 467),
(5, 'Think and Grow Rich', 'Napoleon Hill', '../uploads/ThinkGrowRich.jpg', 'New', '1951-07-16', '2021-11-30', 'Available', 'Books', 876),
(6, 'To the Lighthouse', 'Virginia Woolf', '../uploads/To The Lighthouse.jpg', 'New', '1927-05-05', '2022-03-01', 'Available', 'books', 986),
(7, 'Global Finance Media', 'Anne Sweet', '6420d535dfbb8.jpg', 'New', '2013-01-02', '2023-02-28', 'Available', 'Magazine', 234),
(8, 'To the Lighthouse', 'Virginia Woolf', '../uploads/To The Lighthouse.jpg', 'New', '1927-05-05', '2022-03-01', 'Available', 'Books\r\n', 986),
(54, 'Rich Dad Poor Dad', 'George Orwell', '../uploads/rich-dad-poor-dad-24.jpg', 'Good', '1949-06-08', '2020-10-15', 'Available\r\n', 'Books', 234),
(55, 'To Kill a Mockingbird', 'Harper Lee', '../uploads/ToKillAMochingbird.jpg', 'New', '1960-07-11', '2021-03-26', 'Available', 'Books', 245),
(56, 'Rich Dad Poor Dad', 'George Orwell', '../uploads/rich-dad-poor-dad-24.jpg', 'New', '1949-06-08', '2020-10-15', 'Available\r\n', 'Books\r\n', 234),
(57, 'The Great Gatsby', 'F. Scott Fitzgerald', '../uploads/The Great Gatsby.jpg', 'New', '1925-04-10', '2022-01-02', 'Available', 'Books', 456),
(58, 'The Richest Man in Babylon', 'George Samuel Clason', '../uploads/download.jpg', 'New', '1926-01-28', '2022-02-14', 'Available', 'Books', 467),
(59, 'The Richest Man in Babylon', 'George Samuel Clason', '../uploads/download.jpg', 'New', '1926-01-28', '2022-02-14', 'Available', 'Books', 467),
(60, 'The Richest Man in Babylon', 'George Samuel Clason', '../uploads/download.jpg', 'New', '1926-01-28', '2022-02-14', 'Available', 'Books', 467),
(61, 'Global Finance Media', 'Anne Sweet', '6420d535dfbb8.jpg', 'New', '2013-01-02', '2023-02-28', 'Available', 'Magazine', 234),
(62, 'The Great Gatsby', 'F. Scott Fitzgerald', '../uploads/The Great Gatsby.jpg', 'Excellent', '1925-04-10', '2022-01-02', 'Available', 'Books', 456),
(63, 'Rich Dad Poor Dad', 'George Orwell', '../uploads/rich-dad-poor-dad-24.jpg', 'New', '1949-06-08', '2020-10-15', 'Available\r\n', 'Books\r\n', 234),
(64, 'To the Lighthouse', 'Virginia Woolf', '../uploads/To The Lighthouse.jpg', 'New', '1927-05-05', '2022-03-01', 'Available', 'Books\r\n', 986),
(65, 'Think and Grow Rich', 'Napoleon Hill', '../uploads/ThinkGrowRich.jpg', 'New', '1951-07-16', '2021-11-30', 'Available', 'Books', 876),
(66, 'Rich Dad Poor Dad', 'George Orwell', '../uploads/rich-dad-poor-dad-24.jpg', 'New', '1949-06-08', '2020-10-15', 'Available\r\n', 'Books\r\n', 234);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_Code` int(11) NOT NULL,
  `Reservation_Date` date DEFAULT current_timestamp(),
  `Reservation_Expiration_Date` datetime DEFAULT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Reservation_Done',
  `Collection_Code` int(11) NOT NULL,
  `Nickname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Reservation_Code`, `Reservation_Date`, `Reservation_Expiration_Date`, `Status`, `Collection_Code`, `Nickname`) VALUES
(30, '2023-03-27', '2023-03-28 03:33:29', 'Borrowed', 3, 'hamido123'),
(31, '2023-03-27', '2023-03-28 04:55:25', 'Borrowed', 6, 'hamido123'),
(32, '2023-03-27', '2023-03-28 04:55:37', 'Borrowed', 65, 'hamido123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `borrowings`
--
ALTER TABLE `borrowings`
  ADD PRIMARY KEY (`Borrowing_Code`),
  ADD UNIQUE KEY `Reservation_Code` (`Reservation_Code`),
  ADD KEY `Collection_Code` (`Collection_Code`),
  ADD KEY `Nickname` (`Nickname`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Nickname`);

--
-- Index pour la table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`Collection_Code`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_Code`),
  ADD KEY `Collection_Code` (`Collection_Code`),
  ADD KEY `Nickname` (`Nickname`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `Borrowing_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `Collection_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `borrowings`
--
ALTER TABLE `borrowings`
  ADD CONSTRAINT `borrowings_ibfk_1` FOREIGN KEY (`Collection_Code`) REFERENCES `collection` (`Collection_Code`),
  ADD CONSTRAINT `borrowings_ibfk_2` FOREIGN KEY (`Nickname`) REFERENCES `client` (`Nickname`),
  ADD CONSTRAINT `borrowings_ibfk_3` FOREIGN KEY (`Reservation_Code`) REFERENCES `reservation` (`Reservation_Code`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Collection_Code`) REFERENCES `collection` (`Collection_Code`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Nickname`) REFERENCES `client` (`Nickname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
