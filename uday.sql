-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 04:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uday`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phoneno`, `message`, `datetime`, `status`) VALUES
(0, 'uday', 'uday@gmail.com', '7764646565', 'good', '2022-05-14 20:19:08', 1),
(0, 'uday', 'uday@gmail.com', '7797997979', 'good', '2022-05-14 20:19:22', 1),
(0, 'uday', 'uday@gmail.com', '7879784575', 'good', '2022-05-14 20:20:18', 1),
(0, 'uday', 'uday@gmail.com', '7879784575', 'good', '2022-05-14 20:22:50', 1),
(0, 'uday', 'uday@gmail.com', '2587413696', 'heyy', '2022-05-14 20:24:55', 1),
(0, 'uday', 'uday@gmail.com', '54789632143', 'nice', '2022-05-14 20:26:00', 1),
(0, 'uday', 'uday@gmail.com', '1236547899', 'kk', '2022-05-14 20:26:51', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
