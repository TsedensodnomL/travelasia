-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2019 at 08:14 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `photo`) VALUES
(1, 'Усан аялал', NULL),
(2, 'Явган аялал', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `description`) VALUES
(1, 'Орос улс Байгаль нуур', 'Байгаль нуур нь Орос улсын урд хэсэгт оршдог дэлхийн хамгийн тунгалаг нуур юм.'),
(2, 'Орос улс Кавказын нуруу', 'kj;lkj;lkj');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` varchar(9) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `traveler_number` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_order_user1_idx` (`user_username`),
  KEY `fk_order_travel1_idx` (`travel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_username`, `travel_id`, `traveler_number`, `date`) VALUES
('191108001', 'claude', 191028001, 22, '2019-11-08 23:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

DROP TABLE IF EXISTS `travel`;
CREATE TABLE IF NOT EXISTS `travel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` double NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_travel_travel_category1_idx` (`category_id`),
  KEY `fk_travel_location1_idx` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=191028002 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `name`, `description`, `price`, `start`, `end`, `category_id`, `location_id`) VALUES
(121, 'Tsedensodnom Lkhagvasuren', 'хувьцаа', 444, '2019-11-11', '2019-11-15', 2, 2),
(191028001, 'Байгаль нуур', '3 хоногийн турш Байгаль нуураар завьтай аялах энэхүү аялал маань сайхан байх болно.', 250000, '2019-10-28', '2019-10-31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phone` varchar(8) DEFAULT NULL,
  `user_type_code` char(1) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `phone_UNIQUE` (`phone`),
  KEY `fk_user_user_type_idx` (`user_type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `firstname`, `lastname`, `birthdate`, `gender`, `nationality`, `email`, `password`, `phone`, `user_type_code`) VALUES
('B170910038', NULL, NULL, '1999-07-07', NULL, NULL, 'ltsedee@gmail.com', '4', NULL, 'U'),
('claude', 'Tsedensodnom', 'Lkhagvasuren', '2000-10-15', 'Male', 'Mongolia', 'claudeburbank@gmail.com', 'Woosh', '95900501', 'U'),
('lol', NULL, NULL, NULL, NULL, NULL, 'asdf@gmail.com', '454545', NULL, 'U'),
('lol1', NULL, NULL, NULL, NULL, NULL, 'asadf@gmail.com', '111111', NULL, 'U'),
('whitepigeon', 'Tsedensodnom', 'Lkhagvasuren', '2019-10-27', 'Male', NULL, 'cla@gmail.com', '879879797', '9', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `code` char(1) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`code`, `type`) VALUES
('A', 'Admin'),
('O', 'Operator'),
('U', 'User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_travel` FOREIGN KEY (`travel_id`) REFERENCES `travel` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_user` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `travel`
--
ALTER TABLE `travel`
  ADD CONSTRAINT `fk_travel_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_travel_location` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_type` FOREIGN KEY (`user_type_code`) REFERENCES `user_type` (`code`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
