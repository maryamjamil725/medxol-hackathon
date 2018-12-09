-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 07:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medxol`
--
CREATE DATABASE IF NOT EXISTS `medxol` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medxol`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Email`, `Password`) VALUES
(1, 'info@medxol.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ServiceID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(20) DEFAULT NULL,
  `Time` varchar(20) DEFAULT NULL,
  `Service` varchar(40) DEFAULT NULL,
  `SubCategory` varchar(50) NOT NULL,
  `Charges` varchar(20) NOT NULL,
  `UEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`ServiceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `Date`, `Time`, `Service`, `SubCategory`, `Charges`, `UEmail`) VALUES
(1, '12/12/2018', '00:13', 'HouseKeeping', '', '', ''),
(2, '12/11/2018', '11:11', 'Companionship', '', '', ''),
(3, '12/11/2018', '11:11', 'Personal Care & Medical L', '', '', 'mjam691@gmail.com'),
(4, '12/04/2018', '11:11', 'HouseKeeping', '', '', ''),
(5, '12/04/2018', '11:11', 'Meals & Transportation', '', '', 'mjam691@gmail.com'),
(6, '12/03/2018', '00:11', 'Personal Care & Medical Lab', 'Physyo Theraphy', '', 'mjam691@gmail.com'),
(7, '12/13/2018', '11:11', 'Personal Care & Medical Lab', 'Physyo Theraphy', '', 'mjam691@gmail.com'),
(8, '12/18/2018', '11:11', 'HouseKeeping', '', '', 'mjam691@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `CNIC` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Age` int(10) NOT NULL,
  `Number` varchar(25) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Landmark` varchar(25) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `CNIC`, `Name`, `Email`, `Password`, `Age`, `Number`, `Gender`, `Address`, `City`, `Landmark`) VALUES
(3, '37405-0422983-0', 'Maryam Jamil', 'mjam691@gmail.com', '1234', 27, '3325568674', 'Female', 'House # 10, Opposite Peshawar Road', 'Rawalpindi', 'Chour Chowk'),
(4, '37415-0422983-0', 'Hasan', 'Hasan@medxol.com', '1234', 27, '3325568671', 'Male', 'House # 10, Opposite Peshawar Road', 'Rawalpindi', 'Saddar'),
(5, '37105-0422983-0', 'Ali Iqbal Bhatti', 'iqbal@medxol.com', '12345', 23, '3325568623', 'Male', 'House # 10, Opposite Peshawar Road', 'Rawalpindi', 'Saddar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
