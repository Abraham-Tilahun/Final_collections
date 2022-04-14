-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 01:56 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `Accident_ID` int(11) NOT NULL,
  `License_NO` varchar(32) NOT NULL,
  `Plate_NO` varchar(32) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Place` varchar(32) NOT NULL,
  `Road_Category` varchar(32) NOT NULL,
  `GPS_Reading` varchar(32) NOT NULL,
  `acc_type` varchar(32) NOT NULL DEFAULT 'low',
  `Cause` varchar(255) NOT NULL,
  `TP_ID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`Accident_ID`, `License_NO`, `Plate_NO`, `Date`, `Time`, `Place`, `Road_Category`, `GPS_Reading`, `acc_type`, `Cause`, `TP_ID`) VALUES
(1, 'drt23', 'grt-23', '2016-06-06', '05:08:07', 'hawassa', 'h', 'g', 'low', 'dfg', 'melaku2'),
(3, 'drt23', 'grt-23', '2016-06-01', '02:25:00', 'sdfgja', 'slkdjfg', 'slkjbn', 'low', 'slkfbn', 'melaku2'),
(4, 'drt23', 'grt-23', '2016-06-05', '02:20:18', 'hawassa', 'high', 'dfgn', 'high', 'gech', 'melaku2'),
(5, 'drt23', 'grt-23', '2016-06-05', '02:21:09', 'hawassa', 'high', 'dfgn', 'medium', 'gech', 'melaku2');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `region` varchar(32) NOT NULL,
  `bday` varchar(32) NOT NULL,
  `hdate` varchar(32) NOT NULL,
  `lnumber` varchar(32) NOT NULL,
  `level` varchar(32) NOT NULL,
  `woreda` varchar(32) DEFAULT NULL,
  `kebele` varchar(32) DEFAULT NULL,
  `hnum` varchar(32) DEFAULT NULL,
  `pnum` varchar(32) NOT NULL,
  `place` varchar(32) NOT NULL,
  `photo` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fname`, `lname`, `sex`, `region`, `bday`, `hdate`, `lnumber`, `level`, `woreda`, `kebele`, `hnum`, `pnum`, `place`, `photo`) VALUES
(1, 'Getabalew', 'Amtate', 'male', 'SSNP', '1998-05-03', '2016-05-03', 'drt23', 'level4', 'hawassa', 'hawassa', 'mo45', '0915552535', 'Hawassa', 'picdrt23.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `driver_user_list`
--

CREATE TABLE `driver_user_list` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'deactive',
  `pincode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_user_list`
--

INSERT INTO `driver_user_list` (`id`, `user_name`, `password`, `status`, `pincode`) VALUES
(1, 'drt23', '08c02ad4f25493abd3172efc14a5cd38438e5ebe', 'deactive', 2596);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(6) NOT NULL,
  `emp_id` varchar(32) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `bday` date NOT NULL,
  `hdate` date NOT NULL,
  `edu_status` varchar(32) NOT NULL,
  `role` varchar(32) NOT NULL,
  `woreda` varchar(32) DEFAULT NULL,
  `kebele` varchar(32) DEFAULT NULL,
  `hnum` varchar(32) DEFAULT NULL,
  `pnum` varchar(32) NOT NULL,
  `photo` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `fname`, `lname`, `sex`, `bday`, `hdate`, `edu_status`, `role`, `woreda`, `kebele`, `hnum`, `pnum`, `photo`) VALUES
(3, 'Gech13', 'Getabalew', 'Amtate', 'male', '1998-04-05', '2016-04-14', 'BA', 'Employee', 'molale', '01', 'mola2', '0915552538', 'piclogo.jpg'),
(6, 'Solomon12', 'solomon', 'natnael', 'male', '1998-04-15', '2016-04-29', 'BA', 'Employee', 'aleltu', '09', 'aleltu12', '0913934703', 'piclogo.jpg'),
(7, 'Addis2', 'Addis', 'Amtate', 'male', '1998-04-20', '2016-04-29', 'MSc', 'Employee', 'beke', 'beke1', 'beke1', '0911790070', 'piclogo.jpg'),
(8, 'selam1', 'selam', 'Ayele', 'female', '1998-04-14', '2016-04-30', 'MSc', 'Administrator', 'beke', '01', 'be23', '0915552536', 'piclogo.jpg'),
(9, 'Mahlet1', 'Mahlet', 'Abebe', 'female', '1997-09-08', '2016-05-01', 'MA', 'Administrator', '', '09', '', '0915552596', 'piclogo.jpg'),
(10, 'Haymi2', 'Haymi', 'solomon', 'female', '1998-01-11', '2016-05-01', 'BA', 'Administrator', '', '', '', '0915552586', 'piclogo.jpg'),
(11, 'Haymi12', 'Haymi', 'solomon', 'female', '1998-01-11', '2016-05-01', 'BA', 'Administrator', '', '', '', '0915552584', 'piclogo.jpg'),
(12, 'Haymi3', 'Haymi', 'solomon', 'female', '1998-01-11', '2016-05-01', 'BA', 'Administrator', '', '', '', '915552587', 'piclogo.jpg'),
(13, 'mahlet2', 'mahlet', 'addis', 'female', '1998-01-11', '2016-05-01', 'BA', 'Administrator', '', '', '', '0925358623', 'piclogo.jpg'),
(14, 'admin1', 'Natnael', 'mulat', 'male', '1998-05-01', '2016-05-03', 'BA', 'Administrator', '', '', '', '0911523686', 'piclogo.jpg'),
(16, 'admin', 'Getabalew', 'Yhonal', 'male', '1998-05-04', '2016-05-06', 'Diploma', 'Administrator', '', '', '', '0915557859', 'piclogo.jpg'),
(17, 'jhone1', 'jhone', 'admasu', 'male', '1998-05-04', '2016-05-09', 'BA', 'Employee', '', '', '', '0915556868', 'picjhone1.jpeg'),
(29, 'gech4', 'getabalew', 'Amtate', 'male', '1998-05-05', '2016-05-09', 'BA', 'Administrator', '', '', '', '0915552552', 'picgech4.jpeg'),
(30, 'melat3', 'melat', 'abebe', 'female', '1998-05-04', '2016-05-09', 'BA', 'Administrator', '', '', '', '0925563263', 'piclogo.jpg'),
(31, 'Mahelt2', 'Mahlet', 'Abebe', 'female', '1998-05-04', '2016-05-09', 'BA', 'Administrator', '', '', '', '0915555686', 'picMahelt2.jpeg'),
(32, 'Tirufat1', 'Tirufat', 'Tesfaye', 'female', '1998-05-10', '2016-05-12', 'BA', 'Administrator', '', '', '', '0915758695', 'picTirufat1.jpeg'),
(33, 'Getnet1', 'Getnet', 'Azmeraw', 'male', '1998-05-10', '2016-05-12', 'BA', 'Administrator', '', '', '', '0918765845', 'picGetnet1.jpeg'),
(34, 'Engda1', 'Engdawork', 'kebede', 'female', '1998-05-03', '2016-05-18', 'BSc', 'Employee', '', '', '', '0945958675', 'piclogo.jpg'),
(35, 'Tirufat12', 'Tirufat', 'Tesfaye', 'female', '1998-05-03', '2016-05-20', 'MSc', 'Employee', '', '', '', '0921207566', 'piclogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp_user_list`
--

