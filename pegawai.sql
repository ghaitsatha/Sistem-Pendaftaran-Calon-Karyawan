-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2020 pada 12.06
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nik`, `nama`, `tgl_lahir`, `email`, `alamat`, `pendidikan`, `jurusan`, `foto`) VALUES
(2, '0909090', 'mintul', '17-Maret-1981', 'ashish@yahoo.in', 'jalan jalan', 's1', 'ekonomi', ''),
(3, '1111', 'jiji', '20-Agustus-1996', 'admin@gmail.com', 'jalanin aja dulu', 'd3', 'akuntansi', 'download ('),
(4, '3329090090', 'Panji', '21-Februari-1997', 'admin@gmail.com', 'jalanin aja dulu', 'd3', 'ekonomi', 'download.p'),
(5, '3329090090', 'Panji', '21-Februari-1997', 'admin@gmail.com', 'jalanin aja dulu', 'd3', 'ekonomi', 'download.p'),
(6, '2323232', 'yuni', '31-Maret-1999', 'ashish@yahoo.in', 'jalanin aja dulu', 's1', 'ti', 'images.png'),
(7, '0909', 'sasa', '17-Juni-1998', 'ghaadra@gmail.com', 'jalanin aja dulu', 's1', 'ti', 'cara_delev'),
(8, '2222', 'juli', '20-Januari-2019', 'admin@gmail.com', 'jalanin aja dulu', 'd3', 'ekonomi', 'asian_girl'),
(9, '2323232898989', 'khilmansyah', '16-November-1998', 'cilmen@gmail.com', 'jalan yok', 's1', 'ti', ''),
(11, '7890123', 'coronce', '17-April-1998', 'huss@gmail.com', 'pergilah ', 's1', 'ekonomi', ''),
(13, '33280909090909', 'juleha', '16-Mei-1994', 'juljul@gmail.com', 'jalan yok', 's1', 'akuntansi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `username`, `password`, `level`) VALUES
(1, '3328091111899', 'Jonjon', 'admin', 'admin', 1),
(2, '330909099918', 'Paijo', 'user', 'user', 2),
(8, '12345', 'pia', 'pia', 'bakpia', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
