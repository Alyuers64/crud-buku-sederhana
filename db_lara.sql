-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 08:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lara`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_buku` varchar(191) NOT NULL,
  `penulis` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `penulis`, `created_at`, `updated_at`) VALUES
(34, 'Jakarta Hari Ini', 'Ripaldo Alyura', '2023-06-22 22:31:30', '2023-06-22 22:31:30'),
(36, 'Taman Yang Hilang', 'Edie Walker', '2023-06-22 22:32:47', '2023-06-22 22:32:47'),
(37, 'Dibalik Awan', 'Beni Sendri', '2023-06-22 22:33:25', '2023-06-22 22:33:25'),
(38, 'LadangKu', 'Andre', '2023-06-22 22:33:45', '2023-06-22 22:33:45'),
(39, 'Sendiri', 'Setia Budi', '2023-06-22 22:34:05', '2023-06-22 22:34:05'),
(40, 'Story Of My Life', 'Adam\'s', '2023-06-22 22:34:55', '2023-06-22 22:34:55'),
(42, 'DewiKu', 'Ripaldo', '2023-06-22 22:35:29', '2023-06-22 22:35:29'),
(43, 'Mudah Saja', 'Dimas Ganteng', '2023-06-22 22:35:47', '2023-06-22 22:35:47'),
(44, 'Candamu', 'Jeky', '2023-06-22 22:36:10', '2023-06-22 22:36:10'),
(47, 'HariMu', 'Wily Boy', '2023-06-22 22:36:52', '2023-06-22 22:36:52'),
(50, 'Umur Dan Logika', 'Sarip', '2023-06-22 22:39:49', '2023-06-22 22:51:31'),
(54, 'Berambisi', 'Andini', '2023-06-22 23:08:17', '2023-06-22 23:10:18'),
(59, 'Arti Logika', 'Malika', '2023-06-22 23:27:44', '2023-06-22 23:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_06_09_135133_create_bukus_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
