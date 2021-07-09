-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 09:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Vaibhav Chanana', 'Manpreet Singh', '3000', '2021-07-08 04:49:41'),
(2, 'Manpreet Singh', 'Anshul Dagar', '5000', '2021-07-08 04:52:15'),
(3, 'Vaibhav Chanana', 'Devashish Rajput', '5000', '2021-07-08 08:20:56'),
(4, 'Anoop Gupta', 'Harsh Sharma', '700', '2021-07-08 08:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `SNo` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email-id` varchar(255) NOT NULL,
  `CurrentBalance` varchar(255) NOT NULL,
  `Account-ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`SNo`, `Name`, `Email-id`, `CurrentBalance`, `Account-ID`) VALUES
(1, 'Manpreet Singh', 'manpreetsingh@gmail.com', '15000', '123456789'),
(2, 'Vaibhav Chanana', 'vchanana@gmail.com', '112000', '223456789'),
(3, 'Devashish Rajput', 'devashishrajput@gmail.com', '22000', '323456789'),
(4, 'Anshul Dagar', 'anshuldagar@gmail.com', '16000', '423456789'),
(5, 'Ravindra Sahu', 'ravindrasahu@gmail.com', '9000', '523456789'),
(6, 'Harsh Sharma', 'harshsharma@gmail.com', '34700', '623456789'),
(7, 'Anoop Gupta', 'anoopgupta@gmail.com', '44300', '723456789'),
(8, 'Akshay Kumar', 'akumar@gmail.com', '50000', '823456789'),
(9, 'Harmeet Singh', 'harmeetsingh@gmail.com', '25000', '923456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `SNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
