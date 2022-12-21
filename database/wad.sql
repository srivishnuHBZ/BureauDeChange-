-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 08:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `currency_code` varchar(11) NOT NULL,
  `qtt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `currency_code`, `qtt`) VALUES
(1, 'usd', 90),
(2, 'eur', 100),
(3, 'sgd', 108),
(4, 'aud', 350),
(5, 'idr', 0),
(6, 'bdt', 120),
(7, 'jpy', 120),
(8, 'cny', 20),
(9, 'hkd', 20),
(10, 'krw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `contact` longtext NOT NULL,
  `usd` int(11) NOT NULL DEFAULT 0,
  `eur` int(11) NOT NULL DEFAULT 0,
  `sgd` int(11) NOT NULL DEFAULT 0,
  `aud` int(11) NOT NULL DEFAULT 0,
  `idr` int(11) NOT NULL DEFAULT 0,
  `bdt` int(11) NOT NULL DEFAULT 0,
  `jpy` int(11) NOT NULL DEFAULT 0,
  `cny` int(11) NOT NULL DEFAULT 0,
  `hkd` int(11) NOT NULL DEFAULT 0,
  `krw` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `email`, `contact`, `usd`, `eur`, `sgd`, `aud`, `idr`, `bdt`, `jpy`, `cny`, `hkd`, `krw`) VALUES
(1, 'Kloon', 'theloon789123@gmail.com', '123123123', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'LN', '123abc@gmail.com', '123123', 100, 100, 3, 5, 3, 3, 3, 3, 3, 123),
(3, 'jhg', 'hgjhg@hjkkj', '658768', 0, 0, 12, 0, 120, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
