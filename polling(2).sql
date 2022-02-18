-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2022 at 10:07 PM
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
(3, 'F3417', 'DUKUSEN'),
(4, 'F3418', 'ABREWAPONG'),
(5, 'F3419', 'DUKUSEN'),
(6, 'F3401', 'JUANSA SOUTH'),
(7, 'F3402', 'JUANSA NORTH'),
(8, 'F3403', 'DOMEABRA NEWTOW'),
(9, 'F3414', 'HWIDIEM'),
(10, 'F3415', 'BEBOME'),
(11, 'F3416', 'ANANEKROM'),
(12, 'F3404', 'TWENEBOASE'),
(13, 'F3405', 'PEKYEREKYE'),
(14, 'F3406', 'AGOGO AHENBRONUM'),
(15, 'F3411', 'NEWTOWN AGOGO'),
(16, 'F3412', 'MAGYEDA'),
(17, 'F3413', 'ONYIMSO'),
(18, 'F3420', 'AKUTUASE'),
(19, 'F3421', 'WIOSO'),
(20, 'F3422', 'WURAPONSO/MEENAM'),
(21, 'F3409', 'OBUASI'),
(22, 'F3410', 'SUKUUMU');

-- --------------------------------------------------------

--
-- Table structure for table `Data`
--

CREATE TABLE `Data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` enum('Chairman','Secretary','Women''s Organizer','Organizer','Youth Organizer') NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `ps_code` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `voter_id` varchar(100) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Data`
--

INSERT INTO `Data` (`id`, `name`, `position`, `gender`, `ps_code`, `phone`, `email`, `voter_id`, `pic`, `updated_at`, `created_at`) VALUES
(11, 'Bernard', 'Chairman', 'Male', 'F340704', '7', NULL, '1234565', NULL, '2022-02-17 18:24:39', '2022-02-17 18:24:39'),
(12, 'Ashley', 'Women\'s Organizer', 'Female', 'F340704', '10', NULL, '1234567', NULL, '2022-02-17 18:24:39', '2022-02-17 18:24:39'),
(13, 'Toshiba', 'Secretary', 'Female', 'F340704', '3', NULL, '6782345', NULL, '2022-02-17 18:24:39', '2022-02-17 18:24:39'),
(14, 'Grace', 'Youth Organizer', 'Male', 'F340704', '9', NULL, '1122221112', NULL, '2022-02-17 18:24:40', '2022-02-17 18:24:40'),
(15, 'Sammy', 'Organizer', 'Male', 'F340704', '8', NULL, '121121112', NULL, '2022-02-17 18:24:40', '2022-02-17 18:24:40'),
(16, 'Bernard', 'Chairman', 'Male', 'F340704', '7', NULL, '1234565', NULL, '2022-02-17 18:48:46', '2022-02-17 18:48:46'),
(17, 'Ashley', 'Women\'s Organizer', 'Female', 'F340704', '10', NULL, '1234567', NULL, '2022-02-17 18:48:46', '2022-02-17 18:48:46'),
(18, 'Toshiba', 'Secretary', 'Female', 'F340704', '3', NULL, '6782345', NULL, '2022-02-17 18:48:46', '2022-02-17 18:48:46'),
(19, 'Grace', 'Youth Organizer', 'Male', 'F340704', '9', NULL, '1122221112', NULL, '2022-02-17 18:48:46', '2022-02-17 18:48:46'),
(20, 'Sammy', 'Organizer', 'Male', 'F340704', '8', NULL, '121121112', NULL, '2022-02-17 18:48:46', '2022-02-17 18:48:46'),
(21, 'Bernard', 'Chairman', 'Male', 'F340704', '7', NULL, '1234565', NULL, '2022-02-17 18:50:00', '2022-02-17 18:50:00'),
(22, 'Ashley', 'Women\'s Organizer', 'Female', 'F340704', '10', NULL, '1234567', NULL, '2022-02-17 18:50:00', '2022-02-17 18:50:00'),
(23, 'Toshiba', 'Secretary', 'Female', 'F340704', '3', NULL, '6782345', NULL, '2022-02-17 18:50:00', '2022-02-17 18:50:00'),
(24, 'Grace', 'Youth Organizer', 'Male', 'F340704', '9', NULL, '1122221112', NULL, '2022-02-17 18:50:01', '2022-02-17 18:50:01'),
(25, 'Sammy', 'Organizer', 'Male', 'F340704', '8', NULL, '121121112', NULL, '2022-02-17 18:50:01', '2022-02-17 18:50:01'),
(26, 'chairman', 'Chairman', 'Male', 'F340706', '2', 'musapara1@gmail.com', '1234567', NULL, '2022-02-17 19:00:03', '2022-02-17 19:00:03'),
(27, 'wocom', 'Women\'s Organizer', 'Female', 'F340706', '10', 'wocom@gmail.com', '1234567', NULL, '2022-02-17 19:00:03', '2022-02-17 19:00:03'),
(28, 'we', 'Secretary', 'Male', 'F340706', '9', 'secretary@gmail.com', '123456', NULL, '2022-02-17 19:00:03', '2022-02-17 19:00:03'),
(29, 'youth', 'Youth Organizer', 'Male', 'F340706', '5', 'youth@gmail.com', '1234', NULL, '2022-02-17 19:00:03', '2022-02-17 19:00:03'),
(30, 'Sammy', 'Organizer', 'Male', 'F340706', '4', 'organa@gmail.com', '121121112', NULL, '2022-02-17 19:00:03', '2022-02-17 19:00:03'),
(31, 'chairman', 'Chairman', 'Male', 'F340706', '2', 'musapara1@gmail.com', '1234567', NULL, '2022-02-17 19:00:44', '2022-02-17 19:00:44'),
(32, 'wocom', 'Women\'s Organizer', 'Female', 'F340706', '10', 'wocom@gmail.com', '1234567', NULL, '2022-02-17 19:00:44', '2022-02-17 19:00:44'),
(33, 'we', 'Secretary', 'Male', 'F340706', '9', 'secretary@gmail.com', '123456', NULL, '2022-02-17 19:00:44', '2022-02-17 19:00:44'),
(34, 'youth', 'Youth Organizer', 'Male', 'F340706', '5', 'youth@gmail.com', '1234', NULL, '2022-02-17 19:00:44', '2022-02-17 19:00:44'),
(35, 'Sammy', 'Organizer', 'Male', 'F340706', '4', 'organa@gmail.com', '121121112', NULL, '2022-02-17 19:00:44', '2022-02-17 19:00:44'),
(36, 'chairman', 'Chairman', 'Male', 'F340706', '2', 'musapara1@gmail.com', '1234567', NULL, '2022-02-17 19:01:00', '2022-02-17 19:01:00'),
(37, 'wocom', 'Women\'s Organizer', 'Female', 'F340706', '10', 'wocom@gmail.com', '1234567', NULL, '2022-02-17 19:01:00', '2022-02-17 19:01:00'),
(38, 'we', 'Secretary', 'Male', 'F340706', '9', 'secretary@gmail.com', '123456', NULL, '2022-02-17 19:01:01', '2022-02-17 19:01:01'),
(39, 'youth', 'Youth Organizer', 'Male', 'F340706', '5', 'youth@gmail.com', '1234', NULL, '2022-02-17 19:01:01', '2022-02-17 19:01:01'),
(40, 'Sammy', 'Organizer', 'Male', 'F340706', '4', 'organa@gmail.com', '121121112', NULL, '2022-02-17 19:01:01', '2022-02-17 19:01:01'),
(41, 'chairman', 'Chairman', 'Male', 'F340402', '6', 'user@gmail.com', '1234567', '1645218288-295231.svg.svg', '2022-02-17 20:39:40', '2022-02-17 20:39:40'),
(42, 'wocom', 'Women\'s Organizer', 'Female', 'F340402', '15', 'wocom@gmail.com', '1234567', '1645218288-295231.svg.svg', '2022-02-17 20:39:40', '2022-02-17 20:39:40'),
(43, 'Toshiba', 'Secretary', 'Male', 'F340402', '8', 'wer@gmail.com', '6782345', '1645218288-295231.svg.svg', '2022-02-17 20:39:41', '2022-02-17 20:39:41'),
(44, 'Grace', 'Youth Organizer', 'Male', 'F340402', '14', 'youth@gmail.com', '1122221112', '1645218288-295231.svg.svg', '2022-02-17 20:39:41', '2022-02-17 20:39:41'),
(45, 'Sammy', 'Organizer', 'Male', 'F340402', '13', 'organa@gmail.com', '121121112', '1645218288-295231.svg.svg', '2022-02-17 20:39:41', '2022-02-17 20:39:41'),
(46, 'chairman', 'Chairman', 'Male', 'F340402', '6', 'user@gmail.com', '1234567', '1645218288-295231.svg.svg', '2022-02-17 21:31:21', '2022-02-17 21:31:21'),
(47, 'wocom', 'Women\'s Organizer', 'Female', 'F340402', '15', 'wocom@gmail.com', '1234567', '1645218288-295231.svg.svg', '2022-02-17 21:31:21', '2022-02-17 21:31:21'),
(48, 'Toshiba', 'Secretary', 'Male', 'F340402', '8', 'wer@gmail.com', '6782345', '1645218288-295231.svg.svg', '2022-02-17 21:31:22', '2022-02-17 21:31:22'),
(49, 'Grace', 'Youth Organizer', 'Male', 'F340402', '14', 'youth@gmail.com', '1122221112', '1645218288-295231.svg.svg', '2022-02-17 21:31:22', '2022-02-17 21:31:22'),
(50, 'Sammy', 'Organizer', 'Male', 'F340402', '13', 'organa@gmail.com', '121121112', '1645218288-295231.svg.svg', '2022-02-17 21:31:22', '2022-02-17 21:31:22'),
(51, 'Dickson', 'Chairman', 'Male', 'F341801', '123343435', NULL, '3432342', NULL, '2022-02-18 18:43:16', '2022-02-18 18:43:16'),
(52, 'Miles', 'Women\'s Organizer', 'Female', 'F341801', '26', NULL, '12345', NULL, '2022-02-18 18:43:17', '2022-02-18 18:43:17'),
(53, 'Julia', 'Secretary', 'Female', 'F341801', '20', NULL, '23423', NULL, '2022-02-18 18:43:17', '2022-02-18 18:43:17'),
(54, 'Eric', 'Youth Organizer', 'Male', 'F341801', '15', NULL, '1243465767', NULL, '2022-02-18 18:43:17', '2022-02-18 18:43:17'),
(55, 'Imam', 'Organizer', 'Female', 'F341801', '17', NULL, '4534543', NULL, '2022-02-18 18:43:17', '2022-02-18 18:43:17');

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
-- Table structure for table `group_picture`
--

CREATE TABLE `group_picture` (
  `ps_id` varchar(50) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_picture`
