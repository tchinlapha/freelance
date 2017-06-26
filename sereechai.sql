-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2017 at 04:29 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sereechai`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"text-align: center;\">What is Lorem Ipsum?</h2>\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p>&nbsp;</p>\n<h2 style=\"text-align: center;\">Why do we use it?</h2>\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\n<p>&nbsp;</p>\n<h2 style=\"text-align: center;\">Where does it come from?</h2>\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '2017-06-18 08:05:23', '2017-06-25 16:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(2, '1.jpg', '/assets/images/certificate/1.jpg', '2017-06-25 11:38:21', '2017-06-25 11:38:21'),
(3, '2.jpg', '/assets/images/certificate/2.jpg', '2017-06-25 11:38:28', '2017-06-25 11:38:28'),
(4, '3.jpg', '/assets/images/certificate/3.jpg', '2017-06-25 11:38:34', '2017-06-25 11:38:34'),
(5, '4.jpg', '/assets/images/certificate/4.jpg', '2017-06-25 11:38:41', '2017-06-25 11:38:41'),
(6, '5.jpg', '/assets/images/certificate/5.jpg', '2017-06-25 11:39:58', '2017-06-25 11:39:58'),
(7, '6.jpg', '/assets/images/certificate/6.jpg', '2017-06-25 11:40:04', '2017-06-25 11:40:04'),
(8, '7.jpg', '/assets/images/certificate/7.jpg', '2017-06-25 11:40:08', '2017-06-25 11:40:08'),
(9, '8.jpg', '/assets/images/certificate/8.jpg', '2017-06-25 11:40:14', '2017-06-25 11:40:14'),
(10, '9.jpg', '/assets/images/certificate/9.jpg', '2017-06-25 11:40:19', '2017-06-25 11:40:19'),
(11, '10.jpg', '/assets/images/certificate/10.jpg', '2017-06-25 11:40:25', '2017-06-25 11:40:25'),
(12, '11.jpg', '/assets/images/certificate/11.jpg', '2017-06-25 11:40:31', '2017-06-25 11:40:31'),
(13, '12.jpg', '/assets/images/certificate/12.jpg', '2017-06-25 11:40:36', '2017-06-25 11:40:36'),
(14, '13.jpg', '/assets/images/certificate/13.jpg', '2017-06-25 11:40:43', '2017-06-25 11:40:43'),
(15, '14.jpg', '/assets/images/certificate/14.jpg', '2017-06-25 11:40:48', '2017-06-25 11:40:48'),
(16, '15.jpg', '/assets/images/certificate/15.jpg', '2017-06-25 11:40:55', '2017-06-25 11:40:55'),
(17, '16.jpg', '/assets/images/certificate/16.jpg', '2017-06-25 11:41:02', '2017-06-25 11:41:02'),
(18, '17.jpg', '/assets/images/certificate/17.jpg', '2017-06-25 11:41:08', '2017-06-25 11:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci,
  `map` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `address`, `email`, `phone`, `work_time`, `facebook`, `map`, `created_at`, `updated_at`) VALUES
(1, 'เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด 1647 อ่อนนุช แขวง สวนหลวง เขต สวนหลวง กรุงเทพมหานคร 10250', 'sereechai_int@hotmail.com', '02-742-0781', 'จันทร์ - อาทิตย์ เวลา 09.00 - 17.00 น.', 'https://www.facebook.com/เสรีชัย-อินทีเรียร์-ดีไซน์-จำกัด-358191721245279', 'https://her.is/2r7b2FV', '2017-06-20 15:16:05', '2017-06-25 13:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `is_read` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'test1 ', 'test1@mail.com', '09877645452', 'hello world!', 0, '2017-06-24 12:47:56', '2017-06-24 12:47:56'),
(2, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'messageee', 0, '2017-06-25 14:24:23', '2017-06-25 14:24:23'),
(3, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'messageee', 0, '2017-06-25 14:24:34', '2017-06-25 14:24:34'),
(4, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'message', 0, '2017-06-25 14:29:37', '2017-06-25 14:29:37'),
(5, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'messageeeeeeeeeeeee', 0, '2017-06-25 14:31:20', '2017-06-25 14:31:20'),
(6, NULL, NULL, NULL, NULL, 0, '2017-06-25 15:46:02', '2017-06-25 15:46:02'),
(7, NULL, NULL, NULL, NULL, 0, '2017-06-25 15:46:18', '2017-06-25 15:46:18'),
(8, NULL, NULL, NULL, NULL, 0, '2017-06-25 15:47:46', '2017-06-25 15:47:46'),
(9, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', NULL, 0, '2017-06-25 15:54:54', '2017-06-25 15:54:54'),
(10, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'aaaaaaa', 0, '2017-06-25 15:56:32', '2017-06-25 15:56:32'),
(11, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'asdasd', 0, '2017-06-25 15:57:43', '2017-06-25 15:57:43'),
(12, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'dsadasd', 0, '2017-06-25 15:59:11', '2017-06-25 15:59:11'),
(13, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'asfasf', 0, '2017-06-25 16:00:07', '2017-06-25 16:00:07'),
(14, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'asfasf', 0, '2017-06-25 16:00:48', '2017-06-25 16:00:48'),
(15, 'Thanin Chinlapha', 'tchinlapha@gmail.com', '997084982', 'asf', 0, '2017-06-25 16:01:06', '2017-06-25 16:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_album_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_album_id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'image.png', '/assets/images/portfolio/20170624184055/image.png', '2017-06-24 11:40:55', '2017-06-24 11:40:55'),
(2, 1, 'login_cover.jpg', '/assets/images/portfolio/20170624184055/login_cover.jpg', '2017-06-24 11:40:55', '2017-06-24 11:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `image_album`
--

CREATE TABLE `image_album` (
  `id` int(11) NOT NULL,
  `folder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contractor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_album`
--

INSERT INTO `image_album` (`id`, `folder`, `name`, `contractor`, `description`, `value`, `cover`, `created_at`, `updated_at`) VALUES
(1, '20170624184055', 'AIA eiei', 'Thanin Chinlapha', 'make this website ...', '15000 บาท', '/assets/images/portfolio/20170624184055/image.png', '2017-06-24 11:40:55', '2017-06-24 11:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `text`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 'test 1', '1.jpg', '/assets/images/slider/1.jpg', '2017-06-26 13:26:41', '2017-06-26 13:26:41'),
(2, 'test 2', '1_1.jpg', '/assets/images/slider/1_1.jpg', '2017-06-26 13:26:41', '2017-06-26 13:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@mail.com', '$2y$10$IB1ybc/1PuPnL1IwXqgCFOUwdj4HT6BDH/w1yOo8lMlJgxks3sRpa', 'z8EjRAtrj75PTKPcNrdi6RCBelrAIz1K4iq7EbNvOcRyqN9bChE4PIqo9QJC', '2017-06-15 06:18:23', '2017-06-15 06:18:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_album`
--
ALTER TABLE `image_album`
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
-- Indexes for table `slide`
--
ALTER TABLE `slide`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `image_album`
--
ALTER TABLE `image_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
