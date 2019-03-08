-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 01:59 AM
-- Server version: 10.1.36-MariaDB
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
-- Database: `c7190063`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(8) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) VALUES
(1, ' Jenny', 'Brown', 'j.brown@leedsbeckett.ac.uk', 'brown01', ' F', 23),
(2, ' Ray', 'Green', 'r.green@leedsbeckett.ac.uk', 'green01', ' M', 19),
(3, 'Arjun', 'Patel', 'a.patel@leedsbeckett.ac.uk', 'patel01', 'M', 20),
(4, 'Steve', 'Rich', 's.rich@leedsbeckett.ac.uk', 'rich01', 'M', 27),
(5, 'Amy', 'Park', 'a.park@leedsbeckett.ac.uk', 'park01', 'F', 20),
(6, 'Rehana', 'Hashmi', 'r.hashmi@leedsbeckett.ac.uk', 'hashmi01', 'F', 22);

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

CREATE TABLE `customer2` (
  `CustomerID` int(8) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) VALUES
(1, 'pramit', 'marattha', 'P.Marattha2949@leedsbeckett.ac.uk', 'pramit01', 'M', 20),
(2, 'pramit', 'marattha', 'P.Marattha2949@leedsbeckett.ac.uk', 'pramit01', 'M', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `customer2`
--
ALTER TABLE `customer2`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer2`
--
ALTER TABLE `customer2`
  MODIFY `CustomerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
