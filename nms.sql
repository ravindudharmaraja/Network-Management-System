-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 04:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nms`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `community` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `oid`, `host`, `community`, `type`, `created_at`, `updated_at`) VALUES
(1, '128.199.232.123', '128.199.232.123', 'public', 'pc', NULL, NULL),
(2, '3.54.54.654.7', '188.166.145.97', 'public', 'pc', NULL, NULL),
(3, '1.3.5.6.7.8', '193.33.186.700', 'dsdas', 'switch', NULL, NULL),
(4, '1.0.2.1.0', '193.33.186.70', 'public', 'router', NULL, NULL),
(5, '1.0.2.0.1.2', '193.33.186.50', 'public', 'switch', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_c_p_u_s`
--

CREATE TABLE `device_c_p_u_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `did` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_c_p_u_s`
--

INSERT INTO `device_c_p_u_s` (`id`, `did`, `usage`, `created_at`, `updated_at`) VALUES
(1, '1', 50, NULL, NULL),
(2, '1', 40, NULL, NULL),
(3, '1', 80, NULL, NULL),
(4, '1', 20, NULL, NULL),
(5, '1', 30, NULL, NULL),
(6, '1', 20, NULL, NULL),
(7, '1', 90, NULL, NULL),
(8, '1', 40, NULL, NULL),
(9, '1', 50, NULL, NULL),
(10, '1', 40, NULL, NULL),
(11, '10', 1, NULL, NULL),
(12, '10', 424456, NULL, NULL),
(13, '10', 21, NULL, NULL),
(14, '100', 21, NULL, NULL),
(15, '100', 21, NULL, NULL),
(16, '128.199.232.123', 0, NULL, NULL),
(17, '128.199.232.123', 0, NULL, NULL),
(18, '128.199.232.123', 0, NULL, NULL),
(19, '128.199.232.123', 0, NULL, NULL),
(20, '128.199.232.123', 0.2, NULL, NULL),
(21, '128.199.232.123', 0.41, NULL, NULL),
(22, '128.199.232.123', 0, NULL, NULL),
(23, '128.199.232.123', 0, NULL, NULL),
(24, '128.199.232.123', 0, NULL, NULL),
(25, '128.199.232.123', 0, NULL, NULL),
(26, '128.199.232.123', 0, NULL, NULL),
(27, '128.199.232.123', 0, NULL, NULL),
(28, '128.199.232.123', 0, NULL, NULL),
(29, '128.199.232.123', 0, NULL, NULL),
(30, '128.199.232.123', 0, NULL, NULL),
(31, '128.199.232.123', 0, NULL, NULL),
(32, '128.199.232.123', 0, NULL, NULL),
(33, '128.199.232.123', 0, NULL, NULL),
(34, '128.199.232.123', 0, NULL, NULL),
(35, '128.199.232.123', 0, NULL, NULL),
(36, '128.199.232.123', 0.03, NULL, NULL),
(37, '188.166.145.97', 0, NULL, NULL),
(38, '128.199.232.123', 0.03, NULL, NULL),
(39, '188.166.145.97', 0, NULL, NULL),
(40, '128.199.232.123', 0, NULL, NULL),
(41, '188.166.145.97', 0, NULL, NULL),
(42, '128.199.232.123', 0, NULL, NULL),
(43, '188.166.145.97', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_networks`
--

CREATE TABLE `device_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `did` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send` float NOT NULL,
  `recv` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_networks`
--

INSERT INTO `device_networks` (`id`, `did`, `send`, `recv`, `created_at`, `updated_at`) VALUES
(1, '1', 40, 0, NULL, NULL),
(2, '1', 30, 0, NULL, NULL),
(3, '1', 20, 0, NULL, NULL),
(4, '1', 30, 0, NULL, NULL),
(5, '1', 70, 0, NULL, NULL),
(6, '1', 20, 0, NULL, NULL),
(7, '1', 20, 0, NULL, NULL),
(8, '1', 70, 0, NULL, NULL),
(9, '1', 30, 0, NULL, NULL),
(10, '1', 56, 0, NULL, NULL),
(11, '1', 45, 0, NULL, NULL),
(12, '1', 85, 0, NULL, NULL),
(13, '128.199.232.123', 10, 0, NULL, NULL),
(14, '128.199.232.123', 25, 0, NULL, NULL),
(15, '128.199.232.123', 4.72991, 1.30297, NULL, NULL),
(16, '128.199.232.123', 4.72992, 1.30297, NULL, NULL),
(17, '128.199.232.123', 4.73041, 1.30312, NULL, NULL),
(18, '128.199.232.123', 4.73042, 1.30312, NULL, NULL),
(19, '128.199.232.123', 4.73156, 1.30361, NULL, NULL),
(20, '188.166.145.97', 0.000904592, 0.0638206, NULL, NULL),
(21, '128.199.232.123', 4.73156, 1.30362, NULL, NULL),
(22, '188.166.145.97', 0.000905043, 0.0638211, NULL, NULL),
(23, '128.199.232.123', 4.73192, 1.30378, NULL, NULL),
(24, '188.166.145.97', 0.00108814, 0.0639479, NULL, NULL),
(25, '128.199.232.123', 4.73192, 1.30378, NULL, NULL),
(26, '188.166.145.97', 0.00109197, 0.06395, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_r_a_m_s`
--

CREATE TABLE `device_r_a_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `did` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_r_a_m_s`
--

INSERT INTO `device_r_a_m_s` (`id`, `did`, `usage`, `created_at`, `updated_at`) VALUES
(1, '1', 80, NULL, NULL),
(2, '1', 25, NULL, NULL),
(3, '1', 10, NULL, NULL),
(4, '1', 45, NULL, NULL),
(5, '1', 48, NULL, NULL),
(6, '1', 26, NULL, NULL),
(7, '1', 58, NULL, NULL),
(8, '1', 47, NULL, NULL),
(9, '1', 58, NULL, NULL),
(10, '1', 47, NULL, NULL),
(11, '128.199.232.123', 21, NULL, NULL),
(12, '128.199.232.123', 21, NULL, NULL),
(13, '128.199.232.123', 21, NULL, NULL),
(14, '128.199.232.123', 21, NULL, NULL),
(15, '128.199.232.123', 21, NULL, NULL),
(16, '128.199.232.123', 21, NULL, NULL),
(17, '128.199.232.123', 21, NULL, NULL),
(18, '128.199.232.123', 21, NULL, NULL),
(19, '128.199.232.123', 21, NULL, NULL),
(20, '128.199.232.123', 21, NULL, NULL),
(21, '128.199.232.123', 20, NULL, NULL),
(22, '128.199.232.123', 20, NULL, NULL),
(23, '128.199.232.123', 20, NULL, NULL),
(24, '128.199.232.123', 20, NULL, NULL),
(25, '128.199.232.123', 20, NULL, NULL),
(26, '128.199.232.123', 23, NULL, NULL),
(27, '128.199.232.123', 20, NULL, NULL),
(28, '128.199.232.123', 22, NULL, NULL),
(29, '128.199.232.123', 20, NULL, NULL),
(30, '128.199.232.123', 20, NULL, NULL),
(31, '128.199.232.123', 20, NULL, NULL),
(32, '128.199.232.123', 20, NULL, NULL),
(33, '128.199.232.123', 20, NULL, NULL),
(34, '128.199.232.123', 20, NULL, NULL),
(35, '128.199.232.123', 20, NULL, NULL),
(36, '128.199.232.123', 20, NULL, NULL),
(37, '128.199.232.123', 20, NULL, NULL),
(38, '128.199.232.123', 20, NULL, NULL),
(39, '128.199.232.123', 20, NULL, NULL),
(40, '128.199.232.123', 20, NULL, NULL),
(41, '128.199.232.123', 20, NULL, NULL),
(42, '128.199.232.123', 20, NULL, NULL),
(43, '128.199.232.123', 20, NULL, NULL),
(44, '188.166.145.97', 53, NULL, NULL),
(45, '128.199.232.123', 20, NULL, NULL),
(46, '188.166.145.97', 53, NULL, NULL),
(47, '128.199.232.123', 20, NULL, NULL),
(48, '188.166.145.97', 53, NULL, NULL),
(49, '128.199.232.123', 20, NULL, NULL),
(50, '188.166.145.97', 53, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_storages`
--

CREATE TABLE `device_storages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `did` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_storages`
--

INSERT INTO `device_storages` (`id`, `did`, `usage`, `created_at`, `updated_at`) VALUES
(1, '1', 28, NULL, NULL),
(2, '1', 45, NULL, NULL),
(3, '1', 65, NULL, NULL),
(4, '1', 75, NULL, NULL),
(5, '1', 69, NULL, NULL),
(6, '1', 47, NULL, NULL),
(7, '1', 69, NULL, NULL),
(8, '1', 47, NULL, NULL),
(9, '1', 69, NULL, NULL),
(10, '1', 47, NULL, NULL),
(11, '1', 69, NULL, NULL),
(12, '1', 47, NULL, NULL),
(13, '128.199.232.123', 4, NULL, NULL),
(14, '128.199.232.123', 4, NULL, NULL),
(15, '128.199.232.123', 4, NULL, NULL),
(16, '128.199.232.123', 4, NULL, NULL),
(17, '128.199.232.123', 4, NULL, NULL),
(18, '128.199.232.123', 4, NULL, NULL),
(19, '128.199.232.123', 4, NULL, NULL),
(20, '128.199.232.123', 4, NULL, NULL),
(21, '128.199.232.123', 4, NULL, NULL),
(22, '128.199.232.123', 4, NULL, NULL),
(23, '128.199.232.123', 4, NULL, NULL),
(24, '128.199.232.123', 4, NULL, NULL),
(25, '128.199.232.123', 4, NULL, NULL),
(26, '128.199.232.123', 4, NULL, NULL),
(27, '128.199.232.123', 4, NULL, NULL),
(28, '128.199.232.123', 4, NULL, NULL),
(29, '128.199.232.123', 4, NULL, NULL),
(30, '128.199.232.123', 4, NULL, NULL),
(31, '128.199.232.123', 4, NULL, NULL),
(32, '128.199.232.123', 4, NULL, NULL),
(33, '128.199.232.123', 4, NULL, NULL),
(34, '128.199.232.123', 4, NULL, NULL),
(35, '128.199.232.123', 4, NULL, NULL),
(36, '128.199.232.123', 4, NULL, NULL),
(37, '128.199.232.123', 4, NULL, NULL),
(38, '128.199.232.123', 4, NULL, NULL),
(39, '128.199.232.123', 4, NULL, NULL),
(40, '128.199.232.123', 4, NULL, NULL),
(41, '128.199.232.123', 4, NULL, NULL),
(42, '128.199.232.123', 4, NULL, NULL),
(43, '128.199.232.123', 4, NULL, NULL),
(44, '128.199.232.123', 4, NULL, NULL),
(45, '188.166.145.97', 0, NULL, NULL),
(46, '128.199.232.123', 4, NULL, NULL),
(47, '188.166.145.97', 0, NULL, NULL),
(48, '128.199.232.123', 4, NULL, NULL),
(49, '188.166.145.97', 0, NULL, NULL),
(50, '128.199.232.123', 4, NULL, NULL),
(51, '188.166.145.97', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_02_12_081254_create_devices_table', 2),
(4, '2021_02_14_170633_create_device_c_p_u_s_table', 3),
(5, '2021_02_14_170746_create_device_r_a_m_s_table', 3),
(6, '2021_02_14_170807_create_device_storages_table', 3),
(7, '2021_02_14_170833_create_device_networks_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$x6EBMRRSXRTgRIQCU92ES.EG2dPZ1sOfglIn99k7Jgl9FyDMj9uLS', 'w9aDYeUHRsT5vP7cvFIdGkOHQ48dDu3tXyJJjbJkTO3oqQOIwoN0fslVuImQ', '2021-02-10 01:41:23', '2021-02-10 01:41:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_c_p_u_s`
--
ALTER TABLE `device_c_p_u_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_networks`
--
ALTER TABLE `device_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_r_a_m_s`
--
ALTER TABLE `device_r_a_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_storages`
--
ALTER TABLE `device_storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `device_c_p_u_s`
--
ALTER TABLE `device_c_p_u_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `device_networks`
--
ALTER TABLE `device_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `device_r_a_m_s`
--
ALTER TABLE `device_r_a_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `device_storages`
--
ALTER TABLE `device_storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
