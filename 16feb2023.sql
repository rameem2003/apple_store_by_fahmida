-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 04:25 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user`, `admin_pass`, `fullname`) VALUES
(1, 'rameem', '451638', 'Mahmood Hassan Rameem'),
(3, 'fahmida', '451628', 'Fahmida Yeasmin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prize` int(255) NOT NULL,
  `imege` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ipad`
--

CREATE TABLE `ipad` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_cpu` varchar(255) NOT NULL,
  `item_ram` varchar(255) NOT NULL,
  `item_storage` varchar(255) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipad`
--

INSERT INTO `ipad` (`id`, `item_name`, `item_price`, `item_cpu`, `item_ram`, `item_storage`, `screen_size`, `photo`) VALUES
(1, 'IPad 10 9th Gen', 53000, 'Bionic A13', '3', '64', '10.2', 'ipad10.jpg'),
(2, 'IPad Pro M2', 127500, 'Apple M2 Chip', '8', '128', '12.9', 'iPad-Pro-M2.jpg'),
(3, 'IPad Pro M1', 123000, 'Apple M1 Chip', '8', '128', '12.9', 'ipadProM1.jpg'),
(4, 'IPad Pro M2', 105500, 'Apple M2 Chip', '8', '128', '11', 'iPad-Pro-M2-2022.jpg');

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
(9, 'Iphone 14 Pro Max', 191000, 'Bionic A16', '6', '512', '6.7', 'iphone14promax.jpg'),
(10, 'Iphone 14 Pro', 180000, 'Bionic A16', '6', '512', '6.7', 'iphone14pro.jpg'),
(11, 'Iphone 14 Plus', 110000, 'Bionic A15', '6', '256', '6.7', 'iphone14plus.jpg'),
(12, 'Iphone 14', 98000, 'Bionic A15', '6', '256', '6.1', 'iphone14.jpg'),
(13, 'Iphone 13 Pro Max', 150000, 'Bionic A15', '6', '512', '6.7', 'iphone13promax.jpg'),
(14, 'Iphone 13 Pro', 128000, 'Bionic A15', '6', '128', '6.1', 'iphone13pro.jpg'),
(15, 'Iphone 13 Mini', 95000, 'Bionic A15', '6', '256', '5.4', 'iphone13mini.jpg'),
(17, 'Iphone 13', 96000, 'Bionic A15', '6', '256', '6.1', 'iphone13new.jpg');

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
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `macbook`
--

INSERT INTO `macbook` (`id`, `item_name`, `item_price`, `item_cpu`, `item_ram`, `item_storage`, `screen_size`, `photo`) VALUES
(4, 'Macbook Pro 13\"', 161000, 'Apple M2 Chip', '8', '256', '13.3', 'macbookpro.jpg'),
(5, 'Macbook Pro 13\"', 138000, 'Apple M1 Chip', '8', '512', '13.3', 'macbookpro1.jpg'),
(6, 'Macbook Pro 14\"', 285000, 'Apple M2 Pro Chip', '16', '1024', '14.2', 'macbookpro14inch1.jpg'),
(7, 'Macbook Pro 14\"', 295000, 'Apple M2 Max Chip', '16', '512', '14.2', 'macbookpro14inch2.jpg'),
(8, 'IMAC M1 2021', 217000, 'Apple M1 Chip', '8', '512', '24', 'imac1.jpg'),
(9, 'IMAC M1', 190000, 'Apple M1 Chip', '8', '256', '24', 'imac2.jpg'),
(10, 'MAC Studio Max', 235000, 'Apple M1 Max Chip', '32', '512', 'Upto 24 ', 'macS1.jpg'),
(11, 'MAC Studio Ultra', 250000, 'Apple M1 Ultra Chip', '128', '1024', 'Upto 24', 'macS1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
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
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `item_name`, `item_price`, `item_cpu`, `item_ram`, `item_storage`, `screen_size`, `photo`) VALUES
(1, 'Apple TV 3rd Gen', 24500, 'Bionic A15', '4', '128', '3.66', 'appletv3rdgen.jpg'),
(3, 'Apple TV 2nd Gen', 19500, 'Bionic A14', '4', '128', '3.66', 'appletv2ndgen.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_cpu` varchar(255) NOT NULL,
  `item_ram` varchar(255) NOT NULL,
  `item_storage` varchar(255) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `item_name`, `item_price`, `item_cpu`, `item_ram`, `item_storage`, `screen_size`, `photo`) VALUES
(1, 'Apple Watch Series 7', 40000, 'Apple S7', '1', '32', '1.9', 'apple-watch-series-7-aluminum.jpg'),
(2, 'Apple Watch Series 8', 81000, 'Apple S8', '1', '32', '1.9', 'apple-watch-8.jpg'),
(3, 'Apple Watch Series 6', 35000, 'Apple S6', '1', '32', '1.78', 'apple-watch-s6-steel.jpg'),
(5, 'Apple Watch Series 5', 32000, 'Apple S5', '1', '32', '1.78', 'apple-watch-series-5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipad`
--
ALTER TABLE `ipad`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ipad`
--
ALTER TABLE `ipad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `macbook`
--
ALTER TABLE `macbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
