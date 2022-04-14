-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 01:37 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `storem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accou`
--

CREATE TABLE IF NOT EXISTS `accou` (
  `User_id` int(88) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(45) NOT NULL,
  `Mname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(55) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `Phone_number` int(55) NOT NULL,
  `email_address` varchar(55) NOT NULL,
  `Gender` varchar(55) NOT NULL,
  `brith_Date` date NOT NULL,
  `department` varchar(55) NOT NULL,
  `salary` int(55) NOT NULL,
  `usertype` varchar(55) NOT NULL,
  `enabled` int(34) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `accou`
--

INSERT INTO `accou` (`User_id`, `Fname`, `Mname`, `Lname`, `username`, `password`, `confirmpassword`, `Phone_number`, `email_address`, `Gender`, `brith_Date`, `department`, `salary`, `usertype`, `enabled`) VALUES
(1, 'brhane ', 'desta ', 'gebru ', 'admin ', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 2147483647, 'admin@gmail.com', 'male', '2017-06-05', 'Civil', 123455, 'admin', 1),
(3, 'demeku ', 'hfghfgh ', 'abrham ', 'demeku ', '9436fea286f882d455d3963c1fb923a9', '9436fea286f882d455d3963c1fb923a9', 936734602, 'demeku@gmail.com', 'Female', '2017-06-06', 'Mechanical', 6000, 'Financedirectory', 1),
(4, 'tsega ', 'abay ', 'abrham ', 'head ', '96e89a298e0a9f469b9ae458d6afae9f', '96e89a298e0a9f469b9ae458d6afae9f', 938775831, 'eyorsalem@gmail.com', 'Female', '2017-06-05', 'CoTM', 40000, 'Departmenthead', 1),
(6, 'amaa ', 'desta ', 'gebru ', 'storeman ', 'a2bfa1679dbedaf8ab9b39ced90cf6bc', 'd704bf0f0c79bed23548c6479401d9de', 2147483647, 'brhanw@gmail.com', 'Female', '2017-06-06', 'Hydraulics', 1023, 'Storeman', 1),
(10, 'demeku ', 'desta ', 'gebru ', 'college ', 'b0edd88cd46d6f0437f360bc0b992d5a', 'b0edd88cd46d6f0437f360bc0b992d5a', 934567867, 'baba@gmail.com', 'male', '2017-06-06', 'Civil', 10000, 'Collegedean', 1),
(15, 'desta ', 'baba ', 'hagos ', 'brhane ', 'a2bfa1679dbedaf8ab9b39ced90cf6bc', 'a2bfa1679dbedaf8ab9b39ced90cf6bc', 934567867, 'brhanedesta@gmail.com', 'male', '2017-06-06', 'Computing', 70000, 'Storeman', 1),
(16, 'demeku ', 'getachew ', 'gebru ', 'user ', 'ee11cbb19052e40b07aac0ca060c23ee', 'ee11cbb19052e40b07aac0ca060c23ee', 931489799, 'demeku@gmail.com', 'Female', '2017-06-06', 'Textile', 80000, 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE IF NOT EXISTS `barcode` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `barcode_no` varchar(55) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FullName` varchar(55) NOT NULL,
  `EmployeeId` varchar(100) NOT NULL DEFAULT '',
  `cont` varchar(55) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FullName`, `EmployeeId`, `cont`, `Date`) VALUES
('uytuty', '0009', ' fhfg', '2017-05-02'),
('brhanedesta', '00796', 'how to do djkfsidfm,gdidgkopdg,dklgldf;', '2017-04-04'),
('brkti', '0976', 'howtoworktheproject', '2017-04-03'),
('tadesegebr', '12', 'qaswzzzzzzz', '2017-05-29'),
('tretert', '4555', ' czsdfs', '0000-00-00'),
('desta', '5567', ' dsfsd', '0000-00-00'),
('jhailemaria', '566', 'bbshdfsfgngdfgj', '2017-04-11'),
('utyututy', '67676', ' nn', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `new_item`
--

CREATE TABLE IF NOT EXISTS `new_item` (
  `prop_code` varchar(64) NOT NULL,
  `Reg_Date` date NOT NULL,
  `prop_name` varchar(78) NOT NULL,
  `unit_price` int(56) NOT NULL,
  `Quality` varchar(78) NOT NULL,
  `prop_model` int(67) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`prop_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_item`
--

INSERT INTO `new_item` (`prop_code`, `Reg_Date`, `prop_name`, `unit_price`, `Quality`, `prop_model`, `description`) VALUES
('AKu436', '2017-06-06', 'computer', 2345, 'thebest', 55, ' rtet'),
('Aku987', '2017-06-19', 'peapers', 555555, 'thebest', 56, ' werwer');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `Fname` varchar(55) NOT NULL,
  `Mname` varchar(55) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `User_id` int(45) NOT NULL,
  `Item_name` varchar(55) NOT NULL,
  `unitmeasure` varchar(34) NOT NULL,
  `Req_ID` int(45) NOT NULL AUTO_INCREMENT,
  `Item_id` int(34) NOT NULL,
  `Req_Date` date NOT NULL,
  `description` text NOT NULL,
  `request_type` varchar(23) NOT NULL,
  `approved_by` varchar(34) NOT NULL,
  `status` int(34) NOT NULL,
  PRIMARY KEY (`Req_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `Fname` varchar(45) NOT NULL,
  `Mname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `User_id` int(45) NOT NULL,
  `Item_name` varchar(45) NOT NULL,
  `unitmeasure` varchar(66) NOT NULL,
  `Req_ID` int(33) NOT NULL AUTO_INCREMENT,
  `Qauntity` int(34) NOT NULL,
  `Req_Date` date NOT NULL,
  `description` varchar(33) NOT NULL,
  `request_type` varchar(100) NOT NULL,
  `requested_by` varchar(33) NOT NULL,
  `status` int(45) NOT NULL,
  PRIMARY KEY (`Req_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

-- --------------------------------------------------------

--
-- Table structure for table `request_disposal`
--

CREATE TABLE IF NOT EXISTS `request_disposal` (
  `Fname` varchar(45) NOT NULL,
  `Mname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `User_id` int(45) NOT NULL,
  `Item_name` varchar(23) NOT NULL,
  `unitmeasure` varchar(55) NOT NULL,
  `Req_ID` int(34) NOT NULL AUTO_INCREMENT,
  `Qauntity` int(34) NOT NULL,
  `Req_Date` date NOT NULL,
  `description` varchar(34) NOT NULL,
  `request_type` varchar(100) NOT NULL,
  `requested_by` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Req_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `request_disposal`
--

INSERT INTO `request_disposal` (`Fname`, `Mname`, `Lname`, `User_id`, `Item_name`, `unitmeasure`, `Req_ID`, `Qauntity`, `Req_Date`, `description`, `request_type`, `requested_by`, `status`) VALUES
('trungo', 'abay', 'gebru', 8002, 'car', '23', 1, 12, '2017-06-06', ' vxv', 'Request_Disposal', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request_purchase`
--

CREATE TABLE IF NOT EXISTS `request_purchase` (
  `Fname` varchar(55) NOT NULL,
  `Mname` varchar(55) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `User_id` int(56) NOT NULL,
  `Item_name` varchar(45) NOT NULL,
  `Item_number` int(45) NOT NULL,
  `unitmeasure` int(34) NOT NULL,
  ` 	Req_ID` int(45) NOT NULL AUTO_INCREMENT,
  `Req_Date` date NOT NULL,
  `description` varchar(34) NOT NULL,
  `request_type` varchar(100) NOT NULL,
  `requested_by` varchar(56) NOT NULL,
  `status` int(21) NOT NULL,
  PRIMARY KEY (` 	Req_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `request_purchase`
--

INSERT INTO `request_purchase` (`Fname`, `Mname`, `Lname`, `User_id`, `Item_name`, `Item_number`, `unitmeasure`, ` 	Req_ID`, `Req_Date`, `description`, `request_type`, `requested_by`, `status`) VALUES
('trungo', 'desta', 'abrham', 6654654, 'car', 5, 23, 22, '2017-06-05', ' bfcgbh', 'Request_purchase', 'Hydraulics', 2),
('tsega', 'desta', 'gebru', 796, 'car', 51, 0, 26, '2017-06-05', ' kmjhkh', 'Request_purchase', 'Health scienece', 1),
('baba', 'abay', 'gebru', 8002, 'pen', 5, 0, 27, '2017-06-05', ' kjhjkj', 'Request_purchase', 'Geography', 1),
('demeku', 'getachew', 'tadese', 1322, 'textbook', 12, 0, 28, '2017-06-07', ' gghfh', 'Request_purchase', 'Accounting', 1),
('tewele', 'users', 'gebru', 6654654, 'computerpc', 1, 23, 29, '2017-06-20', 'hhghghui', 'Request_purchase', 'Stastics', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_property`
--

CREATE TABLE IF NOT EXISTS `transfer_property` (
  `prop_code` varchar(34) NOT NULL,
  `Reg_Date` date NOT NULL,
  `prop_name` varchar(56) NOT NULL,
  `unit_price` int(89) NOT NULL,
  `Quality` varchar(45) NOT NULL,
  `prop_model` int(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`prop_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_property`
--

INSERT INTO `transfer_property` (`prop_code`, `Reg_Date`, `prop_name`, `unit_price`, `Quality`, `prop_model`, `description`) VALUES
('AKU60', '2017-06-05', 'computer', 4000, '', 56, ' gdfghdf'),
('aku55', '2017-06-05', 'raber', 2345, '', 19, ' tfhgjkfdmnvbcb '),
('ak34', '2017-06-05', 'computer', 2345, '', 19, ' kjnkjn'),
('34w', '2017-06-06', 'books', 123, '', 56, ' ghjg'),
('Aku987', '2017-06-06', 'harddisk', 5000, '', 19, ' hhhhjghjghjj\r\njhjhkhjkhjkkl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
