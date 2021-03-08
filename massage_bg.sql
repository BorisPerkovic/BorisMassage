-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2021 at 11:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `massage_bg`
--
CREATE DATABASE IF NOT EXISTS `massage_bg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `massage_bg`;

-- --------------------------------------------------------

--
-- Table structure for table `east`
--

DROP TABLE IF EXISTS `east`;
CREATE TABLE IF NOT EXISTS `east` (
  `east_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `east_name` varchar(30) NOT NULL,
  `tretman` varchar(10) NOT NULL,
  PRIMARY KEY (`east_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `east`
--

INSERT INTO `east` (`east_id`, `east_name`, `tretman`) VALUES
(1, 'Yumeiho', '2500 rsd'),
(2, 'Shiatsu', '2500 rsd'),
(3, 'Tajlandska', '4500 rsd');

-- --------------------------------------------------------

--
-- Table structure for table `pacage`
--

DROP TABLE IF EXISTS `pacage`;
CREATE TABLE IF NOT EXISTS `pacage` (
  `pacage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pacage_name` varchar(30) NOT NULL,
  `one_tretman` varchar(10) NOT NULL,
  `five_tretman` varchar(10) NOT NULL,
  `six_tretman` varchar(10) NOT NULL,
  `ten_tretman` varchar(10) NOT NULL,
  PRIMARY KEY (`pacage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pacage`
--

INSERT INTO `pacage` (`pacage_id`, `pacage_name`, `one_tretman`, `five_tretman`, `six_tretman`, `ten_tretman`) VALUES
(1, 'Limfna drenaža', '1200 rsd', '/', '6500 rsd', '/'),
(2, 'Anticelulit', '1100 rsd', '5000 rsd', '/', '10000 rsd'),
(3, 'Maderoterapija', '1400 rsd', '6500 rsd', '/', '12000 rsd');

-- --------------------------------------------------------

--
-- Table structure for table `simple`
--

DROP TABLE IF EXISTS `simple`;
CREATE TABLE IF NOT EXISTS `simple` (
  `simple_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `simple_name` varchar(30) NOT NULL,
  `three_zero` varchar(10) NOT NULL,
  `four_five` varchar(10) NOT NULL,
  `six_zero` varchar(10) NOT NULL,
  `nine_zero` varchar(10) NOT NULL,
  `twelve_zero` varchar(10) NOT NULL,
  PRIMARY KEY (`simple_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simple`
--

INSERT INTO `simple` (`simple_id`, `simple_name`, `three_zero`, `four_five`, `six_zero`, `nine_zero`, `twelve_zero`) VALUES
(1, 'Relax', '700 rsd', '1000 rsd', '1300 rsd', '1800 rsd', '2300 rsd'),
(2, 'Antristres', '800 rsd', '1100 rsd', '1400 rsd', '1900 rsd', '2400 rsd'),
(3, 'Sportska', '800 rsd', '1100 rsd', '1400 rsd', '1900 rsd', '2400 rsd'),
(4, 'Parcijalna', '700 rsd', '1000 rsd', '1300 rsd', '1800 rsd', '2000 rsd'),
(5, 'Masaža toplom čokoladom', '1000 rsd', '1300 rsd', '1600 rsd', '2100 rsd', '2500 rsd');

-- --------------------------------------------------------

--
-- Table structure for table `termins`
--

DROP TABLE IF EXISTS `termins`;
CREATE TABLE IF NOT EXISTS `termins` (
  `mesages_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `date` varchar(15) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mesages_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `termins`
--

INSERT INTO `termins` (`mesages_id`, `name_lastname`, `email`, `phone`, `comment`, `date`, `date_time`) VALUES
(6, 'Pera Peric', 'ppera@gmail.com', '4412541', 'Molio bih jedan sijacu', '2021-01-10', '2021-01-10 11:39:32'),
(7, 'Marko Mrakovic', 'mmare@gmail.com', '74185214', 'Relax da se opustim u lumbalnom delu', '2021-01-12', '2021-01-12 11:41:06'),
(8, 'Laza Lazic', 'llaza@gmail.com', '8521475', 'dsadadasda', '2021-01-09', '2021-01-09 11:42:05'),
(9, 'Mirko Mirkovic', 'mmirko@gmail.com', '7896541', 'dasdadasdsadsad', '2021-01-12', '2021-01-12 11:42:56'),
(10, 'Joca Karburator', 'jjoca@gmail.com', '3214568', 'dasdadadadsada', '2021-01-12', '2021-01-12 11:43:47'),
(11, 'Dusko Dugousko', 'dusko@gmail.com', '5289631', 'dasdadadad', '2021-01-12', '2021-01-12 11:44:57'),
(12, 'Joca Šerif', 'jole@gmail.com', '9513574', 'Pomagaj ubi me išijadikus', '2021-01-12', '2021-01-12 14:55:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
