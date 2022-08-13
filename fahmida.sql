-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 03:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahmida`
--

-- --------------------------------------------------------

--
-- Table structure for table `iphone`
--

CREATE TABLE `iphone` (
  `id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_cpu` varchar(255) NOT NULL,
  `item_ram` varchar(255) NOT NULL,
  `item_storage` varchar(255) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iphone`
--

INSERT INTO `iphone` (`id`, `item_name`, `item_price`, `item_cpu`, `item_ram`, `item_storage`, `screen_size`, `photo`) VALUES
(3, 'Iphone 14 pro max', 1200, 'Bionic A16', '12', '512', '6.7', 'iphone13.jpg'),
(4, 'Iphone 13 pro max', 1200, 'Bionic A16', '8', '256', '6.7', 'iphone13.jpg'),
(5, 'Iphone 14', 1500, 'Bionic A16', '8', '512', '6.7', 'iphone12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `macbook`
--

CREATE TABLE `macbook` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(100) NOT NULL,
  `item_cpu` varchar(100) NOT NULL,
  `item_ram` varchar(100) NOT NULL,
  `item_storage` varchar(100) NOT NULL,
  `screen_size` varchar(100) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `macbook`
--

INSERT INTO `macbook` (`id`, `item_name`, `item_price`, `item_cpu`, `item_ram`, `item_storage`, `screen_size`, `photo`) VALUES
(1, 'Macbook Air', 1200, 'Apple M2', '16', '512', '13.3', 'macbook.jpg'),
(2, 'Macbook Pro', 2500, 'Apple M1 Pro', '16', '512', '16', 'MacBook_Pro_14.jpg'),
(3, 'IMAC Pro', 5000, 'Apple M1', '16', '512', '24', 'imac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_phone`, `user_email`, `user_password`) VALUES
(2, 'Mahmood Hassan Rameem', 1409029641, 'rameem2019@gmail.com', '123'),
(3, 'Fahmida Yeasmin', 14878978, 'fahmidayeas.me@gmail.com', '112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macbook`
--
ALTER TABLE `macbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `macbook`
--
ALTER TABLE `macbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
