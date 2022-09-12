-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2022 at 10:35 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitali`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` varchar(40) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_dob` date DEFAULT NULL,
  `insurance_scheme` varchar(30) NOT NULL,
  `policy_number` varchar(30) NOT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `patient_name`, `patient_dob`, `insurance_scheme`, `policy_number`, `reg_date`) VALUES
('patient_631ef5028fb18', 'Evans Muendo', NULL, '451123IL', '0797445750', '2022-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('evans', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

DROP TABLE IF EXISTS `vitals`;
CREATE TABLE IF NOT EXISTS `vitals` (
  `tnumber` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(15) NOT NULL,
  `temperature` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `blood_presssure` varchar(10) NOT NULL,
  `Doctor` varchar(30) NOT NULL,
  PRIMARY KEY (`tnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
