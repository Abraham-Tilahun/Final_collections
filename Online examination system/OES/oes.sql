-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2014 at 10:41 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_ID` varchar(10) NOT NULL,
  `Admin_Name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`Admin_ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `username`, `password`, `email`) VALUES
('admin1', 'Tolosa Tola', 'admin', 'admin12', 'tolosa.tola@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ans_matching`
--

CREATE TABLE IF NOT EXISTS `ans_matching` (
  `ans_id` varchar(2) NOT NULL,
  `answer_list` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `choose`
--

CREATE TABLE IF NOT EXISTS `choose` (
  `Answer` varchar(100) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `exam_id` varchar(20) NOT NULL,
  `Option1` varchar(100) NOT NULL,
  `Option2` varchar(100) NOT NULL,
  `Option3` varchar(100) NOT NULL,
  `Option4` varchar(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `question_id` varchar(20) NOT NULL,
  `semister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit_hr` int(2) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `semister` int(11) NOT NULL,
  `Inst_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_name` (`course_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `credit_hr`, `dept_name`, `semister`, `Inst_Name`) VALUES
('ABPE01', 'Hydrolics', 4, 'Agricultural BioProcess Enineering', 1, 'Meti Obsa'),
('c++11', 'c+++', 3, 'dept01', 1, 'Inst01'),
('Comp111', 'Java', 4, 'dept01', 2, 'Inst02'),
('comp201', 'Introduction to Computer Science', 3, 'Computer Science', 1, 'Abdi Ifa'),
('comp212', 'Fundamentals of programming', 4, 'Computer Science', 2, 'Dabala Gutu'),
('Math326', 'Discerete Mathematics', 3, 'Mathematics', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `deptno` varchar(10) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  PRIMARY KEY (`deptno`),
  UNIQUE KEY `dept_name` (`dept_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptno`, `dept_name`, `faculty_name`) VALUES
('dept12', 'Civil Engineering', 'Inistitute of Technology'),
('dept13', 'Mechanical Engineering', 'Inistitute of Technology'),
('dept14', 'Agricultural BioProcess Enineering', 'Inistitute of Technology'),
('dept15', 'Electical & Computer Engineering', 'Inistitute of Technology'),
('dept16', 'Food Processing', 'Inistitute of Technology'),
('dept22', 'Chemistry', 'Natural &Computational Science'),
('dept23', 'Mathematics', 'Natural &Computational Science'),
('dept24', 'Physics', 'Natural &Computational Science'),
('DEPT25', 'Health & Physical Edu.', 'Natural &Computational Science'),
('dept26', 'Statistics ', 'Natural &Computational Science'),
('dept31', 'Pharmacy', 'Medicine & Healthy Sciences'),
('dept32', 'Nursing', 'Medicine & Healthy Sciences'),
('dept33', 'Public Health Officer', 'Medicine & Healthy Sciences'),
('dept34', 'Biomedical Science', 'Medicine & Healthy Sciences'),
('dept41', 'English', 'Other Social Science and Humanities'),
('dept42', 'Oromo Lanuage and litratrae', 'Other Social Science and Humanities'),
('dept43', 'Sociology and Social Work', 'Other Social Science and Humanities'),
('dept51', 'Development Managment', 'Business & Economics'),
('dept52', 'Accounting', 'Business & Economics'),
('dept53', 'Economics', 'Business & Economics'),
('dept54', 'Marketing', 'Business & Economics'),
('dept61', 'Plant Science', 'Natural &Computational Science'),
('dept62', 'Animal Sceicnce', 'Agriculture & Veterinary Sciences'),
('dept63', 'Veterinary  Technology', 'Natural &Computational Science');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE IF NOT EXISTS `exam_category` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  PRIMARY KEY (`exam_id`),
  UNIQUE KEY `exam_name` (`exam_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`exam_id`, `exam_name`) VALUES
(3, 'Final Exam'),
(2, 'Mid Exam'),
(1, 'Quiz Exam');

-- --------------------------------------------------------

--
-- Table structure for table `exam_committee`
--

CREATE TABLE IF NOT EXISTS `exam_committee` (
  `EC_ID` varchar(10) NOT NULL,
  `EC_Name` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`EC_ID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_committee`
--

INSERT INTO `exam_committee` (`EC_ID`, `EC_Name`, `dept_name`, `username`, `password`, `email`, `Status`) VALUES
('12', 'bb', 'bb@gmail.co', '12', 'dept01', 'bb', 'Inactive'),
('23', 'duulaa', 'do@yahoo.com', 'duulaa12', 'dept01', 'duulaa', 'Active'),
('88', 'DDD', 'AB@yahoo.ccom', 'm', 'dept52', 'o', 'Active'),
('88888', 'dddd', 'aaa@yahoo.com', 'dddd12', 'dept01', 'dddd', 'Active'),
('EC1', 'Oli Yadi', 'Computer Science', 'oli', 'oli12', 'oli12@gmail.com', 'Active'),
('EC2', 'Chaltu Tolosa', 'Civil Engineering', 'chaltu', 'chaltu12', 'cahaltu12@yahoo.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` varchar(10) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  PRIMARY KEY (`faculty_id`),
  UNIQUE KEY `faculty_name` (`faculty_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
('faculty6', 'Agriculture & Veterinary Sciences'),
('faculty5', 'Business & Economics'),
('faculty1', 'Inistitute of Technology'),
('fuculty1', 'institute of technology'),
('faculty3', 'Medicine & Healthy Sciences'),
('faculty2', 'Natural &Computational Science'),
('faculty4', 'Other Social Science and Humanities'),
('faculty7', 'School of Law');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `Inst_ID` varchar(10) NOT NULL,
  `Inst_Name` varchar(30) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Inst_ID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`Inst_ID`, `Inst_Name`, `dept_name`, `course_name`, `username`, `password`, `email`, `Status`) VALUES
('Inst01', 'Abdi Ifa', 'Computer Science', 'Introduction to Computer Science', 'abdi', 'abdi12', 'abdi@yahoo.com', 'Active'),
('Inst02', 'Meti Obsa', 'Civil Engineering', 'Hydrolics', 'meti', 'meti12', 'meti.obsi@yahoo.com', 'Active'),
('Inst03', 'Hiwot Abera', 'Agricultural BioProcess Enineering', 'Hydrolics', 'hiwot', 'hiwot12', 'hiwot.abera@gmail.com', 'Active'),
('Inst04', 'Dabala Gutu', 'Computer Science', 'Fundamentals of programming', 'dabala', 'dabala12', 'dabo@gmail.com', 'Active'),
('Inst05', 'Mesret Abdata', 'Mathematics', 'Hydrolics', 'meseret', 'meseret12', 'mesi#yahoo.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE IF NOT EXISTS `matching` (
  `answer` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `exam_id` varchar(20) NOT NULL,
  `question_id` varchar(20) NOT NULL,
  `semister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_page`
--

CREATE TABLE IF NOT EXISTS `question_page` (
  `question_id` int(2) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `Option1` varchar(100) NOT NULL,
  `Option2` varchar(100) NOT NULL,
  `Option3` varchar(100) NOT NULL,
  `Option4` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_page`
--

INSERT INTO `question_page` (`question_id`, `exam_id`, `semester`, `course_name`, `question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(23, 3, 1, 'ABPE01', 'hydro', 'dd', 'edd', 'dd', 'eew', 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE IF NOT EXISTS `question_type` (
  `type_id` int(11) NOT NULL,
  `question_name` varchar(20) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`type_id`, `question_name`) VALUES
(1, 'choose'),
(2, 'True_False'),
(3, 'matching'),
(4, 'subjective');

-- --------------------------------------------------------

--
-- Table structure for table `que_matching`
--

CREATE TABLE IF NOT EXISTS `que_matching` (
  `question_id` varchar(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Stud_ID` varchar(10) NOT NULL,
  `exam_id` varchar(20) NOT NULL,
  `result_id` varchar(20) NOT NULL,
  `Correct` int(11) NOT NULL,
  `Wrong` int(11) NOT NULL,
  `Result` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Stud_ID`, `exam_id`, `result_id`, `Correct`, `Wrong`, `Result`, `Total`, `course_id`) VALUES
('', '', '', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_time` time NOT NULL,
  `exam_name` int(11) NOT NULL,
  `semister` int(11) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Stud_ID` varchar(10) NOT NULL,
  `Stud_Name` varchar(30) NOT NULL,
  `Stud_Sex` varchar(10) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `semister` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`Stud_ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stud_ID`, `Stud_Name`, `Stud_Sex`, `dept_name`, `semister`, `username`, `password`, `Status`, `email`, `year`) VALUES
('R/099/02', 'Bontu Chala', 'Female', 'Civil Engineering', 2, 'bontu', 'bontu12', 'InActive', 'bontu@gmail.com', 3),
('R/1717/02', 'Birhanu ', 'Male', 'Computer Science', 2, 'birhanu', 'birhanu12', 'InActive', 'birhanu@yahoo.com', 4),
('R/1821/03', 'Ephrem Getachew', 'Male', 'Computer Science', 2, 'ephrem', 'ephrem', 'Active', 'ephrem@gmail.com', 4),
('R/1839/03', 'Kumela', 'Male', 'Computer Science', 2, 'knb', '12', 'Active', 'kumela2010@gmail.com', 4),
('TR/013/03', 'Abdisa Chemeda', 'Male', 'Computer Science', 2, 'abdi', 'abdi12', 'Active', 'abdi@yahoo.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `Stud_ID` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `dept_name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `true_false`
--

CREATE TABLE IF NOT EXISTS `true_false` (
  `Answer` varchar(10) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `exam_id` varchar(20) NOT NULL,
  `True` varchar(10) NOT NULL,
  `False` varchar(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `question_id` varchar(20) NOT NULL,
  `semister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
