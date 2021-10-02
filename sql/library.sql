-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2019 at 04:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`, `mobile`) VALUES
('techradix', 'techradix', '8980812362');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hardware` int(11) NOT NULL DEFAULT '0',
  `networking` int(11) NOT NULL DEFAULT '0',
  `cisco` int(11) NOT NULL DEFAULT '0',
  `microsoft` int(11) NOT NULL DEFAULT '0',
  `redhetserver` int(11) NOT NULL DEFAULT '0',
  `virtualization` int(11) NOT NULL DEFAULT '0',
  `ethicalhacking` int(11) NOT NULL DEFAULT '0',
  `cloudcomputing` int(11) NOT NULL DEFAULT '0',
  `block` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`no`, `name`, `email`, `enrollment`, `mobile`, `date`, `hardware`, `networking`, `cisco`, `microsoft`, `redhetserver`, `virtualization`, `ethicalhacking`, `cloudcomputing`, `block`) VALUES
(8, 'digant malaviya', 'digant@gmail.com', 'trdx-srt-2019-0002', '123123123', '2019-09-13 17:08:47', 1, 1, 1, 0, 0, 0, 1, 0, 0),
(6, 'Mayur Jagani', 'mayur@gmail.com', 'TRDX-SRT-2019-0002', '1111111111', '2019-09-11 07:29:42', 1, 1, 1, 1, 1, 1, 1, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
