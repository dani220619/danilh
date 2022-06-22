-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jun 2022 pada 04.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dlh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_owner` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `nama_aplikasi` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `copy_right` varchar(50) DEFAULT NULL,
  `versi` varchar(20) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `nama_owner`, `alamat`, `tlp`, `title`, `nama_aplikasi`, `logo`, `copy_right`, `versi`, `tahun`) VALUES
(1, 'Dani Hakim', 'JL. Rawabali', '0812-9936-9059', 'Dani', 'Dani', 'dfsafsdf.jpg', 'Copy Right ©', '1.0.0.0', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `user_id` int(11) NOT NULL,
  `pos_lamar` varchar(50) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `alamat_tinggal` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `org_terdekat` varchar(100) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `ber_ditempatkan` varchar(20) NOT NULL,
  `peng_harapan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`user_id`, `pos_lamar`, `no_ktp`, `tempat_tgl_lahir`, `jenis_kelamin`, `agama`, `gol_darah`, `status`, `alamat_ktp`, `alamat_tinggal`, `no_tlp`, `org_terdekat`, `skill`, `ber_ditempatkan`, `peng_harapan`) VALUES
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'IT PROGRAMMER', '3302062206990005', 'Banyumas, 22 Juni 1999', 'laki-laki', 'Islam', 'B', 'Belum Nikah', 'Sirau, Kemranjen, Banyumas', 'Sirau, Kemranjen, Banyumas', '085797887711', 'Munir no: +62 895-4176-78877', 'php, html, css, javasecript', 'Tidak, Saya lebih se', '5jt, kalo bisa wfh 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_terahir`
--

CREATE TABLE `pendidikan_terahir` (
  `id_user` int(11) NOT NULL,
  `jen_pen_terahir` varchar(50) NOT NULL,
  `nama_instusi` varchar(80) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `jen_pen_terahir1` varchar(50) NOT NULL,
  `nama_instusi1` varchar(80) NOT NULL,
  `jurusan1` varchar(50) NOT NULL,
  `tahun_lulus1` varchar(10) NOT NULL,
  `ipk1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan_terahir`
--

INSERT INTO `pendidikan_terahir` (`id_user`, `jen_pen_terahir`, `nama_instusi`, `jurusan`, `tahun_lulus`, `ipk`, `jen_pen_terahir1`, `nama_instusi1`, `jurusan1`, `tahun_lulus1`, `ipk1`) VALUES
(16, '', '', '', '', '', '', '', '', '', ''),
(54, 'S1', 'Universitas Teknologi Yogyakarta', 'Informatika', '2021', '3.14', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `posisi_terahir` varchar(100) NOT NULL,
  `pendapatan_terahir` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nama_perusahaan1` varchar(100) NOT NULL,
  `posisi_terahir1` varchar(100) NOT NULL,
  `pendapatan_terahir1` varchar(50) NOT NULL,
  `tahun1` varchar(10) NOT NULL,
  `nama_perusahaan2` varchar(100) NOT NULL,
  `posisi_terahir2` varchar(100) NOT NULL,
  `pendapatan_terahir2` varchar(50) NOT NULL,
  `tahun2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pekerjaan`
--

INSERT INTO `riwayat_pekerjaan` (`id_user`, `nama_perusahaan`, `posisi_terahir`, `pendapatan_terahir`, `tahun`, `nama_perusahaan1`, `posisi_terahir1`, `pendapatan_terahir1`, `tahun1`, `nama_perusahaan2`, `posisi_terahir2`, `pendapatan_terahir2`, `tahun2`) VALUES
(54, 'Freelance', 'Programmer', '4Jt', '2021-2022', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pelatihan`
--

CREATE TABLE `riwayat_pelatihan` (
  `id_user` int(11) NOT NULL,
  `nama_kursus` varchar(100) NOT NULL,
  `sertifikat` varchar(30) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nama_kursus1` varchar(100) NOT NULL,
  `sertifikat1` varchar(100) NOT NULL,
  `tahun1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pelatihan`
--

INSERT INTO `riwayat_pelatihan` (`id_user`, `nama_kursus`, `sertifikat`, `tahun`, `nama_kursus1`, `sertifikat1`, `tahun1`) VALUES
(54, 'Kursus B inggris', 'Ada', '2021-2022', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `full_name`, `password`, `id_level`, `is_active`) VALUES
(1, 'admin@gmail.com', 'Dani ', '$2y$10$sjPrxBpeFs438dZD3F67MOgd3Ub0dNvYhobdIUok1HFmkIC61BnMG', 1, 'Y'),
(54, 'danilukman2206@gmail.com', 'DANI LUKMAN HAKIM', '$2y$05$6lQhPEV5gjaCrGuqlzBmC.KIsF9lnVsoA6FNbnNEHBgKwVgf/.SCi', 2, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_userlevel`
--

CREATE TABLE `tbl_userlevel` (
  `id_level` int(11) UNSIGNED NOT NULL,
  `nama_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_userlevel`
--

INSERT INTO `tbl_userlevel` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  MODIFY `id_level` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
