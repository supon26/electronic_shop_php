-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2022 at 03:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(140) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(12, 'Mobile Phone', 'A mobile phone, cellular phone, cell phone', '2022-12-11 18:41:22', '2022-12-11 18:41:22'),
(13, 'Television', 'TV  is a telecommunication medium for transmitting moving images and sound.', '2022-12-11 18:42:44', '2022-12-11 18:42:44'),
(14, 'Personal Computer', '(PC) is a multi-purpose microcomputer whose size, capabilities, and price make it feasible for individual use', '2022-12-11 18:43:18', '2022-12-11 18:43:18'),
(15, 'Watch', 'A watch is a portable timepiece intended to be carried or worn by a person', '2022-12-11 18:43:48', '2022-12-11 18:43:48'),
(16, 'Head Phones', 'Headphones let a single user listen to an audio source privately, in contrast to a loudspeake', '2022-12-12 15:45:41', '2022-12-12 15:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(200) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_name`, `description`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(35, 'Iphone 13 pro', 'Mobile Phone', 'Apple retail store selling iPhones, iPads & more in sleekly designed spaces.', '1000', 'iphone 13 pro1670861948.png', '2022-12-12 15:26:39', '2022-12-12 15:26:39'),
(36, 'Laptop', 'Personal Computer', 'A laptop, laptop computer, or notebook computer is a small, portable personal computer (PC) with a screen and alphanumeric keyboard', '1380', 'laptop21670858890.png', '2022-12-12 15:28:10', '2022-12-12 15:28:10'),
(37, 'Ipad', 'Mobile Phone', 'The iPad is a touchscreen tablet PC made by Apple .', '700', 't11670859042.png', '2022-12-12 15:30:42', '2022-12-12 15:30:42'),
(38, 'Smart Watch', 'Watch', 'smartwatch, a small smartphonelike device worn on the wrist. Many smartwatches are connected to a smartphone', '800', 'w11670859614.png', '2022-12-12 15:40:14', '2022-12-12 15:40:14'),
(40, 'iPhone x', 'Mobile Phone', 'A mobile phone, cellular phone, cell phone', '900', 'phone11670859732.png', '2022-12-12 15:42:12', '2022-12-12 15:42:12'),
(42, 'Headphone', 'Head Phones', 'a pair of small loudspeaker drivers worn on or around the head over a user\'s ears', '500', 'h11670860004.png', '2022-12-12 15:46:44', '2022-12-12 15:46:44'),
(53, 'Samsung', 'Mobile Phone', 'A Samsung mobile phone, cellular phone, cell phone', '400', 'phone21671257788.png', '2022-12-17 06:16:28', '2022-12-17 06:16:28'),
(54, 'Television', 'Television', 'A television set or television receiver, more commonly called the television', '800', 'pr81671257864.png', '2022-12-17 06:17:44', '2022-12-17 06:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(7, 'Avik Raj Dey', '01903242321', 'raj34@gmail.com', 'dey_raj456', 'h11671214877.png', '2022-12-16 18:21:17', '2022-12-16 18:21:17'),
(8, 'Sadman Sadik', '0137785322', 'sadikrj34@gmail.com', 'ghyu78', 'pr111671214994.png', '2022-12-16 18:23:14', '2022-12-16 18:23:14'),
(9, 'joy das', '090123222', 'das34@gmail.com', 'erere', 'c41671250777.png', '2022-12-17 04:19:37', '2022-12-17 04:19:37'),
(10, 'asikur Rahman', '09884676232', 'rahman34@gmail.com', 'jkuii344', 'pr31671251722.png', '2022-12-17 04:35:22', '2022-12-17 04:35:22'),
(11, 'galib hasan', '324234234', 'hasan@gmail.com', 'supon22', 'a11671300250.png', '2022-12-17 06:02:16', '2022-12-17 06:02:16');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
