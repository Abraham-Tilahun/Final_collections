-- phpMyAdmin SQL Dump
-- version 3.4.5
-- 
http://www.phpmyadmin.net
--
-- 
Host: localhost
-- 
Generation Time: Jul 02, 2015 at 11:04 AM
-- 
Server version: 5.1.36
--
 PHP Version: 5.3.0

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
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `FirstName` varchar(33) NOT NULL,
  `LastName` varchar(33) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `type` varchar(22) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `accou`
--

INSERT INTO `accou` (`User_id`, `username`, `password`, `FirstName`, `LastName`, `EmpId`, `type`, `status`, `question`, `answer`) VALUES
(13, 'jone', 'waw', 'jone', 'siyoum', 123, 'clerk', NULL, NULL, NULL),
(18, '123', '123', 'yemaneh', 't', 34, 'admin', 'enable', NULL, NULL),
(20, 'jon', 'jon', 'jon', 'siyum', 768, 'keeper', NULL, NULL, NULL),
(21, 'yem', 'yem', 'YEMANE', 'tew ', 65, 'staff', NULL, NULL, NULL),
(22, 'seid', '123', 'seyew', 'mame', 332, 'admin', NULL, 'what is your favorite food', 'enjera');

-- --------------------------------------------------------

--
-- 
Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `FirstName` varchar(33) NOT NULL,
  `MidleName` varchar(33) NOT NULL,
  `LastName` varchar(33) NOT NULL,
  `Admin_Id` int(11) NOT NULL,
  `gender` char(10) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Address` varchar(33) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Department` varchar(33) NOT NULL,
  `Salary` float NOT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 
Dumping data for table `admin`
--

INSERT INTO `admin` (`FirstName`, `MidleName`, `LastName`, `Admin_Id`, `gender`, `Birth_Date`, `Address`, `PhoneNumber`, `Department`, `Salary`) VALUES
('kdfsdf', 'fsf', 'sdfs', 0, 'sdf', '2007-05-06', 'sdfsf', 43535, '', 453),
('yemaneh', 't', 'medhin', 34, 'female', '2015-06-08', 'bffhgh', 5346465, '', 44444),
('seyew', 'mame', 'reshid', 332, 'male', '2003-06-22', 'fdgfbfg', 46456, '', 56456),
('seid', 'mohammed', 'reshid', 567, 'male', '0000-00-00', 'dfdgfg', 56454645, '', 234);

-- --------------------------------------------------------

--
-- 
Table structure for table `borrow_item`
--

CREATE TABLE IF NOT EXISTS `borrow_item` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` int(11) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Borrow_date` date NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`borrow_id`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `borrow_item`
--


INSERT INTO `borrow_item` (`borrow_id`, `EmpId`, `ItemId`, `quantity`, `Borrow_date`, `due_date`) VALUES
(13, 65, 43, 1, '0000-00-00', NULL),
(14, 65, 43, 1, '0000-00-00', NULL),
(15, 65, 43, 1, '0000-00-00', NULL),
(16, 65, 43, 1, '2015-06-19', '');

-- --------------------------------------------------------

--
-- 
Table structure for table `coding_system`
--

