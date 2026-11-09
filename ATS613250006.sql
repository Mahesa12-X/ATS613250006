-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2026 pada 08.13
-- Versi server: 10.11.16-MariaDB
-- Versi PHP: 8.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `ats613250006`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_006`
--

CREATE TABLE `member_006` (
  `id` int(10) NOT NULL,
  `email` varchar(34) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `aktive` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member_006`
--

INSERT INTO `member_006` (`id`, `email`, `password`, `nama`, `aktive`) VALUES
(1, 'admin@gmail.com', 'admin', 'Muhammad Mahesa Jenar', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil006`
--

CREATE TABLE `mobil006` (
  `no_id` int(10) NOT NULL,
  `nomor_kendaraan` varchar(12) DEFAULT NULL,
  `jenis_kendaraan` enum('Sedan','Pickup','Truk','Bemo') DEFAULT NULL,
  `pemilik` varchar(50) DEFAULT NULL,
  `tahun_pembuatan` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil006`
--

INSERT INTO `mobil006` (`no_id`, `nomor_kendaraan`, `jenis_kendaraan`, `pemilik`, `tahun_pembuatan`) VALUES
(4, 'D 5678 DEF', 'Pickup', 'GeusanRaditya', '2021'),
(5, 'D 9012 GHI', 'Truk', 'KhalifahAlfajri', '2023'),
(6, 'D 1234 MCG', 'Sedan', 'Muhammad Mahesa', '2022');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `member_006`
--
ALTER TABLE `member_006`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil006`
--
ALTER TABLE `mobil006`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member_006`
--
ALTER TABLE `member_006`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mobil006`
--
ALTER TABLE `mobil006`
  MODIFY `no_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
