-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2019 at 11:49 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor_ketindan`
--

-- --------------------------------------------------------

--
-- Table structure for table `rangesensor`
--

CREATE TABLE `rangesensor` (
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenisSensor` varchar(20) NOT NULL,
  `batasAtas` int(11) NOT NULL,
  `batasBawah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangesensor`
--

INSERT INTO `rangesensor` (`Timestamp`, `jenisSensor`, `batasAtas`, `batasBawah`) VALUES
('2019-08-12 08:21:05', 'kelembapanTanah', 80, 10),
('2019-08-12 08:21:14', 'suhu', 30, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rangesensor`
--
ALTER TABLE `rangesensor`
  ADD PRIMARY KEY (`Timestamp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
