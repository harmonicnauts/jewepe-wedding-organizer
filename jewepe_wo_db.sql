-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 09:12 PM
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
  `status` enum('request','approved') DEFAULT 'request',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `visibility` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `package_id`, `event_date`, `status`, `created_at`, `updated_at`, `visibility`) VALUES
(1, 2, 2, '2024-06-15', 'request', '2024-06-14 10:07:48', '2024-06-15 05:24:11', 0),
(2, 3, 2, '2024-06-16', 'approved', '2024-06-14 10:07:48', '2024-06-14 10:07:48', 1),
(3, 4, 2, '2024-06-17', 'request', '2024-06-14 10:07:48', '2024-06-15 06:31:39', 1),
(5, 8, 2, '2024-06-19', 'approved', '2024-06-14 10:07:48', '2024-07-30 09:23:40', 1),
(8, 11, 11, '2024-08-10', 'approved', '2024-07-31 16:21:37', '2024-07-31 16:22:02', 1),
(9, 14, 11, '2024-08-13', 'request', '2024-07-31 16:43:47', '2024-07-31 16:43:47', 1);

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
(2, 'Paket Lengkap', '                                                                                                                                <p><strong>BEFORE THE WEDDING</strong></p>\r\n<ul>\r\n    <li>Assist in selecting Venue Options</li>\r\n    <li>Budget preparation</li>\r\n    <li>Assisting in selecting and arranging other wedding vendors such as (decor, F&B arrangements, photo and video, entertainment, production, hair, and makeup, etc.)</li>\r\n    <li>Liaise with all vendors and venue management prior to the wedding for logistics, etc.</li>\r\n    <li>Assist in making itinerary for any pre-wedding visits such as venue inspection, vendor visit, food tasting, and makeup trial</li>\r\n    <li>Developing rundown and wedding checklist</li>\r\n    <li>Final meeting with all vendors and venue management</li>\r\n    <li>Assist in wedding rehearsal at the wedding venue</li>\r\n</ul>\r\n\r\n<p><strong>WEDDING DAY</strong></p>\r\n<ul>\r\n    <li>Coordinate and standby on the day of the event</li>\r\n    <li>Making sure all the vendors involved arrive in a timely manner</li>\r\n    <li>Organizing guest transportation from hotel to the wedding venue (VEHICLE NOT INCLUDED; however, we have transportation service at an additional charge)</li>\r\n    <li>Other services related to the wedding, in general, that have been mutually agreed upon among parties</li>\r\n</ul>\r\n\r\n<p><strong>OUR TEAM WILL BE INVOLVED:</strong></p>\r\n<ul>\r\n    <li>Bride assistant</li>\r\n    <li>Groom assistance</li>\r\n    <li>Family Assistance</li>\r\n    <li>Bridesmaid Assistance</li>\r\n    <li>Groomsmen assistance</li>\r\n    <li>Coordinators for F&B, Decoration, Audio & Visual, Guest Transport & Accommodation</li>\r\n    <li>Production assistant</li>\r\n</ul>\r\n                                                                                                                ', 70000000, '100', 'Jakarta Barat, DKI Jakarta', '1718431912_f78c85597e55c04fa00e.webp', '2024-06-13 10:28:02', '2024-07-31 07:47:59'),
(11, 'SANGJIT AT HOTEL MERCURE PIK', '<p><strong>INCLUDE:</strong></p>\n<ul>\n    <li>Venue at Mercure Pik - Jakarta</li>\n    <li>Set Menu Chinese Food</li>\n    <li>Backdrop Semi Custom</li>\n    <li>8 Standing Gold</li>\n    <li>8 Tray</li>\n    <li>Lighting</li>\n    <li>Shuang Xi</li>\n    <li>Big Ang Pao</li>\n    <li>Gaun Cheongsam & Makeup Hairdo for Bride Sangjit</li>\n    <li>Changsan for Groom</li>\n</ul>\n\n<p><strong>BENEFIT:</strong></p>\n<ul>\n    <li>Hair Accessories Fan for Bride</li>\n    <li>Custom Name for Tray</li>\n    <li>Free 20 Pax Souvenir</li>\n    <li>2 Birdcage</li>\n    <li>2 Standing Gold</li>\n    <li>Etc...</li>\n</ul>', 57500000, '100', 'Jakarta Selatan, DKI Jakarta', '1718431716_80e571c89dea2673d907.webp', '2024-06-15 06:08:36', '2024-07-31 06:11:18');

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
(2, 'wadawilang123@gmail.com', '$2y$10$QAzEhhIygX4a6fSSZuAnDebwcriFy9kxueVEc3YFTc9gFs6HQBDvi', 'wadawilang123', 'admin', '2024-06-13 04:17:31', '2024-07-31 07:31:58'),
(3, 'adomin@gmail.com', '$2y$10$exysQP7CLPbqbpFgasmqJuWd3INH9rapcV4EKyrXjAFCgLZKfLisq', 'Adomin', 'admin', '2024-06-13 04:18:03', '2024-06-13 18:31:43'),
(4, 'user1@gmail.com', '$2y$10$jIJuLEciRDO40mrImrLw.O4DoZF3qzMJMUWY3ymL.LQXy.k72V2S6', 'User1', 'user', '2024-06-13 04:21:21', '2024-06-14 02:05:04'),
(8, 'newuser@gmail.com', '$2y$10$s4ZmvdV1PT40dKoFqt4vr.5r7KTfMuX79nOYsE4gCvEW1iAmtoIbS', 'Newuser', 'user', '2024-06-14 04:22:16', '2024-06-14 04:22:16'),
(11, 'Test12444@gmail.com', '$2y$10$rycNnYPTs3duKewOUPudL.z4qCCLjR0BcW9v2D.N2Td8G7e.R3JtS', 'Test12444', 'user', '2024-07-13 11:05:42', '2024-07-31 09:15:58'),
(14, 'testsets@gmail.com', '$2y$10$ReYNHJsbrSO5TDqx6vN/dOcVGwG/LD2iq5TvDXTT0gXNy5UjWcJEO', 'testsets', 'user', '2024-07-31 09:12:43', '2024-07-31 09:12:43'),
(15, 'lesgo@gmail.com', '$2y$10$WFlLPtY0JE0RNmxNEEQ4MukCJsNUzi1rBhwcgxvGS21NYiCtM5E4a', 'lesgo', 'user', '2024-07-31 18:48:49', '2024-07-31 18:48:49');

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
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`prof_id`, `hero_image_path`, `description`, `title`, `description_image_path`, `vision`, `vision_image_path`, `successful_marriage`, `satisfied_customer`, `guests`, `catalogue_redir_image`, `updated_at`) VALUES
(1, NULL, 'We are a dedicated team of experienced professionals passionate about turning your dreams into reality. With meticulous attention to detail and a deep commitment to customer satisfaction, we specialize in crafting personalized, seamless, and extraordinary', NULL, NULL, 'Our vision is to be the leading platform for couples seeking to transform their wedding day into a cherished masterpiece. We strive to set new standards in the wedding planning industry by delivering unparalleled service, innovative ideas, and flawless ex', NULL, 255, 521, 1453, NULL, '2024-07-30 07:01:03');

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
