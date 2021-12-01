-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 09:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rexx_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_mail` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `sale_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `customer_name`, `customer_mail`, `product_id`, `product_name`, `product_price`, `sale_date`) VALUES
(1, 'Reto Fanzen', 'reto.fanzen@no-reply.rexx-systems.com', 1, 'Refactoring: Improving the Design of Existing Code', '49.99', '2019-04-02 07:05:12'),
(2, 'Reto Fanzen', 'reto.fanzen@no-reply.rexx-systems.com', 2, 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design', '24.99', '2019-05-01 10:07:18'),
(3, 'Leandro Bußmann', 'leandro.bussmann@no-reply.rexx-systems.com', 2, 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design', '19.99', '2019-05-06 13:26:14'),
(4, 'Hans Schäfer', 'hans.schaefer@no-reply.rexx-systems.com', 1, 'Refactoring: Improving the Design of Existing Code', '37.98', '2019-06-07 10:38:39'),
(5, 'Mia Wyss', 'mia.wyss@no-reply.rexx-systems.com', 1, 'Refactoring: Improving the Design of Existing Code', '37.98', '2019-07-01 14:01:13'),
(6, 'Mia Wyss', 'mia.wyss@no-reply.rexx-systems.com', 2, 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design', '19.99', '2019-08-07 18:08:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
