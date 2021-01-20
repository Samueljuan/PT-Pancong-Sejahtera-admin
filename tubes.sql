-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 06:46 PM
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
('AXE1', 'Motor', 'BA1', '2021-01-19', '2021-01-19'),
('AXE10', 'Meja Bar', 'BA10', '2021-01-06', '2021-04-01'),
('AXE11', 'Laptop ROG', 'BA11', '2021-01-02', '2021-07-02'),
('AXE2', 'Mobil', 'BA2', '2021-01-18', '2021-03-18'),
('AXE3', 'Cincin Emas', 'BA3', '2021-01-30', '2021-02-10'),
('AXE4', 'Cincin Silver', 'BA4', '2021-01-27', '2021-01-31'),
('AXE5', 'Kalung Emas', 'BA5', '2021-01-07', '2021-02-21'),
('AXE6', 'Surat Rumah', 'BA6', '2021-01-21', '2021-05-27'),
('AXE7', 'Emas Batang', 'BA7', '2021-01-20', '2021-04-16'),
('AXE8', 'Anting berlian', 'BA8', '2021-01-30', '2021-06-18'),
('AXE9', 'Sertifikat Tanah', 'BA9', '2021-01-13', '2021-02-17');

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

--
-- Dumping data for table `gudang_keluar`
--

INSERT INTO `gudang_keluar` (`idBarang`, `namaBarang`, `tanggalKeluar`, `idPegawai`) VALUES
('A123P001', 'Perhiasan', '2021-01-25', 'PG001'),
('A123P002', 'Emas Batang', '2021-02-24', 'PG002'),
('A123P003', 'HONDA MOBILIO', '2021-02-01', 'PG003'),
('A123P005', 'KAWASAKI NINJA', '2021-02-06', 'PL001'),
('B123P001', 'Laptop ASUS', '2021-01-24', 'PL002'),
('B123P002', 'Gelang Silver', '2021-01-13', 'PL003'),
('C123P021', 'SAMSUNG A30S', '2021-01-13', 'PR001'),
('C123P023', 'Gelang Emas', '2021-01-13', 'PR002');

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
('A1', 'AXE1', 'Motor', '2021-01-19', '2021-01-19', 'PG001', 'BA1'),
('A10', 'AXE10', 'Meja Bar', '2021-01-06', '2021-04-01', 'PG002', 'BA10'),
('A11', 'AXE11', 'Laptop ROG', '2021-01-02', '2021-07-02', 'PG003', 'BA11'),
('A2', 'AXE2', 'Mobil', '2021-01-18', '2021-03-18', 'PG002', 'BA2'),
('A3', 'AXE3', 'Cincin Emas', '2021-01-30', '2021-02-10', 'PG003', 'BA3'),
('A4', 'AXE4', 'Cincin Silver', '2021-01-27', '2021-01-31', 'PG001', 'BA4'),
('A5', 'AXE5', 'Kalung Emas', '2021-01-07', '2021-02-21', 'PG002', 'BA5'),
('A6', 'AXE6', 'Surat Rumah', '2021-01-21', '2021-05-27', 'PG003', 'BA6'),
('A7', 'AXE7', 'Emas Batang', '2021-01-20', '2021-04-16', 'PG001', 'BA7'),
('A8', 'AXE8', 'Anting berlian', '2021-01-30', '2021-06-18', 'PG002', 'BA8'),
('A9', 'AXE9', 'Sertifikat Tanah', '2021-01-13', '2021-02-17', 'PG001', 'BA9');

-- --------------------------------------------------------

--
-- Table structure for table `gudang_sementara`
--

