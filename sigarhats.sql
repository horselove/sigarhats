-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Vært: localhost:8889
-- Genereringstid: 20. 11 2014 kl. 13:03:15
-- Serverversion: 5.5.38
-- PHP-version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sigarhats`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `avatar_genders`
--

CREATE TABLE `avatar_genders` (
`id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `concepts`
--

INSERT INTO `concepts` (`id`, `name`, `description`) VALUES
(1, 'Two-of-a-kind', 'Is the shit'),
(2, 'Residual-materials', 'Residual-materials');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `contacts`
--

CREATE TABLE `contacts` (
`id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `subejct` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `films`
--

CREATE TABLE `films` (
`id` int(28) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `embed_url` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `filmType` int(11) NOT NULL,
  `landingpage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `films`
--

INSERT INTO `films` (`id`, `title`, `embed_url`, `img`, `filmType`, `landingpage`) VALUES
(2, 'story of sigar', '//player.vimeo.com/video/108940057', '14963593483_a60a96ff4e_c.jpg', 1, 1),
(3, 'good movie sigar', '//player.vimeo.com/video/108940057', '95643113@N03.jpg', 2, 0),
(4, 'akda', '//player.vimeo.com/video/108940057', '14963593483_a60a96ff4e_c.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `filmtypes`
--

CREATE TABLE `filmtypes` (
`id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `filmtypes`
--

INSERT INTO `filmtypes` (`id`, `order`, `name`) VALUES
(1, 9, 'Shortfilmsss'),
(2, 3, 'johnadasadas'),
(3, 2, 'john oh'),
(4, 1, 'new film type');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `images`
--

CREATE TABLE `images` (
`id` int(11) NOT NULL,
  `src` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `feature_images` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `materials`
--

CREATE TABLE `materials` (
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `materials`
--

INSERT INTO `materials` (`id`, `name`, `img`, `dir`) VALUES
(1, 'sweet material', 'balmoral_wool.jpg', '1'),
(2, 'blue texture', 'download (1).jpeg', '2'),
(3, 'Cashmire finest', 'download.jpeg', '3');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `productitems`
--

CREATE TABLE `productitems` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `number` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `size_id` int(11) NOT NULL,
  `necklable_id` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `reseller_id` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `productitems`
--

INSERT INTO `productitems` (`id`, `product_id`, `created`, `number`, `size_id`, `necklable_id`, `reseller_id`, `sold`) VALUES
(62, 85, '2014-11-20 11:34:03', '', 2, '4827-85', 1, 0),
(63, 85, '2014-11-20 11:34:24', '', 1, '4855-85', 10, 0),
(65, 79, '2014-11-20 11:44:18', '1', 1, '5444-79', 9, 0),
(66, 79, '2014-11-20 11:46:04', '2', 1, '5558-79', 9, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
`id` int(11) NOT NULL,
  `concept_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `active` int(1) NOT NULL,
  `featured` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`, `concept_id`, `collection_id`, `name`, `description`, `version`, `price`, `active`, `featured`) VALUES
(79, 1, 1, 'silas 2', '<p>yooy</p>', '2', 233, 1, 0),
(80, 2, 1, 'asdasd', '<p>dasd;asd;asds</p><p>asd</p><p>asd</p><p>asd</p><p style="margin-left: 60px;">as22</p>', 'dasdasda', 122, 1, 1),
(82, 1, 1, 'Sigar hat', '<p>Den er god</p><ul><li>cotton</li><li>wool</li></ul>', '1', 211, 1, 1),
(83, 1, 1, 'johnshow', '<p>den er god</p><p style="margin-left: 20px;">foofo</p>', '232', 222, 1, 0),
(84, 2, 1, 'john', '<p>silas er sÃ¸d</p>', '2', 200, 1, 1),
(86, 1, 1, 'john', '<p>bbu</p>', '2', 300, 1, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `resellers`
--

CREATE TABLE `resellers` (
`id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `resellers`
--

INSERT INTO `resellers` (`id`, `name`, `address`, `img`, `url`, `order`) VALUES
(1, 'Sigar hats & caps basement', 'Glentevej', '', 'sigarhats.com', 1),
(9, 'john', '<p style="margin-left: 20px;">johnjohn</p><p style="margin-left: 60px;">kdk</p>', '29343666@N02.jpg', 'www.suckgogogo.com', 0),
(10, 'John store', '<p style="margin-left: 20px;">Ã¸rnevej 450 st tv</p>', '34789654@N02.jpg', 'pornhub.com', 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sizes`
--

CREATE TABLE `sizes` (
`id` int(11) NOT NULL,
  `name` varchar(28) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, '55 CM'),
(2, '56 CM');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `stories`
--

CREATE TABLE `stories` (
`id` int(11) NOT NULL,
  `langues` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `headline` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `story` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `stories`
--

INSERT INTO `stories` (`id`, `langues`, `headline`, `story`) VALUES
(1, 'Dansk', 'Historien om Sigar Hats & Caps', '<h2>SIGAR Hats &amp; Caps er en lille virksomhed, med store ambitioner.</h2><p>I midten af 2009 befandt jeg mig pludselig uden fodfÃ¦ste pÃ¥ min livsrejse. SÃ¸gende efter en meningsfuld uddannelse, samt et Ã¸nske om igen, at have et sted at bo i min hjemby part 3, KÃ¸benhavn! En kamp for fast bopÃ¦l mange unge kÃ¸benhavnere igen og igen kastes ud i, sÃ¦nkede med gentagende nederlags ekstra tyngde, mine knÃ¦ og mit blik lÃ¦ngere og lÃ¦ngere nedad.â€¨Min vilje var ved at vÃ¦re mÃ¦t af dage, og jeg besluttede derfor at rejse bort i en tid&hellip; &nbsp;</p><p><img src="http://upload.wikimedia.org/wikipedia/commons/4/49/Jydske_heste_vorup_enge.jpg"></p>'),
(2, 'English', 'The story of Sigar Hats & Caps', '<h2>Sigar Hats &amp; Caps are a small company with big ambitions .</h2><p>	In mid-2009, I suddenly found myself without a foothold in my life journey . Searching for a meaningful education, and a desire again , to have a place to stay in my hometown part 3 , Copenhagen ! A fight for permanent residence many young locals again and again thrown into lowered with repeated bottom layer extra weight , my knees and my eyes further and further down. My will was to be full of days , and I decided to go away for a while.</p><p>image1</p><p>IMAGE2</p><p>IMAGE3</p>');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(11) NOT NULL,
  `name` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `gender_id` int(1) NOT NULL,
  `email` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(38) COLLATE utf8_unicode_ci NOT NULL,
  `productitem_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data dump for tabellen `user_avatars`
--

INSERT INTO `user_avatars` (`id`, `name`, `location`, `birth`, `gender_id`, `email`, `img`, `productitem_id`) VALUES
(1, 'Adam Zaken', 'Copenhagen', '280390', 1, 'adamzakenweb@gmail.com', 'somerandom.jpg', 1),
(2, 'John Zaken', 'UK', '2929392', 2, 'something@gmail.com', 'jjehah.jpeg', 0),
(3, 'Emil Johnson', 'Frb', '020490', 2, 'jsjsi@gmail.com', 'jsjsj.jpg', 0);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `avatar_genders`
--
ALTER TABLE `avatar_genders`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `collections`
--
ALTER TABLE `collections`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `concepts`
--
ALTER TABLE `concepts`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `films`
--
ALTER TABLE `films`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `filmtypes`
--
ALTER TABLE `filmtypes`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `materials`
--
ALTER TABLE `materials`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `productitems`
--
ALTER TABLE `productitems`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `resellers`
--
ALTER TABLE `resellers`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indeks for tabel `sizes`
--
ALTER TABLE `sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `stories`
--
ALTER TABLE `stories`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `user_avatars`
--
ALTER TABLE `user_avatars`
 ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `avatar_genders`
--
ALTER TABLE `avatar_genders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tilføj AUTO_INCREMENT i tabel `collections`
--
ALTER TABLE `collections`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `concepts`
--
ALTER TABLE `concepts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `films`
--
ALTER TABLE `films`
MODIFY `id` int(28) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tilføj AUTO_INCREMENT i tabel `filmtypes`
--
ALTER TABLE `filmtypes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tilføj AUTO_INCREMENT i tabel `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `materials`
--
ALTER TABLE `materials`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tilføj AUTO_INCREMENT i tabel `productitems`
--
ALTER TABLE `productitems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- Tilføj AUTO_INCREMENT i tabel `resellers`
--
ALTER TABLE `resellers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Tilføj AUTO_INCREMENT i tabel `sizes`
--
ALTER TABLE `sizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `stories`
--
ALTER TABLE `stories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Tilføj AUTO_INCREMENT i tabel `user_avatars`
--
ALTER TABLE `user_avatars`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
