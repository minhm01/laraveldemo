-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2021 at 03:20 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_11_011711_create_tb1_admin_table', 1),
(5, '2021_03_15_013809_create_tb1_category_product', 1),
(6, '2021_03_17_012917_tb1_brand_product', 1),
(7, '2021_03_17_024918_tb1_product', 1),
(8, '2021_04_06_075500_tb1_order', 1),
(9, '2021_04_19_021850_tb1_order_detail', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_admin`
--

DROP TABLE IF EXISTS `tb1_admin`;
CREATE TABLE IF NOT EXISTS `tb1_admin` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tb1_admin_admin_email_unique` (`admin_email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb1_admin`
--

INSERT INTO `tb1_admin` (`id`, `admin_email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'minhm0987@gmail.com', '5c55d71b4c47d141072cf0540c046d07', '2021-04-27 04:04:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_brand_product`
--

DROP TABLE IF EXISTS `tb1_brand_product`;
CREATE TABLE IF NOT EXISTS `tb1_brand_product` (
  `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb1_brand_product`
--

INSERT INTO `tb1_brand_product` (`brand_id`, `brand_name`, `brand_stt`, `created_at`, `updated_at`) VALUES
(1, 'TH1', 1, '2021-04-22 04:01:41', NULL),
(2, 'TH2', 1, '2021-04-22 04:01:45', NULL),
(3, 'TH3', 1, '2021-04-22 04:01:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_category_product`
--

DROP TABLE IF EXISTS `tb1_category_product`;
CREATE TABLE IF NOT EXISTS `tb1_category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb1_category_product`
--

INSERT INTO `tb1_category_product` (`category_id`, `category_name`, `category_stt`, `created_at`, `updated_at`) VALUES
(1, 'DM1', 1, '2021-04-22 04:01:30', NULL),
(2, 'DM2', 1, '2021-04-22 04:01:32', NULL),
(3, 'DM3', 1, '2021-04-22 04:01:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_order`
--

DROP TABLE IF EXISTS `tb1_order`;
CREATE TABLE IF NOT EXISTS `tb1_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb1_order`
--

INSERT INTO `tb1_order` (`order_id`, `c_name`, `c_address`, `c_phone`, `c_email`, `note`, `total`, `payment`, `status`, `created_at`, `updated_at`) VALUES
(26, '1', '1', '1', '1@gmail.com', '1', 20, 'c', '0', '2021-05-07 03:32:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_order_detail`
--

DROP TABLE IF EXISTS `tb1_order_detail`;
CREATE TABLE IF NOT EXISTS `tb1_order_detail` (
  `order_detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_detail_id`),
  KEY `product_id` (`product_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb1_order_detail`
--

INSERT INTO `tb1_order_detail` (`order_detail_id`, `order_id`, `product_name`, `product_id`, `product_image`, `qty`, `sum`, `created_at`, `updated_at`) VALUES
(1, 26, 'SP2', 2, '1619064282.png', 4, 8, '2021-05-07 03:32:34', NULL),
(2, 26, 'SP1', 1, '1619064269.png', 12, 12, '2021-05-07 03:32:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_product`
--

DROP TABLE IF EXISTS `tb1_product`;
CREATE TABLE IF NOT EXISTS `tb1_product` (
  `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb1_product`
--

INSERT INTO `tb1_product` (`product_id`, `product_name`, `product_price`, `product_image`, `brand_id`, `category_id`, `product_content`, `product_stt`, `created_at`, `updated_at`) VALUES
(1, 'SP1', '1', '1619064269.png', 3, 3, '1', 1, '2021-04-22 04:04:29', '2021-05-07 07:03:20'),
(2, 'SP2', '2', '1619064282.png', 2, 3, '2', 1, '2021-04-22 04:04:42', NULL),
(3, 'SP3', '3', '1619064293.png', 1, 3, '3', 1, '2021-04-22 04:04:53', NULL),
(4, 'SP4', '4', '1619064302.gif', 3, 2, '4', 1, '2021-04-22 04:05:02', NULL),
(5, 'SP5', '5', '1619064312.png', 2, 2, '5', 1, '2021-04-22 04:05:12', NULL),
(6, 'SP6', '6', '1619064324.png', 1, 2, '6', 1, '2021-04-22 04:05:24', NULL),
(7, 'SP7', '7', '1619064335.jpeg', 3, 1, '7', 1, '2021-04-22 04:05:35', NULL),
(8, 'SP8', '8', '1619064346.png', 2, 1, '8', 1, '2021-04-22 04:05:46', NULL),
(9, 'SP9', '9', '1619064355.png', 1, 1, '9', 1, '2021-04-22 04:05:55', NULL),
(10, 'SP7', '7', '1620268590.jpeg', 2, 2, 'AAAAAA', 1, '2021-05-06 02:36:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb1_order_detail`
--
ALTER TABLE `tb1_order_detail`
  ADD CONSTRAINT `tb1_order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tb1_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb1_order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tb1_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb1_product`
--
ALTER TABLE `tb1_product`
  ADD CONSTRAINT `tb1_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tb1_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb1_product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `tb1_brand_product` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
