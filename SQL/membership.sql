-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2021 at 07:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitecoclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `fullname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `usn` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` int(2) NOT NULL,
  `sem` int(2) NOT NULL,
  `nation` varchar(10) NOT NULL,
  `adhar` int(20) NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`fullname`, `fname`, `dob`, `usn`, `username`, `branch`, `year`, `sem`, `nation`, `adhar`, `caddress`, `paddress`, `pnumber`, `password`, `cpassword`, `gender`) VALUES
('Nitin Hegde', 'Manjunatha Hegde', '2000-07-15', '1SI18IS029', 'nitinhegde15j@gmail.com', 'ISE', 3, 6, 'Indian', 2147483647, 'MG block, SIT campus, Tumkur', 'Dantakal, Siddapura, Uttara Kannada, Karnataka-581', 2147483647, '1234', '1234', 'm'),
('Santosh', 'Naganath Maskale', '2001-04-27', '1SI18IS045', 'santoshmaskale9@gmail.com', 'ISE', 3, 6, 'Indian', 2147483647, 'MG block, SIT campus, Tumkur', 'Aurad(B), Bidar, Karnataka-585326', 2147483647, '5678', '5678', 'm'),
('K Tanmay', 'KS Gopalakrishna', '1999-12-13', '1SI18IS020', 'tanmayk6716@gmai.com', 'ISE', 3, 6, 'Indian', 2147483647, 'MG block, SIT campus, Tumkur', 'Hosalli, Sirsi, Uttara Kannada, Karnataka-581358', 2147483647, 'tanmay', 'tanmay', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
