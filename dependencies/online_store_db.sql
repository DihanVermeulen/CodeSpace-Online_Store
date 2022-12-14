-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 10:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `quantity`, `created_at`) VALUES
(3, 1, 17, 4, '2007-12-21 23:00:30'),
(4, 2, 17, 3, '2007-12-21 23:00:30'),
(5, 1, 17, 1, '2008-12-22 05:33:08'),
(6, 2, 17, 1, '2008-12-22 05:36:16'),
(7, 2, 17, 1, '2008-12-22 05:36:35'),
(8, 1, 17, 2, '2009-12-22 09:30:43'),
(9, 1, 17, 5, '2009-12-21 23:01:43'),
(10, 2, 17, 1, '2009-12-21 23:01:43'),
(11, 2, 17, 1, '2009-12-21 23:08:13'),
(12, 1, 17, 3, '2009-12-22 00:03:06'),
(13, 2, 17, 3, '2009-12-22 00:03:06'),
(14, 1, 17, 1, '2010-12-22 07:30:52'),
(15, 1, 17, 3, '2010-12-22 08:29:08'),
(16, 4, 17, 2, '2010-12-22 08:29:08'),
(17, 5, 17, 1, '2010-12-22 08:29:08'),
(18, 6, 17, 1, '2010-12-22 08:29:08'),
(19, 2, 17, 1, '2011-12-22 03:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `product_price` double NOT NULL,
  `product_rating` int(1) DEFAULT NULL,
  `product_image_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_rating`, `product_image_location`) VALUES
(1, 'Cat#001', 0.1, 1, 'http://localhost:9000/public/assets/nft_images/2a7371820b52337172ab2d4b52ec04ab.png'),
(2, 'Cat#002', 0.02, 5, 'http://localhost:9000/public/assets/nft_images/5cbe0b61167969f5802c452aa62da0d0.png'),
(3, 'Cat#003', 0.02, 4, 'http://localhost:9000/public/assets/nft_images/24ccd8b35df55b6211e3952de92d6891.png'),
(4, 'Cat#004', 0.31, 5, 'http://localhost:9000/public/assets/nft_images/59b41eee0752235aef76835716baf875.png'),
(5, 'Cat#005', 0.27, 5, 'http://localhost:9000/public/assets/nft_images/045550f4b137c2b093986a52c54c91c9.png'),
(6, 'Cat#006', 0.14, 4, 'http://localhost:9000/public/assets/nft_images/61326a72c7029e15ca5d9488a381c594.png'),
(7, 'Cat#007', 0.05, 3, 'http://localhost:9000/public/assets/nft_images/d6d897b0d2dd11d03d094adb7bc7f0b6.png'),
(8, 'Cat#008', 0.23, 5, 'http://localhost:9000/public/assets/nft_images/f26e4bc120193f842fbe689ff5b2775f.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_surname` text NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_surname`, `user_email`, `user_password`) VALUES
(17, 'Dihan', 'Vermeulen', 'guest@guest.com', '$2y$10$777YNKVjiKW2vfDUl6vGbO2M1ukCrvDIgX6j15vlBCdqan6mkTv.m'),
(18, 'Dihan', 'Vermeulen', 'dihan@guest.com', '$2y$10$QRpezp71uZs2ym8R173/DeDHLZ2.3P95VkOQyrH4o4B.z0bMFmqM6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `user_password` (`user_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
