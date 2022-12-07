-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2022 pada 06.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapakwanita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(5) NOT NULL,
  `foto_barang` text NOT NULL,
  `deskripsi_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `foto_barang`, `deskripsi_barang`) VALUES
(1, 'Chanel Cushion Les Beiges Healthy Glow Gel Touch F', 2000000, 5, 'img/product/p1.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Gucci Parfume Flora Gorgeous Gardenia', 1350000, 5, 'img/product/p2.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'skin Forever PerfeDiorct Cushion Foundation', 650000, 5, 'img/product/p3.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id_keranjang` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `foto_barang` text NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  `subtotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keranjang`
--

INSERT INTO `tbl_keranjang` (`id_keranjang`, `username`, `nama_barang`, `foto_barang`, `jumlah`, `harga`, `total`, `subtotal`) VALUES
(4, 'asaa', 'Gucci Parfume Flora Gorgeous Gardenia', 'img/product/p2.jpeg', 0, '1350000', 1350000, 0),
(6, 'asaa', 'Chanel Cushion Les Beiges Healthy Glow Gel Touch F', 'img/product/p1.jpeg', 1, '2000000', 2000000, 0),
(71, 'zalfa', 'skin Forever PerfeDiorct Cushion Foundation', 'img/product/p3.jpeg', 0, '650000', 650000, 0),
(72, 'zalfa', 'Gucci Parfume Flora Gorgeous Gardenia', 'img/product/p2.jpeg', 0, '1350000', 1350000, 0),
(73, 'zalfa', 'skin Forever PerfeDiorct Cushion Foundation', 'img/product/p3.jpeg', 0, '650000', 650000, 0),
(74, '', 'skin Forever PerfeDiorct Cushion Foundation', 'img/product/p3.jpeg', 0, '650000', 650000, 0),
(75, 'alya', 'Chanel Cushion Les Beiges Healthy Glow Gel Touch F', 'img/product/p1.jpeg', 1, '2000000', 2000000, 0),
(76, 'alyaa', 'Gucci Parfume Flora Gorgeous Gardenia', 'img/product/p2.jpeg', 3, '1350000', 1350000, 0),
(77, 'gunawan', 'Chanel Cushion Les Beiges Healthy Glow Gel Touch F', 'img/product/p1.jpeg', 3, '2000000', 2000000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `id_pembelian` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL,
  `jumlah_beli` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `detail_alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kodepos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_kirim` int(5) NOT NULL,
  `id_pembelian` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `status_pengiriman` varchar(30) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `katasandi` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `katasandi`, `email`, `level`) VALUES
(17, 'QWE', '$2y$10$POSnu0c4YjrbyAHYDD/MCeHRV1Qn3y66LJ1BQj/Tx71RZOP1t4XTy', '@GMAIL.COM', 'user'),
(18, 'zalfa', '$2y$10$E0YVDXLfgHbGgfl2psw/6Of4ATeqBE4934iowIiZyR2zgDIQZRGfy', 'alynszlfa@gmail.com', 'user'),
(19, 'asaa', '$2y$10$kDJYRyZe52RovYVdRLGLLOCr2r5IHHpRgIeJlZ6TWOOH/nl.zUJrm', 'asbadv@gmail.com', 'user'),
(20, 'zalfa', '$2y$10$.phQld4F1Wkc5gs4EoG1SOW9SzqCi45sWrPGi53OyJYEHIdP0Gpp6', 'asjha@gmail', 'user'),
(44, 'a', '$2y$10$R9rvjGQmoWiSRTvz35HDR.I9w.TD997TibA1bSRyq4GVsAJe046t6', 'aa', 'user'),
(50, 'alya', '$2y$10$3f0VOfdzdikXX4v95b86m.R5taUJ3qk3/BhyZaiXf2SwDcB0S8K7a', 'alyanisa@gmail.com', 'user'),
(51, 'alya', '$2y$10$oy9rJ36v/CnKJlJ5aQErI.HIVXvzGm2GWahTDtCycevcNgU2e9uB.', 'zalfa@gmail.com', 'user'),
(52, 'alyaa', '$2y$10$hIFjJc1.5LX4aXQhG93vMe3GxcuraXHYF5g4X0ypJucEDcZ8u99B6', 'nisa@gmail.com', 'user'),
(53, 'gunawan', '$2y$10$VI/mgPV3//Uusq9rmnEixe8xk1sDwrE.Eh7VfpYn8c2t26.j.qWmW', 'gunawan@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id_keranjang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_kirim` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
