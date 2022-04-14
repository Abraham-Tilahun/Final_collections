-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2016 at 01:49 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `accountnumber` int(20) NOT NULL,
  `amountbirr` int(11) NOT NULL,
  `security` varchar(30) NOT NULL,
  PRIMARY KEY (`accountnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`fname`, `lname`, `accountnumber`, `amountbirr`, `security`) VALUES
('abebe', 'alemu', 123, 81000, '123123123'),
('alemu', 'kebede', 211, 900000, '12345678k'),
('loza', 'abera', 212, 5400, '12345'),
('yimami', 'ayele', 444, 900000, '3dy65'),
('biruk', 'chiraku', 454, 7000, '432'),
('abel', 'mulugeta', 456, 29300, '666666'),
('dagne', 'tsegawi', 3456, 79700, '00099');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
