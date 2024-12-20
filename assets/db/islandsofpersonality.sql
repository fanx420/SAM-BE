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
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Chivalry Island', 'Represents values like politeness, respect, and standing up for others. This island reflects a deep sense of honor and dedication to treating people with dignity and kindness.\r\n', NULL, '#1E90FF', 'https://flux-image.com/_next/image?url=https%3A%2F%2Fai.flux-image.com%2Fflux%2F6f4b209c-101e-475c-a8d1-39ad41581be1.jpg&w=3840&q=75\r\n', NULL),
(2, 'Independence Island', 'Embodies self-reliance, autonomy, and the ability to stand strong alone. This island celebrates confidence in one\'s own decisions and the freedom to carve your path.\r\n', NULL, '#228B22', 'https://pics.craiyon.com/2024-09-13/5p_Ic54oRNKXpjyzirRbZg.webp', NULL),
(3, 'Discipline Island', 'Focuses on consistency, focus, and the ability to stick to plans and achieve goals. It reflects a strong work ethic and perseverance in pursuing excellence.', NULL, '#FFD700', 'https://www.newtraderu.com/wp-content/uploads/How-To-Improve-Your-Life-Through-Discipline-Consistency-The-Power-Of-Discipline-scaled.jpg', NULL),
(4, 'Courage Island', 'Highlights bravery, boldness, and the strength to face challenges or fears. This island represents a fearless heart and a strong sense of resolve.', NULL, '#FF4500', 'https://i.pinimg.com/originals/5a/21/d0/5a21d0dd20ebfc032f7662229fff3b0b.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
