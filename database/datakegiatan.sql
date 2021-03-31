-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2021 pada 05.26
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sar-operator`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `telpondarurat`
--

DROP TABLE IF EXISTS datakegiatan;

CREATE TABLE `datakegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `koderekening` varchar(20) NOT NULL,
  `subkegiatan` varchar(20) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `pptk` varchar(200) NOT NULL,
  `rencanakegiatan` varchar(200) NOT NULL,
  `anggaran` varchar(20) NOT NULL,
  `waktuentry` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `telpondarurat`
--
ALTER TABLE `datakegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `telpondarurat`
--
ALTER TABLE `datakegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
