-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220729.9c9ae5069e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 02:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('new','used','broken','repaired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `flug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `barcodes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `user_id`, `vendor_id`, `staff_id`, `status`, `flug`, `brand_id`, `cate_id`, `barcodes`, `asset_code`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PC1', 2, 1, NULL, 'new', '1', 1, 1, '<div style=\"font-size:0;position:relative;width:282px;height:60px;\">\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:0px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:6px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:12px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:16px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:24px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:28px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:32px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:36px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:44px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:48px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:52px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:60px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:68px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:72px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:80px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:84px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:88px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:92px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:100px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:104px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:108px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:116px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:120px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:128px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:132px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:140px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:148px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:152px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:156px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:164px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:168px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:172px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:180px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:184px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:188px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:196px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:204px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:208px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:212px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:220px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:224px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:228px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:232px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:240px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:244px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:252px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:260px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:264px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:268px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:274px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:278px;top:0\">&nbsp;</div>\r\n</div>\r\n', '101468616', '1657988616.jpg', '2022-07-16 13:23:36', '2022-07-24 13:47:41'),
(2, 'TB1', 2, 3, 5, 'new', '1', 2, 2, '<div style=\"font-size:0;position:relative;width:282px;height:60px;\">\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:0px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:6px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:12px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:16px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:24px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:28px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:32px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:36px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:44px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:48px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:52px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:60px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:68px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:72px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:76px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:84px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:88px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:92px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:100px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:108px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:112px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:116px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:120px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:128px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:132px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:136px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:144px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:148px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:156px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:160px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:168px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:172px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:180px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:184px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:188px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:192px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:200px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:208px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:212px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:216px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:220px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:228px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:232px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:240px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:244px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:248px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:256px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:264px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:268px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:274px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:278px;top:0\">&nbsp;</div>\r\n</div>\r\n', '102149040', '1658214711.jfif', '2022-07-19 04:11:51', '2022-07-22 02:51:22'),
(5, 'TB2', 2, 3, NULL, 'repaired', '1', 2, 2, '<div style=\"font-size:0;position:relative;width:282px;height:60px;\">\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:0px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:6px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:12px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:16px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:24px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:28px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:32px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:36px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:44px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:48px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:52px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:60px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:68px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:72px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:76px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:84px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:92px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:96px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:100px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:104px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:108px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:116px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:120px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:128px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:136px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:140px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:144px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:148px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:156px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:164px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:172px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:176px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:180px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:184px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:192px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:196px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:204px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:208px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:212px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:216px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:224px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:232px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:236px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:240px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:244px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:252px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:256px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:264px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:268px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:274px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:278px;top:0\">&nbsp;</div>\r\n</div>\r\n', '106413569', '1658483959.jfif', '2022-07-22 06:59:22', '2022-07-22 06:59:22'),
(6, 'Mouse2', 2, 1, 6, 'new', '1', 1, 1, '<div style=\"font-size:0;position:relative;width:282px;height:60px;\">\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:0px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:6px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:12px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:16px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:24px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:28px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:32px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:36px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:44px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:48px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:52px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:60px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:68px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:72px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:80px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:88px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:92px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:96px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:100px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:108px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:112px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:116px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:120px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:128px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:132px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:136px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:140px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:148px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:156px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:160px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:164px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:168px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:176px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:184px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:188px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:196px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:200px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:208px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:212px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:220px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:224px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:228px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:236px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:240px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:244px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:248px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:256px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:264px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:268px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:274px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:278px;top:0\">&nbsp;</div>\r\n</div>\r\n', '103177980', '1658672359.jfif', '2022-07-22 07:08:09', '2022-07-27 09:53:41'),
(7, 'TB3', 2, 3, NULL, 'new', '1', 2, 2, '<div style=\"font-size:0;position:relative;width:282px;height:60px;\">\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:0px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:6px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:12px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:16px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:24px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:28px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:32px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:36px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:44px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:48px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:52px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:60px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:68px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:72px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:76px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:84px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:92px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:96px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:100px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:108px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:112px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:116px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:124px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:128px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:136px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:140px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:144px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:148px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:156px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:160px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:164px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:172px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:176px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:184px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:188px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:192px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:200px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:208px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:212px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:216px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:224px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:228px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:236px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:240px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:244px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:248px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:256px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:6px;height:60px;position:absolute;left:260px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:268px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:2px;height:60px;position:absolute;left:274px;top:0\">&nbsp;</div>\r\n<div style=\"background-color:black;width:4px;height:60px;position:absolute;left:278px;top:0\">&nbsp;</div>\r\n</div>\r\n', '106814094', '1658484798.jfif', '2022-07-22 07:13:18', '2022-07-22 07:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'HP', '2022-07-16 13:19:11', '2022-07-16 13:19:11'),
(2, 'Mninga', '2022-07-17 07:49:14', '2022-07-17 07:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'All electronics', '2022-07-16 13:17:44', '2022-07-16 13:17:44'),
(2, 'Furniture', 'Furniture purchased for office use only', '2022-07-17 06:42:12', '2022-07-17 06:42:12'),
(3, 'Cleaning-Materials', 'Office cleaniliness materials', '2022-07-17 07:42:57', '2022-07-17 07:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Media', '2022-07-16 07:36:01', '2022-07-16 07:36:01'),
(2, 'Environment', '2022-07-17 07:53:09', '2022-07-26 02:10:55');

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
-- Table structure for table `issued_assets`
--

CREATE TABLE `issued_assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `assets_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issued_assets`
--

INSERT INTO `issued_assets` (`id`, `staff_id`, `assets_id`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 1, '0', '2022-07-19 04:56:39', '2022-07-22 02:00:44'),
(10, 1, 1, '0', '2022-07-19 04:58:53', '2022-07-22 02:00:44'),
(13, 1, 1, '0', '2022-07-19 05:32:09', '2022-07-22 02:00:44'),
(14, 1, 1, '0', '2022-07-19 05:41:50', '2022-07-22 02:00:44'),
(15, 1, 1, '0', '2022-07-19 05:43:36', '2022-07-22 02:00:44'),
(17, 1, 1, '0', '2022-07-20 11:44:06', '2022-07-22 02:00:44'),
(18, 5, 1, '0', '2022-07-22 02:00:28', '2022-07-22 02:00:44'),
(19, 5, 2, '1', '2022-07-22 02:51:22', '2022-07-22 02:51:22'),
(20, 6, 6, '1', '2022-07-27 09:53:41', '2022-07-27 09:53:41');

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
(9, '2022_07_11_153238_create_permission_tables', 1),
(10, '2022_07_12_060856_create_staffs_table', 1),
(12, '2022_07_12_061658_create_assignments_table', 1),
(38, '2014_10_12_000000_create_users_table', 2),
(39, '2014_10_12_100000_create_password_resets_table', 2),
(40, '2019_08_19_000000_create_failed_jobs_table', 2),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(42, '2022_07_11_064538_create_categories_table', 2),
(43, '2022_07_11_064647_create_brands_table', 2),
(44, '2022_07_11_142008_create_vendors_table', 2),
(45, '2022_07_11_142032_create_departments_table', 2),
(46, '2022_07_13_081645_create_permission_tables', 2),
(47, '2022_07_15_052429_create_staffs_table', 2),
(48, '2022_07_16_100511_create_assets_table', 2),
(49, '2022_07_16_100540_create_issued_assets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view-settings', 'web', '2022-07-16 13:03:38', '2022-07-25 06:40:02'),
(2, 'create staff', 'web', '2022-07-21 10:18:07', '2022-07-21 10:18:07'),
(3, 'edit staff', 'web', '2022-07-21 10:23:38', '2022-07-21 10:23:38'),
(4, 'delete staff', 'web', '2022-07-21 10:23:51', '2022-07-21 10:23:51'),
(5, 'create department', 'web', '2022-07-21 10:24:24', '2022-07-21 10:24:24'),
(6, 'edit department', 'web', '2022-07-21 10:24:43', '2022-07-21 10:24:43'),
(7, 'delete department', 'web', '2022-07-21 10:24:58', '2022-07-21 10:24:58'),
(8, 'create brand', 'web', '2022-07-21 10:25:24', '2022-07-21 10:25:24'),
(9, 'edit brand', 'web', '2022-07-21 10:25:49', '2022-07-21 10:25:49'),
(10, 'delete brands', 'web', '2022-07-21 10:26:36', '2022-07-27 05:52:23'),
(18, 'view brand', 'web', '2022-07-27 01:59:05', '2022-07-27 01:59:05'),
(19, 'view department', 'web', '2022-07-27 01:59:29', '2022-07-27 01:59:29'),
(20, 'view staff', 'web', '2022-07-27 01:59:48', '2022-07-27 01:59:48'),
(21, 'view category', 'web', '2022-07-27 02:03:50', '2022-07-27 02:03:50'),
(22, 'view vendor', 'web', '2022-07-27 02:04:08', '2022-07-27 02:04:08'),
(24, 'view userslist', 'web', '2022-07-29 08:57:00', '2022-07-29 08:57:00'),
(25, 'add user', 'web', '2022-07-29 08:57:18', '2022-07-29 08:57:18'),
(26, 'view roleslist', 'web', '2022-07-29 09:53:24', '2022-07-29 09:53:24'),
(27, 'edit-role', 'web', '2022-07-29 09:53:43', '2022-07-29 09:53:43'),
(28, 'delete role', 'web', '2022-07-29 09:53:58', '2022-07-29 09:53:58'),
(29, 'add-role', 'web', '2022-07-29 09:54:09', '2022-07-29 09:54:09'),
(30, 'view permissionslist', 'web', '2022-07-29 09:54:28', '2022-07-29 09:54:28');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2022-07-16 13:02:34', '2022-07-16 13:02:34'),
(2, 'storekeeper', 'web', '2022-07-16 13:03:02', '2022-07-16 13:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depart_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `fname`, `lname`, `email`, `phone`, `depart_id`, `created_at`, `updated_at`) VALUES
(1, 'Samwel', 'Richard', 'sam@gmail.com', '0714439960', 1, '2022-07-16 07:36:55', '2022-07-21 02:42:24'),
(5, 'Andrew', 'Patrick', 'andrew@gmail.com', '0789654738', 1, '2022-07-21 01:53:58', '2022-07-21 01:53:58'),
(6, 'Glory', 'John', 'glory@admin.com', '0713254676', 1, '2022-07-25 07:00:12', '2022-07-25 07:00:12');

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
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samwel', 'admin@gmail.com', NULL, '$2a$12$FXmpccnsF8coowwQlHdOZOnPDKDyCmXlk.ksiRBxdFKUVTBv68gYC', 'Masika', '0714439960', NULL, NULL, NULL),
(2, 'James', 'james@gmail.com', NULL, '$2a$12$BnjZMmXEFdU4A6W3hjmblueRbj1uC.KfEgZ/6nCzSbN9m6gYNerNi', 'Mlingo', '0754435660', NULL, NULL, NULL),
(3, 'Glory', 'glory@admin.com', NULL, '$2y$10$VEe3JINx8fUm6urIwb8JtuYT0RXsj9sP5edUE/pTtIrkII.IE5D7q', 'Kiva', '0765435678', NULL, '2022-07-28 10:49:52', '2022-07-28 10:49:52'),
(5, 'Neema', 'ney@gmail.com', NULL, '$2y$10$W4uhJTHZbFsMp73d33WjoecnDm5gFR0kBrVrvAvxtxUF0Wx7ieKpa', 'Mwasile', '0768456732', NULL, '2022-07-29 02:13:55', '2022-07-29 02:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Elia Stores', 'elia@gmail.com', '0768456732', '2022-07-16 13:18:51', '2022-07-16 13:18:51'),
(2, 'Happy Appliances', 'happy@gmail.com', '0765432578', '2022-07-17 07:44:09', '2022-07-17 07:44:09'),
(3, 'Festus Mininga', 'festus@gmail.com', '0713254676', '2022-07-17 07:44:46', '2022-07-17 07:44:46'),
(5, 'Stailika', 'stailika@gmail.com', '0713254676', '2022-07-26 02:56:54', '2022-07-26 02:56:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assets_user_id_foreign` (`user_id`),
  ADD KEY `assets_vendor_id_foreign` (`vendor_id`),
  ADD KEY `assets_staff_id_foreign` (`staff_id`),
  ADD KEY `assets_brand_id_foreign` (`brand_id`),
  ADD KEY `assets_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `issued_assets`
--
ALTER TABLE `issued_assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issued_assets_staff_id_foreign` (`staff_id`),
  ADD KEY `issued_assets_assets_id_foreign` (`assets_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffs_depart_id_foreign` (`depart_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issued_assets`
--
ALTER TABLE `issued_assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assets_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assets_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assets_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `issued_assets`
--
ALTER TABLE `issued_assets`
  ADD CONSTRAINT `issued_assets_assets_id_foreign` FOREIGN KEY (`assets_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `issued_assets_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `staffs_depart_id_foreign` FOREIGN KEY (`depart_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
