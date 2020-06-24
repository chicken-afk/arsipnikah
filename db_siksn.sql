-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 12:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siksn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `Nama_User` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `Nama_User`, `Username`, `Password`, `role`) VALUES
(1, 'admin', 'adminsiksn', '0192023a7bbd73250516f069df18b500', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akta`
--

CREATE TABLE `tb_akta` (
  `id_akta` int(8) NOT NULL,
  `id_pasangan` int(8) NOT NULL,
  `id_penghulu` int(11) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `id_arsip` int(8) NOT NULL,
  `idUser` int(11) NOT NULL,
  `N1` varchar(100) NOT NULL,
  `N2` varchar(100) NOT NULL,
  `N3` varchar(100) NOT NULL,
  `N4` varchar(100) NOT NULL,
  `N5` varchar(100) NOT NULL,
  `N6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsipdone`
--

CREATE TABLE `tb_arsipdone` (
  `id_arsipDone` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `N1` varchar(100) NOT NULL,
  `N2` varchar(100) NOT NULL,
  `N3` varchar(100) NOT NULL,
  `N4` varchar(100) NOT NULL,
  `N5` varchar(100) NOT NULL,
  `N6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasangan`
--

CREATE TABLE `tb_pasangan` (
  `id_pasangan` int(8) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nmPria` varchar(50) NOT NULL,
  `ktpPria` varchar(20) NOT NULL,
  `tempat_lahir_pria` varchar(50) NOT NULL,
  `tlPria` date NOT NULL,
  `fotoPria` varchar(100) NOT NULL,
  `nmWanita` varchar(50) NOT NULL,
  `ktpWanita` varchar(20) NOT NULL,
  `tempat_lahir_wanita` varchar(50) NOT NULL,
  `tlWanita` date NOT NULL,
  `fotoWanita` varchar(100) NOT NULL,
  `status` varchar(35) NOT NULL,
  `tanggalNikah` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghulu`
--

CREATE TABLE `tb_penghulu` (
  `id_penghulu` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kua_kecamatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_saksi`
--

CREATE TABLE `tb_saksi` (
  `id_saksi` int(11) NOT NULL,
  `id_pasangan` int(8) NOT NULL,
  `nmSaksi` varchar(50) NOT NULL,
  `nmSaksi2` varchar(50) NOT NULL,
  `umurSaksi1` int(5) NOT NULL,
  `umurSaksi2` int(5) NOT NULL,
  `wargaNegara1` varchar(50) NOT NULL,
  `wargaNegara2` varchar(50) NOT NULL,
  `agama1` varchar(45) NOT NULL,
  `agama2` varchar(45) NOT NULL,
  `pekerjaan1` varchar(100) NOT NULL,
  `pekerjaan2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `tb_akta`
--
ALTER TABLE `tb_akta`
  ADD PRIMARY KEY (`id_akta`),
  ADD KEY `id_pasangan` (`id_pasangan`),
  ADD KEY `id_penghulu` (`id_penghulu`);

--
-- Indexes for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`id_arsip`),
  ADD KEY `tb_arsip_ibfk_1` (`idUser`);

--
-- Indexes for table `tb_arsipdone`
--
ALTER TABLE `tb_arsipdone`
  ADD PRIMARY KEY (`id_arsipDone`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tb_pasangan`
--
ALTER TABLE `tb_pasangan`
  ADD PRIMARY KEY (`id_pasangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penghulu`
--
ALTER TABLE `tb_penghulu`
  ADD PRIMARY KEY (`id_penghulu`);

--
-- Indexes for table `tb_saksi`
--
ALTER TABLE `tb_saksi`
  ADD PRIMARY KEY (`id_saksi`),
  ADD KEY `tb_saksi_ibfk_1` (`id_pasangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_akta`
--
ALTER TABLE `tb_akta`
  MODIFY `id_akta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  MODIFY `id_arsip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_arsipdone`
--
ALTER TABLE `tb_arsipdone`
  MODIFY `id_arsipDone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pasangan`
--
ALTER TABLE `tb_pasangan`
  MODIFY `id_pasangan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_penghulu`
--
ALTER TABLE `tb_penghulu`
  MODIFY `id_penghulu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_saksi`
--
ALTER TABLE `tb_saksi`
  MODIFY `id_saksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_akta`
--
ALTER TABLE `tb_akta`
  ADD CONSTRAINT `tb_akta_ibfk_1` FOREIGN KEY (`id_pasangan`) REFERENCES `tb_pasangan` (`id_pasangan`),
  ADD CONSTRAINT `tb_akta_ibfk_2` FOREIGN KEY (`id_penghulu`) REFERENCES `tb_penghulu` (`id_penghulu`);

--
-- Constraints for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD CONSTRAINT `tb_arsip_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tbuser` (`idUser`);

--
-- Constraints for table `tb_arsipdone`
--
ALTER TABLE `tb_arsipdone`
  ADD CONSTRAINT `tb_arsipdone_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tbuser` (`idUser`);

--
-- Constraints for table `tb_pasangan`
--
ALTER TABLE `tb_pasangan`
  ADD CONSTRAINT `tb_pasangan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbuser` (`idUser`);

--
-- Constraints for table `tb_saksi`
--
ALTER TABLE `tb_saksi`
  ADD CONSTRAINT `tb_saksi_ibfk_1` FOREIGN KEY (`id_pasangan`) REFERENCES `tb_pasangan` (`id_pasangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
