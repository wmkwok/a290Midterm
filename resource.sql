-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 05:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
('temp.rtf', 'applezhang', '5, 3, 2017', 5, 'good', 'indiana', 'middle', '----', 'science');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `name` varchar(20) NOT NULL,
  `filename` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('admin2', 'admin2', '1234567890@q.com', '$2y$10$a21sierNxr7TRnrznKlR9eJm8e3BjbzJurWLCiTN8sdjr4Y0NUmJ.', 'private', 'elementary', 'Louisiana', 'ds', 1),
('applezhang', 'iijoijoi', 'apple19950105@qq.com', '$2y$10$9JQWhOI.Ugrno9hmrYTA8OUJLh8g2imMhkC.i4r.DheeLoUKzVSei', 'charter', 'high', 'Arkansas', 'hjh', 0),
('ksdjfbksdfbk', 'sdkfjksdfjb', 'ksdj@qq.com', '$2y$10$3874QTxgjlbhYBqBWUqju.YZZGJnsp5nPTrRXz5AEI8TDGhlgiNPC', 'charter', 'preschool', 'Kentucky', 'xcv', 0),
('sdkfsdlkfb', 'sdhfb', 'sdfkb@q.om', '$2y$10$aVmP5G3e3.9BgVHa3XRJTeOZrVaavhM59Q7AMTTlVwfBIAYt.TFAC', 'private', 'elementary', 'Indiana', '', 0),
('thisisadmin', 'admin', 'asd@qq.com', '$2y$10$FyUlbiLZ6QxUcFBUJ3FwZujtpdbS.hMJkTzxzVMjBbLLH63dsSnb2', 'private', 'middle', 'Louisiana', '', 0),
('zhang435', 'test', 'testing@gmai2.com', '$2y$10$9JQWhOI.Ugrno9hmrYTA8OUJLh8g2imMhkC.i4r.DheeLoUKzVSei', 'public', 'elementary', 'Indiana', 'dsfsfsdfs', 1);

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
