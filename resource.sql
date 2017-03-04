-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 04:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resource`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filename` varchar(128) NOT NULL,
  `uploadedBy` varchar(20) DEFAULT NULL,
  `date` varchar(64) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `gradeLevel` varchar(30) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `subject` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filename`, `uploadedBy`, `date`, `rating`, `description`, `state`, `gradeLevel`, `link`, `subject`) VALUES
('Assignment1.docx', 'testing', '3, 3, 2017', 5, 'good', 'indiana', 'elementary', '----', 'languageArts'),
('test.pdf', 'wmkwok', 'today', 5, 'wendy\'s test file', 'Indiana', 'College', '#', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `name` varchar(20) NOT NULL,
  `filename` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`name`, `filename`) VALUES
('math', 'test.pdf'),
('python', 'test.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `schooltype` varchar(20) NOT NULL,
  `schoollevel` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`, `schooltype`, `schoollevel`, `state`, `bio`, `admin`) VALUES
('testing', 'test', 'testing@gmail.com', '$2y$10$bHnDKRdmB2Mrpf4adXabl.69MM7fg40gDSLN9RN3hytrntGV5rXdu', 'public', 'elementary', 'Indiana', 'dsfsfsdfs', 1),
('wendyk', 'wendy', 'wendyk@gmail.com', '$2y$10$OIieW02tABwpntznsAZ/HeMDHXPIiSzgii/p3dSOxBKtOVSILg8Na', 'other', 'college', 'indiana', 'I\'m wendy.', 0),
('wmkwok', 'wendy kwok', 'wmkwok95@gmail.com', '$2y$10$3wN3WvzqjsBiQdnR4FwfteJlrbvqLFBBKojIooWUVUY5QzYet..4W', 'other', 'college', 'indiana', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`filename`),
  ADD KEY `uploadedBy` (`uploadedBy`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`name`,`filename`),
  ADD KEY `filename` (`filename`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `uploadname` FOREIGN KEY (`uploadedBy`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`filename`) REFERENCES `files` (`filename`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
