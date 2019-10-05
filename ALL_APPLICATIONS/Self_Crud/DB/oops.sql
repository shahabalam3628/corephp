-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 05:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `state` varchar(88) NOT NULL,
  `district` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `emp_id`, `state`, `district`) VALUES
(1, 1, 'Bihar', 'Nalanda'),
(2, 2, 'Dlehi', 'Okhla'),
(3, 3, 'Delhi', 'Houz Khas'),
(4, 4, 'Bihar', 'Patna'),
(5, 5, 'up', 'ghaziabaad'),
(6, 7, 'up', 'ghazibaad');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `added_date`) VALUES
(1, 1, 'Patna', '2018-07-11 18:16:59'),
(2, 1, 'Gaya', '2018-07-11 18:16:59'),
(3, 1, 'Nalanda', '2018-07-11 18:17:36'),
(4, 1, 'Rajgir', '2018-07-11 18:17:36'),
(5, 2, 'Houz Khas', '2018-07-11 18:18:30'),
(6, 2, 'Shahhen Bagh', '2018-07-11 18:18:30'),
(7, 3, 'Panji', '2018-07-11 18:18:53'),
(8, 3, 'Panji2', '2018-07-11 18:19:06'),
(9, 4, 'Mumbai', '2018-07-11 18:19:36'),
(10, 4, 'Hazi Ali', '2018-07-11 18:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `emp1`
--

CREATE TABLE `emp1` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `salary` varchar(22) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp1`
--

INSERT INTO `emp1` (`id`, `name`, `salary`, `created_date`) VALUES
(1, 'shahab', '20000', '2018-07-11 13:26:22'),
(2, 'shahab', '30000', '2018-07-11 13:26:22'),
(3, 'shahab', '40000', '2018-07-11 13:26:46'),
(4, 'aman', '25000', '2018-07-11 13:26:46'),
(5, 'aman', '25000', '2018-07-11 13:27:08'),
(6, 'anna', '20000', '2018-07-11 13:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `fname` varchar(88) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fname`, `mobile`, `address`, `added_date`) VALUES
(1, 'Anna', 'annna', '9999999999', 'dd', '2018-07-12 09:20:07'),
(2, 'mm', 'SS', '9999999999', 'ddd', '2018-07-12 09:20:52'),
(3, 'khan', 'khan', '8888888888', 'kjajaj', '2018-07-12 09:25:44'),
(4, 'aman', 'verma@gmail.com', '', '', '2018-08-20 22:17:01'),
(5, 'DD', 'ddd', '', '', '2018-08-20 22:29:44'),
(6, 'VISHAL', 'VISHAL VERMA', '', '', '2018-08-20 22:30:15'),
(8, 'HHH', 'HHHHHH', '', '', '2018-08-20 22:32:15'),
(9, 'ZZZ', 'ZZZZ', '', '', '2018-08-20 22:33:14'),
(10, 'GGG', 'GGGGG', '', '', '2018-08-20 22:34:12'),
(11, 'Md Shahab Alam', '', '', '', '2018-08-20 22:35:50'),
(12, '', '', '', '', '2018-08-21 11:30:05'),
(13, '', '', '', '', '2018-08-21 21:32:41'),
(14, 'Md Shahab Alam', '', '', '', '2018-08-21 21:35:13'),
(15, '', '', '', '', '2018-08-21 21:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `email` varchar(88) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `country` varchar(88) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `name`, `email`, `mobile`, `message`, `country`, `created_at`) VALUES
(7, 'KHAN', 'KHAN@GMAIL.COM', '9999999999', 'FFFFFFFFFFFFFFF', '', '2018-08-30 14:21:00'),
(8, 'AMAN', 'AMAN@GMAIL.COM', '9999999999', 'FFFFF', '', '2018-08-30 14:22:56'),
(9, 'VISHAL', 'VISHAL@GMAIL.COM', '9999999999', 'DDDDDDDDDD', '', '2018-08-30 14:24:55'),
(10, 'Md Shahab Alam', 'shahabalam78@gmail.com', '44444444', 'SSSSSSSS', '', '2018-08-30 14:25:43'),
(11, 'Md Shahab Alam', 'shahabalam78@gmail.com', '44444444', 'SS', '', '2018-08-30 14:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `fname` varchar(88) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(99) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `created_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `fname` varchar(88) NOT NULL,
  `email` varchar(88) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(88) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `fname`, `email`, `address`, `password`, `added_date`) VALUES
(1, 'shamshad', 'ddd', 'dd@gmail.com', 'ddd', 'xxx', '2018-05-25 05:25:46'),
(2, 'imaran', 'mannana', 'imrabn@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(3, 'Md Shahb', 'mannana', 'shahab@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(4, 'Md Naushad', 'mannana', 'naushad@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(5, 'Md Arshad', 'mannana', 'arshad@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(6, 'Md Gufran', 'MM', 'arshad@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(7, 'Md Aman', 'Islam', 'aman@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(8, 'Md Shahid', 'Islam', 'shahid@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(9, 'Md Anna', 'Islam', 'shahid@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(10, 'Md Khalique', 'Islam', 'shahid@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(11, 'Md Taushif', 'Islam', 'shahid@gmail.com', 'sss', '', '2018-05-25 05:40:24'),
(12, 'Md Bilaal', 'Islam', 'shahid@gmail.com', 'sss', '', '2018-05-25 05:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `added_date`) VALUES
(1, 'Bihar', '2018-07-11 18:15:27'),
(2, 'Delhi', '2018-07-11 18:15:27'),
(3, 'Goa', '2018-07-11 18:16:08'),
(4, 'Mahaarastra', '2018-07-11 18:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp1`
--
ALTER TABLE `emp1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `emp1`
--
ALTER TABLE `emp1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
