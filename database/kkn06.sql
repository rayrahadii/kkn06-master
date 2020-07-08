-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 11:05 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkn06`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul_artikel` varchar(128) NOT NULL,
  `keterangan_artikel` varchar(512) NOT NULL,
  `penulis_artikel` varchar(128) NOT NULL,
  `isi_artikel` text NOT NULL,
  `image_artikel` varchar(256) NOT NULL,
  `link_video` varchar(256) DEFAULT NULL,
  `tanggal_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `divisi_id`, `user_id`, `judul_artikel`, `keterangan_artikel`, `penulis_artikel`, `isi_artikel`, `image_artikel`, `link_video`, `tanggal_dibuat`) VALUES
(4, 1, 1, 'Test Judul Artikel', 'Coba Keterangan Artikel', 'Rahadi Sasmita', '<p>The standard Lorem Ipsum passage, used since the 1500s</p>\r\n\r\n<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>\r\n\r\n<p> </p>\r\n\r\n<p>Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</p>\r\n\r\n<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>\r\n', 'artikel-200707-78279d5381.jpg', '', '2020-07-07 10:14:47'),
(6, 1, 1, 'Pembuatan Handsanitizer', 'Merupakan salah satu proker dari divisi TTG yang digunakan untuk membantu kelurahan wonorejo dalam pandemi covid-19', 'Rahadi Sasmita', '<p>The standard Lorem Ipsum passage, used since the 1500s</p>\r\n\r\n<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>\r\n\r\n<p> </p>\r\n\r\n<p>Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</p>\r\n\r\n<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>\r\n', 'artikel-200708-cc97abfb03.jpg', '', '2020-07-08 12:34:02'),
(7, 1, 1, 'Pemasangan Spanduk Di Pasar', '<p>Merupakan salah satu program kerja dari divisi relawan </p>\r\n', 'Rahadi Sasmita', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>\r\n', 'artikel-200708-458b16ef34.jpg', '', '2020-07-08 12:41:21'),
(8, 1, 1, 'Artikel ke 4', '<p>Artikel ke 4</p>\r\n', 'Rahadi Sasmita', '<p>Isi Artikel 4</p>\r\n', 'artikel-200708-2a8168569b.jpg', '', '2020-07-08 09:55:16'),
(9, 1, 1, 'Artikel 5', '<p>keterangan Artikel 5</p>\r\n', 'Rahadi Sasmita', '<p>Isi Artikel 5</p>\r\n', 'artikel-200708-11433c40ba.jpg', '', '2020-07-08 09:55:49'),
(10, 1, 1, 'Artikel 6', '<p>Keterangan Artikel 6</p>\r\n', 'Rahadi Sasmita', '<p>Isi Artikel 6</p>\r\n', 'artikel-200708-bcdeefa02e.jpg', 'https://www.youtube.com/embed/PfeoRQiNeoA', '2020-07-08 09:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `divisi_id` int(11) NOT NULL,
  `nama_divisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`divisi_id`, `nama_divisi`) VALUES
(1, 'superadmin'),
(2, 'Teknologi Tepat Guna'),
(3, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `galery_id` int(11) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul_galery` varchar(256) NOT NULL,
  `keterangan_galery` varchar(512) NOT NULL,
  `penulis_galery` varchar(128) NOT NULL,
  `image_galery` varchar(128) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`galery_id`, `divisi_id`, `user_id`, `judul_galery`, `keterangan_galery`, `penulis_galery`, `image_galery`, `tanggal_dibuat`) VALUES
(1, 1, 1, 'Pemasangan Poster Di Kelurahan Wonorejo', '<p>Pemasangan poster dibeberapa titik yang berada di dalam kelurahan wonorejo disini merupakan salah satu kepedulian dalam pandemi covid-19</p>\r\n', 'Rahadi Sasmita', 'galery-200709-895e962b19.png', '2020-07-09 02:30:39'),
(2, 1, 1, 'Pendidikan ', '<p>Galery Pendidikan</p>\r\n', 'Rahadi Sasmita', 'galery-200709-8f0ddcc6f5.png', '2020-07-09 03:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `divisi_id`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 1, 'Rahadi Sasmita', 'rayrahadii', 'f3a811c71b323d49bb735cdbeb33e3d520d3f852', 1),
(3, 2, 'Nyoman Rahadi Sasmita', 'rahadisasmita', 'f3a811c71b323d49bb735cdbeb33e3d520d3f852', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`divisi_id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`galery_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `divisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `galery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
