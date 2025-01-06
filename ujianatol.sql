-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 08:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujianatol`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `nama`, `nim`, `email`, `no_hp`, `jenis_kelamin`, `role`) VALUES
(7, 'admin', 'admin', '', 'admin', 'admin@gmail.com', '081312057698', 'Laki-laki', 'admin'),
(10, 'siswa', 'siswa', '10120709', 'siswa', 'siswa@gmail.com', '123', 'Laki-laki', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(3) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'PKN'),
(3, 'PAI');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(3) NOT NULL,
  `id_matkul` int(3) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_matkul`, `soal`, `a`, `b`, `c`, `kunci`, `tanggal`, `aktif`) VALUES
(1, 1, 'Berikan contoh penulisan huruf miring yang benar untuk penulisan judul buku…', 'Pusat bahasa. 2011. Kamus Besar bahasa Indonesia Pusat Bahasa. Edisi Keempat (Cetakan kedua). Jakarta: Gramedia Pustaka Utama.', 'Pusat bahasa. 2011. Kamus Besar bahasa Indonesia Pusat Bahasa. Edisi Keempat (Cetakan kedua). Jakarta: Gramedia Pustaka Utama.', 'Pusat bahasa. 2011. Kamus Besar bahasa Indonesia Pusat Bahasa. Edisi Keempat (Cetakan kedua). Jakarta: Gramedia Pustaka Utama.', 'a', '2022-08-09', 'Y'),
(2, 1, 'Apa fungsi dari pemakaian huruf tebal…', 'Sebagai tanda baca ', 'Untuk menegaskan bagian karangan seperti buku, bab, atau subbab.', 'Dipakai untuk memaknai sebuah karangan ', 'b', '2022-08-09', 'Y'),
(3, 1, 'Penulisan bilangan dengan huruf  yang benar adalah…', 'Dia mendapatkan bantuan 250 juta rupiah untuk mengembangkan usahanya', 'Lima puluh siswa teladan mendapat beasiswa dari pemerintah daerah', '50 siswa teladan mendapat beasiswa dari pemerintah daerah', 'b', '2022-08-09', 'Y'),
(4, 1, 'Penulisan pemenggalan kata berimbuhan yang benar adalah…', 'Peng-arang', 'Pe-ngarang', 'Pe-nga-rang', 'c', '2022-08-09', 'Y'),
(5, 1, 'Bagaimana penggunaan tanda petik tunggal pada sebuah kalimat…', 'Tergugat ‘yang digugat’', '“Tetikus” komputer ini sudah tidak berfungsi', 'Sajak ‘pahlawanku’ terdapat pada halaman 125 buku itu', 'a', '2022-08-09', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_matkul` int(3) NOT NULL,
  `nilai` varchar(4) DEFAULT NULL,
  `status` enum('Belum Terkirim','Terkirim') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `id_user`, `id_matkul`, `nilai`, `status`) VALUES
(1, 10, 1, '40', 'Belum Terkirim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `id_user` (`id_user`,`id_matkul`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ujian_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
