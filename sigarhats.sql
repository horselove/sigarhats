-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Vært: localhost:8889
-- Genereringstid: 08. 09 2014 kl. 14:58:13
-- Serverversion: 5.5.34
-- PHP-version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sigarhats`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `avatar_genders`
--

CREATE TABLE `avatar_genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `avatar_genders`
--

INSERT INTO `avatar_genders` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'anonymous');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `collections`
--

INSERT INTO `collections` (`id`, `name`) VALUES
(1, '2014'),
(2, '2013');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `concepts`
--

CREATE TABLE `concepts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Data dump for tabellen `concepts`
--

INSERT INTO `concepts` (`id`, `name`, `description`) VALUES
(1, 'Two-of-a-kind', 'Is the shit'),
(2, 'Residual-materials', 'Residual-materials'),
(4, 'deb er godss', 'dsada hej');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Data dump for tabellen `materials`
--

INSERT INTO `materials` (`id`, `name`, `img`, `img_dir`) VALUES
(18, 'asdasd', 'Fotografi den 31-08-14 kl. 13.09.jpg', '18');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=67 ;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`, `size_id`, `concept_id`, `collection_id`, `name`, `description`, `price`, `active`, `featured`) VALUES
(1, 1, 2, 1, 'Emil fladhjul', 'hahdashdhadhahd', 233, 1, 1),
(2, 1, 1, 1, 'Baseball cap', 'Gode gamele baseball cap', 500, 1, 0),
(58, 1, 1, 1, 'john', 'john', 233, 1, 1),
(62, 2, 2, 1, 'asdasd', 'asdas', 3232, 0, 0),
(63, 1, 2, 1, 'hej', 'hej', 32, 0, 0),
(64, 1, 1, 1, 'john john', 'asda', 2323, 1, 0),
(66, 1, 2, 1, 'john', 'den er fed', 233, 1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_imgs`
--

CREATE TABLE `product_imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `feature_images` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Data dump for tabellen `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, '55 CM'),
(2, '56 CM');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(7, 'admin', '0c5ea0d43e32ac030dbf382d86286e0a55c3d5a3', 'admin', '2014-08-22 11:41:39', '2014-08-22 11:41:39'),
(8, 'hej', '72486a429136038963d3e4d04636579e131fb1af', 'admin', '2014-08-26 10:50:34', '2014-08-26 10:50:34'),
(9, 'john', '6cbcb4da9badd9d2dc62d3dafe2668a125d47ccd', 'admin', '2014-09-04 11:27:56', '2014-09-04 11:27:56');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user_avatars`
--

CREATE TABLE `user_avatars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `necklabel` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `gender_id` int(1) NOT NULL,
  `email` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `user_avatars`
--

INSERT INTO `user_avatars` (`id`, `necklabel`, `product_id`, `name`, `location`, `birth`, `gender_id`, `email`, `img`, `size_id`) VALUES
(1, 'john john', 1, 'Adam Zaken', 'Copenhagen', '280390', 1, 'adamzakenweb@gmail.com', 'somerandom.jpg', 0),
(2, 'johnjohn', 2, 'John Zaken', 'UK', '2929392', 2, 'something@gmail.com', 'jjehah.jpeg', 0),
(3, 'hansi-29293#222', 1, 'Emil Johnson', 'Frb', '020490', 2, 'jsjsi@gmail.com', 'jsjsj.jpg', 0);
