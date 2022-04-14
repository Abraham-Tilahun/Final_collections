-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 04:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `message`) VALUES
('Abraham-Tilahun', 'abrishsweet32@gmail.com', 'hey...Abrish,you are at good progress,lets you move one step forward.\r\nThank you.'),
('Abraham-Tilahun', 'abrishsweet32@gmail.com', 'hey...Abrish,you are at good progress,lets you move one step forward.\r\nThank you.'),
('Haile Eyesus Aeimro', 'sola@gmail.com', 'hey edet neh ,betam harif new ketilibet');

-- --------------------------------------------------------

--
-- Table structure for table `oneway`
--

CREATE TABLE IF NOT EXISTS `oneway` (
  `From(origin)` varchar(40) NOT NULL,
  `To(Destination)` varchar(40) NOT NULL,
  `Bus_ID` varchar(13) NOT NULL,
  `Number of seat` int(11) NOT NULL,
  `Bus name` varchar(20) NOT NULL,
  `Birr(Amount)` int(11) NOT NULL,
  `Kilo-Meter` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Avaliable Seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oneway`
--

INSERT INTO `oneway` (`From(origin)`, `To(Destination)`, `Bus_ID`, `Number of seat`, `Bus name`, `Birr(Amount)`, `Kilo-Meter`, `Date`, `Avaliable Seat`) VALUES
('Adiss Abeba', 'gonder', 'g-0212', 60, 'Golden', 500, 738, '2020-03-03', 40),
('Adiss Abeba', 'Lalibela', 'zem0102', 50, 'zemen bus', 400, 100, '2020-03-13', 30),
('Adiss Abeba', 'Lalibela', 'zem0102', 50, 'zemen', 400, 100, '2020-03-13', 30),
('Adiss Abeba', 'Mekelle', 'Et-0212', 60, 'Ethio-Bus', 1000, 43, '2020-03-04', 50),
('Bahirdar', 'Adiss Abeba', 'g-0212', 60, 'Golden', 450, 540, '2020-03-05', 40),
('Adiss Abeba', 'gonder', 'g-0212', 60, 'Golden', 500, 738, '2020-03-03', 40),
('Adiss Abeba', 'Lalibela', 'zem0102', 50, 'zemen bus', 400, 100, '2020-03-13', 30),
('Adiss Abeba', 'Lalibela', 'zem0102', 50, 'zemen', 400, 100, '2020-03-13', 30),
('Adiss Abeba', 'Mekelle', 'Et-0212', 60, 'Ethio-Bus', 1000, 43, '2020-03-04', 50),
('Bahirdar', 'Adiss Abeba', 'g-0212', 60, 'Golden', 450, 540, '2020-03-05', 40),
('Hawassa', 'Gonder', 'Et-0212', 60, 'Ethio-Bus', 1000, 1000, '2020-03-19', 40);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `username`, `password`) VALUES
('', '', '', ''),
('', '', '', ''),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Mickey', 'Fentahun', 'fentish', '12345'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Yibralem', 'Jejaw', 'yibre', '1234'),
('Eliyas', 'dejen', 'sola', '1234'),
('Abraham', 'Tilahun', '@abraham', '1223'),
('Dereje', 'Bantie', 'dere', '1234'),
('Almaz', 'Tilahun', 'almi', '1234'),
('Mickey', 'Tilahun', 'sami', '12345'),
('Abraham', 'Dejen', 'sami', '123456'),
('samuael ', 'dejen', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'sami', '1234'),
('Abraham', 'Tilahun', 'sami', '1234'),
('Tewodrose ', 'Tilahun', 'teddy', '1234'),
('Abraham', 'Tilahun', 'Abrish', '123'),
('', '', '', ''),
('', '', '', ''),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Mickey', 'Fentahun', 'fentish', '12345'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Yibralem', 'Jejaw', 'yibre', '1234'),
('Eliyas', 'dejen', 'sola', '1234'),
('Abraham', 'Tilahun', '@abraham', '1223'),
('Dereje', 'Bantie', 'dere', '1234'),
('Almaz', 'Tilahun', 'almi', '1234'),
('Mickey', 'Tilahun', 'sami', '12345'),
('Abraham', 'Dejen', 'sami', '123456'),
('samuael ', 'dejen', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'Abrish', '1234'),
('Abraham', 'Tilahun', 'sami', '1234'),
('Abraham', 'Tilahun', 'sami', '1234'),
('Tewodrose ', 'Tilahun', 'teddy', '1234'),
('Hail eyesus', 'Aeimro', 'hailie', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE IF NOT EXISTS `userregister` (
  `FIRSTNAME` varchar(50) NOT NULL,
  `MIDDLENAME` varchar(40) NOT NULL,
  `LASTNAME` varchar(60) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `Bus_ID` varchar(40) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `EMAIL`, `PHONE`, `Bus_ID`, `Date`) VALUES
('Abraham', 'Tilahun', 'Tilahun', 'abrisweet32@gmail.com', 927664232, 'g-0212', '2020-03-18'),
('Abraham', 'Tilahun', 'dejen', 'mekash@gmail.com', 928334654, 'Et-0212', '2020-03-03'),
('Abraham', 'tilahun', 'Tilahun', 'tinsu@gmail.com', 928334654, 'Et-0212', '2020-03-12'),
('Abraham', 'tilahun', 'Tilahun', 'abrisweet32@gmail.com', 928334654, 'Et-0212', '2020-03-05'),
('Tewodrose ', 'Eshetie', 'Mogesu', 'tinsu@gmail.com', 928334654, 'g-0212', '2020-03-05'),
('Abraham', 'Tilahun', 'Tilahun', 'abrisweet32@gmail.com', 927664232, 'g-0212', '2020-03-18'),
('Abraham', 'Tilahun', 'dejen', 'mekash@gmail.com', 928334654, 'Et-0212', '2020-03-03'),
('Abraham', 'tilahun', 'Tilahun', 'tinsu@gmail.com', 928334654, 'Et-0212', '2020-03-12'),
('Abraham', 'tilahun', 'Tilahun', 'abrisweet32@gmail.com', 928334654, 'Et-0212', '2020-03-05'),
('Tewodrose ', 'Eshetie', 'Mogesu', 'tinsu@gmail.com', 928334654, 'g-0212', '2020-03-05'),
('haile', 'tilahun', 'Tilahun', 'abrisweet32@gmail.com', 927664232, 'Et-0212', '2020-03-06'),
('Abraham', 'cherinet', 'Dejen', 'abrisweet32@gmail.com', 927664232, 'Et-0212', '2020-03-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
