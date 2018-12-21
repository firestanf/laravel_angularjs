-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 02:20 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_todos`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_12_20_095159_create_todo_index_table', 1),
(3, '2018_10_24_161713_create_todo_content_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `todo_content`
--

CREATE TABLE `todo_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `task` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `todo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todo_index`
--

CREATE TABLE `todo_index` (
  `id` int(10) UNSIGNED NOT NULL,
  `todo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `todo_owner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todo_index`
--

INSERT INTO `todo_index` (`id`, `todo_name`, `todo_owner`, `created_at`, `updated_at`) VALUES
(1, 'Test', 1, '2018-12-20 09:59:37', '2018-12-20 09:59:37'),
(2, 'Forsa', 1, '2018-12-20 10:00:26', '2018-12-20 10:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'aqwd', 'the-email@example.com', '$2y$10$5v2/UiBsby34rQ5.YKG3EOvojcbtdND4FhU9Ht7OyuHt0BxBEP3qa', '2018-12-20 09:53:10', '2018-12-20 09:53:10'),
(2, 'asdioqwdnl', 'the-ema.com', '$2y$10$ioBoVPsEPPIExT20Wuab/epd2dZcVUXVkC/SoXJsUXRZlaSOVzA1y', '2018-12-21 05:18:59', '2018-12-21 05:18:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo_content`
--
ALTER TABLE `todo_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todo_content_todo_id_index` (`todo_id`);

--
-- Indexes for table `todo_index`
--
ALTER TABLE `todo_index`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todo_index_todo_owner_foreign` (`todo_owner`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `todo_content`
--
ALTER TABLE `todo_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `todo_index`
--
ALTER TABLE `todo_index`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `todo_content`
--
ALTER TABLE `todo_content`
  ADD CONSTRAINT `todo_content_todo_id_foreign` FOREIGN KEY (`todo_id`) REFERENCES `todo_index` (`id`);

--
-- Constraints for table `todo_index`
--
ALTER TABLE `todo_index`
  ADD CONSTRAINT `todo_index_todo_owner_foreign` FOREIGN KEY (`todo_owner`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
