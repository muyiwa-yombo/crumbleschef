-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2021 at 09:13 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crumbleschef`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(7, 'muyiwayom@gmail.com', 'f911c75873b50039b9462bea0af0e0ef');

-- --------------------------------------------------------

--
-- Table structure for table `bannerdetails`
--

DROP TABLE IF EXISTS `bannerdetails`;
CREATE TABLE IF NOT EXISTS `bannerdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(500) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(200) NOT NULL,
  `linkto` varchar(100) NOT NULL,
  `linktext` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bannerdetails`
--

INSERT INTO `bannerdetails` (`id`, `description`, `dateAdded`, `title`, `linkto`, `linktext`, `image`) VALUES
(1, 'this is a school for you', '2021-10-23 21:53:03', 'welcome to crumbles chef academy', 'about', 'about us', 'bannerimages/home.jpg'),
(2, 'this is a school for you', '2021-10-23 21:53:59', 'welcome to crumbles chef academy', 'about', 'about us', 'bannerimages/home.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `instagram` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `linkedin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `youtube` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`name`, `title`, `description`, `twitter`, `instagram`, `facebook`, `linkedin`, `youtube`, `image`, `id`, `date_added`) VALUES
('Ibukun yombo', 'junior chef', 'ibukun is a junior chef coming from crumbles chef academy', '', '', '', '', '', 'teamimages/home.jpg', 1, '2021-10-24 08:18:26'),
('Ibukun yombo', 'junior chef', 'ibukun is a junior chef coming from crumbles chef academy', '', '', '', '', '', 'teanimages/home.jpg', 2, '2021-10-24 08:18:46'),
('Ibukun yombo', 'junior chef', 'ibukun is a junior chef coming from crumbles chef academy', '', '', '', '', '', 'teanimages/home.jpg', 3, '2021-10-24 08:18:54'),
('Ibukun yombo', 'junior chef', 'ibukun is a junior chef coming from crumbles chef academy', '', '', '', '', '', 'teanimages/home.jpg', 4, '2021-10-24 08:18:58'),
('Ibukun yombo', 'junior chef', 'ibukun is a junior chef coming from crumbles chef academy', '', '', '', '', '', 'teanimages/home.jpg', 5, '2021-10-24 08:19:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
