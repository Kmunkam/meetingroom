-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 12:21 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetingroomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `roome`
--

CREATE TABLE `roome` (
  `id` int(5) UNSIGNED NOT NULL,
  `numperson` int(5) DEFAULT NULL,
  `bookname` varchar(255) COLLATE utf8mb4_estonian_ci DEFAULT NULL,
  `statusroome` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_estonian_ci;

--
-- Dumping data for table `roome`
--

INSERT INTO `roome` (`id`, `numperson`, `bookname`, `statusroome`) VALUES
(2, 23, 'Kun A', 2),
(4, 22, 'Kun D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roomi`
--

CREATE TABLE `roomi` (
  `id` int(5) UNSIGNED NOT NULL,
  `numperson` int(5) DEFAULT NULL,
  `bookname` varchar(255) COLLATE utf8mb4_estonian_ci DEFAULT NULL,
  `statusroomi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_estonian_ci;

--
-- Dumping data for table `roomi`
--

INSERT INTO `roomi` (`id`, `numperson`, `bookname`, `statusroomi`) VALUES
(1, 4, 'Kun P', 1),
(8, 4, 'Kun D', 2),
(9, 5, 'Kun S', 2),
(10, 4, 'Kun A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roomp`
--

CREATE TABLE `roomp` (
  `id` int(5) UNSIGNED NOT NULL,
  `numperson` int(5) DEFAULT NULL,
  `bookname` varchar(255) COLLATE utf8mb4_estonian_ci DEFAULT NULL,
  `statusroomp` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_estonian_ci;

--
-- Dumping data for table `roomp`
--

INSERT INTO `roomp` (`id`, `numperson`, `bookname`, `statusroomp`) VALUES
(2, 5, 'Kun D', 2),
(3, 6, 'Kun A', 2),
(11, 5, 'Kun A', 2),
(12, 6, 'Kun A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `statusroom`
--

CREATE TABLE `statusroom` (
  `statusID` int(5) NOT NULL,
  `statusname` varchar(255) COLLATE utf8mb4_estonian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_estonian_ci;

--
-- Dumping data for table `statusroom`
--

INSERT INTO `statusroom` (`statusID`, `statusname`) VALUES
(1, 'ยังไม่เสร็จสิ้น'),
(2, 'เสร็จสิ้น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roome`
--
ALTER TABLE `roome`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statusroome` (`statusroome`);

--
-- Indexes for table `roomi`
--
ALTER TABLE `roomi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statusroomi` (`statusroomi`);

--
-- Indexes for table `roomp`
--
ALTER TABLE `roomp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statusroomp` (`statusroomp`);

--
-- Indexes for table `statusroom`
--
ALTER TABLE `statusroom`
  ADD PRIMARY KEY (`statusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roome`
--
ALTER TABLE `roome`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomi`
--
ALTER TABLE `roomi`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roomp`
--
ALTER TABLE `roomp`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roome`
--
ALTER TABLE `roome`
  ADD CONSTRAINT `roome_ibfk_1` FOREIGN KEY (`statusroome`) REFERENCES `statusroom` (`statusID`);

--
-- Constraints for table `roomi`
--
ALTER TABLE `roomi`
  ADD CONSTRAINT `roomi_ibfk_1` FOREIGN KEY (`statusroomi`) REFERENCES `statusroom` (`statusID`);

--
-- Constraints for table `roomp`
--
ALTER TABLE `roomp`
  ADD CONSTRAINT `roomp_ibfk_1` FOREIGN KEY (`statusroomp`) REFERENCES `statusroom` (`statusID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
