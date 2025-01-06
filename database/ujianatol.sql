-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2022 pada 05.27
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
-- Database: `ujianatol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_user` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `nama`, `nim`, `email`, `no_hp`, `jenis_kelamin`, `role`) VALUES
(1, 'john', 'john123', 'john shelby', '101202', 'john@gmail.com', '08636722233', 'Laki-laki', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa_indonesia`
--

CREATE TABLE `bahasa_indonesia` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahasa_indonesia`
--

INSERT INTO `bahasa_indonesia` (`id_soal`, `soal`, `a`, `b`, `c`, `kunci`, `tanggal`, `aktif`) VALUES
(1, 'Berikan contoh penulisan huruf miring yang benar untuk penulisan judul buku…', 'Pusat bahasa. 2011. Kamus Besar bahasa Indonesia Pusat Bahasa. Edisi Keempat (Cetakan kedua). Jakarta: Gramedia Pustaka Utama.', 'Pusat bahasa. 2011. Kamus Besar bahasa Indonesia Pusat Bahasa. Edisi Keempat (Cetakan kedua). Jakarta: Gramedia Pustaka Utama.', 'Pusat bahasa. 2011. Kamus Besar bahasa Indonesia Pusat Bahasa. Edisi Keempat (Cetakan kedua). Jakarta: Gramedia Pustaka Utama.', 'a', '2022-08-09', 'Y'),
(2, 'Apa fungsi dari pemakaian huruf tebal…', 'Sebagai tanda baca ', 'Untuk menegaskan bagian karangan seperti buku, bab, atau subbab.', 'Dipakai untuk memaknai sebuah karangan ', 'b', '2022-08-09', 'Y'),
(3, 'Penulisan bilangan dengan huruf  yang benar adalah…', 'Dia mendapatkan bantuan 250 juta rupiah untuk mengembangkan usahanya', 'Lima puluh siswa teladan mendapat beasiswa dari pemerintah daerah', '50 siswa teladan mendapat beasiswa dari pemerintah daerah', 'b', '2022-08-09', 'Y'),
(4, 'Penulisan pemenggalan kata berimbuhan yang benar adalah…', ' Peng-arang', 'Pe-ngarang', '    Pe-nga-rang', 'c', '2022-08-09', 'Y'),
(5, 'Bagaimana penggunaan tanda petik tunggal pada sebuah kalimat…', ' Tergugat ‘yang digugat’', '“Tetikus” komputer ini sudah tidak berfungsi', 'Sajak ‘pahlawanku’ terdapat pada halaman 125 buku itu', 'a', '2022-08-09', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_indo`
--

CREATE TABLE `nilai_indo` (
  `id_nilai` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `benar` int(10) NOT NULL,
  `salah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_indo`
--

INSERT INTO `nilai_indo` (`id_nilai`, `score`, `benar`, `salah`) VALUES
(1, 100, 5, 0),
(2, 60, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pai`
--

CREATE TABLE `nilai_pai` (
  `id_nilai` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `benar` int(10) NOT NULL,
  `salah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_pai`
--

INSERT INTO `nilai_pai` (`id_nilai`, `score`, `benar`, `salah`) VALUES
(3, 80, 4, 1),
(4, 80, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pkn`
--

CREATE TABLE `nilai_pkn` (
  `id_nilai` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `benar` int(10) NOT NULL,
  `salah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_pkn`
--

INSERT INTO `nilai_pkn` (`id_nilai`, `score`, `benar`, `salah`) VALUES
(3, 60, 3, 2),
(4, 60, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pai`
--

CREATE TABLE `pai` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pai`
--

INSERT INTO `pai` (`id_soal`, `soal`, `a`, `b`, `c`, `kunci`, `tanggal`, `aktif`) VALUES
(1, 'Nabi yang mendapat julukan bapak para nabi dan bergelar nabi ulul azmi adalah…\r\n\r\n\r\n', 'Nabi Nuh as\r\n\r\n', 'Nabi Ibrahim as', 'Nabi Isa as', 'b', '2022-08-09', 'Y'),
(2, 'Berikut yang termasuk sifat wajib Rasul adalah', 'amanah', 'kizib', 'khianat', 'a', '2022-08-09', 'Y'),
(3, 'Apa yang membuat keseluruhan badan anjing itu haram ', 'air liurnya', 'karena sudah dari sananya', 'kulitnya', 'a', '2022-08-09', 'Y'),
(4, 'jika suatu daging haram dibersihkan sedemikian rupa hingga tidak ada penyakitnya apakah akan menjadi halal ?', 'tidak, karena haram sudah menjadi ketentuan dari Allah ', 'iya, karena yang menjadikan haram adaalh penyakit penyakit yang ada', 'tidak, karena mustahil menghapus penyakit bawaan dari daging hewan tersebut', 'a', '2022-08-09', 'Y'),
(5, 'jumlah nabi dan rasul yang wajib kita imani ', '25', '24', '10', 'a', '2022-08-09', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkn`
--

CREATE TABLE `pkn` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pkn`
--

INSERT INTO `pkn` (`id_soal`, `soal`, `a`, `b`, `c`, `kunci`, `tanggal`, `aktif`) VALUES
(1, 'tolak ukur utama yang mengandung nilai akademis suatu indi1idu dalam dunia pekerjaan disebut', 'soft case', 'soft skill', 'good skill', 'b', '2022-08-09', 'Y'),
(2, 'Di bawah ini yang termasuk dalam makna dari sila ke -1 adalah', 'Memaksakan suatu individu terhadap suatu agama atau kepercayaan', 'Memberikan sesuatu kepada orang lain karena memang sesuatu itu merupakan haknya', 'Mengembangkan sikap menghormati antar umat beragama', 'c', '2022-08-09', 'Y'),
(3, 'setiap kebijakan atau keputusan pemerintah itu harus berdasarkan kepada', 'kebutuhan rakyat', 'kesepakatan rakyat', 'jawaban A dan B benar', 'c', '2022-08-09', 'Y'),
(4, 'yang bukan termasuk ke dalam makna atau pengertian pokok dari sila ke 2 adalah', 'kesejahteraan sosial', 'adil', 'kemanusiaan', 'a', '2022-08-09', 'Y'),
(5, 'di bawah ini pasal mana yang termasuk ke dalam atau berkaitan dengan dunia pendidikan', 'pasal 31', 'pasal 1', 'pasal 27', 'a', '2022-08-09', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `nilai` varchar(3) DEFAULT NULL,
  `status` enum('Belum Terkirim','Terkirim') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `id_user`, `matkul`, `nilai`, `status`) VALUES
(1, 1, 'Bahasa Indonesia', '10', 'Belum Terkirim'),
(2, 1, 'PKN', '10', 'Belum Terkirim'),
(3, 1, 'PAI', '10', 'Belum Terkirim');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `bahasa_indonesia`
--
ALTER TABLE `bahasa_indonesia`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `nilai_indo`
--
ALTER TABLE `nilai_indo`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `nilai_pai`
--
ALTER TABLE `nilai_pai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `nilai_pkn`
--
ALTER TABLE `nilai_pkn`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pai`
--
ALTER TABLE `pai`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `pkn`
--
ALTER TABLE `pkn`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahasa_indonesia`
--
ALTER TABLE `bahasa_indonesia`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai_indo`
--
ALTER TABLE `nilai_indo`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai_pai`
--
ALTER TABLE `nilai_pai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nilai_pkn`
--
ALTER TABLE `nilai_pkn`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pai`
--
ALTER TABLE `pai`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pkn`
--
ALTER TABLE `pkn`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
