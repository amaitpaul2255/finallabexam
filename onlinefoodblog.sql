-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 09:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefoodblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `resinfo`
--

CREATE TABLE `resinfo` (
  `resname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restudentinfo`
--

CREATE TABLE `restudentinfo` (
  `id` int(30) NOT NULL,
  `resname` varchar(30) NOT NULL,
  `distic` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restudentinfo`
--

INSERT INTO `restudentinfo` (`id`, `resname`, `distic`, `place`) VALUES
(1, 'Food Panda', 'Dhaka', 'khilkhet'),
(2, 'Pritom', 'Dhaka', 'Nikunja');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `contact`, `type`) VALUES
(1, 'a', 'a', 'a', '01778521463', 'admin'),
(2, 'b', 'b', 'b', '0177541236', 'user'),
(4, 'admin', 'admin12', 'admin', '01775111111', 'admin'),
(5, 'bb', 'bb', 'bb', '01777866555', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resinfo`
--
ALTER TABLE `resinfo`
  ADD PRIMARY KEY (`resname`);

--
-- Indexes for table `restudentinfo`
--
ALTER TABLE `restudentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restudentinfo`
--
ALTER TABLE `restudentinfo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
