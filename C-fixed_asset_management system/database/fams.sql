-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 02:30 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fams`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `AN_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `PREPARE_FOR` varchar(100) NOT NULL,
  `NOTE` text NOT NULL,
  `PREPARE_DATE` date NOT NULL,
  `EXPIRE_DATE` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`AN_ID`, `ID`, `TITLE`, `PREPARE_FOR`, `NOTE`, `PREPARE_DATE`, `EXPIRE_DATE`) VALUES
(21, 27, 'Amazing', '', '\r\nbla bla bla\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2017-06-07', '2017-06-22'),
(24, 27, 'youranswer', 'asset_user', 'bla bla bla Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-06-20', '2017-06-30'),
(27, 27, 'gashw', 'asset_manager', 'Interface is the area that the user and our system are communicate to each other. We are shown those interaction through graphical user interface as the following.', '2017-06-27', '2017-06-30'),
(28, 27, 'gashw', 'asset_manager', 'Interface is the area that the user and our system are communicate to each other. We are shown those interaction through graphical user interface as the following.', '2017-06-27', '2018-07-12'),
(29, 27, 'gashw', 'asset_user', 'Interface is the area that the user and our system are communicate to each other. We are shown those interaction through graphical user interface as the following.', '2017-06-27', '2017-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE IF NOT EXISTS `asset` (
  `ASSET_ID` int(11) NOT NULL,
  `ASSET_NAME` varchar(500) NOT NULL,
  `MODEL` varchar(500) NOT NULL,
  `SERIAL` varchar(50) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `PRICE` double NOT NULL,
  `TOTAL_PRICE` double NOT NULL,
  `REG_DATE` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`ASSET_ID`, `ASSET_NAME`, `MODEL`, `SERIAL`, `QUANTITY`, `PRICE`, `TOTAL_PRICE`, `REG_DATE`) VALUES
