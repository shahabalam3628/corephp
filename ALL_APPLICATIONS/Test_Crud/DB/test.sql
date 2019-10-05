-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 04:23 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `yearofservice` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `perks` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `title`, `age`, `yearofservice`, `salary`, `perks`, `email`) VALUES
(1, 'John', 'Chen', 'Senior Programmer', 31, 3, 120000, 25000, 'j@hotmail.com'),
(2, 'Jan', 'Pillai', 'Senior Programmer', 32, 4, 110000, 20000, 'g@yahoo.com'),
(3, 'Ane', 'Pandit', 'Web Designer', 24, 3, 90000, 15000, 'a@gmail.com'),
(4, 'Mary', 'Anchor', 'Web Designer', 27, 2, 85000, 15000, 'm@mail.com'),
(5, 'Fred', 'King', 'Programmer', 32, 3, 75000, 15000, 'f@net.com'),
(6, 'John', 'Mac', 'Programmer', 32, 4, 80000, 16000, 'j@hotmail.com'),
(7, 'Arthur', 'Sam', 'Programmer', 28, 2, 75000, 14000, 'e@yahoo.com'),
(8, 'Alok', 'Nanda', 'Programmer', 32, 3, 70000, 10000, 'a@yahoo.com'),
(9, 'Susan', 'Ra', 'Multimedia Programmer', 32, 4, 90000, 15000, 'h@gmail.com'),
(10, 'Paul', 'Simon', 'Multimedia Programmer', 23, 1, 85000, 12000, 'ps@gmail.com'),
(11, 'Edward', 'Parhar', 'Multimedia Programmer', 30, 2, 75000, 15000, 'a@hotmail.com'),
(12, 'Kim', 'Hunter', 'Senior Web Designer', 32, 4, 110000, 20000, 'kim@coolmail.com'),
(13, 'Roger', 'Lewis', 'System Administrator', 32, 3, 100000, 13000, 'roger@mail.com'),
(14, 'Danny', 'Gibson', 'System Administrator', 31, 2, 90000, 12000, 'danny@hotmail.com'),
(15, 'Mike', 'Harper', 'Senior Marketing Executive', 36, 1, 120000, 28000, 'm@gmail.com'),
(16, 'Mary', 'Sunday', 'Marketing Executive', 31, 5, 90000, 25000, 'monica@bigmail.com'),
(17, 'Jack', 'Sim', 'Marketing Executive', 27, 1, 70000, 18000, 'hal@gmail.com'),
(18, 'Joe', 'Irvine', 'Marketing Executive', 27, 1, 72000, 18000, 'joseph@hotmail.com'),
(19, 'Henry', 'Ali', 'Customer Service Manager', 32, 3, 70000, 9000, 'shahida@hotmail.com'),
(20, 'Peter', 'Champion', 'Finance Manager', 32, 2, 120000, 25000, 'peter@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(88) NOT NULL,
  `lastname` varchar(88) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `created_date`) VALUES
(3, 'Md', 'Shahahb', '2018-08-20 15:38:51'),
(4, 'Aman', 'Verma', '2018-08-20 15:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `username` varchar(88) NOT NULL,
  `password` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `username`, `password`) VALUES
(1, 'aman', 'aman@gmail.com', '123456'),
(2, 'Md Shahab Alam', 'shahab@gmail.com', 'shahab');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Aman', 'Verma', 'shahabalam78@gmail.com'),
(3, 'Gufran', 'Alam', 'gufran@gmail.com'),
(5, 'Anna', 'Bhai', 'anna@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
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
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
