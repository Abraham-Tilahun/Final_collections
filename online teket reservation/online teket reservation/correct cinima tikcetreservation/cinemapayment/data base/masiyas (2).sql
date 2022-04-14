-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 12:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
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

INSERT INTO `message` (`name`, `email`, `subject`, `content`) VALUES
('yisahak', 'gize@gmail.com', 'mi', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
('yisahak', 'gize@gmail.com', 'mi', 'sdfghjkl;wertyu');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
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
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `movie_id`, `movie`, `qty`, `confirmation`, `price`, `total`) VALUES
('gize@gmail.com', '1', 'gorebrtamochu', '1', 'Dnkb', '100', '100'),
('gize@gmail.com', '11', 'irq', '2', 'qbFq', '100', '200'),
('gize@gmail.com', '12', 'shefu2', '2', 'cwrz', '100', '200'),
('gize@gmail.com', '13', 'almaze', '2', 'zizz', '200', '200'),
('kb@gmail.com', '18', 'almzia', '1', 'iDHF', '50', '100'),
('gize@gmail.com', '19', 'rastaw', '2', 'kDii', '200', '400'),
('serk@gmail.com', '2', 'slanch', '2', 'nCHG', '150', '300'),
('gize@gmail.com', '20', 'kemeten belay', '2', 'AbBC', '100', '200'),
('gize@gmail.com', '21', 'silet', '1', 'goEy', '200', '200'),
('gize@gmail.com', '22', 'guraymiyle', '2', 'xira', '100', '100'),
('gize@gmail.com', '23', 'yesir mize', '3', 'Ewvy', '100', '300'),
('gize@gmail.com', '24', 'gedaysiya', '2', 'otyB', '100', '200'),
('gize@gmail.com', '25', 'yetafene', '2', 'CkeH', '100', '100'),
('gize@gmail.com', '26', 'enginerochu', '2', 'gxCc', '200', '200'),
('gize@gmail.com', '27', 'ayrak', '2', 'fqcm', '200', '400'),
('gize@gmail.com', '28', 'yesetehut', '1', 'kBhE', '100', '100'),
('gize@gmail.com', '3', 'tsinu kal', '2', 'dboE', '100', '200'),
('gize@gmail.com', '32', 'elfgn', '2', 'Ekng', '180', '360'),
('gize@gmail.com', '4', 'endatketelegn', '1', 'hsmG', '100', '100'),
('gize@gmail.com', '5', 'yegna beteseb', '2', 'egmq', '200', '400'),
('gize@gmail.com', '7', 'rasataw', '3', 'qbFq', '100', '300');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
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
-- Dumping data for table `products`
--

