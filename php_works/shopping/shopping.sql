-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 04:02 AM
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
-- Table structure for table `shoppingtable`
--

CREATE TABLE `shoppingtable` (
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoppingtable`
--

INSERT INTO `shoppingtable` (`name`, `image`, `price`) VALUES
('badam', 'badam2.webp', 2),
('chand sitare', 'chandsitare1.webp', 1),
('churan', 'churan.jpg', 1),
('guru chela', 'guru_chela.jpg', 1),
('kiss me', 'kissme1.jpg', 1),
('kuchi mittai', 'kuchi-mittai1.jpg', 5),
('magic pop', 'magic_pop1.jpg', 5),
('parle g', 'parleg.jpg', 2),
('pola', 'pola_1.jpg', 1),
('sip sip', 'sip_sip.jpg', 2),
('spin candy', 'spin_candy.jpg', 2),
('waffer', 'waffer2.jpg', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
