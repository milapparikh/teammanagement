-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 06:21 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teammanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(75) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `country_id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ahmedabad', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(2, 1, 'bomaby', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(3, 1, 'chennai', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(4, 1, 'surat', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(5, 2, 'sydney', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(6, 2, 'melbourne', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(7, 2, 'brisbane', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(8, 2, 'perth', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(9, 3, 'helsinki', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(10, 3, 'espoo', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(11, 3, 'tampere', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(12, 3, 'vantaa', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(13, 4, 'new york', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(14, 4, 'los angeles', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(15, 4, 'chicago', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(16, 4, 'houston', '2020-06-01 07:36:28', '2020-06-01 07:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(2) NOT NULL,
  `country_name` varchar(75) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countrys`
--

INSERT INTO `countrys` (`id`, `code`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'IN', 'India', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(2, 'AU', 'Australia', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(3, 'FI', 'Finland', '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(4, 'US', 'United States', '2020-06-01 07:36:28', '2020-06-01 07:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_05_23_133433_create_roles_table', 1),
(10, '2020_05_23_133447_add_roles_to_users_table', 1),
(11, '2020_05_23_133505_create_teams_table', 1),
(12, '2020_05_23_133514_create_teamplayers_table', 1),
(13, '2020_05_26_004114_create_countrys_table', 1),
(14, '2020_05_26_004124_create_citys_table', 1),
(15, '2020_05_26_004133_create_userdetails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'adminmanager', 'registered as managers', '2020-06-01 07:36:27', '2020-06-01 07:36:27'),
(2, 'player', 'registered as players', '2020-06-01 07:36:27', '2020-06-01 07:36:27'),
(3, 'teamowner', 'registered as owners', '2020-06-01 07:36:27', '2020-06-01 07:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `teamplayers`
--

CREATE TABLE `teamplayers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `created_by_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `created_by_user_id`, `created_at`, `updated_at`) VALUES
(1, 'rajasthanroyal', 2, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(2, 'chennaisuperkings', 3, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(3, 'banglore', 5, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(4, 'gujarattigers', 4, '2020-06-01 07:36:28', '2020-06-01 07:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `identification` varchar(255) DEFAULT NULL,
  `postal_code` varchar(100) NOT NULL,
  `parent_phone_email` varchar(250) NOT NULL,
  `birth_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `user_id`, `country_id`, `city_id`, `first_name`, `last_name`, `gender`, `identification`, `postal_code`, `parent_phone_email`, `birth_date`, `created_at`, `updated_at`) VALUES
(2, 10, 2, 6, 'milap', 'parikh', 'Female', NULL, '380013', '7878787878', '1981-01-01', '2020-06-01 07:38:03', '2020-06-01 07:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', NULL, '$2y$10$jFs/XIxpcHfCkYSKXzl10ODxTaZ1I1qSnEheBDAZnJtejavtZvJc.', NULL, '2020-06-01 07:36:27', '2020-06-01 07:36:27'),
(2, 3, 'teamownergujarat', 'teamownergujarat@gmail.com', NULL, '$2y$10$v/d3oO9Vm5HkE8wefmwQdelYh4WnvXb217Br4MF/nE3ipMASikgDa', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(3, 3, 'teamownerchennai', 'teamownerchennai@gmail.com', NULL, '$2y$10$qo82NA7fh7bS0RQ4NmipPOkV.S6/QpSA7xWW3LGl3G4JyO4nACQ7G', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(4, 3, 'teamownerdelhi', 'teamownerdelhi@gmail.com', NULL, '$2y$10$BUmWseC5bWtLoW/nniXCLOtoUWhSWzfqQw6PGFfzh.6BYxIe3x4xe', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(5, 3, 'teamownerbanglore', 'teamownerbanglore@gmail.com', NULL, '$2y$10$WNBTPGvGGtDap6Jgp5q.IuvtBZZsgGWqUa8cHOAZ4xdDDWon0l5pW', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(6, 2, 'sachin', 'sachin@gmail.com', NULL, '$2y$10$vIJrV5ow3Durt3QvRr2FN.Qu9OFu1Eq7/y.pm2XHSFOGTQeen4JKG', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(7, 2, 'dhoni', 'dhoni@gmail.com', NULL, '$2y$10$afECzhIsaO1O3WqzhgfdbOpZmwDTQ5rrBpLKD/fdfK2dxj3IAWegu', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(8, 2, 'suresh', 'suresh@gmail.com', NULL, '$2y$10$ehWffmJI9QbhyWWRHz4Un.QG3/Ssc4jS9M50ulAs.d/jBo7C203VG', NULL, '2020-06-01 07:36:28', '2020-06-01 07:36:28'),
(10, 2, 'milap parikh', 'milap@gmail.com', NULL, '$2y$10$KTX.sGhkcgjORWWELV8zVu754wgJnrVGPdfpHI7wo7bywFYPcNYty', NULL, '2020-06-01 07:38:03', '2020-06-01 07:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citys_country_id_index` (`country_id`);

--
-- Indexes for table `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countrys_code_index` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamplayers`
--
ALTER TABLE `teamplayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userdetails_user_id_index` (`user_id`),
  ADD KEY `userdetails_country_id_index` (`country_id`),
  ADD KEY `userdetails_city_id_index` (`city_id`);

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
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `countrys`
--
ALTER TABLE `countrys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teamplayers`
--
ALTER TABLE `teamplayers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citys`
--
ALTER TABLE `citys`
  ADD CONSTRAINT `citys_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countrys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD CONSTRAINT `userdetails_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `citys` (`id`),
  ADD CONSTRAINT `userdetails_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countrys` (`id`),
  ADD CONSTRAINT `userdetails_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
