-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 11:15 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `name_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-07-18 03:38:18', '2022-07-18 03:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categori` int(10) UNSIGNED NOT NULL,
  `name_categori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sub` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categori`, `name_categori`, `id_sub`, `created_at`, `updated_at`) VALUES
(1, 'FOR WOMEN', 0, '2022-07-21 01:17:26', '2022-07-21 01:17:26'),
(2, 'FOR MEN', 0, '2022-07-21 01:17:59', '2022-07-21 01:17:59'),
(3, 'FOR UNISEX', 0, '2022-07-21 01:18:17', '2022-07-21 01:18:17'),
(4, 'Clothing women', 1, '2022-07-21 02:03:07', '2022-07-21 11:29:21'),
(5, 'Accessories women', 1, '2022-07-21 02:03:20', '2022-07-21 11:29:13'),
(6, 'Shoes women', 1, '2022-07-21 02:03:37', '2022-07-21 11:29:03'),
(7, 'Hat women', 1, '2022-07-21 02:03:50', '2022-07-21 11:28:55'),
(8, 'Clothing men', 2, '2022-07-21 02:13:30', '2022-07-21 11:28:39'),
(9, 'Accessories men', 2, '2022-07-21 02:13:37', '2022-07-21 11:28:30'),
(10, 'Shoes men', 2, '2022-07-21 02:13:44', '2022-07-21 11:28:15'),
(11, 'Hat men', 2, '2022-07-21 02:13:50', '2022-07-21 11:28:04'),
(12, 'Clothing uni', 3, '2022-07-21 02:13:57', '2022-07-21 11:27:55'),
(13, 'Accessories uni', 3, '2022-07-21 02:14:04', '2022-07-21 11:27:47'),
(14, 'Shoes uni', 3, '2022-07-21 02:14:11', '2022-07-21 11:27:36'),
(15, 'Hat uni', 3, '2022-07-21 02:14:18', '2022-07-21 11:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id_color` int(10) UNSIGNED NOT NULL,
  `name_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id_color`, `name_color`, `created_at`, `updated_at`) VALUES
(1, 'Trắng', NULL, NULL),
(2, 'Đen', NULL, NULL),
(3, 'Đỏ', NULL, NULL),
(4, 'Vàng', NULL, NULL),
(5, 'Xanh Dương', NULL, NULL);

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
-- Table structure for table `img_uploads`
--

