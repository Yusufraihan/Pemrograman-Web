-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:14 AM
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
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'R Yusuf Raihan Setiawan', '193040168', 'yuraindo8@gmail.com', 'Teknik Informatika', 'yusuf.jpeg'),
(2, 'Alief Faturohman', '193040158', 'alieffaturohman@gmail.com', 'Teknik Informatika', 'alief.jpeg'),
(3, 'Rafi Muhammad Zahid', '193040166', 'rafimz@gmail.com', 'Teknik Informatika', 'rafi.jpeg'),
(4, 'Ujang Fatah', '193040174', 'ujangfatah@gmail.com', 'Teknik Informatika', 'ujang.jpeg'),
(5, 'Rifqi Mulyawan', '193040149', 'rifqimulyawan@gmail.com', 'Teknik Informatika', 'rifqi.jpeg'),
(6, 'Lulu Abdul Kamil', '193040151', 'luluabdul@gmail.com', 'Teknik Informatika', 'lulu.jpeg'),
(7, 'Kevin Ferdiansyah', '193040163', 'kevinferdiansyah@gmail.com', 'Teknik Informatika', 'kevin.jpeg'),
(8, 'Devis Suparlan', '193040172', 'devissuparlan@gmail.com', 'Teknik Informatika', 'devis.jpeg'),
(9, 'Rizan Farid', '193040153', 'rizanfarid@gmail.com', 'Teknik Informatika', 'rizan.jpeg'),
(10, 'Sugih Mohammad Galih', '193040180', 'sugihmg@gmail.com', 'Teknik Informatika', 'sugih.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
