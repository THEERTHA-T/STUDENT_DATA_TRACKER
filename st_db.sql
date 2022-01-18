-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 06:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_name` varchar(100) NOT NULL,
  `college_type` varchar(100) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_name`, `college_type`, `place`) VALUES
('College of Engineering Trivandrum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `approval` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `user_name`, `user_type`, `qualification`, `dob`, `password`, `place`, `phone_no`, `email_id`, `college_name`, `dept_name`, `status`, `approval`) VALUES
('admin', '1', 'admin1', 'OfficeAdmin', 'Mba', '1981-01-11', 'admin1', 'Tvm', 9876543333, 'admin1@gmail.com', 'College of Engineering Trivandrum', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
