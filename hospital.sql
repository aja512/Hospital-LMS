-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 08:10 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `apoid` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `doctors` varchar(1000) NOT NULL,
  `appointmentdate` date NOT NULL,
  `dob` date NOT NULL,
  `departments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apoid`, `name`, `email`, `doctors`, `appointmentdate`, `dob`, `departments`) VALUES
(1, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', 'Marc Perceival', '2019-11-13', '1999-12-05', 'Pulmonology'),
(4, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', 'Basil Andrew', '2019-12-12', '1967-01-15', 'Neurology'),
(5, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', 'Basil Andrew', '2019-12-12', '1967-01-15', 'Neurology'),
(6, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', 'Basil Andrew', '2019-12-05', '1999-12-05', 'Gastrology'),
(7, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', 'Giles Franklin', '2019-12-12', '1999-12-05', ''),
(8, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', 'Giles Franklin', '2019-12-12', '1999-12-05', ''),
(9, 'Komal Kadam', 'komal.kadam515@gmail.com', 'Basil Andrew', '2019-10-26', '1999-09-05', 'Cardiology'),
(10, 'Nilam Kadam', 'nilamkadam2027@gmail.com', 'Marc Parcival', '2019-10-26', '2000-02-27', 'Gynecology');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inqid` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inqid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Amanda', 'ajandrade25@gmail.com', '09029544224', 'Dummy', 'Idiot'),
(2, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', '09029544224', 'hello', 'hi'),
(3, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', '09029544224', 'hello', 'hi'),
(4, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', '09029544224', 'jjj', 'gregenhzs'),
(5, 'Amanda Judy Andrade', 'ajandrade25@gmail.com', '09029544224', 'jjj', 'gregenhzs'),
(6, 'Nilam Kadam', 'nilamkadam2027@gmail.com', '8828173300', 'Poor Commuting ', 'Good Service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apoid`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inqid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `apoid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inqid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
