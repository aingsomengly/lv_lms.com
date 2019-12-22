-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.26 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lms58
DROP DATABASE IF EXISTS `lms58`;
CREATE DATABASE IF NOT EXISTS `lms58` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `lms58`;

-- Dumping structure for table lms58.authors
DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `dateofbirth` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.authors: 3 rows
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` (`id`, `name`, `slug`, `bio`, `country_id`, `language_id`, `dateofbirth`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Author 1', 'author-1', 'Author one bio', 1, 1, '1970-02-09', 'author.jpg', NULL, NULL),
	(2, 'Author 2', 'author-2', 'Author two bio', 2, 2, '1960-06-19', 'author.jpg', NULL, NULL),
	(3, 'Author 3', 'author-3', 'Author three bio', 3, 3, '1980-07-27', 'author.jpg', NULL, NULL);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;

-- Dumping structure for table lms58.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISBN` bigint(20) unsigned NOT NULL,
  `series_id` int(10) unsigned DEFAULT NULL,
  `publisher_id` int(10) unsigned NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_year` year(4) NOT NULL,
  `pages` int(10) unsigned NOT NULL,
  `binding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `price` double(8,2) NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.books: 3 rows
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `title`, `slug`, `subtitle`, `ISBN`, `series_id`, `publisher_id`, `author_id`, `edition`, `published_year`, `pages`, `binding`, `quantity`, `price`, `language_id`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Book Title 1', 'book-title-1', 'Book one subtitle', 1321423325, 1, 1, 1, 'First', '1920', 500, 'Hardcover', 20, 200.30, 1, 'Book descriptions goes here..', 'book.jpg', NULL, NULL),
	(2, 'Book Title 2', 'book-title-2', '', 1321423326, 2, 2, 2, 'First', '1930', 600, 'Hardcover', 30, 30.20, 2, 'Book descriptions goes here..', 'book.jpg', NULL, NULL),
	(3, 'Book Title 3', 'book-title-3', '', 1321423327, 3, 3, 3, 'First', '1940', 400, 'Hardcover', 40, 400.00, 3, 'Book descriptions goes here..', 'book.jpg', NULL, NULL);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Dumping structure for table lms58.book_genre
