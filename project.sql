-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 09:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(3) NOT NULL,
  `kd_poli` int(3) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `sip` varchar(30) NOT NULL,
  `tempat_lahird` varchar(30) NOT NULL,
  `tgl_lahird` date NOT NULL,
  `telp_dokter` varchar(13) NOT NULL,
  `alamatd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `kd_poli`, `nm_dokter`, `sip`, `tempat_lahird`, `tgl_lahird`, `telp_dokter`, `alamatd`) VALUES
(1, 112, 'Hartono', 'Malam', 'Tajos', '1995-03-10', '085654475756', 'Rumahnya'),
(2, 454, 'Kartoyono', 'Malam', 'Rumah', '1999-01-20', '02179187676', 'Rumahnya apala'),
(3, 347, 'Josa', 'gatau', 'wooooo', '1997-02-15', '0257945545454', 'Gataulah aku '),
(4, 403, 'rei', 'minggu', 'ajo', '1996-08-25', '02179187875', 'Gatau');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `jabatan` enum('1','2','3','4') NOT NULL,
  `nm_karyawan` varchar(50) NOT NULL,
  `tempat_lahirk` varchar(30) NOT NULL,
  `tgl_lahirk` date NOT NULL,
  `alamatk` text NOT NULL,
  `telp_karyawan` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `jabatan`, `nm_karyawan`, `tempat_lahirk`, `tgl_lahirk`, `alamatk`, `telp_karyawan`) VALUES
(7, '1', 'josaktii', 'rumahnya', '2000-02-20', 'rumahnya cok', '0217557475'),
(8, '2', 'Elvan', 'rumahnya', '1998-05-05', 'rumahnya', '0217554510254'),
(9, '2', 'Wandi', 'rumah kita', '1995-05-20', 'gatau', '08214554445');

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE `kb` (
  `kd_kunjungan` int(9) NOT NULL,
  `id_pasien` int(9) NOT NULL,
  `kd_poli` int(3) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`kd_kunjungan`, `id_pasien`, `kd_poli`, `tgl_kunjungan`, `status`) VALUES
(7, 934618507, 347, '2021-05-03', '2'),
(8, 934618507, 341, '2021-05-06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` int(3) NOT NULL,
  `nm_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`) VALUES
(476, 'Amoxcilin'),
(825, 'paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(9) NOT NULL,
  `nm_pasien` varchar(50) NOT NULL,
  `kd_registrasi` text NOT NULL,
  `jen_kelamin` enum('1','2') NOT NULL,
  `jalur` enum('1','2','3','4') NOT NULL,
  `alamatp` text NOT NULL,
  `tempat_lahirp` varchar(20) NOT NULL,
  `tgl_lahirp` date NOT NULL,
  `telp_pasien` varchar(13) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nm_pasien`, `kd_registrasi`, `jen_kelamin`, `jalur`, `alamatp`, `tempat_lahirp`, `tgl_lahirp`, `telp_pasien`, `tgl_daftar`) VALUES
(336229907, 'Dian', '456845312148765', '1', '3', 'Gatau', 'SMK', '2005-06-23', '0258754566321', '2021-05-06'),
(934618507, 'Wandi', '64010420021998', '1', '2', 'Antara cokro sama padat karya', 'rumahnya', '1998-10-20', '1554245878', '2021-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `kd_poli` int(3) NOT NULL,
  `nm_poli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`kd_poli`, `nm_poli`) VALUES
(112, 'Umum'),
(341, 'THT'),
(347, 'Kandungan'),
(403, 'Anak'),
(454, 'Khusus'),
(744, 'Klinik');

-- --------------------------------------------------------

--
-- Table structure for table `rm`
--

CREATE TABLE `rm` (
  `kd_rekammedis` int(5) NOT NULL,
  `id_pasien` int(9) NOT NULL,
  `id_dokter` int(3) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `tensi` varchar(8) NOT NULL,
  `anamnesa` varchar(30) NOT NULL,
  `diagnose` varchar(30) NOT NULL,
  `tindak_lanjut` enum('1','2','3','4') NOT NULL,
  `terapi` enum('1','2') NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` int(3) NOT NULL,
  `kd_obat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `access` enum('1','2') NOT NULL,
  `id_karyawan` int(3) NOT NULL,
  `kd_poli` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `access`, `id_karyawan`, `kd_poli`) VALUES
(18, 'josaktii', 'admin', '1', 7, 744),
(19, 'elvan', 'kandungan', '2', 8, 347);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `kd_poli` (`kd_poli`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`kd_kunjungan`),
  ADD KEY `id_pasien` (`id_pasien`,`kd_poli`),
  ADD KEY `kd_poli` (`kd_poli`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `nik` (`kd_registrasi`) USING HASH;

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kd_poli`);

--
-- Indexes for table `rm`
--
ALTER TABLE `rm`
  ADD PRIMARY KEY (`kd_rekammedis`),
  ADD KEY `id_pasien` (`id_pasien`,`id_dokter`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `kd_obat` (`kd_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_karyawan_2` (`id_karyawan`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `kd_poli` (`kd_poli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kb`
--
ALTER TABLE `kb`
  MODIFY `kd_kunjungan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rm`
--
ALTER TABLE `rm`
  MODIFY `kd_rekammedis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`kd_poli`) REFERENCES `poli` (`kd_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kb`
--
ALTER TABLE `kb`
  ADD CONSTRAINT `kb_ibfk_1` FOREIGN KEY (`kd_poli`) REFERENCES `poli` (`kd_poli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kb_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rm`
--
ALTER TABLE `rm`
  ADD CONSTRAINT `rm_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rm_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rm_ibfk_4` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rm_ibfk_5` FOREIGN KEY (`kd_obat`) REFERENCES `obat` (`kd_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`kd_poli`) REFERENCES `poli` (`kd_poli`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
