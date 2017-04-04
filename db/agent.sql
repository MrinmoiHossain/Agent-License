-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 08:32 PM
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
  `ExpDate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`Id`, `CompanyName`, `LicenceNo`, `Name`, `FatherName`, `BirthDate`, `ResAddress`, `Village`, `PostOffice`, `Station`, `District`, `Education`, `Nationality`, `Religion`, `Bank`, `BankBranch`, `AccountNo`, `TodayDate`, `ExpDate`) VALUES
(1, 'Lowe Ltd', 'BJ4735', 'Renee Jacobi', 'Shemar Robel', '23-10-2015', '4060 O\'Hara Manors Apt. 175Leoneshire, IL 26594-9141', 'VonRueden Lake', '518', 'Jessyca Parkways', 'Lake Cristian', 'PLC', 'Bangladeshi', 'Islam', 'Ms. Summer Cummerata MD', '452 Jacobi Field Apt. 768Okunevaport, AZ 31542-9450', '85201458083683', '04/17/2017', '04/16/2017'),
(2, 'Little Ltd', 'BN8250', 'Madisen Leuschke PhD', 'Thurman Padberg', '10-01-1978', '34700 Cormier NeckChaseton, SC 87185', 'O\'Conner Springs', '769', 'Jordon Views', 'Kaylahmouth', 'Ltd', 'Bangladeshi', 'Islam', 'Erick Jones', '3895 Corwin Expressway Apt. 823East Schuyler, KY 03887-7300', '04866962', '04/17/2017', '04/16/2017'),
(3, 'Ward-Renner', 'SI756', 'Miss Phyllis Tillman', 'Prof. Alphonso Gutkowski II', '17-02-2005', '239 White River Apt. 100New Austyn, MS 80333-2837', 'Audra Green', '46928', 'Stracke Mountain', 'Lake Nathanaelbury', 'Group', 'Bangladeshi', 'Islam', 'Dr. Camden Ziemann II', '725 Izaiah Roads Apt. 461Mortonborough, AR 94893-5502', '25302940223', '04/17/2017', '04/23/2017'),
(4, 'Sanford, Mertz and Rice', 'MQ3079', 'Keith Cormier', 'Magnolia Crist', '02-04-1980', '23076 Bayer PointsPort Adahton, IN 36413-2753', 'Mario Club', '2929', 'Carolina Curve', 'Donnafurt', 'Inc', 'Bangladeshi', 'Islam', 'Haven Rempel', '2992 Baumbach Street Suite 223Hansenmouth, ND 03067-2812', '0847462481457', '04/24/2017', '04/02/2017'),
(5, 'Lebsack, Sipes and Kassulke', 'PE17931', 'Jessica Gottlieb', 'Arlie Huel', '05-09-2015', '7794 Dickinson Summit Apt. 048South Maximillianview, NE 80810-3100', 'White Light', '8077', 'Gleason Vista', 'Keeblerberg', 'Ltd', 'Bangladeshi', 'Islam', 'Juanita Blick', '88829 Rossie Circle Apt. 934Ludwigport, DE 46161-3165', '955164425', '04/01/2017', '04/01/2017'),
(6, 'Rohan Inc', 'CD77566', 'Dr. Fredy Kuhn Sr.', 'Mauricio Wuckert', '29-07-1986', '522 Bradtke Stream Apt. 523McGlynnberg, WV 97967', 'Osinski Streets', '8572', 'Joesph Rest', 'East Gerdaville', 'Inc', 'Bangladeshi', 'Islam', 'Ms. Myrna Kunde', '60402 Morar Brooks Apt. 530Jaynemouth, VT 58828-3961', '8739623130', '04/30/2017', '04/13/2017'),
(7, 'Schneider, O\'Reilly and Senger', 'MV1932', 'Carol Paucek', 'Judd Rolfson', '17-12-1974', '267 Dicki Gateway Suite 974Marksport, MN 45622', 'Kayleigh Radial', '64668', 'Brisa Mountain', 'Shaunport', 'Inc', 'Bangladeshi', 'Islam', 'Mr. Abel Walker', '87900 Henri Canyon Suite 390East Darylchester, FL 21816', '189282645', '04/05/2017', '04/04/2017'),
(8, 'Botsford Ltd', 'SD31924', 'Della Botsford', 'Randal Mills', '13-11-1979', '2051 Wisoky Tunnel Suite 308West Finn, MS 58071-5574', 'Lynch Islands', '621', 'Colin Plaza', 'West Dejahfort', 'Ltd', 'Bangladeshi', 'Islam', 'Estell Bashirian', '9261 Josue PinesEast Ralph, MS 55617-7310', '05834887771', '04/03/2017', '04/24/2017'),
(9, 'Crona-Hintz', 'KM8889', 'Branson Steuber', 'Angelita Kuhic', '03-03-2000', '439 Graham Harbors Apt. 228North Syblehaven, IN 58372', 'Winfield Trace', '66202', 'Leannon Plains', 'South Kelsie', 'PLC', 'Bangladeshi', 'Islam', 'Rico Bernhard', '95694 Jacobson KnollWest Katherineshire, KS 99402-1008', '968318803', '04/01/2017', '04/03/2017');

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
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
