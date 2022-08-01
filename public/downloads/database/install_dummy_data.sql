-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 11:08 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global_withdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctionbidders`
--

CREATE TABLE `auctionbidders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `auction_id` int(10) UNSIGNED DEFAULT NULL,
  `bidder_id` int(10) UNSIGNED DEFAULT NULL,
  `no_of_times` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin_sent_email` enum('Yes','No') CHARACTER SET utf8 DEFAULT 'No',
  `sent_at` timestamp NULL DEFAULT NULL,
  `pay_start_datetime` timestamp NULL DEFAULT NULL,
  `pay_end_datetime` timestamp NULL DEFAULT NULL,
  `is_bidder_paid` enum('Yes','No') CHARACTER SET utf8 DEFAULT NULL,
  `paid_amount` float(10,2) DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `paid_datetime` timestamp NULL DEFAULT NULL,
  `is_bidder_won` enum('Yes','No') CHARACTER SET utf8 NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctionbidders`
--

INSERT INTO `auctionbidders` (`id`, `slug`, `auction_id`, `bidder_id`, `no_of_times`, `created_at`, `updated_at`, `is_admin_sent_email`, `sent_at`, `pay_start_datetime`, `pay_end_datetime`, `is_bidder_paid`, `paid_amount`, `payment_id`, `paid_datetime`, `is_bidder_won`) VALUES
(1, 'an-hmv-model-108-gramophone-in-dark-oak-casing-plus-a-selection-6f40bec66e478c9b229c26201d826cad5af8', 21, 16, 3, '2018-03-09 06:46:10', '2018-04-20 18:13:23', 'Yes', '2018-04-03 13:12:49', '2018-04-03 13:12:00', '2018-04-28 13:13:00', NULL, NULL, NULL, NULL, ''),
(2, 'a-digital-hunting-camera-model-hc-600mg-dc2e584268a7ce72417b972a9e214a7777370844-15', 16, 16, 3, '2018-03-09 06:52:19', '2018-03-12 22:56:32', 'Yes', '2018-03-12 22:56:32', '2018-03-13 04:26:00', '2018-03-16 04:27:00', 'No', NULL, NULL, NULL, 'No'),
(3, 'c6f7550e92436dddede1c40355869a776bde1bdd-2', 25, 34, 2, '2018-04-11 14:53:10', '2018-04-11 14:55:42', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
(4, '8b1df65820667ea0b37079d0cfd77653d5095e05-3', 25, 4, 4, '2018-04-11 14:54:59', '2018-04-11 15:50:42', 'Yes', '2018-04-11 15:50:42', '2018-04-11 15:50:00', '2018-04-20 15:51:00', 'No', NULL, NULL, NULL, 'No'),
(5, '5cd2293fab27123c715ae7c92821dcef2dfc4a38-4', 22, 4, 3, '2018-04-21 10:15:26', '2018-04-21 10:59:45', 'Yes', '2018-04-21 10:20:11', '2018-04-21 10:20:00', '2018-04-26 10:21:00', 'Yes', 6200.00, 128, '2018-04-21 10:23:17', 'Yes'),
(6, '0c52082e50737e81bf41dd8d01373bd7cc408770-5', 22, 34, 1, '2018-04-21 10:17:52', '2018-04-21 10:17:52', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
(7, 'be5ef880f69e6732d5db3a581da9b6507d6a10b0-6', 19, 4, 2, '2018-04-21 10:39:57', '2018-04-21 11:49:44', 'Yes', '2018-04-21 11:48:49', '2018-04-21 11:48:00', '2018-04-30 11:49:00', 'Yes', 14400.00, 132, '2018-04-21 11:49:44', 'Yes'),
(8, 'fc4374f54476ad3dc64758cd20dadf282d380a63-7', 18, 4, 2, '2018-04-21 10:46:38', '2018-04-21 10:46:55', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
(9, '8f97b858b3eeee03b1b26ac2937bf19bb524c040-8', 18, 34, 1, '2018-04-21 10:47:26', '2018-04-21 10:52:02', 'Yes', '2018-04-21 10:48:43', '2018-04-21 10:48:00', '2018-04-30 10:49:00', 'Yes', 11000.00, 130, '2018-04-21 10:52:02', 'Yes'),
(10, 'a55009cb252079ddb7db5d9fc22a12d7ea515c43-9', 16, 4, 1, '2018-04-21 11:23:36', '2018-04-21 11:23:36', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
(11, 'e5990b02b6aef0ca3c2eacfbc60f4cc1ae5f377e-10', 10, 4, 3, '2018-04-23 12:00:00', '2018-04-23 15:11:05', 'Yes', '2018-04-23 12:03:16', '2018-04-23 12:03:00', '2018-04-26 12:03:00', 'Yes', 20000.00, 133, '2018-04-23 12:05:19', 'Yes'),
(12, 'a1648ce89514b780d619f2e6a5a040b6ec0e18c6-11', 10, 34, 1, '2018-04-23 12:02:16', '2018-04-23 12:02:16', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
(13, '28cbbd97c3180230ff3067dd2b7966a17c1fc227-12', 4, 4, 1, '2018-04-23 15:11:41', '2018-04-23 15:16:23', 'Yes', '2018-04-23 15:15:19', '2018-04-23 15:15:00', '2018-04-25 15:15:00', 'Yes', 12000.00, 134, '2018-04-23 15:16:23', 'Yes'),
(14, '12cbe893b502f387ab883d47e0de3519a2b586cd-13', 4, 34, 1, '2018-04-23 15:14:34', '2018-04-23 15:14:34', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `auctionimages`
--

CREATE TABLE `auctionimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `auction_id` int(10) UNSIGNED DEFAULT NULL,
  `filename` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `original_filename` text CHARACTER SET utf8,
  `size` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctionimages`
--

INSERT INTO `auctionimages` (`id`, `auction_id`, `filename`, `original_filename`, `size`, `type`, `created_at`, `updated_at`) VALUES
(17, 15, '15_c19.jpg', 'c19.jpg', '34493', 'image/jpeg', '2018-02-21 01:21:40', '2018-02-21 01:21:40'),
(18, 15, '15_c20.jpg', 'c20.jpg', '41145', 'image/jpeg', '2018-02-21 01:21:40', '2018-02-21 01:21:40'),
(19, 15, '15_c21.jpg', 'c21.jpg', '33146', 'image/jpeg', '2018-02-21 01:21:40', '2018-02-21 01:21:40'),
(20, 15, '15_c15.jpg', 'c15.jpg', '46266', 'image/jpeg', '2018-02-21 01:21:40', '2018-02-21 01:21:40'),
(21, 15, '15_c16.jpg', 'c16.jpg', '43423', 'image/jpeg', '2018-02-21 01:21:40', '2018-02-21 01:21:40'),
(22, 15, '15_c17.jpg', 'c17.jpg', '42564', 'image/jpeg', '2018-02-21 01:21:40', '2018-02-21 01:21:40'),
(23, 15, '15_c18.jpg', 'c18.jpg', '35630', 'image/jpeg', '2018-02-21 01:21:41', '2018-02-21 01:21:41'),
(32, 23, '23_3.jpg', '3.jpg', '76513', 'image/jpeg', '2018-04-10 05:57:13', '2018-04-10 05:57:13'),
(34, 23, '23_5.jpg', '5.jpg', '42656', 'image/jpeg', '2018-04-10 05:57:13', '2018-04-10 05:57:13'),
(35, 23, '23_2.jpg', '2.jpg', '91589', 'image/jpeg', '2018-04-10 06:23:38', '2018-04-10 06:23:38'),
(36, 22, '22_7.jpg', '7.jpg', '67087', 'image/jpeg', '2018-04-10 06:47:53', '2018-04-10 06:47:53'),
(37, 22, '22_8.jpg', '8.jpg', '67087', 'image/jpeg', '2018-04-10 06:47:53', '2018-04-10 06:47:53'),
(38, 22, '22_9.jpg', '9.jpg', '55871', 'image/jpeg', '2018-04-10 06:47:53', '2018-04-10 06:47:53'),
(39, 22, '22_10.jpg', '10.jpg', '170643', 'image/jpeg', '2018-04-10 06:47:53', '2018-04-10 06:47:53'),
(40, 21, '21_12.jpg', '12.jpg', '100978', 'image/jpeg', '2018-04-10 07:08:45', '2018-04-10 07:08:45'),
(41, 21, '21_13.jpg', '13.jpg', '45933', 'image/jpeg', '2018-04-10 07:08:45', '2018-04-10 07:08:45'),
(42, 21, '21_14.jpg', '14.jpg', '50547', 'image/jpeg', '2018-04-10 07:08:45', '2018-04-10 07:08:45'),
(43, 21, '21_15.jpg', '15.jpg', '102643', 'image/jpeg', '2018-04-10 07:08:45', '2018-04-10 07:08:45'),
(44, 20, '20_17.jpg', '17.jpg', '218999', 'image/jpeg', '2018-04-10 07:12:45', '2018-04-10 07:12:45'),
(45, 20, '20_18.jpg', '18.jpg', '364979', 'image/jpeg', '2018-04-10 07:12:45', '2018-04-10 07:12:45'),
(46, 20, '20_19.jpg', '19.jpg', '217142', 'image/jpeg', '2018-04-10 07:12:45', '2018-04-10 07:12:45'),
(47, 20, '20_20.jpg', '20.jpg', '7236', 'image/jpeg', '2018-04-10 07:12:45', '2018-04-10 07:12:45'),
(54, 19, '19_28.jpg', '28.jpg', '116891', 'image/jpeg', '2018-04-10 07:18:15', '2018-04-10 07:18:15'),
(56, 19, '19_30.jpg', '30.jpg', '56188', 'image/jpeg', '2018-04-10 07:18:59', '2018-04-10 07:18:59'),
(57, 18, '18_32.JPG', '32.JPG', '131982', 'image/jpeg', '2018-04-10 07:21:26', '2018-04-10 07:21:26'),
(58, 18, '18_33.JPG', '33.JPG', '156445', 'image/jpeg', '2018-04-10 07:21:26', '2018-04-10 07:21:26'),
(62, 18, '18_37.jpg', '37.jpg', '52154', 'image/jpeg', '2018-04-10 07:22:27', '2018-04-10 07:22:27'),
(63, 18, '18_38.jpg', '38.jpg', '109415', 'image/jpeg', '2018-04-10 07:23:15', '2018-04-10 07:23:15'),
(65, 16, '16_42.jpg', '42.jpg', '802289', 'image/jpeg', '2018-04-10 07:26:39', '2018-04-10 07:26:39'),
(66, 16, '16_43.jpg', '43.jpg', '71457', 'image/jpeg', '2018-04-10 07:27:31', '2018-04-10 07:27:31'),
(68, 14, '14_47.jpg', '47.jpg', '110271', 'image/jpeg', '2018-04-10 07:31:12', '2018-04-10 07:31:12'),
(70, 14, '14_49.jpg', '49.jpg', '172084', 'image/jpeg', '2018-04-10 07:32:06', '2018-04-10 07:32:06'),
(71, 13, '13_51.jpg', '51.jpg', '7725948', 'image/jpeg', '2018-04-10 08:11:50', '2018-04-10 08:11:50'),
(73, 13, '13_53.jpg', '53.jpg', '206991', 'image/jpeg', '2018-04-10 08:12:58', '2018-04-10 08:12:58'),
(74, 13, '13_54.jpg', '54.jpg', '86016', 'image/jpeg', '2018-04-10 08:13:18', '2018-04-10 08:13:18'),
(75, 12, '12_56.jpg', '56.jpg', '61152', 'image/jpeg', '2018-04-10 08:16:36', '2018-04-10 08:16:36'),
(76, 12, '12_57.jpg', '57.jpg', '45865', 'image/jpeg', '2018-04-10 08:16:58', '2018-04-10 08:16:58'),
(77, 12, '12_58.jpg', '58.jpg', '46140', 'image/jpeg', '2018-04-10 08:17:17', '2018-04-10 08:17:17'),
(78, 12, '12_59.jpg', '59.jpg', '465950', 'image/jpeg', '2018-04-10 08:17:47', '2018-04-10 08:17:47'),
(79, 12, '12_60.jpg', '60.jpg', '7020', 'image/jpeg', '2018-04-10 08:18:40', '2018-04-10 08:18:40'),
(80, 12, '12_61.jpg', '61.jpg', '8280', 'image/jpeg', '2018-04-10 08:19:01', '2018-04-10 08:19:01'),
(82, 11, '11_64.jpg', '64.jpg', '99187', 'image/jpeg', '2018-04-10 08:20:59', '2018-04-10 08:20:59'),
(84, 11, '11_66.jpg', '66.jpg', '71809', 'image/jpeg', '2018-04-10 08:21:44', '2018-04-10 08:21:44'),
(86, 11, '11_68.jpg', '68.jpg', '133591', 'image/jpeg', '2018-04-10 08:23:32', '2018-04-10 08:23:32'),
(87, 11, '11_69.jpg', '69.jpg', '141411', 'image/jpeg', '2018-04-10 08:24:02', '2018-04-10 08:24:02'),
(88, 10, '10_71.jpg', '71.jpg', '35284', 'image/jpeg', '2018-04-10 08:26:18', '2018-04-10 08:26:18'),
(89, 10, '10_72.jpeg', '72.jpeg', '79100', 'image/jpeg', '2018-04-10 08:27:21', '2018-04-10 08:27:21'),
(90, 10, '10_73.jpg', '73.jpg', '55034', 'image/jpeg', '2018-04-10 08:27:50', '2018-04-10 08:27:50'),
(92, 9, '9_76.jpg', '76.jpg', '115873', 'image/jpeg', '2018-04-10 08:31:00', '2018-04-10 08:31:00'),
(96, 8, '8_81.jpg', '81.jpg', '100884', 'image/jpeg', '2018-04-10 08:34:43', '2018-04-10 08:34:43'),
(98, 8, '8_83.jpg', '83.jpg', '1003497', 'image/jpeg', '2018-04-10 08:36:27', '2018-04-10 08:36:27'),
(99, 7, '7_85.jpg', '85.jpg', '78191', 'image/jpeg', '2018-04-10 08:38:23', '2018-04-10 08:38:23'),
(100, 7, '7_86.jpg', '86.jpg', '50896', 'image/jpeg', '2018-04-10 08:38:44', '2018-04-10 08:38:44'),
(101, 7, '7_87.jpg', '87.jpg', '99017', 'image/jpeg', '2018-04-10 08:39:06', '2018-04-10 08:39:06'),
(105, 6, '6_92.jpg', '92.jpg', '1005082', 'image/jpeg', '2018-04-10 08:45:04', '2018-04-10 08:45:04'),
(114, 5, '5_102.jpg', '102.jpg', '177033', 'image/jpeg', '2018-04-10 08:53:01', '2018-04-10 08:53:01'),
(116, 5, '5_104.jpeg', '104.jpeg', '218102', 'image/jpeg', '2018-04-10 08:53:55', '2018-04-10 08:53:55'),
(117, 4, '4_105.jpg', '105.jpg', '47913', 'image/jpeg', '2018-04-10 08:56:05', '2018-04-10 08:56:05'),
(119, 4, '4_107.jpg', '107.jpg', '109431', 'image/jpeg', '2018-04-10 08:56:52', '2018-04-10 08:56:52'),
(120, 4, '4_108.jpg', '108.jpg', '151359', 'image/jpeg', '2018-04-10 08:57:08', '2018-04-10 08:57:08'),
(121, 4, '4_109.jpeg', '109.jpeg', '112458', 'image/webp', '2018-04-10 08:57:41', '2018-04-10 08:57:41'),
(123, 3, '3_112.jpg', '112.jpg', '102555', 'image/jpeg', '2018-04-10 09:00:55', '2018-04-10 09:00:55'),
(126, 3, '3_115.jpg', '115.jpg', '60685', 'image/jpeg', '2018-04-10 09:02:42', '2018-04-10 09:02:42'),
(131, 2, '2_121.jpg', '121.jpg', '126442', 'image/jpeg', '2018-04-10 09:07:19', '2018-04-10 09:07:19'),
(132, 2, '2_122.jpg', '122.jpg', '90280', 'image/jpeg', '2018-04-10 09:07:19', '2018-04-10 09:07:19'),
(133, 2, '2_123.jpg', '123.jpg', '35986', 'image/jpeg', '2018-04-10 09:07:55', '2018-04-10 09:07:55'),
(134, 2, '2_124.jpg', '124.jpg', '141324', 'image/jpeg', '2018-04-10 09:07:55', '2018-04-10 09:07:55'),
(135, 2, '2_125.jpg', '125.jpg', '71682', 'image/jpeg', '2018-04-10 09:08:15', '2018-04-10 09:08:15'),
(137, 1, '1_128.jpg', '128.jpg', '409083', 'image/jpeg', '2018-04-10 09:10:04', '2018-04-10 09:10:04'),
(139, 1, '1_130.jpg', '130.jpg', '376590', 'image/jpeg', '2018-04-10 09:10:44', '2018-04-10 09:10:44'),
(140, 25, '25_205151-21-1.jpg', '205151-21-1.jpg', '5383', 'image/jpeg', '2018-04-11 11:39:48', '2018-04-11 11:39:48'),
(141, 25, '25_index.jpeg', 'index.jpeg', '8328', 'image/jpeg', '2018-04-11 11:39:48', '2018-04-11 11:39:48'),
(142, 25, '25_samsung-tv-suhd-smart-autodetection.jpg', 'samsung-tv-suhd-smart-autodetection.jpg', '71022', 'image/jpeg', '2018-04-11 11:39:49', '2018-04-11 11:39:49'),
(143, 25, '25_pdf-sample.pdf', 'pdf-sample.pdf', '7945', 'application/pdf', '2018-04-11 12:17:33', '2018-04-11 12:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `reserve_price` decimal(15,2) DEFAULT NULL,
  `minimum_bid` decimal(15,2) DEFAULT NULL,
  `is_bid_increment` tinyint(4) DEFAULT NULL,
  `bid_increment` decimal(15,2) DEFAULT NULL,
  `is_buynow` tinyint(4) DEFAULT '0',
  `buy_now_price` decimal(15,2) DEFAULT NULL,
  `shipping_conditions` text CHARACTER SET utf8,
  `international_shipping` tinyint(4) DEFAULT '0',
  `shipping_terms` text CHARACTER SET utf8,
  `make_featured` tinyint(4) DEFAULT '0',
  `auction_status` enum('new','open','suspended','closed') CHARACTER SET utf8 DEFAULT NULL,
  `admin_status` enum('pending','approved','rejected') CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at-old` timestamp NULL DEFAULT NULL,
  `created_by_id` int(10) UNSIGNED DEFAULT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `listing_type` enum('free','paid') CHARACTER SET utf8 DEFAULT NULL,
  `listing_cost` float(10,2) DEFAULT NULL,
  `is_seller_paid_listing_cost` enum('Yes','No') CHARACTER SET utf8 DEFAULT NULL,
  `admin_commission_type` enum('free','fixed','auction') CHARACTER SET utf8 DEFAULT NULL,
  `commission_value` float(10,2) DEFAULT NULL,
  `is_seller_paid_commission_value` enum('Yes','No') CHARACTER SET utf8 DEFAULT NULL,
  `live_auction_date` date DEFAULT NULL,
  `live_auction_start_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `live_auction_end_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `user_id`, `title`, `slug`, `category_id`, `sub_category_id`, `description`, `start_date`, `end_date`, `reserve_price`, `minimum_bid`, `is_bid_increment`, `bid_increment`, `is_buynow`, `buy_now_price`, `shipping_conditions`, `international_shipping`, `shipping_terms`, `make_featured`, `auction_status`, `admin_status`, `image`, `created_at`, `updated_at`, `deleted_at-old`, `created_by_id`, `last_updated_by`, `listing_type`, `listing_cost`, `is_seller_paid_listing_cost`, `admin_commission_type`, `commission_value`, `is_seller_paid_commission_value`, `live_auction_date`, `live_auction_start_time`, `live_auction_end_time`) VALUES
(1, 3, 'Landschap met schaatsers', 'landschap-met-schaatsers-902f22426277aaa6ad8060fcf2e25544b3f39cd0', 3, 3, '<p>18th Cent. Dutch drawing asdfsdfsdf</p>\r\n\r\n<p><strong>Artist or Maker:</strong>&nbsp;BENJAMIN PALENCIA (Barrax, Albacete, 1894-Madrid, 1980) Rinc&oacute;n de la casa-estudio de Polop. Hacia 1975.</p>\r\n', '2018-02-13 16:00:00', '2018-04-30 17:00:00', '200000.00', '5000.00', 1, '1500.00', 0, NULL, '<p>to be arranged with the Auction House</p>\r\n', 1, '<p>Live bidding may start higher or lower</p>\r\n', 0, 'closed', 'approved', '1_xJKfIjzQWy7TRab.jpeg', '2018-02-03 06:41:12', '2018-04-10 09:09:01', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 'Bulgari Bvlgari B.Zero1 Bangle Bracelet', 'bulgari-bvlgari-bzero1-bangle-bracelet-f63e5827dca043b7e48f5ae2815b4dad7ace0d26-1', 5, 12, '<p>From Bulgari, the Bvlgari B.Zero1 18 karat yellow gold bangle bracelet. This is the original, highly sought after, full weight design. 1/4 inch wide, fits up to a 6 1/2 inch wrist. 57.3 grams</p>\r\n', '2018-02-18 11:00:00', '2018-04-30 11:00:00', '200000.00', '5000.00', 1, '1000.00', 0, NULL, '<p>Accepted forms of payment: American Express, Discover, MasterCard, Visa Shipping: We do not charge for shipping to the continental U.S. Items will ship next day at no additional charge. Due to insurance, we cannot provide tracking numbers on high value packages. Please provide a contact phone number for high value purchases. An adult signature is required for delivery Ships to: United States of America,</p>\r\n', 0, '<p>Payments: We reserve the right to only accept payment from US customers with confirmed address. International buyers are encouraged to contact us directly Addition Terms: We make every effort to update our Invaluable inventory. All items are one of a kind and therefore might not be available due to in-store sale. We encourage you check with us prior purchasing. Diamond and gemstone weights are approximate; Pampillonia carefully inspects all items for authenticity and defects. Subject to prior sale. Shipping: We do not charge for shipping to the continental U.S. Items will ship next day at no additional charge. Due to insurance, we cannot provide tracking numbers on high value packages. Please provide a contact phone number for high value purchases. An adult signature is required for delivery Sales Tax: 5.75% sales tax will be added to all items shipped to Washington DC</p>\r\n', 0, 'open', 'approved', '2_ICNuTUgnpLQ8Qq1.jpeg', '2018-02-06 00:52:51', '2018-07-13 09:07:35', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:37:29', '23:37:31'),
(3, 3, 'Bulgari Yellow Gold B.Zero.1 Ring c.1980', 'bulgari-yellow-gold-bzero1-ring-c1980-8a01fcd70bf735dfabc58846ff83eae9bb27fc40-2', 5, 12, '<p>A timeless ring by Bulgari c.1980 in 18 karat yellow gold, Bvlgari signature and fully hallmarked. Width band 0,51 inch. Ring size 6&frac14;. Ref.17342-0253</p>\r\n', '2018-02-18 12:00:00', '2018-04-30 16:00:00', '500000.00', '6000.00', 1, '10000.00', 0, NULL, '<p>Accepted forms of payment: American Express, MasterCard, Visa Shipping: All our items will be shipped worldwide for free by express with FEDEX. Additional items can be added to the same parcel, or - on request - packed individually. Re-sizable items can be resized before shipping.</p>\r\n', 0, '<p>Free Shipping: All our items will be shipped worldwide for free by express with FEDEX. Additional items can be added to the same parcel, or - on request - packed individually. Re-sizable items can be resized before shipping. Returns &amp; Refunds: You have 14 days money back guarantee to return the jewel counting from the next day of the delivery. In order to receive the refund, the buyer must return the item to us in the same manner it was received (Adin package, insured at the buyer&#39;s charge and sent by the same transporter express at the buyer&#39;s charge).</p>\r\n', 0, 'new', 'approved', '3_Wj1xoVbl6fOsdpJ.jpeg', '2018-02-06 01:10:58', '2018-04-10 09:00:27', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(4, 3, '2 14 CARAT AMETHYSTS 925 STERLING SILVER', '2-14-carat-amethysts-925-sterling-silver-34567b70234e96a1641fc5ae92461fb845b6322f-3', 5, 13, '<p>2 1/4 CARAT AMETHYSTS 925 STERLING SILVER -- 2 1/4 CARAT AMETHYSTS 925 STERLING SILVER #21ST75251</p>\r\n', '2018-02-08 16:00:00', '2018-04-30 16:00:00', '300000.00', '10000.00', 1, '2000.00', 0, NULL, '<p>Accepted forms of payment: Money Order / Cashiers Check, Other, Personal Check, Wire Transfer Shipping: SHIPPING, HANDLING &amp; INSURANCE All packages are being ship through USPS and FEDEX. SHIPPING TIMEFRAME is 7-10 business days. Winning bidder is responsible to pay the shipping charges. Shipping fee is added in the final invoice. Shipping charge depends on the value of the package. 21st Century Auctions insures packages while it is in transit to the winning bidders.</p>\r\n', 0, '<p>Shipping Terms: SHIPPING, HANDLING &amp; INSURANCE All packages are being ship through USPS and FEDEX. SHIPPING TIMEFRAME is 7-10 business days. Winning bidder is responsible to pay the shipping charges. Shipping fee is added in the final invoice. Shipping charge depends on the value of the package. 21st Century Auctions insures packages while it is in transit to the winning bidders.</p>\r\n', 0, 'open', 'approved', '4_X0fkr3qYIjNnVjV.jpeg', '2018-02-06 01:41:18', '2018-07-13 09:07:26', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:37:17', '23:37:22'),
(5, 3, '3 1/2 CARAT AMETHYST 925 STERLING SILVER SET', '3-12-carat-amethyst-925-sterling-silver-set-4ed944c3fcd26979785279e4e2f31d1fd7116b2a-4', 5, 13, '<p>3 1/2 CARAT AMETHYST 925 STERLING SILVER SET -- 3 1/2 CARAT AMETHYST 925 STERLING SILVER SET #21ST75256</p>\r\n', '2018-02-13 10:00:00', '2018-04-30 10:00:00', '560000.00', '4000.00', 1, '3000.00', 0, NULL, '<p>Accepted forms of payment: Money Order / Cashiers Check, Other, Personal Check, Wire Transfer Shipping: SHIPPING, HANDLING &amp; INSURANCE All packages are being ship through USPS and FEDEX. SHIPPING TIMEFRAME is 7-10 business days. Winning bidder is responsible to pay the shipping charges. Shipping fee is added in the final invoice. Shipping charge depends on the value of the package. 21st Century Auctions insures packages while it is in transit to the winning bidders.</p>\r\n', 1, '<p>Shipping Terms: SHIPPING, HANDLING &amp; INSURANCE All packages are being ship through USPS and FEDEX. SHIPPING TIMEFRAME is 7-10 business days. Winning bidder is responsible to pay the shipping charges. Shipping fee is added in the final invoice. Shipping charge depends on the value of the package. 21st Century Auctions insures packages while it is in transit to the winning bidders.</p>\r\n', 1, 'open', 'approved', '5_KuShHfLk5PxO0tD.jpeg', '2018-02-06 01:43:32', '2018-07-13 09:07:04', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:36:58', '23:37:00'),
(6, 3, 'Camille Bombois, French (1883-1970), Girls Playing Catch, oil on canvas, 23 1/2 x 29 inches', 'camille-bombois-french-1883-1970-girls-playing-catch-oil-on-canvas-23-12-x-29-inches-d3ecea2d24547cc90b55ae0ac48f07de29c4505b-5', 3, 5, '<p><strong>Camille Bombois</strong>&nbsp;French (1883-1970)&nbsp;<strong>Girls Playing Catch,</strong>&nbsp;oil on canvas,&nbsp;signed lower left, framed.&nbsp;23 1/2 x 29 inches&nbsp;</p>\r\n', '2018-02-08 08:00:00', '2018-04-30 17:00:00', '450000.00', '6000.00', 1, '5000.00', 0, NULL, '<p>Accepted forms of payment: American Express, Discover, MasterCard, Money Order / Cashiers Check, Personal Check, Visa, Wire Transfer Shipping: Link Auction Galleries will be pleased to recommend packing and shipping services and assist in arrangements for removal of paid merchandise. Contact Doug Schrader at 314-454-6525 ext. 103 or direct at 314-658- 9524, fax 314-454-9904, doug@linkauctiongalleries. com for further information</p>\r\n', 1, '<p>Shipping Terms: Link Auction Galleries will be pleased to recommend packing and shipping services and assist in arrangements for removal of paid merchandise. Contact Doug Schrader at 314-454-6525 ext. 103 or direct at 314-658- 9524, fax 314-454-9904, doug@linkauctiongalleries. com for further information</p>\r\n', 1, 'new', 'approved', '6_nlRTmO3qt2kSMFg.jpeg', '2018-02-06 01:47:57', '2018-04-10 08:39:51', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(7, 3, 'CAROLINE BURNETT PARISIAN OIL ON CANVAS V$3,000', 'caroline-burnett-parisian-oil-on-canvas-v3000-9ff90a0c0fa7b74285f14d1bc12c10c0b8498541-6', 3, 5, '<p>A Collection of Twenty-One Cut Paper and Reverse Painted Silhouettes Depicting Women by Various Artists, 20th Century, Including pieces by Dorothy. Largest framed dimensions: h: 9 3/4 x w: 7 1/2 in. From the Collection of Joseph and Betty Koelliker.</p>\r\n', '2018-02-14 13:00:00', '2018-04-30 13:00:00', '300000.00', '8000.00', 1, '3000.00', 0, NULL, '<p>Accepted forms of payment: American Express, Discover, MasterCard, Visa Shipping: WE CAN SHIP WORLDWIDE, EMAIL FOR A QUOTE Customers are responsible for the cost of shipping items. If Auctionkings should be prevented by fire, theft or any reason whatsoever from delivering any property to the purchaser, we are only liable to return the sum made by the purchaser.</p>\r\n', 1, '<p>shipping: WE CAN SHIP WORLDWIDE, EMAIL FOR A QUOTE Customers are responsible for the cost of shipping items. If Auctionkings should be prevented by fire, theft or any reason whatsoever from delivering any property to the purchaser, we are only liable to return the sum made by the purchaser.</p>\r\n', 1, 'open', 'approved', '7_IdkTmhuyIUW4OKR.jpeg', '2018-02-06 01:49:54', '2018-07-13 09:06:47', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:36:40', '23:36:42'),
(8, 3, 'Reply of the Zaporozhian Cossacks to Sultan Mehmed IV Painting after Ilya Repin', 'reply-of-the-zaporozhian-cossacks-to-sultan-mehmed-iv-painting-after-ilya-repin-d47b9ccbd0d365fa588d146c7e8e01d35872783d-7', 3, 5, '<p>Reply of the Zaporozhian Cossacks to Sultan Mehmed IV of the Ottoman Empire, also known as Cossacks of Saporog Are Drafting a Manifesto.</p>\r\n', '2018-02-08 16:00:00', '2018-04-30 21:00:00', '400000.00', '4000.00', 1, '5000.00', 0, NULL, '<p>Accepted forms of payment: American Express, Discover, MasterCard, Visa Shipping: Shipping will be handled in house. Please contact 917.686.9732/mory@solomontreasureny.com</p>\r\n', 0, '<p>Accepted forms of payment: American Express, Discover, MasterCard, Visa Shipping: Shipping will be handled in house. Please contact 917.686.9732/mory@solomontreasureny.com</p>\r\n', 1, 'open', 'approved', '8_2l0qBV5eJvTDQ61.jpeg', '2018-02-06 01:51:33', '2018-07-13 09:06:26', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:36:20', '23:36:22'),
(9, 3, 'Designer Fine Jewelry & Watches Closeout Event Day 2... FREE SHIPPING', 'designer-fine-jewelry-watches-closeout-event-day-2-free-shipping-ef5743a4feea8db74eba8a5be9b562ff80ba4647-8', 5, 12, '<p><strong>Description:</strong>&nbsp;Estimated Retail Replacement Value: $33,103.00&nbsp;<br />\r\nRef: WAG20916&nbsp;Item no.: FA2057332028-MB2771A&nbsp;</p>\r\n', '2018-02-09 16:00:00', '2018-04-30 16:00:00', '500000.00', '5000.00', 1, '60000.00', 0, NULL, '<p>We offer FREE USA Shipping for United States orders. USA shipping includes Tracking and Insurance.</p>\r\n', 1, '<p>-International Shipping is done via USPS Priority Mail Express. Please see USPS.com for approximate shipping costs for Priority Mail Express. As this is a live auction listing, All items will be shipped in 10 business days or less. We need time to bring the lots in from consignment and do a final inspection to make sure you are completely satisfied with your purchase.</p>\r\n', 1, 'open', 'approved', '9_NGePxCgD7UOP0jR.jpeg', '2018-02-07 00:43:58', '2018-07-13 09:06:09', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:36:02', '23:36:05'),
(10, 3, 'Carat Genuine Amethyst and White Topaz .925 Sterling Silver Ring', 'carat-genuine-amethyst-and-white-topaz-925-sterling-silver-ring-002e61fc2145d4228376cac1ec07f842c6b63e53-9', 5, 13, '<p>2.44 Carat Genuine Amethyst and White Topaz .925 Sterling Silver Ring -- 2.44 Carat Genuine Amethyst and White Topaz .925 Sterling Silver Ring #21ST67048</p>\r\n', '2018-02-09 17:00:00', '2018-04-30 17:00:00', '600000.00', '8000.00', 1, '6000.00', 0, NULL, '<p>SHIPPING, HANDLING &amp; INSURANCE All packages are being ship through USPS and FEDEX. SHIPPING TIMEFRAME is 7-10 business days. Winning bidder is responsible to pay the shipping charges. Shipping fee is added in the final invoice. Shipping charge depends on the value of the package. 21st Century Auctions insures packages while it is in transit to the winning bidders.</p>\r\n', 1, '<p>SHIPPING, HANDLING &amp; INSURANCE All packages are being ship through USPS and FEDEX. SHIPPING TIMEFRAME is 7-10 business days. Winning bidder is responsible to pay the shipping charges. Shipping fee is added in the final invoice. Shipping charge depends on the value of the package. 21st Century Auctions insures packages while it is in transit to the winning bidders.</p>\r\n', 1, 'open', 'approved', '10_oaAMpSAvNvH3FVB.jpeg', '2018-02-07 00:49:17', '2018-07-13 09:05:51', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:35:43', '23:35:47'),
(11, 3, 'Art Print by Nel Whatmore (Artist) NW0413', 'art-print-by-nel-whatmore-artist-nw0413-8b1d8ddd64ae52cf650603a1ed76196a1a3dc3a4-10', 3, 5, '<p>&nbsp;8 x 16 Art Print by Nel Whatmore (Artist) NW0413&nbsp;<br />\r\nVery Good to Excellent Condition - Brand New Old Stock.&nbsp;<br />\r\n&nbsp;</p>\r\n', '2018-02-09 05:00:00', '2018-04-30 23:30:00', '300000.00', '4000.00', 1, '6000.00', 0, NULL, '<p>Accepted forms of payment: American Express, COD (cash on delivery), Discover, MasterCard, Money Order / Cashiers Check, Visa</p>\r\n', 1, '<p>Payment Instruction: We accept Visa &amp; MasterCard and Discover ONLY. Cards used during registration will be automatically charged following the auction. The only exception will be if your purchases total $1000 or more. If you spend $1000 or more than we will accept a Certified Bank Check or Wire transfer, please contact us directly for more information.</p>\r\n', 1, 'open', 'approved', '11_CramzjNHQq9ngG0.jpeg', '2018-02-07 00:53:33', '2018-07-13 09:05:31', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:35:24', '23:35:26'),
(12, 3, 'ALPA Reflex Model 9D with Kern Macro Switar 1.8/50 lens', 'alpa-reflex-model-9d-with-kern-macro-switar-1850-lens-44dbc2ddbe6688894d128481b83c33549ce48092-12', 1, 2, '<p>Crafted out of 18K gold, set aftermarket with 10 round brilliant-cut diamonds, weighing a total of approximately 1.00 carat; circumference measures 15 cm; comes with screwdriver; bracelet weight 24.00 g.&nbsp;</p>\r\n', '2018-02-07 11:54:00', '2018-04-30 11:55:00', '45345345.00', '4535.00', 1, '345345.00', 1, '345334.00', '<p>sfsd</p>\r\n', 1, '<p>fsdf</p>\r\n', 1, 'open', 'approved', '12_syBtleScRfmXuXd.jpeg', '2018-02-07 01:01:15', '2018-07-13 09:05:08', NULL, 3, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:35:01', '23:35:04'),
(13, 13, 'Leica DBP Ernst Leitz Wetzlar Camera', 'leica-dbp-ernst-leitz-wetzlar-camera-360dd1316c516e8b2fdbdf11a23f840e8c0e106a-12', 1, 17, '<p><strong>Leica DBP Ernst Leitz Wetzlar Camera</strong>&nbsp;With 1:2.8/35 lens with cap, numbered M3-834371 and instruction manual&nbsp;<br />\r\ncondition good-general ware from age , untested&nbsp;<br />\r\nLength 14cm</p>\r\n', '2018-02-01 10:58:00', '2018-04-30 10:59:00', '250000.00', '5000.00', 1, '500.00', 1, '260000.00', '<p>Payment Accepted forms of payment: American Express, MasterCard, Visa Shipping: Please contact us for shipping information</p>\r\n', 1, '<p>Please contact us for shipping information</p>\r\n', 1, 'new', 'approved', '13_SOOGcKEpOtZ1d6v.jpeg', '2018-02-21 00:00:51', '2018-04-10 08:11:08', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(14, 13, 'A Collection of Vintage Cameras in Cases (4)', 'a-collection-of-vintage-cameras-in-cases-4-7dd11ea31faf3f2ad4c0e37c505042123d6a771e-13', 1, 17, '<p>Testing alsdfkjsdlfkjds</p>\r\n', '2018-02-07 12:14:00', '2018-04-30 12:15:00', '45000.00', '6000.00', 1, '5000.00', 0, NULL, '', 1, '', 1, 'new', 'approved', '14_mIukJppMqTMDaZv.jpeg', '2018-02-21 01:17:40', '2018-04-10 07:30:10', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(15, 13, 'Olympus and Carl Zeiss Jena Cameras. Collection of vintage SLR 35mm film cameras ', 'olympus-and-carl-zeiss-jena-cameras-collection-of-vintage-slr-35mm-film-cameras-8d6f6ba30c19ca1b65781d16777a95838c104464-14', 1, 17, '<p>0mm f/1.8 multi-coated lens, Olympus OM-10 camera (black, serial number 1708263) with Zuiko 50mm f/1.8 multi-coated lens, Vivitar 70-150mm f/3.8 multi-coated macro zoom lens (serial number 22202103) with Vivitar 2X-21 MC tele converter, Ozeck II 135mm f/2.8 macro multi-coated lens (serial number K8400078), Miranda 35-70mm f/3.5-4.5 macro multi-coated zoom lens (serial number OM96100609), Cimko 24mm f/2.8 multi-coated lens (serial number 609328), Olympus T20 electronic flash, Carl Zeiss Jenaflex AM-1 Electronic camera (UK version of Praktica BC1) with leather case and Prakticar Pentacon 50mm f/2.4 multi-coated lens, Prakticar Pentacon 55-200mm f/4-5.6 multi-coated zoom lens (serial number 1019556), Praktica BC2500 Zoom flash gun, set of 3 close-up filters (49mm), all untested but working when last used several years ago - Quantity (a carton)</p>\r\n\r\n<p><strong>Notes:</strong>&nbsp;Sold as seen, not subject to return.</p>\r\n', '2018-02-07 12:20:00', '2018-04-30 12:21:00', '500000.00', '6000.00', 1, '70000.00', 1, '600000.00', '<p>We are not specialist shippers. Some items, such as framed &amp; glazed or fragile goods, will require specialist handling and buyers will be asked to use Mailboxes or RF Shipping Ltd. (details below). For non-fragile items and items of reasonably small size, we offer an in-house packing and shipping facility for UK buyers. When possible, purchases will be sent by either Royal Mail Special Delivery or DPD overnight service. The charge for this service is variable (&pound;15 minimum per parcel) and will be added to your invoice. Please note shipments to the Highlands and Islands may require shipment by courier and may be more expensive. Please contact us for a quote before bidding. For larger packages and fragile goods, we recommend Mailboxes, Pack &amp; Send or RF Shipping Ltd who will collect fully paid-for purchases from us twice a week and liaise with the buyer direct. For more information please contact Sarah Ball by telephone on +44 (0)1285 860006 or email sarah@dominicwinter.co.uk. These companies will require payment direct for their services. Mailboxes : +44 (0)1793 525009 or welcome@mbeswindon.co.uk Pack &amp; Send : +44 (0)1635 887237 or newbury@packsend.co.uk RF Shipping Ltd : +44(0) 845 8736240 or info@rfshipping.com Overseas Shipping For overseas buyers, very small and light items can be packed in-house and shipped using the Royal Mail International Signed-For service. The charge for this service is variable (&pound;15 minimum per parcel) and will be added to your invoice. Please contact us for a quote. We are able to send items which fit the following criteria: Single parcels with a value less than &pound;500 and up to 2kg in weight and within the dimensions of 600mm x 150mm x 150mm Single tubes with a value less than &pound;500 and up to 2kg in weigh x 70mm depth</p>\r\n', 1, '<p>Payment is preferred by direct Bank Transfer to our bank account. Our bank details will be supplied to you with your invoice. Payment can be made in cash at the Cashier&#39;s Office, either during or after the sale. Alternatively, you can pay by cheque (Pounds Sterling only), please allow 5 working days for the cheque to clear before collection of goods.</p>\r\n', 1, 'new', 'approved', '15_osKmezk4X1OCHmS.jpeg', '2018-02-21 01:21:11', '2018-04-10 07:28:25', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(16, 33, 'A Digital Hunting Camera model HC-600M/G', 'a-digital-hunting-camera-model-hc-600mg-dc2e584268a7ce72417b972a9e214a7777370844-15', 1, 17, '<p>&nbsp;A Digital Hunting Camera model HC-600M/G</p>\r\n', '2018-02-08 12:22:00', '2018-04-30 12:23:00', '500000.00', '7000.00', 1, '5000.00', 1, '700000.00', '<p>Accepted forms of payment: American Express, MasterCard, Other, Visa, Wire Transfer Shipping: Most goods can be collected at any time after payment has been made. ALL goods must be collected, or arrangements for collection made, within two days post Auction. ALL collection arrangements and shipping quote requests should be emailed to our Post Sale Services department: pss@theodorebruce.com.au or refer to our website for Carrier recommendations.</p>\r\n', 1, '<p>Payments: All Payments are due within two working days of the auction. ALL payments must be made in Australian Dollars. NOTE: late payments may incur a AUD$25.00 processing fee. ACCEPTED PAYMENT METHODS: IN PERSON: Payments can be made in person at Theodore Bruce, 6 Ralph Street, Alexandria, NSW 2015, Australia, between the hours of 9:00am and 5:00pm, Monday to Friday.</p>\r\n', 1, 'open', 'approved', '16_Udlpib5wBEU71zM.jpeg', '2018-02-21 01:23:12', '2018-07-13 09:04:47', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:34:40', '23:34:43'),
(17, 15, 'Apple Macintosh SE/30 Computer & Keyboard', 'apple-macintosh-se30-computer-keyboard-f728035c012c6c385b32535d0b6ffe9242c21f8a-16', 1, 18, '<p><strong>Description:</strong>&nbsp;Lot is comprised of one tower/monitor, keyboard, and power cord. Computer is model number M5119. Keyboard is model number M0116.</p>\r\n\r\n<p><strong>Dimensions:</strong>&nbsp;computer:sdfsd</p>\r\n', '2018-02-08 14:03:00', '2018-04-30 14:04:00', '80000.00', '8000.00', 1, '900.00', 1, '90000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;American Express, Discover, MasterCard, Money Order / Cashiers Check, Paypal, Personal Check, Visa, Wire Transfer</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;Shipping/Pick-up/Storage: PBMA highly recommends that bidders obtain shipping quotes prior to bidding. If you would like to obtain a shipping quote prior to the auction, please contact PBMA by phone or email for a list of shippers, or contact your own shipper. PBMA provides shipping lists only as a service to its clients and any such list should not be considered an endorsement of any shipping company. Additionally, PBMA does not pack or ship items for insurance reasons. Final arrangements for shipping, and all costs associated with shipping, are the responsibility of the buyer. Any agreement for shipping is a contract between the buyer and the shipper; PBMA is not a party to any such contract and expressly disclaims any responsibility thereunder. No items will be released for shipping until PBMA receives payment in full and all payments have cleared. Thereafter, items may be picked up at PBMA&#39;s exhibition facility Monday through Friday between 10:00 A.M. - 5:00 P.M. by the winning bidders or their shippers. Please call PBMA the day before you intend to pick-up any item. If a shipper is picking up an item, please send PBMA an e-mail confirming the name of the shipper and the property to be released into the shipper&#39;s possession, and providing PBMA permission to release the property to your shipper. All winning lots must be picked up within thirty (30) business days following the close of the auction. After this time, each lot will become subject to storage fees of not less than $5 per day. After 180 days following the close of the auction, any lot which is not picked up will become the property of PBMA and may be disposed of by PBMA, in any manner it chooses, without recourse.</p>\r\n', 1, '<p>Payment Terms: Payment: Payment must be made within seven (7) days following the auction. Payment may be made by paypal, American Express, wire transfer, check, cashier&#39;s check, money order, Visa, Mastercard, or Discover, however, invoices exceeding $50,000.00 must be paid by cash, check, or wire transfer; PBMA will not accept credit cards for invoices above this amount. Additionally, international bidders must pay by wire transfer; no other form of payment transfer will be accepted from international bidders or buyers. Buyers paying by credit card must sign and date the &#39;Auction Terms and Conditions Credit Card Authorization Form&#39; and submit same to PBMA via fax or email. Buyer consents to the completion of Buyer&#39;s credit card transacti</p>\r\n', 1, 'new', 'approved', '_Rn5VVWuzZw6taoB.jpeg', '2018-02-21 03:04:39', '2018-04-02 10:42:06', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(18, 15, 'MAC BOOK PRO A1286 4GB 15 IN LAPTOP FACTORY RESET', 'mac-book-pro-a1286-4gb-15-in-laptop-factory-reset-bc5c1a6865be8b6c60dcbfbee7e47b743e7759cd-17', 1, 18, '<p>&nbsp;15.4 inch MacBook Pro (Model #A1286). Factory reset with original charger. Intel Core i7, 2.3 Ghz, 4 GB. In very good operating and cosmetic condition. A few small marks present to body.</p>\r\n', '2018-02-15 14:12:00', '2018-04-30 14:13:00', '70000.00', '600.00', 1, '800.00', 1, '60000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;American Express, Discover, MasterCard, Visa</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;To help expedite our shipping process, we will be adding the cost of shipping and handling to items that we ship in-house. This will ensure that your winnings are sent out as soon as possible. This excludes items that are large or fragile as they will be shipped via a third-party shipper.<br />\r\nIn-house Shipping totals with handling included:<br />\r\n<br />\r\nLetter size or smaller Envelope $9.65<br />\r\n<br />\r\n&nbsp;</p>\r\n', 1, '<p><strong>Shipping Terms:</strong>&nbsp;To help expedite our shipping process, we will be adding the cost of shipping and handling to items that we ship in-house. This will ensure that your winnings are sent out as soon as possible. This excludes items that are large or fragile as they will be shipped via a third-party shipper.<br />\r\nIn-house Shipping totals with handling included:<br />\r\n&nbsp;</p>\r\n', 1, 'open', 'approved', '18_uKSyD2zKkhPB04a.jpeg', '2018-02-21 03:13:33', '2018-07-13 09:04:16', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:34:09', '23:34:11'),
(19, 15, 'Vintage Macintosh Computer Full Set', 'vintage-macintosh-computer-full-set-37b8d1edf51935f4314f48572439daf8ad1563dd-18', 1, 18, '<p>Vintage Macintosh Computer , this Macintosh computer features a monitor, keyboard, mouse, mount and printer, the monitor is measured at 12 x 14 x 16 inches</p>\r\n\r\n<p><strong>Condition Report:</strong>&nbsp;The absence of a condition report does not guarantee excellent condition. All sales are final. All items are sold as-is, where-is. Thank you. Antique Treasures LLC DBA Greenwich Auction makes no guarantees to the exact weights, measurements, karats, carats, makers, artists, materials, age, etc. All descriptions are the opinion of Greenwich Auction only. In hand evaluations and additional photographs are available for ALL lots. Public preview and private viewings will be held for four days. Lots cannot be picked up until the Tuesday after the auction.</p>\r\n', '2018-02-16 14:14:00', '2018-04-23 14:15:00', '60000.00', NULL, 1, '800.00', 1, '70000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;Discover, MasterCard, Money Order / Cashiers Check, Personal Check, Visa, Wire Transfer</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;.&nbsp;<br />\r\nWe do not ship ourselves, but recommend local outlets. Please contact the shippers directly.<br />\r\n<br />\r\nThe Packaging Store, Stamford, CT 203 329-0301 email: high927@aol.com<br />\r\n<br />\r\nThe UPS Store # 0706, Stamford, CT 203 356-0022 email: store0706@theupsstore.com<br />\r\n<br />\r\nEco-Tristate Ship &amp; Move for tri state area 646 302-0604 email: etsm35@gmail.com</p>\r\n', 1, '<p><strong>Shipping Terms:</strong>&nbsp;.&nbsp;<br />\r\nWe do not ship ourselves, but recommend local outlets. Please contact the shippers directly.<br />\r\n<br />\r\nThe Packaging Store, Stamford, CT 203 329-0301 email: high927@aol.com<br />\r\n<br />\r\nThe UPS Store # 0706, Stamford, CT 203 356-0022 email: store0706@theupsstore.com<br />\r\n<br />\r\nEco-Tristate Ship &amp; Move for tri state area 646 302-0604 email: etsm35@gmail.com<br />\r\n<br />\r\nASAP ETC INC, Mamaroneck, NY 914 381-6421 or 914 698-6671 email:info@asapetc.com<br />\r\n<br />\r\nDG Moving Services - Packing &amp; Moving, Mamaro</p>\r\n', 1, 'open', 'approved', '19_QE6L5omAJUqjxuK.jpeg', '2018-02-21 03:16:50', '2018-07-13 09:03:56', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:33:48', '23:33:51'),
(20, 13, 'Tischgrammophon mit Platten', 'tischgrammophon-mit-platten-1d0131da21d4fc0582a5f8e5a859181dbc3d8050-19', 1, 19, '<p>um 1910, gemarkt Polyphone Musik, dunkles Eichengeh&auml;use mit klappbarem Deckel, zweifl&uuml;geliger Front sowie dahinter liegendem Schallloch, verchromte Metallteile, originale Kurbel, Werk l&auml;uft, min. rep.bed., Ma&szlig;e 35 x 40 x 40 cm, dazu gro&szlig;er Posten Schelllackplatten untersch. Hersteller und Genres.</p>\r\n', '2018-02-10 14:18:00', '2018-04-30 14:19:00', '7000.00', '500.00', 1, '800.00', 1, '8000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;American Express, COD (cash on delivery), MasterCard, Visa, Wire Transfer</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;Mehlis GmbH is pleased to ship purchased lots on behalf of absentee bidders.<br />\r\n<br />\r\nImportantly, absentee bidders should note that purchases made using our absentee bid form, by either telephone or in writing, that shipping instructions must be indicated by ticking the box on the bid form. In the absence of this instruction we will automatically assume that the buyer will require Mehlis GmbH to ship on his / her behalf. The standard shipping charge will cover the costs of packing and postage, together with insurance against loss or damage in transit only. These charges will be recorded on the buyer`s invoice (the insurance premium calculated at 1% of the aggregate purchase figure)<br />\r\n<br />\r\nIf shipping costs are not recorded on the buyer&acute;s invoice it means either that the buyer intends to collect purchases in person or that standard shipping is not possible. In the latter case this may be for reasons of the abnormal size, weight or fragility of the purchased object, it may also result from the specific application of legal requirements.</p>\r\n', 0, '<p><strong>Shipping Terms:</strong>&nbsp;Mehlis GmbH is pleased to ship purchased lots on behalf of absentee bidders.<br />\r\n<br />\r\nImportantly, absentee bidders should note that purchases made using our absentee bid form, by either telephone or in writing, that shipping instructions must be indicated by ticking the box on the bid form. In the absence of this instruction we will automatically assume that the buyer will require Mehlis GmbH to ship on his / her behalf. The standard shipping charge will cover the costs of packing and postage, together with insurance against loss or damage in transit only. These charges will be recorded on the buyer`s invoice (the insurance premium calculated at 1% of the aggregate purchase figure)</p>\r\n', 1, 'open', 'approved', '20_94ZAPMvadlD9hOK.jpeg', '2018-02-21 03:19:42', '2018-07-13 09:03:36', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:33:29', '23:33:32'),
(21, 13, 'AN HMV MODEL 108 GRAMOPHONE, in dark oak casing, plus a selection ', 'an-hmv-model-108-gramophone-in-dark-oak-casing-plus-a-selection-6f40bec66e478c9b229c26201d826cad5af8cf02-20', 1, 19, '<p>AN HMV MODEL 108 GRAMOPHONE, in dark oak casing, plus a selection of 78&#39;s</p>\r\n\r\n<p><strong>Notes:</strong>&nbsp;Decorative Items</p>\r\n\r\n<p><strong>Accepted forms of payment:</strong>&nbsp;COD (cash on delivery), MasterCard, Money Order / Cashiers Check, Personal Check, Visa, Wire Transfer</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;Available on request</p>\r\n', '2018-04-09 09:00:00', '2018-04-30 14:21:00', '7000.00', '900.00', 0, NULL, 1, '7000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;COD (cash on delivery), MasterCard, Money Order / Cashiers Check, Personal Check, Visa, Wire Transfer</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;Available on request</p>\r\n', 0, '<p>Available on request</p>\r\n', 1, 'open', 'approved', '21_8M3iYK4lK6jLSca.jpeg', '2018-02-21 03:20:54', '2018-07-13 09:03:11', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, '2018-07-13', '09:33:03', '23:33:06'),
(22, 3, 'Columbia Grafonola', 'columbia-grafonola-ac6a1ec911c46ca1a1f20bbb846d9b34866f1961-21', 1, 19, '<p>Columbia Grafonola, mahogany, chrome plated metal interior with needle and vinyl records, English, 20th C. (1st quarter), minor defects, signs of use, marked P. SANTOS &amp; Ca. LDA. - RUA IVENS, 52-54 - RUA GARRETT, 57-59-61 - LISBON, Dim. - 111 x 52 x 55,5 cm</p>\r\n', '2018-02-11 14:30:00', '2018-04-30 14:31:00', '6000.00', '600.00', 1, '700.00', 1, '7000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;Wire Transfer</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;CABRAL MONCADA LEIL&Otilde;ES, in partnership with IBEROMAIL, provides Packing and Shipping services, according to the correspondent rate and tariff guides available at: https://www.cml.pt/en/informations/packing-and-shipping-service</p>\r\n', 1, '<p><strong>Terms Shipping:</strong>&nbsp;CABRAL MONCADA LEIL&Otilde;ES, in partnership with IBEROMAIL, provides Packing and Shipping services, according to the correspondent rate and tariff guides available at: https://www.cml.pt/en/informations/packing-and-shipping-service</p>\r\n', 1, 'closed', 'approved', '22_WXbjFzHHUyvxW0p.jpeg', '2018-02-21 03:31:55', '2018-04-21 11:41:12', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(23, 3, 'Columbia Grafonola', 'columbia-grafonola-b6f2d919a833234abd84a9fd5729d52f53f996b3-22', 1, 19, '<p>Columbia Grafonola</p>\r\n', '2018-02-13 14:35:00', '2018-04-30 14:36:00', '8000.00', '800.00', 1, '900.00', 1, '9000.00', '<p><strong>Accepted forms of payment:</strong>&nbsp;Discover, MasterCard, Personal Check, Visa</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;Items can be shipped at the buyers expense. We will not ship furniture, large items or items we choose best not to ship. We also have the right to not ship items at our discretion for any reason.</p>\r\n', 1, '<p><strong>Payment:</strong>&nbsp;There will be a 10% fee when paying with a credit card. If you have a bad credit card please don&#39;t bother bidding. We reserve the right to charge the credit card on file after 4 days.</p>\r\n\r\n<p><strong>Shipping:</strong>&nbsp;Items can be shipped at the buyers expense. We will not ship furniture, large items or items we choose best not to ship. We also have the right to not ship items at our discretion for any reason.</p>\r\n', 0, 'new', 'pending', '23_Dwb91SoMboudNn0.jpeg', '2018-02-21 05:08:11', '2018-04-10 05:48:29', NULL, 1, 1, 'paid', 10.00, NULL, 'fixed', 100.00, NULL, NULL, NULL, NULL),
(25, 33, 'Samsung Ultra HD', 'samsung-ultra-hd-ccfc67455ee0dd7bce3f482168a3d7ca6d81294d-23', 1, 1, '<p>What is Lorem Ipsum? Lorem Ipsum is simply <em>dummy text</em> of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard <em>dummy text</em> ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', '2018-04-10 11:34:00', '2018-11-28 11:35:00', '35000.00', '20000.00', 1, '500.00', 1, '30000.00', '<p>What is Lorem Ipsum? Lorem Ipsum is simply <em>dummy text</em> of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard <em>dummy text</em> ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 0, '<p>What is Lorem Ipsum? Lorem Ipsum is simply <em>dummy text</em> of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard <em>dummy text</em> ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 1, 'open', 'approved', '_Bs2BQVZxbP4iQXa.jpeg', '2018-04-11 11:34:57', '2018-07-13 09:01:12', NULL, 33, 1, NULL, NULL, NULL, 'free', 0.00, NULL, '2018-07-13', '09:31:00', '23:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `id` int(10) UNSIGNED NOT NULL,
  `ab_id` int(10) UNSIGNED DEFAULT NULL,
  `bid_amount` float(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`id`, `ab_id`, `bid_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 900.00, '2018-03-09 06:46:10', '2018-03-09 06:46:10'),
(2, 1, 910.00, '2018-03-09 06:48:48', '2018-03-09 06:48:48'),
(3, 2, 7000.00, '2018-03-09 06:52:19', '2018-03-09 06:52:19'),
(4, 2, 12000.00, '2018-03-09 06:58:12', '2018-03-09 06:58:12'),
(5, 2, 17000.00, '2018-03-09 07:00:31', '2018-03-09 07:00:31'),
(6, 1, 920.00, '2018-04-04 04:50:39', '2018-04-04 04:50:39'),
(7, 3, 30500.00, '2018-04-11 14:53:10', '2018-04-11 14:53:10'),
(8, 4, 31000.00, '2018-04-11 14:54:59', '2018-04-11 14:54:59'),
(9, 4, 31500.00, '2018-04-11 14:55:15', '2018-04-11 14:55:15'),
(10, 3, 32000.00, '2018-04-11 14:55:42', '2018-04-11 14:55:42'),
(11, 4, 32500.00, '2018-04-11 14:55:53', '2018-04-11 14:55:53'),
(12, 4, 35500.00, '2018-04-11 15:00:08', '2018-04-11 15:00:08'),
(13, 5, 1300.00, '2018-04-21 10:15:26', '2018-04-21 10:15:26'),
(14, 6, 2000.00, '2018-04-21 10:17:52', '2018-04-21 10:17:52'),
(15, 5, 6200.00, '2018-04-21 10:18:11', '2018-04-21 10:18:11'),
(16, 7, 800.00, '2018-04-21 10:39:57', '2018-04-21 10:39:57'),
(17, 8, 600.00, '2018-04-21 10:46:38', '2018-04-21 10:46:38'),
(18, 8, 1400.00, '2018-04-21 10:46:55', '2018-04-21 10:46:55'),
(19, 9, 11000.00, '2018-04-21 10:47:26', '2018-04-21 10:47:26'),
(20, 5, 70000.00, '2018-04-21 10:59:45', '2018-04-21 10:59:45'),
(21, 10, 22000.00, '2018-04-21 11:23:36', '2018-04-21 11:23:36'),
(22, 7, 14400.00, '2018-04-21 11:47:45', '2018-04-21 11:47:45'),
(23, 11, 8000.00, '2018-04-23 12:00:00', '2018-04-23 12:00:00'),
(24, 12, 14000.00, '2018-04-23 12:02:16', '2018-04-23 12:02:16'),
(25, 11, 20000.00, '2018-04-23 12:02:30', '2018-04-23 12:02:30'),
(26, 11, 44000.00, '2018-04-23 15:11:05', '2018-04-23 15:11:05'),
(27, 13, 12000.00, '2018-04-23 15:11:41', '2018-04-23 15:11:41'),
(28, 14, 18000.00, '2018-04-23 15:14:34', '2018-04-23 15:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'electronics-a797ef10865664bf24c9f65ef1a9dbbdaed20e33', '', 'Active', '2018-02-02 00:41:13', '2018-04-04 06:01:36'),
(2, 'House', 'house-cc3e33fcd9a80a5627a38d1dca0808d2224840f8-1', 'sdfsdfsdfsdf', 'Active', '2018-02-02 04:09:46', '2018-02-02 04:31:48'),
(3, 'FINE ART', 'fine-art-b464364aa26af118551394ddde6c7acd9f911b7f-2', 'tesffsdf', 'Active', '2018-02-03 06:25:49', '2018-02-03 06:25:49'),
(4, 'DECORATIVE ART', 'decorative-art-eb7b9d6b695ffb70792dec2bb1378281d3e6ce24-3', '', 'Active', '2018-02-03 06:26:02', '2018-02-03 06:26:02'),
(5, 'JEWELLARY', 'jewellary-48e935a93f6fdf78cdd693bf564e1b873a054cb0-4', '', 'Active', '2018-02-03 06:26:13', '2018-02-03 06:26:13'),
(6, 'COLLECTIBLES', 'collectibles-e749ae64f600d9a8978de80476bf4a3b8a7badc9-5', '', 'Active', '2018-02-03 06:26:24', '2018-02-03 06:26:24'),
(7, 'FURNITURE', 'furniture-7bcd6acf0d825acee44a08bbdb603aa27e741925-6', '', 'Active', '2018-02-03 06:26:33', '2018-02-03 06:26:33'),
(8, 'ASIAN ART', 'asian-art-65e98e73873cf598072e9df71503f42db099b3b5-7', '', 'Active', '2018-02-03 06:26:40', '2018-02-03 06:26:40'),
(9, 'Asian Antiques', 'asian-antiques-414664218d7e31b6f2bb3b325f41f77ecba1f339-8', '', 'Active', '2018-02-20 07:29:57', '2018-02-20 07:29:57'),
(10, 'Furniture', 'furniture-84f24cd70826f6be3e23ba2b11446a13459a7f76-9', '', 'Active', '2018-02-20 07:30:09', '2018-02-20 07:53:27'),
(11, 'Collectibles', 'collectibles-fae3d53c6c6b24dda159a2e9a2d04d893989a41e-10', '', 'Active', '2018-02-20 07:30:21', '2018-02-20 07:47:37'),
(12, 'Coins', 'coins-130aeb7eba583e5152cd4b1d33169483771af101-11', '', 'Active', '2018-02-20 07:30:29', '2018-02-20 07:30:29'),
(13, 'Memorabilia', 'memorabilia-e912fe332ab3a4c554f5cbabc888af4a149fe1cf-12', '', 'Active', '2018-02-20 07:30:35', '2018-02-20 07:30:35'),
(14, 'Home & Garden', 'home-garden-e3d018f77d526007354ef32172544989f792033a-13', '', 'Active', '2018-02-20 07:31:19', '2018-02-20 07:31:19'),
(15, 'Fashion', 'fashion-287d70983740d32b61df2b43653c202692f81c7c-14', '', 'Active', '2018-02-20 07:31:24', '2018-02-20 07:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `slug`, `country_id`, `state_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nagpur', 'nagpur-ed0976809b8c2276977f99fbda97653d2afc3999', 105, 1, 'Inactive', '2018-02-02 07:31:14', '2018-04-04 04:58:13'),
(2, 'Mumbai', 'mumbai-d59c72b28a3c2811368277bc0206369d036eec51-1', 105, 1, 'Active', '2018-02-19 07:12:53', '2018-02-19 07:12:53'),
(3, 'Pune', 'pune-63b074058dafb4aa8ec4a1300d66aaf5fae1f032-2', 105, 1, 'Active', '2018-02-19 07:13:07', '2018-02-19 07:13:07'),
(4, 'Nashik', 'nashik-ad25670ecc3d948b05852e37b7a905f520d6ee14-3', 105, 1, 'Active', '2018-02-19 07:13:40', '2018-02-19 07:13:40'),
(5, 'Solapur', 'solapur-d5ff702084b82c448dd026c6f021622557abc7fb-4', 105, 1, 'Active', '2018-02-19 07:13:54', '2018-02-19 07:13:54'),
(6, 'Bhiwandi', 'bhiwandi-c589c1de65279294e349ba8ff4dc923c74403f8a-5', 105, 1, 'Active', '2018-02-19 07:14:12', '2018-02-19 07:14:12'),
(7, 'Shirdi', 'shirdi-f1311a4c41665907f65db6aef76fbe9e6a540485-6', 105, 1, 'Active', '2018-02-19 07:14:26', '2018-02-19 07:14:26'),
(8, 'Vijayawada', 'vijayawada-a0cba4d956740f058216a08466ca9ce923f1a1fa-7', 105, 2, 'Active', '2018-02-19 07:15:19', '2018-02-19 07:15:19'),
(9, 'Vishakapatnam', 'vishakapatnam-06b47255dd6cc1279c6d3822ebe45ecac8af9885-8', 105, 2, 'Active', '2018-02-19 07:15:33', '2018-02-19 07:15:33'),
(10, 'Thirupathi', 'thirupathi-64ad0031d955954db29b780cf41a5afe5ebf23c5-9', 105, 2, 'Active', '2018-02-19 07:15:44', '2018-02-19 07:15:44'),
(11, 'Guntur', 'guntur-16fcc79efb28cc4827eeae7767c75dd6203f6864-10', 105, 2, 'Active', '2018-02-19 07:15:58', '2018-02-19 07:15:58'),
(12, 'Kakinada', 'kakinada-8e5976fb2354acfb6d417799a2923873f71bd78d-11', 105, 2, 'Active', '2018-02-19 07:16:07', '2018-02-19 07:16:07'),
(13, 'Rajamundry', 'rajamundry-1b975564c023cf316fdfdd26c0e93371b0e36fce-12', 105, 2, 'Active', '2018-02-19 07:16:19', '2018-02-19 07:16:19'),
(14, 'Amaravati', 'amaravati-52829e1b2a0b730b2a8f829dc497a41c6c767645-13', 105, 2, 'Active', '2018-02-19 07:16:35', '2018-02-19 07:16:35'),
(15, 'Eluru', 'eluru-b01369eb2a47539e39455e0783edda4a5551f842-14', 105, 2, 'Active', '2018-02-19 07:16:43', '2018-02-19 07:16:43'),
(16, 'Hyderabad', 'hyderabad-0935b88903fcc46599e43af3d52d2f42fdeec825-15', 105, 3, 'Active', '2018-02-19 07:17:33', '2018-02-19 07:17:33'),
(17, 'Warangal', 'warangal-418738f495950794744778c35825d41490a1e283-16', 105, 3, 'Active', '2018-02-19 07:17:45', '2018-02-19 07:17:45'),
(18, 'Karimnagar', 'karimnagar-ecc079b0ecce091f74eaef554a1ee8e9f9867000-17', 105, 3, 'Active', '2018-02-19 07:17:54', '2018-02-19 07:17:54'),
(19, 'Khammam', 'khammam-517eedab18323d46a638fdc6779896b10e02e2fd-18', 105, 3, 'Active', '2018-02-19 07:18:07', '2018-02-19 07:18:07'),
(20, 'Nizamabad', 'nizamabad-136ec25919c4b85d6a1608a7320ec4172421d8c4-19', 105, 3, 'Active', '2018-02-19 07:18:20', '2018-02-19 07:18:20'),
(21, 'Suryapet', 'suryapet-15bad1c289f7c005b46f9a7dd90a42456490de9d-20', 105, 3, 'Active', '2018-02-19 07:18:31', '2018-02-19 07:18:31'),
(22, 'Nalgonda', 'nalgonda-6ba2206c4b8eb571cf18646d9cd7d8aeb3570afd-21', 105, 3, 'Active', '2018-02-19 07:18:43', '2018-02-19 07:18:43'),
(23, 'Ramagundam', 'ramagundam-e0a3478bf60ed90ce0dbee7e87c1c682d297a037-22', 105, 3, 'Active', '2018-02-19 07:18:52', '2018-02-19 07:18:52'),
(24, 'Siddipet', 'siddipet-7be78f3499d1ce144a1cd51723283a124cc02da6-23', 105, 3, 'Active', '2018-02-19 07:19:16', '2018-02-19 07:19:16'),
(25, 'Sangareddy', 'sangareddy-50698ff7987f18cc1dfad225fffbec003e507691-24', 105, 3, 'Active', '2018-02-19 07:19:29', '2018-02-19 07:19:29'),
(26, 'Chennai', 'chennai-a79a994619d8029f4ed693c94b4779eaef16ae23-25', 105, 4, 'Active', '2018-02-19 07:20:11', '2018-02-19 07:20:11'),
(27, 'Coimbatore', 'coimbatore-b4decebfbbac22a764986d9bedfd3992871f4ef3-26', 105, 4, 'Active', '2018-02-19 07:20:34', '2018-02-19 07:20:34'),
(28, 'Madurai', 'madurai-61417ae5d1794678e1cb0a5b3161c78c1dad864e-27', 105, 4, 'Active', '2018-02-19 07:20:47', '2018-02-19 07:20:47'),
(29, 'Tiruchirappalli', 'tiruchirappalli-9bd8157c1965343eb9fd3b3cdc43222ff4cb5af8-28', 105, 4, 'Active', '2018-02-19 07:21:09', '2018-02-19 07:21:09'),
(30, 'Tanjavur', 'tanjavur-991e76ebc5f8f815deab4e651fe145364f8b94d1-29', 105, 4, 'Active', '2018-02-19 07:21:23', '2018-02-19 07:21:23'),
(31, 'Vellore', 'vellore-14c15b2468ba9fe3ad2d7403532741108197aa2f-30', 105, 4, 'Active', '2018-02-19 07:21:34', '2018-02-19 07:21:34'),
(32, 'Tirupur', 'tirupur-f6192a386d54b2954209c6842c729b575d241ce1-31', 105, 4, 'Active', '2018-02-19 07:21:48', '2018-02-19 07:21:48'),
(33, 'Tirunelveli', 'tirunelveli-8628413e1b3227e3f0d537caf5fa095569cc3192-32', 105, 4, 'Active', '2018-02-19 07:22:08', '2018-02-19 07:22:08'),
(34, 'Bangalore', 'bangalore-fd5796722bda24728e746a47317ca4e502959f46-33', 105, 5, 'Active', '2018-02-19 07:22:45', '2018-02-19 07:22:45'),
(35, 'Mangalore', 'mangalore-88551fee440a744edeabc52b6988a16174e86c5a-34', 105, 5, 'Active', '2018-02-19 07:22:58', '2018-02-19 07:22:58'),
(36, 'Belgaum', 'belgaum-aea98abb44c176b56391b6a86083a3c04d5b453f-35', 105, 5, 'Active', '2018-02-19 07:23:13', '2018-02-19 07:23:13'),
(37, 'Hubli', 'hubli-4da2f48e911d871b628ba5c696b92aac13e03cbb-36', 105, 5, 'Active', '2018-02-19 07:23:25', '2018-02-19 07:23:25'),
(38, 'Shimoga', 'shimoga-e4a2e0bfc523927f749d479bb356fdb1002f0841-37', 105, 5, 'Active', '2018-02-19 07:23:38', '2018-02-19 07:23:38'),
(39, 'Bellary', 'bellary-94fed00ecf13c939590597b496db880f2fcc754c-38', 105, 5, 'Active', '2018-02-19 07:23:50', '2018-02-19 07:23:50'),
(40, 'Bidar', 'bidar-78e748133ea3ca4c884964dd444832fa59dbc5fa-39', 105, 5, 'Active', '2018-02-19 07:24:05', '2018-02-19 07:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `content_pages`
--

CREATE TABLE `content_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `page_text` text CHARACTER SET utf8,
  `excerpt` text CHARACTER SET utf8,
  `featured_image` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_pages`
--

INSERT INTO `content_pages` (`id`, `title`, `slug`, `page_text`, `excerpt`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<p>Recently called &quot;one of the fastest growing e-commerce sites in the art world&quot; by Blouin ArtInfo, Invaluable is the world&#39;s leading online marketplace for fine art, antiques and collectibles.</p>\r\n\r\n<p>Auction houses, galleries and dealers use Invaluable to deepen relationships with millions of clients around the world, connecting people with the things they love.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.invaluable.com/wwwImages/about/Main-Image-min.png\" style=\"height:58px; width:800px\" /></p>\r\n\r\n<p>LiveAuctioneers brings an international audience of millions to the heart of the bidding action in art, antiques, jewelry and collectibles auctions across the globe.</p>\r\n\r\n<p>With fascinating objects up for bid in 47 countries&mdash;instantly translated to your language and currency&mdash;LiveAuctioneers is a worldwide marketplace with treasures waiting to be discovered, whether you&#39;re an avid collector or a first-time visitor.</p>\r\n\r\n<p>By hosting thousands of auctions in real time via the Internet, the site allows unprecedented access to remote sales, and savvy bidders can often land desired items at very desirable prices. Leave an absentee bid, or fully engage in the auction action&mdash;it&#39;s up to you. All bidding takes place via the Secure Bidder Network (SBN), which keeps absentee bids for upcoming sales private until the item is opened on the day of the sale.</p>\r\n\r\n<p>LiveAuctioneers revolutionized the industry from the start. In 2002, the NYC-based company formed a marketing partnership with eBay to introduce eBay Live Auctions. This alliance of LiveAuctioneers and eBay enabled auction houses worldwide to go online with their live sales &mdash; a development that changed the auction business forever. In 2009, the debut of LiveAuctioneers&#39; iPhone and Android apps, with live-bidding capabilities, opened up a new mobile pipeline to bid anytime, from anywhere, with complete anonymity.</p>\r\n\r\n<p>Now in its 14th year, LiveAuctioneers has become the Web&#39;s leading auction-related site. LiveAuctioneers also provides a constant stream of industry intelligence via:</p>\r\n\r\n<p>The easy-to-use&nbsp;<a href=\"https://www.liveauctioneers.com/auction-results\">Auction Results Database</a>, a vast database with 12.9 million results that offers keyword-search access to bona fide auction outcomes, recent to historical. The updated archive is the #1 free online resource for the trade, appraisers, collectors, designers, arts institutions, estate officers, journalists, students and others on the research hunt;</p>\r\n\r\n<p><a href=\"https://www.liveauctioneers.com/news/\" target=\"_blank\">Auction Central News</a>, the global destination for the latest auction headlines, mixing timely items with articles by experts on all things design.</p>\r\n', 'Sample excerpt', '', 'Active', '2018-02-02 00:41:13', '2018-02-21 04:21:07'),
(2, 'Terms Conditions', 'terms-conditions', '<p><strong>Introduction</strong></p>\r\n\r\n<p>Welcome to LiveAuctioneers&#39; Live Auction User Agreement (the &quot;Agreement&quot;). This Agreement contains terms and conditions applicable to your use of the live auction services we host, as well as your participation in live auction events conducted by an Auction House (&quot;Auction House&quot;).</p>\r\n\r\n<p>By using the services on any LiveAuctioneers website (i.e., LiveAuctioneers.com and any other related websites where this Agreement appears), you are agreeing to the following terms and conditions, including those available by hyperlink, with LiveAuctioneers , as well as our subsidiaries and affiliates (&quot;LiveAuctioneers&quot;).</p>\r\n\r\n<p>Before you may become a member of LiveAuctioneers, you must read and accept all of the terms and conditions in, and referenced by, this Agreement and our Privacy Policy (whether such terms and conditions are contained in the primary document itself or are hyperlinked to related documents). We strongly recommend that, as you read this Agreement, you also access and read all linked information, as well as the listing of&nbsp;<a href=\"https://www.liveauctioneers.com/terminology\">Auction Terminology</a>. Some LiveAuctioneers-branded websites, or sites that we operate, may also be governed by separate user agreements and privacy policies that you should also read.</p>\r\n\r\n<p>You acknowledge and agree that we may amend this Agreement at any time, and from time to time, by posting the amended terms on our website. Unless, and only to the extent, expressly stated to the contrary herein, all amended terms and conditions shall automatically be effective on a prospective basis once they are posted on our site. Accordingly, you are encouraged to periodically review our terms of use for any such changes and/or amendments.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Live Auction Agreement</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Eligibility</strong>. Each Auction House that conducts a live auction will have its own eligibility requirements that must be met in order for you to participate in that auction. You may be required to apply for and obtain approval in order to participate in a specific live auction. Approval to participate in one live auction does not guarantee approval to participate in any other live auction, conducted either by that Auction House, or another Auction House. Each Auction House has sole and absolute discretion to refuse to approve your eligibility for any live auction.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fees</strong>. Each Auction House may charge a buyer&#39;s premium (which is an additional fee that a winning bidder is required to pay above the auction price) as well as shipping, handling, and other fees. These fees are subject to change depending upon the Auction House and the particular item for sale, and are set by the Auction House.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>LiveAuctioneers is Only a Venue</strong>.</p>\r\n\r\n	<p><strong>(a) Services</strong>. We are not an auction house and are not conducting the live auctions. Our service allows you to participate in live auctions conducted by the Auction House. We are solely a passive conduit to facilitate communication between you and the Auction House. We reserve the right in our sole and absolute discretion to change some or all of our services at any time.</p>\r\n\r\n	<p><strong>(b) Control</strong>. We have no control over the quality, safety, or legality of the items advertised, the truth or accuracy of the listings, or the ability of the Auction House to sell and the ability of buyers to buy items. We also do not ensure or guarantee that a buyer or seller will actually complete a transaction.</p>\r\n\r\n	<p><strong>(c) Compliance with Laws</strong>. You acknowledge and agree that the use, purchase, distribution, promotion, advertising, and sale of certain products are subject to federal state, and local regulations, including, but not limited to, firearms, Indian artifacts, recalled products, children&#39;s products, alcoholic beverages, coins and currency. You further acknowledge and agree that LiveAuctioneers&#39; role with respect to the sale of products is limited to providing a conduit through which a prospective purchaser is able to participate in an auction. LiveAuctioneers does not review or evaluate the products auctioned, or verify the descriptions given or claims made, by Auction Houses regarding the products. You expressly represent that you shall comply with all applicable federal, state, and local laws, statutes, ordinances, and regulations relating to your use, purchase, and distribution of any products that you bid upon or purchase through LiveAuctioneers (hereinafter, the &quot;Regulations&quot;), including, but not limited to, (i) the Gun Control Act of 1968 and all regulations promulgated by the Bureau of Alcohol, Tobacco, Firearms, and Explosives (collectively, the &quot;Firearms Regulations&quot;), (ii) the Consumer Products Safety Improvement Act of 2008 and all regulations promulgated by the U.S. Consumer Products Safety Commission, and (iii) the Indian Arts &amp; Crafts Act of 1990 and any additional laws and regulations applicable to the sale of Indian arts and crafts. You shall at all times defend, indemnify and hold LiveAuctioneers, its shareholders, members, partners, officers, directors, employees, agents, parent, subsidiaries, affiliates, joint venturers, and successors and assigns, harmless from, and against, any and all causes of action, suits, claims, demands, judgments, liabilities, losses, damages, awards, penalties, fines, costs and expenses (including, but not limited to, reasonable attorney&#39;s fees) of any nature or kind, arising under or resulting from: (i) your use, purchase, or distribution of any products in violation of any Regulations; (ii) your use of LiveAuctioneers in connection with the purchase of any products subject to any Regulations; and (iii) your alleged or actual violation or breach of any Regulations.</p>\r\n\r\n	<p><strong>(d) Release</strong>. Since we are not involved in the actual transactions between buyers and Auction Houses, in the event that you have a dispute with an Auction House, you hereby release LiveAuctioneers (and our shareholders, members, partners, officers, directors, employees, agents, parent, subsidiaries, affiliates, joint venturers, and successors and assigns) from causes of action, suits, claims, demands, judgments, and damages (actual and consequential) of every kind and nature, known and unknown, suspected and unsuspected, disclosed and undisclosed, arising out of, or in any way connected with, such disputes. If you are a California resident, you waive California Civil Code &Acirc;&sect; 1542, as amended from time to time, and any similar statutes, to the extent that such statute(s) prohibits a general release from extending to claims that a creditor does not know or suspect to exist in his/her favor at the time of executing the release, which if known by the creditor, would materially affect his/her settlement with the debtor.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Auction Houses</strong>. The Auction House will list available items on which you may bid. Auction dates and times, as well as the number, character, and order and schedule of the items to be auctioned, are set by the Auction House and are subject to change without notice. Individual lots and items may be modified or changed at any time. Some lots and items that are made available on the auction floor will not be included in the online live auction services. We do not control the information that is provided by the Auction House, which is made available through our system. We also do not guarantee that the Auction House maintains proper auctioneers&#39; licenses or complies with all applicable laws, rules, and regulations.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bidding, Buying and Conditions of Sale</strong>. The terms and conditions for participation in each auction, including how bids are accepted, rules governing absentee bids, bid increments, bid retraction and cancellation, the conditions the buyer must meet to purchase an item, as well as the specific conditions of sale (such as warranties, shipping costs, insurance, and the like) may change for each auction at the sole discretion of the Auction House. The Auction House is required to post its terms and conditions and to maintain such terms throughout the auction period. You agree to be bound by those bidding terms and conditions of sale by agreeing to this Agreement. This Agreement, in addition to those Auction House terms and conditions, governs your bidding activity, as well as your participation in each auction. The Auction House acts as an auctioneer and makes the sole, final determination with respect to bidding on the item, the sale of the item, and the resolution of any disputes. All matters relating to a refund or return of won items are also determined by the outlined terms and conditions of the Auction House.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Video and Audio</strong>. Any audio or video aspects of a live auction event are for entertainment purposes only.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Use of Images</strong>. LiveAuctioneers has the right to use, on its website and in advertising and promotional materials, images (including photographic images) of items being sold or that have been sold on its website, including images of items which have been purchased through the site.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Using LiveAuctioneers</strong>. While using LiveAuctioneers, you shall not: (a) violate any laws, rules, regulations or third party rights; (b) use our sites or services if you are not able to form legally binding contracts, are under the age of 18, or are temporarily or indefinitely suspended from our sites; (c) fail to deliver payment on any item that you purchased through our sites; (d) manipulate the price of any item or interfere with other user&#39;s listings; (e) post false, inaccurate, misleading, defamatory, or libelous content (including personal information); (f) distribute or post spam, chain letters, or pyramid schemes; (g) distribute viruses or any other technologies that may harm LiveAuctioneers, our sites, or the interests or property of LiveAuctioneers&#39; users; (h) copy, modify, or distribute content from our sites and/or violate LiveAuctioneers&#39;s copyrights and trademarks; or (i) harvest or otherwise collect information about users, including, without limitation, email addresses, without their consent. Nor shall you encourage or assist any third party to engage in any of the prohibited conduct set forth above. Any violation of this provision shall constitute a material breach of this Agreement and, under such circumstances, we will have the right, in our sole and absolute discretion, to prohibit your access to our sites and to suspend or terminate your right to use our services.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Abusing LiveAuctioneers</strong>. (a) LiveAuctioneers will work to keep our sites and services working properly and safely. Please report problems, offensive content, and any policy violations to us. (b)Without limiting our remedies, it is understood that we may limit, suspend, or terminate our services and user accounts, prohibit access to our sites, delay or remove hosted content, and take technical and legal steps to keep users off our sites if we believe that they are misusing, abusing, or interfering with the provision of our services, engaging in unlawful conduct, or acting inconsistently with the letter or spirit of our policies. We also reserve the right to cancel unconfirmed accounts or accounts that have been inactive for a long time.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Access and Interference</strong>. The sites contains robot exclusion headers. Much of the information on the sites is updated on a real-time basis and is proprietary or is licensed to LiveAuctioneers by our users or third parties. You agree that you will not use any robot, spider, scraper or other automated means to access the sites for any purpose without our express written permission. Additionally, you agree that you will not: (a) take any action that imposes or may impose (in our sole discretion) an unreasonable or disproportionately large load on our infrastructure; (b) copy, reproduce, modify, create derivative works from, distribute, or publicly display any content (except for your information) from the sites without the prior, express written consent of LiveAuctioneers and the appropriate third party, as applicable; (c) interfere or attempt to interfere with the proper working of our sites or any activities conducted on the sites; or (d) bypass our robot exclusion headers or other measures we may use to prevent or restrict access to the sites.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Privacy</strong>. Any information you provide to us, and your use of information available on our websites, is governed by our&nbsp;<a href=\"https://www.liveauctioneers.com/privacy\">Privacy Policy</a>. Any information you provide to the Auction House or other third parties is governed by their respective privacy policies. We do not sell or rent your personal information to third parties for their marketing purposes without your express consent. We use your information only as described in the LiveAuctioneers Privacy Policy. We consider protection of our users&#39; privacy as a high priority. We store and process your information on computers located in the United States that are protected by physical as well as technological security devices. You can access and modify the information you provide. We use third parties to verify and certify our privacy security methods. For a complete description of how we use and protect your personal information, please review the LiveAuctioneers Privacy Policy. If you object to your information being transferred or used in this way, please do not use our services.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Intellectual Property/Restrictions on Use</strong>. We reserve all rights with respect to the design and content of our websites. In particular, you may not misappropriate the design or content of our sites and you may not alter or deface such design or content in any way. Nothing on our websites grants any license with respect to such design or content. All trademarks, service marks, trade names, logos, graphics, articles and other materials on our sites are protected by United States and foreign copyright, trademark and other applicable laws. In particular, all trademarks, service marks, trade names and logos displayed on our sites are proprietary to LiveAuctioneers , its affiliates, or third-party owners and our websites grant no license thereto. You acknowledge that you have read, and will at all times comply with, LiveAuctioneers&#39;<a href=\"https://www.liveauctioneers.com/intellectualproperty\">Intellectual Property</a>&nbsp;statement.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Indemnity</strong>. You will defend, indemnify and hold LiveAuctioneers, its shareholders, members, partners, officers, directors, employees, agents, parent, subsidiaries, affiliates, joint venturers, and successors and assigns, harmless from, and against, any and all causes of action, suits, claims, demands, judgments, liabilities, losses, damages, awards, penalties, fines, costs and expenses (including, but not limited to, reasonable attorney&#39;s fees), sought by any third party and which results from, or arises out of, your breach of this Agreement, your unlawful actions or conduct, or your violation of the rights of any third party.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>No Agency</strong>. No agency, partnership, joint venture, employee-employer or franchiser-franchisee relationship is intended or created by this Agreement.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>No Warranty</strong>. WE AND OUR SUPPLIERS PROVIDE OUR WEB SITE AND SERVICES &quot;AS IS&quot; AND WITHOUT ANY WARRANTY OR CONDITION, EXPRESS, IMPLIED OR STATUTORY. WITHOUT LIMITING THE FOREGOING, WE DO NOT WARRANT THAT THE SERVICE WILL BE UNINTERRUPTED OR ERROR FREE, OR THAT BIDS WILL BE RECEIVED BY THE AUCTION HOUSE OR INFORMATION REGARDING CURRENT PRICE WILL BE TRANSMITTED IN A TIMELY FASHION. NOR DO WE GUARANTEE THE PERFORMANCE OF ANY OBLIGATIONS BY AN AUCTION HOUSE. WE AND OUR SUPPLIERS SPECIFICALLY DISCLAIM ANY IMPLIED WARRANTIES OF TITLE, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. Some states&#39; laws may not allow a disclaimer of implied warranties in certain circumstances, in which case the foregoing disclaimer may not apply to you. This warranty gives you specific legal rights and you also may have other legal rights which vary from state to state.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Liability Limit</strong>. IN NO EVENT SHALL WE OR OUR SUPPLIERS BE LIABLE FOR LOST PROFITS OR ANY SPECIAL, INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF, OR IN CONNECTION WITH, OUR SITES, OUR SERVICES, THE FAILURE OF ANY BID OR PRICING INFORMATION TO BE TRANSMITTED OR RECEIVED BY YOU OR THE AUCTION HOUSE IN A TIMELY MANNER, THE INTERRUPTION OF ANY DATA TRANSMISSION, AUDIO OR VIDEO BROADCAST, OR THIS AGREEMENT (REGARDLESS OF THE FORM OF ACTION, WHETHER IN CONTRACT, TORT (INCLUDING NEGLIGENCE), STRICT LIABILITY OR OTHERWISE). OUR LIABILITY, AND THE LIABILITY OF OUR SUPPLIERS, TO YOU OR ANY THIRD PARTIES IN ANY CIRCUMSTANCE IS LIMITED TO THE GREATER OF (A) THE AMOUNT OF FEES YOU PAY TO US IN THE 12 MONTHS PRIOR TO THE ACTION GIVING RISE TO LIABILITY, AND (B) $100.00. Some states&#39; laws may not allow a limitation of liability in certain circumstances, in which case the foregoing limitation may not apply to you.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Notices</strong>. Any notice, demand, request or other communication which you may desire or be required to give to LiveAuctioneers hereunder shall be in writing and shall be given by certified mail, return receipt requested (with postage prepaid), or by Federal Express or other similar overnight delivery service (with fees prepaid), to LiveAuctioneers , 220 12th Avenue, 2nd Floor, New York, NY 10001, or at any other address that we may designate in writing in the future. Any notice, demand, request or other communication which we may desire or be required to give to you hereunder shall be in writing and shall be given by email to the email address you provided to LiveAuctioneers during the registration process, or by certified mail, return receipt requested (with postage prepaid), or by Federal Express or other similar overnight delivery service (with fees prepaid), to you at the address you provided to LiveAuctioneers during the registration process. All notices given by e-mail shall be deemed given as of 5:00 P.M. eastern standard time on the business day following the day of transmission. All notices given by mail shall be deemed to have been given three (3) business days after mailing and all notices delivered by overnight delivery service shall be deemed given when delivered.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Force Majeure</strong>. No party shall be liable for any failure or delay in performing any obligation under this Agreement that is due to a Force Majeure event, such as Acts of God (including fire, flood, earthquake, storm, hurricane or other natural disaster), war, invasion, act of foreign enemies, hostilities (regardless of whether war is declared), civil war, rebellion, revolution, insurrection, military or usurped power or confiscation, terrorist activities, nationalization, government sanction, blockage, embargo, labor dispute, strike, lockout or interruption or failure of electricity or telephone service). If a Force Majeure event occurs, the affected party will notify the other party and make commercially reasonable efforts to mitigate the adverse effects of the Force Majeure event on the performance of this Agreement. However, this provision does not excuse your obligation to pay for services actually received.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Arbitration</strong>. If a dispute, controversy, claim or cause of action arises out of, or in connection with, this Agreement or any breach or alleged breach thereof (the &quot;Dispute&quot;), and if the Dispute cannot be settled through direct discussions, we mutually agree to endeavor first to settle the Dispute by mediation administered by the American Arbitration Association under its Commercial Mediation Procedures then in effect (or under any other form of mediation mutually acceptable to the parties involved) before resorting to arbitration. Any unresolved controversy or claim relating to the Dispute shall be settled by arbitration administered by the American Arbitration Association in accordance with its Commercial Arbitration Rules then in effect (or under any other form of arbitration mutually acceptable to the parties involved), and judgment on the award rendered by the arbitrator may be entered in any court having jurisdiction thereof. If all parties to the Dispute agree, a mediator involved in the parties&#39; mediation may be asked to serve as the arbitrator. The mediation and arbitration, if any, shall take place in the City, State, and County of New York (unless another location is mutually agreed to by the parties involved). Any award rendered shall be final and conclusive upon the parties. The costs and expenses of the mediation and arbitration shall be borne equally by the parties, provided, however, that the arbitrator shall award to the prevailing party, if any, the reasonable costs and attorneys&#39; fees incurred by the prevailing party in connection with the mediation and arbitration. If the arbitrator determines that a party was the prevailing party on some but not all of the claims and counterclaims, the arbitrator may award the prevailing party an appropriate percentage of the reasonable costs and attorneys&#39; fees incurred by the prevailing party in connection with the mediation and arbitration. In the event this mediation/arbitration provision is found to be completely unenforceable or inapplicable for any reason, then any dispute, controversy, claim or cause of action arising out of, or in connection with, this Agreement or any breach or alleged breach thereof, shall be brought in the state or federal courts in the City, State, and County of New York, and you irrevocably consent and submit to the jurisdiction of such courts for the purpose of litigating any such action and waive trial by jury. The prevailing party in such action shall be entitled to recover its reasonable costs and attorneys&#39; fees incurred in connection therewith, and if it is determined that a party was the prevailing party on some but not all of the claims and counterclaims, such party may be awarded an appropriate percentage of the reasonable costs and attorneys&#39; fees it incurred in connection therewith.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>General</strong>. (a) This Agreement constitutes and sets forth the entire agreement and understanding of the parties pertaining to the subject matter hereof, and supersedes all prior or contemporaneous written or oral agreements, understandings, undertakings, negotiations, promises, discussions, warranties or covenants that are not specifically contained herein; (b) The headings, sections, or titles of the various paragraphs of this Agreement are inserted merely for the purpose of convenience and do not expressly or by implication or intention, limit, define, extend or affect the meaning or interpretation of this Agreement or the specific terms or text of the section so designated. All personal pronouns used in this Agreement shall include the other genders, whether used in the masculine, feminine or neuter gender, and the singular shall include the plural and vice versa, whenever, and as often as may be, appropriate; (c) This Agreement shall be governed in all respects, whether as to validity, construction, interpretation, capacity, performance or otherwise, by the laws of the State of New York, without regard to principles of conflicts of laws; (d) If any provision of this Agreement is found invalid or unenforceable by a court of competent jurisdiction, then such provision shall be deemed stricken herefrom and the remainder of this Agreement shall remain at all times in full force and effect. Such invalid or enforceable provision shall, to the extent legally permitted, be replaced by a valid and enforceable provision that comes closest to the parties&#39; intent underlying the invalid or unenforceable provision; (e) It is understood that any accrued but unpaid financial obligations, and any other terms related to such financial obligations, shall survive the expiration or termination of this Agreement; (f) No waiver of any breach, privilege or provision of this Agreement will be construed as a waiver of any rights or remedies arising from any other or future breach, privilege or provision; (g) We may, in our sole discretion, assign or otherwise transfer this Agreement to a third party.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Future Terms</strong>. LiveAuctioneers may amend, modify, add or remove any of these terms and conditions at any time, and from time to time. If we do so, we will post such changes on this page. IF ANY FUTURE CHANGES TO THESE TERMS AND CONDITIONS ARE UNACCEPTABLE TO YOU, YOU SHOULD DISCONTINUE USING THE SERVICES. YOUR CONTINUED USE OF THE SERVICES NOW, OR FOLLOWING THE POSTING OF NOTICE OF ANY SUCH CHANGES, WILL INDICATE YOUR ACCEPTANCE OF THESE TERMS AND CONDITIONS, AND OF ANY SUCH CHANGES.</p>\r\n	</li>\r\n</ol>\r\n', NULL, NULL, 'Active', '2018-02-02 00:41:13', '2018-02-21 04:11:26'),
(3, 'Privacy Policy', 'privacy-policy', '<p><strong>Our Commitment To Privacy</strong></p>\r\n\r\n<p>LiveAuctioneers is committed to maintaining user privacy on the Live Auctioneers&#39; website at www.liveauctioneers.com (the &quot;Site&quot;). Our Private Policy governs use of personal information provided to us through the use of the Site. By accessing the Site you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree to its terms and conditions, you should not use or access our Site. By accepting the Privacy Policy, you expressly consent to our use and disclosure of your personal information in accordance with the policy. The Privacy Policy is incorporated into and subject to the terms of any agreement you sign with LiveAuctioneers and becomes applicable upon our acceptance of you as a registered user. If you have any additional questions about our Privacy Policy, please feel free to contact us at&nbsp;<a href=\"mailto:info@liveauctioneers.com\">info@a</a>uction.com</p>\r\n\r\n<p><strong>Use of Our Site by Children</strong></p>\r\n\r\n<p>Children (persons under the age of 18) are not eligible to use the Site unsupervised and we ask that children do not submit any personal information. If you are under the age of 18, you may only use this Site in conjunction with and under the supervision of parents or guardians.</p>\r\n\r\n<p>Information We Collect</p>\r\n\r\n<p>If you choose to use our services, we may require that you provide contact and identity information, billing information, shipping information, as well as other personal information as indicated on the forms throughout the Site. Where possible, we indicate fields that are required and those that are optional. You are not required to provide information if you choose not to use a particular service or feature. Please be advised that we may use your financial information, including credit card information, to verify the accuracy of your name, address, and other personal information, as well as to bill you for use of our services. Certain information is automatically tracked based on your activity on the Site. We use this information for internal research on user demographics, interests, and behavior so as to better understand, protect and serve you and our community. This information may include the URL that you previously visited (whether this URL is on the Site or not), the subsequent URL you visited (whether this URL is on the Site or not), your computer browser information, and your IP address. We may collect browser and Internet-related information through access to our Site, via cookies, and/or web beacons. If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence regarding your activities or postings on the Site, we may accumulate such information into a file specific to you.</p>\r\n\r\n<p><strong>Our Use of Your Information</strong></p>\r\n\r\n<p>We use your personal information to facilitate the services you personally request. Your contact information and bidding history will be passed onto the Auction Companies during the auction sign-up process for them to make a decision whether you are able to bid in their auction. We also use your personal file information and activity information to: resolve disputes; troubleshoot problems; collect fees owed; measure consumer interest in our products and services; inform you about online and offline offers, products, services, and updates; customize your experience; detect and protect us against error, fraud and other criminal activity; enforce applicable agreements; and as otherwise described to you at the time of collection. Providing us with your personal information indicates that you agree to our use of any personal information to improve our marketing and promotional efforts, to analyze Site usage, improve our content and product offerings, and customize the Site&#39;s content, layout, and services. In turn, we are able to improve the Site and better tailor it to meet your needs, providing you with a smooth, efficient, safe and customized experience. We also reserve the right to use your information to make contact and deliver information that, in some cases, is targeted to your interests. Examples include targeted banner advertisements, administrative notices, product offerings, and communication relevant to your use of the Site. By accepting this Privacy Policy, you expressly agree to receive this information, however, you may contact us at&nbsp;<a href=\"mailto:info@liveauctioneers.com\">info@liveauctioneers.com</a>&nbsp;should you wish to cease receipt of such information.</p>\r\n\r\n<p><strong>Our Disclosure of Your Information</strong></p>\r\n\r\n<p>While we use your information to provide you with access to our site and services, we also use your information to contact you regarding our services, offerings, or information you may have requested. We use your information to improve and personalize our Site so as to make it easier, safer, and quicker to use. Due to the existing regulatory environment, we cannot ensure that all of your private communication and other personal information will never be disclosed in ways not otherwise described in this Privacy Policy. By way of example (without limiting the foregoing), we may be forced under certain circumstances to disclose personal information to the government or third parties, unaffiliated parties may unlawfully intercept or access transmissions or private communication, or users may abuse or misuse your personal information collected from the Site. Therefore, although we use industry standard practices to protect your privacy, we do not promise, and you should not expect, that your personal information or private communication will always remain completely private.</p>\r\n\r\n<p><strong>Security</strong></p>\r\n\r\n<p>We store your information in the United States. In order to prevent unauthorized access, maintain data accuracy, and ensure appropriate use of information, we use industry-leading technical and administrative practices and procedures that safeguard and secure your information.</p>\r\n\r\n<p><strong>Notice</strong></p>\r\n\r\n<p>We may occasionally choose to amend this Privacy Policy to better reflect our use and protection of your information. In the event of revision, all terms shall become effective within 15 days of initial posting to the Site.</p>\r\n', NULL, NULL, 'Active', '2018-02-02 00:41:13', '2018-02-21 04:24:45'),
(4, 'Copyright Usage', 'copyright-usage', '<p>All content, images, and intellectual property on this site protected by digital watermark technology. Digital copying of images strictly prohibited; violators will be pursued and prosecuted to the full extent of the law including the Digital Millennium Copyright Act.</p>\r\n\r\n<p>Unauthorized use including account sharing of Invaluable will result in permanent account cancellation.</p>\r\n\r\n<p>Copyright &copy; 1986-2018 Invaluable, LLC and participating auction houses. All Rights Reserved.</p>\r\n', NULL, NULL, 'Active', '2018-02-02 00:41:14', '2018-02-21 00:41:22'),
(5, 'How to Bid', 'how-to-bid', '<h2>4 Easy Steps to Start Bidding</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"How to Bid\" src=\"https://image.slidesharecdn.com/iweekpresentation-12578779174423-phpapp01/95/spectrum-auction-recommendations-for-icasa-in-south-africa-26-728.jpg?cb=1257856834\" style=\"height:546px; width:728px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Become a Member</strong></p>\r\n\r\n<p>Join the community with the largest collection of storied objects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Browse</strong></p>\r\n\r\n<p>Discover new treasures with our robust search feature or explore by category.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bid Anytime</strong></p>\r\n\r\n<p>Enter an amount and place bids online anytime before an auction begins.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Pay Only If You Win</strong></p>\r\n\r\n<p>Complete your transaction only after you bid and win. Items are then delivered to your door.</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL, 'Active', '2018-02-20 22:58:29', '2018-02-21 00:24:42'),
(6, 'How Auctions Work', 'how-auctions-work', '<h1>How to Buy at Auction</h1>\r\n\r\n<p>Bidding on LiveAuctioneers is easy - and you can do it from any internet connect device, anywhere!</p>\r\n\r\n<p><img alt=\"Register for Free\" src=\"https://s3.amazonaws.com/static2.liveauctioneers.com/dist/images/step1.png?auto=webp\" style=\"height:200px; width:200px\" /></p>\r\n\r\n<p><strong>Register For Free</strong></p>\r\n\r\n<p>Join the community with the largest collection of storied items.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Place Your Bids\" src=\"https://s3.amazonaws.com/static2.liveauctioneers.com/dist/images/step2.png?auto=webp\" style=\"height:199px; width:200px\" /></p>\r\n\r\n<p><strong>Place Your Bids</strong></p>\r\n\r\n<p>Many items start at just $1. Place bids and get approved.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Ensure You Win\" src=\"https://s3.amazonaws.com/static2.liveauctioneers.com/dist/images/step3.png?auto=webp\" style=\"height:200px; width:200px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ensure You Win</strong></p>\r\n\r\n<p>Watch the live auction to ensure you win. See all the action.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Pay If You Win\" src=\"https://s3.amazonaws.com/static2.liveauctioneers.com/dist/images/step6.png?auto=webp\" style=\"height:202px; width:200px\" /></p>\r\n\r\n<p><strong>Pay If You Win</strong></p>\r\n\r\n<p>Only if you win will you be asked to pay and arrange shipping.</p>\r\n', NULL, NULL, 'Active', '2018-02-20 23:01:20', '2018-02-21 00:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `shortcode` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `shortcode`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', 'afghanistan-e59475b4f6b9d733a1695ffa948a3f7d29e76780-264', '2018-02-02 00:41:14', '2018-02-02 07:05:33'),
(2, 'AL', 'Albania', 'albania-14510eeebc79b891a76427a16996ddafaae8132a-264', '2018-02-02 00:41:14', '2018-02-02 07:05:33'),
(3, 'DZ', 'Algeria', 'algeria-bde60c5f37b4933ad99990a73e6be89814bb9345-264', '2018-02-02 00:41:14', '2018-02-02 07:05:33'),
(4, 'AS', 'American Samoa', 'american-samoa-d13cd3b43626da45ca7b4c4f3d907229e79bcad3-264', '2018-02-02 00:41:14', '2018-02-02 07:05:33'),
(5, 'AD', 'Andorra', 'andorra-71b141bb9c8f69c22ca1fafa2b6eef498aed2035-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(6, 'AO', 'Angola', 'angola-45a0e9b195c074e8e1c448ac479a75e1bcfdf3be-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(7, 'AI', 'Anguilla', 'anguilla-c6a9900eb6f217953337be1b097b3f1ea570f878-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(8, 'AQ', 'Antarctica', 'antarctica-493f77ee5330a98e6fdf7a847207abfc7d1a6f21-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(9, 'AG', 'Antigua and Barbuda', 'antigua-and-barbuda-20f667ebd687734621f58d35fbb1e51f941321e2-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(10, 'AR', 'Argentina', 'argentina-ce5e958de901f6bfc215f9da03050723d193b7f1-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(11, 'AM', 'Armenia', 'armenia-a4a14ba0580a7909792b69578a70eb0a1b835219-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(12, 'AW', 'Aruba', 'aruba-7b23ce8f52ce2b1cdddbd3db55577de443334da1-264', '2018-02-02 00:41:14', '2018-02-02 07:05:34'),
(13, 'AU', 'Australia', 'australia-66f44d348bfcb45579fc17bcbce5f5005f155558-264', '2018-02-02 00:41:14', '2018-02-02 07:05:35'),
(14, 'AT', 'Austria', 'austria-63992018ad18aa6682033bc0b85fa32de69fd28d-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(15, 'AZ', 'Azerbaijan', 'azerbaijan-21f676206c650f8b9305c327d3a97a41c723ddbd-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(16, 'BS', 'Bahamas', 'bahamas-f2f5d2304da2b718066d2657d263740db6e9116f-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(17, 'BH', 'Bahrain', 'bahrain-41431b5f9546b2898b0456504c5b4f7a89c9af77-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(18, 'BD', 'Bangladesh', 'bangladesh-0cc62e9cc52e30ff3ef2c44856b7f636aff0d57c-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(19, 'BB', 'Barbados', 'barbados-c0ffe7015d4322e2e09cf241752e84fb3021b8d8-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(20, 'BY', 'Belarus', 'belarus-02ca58f2a0b466811d3f31575e58071c8e13d77b-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(21, 'BE', 'Belgium', 'belgium-5c8e4565844c622c549a7edf0b2725ed390737c9-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(22, 'BZ', 'Belize', 'belize-f14489a40c657882f9ef5be39b1768bd2930b234-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(23, 'BJ', 'Benin', 'benin-19e7c32b48fe89138a3b17d274b645d971cbb7e9-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(24, 'BM', 'Bermuda', 'bermuda-77111c479b1368c803d24256ecc5858ec8ace57d-264', '2018-02-02 00:41:15', '2018-02-02 07:05:35'),
(25, 'BT', 'Bhutan', 'bhutan-999948a86cee736fc238e5a9c13be89825d2dd1a-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(26, 'BO', 'Bolivia', 'bolivia-a859963f95553be61609fc1cdd344ed2dcc71913-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(27, 'BA', 'Bosnia and Herzegovina', 'bosnia-and-herzegovina-9777245382de44250004bd1de83ec972a2e42059-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(28, 'BW', 'Botswana', 'botswana-28154f499c8892cc7f745472e44fe0ecfa5557e6-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(29, 'BV', 'Bouvet Island', 'bouvet-island-0d9129ac17c8c05ad096b6250264e4da7e4f0eb4-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(30, 'BR', 'Brazil', 'brazil-83a2f04f781d25f8bc19af6c8754f8fb0e08b231-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(31, 'BQ', 'British Antarctic Territory', 'british-antarctic-territory-4caa78632b54389d3f0a9536a1f1cf0377369925-264', '2018-02-02 00:41:15', '2018-02-02 07:05:36'),
(32, 'IO', 'British Indian Ocean Territory', 'british-indian-ocean-territory-0d2f22b5430883115e4b38af1fe143b8909fc789-264', '2018-02-02 00:41:16', '2018-02-02 07:05:36'),
(33, 'VG', 'British Virgin Islands', 'british-virgin-islands-4bd3015644261b63f5b1189c3eabd32d29b1fd13-264', '2018-02-02 00:41:16', '2018-02-02 07:05:36'),
(34, 'BN', 'Brunei', 'brunei-d24ecabf41afa3fee97655483f6428abec628e03-264', '2018-02-02 00:41:16', '2018-02-02 07:05:36'),
(35, 'BG', 'Bulgaria', 'bulgaria-826565e0881a2e7cbc2733c71fc0b5418cacda02-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(36, 'BF', 'Burkina Faso', 'burkina-faso-bbb0fd53465ba118a700b6234b4db9f1c31ab494-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(37, 'BI', 'Burundi', 'burundi-21d922d6fe2c6c8afd8150afff6e0d74a379da62-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(38, 'KH', 'Cambodia', 'cambodia-7ab1443b7527c253fad534acb1aa8209fc7df141-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(39, 'CM', 'Cameroon', 'cameroon-0ae1e2fcf934808d2e2ecf7d5e82325e3182f7c3-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(40, 'CA', 'Canada', 'canada-d05a13e60230e0b4c63a4cea452addce0afa5bce-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(41, 'CT', 'Canton and Enderbury Islands', 'canton-and-enderbury-islands-1bc69a5a5832d97db9c559d6f97e8e1577245d50-264', '2018-02-02 00:41:16', '2018-02-02 07:05:37'),
(42, 'CV', 'Cape Verde', 'cape-verde-161893716cffc8bab02236336655ea8739b20ebc-264', '2018-02-02 00:41:17', '2018-02-02 07:05:37'),
(43, 'KY', 'Cayman Islands', 'cayman-islands-7a251314dd4fa27221e6cc5c242907707b2a4c0c-264', '2018-02-02 00:41:17', '2018-02-02 07:05:37'),
(44, 'CF', 'Central African Republic', 'central-african-republic-7718bf6247ffb656ab11a1ba03d28acad1138570-264', '2018-02-02 00:41:17', '2018-02-02 07:05:37'),
(45, 'TD', 'Chad', 'chad-fe1c06f786845259462789c6e24ef8949b99ff23-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(46, 'CL', 'Chile', 'chile-a377af353aced4c4d89cc2272ba13472a03ae4fd-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(47, 'CN', 'China', 'china-a595559f32ccabf13208bf60bfc484ae986ba467-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(48, 'CX', 'Christmas Island', 'christmas-island-f4d3bda2c0e312d3ddd4d76171c3b6358c160a75-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(49, 'CC', 'Cocos [Keeling] Islands', 'cocos-keeling-islands-c1cde2fd15a8404428766b583985ece628633957-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(50, 'CO', 'Colombia', 'colombia-946dabc2b08b033a79be1e6dbd22e81a95ec6f9d-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(51, 'KM', 'Comoros', 'comoros-c5ccfe1d1b0feeff73a3fc04a3fc9b8e9379dcce-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(52, 'CG', 'Congo - Brazzaville', 'congo-brazzaville-bee439981e4876ac47a8210b85bbf154d77394ce-264', '2018-02-02 00:41:17', '2018-02-02 07:05:38'),
(53, 'CD', 'Congo - Kinshasa', 'congo-kinshasa-ce7f5e283b6ec99436b5048739cebd93f59d0f75-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(54, 'CK', 'Cook Islands', 'cook-islands-136f2aa8aa100fd4657c8869a06efac97d71c8e6-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(55, 'CR', 'Costa Rica', 'costa-rica-66d8290af337d1e4a79cec0b94a270790cc50572-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(56, 'HR', 'Croatia', 'croatia-08e391c78372c9be2152f9368b27fb406615a63d-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(57, 'CU', 'Cuba', 'cuba-5772086e5e112b7f571d008fb004409949fa2565-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(58, 'CY', 'Cyprus', 'cyprus-94fb245b29455933690e58d2bd2d822c23516b36-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(59, 'CZ', 'Czech Republic', 'czech-republic-4d86d009b9271c1a904dfcee25afdba352e2f610-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(60, 'CI', 'Côte d’Ivoire', 'cote-divoire-a3cae239f99cfbe7e1747fb56c89ef2ad4da1f8f-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(61, 'DK', 'Denmark', 'denmark-eb537b4a6359f85630994b6e8b5671796d36afb0-264', '2018-02-02 00:41:17', '2018-02-02 07:05:39'),
(62, 'DJ', 'Djibouti', 'djibouti-36a4382d4e32d78ba61c3cd2f7185829e6e3c036-264', '2018-02-02 00:41:18', '2018-02-02 07:05:39'),
(63, 'DM', 'Dominica', 'dominica-9768537745996c73c75d95f171c8aeb7b7fc55dd-264', '2018-02-02 00:41:18', '2018-02-02 07:05:39'),
(64, 'DO', 'Dominican Republic', 'dominican-republic-8e60a90f79e9b91e244bdb1f4958b094b34ac439-264', '2018-02-02 00:41:18', '2018-02-02 07:05:39'),
(65, 'NQ', 'Dronning Maud Land', 'dronning-maud-land-f60640674b112264fcbf0f9996eb2ce0d0349924-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(66, 'DD', 'East Germany', 'east-germany-e216beec1fb3de6247e7623b17fdb0d7f9d591e5-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(67, 'EC', 'Ecuador', 'ecuador-05a606a186544d1b0eb1a2b54b8497549c92aaed-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(68, 'EG', 'Egypt', 'egypt-7569068ebf7af18544068b0609ca03d2b7f5d7c7-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(69, 'SV', 'El Salvador', 'el-salvador-c43d66fe522d45fffaeca5a4905d093ac168d8f8-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(70, 'GQ', 'Equatorial Guinea', 'equatorial-guinea-584739a0419d5c1077feaf3c9431c061992058c8-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(71, 'ER', 'Eritrea', 'eritrea-75bd7686ae470ed5c7c2819b8cdfd3b52c7bd2fe-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(72, 'EE', 'Estonia', 'estonia-276879764f3fb9b042f4bb39f29cd8a229e9057e-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(73, 'ET', 'Ethiopia', 'ethiopia-90afd7b4e3291916fdd901521127a8d4629890a1-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(74, 'FK', 'Falkland Islands', 'falkland-islands-d65cf9d4e20ee2267e39afe48c5172047624d892-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(75, 'FO', 'Faroe Islands', 'faroe-islands-f2b8e2551c2d0ebcd489fb5a8c7c6131037bf04d-264', '2018-02-02 00:41:18', '2018-02-02 07:05:40'),
(76, 'FJ', 'Fiji', 'fiji-2b0935a413b645c394095bc7c0fb460be6a8bf53-264', '2018-02-02 00:41:18', '2018-02-02 07:05:41'),
(77, 'FI', 'Finland', 'finland-765e9729e2dd27b2c6a7d66878571a11f03c3cf7-264', '2018-02-02 00:41:18', '2018-02-02 07:05:41'),
(78, 'FR', 'France', 'france-3efcd079d1988f09e3a1b0289c330a22e31f4055-264', '2018-02-02 00:41:18', '2018-02-02 07:05:41'),
(79, 'GF', 'French Guiana', 'french-guiana-7e11935eb079d7cc618d8c811fe1638fc057ecb9-264', '2018-02-02 00:41:18', '2018-02-02 07:05:41'),
(80, 'PF', 'French Polynesia', 'french-polynesia-62feb1a989d817d020f274b60f25f3d660adac1f-264', '2018-02-02 00:41:18', '2018-02-02 07:05:41'),
(81, 'TF', 'French Southern Territories', 'french-southern-territories-932228fefc2e35c9d247e7ef41b1d6812956929f-264', '2018-02-02 00:41:18', '2018-02-02 07:05:41'),
(82, 'FQ', 'French Southern and Antarctic Territories', 'french-southern-and-antarctic-territories-3c19b1fca1ae71696416c4e4bc307314ea269150-264', '2018-02-02 00:41:19', '2018-02-02 07:05:41'),
(83, 'GA', 'Gabon', 'gabon-95eab722618233249ab89c5f53d04a3a9f9f1eec-264', '2018-02-02 00:41:19', '2018-02-02 07:05:41'),
(84, 'GM', 'Gambia', 'gambia-a90a1ff6339243f49e63602cf4f73cc023cc251d-264', '2018-02-02 00:41:19', '2018-02-02 07:05:41'),
(85, 'GE', 'Georgia', 'georgia-aaf491beb7f8791fd7a7ef1bf2f9e0bcc887bbf5-264', '2018-02-02 00:41:19', '2018-02-02 07:05:41'),
(86, 'DE', 'Germany', 'germany-39306f2bfc73965c035e8d3d1ac8d4cbfb48b1f5-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(87, 'GH', 'Ghana', 'ghana-3755c6bc8c63468720c5f6c9b72e3d3f81abf933-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(88, 'GI', 'Gibraltar', 'gibraltar-a6ed6dd7e28f04d415458d78d4290baf1f95856e-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(89, 'GR', 'Greece', 'greece-22ad9adf29d289ba7acd373d336f6122d57c83a4-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(90, 'GL', 'Greenland', 'greenland-d23f6bd80c819d065f24564bd8360b2e5cf5356b-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(91, 'GD', 'Grenada', 'grenada-c3918cd34f1edcd44882e9c4d5ab3411894164d8-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(92, 'GP', 'Guadeloupe', 'guadeloupe-3adff269c2b19af6e57fa36a091989e8ba4fa088-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(93, 'GU', 'Guam', 'guam-6865a54ceb0b82db9a789b86b327634f7b8ee931-264', '2018-02-02 00:41:19', '2018-02-02 07:05:42'),
(94, 'GT', 'Guatemala', 'guatemala-87486f61893668fd81c7024006887b4e9326b556-264', '2018-02-02 00:41:19', '2018-02-02 07:05:43'),
(95, 'GG', 'Guernsey', 'guernsey-9e51bd201363ed2e4523830304df60cd515e7834-264', '2018-02-02 00:41:19', '2018-02-02 07:05:43'),
(96, 'GN', 'Guinea', 'guinea-e760c62a5f56088d48f715f7483c564263866884-264', '2018-02-02 00:41:19', '2018-02-02 07:05:43'),
(97, 'GW', 'Guinea-Bissau', 'guinea-bissau-9aa555ef6fd8c239f2500f30b717db011ec666b8-264', '2018-02-02 00:41:19', '2018-02-02 07:05:43'),
(98, 'GY', 'Guyana', 'guyana-7435f367fb5b166ea855ae729c5eed1595f61161-264', '2018-02-02 00:41:20', '2018-02-02 07:05:43'),
(99, 'HT', 'Haiti', 'haiti-8420944877131518731758ce67589e2a19d03357-264', '2018-02-02 00:41:20', '2018-02-02 07:05:43'),
(100, 'HM', 'Heard Island and McDonald Islands', 'heard-island-and-mcdonald-islands-83a8e7877aec89fdd32c635727efceccaed35147-264', '2018-02-02 00:41:20', '2018-02-02 07:05:43'),
(101, 'HN', 'Honduras', 'honduras-317d0fc7b629ce6eeadc504a21455c3bc3ba4d1c-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(102, 'HK', 'Hong Kong SAR China', 'hong-kong-sar-china-ab6b75c6acdefc36d1b9c9599156e0781d047b5e-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(103, 'HU', 'Hungary', 'hungary-83c1cd43eb252ac80892994cb3422a3c71b1337b-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(104, 'IS', 'Iceland', 'iceland-155c35650b78919ea3514722937ced4cb80e5b7a-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(105, 'IN', 'India', 'india-110148928ce4d619a78b0f7655695a4327a243cd-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(106, 'ID', 'Indonesia', 'indonesia-cd88bf958821aa89a06b4e63260d31f5780e8120-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(107, 'IR', 'Iran', 'iran-277ce0740144835c81e7b63066e6bb3471974810-264', '2018-02-02 00:41:20', '2018-02-02 07:05:44'),
(108, 'IQ', 'Iraq', 'iraq-ea2c3620f089bc9648fcea6703041ca5740589ca-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(109, 'IE', 'Ireland', 'ireland-9d876fd0855e49e9b7755d13060438f8c2bcab35-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(110, 'IM', 'Isle of Man', 'isle-of-man-cbf2a88b889d7be947d91e20c87c3f03a96ffed2-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(111, 'IL', 'Israel', 'israel-5a4d319c19a6de47ee76add950e5531f8a3adfc5-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(112, 'IT', 'Italy', 'italy-9f1ff96e5a750050915449267313fb025796358b-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(113, 'JM', 'Jamaica', 'jamaica-bfdb443cdac8f8fc059e0aa1da3b2d81d4e4b610-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(114, 'JP', 'Japan', 'japan-e966ecbd41d1f25ef1e164e3987cfcc7e12f5ead-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(115, 'JE', 'Jersey', 'jersey-9ee2f613f2b988102a7b35afbe22e3fffdfff824-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(116, 'JT', 'Johnston Island', 'johnston-island-15e2509ce2fcf7ffc96ca82bc41f90b0e539100e-264', '2018-02-02 00:41:21', '2018-02-02 07:05:45'),
(117, 'JO', 'Jordan', 'jordan-f218403f2986be3020c6051fafe79cf475d12d84-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(118, 'KZ', 'Kazakhstan', 'kazakhstan-3350230322efa771fa6259d6d0005fe6f3905997-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(119, 'KE', 'Kenya', 'kenya-bf1ab96ff89e7857be540bd5a76c9700034ba5f0-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(120, 'KI', 'Kiribati', 'kiribati-03c57fc824665656c22816d8bfe09c45a65fb131-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(121, 'KW', 'Kuwait', 'kuwait-225f5c8515540133b628c06cf49b1327ab4ce888-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(122, 'KG', 'Kyrgyzstan', 'kyrgyzstan-8bde1fe24f188c1b6143c8bb2b3f5db0cdd1880e-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(123, 'LA', 'Laos', 'laos-58117715f88b18008b75bcf94b6855cceeefd108-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(124, 'LV', 'Latvia', 'latvia-ff4aa866d41dbbceb593b27bfdbb6a6239e1b321-264', '2018-02-02 00:41:21', '2018-02-02 07:05:46'),
(125, 'LB', 'Lebanon', 'lebanon-bfd01684d27209da06408b703da5543d949ac639-264', '2018-02-02 00:41:22', '2018-02-02 07:05:46'),
(126, 'LS', 'Lesotho', 'lesotho-d945f1336f8abb2fe289783a993996db262b34d7-264', '2018-02-02 00:41:22', '2018-02-02 07:05:46'),
(127, 'LR', 'Liberia', 'liberia-147113e5280945af34b264c6668e894815ae8876-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(128, 'LY', 'Libya', 'libya-388471cb70ab0cc49f16bfd85f4ae70e0fe31c0a-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(129, 'LI', 'Liechtenstein', 'liechtenstein-f9cde4e2b97ffafbe4e9d847e6dca6c1acdd4ce6-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(130, 'LT', 'Lithuania', 'lithuania-fb05410835df0b119f2582a71b9c515170c11250-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(131, 'LU', 'Luxembourg', 'luxembourg-75238eac3e1144a3ed864d6509636cc1be449dc1-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(132, 'MO', 'Macau SAR China', 'macau-sar-china-0864e3673b6ef29a7d3467133f14346bfa85e68b-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(133, 'MK', 'Macedonia', 'macedonia-1d6af65bb70ccaf33ab75eb6b3e61dc4e7bd3965-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(134, 'MG', 'Madagascar', 'madagascar-047fa9e972723b02bd33f528c2aafc11d221052b-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(135, 'MW', 'Malawi', 'malawi-b45607c5b4a34ca36d11dd0416400f2e5dad5f5d-264', '2018-02-02 00:41:22', '2018-02-02 07:05:47'),
(136, 'MY', 'Malaysia', 'malaysia-a9f74821fef6a871612376cc94c548f7eccf878d-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(137, 'MV', 'Maldives', 'maldives-8d191354a709258f2c5f201374a5da419429e7c0-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(138, 'ML', 'Mali', 'mali-98ff5fa94fb874412b522050fc1f7bf9d4fd8fd0-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(139, 'MT', 'Malta', 'malta-5742ca38b68156d6e876cd312bb0d743ed7a014f-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(140, 'MH', 'Marshall Islands', 'marshall-islands-0d3526bbff01463a04c111054548a07c3b584aa4-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(141, 'MQ', 'Martinique', 'martinique-5902fa2fbf53349fc3d1669aec7e4cdebd825548-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(142, 'MR', 'Mauritania', 'mauritania-b259f6f40f0a75e791846caa7f502783e5bed03a-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(143, 'MU', 'Mauritius', 'mauritius-d4d33f1f15a5763495e92faaa2503be8c9cf8db4-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(144, 'YT', 'Mayotte', 'mayotte-06877b2575ab8ec1547b4202f1d36f27e30ec889-264', '2018-02-02 00:41:22', '2018-02-02 07:05:48'),
(145, 'FX', 'Metropolitan France', 'metropolitan-france-8239b3f46ca386ec54a5debfa78bb7925fbf6140-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(146, 'MX', 'Mexico', 'mexico-a3f2a9cce450d77b8229e2664734c233f3fbb844-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(147, 'FM', 'Micronesia', 'micronesia-e3de551cd2aedd3bbf0cfad41ab882b92b8e0e1e-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(148, 'MI', 'Midway Islands', 'midway-islands-78e65a8806daf71e03db841510fa1bbea60f2417-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(149, 'MD', 'Moldova', 'moldova-5600eea779baa74a3c204c13bd08fee4814535af-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(150, 'MC', 'Monaco', 'monaco-c00c1594072972a6338047e818389f4ca9ed3593-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(151, 'MN', 'Mongolia', 'mongolia-da1d47e348a2cd7511b0a3be1fc32443dd59628b-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(152, 'ME', 'Montenegro', 'montenegro-6df35b8c564f12d45e6ecbafbf6a54f4379e84c0-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(153, 'MS', 'Montserrat', 'montserrat-8bef2d825d2bf11acfc84a08a3b16b80fab571df-264', '2018-02-02 00:41:23', '2018-02-02 07:05:49'),
(154, 'MA', 'Morocco', 'morocco-d7fd471e2ccda8e0bd820988469cf35101170cc5-264', '2018-02-02 00:41:23', '2018-02-02 07:05:50'),
(155, 'MZ', 'Mozambique', 'mozambique-b8696718a19e6c795846d041269a4cccf89589eb-264', '2018-02-02 00:41:23', '2018-02-02 07:05:50'),
(156, 'MM', 'Myanmar [Burma]', 'myanmar-burma-0307afb2ff6b970d1d370e44c16a205c52a5ba6a-264', '2018-02-02 00:41:23', '2018-02-02 07:05:50'),
(157, 'NA', 'Namibia', 'namibia-7c65571d46a032e309d747ab53c7358249c11da4-264', '2018-02-02 00:41:23', '2018-02-02 07:05:50'),
(158, 'NR', 'Nauru', 'nauru-d69de852f2f15414cceeccbb47b58e6093e83d63-264', '2018-02-02 00:41:23', '2018-02-02 07:05:50'),
(159, 'NP', 'Nepal', 'nepal-68fdb03a8fc05505081ed2583d99c3d4228d5369-264', '2018-02-02 00:41:23', '2018-02-02 07:05:50'),
(160, 'NL', 'Netherlands', 'netherlands-b8a21efd60aeceae1a2c95a200c0b4efc5ea9225-264', '2018-02-02 00:41:24', '2018-02-02 07:05:50'),
(161, 'AN', 'Netherlands Antilles', 'netherlands-antilles-8b7dee5f423f34ece6bf3039e12d7dc49bd3a834-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(162, 'NT', 'Neutral Zone', 'neutral-zone-4f0782314c8dee7bdcbd6d6bac1e04017d234a18-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(163, 'NC', 'New Caledonia', 'new-caledonia-347b6c5a8ebf88f3257d43411ca460b71613ea38-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(164, 'NZ', 'New Zealand', 'new-zealand-3f2542c92b4394811a273b90999c369d0cd5e8db-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(165, 'NI', 'Nicaragua', 'nicaragua-0d24be81384d9efbbb82c09ab30da5046935a30f-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(166, 'NE', 'Niger', 'niger-dbf79a59a9bf53b6c8387743039e2624286b1329-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(167, 'NG', 'Nigeria', 'nigeria-c8635f9067c2bd77ae6f9756b8df2dbb5a27a8e7-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(168, 'NU', 'Niue', 'niue-f1afe3842f93232343672f4cac3d523b58e3b6fe-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(169, 'NF', 'Norfolk Island', 'norfolk-island-9f1de5f3735b9ce9325d6ceecfbeb68c3ddd12b5-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(170, 'KP', 'North Korea', 'north-korea-6d6927af20876e599d5f9834ddd6959b2352150a-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(171, 'VD', 'North Vietnam', 'north-vietnam-6bb0d97f15b309e05fbdeeff8917a4956afc8020-264', '2018-02-02 00:41:24', '2018-02-02 07:05:51'),
(172, 'MP', 'Northern Mariana Islands', 'northern-mariana-islands-bbe01d65346ed035e2450776bb3a36079fa55662-264', '2018-02-02 00:41:24', '2018-02-02 07:05:52'),
(173, 'NO', 'Norway', 'norway-e355d064d8eeb712a62522d5ee797e292d80c187-264', '2018-02-02 00:41:24', '2018-02-02 07:05:52'),
(174, 'OM', 'Oman', 'oman-d0e76319c621726239ee3dc6abf7643deb442183-264', '2018-02-02 00:41:24', '2018-02-02 07:05:52'),
(175, 'PC', 'Pacific Islands Trust Territory', 'pacific-islands-trust-territory-a5474d1cd7935a81d66d7d6c97dbbbcefdf20233-264', '2018-02-02 00:41:24', '2018-02-02 07:05:52'),
(176, 'PK', 'Pakistan', 'pakistan-44d24cc8d1d323849e4dcd493afd1eec54771df9-264', '2018-02-02 00:41:24', '2018-02-02 07:05:52'),
(177, 'PW', 'Palau', 'palau-fba5545df58d655ee2e569cac8b343fc0a1fa15c-264', '2018-02-02 00:41:24', '2018-02-02 07:05:52'),
(178, 'PS', 'Palestinian Territories', 'palestinian-territories-ea52349a33dce4f10b0856af10a29ddf123e2623-264', '2018-02-02 00:41:25', '2018-02-02 07:05:52'),
(179, 'PA', 'Panama', 'panama-b3f1880157fab342b8a924cd77685b08188bf9ab-264', '2018-02-02 00:41:25', '2018-02-02 07:05:52'),
(180, 'PZ', 'Panama Canal Zone', 'panama-canal-zone-e6d292278b1bb25d826b8ae137cb313360aafbeb-264', '2018-02-02 00:41:25', '2018-02-02 07:05:52'),
(181, 'PG', 'Papua New Guinea', 'papua-new-guinea-1efbe6fbc39750bd1debfb1bd1eae0f41456b2f2-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(182, 'PY', 'Paraguay', 'paraguay-bd9ce7e4de7de4bb045083ba0f875addb771891d-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(183, 'YD', 'People\'s Democratic Republic of Yemen', 'peoples-democratic-republic-of-yemen-6cc8a5bf3d654f98621dcf8196f1bd944d490414-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(184, 'PE', 'Peru', 'peru-d9330502dd16bd9b89013f88b30e41642b58b57a-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(185, 'PH', 'Philippines', 'philippines-7faf16b43abb493e255e4c2c3450994883849501-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(186, 'PN', 'Pitcairn Islands', 'pitcairn-islands-760f45678818d2a2e8383aa1d5133be1416f7dca-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(187, 'PL', 'Poland', 'poland-9e49628ca8de4004a3e636121e120aa674398c49-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(188, 'PT', 'Portugal', 'portugal-52bf52252f6d1a74a87eb9767baee805f1accb07-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(189, 'PR', 'Puerto Rico', 'puerto-rico-9def96078d087265d5728e897a5ca41546c9b0d6-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(190, 'QA', 'Qatar', 'qatar-7e81862721a1415f97164020968222371826e555-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(191, 'RO', 'Romania', 'romania-5f4e94ffa1966dae5b1bcaf0083f2a39acc30eee-264', '2018-02-02 00:41:25', '2018-02-02 07:05:53'),
(192, 'RU', 'Russia', 'russia-b99e7aea79df09a8ece31451e3232210641b00ca-264', '2018-02-02 00:41:26', '2018-02-02 07:05:53'),
(193, 'RW', 'Rwanda', 'rwanda-40081f72e9c918d7204a17d4d33234f2b2580bad-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(194, 'RE', 'Réunion', 'reunion-ce4dbf95024c336888734c5dd3f2617da2646190-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(195, 'BL', 'Saint Barthélemy', 'saint-barthelemy-1d882abe168725e0b9ea5875e55a453825057fc7-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(196, 'SH', 'Saint Helena', 'saint-helena-559d8a34bb17b1fc702cef7f499d899991652028-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(197, 'KN', 'Saint Kitts and Nevis', 'saint-kitts-and-nevis-784915c7f423d0513c981dbc0ce075614dc6d3ba-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(198, 'LC', 'Saint Lucia', 'saint-lucia-4c6f1c31f4fe26d0e86219470180c7fad92a0872-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(199, 'MF', 'Saint Martin', 'saint-martin-6bba8802a8d12483d22fb0a8a258cf8fe96390c6-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(200, 'PM', 'Saint Pierre and Miquelon', 'saint-pierre-and-miquelon-1de468376ce42533047f6d72159b5be68583f982-264', '2018-02-02 00:41:26', '2018-02-02 07:05:54'),
(201, 'VC', 'Saint Vincent and the Grenadines', 'saint-vincent-and-the-grenadines-915a5b238d07d4595357d2a3c8da68347eda7903-264', '2018-02-02 00:41:26', '2018-02-02 07:05:55'),
(202, 'WS', 'Samoa', 'samoa-0957bbbd7d1622e38f3de0017aa3a581827f55d5-264', '2018-02-02 00:41:26', '2018-02-02 07:05:55'),
(203, 'SM', 'San Marino', 'san-marino-26b497b6e3f0c14ab99c479718aea2cb56e045bc-264', '2018-02-02 00:41:26', '2018-02-02 07:05:55'),
(204, 'SA', 'Saudi Arabia', 'saudi-arabia-0a94f5763f94c8678c11c56a47ab25f19631f447-264', '2018-02-02 00:41:26', '2018-02-02 07:05:55'),
(205, 'SN', 'Senegal', 'senegal-2031200f19776a3fa80c047bd7b8351ad6d56af8-264', '2018-02-02 00:41:26', '2018-02-02 07:05:55'),
(206, 'RS', 'Serbia', 'serbia-c3fbcb68bdfa71ab043369da34967d85416dfeb7-264', '2018-02-02 00:41:26', '2018-02-02 07:05:55'),
(207, 'CS', 'Serbia and Montenegro', 'serbia-and-montenegro-094708cd01e0e44b7117572022a7cb775a39fc49-264', '2018-02-02 00:41:27', '2018-02-02 07:05:55'),
(208, 'SC', 'Seychelles', 'seychelles-130f18d2de5c1d2db90a4581b2f5627e1222281d-264', '2018-02-02 00:41:27', '2018-02-02 07:05:55'),
(209, 'SL', 'Sierra Leone', 'sierra-leone-107d829b864fcdabc30f97de89a9978d453271ce-264', '2018-02-02 00:41:27', '2018-02-02 07:05:55'),
(210, 'SG', 'Singapore', 'singapore-cd6b5bb595111ed9d2c8ac1acb83fe739586e735-264', '2018-02-02 00:41:27', '2018-02-02 07:05:55'),
(211, 'SK', 'Slovakia', 'slovakia-51f165c8ceee16030c63b428b4fe88228bb3d8f2-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(212, 'SI', 'Slovenia', 'slovenia-131662e8644a8c852f39d85fad8a908d86263408-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(213, 'SB', 'Solomon Islands', 'solomon-islands-3828d4c3c7a7b5d573c7e000f5471bfa90f26134-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(214, 'SO', 'Somalia', 'somalia-cd8502c69881580f892a446ae22ada6b6cbb870b-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(215, 'ZA', 'South Africa', 'south-africa-3d54a209473c635945c807e0613021a24b2b61a9-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(216, 'GS', 'South Georgia and the South Sandwich Islands', 'south-georgia-and-the-south-sandwich-islands-44960a8a6e79c0386c33b5a3dc9d126ff6bd6c6b-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(217, 'KR', 'South Korea', 'south-korea-24d9bdb6d80c5a5c76b36a6fcbefca1d261d8a09-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(218, 'ES', 'Spain', 'spain-1132e7e3355fba0d9cb6515dfe237659f06a200e-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(219, 'LK', 'Sri Lanka', 'sri-lanka-1cef25cdbf5226d718dac7c98af688b4a156d3ca-264', '2018-02-02 00:41:27', '2018-02-02 07:05:56'),
(220, 'SD', 'Sudan', 'sudan-9bcc60bb65cde09131cdedb8c475425bb5c7b789-264', '2018-02-02 00:41:27', '2018-02-02 07:05:57'),
(221, 'SR', 'Suriname', 'suriname-6f11d645a2f0ba97878f669afcdc2fc486ce8621-264', '2018-02-02 00:41:27', '2018-02-02 07:05:57'),
(222, 'SJ', 'Svalbard and Jan Mayen', 'svalbard-and-jan-mayen-b4785cf572687f6ad1bf0f1bf3621effbcae1db0-264', '2018-02-02 00:41:27', '2018-02-02 07:05:57'),
(223, 'SZ', 'Swaziland', 'swaziland-7fe9951227f74a3ea77861b987b9a6daefe2a991-264', '2018-02-02 00:41:27', '2018-02-02 07:05:57'),
(224, 'SE', 'Sweden', 'sweden-1b5337a91772b311066ac22965e3271705f1c491-264', '2018-02-02 00:41:27', '2018-02-02 07:05:57'),
(225, 'CH', 'Switzerland', 'switzerland-b14ee092a9f823699bf23ee9b1c1009624e737be-264', '2018-02-02 00:41:27', '2018-02-02 07:05:57'),
(226, 'SY', 'Syria', 'syria-35b599349ae682b4972101fd7e38e9bdb724ea20-264', '2018-02-02 00:41:28', '2018-02-02 07:05:57'),
(227, 'ST', 'São Tomé and Príncipe', 'sao-tome-and-principe-aff32d98942ba466602ad80b47e257ea08fe1053-264', '2018-02-02 00:41:28', '2018-02-02 07:05:57'),
(228, 'TW', 'Taiwan', 'taiwan-2355c8e2803840609dfb3e13edc753cc5b94c899-264', '2018-02-02 00:41:28', '2018-02-02 07:05:57'),
(229, 'TJ', 'Tajikistan', 'tajikistan-effc5feb588130be1618a9383a6e170ff29ca786-264', '2018-02-02 00:41:28', '2018-02-02 07:05:57'),
(230, 'TZ', 'Tanzania', 'tanzania-08bacbc937ed6a72f3105309f9731894853dd332-264', '2018-02-02 00:41:28', '2018-02-02 07:05:57'),
(231, 'TH', 'Thailand', 'thailand-01bcb02431d27587d0160fa7863968726dfecaae-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(232, 'TL', 'Timor-Leste', 'timor-leste-5e80e619a610d7f54b13a716fe786bd6c1f172a2-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(233, 'TG', 'Togo', 'togo-887b3239b4786d17d1d3f62654c56eb8c14d46fb-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(234, 'TK', 'Tokelau', 'tokelau-f240790026e965f252eb69adea3b8317aa76e9bb-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(235, 'TO', 'Tonga', 'tonga-e63927366a7bf40da8270252cebfea5b74c65354-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(236, 'TT', 'Trinidad and Tobago', 'trinidad-and-tobago-8d85d4ddffa6af5c504941696ea1c4a3e64f608e-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(237, 'TN', 'Tunisia', 'tunisia-6840bca429df47c8c1183d2db7376fd6569d6efc-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(238, 'TR', 'Turkey', 'turkey-060110f1bf9cf1d379f6129743ecc4cb8ff84475-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(239, 'TM', 'Turkmenistan', 'turkmenistan-1f7231c3aad74d23e840958cd1667015ea3901de-264', '2018-02-02 00:41:28', '2018-02-02 07:05:58'),
(240, 'TC', 'Turks and Caicos Islands', 'turks-and-caicos-islands-d48c9536a414624607a75c320ae3f151256ea5a7-264', '2018-02-02 00:41:28', '2018-02-02 07:05:59'),
(241, 'TV', 'Tuvalu', 'tuvalu-b21a18c8bc9245772b768559eeda74e2be01df4f-264', '2018-02-02 00:41:28', '2018-02-02 07:05:59'),
(242, 'UM', 'U.S. Minor Outlying Islands', 'us-minor-outlying-islands-507554a7975263abb4167f6cb090bd8ae7986a02-264', '2018-02-02 00:41:28', '2018-02-02 07:05:59'),
(243, 'PU', 'U.S. Miscellaneous Pacific Islands', 'us-miscellaneous-pacific-islands-e6e33b8c1e1bbad0e9b873fe0c6306590cecf2eb-264', '2018-02-02 00:41:28', '2018-02-02 07:05:59'),
(244, 'VI', 'U.S. Virgin Islands', 'us-virgin-islands-8745be31ab21bdd10d62908897d9163bbd0bfb23-264', '2018-02-02 00:41:29', '2018-02-02 07:05:59'),
(245, 'UG', 'Uganda', 'uganda-b877b6b9781cb8de5967398339a3749263dc96d7-264', '2018-02-02 00:41:29', '2018-02-02 07:05:59'),
(246, 'UA', 'Ukraine', 'ukraine-784a79dc549f31273c52d730f9dc019a92cf0155-264', '2018-02-02 00:41:29', '2018-02-02 07:05:59'),
(247, 'SU', 'Union of Soviet Socialist Republics', 'union-of-soviet-socialist-republics-7e6ae3f2dd1403f458dca3724eacc5676f2418de-264', '2018-02-02 00:41:29', '2018-02-02 07:05:59'),
(248, 'AE', 'United Arab Emirates', 'united-arab-emirates-782a0b13f35e6ecde3cf8b0de0156dc6ccd72390-264', '2018-02-02 00:41:29', '2018-02-02 07:05:59'),
(249, 'GB', 'United Kingdom', 'united-kingdom-59740bc2c7bd8ddc3e70cc4005909b2538908763-264', '2018-02-02 00:41:29', '2018-02-02 07:05:59'),
(250, 'US', 'United States', 'united-states-57eddb7b435114b23753a4640baabb71f8405dfd-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(251, 'ZZ', 'Unknown or Invalid Region', 'unknown-or-invalid-region-a64f049c8a89b38f812439630612f51396905747-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(252, 'UY', 'Uruguay', 'uruguay-4b50183537b085a46370e7e8ba049f6469fdc966-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(253, 'UZ', 'Uzbekistan', 'uzbekistan-e71cd88dd3b4d7080ec944f7c330dd5989fe2977-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(254, 'VU', 'Vanuatu', 'vanuatu-50998b189afe08151d4d870df37c3249f20d3804-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(255, 'VA', 'Vatican City', 'vatican-city-6867331c410b1c589eb936788a673a28b93e7101-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(256, 'VE', 'Venezuela', 'venezuela-9180611b7f4e327475a80957e48a5f1b9fd2dc52-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(257, 'VN', 'Vietnam', 'vietnam-9c6640ac8a5d971730f52fb69a4269060774e5ce-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(258, 'WK', 'Wake Island', 'wake-island-5ec5d778a29d92f02061026125761caeeec8e066-264', '2018-02-02 00:41:29', '2018-02-02 07:06:00'),
(259, 'WF', 'Wallis and Futuna', 'wallis-and-futuna-8392480f43bb8e93023f4ff74746f0c9359da27d-264', '2018-02-02 00:41:30', '2018-02-02 07:06:00'),
(260, 'EH', 'Western Sahara', 'western-sahara-903a3595d6f20ce3859a49135bad96bf7a7ef571-264', '2018-02-02 00:41:30', '2018-02-02 07:06:00'),
(261, 'YE', 'Yemen', 'yemen-0bee69ea8c478f5f8f9aad5eb9f016dd6c346e7d-264', '2018-02-02 00:41:30', '2018-02-02 07:06:01'),
(262, 'ZM', 'Zambia', 'zambia-bd09d96259a221c1b466c6688eef09817dbad78a-264', '2018-02-02 00:41:30', '2018-02-02 07:06:01'),
(263, 'ZW', 'Zimbabwe', 'zimbabwe-65df5b243dc84957c60de798cdc84cad606668dd-264', '2018-02-02 00:41:30', '2018-02-02 07:06:01'),
(264, 'AX', 'Åland Islands', 'aland-islands-b55e43bd28fbc060503ea51e258246387f2b2d31-264', '2018-02-02 00:41:30', '2018-02-02 07:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `create_letters`
--

CREATE TABLE `create_letters` (
  `id` int(10) UNSIGNED NOT NULL,
  `subscriber_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_letters`
--

INSERT INTO `create_letters` (`id`, `subscriber_id`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 8, 'Hello', '<p>TESTING AUCTION NEWS LETTER</p>\r\n', '2018-02-20 01:22:54', '2018-02-20 01:22:54'),
(2, 8, 'TEST', '<p>SDFSDFSDFSDF</p>\r\n', '2018-04-07 10:59:47', '2018-04-07 10:59:47'),
(3, 8, 'SDFSDFSDFSDFSDF', '<p>SDFSDFSDFSDFSDFSDFSDFSD</p>\r\n', '2018-04-07 11:03:48', '2018-04-07 11:03:48'),
(4, 8, 'rhtdfgdfg', '<p>fghdfghdfgh</p>\r\n', '2018-04-11 10:17:30', '2018-04-11 10:17:30'),
(5, 9, 'AFDsafa', '<p>asdfasda</p>\r\n', '2018-04-11 11:40:12', '2018-04-11 11:40:12'),
(6, 10, 'Test ', '<p>What is Lorem Ipsum? Lorem Ipsum is simply <em>dummy text</em> of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard <em>dummy text</em> ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the&nbsp;...</p>\r\n', '2018-04-21 11:58:42', '2018-04-21 11:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `emailtemplates`
--

CREATE TABLE `emailtemplates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` enum('header','footer','content') CHARACTER SET utf8 NOT NULL DEFAULT 'content',
  `subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `from_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `from_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `record_updated_by` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emailtemplates`
--

INSERT INTO `emailtemplates` (`id`, `title`, `slug`, `type`, `subject`, `content`, `from_email`, `from_name`, `record_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'header', 'header', 'header', 'header', '<p>Email</p>\r\n\r\n<div class=\"block\"><!-- Start of preheader -->\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"devicewidth\" style=\"width:580px\">\r\n				<tbody><!-- Spacing -->\r\n					<tr>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<!-- Spacing -->\r\n					<tr>\r\n						<td>If you cannot read this email, please <a class=\"hlite\" href=\"#\" style=\"text-decoration: none; color: #0db9ea\"> click here </a></td>\r\n					</tr>\r\n					<!-- Spacing -->\r\n					<tr>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<!-- Spacing -->\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- End of preheader --></div>\r\n\r\n<div class=\"block\"><!-- start of header -->\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"devicewidth\" style=\"border-bottom:1px solid #0db9ea; width:580px\">\r\n				<tbody>\r\n					<tr>\r\n						<td><!-- logo -->\r\n						<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"devicewidth\" style=\"width:280px\">\r\n							<tbody>\r\n								<tr>\r\n									<td>\r\n									<div class=\"imgpop\"><a href=\"#\"><img alt=\"logo\" class=\"logo\" src=\"http://conquerorslabs.com/exam2/public/uploads/settings/sJrLrtT1qYjRvuM.png\" style=\"border:none; display:block; outline:none; text-decoration:none\" /> </a></div>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						<!-- End of logo --><!-- menu -->\r\n\r\n						<table align=\"right\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"devicewidth\" style=\"width:280px\">\r\n							<tbody>\r\n								<tr>\r\n									<td><a href=\"#\" style=\"text-decoration: none; color: #ffffff;\">HOME </a> | <a href=\"#\" style=\"text-decoration: none; color: #ffffff;\"> ABOUT </a> | <a href=\"#\" style=\"text-decoration: none; color: #ffffff;\"> SHOP </a></td>\r\n									<td>&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						<!-- End of Menu --></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- end of header --></div>\r\n', 'no@noemail.com', 'Test', 1, '2016-07-19 06:23:14', '2016-10-18 14:24:33'),
(2, 'footer', 'footer', 'footer', 'footer', '<div class=\"block\">\r\n    <!-- Start of preheader -->\r\n    <table bgcolor=\"#f6f4f5\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"backgroundTable\" st-sortable=\"postfooter\" width=\"100%\">\r\n        <tbody>\r\n            <tr>\r\n                <td width=\"100%\">\r\n                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"devicewidth\" width=\"580\">\r\n                        <tbody>\r\n                            <!-- Spacing -->\r\n                            <tr>\r\n                                <td height=\"5\" width=\"100%\">\r\n                                </td>\r\n                            </tr>\r\n                            <!-- Spacing -->\r\n                            <tr>\r\n                                <td align=\"center\" st-content=\"preheader\" style=\"font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999\" valign=\"middle\">\r\n                                    If you don\'t want to receive updates. please\r\n                                    <a class=\"hlite\" href=\"#\" style=\"text-decoration: none; color: #0db9ea\">\r\n                                        unsubscribe\r\n                                    </a>\r\n                                </td>\r\n                            </tr>\r\n                            <!-- Spacing -->\r\n                            <tr>\r\n                                <td height=\"5\" width=\"100%\">\r\n                                </td>\r\n                            </tr>\r\n                            <!-- Spacing -->\r\n                        </tbody>\r\n                    </table>\r\n                </td>\r\n            </tr>\r\n        </tbody>\r\n    </table>\r\n    <!-- End of preheader -->\r\n</div>', 'no@noemail.com', 'Test', 1, '2016-07-19 06:24:08', '2016-07-19 06:30:21'),
(4, 'registration', 'registration', '', 'Welcome', '<!-- Full + text -->\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:580px\">\r\n				<tbody>\r\n					<tr>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:540px\">\r\n							<tbody><!-- title -->\r\n								<tr>\r\n									<td style=\"text-align:left\">&nbsp;</td>\r\n								</tr>\r\n								<!-- end of title --><!-- Spacing -->\r\n								<tr>\r\n									<td>&nbsp;</td>\r\n								</tr>\r\n								<!-- Spacing --><!-- content -->\r\n								<tr>\r\n									<td style=\"text-align:left\">\r\n									<p>Dear {{ $username }},<br />\r\n									You have successfully registered with Auction as {{$user_type}} . Enjoy the facilities provided by our system.</p>\r\n\r\n									<p>&nbsp;</p>\r\n\r\n									<p>Your credentials</p>\r\n\r\n									<p>Email : {{$email}}</p>\r\n\r\n									<p>Password: {{$password}}</p>\r\n\r\n									<p>&nbsp;</p>\r\n\r\n									<p>&nbsp;</p>\r\n									</td>\r\n								</tr>\r\n								<!-- end of content --><!-- Spacing -->\r\n								<tr>\r\n									<td>&nbsp;</td>\r\n								</tr>\r\n								<!-- Spacing -->\r\n								<tr>\r\n									<td>&nbsp;</td>\r\n								</tr>\r\n								<!-- button -->\r\n								<tr>\r\n									<td>\r\n									<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"height:30px\">\r\n										<tbody>\r\n											<tr>\r\n												<td style=\"background-color:#0db9ea; text-align:justify\"><a href=\"#\">Read More</a></td>\r\n											</tr>\r\n										</tbody>\r\n									</table>\r\n									</td>\r\n								</tr>\r\n								<!-- /button --><!-- Spacing -->\r\n								<tr>\r\n									<td>&nbsp;</td>\r\n								</tr>\r\n								<!-- Spacing -->\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'admin@auction.com', 'Auction Admin', 1, '2016-07-29 03:48:18', '2018-01-22 01:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sample category', 'sample-category-a797ef10865664bf24c9f65ef1a9dbbdaed20e33', 'Active', '2018-02-02 00:41:30', '2018-02-22 00:08:14'),
(3, 'Registration', 'registration-77c63d143f24a4fc02c64a00ed90263b63d8e419-1', 'Active', '2018-02-02 03:35:44', '2018-02-22 00:08:52'),
(4, 'Auction', 'auction-b7441ded89c4e2989e80fb62454c69c5dd8e7238-2', 'Active', '2018-04-04 06:33:38', '2018-04-04 06:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `faq_questions`
--

CREATE TABLE `faq_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `question_text` text CHARACTER SET utf8 NOT NULL,
  `answer_text` text CHARACTER SET utf8 NOT NULL,
  `slug` text CHARACTER SET utf8,
  `status` enum('Active','Inactive') CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `category_id`, `question_text`, `answer_text`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'What are the advantages of buying at auction?', 'There are many advantages, two of these are:\r\nAn auction demonstrates free and fair competition enabling the purchaser to buy at a price that is fairly achieved against other known bidders.\r\nIf you are the successful bidder you know that the vendor cannot withdraw and the property is yours on completion, which usually takes place 28 days after the auction.', 'what-are-the-advantages-of-buying-at-auction-b7cfda62dee78c1ae84e190bea743d5058b7f183-3', 'Active', '2018-02-02 00:41:30', '2018-04-10 04:29:50'),
(2, 1, 'Should I inspect the property? ', 'YES.  It is essential that you view and know as much as you can about the property prior to the auction.  Local searches and copies of further legal documentation can be obtained from the auctioneers or direct from the Solicitors named in the brochure.  To view outside of the specified times contact the auctioneer\'s office.', 'should-i-inspect-the-property-9d108b874c054c5bafeb52067d4bdcb9b5e4c15b-3', 'Active', '2018-02-02 03:54:16', '2018-04-10 04:30:04'),
(3, 4, 'How to Bid?', 'BIDDING at auction is like a sport. There are competitors, spectators, an umpire, game plans, and in the end, there are winners and losers.\r\n\r\nIt isn’t as easy as turning up with a price limit in mind and calling out some numbers. There is actually a lot more strategy, endurance and psychological tricks involved, reveals Damien Cooley of Cooley Auctions.', 'how-to-bid-ff7a4c4071c2ed13e052ec09a270760abd1d3922-2', 'Active', '2018-04-04 06:35:03', '2018-04-04 06:35:03'),
(4, 3, 'Do I need a Building Society survey?', ' valuation carried out by the Building Society is only required should you need a mortgage.  Again, this and any other financial advice or arrangements must be organised well in advance of the auction day', 'do-i-need-a-building-society-survey-4358364c9d1a791f61360bd0c4435e0e0ecdeee4-3', 'Active', '2018-04-10 04:31:01', '2018-04-10 04:31:01'),
(5, 3, 'Should I have a survey carried out?', 'Anyone who is unsure or has doubts about a property is recommended to have a survey carried out.  The auctioneers will be pleased to recommend firms of Surveyors/Valuers to you.  Surveys should be arranged well in advance of the auction day', 'should-i-have-a-survey-carried-out-9939f3d01f29821b9bdb69629dc0583cf5241c01-4', 'Active', '2018-04-10 04:31:17', '2018-04-10 04:31:17'),
(6, 4, 'Is there a guide/reserve price and what is the difference?', 'A guide price gives you an indication of the price that the property is expected to sell for and what the vendor is hoping to achieve.  The guide price will have been set at the commencement of marketing and may change.  A reserve price is the lowest price the vendor will accept at the auction.  This is agreed between the vendor and the Auctioneers.  ALL most properties entered into the auction have a reserve price.  THIS IS CONFIDENTIAL AND NOT DISCLOSED TO ANY PARTIES, UNLESS OCCASIONALLY A “DECLARED RESERVE” IS PUBLICISED.', 'is-there-a-guidereserve-price-and-what-is-the-difference-d1caaaa68bf88ab81c09a3bb77ca924b66eb9287-5', 'Active', '2018-04-10 04:31:34', '2018-04-10 04:31:34'),
(7, 4, 'What do I have to pay for on the day?', 'It is important that you have all finances ready for the day of the auction.  Should you be the successful bidder a 10% deposit will be required on the day subject to a minimum of £3,000.  This may be paid by Building Society cheque, personal cheque, banker’s draft or debit card.  The balance + any agreed disbursements will be due on completion, normally 28 days from the auction date.  The deposit cheque should be made payable to Boultons Harrisons Limited, as agent for the seller.  The deposit will be used to satisfy the auctioneer’s commission with the balance paid over to the vendor’s solicitor upon completion.  Successful bidders will also have to pay the BUYERS ADMINISTRATION CHARGE, currently £600 including VAT, prior to signing the Contract.  Cheques may be presented for Special Clearance the day following the Auction.\r\nIn the event of the Buyers Administration Charge not being paid at the auction then the auctioneer is authorised to take this administration charge from the deposit paid.  The balance then to be paid on completion will, therefore, be increased appropriately.', 'what-do-i-have-to-pay-for-on-the-day-334846ad3aee01b3a6bd37f69bec5f6c7472bd7a-6', 'Active', '2018-04-10 04:31:49', '2018-04-10 04:31:49'),
(8, 4, 'Do I need a solicitor to be in attendance?', 'No.  It is wise to notify your solicitor of the auction and show them the auction catalogue along with any other information about the property you are interested in.  Your solicitor may obtain copies of the legal documentation on your behalf.  All the necessary legal documentation may be inspected from 7 days prior to the auction.  Documents may be available by e-mail.', 'do-i-need-a-solicitor-to-be-in-attendance-b777f0c791e006f7ef2b0d34aa769113f8ce3b59-7', 'Active', '2018-04-10 04:32:12', '2018-04-10 04:32:12'),
(9, 4, 'What do I need to bring with me on the auction day?', 'Firstly, remember to call the auctioneers office on the DAY of the auction to see if the property you wish to bid on has been withdrawn or sold prior.  Have details of your solicitor\'s name, address and telephone number.  Your 10% deposit and administration fee.  Do not forget to bring along your photo ID such as Passport or Drivers Licence', 'what-do-i-need-to-bring-with-me-on-the-auction-day-cd3842b58b3486974d954ba7208d44427665dd67-8', 'Active', '2018-04-10 04:32:25', '2018-04-10 04:32:25'),
(10, 4, 'What if I am a successful bidder?', 'When the hammer falls, if you have made the highest bid, you are the successful bidder, subject to any reserve price having been reached or exceeded.  You are now bound by contract to buy the property.  The auctioneer’s assistant will ask you for your details.  A member of staff will take you over to the solicitor’s desk to sign an Agreement/Memorandum of Sale.  You will be asked to pay 10% of the purchase price and the Buyers Administration Charge of £600 including VAT and sign a Contract.  The Auctioneer will sign the Contract on behalf of the vendors.', 'what-if-i-am-a-successful-bidder-40d720562e1873eed6ea69c1fb189cec5b83625c-9', 'Active', '2018-04-10 04:32:42', '2018-04-10 04:32:42'),
(11, 4, 'What is required in order to bid at an auction?', 'You MUST register on or prior to auction day in order to bid. At registration, you must show us certified funds, made payable to yourself in the amount listed in auction terms. If you are the high bidder, then you will sign endorse the certified funds over to the Escrow Attorney.', 'what-is-required-in-order-to-bid-at-an-auction-647649756e367f2114895fb6bd8d2df905a06e7a-10', 'Active', '2018-04-10 04:33:03', '2018-04-10 04:33:03'),
(12, 4, 'How are auctions conducted?', 'Nearly all auctions we handle are held via an open bidding process. As a bidder, all you need to do is hold up your bidder card and call out your bid, or tell one of the Bidder Assistants what amount you want to bid. The Bidder Assistants are available to help you and will be roaming the floors during the auction.', 'how-are-auctions-conducted-35d51c4572d2f362e5e72151cbc793feae1b8d5d-11', 'Active', '2018-04-10 04:33:27', '2018-04-10 04:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `favouriteauctions`
--

CREATE TABLE `favouriteauctions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `auction_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favouriteauctions`
--

INSERT INTO `favouriteauctions` (`id`, `user_id`, `auction_id`, `created_at`, `updated_at`) VALUES
(2, 16, 5, '2018-03-02 04:21:28', '2018-03-02 04:21:28'),
(4, 16, 9, '2018-03-02 04:21:33', '2018-03-02 04:21:33'),
(5, 16, 21, '2018-03-02 07:13:08', '2018-03-02 07:13:08'),
(7, 16, 12, '2018-03-02 07:13:10', '2018-03-02 07:13:10'),
(8, 16, 11, '2018-03-02 07:14:35', '2018-03-02 07:14:35'),
(9, 16, 7, '2018-03-02 07:14:42', '2018-03-02 07:14:42'),
(10, 16, 8, '2018-03-02 07:14:52', '2018-03-02 07:14:52'),
(11, 16, 1, '2018-03-02 07:17:47', '2018-03-02 07:17:47'),
(12, 16, 22, '2018-03-03 01:26:37', '2018-03-03 01:26:37'),
(13, 16, 4, '2018-03-08 08:00:27', '2018-03-08 08:00:27'),
(14, 16, 23, '2018-04-06 05:15:05', '2018-04-06 05:15:05'),
(15, 16, 15, '2018-04-09 06:44:27', '2018-04-09 06:44:27'),
(16, 16, 20, '2018-04-09 06:44:31', '2018-04-09 06:44:31'),
(17, 30, 22, '2018-04-10 19:20:27', '2018-04-10 19:20:27'),
(20, 4, 21, '2018-04-11 14:59:46', '2018-04-11 14:59:46'),
(21, 4, 20, '2018-04-11 14:59:48', '2018-04-11 14:59:48'),
(22, 4, 9, '2018-04-21 10:38:39', '2018-04-21 10:38:39'),
(23, 4, 18, '2018-04-21 10:46:27', '2018-04-21 10:46:27'),
(24, 4, 2, '2018-04-21 11:54:09', '2018-04-21 11:54:09'),
(25, 4, 19, '2018-04-21 15:24:16', '2018-04-21 15:24:16'),
(26, 4, 10, '2018-04-23 15:11:03', '2018-04-23 15:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `internal_notifications`
--

CREATE TABLE `internal_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) CHARACTER SET utf8 NOT NULL,
  `link` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_notifications`
--

INSERT INTO `internal_notifications` (`id`, `text`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Hello, Post auctions here', 'http://localhost/Global/global-auction/auctions', '2018-02-06 04:37:48', '2018-02-06 04:37:48'),
(2, 'Hello, you can bid auctions now...', 'http://localhost/Global/global-auction', '2018-02-06 04:57:20', '2018-02-06 04:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `internal_notification_user`
--

CREATE TABLE `internal_notification_user` (
  `internal_notification_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_notification_user`
--

INSERT INTO `internal_notification_user` (`internal_notification_id`, `user_id`, `read_at`, `created_at`) VALUES
(1, 3, '2018-02-06 05:06:00', '2018-02-06 10:07:48'),
(2, 4, NULL, '2018-02-06 10:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `is_rtl` int(11) NOT NULL,
  `is_default` tinyint(2) NOT NULL DEFAULT '0',
  `phrases` text CHARACTER SET utf8,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(3, 'Telugu', 'telugu', 'te', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-05-24 23:11:51', '2018-04-03 12:17:39'),
(5, 'Arabic', 'arabic', 'ar', 1, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-08-18 00:10:49', '2018-04-03 12:17:39');
INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(6, 'Tamil', 'tamil', 'ta', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-08-23 00:09:43', '2018-04-03 12:17:39'),
(7, 'Urdu', 'urdu', 'ur', 1, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-08-23 04:38:33', '2018-04-03 12:17:39');
INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(9, 'English', 'english-13', 'en', 0, 1, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\",\"ooops...!\":\"Ooops...!\",\"page not found\":\"Page Not Found\",\"date_format_js\":\"Date Format Js\",\"update_auction_status_cronjob\":\"Update Auction Status Cronjob\",\"stripe_key_test_public\":\"Stripe Key Test Public\",\"stripe_key_test_secret\":\"Stripe Key Test Secret\",\"stripe_key_live_public\":\"Stripe Key Live Public\",\"stripe_key_live_secret\":\"Stripe Key Live Secret\",\"stripe_test_mode\":\"Stripe Test Mode\",\"stripe_key\":\"Stripe Key\",\"stripe_secret\":\"Stripe Secret\",\"no_of_times\":\"No Of Times\",\"send_invoice_email_to_bidder_regarding_payment\":\"Send Invoice Email To Bidder Regarding Payment\",\"send_email\":\"Send Email\",\"registered_successfully \":\"Registered Successfully \",\"\\\\ncannot_send_email_to_user, please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"success..\":\"Success..\",\"registered successfully \\\\ncannot send email to user, please check your server settings\":\"Registered Successfully \\\\ncannot Send Email To User, Please Check Your Server Settings\",\"user_account_status_updated_successfully\":\"User Account Status Updated Successfully\",\"ooops..!\":\"Ooops..!\",\"new password is sent to your email account\":\"New Password Is Sent To Your Email Account\",\"email_sent_successfully\":\"Email Sent Successfully\",\"pay\":\"Pay\",\"bid_payment\":\"Bid Payment\",\"shipping_details\":\"Shipping Details\",\"auction_payment\":\"Auction Payment\",\"amount\":\"Amount\",\"choose_payment\":\"Choose Payment\",\"auction_already_added_to_favourites\":\"Auction Already Added To Favourites\",\"record_not_found\":\"Record Not Found\",\"record not found\":\"Record Not Found\",\"invalid_operation\":\"Invalid Operation\",\"auction_added_to_favourites\":\"Auction Added To Favourites\",\"record_removed_from_favourites\":\"Record Removed From Favourites\",\"auction_ended\":\"Auction Ended\",\"images\":\"Images\",\"auction_bidders\":\"Auction Bidders\",\"payment_gateways_not_available_please_contact_admin\":\"Payment Gateways Not Available Please Contact Admin\",\"auction_record_not_found_please_contact_admin\":\"Auction Record Not Found Please Contact Admin\",\"theme_color\":\"Theme Color\",\"messges_sent_successfully_for_4_users\":\"Messges Sent Successfully For 4 Users\",\"only_image_files_are_accepted\":\"Only Image Files Are Accepted\",\"files_are_uploaded_as_soon_as_you_drop_them\":\"Files Are Uploaded As Soon As You Drop Them\",\"maximum_allowed_size_is_5mb\":\"Maximum Allowed Size Is 5mb\",\"for_good_resolution_image_width_height_950x650\":\"For Good Resolution Image Width Height 950x650\",\"total_uploaded_files\":\"Total Uploaded Files\",\"upload_images\":\"Upload Images\",\"your_payment_was cancelled\":\"Your Payment Was Cancelled\",\"please_update_billing_and_shipping_details_to_continue\":\"Please Update Billing And Shipping Details To Continue\",\"success...!\":\"Success...!\",\"log_in_success\":\"Log In Success\",\"time_out\":\"Time Out\",\"messges_sent_successfully_for_6_users\":\"Messges Sent Successfully For 6 Users\",\"record_added_successfully_with_password \":\"Record Added Successfully With Password \",\"messges_sent_successfully_for_7_users\":\"Messges Sent Successfully For 7 Users\",\"bid_placed_successfully\":\"Bid Placed Successfully\",\"payment_already_done_for_this_auction\":\"Payment Already Done For This Auction\",\"billing_state\":\"Billing State\",\"billing_city\":\"Billing City\",\"shipping_state\":\"Shipping State\",\"shipping_city\":\"Shipping City\",\"invoice_sent_to_bidder_successfully\":\"Invoice Sent To Bidder Successfully\",\"\":\"\",\"your_bid_payment_is_successfull\":\"Your Bid Payment Is Successfull\",\"your_auction_payment_is_successfull\":\"Your Auction Payment Is Successfull\",\"payment done successfully !\":\"Payment Done Successfully !\",\"\\\\npayment done successfully !\":\"\\\\npayment Done Successfully !\",\"oops...!\":\"Oops...!\",\"call to undefined method illuminate\\\\database\\\\query\\\\builder::save()\":\"Call To Undefined Method Illuminate\\\\database\\\\query\\\\builder::save()\",\"bid_amount_is_not_valid\":\"Bid Amount Is Not Valid\",\"recent_buyers\":\"Recent Buyers\",\"you_have_subscribed_successfully\":\"You Have Subscribed Successfully\",\"api_key\":\"Api Key\",\"stripe_currency\":\"Stripe Currency\",\"country_code\":\"Country Code\",\"destination phone numbers need to be verified. please go to https:\\/\\/manage.plivo.com\\/sandbox-numbers\\/ to verify them.\":\"Destination Phone Numbers Need To Be Verified. Please Go To Https:\\/\\/manage.plivo.com\\/sandbox-numbers\\/ To Verify Them.\",\"message sent successfully\":\"Message Sent Successfully\"}', '2016-08-30 00:41:02', '2018-04-07 05:52:58');
INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(10, 'Hindi', 'hindi', 'hi', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:10:50', '2018-04-03 12:17:39'),
(11, 'German', 'german', 'de', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:23:07', '2018-04-03 12:17:39');
INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(12, 'Indonesian', 'indonesian', 'id', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:25:50', '2018-04-03 12:17:39'),
(13, 'Spanish', 'spanish', 'es', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:28:54', '2018-04-03 12:17:39');
INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(14, 'French', 'french', 'fr', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:33:35', '2018-04-03 12:17:39'),
(15, 'Dutch', 'dutch', 'nl', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:38:15', '2018-04-03 12:17:39');
INSERT INTO `languages` (`id`, `language`, `slug`, `code`, `is_rtl`, `is_default`, `phrases`, `created_at`, `updated_at`) VALUES
(16, 'Portuguese', 'portuguese', 'pt', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2016-11-18 10:42:06', '2018-04-03 12:17:39'),
(18, 'Chinese', 'chinese-12', 'zh', 0, 0, '{\"success\":\"Success\",\"record_updated_successfully\":\"Record Updated Successfully\",\"languages\":\"Languages\",\"create\":\"Create\",\"language\":\"Language\",\"code\":\"Code\",\"is_rtl\":\"Is Rtl\",\"default_language\":\"Default Language\",\"action\":\"Action\",\"deleted\":\"Deleted\",\"sorry\":\"Sorry\",\"cannot_delete_this_record_as\":\"Cannot Delete This Record As\",\"site_title\":\"Site Title\",\"latest_users\":\"Latest Users\",\"was_joined_as\":\"Was Joined As\",\"see_more\":\"See More\",\"my_profile\":\"My Profile\",\"change_password\":\"Change Password\",\"logout\":\"Logout\",\"dashboard\":\"Dashboard\",\"users\":\"Users\",\"categories\":\"Categories\",\"master_settings\":\"Master Settings\",\"email_templates\":\"Email Templates\",\"settings\":\"Settings\",\"edit\":\"Edit\",\"delete\":\"Delete\",\"enable\":\"Enable\",\"set_default\":\"Set Default\",\"disable\":\"Disable\",\"add_user\":\"Add User\",\"name\":\"Name\",\"email\":\"Email\",\"image\":\"Image\",\"role\":\"Role\",\"edit_user\":\"Edit User\",\"list\":\"List\",\"update\":\"Update\",\"this_field_is_required\":\"This Field Is Required\",\"the_text_is_too_short\":\"The Text Is Too Short\",\"the_text_is_too_long\":\"The Text Is Too Long\",\"invalid_input\":\"Invalid Input\",\"please_enter_valid_email\":\"Please Enter Valid Email\",\"select_role\":\"Select Role\",\"add_language\":\"Add Language\",\"language_title\":\"Language Title\",\"language_code\":\"Language Code\",\"supported_language_codes\":\"Supported Language Codes\",\"no\":\"No\",\"yes\":\"Yes\",\"edit_language\":\"Edit Language\",\"add_users\":\"Add Users\",\"category\":\"Category\",\"description\":\"Description\",\"create_category\":\"Create Category\",\"category_name\":\"Category Name\",\"please_upload_valid_image_type\":\"Please Upload Valid Image Type\",\"edit_author\":\"Edit Author\",\"add\":\"Add\",\"please_enter_valid_number\":\"Please Enter Valid Number\",\"password\":\"Password\",\"login\":\"Login\",\"forgot_password\":\"Forgot Password\",\"register\":\"Register\",\"type\":\"Type\",\"title\":\"Title\",\"from_email\":\"From Email\",\"from_name\":\"From Name\",\"is_paid\":\"Is Paid\",\"paid\":\"Paid\",\"module\":\"Module\",\"key\":\"Key\",\"view\":\"View\",\"add_setting\":\"Add Setting\",\"edit_template\":\"Edit Template\",\"welcome\":\"Welcome\",\"content\":\"Content\",\"email_content\":\"Email Content\",\"create_template\":\"Create Template\",\"select\":\"Select\",\"view_all\":\"View All\",\"user_registration\":\"User Registration\",\"password_confirmation\":\"Password Confirmation\",\"password_and_confirm_password_does_not_match\":\"Password And Confirm Password Does Not Match\",\"register_now\":\"Register Now\",\"i_am_having_account\":\"I Am Having Account\",\"edit_profile\":\"Edit Profile\",\"mins\":\"Mins\",\"old_password\":\"Old Password\",\"new_password\":\"New Password\",\"retype_password\":\"Retype Password\",\"history\":\"History\",\"invoices\":\"Invoices\",\"of\":\"Of\",\"previous\":\"Previous\",\"next\":\"Next\",\"finish\":\"Finish\",\"summary\":\"Summary\",\"it_is_a\":\"It Is A\",\"ooops__!\":\"Ooops..!\",\"you_have_no_permission_to_access\":\"You Have No Permission To Access\",\"correct\":\"Correct\",\"wrong\":\"Wrong\",\"sno\":\"Sno\",\"date\":\"Date\",\"total\":\"Total\",\"download\":\"Download\",\"page_not_found\":\"Page Not Found\",\"ooops___!\":\"Ooops...!\",\"record_added_successfully\":\"Record Added Successfully\",\"user_details\":\"User Details\",\"details_of\":\"Details Of\",\"reports\":\"Reports\",\"view_details\":\"View Details\",\"password_updated_successfully\":\"Password Updated Successfully\",\"the_password_is_too_short\":\"The Password Is Too Short\",\"record_deleted_successfully\":\"Record Deleted Successfully\",\"category_deleted_successfully\":\"Category Deleted Successfully\",\"setting_key\":\"Setting Key\",\"value\":\"Value\",\"setting_value\":\"Setting Value\",\"edit_settings\":\"Edit Settings\",\"in\":\"In\",\"cost\":\"Cost\",\"no_data_available\":\"No Data Available\",\"remove_all\":\"Remove All\",\"no_settings_available\":\"No Settings Available\",\"oops\":\"Oops\",\"invalid_record\":\"Invalid Record\",\"details\":\"Details\",\"overview\":\"Overview\",\"days\":\"Days\",\"pay_now\":\"Pay Now\",\"valid_for\":\"Valid For\",\"apply\":\"Apply\",\"paypal\":\"Paypal\",\"payu\":\"Payu\",\"start_date\":\"Start Date\",\"end_date\":\"End Date\",\"paid_through\":\"Paid Through\",\"your_payment_was_cancelled\":\"Your Payment Was Cancelled\",\"status\":\"Status\",\"datetime\":\"Datetime\",\"phone\":\"Phone\",\"please_enter_valid_phone_number\":\"Please Enter Valid Phone Number\",\"address\":\"Address\",\"billing_address\":\"Billing Address\",\"limit\":\"Limit\",\"percent\":\"Percent\",\"discount_type\":\"Discount Type\",\"discount_value\":\"Discount Value\",\"discount_maximum_amoumt\":\"Discount Maximum Amoumt\",\"valid_from\":\"Valid From\",\"valid_to\":\"Valid To\",\"checkout\":\"Checkout\",\"buy_now\":\"Buy Now\",\"author\":\"Author\",\"select_category\":\"Select Category\",\"edit_category\":\"Edit Category\",\"file_path\":\"File Path\",\"updated_at\":\"Updated At\",\"total_items\":\"Total Items\",\"notifications\":\"Notifications\",\"url\":\"Url\",\"add_notification\":\"Add Notification\",\"edit_notification\":\"Edit Notification\",\"posted_on\":\"Posted On\",\"file_type\":\"File Type\",\"today\":\"Today\",\"read_more\":\"Read More\",\"items\":\"Items\",\"view_more\":\"View More\",\"upload\":\"Upload\",\"report\":\"Report\",\"import\":\"Import\",\"id\":\"Id\",\"record_already_exists_with_this_title\":\"Record Already Exists With This Title\",\"unknown_error_occurred\":\"Unknown Error Occurred\",\"total_users\":\"Total Users\",\"send\":\"Send\",\"back\":\"Back\",\"deleted_successfully\":\"Deleted Successfully\",\"feedback\":\"Feedback\",\"create_message\":\"Create Message\",\"messages\":\"Messages\",\"inbox\":\"Inbox\",\"compose\":\"Compose\",\"send_message\":\"Send Message\",\"username\":\"Username\",\"option_value\":\"Option Value\",\"option_text\":\"Option Text\",\"make_default\":\"Make Default\",\"currency\":\"Currency\",\"site_address\":\"Site Address\",\"site_city\":\"Site City\",\"site_logo\":\"Site Logo\",\"site_favicon\":\"Site Favicon\",\"site_state\":\"Site State\",\"site_country\":\"Site Country\",\"site_zipcode\":\"Site Zipcode\",\"site_phone\":\"Site Phone\",\"meta_description\":\"Meta Description\",\"meta_keywords\":\"Meta Keywords\",\"payment_gateway_payu\":\"Payment Gateway Payu\",\"payment_gateway_paypal\":\"Payment Gateway Paypal\",\"invalid_setting\":\"Invalid Setting\",\"merchantkey\":\"Merchantkey\",\"payu_salt\":\"Payu Salt\",\"payu_merchantkey\":\"Payu Merchantkey\",\"payu_workingkey\":\"Payu Workingkey\",\"payu_mode\":\"Payu Mode\",\"enter_value\":\"Enter Value\",\"no_records_available\":\"No Records Available\",\"please_accept_terms_and_conditions\":\"Please Accept Terms And Conditions\",\"already_in_use\":\"Already In Use\",\"update_strings\":\"Update Strings\",\"home\":\"Home\",\"faqs\":\"Faqs\",\"about_us\":\"About Us\",\"contact_us\":\"Contact Us\",\"admin_dashboard\":\"Admin Dashboard\",\"overall_users\":\"Overall Users\",\"roles\":\"Roles\",\"authors\":\"Authors\",\"tool_tip\":\"Tool Tip\",\"test\":\"Test\",\"paypaltool\":\"Paypaltool\",\"offline_payment\":\"Offline Payment\",\"click_here_to_update_payment_details\":\"Click Here To Update Payment Details\",\"offline_payment_form\":\"Offline Payment Form\",\"offline_payment_information\":\"Offline Payment Information\",\"offline_payment_instructions\":\"Offline Payment Instructions\",\"payment_details\":\"Payment Details\",\"submit\":\"Submit\",\"your_request_was_submitted_to_admin\":\"Your Request Was Submitted To Admin\",\"logged_out_successfully\":\"Logged Out Successfully\",\"view_profile\":\"View Profile\",\"user_roles\":\"User Roles\",\"permissions\":\"Permissions\",\"add_role\":\"Add Role\",\"role_name\":\"Role Name\",\"display_name\":\"Display Name\",\"list_roles\":\"List Roles\",\"this_field_id_required\":\"This Field Id Required\",\"account_settings\":\"Account Settings\",\"no_categories_available\":\"No Categories Available\",\"module_payu\":\"Module Payu\",\"messaging\":\"Messaging\",\"default\":\"Default\",\"driver\":\"Driver\",\"logo\":\"Logo\",\"print\":\"Print\",\"cancelled\":\"Cancelled\",\"pending\":\"Pending\",\"overall\":\"Overall\",\"payments\":\"Payments\",\"success_list\":\"Success List\",\"user_name\":\"User Name\",\"item\":\"Item\",\"payment_gateway\":\"Payment Gateway\",\"payment_status\":\"Payment Status\",\"export\":\"Export\",\"export_payments_report\":\"Export Payments Report\",\"all_records\":\"All Records\",\"from\":\"From\",\"to\":\"To\",\"payment_type\":\"Payment Type\",\"all\":\"All\",\"online\":\"Online\",\"offline\":\"Offline\",\"from_date\":\"From Date\",\"to_date\":\"To Date\",\"notes\":\"Notes\",\"created_at\":\"Created At\",\"approve\":\"Approve\",\"reject\":\"Reject\",\"close\":\"Close\",\"comments\":\"Comments\",\"record_was_updated_successfully\":\"Record Was Updated Successfully\",\"send_sms\":\"Send SMS\",\"sms_to\":\"SMS To\",\"admins\":\"Admins\",\"selected\":\"Selected\",\"no_users_available_with_the_combination\":\"No Users Available With The Combination\",\"info\":\"Info\",\"sms\":\"SMS\",\"this_record_is_in_use_in_other_modules\":\"This Record Is In Use In Other Modules\",\"are_you_sure\":\"Are You Sure\",\"you_will_not_be_able_to_recover_this_record\":\"You Will Not Be Able To Recover This Record\",\"delete_it\":\"Delete It\",\"cancel_please\":\"Cancel Please\",\"your_record_has_been_deleted\":\"Your Record Has Been Deleted\",\"your_record_is_safe\":\"Your Record Is Safe\",\"please_enter_10-15_digit_mobile_number\":\"Please Enter 10-15 Digit Mobile Number\",\"please_enter_your_address\":\"Please Enter Your Address\",\"file_type_not_allowed\":\"File Type Not Allowed\",\"enter_category_name\":\"Enter Category Name\",\"oops___!\":\"Oops...!\",\"reset_password\":\"Reset Password\",\"reset_link_sent\":\"Reset Link Sent\",\"oops__!\":\"Oops..!\",\"invalid_email\":\"Invalid Email\",\"password_reset_link_sent_to_email\":\"Password Reset Link Sent To Email\",\"cannot_change_password\":\"Cannot Change Password\",\"time\":\"Time\",\"time_is_shown_in_seconds\":\"Time Is Shown In Seconds\",\"mail_driver\":\"Mail Driver\",\"mail_host\":\"Mail Host\",\"mail_port\":\"Mail Port\",\"mail_username\":\"Mail Username\",\"mail_password\":\"Mail Password\",\"mail_encryption\":\"Mail Encryption\",\"payu_merchant_key\":\"Payu Merchant Key\",\"payu_working_key\":\"Payu Working Key\",\"payu_test_mode\":\"Payu Test Mode\",\"payu_testmode\":\"Payu Testmode\",\"facebook_login\":\"Facebook Login\",\"google_plus_login\":\"Google Plus Login\",\"record_added_successfully_with_password_\":\"Record Added Successfully With Password \",\"\\\\ncannot_send_email_to_user,_please_check_your_server_settings\":\"\\\\ncannot Send Email To User, Please Check Your Server Settings\",\"supported_formats_are\":\"Supported Formats Are\",\"warning\":\"Warning\",\"billing_details\":\"Billing Details\",\"email_address\":\"Email Address\",\"confirm_password\":\"Confirm Password\",\"password_changed_successfully\":\"Password Changed Successfully\",\"system_timezone\":\"System Timezone\",\"phone_number_expression\":\"Phone Number Expression\",\"operations_are_disabled\":\"Operations Are Disabled\",\"crudoperations_are_disabled\":\"Crudoperations Are Disabled\",\"operations_are_disabled_in_demo_version\":\"Operations Are Disabled In Demo Version\",\"google_analytics\":\"Google Analytics\",\"please_wait\":\"Please Wait\",\"currency_code\":\"Currency Code\",\"success__\":\"Success..\",\"registered_successfully\":\"Registered Successfully\",\"new_password_is_sent_to_your_email_account\":\"New Password Is Sent To Your Email Account\",\"click_here\":\"Click Here\",\"to_change_your_settings\":\"To Change Your Settings\",\"latest\":\"Latest\",\"bidder\":\"Bidder\",\"seller\":\"Seller\",\"sms_driver\":\"SMS Driver\",\"nexmo_key\":\"Nexmo Key\",\"nexmo_secret\":\"Nexmo Secret\",\"plivo_auth_id\":\"Plivo Auth Id\",\"plivo_auth_token\":\"Plivo Auth Token\",\"twilio_sid\":\"Twilio Sid\",\"twilio_token\":\"Twilio Token\",\"locations\":\"Locations\",\"location\":\"Location\",\"city\":\"City\",\"state\":\"State\",\"add_location\":\"Add Location\",\"edit_location\":\"Edit Location\",\"contact_number\":\"Contact Number\",\"please_enter_address\":\"Please Enter Address\",\"select_state\":\"Select State\",\"select_city\":\"Select City\",\"add_category\":\"Add Category\",\"active\":\"Active\",\"inactive\":\"Inactive\",\"import_categories\":\"Import Categories\",\"auction\":\"Auction\",\"explore\":\"Explore\",\"bid\":\"Bid\",\"win\":\"Win\",\"auctions\":\"Auctions\",\"all_auctions\":\"All Auctions\",\"paid_auctions\":\"Paid Auctions\",\"completed_auctions\":\"Completed Auctions\",\"live_auctions\":\"Live Auctions\",\"latest_auctions\":\"Latest Auctions\",\"no_auctions_available\":\"No Auctions Available\",\"my_auctions\":\"My Auctions\",\"reserve_price\":\"Reserve Price\",\"post_auction\":\"Post Auction\",\"add_auction\":\"Add Auction\",\"auction_title\":\"Auction Title\",\"contact_details\":\"Contact Details\",\"terms_and_conditions\":\"Terms And Conditions\",\"terms_conditions\":\"Terms Conditions\",\"price_bid\":\"Price Bid\",\"applicable\":\"Applicable\",\"not_applicable\":\"Not Applicable\",\"bid_increment\":\"Bid Increment\",\"start_date_and_time_of_auction\":\"Start Date And Time Of Auction\",\"end_date_and_time_of_auction\":\"End Date And Time Of Auction\",\"edit_auction\":\"Edit Auction\",\"error\":\"Error\",\"admin_status\":\"Admin Status\",\"approved\":\"Approved\",\"rejected\":\"Rejected\",\"live\":\"Live\",\"completed\":\"Completed\",\"select_status\":\"Select Status\",\"auction_status\":\"Auction Status\",\"view_auctions\":\"View Auctions\",\"approved_auctions\":\"Approved Auctions\",\"pending_auctions\":\"Pending Auctions\",\"blocked_auctions\":\"Blocked Auctions\",\"add_bidder\":\"Add Bidder\",\"select_auction\":\"Select Auction\",\"user_type\":\"User Type\",\"new\":\"New\",\"existed\":\"Existed\",\"select_bidder_type\":\"Select Bidder Type\",\"select_bidder\":\"Select Bidder\",\"bidder_name\":\"Bidder Name\",\"listing_cost\":\"Listing Cost\",\"listing_type\":\"Listing Type\",\"admin_commission_type\":\"Admin Commission Type\",\"commission_value\":\"Commission Value\",\"bidder_added_successfully\":\"Bidder Added Successfully\",\"user_record_exist_with_this_email_id_as_admin_or_seller\":\"User Record Exist With This Email Id As Admin Or Seller\",\"bidder_already_added_to_selected_auction\":\"Bidder Already Added To Selected Auction\",\"paid_commission_value\":\"Paid Commission Value\",\"paid_listing_cost\":\"Paid Listing Cost\",\"view_auction\":\"View Auction\",\"auction_details\":\"Auction Details\",\"seller_name\":\"Seller Name\",\"seller_username\":\"Seller Username\",\"seller_email\":\"Seller Email\",\"seller_phone\":\"Seller Phone\",\"auctions_history\":\"Auctions History\",\"by_location\":\"By Location\",\"by_date\":\"By Date\",\"is_seller_paid_listing_cost\":\"Is Seller Paid Listing Cost\",\"is_seller_paid_commission_value\":\"Is Seller Paid Commission Value\",\"created_by\":\"Created By\",\"last_updated_by\":\"Last Updated By\",\"updated_by\":\"Updated By\",\"see_all\":\"See All\",\"sellers\":\"Sellers\",\"bidders\":\"Bidders\",\"today_auctions\":\"Today Auctions\",\"search_auction\":\"Search Auction\",\"select_details\":\"Select Details\",\"search\":\"Search\",\"search_auctions\":\"Search Auctions\",\"seller_paid_listing_cost\":\"Seller Paid Listing Cost\",\"seller_paid_commission_value\":\"Seller Paid Commission Value\",\"cancel\":\"Cancel\",\"bidder_status\":\"Bidder Status\",\"bidder_details\":\"Bidder Details\",\"edit_bidder\":\"Edit Bidder\",\"bid_amount\":\"Bid Amount\",\"answer\":\"Answer\",\"add_faq\":\"Add Faq\",\"edit_faq\":\"Edit Faq\",\"note\":\"Note\",\"auctions_statistics\":\"Auctions Statistics\",\"start_date_time_of_auction\":\"Start Date Time Of Auction\",\"end_date_time_of_auction\":\"End Date Time Of Auction\",\"total_bidders\":\"Total Bidders\",\"highest_bid\":\"Highest Bid\",\"your_rank\":\"Your Rank\",\"bidder_wise_reports\":\"Bidder Wise Reports\",\"bidders_reports\":\"Bidders Reports\",\"add_new\":\"Add New\",\"faq_categories\":\"Faq Categories\",\"save\":\"Save\",\"faq_questions\":\"Faq Questions\",\"faq_category\":\"Faq Category\",\"sub_categories\":\"Sub Categories\",\"sub_category\":\"Sub Category\",\"countries\":\"Countries\",\"trash\":\"Trash\",\"shortcode\":\"Shortcode\",\"states\":\"States\",\"country\":\"Country\",\"no_entries_in_table\":\"No Entries In Table\",\"select_country\":\"Select Country\",\"cities\":\"Cities\",\"tags\":\"Tags\",\"pages\":\"Pages\",\"site_settings\":\"Site Settings\",\"contact_email\":\"Contact Email\",\"rights_reserved\":\"Rights Reserved\",\"paypal_settings\":\"Paypal Settings\",\"testimonials\":\"Testimonials\",\"user\":\"User\",\"testimony\":\"Testimony\",\"select_user\":\"Select User\",\"templates\":\"Templates\",\"header\":\"Header\",\"footer\":\"Footer\",\"minimum_bid\":\"Minimum Bid\",\"buy_now_price\":\"Buy Now Price\",\"shipping_conditions\":\"Shipping Conditions\",\"international_shipping\":\"International Shipping\",\"shipping_terms\":\"Shipping Terms\",\"is_featured\":\"Is Featured\",\"open\":\"Open\",\"suspended\":\"Suspended\",\"closed\":\"Closed\",\"select_seller\":\"Select Seller\",\"featured\":\"Featured\",\"results_shown_per_page\":\"Results Shown Per Page\",\"hours_until_auction_ends_count_down\":\"Hours Until Auction Ends Count Down\",\"enable_featured_items\":\"Enable Featured Items\",\"enable_auctions_auto_extension\":\"Enable Auctions Auto Extension\",\"extend_auction_by\":\"Extend Auction By\",\"active_picture_gallary\":\"Active Picture Gallary\",\"max_number_of_pictures\":\"Max Number Of Pictures\",\"max_pictures_size\":\"Max Pictures Size\",\"thumbnail_size\":\"Thumbnail Size\",\"activate_bidder_privacy\":\"Activate Bidder Privacy\",\"date_format\":\"Date Format\",\"facebook\":\"Facebook\",\"twitter\":\"Twitter\",\"instagram\":\"Instagram\",\"pinterest\":\"Pinterest\",\"linkedin\":\"Linkedin\",\"you_are_logged_in\":\"You Are Logged In\",\"user_management\":\"User Management\",\"signup_for_new_auction_updates\":\"Sign up for new Auction company content, updates, surveys & offers.\",\"latest_auction_deals\":\"Latest Auction Deals\",\"upcoming_auctions\":\"Upcoming Auctions\",\"by\":\"By\",\"upcoming_auction\":\"Upcoming Auction\",\"shipping\":\"Shipping\",\"payment\":\"Payment\",\"similar_auctions\":\"Similar Auctions\",\"seller_auctions\":\"Seller Auctions\",\"visit_us\":\"Visit Us\",\"email_us\":\"Email Us\",\"call_us\":\"Call Us\",\"useful_links\":\"Useful Links\",\"auctions_near_you\":\"Auctions Near You\",\"past_auctions\":\"Past Auctions\",\"news_letter\":\"News Letter\",\"enter_email_address\":\"Enter Email Address\",\"subscribe\":\"Subscribe\",\"bids\":\"Bids\",\"auction_terms\":\"Auction Terms\",\"bid_history\":\"Bid History\",\"auctions_available\":\"Auctions Available\",\"sale_auctions\":\"Sale Auctions\",\"bid_products\":\"Bid Products\",\"on_sale\":\"On Sale\",\"past\":\"Past\",\"happening_now\":\"Happening Now\",\"live_auction\":\"Live Auction\",\"view_all_upcoming_auctions\":\"View All Upcoming Auctions\",\"words_from_our_clients\":\"Words From Our Clients\",\"bid_start\":\"Bid Start\",\"is_it_buynow_item\":\"Is It Buynow Item\",\"auction_date\":\"Auction Date\",\"item_type\":\"Item Type\",\"all_items\":\"All Items\",\"upcoming\":\"Upcoming\",\"featured_auctions\":\"Featured Auctions\",\"place_bid\":\"Place Bid\",\"select_maximum_bid\":\"Select Maximum Bid\",\"contact\":\"Contact\",\"recent_winners\":\"Recent Winners\",\"account\":\"Account\",\"profile\":\"Profile\",\"shipping_address\":\"Shipping Address\",\"favourite_auctions\":\"Favourite Auctions\",\"bought_auctions\":\"Bought Auctions\",\"all_messages\":\"All Messages\",\"outbox\":\"Outbox\",\"fav_auctions\":\"Fav Auctions\",\"won_auctions\":\"Won Auctions\",\"no_notifications_available\":\"No Notifications Available\",\"add_to_wish_list\":\"Add To Wish List\",\"remove_auction\":\"Remove Auction\",\"opened\":\"Opened\",\"faq_management\":\"Faq Management\",\"location_master\":\"Location Master\",\"content_management\":\"Content Management\",\"is_it_bid_increment\":\"Is It Bid Increment\",\"is_it_buy_now_item\":\"Is It Buy Now Item\",\"payment_and_shipping\":\"Payment And Shipping\",\"terms\":\"Terms\",\"new_message\":\"New Message\",\"reply\":\"Reply\",\"block\":\"Block\",\"disapprove\":\"Disapprove\",\"profile_picture\":\"Profile Picture\",\"company_logo\":\"Company Logo\",\"view_message\":\"View Message\",\"reply_message\":\"Reply Message\",\"message_sent_successfully\":\"Message Sent Successfully\",\"start\":\"Start\",\"end\":\"End\",\"bid_no_of_times\":\"Bid No Of Times\",\"won\":\"Won\",\"payment_history\":\"Payment History\",\"transaction_id\":\"Transaction Id\",\"paid_amount\":\"Paid Amount\",\"payment_for\":\"Payment For\",\"pay_through\":\"Pay Through\",\"entered_email_already_subscribed\":\"Entered Email Already Subscribed\",\"billing_name\":\"Billing Name\",\"billing_phone\":\"Billing Phone\",\"billing_email\":\"Billing Email\",\"billing_country\":\"Billing Country\",\"shipping_name\":\"Shipping Name\",\"shipping_phone\":\"Shipping Phone\",\"shipping_email\":\"Shipping Email\",\"shipping_country\":\"Shipping Country\",\"current_password\":\"Current Password\",\"password_confirm\":\"Password Confirm\",\"unblock\":\"Unblock\",\"disapproved\":\"Disapproved\",\"overall_statistics\":\"Overall Statistics\",\"questions\":\"Questions\",\"seller_wise_reports\":\"Seller Wise Reports\",\"year_month_wise_reports\":\"Year Month Wise Reports\",\"question\":\"Question\",\"back_to_list\":\"Back To List\",\"testimonies\":\"Testimonies\",\"country_name\":\"Country Name\",\"short_code\":\"Short Code\",\"text\":\"Text\",\"home_page_caption\":\"Home Page Caption\",\"home_page_tagline\":\"Home Page Tagline\",\"home_slider_one\":\"Home Slider One\",\"home_slider_two\":\"Home Slider Two\",\"home_slider_three\":\"Home Slider Three\",\"home_slider_four\":\"Home Slider Four\",\"latitude\":\"Latitude\",\"longitude\":\"Longitude\",\"account_type\":\"Account Type\",\"update_auction_status\":\"Update Auction Status\",\"cron_jobs_run\":\"Cron Jobs Run\",\"google_plus\":\"Google Plus\",\"stripe\":\"Stripe\",\"subject\":\"Subject\",\"message\":\"Message\",\"create_letter\":\"Create Letter\",\"select_subscriber\":\"Select Subscriber\"}', '2018-04-04 06:23:57', '2018-04-07 05:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED DEFAULT NULL,
  `model_type` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `collection_name` varchar(191) CHARACTER SET utf8 NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 NOT NULL,
  `file_name` varchar(191) CHARACTER SET utf8 NOT NULL,
  `disk` varchar(191) CHARACTER SET utf8 NOT NULL,
  `mime_type` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` text CHARACTER SET utf8 NOT NULL,
  `custom_properties` text CHARACTER SET utf8 NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `topic_id`, `sender_id`, `content`, `sent_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Testing messenger...', '2018-02-06 09:17:31', '2018-02-06 03:47:31', '2018-02-06 03:47:31', NULL),
(2, 2, 1, 'sdfsdf', '2018-02-06 09:46:09', '2018-02-06 04:16:09', '2018-02-06 04:16:09', NULL),
(3, 1, 3, 'ok, how can I post auction?', '2018-02-06 10:02:19', '2018-02-06 04:32:19', '2018-02-06 04:32:19', NULL),
(4, 1, 3, 'ok, how can I post auction?', '2018-02-06 10:03:05', '2018-02-06 04:33:05', '2018-02-06 04:33:05', NULL),
(5, 3, 1, 'Hello john,\r\nAttractive auctions available now for reasonable cost..check it out', '2018-03-03 06:29:47', '2018-03-03 00:59:47', '2018-03-03 00:59:47', NULL),
(6, 4, 16, 'Hello Admin,\r\nThank you for information..I will check out..', '2018-03-03 06:41:39', '2018-03-03 01:11:39', '2018-03-03 01:11:39', NULL),
(7, 5, 16, 'Hello Admin, I am very enthusiastic to participate in an auction..please suggest few tips.. ', '2018-04-03 10:26:24', '2018-04-03 10:26:24', '2018-04-03 10:26:24', NULL),
(8, 5, 1, 'Hello John,\r\n\r\nI would love to share top most tips for u...', '2018-04-03 10:35:02', '2018-04-03 10:35:02', '2018-04-03 10:35:02', NULL),
(9, 5, 16, 'ok, I will be waiting..thanks', '2018-04-03 11:18:48', '2018-04-03 11:18:48', '2018-04-03 11:18:48', NULL),
(10, 6, 1, 'Thanks For Registering with Us', '2018-04-11 05:13:34', '2018-04-11 10:43:34', '2018-04-11 10:43:34', NULL),
(11, 7, 1, 'ASDCZSFasdfas', '2018-04-11 06:12:54', '2018-04-11 11:42:54', '2018-04-11 11:42:54', NULL),
(12, 7, 33, 'xfgggghffg', '2018-04-11 06:13:07', '2018-04-11 11:43:07', '2018-04-11 11:43:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_topics`
--

CREATE TABLE `messenger_topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8 NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sent_at` timestamp NULL DEFAULT NULL,
  `sender_read_at` timestamp NULL DEFAULT NULL,
  `receiver_read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger_topics`
--

INSERT INTO `messenger_topics` (`id`, `subject`, `sender_id`, `receiver_id`, `sent_at`, `sender_read_at`, `receiver_read_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hello', 1, 3, '2018-02-06 04:33:05', '2018-04-11 10:13:59', '2018-03-03 00:53:31', '2018-02-06 03:47:30', '2018-04-11 10:13:59', NULL),
(2, 'test', 1, 3, '2018-02-06 04:16:08', '2018-02-06 04:30:40', '2018-02-06 04:31:54', '2018-02-06 04:16:08', '2018-02-06 04:31:54', NULL),
(3, 'Participate in an Auction', 1, 16, '2018-03-03 00:59:47', '2018-03-03 01:12:32', '2018-04-03 10:20:20', '2018-03-03 00:59:47', '2018-04-03 10:20:20', NULL),
(4, 'Regarding Participate in an auction', 16, 1, '2018-03-03 01:11:39', '2018-04-03 10:34:08', '2018-04-11 10:13:40', '2018-03-03 01:11:39', '2018-04-11 10:13:40', NULL),
(5, 'Tips for bidding', 16, 1, '2018-04-03 11:18:47', '2018-04-09 10:01:27', '2018-04-11 10:13:32', '2018-04-03 10:26:24', '2018-04-11 10:13:32', NULL),
(6, 'Hello ', 1, 32, '2018-04-11 10:43:34', '2018-04-11 10:43:34', '2018-04-11 14:48:00', '2018-04-11 10:43:34', '2018-04-11 14:48:00', NULL),
(7, 'fdasdfasd', 1, 33, '2018-04-11 11:43:07', '2018-04-11 13:17:11', '2018-04-11 12:28:28', '2018-04-11 11:42:54', '2018-04-11 13:17:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_01_31_130750_create_1517396870_permissions_table', 1),
(3, '2018_01_31_130752_create_1517396872_roles_table', 1),
(4, '2018_01_31_130756_create_5a71a38c3410d_permission_role_table', 1),
(5, '2018_01_31_130758_create_1517396878_users_table', 1),
(6, '2018_01_31_130802_create_5a71a3926cef5_role_user_table', 1),
(7, '2018_01_31_131617_create_1517397376_user_actions_table', 1),
(8, '2018_01_31_131618_add_5a71a5848a609_relationships_to_useraction_table', 1),
(9, '2018_01_31_131723_create_1517397443_faq_categories_table', 1),
(10, '2018_01_31_131731_create_1517397450_faq_questions_table', 1),
(11, '2018_01_31_131732_add_5a71a5cd70603_relationships_to_faqquestion_table', 1),
(12, '2018_01_31_131751_create_messenger_topics_table', 1),
(13, '2018_01_31_131752_create_messenger_messages_table', 1),
(14, '2018_01_31_131809_create_1517397489_internal_notifications_table', 1),
(15, '2018_01_31_131813_create_5a71a5f51ca5b_internal_notification_user_table', 1),
(16, '2018_01_31_132126_create_1517397686_content_categories_table', 1),
(17, '2018_01_31_132131_create_1517397691_content_tags_table', 1),
(18, '2018_01_31_132136_create_1517397696_content_pages_table', 1),
(19, '2018_01_31_132140_create_5a71a6c4f117d_content_category_content_page_table', 1),
(20, '2018_01_31_132141_create_5a71a6c4f2fe5_content_page_content_tag_table', 1),
(21, '2018_01_31_132316_update_1517397796_users_table', 1),
(22, '2018_01_31_132322_custom_1517397802_approve_existing_users', 1),
(23, '2018_01_31_133738_create_1517398657_site_settings_table', 1),
(24, '2018_01_31_133739_add_5a71aa8691a06_relationships_to_sitesetting_table', 1),
(25, '2018_01_31_135326_create_1517399605_auction_settings_table', 1),
(26, '2018_01_31_135327_add_5a71ae3926aa7_relationships_to_auctionsetting_table', 1),
(27, '2018_01_31_140155_update_1517400115_site_settings_table', 1),
(28, '2018_01_31_140156_add_5a71b0349612b_relationships_to_sitesetting_table', 1),
(29, '2018_01_31_140450_update_1517400290_site_settings_table', 1),
(30, '2018_01_31_140452_add_5a71b0e46a757_relationships_to_sitesetting_table', 1),
(31, '2018_01_31_143613_create_1517402172_currency_settings_table', 1),
(32, '2018_01_31_143614_add_5a71b84055c48_relationships_to_currencysetting_table', 1),
(33, '2018_01_31_144200_create_1517402519_time_settings_table', 1),
(34, '2018_01_31_144201_add_5a71b99b72c14_relationships_to_timesetting_table', 1),
(35, '2018_01_31_145320_update_1517403200_site_settings_table', 1),
(36, '2018_01_31_145322_add_5a71bc42dca9f_relationships_to_sitesetting_table', 1),
(37, '2018_01_31_145434_update_1517403274_site_settings_table', 1),
(38, '2018_01_31_145436_add_5a71bc8c7ac15_relationships_to_sitesetting_table', 1),
(39, '2018_01_31_145705_create_1517403424_seo_settings_table', 1),
(40, '2018_01_31_145706_add_5a71bd23ede57_relationships_to_seosetting_table', 1),
(41, '2018_01_31_150013_update_1517403613_auction_settings_table', 1),
(42, '2018_01_31_150015_add_5a71bddf53f38_relationships_to_auctionsetting_table', 1),
(43, '2018_01_31_154446_create_1517406285_paypals_table', 1),
(44, '2018_01_31_154447_add_5a71c8514eaaa_relationships_to_paypal_table', 1),
(45, '2018_01_31_154612_add_5a71c8a4d9932_relationships_to_paypal_table', 1),
(46, '2018_01_31_155537_create_1517406936_categories_table', 1),
(47, '2018_01_31_155538_add_5a71cadc145cc_relationships_to_category_table', 1),
(48, '2018_01_31_155946_create_1517407185_sub_catogories_table', 1),
(49, '2018_01_31_155947_add_5a71cbd61b94b_relationships_to_subcatogory_table', 1),
(50, '2018_01_31_162019_create_1517408418_creates_table', 1),
(51, '2018_01_31_162020_add_5a71d0a6f36d4_relationships_to_create_table', 1),
(52, '2018_01_31_162557_add_5a71d1f5a359f_relationships_to_create_table', 1),
(53, '2018_02_01_083913_add_5a72b61157f1a_relationships_to_create_table', 1),
(54, '2018_02_01_083913_create_media_table', 1),
(55, '2018_02_01_091144_create_1517469103_testmonies_table', 1),
(56, '2018_02_01_091145_add_5a72bdb3857d2_relationships_to_testmony_table', 1),
(57, '2018_02_01_092143_create_1517469702_social_logins_table', 1),
(58, '2018_02_01_092144_add_5a72c00a80e46_relationships_to_sociallogin_table', 1),
(59, '2018_02_01_093955_create_1517470794_templates_table', 1),
(60, '2018_02_01_093956_add_5a72c44e17acd_relationships_to_template_table', 1),
(61, '2018_02_01_094913_create_1517471352_create_letters_table', 1),
(62, '2018_02_01_094914_add_5a72c67bc1943_relationships_to_createletter_table', 1),
(63, '2018_02_02_075251_create_1517550770_countries_table', 1),
(64, '2018_02_02_075252_add_5a73fcb61cdb5_relationships_to_country_table', 1),
(65, '2018_02_02_075330_add_5a73fcda3de7f_relationships_to_country_table', 1),
(66, '2018_02_02_075419_create_1517550858_states_table', 1),
(67, '2018_02_02_075420_add_5a73fd0e64706_relationships_to_state_table', 1),
(68, '2018_02_02_075511_create_1517550910_cities_table', 1),
(69, '2018_02_02_075512_add_5a73fd41e62db_relationships_to_city_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` text CHARACTER SET utf8 NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('130566fc-9734-4aad-94bc-745aa8fdca55', 'App\\Notifications\\AuctionBidPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Bid Amount\",\"description\":\"john has been Successfully Paid Amount $920\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/16_4685694.jpeg\"}', '2018-04-21 10:12:16', '2018-04-20 18:13:23', '2018-04-21 10:12:16'),
('140b14dc-e74e-4901-8acf-0b1d9a4ac73d', 'App\\Notifications\\AuctionBidPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Bid Amount\",\"description\":\"bidder has been Successfully Paid Amount $12000\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/4_435011.jpeg\"}', '2018-04-23 15:23:34', '2018-04-23 15:16:23', '2018-04-23 15:23:34'),
('16260212-6d5a-4989-a407-f0bf1f5bb912', 'App\\Notifications\\AuctionBidInvoiceNotification', 4, 'App\\User', '{\"title\":\"Auction Invoice sent by Admin\",\"description\":\"Admin has sent an Invoice Carat Genuine Amethyst and White Topaz .925 Sterling Silver Ring\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/bidder\\/my-auctions\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/10_oaAMpSAvNvH3FVB.jpeg\"}', '2018-04-23 12:03:37', '2018-04-23 12:03:16', '2018-04-23 12:03:37'),
('17eb4f60-b644-4098-901d-5ccaadd4f27e', 'App\\Notifications\\AuctionBidInvoiceNotification', 4, 'App\\User', '{\"title\":\"Auction Invoice sent by Admin\",\"description\":\"Admin has sent an Invoice Vintage Macintosh Computer Full Set\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/bidder\\/my-auctions\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/19_QE6L5omAJUqjxuK.jpeg\"}', '2018-04-21 11:49:00', '2018-04-21 11:48:49', '2018-04-21 11:49:00'),
('1c219c65-d42c-4c9a-b536-bfa710b30734', 'App\\Notifications\\AuctionBidInvoiceNotification', 4, 'App\\User', '{\"title\":\"Auction Invoice sent by Admin\",\"description\":\"Admin has sent an Invoice 2 14 CARAT AMETHYSTS 925 STERLING SILVER\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/bidder\\/my-auctions\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/4_X0fkr3qYIjNnVjV.jpeg\"}', '2018-04-23 15:15:29', '2018-04-23 15:15:19', '2018-04-23 15:15:29'),
('216001be-d5a6-433e-9e1c-f075470e06a5', 'App\\Notifications\\AuctionBidPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Bid Amount\",\"description\":\"bidder has been Successfully Paid Amount $14400\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/4_435011.jpeg\"}', '2018-04-21 12:03:40', '2018-04-21 11:49:44', '2018-04-21 12:03:40'),
('2bbc070f-ebd3-4b43-a75b-461f23422001', 'App\\Notifications\\AuctionBidPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Bid Amount\",\"description\":\"bidder has been Successfully Paid Amount $20000\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/4_435011.jpeg\"}', '2018-04-23 14:19:23', '2018-04-23 12:05:20', '2018-04-23 14:19:23'),
('2f73936b-1b7f-4d4f-bfdc-4602e62740a0', 'App\\Notifications\\AuctionBuyPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Auction Amount\",\"description\":\"john has been Successfully Paid Amount   $8000\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/16_4685694.jpeg\"}', '2018-04-21 12:03:40', '2018-04-21 11:44:46', '2018-04-21 12:03:40'),
('32a50e01-b577-49d6-9cf7-67bb74ad70a2', 'App\\Notifications\\AuctionBidInvoiceNotification', 34, 'App\\User', '{\"title\":\"Auction Invoice sent by Admin\",\"description\":\"Admin has sent an Invoice MAC BOOK PRO A1286 4GB 15 IN LAPTOP FACTORY RESET\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/bidder\\/my-auctions\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/18_uKSyD2zKkhPB04a.jpeg\"}', '2018-04-21 10:49:23', '2018-04-21 10:48:43', '2018-04-21 10:49:23'),
('3a414bd5-0639-42f8-ae55-c260044cae6b', 'App\\Notifications\\AuctionBidInvoiceNotification', 1, 'App\\User', '{\"title\":\"Auction invoice to sent to bidder\",\"description\":\"Invoice has been sent to bidder Columbia Grafonola\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/columbia-grafonola-ac6a1ec911c46ca1a1f20bbb846d9b34866f1961-21\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/22_WXbjFzHHUyvxW0p.jpeg\"}', '2018-04-21 10:20:45', '2018-04-21 10:20:11', '2018-04-21 10:20:45'),
('3cb5dd27-eaec-4d32-b568-0f87ec8cf143', 'App\\Notifications\\AuctionBidInvoiceNotification', 1, 'App\\User', '{\"title\":\"Auction invoice to sent to bidder\",\"description\":\"Invoice has been sent to bidder 2 14 CARAT AMETHYSTS 925 STERLING SILVER\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/2-14-carat-amethysts-925-sterling-silver-34567b70234e96a1641fc5ae92461fb845b6322f-3\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/4_X0fkr3qYIjNnVjV.jpeg\"}', '2018-04-25 14:22:57', '2018-04-23 15:15:19', '2018-04-25 14:22:57'),
('410af97a-12dc-466e-bf63-c1f70bdbb19e', 'App\\Notifications\\AuctionBidInvoiceNotification', 1, 'App\\User', '{\"title\":\"Auction invoice to sent to bidder\",\"description\":\"Invoice has been sent to bidder Vintage Macintosh Computer Full Set\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/vintage-macintosh-computer-full-set-37b8d1edf51935f4314f48572439daf8ad1563dd-18\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/19_QE6L5omAJUqjxuK.jpeg\"}', '2018-04-21 12:03:40', '2018-04-21 11:48:49', '2018-04-21 12:03:40'),
('5499c509-db6c-4b0d-aa3e-e42b5a08b90e', 'App\\Notifications\\AuctionBidInvoiceNotification', 1, 'App\\User', '{\"title\":\"Auction invoice to sent to bidder\",\"description\":\"Invoice has been sent to bidder MAC BOOK PRO A1286 4GB 15 IN LAPTOP FACTORY RESET\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/mac-book-pro-a1286-4gb-15-in-laptop-factory-reset-bc5c1a6865be8b6c60dcbfbee7e47b743e7759cd-17\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/18_uKSyD2zKkhPB04a.jpeg\"}', '2018-04-21 10:49:09', '2018-04-21 10:48:43', '2018-04-21 10:49:09'),
('9e15808f-b412-432a-aa8e-6ed57633d990', 'App\\Notifications\\AuctionUpdatedNotification', 3, 'App\\User', '{\"title\":\"An Auction Updated by Admin\",\"description\":\" Admin has updated an auction Columbia Grafonola\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/columbia-grafonola-ac6a1ec911c46ca1a1f20bbb846d9b34866f1961-21\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/22_WXbjFzHHUyvxW0p.jpeg\"}', NULL, '2018-04-21 11:41:12', '2018-04-21 11:41:12'),
('a23ea934-62e7-4ecd-8449-81889dd9d71e', 'App\\Notifications\\AuctionUpdatedNotification', 33, 'App\\User', '{\"title\":\"An Auction Updated by Admin\",\"description\":\" Admin has updated an auction Samsung Ultra HD\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/samsung-ultra-hd-ccfc67455ee0dd7bce3f482168a3d7ca6d81294d-23\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/_Bs2BQVZxbP4iQXa.jpeg\"}', NULL, '2018-04-21 15:24:56', '2018-04-21 15:24:56'),
('ac1ce2b6-93be-4845-9690-1affd8cd7e36', 'App\\Notifications\\AuctionUpdatedNotification', 33, 'App\\User', '{\"title\":\"An Auction Updated by Admin\",\"description\":\" Admin has updated an auction A Digital Hunting Camera model HC-600M\\/G\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/a-digital-hunting-camera-model-hc-600mg-dc2e584268a7ce72417b972a9e214a7777370844-15\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/16_Udlpib5wBEU71zM.jpeg\"}', NULL, '2018-04-21 11:25:35', '2018-04-21 11:25:35'),
('b0900ae4-030b-4b30-a471-27d578c4149c', 'App\\Notifications\\AuctionUpdatedNotification', 13, 'App\\User', '{\"title\":\"An Auction Updated by Admin\",\"description\":\" Admin has updated an auction A Digital Hunting Camera model HC-600M\\/G\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/a-digital-hunting-camera-model-hc-600mg-dc2e584268a7ce72417b972a9e214a7777370844-15\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/16_Udlpib5wBEU71zM.jpeg\"}', NULL, '2018-04-21 11:24:58', '2018-04-21 11:24:58'),
('b577e228-9e65-494f-b327-35641798f29c', 'App\\Notifications\\AuctionBidInvoiceNotification', 4, 'App\\User', '{\"title\":\"Auction Invoice sent by Admin\",\"description\":\"Admin has sent an Invoice Columbia Grafonola\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/bidder\\/my-auctions\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/22_WXbjFzHHUyvxW0p.jpeg\"}', '2018-04-21 10:20:58', '2018-04-21 10:20:11', '2018-04-21 10:20:58'),
('b891562e-b51d-47e9-a35f-8c77ba729c0e', 'App\\Notifications\\AuctionBidPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Bid Amount\",\"description\":\"aruna-yellanuru-14 has been Successfully Paid Amount $11000\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/default.png\"}', '2018-04-21 11:24:15', '2018-04-21 10:52:02', '2018-04-21 11:24:15'),
('bc1238f3-a90a-4ff7-9b64-9cb0aad991f9', 'App\\Notifications\\AuctionBidInvoiceNotification', 1, 'App\\User', '{\"title\":\"Auction invoice to sent to bidder\",\"description\":\"Invoice has been sent to bidder Carat Genuine Amethyst and White Topaz .925 Sterling Silver Ring\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/auctions\\/view\\/carat-genuine-amethyst-and-white-topaz-925-sterling-silver-ring-002e61fc2145d4228376cac1ec07f842c6b63e53-9\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/auctions\\/thumbnail\\/10_oaAMpSAvNvH3FVB.jpeg\"}', '2018-04-23 12:50:26', '2018-04-23 12:03:16', '2018-04-23 12:50:26'),
('cc5a3f7b-cb6d-4826-8ac0-f948e378ec74', 'App\\Notifications\\AuctionBidPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Bid Amount\",\"description\":\"bidder has been Successfully Paid Amount $6200\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/4_435011.jpeg\"}', '2018-04-21 10:23:59', '2018-04-21 10:23:18', '2018-04-21 10:23:59'),
('cde7f247-6790-4916-bfc3-d26481404adf', 'App\\Notifications\\AuctionBuyPaymentAdmindb', 1, 'App\\User', '{\"title\":\"User Paid Auction Amount\",\"description\":\"bidder has been Successfully Paid Amount   $70000\",\"url\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/payments\\/index\",\"image\":\"http:\\/\\/phpstack-127383-460762.cloudwaysapps.com\\/public\\/uploads\\/users\\/thumbnail\\/4_435011.jpeg\"}', '2018-04-21 10:41:59', '2018-04-21 10:41:28', '2018-04-21 10:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `auction_id` int(10) UNSIGNED DEFAULT NULL,
  `ab_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_gateway` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `payment_for` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `paid_amount` float(10,2) DEFAULT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `transaction_id` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `transaction_record` text CHARACTER SET utf8,
  `billing_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `billing_email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `billing_phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `billing_country` int(10) DEFAULT NULL,
  `billing_state` int(10) DEFAULT NULL,
  `billing_city` int(10) DEFAULT NULL,
  `billing_address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_country` int(10) DEFAULT NULL,
  `shipping_state` int(10) DEFAULT NULL,
  `shipping_city` int(10) DEFAULT NULL,
  `shipping_address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `slug`, `user_id`, `auction_id`, `ab_id`, `payment_gateway`, `payment_for`, `paid_amount`, `payment_status`, `transaction_id`, `transaction_record`, `billing_name`, `billing_email`, `billing_phone`, `billing_country`, `billing_state`, `billing_city`, `billing_address`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_country`, `shipping_state`, `shipping_city`, `shipping_address`, `created_at`, `updated_at`) VALUES
(79, 'edd399872a7e4af6c71e58a98043feb6eaf941cd', 16, 22, NULL, 'paypal', 'buy_auction', 7000.00, 'success', '0SV28176KF632462L', '{\"payer_email\":\"conqtech7-buyer@gmail.com\",\"payer_id\":\"F2TMN4DXTNFZS\",\"payer_status\":\"VERIFIED\",\"first_name\":\"test\",\"last_name\":\"buyer\",\"address_name\":\"test buyer\",\"address_street\":\"Flat no. 507 Wing A Raheja Residency\",\"address_city\":\"Mumbai\",\"address_state\":\"Maharashtra\",\"address_country_code\":\"IN\",\"address_zip\":\"400097\",\"residence_country\":\"IN\",\"txn_id\":\"0SV28176KF632462L\",\"mc_currency\":\"USD\",\"mc_gross\":\"7000.00\",\"protection_eligibility\":\"INELIGIBLE\",\"payment_gross\":\"7000.00\",\"payment_status\":\"Pending\",\"pending_reason\":\"unilateral\",\"payment_type\":\"instant\",\"item_name1\":\"Buy Auction\",\"quantity1\":\"1\",\"mc_gross_1\":\"7000.00\",\"num_cart_items\":\"1\",\"txn_type\":\"cart\",\"payment_date\":\"2018-04-19T12:58:45Z\",\"business\":\"digionlineexam@gmail.com\",\"notify_version\":\"UNVERSIONED\",\"verify_sign\":\"AQTo7-jGcJ14pSanENw67ZRigHYfAMq.vEraazOYemVsyL1xIizZ-Cuc\"}', 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-19 18:28:11', '2018-04-19 18:28:51'),
(128, 'b0cc541a3ebe2439b5a1e15635326573c4962445-1', 4, 22, 5, 'paypal', 'bidding', 6200.00, 'success', '7YC97489PY5330429', '{\"payer_email\":\"conqtech7-buyer@gmail.com\",\"payer_id\":\"F2TMN4DXTNFZS\",\"payer_status\":\"VERIFIED\",\"first_name\":\"test\",\"last_name\":\"buyer\",\"address_name\":\"test buyer\",\"address_street\":\"Flat no. 507 Wing A Raheja Residency\",\"address_city\":\"Mumbai\",\"address_state\":\"Maharashtra\",\"address_country_code\":\"IN\",\"address_zip\":\"400097\",\"residence_country\":\"IN\",\"txn_id\":\"7YC97489PY5330429\",\"mc_currency\":\"USD\",\"mc_gross\":\"6200.00\",\"protection_eligibility\":\"INELIGIBLE\",\"payment_gross\":\"6200.00\",\"payment_status\":\"Pending\",\"pending_reason\":\"unilateral\",\"payment_type\":\"instant\",\"item_name1\":\"Bid Payment\",\"quantity1\":\"1\",\"mc_gross_1\":\"6200.00\",\"num_cart_items\":\"1\",\"txn_type\":\"cart\",\"payment_date\":\"2018-04-21T04:53:08Z\",\"business\":\"digionlineexam@gmail.com\",\"notify_version\":\"UNVERSIONED\",\"verify_sign\":\"AyrrLGLfYacCYNwpFDpZiX1WE15pAvUduvw1guSvGz1DdbxfAofm8dN3\"}', 'Bidder MIch', 'bidder@bidder.com', '7897897987', 105, 1, 3, 'Main Road', 'Bidder MIch', 'bidder@bidder.com', '7897897897', 105, 3, 23, 'Main Road', '2018-04-21 10:21:18', '2018-04-21 10:23:17'),
(129, 'f0f5196c9e0302a1c8c635fa99deadb434914557-2', 4, 19, NULL, 'payu', 'buy_auction', 70000.00, 'success', 'b3cd2b765db08e342123', '{\"mihpayid\":\"403993715517523182\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"do3vAdBt\",\"txnid\":\"b3cd2b765db08e342123\",\"amount\":\"70000.0\",\"addedon\":\"2018-04-21 10:40:56\",\"productinfo\":\"Vintage Macintosh Computer Full Set\",\"firstname\":\"Bidder MIch\",\"lastname\":\"\",\"address1\":\"\",\"address2\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"bidder@bidder.com\",\"phone\":\"8712345655\",\"udf1\":\"\",\"udf2\":\"\",\"udf3\":\"\",\"udf4\":\"\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"49f7bdb6b2f8bd50b737092edc5f7518422f3e9c69624ebb69d6d5ef1da39f9016b5fca3b09743fd1a80f717343498021103df87439f71ee2a750884fa62a9f8\",\"field1\":\"928951\",\"field2\":\"855519\",\"field3\":\"20180421\",\"field4\":\"MC\",\"field5\":\"412617878981\",\"field6\":\"00\",\"field7\":\"0\",\"field8\":\"3DS\",\"field9\":\" Verification of Secure Hash Failed: E700 -- Approved -- Transaction Successful -- Unable to be determined--E000\",\"PG_TYPE\":\"AXISPG\",\"encryptedPaymentId\":\"010236D015A12B10880A0528514236E5\",\"bank_ref_num\":\"928951\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"name_on_card\":\"Test\",\"cardnum\":\"401200XXXXXX1112\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"70000.0\\\"}\",\"payuMoneyId\":\"1111684929\",\"discount\":\"0.00\",\"net_amount_debit\":\"70000\"}', 'Bidder MIch', 'bidder@bidder.com', '7897897987', 105, 1, 3, 'Main Road', 'Bidder MIch', 'bidder@bidder.com', '7897897897', 105, 3, 23, 'Main Road', '2018-04-21 10:40:08', '2018-04-21 10:41:28'),
(130, '0455dce80315eb9bc09498d38b868941ec772a10-3', 34, 18, 9, 'stripe', 'bidding', 11000.00, 'success', NULL, NULL, 'Aruna Yellanuru', 'arunayellanuru@gmail.com', '7893694775', 105, 2, 8, 'Test Address', 'Aruna Yellanuru', 'arunayellanuru@gmail.com', '7893694775', 105, 2, 8, 'Shipping Address *', '2018-04-21 10:52:01', '2018-04-21 10:52:02'),
(132, '968af15e6cced021a624ba29c1498b8a35f5ca66-4', 4, 19, 7, 'stripe', 'bidding', 14400.00, 'success', 'ch_1CJF4VEJ9YFDHSWmTEGvq5PH', NULL, 'Bidder MIch', 'bidder@bidder.com', '7897897987', 105, 1, 3, 'Main Road', 'Bidder MIch', 'bidder@bidder.com', '7897897897', 105, 3, 23, 'Main Road', '2018-04-21 11:49:43', '2018-04-21 11:49:44'),
(133, 'f0db7a54ff795142f9f70ccc5affdaec3a27aedd-5', 4, 10, 11, 'payu', 'bidding', 20000.00, 'success', '9842031eddca431f05e8', '{\"mihpayid\":\"403993715517526503\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"do3vAdBt\",\"txnid\":\"9842031eddca431f05e8\",\"amount\":\"20000.0\",\"addedon\":\"2018-04-23 12:04:47\",\"productinfo\":\"Carat Genuine Amethyst and White Topaz .925 Sterling Silver Ring\",\"firstname\":\"Bidder MIch\",\"lastname\":\"\",\"address1\":\"\",\"address2\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"bidder@bidder.com\",\"phone\":\"8712345655\",\"udf1\":\"\",\"udf2\":\"\",\"udf3\":\"\",\"udf4\":\"\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"d2eea60c807180654fd9ed0558af3040e8d8b66667ba660bbbcc7de3ebf1f937c1788ae0ecc9399b5299600c0ccf87d42f1501d097c3d709a0c58b22f3aca1b0\",\"field1\":\"890396\",\"field2\":\"709888\",\"field3\":\"20180423\",\"field4\":\"MC\",\"field5\":\"544585647829\",\"field6\":\"00\",\"field7\":\"0\",\"field8\":\"3DS\",\"field9\":\" Verification of Secure Hash Failed: E700 -- Approved -- Transaction Successful -- Unable to be determined--E000\",\"PG_TYPE\":\"AXISPG\",\"encryptedPaymentId\":\"67A923E6B1CBA570AB09E222814A3D8E\",\"bank_ref_num\":\"890396\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"name_on_card\":\"Test\",\"cardnum\":\"401200XXXXXX1112\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"20000.0\\\"}\",\"payuMoneyId\":\"1111686116\",\"discount\":\"0.00\",\"net_amount_debit\":\"20000\"}', 'Bidder MIch', 'bidder@bidder.com', '7897897987', 105, 1, 3, 'Main Road', 'Bidder MIch', 'bidder@bidder.com', '7897897897', 105, 3, 23, 'Main Road', '2018-04-23 12:04:00', '2018-04-23 12:05:19'),
(134, '1d694a732c2631f6901838da8f6d125e2d85141b-6', 4, 4, 13, 'stripe', 'bidding', 12000.00, 'success', 'ch_1CK1FaEJ9YFDHSWm3f9DWCdq', NULL, 'Bidder MIch', 'bidder@bidder.com', '7897897987', 105, 1, 3, 'Main Road', 'Bidder MIch', 'bidder@bidder.com', '7897897897', 105, 3, 23, 'Main Road', '2018-04-23 15:16:22', '2018-04-23 15:16:23'),
(135, '9db7d4b9d72c780e4e4bf6720e934c18de5931fd-7', 16, 16, NULL, 'paypal', 'buy_auction', NULL, 'pending', NULL, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-25 14:38:51', '2018-04-25 14:38:51'),
(136, 'b9e7149e42497773b2f0da080dba67fe1acc9f84-8', 16, 16, NULL, 'paypal', 'buy_auction', NULL, 'pending', NULL, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-25 14:42:01', '2018-04-25 14:42:01'),
(137, '129d70bf384e65e23273c4bcd66f1465486ee8b9-9', 16, 16, NULL, 'paypal', 'buy_auction', NULL, 'pending', NULL, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-25 14:42:28', '2018-04-25 14:42:28'),
(138, '6a658b46d410ab45748a17cce7b8439e63953a4f-10', 16, 16, NULL, 'paypal', 'buy_auction', NULL, 'pending', NULL, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-25 14:43:45', '2018-04-25 14:43:45'),
(139, '5efd3eadf27c5cf4840c56ae11a3d3f121a4a2fe-11', 16, 16, NULL, 'paypal', 'buy_auction', NULL, 'cancelled', NULL, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-25 14:46:38', '2018-04-25 14:47:18'),
(140, 'c53ebcba0e0e4df8757b22798e2f185190c68977-12', 16, 16, NULL, 'paypal', 'buy_auction', NULL, 'pending', NULL, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds', '2018-04-25 14:51:00', '2018-04-25 14:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'user_management_access', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(2, 'user_management_create', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(3, 'user_management_edit', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(4, 'user_management_view', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(5, 'user_management_delete', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(6, 'permission_access', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(7, 'permission_create', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(8, 'permission_edit', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(9, 'permission_view', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(10, 'permission_delete', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(11, 'role_access', '2018-02-02 00:41:04', '2018-02-02 00:41:04'),
(12, 'role_create', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(13, 'role_edit', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(14, 'role_view', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(15, 'role_delete', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(16, 'user_access', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(17, 'user_create', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(18, 'user_edit', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(19, 'user_view', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(20, 'user_delete', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(21, 'user_action_access', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(22, 'user_action_create', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(23, 'user_action_edit', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(24, 'user_action_view', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(25, 'user_action_delete', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(26, 'faq_management_access', '2018-02-02 00:41:05', '2018-02-02 00:41:05'),
(27, 'faq_management_create', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(28, 'faq_management_edit', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(29, 'faq_management_view', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(30, 'faq_management_delete', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(31, 'faq_category_access', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(32, 'faq_category_create', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(33, 'faq_category_edit', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(34, 'faq_category_view', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(35, 'faq_category_delete', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(36, 'faq_question_access', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(37, 'faq_question_create', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(38, 'faq_question_edit', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(39, 'faq_question_view', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(40, 'faq_question_delete', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(41, 'internal_notification_access', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(42, 'internal_notification_create', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(43, 'internal_notification_edit', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(44, 'internal_notification_view', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(45, 'internal_notification_delete', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(46, 'content_management_access', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(47, 'content_management_create', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(48, 'content_management_edit', '2018-02-02 00:41:06', '2018-02-02 00:41:06'),
(49, 'content_management_view', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(50, 'content_management_delete', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(51, 'content_category_access', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(52, 'content_category_create', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(53, 'content_category_edit', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(54, 'content_category_view', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(55, 'content_category_delete', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(56, 'content_tag_access', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(57, 'content_tag_create', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(58, 'content_tag_edit', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(59, 'content_tag_view', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(60, 'content_tag_delete', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(61, 'content_page_access', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(62, 'content_page_create', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(63, 'content_page_edit', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(64, 'content_page_view', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(65, 'content_page_delete', '2018-02-02 00:41:07', '2018-02-02 00:41:07'),
(66, 'setting_access', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(67, 'site_setting_access', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(68, 'site_setting_create', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(69, 'site_setting_edit', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(70, 'site_setting_view', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(71, 'site_setting_delete', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(72, 'auction_setting_access', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(73, 'auction_setting_create', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(74, 'auction_setting_edit', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(75, 'auction_setting_view', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(76, 'auction_setting_delete', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(77, 'currency_setting_access', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(78, 'currency_setting_create', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(79, 'currency_setting_edit', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(80, 'currency_setting_view', '2018-02-02 00:41:08', '2018-02-02 00:41:08'),
(81, 'currency_setting_delete', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(82, 'time_setting_access', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(83, 'time_setting_create', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(84, 'time_setting_edit', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(85, 'time_setting_view', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(86, 'time_setting_delete', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(87, 'seo_setting_access', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(88, 'seo_setting_create', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(89, 'seo_setting_edit', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(90, 'seo_setting_view', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(91, 'seo_setting_delete', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(93, 'payment_gateway_access', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(94, 'paypal_access', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(95, 'paypal_create', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(96, 'paypal_edit', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(97, 'paypal_view', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(98, 'paypal_delete', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(99, 'category_access', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(100, 'category_create', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(101, 'category_edit', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(102, 'category_view', '2018-02-02 00:41:09', '2018-02-02 00:41:09'),
(103, 'category_delete', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(104, 'sub_catogory_access', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(105, 'sub_catogory_create', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(106, 'sub_catogory_edit', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(107, 'sub_catogory_view', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(108, 'sub_catogory_delete', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(109, 'auction_access', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(110, 'create_access', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(111, 'create_create', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(112, 'create_edit', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(113, 'create_view', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(114, 'create_delete', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(115, 'testmony_access', '2018-02-02 00:41:10', '2018-02-02 00:41:10'),
(116, 'testmony_create', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(117, 'testmony_edit', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(118, 'testmony_view', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(119, 'testmony_delete', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(120, 'social_login_access', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(121, 'social_login_create', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(122, 'social_login_edit', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(123, 'social_login_view', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(124, 'social_login_delete', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(125, 'email_setting_access', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(126, 'template_access', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(127, 'template_create', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(128, 'template_edit', '2018-02-02 00:41:11', '2018-02-02 00:41:11'),
(129, 'template_view', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(130, 'template_delete', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(131, 'news_letter_access', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(132, 'create_letter_access', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(133, 'create_letter_create', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(134, 'create_letter_edit', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(135, 'create_letter_view', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(136, 'create_letter_delete', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(137, 'social_network_access', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(138, 'location_master_access', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(139, 'country_access', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(140, 'country_create', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(141, 'country_edit', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(142, 'country_view', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(143, 'country_delete', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(144, 'state_access', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(145, 'state_create', '2018-02-02 00:41:12', '2018-02-02 00:41:12'),
(146, 'state_edit', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(147, 'state_view', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(148, 'state_delete', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(149, 'city_access', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(150, 'city_create', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(151, 'city_edit', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(152, 'city_view', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(153, 'city_delete', '2018-02-02 00:41:13', '2018-02-02 00:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(19, 2),
(14, 3),
(109, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `display_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator (can create other users)', 'admin', 'Admin', 'Admin', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(2, 'Seller', 'seller', 'Seller', 'Seller', '2018-02-02 00:41:13', '2018-02-02 00:41:13'),
(3, 'Bidder', 'bidder', 'bidder', 'Bidder', '2018-02-02 00:41:13', '2018-02-02 00:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(21, 3, 12),
(23, 1, 1),
(32, 2, 3),
(46, 2, 15),
(48, 2, 13),
(50, 2, 17),
(53, 3, 16),
(54, 3, 4),
(55, 2, 14),
(69, 3, 30),
(70, 3, 31),
(72, 2, 33),
(73, 3, 34),
(76, 2, 32),
(77, 3, 29);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `key` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `settings_data` text CHARACTER SET utf8,
  `description` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `key`, `slug`, `image`, `settings_data`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Email Settings', 'email_settings', 'email-settings', NULL, '{\"mail_driver\":{\"value\":\"smtp\",\"type\":\"select\",\"extra\":{\"total_options\":\"8\",\"options\":{\"smtp\":\"SMTP\",\"mail\":\"Mail\",\"sparkpost\":\"Sparkpost\",\"sendmail\":\"Sendmail\",\"mailgun\":\"Mailgun\",\"mandrill\":\"Mandrill\",\"ses\":\"SES\",\"log\":\"Log\"}},\"tool_tip\":\"Driver\"},\"mail_host\":{\"value\":\"MAIL_HOST\",\"type\":\"text\",\"extra\":{\"total_options\":\"8\",\"options\":{\"smtp\":\"SMTP\",\"mail\":\"Mail\",\"sparkpost\":\"Sparkpost\",\"sendmail\":\"Sendmail\",\"mailgun\":\"Mailgun\",\"mandrill\":\"Mandrill\",\"ses\":\"SES\",\"log\":\"Log\"}},\"tool_tip\":\"Mail Host\"},\"mail_port\":{\"value\":\"2525\",\"type\":\"text\",\"extra\":{\"total_options\":\"8\",\"options\":{\"smtp\":\"SMTP\",\"mail\":\"Mail\",\"sparkpost\":\"Sparkpost\",\"sendmail\":\"Sendmail\",\"mailgun\":\"Mailgun\",\"mandrill\":\"Mandrill\",\"ses\":\"SES\",\"log\":\"Log\"}},\"tool_tip\":\"Mail Port no\"},\"mail_username\":{\"value\":\"MAIL_USERNAME\",\"type\":\"text\",\"extra\":{\"total_options\":\"8\",\"options\":{\"smtp\":\"SMTP\",\"mail\":\"Mail\",\"sparkpost\":\"Sparkpost\",\"sendmail\":\"Sendmail\",\"mailgun\":\"Mailgun\",\"mandrill\":\"Mandrill\",\"ses\":\"SES\",\"log\":\"Log\"}},\"tool_tip\":\"Mail Username\"},\"mail_password\":{\"value\":\"d22f730d4faaeb\",\"type\":\"password\",\"extra\":{\"total_options\":\"8\",\"options\":{\"smtp\":\"SMTP\",\"mail\":\"Mail\",\"sparkpost\":\"Sparkpost\",\"sendmail\":\"Sendmail\",\"mailgun\":\"Mailgun\",\"mandrill\":\"Mandrill\",\"ses\":\"SES\",\"log\":\"Log\"}},\"tool_tip\":\"Password\"},\"mail_encryption\":{\"value\":\"null\",\"type\":\"text\",\"extra\":{\"total_options\":\"8\",\"options\":{\"smtp\":\"SMTP\",\"mail\":\"Mail\",\"sparkpost\":\"Sparkpost\",\"sendmail\":\"Sendmail\",\"mailgun\":\"Mailgun\",\"mandrill\":\"Mandrill\",\"ses\":\"SES\",\"log\":\"Log\"}},\"tool_tip\":\"Mail Encryption\"}}', 'Contains all the settings related to emails', '2016-08-28 23:55:26', '2018-04-27 06:02:08'),
(4, 'Paypal Settings', 'paypal', 'paypal', 'Zw7qp7b7lc2yCvM.png', '{\"email\":{\"value\":\"paypalaccount@gmail.com\",\"type\":\"email\",\"extra\":\"\",\"tool_tip\":\"Paypal Email\"},\"currency\":{\"value\":\"USD\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Default Currency\"},\"image\":{\"value\":\"Jzzi3R580kd0gS1.png\",\"type\":\"file\",\"extra\":\"\",\"tool_tip\":\"Image to display at Paypal payment gateway\"},\"account_type\":{\"value\":\"sandbox\",\"type\":\"select\",\"extra\":{\"total_options\":\"2\",\"options\":{\"sandbox\":\"Sandbox\",\"live\":\"Live\"}},\"tool_tip\":\"Account Type Development (sandbox)\\/ Production (live)\"}}', 'Contains paypal config details', '2016-09-08 03:38:30', '2018-04-27 06:02:20'),
(5, 'PayU Settings', 'payu', 'payu', NULL, '{\"payu_merchant_key\":{\"value\":\"PAYU_METCHANT_KEY\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"PayU Merchent Key\"},\"payu_salt\":{\"value\":\"PAYU_SALT\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"PayU Salt\"},\"payu_working_key\":{\"value\":\"PAYU_WORKING_KEY\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"PayU Working Key\"},\"payu_testmode\":{\"value\":\"true\",\"type\":\"select\",\"extra\":{\"total_options\":\"2\",\"options\":{\"true\":\"Yes\",\"false\":\"No\"}},\"tool_tip\":\"Set PayU in Test Mode\"}}', 'Payu Settings', '2016-09-09 01:25:33', '2018-04-27 06:01:13'),
(6, 'Site Settings', 'site_settings', 'site-settings', NULL, '{\"site_title\":{\"value\":\"Global Auction System\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Site Title\"},\"site_logo\":{\"value\":\"UNxxG4jztifG2qh.png\",\"type\":\"file\",\"extra\":\"\",\"tool_tip\":\"Site Logo\"},\"site_favicon\":{\"value\":\"H0DUiWpMJYMGEPP.png\",\"type\":\"file\",\"extra\":\"\",\"tool_tip\":\"Favicon\"},\"site_address\":{\"value\":\"Silicon Valley, Image Gardens line\",\"type\":\"textarea\",\"extra\":\"\",\"tool_tip\":\"Address\"},\"site_city\":{\"value\":\"Hyderabad\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"City\"},\"site_state\":{\"value\":\"Telangana\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"State\"},\"site_country\":{\"value\":\"India\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Country\"},\"site_zipcode\":{\"value\":\"500081\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Postal Code\"},\"country_code\":{\"value\":\"91\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"\"},\"site_phone\":{\"value\":\"1234567891\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Phone\"},\"system_timezone\":{\"value\":\"Asia\\/Kolkata\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Refer http:\\/\\/php.net\\/manual\\/en\\/timezones.php\"},\"phone_number_expression\":{\"value\":\"\\/^\\\\d{10}$\\/\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Give regular expression for your phone no.\"},\"currency_code\":{\"value\":\"$\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Add Currency Code\"},\"contact_email\":{\"value\":\"info@auction.com\",\"type\":\"email\",\"extra\":\"\",\"tool_tip\":\"Contact Email\"},\"rights_reserved\":{\"value\":\"@2018 Auction All Rights Reserved.\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Rights Reserved\"},\"date_format\":{\"value\":\"Y-m-d\",\"type\":\"select\",\"extra\":{\"total_options\":\"3\",\"options\":{\"d-m-Y\":\"d-m-Y\",\"m-d-Y\":\"m-d-Y\",\"Y-m-d\":\"Y-m-d\"}},\"tool_tip\":\"Date Format\"},\"date_format_js\":{\"value\":\"yyyy-mm-dd\",\"type\":\"select\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Javascript Date Format\"},\"home_page_caption\":{\"value\":\"Online Auction Bidding Platform\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Home Page Caption\"},\"home_page_tagline\":{\"value\":\"The worlds premier auctions and gallaries\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Home Page Tagline\"},\"home_slider_one\":{\"value\":\"9GZ8LeXFyHkDdtH.png\",\"type\":\"file\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Home Slider\"},\"home_slider_two\":{\"value\":\"yDN66osjsr6TBiP.png\",\"type\":\"file\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Home Slider\"},\"home_slider_three\":{\"value\":\"2wPySlLqSOGJoYL.png\",\"type\":\"file\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Home Slider\"},\"home_slider_four\":{\"value\":\"UZAifBVvyoqaH99.jpg\",\"type\":\"file\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Home Slider\"},\"latitude\":{\"value\":\"17.451603\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Latitude\"},\"longitude\":{\"value\":\"78.380930\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"yyyy-mm-dd\":\"yyyy-mm-dd\",\"mm-dd-yyyy\":\"mm-dd-yyyy\",\"dd-mm-yyyy\":\"dd-mm-yyyy\"}},\"tool_tip\":\"Longitude\"},\"theme_color\":{\"value\":\"ten.css\",\"type\":\"select\",\"extra\":{\"total_options\":\"15\",\"options\":{\"one.css\":\"Cornflower Blue (#668ee6)\",\"two.css\":\"Cinnabar (#e84e40)\",\"three.css\":\"Pacific Blue (#0798BC)\",\"four.css\":\"Niagara (#069a97)\",\"five.css\":\"Apple (#58c433)\",\"six.css\":\"Fuchsia Blue (#7E57C2)\",\"seven.css\":\"Persian Green (#009688)\",\"eight.css\":\"French Rose (#EC407A)\",\"nine.css\":\"Sushi (#8BC34A)\",\"ten.css\":\"Indigo (#5c6bc0)\",\"eleven.css\":\"Orange Peel (#ff9800)\",\"twelve.css\":\"Monza (#ce0c21)\",\"thirteen.css\":\"Sushi (#7aa93c)\",\"fourteen.css\":\"Cerulean Blue (#3065b5)\",\"fifteen.css\":\"Sun (#ffae11)\"}},\"tool_tip\":\"Site Theme Color\"},\"api_key\":{\"value\":\"GOOGLE_API_KEY\",\"type\":\"text\",\"extra\":{\"total_options\":\"15\",\"options\":{\"one.css\":\"Cornflower Blue (#668ee6)\",\"two.css\":\"Cinnabar (#e84e40)\",\"three.css\":\"Pacific Blue (#0798BC)\",\"four.css\":\"Niagara (#069a97)\",\"five.css\":\"Apple (#58c433)\",\"six.css\":\"Fuchsia Blue (#7E57C2)\",\"seven.css\":\"Persian Green (#009688)\",\"eight.css\":\"French Rose (#EC407A)\",\"nine.css\":\"Sushi (#8BC34A)\",\"ten.css\":\"Indigo (#5c6bc0)\",\"eleven.css\":\"Orange Peel (#ff9800)\",\"twelve.css\":\"Monza (#ce0c21)\",\"thirteen.css\":\"Sushi (#7aa93c)\",\"fourteen.css\":\"Cerulean Blue (#3065b5)\",\"fifteen.css\":\"Sun (#ffae11)\"}},\"tool_tip\":\"API key for Google Map\"}}', 'Here you can manage the title, logo, favicon and all general settings', '2016-09-29 06:46:54', '2018-04-27 06:00:33'),
(7, 'Seo Settings', 'seo_settings', 'seo-settings-1', NULL, '{\"meta_description\":{\"value\":\"Global Auction System\",\"type\":\"textarea\",\"extra\":\"\",\"tool_tip\":\"Site Meta Description\"},\"meta_keywords\":{\"value\":\"Global Auction System\",\"type\":\"textarea\",\"extra\":\"\",\"tool_tip\":\"Site Meta Keywords\"},\"google_analytics\":{\"value\":\"<!-- Google Analytics -->\\r\\n<script>\\r\\n(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\\r\\n(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\\r\\nm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\\r\\n})(window,document,\'script\',\'https:\\/\\/www.google-analytics.com\\/analytics.js\',\'ga\');\\r\\n\\r\\nga(\'create\', \'UA-XXXXX-Y\', \'auto\');\\r\\nga(\'send\', \'pageview\');\\r\\n<\\/script>\\r\\n<!-- End Google Analytics -->\",\"type\":\"textarea\",\"extra\":\"\",\"tool_tip\":\"Update your google analytics code\"}}', 'Contains all SEO settings', '2016-09-30 13:33:46', '2018-04-27 06:00:48'),
(9, 'Modules Management', 'module', 'module', NULL, '{\"payu\":{\"value\":\"1\",\"type\":\"checkbox\",\"extra\":\"\",\"tool_tip\":\"Enable\\/Disable PayU Payment Gateway\"},\"paypal\":{\"value\":\"1\",\"type\":\"checkbox\",\"extra\":\"\",\"tool_tip\":\"Enable\\/Disable Paypal Payment Gateway\"},\"stripe\":{\"value\":\"1\",\"type\":\"checkbox\",\"extra\":\"\",\"tool_tip\":\"Enable\\/Disable Stripe Payment Gateway\"},\"facebook_login\":{\"value\":\"1\",\"type\":\"checkbox\",\"extra\":\"\",\"tool_tip\":\"Enable\\/Disable Facebook Login\"},\"google_plus_login\":{\"value\":\"1\",\"type\":\"checkbox\",\"extra\":\"\",\"tool_tip\":\"Enable\\/Disable Google+ Login\"}}', 'You can enable or disable modules in the system', '2016-10-12 11:36:22', '2018-04-21 11:42:11'),
(12, 'Social Logins', 'social_logins', 'social-logins', NULL, '{\"facebook_client_id\":{\"value\":\"FACEBOOK_CLIENT_ID\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Facebook Client ID\"},\"facebook_client_secret\":{\"value\":\"FACEBOOK_CLIENT_SECRET\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Facebook Client Secret\"},\"facebook_redirect_url\":{\"value\":\"https:\\/\\/yourdomain\\/facebook\\/callback\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"It should be http (or) https:\\/\\/yourservername\\/auth\\/google\\/callback\"},\"google_client_id\":{\"value\":\"GOOGLE_CLIENT_ID\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Google Plus Client ID\"},\"google_client_secret\":{\"value\":\"GOOGLE_CLIENT_SECRET\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Google Client Secret Key\"},\"google_redirect_url\":{\"value\":\"http:\\/\\/yourdomain\\/google\\/callback\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"http (or) https:\\/\\/yourserver.com\\/auth\\/google\\/callback\"}}', 'Add/Update Settings for Social Logins (Facebook and Google plus)', '2016-10-28 10:56:37', '2018-04-27 06:01:52'),
(14, 'SMS Settings', 'sms_settings', 'sms-settings', NULL, '{\"sms_driver\":{\"value\":\"plivo\",\"type\":\"select\",\"extra\":{\"total_options\":\"3\",\"options\":{\"plivo\":\"PLIVO\",\"twilio\":\"TWILIO\"}},\"tool_tip\":\"Select SMS driver\"},\"plivo_auth_id\":{\"value\":\"PLIVO_AUTH_ID\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"plivo\":\"PLIVO\",\"twilio\":\"TWILIO\"}},\"tool_tip\":\"Enter Plivo Auth ID\"},\"plivo_auth_token\":{\"value\":\"PLIVO_AUTH_TOKEN\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"plivo\":\"PLIVO\",\"twilio\":\"TWILIO\"}},\"tool_tip\":\"Plivo Auth Token\"},\"twilio_sid\":{\"value\":\"TWILIO_SID\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"plivo\":\"PLIVO\",\"twilio\":\"TWILIO\"}},\"tool_tip\":\"Twilio SID\"},\"twilio_token\":{\"value\":\"TWILIO_TOKEN\",\"type\":\"text\",\"extra\":{\"total_options\":\"3\",\"options\":{\"plivo\":\"PLIVO\",\"twilio\":\"TWILIO\"}},\"tool_tip\":\"Twilio Token\"}}', 'Contains settings for SMS', '2017-01-25 05:10:09', '2018-04-27 05:59:43'),
(15, 'Auction Settings', 'auction_settings', 'auction-settings-11', NULL, '{\"admin_commission_type\":{\"value\":\"free\",\"type\":\"select\",\"extra\":{\"total_options\":\"2\",\"options\":{\"free\":\"Free\",\"fixed\":\"Fixed\",\"auction\":\"Per Auction\"}},\"tool_tip\":\"Auction Commision for Auctions\"},\"commission_value\":{\"value\":\"0\",\"type\":\"text\",\"extra\":{\"total_options\":\"2\",\"options\":{\"free\":\"Free\",\"fixed\":\"Fixed\",\"auction\":\"Per Auction\"}},\"tool_tip\":\"Commision value\"},\"enable_featured_items\":{\"value\":\"Yes\",\"type\":\"select\",\"extra\":{\"total_options\":\"2\",\"options\":{\"Yes\":\"Yes\",\"No\":\"No\"}},\"tool_tip\":\"Enable featured items\"},\"active_picture_gallary\":{\"value\":\"Yes\",\"type\":\"select\",\"extra\":{\"total_options\":\"2\",\"options\":{\"Yes\":\"Yes\",\"No\":\"No\"}},\"tool_tip\":\"Activate picture gallery\"},\"max_number_of_pictures\":{\"value\":\"5\",\"type\":\"number\",\"extra\":{\"total_options\":\"2\",\"options\":{\"Yes\":\"Yes\",\"No\":\"No\"}},\"tool_tip\":\"Max number of pictures in Auction Details Page Set Upto 5\"},\"update_auction_status_cronjob\":{\"value\":\"Yes\",\"type\":\"select\",\"extra\":{\"total_options\":\"2\",\"options\":{\"Yes\":\"Yes\",\"No\":\"No\"}},\"tool_tip\":\"Update Auction Status as Closed when End Date crosses through cron job\"},\"cron_jobs_run\":{\"value\":\"five_mins\",\"type\":\"select\",\"extra\":{\"total_options\":\"5\",\"options\":{\"five_mins\":\"Every 5 Mins\",\"hourly\":\"Hourly\",\"daily\":\"Daily\",\"weekly\":\"Weekly\",\"monthly\":\"Monthly\"}},\"tool_tip\":\"Cronjob set time\"}}', 'Auction settings', '2018-01-18 23:22:08', '2018-04-21 11:46:48'),
(16, 'Social Networks', 'social_networks', 'social-networks-11', NULL, '{\"facebook\":{\"value\":\"https:\\/\\/www.facebook.com\\/\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Facebook\"},\"twitter\":{\"value\":\"https:\\/\\/twitter.com\\/login?lang=en\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Twitter\"},\"instagram\":{\"value\":\"https:\\/\\/www.instagram.com\\/?hl=en\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Instagram\"},\"pinterest\":{\"value\":\"https:\\/\\/in.pinterest.com\\/\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Pinterest\"},\"linkedin\":{\"value\":\"https:\\/\\/www.linkedin.com\\/uas\\/login\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Linkedin\"},\"google_plus\":{\"value\":\"https:\\/\\/www.google.com\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Google Plus\"}}', 'Social Networks', '2018-02-05 01:11:03', '2018-02-19 23:18:38'),
(17, 'Stripe Settings', 'stripe', 'stripe', NULL, '{\"stripe_key\":{\"value\":\"STRIPE_KEY\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Stripe LIve Key\"},\"stripe_secret\":{\"value\":\"STRIPE_SECRET\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Stripe Live Secret\"},\"stripe_currency\":{\"value\":\"USD\",\"type\":\"text\",\"extra\":\"\",\"tool_tip\":\"Stripe Currency\"}}', 'Stripe Settings', NULL, '2018-04-27 05:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook_client_id` varchar(191) CHARACTER SET utf8 NOT NULL,
  `facebook_client_secret` varchar(191) CHARACTER SET utf8 NOT NULL,
  `facebook_redirect_url` varchar(191) CHARACTER SET utf8 NOT NULL,
  `facebook_login_enable` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `google_client_id` varchar(191) CHARACTER SET utf8 NOT NULL,
  `google_client_secret` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `google_redirect_url` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `google_login_enable` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varbinary(200) DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `slug`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Maharashtra', 0x6d616861726173687472612d30666132643264373932663966366539393466383332646565373339323663663830376431666333, 105, '2018-02-02 07:26:55', '2018-02-02 07:26:55'),
(2, 'Andhrapradesh', 0x616e64687261707261646573682d363537333630656464656634653566616631663763353362313730636139373962626539376435392d31, 105, '2018-02-19 07:08:12', '2018-02-19 07:08:12'),
(3, 'Telangana', 0x74656c616e67616e612d616438613862373332613833303664333435616539613032316261323934623866626133633337392d32, 105, '2018-02-19 07:08:22', '2018-02-19 07:08:22'),
(4, 'Tamilnadu', 0x74616d696c6e6164752d396330353562653133353131396436326239326436653963343033653765383132643233623333372d33, 105, '2018-02-19 07:08:42', '2018-02-19 07:08:42'),
(5, 'Karnataka', 0x6b61726e6174616b612d323630366364623563376333333334366261646237326132636138303461646432303032636439302d34, 105, '2018-02-19 07:08:54', '2018-02-19 07:08:54'),
(6, 'Orissa', 0x6f72697373612d613139653236383835396635346166623231303962663933336163306334363137356237346639652d35, 105, '2018-02-19 07:09:05', '2018-02-19 07:09:05'),
(7, 'Madhyapradesh', 0x6d6164687961707261646573682d376634313833643361353938643230663939383662383763313636343337646265636432393035642d36, 105, '2018-02-19 07:09:27', '2018-02-19 07:09:27'),
(8, 'Goa', 0x676f612d383930313132356662653434656564306133653663623565373830363964393930616637313430342d37, 105, '2018-02-19 07:10:06', '2018-02-19 07:10:06'),
(9, 'Gujarat', 0x67756a617261742d653638333137323339346661633163653764323261333335626561386330313365666434306530312d38, 105, '2018-02-19 07:10:19', '2018-02-19 07:10:19'),
(10, 'Kerala', 0x6b6572616c612d393239363831636163363561633238336430666262393537353063353438323632616434663465312d39, 105, '2018-02-19 07:10:34', '2018-02-19 07:10:34'),
(11, 'Chattisgarh', 0x63686174746973676172682d633562623163613132363133383833396138663833646663323338373133663134306136326162622d3130, 105, '2018-02-19 07:10:49', '2018-02-19 07:10:49'),
(12, 'Jharkhand', 0x6a6861726b68616e642d363536346637636431323438666636333531356161313731626131343839656631653533386537352d3131, 105, '2018-02-19 07:11:10', '2018-02-19 07:11:10'),
(13, 'Pujab', 0x70756a61622d363936363564663562666166383164653131613363393631396666643538666238323739653234362d3132, 105, '2018-02-19 07:11:22', '2018-02-19 07:11:22'),
(14, 'Uttarpradesh', 0x7574746172707261646573682d376537633366616565373062353138363931363732336435386435613835616164306136616462662d3133, 105, '2018-02-19 07:11:43', '2018-02-19 07:11:43'),
(15, 'West Bengal', 0x776573742d62656e67616c2d356265313439393438386165303161353030323034323363336630656235313366333938633835632d3134, 105, '2018-02-19 07:11:56', '2018-02-19 07:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(8, 'navani.ande152@gmail.com', '2018-02-20 06:36:27', '2018-02-20 06:36:27'),
(9, 'andenavani@gmail.com', '2018-04-02 15:41:54', '2018-04-02 15:41:54'),
(10, 'cstplmanohar@gmail.com', '2018-04-21 11:57:37', '2018-04-21 11:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catogories`
--

CREATE TABLE `sub_catogories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_category` varchar(191) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_catogories`
--

INSERT INTO `sub_catogories` (`id`, `category_id`, `sub_category`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 1, 'TVs', 'tvs-a797ef10865664bf24c9f65ef1a9dbbdaed20e33', 'Active', '2018-02-02 00:41:30', '2018-02-22 00:17:34', NULL, 1),
(2, 1, 'SFD', 'sfdsdfds-5c46425b023b0dcb4cade1a097c6caef6b143eff-2', 'Active', '2018-02-02 05:06:37', '2018-02-02 05:10:58', NULL, 1),
(3, 3, 'Drawings', 'drawings-00ef0fa0a2b860492a2f013e715040f31aafce84-2', 'Active', '2018-02-03 06:26:55', '2018-02-03 06:26:55', NULL, 1),
(4, 3, 'Mixed Media Art', 'mixed-media-art-81766e2c403b50a18c34c23578461ce4b2ed8ccb-3', 'Active', '2018-02-03 06:27:08', '2018-02-03 06:27:08', NULL, 1),
(5, 3, 'Paintings', 'paintings-dfae168d299766ea041a9a349cce72fff9d2529c-4', 'Active', '2018-02-03 06:27:18', '2018-02-03 06:27:18', NULL, 1),
(6, 3, 'Photography', 'photography-d70a14ef85985b8aad2d191ceaed98ec69ad508b-5', 'Active', '2018-02-03 06:27:27', '2018-02-03 06:27:27', NULL, 1),
(7, 3, 'Posters', 'posters-a425c1bf2d5337c408cfd47c31f94d50e4d35d3b-6', 'Active', '2018-02-03 06:27:34', '2018-02-03 06:27:34', NULL, 1),
(8, 3, 'Prints', 'prints-80cf5d4a5b120868f9b0f589820933b3a575af33-7', 'Active', '2018-02-03 06:27:42', '2018-02-03 06:27:42', NULL, 1),
(9, 4, 'American Indian Art', 'american-indian-art-1e43279aa5f03a3952962f50c646f3e5d49c6335-8', 'Active', '2018-02-03 06:27:59', '2018-02-03 06:27:59', NULL, 1),
(10, 4, 'Ceramics and Pottery', 'ceramics-and-pottery-9d2af30a1a348d1cbd730a21d7dece824bbfb08f-9', 'Active', '2018-02-03 06:28:20', '2018-02-03 06:28:20', NULL, 1),
(11, 4, 'Glass', 'glass-cfb4c60a5012910b42052c70ad659e1ac3a31260-10', 'Active', '2018-02-03 06:28:30', '2018-02-03 06:28:30', NULL, 1),
(12, 5, 'Bracelets', 'bracelets-e6bbdce6bd137902bc19e1aead79f0e9ccacbaff-11', 'Active', '2018-02-03 06:28:42', '2018-02-03 06:28:42', NULL, 1),
(13, 5, 'Costume Jewelry', 'costume-jewelry-3918d3e1f4481a49ed94877964ef869285307fc6-12', 'Active', '2018-02-03 06:28:57', '2018-02-03 06:28:57', NULL, 1),
(14, 5, 'Earrings', 'earrings-b29c40df6def48f669b51cd5f15a433c4dec4e9c-13', 'Active', '2018-02-03 06:29:05', '2018-02-03 06:29:05', NULL, 1),
(16, 3, 'Fine Art - General', 'fine-art-general-cdbd02bd063ae6729691acd4e0780a91d566f405-14', 'Active', '2018-02-20 07:29:26', '2018-02-20 07:29:26', NULL, NULL),
(17, 1, 'Cameras - General', 'cameras-general-85bdd1d6d7d2c118cf4c888938ef991216991ea4-15', 'Active', '2018-02-20 07:34:22', '2018-02-20 07:34:22', NULL, NULL),
(18, 1, 'Computers', 'computers-c997be30f0e8d2384c231acb762eeb744c7fa082-16', 'Active', '2018-02-20 07:35:02', '2018-02-20 07:35:02', NULL, NULL),
(19, 1, 'Gramophones', 'gramophones-e842cb298b283f6c2ea94d80b1edde8c5ff715a9-17', 'Active', '2018-02-20 07:35:12', '2018-02-20 07:35:12', NULL, NULL),
(20, 1, 'Phonographs', 'phonographs-a60d8bd8256835bc0d562601c877a41aa5d0d63a-18', 'Active', '2018-02-20 07:35:27', '2018-02-20 07:35:27', NULL, NULL),
(21, 1, 'Radios', 'radios-f53bd510b69a5da5eaa852b749bd54048c908062-19', 'Active', '2018-02-20 07:35:37', '2018-02-20 07:35:37', NULL, NULL),
(22, 1, 'Registers', 'registers-f263a4925127efd64db25dd0c159be8305c580c4-20', 'Active', '2018-02-20 07:35:54', '2018-02-20 07:35:54', NULL, NULL),
(23, 1, 'Telephones', 'telephones-fa7ef23f1fd05fd9e26ba7e8127524497fc29b69-21', 'Active', '2018-02-20 07:36:03', '2018-02-20 07:36:03', NULL, NULL),
(24, 1, 'Television Sets', 'television-sets-435960696df37e76959ddaba86267ac0fc8b9e80-22', 'Active', '2018-02-20 07:36:14', '2018-02-20 07:36:14', NULL, NULL),
(25, 1, 'Transistor Radios', 'transistor-radios-6d64b4ca894c3e6fa03f22ff3350a641650741ab-23', 'Active', '2018-02-20 07:36:22', '2018-02-20 07:36:22', NULL, NULL),
(26, 1, 'Vintage Cameras', 'vintage-cameras-df575007da7c44ff4e3e61f2d3c8e93d3fd1fdd1-24', 'Active', '2018-02-20 07:36:33', '2018-02-20 07:36:33', NULL, NULL),
(27, 1, 'Voigtlander Cameras', 'voigtlander-cameras-2c60d5eb509d149f7127aac3df9d3eaa2318c5db-25', 'Active', '2018-02-20 07:36:43', '2018-02-20 07:36:43', NULL, NULL),
(28, 1, 'Zeiss Ikon Cameras', 'zeiss-ikon-cameras-3305524b25ecc996812f3c4cbba042333732f0c3-26', 'Active', '2018-02-20 07:36:51', '2018-02-20 07:36:51', NULL, NULL),
(29, 3, 'Sculptures', 'sculptures-f1d71ced7a0addf7c61a3e3a426c9932e909bf67-27', 'Active', '2018-02-20 07:41:22', '2018-02-20 07:41:22', NULL, NULL),
(30, 4, 'Decorative Art - General', 'decorative-art-general-4a65116c46f33d2ae2bb4ca92e3e1ed1709e2f26-28', 'Active', '2018-02-20 07:41:59', '2018-02-20 07:41:59', NULL, NULL),
(31, 4, 'Ethnographic & Indigenous Artifacts', 'ethnographic-indigenous-artifacts-eb21cdd4b72c40402d5330deafc007aa0058fda7-29', 'Active', '2018-02-20 07:42:10', '2018-02-20 07:42:10', NULL, NULL),
(32, 4, 'Greek, Roman & Egyptian Antiquities', 'greek-roman-egyptian-arts-8925005e84782238445fccc2f08b7ee9205e203f-79', 'Active', '2018-02-20 07:42:20', '2018-02-20 07:56:29', NULL, NULL),
(33, 4, 'Porcelain & China', 'porcelain-china-841401198ad5c79adb888031a886389cfd07aec1-31', 'Active', '2018-02-20 07:42:29', '2018-02-20 07:42:29', NULL, NULL),
(34, 4, 'Silver & Vertu', 'silver-vertu-0b8df7f89f34f2f2a29c8ff5142eaeee344af0a0-32', 'Active', '2018-02-20 07:42:39', '2018-02-20 07:42:39', NULL, NULL),
(35, 5, 'Jewelry - General', 'jewelry-general-0bbb87b590e1146eacaa8b21fd831fb8574035e2-33', 'Active', '2018-02-20 07:43:14', '2018-02-20 07:43:14', NULL, NULL),
(36, 5, 'Loose Stones & Beads', 'loose-stones-beads-48db4976f7ba5f25c6013dd9377b8b996faa0969-34', 'Active', '2018-02-20 07:43:25', '2018-02-20 07:43:25', NULL, NULL),
(37, 5, 'Men\'s Jewelry', 'mens-jewelry-faab230be7c8bcbc565a3305c73726cb9afdb409-35', 'Active', '2018-02-20 07:43:36', '2018-02-20 07:43:36', NULL, NULL),
(38, 5, 'Men\'s Watches', 'mens-watches-a5939d4a1be2a21aa0049eb79eee44473d153fc3-36', 'Active', '2018-02-20 07:43:46', '2018-02-20 07:43:46', NULL, NULL),
(39, 5, 'Necklaces & Pendants', 'necklaces-pendants-29b86c3ffd472bd57d5d758b91cea4b949a43c23-37', 'Active', '2018-02-20 07:43:56', '2018-02-20 07:43:56', NULL, NULL),
(40, 5, 'Pins & Brooches', 'pins-brooches-bc78c1ed1ffffbe91b44b48f13ddcb62584cf190-38', 'Active', '2018-02-20 07:44:04', '2018-02-20 07:44:04', NULL, NULL),
(41, 5, 'Pocket Watches & Accessories', 'pocket-watches-accessories-5ff518898d1bc9137c3b8fffc0d8cbb4ed1126be-39', 'Active', '2018-02-20 07:44:13', '2018-02-20 07:44:13', NULL, NULL),
(42, 5, 'Rings', 'rings-f6fe0292e7bb6a95cff133dd005e3d159969795f-40', 'Active', '2018-02-20 07:44:22', '2018-02-20 07:44:22', NULL, NULL),
(43, 5, 'Vintage Jewelry', 'vintage-jewelry-81b26a586ccb6034c74b7d89c2946c02ad2e8b63-41', 'Active', '2018-02-20 07:44:35', '2018-02-20 07:44:35', NULL, NULL),
(44, 5, 'Women\'s Watches', 'womens-watches-08f021b0d7dfb4185ca854938f6b58b1fa54c25d-42', 'Active', '2018-02-20 07:44:44', '2018-02-20 07:44:44', NULL, NULL),
(45, 6, 'Advertising, Paper & Ephemera', 'advertising-paper-ephemera-6e181961d37087819c27cb371dde0b5ce117bd61-43', 'Active', '2018-02-20 07:45:27', '2018-02-20 07:45:27', NULL, NULL),
(46, 6, 'Animation Art', 'animation-art-79c98240179bb0bb7121d300ed9c5f0faa5a636b-44', 'Active', '2018-02-20 07:45:34', '2018-02-20 07:45:34', NULL, NULL),
(47, 6, 'Autographs', 'autographs-778ff4b31016ba6733e0d8676a10540e86d8e2b6-45', 'Active', '2018-02-20 07:45:41', '2018-02-20 07:45:41', NULL, NULL),
(48, 6, 'Books, Maps', 'books-maps-manuscripts-ac6c0c3992a1693d95e1c66bc68c7b39e273d05c-47', 'Active', '2018-02-20 07:45:47', '2018-02-20 07:45:58', NULL, NULL),
(49, 6, 'Coins, Money & Stamps', 'coins-money-stamps-b22418abef4684967854385c9f753e1a51a45ece-47', 'Active', '2018-02-20 07:46:05', '2018-02-20 07:46:05', NULL, NULL),
(50, 6, 'Collectibles - General', 'collectibles-general-c14e64b331995a1c184eeba1b9a979910884582e-48', 'Active', '2018-02-20 07:46:12', '2018-02-20 07:46:12', NULL, NULL),
(51, 6, 'Couture, Fashion & Accessories', 'couture-fashion-accessories-dfa0fbf626ddace7514b931423adc1f662a5d086-49', 'Active', '2018-02-20 07:46:19', '2018-02-20 07:46:19', NULL, NULL),
(52, 7, 'Electronics Collectibles', 'electronics-collectibles-20a4192ee7aa6e0add475af898e49becaf95f0f6-50', 'Active', '2018-02-20 07:46:26', '2018-02-20 07:46:26', NULL, NULL),
(53, 6, 'Historical, Political & Space Collectibles', 'historical-political-space-collectibles-542fc4cc74f48e6dc53007e9199e8bc50f2f518f-51', 'Active', '2018-02-20 07:46:32', '2018-02-20 07:46:32', NULL, NULL),
(54, 6, 'Memorabilia', 'memorabilia-fa20f7816c3dd74202e429b88666368328db5813-52', 'Active', '2018-02-20 07:46:39', '2018-02-20 07:46:39', NULL, NULL),
(55, 6, 'Military & Wartime Collectibles', 'military-wartime-collectibles-f0045dcd92ca3a58d4fbac75919ec367e4659967-53', 'Active', '2018-02-20 07:46:49', '2018-02-20 07:46:49', NULL, NULL),
(56, 6, 'Musical Instruments & Equipment', 'musical-instruments-equipment-2577d39d2a719235f2b6c5bc0148566c78ea5cf2-54', 'Active', '2018-02-20 07:46:56', '2018-02-20 07:46:56', NULL, NULL),
(57, 6, 'Natural History Collectibles, Fossils & Minerals', 'natural-history-collectibles-fossils-minerals-09435bdfae0717bd9039d08bf67f8d06a73a9a29-55', 'Active', '2018-02-20 07:47:03', '2018-02-20 07:47:03', NULL, NULL),
(58, 6, 'Pens', 'pens-0d441cee5150e65ab140778cac40c11138db98a8-56', 'Active', '2018-02-20 07:47:10', '2018-02-20 07:47:10', NULL, NULL),
(59, 6, 'Sporting, Fishing & Hunting Collectibles', 'sporting-fishing-hunting-collectibles-41c3b283f5cda29551a13c4b1f657b71de3273ae-57', 'Active', '2018-02-20 07:47:18', '2018-02-20 07:47:18', NULL, NULL),
(60, 6, 'Tools', 'tools-0a08aa4d1f4d921df7889250d8f510b78f0ef266-58', 'Active', '2018-02-20 07:47:24', '2018-02-20 07:47:24', NULL, NULL),
(61, 7, 'Beds', 'beds-0c4b272d471f471538dfbb9705b897b8aa57aad5-59', 'Active', '2018-02-20 07:53:32', '2018-02-20 07:53:32', NULL, NULL),
(62, 7, 'Benches & Stools', 'benches-stools-4025b9c42459541080a52523a9c7fa86a802a3f3-60', 'Active', '2018-02-20 07:53:39', '2018-02-20 07:53:39', NULL, NULL),
(63, 7, 'Cabinets, Armoires & Cupboards', 'cabinets-armoires-cupboards-baf7ddf2b24c828af15d63708e06dd57e5cabc3c-61', 'Active', '2018-02-20 07:53:46', '2018-02-20 07:53:46', NULL, NULL),
(64, 7, 'Chairs', 'chairs-f765b6a639cd99c2e73b8a1fe6c53e9d6f3aa758-62', 'Active', '2018-02-20 07:53:53', '2018-02-20 07:53:53', NULL, NULL),
(65, 7, 'Clocks', 'clocks-3f0df60a7f7a1d73f54bb73be4d6f6e86275877b-63', 'Active', '2018-02-20 07:53:59', '2018-02-20 07:53:59', NULL, NULL),
(66, 7, 'Decor & Accessories', 'decor-accessories-97f9829ed04099a7d6307510fdc728ffee19c81a-64', 'Active', '2018-02-20 07:54:05', '2018-02-20 07:54:05', NULL, NULL),
(67, 7, 'Dressers & Vanities', 'dressers-vanities-a89c66f376e9f77292688084b7a8b9e034ce65d6-65', 'Active', '2018-02-20 07:54:12', '2018-02-20 07:54:12', NULL, NULL),
(68, 7, 'Furniture - General', 'furniture-general-18a3adee3ccd8a1b5d79a3b3c0cf619d780d68e9-66', 'Active', '2018-02-20 07:54:18', '2018-02-20 07:54:18', NULL, NULL),
(69, 7, 'Lamps & Lights', 'lamps-lights-8e9791bdc046864ffabe6d7d08dd055f3cac2fdf-67', 'Active', '2018-02-20 07:54:24', '2018-02-20 07:54:24', NULL, NULL),
(70, 7, 'Mirrors', 'mirrors-64ae098318ebf1b00020f8ee787b1db3f6f90b24-68', 'Active', '2018-02-20 07:54:33', '2018-02-20 07:54:33', NULL, NULL),
(71, 7, 'Rugs & Carpets', 'rugs-carpets-c3848149e7db567a57e2a7080706ea3f1937df72-69', 'Active', '2018-02-20 07:54:39', '2018-02-20 07:54:39', NULL, NULL),
(72, 7, 'Shelves & Bookcases', 'shelves-bookcases-a3fb1807a53bf8d01848e5eace3753e6fc655c0d-70', 'Active', '2018-02-20 07:54:45', '2018-02-20 07:54:45', NULL, NULL),
(73, 7, 'Sofas, Couches & Chaises', 'sofas-couches-chaises-77d6c97075a20ceb485d632eebc0ea121be0209f-71', 'Active', '2018-02-20 07:54:51', '2018-02-20 07:54:51', NULL, NULL),
(74, 7, 'Tables, Stands & Consoles', 'tables-stands-consoles-a9da8e70f0bb00c134370b762fc1c65c5130501a-72', 'Active', '2018-02-20 07:54:58', '2018-02-20 07:54:58', NULL, NULL),
(75, 8, 'Asian Art & Antiques - General', 'asian-arts-f6633de3a5f2404f868bc98b1d6092d3d5d14f20-79', 'Active', '2018-02-20 07:55:35', '2018-02-20 07:56:59', NULL, NULL),
(76, 8, 'Chinese Art & Antiques', 'chinese-art-64df9e01b0d47b3bdddeb806642f389418319131-79', 'Active', '2018-02-20 07:55:41', '2018-02-20 07:57:05', NULL, NULL),
(77, 8, 'Indian & South Asian Art & Antiques', 'indian-south-asian-art-39e6df9a8015e9429a3b105a25225ba7e1d0686d-79', 'Active', '2018-02-20 07:55:50', '2018-02-20 07:57:12', NULL, NULL),
(78, 8, 'Japanese Art', 'japanese-art-5712e67e4f15b3dce825c22ee722704eab9c6029-76', 'Active', '2018-02-20 07:55:58', '2018-02-20 07:55:58', NULL, NULL),
(79, 8, 'Korean Antiques', 'korean-arts-8fe3bd70fa0f7d129bb1cea08ea6feb721107e21-79', 'Active', '2018-02-20 07:56:07', '2018-02-20 07:57:18', NULL, NULL),
(80, 8, 'Southeast Asian Art', 'southeast-asian-art-99e5fea138397a094df11cc2b46d070b90b94110-78', 'Active', '2018-02-20 07:56:13', '2018-02-20 07:56:13', NULL, NULL),
(81, 13, 'Carnival & Circus Collectibles', 'carnival-circus-collectibles-98eb78697534dc586519c61d6d011c71c33d2ca3-79', 'Active', '2018-02-20 07:59:42', '2018-02-20 07:59:42', NULL, NULL),
(82, 13, 'Militaria & War Memorabilia', 'militaria-war-memorabilia-664882e7dc49ab5ca138ac7a10a35adebe13fc32-80', 'Active', '2018-02-20 07:59:53', '2018-02-20 07:59:53', NULL, NULL),
(83, 13, 'Movie & TV Memorabilia', 'movie-tv-memorabilia-6dd15e5ef215b922e8fbd3ebf7340ddf53385f4d-81', 'Active', '2018-02-20 08:00:00', '2018-02-20 08:00:00', NULL, NULL),
(84, 13, 'Political Memorabilia', 'political-memorabilia-a3ce62c7fe313937a8b4115ed9943441227850de-82', 'Active', '2018-02-20 08:00:06', '2018-02-20 08:00:06', NULL, NULL),
(85, 13, 'Scrapbooks & Photo Albums', 'scrapbooks-photo-albums-7a4299e8df64d5df2c397ff141de6222fe78bcbc-83', 'Active', '2018-02-20 08:00:13', '2018-02-20 08:00:13', NULL, NULL),
(86, 13, 'Sports Memorabilia', 'sports-memorabilia-65a64d3d0a7e5b7b06b09229be2c4f456154e332-84', 'Active', '2018-02-20 08:00:19', '2018-02-20 08:00:19', NULL, NULL),
(87, 13, 'Travel Memorabilia & Souvenirs', 'travel-memorabilia-souvenirs-7dbd2e0fcff9b5e27334d4836e35cf153afe7c92-85', 'Active', '2018-02-20 08:00:25', '2018-02-20 08:00:25', NULL, NULL),
(88, 13, 'Theater Memorabilia', 'theater-memorabilia-5689563f3067547e43aa61b442418c1a631e4857-86', 'Active', '2018-02-20 08:00:31', '2018-02-20 08:00:31', NULL, NULL),
(89, 13, 'Baseball Memorabilia', 'baseball-memorabilia-170e83e01a2b369ba3c9a66c21408b26a973cbcb-87', 'Active', '2018-02-20 08:00:37', '2018-02-20 08:00:37', NULL, NULL),
(90, 13, 'Elvis Presley Memorabilia', 'elvis-presley-memorabilia-47b92ec01b2b87fa5949d0305b5a0a0cb4eda07d-88', 'Active', '2018-02-20 08:00:43', '2018-02-20 08:00:43', NULL, NULL),
(91, 13, 'Autographs', 'autographs-b9ac33fd8aefb02b1d2652b3470eea2d08e60017-89', 'Active', '2018-02-20 08:00:49', '2018-02-20 08:00:49', NULL, NULL),
(92, 13, 'Civil War Memorabilia', 'civil-war-memorabilia-7d2c091b0a921b3971d2811478ac90c3c9ddac10-90', 'Active', '2018-02-20 08:00:55', '2018-02-20 08:00:55', NULL, NULL),
(93, 13, 'World War I Memorabilia', 'world-war-i-memorabilia-89300edeef0066c2f89895220e08068f21f7d31f-91', 'Active', '2018-02-20 08:01:01', '2018-02-20 08:01:01', NULL, NULL),
(94, 13, 'World War II Memorabilia', 'world-war-ii-memorabilia-dc35523d662f6c853d6189b0009f5c366d904a66-92', 'Active', '2018-02-20 08:01:07', '2018-02-20 08:01:07', NULL, NULL),
(95, 14, 'Baskets & Containers', 'baskets-containers-5858168ee976560f432e4d337d2aa1226ea155ff-93', 'Active', '2018-02-20 08:01:48', '2018-02-20 08:01:48', NULL, NULL),
(96, 14, 'Candle Holders', 'candle-holders-82b3ba903a84728fdfa5b147a120d9e45a7d738b-94', 'Active', '2018-02-20 08:01:57', '2018-02-20 08:01:57', NULL, NULL),
(97, 14, 'Clocks', 'clocks-6dfe3af942229cc03fb19d3cbc9a71810d307a29-95', 'Active', '2018-02-20 08:02:03', '2018-02-20 08:02:03', NULL, NULL),
(98, 14, 'Fireplaces & Mantels', 'fireplaces-mantels-d3cfad6af6bc07307068ab203b3b54fb370e1977-96', 'Active', '2018-02-20 08:02:09', '2018-02-20 08:02:09', NULL, NULL),
(99, 14, 'Fireplace Accessories', 'fireplace-accessories-7ef928e7121afed705e83cef10eafb4f5600d0b4-97', 'Active', '2018-02-20 08:02:16', '2018-02-20 08:02:16', NULL, NULL),
(100, 14, 'Garden Furniture', 'garden-furniture-a47660d14366aed924be247a9678282423fff004-98', 'Active', '2018-02-20 08:02:22', '2018-02-20 08:02:22', NULL, NULL),
(101, 14, 'Garden Ornaments', 'garden-ornaments-a4822662c6d1208f6055217dbb15780189ae6b60-99', 'Active', '2018-02-20 08:02:28', '2018-02-20 08:02:28', NULL, NULL),
(102, 14, 'Frames, Shelves & Wall Decor', 'frames-shelves-wall-decor-06c44a1646bba71a463964ee8d6b8eba3f0e06cc-100', 'Active', '2018-02-20 08:02:34', '2018-02-20 08:02:34', NULL, NULL),
(103, 14, 'Kitchenware', 'kitchenware-fcf274e76db49db1f4738e1f5ed25ae30c1e4569-101', 'Active', '2018-02-20 08:02:40', '2018-02-20 08:02:40', NULL, NULL),
(104, 14, 'Lighting', 'lighting-9cfadcbf77719fd5e755c125c7416f4ff6ac5ce9-102', 'Active', '2018-02-20 08:02:46', '2018-02-20 08:02:46', NULL, NULL),
(105, 14, 'Magazine Racks', 'magazine-racks-ea12ebddc70b19387933116bb29077a43e19d693-103', 'Active', '2018-02-20 08:02:53', '2018-02-20 08:02:53', NULL, NULL),
(106, 14, 'Mirrors', 'mirrors-2910d3e14014a2f029935825db40f76aae90c72b-104', 'Active', '2018-02-20 08:02:59', '2018-02-20 08:02:59', NULL, NULL),
(107, 14, 'Planters', 'planters-2e73ff83975b704a556e5a6a25d302d65c823451-105', 'Active', '2018-02-20 08:03:05', '2018-02-20 08:03:05', NULL, NULL),
(108, 14, 'Rugs & Carpets', 'rugs-carpets-15b3da5367c1879f32167a570b83b4b9f07c887c-106', 'Active', '2018-02-20 08:03:12', '2018-02-20 08:03:12', NULL, NULL),
(109, 14, 'Serveware, Flatware & Barware', 'serveware-flatware-barware-bdccd1c8b8d693e1637d1e7b5ea50e2f4c7aef53-107', 'Active', '2018-02-20 08:03:18', '2018-02-20 08:03:18', NULL, NULL),
(110, 14, 'Textiles', 'textiles-b27495755fa44905247492e7e0323d27bc9afbd1-108', 'Active', '2018-02-20 08:03:25', '2018-02-20 08:03:25', NULL, NULL),
(111, 14, 'Umbrella Stands & Coat Stands', 'umbrella-stands-coat-stands-0600911ce13861a25a864fd23df20f5fa1d459cd-109', 'Active', '2018-02-20 08:03:32', '2018-02-20 08:03:32', NULL, NULL),
(112, 14, 'Vases & Garnitures', 'vases-garnitures-607f72ea3ca137e9f57a739b2adce3e038691d1e-110', 'Active', '2018-02-20 08:03:38', '2018-02-20 08:03:38', NULL, NULL),
(113, 14, 'Art Glass', 'art-glass-8d431fdc12bbdcf85fdc86b05e8ec4ab67adba9b-111', 'Active', '2018-02-20 08:03:44', '2018-02-20 08:03:44', NULL, NULL),
(114, 14, 'Baccarat', 'baccarat-d4fda3d34470cc01e4134cc1a1891f6f79057b1d-112', 'Active', '2018-02-20 08:03:52', '2018-02-20 08:03:52', NULL, NULL),
(115, 14, 'KPM', 'kpm-25e8555c3fe7ea5947f34b9f6ed3b1652fac9d1c-113', 'Active', '2018-02-20 08:03:58', '2018-02-20 08:03:58', NULL, NULL),
(116, 14, 'Murano', 'murano-97f4c40d93326be61d6cddb4836e6cd2e518f8ff-114', 'Active', '2018-02-20 08:04:05', '2018-02-20 08:04:05', NULL, NULL),
(117, 14, 'Limoges', 'limoges-cfb893c7560dd6a3c531413f2029c9fa234b0c29-115', 'Active', '2018-02-20 08:04:11', '2018-02-20 08:04:11', NULL, NULL),
(118, 14, 'Rookwood', 'rookwood-232f29525f1b16b78c07c366efe93cc893d2d15e-116', 'Active', '2018-02-20 08:04:17', '2018-02-20 08:04:17', NULL, NULL),
(119, 14, 'Sèvres', 'sevres-7b3fc55e06b12823f6b07596e197743324b8358a-117', 'Active', '2018-02-20 08:04:25', '2018-02-20 08:04:25', NULL, NULL),
(120, 14, 'Lalique', 'lalique-115cfd68dfe9c58b5858abb3a3323ce6eae86316-118', 'Active', '2018-02-20 08:04:31', '2018-02-20 08:04:31', NULL, NULL),
(121, 14, 'Tiffany Studios', 'tiffany-studios-d7de639fbc64ff89375df769da5f83e77b69e2d0-119', 'Active', '2018-02-20 08:04:36', '2018-02-20 08:04:36', NULL, NULL),
(122, 14, 'Meissen', 'meissen-0272e146f193d7e4507468f5428696f36ba173ca-120', 'Active', '2018-02-20 08:05:14', '2018-02-20 08:05:14', NULL, NULL),
(123, 15, 'Dresses & Gowns', 'dresses-gowns-5fd86ddd282dd56dc3952e3e5ac025971098dbef-121', 'Active', '2018-02-20 08:06:43', '2018-02-20 08:06:43', NULL, NULL),
(124, 15, 'Jackets & Coats', 'jackets-coats-4bfca00355e3c29a9f8c3b284a2988506e990924-122', 'Active', '2018-02-20 08:06:49', '2018-02-20 08:06:49', NULL, NULL),
(125, 15, 'Shirts & Blouses', 'shirts-blouses-d4d20318cb5b98a593dda64437a15e3f3677a3e7-123', 'Active', '2018-02-20 08:06:55', '2018-02-20 08:06:55', NULL, NULL),
(126, 15, 'Pants & Trousers', 'pants-trousers-96257af51f0c2a451571b4a45067000ee88aa64e-124', 'Active', '2018-02-20 08:07:24', '2018-02-20 08:07:24', NULL, NULL),
(127, 15, 'Robes & Kimonos', 'robes-kimonos-01a36ce8344525853379dbc116f8c6b2c76adf08-125', 'Active', '2018-02-20 08:07:33', '2018-02-20 08:07:33', NULL, NULL),
(128, 15, 'Skirts', 'skirts-2b03656035e2a448841f03fd13be4926a7df9072-126', 'Active', '2018-02-20 08:07:42', '2018-02-20 08:07:42', NULL, NULL),
(129, 15, 'Suits & Ensembles', 'suits-ensembles-235f6e2ad56867ad52b88cc2fec2ecca92478275-127', 'Active', '2018-02-20 08:07:48', '2018-02-20 08:07:48', NULL, NULL),
(130, 15, 'Sweaters', 'sweaters-eb3fa7c08e9f95949af577cc28efc448280417b2-128', 'Active', '2018-02-20 08:07:54', '2018-02-20 08:07:54', NULL, NULL),
(131, 15, 'Vests', 'vests-dd5261c4069a053411ab638296798ff05f31056c-129', 'Active', '2018-02-20 08:08:07', '2018-02-20 08:08:07', NULL, NULL),
(132, 15, 'Belts & Chatelaines', 'belts-chatelaines-786a09aca783ad4986d2d1ce9b03ee4c5a225b67-130', 'Active', '2018-02-20 08:08:13', '2018-02-20 08:08:13', NULL, NULL),
(133, 15, 'Canes & Walking Sticks', 'canes-walking-sticks-290f0d981c64c01104616973c5758a51e14b5ee7-131', 'Active', '2018-02-20 08:08:20', '2018-02-20 08:08:20', NULL, NULL),
(134, 15, 'Eyeglasses & Spectacles', 'eyeglasses-spectacles-e395d793e42a0357cbb796d6eb2a220d3e314dd1-132', 'Active', '2018-02-20 08:08:26', '2018-02-20 08:08:26', NULL, NULL),
(135, 15, 'Handbags & Purses', 'handbags-purses-86286c02a5412dcc7dcc90d155218044bfc3c238-133', 'Active', '2018-02-20 08:08:32', '2018-02-20 08:08:32', NULL, NULL),
(136, 15, 'Handkerchiefs & Pocket Squares', 'handkerchiefs-pocket-squares-ef106a4afaf1b1e104fe1912631c479911006b39-134', 'Active', '2018-02-20 08:08:38', '2018-02-20 08:08:38', NULL, NULL),
(137, 15, 'Neckties & Bow Ties', 'neckties-bow-ties-03c0d3655be594d91ed88006bb715533ebfb7422-135', 'Active', '2018-02-20 08:08:46', '2018-02-20 08:08:46', NULL, NULL),
(138, 15, 'Scarves, Wraps & Shawls', 'scarves-wraps-shawls-1148b6b515f45d5ef74c2b7412a3f3c8d1003dd7-136', 'Active', '2018-02-20 08:08:52', '2018-02-20 08:08:52', NULL, NULL),
(139, 15, 'Shoes', 'shoes-e446edbc63c6e15303f73f08dcb817d279a62fc9-137', 'Active', '2018-02-20 08:09:01', '2018-02-20 08:09:01', NULL, NULL),
(140, 15, 'Wallets', 'wallets-3c9b8f0a77f8bccf2123947653e0e2033a85a3c6-138', 'Active', '2018-02-20 08:09:07', '2018-02-20 08:09:07', NULL, NULL),
(141, 15, 'Chanel', 'chanel-df71b80a2ccbe4ea38b7dda79e6efc926738bcf8-139', 'Active', '2018-02-20 08:09:16', '2018-02-20 08:09:16', NULL, NULL),
(142, 15, 'Christian Dior', 'christian-dior-76603fdcb8b5bb68c7843468fbe5b4a2ca979cc2-140', 'Active', '2018-02-20 08:09:23', '2018-02-20 08:09:23', NULL, NULL),
(143, 15, 'Chloe', 'chloe-c553c6581acdcb6155bf715bbf39659eebb396d6-141', 'Active', '2018-02-20 08:09:28', '2018-02-20 08:09:28', NULL, NULL),
(144, 15, 'Gucci', 'gucci-4d70d0fb80b74d1e146546b2085029f1568156a0-142', 'Active', '2018-02-20 08:09:34', '2018-02-20 08:09:34', NULL, NULL),
(145, 15, 'Hermes', 'hermes-974b063d980b1af76df2872830a22eaf49237b03-143', 'Active', '2018-02-20 08:09:41', '2018-02-20 08:09:41', NULL, NULL),
(146, 15, 'Louis Vuitton', 'louis-vuitton-ee1fcd322f70a3a43f6159607c7713e2194c0450-144', 'Active', '2018-02-20 08:09:47', '2018-02-20 08:09:47', NULL, NULL),
(147, 15, 'Michael Kors', 'michael-kors-4ae101b6199e1d3dd771b39b77886b2e80a16e51-145', 'Active', '2018-02-20 08:09:53', '2018-02-20 08:09:53', NULL, NULL),
(148, 15, 'Yves Saint Laurent', 'yves-saint-laurent-5ec067d5173f7085308ae031cd8ed55e55c4480e-146', 'Active', '2018-02-20 08:09:58', '2018-02-20 08:09:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `type` enum('Content','Header','Footer') CHARACTER SET utf8 NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8 NOT NULL,
  `from_email` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `from_name` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `title`, `slug`, `type`, `subject`, `from_email`, `from_name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Registration', 'registration', 'Content', 'Welcome', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$username}},</h3>\r\n\r\n						<p>You have successfully registered with {{$site_title}} as {{$user_type}}.</p>\r\n\r\n						\r\n						<p>Enjoy the facilities provided by our system.</p>\r\n                        \r\n                        <p>Your credentials</p> \r\n                        \r\n						<p>Email: {{$email}}</p>\r\n\r\n						<p>Password: {{$password}}</p>\r\n \r\n						<p>&nbsp;</p>\r\n                        <p>&nbsp;</p>\r\n                        <p>&nbsp;</p>\r\n                        <p><a href=\"{{$site_url}}\">Read More</a></p>\r\n                        \r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', '2018-02-03 04:09:07', '2018-03-17 08:57:57'),
(2, 'User Account Blocked or Unblocked', 'user_account_status', 'Content', 'User Account Blocked or Unblocked', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$username}},</h3>\r\n\r\n						<p>You account has been {{$account_status}} by Admin.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n						<p>Please contact Admin for further details.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', '2018-02-06 06:31:02', '2018-03-17 09:01:17'),
(3, 'Header', 'header', 'Header', 'Header', NULL, NULL, '<!-- HEADER -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><img alt=\"Auction\" src=\"http://phpstack-127383-460762.cloudwaysapps.com/public/home/images/logo.png\" style=\"height:39px; width:180px\" /></td>\r\n						<td>\r\n						<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$date}}&nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /HEADER -->', '2018-02-06 06:34:01', '2018-04-19 15:37:33'),
(4, 'Footer', 'footer', 'Footer', 'Footer', NULL, NULL, '<!-- FOOTER -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"2\">\r\n						<p>Post! Remember - this is not a marketing email. Since you have an Envato Account, we want to keep you informed about transactions, operational updates or changes to our websites</p>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /FOOTER -->', '2018-02-06 06:35:15', '2018-03-21 12:04:56'),
(5, 'When User Register Email to Admin', 'register_admin_email', 'Content', 'New User Registered', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear Admin,</h3>\r\n\r\n						<p>{{$username}} has successfully registered with {{$site_title}} as {{$user_type}}.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-17 09:00:41'),
(6, 'When an Auction Posted', 'new_auction_posted', 'Content', 'New Auction', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$username}},</h3>\r\n\r\n						<p>New Auction {{$auction_title}} posted by {{$user}} in {{$site_title}}.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n						<p>Please login to know more.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-17 09:03:50'),
(7, 'When an Auction Updated', 'auction_updated', 'Content', 'Auction Updated', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$username}},</h3>\r\n\r\n						<p>Auction {{$auction_title}} updated by {{$user}} in {{$site_title}}.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n						<p>Please login to know more.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-17 09:04:39'),
(8, 'News letter subscription', 'news_letter_subscription', 'Content', 'News letter subscription', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>{{$title}}</p>\r\n\r\n						<p>{{$message}}</p>\r\n\r\n						<p>Please login to know more&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', '2018-02-20 01:34:22', '2018-03-17 09:06:00'),
(9, 'Contact Email', 'contact_mail_to_admin', 'Content', 'Contact Email to Admin', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear Admin,</h3>\r\n\r\n						<p>{{$username}} would like to contact you.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>User Details</p>\r\n\r\n						<p>Name: {{$username}}</p>\r\n\r\n						<p>Email: {{$email}}</p>\r\n\r\n						<p>Subject: {{$subject}}</p>\r\n\r\n						<p>Message: {{$message}}</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', '2018-02-21 06:42:12', '2018-03-17 09:08:59'),
(10, 'Admin Send Invoice to Bidder Regarding Auction Payment', 'admin_send_email_invoice_to_bidder', 'Content', 'Admin can Send Email Invoice to Bidder Regarding Auction Payment', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Hello {{$bidder_name}},</h3>\r\n\r\n						<p>Congratulations, You have won the Auction {{$auction_title}} with the highest bid {{$currency}}{{$bid_amount}} in {{$site_title}}</p>\r\n\r\n						<p>Please proceed for payment from your dashboard</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>Admin message: {{$admin_message}}</p>\r\n\r\n						<p>Payment start: {{$payment_start_datetime}}</p>\r\n\r\n						<p>Payment end: {{$payment_end_datetime}}</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>Please make sure to pay between mentioned dates.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-17 09:21:41'),
(11, 'Invoice Sent to Bidder Regarding Auction Payment', 'auction_bid_invoice_sent_to_bidder', 'Content', 'Sent Email Invoice to Bidder Regarding Auction Payment', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Hello Admin,</h3>\r\n\r\n						<p>You have sent Invoice to the Bidder {{$bidder_name}} Regarding auction payment {{$auction_title}} of the highest bid {{$currency}}{{$bid_amount}}</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>Admin message: {{$admin_message}}</p>\r\n\r\n						<p>Payment start: {{$payment_start_datetime}}</p>\r\n\r\n						<p>Payment end: {{$payment_end_datetime}}</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-17 09:23:29'),
(12, 'Bidder Paid Bid Amount Email to Bidder', 'bidder_paid_bidding_amount', 'Content', 'Bidder Paid Amount', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$user_name}},</h3>\r\n\r\n						<p>You have successfully paid Bid amount {{$currency}}{{$amount}} for Auction {{$auction_title}} on {{$date}}.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>Your Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Username</td>\r\n									<td>{{$user_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Email</td>\r\n									<td>{{$email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Phone</td>\r\n									<td>{{$phone}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>Auction Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Title</td>\r\n									<td>{{$auction_title}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Reserve Price</td>\r\n									<td>{{$currency}}{{$reserve_price}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Start Date</td>\r\n									<td>{{$start_date}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>End Date</td>\r\n									<td>{{$end_date}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<h3>Payment Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Payment Gateway</td>\r\n									<td>{{$payment_gateway}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment for</td>\r\n									<td>{{$payment_for}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Paid amount</td>\r\n									<td>{{$currency}}{{$paid_amount}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment status</td>\r\n									<td>{{$payment_status}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Transaction ID</td>\r\n									<td>{{$transaction_id}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Name</td>\r\n									<td>{{$billing_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Email</td>\r\n									<td>{{$billing_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Phone</td>\r\n									<td>{{$billing_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Country</td>\r\n									<td>{{$billing_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing State</td>\r\n									<td>{{$billing_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing City</td>\r\n									<td>{{$billing_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Address</td>\r\n									<td>{{$billing_address}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Name</td>\r\n									<td>{{$shipping_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Email</td>\r\n									<td>{{$shipping_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Phone</td>\r\n									<td>{{$shipping_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Country</td>\r\n									<td>{{$shipping_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping State</td>\r\n									<td>{{$shipping_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping City</td>\r\n									<td>{{$shipping_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Address</td>\r\n									<td>{{$shipping_address}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-21 10:32:42'),
(13, 'Bidder Paid Bid Amount Email to Admin', 'bidder_paid_bidding_amount_to_admin', 'Content', 'Bidder Paid Amount', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear Admin,</h3>\r\n\r\n						<p>{{$user_name}} has successfully paid Bid amount&nbsp;{{$currency}}{{$amount}} for Auction {{$auction_title}} on {{$date}}.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>User Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Username</td>\r\n									<td>{{$user_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Email</td>\r\n									<td>{{$email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Phone</td>\r\n									<td>{{$phone}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>Auction Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Title</td>\r\n									<td>{{$auction_title}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Reserve Price</td>\r\n									<td>{{$currency}}{{$reserve_price}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Start Date</td>\r\n									<td>{{$start_date}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>End Date</td>\r\n									<td>{{$end_date}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<h3>Payment Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Payment Gateway</td>\r\n									<td>{{$payment_gateway}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment for</td>\r\n									<td>{{$payment_for}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Paid amount</td>\r\n									<td>{{$currency}}{{$paid_amount}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment status</td>\r\n									<td>{{$payment_status}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Transaction ID</td>\r\n									<td>{{$transaction_id}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Name</td>\r\n									<td>{{$billing_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Email</td>\r\n									<td>{{$billing_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Phone</td>\r\n									<td>{{$billing_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Country</td>\r\n									<td>{{$billing_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing State</td>\r\n									<td>{{$billing_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing City</td>\r\n									<td>{{$billing_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Address</td>\r\n									<td>{{$billing_address}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Name</td>\r\n									<td>{{$shipping_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Email</td>\r\n									<td>{{$shipping_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Phone</td>\r\n									<td>{{$shipping_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Country</td>\r\n									<td>{{$shipping_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping State</td>\r\n									<td>{{$shipping_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping City</td>\r\n									<td>{{$shipping_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Address</td>\r\n									<td>{{$shipping_address}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-21 10:33:31'),
(14, 'User Paid Auction Amount Email to User', 'user_bought_auction', 'Content', 'User Paid Auction Amount', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$user_name}},</h3>\r\n\r\n						<p>You have successfully paid Auction&nbsp;amount {{$currency}}{{$amount}} for Auction {{$auction_title}} on {{$date}}.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>Your Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Username</td>\r\n									<td>{{$user_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Email</td>\r\n									<td>{{$email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Phone</td>\r\n									<td>{{$phone}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>Auction Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Title</td>\r\n									<td>{{$auction_title}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Reserve Price</td>\r\n									<td>{{$currency}}{{$reserve_price}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Start Date</td>\r\n									<td>{{$start_date}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>End Date</td>\r\n									<td>{{$end_date}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<h3>Payment Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Payment Gateway</td>\r\n									<td>{{$payment_gateway}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment for</td>\r\n									<td>{{$payment_for}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Paid amount</td>\r\n									<td>{{$currency}}{{$paid_amount}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment status</td>\r\n									<td>{{$payment_status}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Transaction ID</td>\r\n									<td>{{$transaction_id}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Name</td>\r\n									<td>{{$billing_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Email</td>\r\n									<td>{{$billing_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Phone</td>\r\n									<td>{{$billing_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Country</td>\r\n									<td>{{$billing_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing State</td>\r\n									<td>{{$billing_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing City</td>\r\n									<td>{{$billing_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Address</td>\r\n									<td>{{$billing_address}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Name</td>\r\n									<td>{{$shipping_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Email</td>\r\n									<td>{{$shipping_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Phone</td>\r\n									<td>{{$shipping_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Country</td>\r\n									<td>{{$shipping_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping State</td>\r\n									<td>{{$shipping_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping City</td>\r\n									<td>{{$shipping_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Address</td>\r\n									<td>{{$shipping_address}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-21 10:39:42'),
(15, 'User Paid Auction Amount Email to Admin', 'user_paid_auction_amount_admin', 'Content', 'User Paid Auction Amount', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear Admin,</h3>\r\n\r\n						<p>{{$user_name}} has successfully paid Auction&nbsp;amount&nbsp;{{$currency}}{{$amount}} for Auction {{$auction_title}} on {{$date}}.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>User Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Username</td>\r\n									<td>{{$user_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Email</td>\r\n									<td>{{$email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Phone</td>\r\n									<td>{{$phone}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<h3>Auction Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Title</td>\r\n									<td>{{$auction_title}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Reserve Price</td>\r\n									<td>{{$currency}}{{$reserve_price}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Start Date</td>\r\n									<td>{{$start_date}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>End Date</td>\r\n									<td>{{$end_date}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<h3>Payment Details</h3>\r\n\r\n						<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td>Payment Gateway</td>\r\n									<td>{{$payment_gateway}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment for</td>\r\n									<td>{{$payment_for}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Paid amount</td>\r\n									<td>{{$currency}}{{$paid_amount}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Payment status</td>\r\n									<td>{{$payment_status}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Transaction ID</td>\r\n									<td>{{$transaction_id}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Name</td>\r\n									<td>{{$billing_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Email</td>\r\n									<td>{{$billing_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Phone</td>\r\n									<td>{{$billing_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Country</td>\r\n									<td>{{$billing_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing State</td>\r\n									<td>{{$billing_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing City</td>\r\n									<td>{{$billing_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Billing Address</td>\r\n									<td>{{$billing_address}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Name</td>\r\n									<td>{{$shipping_name}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Email</td>\r\n									<td>{{$shipping_email}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Phone</td>\r\n									<td>{{$shipping_phone}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Country</td>\r\n									<td>{{$shipping_country}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping State</td>\r\n									<td>{{$shipping_state}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping City</td>\r\n									<td>{{$shipping_city}}</td>\r\n								</tr>\r\n								<tr>\r\n									<td>Shipping Address</td>\r\n									<td>{{$shipping_address}}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-03-21 10:40:02'),
(16, 'Forgot Password', 'forgot_password', 'Content', 'Forgot Password', NULL, NULL, '<!-- BODY -->\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h3>Dear {{$username}},</h3>\r\n\r\n						<p>Your account password has been changed successfully in {{$site_title}}.</p>\r\n\r\n						<p>Enjoy the facilities provided by our system.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>Your credentials</p>\r\n\r\n						<p>Email: {{$email}}</p>\r\n\r\n						<p>Password: {{$password}}</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><a href=\"{{$site_url}}\">Read More</a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<!-- /BODY -->', NULL, '2018-04-07 10:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `testmonies`
--

CREATE TABLE `testmonies` (
  `id` int(10) UNSIGNED NOT NULL,
  `testmony` text CHARACTER SET utf8,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testmonies`
--

INSERT INTO `testmonies` (`id`, `testmony`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Explore the enigmatic stories behind six of the world’s most well-known works of art, including works by Leonardo da Vinci, Rembrandt, and Vermeer.', 3, 'Active', '2018-02-03 03:07:52', '2018-04-11 15:43:03'),
(2, 'Take a look at some of the most popular banned books in each literary genre and the different reasons for their censorship.', 4, 'Active', '2018-02-19 08:00:27', '2018-04-11 15:43:28'),
(3, 'Jewelry specialist Lucy P. Grogan of Grogan & Company answers frequently asked questions about buying an engagement ring at auction.', 12, 'Inactive', '2018-02-19 08:01:32', '2018-04-11 15:42:02'),
(4, 'To celebrate Chinese New Year, our editors welcome the Year of the Dog with some of our favorite depictions of man’s best friend in Chinese art.', 13, 'Inactive', '2018-02-19 08:01:42', '2018-04-11 15:41:33'),
(5, 'Prices for antique Meissen porcelain are rising, but collectors who have a keen eye for quality and craftsmanship can still find a relative bargain.', 15, 'Inactive', '2018-02-19 08:01:55', '2018-04-11 15:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `login_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `remember_token` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approved` tinyint(4) DEFAULT '0',
  `provider` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `provider_id` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `company_logo` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `billing_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `billing_email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `billing_phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `billing_country` int(10) DEFAULT NULL,
  `billing_state` int(10) DEFAULT NULL,
  `billing_city` int(10) DEFAULT NULL,
  `billing_address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_country` int(10) DEFAULT NULL,
  `shipping_state` int(10) DEFAULT NULL,
  `shipping_city` int(10) DEFAULT NULL,
  `shipping_address` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `slug`, `login_enabled`, `role_id`, `image`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`, `approved`, `provider`, `provider_id`, `country_id`, `state_id`, `city_id`, `company_logo`, `billing_name`, `billing_email`, `billing_phone`, `billing_country`, `billing_state`, `billing_city`, `billing_address`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_country`, `shipping_state`, `shipping_city`, `shipping_address`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '$2y$10$XGfAoq8xDoaigaK8bR3kveRcOvZucUPpFZFmTYZdHP2hfMZ0EgABW', 'admin-a797ef10865664bf24c9f65ef1a9dbbdaed20e33', 1, 1, '1.jpeg', '7894563211', '', 'zlzG4OBnQRxjp91xaKzpunEI0JvMXK1nLNPHuI6NUeHx9dh7onIILcmzb5Zl', '2018-02-02 00:41:13', '2018-02-19 07:30:34', 1, NULL, NULL, 105, 3, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Seller', 'seller', 'seller@seller.com', '$2y$10$EQHakHMHYRBrHLSA2Z0Kquxlyswh3D6A6ByOK6c7d14RrC/Q2/GAu', 'seller-1', 1, 2, '3.jpeg', '1212121212', 'Hitech City', 'T5B9znKRflMzCQwJjeMtvvydGYwgkFbg8JJIHMACKwkwP3dFy0aaxHSIfk9z', '2018-02-02 06:26:23', '2018-04-03 11:49:22', 1, NULL, NULL, 105, 3, 16, '3_company_logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Bidder MIch', 'bidder', 'bidder@bidder.com', '$2y$10$IGArsbKd3Oro0ELYDkdRbOjaCQyOY0WG3SpaAQHHWr..Rq4LkegUS', 'bidder-mich-9', 1, 3, '4_435011.jpeg', '8712345655', '', 'sZGHc5npyBue4gZfIJxAvYQiAzn7AMJJbrbC4d1pUGxA2ozkKc3NKgIfwp2R', '2018-02-05 01:47:39', '2018-04-11 15:55:20', 1, NULL, NULL, 105, 2, 9, NULL, 'Bidder MIch', 'bidder@bidder.com', '7897897987', 105, 1, 3, 'Main Road', 'Bidder MIch', 'bidder@bidder.com', '7897897897', 105, 3, 23, 'Main Road'),
(12, 'mich', 'michale', 'michalebidder@gmail.com', '$2y$10$1zYzJvrU4uge5GEALEMgNe75tOrlAyI/W1oNhFAhr8sS4wOQCbHlq', 'mich-3', 1, 3, '12.png', '8761234567', '', 'Bmhg9rLf4d80aLluJkmcUzhgKOTDkYCrUKTOD8K7sQUusI9FtruiDuS4xsTe', '2018-02-06 23:30:32', '2018-02-19 07:27:02', 1, NULL, NULL, 105, 4, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'jack', 'jack', 'jackseller@gmail.com', '$2y$10$LIM66udhO7/8XKm/sulMc.jr9I5Y1wjTjFsDeWK4EAD2PJFsSJVpq', 'jack-4', 1, 2, '13.png', '9988122121', '30-9,SR HILSKDFDLK,', 'QISXMdqHmYfqDhr6faxoLkU90RvXodCjdGQuEA4YuPwyt3CfDPgMZZcKHcrt', '2018-02-06 23:32:59', '2018-02-21 23:34:44', 1, NULL, NULL, 105, 1, 1, '13_company_logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'test', 'test', 'testeller@gmail.com', '$2y$10$n./UfiEV3.pPbcs0Gi9Sj.Oo..qemYfBVRM8epg0vkYNe3cn98ine', 'test-5', 1, 2, '14_3737275.jpeg', '7799881122', '', NULL, '2018-02-06 23:33:52', '2018-04-03 12:16:20', 1, NULL, NULL, 105, 2, 8, '14_company_logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'SMITH', 'smith', 'smithseller@gmail.com', '$2y$10$4ACEayJ14byNlbptOYMl4OcticUVKbI3Li6C2navRhiBU5B3a3BZW', 'smith-6', 1, 2, '15.png', '7766554455', '', NULL, '2018-02-06 23:34:59', '2018-02-21 23:34:27', 1, NULL, NULL, 105, 3, 16, '15_company_logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'John', 'john', 'johnbidder@gmail.com', '$2y$10$6cg0f6bC4hreqamqxWFNK.rknAJNlaHoTsWFuH9Hv3jW60TeATOoW', 'john-9', 1, 3, '16_4685694.jpeg', '8765678564', 'testtsdfds sfsd df', 'D1Jop0NVDNdvu1QkSw6PngADJZTwiuMYmurAJynZQ1YmtOLICWKAW1qMmY2f', '2018-02-06 23:36:57', '2018-04-09 04:26:11', 1, NULL, NULL, 105, 5, 34, NULL, 'John', 'johnbidder@gmail.com', '9876543234', 105, 3, 16, 'fsdfsdfdssdf', 'John', 'johnbidder@gmail.com', '3423423434', 105, 3, 16, 'sdfsdfsdfsdfsdfsdfds'),
(17, 'erwere', 'werwer', 'rerer@gmail.com', '$2y$10$w0NTia.vj2Lrjbl.Zh3CQO/QEYT858pfK1wyECxicMl8a6CGvKUc.', 'erwere-8', 1, 2, NULL, '8877443322', '', NULL, '2018-03-01 00:56:00', '2018-03-02 00:18:25', 1, NULL, NULL, 105, 3, 16, '17_company_logo.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Navaneetha', 'Ande', 'navani.ande152@gmail.com', '$2y$10$5b1LlkR2q.ooi2lWC5.oe.BedWYSK.csM4fkuhLMp0P6D6SwKtNuC', 'navaneetha-9', 1, 3, NULL, '9966874123', 'fsdfsdfsfd', 'zf4EjN9scYsbp2yNDIxzQ5m2wILu6eDAwGmZVUnkKsvwGd7uzFGKYwX3FEkJ', '2018-04-07 10:29:42', '2018-04-27 05:59:01', 1, NULL, NULL, 105, 3, 16, NULL, 'Ande Navaneetha', 'navani.ande152@gmail.com', '9977886655', 105, 3, 16, 'fdfsdfsd', 'Ande Navaneetha', 'navani.ande152@gmail.com', '9944553322', 105, 3, 16, 'sdfsdfsdf'),
(30, 'vishnu', 'vishnu', 'cstplvishnuvardhan@gmail.com', '$2y$10$E4DtwtQxeJMnZKHa/BzQ0OR.GuCKgkCE1B3ujxK61BiPojHJdZaZW', 'vishnu-10', 1, 3, NULL, NULL, NULL, NULL, '2018-04-10 19:17:45', '2018-04-10 19:19:56', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Vishnu', 'cstplvishnuvardhan@gmail.com', '7897897897', 105, 3, 16, 'Test Address', 'Vishnu', 'cstplvishnuvardhan@gmail.com', '7897897897', 105, 3, 16, 'Test-2'),
(31, 'Gollapalli john peter', 'gollapalli-john-peter-11', 'gollapallijohnpeter@gmail.com', '$2y$10$SJPXY7pDTALVQo390gkcLezRpBNh3ZpbFgYOuHlpAvNqAreENxEQ6', 'gollapalli-john-peter-11', 1, 3, NULL, NULL, NULL, 'pK5T14vGeNvtH03JbjUTsk8JnoS96sTIkX8FjrDjcnsAS0hc1zmqEiowDWkn', '2018-04-10 20:20:48', '2018-04-10 20:23:25', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Gollapalli', 'gollapallijohnpeter@gmail.com', '7569861197', 105, 3, 16, 'Marredpally', 'Gollapalli', 'gollapallijohnpeter@gmail.com', '7569861197', 105, 3, 16, 'Marredpally'),
(32, 'Manohar', 'Manohar', 'cstplmanohar@gmail.com', '$2y$10$hchEtvUjPHEmBCzkVL6fGOnKRpI.vkJLriTqKw/Nu5VrFe9Dwe9Ym', 'manohar-12', 1, 2, NULL, '7893694775', 'sefasdf', 'qfBxixNZ1Kx6HZ7gfFnwnfaXhhpAIEYfX2YDjPOQGcKwcxn5ElqoAiHzR8QJ', '2018-04-11 10:12:51', '2018-04-23 11:46:44', 1, NULL, NULL, 105, 2, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Sai', 'Sai', 'sai84130@gmail.com', '$2y$10$o1pHJfTJPn.LKbCwiq8h3eFrbYCMIYUlczJEYzkmR1YTQJhHjN2jO', 'sai-13', 1, 2, '33_4527422.jpeg', '7893694775', 'Main Road, Vijayawada', 'mZ5ZO58EgVwYX3WIumt9u7DrLVeac5RPWWGbFoKB2WvNIysX0inX1OlZs0EH', '2018-04-11 10:50:02', '2018-04-11 10:50:02', 1, NULL, NULL, 105, 2, 8, '33_5036406_company_logo.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Aruna Yellanuru', 'aruna-yellanuru-14', 'arunayellanuru@gmail.com', '$2y$10$pGrlniExpU4jXZpwqIQl4urO47tZyp.qUf/FffrId4WAxn8hw.cXm', 'aruna-yellanuru-14', 1, 3, NULL, NULL, NULL, '7mbe28UnzC8pdAd7hOrHv2EGc6DblQqGAus1JrNDVhK1bXsUMqFWoZgRHydr', '2018-04-11 14:41:19', '2018-04-23 12:01:43', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Aruna Yellanuru', 'arunayellanuru@gmail.com', '7893694775', 105, 2, 8, 'Test Address', 'Aruna Yellanuru', 'arunayellanuru@gmail.com', '7893694775', 105, 2, 8, 'Shipping Address *');

-- --------------------------------------------------------

--
-- Table structure for table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `action` varchar(191) CHARACTER SET utf8 NOT NULL,
  `action_model` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_actions`
--

INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'created', 'categories', 1, '2018-02-02 00:41:30', '2018-02-02 00:41:30', 1),
(2, 'created', 'sub_catogories', 1, '2018-02-02 00:41:30', '2018-02-02 00:41:30', 1),
(3, 'created', 'content_pages', 2, '2018-02-02 00:41:30', '2018-02-02 00:41:30', 1),
(4, 'created', 'content_pages', 3, '2018-02-02 00:41:31', '2018-02-02 00:41:31', 1),
(5, 'created', 'content_pages', 4, '2018-02-02 00:41:31', '2018-02-02 00:41:31', 1),
(6, 'created', 'faq_categories', 2, '2018-02-02 03:35:01', '2018-02-02 03:35:01', 1),
(7, 'created', 'faq_categories', 3, '2018-02-02 03:35:44', '2018-02-02 03:35:44', 1),
(8, 'created', 'faq_categories', 4, '2018-02-02 03:36:12', '2018-02-02 03:36:12', 1),
(9, 'updated', 'faq_categories', 1, '2018-02-02 03:38:33', '2018-02-02 03:38:33', 1),
(10, 'created', 'faq_questions', 2, '2018-02-02 03:54:16', '2018-02-02 03:54:16', 1),
(11, 'updated', 'faq_questions', 2, '2018-02-02 03:55:58', '2018-02-02 03:55:58', 1),
(12, 'created', 'categories', 2, '2018-02-02 04:09:46', '2018-02-02 04:09:46', 1),
(13, 'updated', 'categories', 2, '2018-02-02 04:31:48', '2018-02-02 04:31:48', 1),
(14, 'created', 'sub_catogories', 2, '2018-02-02 05:06:37', '2018-02-02 05:06:37', 1),
(15, 'updated', 'sub_catogories', 2, '2018-02-02 05:10:58', '2018-02-02 05:10:58', 1),
(16, 'updated', 'roles', 2, '2018-02-02 05:37:59', '2018-02-02 05:37:59', 1),
(17, 'created', 'users', 2, '2018-02-02 06:24:50', '2018-02-02 06:24:50', 1),
(18, 'created', 'users', 3, '2018-02-02 06:26:23', '2018-02-02 06:26:23', 1),
(19, 'updated', 'users', 3, '2018-02-02 06:40:10', '2018-02-02 06:40:10', 1),
(20, 'updated', 'users', 3, '2018-02-02 06:40:43', '2018-02-02 06:40:43', 1),
(21, 'updated', 'users', 3, '2018-02-02 06:40:44', '2018-02-02 06:40:44', 1),
(22, 'updated', 'countries', 1, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(23, 'updated', 'countries', 2, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(24, 'updated', 'countries', 3, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(25, 'updated', 'countries', 4, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(26, 'updated', 'countries', 5, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(27, 'updated', 'countries', 6, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(28, 'updated', 'countries', 7, '2018-02-02 07:04:31', '2018-02-02 07:04:31', 1),
(29, 'updated', 'countries', 8, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(30, 'updated', 'countries', 9, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(31, 'updated', 'countries', 10, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(32, 'updated', 'countries', 11, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(33, 'updated', 'countries', 12, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(34, 'updated', 'countries', 13, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(35, 'updated', 'countries', 14, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(36, 'updated', 'countries', 15, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(37, 'updated', 'countries', 16, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(38, 'updated', 'countries', 17, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(39, 'updated', 'countries', 18, '2018-02-02 07:04:32', '2018-02-02 07:04:32', 1),
(40, 'updated', 'countries', 19, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(41, 'updated', 'countries', 20, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(42, 'updated', 'countries', 21, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(43, 'updated', 'countries', 22, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(44, 'updated', 'countries', 23, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(45, 'updated', 'countries', 24, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(46, 'updated', 'countries', 25, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(47, 'updated', 'countries', 26, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(48, 'updated', 'countries', 27, '2018-02-02 07:04:33', '2018-02-02 07:04:33', 1),
(49, 'updated', 'countries', 28, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(50, 'updated', 'countries', 29, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(51, 'updated', 'countries', 30, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(52, 'updated', 'countries', 31, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(53, 'updated', 'countries', 32, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(54, 'updated', 'countries', 33, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(55, 'updated', 'countries', 34, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(56, 'updated', 'countries', 35, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(57, 'updated', 'countries', 36, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(58, 'updated', 'countries', 37, '2018-02-02 07:04:34', '2018-02-02 07:04:34', 1),
(59, 'updated', 'countries', 38, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(60, 'updated', 'countries', 39, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(61, 'updated', 'countries', 40, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(62, 'updated', 'countries', 41, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(63, 'updated', 'countries', 42, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(64, 'updated', 'countries', 43, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(65, 'updated', 'countries', 44, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(66, 'updated', 'countries', 45, '2018-02-02 07:04:35', '2018-02-02 07:04:35', 1),
(67, 'updated', 'countries', 46, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(68, 'updated', 'countries', 47, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(69, 'updated', 'countries', 48, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(70, 'updated', 'countries', 49, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(71, 'updated', 'countries', 50, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(72, 'updated', 'countries', 51, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(73, 'updated', 'countries', 52, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(74, 'updated', 'countries', 53, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(75, 'updated', 'countries', 54, '2018-02-02 07:04:36', '2018-02-02 07:04:36', 1),
(76, 'updated', 'countries', 55, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(77, 'updated', 'countries', 56, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(78, 'updated', 'countries', 57, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(79, 'updated', 'countries', 58, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(80, 'updated', 'countries', 59, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(81, 'updated', 'countries', 60, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(82, 'updated', 'countries', 61, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(83, 'updated', 'countries', 62, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(84, 'updated', 'countries', 63, '2018-02-02 07:04:37', '2018-02-02 07:04:37', 1),
(85, 'updated', 'countries', 64, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(86, 'updated', 'countries', 65, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(87, 'updated', 'countries', 66, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(88, 'updated', 'countries', 67, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(89, 'updated', 'countries', 68, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(90, 'updated', 'countries', 69, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(91, 'updated', 'countries', 70, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(92, 'updated', 'countries', 71, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(93, 'updated', 'countries', 72, '2018-02-02 07:04:38', '2018-02-02 07:04:38', 1),
(94, 'updated', 'countries', 73, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(95, 'updated', 'countries', 74, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(96, 'updated', 'countries', 75, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(97, 'updated', 'countries', 76, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(98, 'updated', 'countries', 77, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(99, 'updated', 'countries', 78, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(100, 'updated', 'countries', 79, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(101, 'updated', 'countries', 80, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(102, 'updated', 'countries', 81, '2018-02-02 07:04:39', '2018-02-02 07:04:39', 1),
(103, 'updated', 'countries', 82, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(104, 'updated', 'countries', 83, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(105, 'updated', 'countries', 84, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(106, 'updated', 'countries', 85, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(107, 'updated', 'countries', 86, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(108, 'updated', 'countries', 87, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(109, 'updated', 'countries', 88, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(110, 'updated', 'countries', 89, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(111, 'updated', 'countries', 90, '2018-02-02 07:04:40', '2018-02-02 07:04:40', 1),
(112, 'updated', 'countries', 91, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(113, 'updated', 'countries', 92, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(114, 'updated', 'countries', 93, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(115, 'updated', 'countries', 94, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(116, 'updated', 'countries', 95, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(117, 'updated', 'countries', 96, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(118, 'updated', 'countries', 97, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(119, 'updated', 'countries', 98, '2018-02-02 07:04:41', '2018-02-02 07:04:41', 1),
(120, 'updated', 'countries', 99, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(121, 'updated', 'countries', 100, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(122, 'updated', 'countries', 101, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(123, 'updated', 'countries', 102, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(124, 'updated', 'countries', 103, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(125, 'updated', 'countries', 104, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(126, 'updated', 'countries', 105, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(127, 'updated', 'countries', 106, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(128, 'updated', 'countries', 107, '2018-02-02 07:04:42', '2018-02-02 07:04:42', 1),
(129, 'updated', 'countries', 108, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(130, 'updated', 'countries', 109, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(131, 'updated', 'countries', 110, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(132, 'updated', 'countries', 111, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(133, 'updated', 'countries', 112, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(134, 'updated', 'countries', 113, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(135, 'updated', 'countries', 114, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(136, 'updated', 'countries', 115, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(137, 'updated', 'countries', 116, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(138, 'updated', 'countries', 117, '2018-02-02 07:04:43', '2018-02-02 07:04:43', 1),
(139, 'updated', 'countries', 118, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(140, 'updated', 'countries', 119, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(141, 'updated', 'countries', 120, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(142, 'updated', 'countries', 121, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(143, 'updated', 'countries', 122, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(144, 'updated', 'countries', 123, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(145, 'updated', 'countries', 124, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(146, 'updated', 'countries', 125, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(147, 'updated', 'countries', 126, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(148, 'updated', 'countries', 127, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(149, 'updated', 'countries', 128, '2018-02-02 07:04:44', '2018-02-02 07:04:44', 1),
(150, 'updated', 'countries', 129, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(151, 'updated', 'countries', 130, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(152, 'updated', 'countries', 131, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(153, 'updated', 'countries', 132, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(154, 'updated', 'countries', 133, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(155, 'updated', 'countries', 134, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(156, 'updated', 'countries', 135, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(157, 'updated', 'countries', 136, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(158, 'updated', 'countries', 137, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(159, 'updated', 'countries', 138, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(160, 'updated', 'countries', 139, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(161, 'updated', 'countries', 140, '2018-02-02 07:04:45', '2018-02-02 07:04:45', 1),
(162, 'updated', 'countries', 141, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(163, 'updated', 'countries', 142, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(164, 'updated', 'countries', 143, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(165, 'updated', 'countries', 144, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(166, 'updated', 'countries', 145, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(167, 'updated', 'countries', 146, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(168, 'updated', 'countries', 147, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(169, 'updated', 'countries', 148, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(170, 'updated', 'countries', 149, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(171, 'updated', 'countries', 150, '2018-02-02 07:04:46', '2018-02-02 07:04:46', 1),
(172, 'updated', 'countries', 151, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(173, 'updated', 'countries', 152, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(174, 'updated', 'countries', 153, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(175, 'updated', 'countries', 154, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(176, 'updated', 'countries', 155, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(177, 'updated', 'countries', 156, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(178, 'updated', 'countries', 157, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(179, 'updated', 'countries', 158, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(180, 'updated', 'countries', 159, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(181, 'updated', 'countries', 160, '2018-02-02 07:04:47', '2018-02-02 07:04:47', 1),
(182, 'updated', 'countries', 161, '2018-02-02 07:04:48', '2018-02-02 07:04:48', 1),
(183, 'updated', 'countries', 162, '2018-02-02 07:04:48', '2018-02-02 07:04:48', 1),
(184, 'updated', 'countries', 163, '2018-02-02 07:04:48', '2018-02-02 07:04:48', 1),
(185, 'updated', 'countries', 164, '2018-02-02 07:04:48', '2018-02-02 07:04:48', 1),
(186, 'updated', 'countries', 165, '2018-02-02 07:04:48', '2018-02-02 07:04:48', 1),
(187, 'updated', 'countries', 166, '2018-02-02 07:04:48', '2018-02-02 07:04:48', 1),
(188, 'updated', 'countries', 167, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(189, 'updated', 'countries', 168, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(190, 'updated', 'countries', 169, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(191, 'updated', 'countries', 170, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(192, 'updated', 'countries', 171, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(193, 'updated', 'countries', 172, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(194, 'updated', 'countries', 173, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(195, 'updated', 'countries', 174, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(196, 'updated', 'countries', 175, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(197, 'updated', 'countries', 176, '2018-02-02 07:04:49', '2018-02-02 07:04:49', 1),
(198, 'updated', 'countries', 177, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(199, 'updated', 'countries', 178, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(200, 'updated', 'countries', 179, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(201, 'updated', 'countries', 180, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(202, 'updated', 'countries', 181, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(203, 'updated', 'countries', 182, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(204, 'updated', 'countries', 183, '2018-02-02 07:04:50', '2018-02-02 07:04:50', 1),
(205, 'updated', 'countries', 184, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(206, 'updated', 'countries', 185, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(207, 'updated', 'countries', 186, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(208, 'updated', 'countries', 187, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(209, 'updated', 'countries', 188, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(210, 'updated', 'countries', 189, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(211, 'updated', 'countries', 190, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(212, 'updated', 'countries', 191, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(213, 'updated', 'countries', 192, '2018-02-02 07:04:51', '2018-02-02 07:04:51', 1),
(214, 'updated', 'countries', 193, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(215, 'updated', 'countries', 194, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(216, 'updated', 'countries', 195, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(217, 'updated', 'countries', 196, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(218, 'updated', 'countries', 197, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(219, 'updated', 'countries', 198, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(220, 'updated', 'countries', 199, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(221, 'updated', 'countries', 200, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(222, 'updated', 'countries', 201, '2018-02-02 07:04:52', '2018-02-02 07:04:52', 1),
(223, 'updated', 'countries', 202, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(224, 'updated', 'countries', 203, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(225, 'updated', 'countries', 204, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(226, 'updated', 'countries', 205, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(227, 'updated', 'countries', 206, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(228, 'updated', 'countries', 207, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(229, 'updated', 'countries', 208, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(230, 'updated', 'countries', 209, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(231, 'updated', 'countries', 210, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(232, 'updated', 'countries', 211, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(233, 'updated', 'countries', 212, '2018-02-02 07:04:53', '2018-02-02 07:04:53', 1),
(234, 'updated', 'countries', 213, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(235, 'updated', 'countries', 214, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(236, 'updated', 'countries', 215, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(237, 'updated', 'countries', 216, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(238, 'updated', 'countries', 217, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(239, 'updated', 'countries', 218, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(240, 'updated', 'countries', 219, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(241, 'updated', 'countries', 220, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(242, 'updated', 'countries', 221, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(243, 'updated', 'countries', 222, '2018-02-02 07:04:54', '2018-02-02 07:04:54', 1),
(244, 'updated', 'countries', 223, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(245, 'updated', 'countries', 224, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(246, 'updated', 'countries', 225, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(247, 'updated', 'countries', 226, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(248, 'updated', 'countries', 227, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(249, 'updated', 'countries', 228, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(250, 'updated', 'countries', 229, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(251, 'updated', 'countries', 230, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(252, 'updated', 'countries', 231, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(253, 'updated', 'countries', 232, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(254, 'updated', 'countries', 233, '2018-02-02 07:04:55', '2018-02-02 07:04:55', 1),
(255, 'updated', 'countries', 234, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(256, 'updated', 'countries', 235, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(257, 'updated', 'countries', 236, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(258, 'updated', 'countries', 237, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(259, 'updated', 'countries', 238, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(260, 'updated', 'countries', 239, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(261, 'updated', 'countries', 240, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(262, 'updated', 'countries', 241, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(263, 'updated', 'countries', 242, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(264, 'updated', 'countries', 243, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(265, 'updated', 'countries', 244, '2018-02-02 07:04:56', '2018-02-02 07:04:56', 1),
(266, 'updated', 'countries', 245, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(267, 'updated', 'countries', 246, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(268, 'updated', 'countries', 247, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(269, 'updated', 'countries', 248, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(270, 'updated', 'countries', 249, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(271, 'updated', 'countries', 250, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(272, 'updated', 'countries', 251, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(273, 'updated', 'countries', 252, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(274, 'updated', 'countries', 253, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(275, 'updated', 'countries', 254, '2018-02-02 07:04:57', '2018-02-02 07:04:57', 1),
(276, 'updated', 'countries', 255, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(277, 'updated', 'countries', 256, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(278, 'updated', 'countries', 257, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(279, 'updated', 'countries', 258, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(280, 'updated', 'countries', 259, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(281, 'updated', 'countries', 260, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(282, 'updated', 'countries', 261, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(283, 'updated', 'countries', 262, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(284, 'updated', 'countries', 263, '2018-02-02 07:04:58', '2018-02-02 07:04:58', 1),
(285, 'updated', 'countries', 264, '2018-02-02 07:04:59', '2018-02-02 07:04:59', 1),
(286, 'updated', 'countries', 1, '2018-02-02 07:05:33', '2018-02-02 07:05:33', 1),
(287, 'updated', 'countries', 2, '2018-02-02 07:05:33', '2018-02-02 07:05:33', 1),
(288, 'updated', 'countries', 3, '2018-02-02 07:05:33', '2018-02-02 07:05:33', 1),
(289, 'updated', 'countries', 4, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(290, 'updated', 'countries', 5, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(291, 'updated', 'countries', 6, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(292, 'updated', 'countries', 7, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(293, 'updated', 'countries', 8, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(294, 'updated', 'countries', 9, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(295, 'updated', 'countries', 10, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(296, 'updated', 'countries', 11, '2018-02-02 07:05:34', '2018-02-02 07:05:34', 1),
(297, 'updated', 'countries', 12, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(298, 'updated', 'countries', 13, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(299, 'updated', 'countries', 14, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(300, 'updated', 'countries', 15, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(301, 'updated', 'countries', 16, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(302, 'updated', 'countries', 17, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(303, 'updated', 'countries', 18, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(304, 'updated', 'countries', 19, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(305, 'updated', 'countries', 20, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(306, 'updated', 'countries', 21, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(307, 'updated', 'countries', 22, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(308, 'updated', 'countries', 23, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(309, 'updated', 'countries', 24, '2018-02-02 07:05:35', '2018-02-02 07:05:35', 1),
(310, 'updated', 'countries', 25, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(311, 'updated', 'countries', 26, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(312, 'updated', 'countries', 27, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(313, 'updated', 'countries', 28, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(314, 'updated', 'countries', 29, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(315, 'updated', 'countries', 30, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(316, 'updated', 'countries', 31, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(317, 'updated', 'countries', 32, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(318, 'updated', 'countries', 33, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(319, 'updated', 'countries', 34, '2018-02-02 07:05:36', '2018-02-02 07:05:36', 1),
(320, 'updated', 'countries', 35, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(321, 'updated', 'countries', 36, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(322, 'updated', 'countries', 37, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(323, 'updated', 'countries', 38, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(324, 'updated', 'countries', 39, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(325, 'updated', 'countries', 40, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(326, 'updated', 'countries', 41, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(327, 'updated', 'countries', 42, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(328, 'updated', 'countries', 43, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(329, 'updated', 'countries', 44, '2018-02-02 07:05:37', '2018-02-02 07:05:37', 1),
(330, 'updated', 'countries', 45, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(331, 'updated', 'countries', 46, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(332, 'updated', 'countries', 47, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(333, 'updated', 'countries', 48, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(334, 'updated', 'countries', 49, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(335, 'updated', 'countries', 50, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(336, 'updated', 'countries', 51, '2018-02-02 07:05:38', '2018-02-02 07:05:38', 1),
(337, 'updated', 'countries', 52, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(338, 'updated', 'countries', 53, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(339, 'updated', 'countries', 54, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(340, 'updated', 'countries', 55, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(341, 'updated', 'countries', 56, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(342, 'updated', 'countries', 57, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(343, 'updated', 'countries', 58, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(344, 'updated', 'countries', 59, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(345, 'updated', 'countries', 60, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(346, 'updated', 'countries', 61, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(347, 'updated', 'countries', 62, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(348, 'updated', 'countries', 63, '2018-02-02 07:05:39', '2018-02-02 07:05:39', 1),
(349, 'updated', 'countries', 64, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(350, 'updated', 'countries', 65, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(351, 'updated', 'countries', 66, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(352, 'updated', 'countries', 67, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(353, 'updated', 'countries', 68, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(354, 'updated', 'countries', 69, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(355, 'updated', 'countries', 70, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(356, 'updated', 'countries', 71, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(357, 'updated', 'countries', 72, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(358, 'updated', 'countries', 73, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(359, 'updated', 'countries', 74, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(360, 'updated', 'countries', 75, '2018-02-02 07:05:40', '2018-02-02 07:05:40', 1),
(361, 'updated', 'countries', 76, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(362, 'updated', 'countries', 77, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(363, 'updated', 'countries', 78, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(364, 'updated', 'countries', 79, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(365, 'updated', 'countries', 80, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(366, 'updated', 'countries', 81, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(367, 'updated', 'countries', 82, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(368, 'updated', 'countries', 83, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(369, 'updated', 'countries', 84, '2018-02-02 07:05:41', '2018-02-02 07:05:41', 1),
(370, 'updated', 'countries', 85, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(371, 'updated', 'countries', 86, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(372, 'updated', 'countries', 87, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(373, 'updated', 'countries', 88, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(374, 'updated', 'countries', 89, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(375, 'updated', 'countries', 90, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(376, 'updated', 'countries', 91, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(377, 'updated', 'countries', 92, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(378, 'updated', 'countries', 93, '2018-02-02 07:05:42', '2018-02-02 07:05:42', 1),
(379, 'updated', 'countries', 94, '2018-02-02 07:05:43', '2018-02-02 07:05:43', 1),
(380, 'updated', 'countries', 95, '2018-02-02 07:05:43', '2018-02-02 07:05:43', 1),
(381, 'updated', 'countries', 96, '2018-02-02 07:05:43', '2018-02-02 07:05:43', 1),
(382, 'updated', 'countries', 97, '2018-02-02 07:05:43', '2018-02-02 07:05:43', 1),
(383, 'updated', 'countries', 98, '2018-02-02 07:05:43', '2018-02-02 07:05:43', 1),
(384, 'updated', 'countries', 99, '2018-02-02 07:05:43', '2018-02-02 07:05:43', 1),
(385, 'updated', 'countries', 100, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(386, 'updated', 'countries', 101, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(387, 'updated', 'countries', 102, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(388, 'updated', 'countries', 103, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(389, 'updated', 'countries', 104, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(390, 'updated', 'countries', 105, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(391, 'updated', 'countries', 106, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(392, 'updated', 'countries', 107, '2018-02-02 07:05:44', '2018-02-02 07:05:44', 1),
(393, 'updated', 'countries', 108, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(394, 'updated', 'countries', 109, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(395, 'updated', 'countries', 110, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(396, 'updated', 'countries', 111, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(397, 'updated', 'countries', 112, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(398, 'updated', 'countries', 113, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(399, 'updated', 'countries', 114, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(400, 'updated', 'countries', 115, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(401, 'updated', 'countries', 116, '2018-02-02 07:05:45', '2018-02-02 07:05:45', 1),
(402, 'updated', 'countries', 117, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(403, 'updated', 'countries', 118, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(404, 'updated', 'countries', 119, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(405, 'updated', 'countries', 120, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(406, 'updated', 'countries', 121, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(407, 'updated', 'countries', 122, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(408, 'updated', 'countries', 123, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(409, 'updated', 'countries', 124, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(410, 'updated', 'countries', 125, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(411, 'updated', 'countries', 126, '2018-02-02 07:05:46', '2018-02-02 07:05:46', 1),
(412, 'updated', 'countries', 127, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(413, 'updated', 'countries', 128, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(414, 'updated', 'countries', 129, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(415, 'updated', 'countries', 130, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(416, 'updated', 'countries', 131, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(417, 'updated', 'countries', 132, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(418, 'updated', 'countries', 133, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(419, 'updated', 'countries', 134, '2018-02-02 07:05:47', '2018-02-02 07:05:47', 1),
(420, 'updated', 'countries', 135, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(421, 'updated', 'countries', 136, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(422, 'updated', 'countries', 137, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(423, 'updated', 'countries', 138, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(424, 'updated', 'countries', 139, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(425, 'updated', 'countries', 140, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(426, 'updated', 'countries', 141, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(427, 'updated', 'countries', 142, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(428, 'updated', 'countries', 143, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(429, 'updated', 'countries', 144, '2018-02-02 07:05:48', '2018-02-02 07:05:48', 1),
(430, 'updated', 'countries', 145, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(431, 'updated', 'countries', 146, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(432, 'updated', 'countries', 147, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(433, 'updated', 'countries', 148, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(434, 'updated', 'countries', 149, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(435, 'updated', 'countries', 150, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(436, 'updated', 'countries', 151, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(437, 'updated', 'countries', 152, '2018-02-02 07:05:49', '2018-02-02 07:05:49', 1),
(438, 'updated', 'countries', 153, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(439, 'updated', 'countries', 154, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(440, 'updated', 'countries', 155, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(441, 'updated', 'countries', 156, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(442, 'updated', 'countries', 157, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(443, 'updated', 'countries', 158, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(444, 'updated', 'countries', 159, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(445, 'updated', 'countries', 160, '2018-02-02 07:05:50', '2018-02-02 07:05:50', 1),
(446, 'updated', 'countries', 161, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(447, 'updated', 'countries', 162, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(448, 'updated', 'countries', 163, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(449, 'updated', 'countries', 164, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(450, 'updated', 'countries', 165, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(451, 'updated', 'countries', 166, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(452, 'updated', 'countries', 167, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(453, 'updated', 'countries', 168, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(454, 'updated', 'countries', 169, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(455, 'updated', 'countries', 170, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(456, 'updated', 'countries', 171, '2018-02-02 07:05:51', '2018-02-02 07:05:51', 1),
(457, 'updated', 'countries', 172, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(458, 'updated', 'countries', 173, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(459, 'updated', 'countries', 174, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(460, 'updated', 'countries', 175, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(461, 'updated', 'countries', 176, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(462, 'updated', 'countries', 177, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(463, 'updated', 'countries', 178, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(464, 'updated', 'countries', 179, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(465, 'updated', 'countries', 180, '2018-02-02 07:05:52', '2018-02-02 07:05:52', 1),
(466, 'updated', 'countries', 181, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(467, 'updated', 'countries', 182, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(468, 'updated', 'countries', 183, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(469, 'updated', 'countries', 184, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(470, 'updated', 'countries', 185, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(471, 'updated', 'countries', 186, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(472, 'updated', 'countries', 187, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(473, 'updated', 'countries', 188, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(474, 'updated', 'countries', 189, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(475, 'updated', 'countries', 190, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(476, 'updated', 'countries', 191, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(477, 'updated', 'countries', 192, '2018-02-02 07:05:53', '2018-02-02 07:05:53', 1),
(478, 'updated', 'countries', 193, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(479, 'updated', 'countries', 194, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(480, 'updated', 'countries', 195, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(481, 'updated', 'countries', 196, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(482, 'updated', 'countries', 197, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(483, 'updated', 'countries', 198, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(484, 'updated', 'countries', 199, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(485, 'updated', 'countries', 200, '2018-02-02 07:05:54', '2018-02-02 07:05:54', 1),
(486, 'updated', 'countries', 201, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(487, 'updated', 'countries', 202, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(488, 'updated', 'countries', 203, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(489, 'updated', 'countries', 204, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(490, 'updated', 'countries', 205, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(491, 'updated', 'countries', 206, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(492, 'updated', 'countries', 207, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(493, 'updated', 'countries', 208, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(494, 'updated', 'countries', 209, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(495, 'updated', 'countries', 210, '2018-02-02 07:05:55', '2018-02-02 07:05:55', 1),
(496, 'updated', 'countries', 211, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(497, 'updated', 'countries', 212, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(498, 'updated', 'countries', 213, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(499, 'updated', 'countries', 214, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(500, 'updated', 'countries', 215, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(501, 'updated', 'countries', 216, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(502, 'updated', 'countries', 217, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(503, 'updated', 'countries', 218, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(504, 'updated', 'countries', 219, '2018-02-02 07:05:56', '2018-02-02 07:05:56', 1),
(505, 'updated', 'countries', 220, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(506, 'updated', 'countries', 221, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(507, 'updated', 'countries', 222, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(508, 'updated', 'countries', 223, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(509, 'updated', 'countries', 224, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(510, 'updated', 'countries', 225, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(511, 'updated', 'countries', 226, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(512, 'updated', 'countries', 227, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(513, 'updated', 'countries', 228, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(514, 'updated', 'countries', 229, '2018-02-02 07:05:57', '2018-02-02 07:05:57', 1),
(515, 'updated', 'countries', 230, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(516, 'updated', 'countries', 231, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(517, 'updated', 'countries', 232, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(518, 'updated', 'countries', 233, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(519, 'updated', 'countries', 234, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(520, 'updated', 'countries', 235, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(521, 'updated', 'countries', 236, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(522, 'updated', 'countries', 237, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(523, 'updated', 'countries', 238, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(524, 'updated', 'countries', 239, '2018-02-02 07:05:58', '2018-02-02 07:05:58', 1),
(525, 'updated', 'countries', 240, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(526, 'updated', 'countries', 241, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(527, 'updated', 'countries', 242, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(528, 'updated', 'countries', 243, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(529, 'updated', 'countries', 244, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(530, 'updated', 'countries', 245, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(531, 'updated', 'countries', 246, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(532, 'updated', 'countries', 247, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(533, 'updated', 'countries', 248, '2018-02-02 07:05:59', '2018-02-02 07:05:59', 1),
(534, 'updated', 'countries', 249, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(535, 'updated', 'countries', 250, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(536, 'updated', 'countries', 251, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(537, 'updated', 'countries', 252, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(538, 'updated', 'countries', 253, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(539, 'updated', 'countries', 254, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(540, 'updated', 'countries', 255, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(541, 'updated', 'countries', 256, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(542, 'updated', 'countries', 257, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(543, 'updated', 'countries', 258, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(544, 'updated', 'countries', 259, '2018-02-02 07:06:00', '2018-02-02 07:06:00', 1),
(545, 'updated', 'countries', 260, '2018-02-02 07:06:01', '2018-02-02 07:06:01', 1),
(546, 'updated', 'countries', 261, '2018-02-02 07:06:01', '2018-02-02 07:06:01', 1),
(547, 'updated', 'countries', 262, '2018-02-02 07:06:01', '2018-02-02 07:06:01', 1),
(548, 'updated', 'countries', 263, '2018-02-02 07:06:01', '2018-02-02 07:06:01', 1),
(549, 'updated', 'countries', 264, '2018-02-02 07:06:01', '2018-02-02 07:06:01', 1),
(550, 'updated', 'countries', 1, '2018-02-02 07:07:41', '2018-02-02 07:07:41', 1),
(551, 'created', 'states', 1, '2018-02-02 07:26:55', '2018-02-02 07:26:55', 1),
(552, 'updated', 'states', 1, '2018-02-02 07:27:38', '2018-02-02 07:27:38', 1),
(553, 'updated', 'states', 1, '2018-02-02 07:30:06', '2018-02-02 07:30:06', 1),
(554, 'created', 'cities', 1, '2018-02-02 07:31:14', '2018-02-02 07:31:14', 1),
(555, 'updated', 'cities', 1, '2018-02-02 07:33:14', '2018-02-02 07:33:14', 1),
(556, 'updated', 'users', 1, '2018-02-02 08:22:40', '2018-02-02 08:22:40', 1),
(557, 'created', 'content_pages', 5, '2018-02-03 00:19:20', '2018-02-03 00:19:20', 1),
(558, 'updated', 'content_pages', 5, '2018-02-03 00:23:31', '2018-02-03 00:23:31', 1),
(559, 'deleted', 'content_pages', 5, '2018-02-03 00:28:12', '2018-02-03 00:28:12', 1),
(560, 'created', 'testmonies', 1, '2018-02-03 03:07:52', '2018-02-03 03:07:52', 1),
(561, 'updated', 'testmonies', 1, '2018-02-03 03:11:52', '2018-02-03 03:11:52', 1),
(562, 'created', 'templates', 1, '2018-02-03 04:09:07', '2018-02-03 04:09:07', 1),
(563, 'updated', 'templates', 1, '2018-02-03 04:13:41', '2018-02-03 04:13:41', 1),
(564, 'created', 'categories', 3, '2018-02-03 06:25:49', '2018-02-03 06:25:49', 1),
(565, 'created', 'categories', 4, '2018-02-03 06:26:02', '2018-02-03 06:26:02', 1),
(566, 'created', 'categories', 5, '2018-02-03 06:26:14', '2018-02-03 06:26:14', 1),
(567, 'created', 'categories', 6, '2018-02-03 06:26:24', '2018-02-03 06:26:24', 1),
(568, 'created', 'categories', 7, '2018-02-03 06:26:33', '2018-02-03 06:26:33', 1),
(569, 'created', 'categories', 8, '2018-02-03 06:26:41', '2018-02-03 06:26:41', 1),
(570, 'created', 'sub_catogories', 3, '2018-02-03 06:26:55', '2018-02-03 06:26:55', 1),
(571, 'created', 'sub_catogories', 4, '2018-02-03 06:27:08', '2018-02-03 06:27:08', 1),
(572, 'created', 'sub_catogories', 5, '2018-02-03 06:27:18', '2018-02-03 06:27:18', 1),
(573, 'created', 'sub_catogories', 6, '2018-02-03 06:27:27', '2018-02-03 06:27:27', 1),
(574, 'created', 'sub_catogories', 7, '2018-02-03 06:27:34', '2018-02-03 06:27:34', 1),
(575, 'created', 'sub_catogories', 8, '2018-02-03 06:27:42', '2018-02-03 06:27:42', 1),
(576, 'created', 'sub_catogories', 9, '2018-02-03 06:27:59', '2018-02-03 06:27:59', 1),
(577, 'created', 'sub_catogories', 10, '2018-02-03 06:28:20', '2018-02-03 06:28:20', 1),
(578, 'created', 'sub_catogories', 11, '2018-02-03 06:28:30', '2018-02-03 06:28:30', 1),
(579, 'created', 'sub_catogories', 12, '2018-02-03 06:28:42', '2018-02-03 06:28:42', 1),
(580, 'created', 'sub_catogories', 13, '2018-02-03 06:28:57', '2018-02-03 06:28:57', 1),
(581, 'created', 'sub_catogories', 14, '2018-02-03 06:29:05', '2018-02-03 06:29:05', 1),
(582, 'created', 'auctions', 1, '2018-02-03 06:41:12', '2018-02-03 06:41:12', 1),
(583, 'updated', 'auctions', 1, '2018-02-03 06:47:08', '2018-02-03 06:47:08', 1),
(584, 'updated', 'auctions', 1, '2018-02-03 06:47:15', '2018-02-03 06:47:15', 1),
(585, 'updated', 'auctions', 1, '2018-02-03 06:47:22', '2018-02-03 06:47:22', 1),
(586, 'updated', 'users', 3, '2018-02-03 07:05:03', '2018-02-03 07:05:03', 3),
(587, 'updated', 'users', 1, '2018-02-03 08:37:08', '2018-02-03 08:37:08', 1),
(588, 'updated', 'users', 1, '2018-02-05 01:49:40', '2018-02-05 01:49:40', 1),
(589, 'updated', 'users', 1, '2018-02-05 02:49:47', '2018-02-05 02:49:47', 1),
(590, 'updated', 'users', 3, '2018-02-05 03:09:09', '2018-02-05 03:09:09', 3),
(591, 'updated', 'users', 3, '2018-02-05 03:28:32', '2018-02-05 03:28:32', 3),
(592, 'updated', 'users', 1, '2018-02-05 04:05:08', '2018-02-05 04:05:08', 1),
(593, 'updated', 'users', 3, '2018-02-05 04:11:28', '2018-02-05 04:11:28', 3),
(594, 'updated', 'users', 1, '2018-02-05 04:13:05', '2018-02-05 04:13:05', 1),
(595, 'updated', 'users', 3, '2018-02-05 07:25:47', '2018-02-05 07:25:47', 3),
(596, 'updated', 'users', 1, '2018-02-05 07:49:46', '2018-02-05 07:49:46', 1),
(597, 'updated', 'users', 3, '2018-02-05 07:49:49', '2018-02-05 07:49:49', 3),
(598, 'created', 'auctions', 2, '2018-02-06 00:52:52', '2018-02-06 00:52:52', 3),
(599, 'updated', 'auctions', 2, '2018-02-06 01:04:47', '2018-02-06 01:04:47', 3),
(600, 'created', 'auctions', 3, '2018-02-06 01:10:58', '2018-02-06 01:10:58', 3),
(601, 'updated', 'auctions', 3, '2018-02-06 01:11:35', '2018-02-06 01:11:35', 3),
(602, 'updated', 'auctions', 3, '2018-02-06 01:12:36', '2018-02-06 01:12:36', 3),
(603, 'updated', 'auctions', 3, '2018-02-06 01:25:38', '2018-02-06 01:25:38', 3),
(604, 'updated', 'auctions', 2, '2018-02-06 01:27:21', '2018-02-06 01:27:21', 3),
(605, 'updated', 'auctions', 3, '2018-02-06 01:33:18', '2018-02-06 01:33:18', 1),
(606, 'updated', 'auctions', 2, '2018-02-06 01:34:38', '2018-02-06 01:34:38', 1);
INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(607, 'updated', 'auctions', 3, '2018-02-06 01:38:04', '2018-02-06 01:38:04', 1),
(608, 'created', 'auctions', 4, '2018-02-06 01:41:18', '2018-02-06 01:41:18', 1),
(609, 'created', 'auctions', 5, '2018-02-06 01:43:33', '2018-02-06 01:43:33', 1),
(610, 'created', 'auctions', 6, '2018-02-06 01:47:57', '2018-02-06 01:47:57', 1),
(611, 'created', 'auctions', 7, '2018-02-06 01:49:54', '2018-02-06 01:49:54', 3),
(612, 'created', 'auctions', 8, '2018-02-06 01:51:33', '2018-02-06 01:51:33', 3),
(613, 'updated', 'users', 1, '2018-02-06 03:00:00', '2018-02-06 03:00:00', 1),
(614, 'updated', 'users', 3, '2018-02-06 03:00:09', '2018-02-06 03:00:09', 3),
(615, 'created', 'internal_notifications', 1, '2018-02-06 04:37:48', '2018-02-06 04:37:48', 1),
(616, 'created', 'internal_notifications', 2, '2018-02-06 04:57:21', '2018-02-06 04:57:21', 1),
(617, 'updated', 'users', 3, '2018-02-06 05:38:47', '2018-02-06 05:38:47', 3),
(618, 'updated', 'users', 3, '2018-02-06 05:43:31', '2018-02-06 05:43:31', 3),
(619, 'updated', 'templates', 1, '2018-02-06 06:07:13', '2018-02-06 06:07:13', 1),
(620, 'updated', 'templates', 1, '2018-02-06 06:11:48', '2018-02-06 06:11:48', 1),
(621, 'created', 'templates', 2, '2018-02-06 06:31:02', '2018-02-06 06:31:02', 1),
(622, 'created', 'templates', 3, '2018-02-06 06:34:01', '2018-02-06 06:34:01', 1),
(623, 'created', 'templates', 4, '2018-02-06 06:35:15', '2018-02-06 06:35:15', 1),
(624, 'updated', 'templates', 1, '2018-02-06 07:45:53', '2018-02-06 07:45:53', 1),
(625, 'updated', 'users', 1, '2018-02-06 08:00:22', '2018-02-06 08:00:22', 1),
(626, 'updated', 'users', 3, '2018-02-06 23:03:00', '2018-02-06 23:03:00', 3),
(627, 'updated', 'templates', 3, '2018-02-06 23:16:24', '2018-02-06 23:16:24', 1),
(628, 'updated', 'templates', 4, '2018-02-06 23:16:37', '2018-02-06 23:16:37', 1),
(629, 'updated', 'templates', 1, '2018-02-06 23:17:41', '2018-02-06 23:17:41', 1),
(630, 'updated', 'templates', 1, '2018-02-06 23:19:53', '2018-02-06 23:19:53', 1),
(631, 'updated', 'templates', 5, '2018-02-06 23:27:32', '2018-02-06 23:27:32', 1),
(632, 'updated', 'templates', 2, '2018-02-06 23:44:24', '2018-02-06 23:44:24', 1),
(633, 'updated', 'templates', 2, '2018-02-07 00:04:22', '2018-02-07 00:04:22', 1),
(634, 'updated', 'templates', 6, '2018-02-07 00:24:40', '2018-02-07 00:24:40', 1),
(635, 'created', 'auctions', 9, '2018-02-07 00:43:58', '2018-02-07 00:43:58', 1),
(636, 'updated', 'templates', 6, '2018-02-07 00:47:06', '2018-02-07 00:47:06', 1),
(637, 'created', 'auctions', 10, '2018-02-07 00:49:17', '2018-02-07 00:49:17', 3),
(638, 'created', 'auctions', 11, '2018-02-07 00:53:33', '2018-02-07 00:53:33', 3),
(639, 'created', 'auctions', 12, '2018-02-07 01:01:15', '2018-02-07 01:01:15', 3),
(640, 'updated', 'templates', 7, '2018-02-07 01:04:56', '2018-02-07 01:04:56', 1),
(641, 'updated', 'auctions', 11, '2018-02-07 01:10:32', '2018-02-07 01:10:32', 3),
(642, 'updated', 'auctions', 10, '2018-02-07 01:11:33', '2018-02-07 01:11:33', 1),
(643, 'updated', 'users', 3, '2018-02-07 01:18:13', '2018-02-07 01:18:13', 3),
(644, 'updated', 'users', 1, '2018-02-07 01:36:26', '2018-02-07 01:36:26', 1),
(645, 'updated', 'users', 3, '2018-02-07 02:03:14', '2018-02-07 02:03:14', 3),
(646, 'updated', 'users', 4, '2018-02-07 02:04:24', '2018-02-07 02:04:24', 4),
(647, 'updated', 'users', 12, '2018-02-07 02:04:35', '2018-02-07 02:04:35', 12),
(648, 'updated', 'users', 1, '2018-02-07 04:04:08', '2018-02-07 04:04:08', 1),
(649, 'updated', 'users', 3, '2018-02-07 04:17:45', '2018-02-07 04:17:45', 3),
(650, 'updated', 'users', 3, '2018-02-07 07:21:38', '2018-02-07 07:21:38', 3),
(651, 'created', 'sub_catogories', 15, '2018-02-07 07:32:38', '2018-02-07 07:32:38', 1),
(652, 'deleted', 'sub_catogories', 15, '2018-02-07 07:32:48', '2018-02-07 07:32:48', 1),
(653, 'updated', 'users', 3, '2018-02-08 00:03:26', '2018-02-08 00:03:26', 3),
(654, 'updated', 'users', 1, '2018-02-08 03:07:30', '2018-02-08 03:07:30', 1),
(655, 'updated', 'users', 1, '2018-02-08 04:37:09', '2018-02-08 04:37:09', 1),
(656, 'updated', 'users', 1, '2018-02-15 07:00:41', '2018-02-15 07:00:41', 1),
(657, 'updated', 'users', 1, '2018-02-19 00:30:56', '2018-02-19 00:30:56', 1),
(658, 'updated', 'users', 1, '2018-02-19 00:31:46', '2018-02-19 00:31:46', 1),
(659, 'updated', 'auctions', 12, '2018-02-19 04:45:56', '2018-02-19 04:45:56', 1),
(660, 'updated', 'auctions', 6, '2018-02-19 04:54:19', '2018-02-19 04:54:19', 1),
(661, 'updated', 'auctions', 11, '2018-02-19 05:15:04', '2018-02-19 05:15:04', 1),
(662, 'updated', 'auctions', 10, '2018-02-19 05:25:21', '2018-02-19 05:25:21', 1),
(663, 'updated', 'auctions', 10, '2018-02-19 05:26:14', '2018-02-19 05:26:14', 1),
(664, 'updated', 'auctions', 9, '2018-02-19 05:28:06', '2018-02-19 05:28:06', 1),
(665, 'updated', 'auctions', 8, '2018-02-19 05:29:38', '2018-02-19 05:29:38', 1),
(666, 'updated', 'auctions', 7, '2018-02-19 05:31:57', '2018-02-19 05:31:57', 1),
(667, 'updated', 'auctions', 6, '2018-02-19 05:32:38', '2018-02-19 05:32:38', 1),
(668, 'updated', 'auctions', 5, '2018-02-19 05:34:20', '2018-02-19 05:34:20', 1),
(669, 'updated', 'auctions', 4, '2018-02-19 05:34:49', '2018-02-19 05:34:49', 1),
(670, 'updated', 'auctions', 3, '2018-02-19 05:35:28', '2018-02-19 05:35:28', 1),
(671, 'updated', 'auctions', 2, '2018-02-19 05:36:10', '2018-02-19 05:36:10', 1),
(672, 'updated', 'auctions', 1, '2018-02-19 05:36:55', '2018-02-19 05:36:55', 1),
(673, 'updated', 'auctions', 1, '2018-02-19 05:37:11', '2018-02-19 05:37:11', 1),
(674, 'updated', 'users', 13, '2018-02-19 07:04:17', '2018-02-19 07:04:17', 1),
(675, 'updated', 'users', 13, '2018-02-19 07:07:12', '2018-02-19 07:07:12', 1),
(676, 'updated', 'users', 13, '2018-02-19 07:07:13', '2018-02-19 07:07:13', 1),
(677, 'created', 'states', 2, '2018-02-19 07:08:13', '2018-02-19 07:08:13', 1),
(678, 'created', 'states', 3, '2018-02-19 07:08:22', '2018-02-19 07:08:22', 1),
(679, 'created', 'states', 4, '2018-02-19 07:08:42', '2018-02-19 07:08:42', 1),
(680, 'created', 'states', 5, '2018-02-19 07:08:54', '2018-02-19 07:08:54', 1),
(681, 'created', 'states', 6, '2018-02-19 07:09:06', '2018-02-19 07:09:06', 1),
(682, 'created', 'states', 7, '2018-02-19 07:09:27', '2018-02-19 07:09:27', 1),
(683, 'created', 'states', 8, '2018-02-19 07:10:06', '2018-02-19 07:10:06', 1),
(684, 'created', 'states', 9, '2018-02-19 07:10:19', '2018-02-19 07:10:19', 1),
(685, 'created', 'states', 10, '2018-02-19 07:10:34', '2018-02-19 07:10:34', 1),
(686, 'created', 'states', 11, '2018-02-19 07:10:49', '2018-02-19 07:10:49', 1),
(687, 'created', 'states', 12, '2018-02-19 07:11:10', '2018-02-19 07:11:10', 1),
(688, 'created', 'states', 13, '2018-02-19 07:11:22', '2018-02-19 07:11:22', 1),
(689, 'created', 'states', 14, '2018-02-19 07:11:44', '2018-02-19 07:11:44', 1),
(690, 'created', 'states', 15, '2018-02-19 07:11:56', '2018-02-19 07:11:56', 1),
(691, 'created', 'cities', 2, '2018-02-19 07:12:53', '2018-02-19 07:12:53', 1),
(692, 'created', 'cities', 3, '2018-02-19 07:13:07', '2018-02-19 07:13:07', 1),
(693, 'created', 'cities', 4, '2018-02-19 07:13:40', '2018-02-19 07:13:40', 1),
(694, 'created', 'cities', 5, '2018-02-19 07:13:54', '2018-02-19 07:13:54', 1),
(695, 'created', 'cities', 6, '2018-02-19 07:14:12', '2018-02-19 07:14:12', 1),
(696, 'created', 'cities', 7, '2018-02-19 07:14:26', '2018-02-19 07:14:26', 1),
(697, 'created', 'cities', 8, '2018-02-19 07:15:19', '2018-02-19 07:15:19', 1),
(698, 'created', 'cities', 9, '2018-02-19 07:15:33', '2018-02-19 07:15:33', 1),
(699, 'created', 'cities', 10, '2018-02-19 07:15:44', '2018-02-19 07:15:44', 1),
(700, 'created', 'cities', 11, '2018-02-19 07:15:58', '2018-02-19 07:15:58', 1),
(701, 'created', 'cities', 12, '2018-02-19 07:16:07', '2018-02-19 07:16:07', 1),
(702, 'created', 'cities', 13, '2018-02-19 07:16:19', '2018-02-19 07:16:19', 1),
(703, 'created', 'cities', 14, '2018-02-19 07:16:35', '2018-02-19 07:16:35', 1),
(704, 'created', 'cities', 15, '2018-02-19 07:16:43', '2018-02-19 07:16:43', 1),
(705, 'created', 'cities', 16, '2018-02-19 07:17:33', '2018-02-19 07:17:33', 1),
(706, 'created', 'cities', 17, '2018-02-19 07:17:45', '2018-02-19 07:17:45', 1),
(707, 'created', 'cities', 18, '2018-02-19 07:17:54', '2018-02-19 07:17:54', 1),
(708, 'created', 'cities', 19, '2018-02-19 07:18:07', '2018-02-19 07:18:07', 1),
(709, 'created', 'cities', 20, '2018-02-19 07:18:20', '2018-02-19 07:18:20', 1),
(710, 'created', 'cities', 21, '2018-02-19 07:18:31', '2018-02-19 07:18:31', 1),
(711, 'created', 'cities', 22, '2018-02-19 07:18:43', '2018-02-19 07:18:43', 1),
(712, 'created', 'cities', 23, '2018-02-19 07:18:52', '2018-02-19 07:18:52', 1),
(713, 'created', 'cities', 24, '2018-02-19 07:19:16', '2018-02-19 07:19:16', 1),
(714, 'created', 'cities', 25, '2018-02-19 07:19:29', '2018-02-19 07:19:29', 1),
(715, 'created', 'cities', 26, '2018-02-19 07:20:11', '2018-02-19 07:20:11', 1),
(716, 'created', 'cities', 27, '2018-02-19 07:20:35', '2018-02-19 07:20:35', 1),
(717, 'created', 'cities', 28, '2018-02-19 07:20:47', '2018-02-19 07:20:47', 1),
(718, 'created', 'cities', 29, '2018-02-19 07:21:09', '2018-02-19 07:21:09', 1),
(719, 'created', 'cities', 30, '2018-02-19 07:21:23', '2018-02-19 07:21:23', 1),
(720, 'created', 'cities', 31, '2018-02-19 07:21:34', '2018-02-19 07:21:34', 1),
(721, 'created', 'cities', 32, '2018-02-19 07:21:48', '2018-02-19 07:21:48', 1),
(722, 'created', 'cities', 33, '2018-02-19 07:22:08', '2018-02-19 07:22:08', 1),
(723, 'created', 'cities', 34, '2018-02-19 07:22:45', '2018-02-19 07:22:45', 1),
(724, 'created', 'cities', 35, '2018-02-19 07:22:58', '2018-02-19 07:22:58', 1),
(725, 'created', 'cities', 36, '2018-02-19 07:23:13', '2018-02-19 07:23:13', 1),
(726, 'created', 'cities', 37, '2018-02-19 07:23:25', '2018-02-19 07:23:25', 1),
(727, 'created', 'cities', 38, '2018-02-19 07:23:38', '2018-02-19 07:23:38', 1),
(728, 'created', 'cities', 39, '2018-02-19 07:23:50', '2018-02-19 07:23:50', 1),
(729, 'created', 'cities', 40, '2018-02-19 07:24:05', '2018-02-19 07:24:05', 1),
(730, 'updated', 'users', 14, '2018-02-19 07:24:49', '2018-02-19 07:24:49', 1),
(731, 'updated', 'users', 14, '2018-02-19 07:25:18', '2018-02-19 07:25:18', 1),
(732, 'updated', 'users', 14, '2018-02-19 07:25:18', '2018-02-19 07:25:18', 1),
(733, 'updated', 'users', 15, '2018-02-19 07:25:47', '2018-02-19 07:25:47', 1),
(734, 'updated', 'users', 15, '2018-02-19 07:25:48', '2018-02-19 07:25:48', 1),
(735, 'updated', 'users', 16, '2018-02-19 07:26:29', '2018-02-19 07:26:29', 1),
(736, 'updated', 'users', 16, '2018-02-19 07:26:30', '2018-02-19 07:26:30', 1),
(737, 'updated', 'users', 12, '2018-02-19 07:27:02', '2018-02-19 07:27:02', 1),
(738, 'updated', 'users', 12, '2018-02-19 07:27:02', '2018-02-19 07:27:02', 1),
(739, 'updated', 'users', 4, '2018-02-19 07:28:13', '2018-02-19 07:28:13', 1),
(740, 'updated', 'users', 4, '2018-02-19 07:28:13', '2018-02-19 07:28:13', 1),
(741, 'updated', 'users', 1, '2018-02-19 07:30:34', '2018-02-19 07:30:34', 1),
(742, 'updated', 'users', 1, '2018-02-19 07:30:35', '2018-02-19 07:30:35', 1),
(743, 'updated', 'auctions', 12, '2018-02-19 07:37:49', '2018-02-19 07:37:49', 1),
(744, 'updated', 'auctions', 12, '2018-02-19 07:38:51', '2018-02-19 07:38:51', 1),
(745, 'updated', 'auctions', 12, '2018-02-19 07:39:56', '2018-02-19 07:39:56', 1),
(746, 'updated', 'users', 3, '2018-02-19 07:47:27', '2018-02-19 07:47:27', 1),
(747, 'updated', 'testmonies', 1, '2018-02-19 08:00:14', '2018-02-19 08:00:14', 1),
(748, 'created', 'testmonies', 2, '2018-02-19 08:00:27', '2018-02-19 08:00:27', 1),
(749, 'created', 'testmonies', 3, '2018-02-19 08:01:32', '2018-02-19 08:01:32', 1),
(750, 'created', 'testmonies', 4, '2018-02-19 08:01:42', '2018-02-19 08:01:42', 1),
(751, 'created', 'testmonies', 5, '2018-02-19 08:01:55', '2018-02-19 08:01:55', 1),
(752, 'updated', 'users', 1, '2018-02-19 08:35:06', '2018-02-19 08:35:06', 1),
(753, 'updated', 'content_pages', 1, '2018-02-19 22:49:13', '2018-02-19 22:49:13', 1),
(754, 'updated', 'content_pages', 1, '2018-02-19 22:56:19', '2018-02-19 22:56:19', 1),
(755, 'updated', 'users', 3, '2018-02-20 00:17:34', '2018-02-20 00:17:34', 3),
(756, 'created', 'create_letters', 1, '2018-02-20 01:22:54', '2018-02-20 01:22:54', 1),
(757, 'created', 'templates', 8, '2018-02-20 01:34:23', '2018-02-20 01:34:23', 1),
(758, 'created', 'create_letters', 2, '2018-02-20 01:39:30', '2018-02-20 01:39:30', 1),
(759, 'created', 'create_letters', 3, '2018-02-20 01:40:11', '2018-02-20 01:40:11', 1),
(760, 'created', 'create_letters', 4, '2018-02-20 01:41:04', '2018-02-20 01:41:04', 1),
(761, 'created', 'create_letters', 5, '2018-02-20 01:41:54', '2018-02-20 01:41:54', 1),
(762, 'created', 'create_letters', 6, '2018-02-20 01:42:44', '2018-02-20 01:42:44', 1),
(763, 'created', 'create_letters', 7, '2018-02-20 01:42:56', '2018-02-20 01:42:56', 1),
(764, 'created', 'create_letters', 8, '2018-02-20 01:43:05', '2018-02-20 01:43:05', 1),
(765, 'created', 'create_letters', 9, '2018-02-20 01:43:21', '2018-02-20 01:43:21', 1),
(766, 'created', 'create_letters', 10, '2018-02-20 01:44:02', '2018-02-20 01:44:02', 1),
(767, 'created', 'create_letters', 11, '2018-02-20 01:44:15', '2018-02-20 01:44:15', 1),
(768, 'created', 'create_letters', 12, '2018-02-20 01:44:22', '2018-02-20 01:44:22', 1),
(769, 'created', 'create_letters', 13, '2018-02-20 01:44:45', '2018-02-20 01:44:45', 1),
(770, 'created', 'create_letters', 14, '2018-02-20 01:45:03', '2018-02-20 01:45:03', 1),
(771, 'created', 'create_letters', 15, '2018-02-20 01:45:10', '2018-02-20 01:45:10', 1),
(772, 'created', 'create_letters', 16, '2018-02-20 01:46:39', '2018-02-20 01:46:39', 1),
(773, 'created', 'create_letters', 17, '2018-02-20 01:46:45', '2018-02-20 01:46:45', 1),
(774, 'updated', 'users', 1, '2018-02-20 01:57:26', '2018-02-20 01:57:26', 1),
(775, 'updated', 'auctions', 12, '2018-02-20 04:56:11', '2018-02-20 04:56:11', 1),
(776, 'updated', 'auctions', 12, '2018-02-20 04:57:32', '2018-02-20 04:57:32', 1),
(777, 'updated', 'users', 1, '2018-02-20 06:06:18', '2018-02-20 06:06:18', 1),
(778, 'created', 'sub_catogories', 16, '2018-02-20 07:29:26', '2018-02-20 07:29:26', 1),
(779, 'created', 'categories', 9, '2018-02-20 07:29:57', '2018-02-20 07:29:57', 1),
(780, 'created', 'categories', 10, '2018-02-20 07:30:09', '2018-02-20 07:30:09', 1),
(781, 'created', 'categories', 11, '2018-02-20 07:30:21', '2018-02-20 07:30:21', 1),
(782, 'created', 'categories', 12, '2018-02-20 07:30:29', '2018-02-20 07:30:29', 1),
(783, 'created', 'categories', 13, '2018-02-20 07:30:35', '2018-02-20 07:30:35', 1),
(784, 'created', 'categories', 14, '2018-02-20 07:31:19', '2018-02-20 07:31:19', 1),
(785, 'created', 'categories', 15, '2018-02-20 07:31:24', '2018-02-20 07:31:24', 1),
(786, 'created', 'sub_catogories', 17, '2018-02-20 07:34:22', '2018-02-20 07:34:22', 1),
(787, 'created', 'sub_catogories', 18, '2018-02-20 07:35:03', '2018-02-20 07:35:03', 1),
(788, 'created', 'sub_catogories', 19, '2018-02-20 07:35:12', '2018-02-20 07:35:12', 1),
(789, 'created', 'sub_catogories', 20, '2018-02-20 07:35:27', '2018-02-20 07:35:27', 1),
(790, 'created', 'sub_catogories', 21, '2018-02-20 07:35:37', '2018-02-20 07:35:37', 1),
(791, 'created', 'sub_catogories', 22, '2018-02-20 07:35:55', '2018-02-20 07:35:55', 1),
(792, 'created', 'sub_catogories', 23, '2018-02-20 07:36:03', '2018-02-20 07:36:03', 1),
(793, 'created', 'sub_catogories', 24, '2018-02-20 07:36:14', '2018-02-20 07:36:14', 1),
(794, 'created', 'sub_catogories', 25, '2018-02-20 07:36:22', '2018-02-20 07:36:22', 1),
(795, 'created', 'sub_catogories', 26, '2018-02-20 07:36:33', '2018-02-20 07:36:33', 1),
(796, 'created', 'sub_catogories', 27, '2018-02-20 07:36:44', '2018-02-20 07:36:44', 1),
(797, 'created', 'sub_catogories', 28, '2018-02-20 07:36:51', '2018-02-20 07:36:51', 1),
(798, 'created', 'sub_catogories', 29, '2018-02-20 07:41:23', '2018-02-20 07:41:23', 1),
(799, 'created', 'sub_catogories', 30, '2018-02-20 07:41:59', '2018-02-20 07:41:59', 1),
(800, 'created', 'sub_catogories', 31, '2018-02-20 07:42:10', '2018-02-20 07:42:10', 1),
(801, 'created', 'sub_catogories', 32, '2018-02-20 07:42:20', '2018-02-20 07:42:20', 1),
(802, 'created', 'sub_catogories', 33, '2018-02-20 07:42:29', '2018-02-20 07:42:29', 1),
(803, 'created', 'sub_catogories', 34, '2018-02-20 07:42:39', '2018-02-20 07:42:39', 1),
(804, 'created', 'sub_catogories', 35, '2018-02-20 07:43:14', '2018-02-20 07:43:14', 1),
(805, 'created', 'sub_catogories', 36, '2018-02-20 07:43:25', '2018-02-20 07:43:25', 1),
(806, 'created', 'sub_catogories', 37, '2018-02-20 07:43:36', '2018-02-20 07:43:36', 1),
(807, 'created', 'sub_catogories', 38, '2018-02-20 07:43:46', '2018-02-20 07:43:46', 1),
(808, 'created', 'sub_catogories', 39, '2018-02-20 07:43:56', '2018-02-20 07:43:56', 1),
(809, 'created', 'sub_catogories', 40, '2018-02-20 07:44:04', '2018-02-20 07:44:04', 1),
(810, 'created', 'sub_catogories', 41, '2018-02-20 07:44:14', '2018-02-20 07:44:14', 1),
(811, 'created', 'sub_catogories', 42, '2018-02-20 07:44:22', '2018-02-20 07:44:22', 1),
(812, 'created', 'sub_catogories', 43, '2018-02-20 07:44:35', '2018-02-20 07:44:35', 1),
(813, 'created', 'sub_catogories', 44, '2018-02-20 07:44:44', '2018-02-20 07:44:44', 1),
(814, 'created', 'sub_catogories', 45, '2018-02-20 07:45:27', '2018-02-20 07:45:27', 1),
(815, 'created', 'sub_catogories', 46, '2018-02-20 07:45:34', '2018-02-20 07:45:34', 1),
(816, 'created', 'sub_catogories', 47, '2018-02-20 07:45:41', '2018-02-20 07:45:41', 1),
(817, 'created', 'sub_catogories', 48, '2018-02-20 07:45:48', '2018-02-20 07:45:48', 1),
(818, 'updated', 'sub_catogories', 48, '2018-02-20 07:45:58', '2018-02-20 07:45:58', 1),
(819, 'created', 'sub_catogories', 49, '2018-02-20 07:46:05', '2018-02-20 07:46:05', 1),
(820, 'created', 'sub_catogories', 50, '2018-02-20 07:46:12', '2018-02-20 07:46:12', 1),
(821, 'created', 'sub_catogories', 51, '2018-02-20 07:46:19', '2018-02-20 07:46:19', 1),
(822, 'created', 'sub_catogories', 52, '2018-02-20 07:46:26', '2018-02-20 07:46:26', 1),
(823, 'created', 'sub_catogories', 53, '2018-02-20 07:46:33', '2018-02-20 07:46:33', 1),
(824, 'created', 'sub_catogories', 54, '2018-02-20 07:46:39', '2018-02-20 07:46:39', 1),
(825, 'created', 'sub_catogories', 55, '2018-02-20 07:46:49', '2018-02-20 07:46:49', 1),
(826, 'created', 'sub_catogories', 56, '2018-02-20 07:46:56', '2018-02-20 07:46:56', 1),
(827, 'created', 'sub_catogories', 57, '2018-02-20 07:47:03', '2018-02-20 07:47:03', 1),
(828, 'created', 'sub_catogories', 58, '2018-02-20 07:47:10', '2018-02-20 07:47:10', 1),
(829, 'created', 'sub_catogories', 59, '2018-02-20 07:47:18', '2018-02-20 07:47:18', 1),
(830, 'created', 'sub_catogories', 60, '2018-02-20 07:47:25', '2018-02-20 07:47:25', 1),
(831, 'deleted', 'categories', 11, '2018-02-20 07:47:37', '2018-02-20 07:47:37', 1),
(832, 'deleted', 'categories', 10, '2018-02-20 07:53:27', '2018-02-20 07:53:27', 1),
(833, 'created', 'sub_catogories', 61, '2018-02-20 07:53:32', '2018-02-20 07:53:32', 1),
(834, 'created', 'sub_catogories', 62, '2018-02-20 07:53:40', '2018-02-20 07:53:40', 1),
(835, 'created', 'sub_catogories', 63, '2018-02-20 07:53:46', '2018-02-20 07:53:46', 1),
(836, 'created', 'sub_catogories', 64, '2018-02-20 07:53:53', '2018-02-20 07:53:53', 1),
(837, 'created', 'sub_catogories', 65, '2018-02-20 07:53:59', '2018-02-20 07:53:59', 1),
(838, 'created', 'sub_catogories', 66, '2018-02-20 07:54:05', '2018-02-20 07:54:05', 1),
(839, 'created', 'sub_catogories', 67, '2018-02-20 07:54:12', '2018-02-20 07:54:12', 1),
(840, 'created', 'sub_catogories', 68, '2018-02-20 07:54:18', '2018-02-20 07:54:18', 1),
(841, 'created', 'sub_catogories', 69, '2018-02-20 07:54:24', '2018-02-20 07:54:24', 1),
(842, 'created', 'sub_catogories', 70, '2018-02-20 07:54:33', '2018-02-20 07:54:33', 1),
(843, 'created', 'sub_catogories', 71, '2018-02-20 07:54:39', '2018-02-20 07:54:39', 1),
(844, 'created', 'sub_catogories', 72, '2018-02-20 07:54:45', '2018-02-20 07:54:45', 1),
(845, 'created', 'sub_catogories', 73, '2018-02-20 07:54:51', '2018-02-20 07:54:51', 1),
(846, 'created', 'sub_catogories', 74, '2018-02-20 07:54:58', '2018-02-20 07:54:58', 1),
(847, 'created', 'sub_catogories', 75, '2018-02-20 07:55:35', '2018-02-20 07:55:35', 1),
(848, 'created', 'sub_catogories', 76, '2018-02-20 07:55:41', '2018-02-20 07:55:41', 1),
(849, 'created', 'sub_catogories', 77, '2018-02-20 07:55:50', '2018-02-20 07:55:50', 1),
(850, 'created', 'sub_catogories', 78, '2018-02-20 07:55:58', '2018-02-20 07:55:58', 1),
(851, 'created', 'sub_catogories', 79, '2018-02-20 07:56:07', '2018-02-20 07:56:07', 1),
(852, 'created', 'sub_catogories', 80, '2018-02-20 07:56:13', '2018-02-20 07:56:13', 1),
(853, 'updated', 'sub_catogories', 32, '2018-02-20 07:56:29', '2018-02-20 07:56:29', 1),
(854, 'updated', 'sub_catogories', 75, '2018-02-20 07:56:42', '2018-02-20 07:56:42', 1),
(855, 'updated', 'sub_catogories', 75, '2018-02-20 07:56:59', '2018-02-20 07:56:59', 1),
(856, 'updated', 'sub_catogories', 76, '2018-02-20 07:57:05', '2018-02-20 07:57:05', 1),
(857, 'updated', 'sub_catogories', 77, '2018-02-20 07:57:13', '2018-02-20 07:57:13', 1),
(858, 'updated', 'sub_catogories', 79, '2018-02-20 07:57:18', '2018-02-20 07:57:18', 1),
(859, 'created', 'sub_catogories', 81, '2018-02-20 07:59:42', '2018-02-20 07:59:42', 1),
(860, 'created', 'sub_catogories', 82, '2018-02-20 07:59:53', '2018-02-20 07:59:53', 1),
(861, 'created', 'sub_catogories', 83, '2018-02-20 08:00:00', '2018-02-20 08:00:00', 1),
(862, 'created', 'sub_catogories', 84, '2018-02-20 08:00:06', '2018-02-20 08:00:06', 1),
(863, 'created', 'sub_catogories', 85, '2018-02-20 08:00:13', '2018-02-20 08:00:13', 1),
(864, 'created', 'sub_catogories', 86, '2018-02-20 08:00:19', '2018-02-20 08:00:19', 1),
(865, 'created', 'sub_catogories', 87, '2018-02-20 08:00:25', '2018-02-20 08:00:25', 1),
(866, 'created', 'sub_catogories', 88, '2018-02-20 08:00:31', '2018-02-20 08:00:31', 1),
(867, 'created', 'sub_catogories', 89, '2018-02-20 08:00:37', '2018-02-20 08:00:37', 1),
(868, 'created', 'sub_catogories', 90, '2018-02-20 08:00:43', '2018-02-20 08:00:43', 1),
(869, 'created', 'sub_catogories', 91, '2018-02-20 08:00:49', '2018-02-20 08:00:49', 1),
(870, 'created', 'sub_catogories', 92, '2018-02-20 08:00:55', '2018-02-20 08:00:55', 1),
(871, 'created', 'sub_catogories', 93, '2018-02-20 08:01:01', '2018-02-20 08:01:01', 1),
(872, 'created', 'sub_catogories', 94, '2018-02-20 08:01:07', '2018-02-20 08:01:07', 1),
(873, 'created', 'sub_catogories', 95, '2018-02-20 08:01:48', '2018-02-20 08:01:48', 1),
(874, 'created', 'sub_catogories', 96, '2018-02-20 08:01:57', '2018-02-20 08:01:57', 1),
(875, 'created', 'sub_catogories', 97, '2018-02-20 08:02:03', '2018-02-20 08:02:03', 1),
(876, 'created', 'sub_catogories', 98, '2018-02-20 08:02:09', '2018-02-20 08:02:09', 1),
(877, 'created', 'sub_catogories', 99, '2018-02-20 08:02:16', '2018-02-20 08:02:16', 1),
(878, 'created', 'sub_catogories', 100, '2018-02-20 08:02:22', '2018-02-20 08:02:22', 1),
(879, 'created', 'sub_catogories', 101, '2018-02-20 08:02:28', '2018-02-20 08:02:28', 1),
(880, 'created', 'sub_catogories', 102, '2018-02-20 08:02:34', '2018-02-20 08:02:34', 1),
(881, 'created', 'sub_catogories', 103, '2018-02-20 08:02:40', '2018-02-20 08:02:40', 1),
(882, 'created', 'sub_catogories', 104, '2018-02-20 08:02:47', '2018-02-20 08:02:47', 1),
(883, 'created', 'sub_catogories', 105, '2018-02-20 08:02:53', '2018-02-20 08:02:53', 1),
(884, 'created', 'sub_catogories', 106, '2018-02-20 08:02:59', '2018-02-20 08:02:59', 1),
(885, 'created', 'sub_catogories', 107, '2018-02-20 08:03:05', '2018-02-20 08:03:05', 1),
(886, 'created', 'sub_catogories', 108, '2018-02-20 08:03:12', '2018-02-20 08:03:12', 1),
(887, 'created', 'sub_catogories', 109, '2018-02-20 08:03:18', '2018-02-20 08:03:18', 1),
(888, 'created', 'sub_catogories', 110, '2018-02-20 08:03:25', '2018-02-20 08:03:25', 1),
(889, 'created', 'sub_catogories', 111, '2018-02-20 08:03:32', '2018-02-20 08:03:32', 1),
(890, 'created', 'sub_catogories', 112, '2018-02-20 08:03:38', '2018-02-20 08:03:38', 1),
(891, 'created', 'sub_catogories', 113, '2018-02-20 08:03:44', '2018-02-20 08:03:44', 1),
(892, 'created', 'sub_catogories', 114, '2018-02-20 08:03:52', '2018-02-20 08:03:52', 1),
(893, 'created', 'sub_catogories', 115, '2018-02-20 08:03:58', '2018-02-20 08:03:58', 1),
(894, 'created', 'sub_catogories', 116, '2018-02-20 08:04:05', '2018-02-20 08:04:05', 1),
(895, 'created', 'sub_catogories', 117, '2018-02-20 08:04:11', '2018-02-20 08:04:11', 1),
(896, 'created', 'sub_catogories', 118, '2018-02-20 08:04:17', '2018-02-20 08:04:17', 1),
(897, 'created', 'sub_catogories', 119, '2018-02-20 08:04:25', '2018-02-20 08:04:25', 1),
(898, 'created', 'sub_catogories', 120, '2018-02-20 08:04:31', '2018-02-20 08:04:31', 1),
(899, 'created', 'sub_catogories', 121, '2018-02-20 08:04:36', '2018-02-20 08:04:36', 1),
(900, 'created', 'sub_catogories', 122, '2018-02-20 08:05:14', '2018-02-20 08:05:14', 1),
(901, 'created', 'sub_catogories', 123, '2018-02-20 08:06:43', '2018-02-20 08:06:43', 1),
(902, 'created', 'sub_catogories', 124, '2018-02-20 08:06:49', '2018-02-20 08:06:49', 1),
(903, 'created', 'sub_catogories', 125, '2018-02-20 08:06:55', '2018-02-20 08:06:55', 1),
(904, 'created', 'sub_catogories', 126, '2018-02-20 08:07:24', '2018-02-20 08:07:24', 1),
(905, 'created', 'sub_catogories', 127, '2018-02-20 08:07:33', '2018-02-20 08:07:33', 1),
(906, 'created', 'sub_catogories', 128, '2018-02-20 08:07:42', '2018-02-20 08:07:42', 1),
(907, 'created', 'sub_catogories', 129, '2018-02-20 08:07:48', '2018-02-20 08:07:48', 1),
(908, 'created', 'sub_catogories', 130, '2018-02-20 08:07:54', '2018-02-20 08:07:54', 1),
(909, 'created', 'sub_catogories', 131, '2018-02-20 08:08:07', '2018-02-20 08:08:07', 1),
(910, 'created', 'sub_catogories', 132, '2018-02-20 08:08:13', '2018-02-20 08:08:13', 1),
(911, 'created', 'sub_catogories', 133, '2018-02-20 08:08:20', '2018-02-20 08:08:20', 1),
(912, 'created', 'sub_catogories', 134, '2018-02-20 08:08:26', '2018-02-20 08:08:26', 1),
(913, 'created', 'sub_catogories', 135, '2018-02-20 08:08:32', '2018-02-20 08:08:32', 1),
(914, 'created', 'sub_catogories', 136, '2018-02-20 08:08:38', '2018-02-20 08:08:38', 1),
(915, 'created', 'sub_catogories', 137, '2018-02-20 08:08:46', '2018-02-20 08:08:46', 1),
(916, 'created', 'sub_catogories', 138, '2018-02-20 08:08:53', '2018-02-20 08:08:53', 1),
(917, 'created', 'sub_catogories', 139, '2018-02-20 08:09:01', '2018-02-20 08:09:01', 1),
(918, 'created', 'sub_catogories', 140, '2018-02-20 08:09:07', '2018-02-20 08:09:07', 1),
(919, 'created', 'sub_catogories', 141, '2018-02-20 08:09:16', '2018-02-20 08:09:16', 1),
(920, 'created', 'sub_catogories', 142, '2018-02-20 08:09:23', '2018-02-20 08:09:23', 1),
(921, 'created', 'sub_catogories', 143, '2018-02-20 08:09:29', '2018-02-20 08:09:29', 1),
(922, 'created', 'sub_catogories', 144, '2018-02-20 08:09:34', '2018-02-20 08:09:34', 1),
(923, 'created', 'sub_catogories', 145, '2018-02-20 08:09:41', '2018-02-20 08:09:41', 1),
(924, 'created', 'sub_catogories', 146, '2018-02-20 08:09:47', '2018-02-20 08:09:47', 1),
(925, 'created', 'sub_catogories', 147, '2018-02-20 08:09:53', '2018-02-20 08:09:53', 1),
(926, 'created', 'sub_catogories', 148, '2018-02-20 08:09:58', '2018-02-20 08:09:58', 1),
(927, 'created', 'content_pages', 5, '2018-02-20 22:58:29', '2018-02-20 22:58:29', 1),
(928, 'created', 'content_pages', 6, '2018-02-20 23:01:20', '2018-02-20 23:01:20', 1),
(929, 'created', 'auctions', 13, '2018-02-21 00:00:52', '2018-02-21 00:00:52', 1),
(930, 'updated', 'content_pages', 1, '2018-02-21 00:10:49', '2018-02-21 00:10:49', 1),
(931, 'updated', 'content_pages', 1, '2018-02-21 00:11:14', '2018-02-21 00:11:14', 1),
(932, 'updated', 'content_pages', 1, '2018-02-21 00:23:13', '2018-02-21 00:23:13', 1),
(933, 'updated', 'content_pages', 3, '2018-02-21 00:24:01', '2018-02-21 00:24:01', 1),
(934, 'updated', 'content_pages', 4, '2018-02-21 00:24:28', '2018-02-21 00:24:28', 1),
(935, 'updated', 'content_pages', 2, '2018-02-21 00:24:34', '2018-02-21 00:24:34', 1),
(936, 'updated', 'content_pages', 5, '2018-02-21 00:24:42', '2018-02-21 00:24:42', 1),
(937, 'updated', 'content_pages', 6, '2018-02-21 00:24:53', '2018-02-21 00:24:53', 1),
(938, 'updated', 'content_pages', 1, '2018-02-21 00:40:47', '2018-02-21 00:40:47', 1),
(939, 'updated', 'content_pages', 2, '2018-02-21 00:41:06', '2018-02-21 00:41:06', 1),
(940, 'updated', 'content_pages', 4, '2018-02-21 00:41:22', '2018-02-21 00:41:22', 1),
(941, 'created', 'auctions', 14, '2018-02-21 01:17:40', '2018-02-21 01:17:40', 1),
(942, 'created', 'auctions', 15, '2018-02-21 01:21:11', '2018-02-21 01:21:11', 1),
(943, 'created', 'auctions', 16, '2018-02-21 01:23:12', '2018-02-21 01:23:12', 1),
(944, 'created', 'auctions', 17, '2018-02-21 03:04:39', '2018-02-21 03:04:39', 1),
(945, 'updated', 'auctions', 17, '2018-02-21 03:05:52', '2018-02-21 03:05:52', 1),
(946, 'updated', 'auctions', 17, '2018-02-21 03:07:22', '2018-02-21 03:07:22', 1),
(947, 'updated', 'auctions', 17, '2018-02-21 03:07:44', '2018-02-21 03:07:44', 1),
(948, 'updated', 'auctions', 17, '2018-02-21 03:09:19', '2018-02-21 03:09:19', 1),
(949, 'updated', 'auctions', 17, '2018-02-21 03:09:39', '2018-02-21 03:09:39', 1),
(950, 'updated', 'auctions', 17, '2018-02-21 03:10:09', '2018-02-21 03:10:09', 1),
(951, 'updated', 'auctions', 17, '2018-02-21 03:10:57', '2018-02-21 03:10:57', 1),
(952, 'updated', 'auctions', 17, '2018-02-21 03:11:16', '2018-02-21 03:11:16', 1),
(953, 'created', 'auctions', 18, '2018-02-21 03:13:33', '2018-02-21 03:13:33', 1),
(954, 'created', 'auctions', 19, '2018-02-21 03:16:50', '2018-02-21 03:16:50', 1),
(955, 'created', 'auctions', 20, '2018-02-21 03:19:42', '2018-02-21 03:19:42', 1),
(956, 'created', 'auctions', 21, '2018-02-21 03:20:54', '2018-02-21 03:20:54', 1),
(957, 'created', 'auctions', 22, '2018-02-21 03:31:55', '2018-02-21 03:31:55', 1),
(958, 'updated', 'content_pages', 2, '2018-02-21 04:11:26', '2018-02-21 04:11:26', 1),
(959, 'updated', 'content_pages', 1, '2018-02-21 04:13:33', '2018-02-21 04:13:33', 1),
(960, 'updated', 'content_pages', 1, '2018-02-21 04:20:00', '2018-02-21 04:20:00', 1),
(961, 'updated', 'content_pages', 1, '2018-02-21 04:20:33', '2018-02-21 04:20:33', 1),
(962, 'updated', 'content_pages', 1, '2018-02-21 04:21:07', '2018-02-21 04:21:07', 1),
(963, 'updated', 'content_pages', 3, '2018-02-21 04:24:45', '2018-02-21 04:24:45', 1),
(964, 'created', 'auctions', 23, '2018-02-21 05:08:12', '2018-02-21 05:08:12', 1),
(965, 'created', 'templates', 9, '2018-02-21 06:42:13', '2018-02-21 06:42:13', 1),
(966, 'updated', 'templates', 9, '2018-02-21 06:54:50', '2018-02-21 06:54:50', 1),
(967, 'updated', 'templates', 1, '2018-02-21 06:55:05', '2018-02-21 06:55:05', 1),
(968, 'updated', 'users', 3, '2018-02-21 23:27:43', '2018-02-21 23:27:43', 1),
(969, 'updated', 'users', 3, '2018-02-21 23:29:35', '2018-02-21 23:29:35', 1),
(970, 'updated', 'users', 3, '2018-02-21 23:29:57', '2018-02-21 23:29:57', 1),
(971, 'updated', 'users', 3, '2018-02-21 23:30:34', '2018-02-21 23:30:34', 1),
(972, 'updated', 'users', 3, '2018-02-21 23:31:07', '2018-02-21 23:31:07', 1),
(973, 'updated', 'users', 3, '2018-02-21 23:32:29', '2018-02-21 23:32:29', 1),
(974, 'updated', 'users', 3, '2018-02-21 23:33:23', '2018-02-21 23:33:23', 1),
(975, 'updated', 'users', 3, '2018-02-21 23:33:23', '2018-02-21 23:33:23', 1),
(976, 'updated', 'users', 3, '2018-02-21 23:33:47', '2018-02-21 23:33:47', 1),
(977, 'updated', 'users', 3, '2018-02-21 23:33:47', '2018-02-21 23:33:47', 1),
(978, 'updated', 'users', 15, '2018-02-21 23:34:27', '2018-02-21 23:34:27', 1),
(979, 'updated', 'users', 15, '2018-02-21 23:34:27', '2018-02-21 23:34:27', 1),
(980, 'updated', 'users', 14, '2018-02-21 23:34:35', '2018-02-21 23:34:35', 1),
(981, 'updated', 'users', 14, '2018-02-21 23:34:36', '2018-02-21 23:34:36', 1),
(982, 'updated', 'users', 13, '2018-02-21 23:34:43', '2018-02-21 23:34:43', 1),
(983, 'updated', 'users', 13, '2018-02-21 23:34:44', '2018-02-21 23:34:44', 1),
(984, 'updated', 'users', 15, '2018-02-21 23:36:38', '2018-02-21 23:36:38', 1),
(985, 'updated', 'users', 15, '2018-02-21 23:36:38', '2018-02-21 23:36:38', 1),
(986, 'updated', 'users', 15, '2018-02-21 23:36:53', '2018-02-21 23:36:53', 1),
(987, 'updated', 'users', 15, '2018-02-21 23:37:40', '2018-02-21 23:37:40', 1),
(988, 'updated', 'users', 15, '2018-02-21 23:37:40', '2018-02-21 23:37:40', 1),
(989, 'updated', 'users', 15, '2018-02-21 23:38:17', '2018-02-21 23:38:17', 1),
(990, 'updated', 'users', 15, '2018-02-21 23:38:17', '2018-02-21 23:38:17', 1),
(991, 'updated', 'users', 15, '2018-02-21 23:38:33', '2018-02-21 23:38:33', 1),
(992, 'updated', 'users', 15, '2018-02-21 23:38:33', '2018-02-21 23:38:33', 1),
(993, 'updated', 'users', 15, '2018-02-21 23:38:37', '2018-02-21 23:38:37', 1),
(994, 'updated', 'users', 15, '2018-02-21 23:38:37', '2018-02-21 23:38:37', 1),
(995, 'updated', 'users', 15, '2018-02-21 23:39:13', '2018-02-21 23:39:13', 1),
(996, 'updated', 'users', 15, '2018-02-21 23:39:13', '2018-02-21 23:39:13', 1),
(997, 'updated', 'users', 15, '2018-02-21 23:39:38', '2018-02-21 23:39:38', 1),
(998, 'updated', 'users', 15, '2018-02-21 23:39:38', '2018-02-21 23:39:38', 1),
(999, 'updated', 'users', 15, '2018-02-21 23:40:05', '2018-02-21 23:40:05', 1),
(1000, 'updated', 'users', 15, '2018-02-21 23:40:06', '2018-02-21 23:40:06', 1),
(1001, 'updated', 'users', 15, '2018-02-21 23:40:26', '2018-02-21 23:40:26', 1),
(1002, 'updated', 'users', 15, '2018-02-21 23:40:26', '2018-02-21 23:40:26', 1),
(1003, 'updated', 'users', 15, '2018-02-21 23:40:41', '2018-02-21 23:40:41', 1),
(1004, 'updated', 'users', 15, '2018-02-21 23:40:41', '2018-02-21 23:40:41', 1),
(1005, 'updated', 'users', 13, '2018-02-21 23:52:34', '2018-02-21 23:52:34', 1),
(1006, 'updated', 'users', 13, '2018-02-21 23:52:35', '2018-02-21 23:52:35', 1),
(1007, 'updated', 'users', 13, '2018-02-21 23:53:17', '2018-02-21 23:53:17', 1),
(1008, 'updated', 'users', 13, '2018-02-21 23:53:17', '2018-02-21 23:53:17', 1),
(1009, 'updated', 'faq_categories', 1, '2018-02-22 00:08:14', '2018-02-22 00:08:14', 1),
(1010, 'updated', 'faq_categories', 3, '2018-02-22 00:08:52', '2018-02-22 00:08:52', 1),
(1011, 'updated', 'faq_questions', 1, '2018-02-22 00:11:14', '2018-02-22 00:11:14', 1),
(1012, 'updated', 'faq_questions', 2, '2018-02-22 00:11:21', '2018-02-22 00:11:21', 1),
(1013, 'updated', 'faq_categories', 1, '2018-02-22 00:15:12', '2018-02-22 00:15:12', 1),
(1014, 'updated', 'categories', 1, '2018-02-22 00:15:25', '2018-02-22 00:15:25', 1),
(1015, 'updated', 'sub_catogories', 1, '2018-02-22 00:17:34', '2018-02-22 00:17:34', 1),
(1016, 'updated', 'auctions', 14, '2018-02-22 05:22:41', '2018-02-22 05:22:41', 1),
(1017, 'updated', 'auctions', 14, '2018-02-22 05:23:33', '2018-02-22 05:23:33', 1),
(1018, 'updated', 'cities', 1, '2018-02-22 06:42:18', '2018-02-22 06:42:18', 1),
(1019, 'updated', 'users', 1, '2018-02-22 08:02:55', '2018-02-22 08:02:55', 1),
(1020, 'updated', 'users', 1, '2018-02-26 08:02:42', '2018-02-26 08:02:42', 1),
(1021, 'updated', 'users', 4, '2018-02-27 00:26:50', '2018-02-27 00:26:50', 4),
(1022, 'updated', 'users', 4, '2018-02-27 01:06:34', '2018-02-27 01:06:34', 4),
(1023, 'updated', 'users', 17, '2018-03-02 00:18:23', '2018-03-02 00:18:23', 1),
(1024, 'updated', 'users', 17, '2018-03-02 00:18:25', '2018-03-02 00:18:25', 1),
(1025, 'updated', 'users', 1, '2018-03-02 02:59:24', '2018-03-02 02:59:24', 1),
(1026, 'updated', 'users', 16, '2018-03-02 03:42:17', '2018-03-02 03:42:17', 16),
(1027, 'updated', 'users', 3, '2018-03-02 05:12:44', '2018-03-02 05:12:44', 3),
(1028, 'updated', 'users', 3, '2018-03-02 05:19:39', '2018-03-02 05:19:39', 3),
(1029, 'updated', 'users', 4, '2018-03-02 06:12:05', '2018-03-02 06:12:05', 4),
(1030, 'updated', 'users', 16, '2018-03-02 07:38:21', '2018-03-02 07:38:21', 16),
(1031, 'updated', 'users', 16, '2018-03-02 07:42:55', '2018-03-02 07:42:55', 16),
(1032, 'updated', 'users', 16, '2018-03-02 07:44:23', '2018-03-02 07:44:23', 16),
(1033, 'updated', 'users', 1, '2018-03-02 07:44:34', '2018-03-02 07:44:34', 1),
(1034, 'updated', 'users', 1, '2018-03-02 08:28:54', '2018-03-02 08:28:54', 1),
(1035, 'updated', 'users', 16, '2018-03-02 08:29:09', '2018-03-02 08:29:09', 16),
(1036, 'updated', 'users', 1, '2018-03-02 23:56:57', '2018-03-02 23:56:57', 1),
(1037, 'updated', 'users', 3, '2018-03-03 00:22:58', '2018-03-03 00:22:58', 3),
(1038, 'updated', 'users', 1, '2018-03-03 00:41:19', '2018-03-03 00:41:19', 1),
(1039, 'updated', 'users', 3, '2018-03-03 00:57:24', '2018-03-03 00:57:24', 3),
(1040, 'updated', 'users', 1, '2018-03-03 08:02:21', '2018-03-03 08:02:21', 1),
(1041, 'updated', 'users', 16, '2018-03-03 08:03:04', '2018-03-03 08:03:04', 16),
(1042, 'updated', 'users', 1, '2018-03-05 23:06:20', '2018-03-05 23:06:20', 1),
(1043, 'updated', 'users', 1, '2018-03-06 00:54:53', '2018-03-06 00:54:53', 1),
(1044, 'updated', 'users', 16, '2018-03-07 23:36:46', '2018-03-07 23:36:46', 16),
(1045, 'updated', 'users', 1, '2018-03-08 08:08:33', '2018-03-08 08:08:33', 1),
(1046, 'updated', 'users', 16, '2018-03-08 08:08:53', '2018-03-08 08:08:53', 16),
(1047, 'updated', 'auctions', 23, '2018-03-09 01:06:03', '2018-03-09 01:06:03', 1),
(1048, 'updated', 'auctions', 23, '2018-03-09 01:10:10', '2018-03-09 01:10:10', 1),
(1049, 'updated', 'auctions', 22, '2018-03-09 01:10:19', '2018-03-09 01:10:19', 1),
(1050, 'updated', 'auctions', 21, '2018-03-09 01:10:40', '2018-03-09 01:10:40', 1),
(1051, 'updated', 'auctions', 20, '2018-03-09 01:10:43', '2018-03-09 01:10:43', 1),
(1052, 'updated', 'auctions', 19, '2018-03-09 01:10:46', '2018-03-09 01:10:46', 1),
(1053, 'updated', 'auctions', 19, '2018-03-09 01:11:16', '2018-03-09 01:11:16', 1),
(1054, 'updated', 'auctions', 18, '2018-03-09 01:11:29', '2018-03-09 01:11:29', 1),
(1055, 'updated', 'auctions', 16, '2018-03-09 01:11:37', '2018-03-09 01:11:37', 1),
(1056, 'updated', 'auctions', 17, '2018-03-09 01:11:45', '2018-03-09 01:11:45', 1),
(1057, 'updated', 'auctions', 15, '2018-03-09 01:11:52', '2018-03-09 01:11:52', 1),
(1058, 'updated', 'auctions', 14, '2018-03-09 01:11:59', '2018-03-09 01:11:59', 1),
(1059, 'updated', 'auctions', 13, '2018-03-09 01:12:06', '2018-03-09 01:12:06', 1),
(1060, 'updated', 'auctions', 12, '2018-03-09 01:12:14', '2018-03-09 01:12:14', 1),
(1061, 'updated', 'auctions', 11, '2018-03-09 01:12:22', '2018-03-09 01:12:22', 1),
(1062, 'updated', 'auctions', 10, '2018-03-09 01:12:29', '2018-03-09 01:12:29', 1),
(1063, 'updated', 'auctions', 9, '2018-03-09 01:12:37', '2018-03-09 01:12:37', 1),
(1064, 'updated', 'auctions', 8, '2018-03-09 01:13:03', '2018-03-09 01:13:03', 1),
(1065, 'updated', 'auctions', 7, '2018-03-09 01:13:06', '2018-03-09 01:13:06', 1),
(1066, 'updated', 'auctions', 6, '2018-03-09 01:13:08', '2018-03-09 01:13:08', 1),
(1067, 'updated', 'auctions', 5, '2018-03-09 01:13:11', '2018-03-09 01:13:11', 1),
(1068, 'updated', 'auctions', 4, '2018-03-09 01:13:13', '2018-03-09 01:13:13', 1),
(1069, 'updated', 'auctions', 3, '2018-03-09 01:13:15', '2018-03-09 01:13:15', 1),
(1070, 'updated', 'auctions', 2, '2018-03-09 01:13:18', '2018-03-09 01:13:18', 1),
(1071, 'updated', 'auctions', 1, '2018-03-09 01:13:20', '2018-03-09 01:13:20', 1),
(1072, 'updated', 'auctions', 19, '2018-03-09 04:01:39', '2018-03-09 04:01:39', 1),
(1073, 'updated', 'users', 1, '2018-03-09 08:05:22', '2018-03-09 08:05:22', 1),
(1074, 'updated', 'users', 1, '2018-03-10 01:40:54', '2018-03-10 01:40:54', 1),
(1075, 'updated', 'users', 1, '2018-03-12 00:00:01', '2018-03-12 00:00:01', 1),
(1076, 'updated', 'users', 16, '2018-03-12 00:02:26', '2018-03-12 00:02:26', 16),
(1077, 'updated', 'templates', 10, '2018-03-12 03:34:08', '2018-03-12 03:34:08', 1),
(1078, 'updated', 'templates', 11, '2018-03-12 07:47:05', '2018-03-12 07:47:05', 1),
(1079, 'updated', 'templates', 10, '2018-03-12 07:49:39', '2018-03-12 07:49:39', 1),
(1080, 'updated', 'users', 1, '2018-03-12 08:11:35', '2018-03-12 08:11:35', 1),
(1081, 'updated', 'users', 16, '2018-03-12 08:13:20', '2018-03-12 08:13:20', 16),
(1082, 'updated', 'users', 1, '2018-03-13 08:26:39', '2018-03-13 08:26:39', 1),
(1083, 'updated', 'users', 16, '2018-03-13 08:27:32', '2018-03-13 08:27:32', 16),
(1084, 'updated', 'users', 4, '2018-03-14 03:00:03', '2018-03-14 03:00:03', 1),
(1085, 'updated', 'users', 1, '2018-03-14 07:55:52', '2018-03-14 07:55:52', 1),
(1086, 'updated', 'users', 16, '2018-03-15 05:52:48', '2018-03-15 05:52:48', 16),
(1087, 'updated', 'users', 16, '2018-03-15 05:53:15', '2018-03-15 05:53:15', 16),
(1088, 'updated', 'users', 16, '2018-03-15 06:08:19', '2018-03-15 06:08:19', 16),
(1089, 'updated', 'users', 16, '2018-03-15 06:45:08', '2018-03-15 06:45:08', 16),
(1090, 'updated', 'users', 16, '2018-03-15 06:45:13', '2018-03-15 06:45:13', 16),
(1091, 'updated', 'users', 16, '2018-03-15 06:46:20', '2018-03-15 06:46:20', 16),
(1092, 'updated', 'users', 16, '2018-03-15 06:46:52', '2018-03-15 06:46:52', 16),
(1093, 'updated', 'users', 16, '2018-03-15 06:46:57', '2018-03-15 06:46:57', 16),
(1094, 'updated', 'users', 16, '2018-03-15 06:48:31', '2018-03-15 06:48:31', 16),
(1095, 'updated', 'users', 1, '2018-03-15 07:55:57', '2018-03-15 07:55:57', 1),
(1096, 'updated', 'users', 16, '2018-03-15 07:56:28', '2018-03-15 07:56:28', 16),
(1097, 'updated', 'users', 16, '2018-03-15 23:48:09', '2018-03-15 23:48:09', 16),
(1098, 'updated', 'users', 3, '2018-03-16 01:03:45', '2018-03-16 01:03:45', 3),
(1099, 'updated', 'users', 13, '2018-03-16 01:31:28', '2018-03-16 01:31:28', 13),
(1100, 'updated', 'users', 4, '2018-03-16 05:55:44', '2018-03-16 05:55:44', 4),
(1101, 'updated', 'users', 13, '2018-03-16 06:44:22', '2018-03-16 06:44:22', 13),
(1102, 'updated', 'users', 1, '2018-03-16 07:54:31', '2018-03-16 07:54:31', 1),
(1103, 'updated', 'users', 3, '2018-03-16 23:30:01', '2018-03-16 23:30:01', 3),
(1104, 'updated', 'users', 16, '2018-03-17 00:38:59', '2018-03-17 00:38:59', 1),
(1105, 'updated', 'users', 16, '2018-03-17 00:39:24', '2018-03-17 00:39:24', 1),
(1106, 'updated', 'users', 16, '2018-03-17 00:40:01', '2018-03-17 00:40:01', 1),
(1107, 'updated', 'users', 16, '2018-03-17 00:49:16', '2018-03-17 00:49:16', 1),
(1108, 'updated', 'users', 16, '2018-03-17 00:50:30', '2018-03-17 00:50:30', 1),
(1109, 'updated', 'users', 16, '2018-03-17 00:51:34', '2018-03-17 00:51:34', 1),
(1110, 'updated', 'users', 16, '2018-03-17 00:52:09', '2018-03-17 00:52:09', 1),
(1111, 'updated', 'users', 16, '2018-03-17 00:52:48', '2018-03-17 00:52:48', 1),
(1112, 'updated', 'users', 16, '2018-03-17 00:52:55', '2018-03-17 00:52:55', 1),
(1113, 'updated', 'users', 16, '2018-03-17 00:53:02', '2018-03-17 00:53:02', 1),
(1114, 'updated', 'users', 16, '2018-03-17 00:53:42', '2018-03-17 00:53:42', 1),
(1115, 'updated', 'users', 16, '2018-03-17 00:56:33', '2018-03-17 00:56:33', 1),
(1116, 'updated', 'users', 16, '2018-03-17 00:57:02', '2018-03-17 00:57:02', 1),
(1117, 'updated', 'users', 16, '2018-03-17 00:57:51', '2018-03-17 00:57:51', 1),
(1118, 'updated', 'users', 16, '2018-03-17 00:58:19', '2018-03-17 00:58:19', 1),
(1119, 'updated', 'users', 16, '2018-03-17 01:00:07', '2018-03-17 01:00:07', 1),
(1120, 'updated', 'users', 16, '2018-03-17 01:01:22', '2018-03-17 01:01:22', 1),
(1121, 'updated', 'users', 16, '2018-03-17 01:03:09', '2018-03-17 01:03:09', 1),
(1122, 'updated', 'users', 16, '2018-03-17 01:04:01', '2018-03-17 01:04:01', 1),
(1123, 'updated', 'users', 16, '2018-03-17 01:08:48', '2018-03-17 01:08:48', 1),
(1124, 'created', 'faq_categories', 4, '2018-03-17 01:18:10', '2018-03-17 01:18:10', 1),
(1125, 'updated', 'users', 16, '2018-03-17 01:54:31', '2018-03-17 01:54:31', 16),
(1126, 'updated', 'users', 3, '2018-03-17 01:56:16', '2018-03-17 01:56:16', 3),
(1127, 'updated', 'templates', 3, '2018-03-17 08:52:41', '2018-03-17 08:52:41', 1),
(1128, 'updated', 'templates', 4, '2018-03-17 08:53:16', '2018-03-17 08:53:16', 1),
(1129, 'updated', 'templates', 1, '2018-03-17 08:57:57', '2018-03-17 08:57:57', 1),
(1130, 'updated', 'templates', 2, '2018-03-17 08:59:18', '2018-03-17 08:59:18', 1),
(1131, 'updated', 'templates', 5, '2018-03-17 09:00:41', '2018-03-17 09:00:41', 1),
(1132, 'updated', 'templates', 2, '2018-03-17 09:01:18', '2018-03-17 09:01:18', 1),
(1133, 'updated', 'templates', 6, '2018-03-17 09:03:37', '2018-03-17 09:03:37', 1),
(1134, 'updated', 'templates', 6, '2018-03-17 09:03:50', '2018-03-17 09:03:50', 1),
(1135, 'updated', 'templates', 7, '2018-03-17 09:04:39', '2018-03-17 09:04:39', 1),
(1136, 'updated', 'templates', 8, '2018-03-17 09:06:01', '2018-03-17 09:06:01', 1),
(1137, 'updated', 'templates', 9, '2018-03-17 09:08:59', '2018-03-17 09:08:59', 1),
(1138, 'updated', 'templates', 10, '2018-03-17 09:21:42', '2018-03-17 09:21:42', 1),
(1139, 'updated', 'templates', 11, '2018-03-17 09:23:29', '2018-03-17 09:23:29', 1),
(1140, 'updated', 'users', 3, '2018-03-17 09:46:56', '2018-03-17 09:46:56', 3),
(1141, 'updated', 'users', 16, '2018-03-17 10:17:40', '2018-03-17 10:17:40', 16),
(1142, 'updated', 'users', 1, '2018-03-17 10:46:57', '2018-03-17 10:46:57', 1),
(1143, 'created', 'faq_categories', 5, '2018-03-19 05:16:25', '2018-03-19 05:16:25', 1),
(1144, 'deleted', 'faq_categories', 5, '2018-03-19 05:16:30', '2018-03-19 05:16:30', 1),
(1145, 'deleted', 'faq_categories', 4, '2018-03-19 05:28:30', '2018-03-19 05:28:30', 1),
(1146, 'created', 'faq_categories', 6, '2018-03-19 05:29:42', '2018-03-19 05:29:42', 1),
(1147, 'deleted', 'faq_categories', 6, '2018-03-19 05:30:19', '2018-03-19 05:30:19', 1),
(1148, 'created', 'faq_categories', 7, '2018-03-19 05:31:08', '2018-03-19 05:31:08', 1),
(1149, 'deleted', 'faq_categories', 7, '2018-03-19 05:31:13', '2018-03-19 05:31:13', 1),
(1150, 'created', 'faq_categories', 8, '2018-03-19 05:31:34', '2018-03-19 05:31:34', 1),
(1151, 'deleted', 'faq_categories', 8, '2018-03-19 05:31:45', '2018-03-19 05:31:45', 1),
(1152, 'created', 'faq_categories', 9, '2018-03-19 05:32:08', '2018-03-19 05:32:08', 1),
(1153, 'deleted', 'faq_categories', 9, '2018-03-19 05:32:14', '2018-03-19 05:32:14', 1),
(1154, 'created', 'faq_categories', 10, '2018-03-19 05:33:14', '2018-03-19 05:33:14', 1),
(1155, 'deleted', 'faq_categories', 10, '2018-03-19 05:33:19', '2018-03-19 05:33:19', 1),
(1156, 'created', 'faq_categories', 11, '2018-03-19 05:33:28', '2018-03-19 05:33:28', 1),
(1157, 'deleted', 'faq_categories', 11, '2018-03-19 05:33:33', '2018-03-19 05:33:33', 1),
(1158, 'created', 'faq_categories', 12, '2018-03-19 05:34:09', '2018-03-19 05:34:09', 1),
(1159, 'deleted', 'faq_categories', 12, '2018-03-19 05:34:13', '2018-03-19 05:34:13', 1),
(1160, 'created', 'faq_categories', 13, '2018-03-19 05:34:55', '2018-03-19 05:34:55', 1),
(1161, 'deleted', 'faq_categories', 13, '2018-03-19 05:34:59', '2018-03-19 05:34:59', 1),
(1162, 'created', 'faq_categories', 14, '2018-03-19 05:36:28', '2018-03-19 05:36:28', 1),
(1163, 'deleted', 'faq_categories', 14, '2018-03-19 05:36:36', '2018-03-19 05:36:36', 1),
(1164, 'created', 'faq_categories', 15, '2018-03-19 05:36:58', '2018-03-19 05:36:58', 1),
(1165, 'deleted', 'faq_categories', 15, '2018-03-19 05:37:03', '2018-03-19 05:37:03', 1),
(1166, 'updated', 'users', 1, '2018-03-20 13:34:16', '2018-03-20 13:34:16', 1),
(1167, 'updated', 'templates', 12, '2018-03-21 10:32:42', '2018-03-21 10:32:42', 1),
(1168, 'updated', 'templates', 13, '2018-03-21 10:33:31', '2018-03-21 10:33:31', 1),
(1169, 'updated', 'templates', 14, '2018-03-21 10:39:42', '2018-03-21 10:39:42', 1),
(1170, 'updated', 'templates', 15, '2018-03-21 10:40:02', '2018-03-21 10:40:02', 1),
(1171, 'updated', 'users', 1, '2018-03-21 11:44:02', '2018-03-21 11:44:02', 1),
(1172, 'updated', 'templates', 4, '2018-03-21 12:04:56', '2018-03-21 12:04:56', 1),
(1173, 'updated', 'users', 3, '2018-03-21 12:25:36', '2018-03-21 12:25:36', 3),
(1174, 'updated', 'users', 16, '2018-03-26 13:17:28', '2018-03-26 13:17:28', 16),
(1175, 'updated', 'users', 1, '2018-04-02 06:46:55', '2018-04-02 06:46:55', 1),
(1176, 'updated', 'users', 16, '2018-04-02 10:07:17', '2018-04-02 10:07:17', 16),
(1177, 'updated', 'users', 16, '2018-04-02 10:29:32', '2018-04-02 10:29:32', 16),
(1178, 'updated', 'users', 16, '2018-04-02 10:31:55', '2018-04-02 10:31:55', 16),
(1179, 'updated', 'auctions', 23, '2018-04-02 10:40:03', '2018-04-02 10:40:03', 1),
(1180, 'updated', 'auctions', 22, '2018-04-02 10:40:22', '2018-04-02 10:40:22', 1),
(1181, 'updated', 'auctions', 21, '2018-04-02 10:40:29', '2018-04-02 10:40:29', 1),
(1182, 'updated', 'auctions', 20, '2018-04-02 10:40:44', '2018-04-02 10:40:44', 1),
(1183, 'updated', 'auctions', 18, '2018-04-02 10:41:00', '2018-04-02 10:41:00', 1),
(1184, 'updated', 'auctions', 19, '2018-04-02 10:41:40', '2018-04-02 10:41:40', 1),
(1185, 'updated', 'auctions', 17, '2018-04-02 10:42:06', '2018-04-02 10:42:06', 1),
(1186, 'updated', 'auctions', 16, '2018-04-02 10:42:16', '2018-04-02 10:42:16', 1),
(1187, 'updated', 'auctions', 15, '2018-04-02 10:42:24', '2018-04-02 10:42:24', 1),
(1188, 'updated', 'auctions', 14, '2018-04-02 10:42:30', '2018-04-02 10:42:30', 1),
(1189, 'updated', 'auctions', 13, '2018-04-02 10:42:39', '2018-04-02 10:42:39', 1),
(1190, 'updated', 'auctions', 12, '2018-04-02 10:42:47', '2018-04-02 10:42:47', 1),
(1191, 'updated', 'auctions', 11, '2018-04-02 10:42:55', '2018-04-02 10:42:55', 1),
(1192, 'updated', 'auctions', 10, '2018-04-02 10:43:18', '2018-04-02 10:43:18', 1),
(1193, 'updated', 'auctions', 9, '2018-04-02 10:43:24', '2018-04-02 10:43:24', 1),
(1194, 'updated', 'auctions', 8, '2018-04-02 10:43:34', '2018-04-02 10:43:34', 1),
(1195, 'updated', 'auctions', 6, '2018-04-02 10:43:45', '2018-04-02 10:43:45', 1),
(1196, 'updated', 'auctions', 7, '2018-04-02 10:44:41', '2018-04-02 10:44:41', 1),
(1197, 'updated', 'auctions', 5, '2018-04-02 10:45:07', '2018-04-02 10:45:07', 1),
(1198, 'updated', 'auctions', 4, '2018-04-02 10:45:22', '2018-04-02 10:45:22', 1),
(1199, 'updated', 'auctions', 3, '2018-04-02 10:45:31', '2018-04-02 10:45:31', 1),
(1200, 'updated', 'auctions', 2, '2018-04-02 10:45:37', '2018-04-02 10:45:37', 1),
(1201, 'updated', 'auctions', 1, '2018-04-02 10:45:47', '2018-04-02 10:45:47', 1),
(1202, 'updated', 'auctions', 23, '2018-04-02 10:56:01', '2018-04-02 10:56:01', 1),
(1203, 'updated', 'auctions', 22, '2018-04-02 10:56:13', '2018-04-02 10:56:13', 1),
(1204, 'updated', 'auctions', 20, '2018-04-02 10:56:36', '2018-04-02 10:56:36', 1),
(1205, 'updated', 'auctions', 19, '2018-04-02 10:56:48', '2018-04-02 10:56:48', 1),
(1206, 'updated', 'auctions', 18, '2018-04-02 10:56:57', '2018-04-02 10:56:57', 1),
(1207, 'updated', 'auctions', 1, '2018-04-02 11:40:54', '2018-04-02 11:40:54', 1),
(1208, 'updated', 'users', 1, '2018-04-02 13:27:01', '2018-04-02 13:27:01', 1),
(1209, 'updated', 'auctions', 23, '2018-04-03 04:19:18', '2018-04-03 04:19:18', 1),
(1210, 'updated', 'users', 1, '2018-04-03 11:44:03', '2018-04-03 11:44:03', 1),
(1211, 'updated', 'users', 3, '2018-04-03 11:49:21', '2018-04-03 11:49:21', 3),
(1212, 'updated', 'users', 3, '2018-04-03 11:49:23', '2018-04-03 11:49:23', 3);
INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1213, 'updated', 'users', 3, '2018-04-03 11:49:43', '2018-04-03 11:49:43', 3),
(1214, 'updated', 'users', 16, '2018-04-03 11:53:19', '2018-04-03 11:53:19', 16),
(1215, 'updated', 'users', 16, '2018-04-03 11:53:20', '2018-04-03 11:53:20', 16),
(1216, 'updated', 'users', 16, '2018-04-03 11:53:46', '2018-04-03 11:53:46', 16),
(1217, 'updated', 'users', 16, '2018-04-03 11:53:46', '2018-04-03 11:53:46', 16),
(1218, 'updated', 'users', 16, '2018-04-03 11:53:55', '2018-04-03 11:53:55', 16),
(1219, 'updated', 'users', 16, '2018-04-03 11:53:56', '2018-04-03 11:53:56', 16),
(1220, 'updated', 'users', 16, '2018-04-03 11:55:36', '2018-04-03 11:55:36', 1),
(1221, 'updated', 'users', 16, '2018-04-03 11:55:37', '2018-04-03 11:55:37', 1),
(1222, 'updated', 'users', 16, '2018-04-03 11:56:04', '2018-04-03 11:56:04', 1),
(1223, 'updated', 'users', 16, '2018-04-03 11:56:04', '2018-04-03 11:56:04', 1),
(1224, 'updated', 'users', 16, '2018-04-03 12:05:41', '2018-04-03 12:05:41', 16),
(1225, 'updated', 'users', 16, '2018-04-03 12:06:55', '2018-04-03 12:06:55', 16),
(1226, 'updated', 'users', 16, '2018-04-03 12:06:55', '2018-04-03 12:06:55', 16),
(1227, 'updated', 'users', 16, '2018-04-03 12:08:28', '2018-04-03 12:08:28', 16),
(1228, 'updated', 'users', 16, '2018-04-03 12:08:28', '2018-04-03 12:08:28', 16),
(1229, 'updated', 'users', 16, '2018-04-03 12:08:59', '2018-04-03 12:08:59', 16),
(1230, 'updated', 'users', 16, '2018-04-03 12:09:15', '2018-04-03 12:09:15', 16),
(1231, 'updated', 'users', 16, '2018-04-03 12:09:37', '2018-04-03 12:09:37', 16),
(1232, 'updated', 'users', 16, '2018-04-03 12:09:37', '2018-04-03 12:09:37', 16),
(1233, 'updated', 'users', 16, '2018-04-03 12:10:08', '2018-04-03 12:10:08', 16),
(1234, 'updated', 'users', 16, '2018-04-03 12:10:08', '2018-04-03 12:10:08', 16),
(1235, 'updated', 'users', 16, '2018-04-03 12:11:52', '2018-04-03 12:11:52', 16),
(1236, 'updated', 'users', 16, '2018-04-03 12:11:53', '2018-04-03 12:11:53', 16),
(1237, 'updated', 'users', 16, '2018-04-03 12:13:00', '2018-04-03 12:13:00', 16),
(1238, 'updated', 'users', 16, '2018-04-03 12:13:01', '2018-04-03 12:13:01', 16),
(1239, 'updated', 'users', 16, '2018-04-03 12:14:09', '2018-04-03 12:14:09', 16),
(1240, 'updated', 'users', 16, '2018-04-03 12:14:17', '2018-04-03 12:14:17', 16),
(1241, 'updated', 'users', 16, '2018-04-03 12:15:07', '2018-04-03 12:15:07', 16),
(1242, 'updated', 'users', 16, '2018-04-03 12:15:08', '2018-04-03 12:15:08', 16),
(1243, 'updated', 'users', 16, '2018-04-03 12:15:34', '2018-04-03 12:15:34', 16),
(1244, 'updated', 'users', 16, '2018-04-03 12:15:34', '2018-04-03 12:15:34', 16),
(1245, 'updated', 'users', 16, '2018-04-03 12:15:41', '2018-04-03 12:15:41', 16),
(1246, 'updated', 'users', 16, '2018-04-03 12:15:41', '2018-04-03 12:15:41', 16),
(1247, 'updated', 'users', 4, '2018-04-03 12:15:57', '2018-04-03 12:15:57', 1),
(1248, 'updated', 'users', 4, '2018-04-03 12:15:58', '2018-04-03 12:15:58', 1),
(1249, 'updated', 'users', 14, '2018-04-03 12:16:20', '2018-04-03 12:16:20', 1),
(1250, 'updated', 'users', 14, '2018-04-03 12:16:20', '2018-04-03 12:16:20', 1),
(1251, 'updated', 'users', 1, '2018-04-03 12:57:05', '2018-04-03 12:57:05', 1),
(1252, 'updated', 'users', 1, '2018-04-03 13:03:33', '2018-04-03 13:03:33', 1),
(1253, 'updated', 'users', 3, '2018-04-03 13:11:25', '2018-04-03 13:11:25', 3),
(1254, 'updated', 'users', 1, '2018-04-03 13:16:57', '2018-04-03 13:16:57', 1),
(1255, 'updated', 'users', 16, '2018-04-04 04:21:11', '2018-04-04 04:21:11', 16),
(1256, 'updated', 'users', 16, '2018-04-04 04:21:11', '2018-04-04 04:21:11', 16),
(1257, 'updated', 'users', 16, '2018-04-04 04:23:44', '2018-04-04 04:23:44', 16),
(1258, 'updated', 'users', 16, '2018-04-04 04:23:45', '2018-04-04 04:23:45', 16),
(1259, 'updated', 'cities', 1, '2018-04-04 04:58:14', '2018-04-04 04:58:14', 1),
(1260, 'updated', 'users', 16, '2018-04-04 05:40:58', '2018-04-04 05:40:58', 16),
(1261, 'updated', 'users', 16, '2018-04-04 05:41:42', '2018-04-04 05:41:42', 16),
(1262, 'updated', 'categories', 1, '2018-04-04 05:59:11', '2018-04-04 05:59:11', 1),
(1263, 'updated', 'categories', 1, '2018-04-04 06:01:37', '2018-04-04 06:01:37', 1),
(1264, 'created', 'faq_categories', 4, '2018-04-04 06:33:38', '2018-04-04 06:33:38', 1),
(1265, 'created', 'faq_questions', 3, '2018-04-04 06:35:03', '2018-04-04 06:35:03', 1),
(1266, 'updated', 'users', 1, '2018-04-04 06:47:12', '2018-04-04 06:47:12', 1),
(1267, 'updated', 'users', 3, '2018-04-04 12:27:57', '2018-04-04 12:27:57', 3),
(1268, 'updated', 'users', 16, '2018-04-04 12:29:25', '2018-04-04 12:29:25', 16),
(1269, 'updated', 'users', 1, '2018-04-06 05:08:06', '2018-04-06 05:08:06', 1),
(1270, 'updated', 'users', 16, '2018-04-06 05:08:15', '2018-04-06 05:08:15', 16),
(1271, 'updated', 'users', 1, '2018-04-06 08:45:49', '2018-04-06 08:45:49', 1),
(1272, 'updated', 'users', 16, '2018-04-06 12:40:24', '2018-04-06 12:40:24', 16),
(1273, 'updated', 'users', 1, '2018-04-06 13:29:20', '2018-04-06 13:29:20', 1),
(1274, 'created', 'testmonies', 6, '2018-04-07 04:39:06', '2018-04-07 04:39:06', 1),
(1275, 'deleted', 'testmonies', 6, '2018-04-07 04:47:42', '2018-04-07 04:47:42', 1),
(1276, 'created', 'faq_categories', 5, '2018-04-07 04:48:26', '2018-04-07 04:48:26', 1),
(1277, 'deleted', 'faq_categories', 5, '2018-04-07 04:48:32', '2018-04-07 04:48:32', 1),
(1278, 'created', 'faq_questions', 4, '2018-04-07 04:48:47', '2018-04-07 04:48:47', 1),
(1279, 'deleted', 'faq_questions', 4, '2018-04-07 04:48:56', '2018-04-07 04:48:56', 1),
(1280, 'created', 'categories', 16, '2018-04-07 04:49:19', '2018-04-07 04:49:19', 1),
(1281, 'deleted', 'categories', 16, '2018-04-07 04:49:36', '2018-04-07 04:49:36', 1),
(1282, 'deleted', 'categories', 16, '2018-04-07 04:51:43', '2018-04-07 04:51:43', 1),
(1283, 'created', 'sub_catogories', 149, '2018-04-07 04:53:27', '2018-04-07 04:53:27', 1),
(1284, 'deleted', 'sub_catogories', 149, '2018-04-07 04:53:35', '2018-04-07 04:53:35', 1),
(1285, 'deleted', 'sub_catogories', 15, '2018-04-07 04:54:10', '2018-04-07 04:54:10', 1),
(1286, 'updated', 'users', 3, '2018-04-07 04:55:05', '2018-04-07 04:55:05', 3),
(1287, 'updated', 'users', 1, '2018-04-07 04:57:09', '2018-04-07 04:57:09', 1),
(1288, 'created', 'countries', 265, '2018-04-07 05:04:28', '2018-04-07 05:04:28', 1),
(1289, 'deleted', 'countries', 265, '2018-04-07 05:04:34', '2018-04-07 05:04:34', 1),
(1290, 'created', 'states', 16, '2018-04-07 05:11:28', '2018-04-07 05:11:28', 1),
(1291, 'deleted', 'states', 16, '2018-04-07 05:11:38', '2018-04-07 05:11:38', 1),
(1292, 'created', 'cities', 41, '2018-04-07 05:15:03', '2018-04-07 05:15:03', 1),
(1293, 'deleted', 'cities', 41, '2018-04-07 05:15:09', '2018-04-07 05:15:09', 1),
(1294, 'updated', 'users', 1, '2018-04-07 05:48:18', '2018-04-07 05:48:18', 1),
(1295, 'updated', 'users', 1, '2018-04-07 05:52:05', '2018-04-07 05:52:05', 1),
(1296, 'updated', 'users', 3, '2018-04-07 05:57:13', '2018-04-07 05:57:13', 3),
(1297, 'updated', 'templates', 16, '2018-04-07 10:39:35', '2018-04-07 10:39:35', 1),
(1298, 'created', 'create_letters', 2, '2018-04-07 10:59:47', '2018-04-07 10:59:47', 1),
(1299, 'created', 'create_letters', 3, '2018-04-07 11:03:48', '2018-04-07 11:03:48', 1),
(1300, 'updated', 'users', 1, '2018-04-07 11:06:06', '2018-04-07 11:06:06', 1),
(1301, 'updated', 'users', 1, '2018-04-09 05:12:15', '2018-04-09 05:12:15', 1),
(1302, 'updated', 'users', 16, '2018-04-09 05:54:24', '2018-04-09 05:54:24', 16),
(1303, 'updated', 'users', 1, '2018-04-09 05:54:40', '2018-04-09 05:54:40', 1),
(1304, 'updated', 'users', 1, '2018-04-09 06:05:51', '2018-04-09 06:05:51', 1),
(1305, 'updated', 'users', 16, '2018-04-09 06:27:51', '2018-04-09 06:27:51', 16),
(1306, 'updated', 'users', 1, '2018-04-09 06:44:56', '2018-04-09 06:44:56', 1),
(1307, 'updated', 'users', 16, '2018-04-09 06:55:12', '2018-04-09 06:55:12', 16),
(1308, 'updated', 'users', 1, '2018-04-09 07:21:47', '2018-04-09 07:21:47', 1),
(1309, 'updated', 'users', 1, '2018-04-09 08:07:46', '2018-04-09 08:07:46', 1),
(1310, 'updated', 'users', 3, '2018-04-09 08:08:09', '2018-04-09 08:08:09', 3),
(1311, 'updated', 'users', 1, '2018-04-09 09:38:13', '2018-04-09 09:38:13', 1),
(1312, 'updated', 'users', 16, '2018-04-09 12:36:14', '2018-04-09 12:36:14', 16),
(1313, 'updated', 'users', 16, '2018-04-09 12:45:54', '2018-04-09 12:45:54', 16),
(1314, 'updated', 'users', 1, '2018-04-09 13:24:01', '2018-04-09 13:24:01', 1),
(1315, 'updated', 'faq_questions', 1, '2018-04-10 04:26:10', '2018-04-10 04:26:10', 1),
(1316, 'updated', 'faq_questions', 1, '2018-04-10 04:26:30', '2018-04-10 04:26:30', 1),
(1317, 'updated', 'faq_questions', 1, '2018-04-10 04:29:50', '2018-04-10 04:29:50', 1),
(1318, 'updated', 'faq_questions', 2, '2018-04-10 04:30:05', '2018-04-10 04:30:05', 1),
(1319, 'created', 'faq_questions', 4, '2018-04-10 04:31:01', '2018-04-10 04:31:01', 1),
(1320, 'created', 'faq_questions', 5, '2018-04-10 04:31:17', '2018-04-10 04:31:17', 1),
(1321, 'created', 'faq_questions', 6, '2018-04-10 04:31:34', '2018-04-10 04:31:34', 1),
(1322, 'created', 'faq_questions', 7, '2018-04-10 04:31:49', '2018-04-10 04:31:49', 1),
(1323, 'created', 'faq_questions', 8, '2018-04-10 04:32:12', '2018-04-10 04:32:12', 1),
(1324, 'created', 'faq_questions', 9, '2018-04-10 04:32:25', '2018-04-10 04:32:25', 1),
(1325, 'created', 'faq_questions', 10, '2018-04-10 04:32:42', '2018-04-10 04:32:42', 1),
(1326, 'created', 'faq_questions', 11, '2018-04-10 04:33:03', '2018-04-10 04:33:03', 1),
(1327, 'created', 'faq_questions', 12, '2018-04-10 04:33:27', '2018-04-10 04:33:27', 1),
(1328, 'updated', 'users', 29, '2018-04-10 04:45:33', '2018-04-10 04:45:33', 1),
(1329, 'updated', 'auctions', 23, '2018-04-10 05:48:30', '2018-04-10 05:48:30', 1),
(1330, 'updated', 'auctions', 22, '2018-04-10 06:46:57', '2018-04-10 06:46:57', 1),
(1331, 'updated', 'auctions', 21, '2018-04-10 07:07:35', '2018-04-10 07:07:35', 1),
(1332, 'updated', 'auctions', 20, '2018-04-10 07:12:37', '2018-04-10 07:12:37', 1),
(1333, 'updated', 'auctions', 19, '2018-04-10 07:14:36', '2018-04-10 07:14:36', 1),
(1334, 'updated', 'auctions', 18, '2018-04-10 07:21:12', '2018-04-10 07:21:12', 1),
(1335, 'updated', 'auctions', 16, '2018-04-10 07:25:11', '2018-04-10 07:25:11', 1),
(1336, 'updated', 'auctions', 15, '2018-04-10 07:28:25', '2018-04-10 07:28:25', 1),
(1337, 'updated', 'auctions', 14, '2018-04-10 07:30:10', '2018-04-10 07:30:10', 1),
(1338, 'updated', 'auctions', 13, '2018-04-10 08:11:08', '2018-04-10 08:11:08', 1),
(1339, 'updated', 'auctions', 12, '2018-04-10 08:16:17', '2018-04-10 08:16:17', 1),
(1340, 'updated', 'auctions', 11, '2018-04-10 08:19:57', '2018-04-10 08:19:57', 1),
(1341, 'updated', 'auctions', 10, '2018-04-10 08:25:55', '2018-04-10 08:25:55', 1),
(1342, 'updated', 'auctions', 9, '2018-04-10 08:29:45', '2018-04-10 08:29:45', 1),
(1343, 'updated', 'auctions', 8, '2018-04-10 08:33:53', '2018-04-10 08:33:53', 1),
(1344, 'updated', 'auctions', 7, '2018-04-10 08:37:58', '2018-04-10 08:37:58', 1),
(1345, 'updated', 'auctions', 6, '2018-04-10 08:39:51', '2018-04-10 08:39:51', 1),
(1346, 'updated', 'auctions', 5, '2018-04-10 08:51:14', '2018-04-10 08:51:14', 1),
(1347, 'updated', 'auctions', 4, '2018-04-10 08:55:37', '2018-04-10 08:55:37', 1),
(1348, 'updated', 'auctions', 3, '2018-04-10 09:00:27', '2018-04-10 09:00:27', 1),
(1349, 'updated', 'auctions', 2, '2018-04-10 09:06:43', '2018-04-10 09:06:43', 1),
(1350, 'updated', 'auctions', 1, '2018-04-10 09:09:02', '2018-04-10 09:09:02', 1),
(1351, 'updated', 'users', 1, '2018-04-10 17:28:31', '2018-04-10 17:28:31', 1),
(1352, 'updated', 'users', 16, '2018-04-10 18:52:23', '2018-04-10 18:52:23', 16),
(1353, 'updated', 'users', 1, '2018-04-10 18:52:56', '2018-04-10 18:52:56', 1),
(1354, 'updated', 'users', 30, '2018-04-10 19:19:19', '2018-04-10 19:19:19', 30),
(1355, 'updated', 'users', 30, '2018-04-10 19:19:56', '2018-04-10 19:19:56', 30),
(1356, 'updated', 'users', 1, '2018-04-10 20:20:34', '2018-04-10 20:20:34', 1),
(1357, 'updated', 'users', 31, '2018-04-10 20:20:48', '2018-04-10 20:20:48', 31),
(1358, 'updated', 'users', 31, '2018-04-10 20:22:44', '2018-04-10 20:22:44', 31),
(1359, 'updated', 'users', 31, '2018-04-10 20:23:25', '2018-04-10 20:23:25', 31),
(1360, 'updated', 'users', 31, '2018-04-10 21:36:50', '2018-04-10 21:36:50', 31),
(1361, 'created', 'create_letters', 4, '2018-04-11 10:17:30', '2018-04-11 10:17:30', 1),
(1362, 'created', 'users', 33, '2018-04-11 10:50:02', '2018-04-11 10:50:02', 1),
(1363, 'created', 'users', 33, '2018-04-11 10:50:02', '2018-04-11 10:50:02', 1),
(1364, 'created', 'users', 33, '2018-04-11 10:50:02', '2018-04-11 10:50:02', 1),
(1365, 'created', 'auctions', 24, '2018-04-11 11:33:15', '2018-04-11 11:33:15', 1),
(1366, 'created', 'auctions', 25, '2018-04-11 11:34:57', '2018-04-11 11:34:57', 33),
(1367, 'created', 'faq_categories', 5, '2018-04-11 11:35:53', '2018-04-11 11:35:53', 1),
(1368, 'deleted', 'faq_categories', 5, '2018-04-11 11:36:00', '2018-04-11 11:36:00', 1),
(1369, 'created', 'faq_questions', 13, '2018-04-11 11:36:13', '2018-04-11 11:36:13', 1),
(1370, 'deleted', 'faq_questions', 13, '2018-04-11 11:36:20', '2018-04-11 11:36:20', 1),
(1371, 'created', 'categories', 16, '2018-04-11 11:36:31', '2018-04-11 11:36:31', 1),
(1372, 'deleted', 'categories', 16, '2018-04-11 11:36:38', '2018-04-11 11:36:38', 1),
(1373, 'created', 'sub_catogories', 149, '2018-04-11 11:36:48', '2018-04-11 11:36:48', 1),
(1374, 'deleted', 'sub_catogories', 149, '2018-04-11 11:37:04', '2018-04-11 11:37:04', 1),
(1375, 'created', 'countries', 265, '2018-04-11 11:37:18', '2018-04-11 11:37:18', 1),
(1376, 'deleted', 'countries', 265, '2018-04-11 11:37:26', '2018-04-11 11:37:26', 1),
(1377, 'created', 'testmonies', 6, '2018-04-11 11:38:00', '2018-04-11 11:38:00', 1),
(1378, 'deleted', 'testmonies', 6, '2018-04-11 11:38:05', '2018-04-11 11:38:05', 1),
(1379, 'created', 'create_letters', 5, '2018-04-11 11:40:12', '2018-04-11 11:40:12', 1),
(1380, 'updated', 'auctions', 25, '2018-04-11 11:43:59', '2018-04-11 11:43:59', 1),
(1381, 'updated', 'users', 33, '2018-04-11 12:17:03', '2018-04-11 12:17:03', 33),
(1382, 'updated', 'users', 33, '2018-04-11 12:17:04', '2018-04-11 12:17:04', 33),
(1383, 'updated', 'users', 1, '2018-04-11 12:35:25', '2018-04-11 12:35:25', 1),
(1384, 'updated', 'users', 33, '2018-04-11 13:00:15', '2018-04-11 13:00:15', 33),
(1385, 'updated', 'users', 1, '2018-04-11 13:02:29', '2018-04-11 13:02:29', 1),
(1386, 'updated', 'users', 16, '2018-04-11 13:42:13', '2018-04-11 13:42:13', 16),
(1387, 'updated', 'users', 29, '2018-04-11 14:07:23', '2018-04-11 14:07:23', 29),
(1388, 'updated', 'users', 29, '2018-04-11 14:23:14', '2018-04-11 14:23:14', 29),
(1389, 'updated', 'users', 29, '2018-04-11 14:23:40', '2018-04-11 14:23:40', 29),
(1390, 'updated', 'users', 16, '2018-04-11 14:26:47', '2018-04-11 14:26:47', 16),
(1391, 'updated', 'users', 3, '2018-04-11 14:27:14', '2018-04-11 14:27:14', 3),
(1392, 'updated', 'users', 3, '2018-04-11 14:32:39', '2018-04-11 14:32:39', 3),
(1393, 'updated', 'users', 32, '2018-04-11 14:33:26', '2018-04-11 14:33:26', 32),
(1394, 'updated', 'users', 32, '2018-04-11 14:34:10', '2018-04-11 14:34:10', 32),
(1395, 'updated', 'users', 32, '2018-04-11 14:34:23', '2018-04-11 14:34:23', 32),
(1396, 'updated', 'users', 34, '2018-04-11 14:41:19', '2018-04-11 14:41:19', 34),
(1397, 'updated', 'users', 34, '2018-04-11 14:42:10', '2018-04-11 14:42:10', 34),
(1398, 'updated', 'users', 1, '2018-04-11 14:49:43', '2018-04-11 14:49:43', 1),
(1399, 'updated', 'users', 34, '2018-04-11 14:51:15', '2018-04-11 14:51:15', 34),
(1400, 'updated', 'users', 34, '2018-04-11 15:10:58', '2018-04-11 15:10:58', 34),
(1401, 'updated', 'testmonies', 5, '2018-04-11 15:41:14', '2018-04-11 15:41:14', 1),
(1402, 'updated', 'testmonies', 4, '2018-04-11 15:41:33', '2018-04-11 15:41:33', 1),
(1403, 'updated', 'testmonies', 3, '2018-04-11 15:42:02', '2018-04-11 15:42:02', 1),
(1404, 'updated', 'testmonies', 2, '2018-04-11 15:42:29', '2018-04-11 15:42:29', 1),
(1405, 'updated', 'testmonies', 1, '2018-04-11 15:42:37', '2018-04-11 15:42:37', 1),
(1406, 'updated', 'testmonies', 1, '2018-04-11 15:43:03', '2018-04-11 15:43:03', 1),
(1407, 'updated', 'testmonies', 2, '2018-04-11 15:43:28', '2018-04-11 15:43:28', 1),
(1408, 'updated', 'users', 29, '2018-04-11 15:54:25', '2018-04-11 15:54:25', 29),
(1409, 'updated', 'users', 4, '2018-04-11 15:54:46', '2018-04-11 15:54:46', 4),
(1410, 'updated', 'users', 4, '2018-04-11 15:55:20', '2018-04-11 15:55:20', 4),
(1411, 'updated', 'users', 1, '2018-04-11 17:06:55', '2018-04-11 17:06:55', 1),
(1412, 'updated', 'users', 1, '2018-04-11 17:51:16', '2018-04-11 17:51:16', 1),
(1413, 'updated', 'users', 1, '2018-04-17 15:28:13', '2018-04-17 15:28:13', 1),
(1414, 'updated', 'users', 1, '2018-04-17 18:57:02', '2018-04-17 18:57:02', 1),
(1415, 'updated', 'users', 16, '2018-04-17 18:58:04', '2018-04-17 18:58:04', 16),
(1416, 'updated', 'templates', 3, '2018-04-19 15:37:33', '2018-04-19 15:37:33', 1),
(1417, 'updated', 'users', 1, '2018-04-19 16:38:51', '2018-04-19 16:38:51', 1),
(1418, 'updated', 'users', 16, '2018-04-19 16:39:16', '2018-04-19 16:39:16', 16),
(1419, 'updated', 'users', 1, '2018-04-19 18:43:56', '2018-04-19 18:43:56', 1),
(1420, 'updated', 'users', 16, '2018-04-20 14:19:42', '2018-04-20 14:19:42', 16),
(1421, 'updated', 'users', 16, '2018-04-20 18:43:13', '2018-04-20 18:43:13', 16),
(1422, 'updated', 'users', 1, '2018-04-20 18:45:54', '2018-04-20 18:45:54', 1),
(1423, 'updated', 'users', 34, '2018-04-21 10:50:27', '2018-04-21 10:50:27', 34),
(1424, 'updated', 'users', 34, '2018-04-21 10:50:58', '2018-04-21 10:50:58', 34),
(1425, 'updated', 'users', 16, '2018-04-21 10:52:34', '2018-04-21 10:52:34', 16),
(1426, 'updated', 'auctions', 16, '2018-04-21 11:24:58', '2018-04-21 11:24:58', 1),
(1427, 'updated', 'auctions', 16, '2018-04-21 11:25:35', '2018-04-21 11:25:35', 1),
(1428, 'updated', 'users', 16, '2018-04-21 11:35:34', '2018-04-21 11:35:34', 16),
(1429, 'updated', 'content_pages', 1, '2018-04-21 11:38:51', '2018-04-21 11:38:51', 1),
(1430, 'updated', 'users', 3, '2018-04-21 11:39:22', '2018-04-21 11:39:22', 3),
(1431, 'updated', 'auctions', 22, '2018-04-21 11:41:12', '2018-04-21 11:41:12', 1),
(1432, 'updated', 'users', 1, '2018-04-21 11:45:00', '2018-04-21 11:45:00', 1),
(1433, 'updated', 'users', 16, '2018-04-21 11:57:46', '2018-04-21 11:57:46', 16),
(1434, 'created', 'create_letters', 6, '2018-04-21 11:58:42', '2018-04-21 11:58:42', 1),
(1435, 'updated', 'auctions', 25, '2018-04-21 15:24:55', '2018-04-21 15:24:55', 1),
(1436, 'updated', 'users', 32, '2018-04-23 11:46:44', '2018-04-23 11:46:44', 1),
(1437, 'updated', 'users', 16, '2018-04-25 12:29:23', '2018-04-25 12:29:23', 16),
(1438, 'updated', 'users', 1, '2018-04-25 12:29:49', '2018-04-25 12:29:49', 1),
(1439, 'updated', 'users', 4, '2018-04-25 12:30:57', '2018-04-25 12:30:57', 4),
(1440, 'updated', 'users', 1, '2018-04-25 13:55:08', '2018-04-25 13:55:08', 1),
(1441, 'updated', 'users', 1, '2018-04-25 13:57:47', '2018-04-25 13:57:47', 1),
(1442, 'updated', 'users', 1, '2018-04-25 14:09:16', '2018-04-25 14:09:16', 1),
(1443, 'updated', 'users', 1, '2018-04-25 14:22:41', '2018-04-25 14:22:41', 1),
(1444, 'updated', 'users', 1, '2018-04-25 18:58:52', '2018-04-25 18:58:52', 1),
(1445, 'updated', 'users', 32, '2018-04-26 17:34:01', '2018-04-26 17:34:01', 1),
(1446, 'updated', 'users', 32, '2018-04-26 18:11:37', '2018-04-26 18:11:37', 1),
(1447, 'updated', 'users', 1, '2018-04-26 18:59:04', '2018-04-26 18:59:04', 1),
(1448, 'updated', 'users', 1, '2018-04-27 10:06:18', '2018-04-27 10:06:18', 1),
(1449, 'updated', 'users', 1, '2018-04-27 11:17:03', '2018-04-27 11:17:03', 1),
(1450, 'updated', 'users', 1, '2018-04-27 11:21:06', '2018-04-27 11:21:06', 1),
(1451, 'updated', 'users', 29, '2018-04-27 05:59:01', '2018-04-27 05:59:01', 1),
(1452, 'updated', 'users', 1, '2018-04-27 06:03:06', '2018-04-27 06:03:06', 1),
(1453, 'updated', 'users', 4, '2018-04-27 06:03:39', '2018-04-27 06:03:39', 4),
(1454, 'updated', 'users', 3, '2018-04-27 06:03:54', '2018-04-27 06:03:54', 3),
(1455, 'updated', 'auctions', 25, '2018-07-13 09:01:12', '2018-07-13 09:01:12', 1),
(1456, 'updated', 'auctions', 21, '2018-07-13 09:03:11', '2018-07-13 09:03:11', 1),
(1457, 'updated', 'auctions', 20, '2018-07-13 09:03:36', '2018-07-13 09:03:36', 1),
(1458, 'updated', 'auctions', 19, '2018-07-13 09:03:56', '2018-07-13 09:03:56', 1),
(1459, 'updated', 'auctions', 18, '2018-07-13 09:04:16', '2018-07-13 09:04:16', 1),
(1460, 'updated', 'auctions', 16, '2018-07-13 09:04:47', '2018-07-13 09:04:47', 1),
(1461, 'updated', 'auctions', 12, '2018-07-13 09:05:08', '2018-07-13 09:05:08', 1),
(1462, 'updated', 'auctions', 11, '2018-07-13 09:05:31', '2018-07-13 09:05:31', 1),
(1463, 'updated', 'auctions', 10, '2018-07-13 09:05:51', '2018-07-13 09:05:51', 1),
(1464, 'updated', 'auctions', 9, '2018-07-13 09:06:09', '2018-07-13 09:06:09', 1),
(1465, 'updated', 'auctions', 8, '2018-07-13 09:06:26', '2018-07-13 09:06:26', 1),
(1466, 'updated', 'auctions', 7, '2018-07-13 09:06:47', '2018-07-13 09:06:47', 1),
(1467, 'updated', 'auctions', 5, '2018-07-13 09:07:04', '2018-07-13 09:07:04', 1),
(1468, 'updated', 'auctions', 4, '2018-07-13 09:07:26', '2018-07-13 09:07:26', 1),
(1469, 'updated', 'auctions', 2, '2018-07-13 09:07:36', '2018-07-13 09:07:36', 1),
(1470, 'updated', 'users', 1, '2018-07-13 09:07:44', '2018-07-13 09:07:44', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctionbidders`
--
ALTER TABLE `auctionbidders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auction_id` (`auction_id`),
  ADD KEY `bidder_id` (`bidder_id`);

--
-- Indexes for table `auctionimages`
--
ALTER TABLE `auctionimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auction_id` (`auction_id`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creates_deleted_at_index` (`deleted_at-old`),
  ADD KEY `113380_5a71d0a4dc349` (`category_id`),
  ADD KEY `113380_5a71d0a4e84ed` (`sub_category_id`),
  ADD KEY `113380_5a71d0a4f3fed` (`created_by_id`),
  ADD KEY `113380_5a71d1f3a263a` (`user_id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ab_id` (`ab_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `content_pages`
--
ALTER TABLE `content_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_letters`
--
ALTER TABLE `create_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailtemplates`
--
ALTER TABLE `emailtemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `113335_5a71a5cbe7dbf` (`category_id`);

--
-- Indexes for table `favouriteauctions`
--
ALTER TABLE `favouriteauctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_notifications`
--
ALTER TABLE `internal_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_notification_user`
--
ALTER TABLE `internal_notification_user`
  ADD KEY `fk_p_113336_113328_user_i_5a71a5f51cb34` (`internal_notification_id`),
  ADD KEY `fk_p_113328_113336_intern_5a71a5f51cbb5` (`user_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messenger_messages_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `messenger_topics`
--
ALTER TABLE `messenger_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `auction_id` (`auction_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `fk_p_113326_113327_role_p_5a71a38c34255` (`permission_id`),
  ADD KEY `fk_p_113327_113326_permis_5a71a38c3431c` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_p_113327_113328_user_r_5a71a3926cfbe` (`role_id`),
  ADD KEY `fk_p_113328_113327_role_u_5a71a3926d035` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`),
  ADD UNIQUE KEY `settings_slug_unique` (`slug`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_deleted_at_index` (`deleted_at`),
  ADD KEY `113567_5a72c0089de2d` (`created_by_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_catogories`
--
ALTER TABLE `sub_catogories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_catogories_deleted_at_index` (`deleted_at`),
  ADD KEY `113377_5a71cbd3e80a1` (`category_id`),
  ADD KEY `113377_5a71cbd3f0280` (`created_by_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testmonies`
--
ALTER TABLE `testmonies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `113566_5a72bdb16fd06` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `113332_5a71a582ab0ce` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctionbidders`
--
ALTER TABLE `auctionbidders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `auctionimages`
--
ALTER TABLE `auctionimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `content_pages`
--
ALTER TABLE `content_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `create_letters`
--
ALTER TABLE `create_letters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `emailtemplates`
--
ALTER TABLE `emailtemplates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `favouriteauctions`
--
ALTER TABLE `favouriteauctions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `internal_notifications`
--
ALTER TABLE `internal_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `messenger_topics`
--
ALTER TABLE `messenger_topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sub_catogories`
--
ALTER TABLE `sub_catogories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `testmonies`
--
ALTER TABLE `testmonies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1471;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctionbidders`
--
ALTER TABLE `auctionbidders`
  ADD CONSTRAINT `auctionbidders_ibfk_1` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`),
  ADD CONSTRAINT `auctionbidders_ibfk_2` FOREIGN KEY (`bidder_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `auctionimages`
--
ALTER TABLE `auctionimages`
  ADD CONSTRAINT `auctionimages_ibfk_1` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`);

--
-- Constraints for table `auctions`
--
ALTER TABLE `auctions`
  ADD CONSTRAINT `auctions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bidding`
--
ALTER TABLE `bidding`
  ADD CONSTRAINT `bidding_ibfk_1` FOREIGN KEY (`ab_id`) REFERENCES `auctionbidders` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `cities_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD CONSTRAINT `113335_5a71a5cbe7dbf` FOREIGN KEY (`category_id`) REFERENCES `faq_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `internal_notification_user`
--
ALTER TABLE `internal_notification_user`
  ADD CONSTRAINT `fk_p_113328_113336_intern_5a71a5f51cbb5` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_113336_113328_user_i_5a71a5f51cb34` FOREIGN KEY (`internal_notification_id`) REFERENCES `internal_notifications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD CONSTRAINT `messenger_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `messenger_topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `fk_p_113326_113327_role_p_5a71a38c34255` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_113327_113326_permis_5a71a38c3431c` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_p_113327_113328_user_r_5a71a3926cfbe` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_113328_113327_role_u_5a71a3926d035` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `113567_5a72c0089de2d` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `sub_catogories`
--
ALTER TABLE `sub_catogories`
  ADD CONSTRAINT `113377_5a71cbd3e80a1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `113377_5a71cbd3f0280` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testmonies`
--
ALTER TABLE `testmonies`
  ADD CONSTRAINT `113566_5a72bdb16fd06` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD CONSTRAINT `113332_5a71a582ab0ce` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
