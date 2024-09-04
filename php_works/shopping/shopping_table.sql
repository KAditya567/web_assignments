-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 07:32 AM
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
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopping_table`
--

CREATE TABLE `shopping_table` (
  `sno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopping_table`
--

INSERT INTO `shopping_table` (`sno`, `name`, `image`, `price`) VALUES
(1, 'AC', 'images/air-conditioning.jpg', 40000),
(2, 'Chips', 'images/chiips.jpg', 20),
(3, 'Cooler', 'images/cooler.jpg', 10000),
(4, 'Mobile', 'images/mobile.jpg', 30000),
(5, 'ParleG', 'images/parle.jpg', 2),
(6, 'Watch', 'images/watch.jpg', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping_table`
--
ALTER TABLE `shopping_table`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopping_table`
--
ALTER TABLE `shopping_table`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
