-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 02:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, NULL, 'I believe that chivalry is not just about acts of politeness, but about honoring others.', '#1E90FF'),
(2, 1, NULL, 'Every day is an opportunity to make someone feel valued through small gestures', '#1E90FF'),
(3, 1, NULL, 'True chivalry is about being noble in spirit, treating everyone with dignity.', '#1E90FF'),
(4, 2, NULL, 'Independence means having the freedom to follow my own path, trusting in my decisions.', '#228B22'),
(5, 2, NULL, 'I embrace the power that comes from knowing I can handle challenges on my own.', '#228B22'),
(6, 2, NULL, 'Being independent allows me to learn, grow, and shape my own future.', '#228B22'),
(7, 3, NULL, 'Discipline is the backbone of success. It’s about making consistent choices.', '#FFD700'),
(8, 3, NULL, 'The strength to maintain focus and resist short-term temptations is what helps me achieve.', '#FFD700'),
(9, 3, NULL, 'Discipline isn’t a restriction; it’s a tool that empowers me to stay organized.', '#FFD700'),
(10, 4, NULL, 'Courage isn’t the absence of fear—it’s the ability to move forward despite it.', ' #FF4500'),
(11, 4, NULL, 'I find strength in vulnerability, knowing that courage makes me stronger each day.', ' #FF4500'),
(12, 4, NULL, 'True courage is found in moments of uncertainty, when we take action, even when the outcome.', ' #FF4500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
