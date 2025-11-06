-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 07:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `chungloai`
--

CREATE TABLE `chungloai` (
  `idLoai` int(12) NOT NULL,
  `idCL` int(12) NOT NULL DEFAULT 0,
  `TenLoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ThuTu` int(4) NOT NULL DEFAULT 1,
  `AnHien` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chungloai`
--

INSERT INTO `chungloai` (`idLoai`, `idCL`, `TenLoai`, `ThuTu`, `AnHien`) VALUES
(1, 1, 'Áo thun', 2, 1),
(2, 1, 'Áo sơ mi', 1, 1),
(3, 1, 'Áo khoác', 3, 1),
(4, 1, 'Áo kiểu', 4, 1),
(5, 1, 'Quần dài', 5, 1),
(6, 1, 'Quần short - lửng', 6, 1),
(7, 1, 'Váy', 7, 1),
(8, 1, 'Bộ áo quần', 8, 1),
(9, 1, 'Bộ áo váy', 9, 1),
(10, 2, 'Áo thun', 10, 1),
(11, 2, 'Áo sơ mi', 11, 1),
(12, 2, 'Áo khoác', 12, 1),
(13, 2, 'Quần short', 13, 1),
(14, 2, 'Quần dài', 14, 1),
(15, 2, 'Thắt lưng', 15, 1),
(16, 2, 'Ví', 16, 1),
(17, 2, 'Mắt kính', 17, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chungloai`
--
ALTER TABLE `chungloai`
  ADD PRIMARY KEY (`idLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chungloai`
--
ALTER TABLE `chungloai`
  MODIFY `idLoai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
