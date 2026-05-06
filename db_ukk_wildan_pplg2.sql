-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2026 pada 15.38
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukk_wildan_pplg2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_distributor`
--

CREATE TABLE `tbl_distributor` (
  `id_dist` int(11) NOT NULL,
  `nama_dist` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_distributor`
--

INSERT INTO `tbl_distributor` (`id_dist`, `nama_dist`, `alamat`, `no_telp`) VALUES
(3, 'Wildan Tonoto Agung', 'Kasang', '089876543218'),
(4, 'Raya Tama Putra', 'Thehok', '081234567890'),
(5, 'Pandu Pranata Putra', 'Persijam', '0987896412312'),
(6, 'M.Fachri Rofiq', 'Kasang', '0812343123221'),
(7, 'Andika Fitriansyah', 'Tangkit', '089723265512');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Obat Lembut'),
(2, 'Obat Keras'),
(3, 'Obat Batuk'),
(4, 'Obat Demam'),
(5, 'Obat Mag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode_obat` varchar(255) NOT NULL,
  `id_dist` int(11) DEFAULT NULL,
  `id_kat` int(11) DEFAULT NULL,
  `id_pet` int(11) DEFAULT NULL,
  `nama_obat` varchar(255) DEFAULT NULL,
  `masa_expire` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `id_dist`, `id_kat`, `id_pet`, `nama_obat`, `masa_expire`, `harga`, `jumlah`) VALUES
('OBT01', 4, 4, 2, 'BODREK', '2026-04-08', '35000', '200'),
('OBT02', 3, 4, 1, 'BODREK', '2026-04-16', '25000', '200'),
('OBT03', 5, 4, 1, 'PARACETAMOL', '2026-04-09', '35000', '180'),
('OBT04', 7, 5, 1, 'ANTIMO', '2026-04-09', '12000', '212'),
('OBT05', 7, 4, 1, 'XAMPP', '2026-04-30', '20000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_pet` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_pet`, `username`, `password`, `level`) VALUES
(1, 'wildan', '$2y$10$jjxYFob1iFAz7BxDBYZ3auVxRr5uMYgYkA6cS1j2rBL3pqxKEpfnm', 'ADMIN'),
(2, 'Raya', '$2y$10$jttdZwkVBZ2HxuYL5k4Q3euUUm7jsV8ccszU2gtQGz2D7MS/DDQ/.', 'KASIR'),
(3, 'Pandu', '$2y$10$UfUAOTC5CNabRAKeAwJxbOiXIdYErSlOADPhtOgCKLIjTfauCUiNm', 'KASIR'),
(4, 'Andika', '$2y$10$jiWo/Y9dAk.FsINzXvAtYuUJkpQx7UaOZdJzr1re5UDFHuw0AOape', 'ADMIN'),
(5, 'Fachri', '$2y$10$rEHthNOYDpakofnIO6D.wu6hrkYLvLk3iaIe/5.1UKR75q48O/9bi', 'KASIR');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  ADD PRIMARY KEY (`id_dist`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indeks untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode_obat`),
  ADD KEY `id_dist` (`id_dist`),
  ADD KEY `id_kat` (`id_kat`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_pet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  MODIFY `id_dist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD CONSTRAINT `tbl_obat_ibfk_1` FOREIGN KEY (`id_dist`) REFERENCES `tbl_distributor` (`id_dist`),
  ADD CONSTRAINT `tbl_obat_ibfk_2` FOREIGN KEY (`id_kat`) REFERENCES `tbl_kategori` (`id_kat`),
  ADD CONSTRAINT `tbl_obat_ibfk_3` FOREIGN KEY (`id_pet`) REFERENCES `tbl_petugas` (`id_pet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
