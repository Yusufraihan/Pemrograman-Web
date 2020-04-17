-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 05:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040168`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `judul buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `cover`, `judul buku`, `penulis`, `penerbit`, `harga`) VALUES
(1, 'nonversation.jfif', 'Nonversation', 'Valerie Patkar', 'Bhuana Ilmu Populer', 'Rp. 78.400'),
(2, 'orangbiasa.jfif', 'Orang-orang Biasa', 'Andrea Hirata', 'Bentang Pustaka', 'Rp. 89.000'),
(3, 'sepatu tua.jpg', 'Sepasang Sepatu Tua', 'Djoko Damono', 'Gramedia Pustaka Utama', 'Rp. 61.000'),
(4, 'anakbadai.jpg', 'Si Anak Badai', 'Tere Liye', 'Republika Penerbit', 'Rp. 70.400'),
(5, 'hujandanpawaka.jpg', 'Hujan dan Pawaka', 'Tria Ayu', 'Bhuana Ilmu Populer', 'Rp. 57.600'),
(6, 'dearjane.jpeg', 'Dear Jane', 'Pratiwi Juliani', 'Gramedia Pustaka Utama', 'Rp. 85.000'),
(7, 'pemetikbintang.jpg', 'Pemetik Bintang', 'Ve Handojo', 'Gramedia Pustaka Utama', 'Rp. 82.000'),
(8, 'tukartakdir.jpg', 'Tukar Takdir', 'Valiant Budi', 'Gramedia Pustaka Utama', 'Rp. 68.000'),
(9, 'pergilahpulang.jpg', 'Pergilah Pulang', 'Carmantyo', 'Elex Media Komputindo', 'Rp. 86.800'),
(10, 'merdekasejakhati.jpg', 'Merdeka Sejak Hati', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 'Rp. 79.200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
