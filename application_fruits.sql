-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 08:08 PM
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
-- Database: `application fruits`
--

-- --------------------------------------------------------

--
-- Table structure for table `discounted`
--

CREATE TABLE `discounted` (
  `id_discounted` int(11) NOT NULL,
  `name_discounted` varchar(150) NOT NULL,
  `price_discounted` varchar(100) NOT NULL,
  `img_discounted` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discounted`
--

INSERT INTO `discounted` (`id_discounted`, `name_discounted`, `price_discounted`, `img_discounted`) VALUES
(1, 'Orange', '0.80', 'orange.jpg'),
(2, 'Limon', '0.75', 'limon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `green`
--

CREATE TABLE `green` (
  `id_green` int(11) NOT NULL,
  `name_green` varchar(150) NOT NULL,
  `price_green` varchar(100) NOT NULL,
  `img_green` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `green`
--

INSERT INTO `green` (`id_green`, `name_green`, `price_green`, `img_green`) VALUES
(1, 'pear', '1.90', 'pear-fruit.jpeg'),
(2, 'kiwi', '0.75', 'Kiwi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id_new` int(11) NOT NULL,
  `name_new` varchar(200) NOT NULL,
  `price_new` varchar(100) NOT NULL,
  `img_new` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id_new`, `name_new`, `price_new`, `img_new`) VALUES
(1, 'Appale', '1.25', 'apple-fruit.jpg'),
(3, 'bnanna', '1.20', 'bnanna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `user_name_order` varchar(250) NOT NULL,
  `Phone_number_order` varchar(200) NOT NULL,
  `location_order` varchar(200) NOT NULL,
  `order_name_order` varchar(250) NOT NULL,
  `Payment_Order` enum('Cash','Visa') NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `qrt` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `user_name_order`, `Phone_number_order`, `location_order`, `order_name_order`, `Payment_Order`, `total_price`, `qrt`) VALUES
(1, 'aaaa bbbb', '0799048999', 'Amman', 'dddd', 'Visa', '5.85', 621),
(2, 'Ali79', '0799055555', 'irbid', 'mmmm hhhh', 'Cash', '6.80', 9411),
(7, 'Ali79', '0799048999', 'irbid', 'dddd hhhh', 'Visa', '50', 699);

-- --------------------------------------------------------

--
-- Table structure for table `summer`
--

CREATE TABLE `summer` (
  `id_summer` int(11) NOT NULL,
  `name_summer` varchar(200) NOT NULL,
  `price_summer` varchar(100) NOT NULL,
  `img_summer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summer`
--

INSERT INTO `summer` (`id_summer`, `name_summer`, `price_summer`, `img_summer`) VALUES
(1, 'Watermelon', '1.00', 'Watermelon.jpg'),
(3, 'grape', '2.00', 'grape.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `all_id_user` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `FullName_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `username_user` varchar(200) NOT NULL,
  `phone_user` varchar(200) NOT NULL,
  `Payment_user` enum('Cash','Visa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`all_id_user`, `id_user`, `FullName_user`, `email_user`, `username_user`, `phone_user`, `Payment_user`) VALUES
(1, 'ra04', 'aaaa bbbb hhhh', 'aaaa4@gmail.com', 'aaaa21', '0799048621', 'Cash'),
(3, '9f5y', 'wwww dddd eee', 'www21@gmail.com', 'ww23', '0781532076', 'Visa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discounted`
--
ALTER TABLE `discounted`
  ADD PRIMARY KEY (`id_discounted`);

--
-- Indexes for table `green`
--
ALTER TABLE `green`
  ADD PRIMARY KEY (`id_green`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `summer`
--
ALTER TABLE `summer`
  ADD PRIMARY KEY (`id_summer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`all_id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discounted`
--
ALTER TABLE `discounted`
  MODIFY `id_discounted` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `green`
--
ALTER TABLE `green`
  MODIFY `id_green` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `summer`
--
ALTER TABLE `summer`
  MODIFY `id_summer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `all_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
