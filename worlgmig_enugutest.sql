-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2022 at 04:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enuguscitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'manager',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fullname`, `phone`, `category`, `updated_at`, `created_at`) VALUES
(1, 'Godson Pius', '+2348147871946', 'iot', '2022-04-05 23:25:11', '2022-04-05 23:25:11'),
(2, '\n    Please fill in all the fields!\n', '+2348147871946', 'ti', '2022-04-05 23:27:35', '2022-04-05 23:27:35'),
(3, 'Test Fullname', '09223899348', 'Tech Ideas', '2022-04-05 23:32:19', '2022-04-05 23:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_image` text NOT NULL,
  `article_desc` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_image`, `article_desc`, `updated_at`, `created_at`) VALUES
(1, 'First Article', 'TSAECC EASTER 2022 PROGRAMME DESIGN. 31.3..jpg', 'This is the first article to be addedddd', '2022-04-05 14:46:25', '2022-04-05 14:46:25'),
(6, 'The General Article', 'crusified and risen.jpg', 'An article from the heart', '2022-04-05 17:51:53', '2022-04-05 17:51:53'),
(7, 'h n', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'jhgjh', '2022-04-05 21:01:39', '2022-04-05 21:01:39'),
(8, 'hgvh', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'hhgf', '2022-04-05 21:02:21', '2022-04-05 21:02:21'),
(9, 'hgchg', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'hfh', '2022-04-05 21:03:16', '2022-04-05 21:03:16'),
(10, 'yjyh', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'kjkk', '2022-04-05 21:04:18', '2022-04-05 21:04:18'),
(11, 'loll', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'jjui', '2022-04-05 21:07:43', '2022-04-05 21:07:43'),
(12, 'jik', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'knlh', '2022-04-05 21:08:15', '2022-04-05 21:08:15'),
(13, 'wdwd', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'wdwd', '2022-04-05 21:08:45', '2022-04-05 21:08:45'),
(14, 'dwd', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'wdwd', '2022-04-05 21:09:21', '2022-04-05 21:09:21'),
(15, 'dq', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'dqdq', '2022-04-05 21:09:42', '2022-04-05 21:09:42'),
(16, 'wdwd', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'wdwd', '2022-04-05 21:11:14', '2022-04-05 21:11:14'),
(17, 'ggh', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'kjkj,', '2022-04-05 21:16:02', '2022-04-05 21:16:02'),
(18, 'iook', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'olok', '2022-04-05 21:17:23', '2022-04-05 21:17:23'),
(19, 'iok', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'kjnkj', '2022-04-05 21:18:02', '2022-04-05 21:18:02'),
(20, 'okj', 'TSAECC EASTER 2022 PROGRAMME DESIGN. 31.3..jpg', 'ukj', '2022-04-05 21:19:08', '2022-04-05 21:19:08'),
(21, 'uyfjhf', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'kjgjmg', '2022-04-05 21:19:54', '2022-04-05 21:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'Prince Godson', 'goddypius123@gmail.com', '08147871946', 'dd', 'dd', '2022-04-06 15:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `email_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `email`, `created_at`) VALUES
(1, 'goddypius123@gmail.com', '2022-04-06 09:50:46'),
(2, 'test@test.com', '2022-04-06 09:58:56'),
(3, 'gentlecrypto@mail.com', '2022-04-06 10:00:24'),
(4, 'gentlecrypto@mail.com', '2022-04-06 10:00:30'),
(5, 'gentlecrypto@mail.com', '2022-04-06 10:01:04'),
(6, 'gentlecrypto@mail.com', '2022-04-06 10:01:05'),
(7, 'isaiah@yahoo.com', '2022-04-06 10:02:47'),
(8, '1', '2022-04-06 10:10:21'),
(9, '1', '2022-04-06 10:10:27'),
(10, 'goddypius123@gmail.com', '2022-04-06 10:11:53'),
(11, 'godsonazubuike15@gmail.com', '2022-04-06 10:12:16'),
(12, 'dd@dd.com', '2022-04-06 10:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_desc` text NOT NULL,
  `event_image` text NOT NULL,
  `event_motivation` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_location` varchar(155) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_desc`, `event_image`, `event_motivation`, `event_date`, `event_time`, `event_location`, `updated_at`, `created_at`) VALUES
(1, 'First Outing Event', 'First of them all', 'bible study.jpg', 'Do not miss it', '2022-04-08', '14:12:00', 'Shoprite Mall', '2022-03-30 00:10:58', '2022-03-30 00:10:58'),
(8, 'Chairman&#39;s Celebration', 'Don&#39;t just miss out', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'Be stron in what you fit&#39;s', '2022-04-09', '12:31:00', 'Enugu Full Campp', '2022-03-30 00:30:04', '2022-03-30 00:30:04'),
(20, 'Title', 'wwdwd', 'Copy of breakthrough - Made with PosterMyWall.jpg', 'dwdwdwd', '2022-04-13', '04:42:00', 'hfyr', '2022-04-05 15:42:04', '2022-04-05 15:42:04'),
(21, 'WWEEE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nihil itaque similique provident dignissimos molestiae nisi tempora magnam consectetur labore sapiente pariatur ipsum eveniet reiciendis voluptates fuga ex, sint veniam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit sit libero corporis animi eveniet earum officia consectetur pariatur nulla praesentium incidunt, non impedit dolore nobis? Expedita fugit cum reprehenderit commodi.', 'crusified and risen.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nihil itaque similique provident dignissimos molestiae nisi tempora magnam consectetur labore sapiente pariatur ipsum eveniet reiciendis voluptates fuga ex, sint veniam. Lorem ipsum dolor, sit amet consectetur adipisicing elit.', '2022-04-30', '08:00:00', 'Enugu', '2022-04-05 16:57:33', '2022-04-05 16:57:33'),
(22, 'dd', 'dwd', 'crusified and risen.jpg', 'wdwd', '2022-04-06', '21:23:00', 'dd', '2022-04-05 21:23:46', '2022-04-05 21:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_desc` text NOT NULL,
  `handled_by` varchar(255) NOT NULL,
  `project_cat` varchar(255) NOT NULL DEFAULT 'Tech',
  `project_image` text NOT NULL,
  `date_completed` date NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_desc`, `handled_by`, `project_cat`, `project_image`, `date_completed`, `updated_at`, `created_at`) VALUES
(1, 'Enugu West Training', 'Teaching', 'Special Assistant', 'Teaching', 'Copy of breakthrough - Made with PosterMyWall.jpg', '2022-04-29', '2022-04-04 20:39:03', '2022-04-04 20:39:03'),
(4, 'Edited Project', 'jvjhv', 'Special Assistant', 'Teaching', 'Copy of Easter flyer - Made with PosterMyWall.jpg', '2022-04-28', '2022-04-04 21:30:17', '2022-04-04 21:30:17'),
(5, 'e', 'ddd', 'Special Assistant', 'Teaching', 'austin-schmid-65F-502joDA-unsplash.jpg', '2022-05-06', '2022-04-05 21:24:19', '2022-04-05 21:24:19'),
(6, 'The Move', 'dedwd', 'Special Assistant', 'Teaching', 'bible study.jpg', '2022-04-07', '2022-04-06 14:48:41', '2022-04-06 14:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
