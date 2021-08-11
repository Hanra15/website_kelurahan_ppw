-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 04:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelurahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datawarga`
--

CREATE TABLE `tbl_datawarga` (
  `id_warga` int(11) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  `umur_warga` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pekerjaan_warga` varchar(50) NOT NULL,
  `status_nikah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_datawarga`
--

INSERT INTO `tbl_datawarga` (`id_warga`, `nama_warga`, `umur_warga`, `alamat`, `pekerjaan_warga`, `status_nikah`) VALUES
(1, 'Drs. Toto Suharto', 45, 'Kp.Tajur Tapos Rt.17/06 No.1 Ds.Hambalang', 'Guru', 'Kawin'),
(64, 'Maman Sudarman', 60, 'Kp.Tajur Tapos Rt.17/06 No.2 Ds.Hambalang', 'Buruh', 'Kawin'),
(65, 'Enjang Rosida', 40, 'Kp.Tajur Tonggoh Rt.15/02 No.14 Ds.Hambalang', 'Karyawan', 'Kawin'),
(66, 'Agni Arifah', 24, 'Kp.Tajur Tapos Rt.18/06 No.31 Ds.Hambalang', 'Mahasiswa', 'Belum Kawin'),
(67, 'Mulyoto', 40, 'Kp.Tajur Tonggoh Rt.16/09 No.20 Ds.Hambalang', 'Karyawan', 'Kawin'),
(68, 'Mukaya', 20, 'Kp.Tajur Tonggoh Rt.16/09 No.22 Ds.Hambalang', 'Mahasiswa', 'Belum Kawin'),
(69, 'Muhammad Razan ', 18, 'Kp.Tajur Tapos Rt.18/06 No.30 Ds.Hambalang', 'Pelajar', 'Belum Kawin'),
(70, 'Sutisna ', 35, 'Kp.Tajur Tapos Rt.17/07 No.04 Ds.Hambalang', 'Buruh', 'Kawin'),
(71, 'Solahudin', 32, 'Kp.Tajur Tapos Rt.17/07 No.20 Ds.Hambalang', 'Guru', 'Kawin'),
(72, 'Leny Sulistini', 28, 'Kp.Tajur Tonggoh Rt.16/09 No.12 Ds.Hambalang', 'IRT', 'Kawin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_datawarga`
--
ALTER TABLE `tbl_datawarga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_datawarga`
--
ALTER TABLE `tbl_datawarga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
