-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 03:39 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `savingtables`
--

CREATE TABLE `savingtables` (
  `id` int(11) NOT NULL,
  `DomainName` varchar(500) DEFAULT NULL,
  `DivisionName` varchar(500) NOT NULL,
  `ZoneId` varchar(500) DEFAULT NULL,
  `AreaId` varchar(500) DEFAULT NULL,
  `BranchId` varchar(500) DEFAULT NULL,
  `MonthId` varchar(500) DEFAULT NULL,
  `YearId` varchar(500) DEFAULT NULL,
  `MemberId` varchar(500) NOT NULL,
  `MemberName` varchar(500) NOT NULL,
  `AccountNo` varchar(500) DEFAULT NULL,
  `GSaving` varchar(500) DEFAULT NULL,
  `Dps` varchar(500) NOT NULL,
  `InstallmentNo` int(11) DEFAULT NULL,
  `TotalInstallment` int(11) DEFAULT NULL,
  `posted_by` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savingtables`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `savingtables`
--
ALTER TABLE `savingtables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `savingtables`
--
ALTER TABLE `savingtables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
