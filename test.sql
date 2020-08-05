-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 04:31 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(2500) NOT NULL,
  `last_name` varchar(2500) NOT NULL,
  `email` varchar(2500) NOT NULL,
  `password` varchar(2500) NOT NULL,
  `profile_image` varchar(250) NOT NULL,
  `bio` varchar(2500) NOT NULL,
  `website` varchar(250) NOT NULL,
  `online_offline` varchar(250) NOT NULL,
  `posts` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_image`, `bio`, `website`, `online_offline`, `posts`, `date`) VALUES
(1, 'Manas ', 'Makkar', 'makkarsabh333@gmail.com', '$2y$10$fG48EEk.RyePktdyisbA1.ZnNC70N2Lr23kJoiWeEjbUz4zpu/B6q', 'profile_image/profile_image.jpg', 'bio', 'website', 'online', 'No', '2020-08-04 11:02:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
