-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2015 at 11:38 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `accou`
--

INSERT INTO `accou` (`User_id`, `username`, `password`, `EmpId`, `type`, `status`) VALUES
(1, 'samuel', 'b923425a1b4aa41f1a7215a7f68d881b', 154, 'manager', 'active'),
(25, 'leul', 'b923425a1b4aa41f1a7215a7f68d881b', 130, 'keeper', 'Active'),
(26, 'hagos', 'b923425a1b4aa41f1a7215a7f68d881b', 175, 'Manager', 'Active'),
(27, 'haftom', 'b923425a1b4aa41f1a7215a7f68d881b', 174, 'staff', 'Active');

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
  KEY `ItemId` (`ItemId`),
  KEY `EmpId` (`EmpId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `borrow_item`
--


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
(3, 'Desktop', 5000, 'Computer', 'Returnable', 'Dell', 'Free', 'Engineering', 'dbu456786', 10, 'divider.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `collage` varchar(33) NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `MidleName`, `LastName`, `EmpId`, `Gender`, `BrithDate`, `Address`, `Phone_Number`, `Salary`, `collage`) VALUES
('Leul', 'Mekonnen', 'Kebede', 130, 'Male', '2015-06-23', 'Tigray', 925639854, 30000, 'infotech'),
('Samuel', 'Bekele', 'John', 154, 'Male', '2015-06-14', 'Debrsh', 948842883, 20000, 'Computing'),
('Haftom', 'Wubie', 'Egziabher', 174, 'Male', '2015-06-24', 'Tigray', 925639854, 30000, 'Engineering'),
('hagos', 'Gebre', 'Getu', 175, 'Male', '2015-06-24', 'Tigray', 919367866, 30000, 'infotech');

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
  ADD CONSTRAINT `borrow_item_ibfk_2` FOREIGN KEY (`EmpId`) REFERENCES `user` (`EmpId`),
  ADD CONSTRAINT `borrow_item_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `new_item` (`ItemId`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`EmpId`) REFERENCES `user` (`EmpId`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`EmpId`) REFERENCES `user` (`EmpId`);

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
