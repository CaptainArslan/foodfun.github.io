-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 01:09 PM
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
-- Database: `foodfun`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `foodimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `code`, `tagline`, `description`, `price`, `foodimage`, `type`, `special_tagline`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mexican Eggrolls', 'Mexican Eggrolls', NULL, 'Face together given moveth divided form Of Seasons that fruitful.', 15, 'food1.jpg', NULL, '', '2022-06-30 14:51:25', NULL, NULL),
(2, 'Chicken Burger', 'Chicken-Burger', NULL, 'Face together given moveth divided form Of Seasons that fruitful.', 10, 'food2.jpg', NULL, '', '2022-06-30 14:51:25', NULL, NULL),
(3, 'Topu Lasange', 'Topu-Lasange', NULL, 'Face together given moveth divided form Of Seasons that fruitful.', 13, 'food3.jpg', NULL, '', '2022-06-30 14:51:25', NULL, NULL),
(4, 'Pepper Potatoas', 'Pepper-Potatoas', NULL, 'Face together given moveth divided form Of Seasons that fruitful.', 10, 'food4.jpg', 'S', '', '2022-06-30 14:51:25', NULL, NULL),
(5, 'Bean Salad', 'Bean-Salad', NULL, 'Face together given moveth divided form Of Seasons that fruitful.', 10, 'food5.jpg', 'S', '', '2022-06-30 14:51:25', NULL, NULL),
(6, 'Beatball Hoagie', 'Beatball-Hoagie', NULL, 'Face together given moveth divided form Of Seasons that fruitful.', 10, 'food6.jpg', 'S', '', '2022-06-30 14:51:25', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dishes_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
