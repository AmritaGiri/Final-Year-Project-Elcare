-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 06:58 PM
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
-- Database: `elcarecrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`Admin_Name`, `Admin_Password`) VALUES
('Amrita', 'AdminAmrita'),
('Tucha', 'AdminTucha');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`Id`, `Name`, `Email`, `Phone`, `Address`) VALUES
(7, 'Priya', 'priya@gmail.com', '08888888888', 'Dingle'),
(9, 'Geeta', 'geeta@gmail.com', '7777777777', 'Cork City'),
(10, 'Geeta', 'geeta@gmail.com', '7777777777', 'Limerick'),
(12, 'Arthur', 'arthur@gmail.com', '9999999999', 'Latvia'),
(13, 'Sahil', 'sahil@gmail.com', '1111111111', 'India'),
(14, 'Qala', 'qala@gmail.com', '6666666666', 'Delhi'),
(15, 'Qala', 'qalakumari@gmail.com', '1111111111', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `employee-login`
--

CREATE TABLE `employee-login` (
  `Employee_Name` varchar(100) NOT NULL,
  `Employee_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee-login`
--

INSERT INTO `employee-login` (`Employee_Name`, `Employee_Password`) VALUES
('Gary', 'Gary123'),
('Rachel', 'Rachel123'),
('James', 'James123'),
('Ana', 'Ana123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(6, 'amrita', '$2y$12$NvX2psnNHXFulDDBxeuk8elRMDPw/oc9mCIZCBdY5W1O1rk5UusMK'),
(7, 'chandan', '$2y$12$t2GVafa/9cZFCyx1zZailut2vG/vIt.k3j.PmtTAQmMB4QTFFerKu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
