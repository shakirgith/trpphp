-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2023 at 11:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `Title`, `Name`, `Email`, `Subject`, `Message`) VALUES
(22, '', 'Suresh Sharma', 'suresh@webcontxt.com', 'Design for Event', 'The North East Food Fest 2023 was organised at Guwahati, Assam by Ministry of Food Processing Industries in association with Assam Industrial Development Corporation Limited (AIDC) and Indian Chamber of Commerce on 29th, 30th  and 31st  March 2023.'),
(24, '', 'Kuldip', 'Kuldip@gmail.com', 'No Access other PC', 'Secretary, Ministry of Food Processing Industries, Smt. Anita Praveen chaired a roundtable interaction with packaging & machinery companies on 23st March 2023 at Vigyan Bhawan Annexe, New Delhi.'),
(36, '', 'Sunil Sharma', 'sunil@gmail.com', 'trp contacts data test', 'sdte'),
(59, 'mr', 'Sunil Sharma', 'sunil@gmail.com', 'trp contacts data test', 'test'),
(62, 'mr', 'Shakir Ansari', 'shakir@webcontxt.com', 'print work', 'test message'),
(61, 'mrs', 'Shushila Sharma', 'shushila@gmail.com', 'test subjects', 'We always want to hear from you! Let us know how we can best help you and we’ll do our very best.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