(68, 'computer', 'dell', ' ', 0, 1200, 0, '2017-06-22'),
(69, 'tv', 'lgo', ' ', 18, 300, 5400, '17-06-21'),
(76, 'computer', 'dell', '', 15, 1000, 15000, '17-06-28'),
(77, 'cable', 'tcp', '', 0, 1000, 0, '2017-06-22'),
(78, 'cable', 'tcp', '', 0, 2100, 0, '2017-06-24'),
(79, 'board', 'whiteboard', '', 0, 1000, 0, '2017-06-25'),
(80, 'board', 'whiteboard', '', 1, 1200, 1200, '2017-06-27'),
(81, 'table', '', ' ', 12, 300, 45291, '17-06-28'),
(82, 'tyre', 'horizon', '', 0, 10, 0, '2017-06-28'),
(83, 'tyre', 'horizon', '', 2, 11, 22, '2017-06-30'),
(84, 'co', 'fe', '', 4, 10, 40, '2017-06-30'),
(85, 'gg', 'gg', '', 0, 2, 0, '2017-06-30'),
(86, 'gg', 'gg', '', 1, 3, 3, '2017-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `asset_user`
--

CREATE TABLE IF NOT EXISTS `asset_user` (
  `ID` int(11) NOT NULL,
  `F_NAME` varchar(50) NOT NULL,
  `M_NAME` varchar(50) NOT NULL,
  `WORK_TYPE` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SEX` varchar(50) NOT NULL,
  `ADRESS` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `PROFILE` varchar(500) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_user`
--

INSERT INTO `asset_user` (`ID`, `F_NAME`, `M_NAME`, `WORK_TYPE`, `EMAIL`, `SEX`, `ADRESS`, `PHONE`, `PROFILE`, `STATUS`) VALUES
(1, 'gemachu', 'yane', 'driver', 'sheb@gmail.com', 'male', 'shenkora', '012266', '../images/profile/v58-937036.jpg', 1),
(2, 'shambal', 'omer', 'teacher', 'omer@gmail.com', 'male', 'aa', '0912345678', '../images/profile/as.jpg', 0),
(3, 'chandira', 'zara', 'labassistance', 'zara@gmail.com', 'male', 'aa', '0912345678', '', 1),
(4, 'ayana', 'eniyew', 'teacher', 'ayana@gmail.com', 'male', 'aa', '0912345678', '', 1),
(5, 'girma', 'yitbarek', 'teacher', 'gy@gmail.com', 'male', 'assosa', '091845165', '', 0),
(6, 'desalew', 'shimelis', 'temari', 'desalew845@gmail.com', 'male', 'asssosa', '0935589536', '', 0),
(7, 'mother', 'father', 'gsah', 'mom@gmail.com', 'male', 'assosa', '0935589536', '', 0),
(8, 'fekadu', 'eshetu', 'teacher', 'fike@gmail.com', 'male', 'assosa', '0912265469', '../images/profile/fekkkkkk.jpg', 0),
(9, 'biruk', 'zer', 'teacher', 'biruk@gmail.com', 'male', 'somale', '11854848', '../images/profile/as.jpg', 1),
(10, 'balem', 'gebeyehu', 'teacher', 'balem@gmail.com', 'male', 'assosa', '456468468', '../images/profile/as.jpg', 0),
(11, 'toni', 'gosaye', 'teacher', 'toni@gmail.com', 'male', 'assosa', '091022515', '../images/profile/Arrow_Promo_03.jpg', 0),
(12, 'sisay', 'derso', 'teacher', 'sis@gmail.com', 'male', 'assosa', '0912265455', '../images/profile/16730462_111242962731735_500676989471458424_n.jpg', 0),
(13, 'wey', 'alex', 'user', 'wey@gmail.com', 'female', 'comp', '0912998870', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `F_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `FEEDBACKS` text NOT NULL,
  `PREPARE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SEEN` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_ID`, `ID`, `TITLE`, `FEEDBACKS`, `PREPARE_DATE`, `SEEN`) VALUES
(8, 1, 'fike', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-04-07 10:01:04', 0),
(9, 8, 'tekebilenal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-04-20 19:12:20', 0),
(10, 1, 'ESHI TEKEBILENAL', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-04-20 19:18:03', 0),
(18, 2, 'mukera', 'The missile might collide with a mountain if the navigation system cannot compute new flight coordinates fast enough, or if the new coordinates do not steer the missile out of the collision course. This relates to functional correctness. Thus, Real-time systems can be defined as those systems in which the overall correctness of the system depends on both the functional correctness and the timing correctness.\r\n\r\n', '2017-05-12 20:03:31', 0),
(21, 12, 'ok', 'Interface is the area that the user and our system are communicate to each other. We are shown those interaction through graphical user interface as the following.', '2017-06-27 18:10:13', 0),
(22, 2, 'ghad', '\r\nThe missile might collide with a mountain if the navigation system cannot compute new flight coordinates fast enough, or if the new coordinates do not steer the missile out of the collision course. This relates to functional correctness. Thus, Real-time systems can be defined as those systems in which the overall correctness of the system depends on both the functional correctness and the timing correctness', '2017-06-27 20:28:05', 0),
(23, 2, 'vgdfhjz', '\r\nThe missile might collide with a mountain if the navigation system cannot compute new flight coordinates fast enough, or if the new coordinates do not steer the missile out of the collision course. This relates to functional correctness. Thus, Real-time systems can be defined as those systems in which the overall correctness of the system depends on both the functional correctness and the timing correctness', '2017-06-27 20:28:14', 0),
(24, 2, 'gsajh', '\r\nThe missile might collide with a mountain if the navigation system cannot compute new flight coordinates fast enough, or if the new coordinates do not steer the missile out of the collision course. This relates to functional correctness. Thus, Real-time systems can be defined as those systems in which the overall correctness of the system depends on both the functional correctness and the timing correctness', '2017-06-27 20:28:24', 0),
(25, 2, 'bhj', '\r\nThe missile might collide with a mountain if the navigation system cannot compute new flight coordinates fast enough, or if the new coordinates do not steer the missile out of the collision course. This relates to functional correctness. Thus, Real-time systems can be defined as those systems in which the overall correctness of the system depends on both the functional correctness and the timing correctness', '2017-06-27 20:28:34', 0),
(26, 2, 'because', 'Title: Answer\r\nPrepared on: 2017-06-28 00:40:33\r\nplease answer by fast thisproblem report is very esential', '2017-06-27 22:25:16', 0),
(27, 2, 'answer2', 'Title: Answer\r\nPrepared on: 2017-06-28 00:40:33\r\nplease answer by fast thisproblem report is very esential', '2017-06-27 22:26:37', 0),
(28, 2, 'aboutme', 'oktanks', '2017-06-28 04:57:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fixed_asset_manager`
--

CREATE TABLE IF NOT EXISTS `fixed_asset_manager` (
  `ID` int(11) NOT NULL,
  `F_NAME` varchar(50) NOT NULL,
  `M_NAME` varchar(50) NOT NULL,
  `WORK_TYPE` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SEX` varchar(50) NOT NULL,
  `ADRESS` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `PROFILE` varchar(500) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixed_asset_manager`
--

INSERT INTO `fixed_asset_manager` (`ID`, `F_NAME`, `M_NAME`, `WORK_TYPE`, `EMAIL`, `SEX`, `ADRESS`, `PHONE`, `PROFILE`, `STATUS`) VALUES
(1, 'inew', 'kasim', 'asett', 'kabe@gmail.com', 'male', 'assosa', '0912265469', '../images/profile/image22.jpg', 0),
(2, 'fekadu', 'eshetu', 'teacher', 'fikeeshetu@gmail.com', 'male', 'assosa', '0912265469', '../images/profile/Ethiopian Flag With Map 1 .jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE IF NOT EXISTS `payement` (
  `PAYMENT_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `ASSET_NAME` varchar(50) NOT NULL,
  `ASSET_TYPE` varchar(50) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `AMMOUNT` double NOT NULL,
  `PAYEMENT_DATE` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payement`
--

INSERT INTO `payement` (`PAYMENT_ID`, `ID`, `ASSET_NAME`, `ASSET_TYPE`, `QUANTITY`, `AMMOUNT`, `PAYEMENT_DATE`) VALUES
(31, 2, 'computer', 'dell', 6, 7200, '2017-06-20'),
(32, 2, 'computer', 'dell', 11, 22200, '2017-06-20'),
(33, 2, 'computer', 'dell', 6, 7200, '2017-06-20'),
(34, 2, 'computer', 'dell', 2, 2400, '2017-06-21'),
(35, 2, 'computer', 'dell', 1, 1200, '2017-06-21'),
(36, 2, 'cable', 'tcp', 2, 3100, '2017-06-24'),
(37, 2, 'board', 'whiteboard', 3, 3200, '2017-06-27'),
(38, 2, 'computer', 'dell', 5, 6000, '2017-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `problem_report`
--

CREATE TABLE IF NOT EXISTS `problem_report` (
  `PR_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `NOTE` text NOT NULL,
  `PREPARE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` int(11) NOT NULL DEFAULT '0',
  `RETURNED_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_report`
--

INSERT INTO `problem_report` (`PR_ID`, `ID`, `TITLE`, `NOTE`, `PREPARE_DATE`, `STATUS`, `RETURNED_DATE`) VALUES
(21, 2, 'give answer quickly', '    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                                                            ', '2017-06-27 21:06:31', 0, '0000-00-00 00:00:00'),
(22, 2, 'answer', 'please answer by fast thisproblem report is very esential', '2017-06-27 21:40:18', 0, '0000-00-00 00:00:00'),
(24, 2, 'answer', 'please answer by fast thisproblem report is very esential', '2017-06-27 23:26:37', 1, '2017-06-27 22:26:37'),
(25, 2, 'answer', 'please answer by fast thisproblem report is very esential', '2017-06-27 23:25:16', 1, '2017-06-27 22:25:16'),
(26, 2, 'abutme', 'betam desmil sira newgggggggnnn', '2017-06-28 05:57:43', 1, '2017-06-28 04:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `property_manager`
--

CREATE TABLE IF NOT EXISTS `property_manager` (
  `ID` int(11) NOT NULL,
  `F_NAME` varchar(50) NOT NULL,
  `M_NAME` varchar(50) NOT NULL,
  `WORK_TYPE` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SEX` varchar(50) DEFAULT NULL,
  `ADRESS` varchar(50) DEFAULT NULL,
  `PHONE` varchar(50) DEFAULT NULL,
  `PROFILE` varchar(500) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_manager`
--

INSERT INTO `property_manager` (`ID`, `F_NAME`, `M_NAME`, `WORK_TYPE`, `EMAIL`, `SEX`, `ADRESS`, `PHONE`, `PROFILE`, `STATUS`) VALUES
(25, 'gebeyehu', 'abebe', 'property manager', 'gb@gmail.com', 'male', 'assosa', '012266', '', 0),
(26, 'husen', 'aman', 'teacher', 'aman@gmail.com', 'male', 'bale', '12365', '', 0),
(27, 'abebe', 'eshetu', 'teacher', 'abe@gmail.com', 'male', 'bale', '012356', '../images/profile/Jagama Kelo.jpg', 0),
(28, 'as', 'aman', 'teacher', 'chal@gmail.com', 'male', 'assosa', '0912265469', '', 0),
(29, 'fekadu', 'eshetu', 'assetmanager', 'am@gmail.com', 'male', 'asu', '0912265469', '', 0),
(30, 'gebeyehu', 'abebe', 'property manager', 'gebey@gmail.com', 'male', 'assosa', '093451266', '../images/profile/Green%20Arrow%20Man%20Movie.jpg', 0),
(31, 'mihret', 'akele', 'property manager', 'mihret@gmail.com', 'male', 'assosa', '0935589536', '../images/profile/arrow.jpg', 0),
(32, 'fikew', 'eshetu', 'teacher', 'fikiti@gmail.com', 'male', 'assosa', '0912345678', '41267.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `R_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `CONTENT` varchar(500) NOT NULL,
  `NOTE` text NOT NULL,
  `TYPE` varchar(500) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0',
  `PREP_DATE` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`R_ID`, `ID`, `CONTENT`, `NOTE`, `TYPE`, `STATUS`, `PREP_DATE`) VALUES
(23, 1, '../generate/reports1497979809.xlsx', 'news', 'one week', 0, '2017-06-20'),
(25, 1, '../generate/reports1498054915.xlsx', 'this report is prepared', 'one week', 0, '2017-06-21'),
(26, 1, '../generate/reports1498155706.xlsx', 'this report is ', 'one week', 0, '2017-06-22'),
(27, 1, '../generate/reports1498592867.xlsx', 'Interface is the area that the user and our system are communicate to each other. We are shown those interaction through graphical user interface as the following.', 'one week', 3, '2017-06-27'),
(28, 1, '../generate/reports1498817799.xlsx', 'fdhh,bjhfghdgchbmn', 'one week', 0, '2017-06-30'),
(29, 1, '../generate/reports1498824083.xlsx', 'hguj', 'three month', 0, '2017-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `RQ_ID` int(11) NOT NULL,
  `PREPARE_DATE` date NOT NULL,
  `ASSET_NAME` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `WITHDRAW_PURPOSE` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0',
  `WITHDRAW_TYPE` varchar(100) NOT NULL,
  `SEEN` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RQ_ID`, `PREPARE_DATE`, `ASSET_NAME`, `TYPE`, `QUANTITY`, `WITHDRAW_PURPOSE`, `ID`, `STATUS`, `WITHDRAW_TYPE`, `SEEN`) VALUES
(19, '2017-03-24', 'rj 45', '   ', 3, 'cfuyg', 2, 2, 'withdraw', 0),
(20, '2017-03-25', 'computer', 'dell', 5, 'bcxb cbj', 2, 2, '', 0),
(22, '2017-03-27', 'computer', 'dell', 8, 'for computer science lab class', 2, 2, 'borrow', 0),
(23, '2017-03-28', 'computer', 'dell', 14, 'dyughger gayug', 2, 2, '', 0),
(24, '2017-03-28', 'computer', 'dell', 2, 'etrdyughkj', 2, 2, 'withdraw', 0),
(25, '2017-03-29', 'door', 'seregela', 3, 'for hgh jbhv ', 2, 2, '', 0),
(26, '2017-03-29', 'computer', 'dell', 10, 'chgb tfuhj', 2, 2, '', 0),
(28, '2017-04-11', 'computer', 'dell', 1, 'for computer science departement office', 8, 2, 'borrow', 0),
(29, '2017-04-11', 'computer', 'dell', 2, 'bla bla bla', 8, 2, '', 0),
(31, '2017-05-03', 'computer', 'dell', 1, 'for show', 2, 2, 'borrow', 0),
(32, '2017-05-05', 'computer', 'dell', 5, 'for computer science lab class', 2, 2, '', 0),
(33, '2017-05-05', 'computer', 'dell', 10, 'for computer science lab class', 2, 2, 'borrow', 0),
(34, '2017-05-05', 'chair', 'class', 3, 'for computer science lab class', 2, 2, '', 0),
(35, '2017-05-05', 'computer', 'dell', 1, 'for computer science lab class', 2, 2, 'withdraw', 0),
(36, '2017-05-06', 'computer', 'dell', 10, 'for computer science departement lab class', 2, 2, '', 0),
(37, '2017-06-07', 'computer', 'dell', 2, 'for computer science lab class', 2, 2, '', 0),
(38, '2017-06-10', 'computer', 'dell', 10, 'zgggchg', 2, 2, 'borrow', 0),
(39, '2017-06-20', 'computer', 'dell', 15, 'for lab class', 2, 2, '', 0),
(40, '2017-06-21', 'computer', 'dell', 10, 'lab class', 2, 2, 'normal', 0),
(43, '2017-06-24', 'cable', 'tcp', 3, 'for ict ceneter network', 2, 2, 'normal', 0),
(44, '2017-06-25', 'computer', 'dell', 10, 'for computer science lab class\r\n', 2, 2, 'normal', 0),
(45, '2017-06-27', 'Board', 'whiteboard', 12, 'for teaching purpose', 2, 2, 'normal', 0),
(47, '2017-06-27', 'computer', 'dell', 5, 'Interface is the area that the user and our system are communicate to each other. We are shown those', 12, 2, 'borrow', 0),
(49, '2017-06-27', 'computer', 'dell', 10, 'Interface is the area that the user and our system are communicate to each other. We are shown those', 12, 2, 'normal', 0),
(50, '2017-06-28', 'computer', 'dell', 10, 'for computer science lab class', 2, 2, 'normal', 0),
(51, '2017-06-28', 'cable', 'tcp', 2, 'for department', 13, 2, 'borrow', 0),
(52, '2017-06-30', 'tyre', 'horizon', 8, 'for university bus', 2, 2, 'normal', 0),
(53, '2017-06-30', 'gg', 'gg', 11, 'hgdshgyh', 2, 2, 'normal', 0),
(54, '2017-06-30', 'computer', 'dell', 0, 'fffvgh', 2, 2, 'borrow', 0),
(55, '2017-06-30', 'computer', 'dell', 1, 'fghuhftg', 2, 1, 'borrow', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `userId` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `USER_TYPE` varchar(50) NOT NULL,
  `verification` varchar(500) NOT NULL,
  `LOGIN` int(11) NOT NULL DEFAULT '0',
  `STATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`userId`, `EMAIL`, `PASSWORD`, `USER_TYPE`, `verification`, `LOGIN`, `STATUS`) VALUES
(1, 'abe@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', 'bd998a7f61d8fc87d29cd279f9f6159d', 1, 0),
(2, 'am@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', '0', 0, 0),
(3, 'aman@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', '0', 0, 0),
(4, 'ayana@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(23, 'balem@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '', 0, 0),
(22, 'biruk@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(5, 'chal@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', '0', 0, 0),
(13, 'desalew845@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'asset_user', '88ac760de126ea67995fb442259bafdd', 0, 0),
(21, 'fike@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(24, 'fikeeshetu@gmail.com', '202cb962ac59075b964b07152d234b70', 'fixed_asset_manager', '0', 0, 0),
(20, 'fikiti@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', '0', 0, 0),
(7, 'gb@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'property_manager', '0', 0, 0),
(17, 'gebey@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', '0', 0, 0),
(8, 'gy@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(9, 'kabe@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'fixed_asset_manager', '54c14533fb67c41abd033c022ad9e939', 0, 0),
(18, 'mihret@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'property_manager', '0', 1, 0),
(15, 'mom@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(10, 'omer@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(11, 'sheb@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0),
(26, 'sis@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '', 0, 0),
(25, 'toni@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '', 1, 0),
(27, 'wey@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'asset_user', '', 0, 0),
(12, 'zara@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'asset_user', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE IF NOT EXISTS `withdraw` (
  `W_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `ASSET_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `SERIAL` varchar(50) DEFAULT NULL,
  `WITHDRAW_TYPE` varchar(100) NOT NULL,
  `WITHDRAW_DATE` date NOT NULL,
  `APPOITEMENT_DATE` date DEFAULT NULL,
  `RETURNED_DATE` date NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`W_ID`, `ID`, `ASSET_ID`, `QUANTITY`, `SERIAL`, `WITHDRAW_TYPE`, `WITHDRAW_DATE`, `APPOITEMENT_DATE`, `RETURNED_DATE`, `STATUS`) VALUES
(1, 2, 68, 4, '- - - ', '', '2017-06-21', '0000-00-00', '0000-00-00', 0),
(2, 2, 77, 1, '', '', '2017-06-24', '0000-00-00', '0000-00-00', 0),
(3, 2, 79, 9, '', '', '2017-06-27', '0000-00-00', '0000-00-00', 0),
(5, 2, 76, 10, '- - - ', '', '2017-06-27', '0000-00-00', '0000-00-00', 0),
(7, 12, 76, 9, '', '', '2017-06-27', '0000-00-00', '0000-00-00', 0),
(8, 12, 68, 1, '- - - ', '', '2017-06-27', '0000-00-00', '0000-00-00', 0),
(9, 2, 76, 5, '', '', '2017-06-28', '0000-00-00', '0000-00-00', 0),
(10, 2, 68, 5, '- - - ', '', '2017-06-28', '0000-00-00', '0000-00-00', 0),
(11, 2, 82, 5, '', '', '2017-06-30', '0000-00-00', '0000-00-00', 0),
(12, 2, 83, 3, '- - - ', '', '2017-06-30', '0000-00-00', '0000-00-00', 0),
(15, 13, 78, 2, '- - - ', '', '2017-06-30', '2017-07-01', '0000-00-00', 0),
(16, 2, 76, 0, '- - - ', '', '2017-06-24', '2017-06-26', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`AN_ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`ASSET_ID`);

--
-- Indexes for table `asset_user`
--
ALTER TABLE `asset_user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`),
  ADD KEY `ID_3` (`ID`);

--
-- Indexes for table `fixed_asset_manager`
--
ALTER TABLE `fixed_asset_manager`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`PAYMENT_ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `problem_report`
--
ALTER TABLE `problem_report`
  ADD PRIMARY KEY (`PR_ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `property_manager`
--
ALTER TABLE `property_manager`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RQ_ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`EMAIL`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`W_ID`),
  ADD KEY `ASSET_ID` (`ASSET_ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ASSET_ID_2` (`ASSET_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `AN_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `ASSET_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `asset_user`
--
ALTER TABLE `asset_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `fixed_asset_manager`
--
ALTER TABLE `fixed_asset_manager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payement`
--
ALTER TABLE `payement`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `problem_report`
--
ALTER TABLE `problem_report`
  MODIFY `PR_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `property_manager`
--
ALTER TABLE `property_manager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RQ_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `W_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `property_-manager` FOREIGN KEY (`ID`) REFERENCES `property_manager` (`ID`);

--
-- Constraints for table `asset_user`
--
ALTER TABLE `asset_user`
  ADD CONSTRAINT `user_accounts` FOREIGN KEY (`EMAIL`) REFERENCES `user_account` (`EMAIL`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `asset_userfed` FOREIGN KEY (`ID`) REFERENCES `asset_user` (`ID`);

--
-- Constraints for table `fixed_asset_manager`
--
ALTER TABLE `fixed_asset_manager`
  ADD CONSTRAINT `user_account` FOREIGN KEY (`EMAIL`) REFERENCES `user_account` (`EMAIL`);

--
-- Constraints for table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `asset_user_payement` FOREIGN KEY (`ID`) REFERENCES `asset_user` (`ID`);

--
-- Constraints for table `problem_report`
--
ALTER TABLE `problem_report`
  ADD CONSTRAINT `problem_asset_user` FOREIGN KEY (`ID`) REFERENCES `asset_user` (`ID`);

--
-- Constraints for table `property_manager`
--
ALTER TABLE `property_manager`
  ADD CONSTRAINT `user_accoun` FOREIGN KEY (`EMAIL`) REFERENCES `user_account` (`EMAIL`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `asset_manager` FOREIGN KEY (`ID`) REFERENCES `fixed_asset_manager` (`ID`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `asset_user` FOREIGN KEY (`ID`) REFERENCES `asset_user` (`ID`);

--
-- Constraints for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD CONSTRAINT `aset_user` FOREIGN KEY (`ID`) REFERENCES `asset_user` (`ID`),
  ADD CONSTRAINT `asset` FOREIGN KEY (`ASSET_ID`) REFERENCES `asset` (`ASSET_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
