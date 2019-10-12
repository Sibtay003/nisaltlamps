-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2019 at 03:44 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nisaltla_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_tbl`
--

CREATE TABLE `accomodation_tbl` (
  `acc_id` int(11) NOT NULL,
  `acc_location` varchar(50) NOT NULL,
  `acc_price` int(10) NOT NULL,
  `acc_sharingStatus` tinyint(1) NOT NULL,
  `acc_availability` tinyint(1) NOT NULL,
  `acc_FurrnishingStatus` tinyint(1) NOT NULL,
  `acc_images` blob NOT NULL,
  `acc_roomCount` int(30) NOT NULL,
  `acc_user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foodrecipie_tbl`
--

CREATE TABLE `foodrecipie_tbl` (
  `rec_id` int(11) NOT NULL,
  `rec_name` varchar(255) NOT NULL,
  `rec_discription` char(255) NOT NULL,
  `recepie` varchar(255) NOT NULL,
  `rec_type` char(50) NOT NULL,
  `eating_time` char(50) NOT NULL,
  `region_id` smallint(50) NOT NULL,
  `user_id` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ondemandservices_tble`
--

CREATE TABLE `ondemandservices_tble` (
  `ons_id` int(11) NOT NULL,
  `ons_location` varchar(100) NOT NULL,
  `ons_price` smallint(10) NOT NULL,
  `ons_available` tinyint(1) NOT NULL,
  `ons_img` blob NOT NULL,
  `ons_notes` varchar(300) NOT NULL,
  `ons_feedback` varchar(300) NOT NULL,
  `ons_rating` int(5) NOT NULL,
  `ons_roomCount` smallint(255) NOT NULL,
  `ons_user_id` mediumint(10) NOT NULL,
  `ons_service_id` smallint(30) NOT NULL,
  `ons_pay_id` mediumint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `pay_id` int(11) NOT NULL,
  `pay_amount` int(10) NOT NULL,
  `pay_status` tinyint(1) NOT NULL,
  `pay_user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `region_tbl`
--

CREATE TABLE `region_tbl` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  `reg_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role_tbl`
--

CREATE TABLE `role_tbl` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `role_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servicetype_tbl`
--

CREATE TABLE `servicetype_tbl` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status_tbl`
--

CREATE TABLE `status_tbl` (
  `status_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `status_user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `FName` char(30) NOT NULL,
  `MiddleName` int(50) NOT NULL,
  `LName` char(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNo` bigint(15) NOT NULL,
  `DOB` datetime NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` char(30) NOT NULL,
  `Country` int(50) NOT NULL,
  `PostCode` smallint(6) NOT NULL,
  `RoleId` int(1) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation_tbl`
--
ALTER TABLE `accomodation_tbl`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `foodrecipie_tbl`
--
ALTER TABLE `foodrecipie_tbl`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `ondemandservices_tble`
--
ALTER TABLE `ondemandservices_tble`
  ADD PRIMARY KEY (`ons_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `region_tbl`
--
ALTER TABLE `region_tbl`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `role_tbl`
--
ALTER TABLE `role_tbl`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `servicetype_tbl`
--
ALTER TABLE `servicetype_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `status_tbl`
--
ALTER TABLE `status_tbl`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation_tbl`
--
ALTER TABLE `accomodation_tbl`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodrecipie_tbl`
--
ALTER TABLE `foodrecipie_tbl`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ondemandservices_tble`
--
ALTER TABLE `ondemandservices_tble`
  MODIFY `ons_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region_tbl`
--
ALTER TABLE `region_tbl`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_tbl`
--
ALTER TABLE `role_tbl`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicetype_tbl`
--
ALTER TABLE `servicetype_tbl`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_tbl`
--
ALTER TABLE `status_tbl`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
