-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 01:07 AM
-- Server version: 11.4.5-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `adding`
--

CREATE TABLE `adding` (
  `id` int(11) NOT NULL,
  `indicator` varchar(255) NOT NULL,
  `Photo_name` varchar(255) NOT NULL,
  `Photo_path` text NOT NULL,
  `Description` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adding`
--

INSERT INTO `adding` (`id`, `indicator`, `Photo_name`, `Photo_path`, `Description`, `text`, `deleted`, `date_created`, `date_updated`) VALUES
(1, 'Research and Capacity', 'screenshot011.jpg', 'added_photos/screenshot011.jpg', 'fdsfds', 'ewrtfgerf', 1, NULL, NULL),
(2, 'Thing', 'screenshot012.jpg', 'added_photos/screenshot012.jpg', 'sdfdsfsd', 'erwtergtferfd', 0, NULL, NULL),
(3, 'Research Centers', 'screenshot003.jpg', '../imgs/screenshot003.jpg', 'w', 'w', 0, NULL, NULL),
(4, 'Thing', 'OCHO.png', '../imgs/OCHO.png', 'w', 'w', 0, NULL, NULL),
(5, 'Research Units', 'OCHO.png', '../imgs/OCHO.png', 'w', 'w', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `definitions`
--

CREATE TABLE `definitions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  `indicator_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `definitions`
--

INSERT INTO `definitions` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted`, `indicator_name`) VALUES
(4, 'Creatives Works Unit', 'Innovation across academic programs by developing and managing creative research projects in arts, media, literature, and design, providing resources, mentorship, and training for researchers', '2025-03-24 05:10:32', NULL, 0, 'Research Units'),
(5, 'Creatives Works Units', 'Innovation across academic programs by developing and managing creative research projects in arts, media, literature, and design, providing resources, mentorship, and training for researchers', '2025-03-24 05:20:53', '2025-03-24 12:46:27', 0, 'Research Units'),
(8, 'sad', 'wow', '2025-03-24 05:50:39', '2025-03-24 12:46:00', 0, 'Research Units'),
(9, 'Intellectual Property & Technology Business Management - Innovation and Technology Support Office ', 'Develop and implement extension plans, programs, and innovative approaches to improve the efficiency, productivity, income, and wellbeing of out-of-school youth and other rural clients.', '2025-03-24 21:29:08', NULL, 0, 'Research Office'),
(10, 'Research Centers Operation Office', 'The RCOO is responsible for leading the organization and management of the development and  establishment of specialized research centers, ensuring operational efficiency and effectiveness of  each output.', '2025-03-24 21:31:14', NULL, 0, 'Research Office'),
(11, 'Research Ethics Oversight Committee', 'The Research Ethics and Oversight Committee (REOC) is responsible for reviewing, overseeing, and  approving all matters related to research ethics and compliance at WMSU. It provides a structured  mechanism for the academic research community to seek guid', '2025-03-24 21:31:45', NULL, 0, 'Research Office'),
(14, 'Research Development and Evaluation Center', 'The overall management framework to direct and control all Research and Development activities of the university and facilitate quality research\n        through the provision of adequate research facilities and comprehensive support services fostering a collaborative environment that generate interdisciplinary research and innovation programs, projects and activities.', '2025-03-24 21:34:19', NULL, 0, 'Research Centers'),
(15, 'Research Ethics Oversight Center', 'The Research Ethics and Oversight Committee (REOC) is responsible for reviewing, overseeing, and approving all matters related to research ethics and compliance at WMSU. It provides a structured mechanism for the academic research community to seek guidance on ethical issues that may arise during the planning and implementation of their research projects', '2025-03-24 21:36:16', NULL, 0, 'Research Centers'),
(16, 'Pure and Analytical Research Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-03-24 21:36:37', NULL, 0, 'Research Centers'),
(17, 'President’s Message', '“We make a living by what we get, but we make a life by what we give.” These wise words from Winston Churchill resonate deeply with our mission at Western Mindanao  State University. Our commitment to community service is not just a duty but a privilege. We believe that the true measure of our success lies in the positive impact  we create in the lives of those we serve.', '2025-03-24 23:18:50', NULL, 0, 'Research, Extension and External Linkages'),
(18, 'President’s Message', 'Our extension programs stand as a beacon of our dedication to imparting knowledge, developing skills, and empowering communities throughout Zamboanga City and the  entire region, all in the pursuit of creating a better life for everyone.', '2025-03-24 23:20:10', NULL, 0, 'Research, Extension and External Linkages'),
(19, 'President’s Message', 'The University Extension Manual is more than just a guide; it embodies our collective efforts to make a meaningful difference. It serves as a roadmap for our faculty, students, and stakeholders to effectively implement programs that resonate with our core values of service, excellence, and resilience. Together, let us continue to make a meaningful difference in the lives of those we serve.', '2025-03-24 23:20:54', NULL, 0, 'Research, Extension and External Linkages');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` text NOT NULL,
  `def_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `image_path`, `def_id`, `created_at`, `updated_at`) VALUES
(1, 'OCHO.png', '../imgs/OCHO.png', 19, '2025-03-25 00:17:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `indicator`
--

CREATE TABLE `indicator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indicator`
--

INSERT INTO `indicator` (`id`, `name`) VALUES
(1, 'Research and Capacity'),
(5, 'Research Centers'),
(4, 'Research Office'),
(3, 'Research Units'),
(7, 'Research, Extension and External Linkages'),
(2, 'Thing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adding`
--
ALTER TABLE `adding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idicator` (`indicator`);

--
-- Indexes for table `definitions`
--
ALTER TABLE `definitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicator_name` (`indicator_name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `def_id` (`def_id`);

--
-- Indexes for table `indicator`
--
ALTER TABLE `indicator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adding`
--
ALTER TABLE `adding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `definitions`
--
ALTER TABLE `definitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indicator`
--
ALTER TABLE `indicator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adding`
--
ALTER TABLE `adding`
  ADD CONSTRAINT `adding_ibfk_1` FOREIGN KEY (`indicator`) REFERENCES `indicator` (`name`);

--
-- Constraints for table `definitions`
--
ALTER TABLE `definitions`
  ADD CONSTRAINT `definitions_ibfk_1` FOREIGN KEY (`indicator_name`) REFERENCES `indicator` (`name`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`def_id`) REFERENCES `definitions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
