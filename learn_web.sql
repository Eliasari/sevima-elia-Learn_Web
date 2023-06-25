-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 03.02
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `people`
--

CREATE TABLE `people` (
  `idPeople` int(11) NOT NULL,
  `namaPeople` varchar(255) NOT NULL,
  `alamatPeople` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `people`
--

INSERT INTO `people` (`idPeople`, `namaPeople`, `alamatPeople`, `username`, `password`) VALUES
(1, '', '', 'siswi1', '123456'),
(2, 'siswi2', 'Blitar', 'siswi2', '123456'),
(3, '', '', '_eliasaa_', 'e10adc3949ba59abbe56e057f20f883e'),
(4, '', '', 'elisa', 'e10adc3949ba59abbe56e057f20f883e'),
(5, '', '', 'elisaa', '123456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`idPeople`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `people`
--
ALTER TABLE `people`
  MODIFY `idPeople` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
