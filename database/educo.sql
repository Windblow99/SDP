-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2019 at 06:01 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educo`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
CREATE TABLE IF NOT EXISTS `certificate` (
  `Cert_No` int(10) NOT NULL AUTO_INCREMENT,
  `Corp_ID` int(10) NOT NULL,
  `Cert_File` varchar(255) NOT NULL,
  PRIMARY KEY (`Cert_No`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`Cert_No`, `Corp_ID`, `Cert_File`) VALUES
(16, 13, 'C:wamp64	mpphp3413.tmp'),
(15, 13, 'C:wamp64	mpphp9A62.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `Chap_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Chap_Name` varchar(50) NOT NULL,
  `Year_No` int(1) NOT NULL,
  PRIMARY KEY (`Chap_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`Chap_ID`, `Chap_Name`, `Year_No`) VALUES
(2, 'Chapter 1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `C_No` int(10) NOT NULL AUTO_INCREMENT,
  `T_ID` int(10) NOT NULL,
  `C_Name` varchar(25) NOT NULL,
  PRIMARY KEY (`C_No`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`C_No`, `T_ID`, `C_Name`) VALUES
(2, 7, 'Class A'),
(3, 7, 'Class B'),
(4, 7, 'Class C'),
(5, 7, 'Class D'),
(6, 7, 'Class E');

-- --------------------------------------------------------

--
-- Table structure for table `examq_request`
--

DROP TABLE IF EXISTS `examq_request`;
CREATE TABLE IF NOT EXISTS `examq_request` (
  `R_No` int(10) NOT NULL AUTO_INCREMENT,
  `Q_No` int(11) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `T_ID` int(10) NOT NULL,
  `Corp_No` int(10) NOT NULL,
  `M_ID` int(10) NOT NULL,
  PRIMARY KEY (`R_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `Q_No` int(11) NOT NULL AUTO_INCREMENT,
  `Chapter` varchar(255) DEFAULT NULL,
  `Format` varchar(255) DEFAULT NULL,
  `Difficulty` varchar(255) DEFAULT NULL,
  `Mark` int(1) DEFAULT NULL,
  `QuestionContent` text,
  `Image` mediumblob,
  `Imagepath` varchar(255) DEFAULT NULL,
  `A` varchar(255) DEFAULT NULL,
  `B` varchar(255) DEFAULT NULL,
  `C` varchar(255) DEFAULT NULL,
  `D` varchar(255) DEFAULT NULL,
  `TrueAnswer` varchar(255) DEFAULT NULL,
  `Approval` int(11) DEFAULT NULL,
  PRIMARY KEY (`Q_No`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q_No`, `Chapter`, `Format`, `Difficulty`, `Mark`, `QuestionContent`, `Image`, `Imagepath`, `A`, `B`, `C`, `D`, `TrueAnswer`, `Approval`) VALUES
(102, 'Chapter 3', 'MCQ', 'Exam', 5, '1-1', NULL, NULL, '1', '0', '3', '2', 'B', NULL),
(101, 'Chapter 3', 'MCQ', 'Exam', 5, '6-1', NULL, NULL, '5', '4', '3', '2', 'A', NULL),
(100, 'Chapter 3', 'MCQ', 'Exam', 5, '3+3+3', NULL, NULL, '3', '6', '9', '12', 'C', NULL),
(99, 'Chapter 3', 'MCQ', 'Exam', 5, '7+8', NULL, NULL, '13', '14', '15', '16', 'C', NULL),
(98, 'Chapter 3', 'MCQ', 'Exam', 5, '9+6', NULL, NULL, '0', '5', '10', '15', 'D', NULL),
(97, 'Chapter 3', 'MCQ', 'Exam', 5, '4-3', NULL, NULL, '0', '1', '2', '3', 'B', NULL),
(96, 'Chapter 3', 'MCQ', 'Exam', 5, '5-5', NULL, NULL, '0', '1', '2', '3', 'A', NULL),
(95, 'Chapter 3', 'MCQ', 'Exam', 5, '6-4', NULL, NULL, '0', '1', '2', '3', 'C', NULL),
(94, 'Chapter 3', 'MCQ', 'Exam', 5, '8-5', NULL, NULL, '3', '2', '1', '0', 'A', NULL),
(93, 'Chapter 3', 'MCQ', 'Exam', 5, '4+3', NULL, NULL, '7', '6', '5', '4', 'A', NULL),
(92, 'Chapter 3', 'MCQ', 'Exam', 5, '3+2', NULL, NULL, '3', '4', '5', '6', 'C', NULL),
(91, 'Chapter 3', 'MCQ', 'Exam', 5, '15-10', NULL, NULL, '0', '5', '10', '15', 'B', NULL),
(90, 'Chapter 3', 'MCQ', 'Exam', 5, '6+5', NULL, NULL, '8', '9', '10', '11', 'D', NULL),
(89, 'Chapter 3', 'MCQ', 'Exam', 5, '1+10', NULL, NULL, '8', '9', '10', '11', 'D', NULL),
(88, 'Chapter 3', 'MCQ', 'Exam', 5, '5+5', NULL, NULL, '7', '8', '9', '10', 'D', NULL),
(87, 'Chapter 3', 'MCQ', 'Exam', 5, '4+4', NULL, NULL, '7', '8', '9', '10', 'B', NULL),
(86, 'Chapter 3', 'MCQ', 'Exam', 5, '1+2+3+4', NULL, NULL, '7', '8', '9', '10', 'D', NULL),
(85, 'Chapter 3', 'MCQ', 'Exam', 5, '1+2+3', NULL, NULL, '4', '5', '6', '7', 'C', NULL),
(84, 'Chapter 3', 'MCQ', 'Exam', 5, '2+2', NULL, NULL, '1', '2', '3', '4', 'D', NULL),
(83, 'Chapter 3', 'MCQ', 'Exam', 5, '2+1', NULL, NULL, '2', '3', '4', '5', 'B', NULL),
(82, 'Chapter 3', 'MCQ', 'Exam', 5, '1+1', NULL, NULL, '2', '3', '4', '5', 'A', NULL),
(103, 'Chapter 3', 'MCQ', 'Exam', 5, '10-7', NULL, NULL, '4', '3', '2', '1', 'B', NULL),
(104, 'Chapter 3', 'MCQ', 'Exam', 5, '16-8', NULL, NULL, '8', '9', '10', '11', 'A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `E_No` int(11) NOT NULL AUTO_INCREMENT,
  `U_ID` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `E_Result` int(11) DEFAULT NULL,
  `StartTime` timestamp NULL DEFAULT NULL,
  `EndTime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`E_No`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`E_No`, `U_ID`, `Score`, `E_Result`, `StartTime`, `EndTime`) VALUES
(1, 6, 14, 70, '2019-02-13 17:38:34', '2019-02-13 17:49:23'),
(2, 6, 17, 85, '2019-02-13 17:56:56', '2019-02-13 17:58:13'),
(3, 6, 18, 90, '2019-02-13 17:59:04', '2019-02-13 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

DROP TABLE IF EXISTS `student_class`;
CREATE TABLE IF NOT EXISTS `student_class` (
  `C_ID` int(10) NOT NULL,
  `S_ID` int(10) NOT NULL,
  `S_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`C_ID`,`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`C_ID`, `S_ID`, `S_Name`) VALUES
(2, 6, 'John'),
(6, 14, 'Peter Parker'),
(2, 15, 'James Frank');

-- --------------------------------------------------------

--
-- Table structure for table `student_question`
--

DROP TABLE IF EXISTS `student_question`;
CREATE TABLE IF NOT EXISTS `student_question` (
  `S_Q_No` int(11) NOT NULL AUTO_INCREMENT,
  `E_No` int(11) DEFAULT NULL,
  `Q_No` int(11) DEFAULT NULL,
  `S_QAnswer` varchar(255) DEFAULT NULL,
  `TrueAnswer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`S_Q_No`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_question`
--

INSERT INTO `student_question` (`S_Q_No`, `E_No`, `Q_No`, `S_QAnswer`, `TrueAnswer`) VALUES
(1, 1, 91, 'D', 'B'),
(2, 1, 90, 'D', 'D'),
(3, 1, 96, 'B', 'A'),
(4, 1, 86, 'B', 'D'),
(5, 1, 103, 'B', 'B'),
(6, 1, 102, 'B', 'B'),
(7, 1, 100, 'C', 'C'),
(8, 1, 97, 'B', 'B'),
(9, 1, 89, 'D', 'D'),
(10, 1, 101, 'A', 'A'),
(11, 1, 83, 'B', 'B'),
(12, 1, 95, 'D', 'C'),
(13, 1, 87, 'B', 'B'),
(14, 1, 99, 'C', 'C'),
(15, 1, 85, 'C', 'C'),
(16, 1, 94, 'B', 'A'),
(17, 1, 104, 'B', 'A'),
(18, 1, 84, 'D', 'D'),
(19, 1, 93, 'A', 'A'),
(20, 1, 92, 'C', 'C'),
(21, 2, 96, 'B', 'A'),
(22, 2, 87, 'B', 'B'),
(23, 2, 98, 'D', 'D'),
(24, 2, 85, 'C', 'C'),
(25, 2, 95, 'C', 'C'),
(26, 2, 88, 'D', 'D'),
(27, 2, 92, 'C', 'C'),
(28, 2, 91, 'C', 'B'),
(29, 2, 82, 'A', 'A'),
(30, 2, 84, 'D', 'D'),
(31, 2, 83, 'B', 'B'),
(32, 2, 104, 'D', 'A'),
(33, 2, 99, 'C', 'C'),
(34, 2, 103, 'B', 'B'),
(35, 2, 89, 'D', 'D'),
(36, 2, 93, 'A', 'A'),
(37, 2, 86, 'D', 'D'),
(38, 2, 90, 'D', 'D'),
(39, 2, 102, 'B', 'B'),
(40, 2, 101, 'A', 'A'),
(41, 3, 84, 'D', 'D'),
(42, 3, 102, 'B', 'B'),
(43, 3, 82, 'A', 'A'),
(44, 3, 89, 'D', 'D'),
(45, 3, 91, 'C', 'B'),
(46, 3, 92, 'C', 'C'),
(47, 3, 97, 'B', 'B'),
(48, 3, 87, 'B', 'B'),
(49, 3, 86, 'D', 'D'),
(50, 3, 103, 'B', 'B'),
(51, 3, 93, 'A', 'A'),
(52, 3, 85, 'C', 'C'),
(53, 3, 94, 'A', 'A'),
(54, 3, 101, 'A', 'A'),
(55, 3, 99, 'C', 'C'),
(56, 3, 96, 'B', 'A'),
(57, 3, 98, 'D', 'D'),
(58, 3, 88, 'D', 'D'),
(59, 3, 90, 'D', 'D'),
(60, 3, 100, 'C', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `T_No` int(11) NOT NULL AUTO_INCREMENT,
  `Chapter` varchar(255) DEFAULT NULL,
  `Q_No` int(11) DEFAULT NULL,
  `QuestionContent` text,
  `A` varchar(255) DEFAULT NULL,
  `B` varchar(255) DEFAULT NULL,
  `C` varchar(255) DEFAULT NULL,
  `D` varchar(255) DEFAULT NULL,
  `TrueAnswer` varchar(255) DEFAULT NULL,
  `UserAnswer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`T_No`)
) ENGINE=MyISAM AUTO_INCREMENT=281 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Role` varchar(255) NOT NULL,
  PRIMARY KEY (`U_ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `Name`, `Email`, `Password`, `Contact_No`, `Role`) VALUES
(7, 'abc', 'abc123@hotmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'teacher'),
(6, 'John', 'john123@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student'),
(13, 'def', 'def@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'corporate'),
(14, 'Peter Parker', 'spiderman@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student'),
(15, 'James Frank', 'james@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student'),
(16, 'jkl', 'jkl1@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
