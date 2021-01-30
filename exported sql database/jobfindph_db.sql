-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2021 at 02:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfindph_db`
--
CREATE DATABASE IF NOT EXISTS `jobfindph_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jobfindph_db`;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile`
--

CREATE TABLE `applicant_profile` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `phoneNo` int(11) DEFAULT NULL,
  `current_employer` varchar(255) DEFAULT NULL,
  `current_job` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthmonth` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `self_description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_location`
--

CREATE TABLE `company_location` (
  `ID` int(11) NOT NULL,
  `branchName` varchar(255) DEFAULT NULL,
  `branchPhone` int(11) DEFAULT NULL,
  `branchAddress` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `ID` int(11) NOT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `contactPerson` varchar(255) DEFAULT NULL,
  `contact_phone` int(11) DEFAULT NULL,
  `companyAddress` varchar(255) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `industry_type` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobfind_wallposts`
--

CREATE TABLE `jobfind_wallposts` (
  `ID` int(11) NOT NULL,
  `job_description` varchar(255) DEFAULT NULL,
  `job_requirements` varchar(255) DEFAULT NULL,
  `time_added` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_candidate`
--

CREATE TABLE `job_candidate` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `current_employer` varchar(255) DEFAULT NULL,
  `current_job` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `create_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`ID`, `first_name`, `last_name`, `email`, `phone`, `password`, `usertype`, `create_datetime`) VALUES
(1, '9569e7f016c5ed5e4be2e33e300311e2', 'e99f09191a569ce70eff3d0954f03672', 'e820bb4aba5ad74c5a6ff1aca16641f6', '6e901882c20302600f05b1cb5a4fbc7f', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'employee', '2021-01-30 18:22:39'),
(2, '2e1d1e3fe8265865efbc8cbb4baaf4e8', 'c13e13da2073260c2194c15d782e86a9', 'c7fffa038fcde56d0ccc164df866e895', 'b56a18e0eacdf51aa2a5306b0f533204', '3447adfd742cdfb9048a3b29baf1ae7d', 'employee', '2021-01-30 18:44:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_profile`
--
ALTER TABLE `applicant_profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_location`
--
ALTER TABLE `company_location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jobfind_wallposts`
--
ALTER TABLE `jobfind_wallposts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_candidate`
--
ALTER TABLE `job_candidate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_profile`
--
ALTER TABLE `applicant_profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_location`
--
ALTER TABLE `company_location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobfind_wallposts`
--
ALTER TABLE `jobfind_wallposts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_candidate`
--
ALTER TABLE `job_candidate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
