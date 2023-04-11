-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2023 at 11:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axiever`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2021_09_04_152151_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `name`, `state`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'task 1', '0', 'to-do', '2023-04-10 15:07:16', '2023-04-11 03:31:43'),
(2, 4, 'task 2 update', '0', 'completed', '2023-04-10 15:07:29', '2023-04-11 01:51:08'),
(4, 4, 'task 4', '0', 'to-do', '2023-04-10 15:44:12', '2023-04-10 15:44:12'),
(5, 4, 'task 5', '0', 'to-do', '2023-04-10 15:44:18', '2023-04-11 01:51:13'),
(6, 4, 'task 6', '0', 'in progress', '2023-04-10 15:44:25', '2023-04-11 01:52:23'),
(7, 4, 'task 7', '1', 'to-do', '2023-04-10 15:44:40', '2023-04-11 01:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdoul karim', 'test@gmail.com', '$2y$10$wSMzEAqz6/lN0nAmyJpE4O2bDfVN7POrd7nBbjZO.679wVzLw10b.', NULL, NULL, '2022-04-03 04:38:48', '2022-04-03 04:38:48'),
(2, 'pooja br', 'pooja@gmail.com', '$2y$10$xFuN6oJvvThq3NGp2LXgleIIAzYXh8nyBZ1FoJ8SLqIZUNuvM2iL2', NULL, NULL, '2022-04-03 12:04:22', '2022-04-03 12:04:22'),
(3, 'paul', 'paul@gmail.com', '$2y$10$7Q6zCT3k/BXP2LsqBH4o5uPBhResO8WuYuELOVdgRx.WZ8f3hWd.a', NULL, NULL, '2022-04-03 12:36:55', '2022-04-03 12:36:55'),
(4, 'moi', 'moi@gmail.com', '$2y$10$9UMa6HKjofIkxFeAhzsQFOhJtPNgeWton0YCiUjYgziYdXH1BM18a', NULL, NULL, '2023-04-10 14:07:28', '2023-04-10 14:07:28'),
(5, 'abdoul', 'kouroumadev@gmail.com', '$2y$10$YYBCE29tXPfYoV41Qcucpu3gfoZsBZaMbhbZMkrHv3AStN1.IaWXa', NULL, NULL, '2023-04-11 03:28:42', '2023-04-11 03:28:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
