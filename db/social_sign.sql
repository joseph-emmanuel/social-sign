-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 10:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_sign`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `cid` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`cid`, `content`, `uid`, `done`, `approved`) VALUES
(1, 'this is a text petition by john', 3, 0, 1),
(2, 'skdsj', 1, 0, 1),
(3, 'this is s  sss', 1, 0, 1),
(4, 'this is also a test', 1, 0, 1),
(5, 'pettion number 5', 2, 0, 1),
(6, 'request 4', 1, 0, 1),
(7, 'this is a test request', 1, 0, 0),
(8, 'this is also test', 1, 0, 0),
(9, 'this is also test', 1, 0, 0),
(10, 'ads', 1, 0, 0),
(11, 'asas', 1, 0, 0),
(12, 'jskdjksj', 1, 0, 0),
(13, 'asas', 1, 0, 0),
(14, 'qwer', 1, 0, 0),
(26, 'final last check', 1, 0, 0),
(27, 'awqwer', 1, 0, 0),
(28, 'optimum code suggetion', 1, 0, 1),
(29, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Joseph Emmanuel', 'joseph.emmanuel@outlook.com', '$2y$10$JM7ZaloB9dXz4.pUqt7Un.qTWcASTVFsfvWTLI54Axcj960K/TUF6'),
(2, 'Admin', 'admin@myself.com', '$2y$10$mia8OayTy/J.2vOngyIreu2zZ.M8onglG0OSt55zhPZ2C8tq9lPIS'),
(3, 'john', 'j@gmail.com', '$2y$10$RDITn.RpcZRP3kpGUqsMreJRN.FMfZ31S5PoTVcVNzzh9agayKxSy'),
(4, 'alex', 'al@gmail.com', '$2y$10$KaeBc7tvqjFY2lDQcEA.puivvFCl1JND5lSf3CKX9rCw3AHm5p8nS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`idUsers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
