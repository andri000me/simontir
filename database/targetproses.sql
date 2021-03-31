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
-- Database: `simontir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `progress`
--

DROP TABLE IF EXISTS progres;

CREATE TABLE `progres` (
  `id_progress` int(11) NOT NULL,
  `koderekening` varchar(20) NOT NULL,
  `subkegiatan` varchar(20) NOT NULL,
  `targetkeu` varchar(200) NOT NULL,
  `realisasikeu` varchar(200) NOT NULL,
  `targetfisik` varchar(200) NOT NULL,
  `realisasifisik` varchar(20) NOT NULL,
  `tahapanpekerjaan` varchar(20) NOT NULL,
  `kendala` varchar(20) NOT NULL,
  `tindaklanjut` varchar(20) NOT NULL,
  `waktuentry` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id_progress`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `progres`
--
ALTER TABLE `progres`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
