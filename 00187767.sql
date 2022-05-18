-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 12:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `00187767`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(100) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `username` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `fullname`, `email`, `password`, `address`, `postcode`, `dob`, `username`) VALUES
(1, 'Pashani Jaulani', 'pashanijaulani@gmail.com', 'fa1e981496a605f19e55a5a1cc09eb943f7b3de7', '1125 Furngroove off mungwi road lusaka west', '10101', '08/08/96', 'botmon'),
(2, ' pashani jaulani', 'jaulani@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1125 Furngroove off mungwi road lusaka west', '1010', '29/03/74', 'nosiku'),
(3, 'pashani jaulani', 'pashanijaulani@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1125 Furngroove off mungwi road lusaka west', '10101', '08/08/96', 'nosiku1'),
(4, 'pashani jaulani', 'pashanijaulani@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1125 Furngroove off mungwi road lusaka west', '10101', '19/03/96', 'nosiku2'),
(5, 'pashani jaulani', 'pashanijaulani@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1125 Furngroove off mungwi road lusaka west', '10101', '19/08/96', 'nosiku12'),
(6, ' Pashani jaulani', 'pashanijaulani@gmail.com', 'c96a0d326e9e813879574687843f61289a71d12d', '1125 Furngroove off mungwi road lusaka west', '10101', '19/08/96', 'nosiku13'),
(7, ' pashani jaulani', 'pashanijaulani@gmail.com', 'c96a0d326e9e813879574687843f61289a71d12d', '1125 Furngroove off mungwi road lusaka west', '10101', '08/08/96', 'nosiku14');

-- --------------------------------------------------------

--
-- Table structure for table `emailupdates`
--

CREATE TABLE `emailupdates` (
  `email_ID` int(255) NOT NULL,
  `email_Address` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailupdates`
--

INSERT INTO `emailupdates` (`email_ID`, `email_Address`) VALUES
(48, 'pashanijaulani@gmail.com'),
(49, 'pashanijaulani@gmail.com'),
(50, 'pashani@yahoo.com'),
(51, 'pashani@yahoo.com'),
(52, 'pashanijaulani@gmail.com'),
(53, 'pashanijaulani@gmail.com'),
(54, 'pashanijaulani@gmail.com'),
(55, 'lameck_sikumba@yahoo.com'),
(56, 'lameck_sikumba@yahoo.com'),
(57, 'pashanijaulani@gmail.com'),
(58, 'pashanijaulani@gmail.com'),
(59, 'pashanijaulani@gmail.com'),
(60, 'pashanijaulani@gmail.com'),
(61, 'pashanijaulani@gmail.com'),
(62, 'pashanijaulani@gmail.com'),
(63, 'pashanijaulani@gmail.com'),
(64, 'pashanijaulani@gmail.com'),
(65, 'pashanijaulani@gmail.com'),
(66, 'pashanijaulani@gmail.com'),
(67, 'pashanijaulani@gmail.com'),
(68, 'lameck_sikumba@yahoo.com'),
(69, 'pashani@gmail.com'),
(70, 'pashanitest@yahoo.com'),
(71, 'pashani@yahoo.com'),
(72, 'pashani@yahoo.com'),
(73, 'punkalimo'),
(74, 'lameck_sikumba@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `loginlimit`
--

CREATE TABLE `loginlimit` (
  `ID` int(11) NOT NULL,
  `ipAddress` varbinary(16) NOT NULL,
  `loginTime` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlimit`
--

INSERT INTO `loginlimit` (`ID`, `ipAddress`, `loginTime`) VALUES
(484, 0x3a3a31, 1598003184);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(100) NOT NULL,
  `username` varchar(65) NOT NULL,
  `post` varchar(255) NOT NULL,
  `datePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QUID` int(150) NOT NULL,
  `email` varchar(75) NOT NULL,
  `question` varchar(500) NOT NULL,
  `postDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QUID`, `email`, `question`, `postDate`) VALUES
(26, 'pashanijaulani@gmail.com', 'what should i look for when buying a testing kit', '2020-08-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `emailupdates`
--
ALTER TABLE `emailupdates`
  ADD PRIMARY KEY (`email_ID`);

--
-- Indexes for table `loginlimit`
--
ALTER TABLE `loginlimit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QUID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `emailupdates`
--
ALTER TABLE `emailupdates`
  MODIFY `email_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `loginlimit`
--
ALTER TABLE `loginlimit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QUID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
