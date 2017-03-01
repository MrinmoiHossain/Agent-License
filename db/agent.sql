-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 09:57 PM
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
(4, 'sujan', 'sujan123');

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
  `Date` varchar(40) NOT NULL,
  `Photo` varchar(40) NOT NULL,
  `DeclareCon` varchar(40) NOT NULL,
  `LawDeclare` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`Id`, `CompanyName`, `LicenceNo`, `Name`, `FatherName`, `BirthDate`, `ResAddress`, `Village`, `PostOffice`, `Station`, `District`, `Education`, `Nationality`, `Religion`, `Bank`, `BankBranch`, `AccountNo`, `Date`, `Photo`, `DeclareCon`, `LawDeclare`) VALUES
(1, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '1993-01-01', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '2016-08-22', 'yes', 'yes', 'yes'),
(2, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '24/01/1993', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '22/08/2016', 'yes', 'yes', 'yes'),
(3, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '24/01/1993', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '22/08/2016', 'yes', 'yes', 'yes'),
(4, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '24/01/1993', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '22/08/2016', 'yes', 'yes', 'yes'),
(5, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '24/01/1993', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '22/08/2016', 'yes', 'yes', 'yes'),
(6, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '24/01/1993', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '22/08/2016', 'yes', 'yes', 'yes'),
(8, 'Dhaka Insurance', 'XM2017/B', 'Rubel Hossain', 'Md. Shafiquzzman Chowdhury', '1993-01-01', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '22/08/2016', 'on', 'on', 'on'),
(9, 'Dhaka', 'LM234', 'Mrinmoi Hossain Mokit', 'Md. Shafiquzzman Chowdhury', '02/15/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Islam', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/13/2017', 'yes', 'yes', 'yes'),
(10, 'Dhaka Insurance', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Hindu', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/06/2017', 'yes', 'yes', 'yes'),
(11, 'Dhaka Insurance Ltd', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes'),
(12, 'Dhaka Insurance Ltd', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes'),
(13, 'Dhaka Insurance Ltd', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes'),
(14, 'Dhaka Insurance Ltd', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes'),
(15, 'Dhaka Insurance Ltd', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes'),
(16, 'Dhaka Insurance Ltd', 'XM2017/B', 'Md. Sabbir Zaman Chowdhury', 'Md. Shafiquzzman Chowdhury', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes'),
(17, 'Dhaka Insurance Ltd', 'LN432', 'Mrinmoi Hossain Mokit', 'Md. Sumon Ahmed', '02/13/2017', 'House-528, Road-12, Baitul Aman Housing, Adabor, Dhaka', 'Sundarpur', 'Sundarpur', 'Moheshpur', 'Dhaka', 'B.Sc in Physics', 'Bangladeshi', 'Christian', 'Shahjalal Islami Bank Ltd.', 'Dhanmondi', '68672', '02/05/2017', 'yes', 'yes', 'yes');

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
