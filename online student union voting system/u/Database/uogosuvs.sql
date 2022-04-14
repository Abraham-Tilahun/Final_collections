-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2019 at 08:12 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uogosuvs`
--
CREATE DATABASE IF NOT EXISTS `uogosuvs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uogosuvs`;

-- --------------------------------------------------------

--
-- Table structure for table `apply_date`
--

CREATE TABLE IF NOT EXISTS `apply_date` (
  `applyid` int(11) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_date`
--

INSERT INTO `apply_date` (`applyid`, `StartDate`, `EndDate`) VALUES
(1, '2019-06-08 10:07:00', '2019-06-09 10:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `aresponse`
--

CREATE TABLE IF NOT EXISTS `aresponse` (
  `requestid` varchar(23) NOT NULL,
  `Date` date NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`requestid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aresponse`
--

INSERT INTO `aresponse` (`requestid`, `Date`, `message`) VALUES
('GUR/3430/09', '2019-05-23', 'your account is approve'),
('GUR/3434/09', '2019-06-02', 'your account is approve'),
('GUR/3435/09', '2019-06-02', 'your account is approve'),
('GUR/3518/08', '2019-06-08', 'your account is approve'),
('GUR/3577/08', '2019-06-02', 'your account is approve'),
('GUR/3671/08', '2019-06-08', 'your account is approve'),
('GUR/3675/09', '2019-06-08', 'your account is approve'),
('GUR/3680/09', '2019-06-02', 'your account is approve'),
('GUR/3699/08', '2019-06-01', 'your account is approve');

-- --------------------------------------------------------

--
-- Table structure for table `attempt`
--

CREATE TABLE IF NOT EXISTS `attempt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `ballotstore`
--

CREATE TABLE IF NOT EXISTS `ballotstore` (
  `Voter_id` int(11) NOT NULL,
  `Candidate_id` int(11) NOT NULL,
  PRIMARY KEY (`Voter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ballotstore`
--

INSERT INTO `ballotstore` (`Voter_id`, `Candidate_id`) VALUES
(19, 30),
(20, 20),
(21, 20),
(24, 24),
(25, 20),
(26, 26),
(27, 26),
(28, 24),
(29, 26),
(30, 30),
(31, 30),
(32, 32),
(33, 32),
(34, 42),
(36, 18),
(41, 30),
(42, 18),
(43, 38),
(45, 42),
(738, 738),
(739, 739),
(740, 739),
(741, 741),
(742, 742),
(743, 742),
(744, 742),
(745, 743);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_for_sec_vote`
--

CREATE TABLE IF NOT EXISTS `candidate_for_sec_vote` (
  `Candidate_ID` int(11) NOT NULL,
  `Full_Name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `faculity` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(23) NOT NULL,
  `CGPA` varchar(24) NOT NULL,
  `campus` varchar(24) NOT NULL,
  `information` varchar(24) NOT NULL,
  PRIMARY KEY (`Candidate_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_for_sec_vote`
--

INSERT INTO `candidate_for_sec_vote` (`Candidate_ID`, `Full_Name`, `gender`, `faculity`, `department`, `year`, `CGPA`, `campus`, `information`) VALUES
(738, 'abel amare', 'male', 'informatics', 'it', ' 3rd', '4.1', 'GC', 'kkhkk'),
(739, 'tsegi adraw', 'femal', 'informatics', 'it', ' 3rd', '3.7', 'Tseda', 'eeeeeeeeee'),
(741, 'tinsu mathows', 'male', 'informatis', 'computer', ' 4th', '3.2', 'marki', 'essssss'),
(742, 'subalew marnew', 'male', 'informatis', 'computer', ' 4th', '3.4', 'Facil', 'edddddgff'),
(743, 'ayalew abebe', 'male', 'informatis', 'computer', ' 4th', '3.1', 'Facil', 'eeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE IF NOT EXISTS `count` (
  `CID` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `sex` varchar(23) NOT NULL,
  `faculity` varchar(23) NOT NULL,
  `department` varchar(23) NOT NULL,
  `year` varchar(12) NOT NULL,
  `cgpa` float NOT NULL,
  `campus` varchar(12) NOT NULL,
  `information` varchar(30) NOT NULL,
  `VOICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`CID`, `fullname`, `sex`, `faculity`, `department`, `year`, `cgpa`, `campus`, `information`, `VOICE`) VALUES
(738, 'abel amare', 'male', 'informatics', 'it', '3rd', 4.1, 'GC', 'kkhkk', 1),
(739, 'tsegi adraw', 'femal', 'informatics', 'it', '3rd', 3.7, 'Tseda', 'eeeeeeeeee', 2),
(741, 'tinsu mathows', 'male', 'informatis', 'computer', '4th', 3.2, 'marki', 'essssss', 1),
(743, 'ayalew abebe', 'male', 'informatis', 'computer', '4th', 3.1, 'Facil', 'eeeeeeeeeee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `counter2`
--

CREATE TABLE IF NOT EXISTS `counter2` (
  `CID` int(11) NOT NULL,
  `fullname` varchar(12) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `faculity` varchar(12) NOT NULL,
  `department` varchar(12) NOT NULL,
  `year` varchar(12) NOT NULL,
  `cgpa` varchar(12) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `information` varchar(30) NOT NULL,
  `VOICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter2`
--

INSERT INTO `counter2` (`CID`, `fullname`, `sex`, `faculity`, `department`, `year`, `cgpa`, `campus`, `information`, `VOICE`) VALUES
(742, 'subalew marn', 'male', 'informatis', 'computer', '4th', '3.4', 'Facil', 'edddddgff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

CREATE TABLE IF NOT EXISTS `discipline` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `faculity` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `discipline_type` varchar(20) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `campus` varchar(23) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `Did` (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`Did`, `fname`, `lname`, `gender`, `age`, `faculity`, `department`, `year`, `discipline_type`, `sid`, `campus`) VALUES
(7, 'rere', 'gg', 'female', 23, 'cns', 'com', '3rd', 'eatg', 'GUR/377/08', 'tedy'),
(13, 'ebistie', 'mengistie', 'female', 23, 'infrmatics', 'computer', '4th', 'wear style', 'GUR/3771/0', 'tedy');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE IF NOT EXISTS `election` (
  `Electiondate_ID` int(11) NOT NULL,
  `StartDate` datetime NOT NULL,
  `Closedate` datetime NOT NULL,
  PRIMARY KEY (`Electiondate_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`Electiondate_ID`, `StartDate`, `Closedate`) VALUES
(1, '2019-06-07 08:40:00', '2019-06-09 08:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `comment` longtext,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) DEFAULT NULL,
  `Dates` date DEFAULT NULL,
  `Ex_Dates` date DEFAULT NULL,
  `myfile` longtext,
  `sender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `Title`, `Dates`, `Ex_Dates`, `myfile`, `sender`) VALUES
(16, 'ddddddddddddd', '2019-05-05', '2019-05-17', 'ddddddddd', 'mahi'),
(17, 'gfg', '2019-05-22', '2019-05-17', 'ghghjhh', 'mahi'),
(18, 'bbbbbbbbb', '2019-05-22', '2019-05-23', '', 'mahi'),
(19, 'rgfgh', '2019-05-23', '2019-05-24', 'dffgffgfg', 'mahi'),
(20, 'tdy', '2019-06-08', '2019-06-09', 'fjkkfd', 'mahi');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `to` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `subject`, `message`, `to`, `status`) VALUES
(47, 'vv', 'vffffffff', 'ssd', 'read'),
(48, 'vv', 'vffffffff', 'ssd', 'read'),
(59, 'hhh', 'fffffffff', 'SSD', 'read'),
(63, 'hhhhh', 'hhhj', 'SSD', 'read'),
(64, 'rrrr', 'hhhhh', 'Registrar', 'read'),
(65, 'rrrrrrr', 'fufffffffffffr', 'SSD', 'read'),
(66, 't tdtd', 'fff', 'Registrar', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `requesttable`
--

CREATE TABLE IF NOT EXISTS `requesttable` (
  `student_ID` varchar(30) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `age` int(11) NOT NULL,
  `faculity` varchar(17) NOT NULL,
  `deparment` varchar(18) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `requesttype` varchar(17) NOT NULL,
  `votstatus` varchar(10) NOT NULL,
  `votestatus2` varchar(11) NOT NULL,
  `photo` longtext NOT NULL,
  `approved` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `campus` varchar(20) DEFAULT NULL,
  `information` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requesttable`
--

INSERT INTO `requesttable` (`student_ID`, `fname`, `lname`, `sex`, `age`, `faculity`, `deparment`, `year`, `cgpa`, `username`, `password`, `requesttype`, `votstatus`, `votestatus2`, `photo`, `approved`, `date`, `campus`, `information`) VALUES
('GUR/3430/09', 'abel', 'amare', 'male', 23, 'informatics', 'it', '3rd', '4.1', 'abel', '123', 'Candidate', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-01 00:00:00', 'GC', 'kkhkk'),
('GUR/3434/09', 'eshte', 'workie', 'male', 19, 'informatics', 'it', '3rd', '3.5', 'eshete', '123', 'Voter', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-02 08:49:03', 'Tseda', ''),
('GUR/3435/09', 'tsegi', 'adraw', 'femal', 23, 'informatics', 'it', '3rd', '3.7', 'aderaw', '123', 'Candidate', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-02 00:00:00', 'Tseda', 'eeeeeeeeee'),
('GUR/3518/08', 'yiwordi', 'ekubiy', 'femal', 21, 'cns', 'phiscis', '2nd', '3.3', 'yiw', '123', 'Voter', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-08 07:41:40', 'Facil', ''),
('GUR/3577/08', 'subalew', 'marnew', 'male', 21, 'informatis', 'computer', '4th', '3.4', 'subalew', '123', 'Candidate', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-02 00:00:00', 'Facil', 'edddddgff'),
('GUR/3671/08', 'ayalew', 'abebe', 'male', 20, 'informatis', 'computer', '4th', '3.1', 'ayalew', '123', 'Candidate', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-08 00:00:00', 'Facil', 'eeeeeeeeeee'),
('GUR/3675/09', 'mulatu', 'mekonen', 'male', 23, 'informatis', 'computer', '4th', '2.8', 'mulatu', '123', 'Voter', 'unvote', 'vote', 'userphoto/eb3.jpg', 'yes', '2019-06-08 07:08:17', 'Facil', ''),
('GUR/3680/09', 'tinsu', 'mathows', 'male', 21, 'informatis', 'computer', '4th', '3.2', 'tinsu', '123', 'Candidate', 'vote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-02 00:00:00', 'marki', 'essssss'),
('GUR/3699/08', 'melese', 'aychile', 'male', 21, 'informatis', 'computer', '4th', '2.6', 'melese', '123', 'Voter', 'unvote', 'unvote', 'userphoto/eb3.jpg', 'yes', '2019-06-01 01:42:08', 'Facil', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(20) NOT NULL DEFAULT '',
  `fname` varchar(10) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(7) DEFAULT NULL,
  `collage` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `cgpa` varchar(6) DEFAULT NULL,
  `program` varchar(10) DEFAULT NULL,
  `campus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fname`, `lname`, `gender`, `age`, `collage`, `department`, `year`, `cgpa`, `program`, `campus`) VALUES
('GUR/3430/09', 'abel', 'amare', 'male', 23, 'informatics', 'it', '3rd', '4.1', 'regular', 'GC'),
('GUR/3431/09', 'abe', 'kebede', 'male', 23, 'informatics', 'it', '3rd', '3.8', 'regular', 'GC'),
('GUR/3432/09', 'addisu', 'ayshshium', 'male', 24, 'informatics', 'it', '3rd', '2.7', 'regular', 'GC'),
('GUR/3433/09', 'aderaw', 'abebe', 'male', 26, 'informatics', 'it', '3rd', '3.4', 'regular', 'Tseda'),
('GUR/3434/09', 'eshte', 'workie', 'male', 19, 'informatics', 'it', '3rd', '3.5', 'regular', 'Tseda'),
('GUR/3435/09', 'tsegi', 'adraw', 'female', 23, 'informatics', 'it', '3rd', '3.7', 'regular', 'Tseda'),
('GUR/3436/08', 'yeshi', 'bayu', 'female', 24, 'informatics', 'it', '3rd', '3.3', 'extension', 'Tseda'),
('GUR/3511/08', 'yagebe', 'muluye', 'female', 23, 'informatics', 'cs', '4th', '3.4', 'regular', 'tedy'),
('GUR/3512/08', 'tamirie', 'tigabu', 'female', 23, 'informatics', 'cs', '4th', '3.5', 'regular', 'tedy'),
('GUR/3513/08', 'sisynesh', 'bely', 'female', 23, 'informatics', 'cs', '4th', '2.5', 'regular', 'tedy'),
('GUR/3514/08', 'mulunesh', 'kebeke', 'female', 23, 'informatics', 'cs', '4th', '3.6', 'regular', 'marki'),
('GUR/3515/08', 'hareg', 'sewnet', 'female', 23, 'cns', 'biology', '2nd', '3.1', 'regular', 'GC'),
('GUR/3516/08', 'sewnet', 'mose', 'female', 20, 'cns', 'chemistry', '3rd', '3.2', 'regular', 'Tseda'),
('GUR/3517/08', 'yeshhareg', 'fikre', 'female', 20, 'cns', 'chemistry', '3rd', '3.9', 'regular', 'Tseda'),
('GUR/3518/08', 'yiwordi', 'ekubiy', 'female', 21, 'cns', 'phiscis', '2nd', '3.3', 'regular', 'Facil'),
('GUR/3519/08', 'selam', 'gashow', 'female', 12, 'ss', 'economice', '3rd', '2.8', 'regular', 'Facil'),
('GUR/3520/08', 'bitewish', 'sewnet', 'female', 22, 'ss', 'economice', '3rd', '2.8', 'regular', 'marki'),
('GUR/3521/08', 'yiwordi', 'amare', 'female', 22, 'ss', 'economics', '3rd', '2.8', 'regular', 'GC'),
('GUR/3522/08', 'sosi', 'belew', 'female', 21, 'inforamtics', 'it', '3rd', '2.8', 'regular', 'marki'),
('GUR/3577/08', 'subalew', 'marnew', 'male', 21, 'informatis', 'computer', '4th', '3.4', 'regular', 'Facil'),
('GUR/3577/09', 'abdu', 'mohamed', 'male', 21, 'informatis', 'computer', '4th', '3.6', 'extension', 'marki'),
('GUR/3671/08', 'ayalew', 'abebe', 'male', 20, 'informatis', 'computer', '4th', '3.1', 'regular', 'Facil'),
('GUR/3675/09', 'mulatu', 'mekonen', 'male', 23, 'informatis', 'computer', '4th', '2.8', 'regular', 'Facil'),
('GUR/3676/08', 'bely', 'worku', 'male', 21, 'informatis', 'computer', '4th', '2.5', 'regular', 'Facil'),
('GUR/3680/09', 'tinsu', 'mathows', 'male', 21, 'informatis', 'computer', '4th', '3.2', 'regular', 'marki'),
('GUR/3699/08', 'melese', 'aychile', 'male', 21, 'informatis', 'computer', '4th', '2.6', 'regular', 'Facil'),
('GUR/3771/0', 'ebistie', 'men', 'female', 20, 'informatics', 'computer', '4th', '3.3', 'regular', 'tedy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `photo` longtext,
  `requestid` varchar(20) NOT NULL,
  `campus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=746 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fname`, `lname`, `sex`, `age`, `username`, `password`, `role`, `status`, `photo`, `requestid`, `campus`) VALUES
(6, 'mahi', 'maru', 'Female', 1, 'mahi', 'mahi', 'SSD', 1, '../userphoto/eb4.jpg', '', ''),
(7, 'yeh', 'be', 'Female', 1, 'hibst', 'hibst', 'Adminstrator', 1, '../userphoto/eb3.jpg', '', ''),
(8, 'fany', 'abeba', 'Female', 56, 'fan', 'fan', 'Registrar', 1, 'userphoto/IMG_20171008_042451.jpg', '', ''),
(44, 'sew', 'mos', 'Female', 20, 'sew', 'sew', 'discipline_committee', 1, 'userphoto/eb3.jpg', '', ''),
(737, 'melese', 'aychile', 'male', 21, 'melese', '123', 'Voter', 1, 'userphoto/eb3.jpg', 'GUR/3699/08', 'Facil'),
(738, 'abel', 'amare', 'male', 23, 'abel', '123', 'Candidate', 1, 'userphoto/eb3.jpg', 'GUR/3430/09', 'GC'),
(739, 'tsegi', 'adraw', 'femal', 23, 'aderaw', '123', 'Candidate', 1, 'userphoto/eb3.jpg', 'GUR/3435/09', 'Tseda'),
(740, 'eshte', 'workie', 'male', 19, 'eshete', '123', 'Voter', 1, 'userphoto/eb3.jpg', 'GUR/3434/09', 'Tseda'),
(741, 'tinsu', 'mathows', 'male', 21, 'tinsu', '123', 'Candidate', 1, 'userphoto/eb3.jpg', 'GUR/3680/09', 'marki'),
(742, 'subalew', 'marnew', 'male', 21, 'subalew', '123', 'Candidate', 1, 'userphoto/eb3.jpg', 'GUR/3577/08', 'Facil'),
(743, 'ayalew', 'abebe', 'male', 20, 'ayalew', '123', 'Candidate', 1, 'userphoto/eb3.jpg', 'GUR/3671/08', 'Facil'),
(744, 'mulatu', 'mekonen', 'male', 23, 'mulatu', '123', 'Voter', 1, 'userphoto/eb3.jpg', 'GUR/3675/09', 'Facil'),
(745, 'yiwordi', 'ekubiy', 'femal', 21, 'yiw', '123', 'Voter', 1, 'userphoto/eb3.jpg', 'GUR/3518/08', 'Facil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