CREATE TABLE IF NOT EXISTS `coding_system` (
  `prop_name` varchar(15) NOT NULL,
  `prop_type` varchar(15) NOT NULL,
  `prop_identifier` varchar(14) NOT NULL,
  `prop_permanentlist` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 
Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FirstName` varchar(33) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `cont` text NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `fedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fedbackid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 
Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FirstName`, `EmpId`, `cont`, `date`, `fedbackid`, `status`) VALUES
('zeyneba', 3435345, 'waw', '2015-06-08 04:43:59', 10, 'read'),
('ahmed', 87, 'this good for all', '2015-06-12 03:03:16', 12, 'read'),
('seid', 54, 'how you done that?', '2015-06-20 03:31:26', 13, 'unread'),
('seyaw', 76, 'what is the new one item please show them\r\n', '2015-07-02 11:06:30', 14, 'unread');

-- --------------------------------------------------------

--
-- 
Table structure for table `keeper`
--

CREATE TABLE IF NOT EXISTS `keeper` (
  `FirstName` varchar(33) NOT NULL,
  `MidleName` varchar(33) NOT NULL,
  `LastName` varchar(33) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Address` varchar(22) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Salary` float NOT NULL,
  `Department` varchar(22) NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keeper`
--

INSERT INTO `keeper` (`FirstName`, `MidleName`, `LastName`, `EmpId`, `gender`, `Birth_Date`, `Address`, `PhoneNumber`, `Salary`, `Department`) VALUES
('mebi', 'uniqe', 'blues', 2, 'Male', '0000-00-00', 'bahirdar', 914416935, 7000, 'it'),
('seid', 'mohammed', 'reshid', 9, 'Male', '0000-00-00', 'samara', 921121348, 677, 'cs'),
('aa', 'aa', 'aa', 44, 'Male', '0000-00-00', 'aa', 88, 88, 'aa'),
('yemane', 't/medhin', 'tewelde', 56, 'female', '0000-00-00', 'ssdfgggfd', 2147483647, 4235, 'cs'),
('kk', 'kk', 'kk', 88, 'Male', '0000-00-00', 'uuu', 914416935, 4000, 'cs'),
('jon', 'siyum', 'abebe', 768, 'jj', '2015-06-01', 'hguguyguy', 899797, 8978, 'hjkjnkjn'),
('ygyj', 'hghjg', 'ggg', 55555, 'Male', '0000-00-00', 'hgh', 9555, 895, 'hhjjhjh');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Name` varchar(14) NOT NULL,
  `E_mail` varchar(25) NOT NULL,
  `Position` varchar(18) NOT NULL,
  `Message` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 
Table structure for table `new_item`
--

CREATE TABLE IF NOT EXISTS `new_item` (
  `ItemName` varchar(33) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `price` float NOT NULL,
  `Qauntity` int(11) NOT NULL,
  `model` char(11) NOT NULL,
  PRIMARY KEY (`ItemId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_item`
--

INSERT INTO `new_item` (`ItemName`, `ItemId`, `price`, `Qauntity`, `model`) VALUES
('compdel', 12, 2000, -11, 'ww'),
('dfsdf', 43, 345, 487, 'ddff'),
('peper', 50, 100, 80, 'peper'),
('hp laptop', 54, 18000, 439, 'hp latest'),
('paper', 65, 3333, 20, 'fdxtrd'),
('hbh', 76, 677, 56, 'jn'),
('laptop', 98, 1233, 23, 'kdjsff76e'),
('acer desktop', 657, 9000, 75, 'ghsds5rew');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_items`
--

CREATE TABLE IF NOT EXISTS `receipt_items` (
  `prop_name` varchar(15) NOT NULL,
  `prop_type` varchar(13) NOT NULL,
  `prop_serialcode` varchar(15) NOT NULL,
  `prop_quantity` int(16) NOT NULL,
  `prop_quality` varchar(16) NOT NULL,
  `prop_source` varchar(17) NOT NULL,
  `prop_expirydate` varchar(16) NOT NULL,
  `prop_model` varchar(15) NOT NULL,
  PRIMARY KEY (`prop_model`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt_items`
--

INSERT INTO `receipt_items` (`prop_name`, `prop_type`, `prop_serialcode`, `prop_quantity`, `prop_quality`, `prop_source`, `prop_expirydate`, `prop_model`) VALUES
('', '', '', 0, '', '', '', ''),
('ghdfg', 'permanent', 'jhhfuyt6t78gjj', 76868, 'ygyguiyiuhbuh', 'iuhknjkhuih', '2015-06-10', 'jljhuihu'),
('jbkjnknkn', 'permanent', '76980uu0j09u09', 100, 'hiujkn', 'ijjnh', '2015-06-08', 'khkjnj'),
('jhkhk`', 'permanent', '89u98uju89uj', 56, 'khkhi', 'hjnjkk', '2015-06-30', 'llkb'),
('yjty', 'non_permanent', 'jhg', 4, 'goog', 'sponsored', '2015-06-25', 'tresa');

-- --------------------------------------------------------

--
-- Table structure for table `register_property`
--

CREATE TABLE IF NOT EXISTS `register_property` (
  `prop_name` varchar(15) NOT NULL,
  `prop_type` varchar(15) NOT NULL,
  `prop_serialcode` varchar(15) NOT NULL,
  `prop_quantity` int(8) NOT NULL,
  `prop_quality` varchar(15) NOT NULL,
  `prop_expirydate` varchar(16) NOT NULL,
  `prop_model` varchar(16) NOT NULL,
  PRIMARY KEY (`prop_model`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_property`
--

INSERT INTO `register_property` (`prop_name`, `prop_type`, `prop_serialcode`, `prop_quantity`, `prop_quality`, `prop_expirydate`, `prop_model`) VALUES
('khkfkj', 'kuhkgnk', '90uoitjiou', 878, 'iuhirejtoij', '2015-06-10', 'jilrty'),
('data', 'sponsor', 'fgghf56', 2, 'good', '2015-06-19', 'fhgfhfh');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `Req_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` int(11) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Req_Date` date NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Req_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Req_ID`, `EmpId`, `ItemId`, `quantity`, `Req_Date`, `due_date`) VALUES
(1, 65, 54, 5, '2015-07-07', '2016-06-07'),
(2, 123, 65, 3, '2015-07-07', '2016-07-07');

-- --------------------------------------------------------

--
-- 
Table structure for table `returned_item`
--

CREATE TABLE IF NOT EXISTS `returned_item` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` int(11) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `quantitys` int(11) NOT NULL,
  `Return_date` date NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`return_id`),
  KEY `ItemId_2` (`ItemId`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `returned_item`
--

INSERT INTO `returned_item` (`return_id`, `EmpId`, `ItemId`, `quantitys`, `Return_date`, `due_date`) VALUES
(1, 65, 43, 1, '2015-07-02', NULL);

-- --------------------------------------------------------

--
-- 
Table structure for table `storeclerk`
--

CREATE TABLE IF NOT EXISTS `storeclerk` (
  `emp_id` int(8) NOT NULL,
  `fullname` varchar(15) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `age` int(4) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `experience` varchar(15) NOT NULL,
  `phone_number` int(12) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storeclerk`
--

INSERT INTO `storeclerk` (`emp_id`, `fullname`, `email_address`, `age`, `sex`, `experience`, `phone_number`) VALUES
(123, 'jonesiyoummekon', 'kjfksdfksnf', 65, 'ma', 'student', 897458034),
(545, 'jkdd fvnk hkjfn', 'hjk,n,', 8787, 'jk', '76', 8798797);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_property`
--

CREATE TABLE IF NOT EXISTS `transfer_property` (
  `prop_name` varchar(10) NOT NULL,
  `prop_quantity` int(6) NOT NULL,
  `prop_type` varchar(10) NOT NULL,
  `prop_model` varchar(15) NOT NULL,
  `prop_number` int(15) NOT NULL,
  PRIMARY KEY (`prop_model`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 
Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `FirstName` varchar(33) NOT NULL,
  `MidleName` varchar(33) NOT NULL,
  `LastName` varchar(33) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `Gender` char(10) NOT NULL,
  `BrithDate` date NOT NULL,
  `Address` varchar(33) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Salary` float NOT NULL,
  `Department` varchar(33) NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `MidleName`, `LastName`, `EmpId`, `Gender`, `BrithDate`, `Address`, `Phone_Number`, `Salary`, `Department`) VALUES
('YEMANE', 'tew ', 'medhin', 65, 'female', '2015-06-09', 'nbmbs', 868756574, 5555, 'cs'),
('zeyneba', 'hassen', 'mohammed', 76, 'male', '0000-00-00', 'vhewww65', 932125464, 23333, 'accounting'),
('ggg', 'gggg', 'ggggg', 88, 'Male', '0000-00-00', 'yyy', 777777777, 77777, 'yyy'),
('seido', 'fhjf', 'jh,kh', 98, 'Female', '0000-00-00', 'jhjh', 922121348, 1222, 'cs'),
('qq', 'qqq', 'qqq', 123, 'Male', '0000-00-00', 'qwe', 1234567890, 23455, 'gg'),
('gg', 'gg', 'gg', 333, 'Male', '0000-00-00', 'ee', 213243454, 21134, 'ew'),
('mekash', 'alemu', 'g/hiwote', 346, 'Female', '0000-00-00', 'bdu', 920123452, 2345, 'SCEE'),
('mebi', 'hafte', 'grma', 507, 'Male', '0000-00-00', 'bahirdar', 914416935, 4000, 'it'),
('mekash', 'asf', 'g/hiwote', 513, 'Male', '0000-00-00', 'cxb ', 920123452, 645645, 'SCEE'),
('dd', 'dd', 'dd', 33333, 'Male', '0000-00-00', 'wewe', 2147483647, 3333, 'eeew'),
('zeyneba', 'hassen', 'adem', 3435345, 'femail', '2001-11-03', 'fsdfdfdf', 56456, 46456, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `user_card`
--

CREATE TABLE IF NOT EXISTS `user_card` (
  `user_name` varchar(15) NOT NULL,
  `user_department` varchar(16) NOT NULL,
  `building_number` int(13) NOT NULL,
  `office_number` int(13) NOT NULL,
  `prop_decription` varchar(25) NOT NULL,
  `prop_pin` varchar(15) NOT NULL,
  `prop_serialno` int(15) NOT NULL,
  `prop_fair` varchar(15) NOT NULL,
  `prop_unitofmeasure` varchar(12) NOT NULL,
  `prop_quantity` varchar(8) NOT NULL,
  `prop_totalprice` int(14) NOT NULL,
  PRIMARY KEY (`prop_serialno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_item`
--
ALTER TABLE `borrow_item`
  ADD CONSTRAINT `borrow_item_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `returned_item`
--
ALTER TABLE `returned_item`
  ADD CONSTRAINT `returned_item_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
