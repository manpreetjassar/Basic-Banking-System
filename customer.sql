-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 10:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
-- RELATIONSHIPS FOR TABLE `transaction`:
--

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
-- RELATIONSHIPS FOR TABLE `userinfo`:
--

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`SNo`, `Name`, `Email-id`, `CurrentBalance`, `Account-ID`) VALUES
(1, 'Manpreet Singh', 'manpreetsingh@gmail.com', '23000', '123456789'),
(2, 'Vaibhav Chanana', 'vchanana@gmail.com', '120000', '223456789'),
(3, 'Devashish Rajput', 'devashishrajput@gmail.com', '17000', '323456789'),
(4, 'Anshul Dagar', 'anshuldagar@gmail.com', '5000', '423456789'),
(5, 'Ravindra Sahu', 'ravindrasahu@gmail.com', '9000', '523456789'),
(6, 'Harsh Sharma', 'harshsharma@gmail.com', '34000', '623456789'),
(7, 'Anoop Gupta', 'anoopgupta@gmail.com', '45000', '723456789');

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
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `SNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;