-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 08:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_j1`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(35) DEFAULT NULL,
  `author` varchar(35) DEFAULT NULL,
  `genre` varchar(35) DEFAULT NULL,
  `copy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book1`
--

CREATE TABLE `book1` (
  `id` int(11) NOT NULL,
  `title` varchar(35) DEFAULT NULL,
  `author` varchar(35) DEFAULT NULL,
  `genre` varchar(35) DEFAULT NULL,
  `copy` int(11) DEFAULT NULL,
  `avail` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `title`, `author`, `genre`, `copy`, `avail`) VALUES
(2, NULL, 'abc', '4th', 100, 100),
(3, 'horror', 'xyz', '5th', 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(35) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone` varchar(35) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `phone`, `password`) VALUES
('tom', '0', 'tom@gmail.com', '12345678901', '123'),
('tom', '0', 'tom@gmail.com', '12345678901', '123'),
('tom', 'tomm777', 'tom@gmail.com', '12345678901', '123'),
('tom', 'tomm77', 'tom@gmail.com', '12345678901', '$2y$10$xdUPeeC6DyGb7QcbVQvj1.qh15sNSfFsTnlhBuXfoToiUsItMh8Pm'),
('priti', 'tomm77', 'priti@gmail.com', '12345678901', '$2y$10$JlS10ZRpP3z3gltprXNRveq2G4FSNKJL8NvhCd8keIRmoDm65zhau'),
('', '', '', '', '$2y$10$f6uyhKfgfsQcqV3dw8Ppxud4XIC1CXeahFT3757DqGcqOUH8yeBUG'),
('tom', 'tomm77', 'tom@gmail.com', '12345678901', '$2y$10$e/WCeqtDnEg5cb7x7/9KIeVyh5uzRbLTS.aSQwNPzdc8hhzX3xpya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book1`
--
ALTER TABLE `book1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book1`
--
ALTER TABLE `book1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
