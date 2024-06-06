-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 11:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `pwd`, `datetime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2024-05-09 13:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL DEFAULT 0,
  `vid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `staff_id`, `vid`, `comment`, `datetime`) VALUES
(1, 0, 3, 'dddd', '2024-05-09 19:05:06'),
(2, 0, 3, 'rtrtr', '2024-05-09 19:05:38'),
(3, 0, 3, 'urtyr', '2024-05-09 19:10:24'),
(4, 0, 4, 'rtyhr', '2024-05-09 19:10:29'),
(5, 0, 3, 'wew', '2024-05-09 19:27:43'),
(6, 0, 6, 'nice', '2024-05-09 19:33:59'),
(7, 0, 4, 'rtr', '2024-05-10 11:05:40'),
(8, 0, 3, 'dfss', '2024-05-10 11:20:51'),
(9, 0, 3, 'sds', '2024-05-10 11:20:53'),
(10, 0, 5, 'pretty', '2024-05-10 11:21:14'),
(11, 0, 8, 'tds', '2024-05-10 11:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `pwd` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`id`, `username`, `status`, `pwd`, `datetime`) VALUES
(1, 'priya', 1, '1253208465b1efa876f982d8a9e73eef', '2024-05-09 13:03:59'),
(2, 'raja', 1, '1253208465b1efa876f982d8a9e73eef', '2024-05-09 13:03:59'),
(3, 'raju', 1, '1253208465b1efa876f982d8a9e73eef', '2024-05-09 13:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `usename` varchar(500) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `cname`, `phone`, `usename`, `pwd`, `status`, `datetime`) VALUES
(1, 'dfd', 'dfd', 'dfd', 'dfd', 'd926d7bb9ccf46fc04a61bd65d87b9b3', 0, '2024-05-09 19:27:58'),
(2, 'dfd', 'dfd', 'dfd', 'dfd', 'd926d7bb9ccf46fc04a61bd65d87b9b3', 1, '2024-05-09 19:25:52'),
(3, 'styd', 'styd', 'styd', 'styd', 'ce4ef4ec4952fd4d76b730fa17c61274', 1, '2024-05-09 17:07:50'),
(4, 'wsd', 'sds', 'sds', 'sds', '82d5984c2a2ad4c62caf1dd073b1c91c', 1, '2024-05-09 17:08:28'),
(5, 'df', 'dfd', 'dfdsf', 'dfd', 'd926d7bb9ccf46fc04a61bd65d87b9b3', 1, '2024-05-09 17:08:50'),
(6, 'dff', 'dfd', 'dfd', 'dfd', 'd926d7bb9ccf46fc04a61bd65d87b9b3', 1, '2024-05-09 17:09:30'),
(7, 'priya', 'FIRST', '907896798', 'priya', '0b1c8bc395a9588a79cd3c191c22a6b4', 1, '2024-05-09 17:38:22'),
(8, 'elizabeth', 'fdfs', '54645645', '54645645', '67e098017046a2851fb19eab7471689f', 1, '2024-05-09 17:44:01'),
(9, 'fff', 'sds', '343', '343', '7ded3c52fbf9c2f653804ba7ea235eed', 1, '2024-05-09 17:56:15'),
(10, 'jothi', 'jothi', '97823232', '97823232', '8d974431629fe6d026b5fb2c470366fc', 1, '2024-05-09 18:18:03'),
(11, 'rtt', 'trrr', '234', '234', '418547201df0b759c15bdbcf93dc7e16', 1, '2024-05-09 18:36:29'),
(12, 'win', 'win', '56780', '56780', '9d053e058a4201f201fd1122ecd4c945', 1, '2024-05-10 11:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `datatime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `sid`, `staff_id`, `name`, `status`, `datatime`) VALUES
(1, 0, 0, 'Screenshot (20).png', 1, '0000-00-00 00:00:00'),
(2, 0, 0, '2.png', 1, '0000-00-00 00:00:00'),
(3, 10, 1, '2.png', 1, '2024-05-10 11:02:12'),
(4, 10, 2, '1.png', 1, '2024-05-10 11:03:31'),
(5, 10, 1, '3.png', 1, '2024-05-10 11:03:35'),
(6, 12, 0, '1.png', 1, '2024-05-09 19:33:40'),
(7, 12, 3, '1.png', 1, '2024-05-10 11:23:34'),
(8, 12, 2, '1.png', 1, '2024-05-10 11:25:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
