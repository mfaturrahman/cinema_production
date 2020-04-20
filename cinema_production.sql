-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 08:01 AM
-- Server version: 10.1.36-MariaDB
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
-- Database: `cinema_production`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `author`, `category`, `tag`, `date`, `thumbnail`) VALUES
(2, 'Wisuda Poli Media Makassar', '<p><span style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; font-size: 15px;\">Wisuda PoliMedia Makassar Angkatan 6</span><br></p>', 'admin', 'dokumentasi', 'a:2:{i:0;s:11:\"dokumentasi\";i:1;s:6:\"berita\";}', '2020-04-19', 'single_blog_1.png'),
(3, 'Pameran Seni', '<p><span style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; font-size: 15px;\">Pameran Karya seni yang dilakukan di gedung Gubernur Makassar</span><br></p>', 'admin', 'Seni', 'a:2:{i:0;s:6:\"berita\";i:1;s:4:\"seni\";}', '2020-04-20', 'single_blog_2.png'),
(4, 'Wisata Bulukumba', '<p><span style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; font-size: 15px;\">Bulukumba mempunyai banyak wisata yang salah satunya adalah</span><br></p>', 'admin', 'travel', 'a:2:{i:0;s:6:\"travel\";i:1;s:9:\"lifestyle\";}', '2020-04-20', 'single_blog_3.png'),
(6, 'Lappalaona', '<p><span style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; font-size: 15px;\">Lappalaona adalah gunung yang ada di barru</span><br></p>', 'admin', 'travel', 'a:2:{i:0;s:9:\"lifestyle\";i:1;s:6:\"travel\";}', '2020-04-20', 'single_blog_5.png'),
(7, 'Sunset Takalar', '<p>Sunset Takalar<br></p>', 'admin', 'travel', 'a:2:{i:0;s:6:\"travel\";i:1;s:9:\"lifestyle\";}', '2020-04-20', 'single_blog_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `editor` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `editor`, `date`) VALUES
(1, 'About', '<p><b>Adalah</b> sebuah Production House yang di dirikan sekitar setahun yang lalu oleh beberapa mahasiswa PoliMedia, Latar belakang Berdirinya PH ini adalah karena beberapa mahasiswa tersebut sering di juluki kupu-kupu oleh teman-teman seangkatannya maupun senior mereka jadi mereka ingin membuktikan bahwa kupu-kupu itu bukan kuliah lalu pulang saja, tetapi kuliah lalu produktif</p>', 'admin', '2020-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `start_date` date NOT NULL,
  `end_time` time NOT NULL,
  `end_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `category`, `thumbnail`, `start_time`, `start_date`, `end_time`, `end_date`, `address`, `content`) VALUES
(1, 'Weeding Samwinaldy', 1, 'single_project_item_1.png', '14:00:00', '2019-09-15', '18:00:00', '2019-09-15', 'Citra Land, Makassar 90242', '<h2 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; line-height: 50px; font-size: 36px; color: rgb(24, 32, 40); font-family: Oswald, sans-serif;\">Pasca Weeding Samwinaldy dan Radiah Qoirunnisa</h2><p style=\"margin-bottom: 0px; font-family: Roboto, sans-serif; line-height: 28px; font-size: 15px; color: rgb(136, 136, 136);\">Samwinaldy dan Radiah Qoirunnisa adalah sepasang kekasih yang kebetulan mengenal salah satu anggota kami dan menyewa jasa kami untuk acara resepsi dan Pasca Weeding</p><p><br style=\"color: rgb(33, 37, 41); font-family: Roboto, sans-serif; font-size: 14px;\"></p><h4 style=\"margin-bottom: 28px; line-height: 1.2em; font-size: 22px; color: rgb(24, 32, 40); font-family: Oswald, sans-serif; text-transform: uppercase;\">DESKRIPSI PROJECT</h4><p style=\"margin-bottom: 0px; font-family: Roboto, sans-serif; line-height: 28px; font-size: 15px; color: rgb(136, 136, 136);\">Project ini adalah salah satu project pertama yang di kerjakan oleh tim kami, walaupun kami mengalami beberapa masalah seperti batre yang tidak mencukupi tapi kami jadi mengetahui cara untuk mengatasi masalah tersebut</p><p><img src=\"http://localhost/cinema_production/assets/img/gallery/single_project_item_2.png\" alt=\"\" style=\"max-width: 100%; width: 869.328px; margin: 50px 0px; color: rgb(33, 37, 41); font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: Roboto, sans-serif; font-size: 14px;\"></span></p><h4 style=\"margin-bottom: 28px; line-height: 1.2em; font-size: 22px; color: rgb(24, 32, 40); font-family: Oswald, sans-serif; text-transform: uppercase;\">PROSES PENGERJAAN</h4><p style=\"margin-bottom: 0px; font-family: Roboto, sans-serif; line-height: 28px; font-size: 15px; color: rgb(136, 136, 136);\">Pasca Weeding Samwinaldy Dan Radiah Bertempat di sebuah padang rumput di citra land makassar kami menginginkan cahaya yang sedikit kuning keemasan maka dari itu kita memilih jam 14:00 agar mendapat cahaya yang di inginkan namun sebelum itu kami mengkonfirmasi apakah client dapat datang pada waktu yang telah kami tentukan atau tidak</p>'),
(3, 'Smiling beutiful women', 2, 'gallery_item_2.png', '00:00:00', '2020-04-19', '00:00:00', '2020-04-19', 'Citra Land, Makassar 90242', ''),
(4, 'Taman Bermain', 4, 'gallery_item_3.png', '00:00:00', '2020-04-19', '00:00:00', '2020-04-19', 'Citra Land, Makassar 90242', ''),
(5, 'Dermaga Pangkep', 4, 'gallery_item_4.png', '00:00:00', '2020-04-19', '00:00:00', '2020-04-19', 'Citra Land, Makassar 90242', ''),
(6, 'Pantai Batu Batu', 3, 'gallery_item_5.png', '00:00:00', '2020-04-19', '00:00:00', '2020-04-19', 'Citra Land, Makassar 90242', ''),
(7, 'Sawah Bone', 3, 'gallery_item_6.png', '00:00:00', '2020-04-19', '00:00:00', '2020-04-19', 'Citra Land, Makassar 90242', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(15) NOT NULL,
  `price_alt` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `price`, `price_alt`, `content`, `icon`) VALUES
(2, 'Weeding Photo', 5000000, 'event', 'a:6:{i:0;s:11:\"Foto Prewed\";i:1;s:12:\"Foto Resepsi\";i:2;s:12:\"Vidio Prewed\";i:3;s:13:\"Vidio Resepsi\";i:4;s:5:\"Album\";i:5;s:9:\"Stok Foto\";}', 'feature_icon_1.svg'),
(3, 'Photography', 25000, 'orang', 'a:6:{i:0;s:11:\"Foto Studio\";i:1;s:10:\"Foto Model\";i:2;s:13:\"Foto Angkatan\";i:3;s:8:\"Pas Foto\";i:4;s:11:\"Foto Couple\";i:5;s:13:\"foto keluarga\";}', 'feature_icon_2.svg'),
(5, 'Stok Foto', 100000, 'foto', 'a:6:{i:0;s:13:\"Foto Lanscape\";i:1;s:12:\"Foto Potrait\";i:2;s:11:\"Foto Nature\";i:3;s:9:\"Foto Stok\";i:4;s:11:\"Foto Sunset\";i:5;s:12:\"Foto Sunrise\";}', 'feature_icon_3.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
