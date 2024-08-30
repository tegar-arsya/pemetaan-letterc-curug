-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 05:24 PM
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
-- Database: `potensisawah`
--

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `luas_wilayah` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kecamatans_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `nama_desa`, `kecamatan`, `luas_wilayah`, `created_at`, `updated_at`, `kecamatans_id`) VALUES
(1, 'Desa Curug', 'Tegowanu', 2.29, '2024-08-18 14:48:02', '2024-08-19 03:38:36', 17),
(2, 'Desa Pepe', 'Tegowanu', 2001.00, '2024-08-19 03:37:51', '2024-08-19 03:37:51', 17),
(3, 'Cangkring', 'Tegowanu', 5000.00, '2024-08-19 14:37:02', '2024-08-19 14:37:12', 17),
(4, 'Kedungwungu', 'Tegowanu', 6.73, '2024-08-19 15:02:55', '2024-08-19 15:02:55', 17);

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
-- Table structure for table `infotanahs`
--

CREATE TABLE `infotanahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tanah` varchar(255) NOT NULL,
  `ketinggian` varchar(255) NOT NULL,
  `kelembaban` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infotanahs`
--

INSERT INTO `infotanahs` (`id`, `jenis_tanah`, `ketinggian`, `kelembaban`, `created_at`, `updated_at`) VALUES
(1, 'Sawah Desa', '10', '212', '2024-08-18 15:31:58', '2024-08-18 19:43:10'),
(2, 'PERUMAHAN', '30', '10', '2024-08-19 14:36:38', '2024-08-19 14:36:38'),
(3, 'trtyuuiolk', '20', '10', '2024-08-21 19:22:51', '2024-08-21 19:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Brati', '2024-08-18 21:16:24', '2024-08-18 21:16:24'),
(2, 'Gabus', '2024-08-18 21:16:24', '2024-08-18 21:16:24'),
(3, 'Geyer', '2024-08-18 21:17:49', '2024-08-18 21:17:49'),
(4, 'Godong', '2024-08-18 21:17:49', '2024-08-18 21:17:49'),
(5, 'Grobogan', '2024-08-18 21:18:08', '2024-08-18 21:18:08'),
(6, 'Gubug', '2024-08-18 21:18:26', '2024-08-18 21:18:26'),
(7, 'Karangrayung', '2024-08-18 21:18:38', '2024-08-18 21:18:38'),
(8, 'Kedungjati', '2024-08-18 21:19:02', '2024-08-18 21:19:02'),
(9, 'Klambu', '2024-08-18 21:19:24', '2024-08-18 21:19:24'),
(10, 'Kradenan', '2024-08-18 21:19:47', '2024-08-18 21:19:47'),
(11, 'Ngaringan', '2024-08-18 21:19:47', '2024-08-18 21:19:47'),
(12, 'Penawangan', '2024-08-18 21:20:23', '2024-08-18 21:20:23'),
(13, 'Pulokulon', '2024-08-18 21:20:37', '2024-08-18 21:20:37'),
(14, 'Purwodadi', '2024-08-18 21:20:55', '2024-08-18 21:20:55'),
(15, 'Tanggungharjo', '2024-08-18 21:21:16', '2024-08-18 21:21:16'),
(16, 'Tawangharjo', '2024-08-18 21:21:27', '2024-08-18 21:21:27'),
(17, 'Tegowanu', '2024-08-18 21:21:40', '2024-08-18 21:21:40'),
(18, 'Toroh', '2024-08-18 21:21:55', '2024-08-18 21:21:55'),
(19, 'Wirosari', '2024-08-18 21:22:16', '2024-08-18 21:22:16');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_025924_create_infotanahs_table', 1),
(6, '2022_11_09_135725_create_table_desas', 1),
(7, '2022_11_09_135819_create_desas_table', 1),
(8, '2022_11_09_140852_create_kecamatans_table', 1),
(9, '2022_11_09_142119_add_kecamatans_id_to_desas_table', 1),
(10, '2022_11_11_114455_create_pemiliklahans_table', 1),
(11, '2022_11_12_113430_create_potensis_table', 1);

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
-- Table structure for table `pemiliklahans`
--

CREATE TABLE `pemiliklahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemiliklahan` varchar(255) NOT NULL,
  `alamat_pemiliklahan` varchar(255) NOT NULL,
  `no_hp_pemiliklahan` varchar(255) NOT NULL,
  `email_pemiliklahan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemiliklahans`
--

INSERT INTO `pemiliklahans` (`id`, `nama_pemiliklahan`, `alamat_pemiliklahan`, `no_hp_pemiliklahan`, `email_pemiliklahan`, `created_at`, `updated_at`) VALUES
(1, 'Tegar Arsyadani', 'Rt 03 RW 02', '081353677822', 'tegararsya0117@gmail.com', '2024-08-18 15:32:29', '2024-08-19 10:42:30'),
(2, 'SUPRI', 'Desa Curug Rt 03 Rw 02 ', '081353677822', 'ASEDFHIufldeiksz;fghjloesf@gmail.com', '2024-08-19 14:37:53', '2024-08-19 14:37:53');

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
-- Table structure for table `potensis`
--

CREATE TABLE `potensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desa_id` int(11) NOT NULL,
  `pemiliklahan_id` int(11) NOT NULL,
  `infotanah_id` int(11) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `batas_lahan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `potensis`
