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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `fname`, `mobile`, `email`, `password`, `cpassword`) VALUES
(4, 'Mr', 'Shakir', '9789798878', 'shakir@gmail.com', 'shakir', 'shakir'),
(7, 'Mrs', 'Surabhi', '9979878789', 'surabhi@gmail.com', '$2y$10$nFv7Y9u4thJgGYEx9KnTHuQyTZgk.OA0OvWNzWRfhzDymqvNcOt8e', '$2y$10$L1clgufEosah6oPuuDT13.UV19rbrlrhktlBcKgWJ9xn0VoKj.E1e'),
(8, 'Mrs', 'sunita', '979879878979', 'sunita@gmail.com', '$2y$10$y/yp8uhz9xfPBKMvaAgd4.RUDuN1OhHtUbcAGADZrRsbrQ11s5Mda', '$2y$10$fEGvidW25jdiCKqmDb5fae0y3nmo9AQeU9QEHBFpAjAs993bsM0oq'),
(14, 'Mr', 'gaurav', '97987979797', 'gaurav@gmail.com', '$2y$10$VefYDyxFCx6B0DdB3isR1O.EOEeinACRYOgCcxi7VUC5Gi5SP1XUe', '$2y$10$3oP/n6hmuTbOpwzLdi5ynOdjyHLlEqHPUIYojqlwRas8OacoeT6LK'),
(15, 'Mr', 'Suresh Akode', '97979798797', 'suresh@gmail.com', '$2y$10$if6jA4./39HZbwwi9f1UBOj0eESVDwKHbR8Z2vl9uJIBT/xWKS79y', '$2y$10$9lPEPOboakSOWmUHGH2qUuLpnXG4Iwj3PuprUyML/owA9NS.fqnDi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
