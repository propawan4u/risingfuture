-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 05:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `cycle`
--

CREATE TABLE `cycle` (
  `cid` int(11) NOT NULL,
  `uID` int(11) NOT NULL,
  `x3` int(11) DEFAULT NULL,
  `x4` int(11) DEFAULT NULL,
  `amt_in_x3` int(11) DEFAULT NULL,
  `amt_in_x4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cycle`
--

INSERT INTO `cycle` (`cid`, `uID`, `x3`, `x4`, `amt_in_x3`, `amt_in_x4`) VALUES
(1, 1, 1001, 1001, 200, 200),
(47, 71, 9970, 9970, 200, 200),
(48, 72, 7272, 7272, 200, 200),
(49, 73, 2313, 2313, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `cycle_x3`
--

CREATE TABLE `cycle_x3` (
  `x3id` int(11) NOT NULL,
  `cx3id` int(11) NOT NULL,
  `b1` int(11) DEFAULT NULL,
  `b2` int(11) DEFAULT NULL,
  `b3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cycle_x3`
--

INSERT INTO `cycle_x3` (`x3id`, `cx3id`, `b1`, `b2`, `b3`) VALUES
(1, 1, 9970, NULL, NULL),
(47, 47, 7272, NULL, NULL),
(48, 48, 2313, NULL, NULL),
(49, 49, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cycle_x4`
--

CREATE TABLE `cycle_x4` (
  `x4id` int(11) NOT NULL,
  `cx4id` int(11) NOT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cycle_x4`
--

INSERT INTO `cycle_x4` (`x4id`, `cx4id`, `level`, `branch`, `position`, `usr_id`) VALUES
(1, 1, '1', 'L', '1', 9970),
(67, 47, '1', 'L', '1', 7272),
(68, 1, '1', 'R', '2', 7272),
(69, 48, '1', 'L', '1', 2313),
(70, 47, '1', 'R', '2', 2313),
(71, 1, '2', 'L', '3', 2313),
(72, 49, NULL, NULL, NULL, NULL),
(73, 48, NULL, NULL, NULL, NULL),
(74, 47, NULL, NULL, NULL, NULL),
(75, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manage_slots`
--

CREATE TABLE `manage_slots` (
  `sid` int(11) NOT NULL,
  `slot_name` varchar(100) DEFAULT NULL,
  `slot_value` int(11) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_slots`
--

INSERT INTO `manage_slots` (`sid`, `slot_name`, `slot_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Slot-1', 500, '1', '2020-09-19 07:28:09', '2020-09-19 07:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_slots`
--

CREATE TABLE `purchased_slots` (
  `pid` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `slotID` int(11) DEFAULT NULL,
  `purchase_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased_slots`
--

INSERT INTO `purchased_slots` (`pid`, `user_ID`, `slotID`, `purchase_at`) VALUES
(1, 1001, 1, '2020-09-19 07:27:44'),
(39, 9970, 1, '2020-09-20 12:20:42'),
(40, 7272, 1, '2020-09-20 12:23:56'),
(41, 2313, 1, '2020-09-20 12:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `redeem_points`
--

CREATE TABLE `redeem_points` (
  `rid` int(11) NOT NULL,
  `new_user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `joined_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redeem_points`
--

INSERT INTO `redeem_points` (`rid`, `new_user_id`, `points`, `joined_at`, `updated_at`) VALUES
(1, 9970, 100, '2020-09-20 12:20:42', '2020-09-20 12:20:42'),
(2, 7272, 100, '2020-09-20 12:23:56', '2020-09-20 12:23:56'),
(3, 2313, 100, '2020-09-20 12:26:52', '2020-09-20 12:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `transactions_details`
--

CREATE TABLE `transactions_details` (
  `wid` int(11) NOT NULL,
  `request_amt` int(11) NOT NULL,
  `debit` decimal(10,0) DEFAULT NULL,
  `credit` decimal(10,0) DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions_details`
--

INSERT INTO `transactions_details` (`wid`, `request_amt`, `debit`, `credit`, `status`, `created_at`, `updated_at`) VALUES
(1, 500, '1', '71', '0', '2020-09-20 12:20:42', '2020-09-20 12:20:42'),
(2, 100, '71', '1', '0', '2020-09-20 12:20:42', '2020-09-20 12:20:42'),
(3, 200, '71', '1', '0', '2020-09-20 12:20:42', '2020-09-20 12:20:42'),
(4, 200, '71', '1', '0', '2020-09-20 12:20:42', '2020-09-20 12:20:42'),
(5, 500, '71', '72', '0', '2020-09-20 12:23:56', '2020-09-20 12:23:56'),
(6, 100, '72', '1', '0', '2020-09-20 12:23:56', '2020-09-20 12:23:56'),
(7, 200, '72', '71', '0', '2020-09-20 12:23:56', '2020-09-20 12:23:56'),
(8, 200, '72', '1', '0', '2020-09-20 12:23:56', '2020-09-20 12:23:56'),
(9, 500, '72', '73', '0', '2020-09-20 12:26:52', '2020-09-20 12:26:52'),
(10, 100, '73', '1', '0', '2020-09-20 12:26:52', '2020-09-20 12:26:52'),
(11, 200, '73', '72', '0', '2020-09-20 12:26:52', '2020-09-20 12:26:52'),
(12, 200, '73', '1', '0', '2020-09-20 12:26:52', '2020-09-20 12:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `uid` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `userID` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `wallet` double DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `join_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `parent_id`, `name`, `role`, `email`, `contact`, `userID`, `password`, `balance`, `wallet`, `status`, `join_at`, `updated_at`) VALUES
(1, NULL, 'Admin', '1', 'admin@risingfuture.com', 9876543211, '1001', '698d51a19d8a121ce581499d7b701668', 200, 9500, '1', '2020-09-19 07:25:09', '2020-09-20 12:26:52'),
(71, 1001, 'Kadeem Vasquez', '2', 'qomole@mailinator.com', 9876543212, '9970', '698d51a19d8a121ce581499d7b701668', 200, 9500, '1', '2020-09-20 12:20:42', '2020-09-20 12:23:56'),
(72, 9970, 'Tobias Stevens', '2', 'zerisalybe@mailinator.com', 9876543214, '7272', '698d51a19d8a121ce581499d7b701668', 200, 9500, '1', '2020-09-20 12:23:56', '2020-09-20 12:26:52'),
(73, 7272, 'Britanni Kerr', '2', 'giheny@mailinator.com', 9876543215, '2313', 'a0845f6123cde73d218c375817c81083', NULL, NULL, '1', '2020-09-20 12:26:52', '2020-09-20 12:26:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cycle`
--
ALTER TABLE `cycle`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `uID` (`uID`);

--
-- Indexes for table `cycle_x3`
--
ALTER TABLE `cycle_x3`
  ADD PRIMARY KEY (`x3id`),
  ADD KEY `cx4id` (`cx3id`);

--
-- Indexes for table `cycle_x4`
--
ALTER TABLE `cycle_x4`
  ADD PRIMARY KEY (`x4id`),
  ADD KEY `cx4id` (`cx4id`);

--
-- Indexes for table `manage_slots`
--
ALTER TABLE `manage_slots`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `purchased_slots`
--
ALTER TABLE `purchased_slots`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `redeem_points`
--
ALTER TABLE `redeem_points`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `transactions_details`
--
ALTER TABLE `transactions_details`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cycle_x3`
--
ALTER TABLE `cycle_x3`
  MODIFY `x3id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cycle_x4`
--
ALTER TABLE `cycle_x4`
  MODIFY `x4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `manage_slots`
--
ALTER TABLE `manage_slots`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchased_slots`
--
ALTER TABLE `purchased_slots`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `redeem_points`
--
ALTER TABLE `redeem_points`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions_details`
--
ALTER TABLE `transactions_details`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cycle`
--
ALTER TABLE `cycle`
  ADD CONSTRAINT `cycle_ibfk_1` FOREIGN KEY (`uID`) REFERENCES `user_registration` (`uid`);

--
-- Constraints for table `cycle_x3`
--
ALTER TABLE `cycle_x3`
  ADD CONSTRAINT `cycle_x3_ibfk_1` FOREIGN KEY (`cx3id`) REFERENCES `cycle` (`cid`);

--
-- Constraints for table `cycle_x4`
--
ALTER TABLE `cycle_x4`
  ADD CONSTRAINT `cycle_x4_ibfk_1` FOREIGN KEY (`cx4id`) REFERENCES `cycle` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
