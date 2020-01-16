-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 11:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `qualification_details`
--

CREATE TABLE `qualification_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `Passing_year` year(4) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `univercity_name` varchar(255) NOT NULL,
  `univercity` varchar(255) NOT NULL,
  `Marks` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification_details`
--

INSERT INTO `qualification_details` (`id`, `Passing_year`, `Course`, `univercity_name`, `univercity`, `Marks`, `created_at`, `update_at`) VALUES
(1, 2019, 'BE(CSE)', 'Technocrats Institute Of Technology & Science Bhopal', 'RGPV', 75.6, '2020-01-09 10:09:23', '2020-01-09 10:09:23'),
(2, 2014, '12th', 'Fommans Memoriyal School Rewa', 'MP Board', 60, '2020-01-09 11:08:19', '2020-01-09 11:08:19'),
(3, 2012, '10th', 'Central Academy School Rewa', 'CBSE Board', 56, '2020-01-09 11:09:57', '2020-01-09 11:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'core php', '2020-01-09 10:03:56', '2020-01-09 10:03:56'),
(2, 'HTML', '2020-01-09 11:42:18', '2020-01-09 11:42:18'),
(3, 'CSS', '2020-01-09 11:42:28', '2020-01-09 11:42:28'),
(4, 'Java Script', '2020-01-09 11:42:48', '2020-01-09 11:42:48'),
(5, 'Bootstrap', '2020-01-09 11:43:00', '2020-01-09 11:43:00'),
(6, 'Mysql', '2020-01-09 11:43:19', '2020-01-09 11:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `father_name`, `DOB`, `mobile`, `email`, `address`, `created_at`, `update_at`) VALUES
(1, 'Ashutosh Tiwari', 'mr. Rajvendra Pd. Tiwari', '1996-12-03', '8358981855', 'yurgodashu@gmail.com', 'Mahabali nagar kolar road bhopal', '2020-01-09 10:02:27', '2020-01-09 10:02:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualification_details`
--
ALTER TABLE `qualification_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `qualification_details`
--
ALTER TABLE `qualification_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
