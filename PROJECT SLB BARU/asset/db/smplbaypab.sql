-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 03:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smplbaypab`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_pegawai`
--

CREATE TABLE `akun_pegawai` (
  `nip` int(11) NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `hak_akses` tinyint(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `akun_pegawai`
--

INSERT INTO `akun_pegawai` (`nip`, `password`, `hak_akses`) VALUES
(32225, 'kola', NULL),
(32221, 'kuning', 0),
(32226, 'fanta', NULL),
(32223, ' hh', 0),
(32224, ' harimau', 1),
(32227, ' lumpia', 0),
(32228, 'tidur', NULL),
(32229, ' oke', 0);

-- --------------------------------------------------------

--
-- Table structure for table `akun_siswa`
--

CREATE TABLE `akun_siswa` (
  `no_induk` int(12) NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `akun_siswa`
--

INSERT INTO `akun_siswa` (`no_induk`, `password`) VALUES
(15151, 'kucing'),
(15152, 'anjing'),
(15153, 'kelincia');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `no_komentar` int(10) NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` char(250) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_ajar`
--

CREATE TABLE `data_ajar` (
  `id_ajar` int(11) NOT NULL,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kode_mapel` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `data_ajar`
--

INSERT INTO `data_ajar` (`id_ajar`, `nip`, `kode_mapel`) VALUES
(3, '32333', 'MPA02'),
(2, '32221', 'MPA01'),
(1, '32222', 'MPA06'),
(4, '32227', 'MPC03'),
(5, '32227', 'MPA04');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `nip` char(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nama` varchar(15) COLLATE latin1_general_ci DEFAULT '',
  `alamat` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis_kelamin` char(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tempat_lahir` char(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jabatan` char(30) COLLATE latin1_general_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` char(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`nip`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `jabatan`, `pendidikan_terakhir`, `agama`) VALUES
('32221', 'tono', 'gubeng', 'laki', 'surabaya', '2017-11-15', 'kepsek', 'S3', 'Kepercayaan');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `no_induk` decimal(10,0) NOT NULL,
  `nama_siswa` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_ayah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `no_telp_orangtua` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`no_induk`, `nama_siswa`, `foto`, `alamat`, `nama_ayah`, `nama_ibu`, `no_telp_orangtua`) VALUES
('15153', 'Hartono', 'nanti.jpg', 'semarang', 'tono', 'susi', '8678656'),
('15151', 'Budi', 'opo.png', 'gubeng', 'parjo', 'jumnten', '983837');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_foto`
--

CREATE TABLE `gallery_foto` (
  `no_foto` int(10) NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_video`
--

CREATE TABLE `gallery_video` (
  `no_video` int(10) NOT NULL,
  `link` varchar(200) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_kegiatan` int(11) NOT NULL,
  `bulan_kegiatan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `foto_judul` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `foto1` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `foto2` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `foto3` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `tgl_kegiatan`, `bulan_kegiatan`, `foto_judul`, `foto1`, `foto2`, `foto3`, `isi`) VALUES
(1, 'horeeee', 12, 'Juni', 'imunisasi.png', '', '', '', 'huila'),
(2, 'Performance Musik Di Convention Hall', 22, 'Agustus', 'angklungch.png', NULL, NULL, NULL, NULL),
(3, 'Kegiatan imunisasi', 20, 'maret', 'imunisasi.png', NULL, NULL, NULL, NULL),
(8, 'oleee', 0, '', '', '', '', '', ''),
(7, 'ziarah sunan giri', 19, 'september', '', '', '', '', 'dengan kegiatan ini semuanya dapat terlaksana dengan lancarrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nama_mapel` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
('MPA01', 'Pendidikan Agama dan Budi Pekerti'),
('MPA02', 'Pendidikan Pancasila dan Kewarganegaraan'),
('MPA03', 'Bahasa Indonesia'),
('MPA04', 'Matematika'),
('MPA05', 'Ilmu Pengetahuan Alam'),
('MPA06', 'Ilmu Pengetahuan Sosial'),
('MPA07', 'Bahasa Inggris'),
('MPB01', 'Seni Budaya'),
('MPB02', 'Pendidikan Jasmani, Olah Raga dan Kesehatan'),
('MPC01', 'Program Khusus (Orientasi Mobilitas)'),
('MPC02', 'Bahasa Daerah/Jawa'),
('MPC03', 'Massage'),
('MPC04', 'Prakarya/Ketrampilan'),
('MPC05', 'Teknologi Informasi dan Komunikasi (TIK)');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `nomor` int(10) NOT NULL,
  `nama_siswa` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ket_prestasi` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rapot`
--

CREATE TABLE `rapot` (
  `no` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `kode_mapel` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `deskripsi` varchar(500) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `rapot`
--

INSERT INTO `rapot` (`no`, `no_induk`, `kode_mapel`, `nilai`, `deskripsi`) VALUES
(1, 15151, 'MPA01', 32, 'asik'),
(5, 15153, 'MPC03', 78, NULL),
(3, 15151, 'MPA02', 80, NULL),
(4, 15153, 'MPA06', 98, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_pegawai`
--
ALTER TABLE `akun_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `akun_siswa`
--
ALTER TABLE `akun_siswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`no_komentar`);

--
-- Indexes for table `data_ajar`
--
ALTER TABLE `data_ajar`
  ADD PRIMARY KEY (`id_ajar`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `gallery_foto`
--
ALTER TABLE `gallery_foto`
  ADD PRIMARY KEY (`no_foto`);

--
-- Indexes for table `gallery_video`
--
ALTER TABLE `gallery_video`
  ADD PRIMARY KEY (`no_video`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `rapot`
--
ALTER TABLE `rapot`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `no_komentar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_foto`
--
ALTER TABLE `gallery_foto`
  MODIFY `no_foto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_video`
--
ALTER TABLE `gallery_video`
  MODIFY `no_video` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