INSERT INTO `products` (`movie_id`, `total_seat`, `freeseatleft`, `movie_type`, `MovieName`, `movieseendate`, `movie_price`, `movie_photo`, `movie_description`) VALUES
('1', 1000, 1000, 'family', 'gorebrtamochu', '12:00pm', 100, '51.jpg', 'it is the reality of this world life style'),
('12', 512, 500, 'romantic', 'shefu2', '2:00pm', 100, '54.jpg', 'it is interesting loving history'),
('13', 500, 500, 'romantic', 'almaze', '8:00am', 200, '56.jpg', 'very nice romantics movie'),
('19', 100, 100, 'romantics', 'rastaw', '12:00pm', 200, '60.jpg', 'the complex mixture of loving systyle'),
('2', 400, 400, 'romantic', 'yefkr kal', '10:00am', 100, '54.jpg', 'amazing real life romantics movie'),
('20', 100, 100, 'romantic', 'kemeten belay', '8:00am', 100, '12.jpg', 'it is the interestig loving stayle hostory'),
('21', 100, 100, 'romantics', 'silet', '10:00am', 200, '66.jpg', 'it is the family based history romance movie'),
('22', 100, 100, 'romantics', 'guraymiyle', '12:00pm', 100, '77.jpg', 'different so independent loving becom as one'),
('23', 100, 100, 'romantics', 'yesir mize', '2:00pm', 100, '56.jpg', 'it is weddint true life history'),
('24', 300, 300, 'family', 'gedaysiya', '2:00pm', 100, '60.jpg', 'it is the histiryofEthiopian history'),
('25', 900, 900, 'romantic', 'yetafene', '8:00am', 100, 'yetafene.jpg', 'it is the complex and very very dictatorship family leader'),
('26', 1000, 1000, 'romantic', 'enginerochu', '10:00am', 200, 'engineer.jpg', 'is the relation between the real wealth and the poorest poeple '),
('27', 400, 400, 'romantics', 'ayrak', '12:00pm', 200, 'ayrak.jpg', 'this movie is the top win of from puplish this week '),
('28', 1000, 1000, 'family', 'marugn', 'sunday', 100, '55.jpg', 'it concerns the complex life'),
('29', 1000, 1000, 'romantic', 'alamaze', 'sunday', 120, '52.jpg', 'nice and nice'),
('3', 1500, 1500, 'family', 'ezih bet', 'sunday', 130, '56.jpg', 'inch 32 '),
('30', 1200, 1100, 'romantic', 'adnegn', 'monday', 100, '52.jpg', 'so good'),
('32', 1000, 1000, 'family', 'elfgn', 'sunday', 180, '55.jpg', 'it so nice'),
('33', 600, 600, 'famiky', 'ramatohara', 'manday', 150, '58.jpg', 'it is fantastic'),
('34', 600, 600, 'romance', 'tikrmenged', 'monday', 100, '54.jpg', 'qwertyuiasdfghj'),
('35', 500, 400, 'family', 'kunchit', 'sunday', 50, '53.jpg', 'asdfghjwertyusdfg'),
('36', 600, 600, 'romantic', 'keberchacha', 'monday', 50, '52.jpg', 'rengfrdgsh'),
('37', 1000, 1000, 'family', 'gundane', 'sunday', 100, '56.jpg', 'asdfghjwertyuixcvbn'),
('38', 1000, 1000, ' romantic', 'fkren', 'sunday', 100, '52.jpg', 'asdfghjwertyuxcvb'),
('39', 1000, 1000, 'family', 'gudachin', 'sunday', 100, '56.jpg', ' asdfghwerthj'),
('4', 600, 600, 'romantics', 'endatketelegn', '12:00pm', 100, '61.jpg', 'interestin and have long and complex history'),
('47', 900, 900, 'family', 'feshita', 'sunday', 100, '55.jpg', 'sdfgbherthj'),
('5', 900, 900, 'family', 'yegna beteseb', '10:00am', 200, '51.jpg', 'real wold actionable world'),
('57', 900, 900, 'family', 'destachin', 'sunday', 100, '56.jpg', 'qwertyuiasdfghjzxcvb'),
('6', 800, 800, 'family', 'kambolojo', 'sunday', 100, '54.jpg', 'qwertyuasdfgh '),
('7', 1000, 1000, 'family', 'kuralew', 'sunday', 200, '58.jpg', 'qwertyuiasdfgh'),
('8', 600, 600, 'family', 'almze', 'sunday', 200, '50.jpg', 'qwertyuasdfghjkzxc'),
('88', 100, 100, 'romantics', 'yesetehut', '2:00pm', 100, '50.jpg', 'it is the amazing interesting loving history'),
('9', 1000, 1000, 'family', 'betachin', 'sunday', 100, '56.jpg', 'Serfgfddfgh'),
('93', 200, 200, 'romantics', 'tsinu kal', '8:00am', 100, '55.jpg', 'the lover fights from so many attackerss to protct his life style');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `movie_id`, `firstname`, `lastname`, `kifleketema`, `kebele`, `email`, `mobileno`, `payable`, `status`, `confirmation`, `homephoneno`, `street`, `houseno`, `delivery_date`, `date`, `time`, `payment`, `delivery_type`) VALUES
(14, '2', 'abebe', 'Bantie', '', 4, 'serk@gmail.com', 914404398, 20300, 'Pending', 'nCHG', 1203456232, 11, 221, '2014-06-12', '2009-06-14', '05:00:00', 'Commercial Bank of Ethiopia', 'Hawassa'),
(15, '7', 'abebe', 'amare', '', 7, 'gize@gmail.com', 918350015, 26400, 'Pending', 'qbFq', 581112345, 23, 345, '2014-06-24', '2009-06-14', '05:30:00', 'Commercial Bank of Ethiopia', 'Harer'),
(16, '', 'anilakekim', 'yiferu', '', 0, 'gize@gmail.com', 0, 360, 'Pending', 'Ekng', 0, 852741, 0, '2017-06-14', '0000-00-00', '04:15:00', 'Commercial Bank of Ethiopia', 'Cash On delivery');

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