CREATE TABLE `emp_user_list` (
  `id` int(6) NOT NULL,
  `emp_id` varchar(32) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `status` varchar(16) NOT NULL DEFAULT 'deactive',
  `role` varchar(32) NOT NULL,
  `pincode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_user_list`
--

INSERT INTO `emp_user_list` (`id`, `emp_id`, `user_password`, `status`, `role`, `pincode`) VALUES
(4, 'Gech13', 'fa25b4eb72e036b50caca2806a5fc3f19479887b', 'deactive', 'Employee', 5253),
(11, 'Solomon12', 'd933c9e9e0c9fc9a2b8218bfe27fddef59dd8850', 'active', 'Employee', 2548),
(12, 'Addis2', '3891e67f506172e94194e86beacdf9c61e8eca37', 'active', 'Employee', 9568),
(13, 'selam1', '4d5ad5d13d50d911e255af8da5abad16352bab21', 'deactive', 'Administrator', 1253),
(14, 'Mahlet1', '38e85eb4d70c47c67879d4c6b4440688da0222b9', 'active', 'Administrator', 8965),
(15, 'Haymi2', '510d74b69d9d43b60b6f6aa9d95e9f9c9497f815', 'active', 'Administrator', 4758),
(16, 'Haymi12', '510d74b69d9d43b60b6f6aa9d95e9f9c9497f815', 'deactive', 'Administrator', 1475),
(17, 'Haymi3', '510d74b69d9d43b60b6f6aa9d95e9f9c9497f815', 'deactive', 'Administrator', 8593),
(18, 'mahlet2', 'b069ba7e02270dab940bfc10455042704f15b6fa', 'deactive', 'Administrator', 7415),
(19, 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'active', 'Administrator', 7415),
(22, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'active', 'Administrator', 7415),
(23, 'jhone1', '0667e653f87d78354d93bb239e52aa3869af8531', 'active', 'Employee', 8475),
(35, 'gech4', 'fa25b4eb72e036b50caca2806a5fc3f19479887b', 'deactive', 'Administrator', 5245),
(36, 'melat3', 'c56ed141bb4462da95d2b71f4812ae0cb7658cfc', 'deactive', 'Administrator', 7415),
(37, 'Mahelt2', '38e85eb4d70c47c67879d4c6b4440688da0222b9', 'deactive', 'Administrator', 7458),
(38, 'Tirufat1', 'd1370c27bdba51ad83039065d91385cb22f2d2b1', 'deactive', 'Administrator', 8965),
(39, 'Getnet1', '7d71fea41b39edad76fe8fd79311508f1a37e300', 'deactive', 'Administrator', 7845),
(40, 'Engda1', '977c926bf3993d106ff4036eaff4afd9cebb63f7', 'active', 'Employee', 1429),
(42, 'Tirufat12', '9e0d991223b88f3432febcddbf0a9b5eb3320215', 'deactive', 'Employee', 6595);

-- --------------------------------------------------------

--
-- Table structure for table `forumdiscussion`
--

CREATE TABLE `forumdiscussion` (
  `id` int(5) NOT NULL,
  `name` varchar(32) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumdiscussion`
--

INSERT INTO `forumdiscussion` (`id`, `name`, `tittle`, `message`) VALUES
(1, 'gech', 'greeting', 'hello my friend . how was your day ?Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
(2, 'gech', 'greeting', 'hello my friend . how was your day ?Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
(3, 'melaku2', 'good Evening', 'hello my friend . how was your day ?Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
(4, 'Addis2', 'good afternon', 'hello my friend . how was your day ?Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
(5, 'Addis2', 'good afternon', 'hello my friend . how was your day ?Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationId` int(5) NOT NULL,
  `name` varchar(32) NOT NULL,
  `notification` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `punishment`
--

CREATE TABLE `punishment` (
  `Punish_ID` int(11) NOT NULL,
  `License_NO` varchar(32) NOT NULL,
  `V_Plate_NO` varchar(32) NOT NULL,
  `From` varchar(32) NOT NULL,
  `To` varchar(32) NOT NULL,
  `Place` varchar(32) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Receipt_NO` varchar(32) NOT NULL DEFAULT '0',
  `Amount` varchar(32) NOT NULL,
  `paymentStatus` varchar(32) NOT NULL DEFAULT 'not payed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punishment`
--

INSERT INTO `punishment` (`Punish_ID`, `License_NO`, `V_Plate_NO`, `From`, `To`, `Place`, `Date`, `Time`, `Reason`, `Receipt_NO`, `Amount`, `paymentStatus`) VALUES
(1, 'drt23', 'grt-23', 'hawassa', 'hawassa', 'hawassa', '2016-06-07', '06:00:00', 'something', 'res001', '3240', 'payed');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `pass`) VALUES
(0, 'mehamed salah', ' salah');

-- --------------------------------------------------------

--
-- Table structure for table `tpnotification`
--

CREATE TABLE `tpnotification` (
  `id` int(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpuser_list`
--

CREATE TABLE `tpuser_list` (
  `id` int(6) NOT NULL,
  `tp_id` varchar(32) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'deactive',
  `role` varchar(32) NOT NULL,
  `pincode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpuser_list`
--

INSERT INTO `tpuser_list` (`id`, `tp_id`, `user_password`, `status`, `role`, `pincode`) VALUES
(2, 'melaku2', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'active', 'Traffic police Administrator', 5836),
(12, 'Tirufat3', 'd1370c27bdba51ad83039065d91385cb22f2d2b1', 'deactive', 'Field Traffic Police', 4175);

-- --------------------------------------------------------

--
-- Table structure for table `traffic_police`
--

CREATE TABLE `traffic_police` (
  `id` int(6) NOT NULL,
  `tp_id` varchar(32) NOT NULL,
  `rank` varchar(32) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `mname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `hdate` date NOT NULL,
  `role` varchar(32) NOT NULL,
  `bday` date NOT NULL,
  `woreda` varchar(32) DEFAULT NULL,
  `kebele` varchar(32) DEFAULT NULL,
  `hno` varchar(32) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `photo` varchar(32) DEFAULT 'tplogo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traffic_police`
--

INSERT INTO `traffic_police` (`id`, `tp_id`, `rank`, `fname`, `mname`, `lname`, `sex`, `hdate`, `role`, `bday`, `woreda`, `kebele`, `hno`, `phone`, `photo`) VALUES
(2, 'melaku2', 'Constable', 'melaku', '', 'Alehegn', 'male', '2016-05-11', 'Traffic police Administrator', '1998-05-11', '', '', '', '0915552537', 'tplogo.jpg'),
(3, 'Tirufat3', 'Constable', 'Tirufat', '', 'Tesfaye', 'female', '2016-05-12', 'Field Traffic Police', '1998-05-04', '', '', '', '0915487556', 'picTirufat3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(32) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator'),
(2, 'gech', '08c02ad4f25493abd3172efc14a5cd38438e5ebe', 'Employee'),
(4, 'melaku', '23676858ece6a4c4934b550065fdf122a2fb423d', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(5) NOT NULL,
  `oname` varchar(32) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `region` varchar(32) NOT NULL,
  `town` varchar(32) DEFAULT NULL,
  `woreda` varchar(32) DEFAULT NULL,
  `phone` varchar(32) NOT NULL,
  `plateNumber` varchar(32) NOT NULL,
  `vehicleType` varchar(32) NOT NULL,
  `madeIn` varchar(32) NOT NULL,
  `chassisNumber` varchar(32) NOT NULL,
  `motorNumber` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `fuelType` varchar(32) NOT NULL,
  `cylinderNumber` int(8) NOT NULL,
  `hdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `oname`, `sex`, `region`, `town`, `woreda`, `phone`, `plateNumber`, `vehicleType`, `madeIn`, `chassisNumber`, `motorNumber`, `color`, `fuelType`, `cylinderNumber`, `hdate`) VALUES
(1, 'getabalew', 'male', 'aa', '', '', '0915552535', 'grt-23', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdfasdfasdf', 'xcvzxcv', 4, '2016-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`Accident_ID`),
  ADD KEY `License_NO` (`License_NO`),
  ADD KEY `Plate_NO` (`Plate_NO`),
  ADD KEY `TP_ID` (`TP_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lnumber` (`lnumber`),
  ADD UNIQUE KEY `pnum` (`pnum`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `driver_user_list`
--
ALTER TABLE `driver_user_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`),
  ADD UNIQUE KEY `pnum` (`pnum`);

--
-- Indexes for table `emp_user_list`
--
ALTER TABLE `emp_user_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `forumdiscussion`
--
ALTER TABLE `forumdiscussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationId`);

--
-- Indexes for table `punishment`
--
ALTER TABLE `punishment`
  ADD PRIMARY KEY (`Punish_ID`),
  ADD UNIQUE KEY `Receipt_NO` (`Receipt_NO`),
  ADD KEY `License_NO` (`License_NO`),
  ADD KEY `V_Plate_NO` (`V_Plate_NO`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpnotification`
--
ALTER TABLE `tpnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpuser_list`
--
ALTER TABLE `tpuser_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tp_id` (`tp_id`);

--
-- Indexes for table `traffic_police`
--
ALTER TABLE `traffic_police`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tp_id` (`tp_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plateNumber` (`plateNumber`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `Accident_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `driver_user_list`
--
ALTER TABLE `driver_user_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `emp_user_list`
--
ALTER TABLE `emp_user_list`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `forumdiscussion`
--
ALTER TABLE `forumdiscussion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationId` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `punishment`
--
ALTER TABLE `punishment`
  MODIFY `Punish_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tpnotification`
--
ALTER TABLE `tpnotification`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tpuser_list`
--
ALTER TABLE `tpuser_list`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `traffic_police`
--
ALTER TABLE `traffic_police`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accident`
--
ALTER TABLE `accident`
  ADD CONSTRAINT `accident_ibfk_1` FOREIGN KEY (`License_NO`) REFERENCES `driver` (`lnumber`),
  ADD CONSTRAINT `accident_ibfk_2` FOREIGN KEY (`Plate_NO`) REFERENCES `vehicle` (`plateNumber`),
  ADD CONSTRAINT `accident_ibfk_3` FOREIGN KEY (`TP_ID`) REFERENCES `traffic_police` (`tp_id`);

--
-- Constraints for table `punishment`
--
ALTER TABLE `punishment`
  ADD CONSTRAINT `punishment_ibfk_1` FOREIGN KEY (`License_NO`) REFERENCES `driver` (`lnumber`),
  ADD CONSTRAINT `punishment_ibfk_2` FOREIGN KEY (`V_Plate_NO`) REFERENCES `vehicle` (`plateNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
