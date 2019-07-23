-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 08:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seemyshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Romantic', 'In this category,we show all romantic movie', 1, '2018-11-01 02:20:09', '2018-12-10 09:11:43'),
(2, 'Horror', 'In this category,we show all horror movie', 1, '2018-11-01 02:21:20', '2018-12-10 09:11:30'),
(3, 'Action', 'See all Action Movie', 1, '2018-11-01 02:22:13', '2018-12-10 09:12:06'),
(6, 'Comedy', 'Here, you found all comedy', 1, '2018-12-10 09:12:39', '2018-12-10 09:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` int(255) NOT NULL,
  `match_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadium_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` int(11) NOT NULL,
  `ticket_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `match_name`, `category_name`, `match_status`, `stadium_name`, `team`, `date`, `time`, `ticket`, `ticket_status`, `sponsor`, `description`, `match_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'BAN VS IND', 1, 'OID 1st Match', 'Mirpur National Stadium', 'BAN VS IND', '2019-03-07', '03:00', 120, 'Now Showing,UpComing,Latest Showing', 'GP', '<p>sssssssss ggggggggggggg</p>', 'images/match/Bangladesh-VS-West-Indies-3rd-ODI-Live.jpg', 1, '2019-03-11 11:06:32', '2019-03-11 11:06:32');

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
(3, '2017_10_10_061145_create_categories_table', 1),
(4, '2018_11_01_103926_movie_hall', 2),
(5, '2018_11_01_104519_movie_hall', 3),
(6, '2018_11_01_112244_create_moviehalls_table', 4),
(7, '2018_12_09_055353_create_movies_table', 5),
(8, '2018_12_09_065127_create_movies_table', 6),
(9, '2018_12_09_140120_create_movies_table', 7),
(10, '2018_12_09_151937_create_news_table', 8),
(11, '2018_12_09_170814_create_offers_table', 9),
(12, '2018_12_10_143141_create_showings_table', 10),
(13, '2019_02_17_131424_create_sports_table', 11),
(14, '2019_02_17_172505_create_stadia_table', 12),
(15, '2019_02_17_175532_create_stadia_table', 13),
(16, '2019_03_11_154911_create_matches_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `moviehalls`
--

CREATE TABLE `moviehalls` (
  `id` int(10) UNSIGNED NOT NULL,
  `hall_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_phone` int(11) NOT NULL,
  `hall_website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moviehalls`
--

INSERT INTO `moviehalls` (`id`, `hall_name`, `hall_address`, `hall_phone`, `hall_website`, `hall_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Ovishar(Framget)', 'Framget,Shere-bangla-nagar,Dhaka-1204', 334980, 'www.ovishar.org.com', 'images/movie-hall/CR2vaQXUcAA9rvs.jpg', 1, '2018-11-01 05:26:17', '2018-11-01 05:26:17'),
(2, 'Bolaka', 'dghht', 4444444, 'ghjjj', 'images/movie-hall/928026c6e8b53166937c4b815290eb5c--paper-crafts-paper-art.jpg', 1, '2018-11-28 10:04:31', '2018-11-28 10:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `show_status` int(4) NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_hall_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `category_id`, `show_status`, `country_name`, `year`, `duration`, `director`, `actor`, `movie_image`, `trailer_link`, `movie_hall_id`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'dohon', 1, 1, 'Bangladesh', '2018', '150', 'A.K', 'Siam, Puja, Momo', 'images/movie/Why-.jpg', 'https://youtu.be/TmtoE-yZigs', '1,2', '1', '2018-12-10 10:07:19', '2018-12-10 10:07:19'),
(3, 'Hasina', 1, 2, 'Bangladesh', '2018', '150', 'A.K', 'Siam, Puja, Momo', 'images/movie/vgggg.PNG', 'https://youtu.be/TmtoE-yZigs', '1,2', '1', '2018-12-10 11:41:16', '2018-12-10 11:41:16'),
(4, 'ফাগুন', 2, 2, 'Bangladesh', '2018', '150', 'A.K', 'Siam, Puja, Momo', 'images/movie/48412980_1884992171620460_8299107238102958080_n.jpg', 'https://youtu.be/TmtoE-yZigs', 'Ovishar(Framget),Bolaka', '1', '2019-02-12 09:12:34', '2019-02-12 09:12:34'),
(5, 'Vilian', 2, 1, 'Bangladesh', '2018', '150', 'A.K', 'Siam, Puja, Momo', 'images/movie/Copa_America_2019_Brasil.png', 'https://youtu.be/TmtoE-yZigs', 'Ovishar(Framget),Bolaka', '1', '2019-02-15 07:20:29', '2019-02-15 07:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_image`, `news_description`, `author_name`, `author_image`, `author_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'A movie realize about Prime Minister Sheikh Hasina', 'images/news/news-image/2134_menu_img.png', '<p>A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;<br data-mce-bogus=\"1\"></p>', 'Khorshed Alam', 'images/news/author-image/1111.PNG', '<p><strong><em>A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;A movie realize about Prime Minister Sheikh Hasina&nbsp;&nbsp;</em></strong><br data-mce-bogus=\"1\"></p>', 1, '2018-12-09 10:44:43', '2018-12-09 10:44:43'),
(2, 'A movie realize about BlockStar Shakib Khan', 'images/news/news-image/aass.png', '<p>dgfh h h&nbsp; gd g dsssssssss ghhhhhstg r t s t y rsy y</p>', 'ABM Khorshed Alam', 'images/news/author-image/48412980_1884992171620460_8299107238102958080_n.jpg', '<p>He is new member of&nbsp; movie research of Bangladesh</p>', 1, '2019-03-01 07:11:05', '2019-03-01 07:11:05'),
(3, 'A movie realize about 71', 'images/news/news-image/neymar.brasile.pallone.mano.2018.19.690x400.jpg', '<p>gggggggggg ghfffffd ddtgrtr&nbsp;</p>', 'ABM Rifat', 'images/news/author-image/48412980_1884992171620460_8299107238102958080_n.jpg', '<p>dssssssssss d gd dgggggggggesr tet&nbsp;</p>', 1, '2019-03-01 07:13:23', '2019-03-01 07:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `offer_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showings`
--

CREATE TABLE `showings` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showings`
--

INSERT INTO `showings` (`id`, `status_name`, `status_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Now Showing', 'we show all running movie', 1, '2018-12-10 09:06:53', '2018-12-10 09:06:53'),
(2, 'UpComing', 'All upcoming movie in here', 1, '2018-12-10 09:07:48', '2018-12-10 09:07:48'),
(3, 'Latest Showing', 'you can see all', 1, '2018-12-10 09:09:47', '2018-12-10 09:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `sports_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sports_name`, `sports_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Cricket', 'nice one..', 1, '2019-02-17 07:19:28', '2019-02-17 07:19:28'),
(2, 'Football', 'nice one..', 1, '2019-02-17 07:19:47', '2019-02-17 07:19:47'),
(3, 'Live Concert', 'nice one..', 1, '2019-02-17 07:20:01', '2019-02-17 07:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `stadia`
--

CREATE TABLE `stadia` (
  `id` int(10) UNSIGNED NOT NULL,
  `stadium_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Stadium_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadium_phone` int(11) NOT NULL,
  `stadium_website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadium_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stadia`
--

INSERT INTO `stadia` (`id`, `stadium_name`, `Stadium_address`, `stadium_phone`, `stadium_website`, `stadium_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Mirpur National Stadium', 'Mirpur-10', 1778542158, 'www.mns.com', 'images/stadium/229101.jpg', 1, '2019-02-17 12:01:39', '2019-02-17 12:01:39'),
(2, 'Banggobonbhu National Stadium', 'Gulisthan', 1778541265, 'www.BNS.con', 'images/stadium/safe_image.jpg', 1, '2019-02-26 06:54:01', '2019-02-26 06:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$9pIm93oqWj8hqi4MyMvqouTfJEOkZRVTfr4qHXaRXS8vR48QRKYwG', 'lKnd9fnBnBdxFGIPWcMrKbqXTFmT07E65dTYtUrGoHEPfWTYc1bTew9T3umQ', '2018-11-01 02:19:18', '2018-11-01 02:19:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moviehalls`
--
ALTER TABLE `moviehalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `showings`
--
ALTER TABLE `showings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stadia`
--
ALTER TABLE `stadia`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `moviehalls`
--
ALTER TABLE `moviehalls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showings`
--
ALTER TABLE `showings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stadia`
--
ALTER TABLE `stadia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
