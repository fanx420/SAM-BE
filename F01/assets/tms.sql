-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 10:05 AM
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
-- Database: `tms`
--

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `taskName`, `taskDescription`, `user_id`, `status`) VALUES
(1, 'Task 1', 'This is a sample task', 2, 'completed'),
(2, 'Task 2', 'This is a dropped task', 2, 'dropped'),
(3, 'Task 3', 'This is a pending task', 2, 'completed'),
(4, 'Task 4', 'This is a pending task for user 2', 3, 'pending'),
(5, 'Task 5', 'This is a completed task for user 2', 3, 'completed'),
(6, 'Task 6', 'This is a dropped task for user 2', 3, 'dropped');

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstName`, `lastName`, `userName`, `role`, `password`, `dateCreated`) VALUES
(1, 'Admin', 'Nistrator', 'Admin123', 'admin', '$2y$10$NTclW/tQ2vv4MSBNXGLC5uq0mmh9ITN5DEAcJeYS0YSfCKQRPsQuG', '2025-01-24 08:28:47'),
(2, 'User1', 'Name', 'User1', 'user', '$2y$10$Rv6m9Rx76WwpXloJ5LvlxegfK.Iu9Jp5Q0aWcqsy.EK15x4LBGyzi', '2025-01-24 08:30:03'),
(3, 'User 2', 'name', 'user2', 'user', '$2y$10$hCTdOYvK78LF9ZsejAPbpOXoY8j.fR59xGM0Jxar1vnGPTb7AJ.Xu', '2025-01-24 08:39:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
