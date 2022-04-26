-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 12:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codedabble`
--

-- --------------------------------------------------------

--
-- Table structure for table `forumquestion`
--

CREATE TABLE `forumquestion` (
  `id` int(11) NOT NULL,
  `forum_title` text NOT NULL,
  `forum_body` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumquestion`
--

INSERT INTO `forumquestion` (`id`, `forum_title`, `forum_body`, `slug`, `user_id`, `created_at`) VALUES
(105, 'jepoy dizon', '<p>tanginaaaaaaaaa</p>', 'jepoy-dizon', 28, '2022-04-26 17:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `forumreply`
--

CREATE TABLE `forumreply` (
  `id` int(11) NOT NULL,
  `forum_reply` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forumreply`
--

INSERT INTO `forumreply` (`id`, `forum_reply`, `post_id`, `user_id`, `created_at`) VALUES
(39, '<p>jepoyyyyy</p>', 105, 28, '2022-04-26 09:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uploaded_flleinfo` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `bio` text NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uploaded_flleinfo`, `address`, `bio`, `user_name`, `user_email`, `user_password`, `user_created_at`, `updated_at`) VALUES
(28, '1650966871_d9b66473671a6e5037dc.png', 'Unit 431 Bldg 4 Guadalupe Bliss', 'benedict is a humor writer, and his website bio reflects that. Though a lot of comic writers have a serious bio highlighting their achievements, benedict manages to amuse readers with his piece. The first line says, “benedict has been a professional humorist ever since he discovered that professional humor was a lot easier than working.”', 'benedict', 'jbareta2@gmail.com', '$2y$10$7A3XmcS.cMnfXeK6FM3BsuEYXvrRGqOH0nrwIA59cFIM09mmEj2sK', '2022-04-26 09:19:15', '2022-04-26 17:19:15'),
(29, '1650967783_4ac5ac9d7d6ce8d33097.png', '', '', 'Nielniel', 'niel@gmail.com', '$2y$10$HtPe0UdjAW81UqRRCOcD3.0CzK2s8A6ko5WV9oKudwkggjbIEwuQW', '2022-04-26 10:09:11', '2022-04-26 18:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forumquestion`
--
ALTER TABLE `forumquestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `forumreply`
--
ALTER TABLE `forumreply`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forumquestion`
--
ALTER TABLE `forumquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `forumreply`
--
ALTER TABLE `forumreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forumquestion`
--
ALTER TABLE `forumquestion`
  ADD CONSTRAINT `forumquestion_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forumreply`
--
ALTER TABLE `forumreply`
  ADD CONSTRAINT `forumreply_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `forumquestion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forumreply_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
