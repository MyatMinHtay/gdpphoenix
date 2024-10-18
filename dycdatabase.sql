-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 02:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'reading', NULL, NULL),
(2, 'happy', NULL, NULL),
(4, 'music', '2024-08-30 12:29:03', '2024-09-01 00:23:27'),
(5, 'business', '2024-09-01 00:23:38', '2024-09-01 00:23:38'),
(6, 'brain', '2024-09-01 01:36:56', '2024-09-01 01:36:56'),
(7, 'fanny', '2024-09-01 01:37:03', '2024-09-01 01:37:03'),
(8, 'motication', '2024-09-01 01:37:11', '2024-09-01 01:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_29_101512_create_videos_table', 2),
(5, '2024_08_29_102224_create_categories_table', 2),
(6, '2024_08_29_104822_create_video_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rfhOoHYG9In8owHHtrbYmDiZA6tcVklONGiD7Vjr', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicWJweXoyZ3VmOVRoYXlzWmQwVXBydUJ3ZVNwZHNpSkhUNkRabllYUSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1727502690),
('s27FfnBFGUXmBn3uwV4O7ONcgHPEOP2vl7ZTwCLW', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZTdMUVZqTXg0NFZjWFg4ckxycGVPM2taTkt6bnlZRGJzTHY2d0g3eCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1727498507),
('tqiaQ1wortFk4ytH0eeSO08qPVTjY6qDZ6vR36EA', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibVk5WmhvZmxhb0s2bllRZlJqelZ2QmR1NU9pZFhrZ2ZhbldWNlZuRyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1727526450);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive','','') NOT NULL DEFAULT 'active',
  `userphoto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `status`, `userphoto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'htoo', 'aa@gmail.com', NULL, 'Hello@2024', 'active', NULL, NULL, NULL, NULL),
(2, 'aung', 'aung@gmail.com', NULL, '$2y$12$4fAh3QQiIalE4F0Kmg0KreYQPahOouevkgxRD97J7PSVauXkQZPoy', 'active', NULL, 'CrROVplOKQ8H91l3OBRQXfBAqNIoNfZ7tzbi2vPGMRSx01YxzQ3dX9XpFuIQ', '2024-08-27 05:55:42', '2024-08-27 05:55:42'),
(3, 'mgmg', 'mi@gmail.com', NULL, '$2y$12$5XklngXM30NIz0vIqK9by.J1VIozEe7siA9dRgyPtWsPnamMBjEee', 'active', NULL, NULL, '2024-08-27 06:04:17', '2024-08-27 06:04:17'),
(4, 'HlaHla', 'hla@gmail.com', NULL, '$2y$12$FItbgpR8L39GYDBhuaAeVum65lcdoQkWt5FXlzKeDUqwnN6Pm.wSm', 'active', './assets/avatars/14ea0d5b0cf49525d1866cb1e95ada5d.jpg', 'qN3qXUyg2pIBjfhzdf5XSAPpCl5Y9C9SjIy62AmKfHq7tX7SDYoNvGlz1l8p', '2024-08-27 06:07:07', '2024-08-27 06:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `videotitle` varchar(255) NOT NULL,
  `videoslug` varchar(255) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `videothumbnail` varchar(255) NOT NULL,
  `videodescription` longtext NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `videotitle`, `videoslug`, `videolink`, `videothumbnail`, `videodescription`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'How to get one million dollar', 'onemilliondollar', 'https://www.youtube.com/embed/t4H_Zoh7G5A?si=iW3jC6mheS6n_sUL', './assets/thumbnails/42d0c639a21482dcd8e1c447efe87e89.jpg', 'all is good', 'aung', '2024-09-01 00:08:23', '2024-09-01 00:08:35'),
(6, 'Healing', 'healingmusic', 'https://www.youtube.com/embed/XRuDQ6aYeD0?si=qePqorD2I6h7s9Bq', './assets/thumbnails/daea32adcae6abcb548134fa98f139f9.png', 'healing for everyone', 'aung', '2024-09-01 00:24:20', '2024-09-01 00:24:20'),
(7, 'top 5 shock', 'topfiveshock', 'https://www.youtube.com/embed/uvbp2B0X1w8?si=bub_mzpK_xaWnt7E', './assets/thumbnails/ad7ed5d47b9baceb12045a929e7e2f66.png', 'top 5 shock', 'aung', '2024-09-01 00:45:11', '2024-09-01 00:45:11'),
(8, 'top10shock', 'top10shock', 'https://www.youtube.com/embed/E3x_dLVTEuA?si=YeYW4xDn3KhEzSGy', './assets/thumbnails/a4351b79d9ea3d842efa89fae5d02b24.png', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, repudiandae deleniti magni ut, libero totam dicta ratione incidunt magnam perspiciatis a fugit dolores! Perferendis sequi aliquid amet ipsa minus error!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, repudiandae deleniti magni ut, libero totam dicta ratione incidunt magnam perspiciatis a fugit dolores! Perferendis sequi aliquid amet ipsa minus error!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, repudiandae deleniti magni ut, libero totam dicta ratione incidunt magnam perspiciatis a fugit dolores! Perferendis sequi aliquid amet ipsa minus error!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, repudiandae deleniti magni ut, libero totam dicta ratione incidunt magnam perspiciatis a fugit dolores! Perferendis sequi aliquid amet ipsa minus error!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, repudiandae deleniti magni ut, libero totam dicta ratione incidunt magnam perspiciatis a fugit dolores! Perferendis sequi aliquid amet ipsa minus error!', 'aung', '2024-09-01 00:45:37', '2024-09-01 00:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `video_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 5, 1, '2024-09-01 00:08:35', '2024-09-01 00:08:35'),
(13, 5, 2, '2024-09-01 00:08:35', '2024-09-01 00:08:35'),
(14, 6, 1, '2024-09-01 00:24:20', '2024-09-01 00:24:20'),
(15, 6, 2, '2024-09-01 00:24:20', '2024-09-01 00:24:20'),
(16, 6, 5, '2024-09-01 00:24:20', '2024-09-01 00:24:20'),
(18, 8, 2, '2024-09-01 00:45:37', '2024-09-01 00:45:37'),
(19, 8, 4, '2024-09-01 00:45:37', '2024-09-01 00:45:37'),
(20, 7, 2, '2024-09-01 02:32:09', '2024-09-01 02:32:09'),
(21, 7, 7, '2024-09-01 02:32:09', '2024-09-01 02:32:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `videoslug` (`videoslug`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_categories_video_id_foreign` (`video_id`),
  ADD KEY `video_categories_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD CONSTRAINT `video_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `video_categories_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
