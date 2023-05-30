-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Bulan Mei 2023 pada 21.09
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus_dian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbdosen`
--

CREATE DATABASE `kampus_dian`;

CREATE TABLE `dbdosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbdosen`
--

INSERT INTO `dbdosen` (`id_dosen`, `nip`, `nama_dosen`, `alamat`, `tgl_lahir`, `jabatan`, `email`, `telp`) VALUES
(1, '13425367', 'Anton', 'Jalan Indah Permata', '2023-05-31', 'dosen', 'anton@gmail.com', '0823142465757'),
(2, '34566516', 'Giri', 'Pemogan', '1889-08-02', 'dosen', 'giri@gmail.com', '083629474923'),
(3, '51463256', 'Debora', 'Canggu', '1995-05-11', 'dosen', 'debora@gmail.com', '0896263478374'),
(4, '98576542', 'Marwa', 'Kuta', '1978-06-25', 'dosen', 'marwa@gmail.com', '08537732823878'),
(5, '56437646', 'Susi', 'Jimbaran', '1974-10-20', 'dosen', 'susi@gmail.com', '081805350386');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmahasiswa`
--

CREATE TABLE `dbmahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbmahasiswa`
--

INSERT INTO `dbmahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `alamat`, `tgl_lahir`, `program_studi`, `email`, `telp`, `semester`, `jenis_kelamin`) VALUES
(1, '19101437', 'Axel', 'panjer', '2000-11-07', 'TI-MDI', 'jeremia123.jm@gmail.com', '08123456789', 8, 'Laki-Laki'),
(2, '19101131', 'indri', 'renon', '2023-05-31', 'TI-MDI', 'indri@gmail.com', '08243567992', 8, 'Perempuan'),
(3, '20202020', 'Dian', 'batubulan', '2002-02-14', 'TI-KAB', 'dian@gmail.com', '08213526374', 2, 'Perempuan'),
(4, '20213768', 'Agus', 'tukad pancoran', '2001-06-12', 'SK', 'agus@gmail.com', '082143524637', 6, 'Laki-Laki'),
(5, '20218975', 'Budi', 'kerobokan', '2015-02-13', 'BD', 'budi@gmail.com', '08134525665', 4, 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmatakuliah`
--

CREATE TABLE `dbmatakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `kode_matakuliah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbmatakuliah`
--

INSERT INTO `dbmatakuliah` (`id_matakuliah`, `nama_matakuliah`, `sks`, `program_studi`, `kode_matakuliah`) VALUES
(1, 'Desain Web', 3, 'Teknik Informatika', '1A'),
(2, 'Pemrograman Web', 3, 'Teknik Informatika', '2A'),
(3, 'Pemrograman Mobile', 3, 'Teknik Informatika', '3A'),
(4, 'Pemrograman Desktop', 3, 'Teknik Informatika', '4A'),
(5, 'Pemrograman Berorientasi Objek', 3, 'Teknik Informatika', '5A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbuser`
--

CREATE TABLE `dbuser` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbuser`
--

INSERT INTO `dbuser` (`id_user`, `nama_user`, `alamat_user`, `no_hp`, `username`, `password`) VALUES
(1, 'Dewi Antari', 'Br.Lebih Duur Kaja,Gianyar', '089377828998', 'antari2534', 'siap86'),
(2, 'Yohanes', 'Br.Tegehe,Batubulan', '081287489234', 'yohanes09', 'kerja45'),
(3, 'Rizky', 'Br.Sanur,Sanur', '0843257666', 'rizky08', 'rizkyuye'),
(4, 'Sayyi', 'Br.Kaja,Sesetan', '08324365789', 'sayyi09', 'sayyi25'),
(5, 'Dewi', 'Br.Kaja,Sesetan', '08324365789', 'dewi09', 'dewi25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dbdosen`
--
ALTER TABLE `dbdosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `dbmahasiswa`
--
ALTER TABLE `dbmahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `dbmatakuliah`
--
ALTER TABLE `dbmatakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indeks untuk tabel `dbuser`
--
ALTER TABLE `dbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dbdosen`
--
ALTER TABLE `dbdosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dbmahasiswa`
--
ALTER TABLE `dbmahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dbuser`
--
ALTER TABLE `dbuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
