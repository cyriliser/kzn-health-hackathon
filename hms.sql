-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 04:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `bed` varchar(30) NOT NULL,
  `patient_sign` varchar(30) NOT NULL,
  `nurse_sign` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `examnation` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `opt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `examnation`, `notes`, `opt`) VALUES
(1, 'afhghdsbghbvzkjvcvlsaiugiwepufjkadslndnvmzvnNvx', 'dsjkahgajasdvbcbzmbsrisbv', 'Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `PatientNo` varchar(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Mname` varchar(11) NOT NULL,
  `Lname` varchar(11) NOT NULL,
  `Id_No` varchar(30) NOT NULL,
  `DOB` date NOT NULL DEFAULT current_timestamp(),
  `Gender` varchar(11) NOT NULL,
  `PhoneNo` varchar(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Ethnic` varchar(11) NOT NULL,
  `Hospital` varchar(100) NOT NULL,
  `Pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `PatientNo`, `Fname`, `Mname`, `Lname`, `Id_No`, `DOB`, `Gender`, `PhoneNo`, `Address`, `Ethnic`, `Hospital`, `Pdf_file`) VALUES
(1, '232', 'Fika', 'df', 'Dumakude', '9834569078123', '2019-12-10', 'on', 'nkulest@gma', '0640298849', 'Coloured', 'ff', ''),
(2, '7834', 'Banele', '', 'Simelane', '12487', '2019-12-10', 'on', 'qwewer@k.co', '0640298849', 'Indians', 'werwer', ''),
(3, '2343', 'Sphe', 'dfasf', 'Mkhize', '2343', '2019-12-10', 'on', '0631156922', 'nkulest@gmail.com', 'Coloured', 'samf', ''),
(4, '400', 'Syanda', 'Sya', 'Man', '983451236', '0000-00-00', 'on', '0640298849', 'Louis Botha ave', 'Coloured', 'King', 'Days.pdf'),
(5, '500', 'Bhuti', 'Wethu', 'Black', '973462153457', '1983-04-04', 'male', '0631156922', 'P. O. Box 1645, Ivondwe Street', 'Indians', 'Zulu', 'THUMA.pdf'),
(6, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Coloured', 'grace', 'Git-2.24.0.2-64-bit.exe.z2tfgoa.partial'),
(7, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Indians', 'grace', 'New Text Document.txt'),
(8, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Indians', 'grace', 'New Text Document.txt'),
(9, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Coloured', 'grace', 'New Text Document.txt'),
(10, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Coloured', 'grace', 'New Text Document.txt'),
(11, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Coloured', 'grace', 'Removing or replacing a stylesheet (a _link_) with JavaScript_jQuery - Stack Overflow.pdf'),
(12, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Coloured', 'grace', 'Removing or replacing a stylesheet (a _link_) with JavaScript_jQuery - Stack Overflow.pdf'),
(13, '1764676', 'jabu', 'zulu', 'mnguni', '8347193746', '0000-00-00', 'on', '8w7er6q78we', 'alshdbclshjdc', 'Coloured', 'grace', 'Removing or replacing a stylesheet (a _link_) with JavaScript_jQuery - Stack Overflow.pdf'),
(14, 'ccd', 'Fika', 'Sime', 'Dumakude', '8988768689689', '0000-00-00', 'Female', '0640298849', 'Louis Botha ave', 'Indians', 'King', 'THUMA.pdf'),
(15, 'ggg', 'Fika', 'pp', 'Dumakude', '787777777777', '0000-00-00', 'Male', '0640298849', 'Louis Botha ave', 'Indians', 'ee', 'THUMA.pdf'),
(16, 'kk', 'Fika', 'fgfhdf', 'Dumakude', 'ETWT', '0000-00-00', 'Female', '0640298849', 'Louis Botha ave', 'Indians', 'ddd', 'THUMA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

CREATE TABLE `patient_records` (
  `id` int(11) NOT NULL,
  `examination` longtext NOT NULL,
  `doctor_notes` longtext NOT NULL,
  `short_diagnosis` tinytext NOT NULL,
  `vitals_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `x_ray_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'temp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'sabelo', 'banelebin0@gmail.com', '$2y$10$IBxAY04ywgxlTUnUP0j9W./p4U3eVVH9L1eLPjRZpEsTxBcBHwRFi', 'admin'),
(2, 'sabelo', 'banelebin0@gmail.com', '$2y$10$2.JPLM6827S.zS2IYVwiGegM4k0mbE.uMT0jzU03Ov.sHshIYsLK.', 'temp'),
(3, 'sabelo', 'banelebin0@gmail.com', '$2y$10$dXSsIP3hvUwZrvN.Y.9GOu3dEwTlkAgQI/LITqd4FNVstpVEcRKL.', 'temp'),
(4, 'sabelo', 'banelebin0@gmail.com', '$2y$10$L72u4KHk7kMW9V78T/J2S.zqQ/hunCMEt3ZPlue/BID3wpda.VUi6', 'temp'),
(5, 'sabelo', 'banelebin0@gmail.com', '$2y$10$EN1MRSXiVKcU.FjIp4H8u.rrpQWCqMwmRqs5W3AWLTJvQKEhdTDPS', 'temp'),
(6, 'sabelo', 'banelebin0@gmail.com', '$2y$10$zxea.jES//UYX285FMbKOug2n8cQeCneW97WRVjSkedtcaiuq5lQm', 'temp'),
(7, 'sabelo', 'banelebin0@gmail.com', '$2y$10$BkKMTWEoJWyBqNbA9ZbSBei3niHCrb0Uz.cDsQ8yAUhypqHng3afW', 'temp'),
(8, 'sabelo1', 'banelebin01@gmail.com', '$2y$10$dHsM6aHRe6ij0R.qQLFRIuUYsHY5qFksMAVkq8c4R4jcApKImtdKK', 'temp'),
(9, 'siya', 'siya@gmail.com', '$2y$10$gd0UNWnMw/sklfwl0H6IvuUFoaMXbzCfgsyHBBE9bmS7KFfH.21hq', 'temp'),
(10, 'hhhhqh', 'banelebin01@gmail.com', '$2y$10$Of8P5IN2Y1blpVCaJ.OBuOOU4aYCXaQW/gZVCwyOlFVfEtTXPGrzS', 'temp'),
(11, 'sabelol', 'banelebin0l@gmail.com', '$2y$10$Uo75erbGQ8WAkqXUhZavee0zmQd1JQHG7gWtmrtK5TvbYn7ECvAUS', 'temp'),
(12, 'sizwe', 'sizwe@gmail.com', '$2y$10$iufOCQoVLcrXUcOeiYwG7eqBgHk3RPRizcI2n7dY3fWDTOiSu4Htq', 'temp'),
(13, 'thato', 'thato@gmail.com', '$2y$10$cLyG29cRMg7cexGJLSN9I.PRqmg7f4QRYhBdJQhSU6NybtfVVfB7q', 'clerk'),
(14, 'zanele', 'zanele@gmail.com', '$2y$10$ALgyWOlEoLoAHcCNtoKvL.9NURpAbiAT/ZBjt0tnykkcrEdbQpQfO', 'doctor'),
(15, 'zanele', 'zanele@gmail.com', '$2y$10$G7P/RZmh4AmUw4ZEbXs7WeHf4/DX9xW19KzzltAW79pwJG0JkKkHi', 'doctor'),
(16, 'zanelel', 'zanelel@gmail.com', '$2y$10$mX3BAHQZX95nIJxC2V86PeC2NukzU0wQsjIs0za6iISmsTus5oYkS', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `vital`
--

CREATE TABLE `vital` (
  `id` int(11) NOT NULL,
  `BP` varchar(10) NOT NULL,
  `Weight` varchar(10) NOT NULL,
  `BMI` varchar(10) NOT NULL,
  `HIV` varchar(10) NOT NULL,
  `Cholesterol` varchar(10) NOT NULL,
  `Clinic` varchar(30) NOT NULL,
  `Id_No` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vital`
--

INSERT INTO `vital` (`id`, `BP`, `Weight`, `BMI`, `HIV`, `Cholesterol`, `Clinic`, `Id_No`) VALUES
(23, '45', '33', 'rt', 'Positive', '34', 'Maternity', '2343'),
(24, '69', '90', '59', 'Negative', '30', 'Maternity', '12487'),
(25, '69', '90', '59', 'Negative', '30', 'Maternity', '12487'),
(26, '69', '90', '59', 'Negative', '30', 'Maternity', '12487');

-- --------------------------------------------------------

--
-- Table structure for table `x-ray`
--

CREATE TABLE `x-ray` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `technician_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vital`
--
ALTER TABLE `vital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `x-ray`
--
ALTER TABLE `x-ray`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vital`
--
ALTER TABLE `vital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `x-ray`
--
ALTER TABLE `x-ray`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
