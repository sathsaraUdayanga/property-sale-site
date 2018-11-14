-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2018 at 03:57 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name_si` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name_ta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_latitide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_province_id` int(10) UNSIGNED NOT NULL,
  `city_district_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  KEY `cities_city_province_id_foreign` (`city_province_id`),
  KEY `cities_city_district_id_foreign` (`city_district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name_en`, `city_name_si`, `city_name_ta`, `city_postcode`, `city_latitide`, `city_longitude`, `city_province_id`, `city_district_id`, `created_at`, `updated_at`) VALUES
(1, 'Akkaraipattu', 'අක්කරපත්තුව', '', '', '', '', 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `district_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `district_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name_si` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name_ta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_province_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`district_id`),
  KEY `districts_district_province_id_foreign` (`district_province_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name_en`, `district_name_si`, `district_name_ta`, `district_province_id`, `created_at`, `updated_at`) VALUES
(1, 'Ampara', 'අම්පාර', 'அம்பாறை', 6, NULL, NULL),
(2, 'Anuradhapura', 'අනුරාධපුරය', 'அனுராதபுரம்', 8, NULL, NULL),
(3, 'Badulla', 'බදුල්ල', 'பதுளை', 7, NULL, NULL),
(4, 'Batticaloa', 'මඩකලපුව', 'மட்டக்களப்பு', 6, NULL, NULL),
(5, 'Colombo', 'කොළඹ', 'கொழும்பு', 1, NULL, NULL),
(6, 'Galle', 'ගාල්ල', 'காலி', 3, NULL, NULL),
(7, 'Gampaha', 'ගම්පහ', 'கம்பஹா', 1, NULL, NULL),
(8, 'Hambantota', 'හම්බන්තොට', 'அம்பாந்தோட்டை', 3, NULL, NULL),
(9, 'Jaffna', 'යාපනය', 'யாழ்ப்பாணம்', 9, NULL, NULL),
(10, 'Kalutara', 'කළුතර', 'களுத்துறை', 1, NULL, NULL),
(11, 'Kandy', 'මහනුවර', 'கண்டி', 2, NULL, NULL),
(12, 'Kegalle', 'කෑගල්ල', 'கேகாலை', 5, NULL, NULL),
(13, 'Kilinochchi', 'කිලිනොච්චිය', 'கிளிநொச்சி', 9, NULL, NULL),
(14, 'Kurunegala', 'කුරුණෑගල', 'குருணாகல்', 4, NULL, NULL),
(15, 'Mannar', 'මන්නාරම', 'மன்னார்', 9, NULL, NULL),
(16, 'Matale', 'මාතලේ', 'மாத்தளை', 2, NULL, NULL),
(17, 'Matara', 'මාතර', 'மாத்தறை', 3, NULL, NULL),
(18, 'Monaragala', 'මොණරාගල', 'மொணராகலை', 7, NULL, NULL),
(19, 'Mullaitivu', 'මුලතිව්', 'முல்லைத்தீவு', 9, NULL, NULL),
(20, 'Nuwara Eliya', 'නුවර එළිය', 'நுவரேலியா', 2, NULL, NULL),
(21, 'Polonnaruwa', 'පොළොන්නරුව', 'பொலன்னறுவை', 8, NULL, NULL),
(22, 'Puttalam', 'පුත්තලම', 'புத்தளம்', 4, NULL, NULL),
(23, 'Ratnapura', 'රත්නපුර', 'இரத்தினபுரி', 5, NULL, NULL),
(24, 'Trincomalee', 'ත්රිකුණාමලය', 'திருகோணமலை', 6, NULL, NULL),
(25, 'Vavuniya', 'වව්නියාව', 'வவுனியா', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

DROP TABLE IF EXISTS `lands`;
CREATE TABLE IF NOT EXISTS `lands` (
  `land_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `land_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_latitide` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_province_id` int(10) UNSIGNED NOT NULL,
  `land_district_id` int(10) UNSIGNED NOT NULL,
  `land_city_id` int(10) UNSIGNED NOT NULL,
  `land_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_area` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`land_id`),
  KEY `lands_land_province_id_foreign` (`land_province_id`),
  KEY `lands_land_district_id_foreign` (`land_district_id`),
  KEY `lands_land_city_id_foreign` (`land_city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land_parts`
--

DROP TABLE IF EXISTS `land_parts`;
CREATE TABLE IF NOT EXISTS `land_parts` (
  `land_parts_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `land_parts_area` double(8,2) NOT NULL,
  `land_parts_price` double(8,2) NOT NULL,
  `land_parts_status` tinyint(1) NOT NULL DEFAULT '1',
  `land_parts_land_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`land_parts_id`),
  KEY `land_parts_land_parts_land_id_foreign` (`land_parts_land_id`)
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_13_063636_create_provinces_table', 1),
(4, '2018_11_13_063659_create_districts_table', 1),
(5, '2018_11_13_063720_create_cities_table', 1),
(6, '2018_11_13_075439_create_lands_table', 1),
(7, '2018_11_13_076711_create_land_parts_table', 1);

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
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `province_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_name_si` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_name_ta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name_en`, `province_name_si`, `province_name_ta`, `created_at`, `updated_at`) VALUES
(1, 'Western', 'බස්නාහිර', 'மேல்', NULL, NULL),
(2, 'Central', 'මධ්යම', 'மத்திய', NULL, NULL),
(3, 'Southern', 'දකුණු', 'தென்', NULL, NULL),
(4, 'North Western', 'වයඹ', 'வட மேல்', NULL, NULL),
(5, 'Sabaragamuwa', 'සබරගමුව', 'சபரகமுவ', NULL, NULL),
(6, 'Eastern', 'නැගෙනහිර', 'கிழக்கு', NULL, NULL),
(7, 'Uva', 'ඌව', 'ஊவா', NULL, NULL),
(8, 'North Central', 'උතුරු මැද', 'வட மத்திய', NULL, NULL),
(9, 'Northern', 'උතුරු', 'வட', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
