-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 07:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `Bloodgroup` text NOT NULL,
  `Unit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodstock`
--

INSERT INTO `bloodstock` (`Bloodgroup`, `Unit`) VALUES
('', 0),
('', 0);

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `Id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Organisation` varchar(50) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`Id`, `Name`, `Organisation`, `State`, `City`, `Details`) VALUES
(0, '', '', '', '', ''),
(1, 'Life Saver', 'Rotary Management', 'Karnataka', 'Bangalore', 'Blood Donation Camp');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobileno` int(15) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Email`, `Mobileno`, `City`, `Details`) VALUES
('Shreeprada', 'shripradamt@gmail.com', 1234567890, 'Bangalore', 'I need O+ blood immediately..');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(5) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Bloodgroup` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobileno` int(15) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirmpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Name`, `Email`, `DOB`, `Age`, `Gender`, `Bloodgroup`, `Address`, `City`, `Mobileno`, `Username`, `Password`, `Confirmpassword`) VALUES
('Manju', 'manju@gmail.com', '1996-05-01', 22, 'Male', 'O+', 'Malleswaram', 'Bangalore', 2134536773, 'Manju123', 'Manju@123', 'Manju@123'),
('Shreeprada', 'shripradamt@gmail.com', '2018-05-01', 0, '', 'AB+', 'Sheshadripuram', 'Bangalore', 0, 'shripradamt@gmail.com', 'shree@123', 'shree@123'),
('Vidya', 'vidyabvidyab@gmail.com', '2018-05-02', 22, 'Female', 'AB-', 'Hebbala', 'Bangalore', 2134567891, 'Vidya Badiger', 'vidya2', 'vidya2');

-- --------------------------------------------------------

--
-- Table structure for table `reciever`
--

CREATE TABLE `reciever` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Requireddate` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Bloodgroup` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Mobileno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciever`
--

INSERT INTO `reciever` (`Name`, `Email`, `Requireddate`, `Gender`, `Bloodgroup`, `Address`, `City`, `Mobileno`) VALUES
('Deepak', 'deep@gmail.com', '2018-05-27', 'Male', 'A+', 'Hosanagara', 'Shivamogga', 2021435674),
('Girija', 'giri@gmail.com', '2018-05-01', 'Female', 'B+', 'Shivamogga', 'Shivamogga', 2147483647),
('Shilpa', 'shilpa@gmail.com', '2018-05-28', 'Female', 'O+', 'Sagara', 'Shivamogga', 1273825354),
('Shree', 'shree@gmail.com', '2018-05-31', 'Male', 'AB-', 'Hosanagara', 'Shivamogga', 2012345623),
('Yashoda', 'yashu@gmail.com', '2018-05-01', 'Female', 'O+', 'Malleswaram', 'Bangalore', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `reciever`
--
ALTER TABLE `reciever`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
