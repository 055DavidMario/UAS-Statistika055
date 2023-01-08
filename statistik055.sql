-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 08:07 AM
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
-- Database: `statistik055`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_06_035013_create_sessions_table', 1),
(7, '2023_01_04_024620_create_scores_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIM` bigint(20) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Score` double(8,2) DEFAULT NULL,
  `Kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `NIM`, `Name`, `Score`, `Kelas`, `created_at`, `updated_at`) VALUES
(1, 2115101001, 'Desak Putu Mahadewi Saraswati', 76.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(2, 2115101002, 'Kadek Widiadnyana', 73.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(3, 2115101003, 'Made Andika Wiananda', 65.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(4, 2115101004, 'I Kadek Prasta Yudhantara', 61.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(5, 2115101005, 'Kadek Puja Astawa', 68.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(6, 2115101006, 'Dewa Komang Reiki Perdana Wisnu', 65.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(7, 2115101007, 'I Ketut Adi Krisna Murti Saksena', 53.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(8, 2115101008, 'Putu Mandiasa', 71.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(9, 2115101010, 'Ni Putu Ari Kusumadewi', 63.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(10, 2115101011, 'Putu Adi Sastrawan', 74.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(11, 2115101012, 'I Komang Arya Adi Kusuma', 73.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(12, 2115101013, 'Darmawan Jiddan', 68.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(13, 2115101014, 'I Gede Gelgel Abdiutama', 65.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(14, 2115101015, 'Okthen Orlanda Naitboho', 62.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(15, 2115101016, 'Subhan Maulana', 62.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(16, 2115101017, 'Nyoman Yudhi Gunawan', 61.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(17, 2115101019, 'Putu Bagus Muhammad Fajar', 81.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(18, 2115101021, 'I Gede Deindra Dwija Puridiasta', 64.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(19, 2115101022, 'Andreas Stiady', 70.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(20, 2115101023, 'Dewa Gede Bhaskara Pramudya', 68.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(21, 2115101024, 'Kadek Feny Sugiantari', 82.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(22, 2115101025, 'I Kadek Bayu Danu Artha', 80.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(23, 2115101026, 'Gede Bakti Pratama Putra', 69.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(24, 2115101027, 'Joe Aquilla Vandyta', 73.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(25, 2115101029, 'Anak Agung Ade Wahyu Widya Nanda', 74.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(26, 2115101031, 'Gusti Putu Ayu Mas Meita Pradnya Swari', 61.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(27, 2115101032, 'Tegar Samjoe Indra Laka', 62.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(28, 2115101033, 'I Putu Dion Arditya', 66.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(29, 2115101034, 'I Gst. Ngr. Kadek Rian Adnyana', 58.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(30, 2115101035, 'Putu Gede Dimas Witjaksana', 66.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(31, 2115101036, 'Komang Adi Satya Mahagangga', 65.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(32, 2115101037, 'Mellisa Damayanti', 79.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(33, 2115101038, 'I Nyoman Rahdyan Adji Sastra', 61.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(34, 2115101039, 'Komang Juliana', 62.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(35, 2115101040, 'Made Waradiana Aryadi', 61.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(36, 2115101041, 'I Made Bayu Sastra Wiguna', 67.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(37, 2115101042, 'Ali Siddiq Al Farizi Siregar', 62.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(38, 2115101043, 'Kadek Agung Kannha Wiswambara', 69.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(39, 2115101044, 'Putu Adi Widyantara', 67.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(40, 2115101046, 'Kadek Losinanda Prawira', 70.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(41, 2115101049, 'Putu Wendi Prasetya', 72.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(42, 2115101050, 'Godlife Nehrad Anton Hindom', 63.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(43, 2115101051, 'Bagus Aji Andarwira', 60.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(44, 2115101052, 'Arteddy Rover Bukti', 59.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(45, 2115101053, 'Komang Harry Sudana', 76.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(46, 2115101054, 'I Komang Krisna Aditya Pranata', 57.00, 'A', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(47, 2115101059, 'Ni Putu Karisma Dewi', 77.00, 'IKI', '2023-01-07 22:11:42', '2023-01-07 22:11:42'),
(48, 2115101055, 'David Mario Yohanes Samosir ', 90.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(49, 2115101056, 'Ngakan Gde Satria Abirama', 65.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(50, 2115101058, 'Dewa Putu Indra Sunarya ', 55.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(51, 2115101061, 'Komang Wahyu Kusuma Wardana ', 73.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(52, 2115101063, 'Komang Wibisana ', 72.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(53, 2115101065, 'Gede Martha Kusuma ', 65.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(54, 2115101066, 'I Gede Risva Darma Sentana ', 85.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(55, 2115101067, 'Anggaradiva Bendesa ', 64.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(56, 2115101068, 'Komang Erwin Pranata ', 64.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(57, 2115101069, 'Made Yudi Widiandana ', 65.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(58, 2115101070, 'Ni Kadek Aprianti ', 68.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(59, 2115101071, 'Kadek Yuda Mahendra ', 67.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(60, 2115101072, 'Made Govinda Premana Sidhi ', 72.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(61, 2115101073, 'I Made Septian Cahya Pradito ', 68.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(62, 2115101075, 'I Komang Windra Artha ', 60.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(63, 2115101077, 'Made Restu Wedatama ', 60.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(64, 2115101079, 'I Made Adi Wahyudinata ', 69.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(65, 2115101080, 'I Gede Sudiartika ', 74.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57'),
(66, 2115101081, 'I Kadek Yoga Mardiawan ', 36.00, 'B', '2023-01-07 22:11:57', '2023-01-07 22:11:57');

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
('LOUqYLeTejB4iFMtFHPGXL0DaYNT3KsQqQi6ohrM', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.76', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiczg0WkM1OGZsazBVbUJWZ25ZYTAwTm9oRTZCUmdER25uZmtVZ2NVaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mcmVxdWVuY3kiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1673160741);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Sayang', 'sayang@gmail.com', NULL, '$2y$10$dhijY0DPpev9.KYMcwmyAeSMkFYhKGHLx2SlgQW1VYyFtZDaGXf86', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-07 16:11:03', '2023-01-07 16:11:03'),
(2, 'User 1', 'user1@gmail.com', NULL, '$2y$10$54ULeBa1t1ZW9KhehaSTX.Xom6qNHnp1vTMm2B05fqsYzBOOMP/vi', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-07 20:25:46', '2023-01-07 20:25:46'),
(3, 'David Mario', 'david.mario@undiksha.ac.id', NULL, '$2y$10$vULYAxnZLx7wPBpYNQiTWu5Qs5pNR31efQuR7zviIoCrxoeM5iuFm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-07 21:29:03', '2023-01-07 21:29:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
