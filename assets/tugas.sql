-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2024 pada 07.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `segitiga`
--

CREATE TABLE `segitiga` (
  `id` int(11) NOT NULL,
  `alas` float NOT NULL,
  `sisi_miring` float NOT NULL,
  `tinggi` float NOT NULL,
  `luas` float NOT NULL,
  `keliling` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `segitiga`
--

INSERT INTO `segitiga` (`id`, `alas`, `sisi_miring`, `tinggi`, `luas`, `keliling`) VALUES
(1, 13, 14, 5.19615, 33.775, 32.1962),
(2, 12, 13, 5, 30, 30),
(3, 14, 15, 5.38516, 37.6962, 34.3852);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `segitiga`
--
ALTER TABLE `segitiga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `segitiga`
--
ALTER TABLE `segitiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
