-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2018 at 06:46 PM
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
-- Database: `rtwqms`
--

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE IF NOT EXISTS `positions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Position` varchar(100) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`ID`, `Position`, `Latitude`, `Longitude`) VALUES
(1, 'Peradeniya', '7.2699', '80.5938'),
(2, 'Kandy', '7.2906', '80.6337'),
(3, 'Colombo', '6.9271', '79.8612'),
(4, 'Nuwara Eliya', '6.9497', '80.7891');

-- --------------------------------------------------------

--
-- Table structure for table `readings`
--

DROP TABLE IF EXISTS `readings`;
CREATE TABLE IF NOT EXISTS `readings` (
  `Temperature` varchar(50) NOT NULL,
  `Turbidity` varchar(50) NOT NULL,
  `pH` varchar(50) NOT NULL,
  `Conductivity` varchar(50) NOT NULL,
  `PositionID` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readings`
--

INSERT INTO `readings` (`Temperature`, `Turbidity`, `pH`, `Conductivity`, `PositionID`, `Date`, `Time`) VALUES
('29', '1.2', '7', '5', '1', '2015-01-25', '00:01:00'),
('30', '1', '6', '6', '1', '2015-01-25', '00:15:00'),
('15', '1.5', '5', '4', '1', '2015-01-25', '00:59:00'),
('23', '2.1', '5', '3', '1', '2015-01-25', '01:22:00'),
('25', '1.3', '6.5', '4.65', '1', '2018-05-18', '16:57:00'),
('23', '1.2', '6.55', '4.65', '1', '2018-05-18', '17:10:00'),
('24', '1.4', '7', '4', '1', '2018-05-18', '18:01:00'),
('24', '1.4', '7', '4', '1', '2018-05-20', '18:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Firtsname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Password` varchar(50) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Firtsname`, `Lastname`, `Email`, `UserID`, `Password`, `ContactNumber`) VALUES
('Erantha', 'Welikala', 'eranthawelikala@gmail.com', 1, '81dc9bdb52d04dc20036dbd8313ed055', '0775778979');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
