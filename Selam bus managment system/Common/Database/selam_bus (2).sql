-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 03:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
('admin', '21232f297a57a5a743894a0e4a801fc3', '1', 27, 13);

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

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `SEAT_ID` int(15) NOT NULL,
  `SEAT_NO` int(11) NOT NULL,
  `BUS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(27, 'admin', 'admin', 'M', '0000-00-00', 23, 'BahirDar', 'admin', '09090909', '', NULL);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
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
  MODIFY `NOTICE_ID` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifcation`
--
ALTER TABLE `notifcation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `RESERVATION_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ROUTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `SEAT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
