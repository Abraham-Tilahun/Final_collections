-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2014 at 04:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `masiyas`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `content` tinytext NOT NULL,
  KEY `fk_supplier_co` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `email` varchar(20) NOT NULL,
  `movie_id` varchar(50) NOT NULL,
  `movie` varchar(50) NOT NULL,
  `qty` decimal(30,0) NOT NULL,
  `confirmation` varchar(50) NOT NULL,
  `price` decimal(30,0) NOT NULL,
  `total` decimal(30,0) NOT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `kk` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`email`, `movie_id`, `movie`, `qty`, `confirmation`, `price`, `total`) VALUES
('gize@gmail.com', '11', 'irq', 2, 'qbFq', 100, 200),
('kb@gmail.com', '18', 'almzia', 1, 'iDHF', 50, 100),
('serk@gmail.com', '2', 'slanch', 2, 'nCHG', 150, 300),
('gize@gmail.com', '7', 'rasataw', 3, 'qbFq', 100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `movie_id` varchar(20) NOT NULL,
  `total_seat` int(20) NOT NULL,
  `freeseatleft` int(20) NOT NULL,
  `movie_type` varchar(50) NOT NULL,
  `MovieName` varchar(30) NOT NULL,
  `movieseendate` varchar(20) NOT NULL,
  `movie_price` int(10) NOT NULL,
  `movie_photo` varchar(100) NOT NULL,
  `movie_description` varchar(100) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `total_seat`, `freesatleft`, `movie_type`, `MovieName`, `movieseendate`, `movie_price`, `movie_photo`, `movie_description`) VALUES
('1', 1000, 1000, 'family', 'gorebrtamochu', '12:00pm', 100, '51.jpg', 'it is the reality of this world life style'),
('2', 400, 400, 'romantic', 'yefkr kal', '10:00am', 100, '54.jpg', 'amazing real life romantics movie'),
('3', 200, 200, 'romantics', 'tsinu kal', '8:00am', 100, '55.jpg', 'the lover fights from so many attackerss to protct his life style'),
('12', 512, 500, 'romantic', 'shefu2', '2:00pm', 100, '54.jpg', 'it is interesting loving history'),
('13', 500, 500, 'romantic', 'almaze', '8:00am', 200, '56.jpg', 'very nice romantics movie'),
('5', 900, 900, 'family', 'yegna beteseb', '10:00am', 200, '51.jpg', 'real wold actionable world'),
('4', 600, 600, 'romantics', 'endatketelegn', '12:00pm', 100, '61.jpg', 'interestin and have long and complex history'),
('19', 100, 100, 'romantics', 'rastaw', '12:00pm', 200, '60.jpg', 'the complex mixture of loving systyle'),
('28', 100, 100, 'romantics', 'yesetehut', '2:00pm', 100, '50.jpg', 'it is the amazing interesting loving history'),
('20', 100, 100, 'romantic', 'kemeten belay', '8:00am', 100, '12.jpg', 'it is the interestig loving stayle hostory'),
('21', 100, 100, 'romantics', 'silet', '10:00am', 200, '66.jpg', 'it is the family based history romance movie'),
('22', 100, 100, 'romantics', 'guraymiyle', '12:00pm', 100, '77.jpg', 'different so independent loving becom as one'),
('23', 100, 100, 'romantics', 'yesir mize', '2:00pm', 100, '56.jpg', 'it is weddint true life history'),
('24', 300, 300, 'family', 'gedaysiya', '2:00pm', 100, '60.jpg', 'it is the histiryofEthiopian history'),
('25', 900, 900, 'romantic', 'yetafene', '8:00am', 100, 'yetafene.jpg', 'it is the complex and very very dictatorship family leader'),
('26', 1000, 1000, 'romantic', 'enginerochu', '10:00am', 200, 'engineer.jpg', 'is the relation between the real wealth and the poorest poeple '),
('27', 400, 400, 'romantics', 'ayrak', '12:00pm', 200, 'ayrak.jpg', 'this movie is the top win of from puplish this week ');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `kifleketema` varchar(20) NOT NULL,
  `kebele` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `payable` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `homephoneno` int(20) NOT NULL,
  `street` int(10) NOT NULL,
  `houseno` int(10) NOT NULL,
  `delivery_date` date NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `payment` varchar(40) NOT NULL,
  `delivery_type` varchar(30) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `fk_comp` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `movie_id`, `firstname`, `lastname`, `kifleketema`, `kebele`, `email`, `mobileno`, `payable`, `status`, `confirmation`, `homephoneno`, `street`, `houseno`, `delivery_date`, `date`, `time`, `payment`, `delivery_type`) VALUES
(14, '2', 'abebe', 'Bantie', '', 4, 'serk@gmail.com', 914404398, 20300, 'Pending', 'nCHG', 1203456232, 11, 221, '2014-06-12', '2009-06-14', '05:00:00', 'Commercial Bank of Ethiopia', 'Hawassa'),
(15, '7', 'abebe', 'amare', '', 7, 'gize@gmail.com', 918350015, 26400, 'Pending', 'qbFq', 581112345, 23, 345, '2014-06-24', '2009-06-14', '05:30:00', 'Commercial Bank of Ethiopia', 'Harer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `re_typepassword` varchar(30) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Lname`, `gender`, `email`, `password`, `re_typepassword`, `Mobile`, `country`, `city`, `status`) VALUES
('kibrom', 'tesgaye', 'male', 'admin@gmail.com', 'admin123', 'admin123', 914409876, 'Ethiopia', 'debrebirhan', 1),
('aku', 'sen', 'Fmale', 'aku@in.com', '12345678', '12345678', 912335858, 'Ethiopia', 'addis', 4),
('gizework', 'amare', 'Fmale', 'gize@gmail.com', '12345678', '12345678', 918807676, 'Ethiopia', 'Gonder', 4),
('kibrom', 'tsegay', 'Male', 'kb@gmail.com', 'iloveyoumam', 'iloveyoumam', 914404398, 'Ethiopia', 'debrebirhan', 4),
('gizework', 'amare', 'female', 'manager@gmail.com', 'manager123', 'manager123', 918807676, 'ethiopia', 'debrebirhan', 2),
('seid', 'mohammed', 'Male', 'seid@gmail.com', '12345678', '12345678', 914404398, 'Ethiopia', 'dessie', 4),
('serkalem', 'bantie', 'Fmale', 'serk@gmail.com', 'compr132', 'compr132', 918316098, 'Ethiopia', 'Gonder', 4),
('akberet', 'g/silassie', 'female', 'shop@gmail.com', 'shop1234', 'shop1234', 911234354, 'Ethiopia', 'debrebirhan', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_supplier_co` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `order`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_sier_co` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `kk` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_comp` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
