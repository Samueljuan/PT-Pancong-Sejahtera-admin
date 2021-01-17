-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 05:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang_barang`
--

CREATE TABLE `gudang_barang` (
  `idBarang` varchar(10) NOT NULL,
  `namaBarang` text NOT NULL,
  `kodeGudang` varchar(10) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `jatuhTempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang_barang`
--

INSERT INTO `gudang_barang` (`idBarang`, `namaBarang`, `kodeGudang`, `tanggalMasuk`, `jatuhTempo`) VALUES
('A123P001', 'Perhiasan', 'A1234', '2021-01-13', '2021-01-25'),
('A123P002', 'Emas Batang', 'B891', '2021-01-24', '2021-01-24'),
('A123P003', 'HONDA MOBILIO', 'A1242', '2021-01-13', '2021-02-01'),
('A123P005', 'KAWASAKI NINJA', 'A1231', '2021-01-13', '2021-02-06'),
('B123P001', 'LaptopASUS', 'A124', '2021-01-13', '2021-01-24'),
('B123P002', 'Gelang Silver', 'A1242', '2021-01-13', '2021-01-13'),
('C123P021', 'SAMSUNG A30S', 'B895', '2021-01-13', '2021-02-05'),
('C123P023', 'Gelang Emas', 'A123', '2021-01-13', '2021-01-31'),
('P001', 'Gelang Silver', 'A123', '2021-01-13', '2021-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `gudang_keluar`
--

CREATE TABLE `gudang_keluar` (
  `idBarang` varchar(10) NOT NULL,
  `namaBarang` text NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `idPegawai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gudang_masuk`
--

CREATE TABLE `gudang_masuk` (
  `idPelanggan` varchar(10) NOT NULL,
  `idBarang` varchar(10) NOT NULL,
  `namaBarang` text NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `jatuhTempo` date NOT NULL,
  `idPegawai` varchar(5) NOT NULL,
  `kodeGudang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang_masuk`
--

INSERT INTO `gudang_masuk` (`idPelanggan`, `idBarang`, `namaBarang`, `tanggalMasuk`, `jatuhTempo`, `idPegawai`, `kodeGudang`) VALUES
('A123', 'A123P001', 'Perhiasan', '2021-01-13', '2021-01-25', 'G001', 'A1234'),
('B123', 'A123P002', 'Emas Batang', '2021-01-24', '2021-01-24', 'G001', 'B891'),
('B123', 'A123P003', 'HONDA MOBILIO', '2021-01-13', '2021-02-01', 'G001', 'A1242'),
('B123', 'A123P005', 'KAWASAKI NINJA', '2021-01-13', '2021-02-06', 'G001', 'A1231'),
('B123', 'B123P001', 'LaptopASUS', '2021-01-13', '2021-01-24', 'G001', 'A124'),
('B123', 'B123P002', 'Gelang Silver', '2021-01-13', '2021-01-13', 'G001', 'A1242'),
('C132', 'C123P021', 'SAMSUNG A30S', '2021-01-13', '2021-02-05', 'G001', 'B895'),
('C132', 'C123P023', 'Gelang Emas', '2021-01-13', '2021-01-31', 'G001', 'A123'),
('A123', 'P001', 'Gelang Silver', '2021-01-13', '2021-01-28', 'G001', 'A123');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode` varchar(10) NOT NULL,
  `namaKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode`, `namaKategori`) VALUES