CREATE TABLE `img_uploads` (
  `id_img` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `img_uploads`
--

INSERT INTO `img_uploads` (`id_img`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, '10', 'upload/img/10/img_165846566610.jpg', '2022-07-21 21:54:26', '2022-07-21 21:54:26'),
(2, '10', 'upload/img/10/img_165846566610.jpg', '2022-07-21 21:54:26', '2022-07-21 21:54:26'),
(3, '10', 'upload/img/10/img_165846566610.jpg', '2022-07-21 21:54:26', '2022-07-21 21:54:26'),
(4, '10', 'upload/img/10/img_165846566610.jpg', '2022-07-21 21:54:26', '2022-07-21 21:54:26'),
(5, '11', 'upload/img/11/img_96165846579911.jpg', '2022-07-21 21:56:39', '2022-07-21 21:56:39'),
(6, '11', 'upload/img/11/img_70165846579911.jpg', '2022-07-21 21:56:39', '2022-07-21 21:56:39'),
(7, '11', 'upload/img/11/img_71165846579911.jpg', '2022-07-21 21:56:39', '2022-07-21 21:56:39'),
(8, '12', 'upload/img/12/img_82165847122412.jpg', '2022-07-21 23:27:04', '2022-07-21 23:27:04'),
(9, '12', 'upload/img/12/img_42165847122412.jpg', '2022-07-21 23:27:04', '2022-07-21 23:27:04'),
(10, '12', 'upload/img/12/img_29165847122412.jpg', '2022-07-21 23:27:04', '2022-07-21 23:27:04'),
(11, '13', 'upload/img/13/img_39165847238013.jpg', '2022-07-21 23:46:20', '2022-07-21 23:46:20'),
(12, '13', 'upload/img/13/img_73165847238013.jpg', '2022-07-21 23:46:20', '2022-07-21 23:46:20'),
(13, '13', 'upload/img/13/img_1165847238013.jpg', '2022-07-21 23:46:20', '2022-07-21 23:46:20'),
(14, '14', 'upload/img/14/img_91165871694814.jpg', '2022-07-24 19:42:28', '2022-07-24 19:42:28'),
(15, '14', 'upload/img/14/img_44165871694814.jpg', '2022-07-24 19:42:28', '2022-07-24 19:42:28'),
(16, '14', 'upload/img/14/img_82165871694814.jpg', '2022-07-24 19:42:28', '2022-07-24 19:42:28'),
(17, '14', 'upload/img/14/img_75165871694814.jpg', '2022-07-24 19:42:28', '2022-07-24 19:42:28'),
(18, '14', 'upload/img/14/img_51165871694814.jpg', '2022-07-24 19:42:29', '2022-07-24 19:42:29'),
(19, '15', 'upload/img/15/img_0165871706215.jpg', '2022-07-24 19:44:22', '2022-07-24 19:44:22'),
(20, '15', 'upload/img/15/img_64165871706215.jpg', '2022-07-24 19:44:22', '2022-07-24 19:44:22'),
(21, '15', 'upload/img/15/img_61165871706215.jpg', '2022-07-24 19:44:23', '2022-07-24 19:44:23'),
(22, '15', 'upload/img/15/img_13165871706215.jpg', '2022-07-24 19:44:23', '2022-07-24 19:44:23'),
(23, '15', 'upload/img/15/img_15165871706215.jpg', '2022-07-24 19:44:23', '2022-07-24 19:44:23'),
(24, '16', 'upload/img/16/img_81165871710516.jpg', '2022-07-24 19:45:05', '2022-07-24 19:45:05'),
(25, '16', 'upload/img/16/img_60165871710516.jpg', '2022-07-24 19:45:06', '2022-07-24 19:45:06'),
(26, '16', 'upload/img/16/img_29165871710516.jpg', '2022-07-24 19:45:06', '2022-07-24 19:45:06'),
(27, '16', 'upload/img/16/img_19165871710516.jpg', '2022-07-24 19:45:06', '2022-07-24 19:45:06'),
(28, '16', 'upload/img/16/img_97165871710516.jpg', '2022-07-24 19:45:06', '2022-07-24 19:45:06'),
(29, '17', 'upload/img/17/img_9165871714517.jpg', '2022-07-24 19:45:45', '2022-07-24 19:45:45'),
(30, '17', 'upload/img/17/img_87165871714517.jpg', '2022-07-24 19:45:45', '2022-07-24 19:45:45'),
(31, '17', 'upload/img/17/img_35165871714517.jpg', '2022-07-24 19:45:46', '2022-07-24 19:45:46'),
(32, '17', 'upload/img/17/img_11165871714517.jpg', '2022-07-24 19:45:46', '2022-07-24 19:45:46'),
(33, '17', 'upload/img/17/img_16165871714517.jpg', '2022-07-24 19:45:46', '2022-07-24 19:45:46'),
(34, '18', 'upload/img/18/img_39165871718218.jpg', '2022-07-24 19:46:22', '2022-07-24 19:46:22'),
(35, '18', 'upload/img/18/img_24165871718218.jpg', '2022-07-24 19:46:22', '2022-07-24 19:46:22'),
(36, '18', 'upload/img/18/img_23165871718218.jpg', '2022-07-24 19:46:22', '2022-07-24 19:46:22'),
(37, '18', 'upload/img/18/img_35165871718218.jpg', '2022-07-24 19:46:22', '2022-07-24 19:46:22'),
(38, '18', 'upload/img/18/img_43165871718218.jpg', '2022-07-24 19:46:22', '2022-07-24 19:46:22'),
(39, '19', 'upload/img/19/img_93165871722819.jpg', '2022-07-24 19:47:08', '2022-07-24 19:47:08'),
(40, '19', 'upload/img/19/img_82165871722819.jpg', '2022-07-24 19:47:08', '2022-07-24 19:47:08'),
(41, '19', 'upload/img/19/img_89165871722819.jpg', '2022-07-24 19:47:08', '2022-07-24 19:47:08'),
(42, '19', 'upload/img/19/img_80165871722819.jpg', '2022-07-24 19:47:08', '2022-07-24 19:47:08'),
(43, '19', 'upload/img/19/img_97165871722819.jpg', '2022-07-24 19:47:08', '2022-07-24 19:47:08'),
(44, '20', 'upload/img/20/img_91165871728820.jpg', '2022-07-24 19:48:08', '2022-07-24 19:48:08'),
(45, '20', 'upload/img/20/img_98165871728820.jpg', '2022-07-24 19:48:08', '2022-07-24 19:48:08'),
(46, '20', 'upload/img/20/img_51165871728820.jpg', '2022-07-24 19:48:08', '2022-07-24 19:48:08'),
(47, '20', 'upload/img/20/img_91165871728820.jpg', '2022-07-24 19:48:08', '2022-07-24 19:48:08'),
(48, '20', 'upload/img/20/img_70165871728820.jpg', '2022-07-24 19:48:08', '2022-07-24 19:48:08'),
(49, '21', 'upload/img/21/img_39165871736021.jpg', '2022-07-24 19:49:20', '2022-07-24 19:49:20'),
(50, '21', 'upload/img/21/img_53165871736021.jpg', '2022-07-24 19:49:20', '2022-07-24 19:49:20'),
(51, '21', 'upload/img/21/img_85165871736021.jpg', '2022-07-24 19:49:20', '2022-07-24 19:49:20'),
(52, '21', 'upload/img/21/img_94165871736021.jpg', '2022-07-24 19:49:20', '2022-07-24 19:49:20'),
(53, '21', 'upload/img/21/img_53165871736021.jpg', '2022-07-24 19:49:20', '2022-07-24 19:49:20'),
(54, '22', 'upload/img/22/img_80165871755522.jpg', '2022-07-24 19:52:35', '2022-07-24 19:52:35'),
(55, '22', 'upload/img/22/img_49165871755522.jpg', '2022-07-24 19:52:35', '2022-07-24 19:52:35'),
(56, '22', 'upload/img/22/img_72165871755522.jpg', '2022-07-24 19:52:35', '2022-07-24 19:52:35'),
(57, '22', 'upload/img/22/img_77165871755522.jpg', '2022-07-24 19:52:35', '2022-07-24 19:52:35'),
(58, '22', 'upload/img/22/img_6165871755522.jpg', '2022-07-24 19:52:35', '2022-07-24 19:52:35'),
(59, '23', 'upload/img/23/img_2165871760023.jpg', '2022-07-24 19:53:20', '2022-07-24 19:53:20'),
(60, '23', 'upload/img/23/img_1165871760023.jpg', '2022-07-24 19:53:20', '2022-07-24 19:53:20'),
(61, '23', 'upload/img/23/img_22165871760023.jpg', '2022-07-24 19:53:20', '2022-07-24 19:53:20'),
(62, '23', 'upload/img/23/img_6165871760023.jpg', '2022-07-24 19:53:20', '2022-07-24 19:53:20'),
(63, '24', 'upload/img/24/img_32165871764724.jpg', '2022-07-24 19:54:07', '2022-07-24 19:54:07'),
(64, '24', 'upload/img/24/img_22165871764724.jpg', '2022-07-24 19:54:07', '2022-07-24 19:54:07'),
(65, '24', 'upload/img/24/img_14165871764724.jpg', '2022-07-24 19:54:07', '2022-07-24 19:54:07'),
(66, '25', 'upload/img/25/img_25165871773525.jpg', '2022-07-24 19:55:35', '2022-07-24 19:55:35'),
(67, '25', 'upload/img/25/img_85165871773525.jpg', '2022-07-24 19:55:35', '2022-07-24 19:55:35'),
(68, '25', 'upload/img/25/img_25165871773525.jpg', '2022-07-24 19:55:35', '2022-07-24 19:55:35'),
(69, '25', 'upload/img/25/img_77165871773525.jpg', '2022-07-24 19:55:35', '2022-07-24 19:55:35'),
(70, '26', 'upload/img/26/img_17165871777426.jpg', '2022-07-24 19:56:14', '2022-07-24 19:56:14'),
(71, '26', 'upload/img/26/img_88165871777426.jpg', '2022-07-24 19:56:14', '2022-07-24 19:56:14'),
(72, '26', 'upload/img/26/img_99165871777426.jpg', '2022-07-24 19:56:14', '2022-07-24 19:56:14'),
(73, '26', 'upload/img/26/img_95165871777426.jpg', '2022-07-24 19:56:14', '2022-07-24 19:56:14'),
(74, '27', 'upload/img/27/img_3165871782327.jpg', '2022-07-24 19:57:03', '2022-07-24 19:57:03'),
(75, '27', 'upload/img/27/img_47165871782327.jpg', '2022-07-24 19:57:03', '2022-07-24 19:57:03'),
(76, '27', 'upload/img/27/img_21165871782327.jpg', '2022-07-24 19:57:03', '2022-07-24 19:57:03'),
(77, '27', 'upload/img/27/img_53165871782327.jpg', '2022-07-24 19:57:03', '2022-07-24 19:57:03');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_18_012222_create_admin_table', 1),
(6, '2022_07_18_013111_products', 1),
(7, '2022_07_18_013453_img_uploads', 1),
(8, '2022_07_18_013537_categories', 1),
(9, '2022_07_18_013559_colors', 1),
(10, '2022_07_18_013620_sizes', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categori` int(11) NOT NULL,
  `id_sub_categori` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `name_product`, `price`, `description`, `id_color`, `id_size`, `id_categori`, `id_sub_categori`, `created_at`, `updated_at`) VALUES
(14, NULL, 'Áo nam 1', 120000, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 2, 8, '2022-07-24 19:42:28', '2022-07-24 19:42:28'),
(15, NULL, 'Áo nam 2', 150, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 2, 8, '2022-07-24 19:44:22', '2022-07-24 19:44:22'),
(16, NULL, 'Áo nam 3', 250, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 2, 9, '2022-07-24 19:45:05', '2022-07-24 19:45:05'),
(17, NULL, 'Áo nam 4', 350, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 2, 10, '2022-07-24 19:45:45', '2022-07-24 19:45:45'),
(18, NULL, 'Áo nam 5', 450, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 2, 11, '2022-07-24 19:46:22', '2022-07-24 19:46:22'),
(19, NULL, 'Áo nữ 1', 250, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '3,2,1', '5,4,3,2', 1, 4, '2022-07-24 19:47:08', '2022-07-24 19:47:08'),
(20, NULL, 'Áo nữ 2', 550, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '4,3', '5,4,2', 1, 4, '2022-07-24 19:48:08', '2022-07-24 19:48:08'),
(21, NULL, 'Áo nữ 3', 670, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '4,2,1', '5,3,2,1', 1, 5, '2022-07-24 19:49:19', '2022-07-24 19:49:19'),
(22, NULL, 'Áo nữ 4', 666, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 1, 6, '2022-07-24 19:52:35', '2022-07-24 19:52:35'),
(23, NULL, 'Áo nữ 5', 120000, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5,4,3,2,1', '5,4,3,2,1', 1, 7, '2022-07-24 19:53:20', '2022-07-24 19:53:20'),
(24, NULL, 'Sản phẩm 1', 446, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '2,1', '5,4,3', 3, 12, '2022-07-24 19:54:07', '2022-07-24 19:54:07'),
(25, NULL, 'Sản phẩm 2', 666, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '4', '4', 3, 13, '2022-07-24 19:55:35', '2022-07-24 19:55:35'),
(26, NULL, 'Sản phẩm 3', 414, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5', '4', 3, 14, '2022-07-24 19:56:14', '2022-07-24 19:56:14'),
(27, NULL, 'Sản phẩm 4', 888, '<p>&Aacute;o polo chất liệu lacoste cotton spandex, in hoạ tiết, phom regular.</p>', '5', '2', 3, 15, '2022-07-24 19:57:02', '2022-07-24 19:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id_size` int(10) UNSIGNED NOT NULL,
  `name_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id_size`, `name_size`, `created_at`, `updated_at`) VALUES
(1, 'S', NULL, NULL),
(2, 'M', NULL, NULL),
(3, 'L', NULL, NULL),
(4, 'XL', NULL, NULL),
(5, 'XXL', NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categori`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `img_uploads`
--
ALTER TABLE `img_uploads`
  ADD PRIMARY KEY (`id_img`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_size`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_uploads`
--
ALTER TABLE `img_uploads`
  MODIFY `id_img` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_size` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
