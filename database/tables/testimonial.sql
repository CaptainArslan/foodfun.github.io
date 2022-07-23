-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 01:08 PM
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
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `userid`, `name`, `userimage`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'adam nahan', 'customer1.png', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '2022-07-14 11:06:09', NULL),
(2, 2, 'adam nahan', 'customer2.png', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '2022-07-14 11:06:09', NULL),
(3, 3, 'adam nahan', 'customer1.png', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '2022-07-14 11:06:09', NULL),
(4, 5, 'adam nahan', 'customer1.png', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '2022-07-14 11:06:09', NULL),
(5, 4, 'adam nahan', 'customer1.png', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '2022-07-14 11:06:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
