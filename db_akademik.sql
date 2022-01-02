-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2022 pada 08.29
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
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `tgl_lahir`, `email`, `jenis_kelamin`, `alamat`) VALUES
('1801092002', 'Haura Fathinah', '2000-09-21', 'haura@gmail.com', 'Perempuan', 'Jakarta Barat'),
('1801092003', 'Ronaldion Aditya', '2000-06-10', 'adit@gmail.com', 'Laki-Laki', 'Pariaman'),
('1801092004', 'Irna Fitri', '1999-06-10', 'irna@gmail.com', 'Perempuan', 'Lubuk alung'),
('1801092006', 'Zelli Oktariana', '2000-10-04', 'zelli@gmail.com', 'Perempuan', 'Padang'),
('1801092007', 'Teten Dwi Rahmi Kiflinda', '2000-06-04', 'teten@gmail.com', 'Perempuan', 'Padang'),
('1801092008', 'Sarinah', '2000-10-04', 'sarinah@gmail.com', 'Perempuan', 'Pariaman'),
('1801092009', 'Fitri Handayani', '2000-10-04', 'nanda@gmail.com', 'Perempuan', 'Pariaman'),
('1801092010', 'Suri Hanifah', '2000-10-04', 'nepa@gmail.com', 'Perempuan', 'Solok'),
('1801092011', 'Muhammad Fauzi', '1999-10-04', 'fauzi@gmail.com', 'Laki-Laki', 'Agam'),
('1801092012', 'Rizna', '2000-10-04', 'rizna@gmail.com', 'Perempuan', 'Medan'),
('1801092025', 'Rose', '2021-12-01', 'rose@mail.com', 'Laki-Laki', 'Padang'),
('ad', 'ad', '2021-12-31', 'a@w', 'Laki-Laki', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
