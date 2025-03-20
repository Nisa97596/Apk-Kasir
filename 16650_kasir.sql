-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2025 at 12:11 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `16650_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int NOT NULL,
  `id_transaksi` int DEFAULT NULL,
  `id_produk` int DEFAULT NULL,
  `harga` int NOT NULL,
  `jumlah` int DEFAULT NULL,
  `diskon` int NOT NULL,
  `potongan` int NOT NULL,
  `subtotal` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_produk`, `harga`, `jumlah`, `diskon`, `potongan`, `subtotal`) VALUES
(1, 1, 55, 0, 5, 0, 0, 5),
(2, 12, NULL, 15000, 1, 0, 0, 12000),
(3, 13, 50, 15000, 1, 0, 0, 12000),
(4, 14, 52, 15000, 5, 5, 0, 71250),
(5, 15, 50, 15000, 1, 0, 0, 12000),
(6, 4, 56, 40000, 1, 0, 0, 100000),
(7, 16, 51, 3000, 1, 0, 0, 2500),
(8, 17, 52, 15000, 1, 5, 0, 14250),
(9, 18, 50, 15000, 1, 0, 0, 12000),
(10, 19, 55, 10000, 1, 0, 0, 10000),
(11, 20, 55, 10000, 1, 0, 0, 10000),
(12, 21, 57, 18000, 1, 10, 0, 16200),
(13, 23, 57, 18000, 1, 10, 0, 16200),
(14, 23, 59, 3500, 1, 0, 0, 3500),
(15, 24, 51, 3000, 1, 0, 500, 2500),
(16, 24, 50, 15000, 1, 0, 3000, 12000),
(17, 25, 52, 15000, 2, 5, 5000, 28500),
(18, 25, 57, 18000, 2, 10, 0, 32400),
(19, 26, 9, 3000, 1, 10, 0, 2700),
(20, 27, 53, 32000, 2, 3, 0, 62080),
(21, 28, 53, 32000, 1, 3, 0, 31040),
(22, 29, 53, 32000, 2, 3, 0, 62080),
(23, 30, 53, 32000, 2, 3, 0, 62080),
(24, 31, 53, 32000, 2, 3, 0, 62080),
(25, 32, 9, 3000, 2, 10, 0, 5400),
(26, 32, 50, 15000, 2, 0, 3000, 24000),
(27, 33, 60, 1500, 2, 0, 0, 3000),
(28, 34, 57, 18000, 1, 10, 0, 16200),
(29, 35, 58, 17000, 1, 0, 3000, 17000),
(30, 36, 53, 31040, 1, 3, 0, 31040),
(31, 37, 60, 49000, 1, 2, 0, 49000),
(32, 37, 54, 13000, 1, 0, 0, 13000),
(33, 37, 9, 2700, 1, 10, 0, 2700),
(34, 38, 60, 50000, 3, 2, 0, 147000),
(35, 38, 50, 15000, 2, 0, 3000, 24000),
(36, 38, 53, 32000, 2, 3, 0, 62080),
(37, 38, 52, 15000, 2, 5, 5000, 28500),
(38, 39, 60, 32000, 3, 3, 0, 62080),
(39, 39, 50, 50000, 2, 2, 0, 147000),
(40, 39, 53, 15000, 2, 0, 3000, 24000),
(41, 39, 52, 31040, 2, 3, 0, 31040),
(42, 40, 50, 12000, 1, 0, 3000, 12000),
(43, 40, 54, 13000, 1, 0, 0, 13000),
(44, 40, 53, 31040, 1, 3, 0, 31040),
(45, 41, 53, 32000, 2, 3, 0, 62080),
(46, 41, 57, 18000, 2, 10, 0, 32400),
(47, 41, 60, 50000, 2, 2, 0, 98000),
(48, 41, 61, 20000, 2, 0, 1000, 38000),
(49, 41, 52, 15000, 2, 5, 5000, 28500),
(50, 41, 50, 15000, 2, 0, 3000, 24000),
(51, 42, 50, 15000, 2, 0, 3000, 24000),
(52, 42, 54, 13000, 2, 0, 0, 26000),
(53, 42, 53, 32000, 2, 3, 0, 62080),
(54, 42, 60, 50000, 2, 2, 0, 98000),
(55, 42, 61, 20000, 2, 0, 1000, 38000),
(56, 42, 52, 15000, 2, 5, 5000, 28500),
(57, 1, 53, 3000, 5, 0, 0, 15000),
(58, 1, 50, 3000, 5, 0, 0, 15000);