--

INSERT INTO `group_picture` (`ps_id`, `picture`, `created_at`, `updated_at`) VALUES
('F340402', '/tmp/php1e0cq0', '2022-02-17 20:39:41', '2022-02-17 20:39:41'),
('F340704', '/tmp/phpIeJOBY', '2022-02-17 18:24:40', '2022-02-17 18:24:40'),
('F340706', '/tmp/phpsGvQYZ', '2022-02-17 19:01:01', '2022-02-17 19:01:01'),
('F341801', '/tmp/phpuczxS2', '2022-02-18 18:43:18', '2022-02-18 18:43:18');

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
(1, 'F340701', 'MDC CHURCH AGOGO 1', 1, 1),
(2, 'F340702', 'MDC CHURCH AGOGO 2', 1, 1),
(3, 'F340703A', 'TEMP BOOTH BONTODIASE AGOGO', 1, 1),
(4, 'F340703B', 'TEMP BOOTH BONTODIASE AGOGO', 1, 1),
(5, 'F340704', 'TEMP BOOTH MPRAEYEM AGOGO', 1, 1),
(6, 'F340705', 'D/A PRIM SCH AGOGO 1', 1, 1),
(7, 'F340706', 'D/A PRIM SCH AGOGO 2', 1, 1),
(8, 'F340707', 'ARABIC SCHOOL AGOGO 1', 1, 1),
(9, 'F340708', 'ARABIC SCHOOL AGOGO 2', 1, 1),
(10, 'F340801', 'APOSTOLIC CHURCH AGOGO 1', 2, 1),
(11, 'F340802', 'APOSTOLIC CHURCH AGOGO 2', 2, 1),
(12, 'F340803', 'PENTECOST CHURCH AGOGO ', 2, 1),
(13, 'F340804', 'COMMUNITY CENTRE AGOGO 1', 2, 1),
(14, 'F340805', 'COMMUNITY CENTRE AGOGO 2', 2, 1),
(15, 'F340806', 'ELECTRICITY COOPERATION OFFICE AGOGO', 2, 1),
(16, 'F341701', 'D/A PRIM SCH DUKUSEN', 3, 1),
(17, 'F341702', 'D/A PRIM OFORIKROM', 3, 1),
(18, 'F341703', 'TEMP BOOTH AFIRISERE', 3, 1),
(19, 'F341704', 'TEMP BOOTH KWADWAMENA', 3, 1),
(20, 'F341703', 'TEMP BOOTH TEMA BUNSO', 3, 1),
(21, 'F341801', 'D/A PRIM SCH KANSANSO', 4, 1),
(22, 'F341802', 'D/A PRIM SCH ABREWAPONG', 4, 1),
(23, 'F341801', 'D/A PRIM SCH OSEIKROM', 4, 1),
(24, 'F341802', 'TEMP BOOTH MPESEMPESE', 4, 1),
(25, 'F341901', 'NYINAMPONASE PRESBY PRM SCH', 5, 1),
(26, 'F341902A', 'PRESBY PRIM SCH AMANTENA', 5, 1),
(27, 'F341902B', 'PRESBY PRIM SCH AMANTENA', 5, 1),
(28, 'F341903', 'D/A PRIM SCH DAWERESO-NKWANTA ', 5, 1),
(29, 'F340101', 'PRESBY PRIM SCH JUANSA', 6, 1),
(30, 'F340102', 'ROMAN CATHOLIC CHURCH JUANSA', 6, 1),
(31, 'F340103', 'D/A PRIM SCH JUANSA', 6, 1),
(32, 'F340104', 'SAVIOUR CHURCH JUANSA', 6, 1),
(33, 'F3401SPS', 'COURT HOUSE AGOGO 1', 6, 1),
(34, 'F340201', 'COURT HOUSE JUANSA', 7, 1),
(35, 'F340202', 'TEMP BOOTH JUANSA', 7, 1),
(36, 'F340203', 'JUANSA PRESBY JHS', 7, 1),
(37, 'F340301', 'ROMAN CATHOLIC CHURCH DOMEABRA', 8, 1),
(38, 'F340302', 'PRESBY JHS DOMEABRA', 8, 1),
(39, 'F340303', 'METH PRIM SCH DOMEABRA', 8, 1),
(40, 'F341401', 'D/A JHS HWIDIEM 1', 9, 1),
(41, 'F341402', 'D/A JHS HWIDIEM 2', 9, 1),
(42, 'F341404', 'OLD PRESBY CHURCH HWIDIEM 2', 9, 1),
(43, 'F341405', 'TEMP BOOTH ASENCHEM', 9, 1),
(44, 'F341406', 'HWIDIEM CHIEF PALACE', 9, 1),
(45, 'F341407', 'PAN AFRICA SCHOOL HWIDIEM', 9, 1),
(46, 'F341403', 'OLD PRESBY CHURCH HWIDIEM 1', 9, 1),
(47, 'F341501', 'D/A PRIM SCH BEBOME', 10, 1),
(48, 'F341502', 'D/A PRIM SCH BEBUSO', 10, 1),
(49, 'F341503', 'D/A PRIM SCH KOWIRISO', 10, 1),
(50, 'F341504', 'D/A PRIM SCH ADDOKROM', 10, 1),
(51, 'F341505', 'TEMP BOOTH NYAMEBEKYERE', 10, 1),
(52, 'F341601', 'D/A PRIM SCH ANANEKROM 1', 11, 1),
(53, 'F341602', 'D/A PRIM SCH ANANEKROM 2', 11, 1),
(54, 'F341603', 'PENTECOST CHURCH ANANEKROM 1', 11, 1),
(55, 'F341604', 'PENTECOST CHURCH ANANEKROM 2', 11, 1),
(56, 'F341605', 'D/A PRIM SCH NSONYAMEYE', 11, 1),
(57, 'F341606', 'D/A PRIM SCH SEREBOURSO', 11, 1),
(58, 'F341607', 'TEMP BOOTH NHYIAESO', 11, 1),
(59, 'F340401', 'PRESBY PRIM SCH DOMEABRA N0 1', 12, 1),
(60, 'F340402', 'DOMEABRA ROUNDABOUT', 12, 1),
(61, 'F340403A', 'SDA CHURCH DOMEABRA', 12, 1),
(62, 'F340403B', 'SDA CHURCH DOMEABRA', 12, 1),
(63, 'F340501', 'PRESBY PRIM SCH PEKYEREKYE', 13, 1),
(64, 'F340502', 'METH PRIM SCH PEKYEREKYE', 13, 1),
(65, 'F340503', 'D/A JHS PEKYEREKYE', 13, 1),
(66, 'F340504', 'D/A PRIM SCH ADIEMBRA', 13, 1),
(67, 'F340601', 'GCMB NEAR POST OFFICE AGOGO 1', 14, 1),
(68, 'F340602', 'GCMB NEAR POST OFFICE AGOGO 2', 14, 1),
(69, 'F340603', 'BRAKO INTERNATIONAL SCH AGOGO 1', 14, 1),
(70, 'F340604', 'BRAKO INTERNATIONAL SCH AGOGO 2', 14, 1),
(71, 'F340605', 'OLD GCMB SHED AGOGO 1', 14, 1),
(72, 'F340606', 'OLD GCMB SHED AGOGO 2', 14, 1),
(73, 'F340607A', 'AGOGO STATE SHS', 14, 1),
(74, 'F340607B', 'AGOGO STATE SHS', 14, 1),
(75, 'F341101', 'PRESBY JHS AGOGO', 15, 1),
(76, 'F341102', 'HOSPITAL CHURCH AGOGO 1', 15, 1),
(77, 'F341103', 'HOSPITAL CHURCH AGOGO 2', 15, 1),
(78, 'F341104', 'COURT HOUSE AGOGO 1', 15, 1),
(79, 'F341105', 'COURT HOUSE AGOGO 2', 15, 1),
(80, 'F341106A', 'COLLINS SHS AGOGO', 15, 1),
(81, 'F341106B', 'COLLINS SHS AGOGO', 15, 1),
(82, 'F341201', 'D/A PRIM SCH MAGYEDA', 16, 1),
(83, 'F341202', 'D/A PRIM SCH BRANTUOKROM', 16, 1),
(84, 'F341203', 'D/A PRIM SCH ADINKRAKROM', 16, 1),
(85, 'F341301', 'D/A PRIM SCH ONYIMSO', 17, 1),
(86, 'F341302', 'D/A PRIM SCH PATABAN 1', 17, 1),
(87, 'F341303', 'D/A PRIM SCH PATABAN 2', 17, 1),
(88, 'F342001', 'HOLY EDUCATIONAL COMPLEX AKUTUASE', 18, 1),
(89, 'F342002', 'AKUTUASE PRESBY PRIM N0.2', 18, 1),
(90, 'F342003', 'TEMP BOOTH MARKET SQUARE AKUTUASE', 18, 1),
(91, 'F342004', 'D/A JHS AKUTUASE', 18, 1),
(92, 'F342101', 'PRESBY PRIM SCH WIOSO', 19, 1),
(93, 'F342102', 'SAVIOR CHURCH WIOSO', 19, 1),
(94, 'F342103', 'METH CHURCH WIOSO', 19, 1),
(95, 'F342201', 'D/A PRIM SCH WURAMPONSO 1', 20, 1),
(96, 'F342202', 'D/A PRIM SCH WURAMPONSO 2', 20, 1),
(97, 'F342203', 'D/A PRIM SCH MEENAM', 20, 1),
(98, 'F340901', 'NEW METH CHURCH AGOGO', 21, 1),
(99, 'F340902', 'OLD METH CHURCH AGOGO 1', 21, 1),
(100, 'F340903', 'OLD METH CHURCH AGOGO 2', 21, 1),
(101, 'F340904', 'HOME SCIENCE CENTRE AGOGO 1', 21, 1),
(102, 'F340905', 'HOME SCIENCE CENTRE AGOGO 2', 21, 1),
(103, 'F340906', 'NEW SAVIOUR CHURCH AGOGO 1', 21, 1),
(104, 'F340907', 'NEW SAVIOUR CHURCH AGOGO 2', 21, 1),
(105, 'F340908', 'OLD SAVIOUR CHURCH AGOGO 1', 21, 1),
(106, 'F340909', 'OLD SAVIOUR CHURCH AGOGO 2', 21, 1),
(107, 'F341001', 'PRESBY K.G.AGOGO', 22, 1),
(108, 'F341002', 'PRESBY PRIM SCH AGOGO', 22, 1),
(109, 'F341003', 'PRESBY CHURCH AGOGO 1', 22, 1),
(110, 'F341004', 'PRESBY CHURCH AGOGO 2', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `District` varchar(120) NOT NULL,
  `Constituency` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `Region`, `District`, `Constituency`) VALUES
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
(1, 'user', 'user@gmail.com', NULL, '$2y$10$E12e.XP1EoZNFSnOd0P2huM3csHwl4SbEqXjjo/CgMv6983pZ0o..', NULL, '2022-02-15 04:43:36', '2022-02-15 04:43:36'),
(2, 'Bernard', 'bernard@gmail.com', NULL, '$2y$10$6JC9/Uun95n7O.UXNF/EOupCsJoUIv0XjZSQr82EV8XM6r/N2DfaO', NULL, '2022-02-17 04:27:59', '2022-02-17 04:27:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Code`
--
ALTER TABLE `Code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Data`
--
ALTER TABLE `Data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `group_picture`
--
ALTER TABLE `group_picture`
  ADD PRIMARY KEY (`ps_id`);

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
-- Indexes for table `reg`
--
ALTER TABLE `reg`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Data`
--
ALTER TABLE `Data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `polling_station`
--
ALTER TABLE `polling_station`
  ADD CONSTRAINT `polling_station_ibfk_1` FOREIGN KEY (`Reg_id`) REFERENCES `reg` (`id`),
  ADD CONSTRAINT `polling_station_ibfk_2` FOREIGN KEY (`Code_id`) REFERENCES `Code` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
