-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 09:44 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `movie_type` varchar(30) NOT NULL,
  `transactionum` varchar(10) NOT NULL,
  `payable` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `setnumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`, `movie_type`, `transactionum`, `payable`, `status`, `setnumber`) VALUES
(17, 'yisahak', 'Molawork', '', 'debre', '11', '57840au3', '900', '', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(18, 'yisahak', 'yiferu', '0918585474', 'debre', '11', 'ny6gd7po', '300', '', '1, 2, 3, '),
(19, 'yisahak', 'yiferu', '0918585474', '06666666666', '11', 'tpnvcebb', '400', '', '4, 5, 6, 7, ');

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
('6', 'film', 'amharic', 100, '655.jpg'),
('2313', 'blen', 'romance', 52, '655.jpg');

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
('yisahak', 'hone@gmail.com', 'mi', 'hi yise this is the first mesg of to you');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `film_id` varchar(20) NOT NULL,
  `film_name` varchar(20) NOT NULL,
  `birr` int(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `film_image` varchar(100) NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`film_id`, `film_name`, `birr`, `time`, `date`, `film_image`) VALUES
('1', 'anilakekim', 50, '5:00 am', '2017-05-26', '1.jpg'),
('11', 'meharebin', 50, '12:00 am', '2017-05-27', '51.jpg'),
('12', 'hiwete', 50, '2:00 pm', '2016-06-02', '207d_9e30.jpg'),
('121', 'mmm', 50, '5:00 am', '2017-06-25', '33.ico'),
('2', 'kemeten belay', 50, '8:00 am', '2017-05-26', '5.jpg'),
('2345', 'vcf', 24, '2:00 pm', '2017-06-25', '51.jpg'),
('3', 'meharebin', 50, '10:00 am', '2017-05-26', '51.jpg'),
('32', 'hyweonday', 50, '5:00 am', '2016-06-02', '70.jpg'),
('4', 'shefu ', 50, '12:00 am', '2017-05-26', '54.jpg'),
('5', 'hiywetia', 50, '2:00 pm', '2017-05-26', '52.jpg'),
('58', 'fersegnaw', 100, '8:00 am', '2017-06-08', '207d_9e30.jpg'),
('7', 'seliat', 50, '5:00 am', '2017-05-27', '55.jpg'),
('8', 'resitaw', 50, '8:00 am', '2017-05-27', '60.jpg'),
('9', 'yesetehut', 50, '10:00 am', '2017-05-27', '50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_name`
--

CREATE TABLE IF NOT EXISTS `movie_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `movie_name`
--

INSERT INTO `movie_name` (`id`, `movie_name`, `price`, `numseats`, `type`, `time`) VALUES
(7, 'markush(total seat is1000)', '100', 1000, 'horer', '10:03'),
(11, 'salaysh', '100', 100, 'romance', '12:00pm'),
(12, 'afajeshign', '100', 100, 'romatic', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
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
-- Dumping data for table `order`
--

INSERT INTO `order` (`seatNo`, `userid`, `name`, `finame`, `price`, `accountnumber`, `date`, `time`) VALUES
(1, 55, 'yimam', 'sabila', 50, 456, '2016-05-27', '5:00 am'),
(3, 90, 'dagninet', 'sabila', 50, 3456, '2016-05-27', '5:00 am'),
(5, 98, 'dagninet', 'shefu', 50, 3456, '2016-05-27', '10:00 am'),
(10, 2128, 'dagninet', 'shefu', 50, 3456, '2016-05-27', '10:00 am'),
(11, 558, 'dagninet', 'sabila', 50, 3456, '2016-05-27', '12:00 am'),
(20, 666, 'abebe', 'sabila', 100, 456, '2016-05-26', '5:00 am');

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
('derese@gmail.com', '29', 'alamaze', '2', 'derese@gmail.com', '120', '240'),
('gize@gmail.com', '3', 'tsinu kal', '2', 'dboE', '100', '200'),
('mmmmmm@gmail.com', '30', 'adnegn', '4', 'mmmmmm@gmail.com', '100', '400'),
('gize@gmail.com', '32', 'elfgn', '2', 'Ekng', '180', '360'),
('gize@gmail.com', '4', 'endatketelegn', '1', 'hsmG', '100', '100'),
('andu@gmail.com', '47', 'feshita', '2', 'andu@gmail.com', '100', '200'),
('gize@gmail.com', '5', 'yegna beteseb', '2', 'egmq', '200', '400'),
('amele@gmail.com', '57', 'destachin', '2', 'amele@gmail.com', '100', '200'),
('hone@gmail.com', '6', 'kambolojo', '1', 'hone@gmail.com', '100', '100'),
('gize@gmail.com', '7', 'rasataw', '3', 'qbFq', '100', '300'),
('mn@gmail.com', '93', 'tsinu kal', '1', 'mn@gmail.com', '100', '100');

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
('1', 1000, 1000, 'family', 'gorebrtamochu', 'monday', 100, '11.jpg', 'it is the reality of this world life style'),
('12', 512, 500, 'romantic', 'shefu2', '2:00pm', 100, '60.jpg', 'it is interesting loving history'),
('13', 500, 500, 'romantic', 'almaze', '8:00am', 200, '71.jpg', 'very nice romantics movie'),
('19', 100, 100, 'romantics', 'rastaw', '12:00pm', 200, '60.jpg', 'the complex mixture of loving systyle'),
('2', 400, 400, 'romantic', 'yefkr kal', '10:00am', 100, '51.jpg', 'amazing real life romantics movie'),
('20', 100, 100, 'romantic', 'kemeten belay', '8:00am', 100, '12.jpg', 'it is the interestig loving stayle hostory'),
('21', 100, 100, 'romantics', 'silet', '10:00am', 200, '50.jpg', 'it is the family based history romance movie'),
('22', 100, 100, 'romantics', 'guraymiyle', '12:00pm', 100, '71.jpg', 'different so independent loving becom as one'),
('23', 100, 100, 'romantics', 'yesir mize', '2:00pm', 100, '54.jpg', 'it is weddint true life history'),
('24', 300, 300, 'family', 'gedaysiya', '2:00pm', 100, '60.jpg', 'it is the histiryofEthiopian history'),
('25', 900, 900, 'romantic', 'yetafene', '8:00am', 100, '55.jpg', 'it is the complex and very very dictatorship family leader'),
('26', 1000, 1000, 'romantic', 'enginerochu', '10:00am', 200, '13.jpg', 'is the relation between the real wealth and the poorest poeple '),
('27', 400, 400, 'romantics', 'ayrak', '12:00pm', 200, '52.jpg', 'this movie is the top win of from puplish this week '),
('28', 1000, 1000, 'family', 'marugn', 'sunday', 100, '55.jpg', 'it concerns the complex life'),
('29', 1000, 1000, 'romantic', 'alamaze', 'sunday', 120, '52.jpg', 'nice and nice'),
('3', 1500, 1500, 'family', 'ezih bet', 'sunday', 130, '53.jpg', 'inch 32 '),
('30', 1200, 1100, 'romantic', 'adnegn', 'monday', 100, '52.jpg', 'so good'),
('32', 1000, 1000, 'family', 'elfgn', 'sunday', 180, '55.jpg', 'it so nice'),
('33', 600, 600, 'famiky', 'ramatohara', 'manday', 150, '62.jpg', 'it is fantastic'),
('34', 600, 600, 'romance', 'tikrmenged', 'monday', 100, '54.jpg', 'qwertyuiasdfghj'),
('35', 500, 400, 'family', 'kunchit', 'sunday', 50, '53.jpg', 'asdfghjwertyusdfg'),
('36', 600, 600, 'romantic', 'keberchacha', 'monday', 50, '52.jpg', 'rengfrdgsh'),
('37', 1000, 1000, 'family', 'gundane', 'sunday', 100, '56.jpg', 'asdfghjwertyuixcvbn'),
('38', 1000, 1000, ' romantic', 'fkren', 'sunday', 100, '52.jpg', 'asdfghjwertyuxcvb'),
('39', 1000, 1000, 'family', 'gudachin', 'sunday', 100, '66.jpg', ' asdfghwerthj'),
('4', 600, 600, 'romantics', 'endatketelegn', '12:00pm', 100, '53.jpg', 'interestin and have long and complex history'),
('47', 900, 900, 'family', 'feshita', 'sunday', 100, '55.jpg', 'sdfgbherthj'),
('5', 900, 900, 'family', 'yegna beteseb', '10:00am', 200, '51.jpg', 'real wold actionable world'),
('57', 900, 900, 'family', 'destachin', 'sunday', 100, '56.jpg', 'qwertyuiasdfghjzxcvb'),
('6', 800, 800, 'family', 'kambolojo', 'sunday', 100, '54.jpg', 'qwertyuasdfgh '),
('7', 1000, 1000, 'family', 'kuralew', 'sunday', 200, 'abat.jpg', 'qwertyuiasdfgh'),
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
  `email` varchar(30) NOT NULL,
  `payable` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `payed_date` date NOT NULL,
  `time` time DEFAULT NULL,
  `payment` varchar(40) NOT NULL,
  `delivery_type` varchar(30) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `fk_comp` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `movie_id`, `firstname`, `lastname`, `email`, `payable`, `status`, `confirmation`, `id`, `payed_date`, `time`, `payment`, `delivery_type`) VALUES
(41, '', 'ghjtyui', 'grthyjuk', 'hone@gmail.com', 100, 'Pending', 'hone@gmail.com', 451, '2017-06-27', '04:45:00', 'Commercial Bank of Ethiopia', 'Cash On delivery'),
(42, '', 'anilakekim', 'tare', 'hone@gmail.com', 100, 'Pending', 'hone@gmail.com', 0, '2017-06-27', '05:00:00', 'Commercial Bank of Ethiopia', 'Cash On delivery');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  `movie_type` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `seat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `date`, `movie_type`, `seat_reserve`, `transactionnum`, `seat`) VALUES
(17, '28/06/2017', '11', '9', '57840au3', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(18, '27/06/2017', '11', '3', 'ny6gd7po', '1, 2, 3, '),
(19, '27/06/2017', '11', '4', 'tpnvcebb', '4, 5, 6, 7, ');

-- --------------------------------------------------------

--
-- Table structure for table `tickettable`
--

CREATE TABLE IF NOT EXISTS `tickettable` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tickettable`
--


-- --------------------------------------------------------

--
-- Table structure for table `us`
--

CREATE TABLE IF NOT EXISTS `us` (
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
-- Dumping data for table `us`
--


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
(436, 'amele', 'debase', 'Fmale', 'amele@gmail.com', '123456789', '123456789', 912123456, 'Ethiopia', 'addisabeba', 1),
(6, 'andu', 'teka', 'Male', 'andu@gmail.com', '12345678', '12345678', 943567889, 'Ethiopia', 'addisabeba', 1),
(2315, 'yisahak', 'yiferu', 'Male', 'bbbb', '', '', 0, 'Ethiopia', '', 4),
(4343, 'gdgwye', 'sdhwdwud', 'Male', 'beily@gamil.com', '789789789', '789789789', 2147483647, 'Ethiopia', 'derse', 4),
(909, 'bekele', 'alamir', 'Male', 'beke@gmail.com', '12345678', '12345678', 919856766, 'Ethiopia', 'Debre Tabore', 4),
(54, 'yisahak', 'yiferu', 'Male', 'derese@gmail.com', '12345678', '12345678', 919859799, 'Ethiopia', 'Debre Tabore', 4),
(2323, 'tfytguyg', 'eeer', 'Male', 'fguygiuhuhhhu', '0987654321', '0987654321', 2147483647, 'Ethiopia', 'debre tabor', 4),
(1111, 'gezehagn', 'gobeze', 'Male', 'gezehagn@gmail.com', '12345678', '12345678', 2147483647, 'Ethiopia', 'Debre Tabore', 4),
(1111, 'gezehagn', 'gobeze', 'Male', 'gobez@gmail.com', '12345678', '12345678', 985457562, 'Ethiopia', 'kkkk', 4),
(1237, 'honelign', 'tarekegn', 'male', 'hone@gmail.com', '12345678', '12345678', 936223344, 'Ethiopia', 'debretabor', 4),
(43, 'mintesinot', 'assenafi', 'Male', 'm@gmail.com', '12345678', '12345678', 916754321, 'Ethiopia', 'debrebirhan', 4),
(67, 'manamno', 'mihret', 'Male', 'man@yahoo.com', '12345678', '12345678', 918427472, 'Ethiopia', 'addisabeba', 4),
(2315, 'manamno', 'mihret', 'Male', 'manu@gmail.com', '12345678', '12345678', 912324567, 'Ethiopia', 'nbgh', 4),
(2111, 'marta', 'yiferu', '-selec', 'marta@gmail.com', '12345678', '12345678', 934523145, 'Ethiopia', 'dtu', 4),
(567, 'mekue', 'bogale', 'male', 'mekue@gmail.com', '12345678', '12345678', 916427472, 'Ethiopia', 'wellokemisie', 4),
(2324, 'iuhuyhuh', 'gyuuguygy', 'Male', 'mmmmmm@gmail.com', '1234567890', '1234567890', 2147483647, 'Ethiopia', 'ggfgf', 4),
(2269, 'mequnnt', 'tark', 'Male', 'mn@gmail.com', '12345678', '12345678', 934326436, 'Ethiopia', 'ffbd', 4),
(1, 'mengesha', 'molawerk', 'male', 'staff@gmail.com', '123456789', '123456789', 916427472, 'ethiopan', 'addisabeba', 1),
(3, 'yinager', 'alamr', 'Male', 'yine@gmail.com', '12345678', '12345678', 912345678, 'Ethiopia', 'debretabor', 4);
