-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 01:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interior`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_details`
--

CREATE TABLE `user_contact_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contact_details`
--

INSERT INTO `user_contact_details` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 'neha', 'kumari', 'nehakumarigupta2322@gmail.com', 8294372130, 'AMARI ANANT BIGHA', '2024-06-22 16:29:56', 'user', '2024-06-22 16:29:56', 'user'),
(2, 'neha', 'kumari', 'nehakumarigupta2322@gmail.com', 8102086224, 'kormangala', '2024-06-22 16:37:52', 'user', '2024-06-22 16:37:52', 'user'),
(3, 'nature_of', 'work', 'manu@gmail.com', 9876543234, 'hffgdfg', '2024-06-22 16:40:24', 'user', '2024-06-22 16:40:24', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
