-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2019 at 08:36 
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-crud-tambah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tebal` int(11) NOT NULL,
  `penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `tebal`, `penerbit`) VALUES
(1, 'um', 0, 'nulis'),
(2, 'Simulasi Ujian', 10, 'ad'),
(3, 'Simulasi Ujian 2', 10, 'jos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
