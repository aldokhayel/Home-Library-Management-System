-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2016 at 03:16 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `library_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `borrow` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_author`, `book_owner`, `library_name`, `borrow`, `created_at`, `updated_at`) VALUES
(5, 'Nasser Book 1', 'Nasser Book 1', 'Nasser', 'Nasser Libr', 0, '2016-05-03 06:31:49', '2016-05-03 06:31:49'),
(6, 'Nasser Book 2', 'Nasser Book 2', 'Nasser', 'Nasser Libr', 0, '2016-05-03 06:31:55', '2016-05-03 06:31:55'),
(7, 'Nasser Book 3', 'Nasser Book 3', 'Nasser', 'Nasser Libr', 0, '2016-05-03 06:32:02', '2016-05-03 06:32:02'),
(8, 'Abdulrahman Book1', 'Abdulrahman Book1', 'Abdulrahman', 'Abdulrahman', 0, '2016-05-03 08:04:10', '2016-05-03 08:04:10'),
(9, 'Abdulrahman Book2', 'Abdulrahman Book2', 'Abdulrahman', 'Abdulrahman', 0, '2016-05-03 08:04:34', '2016-05-03 08:04:34'),
(10, 'Abdulrahman Book3', 'Abdulrahman Book3', 'Abdulrahman', 'Abdulrahman', 0, '2016-05-03 08:04:41', '2016-05-03 08:04:41'),
(11, 'Ali Book1', 'Ali Book1', 'Ali', 'Ali Library', 0, '2016-05-03 08:06:01', '2016-05-03 08:06:01'),
(12, 'Ali Book2', 'Ali Book2', 'Ali', 'Ali Library', 0, '2016-05-03 08:06:08', '2016-05-03 08:06:08'),
(13, 'Ali Book3', 'Ali Book3', 'Ali', 'Ali Library', 0, '2016-05-03 08:06:15', '2016-05-03 08:06:15'),
(14, 'Book3', 'Book3', 'Abdulrahman', 'Abdulrahman', 0, '2016-05-04 06:58:44', '2016-05-04 06:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE IF NOT EXISTS `libraries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `request` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `name`, `owner_username`, `request`, `created_at`, `updated_at`) VALUES
(9, 'Nasser Library 1', 'Nasser', 0, '2016-05-03 06:31:23', '2016-05-03 06:31:23'),
(10, 'Nasser Library 2', 'Nasser', 0, '2016-05-03 06:31:28', '2016-05-03 06:31:28'),
(11, 'Nasser Library 3', 'Nasser', 0, '2016-05-03 06:31:32', '2016-05-03 06:31:32'),
(12, 'Abdulrahman Library1', 'Abdulrahman', 0, '2016-05-03 08:03:25', '2016-05-04 06:58:27'),
(13, 'Abdulrahman Library2', 'Abdulrahman', 0, '2016-05-03 08:03:30', '2016-05-03 08:03:30'),
(14, 'Abdulrahman Library3', 'Abdulrahman', 0, '2016-05-03 08:04:23', '2016-05-03 08:04:23'),
(15, 'Ali Library1', 'Ali', 0, '2016-05-03 08:05:39', '2016-05-03 08:05:39'),
(16, 'Ali Library2', 'Ali', 0, '2016-05-03 08:05:43', '2016-05-03 08:05:43'),
(17, 'Ali Library3', 'Ali', 0, '2016-05-03 08:05:48', '2016-05-03 08:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE IF NOT EXISTS `memberships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `library_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `friend` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_18_115204_create_books_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_18_115204_create_books_table', 1),
('2016_03_30_064906_create_library_table', 2),
('2016_04_05_213438_create_books_table', 2),
('2016_04_30_134419_create_memberships_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sa.alsahli@gmail.com', 'dacc917a950191f5dac9cbd70f2b65e1ebb9b0e1d500b3e1ff379669090c9bc3', '2016-03-22 11:02:37'),
('sa.alsahli@gmail.com', 'dacc917a950191f5dac9cbd70f2b65e1ebb9b0e1d500b3e1ff379669090c9bc3', '2016-03-22 11:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `email` (`email`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `username`, `date`, `gender`, `country`, `city`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'saad', 'asd@dsa.com', '$2y$10$QHukfZeqwOiMnXGyFukOf.DcAvBCx.1dq5h5VzxdYPlDwnmQtVYRy', 'alsahli', '0000-00-00', 'MALE', 'Azerbaijan', 'asd', '0556161288', 'hvUda35TUoTnq8VZe9krXvrdyTEmuhGGnGI5XfqeTc2i5yBAYtH7bmkUPkdQ', '2016-03-26 18:04:24', '2016-04-05 22:21:25'),
(8, 'Abdulrahman', 'a@a.com', '$2y$10$GpI6oCpSCzu9Fn3bIFY4r.J/AzsuXl1kAmo1RfGW2WmHm0ROnyjb2', 'Abdulrahman', '0000-00-00', 'MALE', 'Saudi Arabia', 'rear', '89583258925', '0DrTfiaBWIxVoV0pyhdmzsYuE6PNeSmg54wZnOuNjvgDdy1Ps4eQnFnSQt69', '2016-03-29 18:22:37', '2016-05-04 07:19:46'),
(9, 'saad', 'asdasd@asd.com', '$2y$10$c46Fvxubnyuwf5vkpOxT6OU9SarFs.Lkt2PX71/hVxxS7WtjrtC52', 'asddsa', '2016-03-18', 'MALE', 'Azerbaijan', 'asdsada', '1232132121', 'Ojk29p5HTRueDxXj2rC6WXGpMFOxIQJPenyclZPl1grwYXl9XDxsw4vjYoEU', '2016-03-30 06:54:01', '2016-03-30 07:07:11'),
(10, 'Saad', 'qwe@gmail.com', '$2y$10$yzJ4iNV8yY9z6EPEfF5zW.0DiYKBIMLIBXDIT.haNl.bGfNucEK6e', 'qwe', '2016-03-30', 'MALE', 'Armenia', 'asddsa', '0556161288', 'kVJTTYJHgda7QNNFSHHjeYO929UMsCSsv47WOrKefOGn6WcRb2cbwa8ahOnl', '2016-03-30 07:26:11', '2016-03-30 07:26:33'),
(11, 'hassan', 'h@h.com', '$2y$10$EkLbL9b3tu7014XH4aVxJOhvm2DP2r8rLFRColnkbzHC/.8QdCbLS', 'h.alshehri', '1993-03-30', 'MALE', 'Saudi Arabia', 'riyadh', '0555555555', 'kgRZKIMWvjv40mtd0SR5a59tZnrwzncl9hbdHLTFM1DXNOm6KH0XAhRosKGO', '2016-03-30 07:27:21', '2016-03-30 07:27:50'),
(12, 'Ali', 'b@b.com', '$2y$10$1xsIouoPZKKQXNtxxJ7/HeIIH.DZB8trnZiErJ6ql07Ah5TmLRlui', 'Ali', '0000-00-00', 'MALE', 'Saudi Arabia', 'fdsa', '5823589258', 'RWEsVSnFZ34F0dMFxbiY42e87hKuRkLI6xXGHHqv3BTHV8IkqkIUE0HC4Ig4', '2016-04-15 11:16:24', '2016-05-03 22:56:07'),
(13, 'Nasser', 'c@c.com', '$2y$10$3I5Wazzl.pfkp.ENz9VoTe2yzlXUDjmUo/kNMpaVwTs6OgJun4AlG', 'Nasser', '0000-00-00', 'MALE', 'Afganistan', 'vdgdfgdgsddsg', '554355523523', '79N9KBmtRuDpWLjiwll67SYFnMbCLqCq9fdDnLZUEHh8DKv8X0fIaR0OXwez', '2016-05-03 04:51:58', '2016-05-04 07:20:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
