-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2015 at 12:13 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `accou`
--

CREATE TABLE IF NOT EXISTS `accou` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `type` varchar(22) NOT NULL,
  `status` varchar(22) NOT NULL,
  PRIMARY KEY (`User_id`),
  KEY `EmpId` (`EmpId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `accou`
--

INSERT INTO `accou` (`User_id`, `username`, `password`, `EmpId`, `type`, `status`) VALUES
(5, 'ff', 'ff', 513, 'manager', 'active'),
(6, 'cc', 'cc', 507, 'keeper', 'active'),
(7, 'gg', 'gg', 44, 'staff', 'active'),
(8, 'Gumz', 'tadagi', 88, 'staff', 'active'),
(10, 'Leul', 'leul', 333, 'staff', 'active'),
(14, 'sami', 'sami', 100, 'Clerk', 'active'),
(18, 'Brhi', 'brhi', 129, 'Manager', 'active'),
(20, 'sami', 'sami', 130, 'staff', 'active'),
(22, 'asnake', 'e099405db8c3fb7ffcbb743d10e3b01b', 123, 'Manager', 'Active'),
(23, 'berti', '123', 162, 'Staff', 'active'),
(24, 'hagos', 'a9047d1c14334757d1a732bb4279a1a1', 300, 'staff', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `approvedforreturn`
--

CREATE TABLE IF NOT EXISTS `approvedforreturn` (
  `Confirmeditemid` int(11) NOT NULL AUTO_INCREMENT,
  `Item Name` text NOT NULL,
  `ItemId` int(13) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `ItemStatus` text NOT NULL,
  `EmpId` int(11) NOT NULL,
  PRIMARY KEY (`Confirmeditemid`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `approvedforreturn`
--

INSERT INTO `approvedforreturn` (`Confirmeditemid`, `Item Name`, `ItemId`, `Quantity`, `ItemStatus`, `EmpId`) VALUES
(1, 'paper', 34, 2, 'Approved', 88);

-- --------------------------------------------------------

--
-- Table structure for table `approveditem`
--

CREATE TABLE IF NOT EXISTS `approveditem` (
  `confirmeditem_id` int(11) NOT NULL AUTO_INCREMENT,
  `Item Name` text NOT NULL,
  `ItemId` int(11) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `ItemStatus` text NOT NULL,
  PRIMARY KEY (`confirmeditem_id`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `approveditem`
--


-- --------------------------------------------------------

--
-- Table structure for table `borrow_item`
--

CREATE TABLE IF NOT EXISTS `borrow_item` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` int(11) NOT NULL,
  `Employee Name` text NOT NULL,
  `ItemId` int(11) NOT NULL,
  `Item Name` text NOT NULL,
  `BorowedItemStatus` text NOT NULL,
  `Borrow_date` date NOT NULL,
  PRIMARY KEY (`borrow_id`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `borrow_item`
--

INSERT INTO `borrow_item` (`borrow_id`, `EmpId`, `Employee Name`, `ItemId`, `Item Name`, `BorowedItemStatus`, `Borrow_date`) VALUES
(37, 88, 'Gumz', 3, 'Desktop', 'Returned', '2015-06-13'),
(40, 333, 'Leul', 1, 'Laptop', 'Returned', '2015-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(33) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `cont` text NOT NULL,
  PRIMARY KEY (`Feedback_id`),
  KEY `EmpId` (`EmpId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_id`, `Email`, `EmpId`, `cont`) VALUES
(1, 'gg', 333, 'etretretg'),
(2, 'gg', 333, 'wht ur color is  nice'),
(3, 'gg', 333, 'wt r u doing here?'),
(4, 'gg', 333, 'plssss  make it simple to understand'),
(5, 'Kebede', 130, 'Well come to the Club'),
(6, 'Gumz', 44, 'dfjnbghhfjjhfjfbjbnjhnjbjjnfvjhnkvjnknvnjvnnvnnvn');

-- --------------------------------------------------------

--
-- Table structure for table `new_item`
--

CREATE TABLE IF NOT EXISTS `new_item` (
  `ItemId` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` text NOT NULL,
  `price` float NOT NULL,
  `ItemCatagory` text NOT NULL,
  `ItemType` text NOT NULL,
  `model` char(11) NOT NULL,
  `ItemStatus` text NOT NULL,
  `AssignedCollage` text NOT NULL,
  `SerialNumber` varchar(15) NOT NULL,
  `Shelf_Number` int(15) NOT NULL,
  `ItemImage` text NOT NULL,
  PRIMARY KEY (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `new_item`
--

INSERT INTO `new_item` (`ItemId`, `ItemName`, `price`, `ItemCatagory`, `ItemType`, `model`, `ItemStatus`, `AssignedCollage`, `SerialNumber`, `Shelf_Number`, `ItemImage`) VALUES
(1, 'Laptop', 650, 'Electronics', 'Returnable', 'Toshiba', 'Free', 'Computing', 'Dbu1236', 100, 'Dbu.jpg'),
(3, 'Desktop', 5000, 'Computer', 'Returnable', 'Dell', 'Reserved', 'Computing', 'dbu456786', 10, 'divider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `Req_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` int(11) NOT NULL,
  `Employee Name` text NOT NULL,
  `ItemId` int(11) NOT NULL,
  `Item Name` text NOT NULL,
  `Req_Date` date NOT NULL,
  `requeststatus` text NOT NULL,
  `ApprovedItems` text NOT NULL,
  PRIMARY KEY (`Req_ID`),
  KEY `EmpId` (`EmpId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=568 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Req_ID`, `EmpId`, `Employee Name`, `ItemId`, `Item Name`, `Req_Date`, `requeststatus`, `ApprovedItems`) VALUES
(566, 88, 'Gumz', 3, 'Desktop', '2015-06-13', 'Approved', 'Waiting'),
(567, 333, 'Leul', 1, 'Laptop', '2015-06-13', 'Approved', 'Taken');

-- --------------------------------------------------------

--
-- Table structure for table `returned_item`
--

CREATE TABLE IF NOT EXISTS `returned_item` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeId` int(15) NOT NULL,
  `EmployeeName` text NOT NULL,
  `ItemId` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `ReturnDate` date NOT NULL,
  PRIMARY KEY (`return_id`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `returned_item`
--

INSERT INTO `returned_item` (`return_id`, `EmployeeId`, `EmployeeName`, `ItemId`, `ItemName`, `ReturnDate`) VALUES
(1, 88, 'Gumz', 3, 'Desktop', '2015-06-13'),
(2, 88, 'Gumz', 3, 'Desktop', '2015-06-13'),
(5, 88, 'Gumz', 3, 'Desktop', '2015-06-13'),
(6, 333, 'Leul', 1, 'Laptop', '2015-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `transfereditem`
--

CREATE TABLE IF NOT EXISTS `transfereditem` (
  `Tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `SenderStaff` text NOT NULL,
  `SenderEmpId` varchar(15) NOT NULL,
  `ItemName` text NOT NULL,
  `ItemId` int(11) NOT NULL,
  `ReceiverStaff` text NOT NULL,
  `ReceiverEmpId` int(13) NOT NULL,
  `transferstatus` text NOT NULL,
  PRIMARY KEY (`Tr_id`),
  KEY `ItemId` (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `transfereditem`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
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
('ggg', 'gggg', 'ggggg', 44, 'Male', '0000-00-00', 'yyy', 777777777, 77777, 'yyy'),
('Gumz', 'Tadagi', 'Chaltu', 88, 'Male', '0000-00-00', 'Benshangul', 921456987, 0, '2000'),
('ashagrie', 'Ashenef', 'Belay', 100, 'Male', '0000-00-00', 'gojam', 921456987, 0, '200000'),
('qq', 'qqq', 'qqq', 123, 'Male', '0000-00-00', 'qwe', 1234567890, 23455, 'gg'),
('Brhin', 'Kidane', 'John', 129, 'Male', '2015-06-02', 'DebreBerhan', 922584698, 3500, 'InfoTech'),
('Kebede', 'Alemu', 'Metrebiyaw', 130, 'Female', '2015-06-02', 'Gonder', 2147483647, 25410, 'Amaro'),
('Debebe', 'Lakew', 'John', 154, 'Male', '2015-09-12', 'Gonder', 925632145, 6000, 'InfoTech'),
('Bertukan', 'Atenafu', 'John', 162, 'Female', '2015-06-22', 'Gojam', 923651478, 20000, 'InfoTech'),
('vvvvvv', 'gbhjk', 'drrfgh', 234, 'Male', '2015-02-12', 'Gonder', 922584698, 3500, 'InfoTech'),
('Mohamed', 'Ali', 'Husien', 300, 'Male', '2015-06-03', 'DebreBerhan', 922584698, 3500, 'InfoTech'),
('Leul', 'Mekonnen', 'gg', 333, 'Male', '0000-00-00', 'ee', 213243454, 21134, 'ew'),
('mekash', 'alemu', 'g/hiwote', 346, 'Female', '0000-00-00', 'bdu', 920123452, 2345, 'SCEE'),
('Brhin', 'Kidane', 'John', 362, 'Male', '2015-06-02', 'DebreBerhan', 922584698, 3500, 'InfoTech'),
('mebi', 'hafte', 'grma', 507, 'Male', '0000-00-00', 'bahirdar', 914416935, 4000, 'it'),
('mekash', 'asf', 'g/hiwote', 513, 'Male', '0000-00-00', 'cxb ', 920123452, 645645, 'SCEE'),
('Kebede', 'gbhjk', 'Husien', 693, 'Male', '2015-08-26', 'Gonder', 925632145, 6000, 'Amaro'),
('dd', 'dd', 'dd', 33333, 'Male', '0000-00-00', 'wewe', 2147483647, 3333, 'eeew');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accou`
--
ALTER TABLE `accou`
  ADD CONSTRAINT `accou_ibfk_1` FOREIGN KEY (`EmpId`) REFERENCES `user` (`EmpId`);

--
-- Constraints for table `approveditem`
--
ALTER TABLE `approveditem`
  ADD CONSTRAINT `approveditem_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`);

--
-- Constraints for table `borrow_item`
--
ALTER TABLE `borrow_item`
  ADD CONSTRAINT `borrow_item_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`);

--
-- Constraints for table `returned_item`
--
ALTER TABLE `returned_item`
  ADD CONSTRAINT `returned_item_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`);

--
-- Constraints for table `transfereditem`
--
ALTER TABLE `transfereditem`
  ADD CONSTRAINT `transfereditem_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`);