--
-- Triggers `detail_transaksi`
--
DELIMITER $$
CREATE TRIGGER `after_insert_detail_transaksi` AFTER INSERT ON `detail_transaksi` FOR EACH ROW BEGIN
    -- Mengurangi stok produk berdasarkan jumlah pembelian
    UPDATE produk 
    SET stok = stok - NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int NOT NULL,
  `nama_diskon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `nama_diskon`) VALUES
(1, 'Produk'),
(2, 'Paket'),
(3, 'Musiman'),
(4, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `diskon_member`
--

CREATE TABLE `diskon_member` (
  `id_diskon_member` int NOT NULL,
  `type` enum('baru','biasa','lama') NOT NULL,
  `poin_min` int NOT NULL,
  `jenis_diskon` enum('persentase','potongan_nominal') NOT NULL,
  `nilai_diskon` decimal(10,0) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diskon_member`
--

INSERT INTO `diskon_member` (`id_diskon_member`, `type`, `poin_min`, `jenis_diskon`, `nilai_diskon`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(1, 'baru', 0, 'persentase', '5', '2025-02-11', '2025-03-31', 'aktif'),
(8, 'baru', 500, 'persentase', '10', '2026-01-01', '2026-12-31', 'aktif'),
(9, 'biasa', 300, 'persentase', '5', '2026-01-01', '2026-12-31', 'aktif'),
(10, 'lama', 100, 'potongan_nominal', '20000', '2026-01-01', '2026-12-31', 'aktif'),
(11, 'baru', 1000, 'persentase', '15', '2026-01-01', '2026-12-31', 'aktif'),
(12, 'biasa', 500, 'potongan_nominal', '50000', '2026-06-01', '2026-12-31', 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `diskon_musiman`
--

CREATE TABLE `diskon_musiman` (
  `id_diskon_musiman` int NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `jenis_diskon` enum('persentase','potongan_nominal') NOT NULL,
  `nilai_diskon` decimal(10,0) NOT NULL,
  `total_min_belanja` decimal(10,0) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diskon_musiman`
--

INSERT INTO `diskon_musiman` (`id_diskon_musiman`, `nama_event`, `jenis_diskon`, `nilai_diskon`, `total_min_belanja`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(2, 'Natal', 'persentase', '10', '250000', '2025-02-10', '2025-04-03', 'aktif'),
(3, 'Kemerdekaan', 'persentase', '10', '250000', '2025-02-10', '2025-03-05', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `diskon_paket`
--

CREATE TABLE `diskon_paket` (
  `id_diskon_paket` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_diskon` enum('persentase','harga_tetap','beli_x_gratis_y','potongan_nominal') NOT NULL,
  `nilai_diskon` decimal(10,0) DEFAULT NULL,
  `jumlah_beli` int DEFAULT NULL,
  `jumlah_bonus` int DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diskon_paket`
--

INSERT INTO `diskon_paket` (`id_diskon_paket`, `nama`, `jenis_diskon`, `nilai_diskon`, `jumlah_beli`, `jumlah_bonus`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(1, 'paket kopi TESHJBVSHGV', 'persentase', '20', 3, 1, '2025-02-04', '2025-02-28', 'aktif'),
(2, 'Paket beli 2 gratis 1 TES', 'potongan_nominal', '500', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(3, 'TESSS 1', 'beli_x_gratis_y', '0', 3, 1, '2025-02-05', '2025-02-28', 'aktif'),
(7, 'Tes', 'beli_x_gratis_y', '0', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(8, 'Tes2', 'beli_x_gratis_y', '0', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(10, 'Tes3', 'beli_x_gratis_y', '0', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(11, 'Tes4', 'beli_x_gratis_y', '0', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(12, 'Tes id ', 'beli_x_gratis_y', '0', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(16, 'Tes id 1', 'beli_x_gratis_y', '0', 3, 1, '2025-02-10', '2025-03-08', 'aktif'),
(17, 'Tes id 1', 'beli_x_gratis_y', '0', 3, 1, '2025-02-11', '2025-03-08', 'aktif'),
(18, 'Paket Snack ', 'beli_x_gratis_y', '0', 3, 1, '2025-02-11', '2025-03-08', 'aktif'),
(19, 'TESTING', 'potongan_nominal', '5000', 3, 0, '2025-02-12', '2025-03-08', 'aktif'),
(20, 'Testing', 'potongan_nominal', '5000', 3, 0, '2025-03-18', '2025-04-05', 'aktif'),
(21, 'Paket 1', 'beli_x_gratis_y', '0', 2, 1, '2025-03-19', '2025-04-05', 'aktif'),
(23, 'Paket Sehat', 'beli_x_gratis_y', '0', 3, 1, '2025-03-19', '2025-04-04', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `diskon_produk`
--

CREATE TABLE `diskon_produk` (
  `id_diskon_produk` int NOT NULL,
  `id_produk` int NOT NULL,
  `jenis_diskon` enum('persentase','potongan_nominal') NOT NULL,
  `nilai_diskon` decimal(10,0) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diskon_produk`
--

INSERT INTO `diskon_produk` (`id_diskon_produk`, `id_produk`, `jenis_diskon`, `nilai_diskon`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(4, 58, 'potongan_nominal', '1000', '2025-02-26', '2025-02-28', 'aktif'),
(5, 53, 'persentase', '5', '2025-02-27', '2025-02-14', 'aktif'),
(6, 52, 'potongan_nominal', '2000', '2025-02-20', '2025-02-21', 'aktif'),
(8, 60, 'persentase', '10', '2025-02-13', '2025-03-08', 'aktif'),
(9, 57, 'potongan_nominal', '500', '2025-02-11', '2025-03-08', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan'),
(4, 'Minuman'),
(5, 'Kebutuhan pribadi'),
(6, 'Kosmetik'),
(7, 'Skincare'),
(8, 'Sembako 1');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int NOT NULL,
  `id_diskon_paket` int NOT NULL,
  `id_produk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_diskon_paket`, `id_produk`) VALUES
(7, 7, 51),
(8, 8, 53),
(10, 10, 52),
(11, 11, 57),
(12, 12, 55),
(15, 16, 55),
(16, 16, 57),
(17, 17, 57),
(20, 2, 9),
(38, 19, 51),
(39, 19, 53),
(40, 19, 59),
(44, 1, 52),
(45, 1, 56),
(46, 1, 51),
(50, 20, 0),
(57, 18, 59),
(58, 18, 51),
(59, 21, 53),
(60, 21, 59),
(61, 22, 59),
(62, 22, 57),
(63, 23, 61),
(64, 23, 59);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `barcode` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poin` int DEFAULT NULL,
  `type` enum('baru','biasa','lama') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telepon`, `email`, `barcode`, `poin`, `type`) VALUES
(3, 'Ali', 'Jl. Merdeka No.1', '081234567890', 'ali@email.com', '123456789012', 0, 'baru'),
(4, 'Budi', 'Jl. Sudirman No.2', '081298765432', 'budi@email.com', '234567890123', 350, 'biasa'),
(5, 'Citra', 'Jl. Thamrin No.3', '081276543210', 'citra@email.com', '345678901234', 120, 'lama'),
(7, 'Nisa', 'Jl.Hasyim No.43', '0812345678', 'kkuerraty@gmail.com', '911886086292', 0, 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `img` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_produk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `harga_beli` decimal(10,0) DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  `stok` smallint DEFAULT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `harga_jual` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `id_diskon` int NOT NULL,
  `potongan` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `img`, `nama_produk`, `harga_beli`, `id_kategori`, `stok`, `barcode`, `harga_jual`, `diskon`, `id_diskon`, `potongan`) VALUES
(50, 'susu.jpg', 'Susu UHT Full Cream 1L', '12000', 4, 300, '8991234567890', '15000', '0', 0, '2000'),
(51, 'mie.jpg', 'Mie Instan Ayam Bawang', '2500', 1, 198, '8999876543210', '3000', '0', 0, '500'),
(52, 'gula.jpg', 'Gula Pasir 1kg', '12500', 8, 84, '8992345678901', '15000', '5', 0, '5000'),
(53, 'minyak.jpg', 'Minyak Goreng 2L', '28000', 8, 46, '8999908831804', '32000', '3', 0, '0'),
(54, 'sabun.jpg', 'Sabun Mandi Cair 250ml', '10000', 5, 116, '8994567890123', '13000', '0', 0, '0'),
(55, 'pasta.png', 'Pasta Gigi 120gr', '8500', 5, 148, '8995678901234', '10000', '0', 0, '0'),
(56, 'kopi.jpg', 'Kopi Instan Sachet 10gr', '1200', 4, 499, '8996789012345', '1500', '0', 0, '0'),
(57, 'biskuit.jpg', 'Biskuit Cokelat 200gr', '15000', 1, 73, '8997890123456', '18000', '10', 0, '0'),
(58, 'teh.jpg', 'Teh Celup 50pcs', '17000', 1, 89, '8998901234567', '20000', '0', 0, '3000'),
(59, 'lemineral.jpg', 'Air Mineral Botol 600ml', '2500', 1, 299, '8999012345678', '3500', '0', 0, '0'),
(60, 'bedak1.jpg', 'Wardah beauty powder', '35000', 6, 87, '1112345678900987', '50000', '2', 0, '0'),
(61, 'coklat.jpg', 'Silverqeen', '16000', 1, 96, '123456789012', '20000', '0', 0, '1000'),
(65, 'coklat4.jpg', 'Silverqeen', '16000', 1, 200, '123456789012', '20000', '0', 0, '1000'),
(66, 'coklat5.jpg', 'Silverqeen', '20000', 1, 3000, '123456789012', '23000', '0', 0, '1000');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int DEFAULT NULL,
  `produk_id` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `tipe` enum('masuk','keluar') DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `tanggal` date DEFAULT NULL,
  `payment_method` varchar(200) NOT NULL,
  `total_harga` decimal(10,0) DEFAULT NULL,
  `barcode` varchar(20) DEFAULT NULL,
  `id_user` int NOT NULL,
  `diskon_member` decimal(10,0) NOT NULL,
  `diskon_musiman` decimal(10,0) NOT NULL,
  `bayar` decimal(10,0) NOT NULL,
  `kembalian` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `payment_method`, `total_harga`, `barcode`, `id_user`, `diskon_member`, `diskon_musiman`, `bayar`, `kembalian`) VALUES
(1, '2025-01-08', 'cash', '24000', '1', 3, '5', '0', '20000', '4000'),
(2, '2025-02-05', 'cash', '100000', '0', 3, '0', '0', '120000', '20000'),
(7, '2025-03-04', 'cash', '31040', '0', 3, '0', '0', '32000', '960'),
(8, '2025-03-04', 'cash', '22164165', '123456789012', 4, '5', '10', '223000', '135835'),
(9, '2025-03-06', 'cash', '43040', '0', 4, '0', '0', '45000', '1960'),
(10, '2025-03-06', 'cash', '43040', '0', 4, '0', '0', '45000', '1960'),
(11, '2025-03-06', 'cash', '43040', '0', 4, '0', '0', '45000', '1960'),
(12, '2025-03-06', 'cash', '25000', '0', 4, '0', '0', '28000', '3000'),
(13, '2025-03-06', 'cash', '12000', '0', 4, '0', '0', '15000', '3000'),
(14, '2025-03-07', 'cash', '1365625', '123456789012', 4, '5', '0', '150000', '1343750'),
(15, '2025-03-07', 'cash', '12000', '0', 4, '0', '0', '0', '0'),
(16, '2025-03-08', 'cash', '15500', '0', 3, '0', '0', '20000', '4500'),
(17, '2025-03-08', 'cash', '26250', '0', 3, '0', '0', '30000', '3750'),
(18, '2025-03-08', 'cash', '12000', '0', 3, '0', '0', '15000', '3000'),
(19, '2025-03-08', 'cash', '10000', '0', 3, '0', '0', '10000', '0'),
(20, '2025-03-08', 'cash', '10000', '0', 3, '0', '0', '15000', '5000'),
(21, '2025-03-08', 'cash', '2704194', '123456789012', 3, '5', '10', '300000', '2958060'),
(22, '2025-03-08', 'cash', '81540', '0', 3, '0', '0', '90000', '8460'),
(23, '2025-03-08', 'cash', '19700', '0', 3, '0', '0', '20000', '300'),
(24, '2025-03-08', 'cash', '14500', '0', 3, '0', '0', '15000', '500'),
(25, '2025-03-08', 'cash', '60900', '0', 3, '0', '0', '62000', '1100'),
(26, '2025-03-12', 'cash', '2700', '0', 3, '0', '0', '3000', '300'),
(27, '2025-03-14', 'cash', '58976', '123456789012', 3, '5', '0', '60000', '1024'),
(28, '2025-03-14', 'cash', '29488', '123456789012', 3, '5', '0', '30000', '512'),
(29, '2025-03-14', 'cash', '58976', '123456789012', 3, '5', '0', '60000', '1024'),
(30, '2025-03-14', 'cash', '58976', '123456789012', 3, '5', '0', '60000', '1024'),
(31, '2025-03-14', 'cash', '58976', '123456789012', 3, '5', '0', '60000', '1024'),
(32, '2025-03-17', 'cash', '27930', '123456789012', 4, '5', '0', '30000', '2070'),
(33, '2025-03-18', 'credit', '93100', '123456789012', 4, '5', '0', '100000', '6900'),
(34, '2025-03-18', 'cash', '16200', '', 3, '0', '0', '20000', '3800'),
(35, '2025-03-18', 'cash', '17000', '', 3, '0', '0', '20000', '3000'),
(36, '2025-03-18', 'cash', '31040', '', 3, '0', '0', '32000', '960'),
(37, '2025-03-18', 'cash', '64700', '', 3, '5', '0', '70000', '5300'),
(38, '2025-03-18', 'cash', '2236509', '123456789012', 3, '5', '10', '230000', '634910'),
(39, '2025-03-18', 'cash', '223651', '123456789012', 3, '5', '10', '230000', '6349'),
(40, '2025-03-19', 'cash', '53238', '123456789012', 3, '5', '0', '60000', '6762'),
(41, '2025-03-19', 'cash', '241948', '123456789012', 4, '5', '10', '250000', '8052'),
(42, '2025-03-19', 'cash', '236476', '123456789012', 4, '5', '10', '240000', '3524');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `nama_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` enum('petugas','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `last_login` timestamp NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `role`, `alamat`, `no_hp`, `status`, `last_login`, `create_at`, `update_at`) VALUES
(3, 'Davika ningtias', 'Davika ', '$2y$10$Y01eWM/KZiHAXBkTbqMWger1pKsJRnmT5K7QodEnktkl2AvJRAzaW', 'admin', '  pandak', '0812345678', 'aktif', '2025-01-10 05:48:17', '2025-01-10 05:48:17', '2025-01-10 05:48:17'),
(4, 'Dimas Pamungkas', 'Dimas', '$2y$10$2VoMiRtKBmoQvN6VKsA3Q.t7ayqnHzY4iNBLSm441DS5nSDwWyvwq', 'admin', 'bhbhbhbhbhvuvyvy', '0812345678', 'aktif', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'tes', 'tes', '$2y$10$wZn0fChHGwY.E8SSLscJsu2Ws1PIEj4fEtWbUlje2fA3o/k6YPefq', 'petugas', 'jl.kjdisnd', '085725386169', 'aktif', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `diskon_member`
--
ALTER TABLE `diskon_member`
  ADD PRIMARY KEY (`id_diskon_member`);

--
-- Indexes for table `diskon_musiman`
--
ALTER TABLE `diskon_musiman`
  ADD PRIMARY KEY (`id_diskon_musiman`);

--
-- Indexes for table `diskon_paket`
--
ALTER TABLE `diskon_paket`
  ADD PRIMARY KEY (`id_diskon_paket`);

--
-- Indexes for table `diskon_produk`
--
ALTER TABLE `diskon_produk`
  ADD PRIMARY KEY (`id_diskon_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_diskon_paket` (`id_diskon_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE;

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`barcode`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diskon_member`
--
ALTER TABLE `diskon_member`
  MODIFY `id_diskon_member` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `diskon_musiman`
--
ALTER TABLE `diskon_musiman`
  MODIFY `id_diskon_musiman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diskon_paket`
--
ALTER TABLE `diskon_paket`
  MODIFY `id_diskon_paket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `diskon_produk`
--
ALTER TABLE `diskon_produk`
  MODIFY `id_diskon_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diskon_produk`
--
ALTER TABLE `diskon_produk`
  ADD CONSTRAINT `diskon_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