DROP TABLE IF EXISTS `book_genre`;
CREATE TABLE IF NOT EXISTS `book_genre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `genre_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.book_genre: 6 rows
/*!40000 ALTER TABLE `book_genre` DISABLE KEYS */;
INSERT INTO `book_genre` (`id`, `book_id`, `genre_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, NULL, NULL),
	(2, 2, 2, NULL, NULL),
	(3, 3, 3, NULL, NULL),
	(4, 1, 1, NULL, NULL),
	(5, 1, 3, NULL, NULL),
	(6, 2, 3, NULL, NULL);
/*!40000 ALTER TABLE `book_genre` ENABLE KEYS */;

-- Dumping structure for table lms58.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.categories: 0 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table lms58.category_post
DROP TABLE IF EXISTS `category_post`;
CREATE TABLE IF NOT EXISTS `category_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.category_post: 0 rows
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;

-- Dumping structure for table lms58.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.countries: 3 rows
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Bangladesh', 'bangladesh', NULL, NULL),
	(2, 'India', 'india', NULL, NULL),
	(3, 'USA', 'usa', NULL, NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping structure for table lms58.genres
DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.genres: 3 rows
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Drama', 'drama', NULL, NULL),
	(2, 'Romance', 'romance', NULL, NULL),
	(3, 'Action', 'action', NULL, NULL);
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;

-- Dumping structure for table lms58.issuedbooks
DROP TABLE IF EXISTS `issuedbooks`;
CREATE TABLE IF NOT EXISTS `issuedbooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `issued_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `penalty_money` double(8,2) NOT NULL DEFAULT '0.00',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'borrowed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.issuedbooks: 1 rows
/*!40000 ALTER TABLE `issuedbooks` DISABLE KEYS */;
INSERT INTO `issuedbooks` (`id`, `book_id`, `user_id`, `issued_date`, `expiry_date`, `return_date`, `penalty_money`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 3, '2019-11-14', '2019-11-17', NULL, 0.00, 'borrowed', '2019-11-14 03:31:20', '2019-11-14 03:31:20');
/*!40000 ALTER TABLE `issuedbooks` ENABLE KEYS */;

-- Dumping structure for table lms58.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.languages: 3 rows
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'English', 'english', NULL, NULL),
	(2, 'Bangla', 'bangla', NULL, NULL),
	(3, 'Japan', 'japan', NULL, NULL);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping structure for table lms58.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.migrations: 17 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_02_24_013011_create_roles_table', 1),
	(4, '2018_02_24_110807_create_books_table', 1),
	(5, '2018_02_25_125616_create_authors_table', 1),
	(6, '2018_02_25_205848_create_countries_table', 1),
	(7, '2018_02_25_214403_create_languages_table', 1),
	(8, '2018_02_28_150345_create_series_table', 1),
	(9, '2018_02_28_152821_create_publishers_table', 1),
	(10, '2018_02_28_155511_create_genres_table', 1),
	(11, '2018_09_05_173302_create_book_genre_table', 1),
	(12, '2018_09_08_111107_create_issuedbooks_table', 1),
	(13, '2018_09_12_084357_create_requestedbooks_table', 1),
	(14, '2018_09_22_200128_create_settings_table', 1),
	(15, '2018_10_04_212420_create_posts_table', 1),
	(16, '2018_10_04_212443_create_categories_table', 1),
	(17, '2018_10_04_214317_create_category_post_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table lms58.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lms58.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL,
  `published_on` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.posts: 3 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `short_content`, `status`, `published_on`, `image`, `user_id`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Blog Title 1', 'post-1', 'Blog post content goes here..', NULL, 1, '2019-11-14', 'post.jpg', 1, NULL, NULL, NULL, '2019-11-14 03:26:15', NULL),
	(2, 'Blog Title 2', 'post-2', 'Blog post content goes here..', NULL, 1, '2019-11-14', 'post.jpg', 1, NULL, NULL, NULL, '2019-11-14 03:26:15', NULL),
	(3, 'Blog Title 3', 'post-3', 'Blog post content goes here..', NULL, 1, '2019-11-14', 'post.jpg', 1, NULL, NULL, NULL, '2019-11-14 03:26:15', NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table lms58.publishers
DROP TABLE IF EXISTS `publishers`;
CREATE TABLE IF NOT EXISTS `publishers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.publishers: 3 rows
/*!40000 ALTER TABLE `publishers` DISABLE KEYS */;
INSERT INTO `publishers` (`id`, `name`, `slug`, `address`, `created_at`, `updated_at`) VALUES
	(1, 'Alloy Entertainment', 'alloy-entertainment', 'New York, USA', NULL, NULL),
	(2, 'Vasha Chitro', 'vasha-chitro', 'Dhaka, Bangladesh', NULL, NULL),
	(3, 'Japan Publisher', 'japan-publisher', 'Japan', NULL, NULL);
/*!40000 ALTER TABLE `publishers` ENABLE KEYS */;

-- Dumping structure for table lms58.requestedbooks
DROP TABLE IF EXISTS `requestedbooks`;
CREATE TABLE IF NOT EXISTS `requestedbooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `action_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.requestedbooks: 1 rows
/*!40000 ALTER TABLE `requestedbooks` DISABLE KEYS */;
INSERT INTO `requestedbooks` (`id`, `book_id`, `user_id`, `status`, `action_date`, `created_at`, `updated_at`) VALUES
	(1, 1, 3, 'accepted', '2019-11-14', '2019-11-14 03:30:19', '2019-11-14 03:31:20');
/*!40000 ALTER TABLE `requestedbooks` ENABLE KEYS */;

-- Dumping structure for table lms58.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.roles: 3 rows
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', NULL, NULL, NULL),
	(2, 'Librarian', 'librarian', NULL, NULL, NULL),
	(3, 'Member', 'member', NULL, NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table lms58.series
DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.series: 3 rows
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Harry Porter', 'harry-porter', NULL, NULL),
	(2, 'The God Father', 'the-god-father', NULL, NULL),
	(3, 'Twilight', 'twilight', NULL, NULL);
/*!40000 ALTER TABLE `series` ENABLE KEYS */;

-- Dumping structure for table lms58.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_page` int(11) NOT NULL DEFAULT '0',
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_per_page` int(11) NOT NULL DEFAULT '0',
  `blog_per_page` int(11) NOT NULL DEFAULT '0',
  `withsidebar_per_page` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.settings: 2 rows
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `site_name`, `email`, `phone`, `per_page`, `currency`, `home_per_page`, `blog_per_page`, `withsidebar_per_page`, `created_at`, `updated_at`) VALUES
	(1, 'LIB MS', 'admin@admin.com', NULL, 0, NULL, 0, 0, 0, NULL, NULL),
	(2, 'LIB MS', 'admin@admin.com', NULL, 0, NULL, 0, 0, 0, NULL, NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table lms58.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lms58.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Mr. Admin', 'admin@admin.com', '$2y$10$NASj5BbXNn3awdi0T7lbYu2NRL5ru9ucmROjsLnmV54M/JY8fIFvy', 1, 1, 'd2kOGXrBw3eSryug2q0Nu9qeshI2PnGussrGLPluZGoJnOtUMuLoWR9XPcyp', '2019-11-14 03:26:15', NULL),
	(2, 'Mr. Librarian', 'librarian@librarian.com', '$2y$10$cvoXgpEdtJlzpUYeGL1Lde14UqHI30rVzbpK8tNtdenEC2IVnvpPa', 2, 1, 'RYXOQ7tjb31ZpcRkuakqJhMbnW3wxY3E1PA5Omq9mGGQFunYLJ29gVSFX9LC', '2019-11-14 03:26:15', NULL),
	(3, 'Mr. Member', 'member@member.com', '$2y$10$mMbK2SFGmL0BDGssqhmuKOz8hlSDj3B9by6aV0SE2sHEEvaDp6EPi', 3, 1, '7786O4vvYzarB1Wsr8dxz8EMvqp5jMfOI0wCsCcbWOgO0sIeBFJ8dqAkPWxE', '2019-11-14 03:26:15', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
