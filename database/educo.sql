-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2019 at 04:04 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`C_No`, `T_ID`, `C_Name`) VALUES
(2, 7, 'Class A'),
(3, 7, 'Class B'),
(4, 7, 'Class C');

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
-- Table structure for table `exam_exercise`
--

DROP TABLE IF EXISTS `exam_exercise`;
CREATE TABLE IF NOT EXISTS `exam_exercise` (
  `E_No` int(10) NOT NULL AUTO_INCREMENT,
  `S_ID` int(10) NOT NULL,
  `E_Result` int(11) NOT NULL,
  PRIMARY KEY (`E_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `Q_No` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(255) NOT NULL,
  `Chapter` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Difficulty` varchar(255) NOT NULL,
  `QuestionContent` text NOT NULL,
  `Image` mediumblob NOT NULL,
  `Answer1` varchar(255) NOT NULL,
  `Answer2` varchar(255) NOT NULL,
  `Answer3` varchar(255) NOT NULL,
  `Answer4` varchar(255) NOT NULL,
  `FinalAnswer` varchar(255) NOT NULL,
  PRIMARY KEY (`Q_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_question`
--

DROP TABLE IF EXISTS `student_question`;
CREATE TABLE IF NOT EXISTS `student_question` (
  `S_Q_No` int(10) NOT NULL AUTO_INCREMENT,
  `E_No` int(10) NOT NULL,
  `Q_No` int(10) NOT NULL,
  `S_QAnswer` text NOT NULL,
  `S_Q_Result` varchar(255) NOT NULL,
  PRIMARY KEY (`S_Q_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `Name`, `Email`, `Password`, `Contact_No`, `Role`) VALUES
(7, 'abc', 'abc123@hotmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'teacher'),
(6, 'John', 'john123@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'student'),
(13, 'def', 'def@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'corporate');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
