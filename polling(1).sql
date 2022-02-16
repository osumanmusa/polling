-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2022 at 04:19 PM
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
-- Database: `polling`
--

-- --------------------------------------------------------

--
-- Table structure for table `Code`
--

CREATE TABLE `Code` (
  `id` int(11) NOT NULL,
  `EA_CODE` varchar(30) NOT NULL,
  `EA_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Code`
--

INSERT INTO `Code` (`id`, `EA_CODE`, `EA_NAME`) VALUES
(1, 'F3407', 'BONTODIASE'),
(2, 'F3408', 'APETENYINASE'),
(3, 'F3404', 'TWENEBOASE'),
(4, 'F3405', 'PEKYEREKYE'),
(5, 'F3406', 'AGOGO AHENBRONUM'),
(6, 'F3411', 'NEWTOWN AGOGO'),
(7, 'F3412', 'MAGYEDA'),
(8, 'F3413', 'ONYIMSO'),
(9, 'F3420', 'AKUTUASE'),
(10, 'F3421', 'WIOSO'),
(11, 'F3422', 'WURAPONSO/MEENAM'),
(12, 'F3409', 'OBUASI'),
(13, 'F3410', 'SUKUUMU');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polling_station`
--

CREATE TABLE `polling_station` (
  `id` int(11) NOT NULL,
  `ps_code` varchar(50) NOT NULL,
  `polling_station_name` varchar(200) NOT NULL,
  `Code_id` int(11) DEFAULT NULL,
  `Reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polling_station`
--

INSERT INTO `polling_station` (`id`, `ps_code`, `polling_station_name`, `Code_id`, `Reg_id`) VALUES
(1, 'F340401', 'PRESBY PRIM SCH DOMEABRA N01', 3, 1),
(2, 'F340402', 'DOMEABRA ROUNDABOUT', 3, 1),
(3, 'F340403A', 'SDA CHURCH DOMEABRA', 3, 1),
(4, 'F340403B', 'SDA CHURCH DOMEABRA', 3, 1),
(5, 'F340501', 'PRESBY PRIM SCH PEKYEREKYE', 4, 1),
(6, 'F340502', 'METH PRIM SCH PEKYEREKYE', 4, 1),
(7, 'F340503', 'D/A JHS PEKYEREKYE', 4, 1),
(8, 'F340504', 'D/A PRIM SCH ADIEMBRA', 4, 1),
(9, 'F340601', 'GCMB NEAR POST OFFICE AGOGO 1', 5, 1),
(10, 'F340602', 'GCMB NEAR POST OFFICE AGOGO 2', 5, 1),
(11, 'F340603', 'BRAKO INTERNATIONAL SCH AGOGO 1', 5, 1),
(12, 'F340604', 'BRAKO INTERNATIONAL SCH AGOGO 2', 5, 1),
(13, 'F340605', 'OLD GCMB SHED AGOGO 1', 5, 1),
(14, 'F340606', 'OLD GCMB SHED AGOGO 2', 5, 1),
(15, 'F340607A', 'AGOGO STATE SHS', 5, 1),
(16, 'F340607B', 'AGOGO STATE SHS', 5, 1),
(17, 'F341101', 'PRESBY JHS AGOGO', 6, 1),
(18, 'F341102', 'HOSPITAL CHURCH AGOGO 1', 6, 1),
(19, 'F341103', 'HOSPITAL CHURCH AGOGO 2', 6, 1),
(20, 'F341104', 'COURT HOUSE AGOGO 1', 6, 1),
(21, 'F341105', 'COURT HOUSE AGOGO 2', 6, 1),
(22, 'F341106A', 'COLLINS SHS AGOGO', 6, 1),
(23, 'F341106B', 'COLLINS SHS AGOGO', 6, 1),
(24, 'F341201', 'D/A PRIM SCH MAGYEDA', 7, 1),
(25, 'F341202', 'D/A PRIM SCH BRANTUOKROM', 7, 1),
(26, 'F341203', 'D/A PRIM SCH ADINKRAKROM', 7, 1),
(27, 'F341301', 'D/A PRIM SCH ONYIMSO', 8, 1),
(28, 'F341302', 'D/A PRIM SCH PATABAN 1', 8, 1),
(29, 'F341303', 'D/A PRIM SCH PATABAN 2', 8, 1),
(30, 'F342001', 'HOLY EDUCATIONAL COMPLEX AKUTUASE', 9, 1),
(31, 'F342002', 'AKUTUASE PRESBY PRIM N0.2', 9, 1),
(32, 'F342003', 'TEMP BOOTH MARKET SQUARE AKUTUASE', 9, 1),
(33, 'F342004', 'D/A JHS AKUTUASE', 9, 1),
(34, 'F342101', 'PRESBY PRIM SCH WIOSO', 10, 1),
(35, 'F342102', 'SAVIOR CHURCH WIOSO', 10, 1),
(36, 'F342103', 'METH CHURCH WIOSO', 10, 1),
(37, 'F342201', 'D/A PRIM SCH WURAMPONSO 1', 11, 1),
(38, 'F342202', 'D/A PRIM SCH WURAMPONSO 2', 11, 1),
(39, 'F342203', 'D/A PRIM SCH MEENAM', 11, 1),
(40, 'F340901', 'NEW METH CHURCH AGOGO', 12, 1),
(41, 'F340902', 'OLD METH CHURCH AGOGO 1', 12, 1),
(42, 'F340903', 'OLD METH CHURCH AGOGO 2', 12, 1),
(43, 'F340904', 'HOME SCIENCE CENTRE AGOGO 1', 12, 1),
(44, 'F340905', 'HOME SCIENCE CENTRE AGOGO 2', 12, 1),
(45, 'F340906', 'NEW SAVIOUR CHURCH AGOGO 1', 12, 1),
(46, 'F340907', 'NEW SAVIOUR CHURCH AGOGO 2', 12, 1),
(47, 'F340908', 'OLD SAVIOUR CHURCH AGOGO 1', 12, 1),
(48, 'F340909', 'OLD SAVIOUR CHURCH AGOGO 2', 12, 1),
(49, 'F341001', 'PRESBY K.G.AGOGO', 13, 1),
(50, 'F341002', 'PRESBY PRIM SCH AGOGO', 13, 1),
(51, 'F341003', 'PRESBY CHURCH AGOGO 1', 13, 1),
(52, 'F341004', 'PRESBY CHURCH AGOGO 2', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Reg`
--

CREATE TABLE `Reg` (
  `id` int(11) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `District` varchar(120) NOT NULL,
  `Constituency` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Reg`
--

INSERT INTO `Reg` (`id`, `Region`, `District`, `Constituency`) VALUES
(1, 'ASHANTI', 'F34-ASANTE AKIM NORTH', 'ASANTE AKIM NORTH');

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
(1, 'user', 'user@gmail.com', NULL, '$2y$10$E12e.XP1EoZNFSnOd0P2huM3csHwl4SbEqXjjo/CgMv6983pZ0o..', NULL, '2022-02-15 04:43:36', '2022-02-15 04:43:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Code`
--
ALTER TABLE `Code`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `polling_station`
--
ALTER TABLE `polling_station`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Reg_id` (`Reg_id`),
  ADD KEY `Code_id` (`Code_id`);

--
-- Indexes for table `Reg`
--
ALTER TABLE `Reg`
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
-- AUTO_INCREMENT for table `Code`
--
ALTER TABLE `Code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polling_station`
--
ALTER TABLE `polling_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `Reg`
--
ALTER TABLE `Reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `polling_station`
--
ALTER TABLE `polling_station`
  ADD CONSTRAINT `polling_station_ibfk_1` FOREIGN KEY (`Reg_id`) REFERENCES `Reg` (`id`),
  ADD CONSTRAINT `polling_station_ibfk_2` FOREIGN KEY (`Code_id`) REFERENCES `Code` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
