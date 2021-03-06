-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 03:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beeswebmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `call_data`
--

CREATE TABLE `call_data` (
  `id` int(30) NOT NULL,
  `user` int(11) NOT NULL,
  `counter` int(30) NOT NULL,
  `department` int(11) NOT NULL,
  `number` varchar(20) NOT NULL,
  `call_status` int(11) NOT NULL DEFAULT '-1' COMMENT '-1 TBD 0 Served. 1 Missed',
  `call_active` int(11) NOT NULL DEFAULT '1' COMMENT '0 inactive. 1 enable',
  `token_date` date NOT NULL,
  `token_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_data`
--

INSERT INTO `call_data` (`id`, `user`, `counter`, `department`, `number`, `call_status`, `call_active`, `token_date`, `token_time`) VALUES
(25, 1, 1, 5, '13', 0, 1, '0000-00-00', '00:00:00'),
(26, 1, 1, 5, '14', 0, 1, '0000-00-00', '00:00:00'),
(27, 0, 0, 5, '16', -1, 1, '2018-08-19', '01:08:51'),
(28, 1, 1, 5, '17', 0, 1, '2018-08-19', '01:08:16'),
(29, 1, 1, 5, '18', 1, 1, '2018-08-19', '01:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `company_logo` varchar(500) NOT NULL,
  `company_phone` int(30) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_address` text NOT NULL,
  `company_location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `counter_name` varchar(500) NOT NULL,
  `counter_status` int(30) NOT NULL DEFAULT '0' COMMENT '0 Default. 1 Delete'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `counter_name`, `counter_status`) VALUES
(1, 'Counter 411', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(500) NOT NULL,
  `department_label` varchar(500) NOT NULL,
  `today_start` int(30) NOT NULL,
  `next_entry` int(11) NOT NULL,
  `department_active` int(11) NOT NULL DEFAULT '1' COMMENT '0 inactive. 1 enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `department_label`, `today_start`, `next_entry`, `department_active`) VALUES
(5, 'Dept 1', 'DPT1', 1, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL COMMENT '0-Admin; 1-staff',
  `user_password` varchar(50) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '0-Disable; 1-Enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_username`, `user_email`, `user_role`, `user_password`, `user_status`) VALUES
(1, 'Keval', 'bhogayatakb@gmail.com', 0, '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call_data`
--
ALTER TABLE `call_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `call_data`
--
ALTER TABLE `call_data`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
