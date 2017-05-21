-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 08:42 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credentials`
--

-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE `debtors` (
  `id` int(12) NOT NULL,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`id`, `first_name`, `second_name`, `status`) VALUES
(0, 'Shad', 'Kobimbo', 'Active'),
(1, 'Ochieng', 'Kobimbo', 'Domant');

-- --------------------------------------------------------

--
-- Table structure for table `debtstatus`
--

CREATE TABLE `debtstatus` (
  `First_name` text NOT NULL,
  `second_name` text NOT NULL,
  `phone_number` int(12) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `debt_status` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtstatus`
--

INSERT INTO `debtstatus` (`First_name`, `second_name`, `phone_number`, `user_id`, `debt_status`, `address`) VALUES
('Jimmy', 'James', 719463934, 'A823992', 'NEGATIVE', '123 kiSUMU');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `email` varchar(120) NOT NULL,
  `passwrd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passwrd`) VALUES
(1, 'dev001', 'devtest001'),
(15, '', ''),
(16, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `debtors`
--
ALTER TABLE `debtors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debtstatus`
--
ALTER TABLE `debtstatus`
  ADD PRIMARY KEY (`phone_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
