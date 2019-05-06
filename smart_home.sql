-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2019 at 01:06 AM
-- Server version: 5.5.62
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataItem`
--

CREATE TABLE `dataItem` (
  `deviceID` int(255) NOT NULL,
  `dateTime` datetime NOT NULL,
  `data` binary(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `deviceID` int(4) NOT NULL,
  `deviceName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('ON','OFF') COLLATE utf8_unicode_ci NOT NULL,
  `connected` enum('YES','NO') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `numberOfUsers` int(8) DEFAULT NULL,
  `devicesConnected` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`numberOfUsers`, `devicesConnected`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(4) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci,
  `permissions` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `permissions`) VALUES
(1, 'janedoe', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'admin'),
(2, 'johndoe', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'admin'),
(3, 'jennydoe', NULL, 'user'),
(4, 'johnnydoe', NULL, 'user'),
(5, 'jacksondoe', NULL, 'user'),
(6, 'hotwheelsgranny', NULL, 'user'),
(7, 'test', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cellPhoneNumber` int(10) NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`userID`, `firstName`, `lastName`, `cellPhoneNumber`, `email`) VALUES
(1, 'Jane', 'Doe', 1234567890, 'janedoe@hotmail.com'),
(2, 'John', 'Doe', 1234567899, 'johndoe@hotmail.com'),
(3, 'Jenny', 'Doe', 1234567888, 'jennydoe@hotmail.com'),
(4, 'Johnny', 'Doe', 1234567877, 'johnnydoe@hotmail.com'),
(5, 'Jackson', 'Doe', 1234567887, 'jacksondoe@hotmail.com'),
(6, 'Geraldine', 'Doe', 1234566678, 'grannysgotwheels@hotmail.com'),
(7, 'test', 'test', 1234566666, 'test@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`,`username`);

--
-- Indexes for table `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userInfo` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
