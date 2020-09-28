-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 12:21 PM
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
-- Database: `rising_future`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '1 = Admin\r\n2 = User',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `alt_contact` bigint(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `contact`, `alt_contact`, `address`, `status`, `created_date`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', 'adab7b701f23bb82014c8506d3dc784e', 1234567890, 1234567890, 'Kannpur', 1, '2020-08-29 10:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_registraion`
--

CREATE TABLE `user_registraion` (
  `uid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '2 = User',
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `alt_contact` bigint(20) DEFAULT NULL,
  `wallet` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bank_name` varchar(255) DEFAULT NULL,
  `account_no` bigint(20) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `bank_ifsc` varchar(255) DEFAULT NULL,
  `btc_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registraion`
--

INSERT INTO `user_registraion` (`uid`, `userID`, `role`, `password`, `name`, `address`, `email`, `contact`, `alt_contact`, `wallet`, `status`, `created_date`, `updated_date`, `bank_name`, `account_no`, `account_holder_name`, `bank_ifsc`, `btc_address`) VALUES
(1, 101, 2, '202cb962ac59075b964b07152d234b70', 'Pawan', 'kanpur', 'pwn@gmail.com', 9876543212, NULL, 500, 1, '2020-08-31 12:27:46', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(2, 45380, 2, '3567cb56b21b2002242dd83189c69b58', 'swadgfh', '541dsfvxd', 'qwsedhg@gmail.com', 1234567890, 1234567890, 0, 2, '2020-08-31 13:03:12', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(3, 41927, 2, '6079012e410176453cbb3274cfe14bac', 'swadgfh', '541dsfvxd', 'qwsedhg@gmail.com', 1234567890, 1234567890, 0, 1, '2020-08-31 13:03:55', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(4, 92017, 2, 'e6b79b07758adad778aaf4214496e6e1', 'swadgfh', '541dsfvxd', 'qwsedhg@gmail.com', 1234567890, 1234567890, 0, 1, '2020-08-31 13:10:56', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(5, 50463, 2, '2448f2e32fb414cf1bb6d5ff945a48f4', 'swadgfh', '541dsfvxd', 'dfg@gmail.com', 1234567890, 1234567890, 0, 1, '2020-08-31 13:14:41', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(6, 4867, 2, 'f7c4382ef2abd84bbe5297f34f5e3ae4', 'swadgfh', '21sdfgb', 'asdfgh@gmail.com', 1230456789, 1230456789, 0, 2, '2020-08-31 13:17:00', '2020-08-31 13:45:19', NULL, NULL, NULL, NULL, ''),
(7, 21487, 2, '06105c85f981efa401be2fb19ae27fbe', 'swadgfh', '21sdfgb', 'sdc@gmail.com', 1230456789, 1230456789, 0, 1, '2020-08-31 13:17:28', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(8, 19135, 2, '9493def6e3654e282ae77a93d6f784de', 'swadgfh', '21sdfgb', 'r5ty@gmail.com', 1230456789, 1230456789, 0, 1, '2020-08-31 13:18:04', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, ''),
(9, 7684, 2, '9d6d0150b014dec6a41da1cd389455c6', 'swadgfh', '21sdfgb', 'oii@gmail.com', 1234567890, 1230456789, 0, 1, '2020-08-31 13:44:09', '2020-08-31 13:44:09', NULL, NULL, NULL, NULL, NULL),
(10, 4323, 2, 'd3d0b83accadaea98c2067b460b00c5d', 'swadgfh', '21sdfgb', 'ft@gmail.com', 1234567890, 1230456789, 0, 1, '2020-08-31 13:44:36', '2020-08-31 13:44:36', NULL, NULL, NULL, NULL, NULL),
(11, 7344, 2, '48d086c253bb8d866e7d5ba8414a5943', 'swadgfh', '21sdfgb', 'sdfg@gmail.com', 1234567890, 1230456789, 0, 1, '2020-08-31 13:45:00', '2020-08-31 13:45:00', NULL, NULL, NULL, NULL, NULL),
(12, 9164, 2, '7fcfe08f607be8a5080919cac82eb78a', 'DCS', '5415DXFGV', 'aqSDCVFBN@GMAIL.COM', 1234567891, 1234567890, 0, 1, '2020-08-31 14:06:53', '2020-08-31 14:06:53', 'SDACVC', 515, 'SDCFSD', 'A5W1SD5', 'A5SDC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registraion`
--
ALTER TABLE `user_registraion`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registraion`
--
ALTER TABLE `user_registraion`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
