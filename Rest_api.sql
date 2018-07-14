-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2018 at 12:22 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Fashion', 'Category for anything related to fashion.'),
(2, 'Electronics', 'Gadgets, drones and more.'),
(3, 'Motors', 'Motor sports and more'),
(5, 'Movies', 'Movie products.'),
(6, 'Books', 'Kindle books, audio books and more.'),
(13, 'Sports', 'Drop into new winter gear.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', '336', 3),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!', '299', 2),
(3, 'Samsung Galaxy S4', 'How about no?', '600', 3),
(6, 'Bench Shirt', 'The best shirt!', '29', 1),
(7, 'Lenovo Laptop', 'My business partner.', '399', 2),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', '259', 2),
(9, 'Spalding Watch', 'My sports watch.', '199', 1),
(10, 'Sony Smart Watch', 'The coolest smart watch!', '300', 2),
(11, 'Huawei Y300', 'For testing purposes.', '100', 2),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', '60', 1),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', '70', 1),
(26, 'Another product', 'Awesome product!', '555', 2),
(28, 'Wallet', 'You can absolutely use this one!', '799', 6),
(31, 'Amanda Waller Shirt', 'New awesome shirt!', '333', 1),
(42, 'Nike Shoes for Men', 'Nike Shoes', '12999', 3),
(48, 'Bristol Shoes', 'Awesome shoes.', '999', 5),
(60, 'Rolex Watch', 'Luxury watch.', '25000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `email_verify` enum('0','1') DEFAULT '0',
  `send_otp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `password`, `status`, `email_verify`, `send_otp`) VALUES
(12, 'CJ', 'chiru', 'debnath', 'tomthecharacter@gmail.com', '7005499058', '12345', '1', '1', '970338');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
