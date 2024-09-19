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
  `id_helm` int NOT NULL AUTO_INCREMENT,
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
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_helm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `is_helm`
--

INSERT INTO is_helm (kode_mat,nama_mat,jenis,kaliber,no_lot,negara,siap,tidak_siap,stock_akhir,satuan,deret,gambar,gudang,created_user,created_date,updated_user,updated_date) VALUES
	 ('AMO-1','Amunisi','API','4,5 mm','12345','Amerika',11,11,22,'Butir','22','','GD.03/T',1,'2024-09-18 16:46:03',1,'2024-09-18 16:46:03'),
	 ('AMO-2','Exploder','APIT','5,56x45 mm','88','Amerika',12,88,100,'Buah','88','','GD.06/G',1,'2024-09-19 19:33:56',1,'2024-09-19 19:33:56'),
	 ('AMO-2','Sumbu Api dan Ledak','API','5,56x45 mm','22','Australia',22,2,222,'Buah','2222','','GD.10/G',1,'2024-09-19 19:58:30',1,'2024-09-19 19:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `is_obat_keluar`
--

CREATE TABLE `is_obat_keluar` (
  `kode_transaksi` varchar(30) NOT NULL,
  `no_sput` varchar(20) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `satkai` varchar(50) NOT NULL,
  `id_helm` int NOT NULL,
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
  `id_helm` int NOT NULL,
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
  ADD KEY `id_barang` (`id_helm`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `is_obat_masuk`
--
ALTER TABLE `is_obat_masuk`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_barang` (`id_helm`),
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
  ADD CONSTRAINT `is_obat_masuk_ibfk_1` FOREIGN KEY (`id_helm`) REFERENCES `is_helm` (`id_helm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_obat_masuk_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `is_obat_keluar`
--
ALTER TABLE `is_obat_keluar`
  ADD CONSTRAINT `is_obat_keluar_ibfk_1` FOREIGN KEY (`id_helm`) REFERENCES `is_helm` (`id_helm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_obat_keluar_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

-- Insert data dummy `is_obat_masuk`
INSERT INTO is_obat_masuk (kode_transaksi,no_spus,tanggal_masuk,sumber,id_helm,jumlah_masuk,created_user,created_date) VALUES
	 ('PMB/HAR-2024-00001','oke/1','0000-00-00','sip/2',3,3,1,'2024-09-19 20:44:39'),
	 ('PMB/HAR-2024-00002','oke/2','0000-00-00','sip/2',3,5,1,'2024-09-19 20:49:44'),
	 ('PMB/HAR-2024-00003','oke/3','0000-00-00','sip/3',1,4,1,'2024-09-19 20:50:13'),
	 ('PMB/HAR-2024-00004','oke/5','0000-00-00','sip/5',3,1,1,'2024-09-19 21:02:35'),
	 ('PMB/HAR-2024-00005','oke/6','0000-00-00','sip/6',3,2,1,'2024-09-19 21:10:19'),
	 ('PMB/HAR-2024-00006','oke/7','2024-09-19','sip/7',3,31,1,'2024-09-19 21:38:47');

-- Insert data dummy `is_obat_keluar`
INSERT INTO is_obat_keluar (kode_transaksi,no_sput,tanggal_keluar,satkai,id_helm,jumlah_keluar,created_user,created_date) VALUES
	 ('PUT/HAR-2024-00001','yes/1','2024-09-19','kuy/1',3,2,1,'2024-09-19 21:02:15'),
	 ('PUT/HAR-2024-00002','yes/2','2024-09-19','kuy/2',3,4,1,'2024-09-19 21:03:02');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
