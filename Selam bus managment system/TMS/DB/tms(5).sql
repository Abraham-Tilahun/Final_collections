-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 03:07 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  `EMAIL` varchar(56) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `ADMIN_IDF` int(11) NOT NULL,
  KEY `ADMIN_IDF` (`ADMIN_IDF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`USER_ID`, `USER_NAME`, `PASSWORD`, `ROLE`, `EMAIL`, `STATUS`, `ADMIN_IDF`) VALUES
(1, 'Admin', 'MTIzNDU2Nzg=', 'sysadmin', 'se@gmail.com', 0, 1),
(40, 'dister123', 'ZGlzdGVyMTIz', 'distermanager', 'a@gmail.com', 0, 1),
(432, 'Operator', 'MTIzNDU2Nzg=', 'operator', 'a@gmail.com', 0, 1),
(44, 'Mizan', 'bWl6YW4xMjM=', 'assomanager', 'a@gmail.com', 0, 1),
(45, 'Mahir', 'MTIzNDU2Nzg=', 'assomanager', 't@gmail.com', 0, 1),
(100, 'Aba', 'MTIzNDU2Nzg=', 'operator', 'aa@gmail.com', 0, 1),
(37, 'Dev', 'MTIzNDU2Nzhh', 'devmanager', 'de@gmail.com', 0, 1),
(101, 'Abea', 'TVRJek5EVTJOemc9', 'operator', 'o@gmail.com', 1, 1),
(103, 'Aaa', 'VFZSSmVrNUVWVEpPZW1jOQ==', 'operator', 'aw@gmail.com', 0, 1),
(46, 'Ashenafie', 'JHBhc3N3b3Jk', 'assomanager', 'a@gmail.com', 1, 1),
(62, 'Asefa', 'MTIzNDU2Nzg=', 'devmanager', 'w@gmail.com', 0, 1),
(1000, 'Ermi', 'MTIzNDU2Nzg=', 'operator', 'aasa@gmil.com', 0, 1),
(2112, 'Adiss', 'MTIzNDU2Nzhh', 'operator', 'w@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(30) NOT NULL,
  `MIDDLE_NAME` varchar(30) NOT NULL,
  `LAST_NAME` varchar(30) NOT NULL,
  `SEX` char(6) NOT NULL,
  `DOB` date NOT NULL,
  `QUALIFICATION` varchar(30) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL,
  `KEBELE` varchar(20) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `SEX`, `DOB`, `QUALIFICATION`, `PHONE_NUMBER`, `KEBELE`) VALUES
(1, 'admin', 'adminman', 'adminu', 'm', '2018-05-09', 'diploma', 9876454, '3');

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `EMPL_ID` int(11) NOT NULL,
  `ASSOCIATION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ASSOCIATION_NAME` varchar(34) NOT NULL,
  `FORMED_DATE` date NOT NULL,
  `PHONE_NO` int(11) NOT NULL,
  `MANGER_NAME` varchar(30) NOT NULL,
  `MANAGER_ID` int(11) NOT NULL,
  `LEVEL` int(11) NOT NULL,
  PRIMARY KEY (`ASSOCIATION_ID`),
  KEY `EMPL_ID` (`EMPL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`EMPL_ID`, `ASSOCIATION_ID`, `ASSOCIATION_NAME`, `FORMED_DATE`, `PHONE_NO`, `MANGER_NAME`, `MANAGER_ID`, `LEVEL`) VALUES
