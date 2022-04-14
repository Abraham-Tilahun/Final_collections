-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2014 at 04:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
  `accountnumber` varchar(20) NOT NULL,
  `amountbirr` int(11) NOT NULL,
  `security` varchar(30) NOT NULL,
  PRIMARY KEY (`accountnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`fname`, `lname`, `accountnumber`, `amountbirr`, `security`) VALUES
('akberet', 'g/silasie', 'compr/055/03', 100000, '123456789'),
('gizework', 'amare', 'compr/070/03', 2000000, '123456789'),
('seid', 'mohammed', 'compr/080/03', 100000, '123456789'),
('serkalem', 'bantie', 'compr/132/03', 937420, '123456789'),
('kibrom', 'tsegay', 'kb', 100000, 'kb'),
('masiyas', 'electronics', 'masiyas', 138980, 'masiyas');