CREATE TABLE `gudang_sementara` (
  `idBarang` varchar(10) NOT NULL,
  `namaBarang` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang_sementara`
--

INSERT INTO `gudang_sementara` (`idBarang`, `namaBarang`, `tanggal`) VALUES
('AXE10', 'Meja Bar', '2021-04-04'),
('AXE11', 'Laptop ROG', '2021-07-07'),
('AXE9', 'Sertifikat Tanah', '2021-02-18');

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
('A.Elek', 'Alat Elektronik'),
('Ems', 'Emas'),
('K.Ber', 'Kendaraan Bermotor'),
('Lain', 'Lain-Lain'),
('Perh', 'Perhiasan'),
('S.tanah', 'Surat Tanah');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan_diambil`
--

CREATE TABLE `lapangan_diambil` (
  `namaBarang` text NOT NULL,
  `idBarang` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `idPegawai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan_diambil`
--

INSERT INTO `lapangan_diambil` (`namaBarang`, `idBarang`, `tanggal`, `waktu`, `idPegawai`) VALUES
('Meja Bar', 'AXE10', '2021-04-01', '12:45:00', 'PL002'),
('Laptop ROG', 'AXE11', '2021-07-02', '13:10:00', 'PL003'),
('Sertifikat Tanah', 'AXE9', '2021-02-18', '15:30:00', 'PL001');

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
('AXE1', 'A1', 'K.Ber', 'Motor', 12000000, '2021-01-19', '2021-01-19'),
('AXE10', 'A10', 'Lain', 'Meja Bar', 35000000, '2021-01-06', '2021-04-01'),
('AXE11', 'A11', 'A.Elek', 'Laptop ROG', 24000000, '2021-01-02', '2021-07-07'),
('AXE2', 'A2', 'K.Ber', 'Mobil', 250000000, '2021-01-18', '2021-03-18'),
('AXE3', 'A3', 'Perh', 'Cincin Emas', 2000000, '2021-01-30', '2021-02-10'),
('AXE4', 'A4', 'Perh', 'Cincin Silver', 1000000, '2021-01-27', '2021-01-31'),
('AXE5', 'A5', 'Perh', 'Kalung Emas', 3500000, '2021-01-07', '2021-02-27'),
('AXE6', 'A6', 'S.tanah', 'Surat Rumah', 1000000000, '2021-01-21', '2021-05-27'),
('AXE7', 'A7', 'Ems', 'Emas Batang', 4000000, '2021-01-20', '2021-04-16'),
('AXE8', 'A8', 'Perh', 'Anting berlian', 6700000, '2021-01-30', '2021-06-18'),
('AXE9', 'A9', 'S.tanah', 'Sertifikat Tanah', 2147483647, '2021-01-13', '2021-02-17');

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

--
-- Dumping data for table `resepsionis_keluar`
--

INSERT INTO `resepsionis_keluar` (`idBarang`, `idPelanggan`, `namaPemilik`, `namaBarang`, `tanggalKeluar`, `biaya`, `noRekening`) VALUES
('A123P001', 'A123', 'Ahmad Alter Ego', 'Perhiasan', '2021-01-25', 3000000, 348041959),
('A123P002', 'B123', 'Ikhsan Lemon', 'Emas Batang', '2021-02-24', 4000000, 211124561),
('A123P003', 'B123', 'Jonathan Liandi', 'HONDO MOBILIO', '2021-02-01', 250000000, 312234121),
('A123P005', 'B123', 'Donkey suku barbar', 'KAWASAKI NINJA', '2021-02-06', 70000000, 772112454),
('B123P001', 'B123', 'Brando Basudana', 'LaptopASUS', '2021-01-24', 15000000, 12309001),
('B123P002', 'B123', 'Evos Antimage', 'Gelang Silver', '2021-01-13', 200000, 211200233),
('C123P021', 'C132', 'RRQ Samuel Juan', 'SAMSUNG A30S', '2021-01-13', 3500000, 991213414),
('C123P023', 'C132', 'EVOS.Andre Liu', 'Gelang Emas', '2021-01-13', 2000000, 2113451415);

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
(987654, 'A123', 'Sam', 'Ju', 'Jl. terserah', 2147483647, 0),
(1972001, 'A1', 'Jonathan', 'Liandi', 'Btn Griya Nugratama Blok D1 No.1 ', 2147483647, 2147483647),
(1972002, 'A2', 'Ikhsan', 'Lemon', 'Jl. Surya Pro Mild No.53', 2147483647, 0),
(1972003, 'A3', 'RRQ', 'Teguh', 'Jl.Perintis kemerdekaan No.155', 2147483647, 2147483647),
(1972004, 'A4', 'EVOS', 'Luminaire', 'Jl.Babakan Jeruk No.87', 2147483647, 0),
(1972005, 'A5', 'Mikasa', 'Ackerman', 'Jl.Dinding Maria No.11', 2147483647, 2147483647),
(1972006, 'A6', 'Neymar Junior', 'da Silva', 'Jl.Brazilian No.921', 2147483647, 2147483647),
(1972007, 'A7', 'Eren', 'Jeager', 'Jl.Shisgashima Gerbang Belakang No.2', 2147483647, 0),
(1972008, 'A8', 'Levi', 'Ackerman', 'Jl.Mobil Bobrok No.21', 2147483647, 2147483647),
(1972009, 'A9', 'EVOS ', 'Wannn', 'Jl. Jakarta Buruk No.309', 895512115, 0),
(1972010, 'A10', 'Dewangga', 'Beli Truk', 'Jl.Pangeran Hidayatulah No.100', 2147483647, 2111456141),
(1972011, 'A11', 'Patria', 'Wiwaha', 'Jl.Parabola No.102', 2147483647, 0);

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
('PTlapangan', '$2y$10$/L39yTjYKHvfIpdgJLAr1.sQyBRmtySWxATKUqSW.aDkGF/j.gZsy', 'lapangan'),
('PTresepsionis', '$2y$10$gW25kULhV9QkUtVF9oHXj.n0UV5JW.wpyFi42q.NXEQFRKYwiWKZu', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang_barang`
--
ALTER TABLE `gudang_barang`
  ADD KEY `idBarang` (`idBarang`);

--
-- Indexes for table `gudang_keluar`
--
ALTER TABLE `gudang_keluar`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `idPegawai` (`idPegawai`);

--
-- Indexes for table `gudang_masuk`
--
ALTER TABLE `gudang_masuk`
  ADD PRIMARY KEY (`idBarang`),
  ADD UNIQUE KEY `kodeGudang` (`kodeGudang`),
  ADD KEY `idPegawai` (`idPegawai`);

--
-- Indexes for table `gudang_sementara`
--
ALTER TABLE `gudang_sementara`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `lapangan_diambil`
--
ALTER TABLE `lapangan_diambil`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `idPegawai` (`idPegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `resepsionis_barang`
--
ALTER TABLE `resepsionis_barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `kodeKatBarang` (`kodeKatBarang`);

--
-- Indexes for table `resepsionis_keluar`
--
ALTER TABLE `resepsionis_keluar`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `resepsionis_masuk`
--
ALTER TABLE `resepsionis_masuk`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `idPelanggan` (`idPelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersUid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gudang_barang`
--
ALTER TABLE `gudang_barang`
  ADD CONSTRAINT `gudang_barang_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `gudang_masuk` (`idBarang`);

--
-- Constraints for table `gudang_keluar`
--
ALTER TABLE `gudang_keluar`
  ADD CONSTRAINT `gudang_keluar_ibfk_1` FOREIGN KEY (`idPegawai`) REFERENCES `pegawai` (`idPegawai`);

--
-- Constraints for table `gudang_masuk`
--
ALTER TABLE `gudang_masuk`
  ADD CONSTRAINT `gudang_masuk_ibfk_1` FOREIGN KEY (`idPegawai`) REFERENCES `pegawai` (`idPegawai`);

--
-- Constraints for table `lapangan_diambil`
--
ALTER TABLE `lapangan_diambil`
  ADD CONSTRAINT `lapangan_diambil_ibfk_1` FOREIGN KEY (`idPegawai`) REFERENCES `pegawai` (`idPegawai`);

--
-- Constraints for table `resepsionis_barang`
--
ALTER TABLE `resepsionis_barang`
  ADD CONSTRAINT `resepsionis_barang_ibfk_1` FOREIGN KEY (`kodeKatBarang`) REFERENCES `kategori` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
