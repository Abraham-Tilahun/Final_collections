-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 12:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selam_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(7) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `status`, `user_id`, `account_id`) VALUES
('officer', 'd31d86d0de8dd34fc535c67e480deaa2', '1', 29, 1),
('admin', '21232f297a57a5a743894a0e4a801fc3', '1', 27, 13),
('man', '39c63ddb96a31b9610cd976b896ad4f0', '1', 37, 16),
('pass', '1a1dc91c907325c69271ddf0c944bc72', '1', 39, 22),
('we', 'ff1ccf57e98c817df1efcd9fe44a8aeb', '1', 40, 23),
('habtie', '3ac9e2b1600eadbc35c139a5d341b84f', '1', 41, 24);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BUS_ID` int(15) NOT NULL,
  `PLATE_NUMBER` int(11) NOT NULL,
  `HOLDING_CAPACITY` int(11) NOT NULL,
  `journy_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUS_ID`, `PLATE_NUMBER`, `HOLDING_CAPACITY`, `journy_id`) VALUES
(6, 23, 2, 5),
(7, 34, 2, NULL),
(8, 78, 23, 7),
(9, 45, 34, 6),
(10, 80, 20, 6),
(11, 90, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `COMMENT_ID` int(15) NOT NULL,
  `SENDER_NAME` varchar(15) NOT NULL,
  `SENDER_EMAIL` varchar(15) NOT NULL,
  `COMMENT_BODY` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`COMMENT_ID`, `SENDER_NAME`, `SENDER_EMAIL`, `COMMENT_BODY`) VALUES
(4, 'Dave', 'Dave@gmail.com', 'The Fucked World !!! ');

-- --------------------------------------------------------

--
-- Table structure for table `journy`
--

CREATE TABLE `journy` (
  `JOURNY_ID` int(15) NOT NULL,
  `FROM` varchar(15) NOT NULL,
  `TO` varchar(15) NOT NULL,
  `DEPARTURE_TIME` time NOT NULL,
  `ARRIVAL_TIME` time NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journy`
--

INSERT INTO `journy` (`JOURNY_ID`, `FROM`, `TO`, `DEPARTURE_TIME`, `ARRIVAL_TIME`, `manager_id`) VALUES
(5, 'Gondar', 'Addis Ababa', '12:59:00', '01:00:00', 37),
(6, 'Bahir Dar', 'Addis Ababa', '11:58:00', '14:01:00', 37),
(7, 'Hawasa', 'Addis Ababa`', '13:00:00', '11:58:00', 37);

-- --------------------------------------------------------

--
-- Table structure for table `journy_info`
--

CREATE TABLE `journy_info` (
  `JOURNY_INFO_ID` int(11) NOT NULL,
  `JOURNY_NAME` varchar(15) NOT NULL,
  `DEPARTURE_TIME` time NOT NULL,
  `DEPARTURE_PLACE` varchar(15) NOT NULL,
  `LUNCH_PLACE` varchar(15) NOT NULL,
  `DISTANCE_KM` int(11) NOT NULL,
  `JOURNY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `NOTICE_ID` int(15) NOT NULL,
  `NOTICE_TEXT` varchar(1000) NOT NULL,
  `POST_BY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`NOTICE_ID`, `NOTICE_TEXT`, `POST_BY`) VALUES
(8, ' fuck', 27);

-- --------------------------------------------------------

--
-- Table structure for table `notifcation`
--

