-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2021 at 06:55 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babiprix`
--

-- --------------------------------------------------------

--
-- Table structure for table `commune`
--

CREATE TABLE `commune` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commune`
--

INSERT INTO `commune` (`id`, `name`) VALUES
(1, 'Yopougon'),
(2, 'Yopougon');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `dat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `commune` varchar(20) NOT NULL,
  `product` varchar(40) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `IP`, `dat`, `commune`, `product`, `price`) VALUES
(1, '127.0.0.10', '2021-08-26 18:29:24', 'Cocody', 'ananas', 200),
(28, '127.0.0.1', '2021-08-27 10:19:09', 'Cocody', 'ananas', 155),
(29, '', '2021-09-03 16:29:13', 'Cocody', 'taxi', 1000),
(30, '127.0.0.1', '2021-09-03 16:32:22', 'Cocody', 'taxi', 1000),
(31, '127.0.0.1', '2021-09-06 16:39:22', 'Adjame', 'taxi', 1000),
(32, '', '2021-09-08 16:08:47', 'Cocody', 'gbaka', 300),
(33, '', '2021-09-08 16:09:21', 'Cocody', 'boat', 200),
(34, '127.0.0.1', '2021-09-08 16:09:38', 'Cocody', 'gbaka', 4000),
(35, '127.0.0.1', '2021-09-09 09:46:08', 'Adjame', 'mangue', 200);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(1, 'ananas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commune`
--
ALTER TABLE `commune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
