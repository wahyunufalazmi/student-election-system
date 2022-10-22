-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2022 pada 10.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `nama` varchar(30) NOT NULL,
  `komen` text NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `cek` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`nama`, `komen`, `waktu`, `cek`) VALUES
('ANDRAXX', 'kalian milih yang mana gaes ?', '22-03-2021, 22:27:37', 'cek'),
('anonymous27', 'enaknya milih siapa ya?', '22-03-2021, 22:28:34', 'cek'),
('anjayani', 'ga tau ah males pengin beli truck', '23-03-2021, 11:42:29', 'cek'),
('GolputBoy', 'golput adalah jalan ninjaku', '23-03-2021, 11:43:28', 'cek'),
('dinusian01', 'milih yang terbaik buat udinus lah', '23-03-2021, 11:44:20', 'cek'),
('user_android', 'klo aku sih ngasal aja wkwk', '23-03-2021, 11:46:01', 'cek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `semester` int(1) NOT NULL,
  `minat` varchar(100) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `tanggallahir` varchar(20) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` char(14) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `jurusan`, `fakultas`, `password`) VALUES
(81, 'WNA', 'A11.2018.12345', 'TEKNIK INFORMATIKA', 'ILMU KOMPUTER', '123'),
(856, 'ANDRA', 'A11.2018.11111', 'TEKNIK INFORMATIKA', 'ILMU KOMPUTER', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
