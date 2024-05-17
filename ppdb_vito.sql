-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2024 pada 06.39
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_vito`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(44) NOT NULL,
  `no_pendaftaran` varchar(40) NOT NULL,
  `tanggal` varchar(40) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `gelombang` varchar(40) NOT NULL,
  `jumlah` bigint(100) NOT NULL,
  `bayar` bigint(50) NOT NULL,
  `kembalian` bigint(50) NOT NULL,
  `sisa` bigint(200) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bayar`
--

INSERT INTO `data_bayar` (`id`, `no_pendaftaran`, `tanggal`, `nama_siswa`, `asal_sekolah`, `gelombang`, `jumlah`, `bayar`, `kembalian`, `sisa`, `keterangan`) VALUES
(1, 'BYR002', '14-05-2024', 'aa', 'nbmbv', 'one', 1, 47, 46, 0, 'Lunas'),
(2, 'BYR003', '14-05-2024', 'gvgsf', 'hvhgv', 'two', 40, 400, 360, 0, 'Lunas'),
(3, 'BYR004', '14-05-2024', 'hhfhff', 'gghjk', 'threee', 50, 100, 50, 0, 'Lunas'),
(4, 'BYR005', '14-05-2024', 'hhfhff', 'gghjk', 'threee', 50, 1456, 1406, 0, 'Lunas'),
(6, 'BYR006', '16-05-2024', 'aahahaha', 'dep', 'two', 40, 70, 30, 30, 'Lunas'),
(7, 'BYR007', '16-05-2024', 'bay', 'satoe', 'threee', 50, 72, 22, 22, 'Lunas'),
(8, 'byr008', '16-05-2024', 'wildan', 'tobat', 'one', 1, 2, 1, 1, 'Lunas'),
(9, 'byr009', '16-05-2024', 'azaki', 'tobat', 'two', 40, 40, 0, 0, 'Lunas'),
(10, 'byr010', '16-05-2024', 'sasa', 'tobat', 'four', 400000, 400000, 0, 0, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_ortu` varchar(500) NOT NULL,
  `alamat_ortu` varchar(500) NOT NULL,
  `no_telOrtu` varchar(500) NOT NULL,
  `pekerjaan_ortu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(2, 'hbhvhgvhga', 'nbnhvghfh', 'a', '', 'hvhgvgh'),
(3, 'gvgsf', 'hvhhv', 'bjhvgh', '', 'bhnhvn'),
(5, 'hhfhff', 'hfik', 'guuk', '', 'fghj'),
(6, 'hhfhff', 'hfik', 'guuk', '', 'fghj'),
(7, 'hhfhff', 'hfik', 'guuk', '', 'fghj'),
(11, 'aahahaha', 'ttt', 'jdhwd', '', 'joki'),
(12, 'bay', 'su', 'kepo', '', 'nguli'),
(13, 'wildan', 'toto', 'baca', '', 'joki'),
(14, 'azaki', '', '', '', 'joki'),
(15, 'sasa', '', '', '', 'joki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(50) NOT NULL,
  `no_pendaftaran` varchar(500) NOT NULL,
  `nama_siswa` varchar(500) NOT NULL,
  `ttl` varchar(500) NOT NULL,
  `jenis_kel` varchar(500) NOT NULL,
  `agama` varchar(500) NOT NULL,
  `no_telSiswa` varchar(500) NOT NULL,
  `asal_sekolah` varchar(500) NOT NULL,
  `alamat_sekolah` varchar(500) NOT NULL,
  `jurusan` varchar(500) NOT NULL,
  `tanggal` varchar(500) NOT NULL,
  `ukuran` varchar(500) NOT NULL,
  `gelombang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(2, 'BYR002', 'bagas', 'bhbhv', '', 'Islam', '6757656', 'nbmbv', 'a', 'AKUTANSI KEUANGAN DAN LEMBAGA', '07-05-2024', 'M', 'one'),
(3, 'BYR003', 'sagab', '765765', 'Laki-Laki', 'Islam', '5765', 'lab', 'bnbbbvmh', 'AKUTANSI KEUANGAN DAN LEMBAGA', '07-05-2024', 'M', 'two'),
(5, 'BYR004', 'vito', '5454546', 'Perempuan', 'Kristen', '0077079', 'aspek', 'tttt08080', 'MENEJEMEN PERKANTORAN', '14-05-2024', 'XXL', 'threee'),
(6, 'BYR005', 'hhfhff', '5454546', 'Perempuan', 'Kristen', '0077079', 'gghjk', 'tttt08080', 'DESAIN KOMUNIKASI VISUAL', '14-05-2024', 'XXXL', 'threee'),
(11, 'BYR006', 'aahahaha', '21.2008', 'Laki-Laki', 'Islam', '97907', 'dep', 'jggjkjk', 'AKUTANSI KEUANGAN DAN LEMBAGA', '15-05-2024', 'L', 'two'),
(12, 'BYR007', 'bay', 'cilem,21', 'Laki-Laki', 'Islam', '86890', 'satoe', 'wanher', 'REKAYASA PERANGKAT LUNAK', '16-05-2024', 'XXXL', 'threee'),
(13, 'BYR008', 'wildan', 'podomoro,8', 'Laki-Laki', 'Islam', '87', 'tobat', 'depok', 'DESAIN KOMUNIKASI VISUAL', '16-05-2024', 'XL', 'one'),
(14, 'BYR009', 'azaki', 'podomoro,8', 'Laki-Laki', 'Katolik', '0889', 'tobat', 'cikeas', 'DESAIN KOMUNIKASI VISUAL', '16-05-2024', '', 'two'),
(15, 'BYR010', 'sasa', 'podomoro,8', '', 'Islam', '0077079', 'tobat', 'tttt08080', 'REKAYASA PERANGKAT LUNAK', '16-05-2024', '', 'four');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `no_telWali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(1, 'hbhvhgvhga', 'vggcfcfg', 'a', '', 'bhghv'),
(2, 'hbhvhgvhga', 'vggcfcfg', 'a', '', 'bhghv'),
(3, 'gvgsf', 'bvnb', 'bhbhbn', '', 'bvbv'),
(4, 'gvgsf', 'bvnb', 'bhbhbn', '', 'bvbv'),
(5, 'hhfhff', 'klb', 'gkl.', '', 'hjl'),
(6, 'hhfhff', 'klb', 'gkl.', '', 'hjl'),
(7, 'hhfhff', 'klb', 'gkl.', '', 'hjl'),
(8, 'hhfhff', 'klb', 'gkl.', '', 'hjl'),
(9, 'hhfhff', 'klb', 'gkl.', '', 'hjl'),
(10, 'hhfhff', 'klb', 'gkl.', '', 'hjl'),
(11, 'aahahaha', 'ddjah', 'jdlf', '', 'kep'),
(12, 'bay', 'keke', 'cikeas', '', 'baca'),
(13, 'wildan', 'we', '5381', '', 'hahaha'),
(14, 'azaki', 'we', '', '', 'hahaha'),
(15, 'sasa', 'we', '', '', 'hahaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(55) NOT NULL,
  `gelombang` varchar(55) NOT NULL,
  `nominal` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(1, 'one', 1),
(3, 'two', 40),
(6, 'threee', 50),
(7, 'four', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(55) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(16, 'Vito', 'vito', '1', 'admin'),
(21, 'bagas', 'bagas', '1', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
