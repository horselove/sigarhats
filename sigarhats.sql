-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 08 2014 kl. 14:45:37
-- Serverversion: 5.5.32
-- PHP-version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sigarhats`
--
CREATE DATABASE IF NOT EXISTS `sigarhats` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sigarhats`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `avatar_gender`
--

CREATE TABLE IF NOT EXISTS `avatar_gender` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `avatar_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `avatar_gender`
--

INSERT INTO `avatar_gender` (`gender_id`, `avatar_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'anonymous');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `collections`
--

INSERT INTO `collections` (`id`, `name`) VALUES
(1, '2013'),
(2, '2014');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `concepts`
--

CREATE TABLE IF NOT EXISTS `concepts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `concepts`
--

INSERT INTO `concepts` (`id`, `name`, `description`) VALUES
(1, 'Two-of-a-kind', 'Two-of-a-kind'),
(2, 'Residual-materials', 'Residual-materials');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size_id` int(11) NOT NULL,
  `concept_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `active` int(1) NOT NULL,
  `featured` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`, `size_id`, `concept_id`, `collection_id`, `name`, `description`, `price`, `active`, `featured`) VALUES
(1, 1, 1, 1, 'Emil fladhjul', 'hahdashdhadhahd', 233, 1, 1),
(2, 1, 1, 1, 'Baseball cap', 'Gode gamele baseball cap', 500, 1, 0),
(3, 2, 2, 1, 'johnjohn', 'HALLAJHAS', 233.5, 0, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_imgs`
--

CREATE TABLE IF NOT EXISTS `product_imgs` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fk_product` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `feature_images` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, '55'),
(2, '56');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(7, 'admin', '0c5ea0d43e32ac030dbf382d86286e0a55c3d5a3', 'admin', '2014-08-22 11:41:39', '2014-08-22 11:41:39'),
(8, 'hej', '72486a429136038963d3e4d04636579e131fb1af', 'admin', '2014-08-26 10:50:34', '2014-08-26 10:50:34');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user_avatar`
--

CREATE TABLE IF NOT EXISTS `user_avatar` (
  `avatar_id` int(11) NOT NULL AUTO_INCREMENT,
  `avatar_necklabel` int(11) NOT NULL,
  `fk_product` int(11) NOT NULL,
  `avatar_name` int(11) NOT NULL,
  `avatar_state` int(11) NOT NULL,
  `avatar_location` int(11) NOT NULL,
  `avatar_birth` int(11) NOT NULL,
  `fk_gender` int(11) NOT NULL,
  `avatar_email` int(11) NOT NULL,
  `avatar_img` int(11) NOT NULL,
  PRIMARY KEY (`avatar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
