-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2023 at 04:32 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`) VALUES
(1, 'shubham', 'shubham09');

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

DROP TABLE IF EXISTS `donor_details`;
CREATE TABLE IF NOT EXISTS `donor_details` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Event_Id` int NOT NULL,
  `Donor_Name` text NOT NULL,
  `Donor_Gender` text NOT NULL,
  `Donor_Blood_Group` varchar(5) NOT NULL,
  `Donor_Email` varchar(40) NOT NULL,
  `Donor_ContactNo` varchar(11) NOT NULL,
  `Timeslot_Booked` varchar(20) NOT NULL,
  `Status` text NOT NULL DEFAULT 'A',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`ID`, `Event_Id`, `Donor_Name`, `Donor_Gender`, `Donor_Blood_Group`, `Donor_Email`, `Donor_ContactNo`, `Timeslot_Booked`, `Status`) VALUES
(209, 141, 'donor', 'Male', 'A+', 'donor@email.com', '1234567890', '2 AM to 4 PM', 'A'),
(210, 141, 'donor2', 'Male', 'A+', 'donor@email.com', '1234567890', '10 AM to 2 PM', 'A'),
(211, 141, 'donor3', 'Female', 'O+', 'donor@email.com', '1234567890', '2 AM to 4 PM', 'A'),
(212, 141, 'donor3', 'Female', 'O+', 'donor@email.com', '1234567890', '2 AM to 4 PM', 'A'),
(213, 141, 'donor4', 'Female', 'B+', 'donor@email.com', '1234567890', '4 PM to 6 PM', 'A'),
(214, 141, 'donor5', 'Female', 'B+', 'donor@email.com', '1234567890', '4 PM to 6 PM', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Organizer_Name` varchar(40) NOT NULL,
  `Organizer_cn` varchar(10) NOT NULL,
  `Organizer_em` varchar(20) NOT NULL,
  `Organizer_password` varchar(20) NOT NULL,
  `Camp_Name` varchar(70) NOT NULL,
  `Camp_Date` varchar(30) NOT NULL,
  `Camp_Time` varchar(20) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `First_Timeslot` varchar(40) NOT NULL,
  `First_Timeslot_No` int NOT NULL,
  `Second_Timeslot` varchar(40) NOT NULL,
  `Second_Timeslot_No` int NOT NULL,
  `Third_Timeslot` varchar(40) NOT NULL,
  `Third_Timeslot_No` int NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'P',
  `Added_by` varchar(40) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Organizer_Name`, `Organizer_cn`, `Organizer_em`, `Organizer_password`, `Camp_Name`, `Camp_Date`, `Camp_Time`, `Venue`, `First_Timeslot`, `First_Timeslot_No`, `Second_Timeslot`, `Second_Timeslot_No`, `Third_Timeslot`, `Third_Timeslot_No`, `Status`, `Added_by`, `description`) VALUES
(141, 'organizer', '8691950721', 'organizer@callify.ai', 'organizer', 'testCamp', '2023-01-29', '10 AM to 6 PM', 'Vileparle west', '10 AM to 2 PM', 39, '2 AM to 4 PM', 39, '4 PM to 6 PM', 39, 'A', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Event_Id` int NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `Event_Id`, `message`) VALUES
(73, 141, 'new announcement');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
