-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 06:37 PM
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
(5, '500', 'Bhuti', 'Wethu', 'Black', '973462153457', '0000-00-00', 'on', '0631156922', 'P. O. Box 1645, Ivondwe Street', 'Indians', 'Zulu', 'THUMA.pdf');

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

--
-- Indexes for dumped tables
--

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
-- Indexes for table `vital`
--
ALTER TABLE `vital`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vital`
--
ALTER TABLE `vital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
