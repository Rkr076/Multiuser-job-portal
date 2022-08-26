-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 11:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `cv` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `userid`, `jobid`, `cv`, `date`) VALUES
(10, 1, 10, '2022_08_05_12_17_47 (1).pdf', '2022-08-11'),
(11, 1, 6, '2022_08_05_12_17_47 (1).pdf', '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `name`) VALUES
(7, 'information technology'),
(9, 'designer'),
(12, 'marketing');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `name`, `description`, `skill`, `timing`, `date`, `salary`, `location`, `catid`) VALUES
(4, 'ui/ux', 'dhsjksfhjkshfhslfkhfhklsaf', 'figma', '9 to 6', '0000-00-00', 20000, 'patna', 9),
(5, 'php', 'adadfafaaf', 'oops php', '11 to 5', '0000-00-00', 15000, 'bengluru', 7),
(6, 'laravel developer', 'fasafgsgsg', 'laravel', '9 to 6', '0000-00-00', 20000, 'patna', 7),
(7, 'asp.net developer', 'problem solving, manage code, debug', 'asp.net', '10 to 6', '0000-00-00', 20000, 'patna', 7),
(8, 'technical consultant', 'worked on live projects,hands on exp.', 'html,mysql,php,zend,symphony', '10 to 5', '2022-08-07', 50000, 'delhi', 7),
(9, 'testing', 'selenium ,quality testing', 'html,mysql', '11 to 5', '2022-08-07', 20000, 'patna', 7),
(10, 'testing', 'selenium ,quality testing', 'html,mysql', '11 to 5', '2022-08-07', 20000, 'patna', 7),
(11, 'aws developer', 'hands on exp in cloud practicioner', 'aws.gcp,clioud,git', '10 to 5', '2022-08-07', 60000, 'bengluru', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roletype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `password`, `roletype`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123', 2),
(2, 'suman', 'suman@gmail.com', 'Suman@123', 1),
(3, 'subham', 'subham@gmail.com', 'Subham@123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