('Perh', 'Perhiasan'),
('Ems', 'Emas'),
('S.tanah', 'Surat Tanah'),
('K.Ber', 'Kendaraan Bermotor'),
('A.Elek', 'Alat Elektronik'),
('Lain', 'Lain-Lain');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIK` bigint(16) NOT NULL,
  `noTlp` varchar(16) NOT NULL,
  `Alamat` text NOT NULL,
  `namaDepan` text NOT NULL,
  `namaBelakang` text NOT NULL,
  `idPegawai` varchar(5) NOT NULL,
  `statusPegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIK`, `noTlp`, `Alamat`, `namaDepan`, `namaBelakang`, `idPegawai`, `statusPegawai`) VALUES
(3379560412878887, '087698745632', 'Jl. Terserahku 123', 'Budianto', 'halim', 'PG001', 'Gudang'),
(3371435678993330, '081234567890', 'Jl. Tak Tanggungjawab', 'Natanael', 'Halim', 'PG002', 'gudang'),
(8888, '081234567890', 'Jl. ku tak suka', 'Natanael', 'sebastian', 'PG003', 'gudang'),
(3379562704888887, '089657113325', 'Jl. Tahubulat 123', 'Dedi', 'Cahyadi', 'PL001', 'Lapangan'),
(6543298, '098765437289', 'Jl. Gaji Buta', 'Michael', 'Sebasitan', 'PL002', 'Lapangan'),
(6666666, '098765437289', 'Jl. Gaji Buta Banget', 'Mikael', 'Sebas', 'PL003', 'Lapangan'),
(3379560610008887, '087823665547', 'Jl. Kutaktahu 123', 'Ahmad', 'Bustomi', 'PR001', 'Resepsionis'),
(4545454545, '098765437289', 'Jl. Kombinasi Mantap', 'Michael', 'Halim', 'PR002', 'resepsionis'),
(9999999, '098765437289', 'Jl. Tak Tanggungjawab Banget', 'Natan', 'Halim', 'PR003', 'resepsionis');

-- --------------------------------------------------------

--
-- Table structure for table `resepsionis_barang`
--

CREATE TABLE `resepsionis_barang` (
  `idBarang` varchar(10) NOT NULL,
  `idPelanggan` varchar(10) NOT NULL,
  `kodeKatBarang` varchar(11) NOT NULL,
  `namaBarang` text NOT NULL,
  `harga` int(10) NOT NULL,
  `tglMasuk` date NOT NULL,
  `jatuhTempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resepsionis_barang`
--

INSERT INTO `resepsionis_barang` (`idBarang`, `idPelanggan`, `kodeKatBarang`, `namaBarang`, `harga`, `tglMasuk`, `jatuhTempo`) VALUES
('A123P001', 'A123', 'Perh', 'Perhiasan', 4000000, '2021-01-13', '2021-02-02'),
('A123P002', 'B123', 'Ems', 'Emas Batang', 5000000, '2021-02-02', '2021-01-31'),
('B123P001', 'A123', 'A.Elek', 'LaptopASUS', 600000, '2021-01-13', '2021-01-26'),
('C123P023', 'C132', 'Ems', 'SAMSUNG A30S', 5000000, '2021-01-13', '2021-02-03'),
('C9', 'A123', '', 'LaptopASUS', 3000000, '2021-01-13', '2021-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `resepsionis_keluar`
--

CREATE TABLE `resepsionis_keluar` (
  `idBarang` varchar(10) NOT NULL,
  `idPelanggan` varchar(10) NOT NULL,
  `namaPemilik` varchar(255) NOT NULL,
  `namaBarang` text NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `biaya` int(255) NOT NULL,
  `noRekening` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resepsionis_masuk`
--

CREATE TABLE `resepsionis_masuk` (
  `NIK` bigint(18) NOT NULL,
  `idPelanggan` varchar(10) NOT NULL,
  `namaDepan` varchar(255) NOT NULL,
  `namaBelakang` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `noTlp` int(255) NOT NULL,
  `noRekening` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resepsionis_masuk`
--

INSERT INTO `resepsionis_masuk` (`NIK`, `idPelanggan`, `namaDepan`, `namaBelakang`, `Alamat`, `noTlp`, `noRekening`) VALUES
(456789, 'C132', 'Jefta', 'Amp', 'Jl. Tahubulat', 2147483647, 1343465646),
(1972016, 'B123', 'Andre', 'Liu', 'Jl. terserah', 2147483647, 0),
(6543298, 'A123', 'Sam', 'Ju', 'Jl. Kutaktahu', 2147483647, 0),
(21345675, 'A123', 'Sam', 'Ju', 'Jl. Kutaktahu', 2147483647, 0),
(3374060610990004, 'A123', 'Sam', 'Ju', 'Jl. Kutaktahu', 2147483647, 1343465646);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersUid` varchar(255) NOT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `usersStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersUid`, `usersPwd`, `usersStatus`) VALUES
('PTadmin', '$2y$10$wU0GsIlBd5/pkcwUeM1B/OTio6aIgxLgecmL67vz7djk9epQ9irRe', 'admin'),
('PTgudang', '$2y$10$PVxu3DGxAv29DgMgBynfVO5jASRx40B.y7QpO11BtHSi9J4Rws9le', 'gudang'),
('PTresepsionis', '$2y$10$gW25kULhV9QkUtVF9oHXj.n0UV5JW.wpyFi42q.NXEQFRKYwiWKZu', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang_barang`
--
ALTER TABLE `gudang_barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `gudang_keluar`
--
ALTER TABLE `gudang_keluar`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `gudang_masuk`
--
ALTER TABLE `gudang_masuk`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `resepsionis_barang`
--
ALTER TABLE `resepsionis_barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `resepsionis_keluar`
--
ALTER TABLE `resepsionis_keluar`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `resepsionis_masuk`
--
ALTER TABLE `resepsionis_masuk`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersUid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
