-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 03:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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

CREATE TABLE `certificate` (
  `Cert_No` int(10) NOT NULL,
  `Corp_ID` int(10) NOT NULL,
  `Cert_File` varchar(255) NOT NULL,
  `Cert_Name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`Cert_No`, `Corp_ID`, `Cert_File`, `Cert_Name`) VALUES
(1, 13, 'C:wamp64	mpphp3413.tmp', 'Physics 1'),
(2, 13, 'C:wamp64	mpphp9A62.tmp', 'Physics 2'),
(3, 13, 'C:wamp64	mpphpEB15.tmp', 'Physics 3'),
(4, 13, 'C:wamp64	mpphpEC84.tmp', 'Physics 4'),
(5, 13, 'C:wamp64	mpphpE04C.tmp', 'Chapter 3');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `Chap_ID` int(10) NOT NULL,
  `Chap_Name` varchar(50) NOT NULL,
  `Year_No` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`Chap_ID`, `Chap_Name`, `Year_No`) VALUES
(2, 'Chapter 1', 4),
(3, 'Chapter 2', 4),
(4, 'Chapter 3', 4),
(5, 'Chapter 4', 4),
(6, 'Chapter 5', 4),
(7, 'Chapter 6', 4),
(8, 'Chapter 7', 4),
(9, 'Chapter 8', 4),
(10, 'Chapter 9', 4),
(11, 'Chapter 10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `C_No` int(10) NOT NULL,
  `T_ID` int(10) NOT NULL,
  `C_Name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`C_No`, `T_ID`, `C_Name`) VALUES
(2, 7, 'Class A'),
(3, 7, 'Class B'),
(4, 7, 'Class C'),
(5, 7, 'Class D'),
(9, 7, 'Class E');

-- --------------------------------------------------------

--
-- Table structure for table `examq_request`
--

CREATE TABLE `examq_request` (
  `R_No` int(10) NOT NULL,
  `Q_No` int(11) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `T_ID` int(10) NOT NULL,
  `Corp_No` int(10) NOT NULL,
  `M_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Q_No` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Chapter` varchar(255) NOT NULL,
  `Format` varchar(255) NOT NULL,
  `Difficulty` varchar(255) NOT NULL,
  `Mark` int(1) NOT NULL,
  `QuestionContent` text NOT NULL,
  `Image` mediumblob,
  `Imagepath` varchar(255) DEFAULT NULL,
  `A` varchar(255) NOT NULL,
  `B` varchar(255) NOT NULL,
  `C` varchar(255) NOT NULL,
  `D` varchar(255) NOT NULL,
  `TrueAnswer` varchar(255) NOT NULL,
  `Approval` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q_No`, `U_ID`, `Chapter`, `Format`, `Difficulty`, `Mark`, `QuestionContent`, `Image`, `Imagepath`, `A`, `B`, `C`, `D`, `TrueAnswer`, `Approval`) VALUES
