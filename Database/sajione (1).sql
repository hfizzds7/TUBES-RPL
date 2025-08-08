-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2025 at 03:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajione`
--

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id_meja` int NOT NULL,
  `nomor_meja` int NOT NULL,
  `status_meja` enum('Kosong','Ditempati','Menunggu Bayar') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Kosong',
  `id_pelayan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id_meja`, `nomor_meja`, `status_meja`, `id_pelayan`) VALUES
(1, 1, 'Ditempati', NULL),
(2, 2, 'Ditempati', NULL),
(3, 3, 'Ditempati', 14),
(4, 4, 'Ditempati', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_menu` int NOT NULL,
  `nama_menu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `kategori` enum('Makanan','Minuman') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_menu`, `nama_menu`, `harga`, `kategori`) VALUES
(1, 'Nasi Goreng Spesial', 10000.00, 'Makanan'),
(2, 'Nasi Goreng Ati', 15000.00, 'Makanan'),
(3, 'Nasi Goreng Sosis', 12000.00, 'Makanan'),
(4, 'Nasi Goreng Seafood', 16000.00, 'Makanan'),
(5, 'Nasi Goreng Kornet', 14000.00, 'Makanan'),
(6, 'Chicken Katsu', 18000.00, 'Makanan'),
(7, 'Chicken Karage', 20000.00, 'Makanan'),
(8, 'Rawon', 15000.00, 'Makanan'),
(9, 'Ayam Serundeng', 21000.00, 'Makanan'),
(10, 'Ayam Taliwang', 25000.00, 'Makanan'),
(11, 'Bebek Bakar', 22000.00, 'Makanan'),
(12, 'Kwetiau', 16000.00, 'Makanan'),
(13, 'Kwetiau Kuah', 18000.00, 'Makanan'),
(14, 'Lontong Sayur', 20000.00, 'Makanan'),
(15, 'Omlet', 17000.00, 'Makanan'),
(16, 'Semur Sapi', 22000.00, 'Makanan'),
(17, 'Cappuccino', 22000.00, 'Minuman'),
(18, 'Coffee Latte', 23000.00, 'Minuman'),
(19, 'Es Cendol', 16000.00, 'Minuman'),
(20, 'Es Cincau', 14000.00, 'Minuman'),
(21, 'Es Doger', 18000.00, 'Minuman'),
(22, 'Es Goyobod', 15000.00, 'Minuman'),
(23, 'Es Teler', 19000.00, 'Minuman'),
(24, 'Jus Alpukat', 18000.00, 'Minuman'),
(25, 'Jus Mangga', 17000.00, 'Minuman'),
(26, 'Jus Pisang', 15000.00, 'Minuman'),
(27, 'Jus Strawberry', 19000.00, 'Minuman'),
(28, 'Milkshake Cream', 22000.00, 'Minuman'),
(29, 'Susu Cokelat', 16000.00, 'Minuman'),
(30, 'Teh Tarik', 18000.00, 'Minuman'),
(31, 'Teh Manis', 14000.00, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `pelayan`
--

CREATE TABLE `pelayan` (
  `id_pelayan` int NOT NULL,
  `nama_pelayan` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelayan`
--

INSERT INTO `pelayan` (`id_pelayan`, `nama_pelayan`, `username`, `password`, `no_telp`) VALUES
(14, 'Nurhayati ', 'nur471', 'aaaaax', '3309'),
(15, 'Emanuella', 'ema1422', 'yxtiss', '8540'),
(16, 'Serena', 'Ser190', 'hjkllo@', '6481');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int NOT NULL,
  `nama_menu` varchar(123) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_meja` int DEFAULT NULL,
  `no_menu` int DEFAULT NULL,
  `jumlah` int NOT NULL DEFAULT '1',
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_menu`, `no_meja`, `no_menu`, `jumlah`, `catatan`) VALUES
(1, 'Chicken Katsu', 2, 6, 4, 'Pedes 1'),
(2, 'Semur Sapi', 4, 16, 6, 'Jangan Pakai Pedes');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pesanan`
--

CREATE TABLE `riwayat_pesanan` (
  `id_pesanan` int NOT NULL,
  `id_meja` int NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `metode_pembayaran` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status_pembayaran` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_pesanan`
--

INSERT INTO `riwayat_pesanan` (`id_pesanan`, `id_meja`, `total_harga`, `metode_pembayaran`, `status_pembayaran`) VALUES
(1, 2, 108000.00, 'Tunai', 'Selesai'),
(2, 4, 264000.00, 'Tunai', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` enum('admin','pelayan','kasir','chef') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `role`, `created_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$kDiwYc2kDMT9q8ux5TTC2eaccA8OoL8TXpIZwXZz8ocf6huaaf4.O', 'Ridwan', 'admin', '2025-08-06 02:15:39'),
(2, 'lolmae@gmail.com', '$2y$10$/cGEQjwPIEa.7lMV0QdvyuE0l68061guYBmA5WhJOdGiOYNaSTW2O', 'Doni', 'admin', '2025-08-06 04:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`),
  ADD UNIQUE KEY `nomor_meja` (`nomor_meja`),
  ADD KEY `id_pelayan` (`id_pelayan`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pelayan`
--
ALTER TABLE `pelayan`
  ADD PRIMARY KEY (`id_pelayan`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_meja` (`no_meja`),
  ADD KEY `id_menu` (`no_menu`);

--
-- Indexes for table `riwayat_pesanan`
--
ALTER TABLE `riwayat_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id_meja` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_menu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pelayan`
--
ALTER TABLE `pelayan`
  MODIFY `id_pelayan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_pesanan`
--
ALTER TABLE `riwayat_pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meja`
--
ALTER TABLE `meja`
  ADD CONSTRAINT `meja_ibfk_1` FOREIGN KEY (`id_pelayan`) REFERENCES `pelayan` (`id_pelayan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`no_meja`) REFERENCES `meja` (`id_meja`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`no_menu`) REFERENCES `menu_makanan` (`id_menu`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
