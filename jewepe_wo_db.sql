-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 09:53 AM
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
  `status` enum('request','approved','rejected') DEFAULT 'request',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `visibility` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `package_id`, `event_date`, `status`, `created_at`, `updated_at`, `visibility`) VALUES
(1, 2, 2, '2024-06-15', 'request', '2024-06-14 10:07:48', '2024-06-15 05:24:11', 0),
(2, 3, 2, '2024-06-16', 'request', '2024-06-14 10:07:48', '2024-08-02 06:11:45', 1),
(3, 4, 2, '2024-06-17', 'rejected', '2024-06-14 10:07:48', '2024-08-02 06:42:12', 1),
(5, 8, 2, '2024-06-19', 'approved', '2024-06-14 10:07:48', '2024-08-02 06:10:22', 1),
(8, 11, 11, '2024-08-10', 'approved', '2024-07-31 16:21:37', '2024-08-02 06:10:52', 1),
(9, 14, 11, '2024-08-13', 'approved', '2024-07-31 16:43:47', '2024-08-02 06:10:53', 1),
(10, 11, 2, '2024-08-27', 'request', '2024-08-01 04:43:09', '2024-08-01 04:43:09', 1),
(11, 17, 11, '2024-08-29', 'approved', '2024-08-02 06:34:39', '2024-08-02 06:43:31', 1),
(12, 17, 11, '2024-09-06', 'rejected', '2024-08-02 06:50:42', '2024-08-02 07:46:51', 1),
(13, 17, 2, '2024-08-27', 'request', '2024-08-02 07:13:14', '2024-08-02 07:18:26', 1);

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
(11, 'SANGJIT AT HOTEL MERCURE PIK', '<p><strong>INCLUDE:</strong></p>\n<ul>\n    <li>Venue at Mercure Pik - Jakarta</li>\n    <li>Set Menu Chinese Food</li>\n    <li>Backdrop Semi Custom</li>\n    <li>8 Standing Gold</li>\n    <li>8 Tray</li>\n    <li>Lighting</li>\n    <li>Shuang Xi</li>\n    <li>Big Ang Pao</li>\n    <li>Gaun Cheongsam & Makeup Hairdo for Bride Sangjit</li>\n    <li>Changsan for Groom</li>\n</ul>\n\n<p><strong>BENEFIT:</strong></p>\n<ul>\n    <li>Hair Accessories Fan for Bride</li>\n    <li>Custom Name for Tray</li>\n    <li>Free 20 Pax Souvenir</li>\n    <li>2 Birdcage</li>\n    <li>2 Standing Gold</li>\n    <li>Etc...</li>\n</ul>', 57500000, '100', 'Jakarta Selatan, DKI Jakarta', '1718431716_80e571c89dea2673d907.webp', '2024-06-15 06:08:36', '2024-07-31 06:11:18'),
(18, 'Plenilunio Wedding Celebration Package for 100 Pax by And Finally', '                                                                                                                                                                                                                                                                <h2 class=\"desktop-only storeitem__content__sectiontitle\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: inherit; font-stretch: inherit; font-size: 20px; line-height: 24px; font-family: \"Figtree SemiBold\", Helvetica, arial, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(37, 37, 37); letter-spacing: 0.19px;\">Detail</h2><div class=\"storeitem__hideshow storeitem__hideshow--description storeitem__hideshow--expanded\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Figtree, Helvetica, arial, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; position: relative; max-height: 9999px; overflow: hidden; transition: 0.8s; white-space-collapse: preserve; width: 1313px; color: rgb(85, 85, 85); letter-spacing: 0.2px;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Wedding Celebration Package by Andfinally - Villa Plenilunio\r\n\r\nVenue Incl ;\r\n▪ Exclusive one-time full use of the venue\r\n▪Two-night stay\r\n▪ Vendor loading & set-up one day before the event\r\n▪ Breakfast for two people per room\r\n▪ 200 custom-made chairs\r\n▪ 25 round crystal tables\r\n▪ Four rectangular wooden tables\r\n▪ One floating stage\r\n▪ Outdoor garden hanging lanterns (16 pcs)\r\n▪ Banjar fee (event fee charged by the local council)\r\n▪ Welcome refreshment\r\n▪ Welcome fruit basket\r\n▪ Daily butler service from 8 AM until 8 PM\r\n▪ Daily housekeeping\r\n▪ Air-conditioned accommodations\r\n▪ In-room amenities\r\n▪ Private safety box in each room\r\n▪ Wi-Fi internet access\r\n▪ Swimming pool\r\n▪ Parking site\r\n\r\nExclude\r\n▪ Security deposit\r\n▪ Tax and Service (5%+11%)\r\n▪ High Season Surcharge Rate\r\n\r\nFood & Beverage Incl ;\r\n▪ Free Flow Canapes 3 Choices for Cocktails\r\n▪ Free Flow Non Alcohol Beverages\r\n▪ 1 soup menu\r\n▪ 2 vegetables dishes menus\r\n▪ 3 main course menus\r\n▪ 1 condiment menu\r\n▪ 2 dessert menus\r\n▪ Inclusions ; Steamed Rice, Mineral Water, Coffee and Tea\r\n▪ Inclusions ; Banquet table (round/rectangular), table cloth, chair, and cutleries\r\n\r\nWedding Decoration Incl ;\r\n▪ Personal flower ; hand bouquet for bride, boutonniere for groom, hand bouquets for bridesmaid, boutonnieres for family, 1 throwing bouquet\r\n▪ Welcome board and seating chart\r\n▪ Registration table\r\n▪ Photo gallery\r\n▪ Ceremony set up\r\n▪ Bridal table set up\r\n▪ Guest table set up\r\n▪ Melamine dance floor with couple initial name\r\n▪ Tent style fairy light\r\n\r\nWedding Planner Service Incl ;\r\n▪ Make budgeting according to your reference of venue, entertainments, decorations, and other vendors. Each of the items can be adjusted based on client’s preferences. \r\n▪ Provide vendors information for wedding event, including negotiation and signing contract with them on behalf of you.\r\n▪ Consulting and give any possible information about vendors which fits your criteria and budget. \r\n▪ Scheduling appointment with vendors & arrange all vendors for technical meeting \r\n▪ Create personalized rundown for your event with your theme and any special moments. (including tradition procession and holy matrimony)\r\n▪ Rehearsal \r\n▪ Organize all vendors on the day of the wedding\r\n▪ Organize on the day of the wedding, starting from morning session, wedding ceremony until the reception done. \r\n\r\nFacilities Incl :  \r\n1. Sticker Shuang Xi (double happiness) for bedrooms\r\n2. 2 bowls for Bride & Groom to eat noodles, including noodles & eggs \r\n3. Tea pay ceremony set, including tea & Chinese teapot\r\n4. Plastic and name labels for Tea pay presents (red envelopes / angpao)\r\n5. Spun bond bags for saving presents such as ang pao, Tea pay presents, etc.\r\n6. Provide any common properties for gate crush\r\n7. Double Happiness cufflink for Grooms shirt\r\n8. Other equipment, like sewing tool, medicines, etc.\r\n\r\nThank you, and we are looking forward to contribute on your happiest moment\r\n\r\nWith Love,\r\nAnd Finally</p></div>                                                                                                                                                                                                                                ', 355539550, '250', 'Bali, IDN', '1722582476_770a29b604819282b4c8.webp', '2024-08-02 07:07:56', '2024-08-02 07:39:05');

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
(3, 'adomin@gmail.com', '$2y$10$2vyMeZY/4pwDYZ2C8flmN.K5Ikn3oeujsU7U1AzGahPSY8jyIGgiW', 'Adomin', 'admin', '2024-06-13 04:18:03', '2024-08-02 03:52:20'),
(4, 'user1@gmail.com', '$2y$10$jIJuLEciRDO40mrImrLw.O4DoZF3qzMJMUWY3ymL.LQXy.k72V2S6', 'User1', 'user', '2024-06-13 04:21:21', '2024-06-14 02:05:04'),
(8, 'newuser@gmail.com', '$2y$10$s4ZmvdV1PT40dKoFqt4vr.5r7KTfMuX79nOYsE4gCvEW1iAmtoIbS', 'Newuser', 'user', '2024-06-14 04:22:16', '2024-06-14 04:22:16'),
(11, 'Test12444@gmail.com', '$2y$10$rycNnYPTs3duKewOUPudL.z4qCCLjR0BcW9v2D.N2Td8G7e.R3JtS', 'Test12444', 'user', '2024-07-13 11:05:42', '2024-07-31 09:15:58'),
(14, 'testsets@gmail.com', '$2y$10$ReYNHJsbrSO5TDqx6vN/dOcVGwG/LD2iq5TvDXTT0gXNy5UjWcJEO', 'testsets', 'user', '2024-07-31 09:12:43', '2024-07-31 09:12:43'),
(15, 'lesgo@gmail.com', '$2y$10$WFlLPtY0JE0RNmxNEEQ4MukCJsNUzi1rBhwcgxvGS21NYiCtM5E4a', 'lesgo', 'user', '2024-07-31 18:48:49', '2024-07-31 18:48:49'),
(17, 'user123@gmail.com', '$2y$10$qYl4nIGGfjVF2ciWTXUyf.SRIzU/Tg86e58TC2MmPR7whTpzJ4YLG', 'user123', 'user', '2024-08-02 06:32:51', '2024-08-02 06:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `prof_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `vision` varchar(255) DEFAULT NULL,
  `successful_marriage` int(5) DEFAULT NULL,
  `satisfied_customer` int(5) DEFAULT NULL,
  `guests` int(5) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`prof_id`, `description`, `vision`, `successful_marriage`, `satisfied_customer`, `guests`, `updated_at`) VALUES
(1, 'We are a dedicated team of experienced professionals passionate about turning your dreams into reality. With meticulous attention to detail and a deep commitment to customer satisfaction, we specialize in crafting personalized, seamless, and extraordinary', 'Our vision is to be the leading platform for couples seeking to transform their wedding day into a cherished masterpiece. We strive to set new standards in the wedding planning industry by delivering unparalleled service, innovative ideas, and flawless ex', 255, 521, 1453, '2024-07-30 07:01:03');

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
