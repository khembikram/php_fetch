-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 06:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_fetch`
--

-- --------------------------------------------------------

--
-- Table structure for table `fetch_data`
--

CREATE TABLE `fetch_data` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fetch_data`
--

INSERT INTO `fetch_data` (`ID`, `Name`, `DOB`, `Email`, `Mobile`, `Photo`) VALUES
(1, 'Ram Bahadaur', '2023-10-05', 'ram12@gmail.com', 981005656, NULL),
(2, 'Shyam Kumar', '2023-10-02', 'shyamkumar12@gmail.com', 981005634, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fetch_data`
--
ALTER TABLE `fetch_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fetch_data`
--
ALTER TABLE `fetch_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
