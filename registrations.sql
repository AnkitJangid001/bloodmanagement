-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 09:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodsamples`
--

CREATE TABLE `bloodsamples` (
  `id` int(11) NOT NULL,
  `hospitalname` varchar(40) NOT NULL,
  `blood` text NOT NULL,
  `hospitalid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodsamples`
--

INSERT INTO `bloodsamples` (`id`, `hospitalname`, `blood`, `hospitalid`) VALUES
(13, 'manish', 'A+', 9),
(14, 'manish', 'B+', 9),
(15, 'manish', 'O-', 9),
(16, 'manish', 'AB+', 9),
(17, 'manish', 'A+', 9),
(18, 'manish', 'select', 9),
(19, 'manish', 'B+', 9),
(20, 'manish', 'A+', 9);

-- --------------------------------------------------------

--
-- Table structure for table `regr`
--

CREATE TABLE `regr` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `blood` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regr`
--

INSERT INTO `regr` (`id`, `username`, `email`, `password`, `type`, `blood`) VALUES
(20, 'mk', 'demo@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'receiver', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`) VALUES
(9, 'manish', 'mk@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'hospital'),
(10, 'kkk', 'adjsajd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'hospital'),
(11, 'ankit', 'Monuj06@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'hospital'),
(12, 'admin', 'jangidankit211@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'hospital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodsamples`
--
ALTER TABLE `bloodsamples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regr`
--
ALTER TABLE `regr`
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
-- AUTO_INCREMENT for table `bloodsamples`
--
ALTER TABLE `bloodsamples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `regr`
--
ALTER TABLE `regr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
