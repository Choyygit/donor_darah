-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 07:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas_donor`
--

CREATE TABLE `aktifitas_donor` (
  `id` int(11) NOT NULL,
  `id_pendonor` int(11) NOT NULL,
  `waktu_donor` datetime NOT NULL,
  `durasi` time NOT NULL,
  `volume_darah` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `golongan_darah` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_hp` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `desa` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `nomor_hp`, `alamat`, `kecamatan`, `desa`, `status`) VALUES
(3, 'Andi', 'surabaya', '2022-01-11', 1, 'O', '081234567890', 'Jalan Buntu', 'Bojonegoro', 'Mulyoagung', 1),
(4, 'Budi', 'Bojonegoro', '2022-01-10', 1, 'A', '081234567890', 'Jalan in aja dulu', 'Kapas', 'Biroto', 1),
(5, 'Caca ', 'Surabaya', '2022-01-02', 0, 'B', '081234567890', 'Jalan Hati-Hati yaaa', 'Bojonegoro', 'Mulyoagung', 1),
(6, 'Sandi', 'Bojonegoro', '2022-01-02', 1, 'A', '081234567890', 'Jalan Buntu', 'Bojonegoro', 'Mulyoagung', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktifitas_donor`
--
ALTER TABLE `aktifitas_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktifitas_donor`
--
ALTER TABLE `aktifitas_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
