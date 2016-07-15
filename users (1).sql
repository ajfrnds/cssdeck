-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2016 at 01:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_startDate` date NOT NULL,
  `emp_endDate` date NOT NULL,
  `percentComplete` int(11) NOT NULL,
  `emp_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_startDate`, `emp_endDate`, `percentComplete`, `emp_status`) VALUES
('nt100', 'Ajay', '2016-07-14', '0000-00-00', 1000, 'Released'),
('nt101', 'Joyab', '2016-07-12', '0000-00-00', 0, 'Released'),
('nt300', 'Rushi', '2016-07-14', '0000-00-00', 20, 'Released'),
('nt400', 'Rajan', '2016-07-13', '0000-00-00', 100, 'Released'),
('nt700', 'Anjali', '2016-07-20', '0000-00-00', 40, 'Released'),
('nt800', 'Rajvir', '2016-07-21', '0000-00-00', 50, 'Released'),
('nt1500', 'effef', '2016-07-19', '0000-00-00', 33, 'Released'),
('nt5555', 'rger', '2016-07-19', '0000-00-00', 43, 'Released'),
('nt5555', 'ffsd', '2016-07-18', '0000-00-00', 443, 'Released'),
('43443', 'fsdf', '2016-07-11', '0000-00-00', 4334, 'Onboarding'),
('', 'hhh', '2016-07-20', '0000-00-00', 666, 'Onboarding'),
('amis', 'Rajan', '2016-07-14', '2016-07-28', 0, 'Onboarding'),
('nt101', 'aa', '2016-07-14', '2016-07-14', 0, 'Onboarding'),
('', '', '1970-01-01', '1970-01-01', 0, 'Onboarding'),
('', '', '1970-01-01', '1970-01-01', 0, 'Onboarding');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boarding`
--

CREATE TABLE `tbl_boarding` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'amisra200', 'ajay123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_boarding`
--
ALTER TABLE `tbl_boarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_boarding`
--
ALTER TABLE `tbl_boarding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
