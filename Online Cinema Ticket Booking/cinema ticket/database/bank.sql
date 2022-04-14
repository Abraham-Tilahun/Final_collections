-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 10:24 AM
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
('manamno', 'mihret', '123456789', 100000000, '741852963'),
('yisahak', 'yiferu', '123456789123456789', 2147483647, '123456789'),
('Amelework', 'debas', '1234567892211', 2147483647, '123456789'),
('mequannt', 'bogale', '1234567892274', 1986231506, '123456789'),
('andnet', 'teka', '200620092213', 20, '123456789'),
('yishak', 'yiferu', '200620092315', 10000000, '123456789'),
('mengesha', 'molawerk', '200620092326', 10000000, '123456789');
