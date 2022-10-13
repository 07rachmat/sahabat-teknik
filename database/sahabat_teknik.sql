-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 06:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahabat_teknik`
--

-- --------------------------------------------------------

--
-- Table structure for table `derek`
--

CREATE TABLE `derek` (
  `id_derek` int(11) NOT NULL,
  `nama_derek` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kategori_unit` varchar(50) DEFAULT NULL,
  `status` enum('tersedia','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `derek`
--

INSERT INTO `derek` (`id_derek`, `nama_derek`, `no_telepon`, `alamat`, `kategori_unit`, `status`) VALUES
(12, 'Raja Derek', '085214789632', 'Jakarta Bandung', 'Kendaraan Besar', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `merk_kendaraan` varchar(100) NOT NULL,
  `tipe_unit` varchar(100) NOT NULL,
  `deskripsi_kerusakan` text NOT NULL,
  `no_plat` varchar(30) NOT NULL,
  `alamat_lokasi` text NOT NULL,
  `jenis_service` varchar(100) NOT NULL,
  `status` enum('pending','proses','selesai','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `nama_pelanggan`, `no_telepon`, `merk_kendaraan`, `tipe_unit`, `deskripsi_kerusakan`, `no_plat`, `alamat_lokasi`, `jenis_service`, `status`) VALUES
(2, 'Test', '085236987412', 'Honda', 'Honda Jazz', 'Mogok nabrak pohon', 'E 1234 SKM', 'Jakarta', 'Derek', 'proses'),
(3, 'Rizki Kurniawan', '085214789632', 'Toyota', 'Fortuner', 'Kena banjir', 'B 2323 MMM', 'Cirebon', 'Panggil Teknisi', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

CREATE TABLE `spareparts` (
  `id_spareparts` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('tersedia','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id_spareparts`, `nama`, `deskripsi`, `status`) VALUES
(1, 'Ban', 'Ban Pirreli', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'avatar.png',
  `level` enum('admin','teknisi') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `no_telepon`, `jenis_kelamin`, `foto`, `level`, `status`) VALUES
(1, 'Admin Name', 'admin', '$2y$10$JGEcUrno50YpCiIXUk7aiuj0pvXCh84kOKSf0WLoO1n7it9kollpy', '085214785236', 'L', 'avatar.png', 'admin', 'aktif'),
(11, 'Teknisi Name', 'teknisi', '$2y$10$aEqw5HmGZtqfeIpH0hcZoeuF5/xgPS3L/987myQJiohrf6awJdJVe', '0085214789632', 'L', 'avatar.png', 'teknisi', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `derek`
--
ALTER TABLE `derek`
  ADD PRIMARY KEY (`id_derek`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `spareparts`
--
ALTER TABLE `spareparts`
  ADD PRIMARY KEY (`id_spareparts`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `derek`
--
ALTER TABLE `derek`
  MODIFY `id_derek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spareparts`
--
ALTER TABLE `spareparts`
  MODIFY `id_spareparts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
