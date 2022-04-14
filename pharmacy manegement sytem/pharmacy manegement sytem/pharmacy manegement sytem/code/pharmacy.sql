-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2016 at 07:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountid`, `username`, `position`, `password`, `confirmpassword`) VALUES
('1211', 'pharm', 'pharmacist', '1234', 'pharm'),
('121', 'cash', 'cashier', 'cash', 'cash'),
('32', 'manager', 'manager', 'manager', 'manager'),
('1212', 'pharm', 'pharmaccist', 'pharm', 'pharm'),
('02', 'strc', 'storecoordinator', 'strc', 'strc');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `midlename` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `region` varchar(40) NOT NULL,
  `wereda` varchar(40) NOT NULL,
  `kebele` varchar(40) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `midlename`, `lastname`, `age`, `sex`, `region`, `wereda`, `kebele`) VALUES
(1311, 'azeze', 'derso', 'ayale', 23, 'Male', 'amhara', 'fogera', '04');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `empid` int(11) NOT NULL,
  `drugname` varchar(40) NOT NULL,
  `companyname` varchar(40) NOT NULL,
  `bachnumber` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `shelfnumber` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  PRIMARY KEY (`bachnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`empid`, `drugname`, `companyname`, `bachnumber`, `quantity`, `unitprice`, `shelfnumber`, `expirydate`) VALUES
(2, 'aaa', 'bbb', 1, 5, 5, 1, '2016-06-12'),
(2, 'ccc', 'ddd', 2, 20, 5, 2, '2016-05-12'),
(2, 'rrr', 'ttt', 4, 78, 90, 90, '2016-07-12'),
(2, 'rrr', 'ttt', 8, 5, 3, 5, '2016-06-14'),
(2, 'sdfg', 'jhgf', 9, 21, 31, 55, '2016-06-15'),
(2, 'gffh', 'ccff', 12, 45, 67, 78, '2016-05-12'),
(2, 'yyy', 'zzz', 54, 67, 98, 90, '2016-05-11'),
(2, 'eee', 'ggg', 91, 34, 65, 17, '2016-06-01'),
(2, 'dfgh', 'dfgh', 99, 23, 42, 19, '2016-05-12'),
(2, 'aaaa', 'xxxx', 111, 222, 444, 111, '2016-06-12'),
(2, 'xxx', 'yyyy', 132, 231, 26, 6, '2016-06-12'),
(2, 'dfg', 'fghjh', 2221, 2221, 121, 121, '2016-06-07'),
(2, 'sdfgf', 'hgfdfgh', 765456, 8658, 45678, 45678, '2016-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` float DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`employeeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------

--
-- Table structure for table `solddrug`
--

CREATE TABLE IF NOT EXISTS `solddrug` (
  `sellnumber` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `bachnumber` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `audited` varchar(10) NOT NULL,
  PRIMARY KEY (`sellnumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `solddrug`
--

INSERT INTO `solddrug` (`sellnumber`, `empid`, `customerid`, `bachnumber`, `quantity`, `date`, `status`, `audited`) VALUES
(97, 1212, 1311, 1, 5, '2016-06-12', 'true', 'No');