CREATE TABLE `notifcation` (
  `ID` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `notice_type` varchar(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifcation`
--

INSERT INTO `notifcation` (`ID`, `reservation_id`, `notice_type`, `date`) VALUES
(2, 50, 'postponed', '2018-05-27 09:16:50'),
(8, 52, 'confirm', '2018-05-27 11:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `RESERVATION_ID` int(15) NOT NULL,
  `ASSIGNBY_ID` int(15) DEFAULT NULL,
  `SEAT_NO` int(11) NOT NULL,
  `RESERVE_BY` int(11) NOT NULL,
  `JOURNY_ID` int(11) NOT NULL,
  `RESERVATION_DATE` datetime NOT NULL,
  `SUBMITTED_DATE` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`RESERVATION_ID`, `ASSIGNBY_ID`, `SEAT_NO`, `RESERVE_BY`, `JOURNY_ID`, `RESERVATION_DATE`, `SUBMITTED_DATE`, `status`) VALUES
(43, NULL, 35, 40, 6, '2018-05-29 00:58:46', '2018-05-13 00:58:46', 'Not Reserved'),
(50, 29, 42, 39, 6, '2018-05-28 01:44:41', '2018-05-27 01:44:41', 'Reserved'),
(52, 29, 44, 39, 6, '2018-05-27 02:33:00', '2018-05-27 02:33:00', 'Reserved'),
(53, 29, 45, 39, 6, '2018-05-29 09:11:34', '2018-05-27 09:11:34', 'Reserved'),
(54, 29, 47, 39, 6, '2018-05-27 09:30:23', '2018-05-27 09:30:23', 'Reserved'),
(55, 29, 48, 39, 6, '2018-05-27 09:33:19', '2018-05-27 09:33:19', 'Reserved'),
(56, 29, 49, 39, 6, '2018-05-27 11:40:18', '2018-05-27 11:40:18', 'Reserved'),
(57, NULL, 50, 39, 6, '2018-05-27 11:40:43', '2018-05-27 11:40:43', 'Not Reserved'),
(60, NULL, 53, 39, 7, '2018-05-27 11:47:05', '2018-05-27 11:47:05', 'Not Reserved'),
(61, NULL, 54, 39, 5, '2018-05-27 11:53:33', '2018-05-27 11:53:33', 'Not Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ROUTE_ID` int(11) NOT NULL,
  `FROM` varchar(100) NOT NULL,
  `TO` varchar(100) NOT NULL,
  `DISTANCE` varchar(50) NOT NULL,
  `COST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ROUTE_ID`, `FROM`, `TO`, `DISTANCE`, `COST`) VALUES
(4, 'Gondar', 'Addis Ababa', '900KM', '45$'),
(5, 'Addis Ababa', 'Sudan', '999', '99');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `SEAT_ID` int(15) NOT NULL,
  `SEAT_NO` int(11) NOT NULL,
  `BUS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`SEAT_ID`, `SEAT_NO`, `BUS_ID`) VALUES
(35, 1, 9),
(42, 21, 9),
(44, 2, 9),
(45, 10, 9),
(47, 6, 9),
(48, 7, 9),
(49, 34, 9),
(50, 19, 9),
(53, 2, 8),
(54, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `PHONE_NO` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `last_seen` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `sex`, `DOB`, `age`, `city`, `role`, `PHONE_NO`, `EMAIL`, `last_seen`) VALUES
(27, 'admin', 'admin', 'M', '0000-00-00', 23, 'BahirDar', 'admin', '09090909', '', NULL),
(29, 'officer', 'officer', 'M', '0000-00-00', 23, 'Gondar', 'Ticket_Officer', '9898989898', '', '2018-05-27 12:50:19'),
(37, 'manager', 'manager', 'F', '0000-00-00', 12, 'hawasa', 'Manager', '0909090909', '', NULL),
(39, 'pass', 'pass', 'F', '0000-00-00', 23, 'Hawasa', 'Passenger', '0909090909', '', '2018-05-27 12:44:35'),
(40, 'we', 'wewe', 'F', '0000-00-00', 23, 'we', 'Passenger', '0909090909', '', '2018-05-27 10:20:08'),
(41, 'habtie', 'habtie', 'M', '0000-00-00', 20, 'BahirDar', 'Passenger', '0909090909', 'habtie@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `user_id3` (`user_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BUS_ID`),
  ADD KEY `journy_id3` (`journy_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `journy`
--
ALTER TABLE `journy`
  ADD PRIMARY KEY (`JOURNY_ID`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `journy_info`
--
ALTER TABLE `journy_info`
  ADD PRIMARY KEY (`JOURNY_INFO_ID`),
  ADD KEY `journy_id2` (`JOURNY_ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`NOTICE_ID`),
  ADD KEY `POSY_BY` (`POST_BY`);

--
-- Indexes for table `notifcation`
--
ALTER TABLE `notifcation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`RESERVATION_ID`),
  ADD KEY `ASSIGNED_BY` (`ASSIGNBY_ID`),
  ADD KEY `RESERVE_BY` (`RESERVE_BY`),
  ADD KEY `JOURNY_ID` (`JOURNY_ID`),
  ADD KEY `SEAT_NO` (`SEAT_NO`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ROUTE_ID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`SEAT_ID`),
  ADD KEY `BUS_ID` (`BUS_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `BUS_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `COMMENT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `journy`
--
ALTER TABLE `journy`
  MODIFY `JOURNY_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `journy_info`
--
ALTER TABLE `journy_info`
  MODIFY `JOURNY_INFO_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `NOTICE_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notifcation`
--
ALTER TABLE `notifcation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `RESERVATION_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ROUTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `SEAT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `user_id3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `journy_id3` FOREIGN KEY (`journy_id`) REFERENCES `journy` (`JOURNY_ID`);

--
-- Constraints for table `journy`
--
ALTER TABLE `journy`
  ADD CONSTRAINT `manager_id` FOREIGN KEY (`manager_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `journy_info`
--
ALTER TABLE `journy_info`
  ADD CONSTRAINT `journy_id2` FOREIGN KEY (`JOURNY_ID`) REFERENCES `journy` (`JOURNY_ID`);

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `POSY_BY` FOREIGN KEY (`POST_BY`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `ASSIGNED_BY` FOREIGN KEY (`ASSIGNBY_ID`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `JOURNY_ID` FOREIGN KEY (`JOURNY_ID`) REFERENCES `journy` (`JOURNY_ID`),
  ADD CONSTRAINT `RESERVE_BY` FOREIGN KEY (`RESERVE_BY`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `SEAT_NO` FOREIGN KEY (`SEAT_NO`) REFERENCES `seat` (`SEAT_ID`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `BUS_ID` FOREIGN KEY (`BUS_ID`) REFERENCES `bus` (`BUS_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
