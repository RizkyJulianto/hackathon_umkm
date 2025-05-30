-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 01:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umkm_ajb`
--

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `pesan`, `tanggal`) VALUES
(1, 'Data Berhasil Ditambahkan', '2025-05-30 16:16:29'),
(2, 'Data Berhasil Ditambahkan', '2025-05-30 16:20:15'),
(3, 'Data Berhasil Ditambahkan', '2025-05-30 16:21:31'),
(4, 'Data Berhasil Ditambahkan', '2025-05-30 16:22:44'),
(5, 'Data Berhasil Ditambahkan', '2025-05-30 16:23:37'),
(6, 'Data Berhasil Ditambahkan', '2025-05-30 16:25:29'),
(7, 'Anda Berhasil Menghapus Data', '2025-05-30 17:36:49'),
(8, 'Anda Berhasil Menghapus Data', '2025-05-30 17:36:49'),
(9, 'Anda Berhasil Menghapus Data', '2025-05-30 17:36:49'),
(10, 'Anda Berhasil Menghapus Data', '2025-05-30 17:36:49'),
(11, 'Anda Berhasil Menghapus Data', '2025-05-30 17:36:49'),
(12, 'Anda Berhasil Menghapus Data', '2025-05-30 17:36:49'),
(13, 'Data Berhasil Ditambahkan', '2025-05-30 17:39:11'),
(14, 'Data Berhasil Ditambahkan', '2025-05-30 17:41:11'),
(15, 'Data Berhasil Ditambahkan', '2025-05-30 17:41:53'),
(16, 'Data Berhasil Ditambahkan', '2025-05-30 17:42:29'),
(17, 'Data Berhasil Ditambahkan', '2025-05-30 17:42:58'),
(18, 'Data Berhasil Ditambahkan', '2025-05-30 17:43:35'),
(19, 'Data Berhasil Ditambahkan', '2025-05-30 17:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kode_produk` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `harga`, `kode_produk`, `deskripsi`, `qr_code`, `created_at`) VALUES
(7, 'Briyani Ayam goreng', 'IMG_68398acf8742e.jpg', '15000', 'BRG-250530-2965', 'test', 'BRG-250530-2965.png', '2025-05-30 12:39:11'),
(8, 'Kebuli Ayam Geprek', 'IMG_68398b4769c2e.jpg', '12000', 'BRG-250530-7698', 'test', 'BRG-250530-7698.png', '2025-05-30 12:41:11'),
(9, 'Kebuli Ayam Katsu', 'IMG_68398b71528f3.jpg', '12000', 'BRG-250530-7930', 'test', 'BRG-250530-7930.png', '2025-05-30 12:41:53'),
(10, 'Kebuli Ayam Krispi ', 'IMG_68398b94da200.jpg', '12000', 'BRG-250530-2372', 'test', 'BRG-250530-2372.png', '2025-05-30 12:42:28'),
(11, 'Kebuli Ayam Ori', 'IMG_68398bb2c02cb.jpg', '12000', 'BRG-250530-1063', 'test', 'BRG-250530-1063.png', '2025-05-30 12:42:58'),
(12, 'Kebuli Telur Ayam Krispi', 'IMG_68398bd7a361f.jpg', '12000', 'BRG-250530-5190', 'test', 'BRG-250530-5190.png', '2025-05-30 12:43:35'),
(13, 'dfdf', 'IMG_68398d0df3bfe.png', '33434', 'PRD-250530-9302', 'cvfgfgfgf', 'PRD-250530-9302.png', '2025-05-30 12:48:45');

--
-- Triggers `produk`
--
DELIMITER $$
CREATE TRIGGER `tr_histori_delete_produk` AFTER DELETE ON `produk` FOR EACH ROW INSERT INTO histori (pesan, tanggal) VALUES("Anda Berhasil Menghapus Data", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_histori_insert_produk` AFTER INSERT ON `produk` FOR EACH ROW INSERT INTO histori (pesan, tanggal) VALUES("Data Berhasil Ditambahkan", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_histori_update_produk` AFTER UPDATE ON `produk` FOR EACH ROW INSERT INTO histori (pesan, tanggal) VALUES("Anda Berhasil Mengubah Data", NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_produk`, `nama`, `deskripsi`, `created_at`) VALUES
(1, 1, 'Anonim', 'Enak nasinya makin berasa rempahnya, kering kentangnya kriuk pedes, sambelnya nagih, ayam crispynya juga kriuk, ga keras, dagingnya tetap empuk, rasanya ga cukup se porsi klo makan nasi kebuli, pgn nambah lagii', '2025-05-30 11:31:22'),
(2, 3, 'Anonim', 'Nasinya enak + gurih, sambelnya enakk, untuk harga segitu pas aja sih bisaa kalau order lagii', '2025-05-30 11:31:37'),
(3, 5, 'Anonim', 'Mantap, 99,99..mantul', '2025-05-30 11:35:17'),
(4, 2, 'Anonim', 'Enak Poll mass', '2025-05-30 11:37:32'),
(5, 4, 'Anonim', 'Kebulinya Enakk Puoll asli ga boong, jujur aku lg kangenn bgt makanan ajibarang, alhamdulilah nasi kebuli ini jdi obat kangennya.', '2025-05-30 11:38:23'),
(6, 4, 'Anonim', 'mantep mass harga segitu buat anak koss cocok mahh', '2025-05-30 11:40:27'),
(7, 2, 'Anonim', 'Kemarin aku dah nyobain nasi kebuli bareng temen temen, 11/10 sii enakk banget mana harganya ramah lagi', '2025-05-30 11:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
