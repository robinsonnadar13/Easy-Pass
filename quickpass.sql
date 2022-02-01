-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Feb 01, 2022 at 11:33 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `automated`
--

CREATE TABLE `automated` (
  `dayno` varchar(255) DEFAULT NULL,
  `dbtablename` varchar(255) DEFAULT NULL,
  `totalseatsyoucanbook` int(11) DEFAULT NULL,
  `regdateandtime` varchar(255) DEFAULT NULL,
  `massdateandtime` varchar(255) DEFAULT NULL,
  `dateinwords` varchar(255) DEFAULT NULL,
  `passimg` varchar(255) DEFAULT NULL,
  `ytlink` varchar(255) DEFAULT NULL,
  `iframer` varchar(255) DEFAULT NULL,
  `titleofyt` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `day1`
--

CREATE TABLE `day1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passno` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `day2`
--

CREATE TABLE `day2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passno` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `day3`
--

CREATE TABLE `day3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day4`
--

CREATE TABLE `day4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day5`
--

CREATE TABLE `day5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day6`
--

CREATE TABLE `day6` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day7`
--

CREATE TABLE `day7` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day8`
--

CREATE TABLE `day8` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day9`
--

CREATE TABLE `day9` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day10`
--

CREATE TABLE `day10` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noofmembers` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `automated`
--
ALTER TABLE `automated`
  ADD UNIQUE KEY `ytlink` (`ytlink`);

--
-- Indexes for table `day1`
--
ALTER TABLE `day1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day2`
--
ALTER TABLE `day2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day3`
--
ALTER TABLE `day3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day4`
--
ALTER TABLE `day4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day5`
--
ALTER TABLE `day5`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day6`
--
ALTER TABLE `day6`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day7`
--
ALTER TABLE `day7`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day8`
--
ALTER TABLE `day8`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day9`
--
ALTER TABLE `day9`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `day10`
--
ALTER TABLE `day10`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day1`
--
ALTER TABLE `day1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day2`
--
ALTER TABLE `day2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day3`
--
ALTER TABLE `day3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day4`
--
ALTER TABLE `day4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day5`
--
ALTER TABLE `day5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day6`
--
ALTER TABLE `day6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day7`
--
ALTER TABLE `day7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day8`
--
ALTER TABLE `day8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day9`
--
ALTER TABLE `day9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day10`
--
ALTER TABLE `day10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
