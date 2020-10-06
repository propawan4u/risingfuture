-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2020 at 09:55 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobboqdp_rising_future`
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
(1, 1, 1001, 1001, 200, 200);

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
(1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cycle_x4`
--

CREATE TABLE `cycle_x4` (
  `x4id` int(11) NOT NULL,
  `cx4id` int(11) NOT NULL,
  `partnerID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cycle_x4`
--

INSERT INTO `cycle_x4` (`x4id`, `cx4id`, `partnerID`, `level`, `branch`, `position`, `usr_id`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_2`
--

CREATE TABLE `jumpx4slots_2` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_2`
--

INSERT INTO `jumpx4slots_2` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_3`
--

CREATE TABLE `jumpx4slots_3` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_3`
--

INSERT INTO `jumpx4slots_3` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_4`
--

CREATE TABLE `jumpx4slots_4` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_4`
--

INSERT INTO `jumpx4slots_4` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_5`
--

CREATE TABLE `jumpx4slots_5` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_5`
--

INSERT INTO `jumpx4slots_5` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_6`
--

CREATE TABLE `jumpx4slots_6` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_6`
--

INSERT INTO `jumpx4slots_6` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_7`
--

CREATE TABLE `jumpx4slots_7` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_7`
--

INSERT INTO `jumpx4slots_7` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_8`
--

CREATE TABLE `jumpx4slots_8` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_8`
--

INSERT INTO `jumpx4slots_8` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_9`
--

CREATE TABLE `jumpx4slots_9` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_9`
--

INSERT INTO `jumpx4slots_9` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_10`
--

CREATE TABLE `jumpx4slots_10` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_10`
--

INSERT INTO `jumpx4slots_10` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_11`
--

CREATE TABLE `jumpx4slots_11` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_11`
--

INSERT INTO `jumpx4slots_11` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_12`
--

CREATE TABLE `jumpx4slots_12` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_12`
--

INSERT INTO `jumpx4slots_12` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_13`
--

CREATE TABLE `jumpx4slots_13` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_13`
--

INSERT INTO `jumpx4slots_13` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_14`
--

CREATE TABLE `jumpx4slots_14` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_14`
--

INSERT INTO `jumpx4slots_14` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_15`
--

CREATE TABLE `jumpx4slots_15` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_15`
--

INSERT INTO `jumpx4slots_15` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumpx4slots_16`
--

CREATE TABLE `jumpx4slots_16` (
  `j4id` int(11) NOT NULL,
  `juID` int(11) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `branch` enum('L','R') DEFAULT NULL,
  `position` enum('1','2','3','4','5','6') DEFAULT NULL,
  `juserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumpx4slots_16`
--

INSERT INTO `jumpx4slots_16` (`j4id`, `juID`, `level`, `branch`, `position`, `juserID`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manage_slots`
--

CREATE TABLE `manage_slots` (
  `sid` int(11) NOT NULL,
  `slot_name` varchar(100) DEFAULT NULL,
  `slot_value` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_slots`
--

INSERT INTO `manage_slots` (`sid`, `slot_name`, `slot_value`, `created_at`, `updated_at`) VALUES
(1, 'Slot-1', 500, '2020-10-06 09:35:40', '2020-10-06 09:35:40'),
(2, 'Slot-2', 1000, '2020-10-06 09:35:40', '2020-10-06 09:35:40'),
(3, 'Slot-3', 2000, '2020-10-06 09:35:54', '2020-10-06 09:35:54'),
(4, 'Slot-4', 4000, '2020-10-06 09:36:15', '2020-10-06 09:36:15'),
(5, 'Slot-5', 8000, '2020-10-06 09:36:15', '2020-10-06 09:36:15'),
(6, 'Slot-6', 16000, '2020-10-06 09:36:47', '2020-10-06 09:36:47'),
(7, 'Slot-7', 32000, '2020-10-06 09:36:47', '2020-10-06 09:36:47'),
(8, 'Slot-8', 64000, '2020-10-06 09:37:44', '2020-10-06 09:37:44'),
(9, 'Slot-9', 128000, '2020-10-06 09:37:44', '2020-10-06 09:37:44'),
(10, 'Slot-10', 256000, '2020-10-06 09:38:17', '2020-10-06 09:38:17'),
(11, 'Slot-11', 512000, '2020-10-06 09:38:17', '2020-10-06 09:38:17'),
(12, 'Slot-12', 1024000, '2020-10-06 09:38:43', '2020-10-06 09:38:43'),
(13, 'Slot-13', 2048000, '2020-10-06 09:38:43', '2020-10-06 09:38:43'),
(14, 'Slot-14', 4096000, '2020-10-06 09:39:28', '2020-10-06 09:39:28'),
(15, 'Slot-15', 8192000, '2020-10-06 09:39:28', '2020-10-06 09:39:28'),
(16, 'Slot-16', 16384000, '2020-10-06 09:39:46', '2020-10-06 09:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `parchase_new_slot`
--

CREATE TABLE `parchase_new_slot` (
  `prnid` int(11) NOT NULL,
  `Ju_ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `slot_2` int(11) DEFAULT NULL,
  `slot_3` int(11) DEFAULT NULL,
  `slot_4` int(11) DEFAULT NULL,
  `slot_5` int(11) DEFAULT NULL,
  `slot_6` int(11) DEFAULT NULL,
  `slot_7` int(11) DEFAULT NULL,
  `slot_8` int(11) DEFAULT NULL,
  `slot_9` int(11) DEFAULT NULL,
  `slot_10` int(11) DEFAULT NULL,
  `slot_11` int(11) DEFAULT NULL,
  `slot_12` int(11) DEFAULT NULL,
  `slot_13` int(11) DEFAULT NULL,
  `slot_14` int(11) DEFAULT NULL,
  `slot_15` int(11) DEFAULT NULL,
  `slot_16` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parchase_new_slot`
--

INSERT INTO `parchase_new_slot` (`prnid`, `Ju_ID`, `UID`, `slot_2`, `slot_3`, `slot_4`, `slot_5`, `slot_6`, `slot_7`, `slot_8`, `slot_9`, `slot_10`, `slot_11`, `slot_12`, `slot_13`, `slot_14`, `slot_15`, `slot_16`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchased_slots`
--

CREATE TABLE `purchased_slots` (
  `pid` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `slotID` int(11) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `purchase_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased_slots`
--

INSERT INTO `purchased_slots` (`pid`, `user_ID`, `slotID`, `status`, `purchase_at`) VALUES
(1, 1001, 1, '1', '2020-10-06 09:40:41');

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

-- --------------------------------------------------------

--
-- Table structure for table `restt_purchased_slots`
--

CREATE TABLE `restt_purchased_slots` (
  `rpid` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `slotID` int(11) DEFAULT NULL,
  `p_status` enum('0','1') NOT NULL DEFAULT '0',
  `purchase_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restt_purchased_slots`
--

INSERT INTO `restt_purchased_slots` (`rpid`, `user_ID`, `slotID`, `p_status`, `purchase_at`) VALUES
(1, 1001, 2, '1', '2020-10-06 09:41:24'),
(2, 1001, 3, '1', '2020-10-06 09:41:24'),
(3, 1001, 4, '1', '2020-10-06 09:42:10'),
(4, 1001, 5, '1', '2020-10-06 09:42:10'),
(5, 1001, 6, '1', '2020-10-06 09:42:39'),
(6, 1001, 7, '1', '2020-10-06 09:42:39'),
(7, 1001, 8, '1', '2020-10-06 09:43:09'),
(8, 1001, 9, '1', '2020-10-06 09:43:09'),
(9, 1001, 10, '1', '2020-10-06 09:43:23'),
(10, 1001, 11, '1', '2020-10-06 09:43:23'),
(11, 1001, 12, '1', '2020-10-06 09:43:33'),
(12, 1001, 13, '1', '2020-10-06 09:43:33'),
(13, 1001, 14, '1', '2020-10-06 09:43:44'),
(14, 1001, 15, '1', '2020-10-06 09:43:44'),
(15, 1001, 16, '1', '2020-10-06 09:43:53');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `udid` int(11) NOT NULL,
  `ur_ID` int(11) NOT NULL,
  `ac_hld_name` varchar(255) DEFAULT NULL,
  `ac_no` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`udid`, `ur_ID`, `ac_hld_name`, `ac_no`, `bank_name`, `ifsc`, `branch`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, '2020-10-06 09:44:28');

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
  `set_wallet_trans_limit` int(11) DEFAULT NULL,
  `wallet_transfer_limit` int(11) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `join_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0',
  `show_pass` varchar(255) DEFAULT NULL,
  `user_profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `parent_id`, `name`, `role`, `email`, `contact`, `userID`, `password`, `balance`, `wallet`, `set_wallet_trans_limit`, `wallet_transfer_limit`, `status`, `join_at`, `updated_at`, `is_delete`, `show_pass`, `user_profile`) VALUES
(1, NULL, 'Admin', '1', 'admin@risingfuture.com', 9653287410, '1001', '698d51a19d8a121ce581499d7b701668', NULL, 100000, NULL, NULL, '1', '2020-10-06 09:29:52', '2020-10-06 09:29:52', '0', '111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_request`
--

CREATE TABLE `wallet_request` (
  `rqid` int(11) NOT NULL,
  `rq_userID` int(11) DEFAULT NULL,
  `payment_utr` varchar(255) DEFAULT NULL,
  `amount_type` enum('0','1','2','3','4') DEFAULT NULL COMMENT '0=Cash,1=IMPS,2=NEFT,3=RTGS,4=UPI	',
  `wallet_amt` float DEFAULT NULL,
  `wallet_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `requested_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approved_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `snapshot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `jumpx4slots_2`
--
ALTER TABLE `jumpx4slots_2`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_3`
--
ALTER TABLE `jumpx4slots_3`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_4`
--
ALTER TABLE `jumpx4slots_4`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_5`
--
ALTER TABLE `jumpx4slots_5`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_6`
--
ALTER TABLE `jumpx4slots_6`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_7`
--
ALTER TABLE `jumpx4slots_7`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_8`
--
ALTER TABLE `jumpx4slots_8`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_9`
--
ALTER TABLE `jumpx4slots_9`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_10`
--
ALTER TABLE `jumpx4slots_10`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_11`
--
ALTER TABLE `jumpx4slots_11`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_12`
--
ALTER TABLE `jumpx4slots_12`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_13`
--
ALTER TABLE `jumpx4slots_13`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_14`
--
ALTER TABLE `jumpx4slots_14`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_15`
--
ALTER TABLE `jumpx4slots_15`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `jumpx4slots_16`
--
ALTER TABLE `jumpx4slots_16`
  ADD PRIMARY KEY (`j4id`);

--
-- Indexes for table `manage_slots`
--
ALTER TABLE `manage_slots`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `parchase_new_slot`
--
ALTER TABLE `parchase_new_slot`
  ADD PRIMARY KEY (`prnid`),
  ADD KEY `Ju_ID` (`Ju_ID`);

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
-- Indexes for table `restt_purchased_slots`
--
ALTER TABLE `restt_purchased_slots`
  ADD PRIMARY KEY (`rpid`);

--
-- Indexes for table `transactions_details`
--
ALTER TABLE `transactions_details`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`udid`),
  ADD KEY `ur_ID` (`ur_ID`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wallet_request`
--
ALTER TABLE `wallet_request`
  ADD PRIMARY KEY (`rqid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cycle_x3`
--
ALTER TABLE `cycle_x3`
  MODIFY `x3id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cycle_x4`
--
ALTER TABLE `cycle_x4`
  MODIFY `x4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_2`
--
ALTER TABLE `jumpx4slots_2`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_3`
--
ALTER TABLE `jumpx4slots_3`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_4`
--
ALTER TABLE `jumpx4slots_4`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_5`
--
ALTER TABLE `jumpx4slots_5`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_6`
--
ALTER TABLE `jumpx4slots_6`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_7`
--
ALTER TABLE `jumpx4slots_7`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_8`
--
ALTER TABLE `jumpx4slots_8`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_9`
--
ALTER TABLE `jumpx4slots_9`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_10`
--
ALTER TABLE `jumpx4slots_10`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_11`
--
ALTER TABLE `jumpx4slots_11`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_12`
--
ALTER TABLE `jumpx4slots_12`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_13`
--
ALTER TABLE `jumpx4slots_13`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_14`
--
ALTER TABLE `jumpx4slots_14`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_15`
--
ALTER TABLE `jumpx4slots_15`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jumpx4slots_16`
--
ALTER TABLE `jumpx4slots_16`
  MODIFY `j4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_slots`
--
ALTER TABLE `manage_slots`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parchase_new_slot`
--
ALTER TABLE `parchase_new_slot`
  MODIFY `prnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchased_slots`
--
ALTER TABLE `purchased_slots`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `redeem_points`
--
ALTER TABLE `redeem_points`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restt_purchased_slots`
--
ALTER TABLE `restt_purchased_slots`
  MODIFY `rpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transactions_details`
--
ALTER TABLE `transactions_details`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `udid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_request`
--
ALTER TABLE `wallet_request`
  MODIFY `rqid` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `parchase_new_slot`
--
ALTER TABLE `parchase_new_slot`
  ADD CONSTRAINT `parchase_new_slot_ibfk_1` FOREIGN KEY (`Ju_ID`) REFERENCES `jumpx4slots_2` (`j4id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`ur_ID`) REFERENCES `user_registration` (`uid`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`jobboqdp`@`localhost` EVENT `reset_event` ON SCHEDULE EVERY 24 DAY STARTS '2020-09-26 10:49:08' ENDS '2022-01-01 10:49:08' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE user_registration 
   SET wallet_transfer_limit = 0$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
