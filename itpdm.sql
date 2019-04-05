-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 07:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itpdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(25) NOT NULL,
  `doc_name` varchar(250) NOT NULL,
  `doc_reg_num` varchar(250) NOT NULL,
  `doc_city` varchar(250) NOT NULL,
  `doc_province` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `doc_cnum` varchar(250) NOT NULL,
  `doc_address` varchar(250) NOT NULL,
  `doc_email` varchar(250) NOT NULL,
  `doc_ephone` varchar(250) NOT NULL,
  `doc_gender` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'dumindu', 'dumindudilhara2@gmail.com', 'get quotation', 'Array(message)'),
(2, 'dumindu', 'dumindudilhara2@gmail.com', 'need sample', 'to my business'),
(3, 'dumindu', 'dumindudilhara2@gmail.com', 'need sample', 'to my business'),
(4, 'dumindu', 'dumindudilhara2@gmail.com', 'get quotation', 'need sample price'),
(5, 'dumindu', 'dumindudilhara2@gmail.com', 'get an appointment', 'need to get an appointment to meet Dr.samith.');

-- --------------------------------------------------------

--
-- Table structure for table `pet_data`
--

CREATE TABLE `pet_data` (
  `petID` int(25) NOT NULL,
  `petName` varchar(100) NOT NULL,
  `petCategory` varchar(230) NOT NULL,
  `petBirthday` varchar(100) NOT NULL,
  `petOwnerId` varchar(200) NOT NULL,
  `petSex` varchar(30) NOT NULL,
  `petImage` varchar(200) NOT NULL,
  `petVaccineDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_data`
--

INSERT INTO `pet_data` (`petID`, `petName`, `petCategory`, `petBirthday`, `petOwnerId`, `petSex`, `petImage`, `petVaccineDate`) VALUES
(1, 'rex', 'dog', '15.06.2017', '1', 'male', '111111.jpg', '2019-03-28'),
(5, 'sofi', 'Dog', '2019-03-14', 'dumindudilhara2@gmail.com', 'Male', 'Images/0f2debe97831461a50d70e876a062681.jpg', '2020-03-12'),
(11, 'tom', 'Cat', '2018-10-14', 'dumindudilhara2@gmail.com', 'Male', 'Images/e5f8104f1272d04e56aeb3d114a044ceeca32ee5c3c2c768704a7198d60b867d.jpg', '2020-03-21'),
(10, 'tim', 'Cat', '2019-01-06', 'dumindudilhara2@gmail.com', 'Male', 'Images/ac465fe7eb124c2b8b37240f36b3c325eca32ee5c3c2c768704a7198d60b867d.jpg', '2020-05-14'),
(9, 'blinki', 'Dog', '2019-03-11', 'dumindudilhara2@gmail.com', 'Female', 'Images/625ec57d9a4a6e61e260ccf8bc73aed4download.jpg', '2020-06-13'),
(12, 'timmy', 'Dog', '2019-03-04', 'sithira@gmail.com', 'Male', 'Images/0265e66f3cc50c1987dc368c6ea133eadownload.jpg', '2020-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(25) NOT NULL,
  `u_fname` varchar(250) NOT NULL,
  `u_lname` varchar(250) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `u_password` varchar(250) NOT NULL,
  `u_address` varchar(250) NOT NULL,
  `u_contact` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_data`
--
ALTER TABLE `pet_data`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pet_data`
--
ALTER TABLE `pet_data`
  MODIFY `petID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
