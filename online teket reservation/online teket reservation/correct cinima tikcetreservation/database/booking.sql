-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2016 at 01:50 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `row_id` varchar(25) NOT NULL,
  `model` varchar(15) NOT NULL,
  `rank` varchar(21) NOT NULL,
  `Price` float NOT NULL,
  `poto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`row_id`, `model`, `rank`, `Price`, `poto`) VALUES
('654', 'film', 'amharic', 438, '212.jpg'),
('22', 'sabila', 'amharic', 800, '655.jpg'),
('123', 'film', 'amharic', 800, '655.jpg'),
('5670', 'film', 'amharic', 98765, '655.jpg'),
('6', 'film', 'amharic', 100, '655.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `seatNo` int(1) NOT NULL,
  `userid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `finame` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `accountnumber` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(12) NOT NULL,
  PRIMARY KEY (`seatNo`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `userid_2` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`seatNo`, `userid`, `name`, `finame`, `price`, `accountnumber`, `date`, `time`) VALUES
(1, 55, 'yimam', 'sabila', 50, 456, '2016-05-27', '5:00 am'),
(3, 90, 'dagninet', 'sabila', 50, 3456, '2016-05-27', '5:00 am'),
(5, 98, 'dagninet', 'shefu', 50, 3456, '2016-05-27', '10:00 am'),
(10, 2128, 'dagninet', 'shefu', 50, 3456, '2016-05-27', '10:00 am'),
(11, 558, 'dagninet', 'sabila', 50, 3456, '2016-05-27', '12:00 am'),
(20, 666, 'abebe', 'sabila', 100, 456, '2016-05-26', '5:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `film_id` varchar(20) NOT NULL,
  `film_name` varchar(20) NOT NULL,
  `birr` int(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `film_image` varchar(100) NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`film_id`, `film_name`, `birr`, `time`, `date`, `film_image`) VALUES
('1', 'anilakekim', 50, '5:00 am', '2016-05-26', '1.jpg'),
('10', 'america', 50, '2:00 pm', '2016-05-27', '71.jpg'),
('11', 'meharebin', 50, '12:00 am', '2016-05-27', '51.jpg'),
('2', 'kemeten belay', 50, '8:00 am', '2016-05-26', '5.jpg'),
('3', 'meharebin', 50, '10:00 am', '2016-05-26', '51.jpg'),
('4', 'shefu ', 50, '12:00 am', '2016-05-26', '54.jpg'),
('5', 'hiywetia', 50, '2:00 pm', '2016-05-26', '52.jpg'),
('7', 'seliat', 50, '5:00 am', '2016-05-27', '55.jpg'),
('8', 'resitaw', 50, '8:00 am', '2016-05-27', '60.jpg'),
('9', 'yesetehut', 50, '10:00 am', '2016-05-27', '50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IDNO` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `re_typepassword` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDNO`, `Name`, `Lname`, `gender`, `email`, `password`, `re_typepassword`, `mobile`, `country`, `city`, `status`) VALUES
(2, 'yisahak', 'yiferu', 'male', 'admin@gmail.com', '741852963', '741852963', 919856766, 'ethiopan', 'addis', 2),
(567, 'mekue', 'bogale', 'male', 'mekue@gmail.com', '12345678', '12345678', 916427472, 'Ethiopia', 'wellokemisie', 4),
(67, 'manamno', 'mihret', 'Male', 'man@yahoo.com', '12345678', '12345678', 918427472, 'Ethiopia', 'addisabeba', 4),
(1, 'menge', 'molawerk', 'male', 'staff@gmail.com', '123456789', '123456789', 916427472, 'ethiopan', 'addisabeba', 1),
(436, 'amele', 'debase', 'Fmale', 'amele@gmail.com', '123456789', '123456789', 912123456, 'Ethiopia', 'addisabeba', 4),
(43, 'mintesinot', 'assenafi', 'Male', 'm@gmail.com', '12345678', '12345678', 916754321, 'Ethiopia', 'debrebirhan', 4),
(6, 'andu', 'teka', 'Male', 'andu@gmail.com', '12345678', '12345678', 943567889, 'Ethiopia', 'addisabeba', 4),
(3, 'yinager', 'alamr', 'Male', 'yine@gmail.com', '12345678', '12345678', 912345678, 'Ethiopia', 'debretabor', 4),
(1237, 'honelign', 'tarekegn', 'male', 'hone@gmail.com', '12345678', '12345678', 936223344, 'Ethiopia', 'debretabor', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;