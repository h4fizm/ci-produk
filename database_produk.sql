-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2023 pada 16.31
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_produk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `status` enum('Dijual','Tidak dapat Dijual') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `kategori`, `harga`, `status`) VALUES
(6, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 'L QUEENLY', '12.500', 'Dijual'),
(9, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', ' L MTH AKSESORIS (IM)', '1.000', 'Dijual'),
(11, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 'L MTH AKSESORIS (IM)', '1.000', 'Dijual'),
(12, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 'L MTH AKSESORIS (IM)', '12.500', 'Tidak dapat Dijual'),
(15, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 'L MTH AKSESORIS (IM)', '12.500', 'Dijual'),
(17, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 'L MTH AKSESORIS (IM)', '1.000', 'Dijual'),
(18, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 'L MTH AKSESORIS (IM)', '13.000', 'Tidak dapat Dijual'),
(19, 'ALUMUNIUM FOIL PET SHEET 250mm IM', ' L MTH AKSESORIS (IM)', '1.000', 'Tidak dapat Dijual'),
(23, 'ARM SUPPORT KECIL', 'L MTH TABUNG (LK)', '13.000', 'Tidak dapat Dijual'),
(24, 'ARM SUPPORT PENDEK POLOS', 'L MTH TABUNG (LK)', '13.000', 'Dijual'),
(27, 'ARM SUPPORT S IM', 'L MTH AKSESORIS (IM)', '1.000', 'Tidak dapat Dijual'),
(28, 'ARM SUPPORT T (IMPORT)', 'L MTH AKSESORIS (IM)', '13.000', 'Dijual'),
(29, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 'L MTH TABUNG (LK)', '10.000', 'Dijual'),
(50, 'BLACK LASER TONER FP-T3 (100gr)', 'L MTH AKSESORIS (IM)', '13.000', 'Tidak dapat Dijual'),
(56, 'BODY PRINTER CANON IP2770', 'SP MTH SPAREPART (LK)', '500', 'Dijual'),
(58, ' BODY PRINTER T13X', 'SP MTH SPAREPART (LK)', '15.000', 'Dijual'),
(59, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 'CI MTH TINTA LAIN (IM)', '10.000', 'Dijual'),
(60, ' BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000', 'CI MTH TINTA LAIN (IM)', '10.000', 'Tidak dapat Dijual'),
(61, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 'CI MTH TINTA LAIN (IM)', '1.500', 'Dijual'),
(62, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 'CI MTH TINTA LAIN (IM)', '1.500', 'Tidak dapat Dijual'),
(63, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 'CI MTH TINTA LAIN (IM)', '1.500', 'Tidak dapat Dijual'),
(64, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)\r\n', 'CI MTH TINTA LAIN (IM)\r\n', '1,000\r\n', 'Tidak dapat Dijual'),
(65, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)\r\n', 'CI MTH TINTA LAIN (IM)\r\n', '1,500', 'Tidak dapat Dijual'),
(66, ' BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 'CI MTH TINTA LAIN (IM)', '1.500', 'Dijual'),
(67, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 'CI MTH TINTA LAIN (IM)', '1.000', 'Tidak dapat Dijual'),
(68, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 'CI MTH TINTA LAIN (IM)', '1.500', 'Tidak dapat Dijual'),
(70, 'BOTOL KOTAK 100ML LK', 'L MTH AKSESORIS (LK)', '1.000', 'Dijual'),
(72, ' BOTOL 10ML IM', 'S MTH STEMPEL (IM)', '1.000', 'Tidak dapat Dijual');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
