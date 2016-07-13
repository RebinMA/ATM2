-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2016 at 08:33 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ATM`
--
CREATE DATABASE IF NOT EXISTS `ATM` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ATM`;

-- --------------------------------------------------------

--
-- Table structure for table `Trans`
--

DROP TABLE IF EXISTS `Trans`;
CREATE TABLE IF NOT EXISTS `Trans` (
  `ID` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Amount` decimal(20,0) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Trans`
--

INSERT INTO `Trans` (`ID`, `Name`, `Type`, `Amount`, `Date`) VALUES
(1, 'aso', 'deposit', '22', ''),
(1, 'aso osman', 'deposit', '20', ''),
(1, 'aso osman', 'Deposit', '900', ''),
(1, 'aso osman', 'Withdrawal', '20', ''),
(2, 'star dawd', 'Deposit', '20', ''),
(2, 'star dawd', 'Withdrawal', '11', '');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
CREATE TABLE IF NOT EXISTS `Users` (
`UID` int(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` int(10) NOT NULL,
  `Balance` decimal(10,0) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `Username`, `Password`, `Balance`, `FName`, `LName`, `Phone`, `Email`, `Date`) VALUES
(4, 'aso', 123, '111', 'aso', 'osman', '21312', 'aso.com', ''),
(5, 'rebin', 123, '11', 'rebin', 'rebin', '23123', 'rebin.com', '06/07/2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
 ADD PRIMARY KEY (`UID`), ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
MODIFY `UID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
