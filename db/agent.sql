-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 03:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agent`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(9) NOT NULL,
  `employeeName` varchar(40) NOT NULL,
  `employeeId` varchar(40) NOT NULL,
  `contactNumber` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `employeeName`, `employeeId`, `contactNumber`, `email`) VALUES
(1, 'Mrinmoi Hossain Mokit', 'AUST150807', '01627666912', 'mokit.hossain2014@gmail.com'),
(2, 'Md. Sabbir Zaman Chowdhury', 'NSU212201', '01843748121', 'zaman.sabbir@gmail.com'),
(3, 'Mrinmoi Mokit', 'AUST150807', '01637234621', 'mokit_hossain@ymail.com'),
(4, 'Rubel Hossain', 'NSU212201', '01527666912', 'mokit.hossain2014@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userName`, `pass`) VALUES
(1, 'mrinmoi', 'mrinmoi123'),
(2, 'mokit', 'mokit123'),
(3, 'mokit', 'mokit'),
(4, 'sujan', 'sujan123'),
(5, 'hasnat', 'hasnath');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `Id` int(9) NOT NULL,
  `CompanyName` varchar(40) NOT NULL,
  `LicenceNo` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `FatherName` varchar(40) NOT NULL,
  `BirthDate` varchar(40) NOT NULL,
  `ResAddress` varchar(255) NOT NULL,
  `Village` varchar(255) NOT NULL,
  `PostOffice` varchar(255) NOT NULL,
  `Station` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `Nationality` varchar(40) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Bank` varchar(100) NOT NULL,
  `BankBranch` varchar(100) NOT NULL,
  `AccountNo` varchar(40) NOT NULL,
  `TodayDate` varchar(40) NOT NULL,
  `ExpDate` varchar(40) NOT NULL,
  `Photo` varchar(40) NOT NULL,
  `DeclareCon` varchar(40) NOT NULL,
  `LawDeclare` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`Id`, `CompanyName`, `LicenceNo`, `Name`, `FatherName`, `BirthDate`, `ResAddress`, `Village`, `PostOffice`, `Station`, `District`, `Education`, `Nationality`, `Religion`, `Bank`, `BankBranch`, `AccountNo`, `TodayDate`, `ExpDate`, `Photo`, `DeclareCon`, `LawDeclare`) VALUES
(1, 'Runolfsson, Sipes and Shields', 'SJ12523', 'Mr. Durward Deckow IV', 'Aliya Purdy', '17-06-2001', '21324 Fannie Harbor Apt. 294South Lydafurt, LA 26044', 'Norris Fords', '773', 'Tillman Harbor', 'South Malindashire', 'Group', 'Bangladeshi', 'Islam', 'Leon Schoen', '925 Erin PineParisianburgh, NJ 96318-6820', '9723322319', '03/12/2017', '03/12/2017', 'yes', 'yes', 'yes'),
(2, 'Pollich-Pollich', 'WF8491', 'Polly Ondricka', 'Marlin Mraz', '26-11-1978', '6410 Rose JunctionsLake Tomasa, VT 23204-3740', 'Tressie Dam', '2163', 'Flatley Keys', 'East Wilburnview', 'PLC', 'Bangladeshi', 'Islam', 'Allison Russel', '9779 Miller PineSouth Danial, ND 40147', '705073219', '03/05/2017', '06/16/2017', 'yes', 'yes', 'yes'),
(3, 'Pollich-Pollich', 'WF8491', 'Polly Ondricka', 'Marlin Mraz', '26-11-1978', '6410 Rose JunctionsLake Tomasa, VT 23204-3740', 'Tressie Dam', '2163', 'Flatley Keys', 'East Wilburnview', 'PLC', 'Bangladeshi', 'Islam', 'Allison Russel', '9779 Miller PineSouth Danial, ND 40147', '705073219', '03/05/2017', '06/20/2017', 'yes', 'yes', 'yes'),
(4, 'Hermann-Ortiz', 'MH35231', 'Catalina Stoltenberg IV', 'Julia Koepp DDS', '25-02-2002', '73938 Odessa Fields Suite 066New Gastonmouth, KS 85550-9951', 'Buddy Turnpike', '745', 'Kerluke Forest', 'East Shaunberg', 'LLC', 'Bangladeshi', 'Islam', 'Micah Schuppe', '8849 Collins Drive Apt. 606East Aglae, UT 93673-2233', '669299216874', '03/01/2017', '03/26/2017', 'yes', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
