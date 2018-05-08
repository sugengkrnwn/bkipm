-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 05:17 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bkipm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE IF NOT EXISTS `tbl_hak_akses` (
  `id` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(15, 1, 1),
(19, 1, 3),
(30, 1, 2),
(31, 1, 10),
(32, 1, 11),
(33, 1, 12),
(35, 1, 14),
(36, 1, 15),
(37, 1, 16),
(38, 1, 17),
(45, 2, 15),
(48, 1, 9),
(52, 2, 10),
(55, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan_lembur`
--

CREATE TABLE IF NOT EXISTS `tbl_laporan_lembur` (
  `id` int(8) NOT NULL,
  `nama_1` varchar(30) NOT NULL,
  `nama_2` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `jam_awal` varchar(11) NOT NULL,
  `jam_akhir` varchar(11) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan_lembur`
--

INSERT INTO `tbl_laporan_lembur` (`id`, `nama_1`, `nama_2`, `hari`, `tanggal`, `tempat`, `jam_awal`, `jam_akhir`, `uraian`) VALUES
(1, 'Bimo C Timor', 'Slamet Hariyono,Spi', 'Senin', '2018-04-23', 'Farm/IKI PT. Darma Eka Sentosa', '19.30', '04.00', '<p>1 perjalanan menuju farm</p>\r\n<p>2.melakukan pemeriksaan jenis</p>\r\n<p>3.melakukan pengawasan</p>\r\n<p>4.memeriksa kesesuaian</p>'),
(2, 'Bimo C Timor', 'Slamet Hariyono,Spi', 'Rabu', '2018-05-08', 'Farm/IKI PT. Darma Eka Sentosa', '19.40', '23.00', '<p>coba</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latihan`
--

CREATE TABLE IF NOT EXISTS `tbl_latihan` (
  `id_lat` int(12) NOT NULL,
  `nama` int(30) NOT NULL,
  `file` varchar(220) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_latihan`
--

INSERT INTO `tbl_latihan` (`id_lat`, `nama`, `file`) VALUES
(1, 0, 'arsipwp.PNG'),
(2, 0, ''),
(3, 0, 'logo_balai.png'),
(4, 0, 'Capture_menu1.JPG'),
(5, 0, 'eza-et-al.pdf'),
(6, 0, 'catatan_android.txt'),
(7, 0, 'catatan.txt'),
(8, 0, 'wawan_softeware_developer_pas2.jpg'),
(9, 0, 'kuis_kuliner_kudus.txt'),
(10, 0, 'kuis_kuliner_kudus1.txt'),
(11, 0, 'MASAJIANDROID.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `title`, `url`, `icon`, `is_main_menu`, `is_aktif`) VALUES
(1, 'KELOLA MENU', 'kelolamenu', 'fa fa-server', 20, 'y'),
(2, 'KELOLA PENGGUNA', 'user', 'fa fa-user-o', 20, 'y'),
(3, 'level PENGGUNA', 'userlevel', 'fa fa-users', 20, 'y'),
(9, 'Contoh Form', 'welcome/form', 'fa fa-id-card', 0, 'n'),
(10, 'DASHBOARD', 'Welcome', 'fa fa-dashboard', 0, 'n'),
(11, 'Master', 'Welcome', 'fa fa-address-book', 0, 'y'),
(12, 'Pegawai', 'Pegawai', 'fa fa-user', 11, 'y'),
(13, 'latihan', 'Latihan', 'fa fa-file', 0, 'y'),
(14, 'SURAT MASUK', 'Surat_masuk', 'fa fa-envelope', 17, 'n'),
(15, 'LAPORAN LEMBUR', 'laporan', 'fa fa-envelope-o', 0, 'y'),
(16, 'SKPL', 'Surat_lembur', 'fa fa-briefcase', 0, 'y'),
(17, 'Data Surat', 'datasurat', 'fa fa-book', 0, 'n'),
(18, 'latihan biasa', 'Latihanbiasa', 'fa fa-graduation-cap', 0, 'y'),
(19, 'coba', 'Tbl_surat_lembur', 'fa fa-file', 0, 'y'),
(20, 'Pengaturan', 'pengaturan', 'fa fa-gear', 0, 'y'),
(21, 'LAPORAN LEMBURv2', 'laporanv2', 'fa fa-file', 0, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(28) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `jab` varchar(20) NOT NULL,
  `pangkat` varchar(22) NOT NULL,
  `golongan` varchar(3) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_darah` enum('A','AB','B','O') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Kepercayaan') NOT NULL,
  `status` varchar(10) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nip`, `nama`, `jk`, `jab`, `pangkat`, `golongan`, `tmp_lahir`, `tgl_lahir`, `gol_darah`, `agama`, `status`, `telp`, `alamat`) VALUES
(2, '99911', 'Hasan', 'Laki-Laki', 'IT', 'asisten', '3A', 'Kudus', '1992-10-27', 'O', 'Islam', 'Aktif', '0857987654', 'Kudus'),
(3, '92786765', 'Bimo C Timor', 'Laki-Laki', 'IT', 'asisten', '3A', 'Semarang', '1995-09-22', 'O', 'Islam', 'Aktif', '0856789', 'Semarang'),
(4, '197610292005021001', 'Slamet Hariyono,Spi', 'Laki-Laki', 'PHPI', 'staf', '3B', 'Semarang', '1976-02-12', 'O', 'Islam', 'Aktif', '08576545678', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_lembur`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_lembur` (
  `id_sl` int(10) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `nama_pj` varchar(40) NOT NULL,
  `tgl_skpl` date NOT NULL,
  `seksi` varchar(50) NOT NULL,
  `lembur_waktu` varchar(40) NOT NULL,
  `uraian_lembur` varchar(220) NOT NULL,
  `tgl_lembur` date NOT NULL,
  `nama_pg1` varchar(40) NOT NULL,
  `nip_pg1` varchar(28) DEFAULT NULL,
  `jabatan_pg1` varchar(30) NOT NULL,
  `nama_pg2` varchar(40) NOT NULL,
  `nip_pg2` varchar(28) DEFAULT NULL,
  `jabatan_pg2` varchar(30) NOT NULL,
  `nama_pg3` varchar(40) NOT NULL,
  `nip_pg3` varchar(28) NOT NULL,
  `jabatan_pg3` varchar(30) NOT NULL,
  `nama_pg4` varchar(40) NOT NULL,
  `nip_pg4` varchar(28) NOT NULL,
  `jabatan_pg4` varchar(30) NOT NULL,
  `nama_pg5` varchar(40) NOT NULL,
  `nip_pg5` varchar(28) NOT NULL,
  `jabatan_pg5` varchar(30) NOT NULL,
  `jam_lembur1` varchar(22) NOT NULL,
  `jam_lembur2` varchar(22) NOT NULL,
  `bg_mengetahui` varchar(40) DEFAULT NULL,
  `nama_mengetahui` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_lembur`
--

INSERT INTO `tbl_surat_lembur` (`id_sl`, `nomor`, `nama_pj`, `tgl_skpl`, `seksi`, `lembur_waktu`, `uraian_lembur`, `tgl_lembur`, `nama_pg1`, `nip_pg1`, `jabatan_pg1`, `nama_pg2`, `nip_pg2`, `jabatan_pg2`, `nama_pg3`, `nip_pg3`, `jabatan_pg3`, `nama_pg4`, `nip_pg4`, `jabatan_pg4`, `nama_pg5`, `nip_pg5`, `jabatan_pg5`, `jam_lembur1`, `jam_lembur2`, `bg_mengetahui`, `nama_mengetahui`) VALUES
(3, '047/SPL/BKIPM/2017', 'Bimo C Timor', '2018-03-27', 'IT staff', 'Libur Sabtu - Minggu', '<p>1.pemeriksaan data ikan</p>\r\n<p>2.mengecek kesediaan</p>\r\n<p>3.pemeriksaan data ikan</p>\r\n<p>4.mengecek kesediaan</p>', '2018-03-27', 'Hasan', '/9248298', 'Koor PHPI', 'Slamet Hariyono,Spi', '/39490837', 'PHPI', 'Hasan', '/0987654', 'ABC', '', '', '', '', '', '', '18.00 wib', '04.00 wib', 'kepala seksi pengawasan', 'Slamet Hariyono,Spi'),
(5, '0987654', 'Bimo C Timor', '2018-03-27', 'IT', 'Libur Sabtu - Minggu', 'mengecek kesediaan di dinas', '2018-03-27', 'Hasan', '/9248298', 'Koor PHPI', 'Slamet Hariyono,Spi', '/39490837', 'Asisten PHPI', 'Hasan', '/0987654', 'ABC', 'Bimo C Timor', '/56789', 'PHPI', 'Hasan', '09877', 'PHPI2', '18.00 wib', '04.00 wib', 'kepala seksi pengawasan', 'Slamet Hariyono,Spi'),
(6, '0987654d', 'Bimo C Timor', '2018-05-08', 'ddd', 'Libur Hari besar/Kerja', '<p>ddede</p>', '2018-05-08', 'Bimo C Timor', '/9248298', 'Koor PHPI', 'Bimo C Timor', '313', 'PHPI', '', '', '', '', '', '', '', '', '', '18.00 wib', '04.00 wib', 'kepala seksi pengawasan', 'Sarwan,Spi,MSi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_masuk` (
  `id_sm` int(12) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(18) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `file_sm` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_sm`, `asal_surat`, `nomor_surat`, `tanggal_surat`, `keterangan`, `file_sm`) VALUES
(2, 'Dinas', '078765', '2018-03-24', 'coba upload', 'BalsamiqEula.pdf'),
(3, 'semarang', '0987654', '2018-04-24', 'coba', 'fitur web.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_users` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(1, 'Administrator', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'wawan_softeware_developer_pas2.jpg', 1, 'y'),
(3, 'Pegawai', 'pegawai@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'mhs1.PNG', 2, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE IF NOT EXISTS `tbl_user_level` (
  `id_user_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id`), ADD KEY `id_user_level` (`id_user_level`), ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tbl_laporan_lembur`
--
ALTER TABLE `tbl_laporan_lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_latihan`
--
ALTER TABLE `tbl_latihan`
  ADD PRIMARY KEY (`id_lat`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_surat_lembur`
--
ALTER TABLE `tbl_surat_lembur`
  ADD PRIMARY KEY (`id_sl`);

--
-- Indexes for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_users`), ADD KEY `id_user_level` (`id_user_level`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_laporan_lembur`
--
ALTER TABLE `tbl_laporan_lembur`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_latihan`
--
ALTER TABLE `tbl_latihan`
  MODIFY `id_lat` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_surat_lembur`
--
ALTER TABLE `tbl_surat_lembur`
  MODIFY `id_sl` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_sm` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
ADD CONSTRAINT `tbl_hak_akses_ibfk_1` FOREIGN KEY (`id_user_level`) REFERENCES `tbl_user_level` (`id_user_level`),
ADD CONSTRAINT `tbl_hak_akses_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tbl_menu` (`id_menu`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_user_level`) REFERENCES `tbl_user_level` (`id_user_level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
