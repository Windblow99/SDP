-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2019 at 05:46 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `C_No` int(10) NOT NULL AUTO_INCREMENT,
  `T_ID` int(10) NOT NULL,
  PRIMARY KEY (`C_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corporation`
--

DROP TABLE IF EXISTS `corporation`;
CREATE TABLE IF NOT EXISTS `corporation` (
  `Corp_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Corp_ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporation`
--

INSERT INTO `corporation` (`Corp_ID`, `Name`, `Email`, `Contact_No`, `Password`) VALUES
(1, 'MAN', 'john123@gmail.com', 123456789, '827ccb0eea8a706c4c34a16891f84e7b');

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
-- Table structure for table `moderator`
--

DROP TABLE IF EXISTS `moderator`;
CREATE TABLE IF NOT EXISTS `moderator` (
  `M_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `IC` int(12) NOT NULL,
  `DoB` date NOT NULL,
  `Contact_No` int(12) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`M_ID`),
  UNIQUE KEY `IC` (`IC`),
  UNIQUE KEY `Email` (`Email`)
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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `S_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `IC` varchar(12) NOT NULL,
  `DoB` date NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `C_No` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`S_ID`),
  UNIQUE KEY `IC` (`IC`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_ID`, `Name`, `IC`, `DoB`, `Contact_No`, `Email`, `Password`, `C_No`) VALUES
(8, 'John', '010101101234', '2019-01-20', '0123456789', 'john123@gmail.com', 'e99a18c428cb38d5f260853678922e03', NULL);

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
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `T_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `IC` varchar(12) NOT NULL,
  `DoB` date NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`T_ID`),
  UNIQUE KEY `IC` (`IC`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_ID`, `Name`, `IC`, `DoB`, `Contact_No`, `Email`, `Password`) VALUES
(2, 'John', '010101101234', '2019-01-09', 123456789, 'john123@hotmail.com', '81b073de9370ea873f548e31b8adc081');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
