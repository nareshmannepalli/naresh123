-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2015 at 06:32 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vardhaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `leavetbl`
--

CREATE TABLE IF NOT EXISTS `leavetbl` (
  `empid` varchar(10) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `leave_from_date` date NOT NULL,
  `leave_to_date` date NOT NULL,
  `leave_apply_date` date NOT NULL,
  `no_of_days` decimal(5,2) NOT NULL,
  `type_of_leave` varchar(15) NOT NULL,
  `prefix_date` varchar(15) NOT NULL,
  `suffix_date` varchar(15) NOT NULL,
  `reason` varchar(200) NOT NULL,
  PRIMARY KEY (`empid`,`leave_apply_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
