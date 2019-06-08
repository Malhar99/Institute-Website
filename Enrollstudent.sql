-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2019 at 06:51 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PGT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Enrollstudent`
--

CREATE TABLE `Enrollstudent` (
  `ID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `Subject` varchar(10) NOT NULL,
  `Photo_location` varchar(250) NOT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Comments` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Enrollstudent`
--

INSERT INTO `Enrollstudent` (`ID`, `Name`, `Email`, `Phone_no`, `Subject`, `Photo_location`, `Address`, `Comments`) VALUES
(1, 'Malhar', '', '9409567225', 'B.B.A', './uploads/B.B.A Screenshot from 2019-06-03 11-32-15.png.png', NULL, NULL),
(2, 'Malhar', '', '9409567225', 'B.Com', './uploads/B.Com Screenshot from 2019-05-24 13-11-34.png.png', NULL, NULL),
(3, 'malhar', '', '9409567225', 'M.Com', './uploads/M.Com PGT.png.png', NULL, NULL),
(5, 'malhar', '', '9409567225', 'Bank Clerk', './uploads/Bank Clerk Screenshot from 2019-05-20 19-12-55.png.png', NULL, NULL),
(7, 'Malhar', '', '9409567255', 'S.S.C', './uploads/S.S.C Screenshot from 2019-06-03 11-32-15.png.png', NULL, NULL),
(8, 'Malhar', '', '9409567225', 'R.R.B.E', './uploads/R.R.B.E Screenshot from 2019-05-24 13-11-34.png.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Enrollstudent`
--
ALTER TABLE `Enrollstudent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Enrollstudent`
--
ALTER TABLE `Enrollstudent`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
