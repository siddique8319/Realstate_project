-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 01:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housing`
--

-- --------------------------------------------------------

--
-- Table structure for table `commission_entries`
--

CREATE TABLE `commission_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission_entries`
--

INSERT INTO `commission_entries` (`id`, `commission_type`, `com`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Economy', '10%', 0, '2020-01-16 05:20:19', '2020-01-16 05:20:19'),
(3, 'Business', '30%', 0, '2020-01-16 05:21:02', '2020-01-16 05:32:06'),
(4, 'Economy', 'fgfg', 0, '2020-01-20 06:55:55', '2020-01-20 07:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `commission_types`
--

CREATE TABLE `commission_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission_types`
--

INSERT INTO `commission_types` (`id`, `commission_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Business', 0, '2020-01-16 04:50:56', '2020-01-16 04:50:56'),
(3, 'Economy', 0, '2020-01-16 04:50:58', '2020-01-16 04:58:03'),
(6, 'fg', 0, '2020-01-20 07:06:34', '2020-01-20 07:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'WEB DEVELOPER', '2020-01-16 07:33:58', '2020-01-23 02:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `house_no`, `floor_no`, `flat_no`, `discount`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(14, '53/2A', '3nd floor', 'ghgh', '11', '222', '222', '2020-01-17 21:38:40', '2020-01-22 03:05:32'),
(15, 'ghg', 'ww', 'ghgh', '30%', '11/11/2020', '11/11/2021', '2020-01-19 23:17:20', '2020-01-19 23:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fix_sallaries`
--

CREATE TABLE `fix_sallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sallary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fix_sallaries`
--

INSERT INTO `fix_sallaries` (`id`, `info`, `sallary`, `created_at`, `updated_at`) VALUES
(4, 'MD. salman KHAN', '23k', '2020-01-17 23:01:49', '2020-01-17 23:01:49'),
(5, 'MD. salman KHAN', 'dre', '2020-01-18 22:05:17', '2020-01-18 22:05:17'),
(6, 'MD. EMON', 'ty', '2020-01-18 22:05:23', '2020-01-22 05:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `flatnos`
--

CREATE TABLE `flatnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flatnos`
--

INSERT INTO `flatnos` (`id`, `house_no`, `floor_no`, `flat_no`, `status`, `created_at`, `updated_at`) VALUES
(1, '53/2A', '3nd floor', '2nd floor', 0, '2020-01-15 07:31:46', '2020-01-15 07:31:46'),
(13, 'c', 'ww', 'ghgh', 0, '2020-01-19 06:39:17', '2020-01-19 06:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `flat_discounts`
--

CREATE TABLE `flat_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flat_discounts`
--

INSERT INTO `flat_discounts` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Discount Up To 80%', '1579762163.jpeg', '2020-01-23 00:49:23', '2020-01-23 00:49:23'),
(11, 'Discount Up To 50%', '1579765017.jpeg', '2020-01-23 01:36:57', '2020-01-23 01:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `flat_prices`
--

CREATE TABLE `flat_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flat_prices`
--

INSERT INTO `flat_prices` (`id`, `house_no`, `floor_no`, `flat_no`, `flat_price`, `status`, `created_at`, `updated_at`) VALUES
(5, '53/2A', '3nd floor', '2nd floor', 'cfff', 0, '2020-01-16 01:08:25', '2020-01-16 01:08:25'),
(6, 'c', 'ww', '2nd floor', '2323ujg', 0, '2020-01-19 07:24:40', '2020-01-19 21:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `flat_sizes`
--

CREATE TABLE `flat_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flat_sizes`
--

INSERT INTO `flat_sizes` (`id`, `house_no`, `floor_no`, `flat_no`, `flat_size`, `status`, `created_at`, `updated_at`) VALUES
(9, '53/2A', '3nd floor', '2nd floor', '10%', 0, '2020-01-17 21:41:48', '2020-01-17 21:41:48'),
(10, 'c', 'ww', '2nd floor', 'ghggggghn', 0, '2020-01-19 07:03:29', '2020-01-19 21:43:56'),
(11, '53/2A', '3rd floor', '2nd floor', '2300sqft', 0, '2020-01-19 22:19:17', '2020-01-19 22:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `floor_entries`
--

CREATE TABLE `floor_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floor_entries`
--

INSERT INTO `floor_entries` (`id`, `house_no`, `floor_no`, `status`, `created_at`, `updated_at`) VALUES
(1, '532e', '3rd floor', 0, '2020-01-15 06:37:44', '2020-01-18 00:30:51'),
(2, '53/2A', 'ww', 0, '2020-01-18 01:48:31', '2020-01-18 01:48:31'),
(3, '53/2A', 'fgrtrrrr', 0, '2020-01-19 05:52:46', '2020-01-19 06:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(10) UNSIGNED NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_no`, `project_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '53/2A', 'Housing', 0, '2020-01-15 06:37:20', '2020-01-15 06:37:20'),
(2, 'eee', 'Housing', 0, '2020-01-15 07:46:21', '2020-01-18 00:49:58'),
(9, 'c', 'fgg', 0, '2020-01-19 04:31:11', '2020-01-19 04:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `incentive_entries`
--

CREATE TABLE `incentive_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `incentive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incentive_entries`
--

INSERT INTO `incentive_entries` (`id`, `incentive`, `created_at`, `updated_at`) VALUES
(4, '12%', '2020-01-16 05:42:48', '2020-01-16 05:42:48'),
(5, '12%', '2020-01-16 05:42:49', '2020-01-16 05:42:49'),
(7, '30%', '2020-01-20 07:36:24', '2020-01-22 05:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `created_at`, `updated_at`) VALUES
(7, 'Discount', '2020-01-23 03:28:50', '2020-01-23 03:28:50'),
(8, 'Menu', '2020-01-23 03:29:09', '2020-01-23 03:29:09'),
(9, 'Report', '2020-01-23 03:29:21', '2020-01-23 03:29:21'),
(10, 'Client-Entry', '2020-01-23 03:30:16', '2020-01-23 03:30:16'),
(11, 'Staff-Entry', '2020-01-23 03:30:45', '2020-01-23 03:30:45'),
(12, 'Commission', '2020-01-23 03:31:02', '2020-01-23 03:31:02'),
(13, 'Flat-Setup', '2020-01-23 03:31:19', '2020-01-23 03:31:19'),
(14, 'Messaging', '2020-01-23 03:31:40', '2020-01-23 03:31:40');

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
(4, '2020_01_14_201412_create_posts_table', 1),
(5, '2020_01_14_215357_create_project_names_table', 1),
(6, '2020_01_15_054349_create_houses_table', 1),
(7, '2020_01_15_083105_create_floor_entries_table', 1),
(8, '2020_01_15_125611_create_flatnos_table', 2),
(9, '2020_01_16_033703_create_flat_sizes_table', 3),
(10, '2020_01_16_054619_create_flat_prices_table', 4),
(11, '2020_01_16_071210_create_discounts_table', 5),
(12, '2020_01_16_072658_create_discounts_table', 6),
(13, '2020_01_16_093303_create_commission_types_table', 7),
(14, '2020_01_16_093514_create_commission_entries_table', 7),
(15, '2020_01_16_094022_create_commission_entries_table', 8),
(16, '2020_01_16_095850_create_incentive_entries_table', 9),
(17, '2020_01_16_115719_create_staff_types_table', 10),
(18, '2020_01_16_115753_create_designations_table', 10),
(19, '2020_01_16_115825_create_staff_table', 10),
(20, '2020_01_16_115906_create_fix_sallaries_table', 10),
(21, '2020_01_16_120008_create_year_entries_table', 10),
(22, '2020_01_20_090840_create_menus_table', 11),
(23, '2020_01_20_110550_create_sub_menus_table', 12),
(24, '2020_01_21_051609_create_permission_menus_table', 13),
(25, '2020_01_21_090248_create_permission_sub_menus_table', 14),
(26, '2020_01_22_084922_create_flat_discounts_table', 15);

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
-- Table structure for table `permission_menus`
--

CREATE TABLE `permission_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_menus`
--

INSERT INTO `permission_menus` (`id`, `menu`, `user_role`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Discount', '1', '0', '2020-01-23 03:32:48', '2020-01-23 03:32:48'),
(16, 'Menu', '1', '0', '2020-01-23 03:32:57', '2020-01-23 03:32:57'),
(17, 'Report', '1', '0', '2020-01-23 03:33:04', '2020-01-23 03:33:04'),
(18, 'Client-Entry', '1', '0', '2020-01-23 03:33:19', '2020-01-23 03:33:19'),
(19, 'Staff-Entry', '1', '0', '2020-01-23 03:33:28', '2020-01-23 03:33:28'),
(20, 'Commission', '1', '0', '2020-01-23 03:33:42', '2020-01-23 03:33:42'),
(21, 'Flat-Setup', '1', '0', '2020-01-23 03:33:50', '2020-01-23 03:33:50'),
(22, 'Messaging', '1', '0', '2020-01-23 03:33:56', '2020-01-23 06:06:19'),
(23, 'Discount', '2', '0', '2020-01-23 03:34:08', '2020-01-23 03:34:08'),
(24, 'Menu', '2', '0', '2020-01-23 03:34:15', '2020-01-23 03:34:15'),
(25, 'Report', '2', '0', '2020-01-23 03:34:25', '2020-01-23 03:34:25'),
(26, 'Client-Entry', '2', '0', '2020-01-23 03:34:33', '2020-01-23 03:34:33'),
(27, 'Staff-Entry', '2', '0', '2020-01-23 03:34:41', '2020-01-23 03:34:41'),
(28, 'Commission', '2', '0', '2020-01-23 03:34:49', '2020-01-23 03:34:49'),
(29, 'Flat-Setup', '2', '0', '2020-01-23 03:34:56', '2020-01-23 03:34:56'),
(30, 'Messaging', '2', '0', '2020-01-23 03:35:09', '2020-01-23 03:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_sub_menus`
--

CREATE TABLE `permission_sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_sub_menus`
--

INSERT INTO `permission_sub_menus` (`id`, `menu`, `sub_menu`, `user_role`, `url`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Discount', 'ADD Discount', '1', 'discountentry', 0, '2020-01-23 03:50:35', '2020-01-23 03:50:35'),
(21, 'Menu', 'Permission Sub  Menu', '1', 'permissionSubmenu', 0, '2020-01-23 03:51:22', '2020-01-23 03:51:22'),
(22, 'Menu', 'Sub Menu', '1', 'submenu', 0, '2020-01-23 03:51:47', '2020-01-23 03:51:47'),
(23, 'Menu', 'Permission Menu', '1', 'permissionmenu', 0, '2020-01-23 03:52:14', '2020-01-23 03:52:14'),
(24, 'Menu', 'ADD Menu', '1', 'menu', 0, '2020-01-23 03:52:35', '2020-01-23 03:52:35'),
(25, 'Client-Entry', 'New Client Entry', '1', 'new-client-entry', 0, '2020-01-23 03:53:42', '2020-01-23 03:53:42'),
(26, 'Staff-Entry', 'Designation Entry', '1', 'designation', 0, '2020-01-23 03:54:37', '2020-01-23 03:54:37'),
(27, 'Staff-Entry', 'Staff Entry', '1', 'staff', 0, '2020-01-23 03:55:05', '2020-01-23 03:55:05'),
(28, 'Staff-Entry', 'Staff Type Entry', '1', 'staffType', 0, '2020-01-23 03:57:14', '2020-01-23 03:57:14'),
(29, 'Commission', 'Fix Sallery Entry', '1', 'sallary', 0, '2020-01-23 04:00:13', '2020-01-23 04:00:13'),
(30, 'Commission', 'Incentive Entry', '1', 'incentive', 0, '2020-01-23 04:01:12', '2020-01-23 04:01:12'),
(31, 'Commission', 'Commission Entry', '1', 'commissionEntry', 0, '2020-01-23 04:02:05', '2020-01-23 04:02:05'),
(32, 'Commission', 'Commission Type Entry', '1', 'commissionType', 0, '2020-01-23 04:02:44', '2020-01-23 04:02:44'),
(33, 'Flat-Setup', 'Year Entry', '1', 'year', 0, '2020-01-23 04:03:16', '2020-01-23 04:03:16'),
(34, 'Flat-Setup', 'Installment Entry', '1', 'installment-entry', 0, '2020-01-23 04:04:19', '2020-01-23 04:04:19'),
(35, 'Flat-Setup', 'Flat Price Entry', '1', 'flatpriceentry', 0, '2020-01-23 04:04:52', '2020-01-23 04:04:52'),
(36, 'Flat-Setup', 'Flat Size Entry', '1', 'flatsizeentry', 0, '2020-01-23 04:05:32', '2020-01-23 04:05:32'),
(37, 'Flat-Setup', 'Flat No Entry', '1', 'flatno-entry', 0, '2020-01-23 04:06:07', '2020-01-23 04:06:07'),
(38, 'Flat-Setup', 'Floor Entry', '1', 'floor-entry', 0, '2020-01-23 04:06:37', '2020-01-23 04:06:37'),
(39, 'Flat-Setup', 'House Entry', '1', 'house-entry', 0, '2020-01-23 04:07:08', '2020-01-23 04:07:08'),
(40, 'Flat-Setup', 'Project Name', '1', 'project-name', 0, '2020-01-23 04:07:53', '2020-01-23 04:07:53'),
(41, 'Messaging', 'Read Message', '1', 'readmessage', 0, '2020-01-23 04:08:20', '2020-01-23 04:08:20'),
(42, 'Messaging', 'New Message', '1', 'message', 0, '2020-01-23 04:08:40', '2020-01-23 04:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_names`
--

CREATE TABLE `project_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_names`
--

INSERT INTO `project_names` (`id`, `name`, `created_at`, `updated_at`) VALUES
(59, 'housing', '2020-01-19 02:06:27', '2020-01-19 03:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `type`, `designation`, `info`, `created_at`, `updated_at`) VALUES
(9, 'Manager', 'WEB DEVELOPER', 'software', '2020-01-16 08:04:26', '2020-01-16 08:06:31'),
(10, 'Manager', 'WEB DEVELOPER', 'ert4', '2020-01-16 08:04:27', '2020-01-16 08:04:27'),
(11, 'Manager', 'WEB DEVELOPER', 'MD. EMON', '2020-01-17 22:05:05', '2020-01-17 22:05:05'),
(25, 'Manager', 'WEB DEVELOPER', 'MD. Imran Khan', '2020-01-17 22:39:27', '2020-01-17 22:39:27'),
(32, 'Admin', 'WEB DEVELOPER', 'MD. salman KHAN', '2020-01-17 22:40:15', '2020-01-23 03:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `staff_types`
--

CREATE TABLE `staff_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_types`
--

INSERT INTO `staff_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '2020-01-16 07:15:13', '2020-01-18 00:29:39'),
(3, 'Managers', '2020-01-16 07:15:17', '2020-01-23 02:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `sub_menu`, `created_at`, `updated_at`) VALUES
(15, 'ADD Discount', '2020-01-23 03:41:59', '2020-01-23 03:41:59'),
(16, 'Permission Sub  Menu', '2020-01-23 03:42:19', '2020-01-23 03:42:19'),
(17, 'Sub Menu', '2020-01-23 03:42:32', '2020-01-23 03:42:32'),
(18, 'Permission Menu', '2020-01-23 03:42:54', '2020-01-23 03:42:54'),
(19, 'ADD Menu', '2020-01-23 03:43:00', '2020-01-23 03:43:00'),
(20, 'New Client Entry', '2020-01-23 03:43:12', '2020-01-23 03:43:12'),
(21, 'Designation Entry', '2020-01-23 03:43:23', '2020-01-23 03:43:52'),
(22, 'Staff Entry', '2020-01-23 03:43:30', '2020-01-23 03:43:30'),
(23, 'Staff Type Entry', '2020-01-23 03:44:01', '2020-01-23 03:44:01'),
(24, 'Fix Sallery Entry', '2020-01-23 03:44:27', '2020-01-23 03:44:27'),
(25, 'Incentive Entry', '2020-01-23 03:44:45', '2020-01-23 03:44:45'),
(26, 'Commission Entry', '2020-01-23 03:45:07', '2020-01-23 03:45:07'),
(27, 'Commission Type Entry', '2020-01-23 03:45:28', '2020-01-23 03:45:28'),
(28, 'Year Entry', '2020-01-23 03:45:46', '2020-01-23 03:45:46'),
(29, 'Installment Entry', '2020-01-23 03:46:03', '2020-01-23 03:46:03'),
(30, 'Flat Discount Entry', '2020-01-23 03:46:24', '2020-01-23 03:46:24'),
(31, 'Flat Price Entry', '2020-01-23 03:46:42', '2020-01-23 03:46:42'),
(32, 'Flat Size Entry', '2020-01-23 03:47:06', '2020-01-23 03:47:06'),
(33, 'Flat No Entry', '2020-01-23 03:47:21', '2020-01-23 03:47:21'),
(34, 'Floor Entry', '2020-01-23 03:47:33', '2020-01-23 03:47:33'),
(35, 'House Entry', '2020-01-23 03:47:43', '2020-01-23 03:47:43'),
(36, 'Project Name', '2020-01-23 03:47:58', '2020-01-23 03:47:58'),
(37, 'Read Message', '2020-01-23 03:48:10', '2020-01-23 03:48:10'),
(38, 'New Message', '2020-01-23 03:48:22', '2020-01-23 03:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1', 'amin35-1260@diu.edu.bd', NULL, '$2y$10$pAn78vzfpM/3qzBYBgEDPOIWLHZnajQZfHZzTLLVBXz.ojm7vA68G', NULL, '2020-01-20 02:08:52', '2020-01-20 02:08:52'),
(2, 'staff', '2', 'doofaz@gmail.com', NULL, '$2y$10$UeAXQNUCzUDvKqeCQngugOG8RSWbBZx0CVQ2bjPYYwizFfvuTAUEm', NULL, '2020-01-20 02:17:05', '2020-01-20 02:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `year_entries`
--

CREATE TABLE `year_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `year_entries`
--

INSERT INTO `year_entries` (`id`, `year`, `month`, `created_at`, `updated_at`) VALUES
(24, '5', '60', '2020-01-18 05:02:57', '2020-01-20 00:00:19'),
(25, '4', '48', '2020-01-18 05:11:49', '2020-01-20 00:00:03'),
(26, '2', '24 c', '2020-01-19 23:54:47', '2020-01-23 05:50:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commission_entries`
--
ALTER TABLE `commission_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_types`
--
ALTER TABLE `commission_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fix_sallaries`
--
ALTER TABLE `fix_sallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flatnos`
--
ALTER TABLE `flatnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_discounts`
--
ALTER TABLE `flat_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_prices`
--
ALTER TABLE `flat_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_sizes`
--
ALTER TABLE `flat_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_entries`
--
ALTER TABLE `floor_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incentive_entries`
--
ALTER TABLE `incentive_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `permission_menus`
--
ALTER TABLE `permission_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_sub_menus`
--
ALTER TABLE `permission_sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_names`
--
ALTER TABLE `project_names`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `info` (`info`),
  ADD UNIQUE KEY `info_2` (`info`);

--
-- Indexes for table `staff_types`
--
ALTER TABLE `staff_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `year_entries`
--
ALTER TABLE `year_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commission_entries`
--
ALTER TABLE `commission_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commission_types`
--
ALTER TABLE `commission_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fix_sallaries`
--
ALTER TABLE `fix_sallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flatnos`
--
ALTER TABLE `flatnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flat_discounts`
--
ALTER TABLE `flat_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flat_prices`
--
ALTER TABLE `flat_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flat_sizes`
--
ALTER TABLE `flat_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `floor_entries`
--
ALTER TABLE `floor_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `incentive_entries`
--
ALTER TABLE `incentive_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `permission_menus`
--
ALTER TABLE `permission_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permission_sub_menus`
--
ALTER TABLE `permission_sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_names`
--
ALTER TABLE `project_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `staff_types`
--
ALTER TABLE `staff_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year_entries`
--
ALTER TABLE `year_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
