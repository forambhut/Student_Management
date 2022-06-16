-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Class` int(11) NOT NULL,
  `Divison` varchar(1) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`ID`, `Name`, `Age`, `School`, `Class`, `Divison`, `Status`) VALUES
(1, 'Raju Patel', 10, 'LEAD School Karmala', 3, 'A', 'Active'),
(2, 'Kamini Patel', 12, 'LEAD School Karmala', 1, 'A', 'Active'),
(3, 'John Chaudry', 10, 'Jay Ambe School', 2, 'C', 'Active'),
(4, 'Raj Bhatt', 15, 'Amirash School', 7, 'C', 'Active'),
(5, 'Manisha Singh', 9, 'Amirash School', 2, 'C', 'Active'),
(6, 'Jagdish Manvar', 7, 'Swaminarayan School Salvav', 1, 'B', 'Inactive'),
(7, 'Akhil Jaini', 12, 'Swaminarayan School Salvav', 5, 'B', 'Active'),
(8, 'Neha Jani', 8, 'Gyandam International School', 3, 'C', 'Active'),
(9, 'Rakesh Prajapati', 6, 'Jay Ambe School', 2, 'B', 'Active'),
(10, 'Radhika Patel', 9, 'Amirash School', 5, 'A', 'Active'),
(34, 'Sandip Rajput', 6, 'Amirash School', 2, 'B', 'Active'),
(35, 'Gunj Patel', 10, 'Gyandam International School', 5, 'A', 'Active'),
(37, 'sanjay patel', 17, 'LEAD School Karmala', 7, 'C', 'Active'),
(38, 'Visaj Gadhiya', 5, 'Jay Ambe School', 1, 'A', 'Inactive'),
(44, 'Rajvi Patel', 7, 'LEAD School Karmala', 3, 'A', 'Inactive'),
(45, 'Dharti Suvariya', 7, 'Swaminarayan School Salvav', 2, 'B', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
