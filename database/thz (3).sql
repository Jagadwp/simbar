-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 11:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thz`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_helm`
--

CREATE TABLE `is_helm` (
  `kode_mat` varchar(20) NOT NULL,
  `nama_mat` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kaliber` varchar(10) NOT NULL,
  `no_lot` varchar(100) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `siap` int(100) NOT NULL,
  `tidak_siap` int(100) NOT NULL,
  `stock_akhir` int(100) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `deret` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gudang` varchar(10) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `is_helm`
--

INSERT INTO `is_helm` (`kode_mat`, `nama_mat`, `jenis`, `kaliber`, `no_lot`, `negara`, `siap`, `tidak_siap`, `stock_akhir`, `satuan`, `deret`, `gambar`, `gudang`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('AMO-1', 'Amunisi', 'API', '4,5 mm', '12345', 'Amerika', 11, 11, 22, 'Butir', '22', '', 'GD.03/T', 1, '2024-09-18 09:46:03', 1, '2024-09-18 09:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `is_obat_keluar`
--

CREATE TABLE `is_obat_keluar` (
  `kode_transaksi` varchar(30) NOT NULL,
  `no_sput` varchar(20) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `satkai` varchar(50) NOT NULL,
  `kode_mat` varchar(15) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_obat_masuk`
--

CREATE TABLE `is_obat_masuk` (
  `kode_transaksi` varchar(30) NOT NULL,
  `no_spus` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `kode_mat` varchar(15) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_users`
--

CREATE TABLE `is_users` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `hak_akses` enum('Super Admin','Manajer','Gudang') NOT NULL,
  `status` enum('aktif','blokir') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `is_users`
--

INSERT INTO `is_users` (`id_user`, `username`, `nama_user`, `password`, `email`, `telepon`, `foto`, `hak_akses`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Ur Data Minpan', '21232f297a57a5a743894a0e4a801fc3', '', '', 'avatar5.png', 'Super Admin', 'aktif', '2017-04-01 08:15:15', '2024-08-09 13:45:01'),
(2, 'pimpinan', 'KaArsenal/ Kabag Pan/ Kasubag Pan', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 'kadina.png', 'Manajer', 'aktif', '2017-04-01 08:15:15', '2024-08-09 14:47:51'),
(3, 'kaur', 'kaur', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', 'Gudang', 'aktif', '2017-04-01 08:15:15', '2024-08-09 14:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_helm`
--
ALTER TABLE `is_helm`
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indexes for table `is_obat_keluar`
--
ALTER TABLE `is_obat_keluar`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_barang` (`kode_mat`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `is_obat_masuk`
--
ALTER TABLE `is_obat_masuk`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_barang` (`kode_mat`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `is_users`
--
ALTER TABLE `is_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`hak_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_users`
--
ALTER TABLE `is_users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `is_helm`
--
ALTER TABLE `is_helm`
  ADD CONSTRAINT `is_helm_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_helm_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `is_obat_masuk`
--
ALTER TABLE `is_obat_masuk`
  ADD CONSTRAINT `is_obat_masuk_ibfk_1` FOREIGN KEY (`kode_mat`) REFERENCES `is_helm` (`kode_mat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_obat_masuk_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