(102, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '1-1', NULL, NULL, '1', '0', '3', '2', 'B', NULL),
(101, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '6-1', NULL, NULL, '5', '4', '3', '2', 'A', NULL),
(100, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '3+3+3', NULL, NULL, '3', '6', '9', '12', 'C', NULL),
(99, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '7+8', NULL, NULL, '13', '14', '15', '16', 'C', NULL),
(98, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '9+6', NULL, NULL, '0', '5', '10', '15', 'D', NULL),
(97, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '4-3', NULL, NULL, '0', '1', '2', '3', 'B', NULL),
(96, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '5-5', NULL, NULL, '0', '1', '2', '3', 'A', NULL),
(95, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '6-4', NULL, NULL, '0', '1', '2', '3', 'C', NULL),
(94, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '8-5', NULL, NULL, '3', '2', '1', '0', 'A', NULL),
(93, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '4+3', NULL, NULL, '7', '6', '5', '4', 'A', NULL),
(92, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '3+2', NULL, NULL, '3', '4', '5', '6', 'C', NULL),
(91, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '15-10', NULL, NULL, '0', '5', '10', '15', 'B', NULL),
(90, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '6+5', NULL, NULL, '8', '9', '10', '11', 'D', NULL),
(89, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '1+10', NULL, NULL, '8', '9', '10', '11', 'D', NULL),
(88, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '5+5', NULL, NULL, '7', '8', '9', '10', 'D', NULL),
(87, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '4+4', NULL, NULL, '7', '8', '9', '10', 'B', NULL),
(86, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '1+2+3+4', NULL, NULL, '7', '8', '9', '10', 'D', NULL),
(85, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '1+2+3', NULL, NULL, '4', '5', '6', '7', 'C', NULL),
(84, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '2+2', NULL, NULL, '1', '2', '3', '4', 'D', NULL),
(83, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '2+1', NULL, NULL, '2', '3', '4', '5', 'B', NULL),
(82, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '1+1', NULL, NULL, '2', '3', '4', '5', 'A', NULL),
(103, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '10-7', NULL, NULL, '4', '3', '2', '1', 'B', NULL),
(104, 7, 'Chapter 3', 'MCQ', 'Exam', 5, '16-8', NULL, NULL, '8', '9', '10', '11', 'A', NULL),
(105, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'One', NULL, NULL, '1', '0', '11', '2', 'A', NULL),
(106, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Two', NULL, NULL, '2', '3', '4', '5', 'A', NULL),
(107, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Three', NULL, NULL, '3', '1', '0', '7', 'A', NULL),
(108, 7, 'Chapter 1', 'MCQ', 'Exam', 5, 'Thirteen', NULL, NULL, '1', '3', '13', '31', 'C', NULL),
(109, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Twenty', NULL, NULL, '2', '0', '12', '20', 'D', NULL),
(110, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Nineteen', NULL, NULL, '9', '1', '91', '19', 'D', NULL),
(111, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Thirty', NULL, NULL, '3', '30', '0', '13', 'B', NULL),
(112, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Fifteen', NULL, NULL, '5', '15', '50', '1', 'B', NULL),
(113, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Fifty', NULL, NULL, '15', '0', '50', '5', 'C', NULL),
(114, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '6', NULL, NULL, 'Six', 'Sixty', 'Sixteen', 'None of above', 'A', NULL),
(115, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '9', NULL, NULL, 'Nine', 'Ninety', 'Nineteen', 'None of above', 'A', NULL),
(116, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '10', NULL, NULL, 'Ten', 'One', 'One hundred', 'Zero', 'A', NULL),
(117, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '41', NULL, NULL, 'Four', 'Fourteen', 'Forty-One', 'None of above', 'C', NULL),
(118, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '0', NULL, NULL, 'Zero', 'Ten', 'One hundred', 'None of above', 'A', NULL),
(119, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'One hundred', NULL, NULL, '1', '10', '100', 'None of above', 'C', NULL),
(120, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Seven', NULL, NULL, '7', '8', '9', '10', 'A', NULL),
(121, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '65', NULL, NULL, 'Sixty-five', 'Fifty-six', 'Sixteen', 'None of above', 'A', NULL),
(122, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '99', NULL, NULL, 'Nine', 'Ninety-nine', 'Ninety', 'None of above', 'B', NULL),
(123, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '78', NULL, NULL, 'Eight', 'Seven', 'Seventy-eight', 'None of above', 'C', NULL),
(124, 13, 'Physics 1', 'MCQ', 'Certificate', 5, '36', NULL, NULL, 'Three', 'Thirty-six', 'Sixty-three', 'None of above', 'B', NULL),
(125, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Eighty-four', NULL, NULL, '48', '84', '8', '4', 'B', NULL),
(126, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Twenty-five', NULL, NULL, '52', '2', '5', '25', 'D', NULL),
(127, 13, 'Physics 1', 'MCQ', 'Certificate', 5, 'Eighty', NULL, NULL, '8', '10', '88', '80', 'D', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `E_No` int(11) NOT NULL,
  `U_ID` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `E_Result` int(11) DEFAULT NULL,
  `Chapter` varchar(50) DEFAULT NULL,
  `StartTime` timestamp NULL DEFAULT NULL,
  `EndTime` timestamp NULL DEFAULT NULL,
  `Difficulty` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`E_No`, `U_ID`, `Score`, `E_Result`, `Chapter`, `StartTime`, `EndTime`, `Difficulty`) VALUES
(1, 6, 14, 70, 'Chapter 3', '2019-02-13 17:38:34', '2019-02-13 17:49:23', 'Exam'),
(2, 6, 17, 85, 'Chapter 3', '2019-02-13 17:56:56', '2019-02-13 17:58:13', 'Lab'),
(3, 6, 18, 90, 'Chapter 3', '2019-02-13 17:59:04', '2019-02-13 18:00:00', 'Certificate'),
(15, 14, 18, 90, 'Physics 1', '2019-02-16 14:50:04', '2019-02-16 14:50:56', 'Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `C_ID` int(10) NOT NULL,
  `S_ID` int(10) NOT NULL,
  `S_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`C_ID`, `S_ID`, `S_Name`) VALUES
(2, 15, 'James Frank'),
(2, 17, 'Amir Azman'),
(2, 6, 'John'),
(4, 19, 'Emily Amelia'),
(9, 14, 'Peter Parker');

-- --------------------------------------------------------

--
-- Table structure for table `student_question`
--

CREATE TABLE `student_question` (
  `S_Q_No` int(11) NOT NULL,
  `E_No` int(11) DEFAULT NULL,
  `Q_No` int(11) DEFAULT NULL,
  `S_QAnswer` varchar(255) DEFAULT NULL,
  `TrueAnswer` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(60, 3, 100, 'C', 'C'),
(61, 12, 110, 'D', 'D'),
(62, 12, 127, 'D', 'D'),
(63, 12, 118, 'D', 'A'),
(64, 12, 117, 'C', 'C'),
(65, 12, 112, 'B', 'B'),
(66, 12, 105, 'A', 'A'),
(67, 12, 125, 'B', 'B'),
(68, 12, 126, 'D', 'D'),
(69, 12, 107, 'A', 'A'),
(70, 12, 116, 'A', 'A'),
(71, 12, 124, 'B', 'B'),
(72, 12, 120, 'A', 'A'),
(73, 12, 113, 'C', 'C'),
(74, 12, 121, 'B', 'A'),
(75, 12, 109, 'B', 'D'),
(76, 12, 114, 'B', 'A'),
(77, 12, 111, 'B', 'B'),
(78, 12, 106, 'A', 'A'),
(79, 12, 119, 'C', 'C'),
(80, 12, 115, 'A', 'A'),
(81, 13, 125, 'C', 'B'),
(82, 13, 118, 'D', 'A'),
(83, 13, 121, 'A', 'A'),
(84, 13, 123, 'C', 'C'),
(85, 13, 109, 'D', 'D'),
(86, 13, 106, 'A', 'A'),
(87, 13, 110, 'D', 'D'),
(88, 13, 116, 'A', 'A'),
(89, 13, 120, 'A', 'A'),
(90, 13, 112, 'B', 'B'),
(91, 13, 117, 'C', 'C'),
(92, 13, 119, 'C', 'C'),
(93, 13, 122, 'B', 'B'),
(94, 13, 105, 'B', 'A'),
(95, 13, 126, 'D', 'D'),
(96, 13, 113, 'C', 'C'),
(97, 13, 114, 'A', 'A'),
(98, 13, 124, 'B', 'B'),
(99, 13, 127, 'D', 'D'),
(100, 13, 111, 'B', 'B'),
(101, 14, 116, 'A', 'A'),
(102, 14, 120, 'B', 'A'),
(103, 14, 106, 'A', 'A'),
(104, 14, 123, 'C', 'C'),
(105, 14, 110, 'D', 'D'),
(106, 14, 113, 'C', 'C'),
(107, 14, 122, 'B', 'B'),
(108, 14, 109, 'D', 'D'),
(109, 14, 115, 'A', 'A'),
(110, 14, 125, 'B', 'B'),
(111, 14, 114, 'A', 'A'),
(112, 14, 124, 'B', 'B'),
(113, 14, 119, 'C', 'C'),
(114, 14, 105, 'A', 'A'),
(115, 14, 107, 'A', 'A'),
(116, 14, 118, 'A', 'A'),
(117, 14, 127, 'D', 'D'),
(118, 14, 126, 'D', 'D'),
(119, 14, 111, 'B', 'B'),
(120, 14, 121, 'A', 'A'),
(121, 15, 123, 'C', 'C'),
(122, 15, 106, 'A', 'A'),
(123, 15, 109, 'D', 'D'),
(124, 15, 111, 'D', 'B'),
(125, 15, 117, 'C', 'C'),
(126, 15, 121, 'B', 'A'),
(127, 15, 110, 'D', 'D'),
(128, 15, 126, 'D', 'D'),
(129, 15, 116, 'A', 'A'),
(130, 15, 122, 'B', 'B'),
(131, 15, 118, 'A', 'A'),
(132, 15, 124, 'B', 'B'),
(133, 15, 107, 'A', 'A'),
(134, 15, 125, 'B', 'B'),
(135, 15, 120, 'A', 'A'),
(136, 15, 127, 'D', 'D'),
(137, 15, 114, 'A', 'A'),
(138, 15, 113, 'C', 'C'),
(139, 15, 112, 'B', 'B'),
(140, 15, 105, 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `T_No` int(11) NOT NULL,
  `Difficulty` varchar(255) DEFAULT NULL,
  `Chapter` varchar(255) DEFAULT NULL,
  `Q_No` int(11) DEFAULT NULL,
  `QuestionContent` text,
  `A` varchar(255) DEFAULT NULL,
  `B` varchar(255) DEFAULT NULL,
  `C` varchar(255) DEFAULT NULL,
  `D` varchar(255) DEFAULT NULL,
  `TrueAnswer` varchar(255) DEFAULT NULL,
  `UserAnswer` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `Name`, `Email`, `Password`, `Contact_No`, `Role`, `Status`) VALUES
(7, 'Anna Marie', 'abc123@hotmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'teacher', 0),
(6, 'John', 'john123@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student', 1),
(13, 'Caity Lotz', 'dfe@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'corporate', 0),
(14, 'Peter Parker', 'spiderman@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student', 0),
(15, 'James Frank', 'james@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student', 0),
(16, 'Dr. Steven Lim', 'jkl1@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'teacher', 0),
(17, 'Amir Azman', 'amir@gmail.com', '202cb962ac59075b964b07152d234b70', 12345678, 'student', 0),
(18, 'Amy Chamberlain', 'amy@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student', 0),
(19, 'Emily Amelia', 'emily@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student', 0),
(20, 'Hank Pym', 'hank@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student', 0),
(21, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 123, 'admin', 0),
(22, 'moderator', 'moderator', '0408f3c997f309c03b08bf3a4bc7b730', 123456, 'moderator', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`Cert_No`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`Chap_ID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`C_No`);

--
-- Indexes for table `examq_request`
--
ALTER TABLE `examq_request`
  ADD PRIMARY KEY (`R_No`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Q_No`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`E_No`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`C_ID`,`S_ID`);

--
-- Indexes for table `student_question`
--
ALTER TABLE `student_question`
  ADD PRIMARY KEY (`S_Q_No`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`T_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `Cert_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `Chap_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `C_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `examq_request`
--
ALTER TABLE `examq_request`
  MODIFY `R_No` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Q_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `E_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_question`
--
ALTER TABLE `student_question`
  MODIFY `S_Q_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `T_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
