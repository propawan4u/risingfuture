-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 03:11 PM
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
-- Table structure for table `manage_slots`
--

CREATE TABLE `manage_slots` (
  `id` int(11) NOT NULL,
  `slot_name` varchar(255) DEFAULT NULL,
  `slot_value` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updation_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_slots`
--

INSERT INTO `manage_slots` (`id`, `slot_name`, `slot_value`, `status`, `creation_date`, `updation_date`) VALUES
(1, 'Firstt', 4002, 1, '2020-09-02 11:39:16', '2020-09-02 13:07:17'),
(2, 'aefewsz', 26652, 2, '2020-09-02 12:35:52', '2020-09-02 13:06:56');

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
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `uid` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '2 = User',
  `parent_id` int(11) DEFAULT NULL,
  `user_name` int(11) DEFAULT NULL,
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
  `btc_address` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `role`, `parent_id`, `user_name`, `password`, `name`, `address`, `email`, `contact`, `alt_contact`, `wallet`, `status`, `created_date`, `updated_date`, `bank_name`, `account_no`, `account_holder_name`, `bank_ifsc`, `btc_address`, `profile`) VALUES
(1, 1, NULL, 123, 'hr', 'Admin', 'Kanpur', 'admin@gmail.com', 1236547890, 32106547899, 0, 1, '2020-09-02 16:56:16', '2020-09-02 17:02:10', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 123, 6196, 'a15d0270aae0cfa1e1a4ec6fb6f40d3e', 'name', 'sdfgh', 'name@gmail.com', 1230654789, 2365987410, 0, 1, '2020-09-02 17:02:50', '2020-09-02 17:23:10', 'qswahy', 15415745, 'asdfghdswqdfh', 'qwdf14531', '', '5620200902download.jfif'),
(4, 2, 123, 5030, 'b673ed011cfb3c810010abed6f3a034b', 'name', 'Kanpur', 'namewe@gmail.com', 2365987410, 1234567890, 0, 1, '2020-09-02 17:23:13', '2020-09-02 17:23:13', 'bank', 2154545545, 'bankname', 'swde25', '', '8820200902baelen.jpg'),
(5, 2, 123, 6066, '75639ebffd530f09cf29eb0efb05a3d0', 'testee', 'dfgbh', 'testee@gmail.com', 2563014789, 9632587410, 0, 1, '2020-09-02 17:24:11', '2020-09-02 17:24:11', 'wsdefgh', 2561564681, 'dgh', 'asfdcv165', '', '5120200902gettyimages-507910624-612x612.jpg'),
(6, 2, 6196, 4051, '9f2a7be7307a257fba74ce8a62630299', 'luguq', 'asdvgfbh', 'syhetemak@mailinator.com', 9658741230, 9876543121, 0, 1, '2020-09-02 18:17:59', '2020-09-02 18:17:59', 'sderfgthj', 1456416541, 'dfghjnm', 'AFSWC46565', 'asf', '7020200902gettyimages-507910624-612x612.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_slots`
--
ALTER TABLE `manage_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_slots`
--
ALTER TABLE `manage_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
