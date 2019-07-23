-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 07:52 PM
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
-- Table structure for table `bkashes`
--

CREATE TABLE `bkashes` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `phone_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bkashes`
--

INSERT INTO `bkashes` (`id`, `order_id`, `ticket_id`, `phone_no`, `t_id`, `created_at`, `updated_at`) VALUES
(16, 142, 95, '01778542147', '11111177777', '2019-04-02 09:56:42', '2019-04-02 09:56:42');

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
(1, 'Romantic', 'In this category,we show all romantic movie', 1, '2018-11-01 02:20:09', '2019-03-25 08:23:40'),
(2, 'Horror', 'In this category,we show all horror movie', 1, '2018-11-01 02:21:20', '2019-03-25 06:12:41'),
(3, 'Action', 'See all Action Movie', 1, '2018-11-01 02:22:13', '2018-12-10 09:12:06'),
(6, 'Comedy', 'Here, you found all comedy', 1, '2018-12-10 09:12:39', '2018-12-10 09:12:39'),
(7, 'Horror', 'hooororo', 1, '2019-03-19 12:40:11', '2019-03-25 08:13:52'),
(8, 'Sport', 'Sport And Concert', 1, '2019-03-24 05:20:33', '2019-03-25 08:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_name`, `user_email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rifat', 'customer@gmail.com', 'nicee', 'pending', '2019-04-04 02:33:56', '2019-04-04 02:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_email_verified` char(6) COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `verification_code` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `name`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Registration And Sign In.', 'Click on the \'Register\' link on the homepage of seemyshow. Enter your full name, Email id., contact number, password and click on \'Submit\' and you are registered with us. \r\nFor login , enter your email address in the login box on the top right hand corner, and the enter .', 1, '2019-03-24 11:57:34', '2019-03-25 10:10:17'),
(2, 'Ticking Booking', 'Choose you show and click on book a ticket for this movie. \r\nSelecet your hall/stadium, date, time and seat.', 1, '2019-03-24 11:58:38', '2019-03-25 10:00:53'),
(3, 'Payment', 'At first log in our site,fill the shipping info and select the payment options.', 1, '2019-03-24 11:58:57', '2019-03-25 10:00:55');

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
(16, '2019_03_11_154911_create_matches_table', 14),
(17, '2019_03_16_152741_create_tickets_table', 15),
(18, '2019_03_19_120135_create_customers_table', 16),
(19, '2019_03_19_143939_create_shippings_table', 17),
(20, '2019_03_22_120329_create_ticket_shifts_table', 18),
(21, '2019_03_22_130141_create_ticket_statuses_table', 19),
(22, '2019_03_23_053904_create_carts_table', 20),
(23, '2019_03_23_055204_create_show_carts_table', 21),
(24, '2019_03_23_141026_create_orders_table', 22),
(25, '2019_03_23_141059_create_payments_table', 22),
(26, '2019_03_23_141127_create_order_details_table', 22),
(27, '2019_03_24_171824_create_faqs_table', 23),
(28, '2019_03_25_075758_create_contacts_table', 24),
(29, '2019_03_26_161731_create_bkashes_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `moviehalls`
--

CREATE TABLE `moviehalls` (
  `id` int(10) UNSIGNED NOT NULL,
  `hall_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moviehalls`
--

INSERT INTO `moviehalls` (`id`, `hall_name`, `place_category`, `hall_address`, `hall_phone`, `hall_website`, `hall_image`, `hall_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Rajmoni', '4', '67/1 (1st Floor) Kakrail,Dhaka-1000', '9976', 'www.seemyshow.live', 'images/movie-hall/IMG_20170414_130954.jpg', 'দেশের চলচ্চিত্র শিল্পের উত্থান-পতনের সাক্ষী হয়ে যে কয়টি সিনেমা হল এখনো স্বমহিমায় তাদের কার্যক্রম অব্যাহত রেখে চলেছে সে হলগুলোর মধ্যে ‘রাজমনী সিনেমা হল’ একটি। এটি রাজমনী গ্রুপ লিমিটেড এর একটি অঙ্গ প্রতিষ্ঠান। সাথের অপর হলটি রাজিয়া সিনেমা হল।', 1, '2019-03-19 11:34:27', '2019-03-25 14:55:42'),
(4, 'Shyamoli Cinema', '4', 'Shyamoli Square, Mirpur Rd, Dhaka 1207', '29117744', 'http://shyamolicinema.com', 'images/movie-hall/2016-04-29.jpg', 'A \"talkie\" or sound film is a motion picture with synchronized sound, or sound technologically coupled to image, as opposed to a silent film. The first known public exhibition of projected sound films took place in Paris in 1900, but decades passed before sound motion pictures were made commercially practical. Reliable synchronization was difficult to achieve with the early sound-on-disc systems, and amplification and recording quality were also inadequate. Innovations in sound-on-film led to the first commercial screening of short motion pictures using the technology, which took place in 1923. The primary steps in the commercialization of sound cinema were taken in the mid- to late 1920s. At first, the sound films incorporating synchronized dialogue—known as \"talking pictures\",', 1, '2019-03-19 11:42:40', '2019-03-19 11:42:40'),
(5, 'Balaka', '4', 'New Market Inside Rd, Dhaka 1205', '28622103', 'http://balakacinema.com', 'images/movie-hall/balaka-cinema-hall-dhaka-bangladesh.JPG', 'A \"talkie\" or sound film is a motion picture with synchronized sound, or sound technologically coupled to image, as opposed to a silent film. The first known public exhibition of projected sound films took place in Paris in 1900, but decades passed before sound motion pictures were made commercially practical. Reliable synchronization was difficult to achieve with the early sound-on-disc systems, and amplification and recording quality were also inadequate. Innovations in sound-on-film led to the first commercial screening of short motion pictures using the technology, which took place in 1923. The primary steps in the commercialization of sound cinema were taken in the mid- to late 1920s. At first, the sound films incorporating synchronized dialogue—known as \"talking pictures\",', 1, '2019-03-19 11:44:38', '2019-03-19 11:44:38'),
(6, 'Blockbuster Cinemas', '4', '244, Pragati Avenue, Kuril, Dhaka', '88029824007', 'www.blockbusterbd.com', 'images/movie-hall/blockbuster-bd-blueprint-1-638.jpg', 'Blockbuster Cinemas want to redefine the movie viewing experience to the movie fraternity of Bangladesh and want your input to give you the Best Movie Experience in Bangladesh. Call us or send us an Email, and tell us what you think about Blockbuster and don\'t forget to visit our Facebook page and follow us on Twitter to stay updated about our new Releases and Exciting Contests.', 1, '2019-03-19 11:48:41', '2019-03-19 11:48:41'),
(7, 'Madhumita', '4', '158/160, Dhaka 1000', '029550463', 'www,seemyshow', 'images/movie-hall/maxresdefault.jpg', 'A \"talkie\" or sound film is a motion picture with synchronized sound, or sound technologically coupled to image, as opposed to a silent film. The first known public exhibition of projected sound films took place in Paris in 1900, but decades passed before sound motion pictures were made commercially practical. Reliable synchronization was difficult to achieve with the early sound-on-disc systems, and amplification and recording quality were also inadequate. Innovations in sound-on-film led to the first commercial screening of short motion pictures using the technology, which took place in 1923. The primary steps in the commercialization of sound cinema were taken in the mid- to late 1920s. At first, the sound films incorporating synchronized dialogue—known as \"talking pictures\",', 1, '2019-03-19 11:51:31', '2019-03-25 15:42:20'),
(8, 'Ananda', '4', 'Dhaka 1215', '01963258074', 'www.seemyshow.com', 'images/movie-hall/no_joy_in_ananda_1.jpg', 'A \"talkie\" or sound film is a motion picture with synchronized sound, or sound technologically coupled to image, as opposed to a silent film. The first known public exhibition of projected sound films took place in Paris in 1900, but decades passed before sound motion pictures were made commercially practical. Reliable synchronization was difficult to achieve with the early sound-on-disc systems, and amplification and recording quality were also inadequate. Innovations in sound-on-film led to the first commercial screening of short motion pictures using the technology, which took place in 1923. The primary steps in the commercialization of sound cinema were taken in the mid- to late 1920s. At first, the sound films incorporating synchronized dialogue—known as \"talking pictures\",', 1, '2019-03-19 11:53:47', '2019-03-25 15:42:42'),
(9, 'Jonaki', '4', 'Dhaka', '01768754891', 'www.com', 'images/movie-hall/jhonaki-cinema-hall.JPG', 'A \"talkie\" or sound film is a motion picture with synchronized sound, or sound technologically coupled to image, as opposed to a silent film. The first known public exhibition of projected sound films took place in Paris in 1900, but decades passed before sound motion pictures were made commercially practical. Reliable synchronization was difficult to achieve with the early sound-on-disc systems, and amplification and recording quality were also inadequate. Innovations in sound-on-film led to the first commercial screening of short motion pictures using the technology, which took place in 1923. The primary steps in the commercialization of sound cinema were taken in the mid- to late 1920s. At first, the sound films incorporating synchronized dialogue—known as \"talking pictures\",', 1, '2019-03-19 11:57:11', '2019-03-19 11:57:11'),
(10, 'Mrigaya', '4', 'Mirpur-2, Dhaka 1216', '34434555', 'www.com', 'images/movie-hall/rclick-wiki-wikicommons-768x512.jpg', 'A \"talkie\" or sound film is a motion picture with synchronized sound, or sound technologically coupled to image, as opposed to a silent film. The first known public exhibition of projected sound films took place in Paris in 1900, but decades passed before sound motion pictures were made commercially practical. Reliable synchronization was difficult to achieve with the early sound-on-disc systems, and amplification and recording quality were also inadequate. Innovations in sound-on-film led to the first commercial screening of short motion pictures using the technology, which took place in 1923. The primary steps in the commercialization of sound cinema were taken in the mid- to late 1920s. At first, the sound films incorporating synchronized dialogue—known as \"talking pictures\",', 1, '2019-03-19 11:58:54', '2019-03-19 11:58:54'),
(11, 'Star cineplex', '4', 'Bashundhara City 13/3 Ka', '01755665544,9138260, 9134098 9141332', 'http://cineplexbd.com/cineplexbd', 'images/movie-hall/cineplex-180526142637.jpg', 'The First Multiplex Cinema Theatre in Bangladesh\r\nSTAR CINEPLEX : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with STAR Cineplex brand in Bangladesh.\r\n\r\nThe First Multiplex Cinema Theatre in Bangladesh STAR CINEPLEX : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with STAR Cineplex brand in Bangladesh. With lucid vision for the entertainment development in the country, the local and foreign promoters of Show Motion Ltd. started the first international quality state-of-the-art multiplex cinema theatre on 8th October 2004 in Bangladesh at Bashundhara City Mall at Panthapath, Dhaka.\r\n\r\nIn January 2019, STAR Cineplex opened another branch in Shimanto Shambhar. The new branch has 3 fully digital cinema screens with state-of-the-art 3D Projection Technology, Silver Screens, Dolby-Digital Sound and stadium seating. One of the 3 halls will have ATMOS sound system which will make the movie watching even more brilliant. Hall 1 has a seating capacity of 263, Hall 2 has that of 253 and 3 has the capacity of 221, totaling to more than 730 seats.\r\n\r\nSTAR Cineplex, Bashundhara City shooping mall branch has six fully digital cinema screens with state-of-the-art 3D Projection Technology, Silver Screens, Dolby-Digital Sound and stadium seating. With a total capacity of 1,600 seats the theater has large lobby with full concession stands serving pop-corns, soft drinks, ice-creams and many other items. In addition to scheduled shows, STAR Cineplex also caters to special corporate bookings, red-carpet premieres and private events. Visit www.cineplexbd.com for updated movie schedules and online ticket purchase\r\n\r\nOur Goal\r\nOur goal is to provide the most modern, comfortable, cinema viewing experience of Hollywood and quality Dhallywood releases for a locally adjusted price for our youth and family centered audiences in Dhaka . We aim to be the highest-value entertainment provider in Bangladesh with integrity & professionalism in every step.', 1, '2019-03-19 12:59:31', '2019-03-19 12:59:31'),
(12, 'Bangabandhu National Stadium', '5', 'Dhaka', '+5545555', 'www.bdcr.com', 'images/movie-hall/1200px-Bangabandhu_National_Stadium,_Dhaka,_Bangladesh.jpg', 'Bangabandhu National Stadium (Bengali: বঙ্গবন্ধু জাতীয় স্টেডিয়াম), also known as Dhaka Stadium, and formerly known as Dacca Stadium, is the national stadium and a multipurpose sports arena in Dhaka, Bangladesh. It is located in the Motijheel area in the heart of the city. The stadium has been renovated several times, most recently for the opening ceremony of the 2011 Cricket World Cup. It had a capacity close to 55,000 before the most recent renovation, but with a new capacity of 36,000 it is still the largest stadium in Bangladesh.\r\n\r\nIts current name was given to honour Sheikh Mujibur Rahman, the father of the nation, also known as \"Bangabandhu\" or \"Friend of Bengal\".\r\n\r\nThe Bangabandhu National Stadium is one of the main football venues in Dhaka, together with the 25,000 capacity Bir Shreshtha Mustafa Kamal Stadium.', 1, '2019-03-24 07:04:18', '2019-03-24 07:04:18'),
(14, 'Fatullah Osmani Stadium', '5', 'Fatullah, Narayanganj', '+5545555', 'www.f.com', 'images/movie-hall/2-16.jpg', 'Khan Shaheb Osman Ali Stadium (Bengali: খান সাহেব ওসমান আলী স্টেডিয়াম) is a cricket stadium located in Fatullah, Narayanganj in central Bangladesh. It has a capacity of around 25,000 people. The Field Dimension is 181m X 145 mThe ground was used in 2004 for matches of the ICC Under-19 Cricket World Cup.[1]\r\n\r\nThe stadium became a Test cricket venue on 9 April 2006, when it hosted a Test match between Australia and Bangladesh.\r\n\r\nThe stadium hosted the last World Cup warm up match between England and Pakistan on 18 February 2011. The stadium is the venue of the 2014 Asia Cup for the first round matches. In Asia Cup 2014 Bangladesh became the first Test nation to lose an ODI against Afghanistan, where Bangladesh lost to Afghanistan by 32 runs. It was also nominated as a practice match venue for 2014 ICC World Twenty20', 1, '2019-03-24 07:09:22', '2019-03-24 07:09:22'),
(15, 'Sher-e-Bangla Cricket Stadium', '5', 'Mirpur Rd, Dhaka 1216', '+5545555', 'http://www.tigercricket.com.bd/', 'images/movie-hall/2017-07-08.jpg', 'The Sher-e-Bangla National Cricket Stadium, also called Mirpur Stadium, is a cricket ground in Dhaka, the capital of Bangladesh. Located 10 kilometres away from the city centre in Mirpur, the ground holds approximately 25,000 people, and is named for the Bengali statesman A. K.', 1, '2019-03-24 07:10:24', '2019-03-24 07:10:24'),
(17, 'Bangladesh Army Stadium', '5', 'Dhaka-Mymenshingh Highway Dhaka, Bangladesh', '34434555', 'http://en.wikipedia.org/wiki', 'images/movie-hall/Bangladesh-Army-Stadium-6.jpg', 'Bangladesh Army Stadium is a multi-use stadium in Dhaka, Bangladesh. It is currently used mostly for football matches and hosts the home matches of Bangladesh Army. The stadium holds 15,000 people. Army Swimming Complex is located beside the army stadium.', 1, '2019-03-26 12:38:34', '2019-03-26 12:38:34');

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
  `movie_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `category_id`, `show_status`, `country_name`, `year`, `duration`, `director`, `actor`, `movie_image`, `trailer_link`, `movie_hall_id`, `movie_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(6, 'Dohon', 1, 1, 'Bangladesh', '2018', '30th November 2018', 'Raihan Rafi', 'Siam Ahmed, Pujja Cherry, Ripa Raj, Shimul Khan, Monira Mithu & Momo', 'images/movie/Dohon (2018) Bangla Full Movie HDTV x264 700MB.jpg', 'https://www.youtube.com/embed/Mmo1yK1ZxM8', 'Bolaka,Madhumita,Jonaki', 'The film stars Siam and Puja Cherry. Zakiya Bari Mamo is also seen alongside Siam and Puja.  Dohon is a movie that raises political and social issues.', '1', '2019-03-19 10:47:06', '2019-03-27 20:59:56'),
(7, 'Poramon 2', 1, 1, 'Bangladesh', '2018', '16 june 2018', 'Raihan Rafi', 'Siam Ahmed, Puja cherry, Bapparaj, Nader Chowdhury, Fuzlur Rahman Babu, Anuara begum, ', 'images/movie/MV5BZDBjNjliNDgtZWQ2My00ZjYzLThkY2ItMjk3ZTFhMTZlNDlhXkEyXkFqcGdeQXVyNDI3NjcxMDA@._V1_.jpg', 'https://www.youtube.com/embed/apfb56n0n4Y', 'Shyamoli Cinema,Balaka,Rajmoni,Ananda', 'PoraMon2 (Bengali: পোড়ামন ২) is a Bangladeshi Bengali romantic drama film written and directed by Raihan Rafi and produced by Abdul Aziz. It is distributed by Jaaz Multimedia. Starring Siam Ahmed and Puja Cherryand Bapparaj in the lead roles. It is the sequel of 2013 film PoraMon. The film was released in Eid Ul Fitr Of 2018. The film was commercially successful.', '1', '2019-03-19 12:38:47', '2019-03-19 12:38:47'),
(8, 'Devi', 7, 1, 'Bangladesh', '2018', '19 october, 2018', 'Anam Biswas', 'Jaya Ahsan, Chanchal Choudhury, Animesh Aich, Shabnam Faria, Iresh Zaker', 'images/movie/220px-Debii.jpg', 'https://www.youtube.com/embed/Z6Qpicai5tg', 'Rajmoni,Shyamoli Cinema,Jonaki,Madhumita', 'Debi : Misir Ali Prothombar or simply Debi (Bengali: দেবী English : \"Goddess\") is a 2018 Bangladeshi supernatural thriller film based on Humayun Ahmed\'s novel of the same name. It is directed by Anam Biswas, starring Chanchal Chowdhury as Misir Ali, Jaya Ahsan, and Sabnam Faria. The film is produced by Jaya Ahsan, as her first production from her production house \'C for Cinema\'.[2][3] The film was scheduled to be released on 19 October 2018.', '1', '2019-03-19 12:46:48', '2019-03-19 12:46:48'),
(9, 'Venom', 3, 1, 'America(US)', '2018', 'October 3, 2018', 'Ruben Fleischer', 'Tom Hardy, Michelle Williams, Riz Ahmed, Scott Haze, Reid Scott', 'images/movie/onesheet.jpg', 'https://www.youtube.com/embed/xLCn88bfW1o', 'Shyamoli Cinema,Blockbuster Cinemas,Madhumita,Jonaki', 'Venom is a 2018 American superhero film based on the Marvel Comics character of the same name, produced by Columbia Pictures in association with Marvel[5] and Tencent Pictures. Distributed by Sony Pictures Releasing, it is the first film in Sony\'s Marvel Universe, adjunct to the Marvel Cinematic Universe (MCU).[a] Directed by Ruben Fleischer from a screenplay by Scott Rosenberg, Jeff Pinkner, and Kelly Marcel, it stars Tom Hardy as Eddie Brock / Venom, alongside Michelle Williams, Riz Ahmed, Scott Haze, and Reid Scott. In Venom, journalist Brock gains superpowers after being bound to an alien symbiote whose species plans to invade Earth.\r\n\r\nAfter he appeared in Spider-Man 3 (2007), Sony unsuccessfully developed several iterations of a film based on Venom. Work began in March 2016 on a version that would start a new shared universe featuring the Marvel characters that the studio possessed film rights to. Sony also intended for Venom to share the world of the MCU\'s Spider-Man: Homecoming (2017), but ultimately distanced the film from the Spider-Man character. In March 2017, Rosenberg and Pinkner were set to write, with Fleischer and Hardy added in May. Principal photography began that October in Atlanta, before moving to New York City and San Francisco. The film was primarily inspired by the comic miniseries Venom: Lethal Protector (1993) and story arc \"Planet of the Symbiotes\" (1995).\r\n\r\nVenom was released in the United States on October 5, 2018, and received generally negative reviews from critics for its script and inconsistent tone. However, some praised Hardy\'s performance and the chemistry between Brock and Venom. The film went on to be an unexpected box office success, becoming the sixth highest-grossing film of 2018 with over $855 million worldwide and setting several box office records for the month of October. A sequel is expected to be released on October 2, 2020.', '1', '2019-03-19 12:55:21', '2019-03-27 21:10:15'),
(10, 'Robin Hood', 3, 3, 'America(US)', '2018', 'November 21, 2018', 'Otto Bathurst', 'Taron Egerton, Jamie Foxx, Ben Mendelsohn, Eve Hewson, Tim Minchin, Jamie Dornan', 'images/movie/7robinhood201800_450.jpg', 'https://www.youtube.com/embed/zwPn9ZnbCo0', 'Blockbuster Cinemas,Star cineplex', 'Robin Hood is a 2018 American action-adventure film directed by Otto Bathurst and written by Ben Chandler and David James Kelly, from a story by Chandler. It is based on the tale of the same name, and follows his training by John to steal from the Sheriff of Nottingham. The film stars Taron Egerton, Jamie Foxx, Ben Mendelsohn, Eve Hewson, Tim Minchin, and Jamie Dornan.\r\n\r\nThe film was announced in February 2015, with Egerton signing on as the lead role that September. Hewson, Foxx and Mendleson all joined the cast over the following year, and principal photography began in February 2017, lasting through May.\r\n\r\nRobin Hood was released by Lionsgate on November 21, 2018. The film received generally negative reviews from critics, who criticized the direction, narrative and wasting of the cast, and has grossed over $84 million against a production budget of $100 million.[3] Due to its critical and financial disappointment, partnered with its modern take on a classic source material, numerous publications compared the film to 2017\'s King Arthur: Legend of the Sword.', '1', '2019-03-19 13:02:13', '2019-03-27 21:10:33'),
(11, 'AQUAMAN', 3, 1, 'America(Us)', '2018', 'December 14, 2018', 'James Wan', 'Jason Momoa, Amber Heard, Willem Dafoe, Patrick Wilson, Dolph Lundgren, Yahya Abdul-Mateen II, Nicole Kidman', 'images/movie/91JRHTfLvHL._SY445_.jpg', 'https://www.youtube.com/embed/WDkg3h8PCVU', 'Blockbuster Cinemas,Star cineplex,Madhumita', 'Aquaman is a 2018 American superhero film based on the DC Comics character Aquaman, and distributed by Warner Bros. Pictures. It is the sixth installment in the DC Extended Universe (DCEU). Directed by James Wan, with a screenplay by David Leslie Johnson-McGoldrick and Will Beall, from a story by Geoff Johns, Wan and Beall, it stars Jason Momoa as the title character, with Amber Heard, Willem Dafoe, Patrick Wilson, Dolph Lundgren, Yahya Abdul-Mateen II, and Nicole Kidman in supporting roles. It is the third live-action theatrical film featuring Aquaman, following Batman v Superman: Dawn of Justice (2016) and Justice League (2017), and the first full-length feature film centered around the character. In Aquaman, Arthur Curry, the heir to the underwater kingdom of Atlantis, must step forward to lead his people against his half-brother, Orm, who seeks to unite the seven underwater kingdoms against the surface world.\r\n\r\nDevelopment of an Aquaman film began in 2004, with several plans falling through over the years. In August 2014, Beall and Kurt Johnstad were hired to write two competing scripts and the film was officially announced in October 2014. Wan signed on as director in April 2015 and in July 2016 it was announced the film would move forward with Beall\'s screenplay, although Wan, Johnstad, Johns and Johnson-McGoldrick all performed various rewrites. The main cast was confirmed throughout 2016 and early 2017. Principal photography began in Australia on May 2, 2017. Most of the film was shot at Village Roadshow Studios in Gold Coast, Queensland, with production also held in Canada, Italy and Morocco. Filming wrapped on October 21, 2017.\r\n\r\nAquaman had its world premiere in London on November 26, 2018, and was released in the United States in Real D 3D, Dolby Cinema, IMAX and IMAX 3D formats on December 21, 2018. The film has grossed over $1.1 billion worldwide, becoming the highest-grossing DCEU film as well as the highest-grossing film based on a DC Comics character, surpassing The Dark Knight Rises;[10] it was also the fifth highest-grossing film of 2018, the 20th highest-grossing film of all-time, the highest grossing solo superhero movie overseas and the fourth highest grossing solo superhero film of all time. It received praise for its adventurous tone, direction, visuals, musical score, action sequences, cinematography, and the performances of Momoa and Heard, but received criticism for its dialogue and plot. An untitled sequel is set for release on December 16, 2022 and a spin-off, The Trench, is in development.', '1', '2019-03-19 13:05:21', '2019-03-19 13:05:21'),
(12, 'Jodi Ekdin', 1, 1, 'Bangladesh', '2019', '8 March 2019', 'Muhammad Mostafa Kamal Raz', 'Afrin Shikha Raisa, Tahsan Khan, Srabanti Chatterjee', 'images/movie/janiekdin.jpg', 'https://www.youtube.com/embed/zwuQh8qrEFU', 'Shyamoli Cinema,Balaka,Ananda,Jonaki', 'Faisal lives happily with his daughter and his mother as a single father. He is very serious about work when it is time, and his whole life is based on his daughter. However, when a new employee named Ayitr (Srabonti) joins the company, she not only gets close to his daughter but also towards Faisal\'s heart.It looks like we don\'t have a Synopsis for this title yet. \r\nBe the first to contribute! Just click the \"Edit page\" button at the bottom of the page or learn more in the Synopsis submission guide.', '1', '2019-03-19 13:13:55', '2019-03-27 20:50:59'),
(13, 'Godzilla', 3, 2, 'America', '2019', 'May 31, 2019', 'Michael Dougherty', 'Kyle Chandler, Millie Bobby Brown, Vera Farmiga', 'images/movie/Godzilla_King_of_the_Monsers.png', 'https://www.youtube.com/embed/g77W5Q1qK00', 'Blockbuster Cinemas,Star cineplex', 'Godzilla: King of the Monsters is an upcoming American monster film directed and co-written by Michael Dougherty. It is a sequel to Godzilla (2014) and will be the 35th film in the Godzilla franchise, the third film in Legendary\'s MonsterVerse, and the third Godzilla film to be completely produced by a Hollywood studio.[Note 1] The film stars Kyle Chandler, Vera Farmiga, Millie Bobby Brown, Bradley Whitford, Sally Hawkins, Charles Dance, Thomas Middleditch, Aisha Hinds, O\'Shea Jackson Jr., David Strathairn, Ken Watanabe, and Zhang Ziyi. It is one of Yoshimitsu Banno\'s last films as executive producer, as he died on May 7, 2017.\r\n\r\nThe sequel was green-lit during the opening weekend of Godzilla, with original director Gareth Edwards expected to return. After Edwards left the project in May 2016, Dougherty, who had been hired in October 2016 to re-write the script with Zach Shields, was announced as the director in January 2017. Principal photography began in June 2017 in Atlanta, Georgia and wrapped in September 2017. Godzilla: King of the Monsters is scheduled to be released on May 31, 2019, in 2D, 3D, Dolby Cinema and IMAX. A sequel, Godzilla vs. Kong, is scheduled to be released on March 13, 2020.', '1', '2019-03-19 13:17:57', '2019-03-26 07:25:45'),
(14, 'Villain (ভিলেন)', 6, 3, 'Indian bangla', '2019', 'October 12, 2018', 'Baba Yadav', 'Ankush Hazra, Mimi Chakraborty, Rittika Sen, Mousumi Saha, Subhadra Zayed, Raja Dutta', 'images/movie/f32n7f2.jpg', 'https://www.youtube.com/embed/5tYW4u_7Vt0', 'Rajmoni,Shyamoli Cinema,Ananda,Mrigaya', 'SVF presents the official trailer of \"Villain\", directed by ace choreographer Baba Yadav. The movie stars Ankush, Mimi and Rittika, essaying never-seen-before personalities, while the music has been composed by JAM8, Amlaan and Dev Sen. Catch the villain, and don\'t miss!', '1', '2019-03-19 13:52:27', '2019-03-27 21:11:21'),
(15, 'Shikari', 6, 3, 'Bangladesh-India', '2018', '12 Auugust 2016', 'Joydip Mukherjee', 'Shakib Khan, Srabanti Chatterjee, Sabyasachi Chakrabarty, Rahul Dev, Amit Hasan', 'images/movie-hall/Bangladesh-Army-Stadium-6.jpg', 'https://www.youtube.com/embed/-EHvHa3Nk0U', 'Rajmoni,Shyamoli Cinema,Blockbuster Cinemas,Madhumita,Jonaki,Mrigaya', 'Sultan (Shakib Khan) is a professional assassin who had run away from home in his childhood after being convicted of attempting to murder his father. Rahul Dev, an influential child trafficker hires Sultan to kill prominent Judge Rudro Chowdhury (Sabyasachi Chatterjee), since he is handling the inquiry and verdict on Rahul Dev\'s child trafficking case in Kolkata.[7] Sultan arrives in Kolkata and attempts to murder Judge Chowdhury by sniping, but misfires due to large crowd and media around the Judge.[12] The West Bengal police force chases after him, but ultimately fails to catch him. After Rahul Dev insults him for his inability, Sultan is angry with himself, and vows to kill Judge Chowdhury within ten days', '2', '2019-03-19 14:17:23', '2019-03-19 14:17:23'),
(16, 'Aynabaji', 6, 3, 'Bangladesh', '2016', '30 September 2016', 'Amitabh Reza Chowdhury', 'Chanchal Chowdhury, Masuma Nabila, Partha Barua', 'images/movie/cqnf6rn.jpg', 'https://www.youtube.com/embed/1e_ru5j7afM', 'Rajmoni,Shyamoli Cinema,Balaka,Blockbuster Cinemas,Madhumita,Ananda,Jonaki', 'Aynabaji (Bengali: আয়নাবাজি pronounced [äɪ̯naːbäd͡ʒi]) is a 2016 Bangladeshi crime thriller film directed by Amitabh Reza Chowdhury and produced by Gousul Alam under the banner of Content Matters Production. The film stars Chanchal Chowdhury, Masuma Rahman Nabila and Partha Barua in lead roles. It is the director Amitabh Reza\'s first feature film. It was released on 30 September 2016.', '1', '2019-03-19 14:22:40', '2019-03-19 14:22:40'),
(17, 'Avengers: Infinity War', 3, 3, 'America(us)', '2018', '27 April 2018', 'Anthony Russo, Joe Russo', 'Robert Downey Jr, Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Benedict', 'images/movie/Avengers_Infinity_War_poster.jpg', 'https://www.youtube.com/embed/6ZfuNTqbHE8', 'Blockbuster Cinemas,Ananda,Star cineplex', 'Avengers: Infinity War is a 2018 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the sequel to 2012\'s The Avengers and 2015\'s Avengers: Age of Ultron, and the nineteenth film in the Marvel Cinematic Universe (MCU). The film is directed by Anthony and Joe Russo, written by Christopher Markus and Stephen McFeely, and features an ensemble cast including Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Benedict Cumberbatch, Don Cheadle, Tom Holland, Chadwick Boseman, Paul Bettany, Elizabeth Olsen, Anthony Mackie, Sebastian Stan, Danai Gurira, Letitia Wright, Dave Bautista, Zoe Saldana, Josh Brolin, and Chris Pratt. In the film, the Avengers and the Guardians of the Galaxy attempt to stop Thanos from amassing the all-powerful Infinity Stones.\r\n\r\nThe film was announced in October 2014 as Avengers: Infinity War – Part 1. The Russo brothers came on board to direct in April 2015 and by May, Markus and McFeely had signed on to write the script for the film, which drew inspiration from Jim Starlin\'s 1991 The Infinity Gauntlet comic and Jonathan Hickman\'s 2013 Infinity comic. In 2016, Marvel shortened the title to Avengers: Infinity War. Filming began in January 2017 at Pinewood Atlanta Studios in Fayette County, Georgia, with a large cast consisting mostly of actors reprising their roles from previous MCU films, including Brolin as Thanos. The production lasted until July 2017, shooting back-to-back with a direct sequel, Avengers: Endgame. Additional filming took place in Scotland, England, the Downtown Atlanta area, and New York City. With an estimated budget in the range of $316–400 million, it is one of the most expensive films ever made.\r\n\r\nAvengers: Infinity War held its world premiere on April 23, 2018 in Los Angeles and was released in the United States on April 27, 2018, in IMAX and 3D. The film received praise for the performances of the cast (particularly Brolin\'s) and the emotional weight of the story, as well as the visual effects and action sequences. It was the fourth film and the first superhero film to gross over $2 billion worldwide, breaking numerous box office records and becoming the highest-grossing film of 2018, as well as the fourth-highest-grossing film of all time and in the United States and Canada. The film received Academy Award and BAFTA nominations for achievements in visual effects. The sequel, Avengers: Endgame, is set to be released on April 26, 2019.', '1', '2019-03-19 14:37:10', '2019-03-19 14:37:10'),
(19, 'POKÉMON Detective Pikachu', 6, 2, 'USA', '2019', '10  May 2019', 'Rob Letterman', 'Rob Letterman, Nicole Perlman, Derek Connolly', 'images/movie/download.jpg', 'https://www.youtube.com/embed/1roy4o4tqQM', 'Balaka,Blockbuster Cinemas,Star cineplex', 'A young man joins forces with Detective Pikachu to unravel the mystery behind his father\'s disappearance. Chasing clues through the streets of Ryme City, the dynamic duo soon discover a devious plot that poses a threat to the Pokémon universe. The first-ever live-action Pokémon movie, “POKÉMON Detective Pikachu” stars Ryan Reynolds as the titular character in the first-ever live-action movie based on the iconic face of the global Pokémon brand—one of the world’s most popular, multi-generation entertainment properties and most successful media franchises of all time', '1', '2019-03-19 14:44:48', '2019-03-19 14:44:48'),
(20, 'Avengers: Endgame', 3, 2, 'USA', '2019', '26 April  2019', 'Anthony Russo, Joe Russo', 'Chris Evans, Robert Downey, Jr., Chris Hemsworth and more', 'images/movie/fans-angry-danai-gurira-s-name-isn-t-atop-avengers-endgame-poster__701824_.jpg', 'https://www.youtube.com/embed/TcMBFSGVi1c', 'Blockbuster Cinemas,Madhumita,Mrigaya,Star cineplex', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.', '1', '2019-03-19 14:48:47', '2019-03-19 14:48:47'),
(21, 'Shahenshah', 1, 2, 'Bangladesh', '2019', '2019', 'Shamim Ahmed Roni', 'Shakib Khan,Nusraat Faria, Rodela Jannat, Amit Hasan, DJ Sohel  and  more', 'images/movie/TcC9Psr.jpg', 'https://www.youtube.com/embed/s1akM4iYrKI\r\n', 'Balaka,Madhumita,Ananda,Jonaki,Mrigaya', 'Shahenshah is a 2019 Bangladeshi Bengali romantic comedy film directed by Shamim Ahmed Rony. The film stars Shakib Khan, Nusrat Faria and Rodela Jannat in the lead roles. The cast also includes Amit Hasan, Sadek Bachchu, Ahmed Sharif, Shiba Shanu, Don, DJ Shohel and Misha Sawdagor.', '1', '2019-03-19 14:54:16', '2019-03-19 14:54:16'),
(22, 'Joy Bangla Concert', 8, 3, 'Bangladesh', '2019', '07 March 2019', 'bd Army', 'Fock bd', 'images/movie/Poster-Dhaka-01.jpg', 'https://www.youtube.com/embed/eUhYrIpsYdw', 'Bangladesh Army Stadium', 'Young Bangla is one of the leading youth networks in Bangladesh.The organisers said this year two &lsquo;mini-concerts&rsquo; will be held ahead of the Mar 7 event at Dhaka&rsquo;s Army Stadium.&nbsp', '1', '2019-03-24 07:15:32', '2019-03-24 07:15:32'),
(23, 'BPL -2019', 8, 3, 'Bangladesh', '2019', '8 February 2019', 'Walton', 'DD VS CV', 'images/movie/Comilla-Victorians-vs-Dhaka-Dynamites-BPL-T20-Final-Today-Match-Prediction-Who-Will-Win.jpg', 'https://www.youtube.com/embed/fi8SyvgFlbA', 'Sher-e-Bangla Cricket Stadium', 'franchise league in Bangladesh. The competition was organised by the', '1', '2019-03-24 07:21:03', '2019-03-24 07:21:03');

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
(4, 'Mahershala Ali wins second Oscar, ties Denzel Washington', 'images/news/news-image/10243660-6741743-Made_history_Mahershala_Ali_won_the_Best_Supporting_Actor_Academ-a-226_1551082498849.jpg', 'Mahershala Ali took home his second supporting actor Oscar in three years Sunday night, for his role as black pianist Don Shirley in “Green Book,” a film that has been one of the most heavily criticised of awards season. The movie tells the story of Shirley, his white driver, Tony Lip (Viggo Mortensen) and their friendship as they toured the South in 1962.\r\n\r\nAli joined Denzel Washington as the only other black actor to win multiple Oscars. But Ali’s wins were unusual in how close they were to each other. Two years ago, Ali won for his supporting performance in “Moonlight.” Washington won best actor for “Training Day” (2001) and supporting actor for “Glory” (1989) more than a decade apart. Other prominent black actors who have won Oscars include Sidney Poitier, who in 1964 became the first African-American to win best actor for “Lillies of the Field.” He later won an honorary Oscar in 2001.\r\n\r\nLouis Gossett Jr (“An Officer and a Gentleman,” 1982), Jamie Foxx (“Ray,” 2004), Morgan Freeman (“Million Dollar Baby,” 2004), Cuba Gooding Jr (“Jerry Maguire,” 1996), and Forest Whitaker (“The Last King Of Scotland,” 2006) have also won Oscars.\r\n\r\nAli’s “Green Book” role proved controversial. Shirley’s family objected to how he was portrayed in the film, particularly the notion that Shirley was estranged from his relatives. Shirley’s only living brother, Maurice Shirley, once called the movie a “symphony of lies.” Shirley’s nephew said in an interview that Ali called to personally apologize. But even so, the film did well at the Golden Globes and Ali received acclaim for his performance. (On Sunday night, “Green Book” also won best picture and best original screenplay.)\r\n\r\nIn his acceptance speech, Ali thanked Shirley, saying that trying to capture his essence “pushed me to my ends.”\r\n\r\nHe also thanked Mortensen and paid tribute to his grandmother.\r\n\r\n“I want to dedicate this to my grandmother, who has been in my ear my entire life,” Ali said. “Telling me that if at first I don’t succeed, try, try again. That I can do anything I put my mind to. Always, always pushing me to think positively and I know that I would not be here without her, that she’s has got me over the hump every step of the way.”', 'BDnews24', 'images/news/author-image/061e492f298f7e68d4bd996c3a35266cfeb4baf9.jpg', 'BDNEWS24', 1, '2019-03-19 16:11:43', '2019-03-26 01:02:04'),
(5, 'Real Madrid reappoint Zidane as coach to replace Solari', 'images/news/news-image/20190316-The18-Image-Zidane-Real-Madrid-Lineup-GettyImages-1136198798.jpg', 'Real Madrid have reappointed Zinedine Zidane as coach on a three-year deal following the sacking of Santiago Solari, the club said on Monday, after the European champions\' season collapsed inside a week.\r\n\r\nRELATED STORIES\r\nZidane will be managing again soon, says his son Enzo\r\n\r\nZidane steps down as Real Madrid coach\r\n\r\n\"Real Madrid\'s board met today and decided to end the contract linking Santiago Solari to the club as first team coach and, at the same time, have offered to keep him at the club,\" Madrid said in a statement.\r\n\r\n\"The board have named Zinedine Zidane as the new coach to be incorporated immediately for the rest of the season and the next three, until June 30, 2022.\"\r\n\r\nFrenchman Zidane won an unprecedented three consecutive Champions League titles with the club before resigning in May last year, with his replacement Julen Lopetegui sacked in October and Solari lasting just over four months in charge.\r\n\r\nMadrid were eliminated from the Champions League in the last 16 by Ajax Amsterdam on Tuesday after two Clasico defeats by Barcelona, knocking Real out of the Copa del Rey and leaving them 12 points adrift of the Catalan Liga leaders.\r\n\r\nSolari, a former Real Madrid and Argentina midfielder who took over at the Bernabeu on Nov. 13, had replaced former Spain manager Lopetegui but failed to bring success to the Bernabeu.\r\n\r\nReal had won the Champions League for three straight seasons under Zidane but lost 4-1 at home to Ajax to go out 5-3 on aggregate, their earliest exit since 2006.\r\n\r\nTOP FOUR\r\n\r\nThe 42-year-old Solari was in charge of Real for 22 games in all competitions, losing eight and drawing two, and helped the Spanish giants claim the FIFA Club World Cup in December.\r\n\r\nSolari leaves Real third in the Liga standings, with Zidane\'s job now to keep them in the top four.\r\n\r\nBarca beat Real 1-0 in the league at the Bernabeu on March 2 just three days after winning 3-0 in Madrid to knock their arch-rivals out of the Copa del Rey in the semi-finals.\r\n\r\nSolari\'s side thrashed Real Valladolid 4-1 on Sunday in his final stand as coach. Zidane, who won the World Cup with France as a player, is expected to take charge of training on Tuesday.\r\n\r\nZidane, who took over at Real in January 2016 after Rafa Benitez was dismissed, won the Champions League that season, before claiming a La Liga and European Cup double in 2017.\r\n\r\nFive days after a third triumph in last season\'s Champions League final over Liverpool, the former Real Madrid midfielder decided to walk away, saying it was the right moment to depart.\r\n\r\nThe 46-year-old won nine trophies at Madrid and is considered a hero by supporters after managing Real in one of the club\'s most successful eras.', 'BDnews24', 'images/news/author-image/Zidanes-Real-Madrid-return.png', 'BDnews24', 1, '2019-03-19 16:26:15', '2019-03-26 01:02:55'),
(6, '‘Hasina: A Daughter’s Tale’ awaits release', 'images/news/news-image/MV5BOWE4M2JiMzktYjI3ZS00ZWVmLTg5ZDYtNGQzNTIxMDBlYmVhXkEyXkFqcGdeQXVyNjI1ODkzMTI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The filmmaker describes the biography based documentary as \'a riveting story of a daughter out of a tragic backdrop; the daughter of Bangabandhu Sheikh Mujibur Rahman’\r\n\r\n \r\nA docudrama - “Hasina: A Daughter’s Tale” - on the life of Bangladesh Prime Minister Sheikh Hasina will be premiering on Thursday and released on Friday across Bangladesh.\r\n\r\nPiplu Khan, director of this documentary said this at a press conference organized by Centre for Research and Information (CRI) at the Krishibid Institution in Dhaka on Monday.\r\n\r\nRadwan Mujib Siddiq and Nasrul Hamid Bipu from Centre for Research and Information (CRI) produced the documentary, with a team of international personalities collaborating on the film.\r\n\r\nThe 70-minute docudrama has Sadik Ahmed as the cinematographer, Navnita Sen as the editor, and Debojyoti Mishra as the music director.\r\n\r\nThe filmmaker describes the biography based documentary as “a riveting story of a daughter out of a tragic backdrop; the daughter of Bangabandhu Sheikh Mujibur Rahman.”\r\n\r\nAlso Read- ‘Hasina: A Daughter\'s Tale’ set for release on Nov 16\r\n\r\nThe initial conversation about the project started with quite an open-minded brief where the core idea was to present a captivating biography in the space of a documentary.\r\n\r\nThis documentary will be released in four movie theatres on Friday: Star Cineplex, Blockbuster Cinemas, Modhumita Cinema Hall, and Chittagong’s Silver Screen.\r\n\r\nThe docudrama is an extensive, five-year-long collaboration between the Centre for Research and Information (CRI) and Applebox Films founder Piplu.\r\n\r\nThe trailer of the film was released on all social media platforms on September 28, marking Prime Minister Sheikh Hasina’s 71st birthday, and instantly became viral.\r\n\r\nPiplu Khan said this movie is not about the Prime Minister of the People’s Republic of Bangladesh, Sheikh Hasina, this is a movie about Sheikh Hasina, daughter of Bangabandhu Sheikh Mujibur Rahman.\r\n\r\n“Over the past five years, we have been working for this film and finally are able to make this. I tried to highlight the absolute truth about our history in this film,” he said.\r\n\r\nAlso Read- ‘Hasina: A Daughter’s Tale’ awaits release\r\n\r\nResponding to query by journalists about the role of Sheikh Hasina’s sister Sheikh Rehana in the movie, the director said: “There are many complex parts in a person’s life. However, through this film, we tried to illustrate the survival of the two sisters in a simplistic manner.”\r\n\r\nIn the film Sheikh Hasina has been depicted as a person who actually connects most with the history and inception of Bangladesh.\r\n\r\nSabbir Bin Shams, executive director of CRI, said: “We have tried to uphold the glorious history of our nation and once again have it ingrained in the minds of the young generation.”', 'Dhakatribune', 'images/news/author-image/web-syed-zakir-hossain-hasian-press-conference-1542272007482.jpg', 'DhakatribuneDhakatribune', 1, '2019-03-19 16:30:11', '2019-03-26 01:05:28');

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

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_title`, `offer_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Family Ticket', 'No One pays under 5-years child price!', 1, '2019-03-12 10:20:34', '2019-03-25 13:31:10'),
(2, 'Friends Ticket', 'Get One Ticket Per 20 Tickets Purchase!', 1, '2019-03-12 10:22:33', '2019-03-12 10:22:33'),
(3, 'Teen Ticket', 'Aged 13-18? Save up to 5% on The Adult Ticket Price With Our Teen Ticket', 1, '2019-03-12 10:25:40', '2019-03-25 13:43:45'),
(4, 'Super MonDay', 'Save Up to 10% with 10 Purchase!', 1, '2019-03-12 10:26:45', '2019-03-12 10:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(126, 13, 52, 450.00, 'pending', '2019-03-27 16:59:52', '2019-03-27 16:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `seat_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `show_id`, `name`, `place`, `date`, `time`, `seat_number`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(107, 126, 66, 'Poramon 2', 'Rajmoni', '2019-03-26', '19:15:00', 'A1', 450.00, 1, '2019-03-27 16:59:52', '2019-03-27 16:59:52');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(113, 126, 'BKash', 'pending', '2019-03-27 16:59:52', '2019-03-27 16:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(52, 'customer new', 'customer@gmail.com', '01738366238', 'kolabagan', '2019-03-27 16:59:45', '2019-03-27 16:59:45'),
(53, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-27 21:42:19', '2019-03-27 21:42:19'),
(54, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-27 23:03:40', '2019-03-27 23:03:40'),
(55, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-27 23:08:33', '2019-03-27 23:08:33'),
(56, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-27 23:11:10', '2019-03-27 23:11:10'),
(57, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-27 23:13:58', '2019-03-27 23:13:58'),
(58, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-27 23:20:01', '2019-03-27 23:20:01'),
(59, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-28 00:19:11', '2019-03-28 00:19:11'),
(60, 'customer two', 'customer2@gmail.com', '01778542147', 'kolabagan', '2019-03-28 00:55:42', '2019-03-28 00:55:42'),
(61, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-28 01:04:30', '2019-03-28 01:04:30'),
(62, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-28 01:10:21', '2019-03-28 01:10:21'),
(63, 'customer one', 'customer@gmail.com', '01772515721', 'kolabagan', '2019-03-28 01:39:27', '2019-03-28 01:39:27'),
(64, 'customer uu', 'abmrifat16@gmail.com', '01778542147', 'dddgf', '2019-04-02 06:05:20', '2019-04-02 06:05:20'),
(65, 'customer abm', 'abmrifat16@gmail.com', '01778542147', 'kolabagan', '2019-04-02 08:07:37', '2019-04-02 08:07:37'),
(66, 'customer abm', 'abmrifat16@gmail.com', '01778542147', 'kolabagan', '2019-04-02 09:33:14', '2019-04-02 09:33:14'),
(67, 'customer abm', 'abmrifat16@gmail.com', '01778542147', 'kolabagan', '2019-04-02 09:39:51', '2019-04-02 09:39:51'),
(68, 'customer abm', 'abmrifat16@gmail.com', '01738366238', 'kolabagan', '2019-04-02 09:56:28', '2019-04-02 09:56:28');

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
(1, 'Now Showing', 'we show all running movie', 1, '2018-12-10 09:06:53', '2019-03-25 08:25:40'),
(2, 'UpComing', 'All upcoming movie in here', 1, '2018-12-10 09:07:48', '2018-12-10 09:07:48'),
(3, 'Latest Showing', 'you can see all', 1, '2018-12-10 09:09:47', '2019-03-25 08:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `show_carts`
--

CREATE TABLE `show_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `show_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `place_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `place_category_name`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Movie Place', 'Movie Place', 1, '2019-03-24 06:22:02', '2019-03-25 14:04:39'),
(5, 'Sports And Concert Place', 'Sports And Concert Place', 1, '2019-03-24 06:23:41', '2019-03-24 06:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_ticket` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(11) NOT NULL,
  `publication_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `movie_name`, `hall_name`, `available_ticket`, `date`, `time`, `price`, `publication_status`, `created_at`, `updated_at`) VALUES
(47, 'Poramon 2', 'Balaka', 20, '2019-03-28', '10:00:00', 300, '1', '2019-03-22 08:14:27', '2019-03-27 21:20:32'),
(66, 'Poramon 2', 'Rajmoni', 5, '2019-03-28', '19:15:00', 450, '1', '2019-03-24 10:22:01', '2019-03-27 21:24:11'),
(68, 'Poramon 2', 'Ananda', 33, '2019-03-28', '19:15:00', 450, '1', '2019-03-24 10:23:16', '2019-03-27 21:26:14'),
(69, 'Poramon 2', 'Rajmoni', 25, '2019-03-29', '15:00:00', 350, '1', '2019-03-27 14:42:33', '2019-03-27 21:27:16'),
(71, 'AQUAMAN', 'Blockbuster Cinemas', 21, '2019-03-28', '10:00:00', 450, '1', '2019-03-27 20:35:47', '2019-03-27 23:14:16'),
(72, 'AQUAMAN', 'Blockbuster Cinemas', 10, '2019-03-29', '10:00:00', 400, '1', '2019-03-27 20:36:16', '2019-03-27 20:36:16'),
(73, 'AQUAMAN', 'Blockbuster Cinemas', 23, '2019-03-30', '15:00:00', 450, '1', '2019-03-27 20:36:41', '2019-04-02 09:40:02'),
(74, 'AQUAMAN', 'Star cineplex', 18, '2019-03-28', '15:00:00', 500, '1', '2019-03-27 20:37:18', '2019-03-27 20:37:18'),
(75, 'AQUAMAN', 'Star cineplex', 20, '2019-03-29', '19:15:00', 550, '1', '2019-03-27 20:37:46', '2019-03-27 20:37:46'),
(76, 'AQUAMAN', 'Star cineplex', 20, '2019-03-30', '19:15:00', 500, '1', '2019-03-27 20:38:30', '2019-03-27 20:38:30'),
(77, 'AQUAMAN', 'Madhumita', 20, '2019-03-28', '19:15:00', 350, '1', '2019-03-27 20:39:07', '2019-03-27 20:39:07'),
(78, 'AQUAMAN', 'Madhumita', 20, '2019-03-30', '10:00:00', 300, '1', '2019-03-27 20:39:30', '2019-03-27 20:39:30'),
(79, 'AQUAMAN', 'Jonaki', 10, '2019-03-29', '10:00:00', 400, '1', '2019-03-27 20:41:12', '2019-03-27 20:41:12'),
(80, 'AQUAMAN', 'Jonaki', 12, '2019-03-30', '19:15:00', 450, '1', '2019-03-27 20:41:42', '2019-03-27 20:41:42'),
(81, 'Devi', 'Rajmoni', 20, '2019-03-28', '10:00:00', 440, '1', '2019-03-27 20:43:15', '2019-03-27 20:43:15'),
(82, 'Devi', 'Rajmoni', 23, '2019-03-29', '19:15:00', 440, '1', '2019-03-27 20:43:39', '2019-03-27 20:43:39'),
(83, 'Devi', 'Rajmoni', 20, '2019-03-30', '15:00:00', 380, '1', '2019-03-27 20:44:02', '2019-03-27 20:44:02'),
(84, 'Devi', 'Shyamoli Cinema', 25, '2019-03-28', '19:15:00', 450, '1', '2019-03-27 20:45:06', '2019-03-27 20:45:06'),
(85, 'Devi', 'Shyamoli Cinema', 35, '2019-03-29', '19:15:00', 470, '1', '2019-03-27 20:45:30', '2019-03-27 20:45:30'),
(86, 'Devi', 'Shyamoli Cinema', 50, '2019-03-30', '10:00:00', 450, '1', '2019-03-27 20:45:50', '2019-03-27 20:45:50'),
(87, 'Devi', 'Jonaki', 30, '2019-03-28', '19:15:00', 380, '1', '2019-03-27 20:46:39', '2019-03-27 20:46:39'),
(88, 'Devi', 'Jonaki', 30, '2019-03-30', '10:00:00', 400, '1', '2019-03-27 20:47:21', '2019-03-27 20:47:21'),
(89, 'Devi', 'Madhumita', 30, '2019-03-28', '10:00:00', 300, '1', '2019-03-27 20:48:57', '2019-03-27 20:48:57'),
(90, 'Devi', 'Madhumita', 20, '2019-03-29', '15:00:00', 400, '1', '2019-03-27 20:49:20', '2019-03-27 20:49:20'),
(91, 'Jodi Ekdin', 'Balaka', 20, '2019-03-28', '10:00:00', 400, '1', '2019-03-27 20:51:40', '2019-03-28 01:10:38'),
(92, 'Jodi Ekdin', 'Balaka', 26, '2019-03-29', '19:15:00', 450, '1', '2019-03-27 20:52:02', '2019-03-28 00:19:27'),
(93, 'Jodi Ekdin', 'Balaka', 26, '2019-03-30', '15:00:00', 380, '1', '2019-03-27 20:52:31', '2019-03-27 23:20:03'),
(94, 'Jodi Ekdin', 'Shyamoli Cinema', 49, '2019-03-28', '19:15:00', 400, '1', '2019-03-27 20:53:48', '2019-04-02 06:05:33'),
(95, 'Jodi Ekdin', 'Shyamoli Cinema', 38, '2019-03-29', '19:15:00', 300, '1', '2019-03-27 20:54:07', '2019-04-02 09:56:42'),
(96, 'Jodi Ekdin', 'Ananda', 50, '2019-03-28', '10:00:00', 300, '1', '2019-03-27 20:54:37', '2019-03-27 20:54:37'),
(97, 'Jodi Ekdin', 'Ananda', 15, '2019-03-29', '19:15:00', 330, '1', '2019-03-27 20:55:01', '2019-04-02 08:07:49'),
(98, 'Jodi Ekdin', 'Ananda', 20, '2019-03-30', '19:15:00', 330, '1', '2019-03-27 20:55:20', '2019-03-27 23:09:07'),
(99, 'Jodi Ekdin', 'Jonaki', 30, '2019-03-28', '10:00:00', 280, '1', '2019-03-27 20:55:47', '2019-03-27 20:55:47'),
(100, 'Jodi Ekdin', 'Jonaki', 30, '2019-03-29', '10:00:00', 300, '1', '2019-03-27 20:56:04', '2019-03-27 20:56:04'),
(101, 'Jodi Ekdin', 'Jonaki', 30, '2019-03-30', '15:00:00', 290, '1', '2019-03-27 20:56:27', '2019-03-27 20:56:27'),
(102, 'Dohon', 'Balaka', 15, '2019-03-28', '10:00:00', 250, '1', '2019-03-27 21:02:56', '2019-03-28 01:04:34'),
(103, 'Dohon', 'Balaka', 30, '2019-03-29', '19:15:00', 280, '1', '2019-03-27 21:03:16', '2019-03-27 21:03:16'),
(104, 'Dohon', 'Balaka', 40, '2019-03-30', '19:15:00', 280, '1', '2019-03-27 21:03:36', '2019-03-27 21:03:36'),
(105, 'Dohon', 'Madhumita', 20, '2019-03-28', '10:00:00', 250, '1', '2019-03-27 21:04:04', '2019-03-27 21:04:04'),
(106, 'Dohon', 'Madhumita', 40, '2019-03-29', '19:15:00', 300, '1', '2019-03-27 21:04:27', '2019-03-27 21:04:27'),
(107, 'Dohon', 'Madhumita', 30, '2019-03-30', '10:00:00', 200, '1', '2019-03-27 21:04:48', '2019-03-27 21:04:48'),
(108, 'Dohon', 'Jonaki', 10, '2019-03-28', '10:00:00', 250, '1', '2019-03-27 21:05:52', '2019-03-27 21:05:52'),
(109, 'Dohon', 'Jonaki', 15, '2019-03-29', '19:15:00', 280, '1', '2019-03-27 21:06:20', '2019-03-27 21:06:20'),
(110, 'Dohon', 'Jonaki', 40, '2019-03-30', '19:15:00', 200, '1', '2019-03-27 21:06:43', '2019-03-27 21:06:43'),
(111, 'Venom', 'Shyamoli Cinema', 30, '2019-03-28', '10:00:00', 300, '1', '2019-03-27 21:11:43', '2019-03-27 21:11:43'),
(112, 'Venom', 'Shyamoli Cinema', 45, '2019-03-29', '19:15:00', 300, '1', '2019-03-27 21:12:04', '2019-03-27 21:12:04'),
(113, 'Venom', 'Shyamoli Cinema', 30, '2019-03-30', '15:00:00', 250, '1', '2019-03-27 21:12:22', '2019-03-27 21:18:09'),
(114, 'Venom', 'Blockbuster Cinemas', 30, '2019-03-28', '19:15:00', 450, '1', '2019-03-27 21:12:46', '2019-03-27 21:12:46'),
(115, 'Venom', 'Blockbuster Cinemas', 5, '2019-03-29', '10:00:00', 500, '1', '2019-03-27 21:13:07', '2019-03-27 21:17:31'),
(116, 'Venom', 'Blockbuster Cinemas', 5, '2019-03-30', '19:15:00', 550, '1', '2019-03-27 21:13:24', '2019-03-27 21:13:24'),
(117, 'Venom', 'Madhumita', 30, '2019-03-28', '19:15:00', 300, '1', '2019-03-27 21:14:18', '2019-03-27 21:14:18'),
(118, 'Venom', 'Madhumita', 40, '2019-03-29', '19:15:00', 350, '1', '2019-03-27 21:14:59', '2019-03-27 21:14:59'),
(119, 'Venom', 'Madhumita', 35, '2019-03-30', '19:15:00', 350, '1', '2019-03-27 21:15:22', '2019-03-27 21:15:22'),
(120, 'Venom', 'Jonaki', 40, '2019-03-29', '15:00:00', 300, '1', '2019-03-27 21:17:20', '2019-03-27 21:17:20'),
(121, 'Venom', 'Jonaki', 50, '2019-03-30', '15:00:00', 300, '1', '2019-03-27 21:18:51', '2019-03-27 21:18:51'),
(122, 'Poramon 2', 'Balaka', 50, '2019-03-29', '15:00:00', 300, '1', '2019-03-27 21:21:08', '2019-03-27 21:21:08'),
(124, 'Poramon 2', 'Shyamoli Cinema', 50, '2019-03-28', '19:15:00', 330, '1', '2019-03-27 21:23:57', '2019-03-27 21:23:57'),
(125, 'Poramon 2', 'Shyamoli Cinema', 50, '2019-03-29', '19:15:00', 330, '1', '2019-03-27 21:24:19', '2019-03-27 21:24:45'),
(126, 'Poramon 2', 'Balaka', 34, '2019-03-30', '10:00:00', 320, '1', '2019-03-27 21:28:58', '2019-03-27 21:28:58'),
(127, 'Poramon 2', 'Ananda', 40, '2019-03-30', '19:15:00', 300, '1', '2019-03-27 21:29:26', '2019-03-27 21:29:26'),
(128, 'Poramon 2', 'Shyamoli Cinema', 30, '2019-03-30', '15:00:00', 330, '1', '2019-03-27 21:29:56', '2019-03-27 21:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_shifts`
--

CREATE TABLE `ticket_shifts` (
  `id` int(10) UNSIGNED NOT NULL,
  `shift_time` time NOT NULL,
  `shift_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_shifts`
--

INSERT INTO `ticket_shifts` (`id`, `shift_time`, `shift_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, '10:00:00', 'morning', 1, '2019-03-22 06:59:16', '2019-03-25 08:47:43'),
(3, '19:15:00', 'Night Show', 1, '2019-03-22 08:08:55', '2019-03-25 08:44:10'),
(4, '15:00:00', 'After Noon show', 1, '2019-03-22 08:10:15', '2019-03-25 09:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_statuses`
--

CREATE TABLE `ticket_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `seat_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_statuses`
--

INSERT INTO `ticket_statuses` (`id`, `seat_type`, `seat_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'AC', 'ac', 1, '2019-03-22 07:25:30', '2019-03-25 13:03:06'),
(3, 'NON AC', 'NON AC', 1, '2019-03-22 08:12:14', '2019-03-22 08:12:14');

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
(1, 'admin', 'admin@gmail.com', '$2y$10$9pIm93oqWj8hqi4MyMvqouTfJEOkZRVTfr4qHXaRXS8vR48QRKYwG', 'NzA1IO9HUOv3yEgYXgA8WSdc3vEDD2sx8jPUQpI8SYFWUu6ryRxFfMAyRKcB', '2018-11-01 02:19:18', '2018-11-01 02:19:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkashes`
--
ALTER TABLE `bkashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showings`
--
ALTER TABLE `showings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_carts`
--
ALTER TABLE `show_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_shifts`
--
ALTER TABLE `ticket_shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_statuses`
--
ALTER TABLE `ticket_statuses`
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
-- AUTO_INCREMENT for table `bkashes`
--
ALTER TABLE `bkashes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `moviehalls`
--
ALTER TABLE `moviehalls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `showings`
--
ALTER TABLE `showings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `show_carts`
--
ALTER TABLE `show_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `ticket_shifts`
--
ALTER TABLE `ticket_shifts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_statuses`
--
ALTER TABLE `ticket_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