(39, 19, 'Tana Beles', '2018-06-06', 918715962, 'MIzanAlebel', 44, 3),
(39, 20, 'Tiret', '2018-06-06', 918720499, 'SahileShferaw', 47, 2),
(39, 21, 'Hibr', '2018-06-07', 918779159, 'MahrieEyasu', 45, 1),
(39, 22, 'Blien', '2018-06-06', 918560386, 'MelkamDagnaw', 48, 2),
(39, 23, 'Key Kebero', '2010-03-02', 918020084, 'Mersha W/Gebrial', 49, 1),
(39, 24, 'Habesha', '2010-06-04', 974500202, 'Ashenafie Desalegn', 46, 3),
(39, 25, 'Abay Zuria Zenbaba', '2005-06-06', 918766982, 'Belay Afework', 50, 2),
(39, 26, 'Abay', '2016-05-30', 918340151, 'Abayneh Mahrie', 51, 1),
(39, 27, 'Zenbaba', '2018-06-05', 930296554, 'Kumander Estifanos', 52, 3),
(39, 28, 'Tisabay', '2012-03-06', 918027961, 'Asnka Tigabu', 53, 1),
(39, 29, 'Alemsaga', '2006-06-07', 918719262, 'Andamlak', 54, 2),
(62, 33, 'Abay', '2018-05-03', 122324324, 'Andamlak', 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(25) NOT NULL,
  `MIDDLE_NAME` varchar(25) NOT NULL,
  `LAST_ANAME` varchar(25) NOT NULL,
  `SEX` char(6) NOT NULL,
  `DOB` date NOT NULL,
  `PHONE_NO` int(11) NOT NULL,
  `KEBELE` varchar(23) NOT NULL,
  `QUALIFICATION` varchar(35) NOT NULL,
  `ROLE` varchar(35) NOT NULL,
  `ADMIN_ID` int(11) NOT NULL,
  PRIMARY KEY (`EID`),
  KEY `ADMIN_ID` (`ADMIN_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_ANAME`, `SEX`, `DOB`, `PHONE_NO`, `KEBELE`, `QUALIFICATION`, `ROLE`, `ADMIN_ID`) VALUES
(24, 'abate', 'abebaw', 'asfaw', 'F', '2018-05-04', 2147483647, '2', 'd', 'Asso Manager', 1),
(34, '', '', '', 'M', '0000-00-00', 0, '', '', '-Select Role-', 1),
(36, 'aba', 'tesfa', 'danial', 'F', '2018-05-26', 885656, 'o0o', 'msc', 'System Admin', 1),
(39, 'dev', 'dev', 'dse', 'm', '2018-06-18', 9458, '4', 'diplo', 'devmanager', 1),
(40, '', '', '', 'M', '0000-00-00', 0, '', '', '-Select Role-', 1),
(44, 'mizal', 'alebel', 'ww', 'M', '2018-06-12', 918, '10', 'Bsc', 'Asso Manager', 1),
(45, 'mahrie', 'as', 'as', 'M', '2018-06-15', 34, '2', 'Msc', 'Asso Manager', 1),
(46, 'ashenafie', 'desalegn', 'as', 'M', '2018-06-08', 918, '12', 'Bsc', 'Asso Manager', 1),
(47, 'Sahile', 'shferaw', 'tsema', 'M', '2018-06-03', 2147483647, '10', 'msc', 'Asso Manager', 1),
(48, 'Melkamu', 'dagnaw', 'dawit', 'M', '2018-06-29', 2147483647, '04', 'Bsc', 'Asso Manager', 1),
(49, 'Mersha', 'Gbremedhin', 'tefera', 'M', '2018-06-14', 964586, '09', 'MSc', 'Asso Manager', 1),
(52, 'Estifanos', 'abebe', 'dereje', 'M', '2018-06-22', 9684576, '15', 'Msc', 'Asso Manager', 1),
(53, 'Asnka', 'tigabu', 'dawit', 'F', '2018-06-15', 978, '12', 'Msc', 'Asso Manager', 1),
(54, 'Andamlak', 'teferie', 'goshu', 'M', '2018-06-08', 998797, '05', 'Bsc', 'Asso Manager', 1),
(62, 'Asefa', 'Belay', 'Dessie', 'M', '2018-06-26', 985768576, '12', 'MSc', 'Asso Manager', 1),
(63, 'Asr', 'Asr', 'Asgdhsahd', 'M', '2009-09-03', 909876543, '07', 'Msc', 'System Admin', 1),
(64, '', '', '', 'please', '0000-00-00', 0, '', '', '-Select Role-', 1),
(65, 'Asss', 'Sddd', 'Zxxx', 'M', '2009-09-03', 909876543, '12', 'Cse', 'Asso Manager', 1),
(66, 'Asefa', 'Belay', 'Ferede', 'F', '2018-05-01', 976543223, '12', 'Msc', 'Distributer Manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `filename` varchar(432) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--


-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `FIRST_NAME` varchar(25) NOT NULL,
  `MIDDLE_NAME` varchar(25) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `PHONE_NO` int(11) NOT NULL,
  `KEBELE` varchar(23) NOT NULL,
  `REQUEST_TO` varchar(30) NOT NULL,
  `LEVEL` varchar(54) NOT NULL,
  `BORD_NO` int(11) NOT NULL,
  `OPERATOR_LICENCE` varchar(874) NOT NULL,
  `BUSINESS_LICENCE` varchar(765) NOT NULL,
  `INSURANCE_MEMBER` varchar(678) NOT NULL,
  `REQUASTED_DATE` date NOT NULL,
  `REQUAST_ID` int(11) NOT NULL,
  `ACCEPTED` varchar(35) NOT NULL,
  `APPROVED` varchar(35) NOT NULL,
  PRIMARY KEY (`REQUAST_ID`),
  KEY `REQUAST_ID` (`REQUAST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `PHONE_NO`, `KEBELE`, `REQUEST_TO`, `LEVEL`, `BORD_NO`, `OPERATOR_LICENCE`, `BUSINESS_LICENCE`, `INSURANCE_MEMBER`, `REQUASTED_DATE`, `REQUAST_ID`, `ACCEPTED`, `APPROVED`) VALUES
('Asefa', 'Degu', 'Ferede', 975245422, '09', 'Tana Beles', 'level 3', 76456, '13.jpg', '25.jpg', '26.jpg', '2018-05-24', 5, 'accepted', 'Not'),
('Djfghfd', 'Dfdfd', 'Ggfgf', 975245422, '34', 'Tisabay', 'level 3', 70, 'amazone1.png', 'amazone2.png', 'amazone1.png', '2018-05-22', 12, 'Not', 'Not'),
('Asefa', 'Degu', 'Ferede', 934567890, '24', 'Tana Beles', 'level 3', 35, '28.jpg', 'amazone1.png', 'amazone2.png', '0000-00-00', 65, 'accepted', 'Not'),
('aa', 'ab', 'ab', 2345, '2', 'Tana Beles', 'level 3', 0, '1.jpg', '3.jpg', '5.jpg', '2018-06-15', 101, 'accepted', 'Approved'),
('Asdfg', 'Sghj', 'Sdfghj', 987655656, '17', 'Tana Beles', 'level 3', 900, '19.jpg', '31.jpg', 'ask1.jpg', '0000-00-00', 300, 'Rejected', 'Not'),
('abte', 'abebaw', 'asfaw', 929272580, '68', 'Tisabay', 'level 1', 0, '14.jpg', 'admin3.png', 'admin3.png', '2018-06-20', 432, 'Rejected', 'Not'),
('Asefa', 'Degu', 'Ferede', 975342189, '98', 'Tana Beles', 'level 3', 1001, '12.jpg', '26.jpg', 'admin3.png', '0000-00-00', 1000, 'accepted', 'Approved'),
('Ermias', 'Assefa', 'Desssie', 924354657, '12', 'Tana Beles', 'level 3', 1002, '13.jpg', '28.jpg', 'amazone1.png', '0000-00-00', 1003, 'accepted', 'Approved'),
('Getaw', 'Teklie', 'Tigabu', 941697670, '01', 'Tana Beles', 'level 3', 1234, '2.png', '14.jpg', '26.jpg', '0000-00-00', 1234, 'accepted', 'Approved'),
('Adiss', 'Abye', 'Feree', 987654323, '09', 'Tana Beles', 'level 3', 39, 'bbg.jpg', '223.jpg', 'b3.jpg', '0000-00-00', 2112, 'accepted', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `EMPL_ID` int(11) NOT NULL,
  `DRIVER_NAME` varchar(30) NOT NULL,
  `ASSICTANCE_NAME` varchar(25) NOT NULL,
  `BORD_NUMBER` int(11) NOT NULL,
  `ASSOCIATION_NAME` varchar(30) NOT NULL,
  `REQ_ID` int(11) NOT NULL,
  `INITIAL_PLACE` varchar(34) NOT NULL,
  `DESTINATION_PLACE` varchar(45) NOT NULL,
  `LEVEL` varchar(23) NOT NULL,
  `PREPARED_DATE` date NOT NULL,
  `DISTANCE` varchar(23) NOT NULL,
  `TARIFF` varchar(35) NOT NULL,
  KEY `EMPL_ID` (`EMPL_ID`,`ASSOCIATION_NAME`,`REQ_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`EMPL_ID`, `DRIVER_NAME`, `ASSICTANCE_NAME`, `BORD_NUMBER`, `ASSOCIATION_NAME`, `REQ_ID`, `INITIAL_PLACE`, `DESTINATION_PLACE`, `LEVEL`, `PREPARED_DATE`, `DISTANCE`, `TARIFF`) VALUES
(40, 'Dereje', 'Ayelgn', 1002, 'Tana Beles', 70, 'Bahir Dar', 'Gondar', '', '2018-05-23', '175', '80'),
(40, 'Ayele', 'canyalew', 1002, 'Tana Beles', 90, 'Bahir Dar', 'debr Brihan', '', '2018-05-23', '190', '30'),
(40, 'Boye', 'Abaynew', 1002, 'Tana Beles', 1000, 'Bahir Dar', 'Adiss Abeba', 'Level 3', '2018-05-23', '', ''),
(40, 'Boye', 'Abaynew', 1002, 'Tana Beles', 1000, 'Bahir Dar', 'Adiss Abeba', 'Level 3', '2018-05-23', '', ''),
(40, 'abat', 'andargie', 700, 'Tana Beles', 2112, 'Bahir Dar', 'Gondar', 'Level 3', '2018-05-23', '180km', '780');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_backup`
--

CREATE TABLE IF NOT EXISTS `schedule_backup` (
  `DEIVER_NAME` varchar(34) NOT NULL,
  `ASISTANCE_NAME` varchar(45) NOT NULL,
  `BORD_NUMBER` varchar(46) DEFAULT NULL,
  `REQ_ID` varchar(34) NOT NULL,
  `INITIAL_PLACE` varchar(76) NOT NULL,
  `DESTINATION_PLACE` varchar(65) NOT NULL,
  `PREPARED_DATE` date NOT NULL,
  `LEVEL` varchar(34) DEFAULT NULL,
  `DISTANCE` varchar(54) NOT NULL,
  `TARIFF` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_backup`
--

INSERT INTO `schedule_backup` (`DEIVER_NAME`, `ASISTANCE_NAME`, `BORD_NUMBER`, `REQ_ID`, `INITIAL_PLACE`, `DESTINATION_PLACE`, `PREPARED_DATE`, `LEVEL`, `DISTANCE`, `TARIFF`) VALUES
('Fnotee', 'Defaru2112', '', '12', 'Bahir Dar', 'asasa', '2018-05-19', '', '180km', '7600'),
('Fnotee', 'Defaru2112', '', '12', 'Bahir Dar', 'asasa', '2018-05-19', '', '200km', '100'),
('Aerb', 'kassegn123', '', '984', 'Bahir Dar', 'Gondar', '2018-05-15', '', '190km', '80birr'),
('Admin', 'kassegn123', '', '12', 'Bahir Dar', 'deef', '2009-09-09', '', '23', '12'),
('Almaz', 'Degumach', '', '432', 'bahir', 'go', '2018-06-13', '', '124', '124'),
('Wwwwww', 'Kassegn123', '', '1000', 'Bahir Dar', 'Dessie', '2018-05-16', '', '89', '34'),
('Tana Beles', '1000', '', 'ass', 'Bahirar', 'go', '2018-05-22', '2018-05-22', '10000', '10000'),
('Achenf', 'Abaynew', '1002', '1000', 'Bahir Dar', 'Debecha', '2018-05-23', 'Level 3', '19', '10'),
('Ayele', 'canyalew', '1002', '90', 'Bahir Dar', 'debr Brihan', '2018-05-23', '', '190', '30'),
('Ayele', 'canyalew', '1002', '70', 'Bahir Dar', 'Gondar', '2018-05-23', '', '175', '80'),
('Ermias', 'canyalew', '1002', '70', 'Bahir Dar', 'Gondar', '2018-05-23', '', '175', '80'),
('Dereje', 'Ayelgn', '1002', '70', 'Bahir Dar', 'Gondar', '2018-05-23', '', '175', '80'),
('abat', 'andargie', '700', '2112', 'Bahir Dar', 'Gondar', '2018-05-23', 'Level 3', '180km', '780');

-- --------------------------------------------------------

--
-- Table structure for table `shedule_request`
--

CREATE TABLE IF NOT EXISTS `shedule_request` (
  `OPERATOR_ID` int(11) NOT NULL,
  `REQUEST_FOR` varchar(45) NOT NULL,
  `ASSOCATION_NAME` varchar(45) NOT NULL,
  `DRIVER_NAME` varchar(56) NOT NULL,
  `ASSICTANCE_NAME` varchar(45) NOT NULL,
  `BORD_NO` int(11) NOT NULL,
  `LEVEL` varchar(26) NOT NULL,
  `FROM` varchar(56) NOT NULL,
  `TO` varchar(56) NOT NULL,
  `PERMISSION` varchar(34) NOT NULL,
  `PREPARED` varchar(50) NOT NULL,
  KEY `OPERATOR_ID` (`OPERATOR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shedule_request`
--

INSERT INTO `shedule_request` (`OPERATOR_ID`, `REQUEST_FOR`, `ASSOCATION_NAME`, `DRIVER_NAME`, `ASSICTANCE_NAME`, `BORD_NO`, `LEVEL`, `FROM`, `TO`, `PERMISSION`, `PREPARED`) VALUES
(101, 'To Update', 'Tana Beles', 'werta', 'defaru', 0, '', 'bahir', 'go', 'Yes', 'Done'),
(2112, 'New User', 'Tana Beles', 'abate', 'andargie', 700, 'Level 3', 'Bahir Dar', 'Gondar', 'Yes', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `DATE` date NOT NULL,
  `NOTICE_FOR` varchar(45) NOT NULL,
  `IMAGE` varchar(564) NOT NULL,
  `TEXT` varchar(234) NOT NULL,
  `EMPL_ID` int(11) NOT NULL,
  KEY `EMPL_ID` (`EMPL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`DATE`, `NOTICE_FOR`, `IMAGE`, `TEXT`, `EMPL_ID`) VALUES
('2018-05-03', 'Blien', '5.jpg', 'sdaaaaaaaaaaaaaaa', 44),
('2000-02-02', 'Tiret', '9.jpg', 'aserdvncxbmvncbmnvcbnvcx,bn,vcxnb,cnvb,nvb', 45),
('2018-05-01', 'Key Kebero', '', 'ddddddddddddddddddddddddddddd', 45),
('2018-05-01', 'For All Association', '5.jpg', 'dddddddddddddddddddddddddddddddd', 45),
('2018-05-23', 'For All', 'ask1.jpg', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 40),
('2018-05-23', 'Tana Beles', 'amazone3.png', 'gggggggggggggggggggggggggggggggggg', 44),
('2018-05-23', 'For All', '24.jpg', 'rrrrrrrrrrrrrrrrrrrrrr', 44);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`ADMIN_IDF`) REFERENCES `admin` (`ADMIN_ID`);

--
-- Constraints for table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `association_ibfk_1` FOREIGN KEY (`EMPL_ID`) REFERENCES `employee` (`EID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`ADMIN_ID`) REFERENCES `admin` (`ADMIN_ID`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`EMPL_ID`) REFERENCES `employee` (`EID`);

--
-- Constraints for table `shedule_request`
--
ALTER TABLE `shedule_request`
  ADD CONSTRAINT `shedule_request_ibfk_1` FOREIGN KEY (`OPERATOR_ID`) REFERENCES `request` (`REQUAST_ID`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`EMPL_ID`) REFERENCES `employee` (`EID`);
