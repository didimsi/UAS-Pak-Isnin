-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 14 Jun 2026 pada 09.44
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
-- Database: `bbni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `idnasabah` varchar(10) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `nmnasabah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`idnasabah`, `norek`, `nmnasabah`) VALUES
('NS8901', '088577809080', 'Dimsi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`idnasabah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