--

INSERT INTO `potensis` (`id`, `desa_id`, `pemiliklahan_id`, `infotanah_id`, `luas_lahan`, `batas_lahan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 20, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.643559,-7.003052],[110.645731,-7.003978],[110.645055,-7.004904],[110.643044,-7.003722],[110.643559,-7.003052]]]}}', '2024-08-18 15:34:08', '2024-08-18 15:34:08'),
(2, 1, 1, 1, 300, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.644161,-7.002897],[110.644413,-7.002471],[110.64636,-7.003429],[110.646054,-7.003989],[110.644161,-7.002897]]]}}', '2024-08-18 15:35:41', '2024-08-18 15:35:41'),
(3, 1, 1, 1, 99, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.791669,-7.096529],[110.792012,-7.110838],[110.826859,-7.103428],[110.791669,-7.096529]]]}}', '2024-08-18 15:52:05', '2024-08-18 15:52:05'),
(4, 2, 1, 1, 400, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.650043,-7.016144],[110.649893,-7.016442],[110.650472,-7.016708],[110.650622,-7.016325],[110.650043,-7.016144]]]}}', '2024-08-19 09:21:12', '2024-08-19 09:21:12'),
(5, 1, 2, 2, 300, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.645965,-7.007937],[110.645806,-7.00824],[110.645495,-7.008118],[110.645621,-7.007812],[110.646075,-7.00774],[110.645965,-7.007937]]]}}', '2024-08-19 14:38:49', '2024-08-19 14:38:49'),
(7, 1, 1, 2, 60000, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.676055,-7.002246],[110.678973,-7.024139],[110.726008,-7.024565],[110.723519,-6.999264],[110.676055,-7.002246]]]}}', '2024-08-19 15:02:15', '2024-08-19 15:02:15'),
(8, 1, 1, 1, 200, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.641954,-7.008238],[110.642667,-7.008454],[110.642554,-7.008939],[110.64176,-7.008731],[110.641954,-7.008238]]]}}', '2024-08-21 19:24:20', '2024-08-21 19:24:20'),
(9, 4, 1, 1, 200, '{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.654386,-7.03703],[110.654261,-7.037312],[110.654162,-7.037267],[110.65405,-7.037499],[110.654637,-7.037765],[110.654878,-7.037248],[110.654386,-7.03703]]]}}', '2024-08-23 02:44:45', '2024-08-23 02:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `table_desas`
--

CREATE TABLE `table_desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tegar Arsyadani', '@tegararsya0117@gmail.com', '2024-08-18 13:51:30', '$2y$10$qogSAM3N/i.ULSmGE3HHfeTLNfFZKpefclMBi0fkrlZ2d130WkLHa', 'COZYrOp7fi', '2024-08-18 13:51:30', '2024-08-18 13:51:30'),
(2, 'Tegar Arsyadani', 'tegararsya0117@gmail.com', '2024-08-18 14:06:27', '$2y$10$OrugOGmskCciwk8BYRYAx.2H10mGLxk.yRT/N5v2UXBDruzYl0eCW', 'wFTdTnC1Liq7Whs6x4tT9vHTj0Sfok9OKYZdyFFr4eqk7b1sY4ZTalnBm5bO', '2024-08-18 14:06:27', '2024-08-18 14:06:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatans_id` (`kecamatans_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infotanahs`
--
ALTER TABLE `infotanahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
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
-- Indexes for table `pemiliklahans`
--
ALTER TABLE `pemiliklahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `potensis`
--
ALTER TABLE `potensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_desas`
--
ALTER TABLE `table_desas`
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
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infotanahs`
--
ALTER TABLE `infotanahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemiliklahans`
--
ALTER TABLE `pemiliklahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potensis`
--
ALTER TABLE `potensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_desas`
--
ALTER TABLE `table_desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
