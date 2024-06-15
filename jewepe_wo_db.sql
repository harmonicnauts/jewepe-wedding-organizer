-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 08:42 PM
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
-- Database: `jewepe_wo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `special_requests` text DEFAULT NULL,
  `status` enum('request','approved') DEFAULT 'request',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `package_id`, `event_date`, `special_requests`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2024-06-15', 'No special requests', 'approved', '2024-06-14 10:07:48', '2024-06-14 10:47:31'),
(2, 3, 2, '2024-06-16', 'Vegetarian meal preferred', 'approved', '2024-06-14 10:07:48', '2024-06-14 10:07:48'),
(3, 4, 2, '2024-06-17', 'Extra blankets needed', 'request', '2024-06-14 10:07:48', '2024-06-14 10:07:48'),
(4, 6, 2, '2024-06-18', 'No special requests', 'request', '2024-06-14 10:07:48', '2024-06-14 10:07:48'),
(5, 8, 2, '2024-06-19', 'Late checkout requested', 'approved', '2024-06-14 10:07:48', '2024-06-14 10:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `capacity` varchar(100) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `name`, `description`, `price`, `capacity`, `location`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Test paket 1', 'Test add image', 20000, '100', 'Jakarta Barat, DKI Jakarta', '1718274482_b1f44644be6816b28b0a.png', '2024-06-13 10:28:02', '2024-06-14 16:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `role`, `created_at`, `updated_at`) VALUES
(2, 'test@gmail.com', '$2y$10$hRI1yA2SwgvP7L8.FXkTKuYKgZZLpgiHlrdhEZ1m8hHUEEa0hKSSm', 'Test123', 'admin', '2024-06-13 04:17:31', '2024-06-14 02:05:04'),
(3, 'adomin@gmail.com', '$2y$10$exysQP7CLPbqbpFgasmqJuWd3INH9rapcV4EKyrXjAFCgLZKfLisq', 'Adomin', 'admin', '2024-06-13 04:18:03', '2024-06-13 18:31:43'),
(4, 'user1@gmail.com', '$2y$10$jIJuLEciRDO40mrImrLw.O4DoZF3qzMJMUWY3ymL.LQXy.k72V2S6', 'User1', 'user', '2024-06-13 04:21:21', '2024-06-14 02:05:04'),
(6, 'abc123@gmail.com', '$2y$10$yU0.lHvPXk8JX8c6nXEEzuR7tb5QC0mBdc9n0MA921aLOslIxv.LC', 'abc123', 'user', '2024-06-13 00:53:38', '2024-06-14 07:07:30'),
(8, 'newuser@gmail.com', '$2y$10$s4ZmvdV1PT40dKoFqt4vr.5r7KTfMuX79nOYsE4gCvEW1iAmtoIbS', 'Newuser', 'user', '2024-06-14 04:22:16', '2024-06-14 04:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `prof_id` int(11) NOT NULL,
  `hero_image_path` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description_image_path` varchar(255) DEFAULT NULL,
  `vision` varchar(255) DEFAULT NULL,
  `vision_image_path` varchar(255) DEFAULT NULL,
  `successful_marriage` int(5) DEFAULT NULL,
  `satisfied_customer` int(5) DEFAULT NULL,
  `guests` int(5) DEFAULT NULL,
  `catalogue_redir_image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`prof_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
