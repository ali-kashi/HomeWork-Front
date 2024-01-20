-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2023 at 01:41 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_first`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarkproduct`
--

DROP TABLE IF EXISTS `bookmarkproduct`;
CREATE TABLE IF NOT EXISTS `bookmarkproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `pid` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bookmarkproduct`
--

INSERT INTO `bookmarkproduct` (`id`, `uid`, `pid`, `state`) VALUES
(1, '1', '3', 'noaction');

-- --------------------------------------------------------

--
-- Table structure for table `likeproduct`
--

DROP TABLE IF EXISTS `likeproduct`;
CREATE TABLE IF NOT EXISTS `likeproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `pid` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `pid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `pValue` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `plaque` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `unit` varchar(2) COLLATE utf8_persian_ci NOT NULL,
  `postalCode` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `contactNumber` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `data` date NOT NULL,
  `state` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `property` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `property`, `url`) VALUES
(2, ' موبایل سامسونگ a12', 3000000, 'دوربین 16', 'a12.jpg'),
(3, 'a02', 3500000, 'حافظه 64', 'a02.jpg'),
(8, 'a72', 20000000, 'حافظه 256 گیگ', '49f4f2be1e7982cf969ab86cd14ae14ff694d32c_1617615069.jpg'),
(9, 'a11', 4000000, ' ', 'a11.jpg'),
(10, 'a22', 6000000, ' ', 'a22.jpg'),
(11, 'a32', 7500000, ' ', 'a32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productbasket`
--

DROP TABLE IF EXISTS `productbasket`;
CREATE TABLE IF NOT EXISTS `productbasket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `pid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `value` int(11) NOT NULL,
  `state` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productfeedback`
--

DROP TABLE IF EXISTS `productfeedback`;
CREATE TABLE IF NOT EXISTS `productfeedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `pid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `comment` text COLLATE utf8_persian_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `phone` text COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `role`) VALUES
(1, 'علی کاشی', '09100000000', 'info@gmail.com', '123456789', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
