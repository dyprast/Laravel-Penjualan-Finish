-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 06:12 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jenis_barang` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_net` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `id_jenis_barang`, `nama_barang`, `harga_net`, `harga_jual`, `stok`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kapas', '20000', '30000', 1500, '2019-04-09 08:50:25', '2019-04-09 08:55:54'),
(2, 1, 'Karet', '50000', '75000', 100, '2019-04-09 08:50:51', '2019-04-09 08:55:45'),
(3, 3, 'Benang', '10000', '13000', 400, '2019-04-09 08:51:15', '2019-04-09 08:51:15'),
(4, 2, 'Baju', '40000', '50000', 100, '2019-04-09 08:51:41', '2019-04-09 08:51:41'),
(5, 2, 'Meja', '50000', '75000', 300, '2019-04-09 08:52:02', '2019-04-09 08:52:02'),
(6, 2, 'Kursi', '50000', '75000', 400, '2019-04-09 08:52:15', '2019-04-09 08:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuks`
--

CREATE TABLE `barang_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_nota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `id_distributor` bigint(20) UNSIGNED NOT NULL,
  `id_petugas` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuks`
--

INSERT INTO `barang_masuks` (`id`, `no_nota`, `tanggal_masuk`, `id_distributor`, `id_petugas`, `total`, `created_at`, `updated_at`) VALUES
(1, 'BM0001', '2019-04-09', 1, 1, 100, '2019-04-09 08:44:42', '2019-04-09 08:44:42'),
(3, 'BM0002', '2019-04-10', 4, 4, 1200, '2019-04-09 08:48:35', '2019-04-09 08:48:35'),
(4, 'BM0003', '2019-04-09', 3, 3, 1200, '2019-04-09 08:49:15', '2019-04-09 08:49:15'),
(5, 'BM0004', '2019-04-08', 2, 2, 100, '2019-04-09 08:49:26', '2019-04-09 08:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang_masuks`
--

CREATE TABLE `detail_barang_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang_masuk` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_barang_masuks`
--

INSERT INTO `detail_barang_masuks` (`id`, `id_barang_masuk`, `id_barang`, `jumlah`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 5, 6, 100, 200, '2019-04-09 08:56:50', '2019-04-09 08:56:50'),
(2, 4, 5, 100, 200, '2019-04-09 08:57:01', '2019-04-09 08:57:01'),
(3, 3, 4, 50, 150, '2019-04-09 08:57:15', '2019-04-09 08:57:15'),
(4, 1, 3, 100, 150, '2019-04-09 08:57:28', '2019-04-09 08:57:28'),
(5, 4, 3, 50, 200, '2019-04-09 08:57:39', '2019-04-09 08:57:39'),
(6, 4, 2, 50, 200, '2019-04-09 08:57:51', '2019-04-09 08:57:51'),
(7, 3, 6, 100, 200, '2019-04-09 08:57:59', '2019-04-09 08:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualans`
--

CREATE TABLE `detail_penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penjualan` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_penjualans`
--

INSERT INTO `detail_penjualans` (`id`, `id_penjualan`, `id_barang`, `jumlah`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 100, 200, '2019-04-09 09:01:34', '2019-04-09 09:01:34'),
(2, 2, 6, 100, 200, '2019-04-09 09:01:42', '2019-04-09 09:01:42'),
(3, 5, 3, 50, 150, '2019-04-09 09:01:56', '2019-04-09 09:01:56'),
(4, 4, 2, 50, 200, '2019-04-09 09:02:07', '2019-04-09 09:02:07'),
(5, 1, 1, 100, 150, '2019-04-09 09:02:17', '2019-04-09 09:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `nama`, `alamat`, `kota_asal`, `email`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Agung Mubarok', 'Jalan Bogor Jawa Barat', 'Bogor, Jawa Barat', 'agungmubarok@distributor.com', '089531920065', '2019-04-09 08:41:15', '2019-04-09 08:41:15'),
(2, 'Muhammad Fahrul', 'Depok street', 'Depok, Jawa Barat', 'muhammadfahrul@distributor.com', '089531920065', '2019-04-09 08:41:50', '2019-04-09 08:41:50'),
(3, 'Muhammad Bafaqih', 'Bafaqih Street', 'DKI Jakarta', 'bafaqih@distributor.com', '089531920065', '2019-04-09 08:42:19', '2019-04-09 08:42:19'),
(4, 'Riza Adriani', 'Padang Jalan Padang', 'Padang, Sumatera Barat', 'riza@distributor.com', '089531920065', '2019-04-09 08:42:57', '2019-04-09 08:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barangs`
--

CREATE TABLE `jenis_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_barangs`
--

INSERT INTO `jenis_barangs` (`id`, `jenis_barang`, `created_at`, `updated_at`) VALUES
(1, 'Barang Mentah', '2019-04-09 08:43:59', '2019-04-09 08:43:59'),
(2, 'Barang Jadi', '2019-04-09 08:44:07', '2019-04-09 08:44:07'),
(3, 'Barang Setengah Jadi', '2019-04-09 08:44:21', '2019-04-09 08:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_04_08_012535_create_distributors_table', 1),
(3, '2019_04_08_012549_create_petugas_table', 1),
(4, '2019_04_08_012623_create_barang_masuks_table', 1),
(5, '2019_04_08_012813_create_jenis_barangs_table', 1),
(6, '2019_04_08_012829_create_barangs_table', 1),
(7, '2019_04_08_012830_create_detail_barang_masuks_table', 1),
(8, '2019_04_08_012957_create_penjualans_table', 1),
(9, '2019_04_08_013012_create_detail_penjualans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_faktur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_petugas` bigint(20) UNSIGNED NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `bayar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `no_faktur`, `id_petugas`, `tanggal_penjualan`, `bayar`, `sisa`, `total`, `created_at`, `updated_at`) VALUES
(1, 'FK0001', 4, '2019-04-09', '1000000', '300000', '1300000', '2019-04-09 08:58:59', '2019-04-09 08:58:59'),
(2, 'FK0002', 4, '2019-04-09', '1000000', '300000', '1300000', '2019-04-09 08:59:16', '2019-04-09 08:59:16'),
(3, 'FK0003', 2, '2019-04-04', '1000000', '300000', '1300000', '2019-04-09 08:59:50', '2019-04-09 08:59:50'),
(4, 'FK0004', 3, '2019-04-09', '1000000', '300000', '1300000', '2019-04-09 09:01:04', '2019-04-09 09:01:04'),
(5, 'FK0005', 1, '2019-04-23', '1000000', '300000', '1300000', '2019-04-09 09:01:18', '2019-04-09 09:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `alamat`, `email`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan Edy Prasetyo', 'Jalan AMD XII', 'romadhanedy@outlook.com', '089531920065', '2019-04-09 08:38:58', '2019-04-09 08:38:58'),
(2, 'Romadhan Greenlife', 'Jalan Greenlife', 'romadhangreenlife@greenlife.com', '089531920065', '2019-04-09 08:39:23', '2019-04-09 08:39:23'),
(3, 'Dyprast', 'Dyprast Street', 'dyprast@mail.net', '089531920065', '2019-04-09 08:39:54', '2019-04-09 08:39:54'),
(4, 'Dhanz Fingerstyle', 'Jalan Fingerstyle', 'dhanzfingerstyle@artist.com', '089531920065', '2019-04-09 08:40:36', '2019-04-09 08:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan Edy Prasetyo', 'romadhanedy@outlook.com', NULL, '$2y$10$8MnLWBoIwpfrrgtQayQg1elCe2JiGXaDKDVAMsiykQh8raHRO2PoS', NULL, NULL, '2019-04-09 08:38:33', '2019-04-09 08:38:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_id_jenis_barang_foreign` (`id_jenis_barang`);

--
-- Indexes for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barang_masuks_no_nota_unique` (`no_nota`),
  ADD KEY `barang_masuks_id_distributor_foreign` (`id_distributor`),
  ADD KEY `barang_masuks_id_petugas_foreign` (`id_petugas`);

--
-- Indexes for table `detail_barang_masuks`
--
ALTER TABLE `detail_barang_masuks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_barang_masuks_id_barang_masuk_foreign` (`id_barang_masuk`),
  ADD KEY `detail_barang_masuks_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_penjualans_id_penjualan_foreign` (`id_penjualan`),
  ADD KEY `detail_penjualans_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_barangs`
--
ALTER TABLE `jenis_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penjualans_no_faktur_unique` (`no_faktur`),
  ADD KEY `penjualans_id_petugas_foreign` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_barang_masuks`
--
ALTER TABLE `detail_barang_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_barangs`
--
ALTER TABLE `jenis_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_id_jenis_barang_foreign` FOREIGN KEY (`id_jenis_barang`) REFERENCES `jenis_barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  ADD CONSTRAINT `barang_masuks_id_distributor_foreign` FOREIGN KEY (`id_distributor`) REFERENCES `distributors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuks_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_barang_masuks`
--
ALTER TABLE `detail_barang_masuks`
  ADD CONSTRAINT `detail_barang_masuks_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_barang_masuks_id_barang_masuk_foreign` FOREIGN KEY (`id_barang_masuk`) REFERENCES `barang_masuks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD CONSTRAINT `detail_penjualans_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_penjualans_id_penjualan_foreign` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD CONSTRAINT `penjualans_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
