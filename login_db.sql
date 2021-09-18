-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 08:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(25) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_nama` varchar(30) NOT NULL,
  `admin_alamat` varchar(250) NOT NULL,
  `admin_telepon` varchar(15) NOT NULL,
  `admin_ip` varchar(12) NOT NULL,
  `admin_online` int(11) NOT NULL,
  `admin_level_kode` int(11) NOT NULL,
  `admin_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user`, `admin_pass`, `admin_nama`, `admin_alamat`, `admin_telepon`, `admin_ip`, `admin_online`, `admin_level_kode`, `admin_status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Bandung', '087820033395', '', 0, 1, 'A'),
('ali', '86318e52f5ed4801abe1d13d509443de', 'Ali Abdul Wahid', 'Bandung', '0871821110122', '', 0, 3, 'H'),
('nava', '36025797b41dd0fb87797471600acb20', 'Nava Gia Ginasta', 'Cianjur', '087820033395', '', 0, 1, 'A'),
('navagigs', 'be57e32188a7320c4d1f252c8799c639', 'Nava Gia Ginasta', 'Cianjur', '087820033395', '', 0, 3, 'A'),
('op', '11d8c28a64490a987612f2332502467f', 'operator', '-', '-', '', 0, 3, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `admin_level`
--

CREATE TABLE `admin_level` (
  `admin_level_kode` int(11) NOT NULL,
  `admin_level_nama` varchar(30) NOT NULL,
  `admin_level_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_level`
--

INSERT INTO `admin_level` (`admin_level_kode`, `admin_level_nama`, `admin_level_status`) VALUES
(1, 'Superadmin', 'A'),
(2, 'Administrator', 'A'),
(3, 'Operator', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_tema` varchar(100) NOT NULL,
  `agenda_deskripsi` text NOT NULL,
  `agenda_mulai` date NOT NULL,
  `agenda_selesai` date NOT NULL,
  `agenda_tempat` varchar(100) NOT NULL,
  `agenda_jam` varchar(50) NOT NULL,
  `agenda_gambar` varchar(100) DEFAULT NULL,
  `agenda_posting` datetime NOT NULL,
  `admin_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_tema`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_jam`, `agenda_gambar`, `agenda_posting`, `admin_nama`) VALUES
(9, 'SEMINAR AKTI 2019', '<p>\n	Kegiatan Seminar AKTI 2019 yang diikuti seluruh mahasiwa</p>\n', '2020-12-16', '2020-12-17', 'Kampus AKTI', '9.00 WIB', '2650401.jpg', '2016-01-05 13:02:46', 'Administrator'),
(10, 'FAREWELL PARTY WISUDA 2019', '<p>\r\n	Acara Pelepasan Wisudawan &amp; Wisudawati AKTI TA 2019</p>\r\n', '2020-12-17', '2020-12-18', 'Kampus AKTI', '9.00 WIB', 'q.png', '2016-01-08 01:11:29', 'Administrator'),
(11, 'WISUDA AKTI TA 2019 ', '<p>\r\n	Kegiatan Wisuda Mahasiswa AKTI TA 2016</p>\r\n', '2020-12-30', '2020-12-31', 'Kampus AKTI', '09.00 WIB', 'y.png', '2016-01-29 14:05:21', 'Administrator'),
(12, 'WEBINAR SERIES #14', '<p>\r\n	Basic Skill Kerja Bangku untuk Bekerja di Industri Otomotif</p>\r\n', '2020-12-14', '2020-12-14', 'Zoom Meeting Web', '09.00 - 12.00 WIB', 'd.png', '2020-12-14 16:02:46', 'Administrator'),
(14, 'Webinar Series #15', '<p>\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Tema : METODE MENGAJAR ALA TOYOTA</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Pemateri : HERY TRIANA</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Trainer Job Instruction Skill</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Opening :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Ir. Muhammad Yusuf - Kepala Bagian Toyota Learning Center</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Closing :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Ir. Muhammad Yusuf - Kepala Bagian Toyota Learning Center</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Moderator :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Rachmasari, ST - Staff Toyota Learning Center</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Save the date :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Hari/Tanggal : Jumat, 22 Januari 2021</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Platfrom : Zoom</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Start from : 09.00 - 11.00 WIB</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Fasilitas :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Free</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Relasi</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Ilmu bermanfaat</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Teman baru</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Yuk daftarkan segera!</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Link registrasi :</span></p>\n<p>\n	<a href=\"http://www.bit.ly/WebiTIA15\"><span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">bit.ly/WebiTIA15</span></a></p>\n', '2021-01-22', '2021-01-22', 'Zoom Meeting Web', '09.00 - 11.00 WIB', '5191411.jpg', '2021-01-21 11:44:57', 'Administrator'),
(15, 'Webinar Series #16 - \"Robot for Education\"', '<p>\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Tema : ROBOT FOR EDUCATION</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Pemateri : M. Juliarto, S.T.</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">-Instruktur IoT AKTI</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">-Expert IoT ASC</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Opening :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Ir. Mursyid - Wakil Direktur AKTI</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Closing :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Ir. Mursyid - Wakil Direktur AKTI</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Moderator :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Rachmasari, ST - Staff Toyota Learning Center</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Save the date :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Hari/Tanggal : Jumat, 05 Februari 2021</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Platfrom : Zoom</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Start from : 09.00 - 11.00 WIB</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Fasilitas :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">-Free</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">-Relasi</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">-Ilmu bermanfaat</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">-Teman baru</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Yuk daftarkan segera!</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Link registrasi :</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\n	<a href=\"http://bit.ly/WebiTIA16\"><span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">bit.ly/WebiAKTI16</span></a></p>\n', '2021-02-05', '2021-02-05', 'Zoom Meeting Web', '09.00 - 11.00 WIB', 'u.png', '2021-01-27 10:03:58', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `akti_akademik`
--

CREATE TABLE `akti_akademik` (
  `akademik_id` int(11) NOT NULL,
  `akademik_title` varchar(100) DEFAULT NULL,
  `akademik_deskripsi` text DEFAULT NULL,
  `akademik_gambar` text NOT NULL,
  `akademik_kategori` varchar(255) DEFAULT NULL,
  `akademik_keterangan` text NOT NULL,
  `admin_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_akademik`
--

INSERT INTO `akti_akademik` (`akademik_id`, `akademik_title`, `akademik_deskripsi`, `akademik_gambar`, `akademik_kategori`, `akademik_keterangan`, `admin_nama`) VALUES
(1, 'Mengapa AKTI ?', 'Akademi Komunitas Toyota Indonesia menjalin kerja sama dengan beberapa Kampus baik dari dalam maupun luar negeri.                                                                                                                                                                                                                                                                                                                   ', '1611204006-Presentation3.jpg', 'Halaman Home', '<p>	Test</p>', 'Administrator'),
(2, 'Tentang Program Studi', 'Akademi Komunitas Toyota Indonesia memiliki 2 program studi, yaitu : TPMO, TOPKR 4                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '1611204306-Presentation5.jpg', 'Halaman Home', '<p>\n	Test</p>\n', 'Administrator'),
(3, 'Bagaimana Kuliah di Akademi Komunitas Toyota Indonesia ?', ' Akademi Komunitas Toyota Indonesia menyediakan fasilitas yang sangat baik bagi siswa untuk mendukung proses belajar mengajar.                                                                                                                                                                                                                                                                                                                   ', '1611204533-Presentation6.png', 'Halaman Home', '<p>\n	&nbsp;&nbsp;</p>\n', 'Administrator'),
(4, 'Reputasi', 'Akademi Komunitas Toyota Indonesia telah memenangkan banyak penghargaan baik secara nasional maupun internasional.                                                                                        ', '1618540064-Reputasi.png', 'Halaman Akademik', '<p>\r\n	Konten Halaman Akademik</p>\r\n', 'Administrator'),
(5, 'Dosen', 'Akademi Komunitas Toyota Indonesia tidak hanya fokus mengmebangkan generasi bangsa dibidang akademik                                                                                        ', '1618539882-Dosen.png', 'Halaman Akademik', '<p>\r\n	Konten Halaman Akademik</p>\r\n', 'Administrator'),
(6, 'Karir', 'AKTI juga membimbing mahasiswanya sesuai dengan visi Akademi Komunitas Toyota Indonesia di masa depan                                                                                                                        ', '1618539955-Karir.png', 'Halaman Akademik', '<p>\n	Konten Halaman Akademik&nbsp;</p>\n', 'Administrator'),
(7, 'Kolaborasi', 'Akademi Komunitas Toyota Indonesia memiliki banyak kerjasama yang baik dengan banyak perusahaan di Indonesia.                                                                                        ', '1618540039-Kolaborasi.png', 'Halaman Akademik', '<p>\r\n	Konten Halaman Akademik</p>\r\n', 'Administrator'),
(8, 'Fasilitas', 'Akademi Komunitas Toyota Indonesia menyediakan fasilitas yang baik bagi mahasiswa untuk mendukung proses belajar mengajar.                                                                                        ', '1618539927-Fasilitas.png', 'Halaman Akademik', '<p>\r\n	Konten Halaman Akademik</p>\r\n', 'Administrator'),
(9, 'Keunggulan', 'Akademi Komunitas Toyota Indonesia memiliki staf pengajar yang berpengalaman di bidangnya dan sejumlah penelitian yang berkualitas.                                                                                                                                    ', '1618540064-Reputasi_3.png', 'Halaman Akademik', '<p>Konten Halaman Akademik</p>', 'Administrator'),
(19, 'Algoritma', 'Matakuliah alur program  adalah sesuatu yang sangat simpel benernya tapi sangat berarti maka dari itu kita harus belajar', '2mgf_p4dt_210609.jpg', 'Halaman Akademik', '<ul><li>Hahaha</li><li>HEhehe</li><li>HAhaha</li></ul>', 'Superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `akti_assesor`
--

CREATE TABLE `akti_assesor` (
  `assesor_id` int(11) NOT NULL,
  `assesor_nama` varchar(100) DEFAULT NULL,
  `assesor_no_sertifikat` varchar(100) DEFAULT NULL,
  `assesor_status` varchar(100) DEFAULT NULL,
  `admin_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_assesor`
--

INSERT INTO `akti_assesor` (`assesor_id`, `assesor_nama`, `assesor_no_sertifikat`, `assesor_status`, `admin_nama`) VALUES
(1, 'AINUL RUSMAN', '29100.8211.04.2.0000004.2017', 'Vocation #01', 'Administrator'),
(2, 'FIFIK FIRMANSAH', '29100.8211.04.2.0000009.2017', 'Vocation #01', 'Administrator'),
(3, 'RAHMAT HIDAYAT', '29100.8211.04.2.0000010.2017', 'Vocation #01', 'Administrator'),
(4, 'CHALVIN EDIYANA', '29100.8211.04.2.0000015.2017', 'Vocation #01', 'Administrator'),
(5, 'TAJUDIN', '29100.8211.04.2.0000018.2017', 'Vocation #01', 'Administrator'),
(6, 'RONI SUARNO', '29100.8211.04.2.0000020.2017', 'Vocation #01', 'Administrator'),
(7, 'SAHRUL KOSASIH', '29100.8211.04.2.0000026.2017', 'Vocation #01', 'Administrator'),
(8, 'EMAN HERMAWAN', '29100.8211.04.2.0000027.2017', 'Vocation #01', 'Administrator'),
(9, 'SURYANA MAULANA', '29100.8211.04.2.0000029.2017', 'Vocation #01', 'Administrator'),
(10, 'WARDIMAN', '29100.8211.04.2.0000030.2017', 'Vocation #01', 'Administrator'),
(11, 'AMAR RAMDAN', '29100.8211.04.2.0000031.2017', 'Vocation #01', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `akti_contact`
--

CREATE TABLE `akti_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_pengirim` varchar(100) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_telp` varchar(100) DEFAULT NULL,
  `contact_deskripsi` text DEFAULT NULL,
  `contact_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_contact`
--

INSERT INTO `akti_contact` (`contact_id`, `contact_pengirim`, `contact_email`, `contact_telp`, `contact_deskripsi`, `contact_waktu`) VALUES
(6, 'Farhan Fauzan', 'fauzanfarhan11@gmail.com', '081312007117', 'Kampus AKTI memberikan kualitas pembelajaran terbaik', '2021-01-12 17:00:00'),
(20, 'Rendi kuswandi', 'rendikuswandi060@gmail.com', '082371934923', 'Saya sangat amat senang bisa belajar di pt crop inspirasi digital', '2021-09-17 11:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `akti_dosen`
--

CREATE TABLE `akti_dosen` (
  `dosen_id` int(11) NOT NULL,
  `dosen_nip` varchar(50) DEFAULT NULL,
  `dosen_nama` varchar(100) DEFAULT NULL,
  `dosen_jabatan` varchar(100) DEFAULT NULL,
  `dosen_foto` varchar(50) DEFAULT NULL,
  `dosen_kategori` varchar(50) NOT NULL,
  `dosen_status` varchar(20) DEFAULT NULL,
  `admin_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_dosen`
--

INSERT INTO `akti_dosen` (`dosen_id`, `dosen_nip`, `dosen_nama`, `dosen_jabatan`, `dosen_foto`, `dosen_kategori`, `dosen_status`, `admin_nama`) VALUES
(1, '12020001', 'Dedi', 'Dosen TOPKR', '1608112050-Dedi_2.jpg', '8', '1', 'Administrator'),
(2, '12020002', 'Lutfi', 'Dosen TOPKR', '1608114235-Lutfi.JPG', '8', '1', 'Administrator'),
(3, '12020003', 'Raharto', 'Dosen TOPKR', '1608114270-Raharto.JPG', '8', '1', 'Administrator'),
(4, '12020004', 'Suhermanto', 'Dosen TOPKR', '1608114354-Suhermanto.JPG', '8', '1', 'Administrator'),
(5, '0022020001', 'Akmal', 'Dosen TPMO', '1608114396-Akmal_1.JPG', '7', '1', 'Administrator'),
(6, '0022020002', 'Juliarto', 'Dosen TPMO', '1608114429-Juliarto.JPG', '7', '1', 'Administrator'),
(7, '0022020003', 'Kurniansyah', 'Dosen TPMO', '1608114478-Kurniansyah.JPG', '7', '1', 'Administrator'),
(8, '0022020004', 'Niman', 'Dosen TPMO', '1608114502-Niman.JPG', '7', '1', 'Administrator'),
(9, '0022020005', 'Rusydi', 'Dosen TPMO', '1608114547-Rusydi.JPG', '7', '1', 'Administrator'),
(10, '0022020006', 'Saepudin', 'Dosen TPMO', '1608114575-Saepudin.JPG', '7', '1', 'Administrator'),
(11, '123456', 'Amirul Chusni', 'Direktur', '1610946373-1.jpg', '1', '1', 'Administrator'),
(12, '123456', 'Sudibyo A.S.', 'Wakil Direktur I', '1610946427-IMG_9244.JPG', '1', '1', 'Administrator'),
(13, '123456', 'Mursyid', 'Wakil Direktur II', '1610946485-3.jpg', '1', '1', 'Administrator'),
(14, '123456', 'Rusydi', 'Ketua Porgram Studi TPMO', '1610946686-1608114547-Rusydi.JPG', '7', '1', 'Administrator'),
(15, '123456', 'Dedi', 'Ketua Porgram Studi TOPKR4', '1610946747-1608109951-Dedi.JPG', '8', '1', 'Administrator'),
(16, '123456', 'Suhermanto', 'Kepala Unit Teaching Factory dan  P3M', '1610946801-1608114354-Suhermanto.JPG', '6', '1', 'Administrator'),
(18, '123456', 'Akmal', 'Kepala Unit Sarana & Prasarana', '1610946881-1608114396-Akmal.JPG', '6', '1', 'Administrator'),
(19, '123456', 'Niman', 'Kepala Unit Kemahasiswaan & Alumni', '1610946915-1608114502-Niman.JPG', '6', '1', 'Administrator'),
(20, '123456', 'Praditya Alambara', 'Kepala Unit Kelembagaan, SDM & Keuangan', '1610946963-image001.jpg', '6', '1', 'Administrator'),
(21, '123456', 'Kurniansyah', 'Kepala Unit Kerjasama & IT', '1610946801-1608114354-Suhermanto_1.jpg', '6', '1', 'Administrator'),
(22, '123456', 'Hertyoso Nursasongko, S.T., M.Eng.Sc', 'Ketua Senat', '1610946801-1608114354-Suhermanto_2.jpg', '5', '1', 'Administrator'),
(23, '123456', 'Hessa, S.T., M.Kom', 'Wakil Ketua Senat', '1610946881-1608114396-Akmal_1.jpg', '5', '1', 'Administrator'),
(24, '123456', 'Afien Wibhawa', 'Ketua Yayasan', '1610947335-Pak Afien.jpg', '5', '1', 'Administrator'),
(25, '123456', 'Djatmiko E.S.', 'Sekertaris Yayasan', '1610946686-1608114547-Rusydi_1.jpg', '5', '1', 'Administrator'),
(26, '123456', 'Warnoto', 'Bendahara Yayasan', '1610946881-1608114396-Akmal_2.jpg', '5', '1', 'Administrator'),
(27, '123456', 'Hertyoso Nursasongko, S.T., M.Eng.Sc', 'Dosen TPMO', '1610948165-Hertyoso.png', '7', '1', 'Administrator'),
(28, '123456', 'Djatmiko E.S., S.T., M.M', 'Dosen TPMO', '1610948196-djatmiko.png', '7', '1', 'Administrator'),
(29, '123456', 'Raynaldhi Yudha, S.T.,M.T.', 'Dosen TPMO', '1610948337-Raynaldhi.png', '7', '1', 'Administrator'),
(30, '12346', 'Mutiara Dian Sari, S.T.,M.T.', 'Dosen TPMO', '1610948362-mutiara.png', '7', '1', 'Administrator'),
(31, '123456', 'Yani Koerniawan, S.T.,M.T.', 'Dosen TOPKR4', '1610948430-Pak Yani Depan.jpg', '8', '1', 'Administrator'),
(32, '123456', 'Wingky Kurniawan, S.T.,M.T.', 'Dosen TOPKR4', '1610948561-winky.png', '8', '1', 'Administrator'),
(33, '123456', 'Bayu Priyanto, S.T.,M.M.', 'Dosen TOPKR4', '1610948587-Bayu.png', '8', '1', 'Administrator'),
(34, '123456', 'Hessa, S.T., M.Kom', 'Dosen TOPKR4', '1610948625-hessa.png', '8', '1', 'Administrator'),
(35, '123456', 'Indrawan, S.T.,M.T.', 'Dosen TOPKR4', '1610948680-Indarawan_depan.JPG', '8', '1', 'Administrator'),
(66, '152018072', 'Rendi Kuswandi', 'Dosen TPMO', 'FOTO SAYA.jpg', '8', NULL, 'Superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `akti_fakta`
--

CREATE TABLE `akti_fakta` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `admin_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_fakta`
--

INSERT INTO `akti_fakta` (`id`, `title`, `gambar`, `keterangan`, `kategori`, `admin_nama`) VALUES
(1, '10.000 m', 'luas.png', 'Luas Kampus', NULL, 'rendi'),
(2, '96', 'mahasiswa.png', 'Mahasiswa', NULL, 'rendi'),
(3, '160 orang', '2.png', 'Alumni', '1', 'Administrator'),
(4, '2', 'bgatas6.png', 'Program Studi', NULL, 'rendi'),
(5, '3.000 m', 'gedung.png', 'Luas Asrama', NULL, 'rendi'),
(6, 'Kesenian & Kebudayaan', 'seni.png', '-', '2', 'Administrator'),
(7, 'Olahraga', 'olahraga.png', '-', '2', 'Administrator'),
(8, 'Penalaran', 'penalaran.png', '<p>\n	-</p>\n', '2', 'Administrator'),
(9, 'Kerohanian', 'rohani.png', '-', '2', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `akti_fasilitas`
--

CREATE TABLE `akti_fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `fasilitas_parent` int(11) NOT NULL,
  `fasilitas_judul` varchar(255) NOT NULL,
  `fasilitas_deskripsi` text NOT NULL,
  `fasilitas_status` varchar(255) NOT NULL,
  `fasilitas_gambar` varchar(255) NOT NULL,
  `fasilitas_urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `akti_pertanyaan`
--

CREATE TABLE `akti_pertanyaan` (
  `pertanyaan_id` int(11) NOT NULL,
  `pertanyaan_pengirim` varchar(255) NOT NULL,
  `pertanyaan_telp` varchar(20) NOT NULL,
  `pertanyaan_email` varchar(50) NOT NULL,
  `pertanyaan_deskripsi` text NOT NULL,
  `pertanyaan_waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_pertanyaan`
--

INSERT INTO `akti_pertanyaan` (`pertanyaan_id`, `pertanyaan_pengirim`, `pertanyaan_telp`, `pertanyaan_email`, `pertanyaan_deskripsi`, `pertanyaan_waktu`) VALUES
(1, 'Farhan', '081312007117', 'fauzanfarhan11@gmail.com', 'Test', '2021-01-07'),
(3, 'ANwar', '0009998888', 'aktidata@gmail.com', 'Pertanyaan', '2021-01-20'),
(4, 'ANwar', '0823233234', 'aktidata@gmail.com', 'pertanyaan', '2021-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `akti_program_studi`
--

CREATE TABLE `akti_program_studi` (
  `prodi_id` int(11) NOT NULL,
  `prodi_nama` varchar(255) NOT NULL,
  `prodi_tentang` text NOT NULL,
  `prodi_visi` text NOT NULL,
  `prodi_misi` text NOT NULL,
  `prodi_foto` text NOT NULL,
  `prodi_dosen` varchar(255) NOT NULL,
  `prodi_kurikulum` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_program_studi`
--

INSERT INTO `akti_program_studi` (`prodi_id`, `prodi_nama`, `prodi_tentang`, `prodi_visi`, `prodi_misi`, `prodi_foto`, `prodi_dosen`, `prodi_kurikulum`, `updated_at`, `created_at`) VALUES
(15, 'Tata Operasi Perakitan Kendaraan Roda 4 (TOPKR4)', 'Program Studi yang diusulkan adalah Tata Operasi Perakitan Kendaraan Roda 4 (empat) untuk Jenjang Pendidikan Diploma 2 dengan gelar lulusan Ahli Muda. Untuk mencapai hasil pembelajaran mahasiswa melewati proses pembelajaran sebanyak 75 SKS.\r\nUntuk mendukung proses pembelajaran maka diperlukan dosen yang kompeten sesuai dengan pendidikan dan pelatihan yang dijalaninya.', 'Menjadi Progam Studi yang unggul dalam bidang Tata Operasi Perakitan Kendaraan Roda 4 pada tahun 2025 untuk menghasilkan lulusan yang tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.', '<figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure><p>\"&gt;</p><figure class=\"table\"><table><tbody><tr><td>1.</td><td>Menyelenggarakan Program Pendidikan proses Pemeliharaan Mesin Otomasi untuk Industri Otomotif di Indonesia melalui sistem Pendidikan tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, sesuai dengan kebutuhan pasar/user dengan tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.</td></tr><tr><td>2.</td><td>Melaksanakan Penelitian untuk meningkatkan standar teknologi dalam bidang Pemeliharaan Mesin Otomasi Industri Otomotif di Indonesia, dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia ke depan.</td></tr><tr><td>3.</td><td>Menyelenggarakan Pengabdian Kepada Masyarakat untuk meningkatkan keahlian dan taraf hidup masyarakat Indonesia khususnya pada bidang Pemeliharaan Mesin Otomasi untuk dapat memajukan pada Industri Otomotif dengan tanggap (perceptive) , tangkas (agile), dan tangguh (perseverance).</td></tr><tr><td>4.</td><td>Menyelenggarakan Kegiatan Kemitraan dengan Industri yang mendukung penyerapan lulusan dan kegiatan Tridharma Perguruan Tinggi.</td></tr></tbody></table></figure>', '654-removebg-preview.png', '8', '<style type=\"text/css\">\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable td{\r\n	font-size:9px;\r\n}\r\n	}</style>\r\n<p>\r\n	<strong>Sarjana Sains Terapan</strong></p>\r\n<p>\r\n	Program studi TOPKR4 dirancang untuk memenuhi tuntutan aplikasi Teknologi Informasi di sektor Industri dan Bisnis. Selama Proses belajar mahasiswa dibekali dengan materi-materi yang mendukung penguasaan Teknologi Informasi seperti jaringan komputer wireless, rekayasa perangkat lunak, database, &lsquo;multimedia, sistem keamanan informasi serta teknologi dan aplikasi WAP dan WEB. Seiring dengan perkembangan Teknologi Informasi yang sangat cepat, serta untuk mengantisipasi kebutuhan di masyarakat, lulusan yang dibekali dengan state of the art teknologi informasi, seperti Mobile Content and Apllication serta berbagai aspek hukum dan etika yang berhubungan dengan TI.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester I</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I161A3</td>\r\n			<td>\r\n				Agama/Religion</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I142H2</td>\r\n			<td>\r\n				Pengantar Logistik/Logistics Introduction</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I163A3</td>\r\n			<td>\r\n				General English I</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I262D2</td>\r\n			<td>\r\n				Matematika Diskrit/Discrete Mathematics</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I123A4</td>\r\n			<td>\r\n				Algoritma (C++) /Algorithm (C++)</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I114D4</td>\r\n			<td>\r\n				Arsitektur Komputer + (Assembler)/ Computer Architecture</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I312L3</td>\r\n			<td>\r\n				Fisika Dasar/Physic Fundamental</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				8</td>\r\n			<td>\r\n				T4I223I4</td>\r\n			<td>\r\n				Disain dan Pemrograman Web/ Web Design and Programming</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>25</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester II</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I212D2</td>\r\n			<td>\r\n				General English II</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I361C3</td>\r\n			<td>\r\n				PPkn/State&#39;s Ideology and civic education</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I263D3</td>\r\n			<td>\r\n				Bahasa Indonesia/ Indonesian Language</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I322I3</td>\r\n			<td>\r\n				Analisis dan Perancangan Sistem Informasi/ Information System Analysis &amp; Design</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I212D4</td>\r\n			<td>\r\n				Sistem Operasi/Operating System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I252P2</td>\r\n			<td>\r\n				Supply Chain Managemet</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I211D2</td>\r\n			<td>\r\n				Komunikasi Data/Data Communication</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				8</td>\r\n			<td>\r\n				T4I222D4</td>\r\n			<td>\r\n				Basis Data I/ Database I</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				9</td>\r\n			<td>\r\n				T3I212F2</td>\r\n			<td>\r\n				Proyek IT I/ Project I</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>25</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester III</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I363A2</td>\r\n			<td>\r\n				General English III</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I412E4</td>\r\n			<td>\r\n				Sistem Tersebar/Distributed systems</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I622AB2</td>\r\n			<td>\r\n				Sistem Tranportasi &amp; Distribusi / Transportation &amp; Distribution System</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I412M4</td>\r\n			<td>\r\n				Rekayasa Perangkat Lunak/ Software Engineering</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I322S4</td>\r\n			<td>\r\n				Basis Data II/ Database II</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I322K4</td>\r\n			<td>\r\n				Pemrograman Berorientasi Objek /object-oriented programming</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I312D4</td>\r\n			<td>\r\n				Jaringan Komputer /Computer Network</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>24</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester IV</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I522Y3</td>\r\n			<td>\r\n				Sistem ERP 2/ ERP System I</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I511A2</td>\r\n			<td>\r\n				Metodologi Penelitian/Research Methodology</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I412D4</td>\r\n			<td>\r\n				Administrasi Jaringan Komputer/ Network Administrator</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I542M2</td>\r\n			<td>\r\n				Manajemen Proyek/Project Management</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I512AE2</td>\r\n			<td>\r\n				Sistem Informasi Akuntansi/Accounting Information System</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I413D4</td>\r\n			<td>\r\n				Sistem Multimedia/Multimedia System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I412W4</td>\r\n			<td>\r\n				Web Service Programing</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				8</td>\r\n			<td>\r\n				T4I412F2</td>\r\n			<td>\r\n				Proyek IT II/ Project II</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>23</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester V</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T3I511A2</td>\r\n			<td>\r\n				Sistem ERP 2/ ERP System I</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T3I161C2</td>\r\n			<td>\r\n				Mobile Programming</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T3I523X4</td>\r\n			<td>\r\n				Kapita Selekta/Capita-Selecta</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T3I511D3</td>\r\n			<td>\r\n				Kewirausahaan/ Entrepreneurship</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T3I561I2</td>\r\n			<td>\r\n				Network Security</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T3I512L4</td>\r\n			<td>\r\n				Sistem Informasi Geografis/Geographic Information System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T3I542M2</td>\r\n			<td>\r\n				Pemodelan dan Simulasi Logistik/ Modelling and Simulation of Logistic System</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\" height=\"23\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>22</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester VI</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I612M2</td>\r\n			<td>\r\n				Internship I</td>\r\n			<td align=\"center\">\r\n				8</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>8</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester VII</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"10%\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\" width=\"10%\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I622AA4</div>\r\n			</td>\r\n			<td>\r\n				Data mining/Bisnis inteligence</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I722AG2</div>\r\n			</td>\r\n			<td>\r\n				Sistem Manajemen Pengetahuan / Knowledge Management System</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I711E2</div>\r\n			</td>\r\n			<td>\r\n				Etika Propesi/Profession ethic</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I711C2</div>\r\n			</td>\r\n			<td>\r\n				Manajemen dan Kepemimpinan/Management &amp; leadership</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I713F4</div>\r\n			</td>\r\n			<td>\r\n				Kecerdasan Buatan/Artifical Intelegence</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I722AF4</div>\r\n			</td>\r\n			<td>\r\n				Sistem pendukung Keputusan/Decision Support System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I713G4</div>\r\n			</td>\r\n			<td>\r\n				Desain Interkasi/Interaction Design</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div align=\"right\">\r\n					<strong>Subtotal</strong></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				22</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester VIII</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I811C4</td>\r\n			<td>\r\n				Internship II</td>\r\n			<td align=\"center\">\r\n				6</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I811BA</td>\r\n			<td>\r\n				Proyek Akhir/Final Project</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>10</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '2021-09-17 11:20:09', '2021-07-29 21:29:05'),
(23, 'Teknik Pemeliharaan Mesin Otomasi (TPMO)', 'Teknik Pemeliharaan Mesin Otomasi merupakan perpaduan/kombinasi bidang ilmu antara Teknik Pemeliharaan Mesin Industri dan Teknik Otomasi.', 'Menjadi Progam Studi yang unggul dalam bidang Teknik Pemeliharaan Mesin Otomasi pada tahun 2025 untuk menghasilkan lulusan yang tanggap (perceptive), tangkas (agile), dan tangguh (perseverance) sebagai fondasi dalam rangka mendukung perkembangan Industri Otomotif Indonesia.', '<p>menjadikan TPMO sebagai program studi yang berkualitas</p>', '49615.jpg', '7', '<style type=\"text/css\">\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable td{\r\n	font-size:9px;\r\n}\r\n	}</style>\r\n<div class=\"default\">\r\n	<p>\r\n		<strong>Sarjana Sains Terapan</strong></p>\r\n	<p>\r\n		Kurikulum TPMO dirancang agar para lulusan mempunyai kompetensi untuk menangani pekerjaan dan permasalahan dalam bidang operasional logistik yang mencakup berbagai aspek seperti Ekspor-Impor, Kepabeanan, Distribusi, Transportasi, Warehousing, Cargo &amp; Shipping, Inventory, Purchasing (Procurement), Good Inspections, Logistic Information Service, Perpajakan, Resiko dan Asuransi.</p>\r\n	<strong>DIPLOME 4 CURRICULUM</strong><br />\r\n	<!-- D-IV Semester I  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester I</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L151D2</td>\r\n				<td>\r\n					English Language 1+Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L151O2</td>\r\n				<td>\r\n					Introduction to Management</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L151H2</td>\r\n				<td>\r\n					Mathematics 1 + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L151J2</td>\r\n				<td>\r\n					Statistic 1</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L151L2</td>\r\n				<td>\r\n					Microeconomics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L151B3</td>\r\n				<td>\r\n					Indonesian Language</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L151A3</td>\r\n				<td>\r\n					Religious Education</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L153A2</td>\r\n				<td>\r\n					Introduction to Logistics System + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L152A3</td>\r\n				<td>\r\n					Introduction to Computer and Information Systems + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>22</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester II  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester II</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L251E2</td>\r\n				<td>\r\n					English Language 2+Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L251P2</td>\r\n				<td>\r\n					Human Resource Management</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L251I3</td>\r\n				<td>\r\n					Mathematics 2</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L251K3</td>\r\n				<td>\r\n					Statistic 2+Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L251M2</td>\r\n				<td>\r\n					Macroeconomics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L253B3</td>\r\n				<td>\r\n					Purchasing Management</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L251C3</td>\r\n				<td>\r\n					Citizenship Education</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L253C2</td>\r\n				<td>\r\n					Supply Chain Management + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L252B3</td>\r\n				<td>\r\n					Algorithm + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester III  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester III</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L351F2</td>\r\n				<td>\r\n					English Language 3 + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L351Q2</td>\r\n				<td>\r\n					Organizational Behavior</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L352K3</td>\r\n				<td>\r\n					Operations Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L352N2</td>\r\n				<td>\r\n					Quality Statistical Control + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L352H3</td>\r\n				<td>\r\n					Introductory Accounting + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L353H3</td>\r\n				<td>\r\n					Inventory Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L352F2</td>\r\n				<td>\r\n					Contract Law and Agency</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L353D3</td>\r\n				<td>\r\n					Distribution Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L352C3</td>\r\n				<td>\r\n					Database + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester IV  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester IV</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L451G2</td>\r\n				<td>\r\n					English Language 4 + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L452M3</td>\r\n				<td>\r\n					Operations Research + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L453F3</td>\r\n				<td>\r\n					Warehousing Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L452I3</td>\r\n				<td>\r\n					Taxation + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L452P2</td>\r\n				<td>\r\n					International Trade</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L452T3</td>\r\n				<td>\r\n					Export Import + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L453L2</td>\r\n				<td>\r\n					Transportation Management + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L452D3</td>\r\n				<td>\r\n					System Design + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L452G2</td>\r\n				<td>\r\n					International Trade Law</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester V  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester V</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L552V4</td>\r\n				<td>\r\n					Internship Program I</td>\r\n				<td align=\"center\">\r\n					4</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L552W3</td>\r\n				<td>\r\n					Final report 1</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>4</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester VI  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester VI</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L651R2</td>\r\n				<td>\r\n					Entrepreneurship</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L653K2</td>\r\n				<td>\r\n					Marketing Logistics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L652O2</td>\r\n				<td>\r\n					Decision Theory</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L652S3</td>\r\n				<td>\r\n					Goods Inspections + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L653G3</td>\r\n				<td>\r\n					Freight Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L652R3</td>\r\n				<td>\r\n					Management of Transportation Insurance + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L652Q3</td>\r\n				<td>\r\n					Customs + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L653M3</td>\r\n				<td>\r\n					Transport System + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L652E3</td>\r\n				<td>\r\n					Logistics Information System + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>24</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester VII  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester VII</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L551N3</td>\r\n				<td>\r\n					Research Methods</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L752L3</td>\r\n				<td>\r\n					Project Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L752U3</td>\r\n				<td>\r\n					Dangerous Goods</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L753J3</td>\r\n				<td>\r\n					Customer Servis Logistics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L752J3</td>\r\n				<td>\r\n					Costing Supply Chain Management/ Cost Accounting + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L751S2</td>\r\n				<td>\r\n					Capita Selecta</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L753N2</td>\r\n				<td>\r\n					Global Logistics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L753I2</td>\r\n				<td>\r\n					Process of Logistics Products + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L753O3</td>\r\n				<td>\r\n					e-Business Logistics + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester VIII  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester VIII</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L852X3</td>\r\n				<td>\r\n					Internship Program I</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L852Y6</td>\r\n				<td>\r\n					Thesis</td>\r\n				<td align=\"center\">\r\n					4</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>7</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"3\">\r\n					<strong>Total</strong></th>\r\n				<th>\r\n					<strong>152</strong></th>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		&nbsp;</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '2021-09-16 02:13:26', '2021-09-16 02:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `akti_shortcourse`
--

CREATE TABLE `akti_shortcourse` (
  `sc_id` int(11) NOT NULL,
  `sc_nama` varchar(40) DEFAULT NULL,
  `sc_telp` varchar(20) DEFAULT NULL,
  `sc_email` varchar(30) DEFAULT NULL,
  `sc_program` varchar(20) DEFAULT NULL,
  `sc_instansi` varchar(255) NOT NULL,
  `sc_keterangan` text NOT NULL,
  `sc_waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_shortcourse`
--

INSERT INTO `akti_shortcourse` (`sc_id`, `sc_nama`, `sc_telp`, `sc_email`, `sc_program`, `sc_instansi`, `sc_keterangan`, `sc_waktu`) VALUES
(3, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic PLC', '', '', '2021-01-06 11:56:53'),
(4, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-19 14:01:13'),
(5, 'Anwar', '008983', 'aktidata@gmail.com', 'Basic Robotic', 'Penidikan', 'TEst', '2021-01-20 11:11:37'),
(6, 'Farhan', '08123456789', 'fauzanfarhan11@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 13:21:54'),
(7, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic Maintanance', 'Umum', 'ok', '2021-01-21 18:56:38'),
(8, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic Maintanance', 'Umum', 'ok', '2021-01-21 19:00:10'),
(9, 'Farhan', '08123456789', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:09:29'),
(10, 'Farhan', '08123456789', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:09:36'),
(11, 'Farhan', '08123456789', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:10:35'),
(12, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:17:43'),
(13, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic Maintanance', 'Umum', 'ok', '2021-01-21 19:20:33'),
(14, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:26:37'),
(15, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:29:07'),
(16, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:38:14'),
(17, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 19:39:50'),
(18, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic Maintanance', 'Umum', 'ok', '2021-01-21 19:42:13'),
(19, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic Maintanance', 'Umum', 'ok', '2021-01-21 20:56:44'),
(20, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 21:16:21'),
(21, 'Farhan', '081312007117', 'frhnfauzan96@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-21 21:28:03'),
(22, 'Farhan', '081312007117', 'fauzanfarhan11@gmail.com', 'Basic Maintanance', 'Industri', 'Test', '2021-01-22 10:03:28'),
(23, 'NAVA GIA GINASTA', '087820033395', 'navagiaginasta@gmail.com', 'Basic Maintanance', 'Penidikan', 'ok', '2021-01-22 15:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `akti_shortcourse_program`
--

CREATE TABLE `akti_shortcourse_program` (
  `shortcourse_id` int(11) NOT NULL,
  `shortcourse_parent` int(11) NOT NULL,
  `shortcourse_judul` varchar(255) NOT NULL,
  `shortcourse_deskripsi` text DEFAULT NULL,
  `shortcourse_status` varchar(255) DEFAULT NULL,
  `shortcourse_gambar` varchar(255) DEFAULT NULL,
  `shortcourse_waktu` datetime NOT NULL,
  `shortcourse_urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_shortcourse_program`
--

INSERT INTO `akti_shortcourse_program` (`shortcourse_id`, `shortcourse_parent`, `shortcourse_judul`, `shortcourse_deskripsi`, `shortcourse_status`, `shortcourse_gambar`, `shortcourse_waktu`, `shortcourse_urutan`) VALUES
(3, 0, 'Basic', NULL, 'index', NULL, '2020-12-29 18:00:54', NULL),
(4, 0, 'Advance', NULL, 'index', NULL, '2020-12-29 18:01:24', NULL),
(5, 0, 'Industry 4.0', NULL, 'index', NULL, '2020-12-29 18:02:01', NULL),
(6, 3, 'Basic Maintanance', NULL, 'sub', '1609247280-basic-maintanance.PNG', '2020-12-29 18:09:52', 1),
(7, 3, 'Basic PLC', NULL, 'sub', '1609247288-basic-plc.PNG', '2020-12-29 18:12:36', 2),
(11, 4, 'Pneumatic & Hydraulic', NULL, 'sub', '1609249510-pneumatic--hydraulic.png', '2020-12-29 20:43:42', 1),
(12, 6, 'Test', NULL, 'content', '1609249974-test.png', '2020-12-29 20:51:45', 0),
(13, 7, '3', NULL, 'content', '1609249988-3.png', '2020-12-29 20:53:08', 0),
(14, 11, '-', NULL, 'content', '1609254294-pneumatic-hydraulic.png', '2020-12-29 22:02:36', 0),
(16, 5, 'Basic Robotic', NULL, 'sub', '1609254673-basic-robotic.png', '2020-12-29 22:06:33', 1),
(17, 5, 'Internet Of Things', NULL, 'sub', NULL, '2020-12-29 22:06:47', 2),
(18, 16, '-', NULL, 'content', '1609254713-basic-robotic.png', '2020-12-29 22:11:53', 1),
(19, 16, '-', NULL, 'content', '1609254728-basic-robotic-2.png', '2020-12-29 22:12:08', 2),
(20, 17, 'Internet Of Things', NULL, 'content', '1610510128-internet-of-things.png', '2021-01-13 10:55:28', 1),
(21, 17, 'Internet Of Things', NULL, 'content', '1610510169-internet-of-things.png', '2021-01-13 10:56:09', 2),
(22, 11, 'Pneumatic & Hydraulic', NULL, 'content', '1610985870-pneumatic--hydraulic.png', '2021-01-13 10:57:32', 2),
(23, 4, 'Circuit Design & Troubleshooting', NULL, 'sub', '1610985686-circuit-design--troubleshooting.png', '2021-01-18 22:57:43', 2),
(24, 23, '-', 'hsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbbhsdfhjdnczjnxcjvnjdfrhnvjksbvjhkkkkkkkkkkkkkffffffbbbb', 'content', '1610985783-circuit-design.png', '2021-01-18 23:03:03', 1),
(25, 23, '-', NULL, 'content', '1610985819-circuit-design-2.png', '2021-01-18 23:03:39', 2),
(26, 4, 'Servo Motor', NULL, 'sub', NULL, '2021-01-18 23:22:20', 3),
(27, 26, '-', NULL, 'content', '1610986978-servo-motor.png', '2021-01-18 23:22:58', 1),
(28, 26, '-', NULL, 'content', '1610987002-servo-motor-2.png', '2021-01-18 23:23:22', 2),
(29, 4, 'Car Mechanism', NULL, 'sub', '1610987137-car-mechanism.png', '2021-01-18 23:25:37', 4),
(30, 29, '-', NULL, 'content', '1610987165-car-mechanism.png', '2021-01-18 23:26:05', 1),
(31, 29, '-', NULL, 'content', '1610987185-car-mechanism-2.png', '2021-01-18 23:26:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `akti_skema_sertifikasi`
--

CREATE TABLE `akti_skema_sertifikasi` (
  `skema_id` int(11) NOT NULL,
  `skema_nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_skema_sertifikasi`
--

INSERT INTO `akti_skema_sertifikasi` (`skema_id`, `skema_nama`) VALUES
(1, 'Press'),
(2, 'Press Die Maintanance'),
(3, 'Press Quality Control'),
(4, 'Welding Body'),
(5, 'Welding Frame'),
(6, 'Welding Quality Control'),
(7, 'Painting'),
(8, 'Assembly'),
(9, 'Logistic'),
(10, 'Vehicle Inspection'),
(11, 'Machine Maintanance'),
(12, 'Die Cating'),
(13, 'Casting Low Pressure'),
(14, 'Engine Machining'),
(15, 'Engine Assembly'),
(16, 'Engine Inspection'),
(17, 'Casting Die Maintanance'),
(18, 'Tool Regriding');

-- --------------------------------------------------------

--
-- Table structure for table `akti_unit_kompetensi`
--

CREATE TABLE `akti_unit_kompetensi` (
  `unit_id` int(11) NOT NULL,
  `unit_nama` varchar(100) DEFAULT NULL,
  `unit_judul` text DEFAULT NULL,
  `skema_id` int(11) NOT NULL,
  `unit_gambar` varchar(255) NOT NULL,
  `unit_waktu` date NOT NULL,
  `unit_urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `akti_unit_kompetensi`
--

INSERT INTO `akti_unit_kompetensi` (`unit_id`, `unit_nama`, `unit_judul`, `skema_id`, `unit_gambar`, `unit_waktu`, `unit_urutan`) VALUES
(1, 'Skema Operator Press Produksi Rank C ', 'Press', 1, '1609928351-press.png', '2021-01-06', 1),
(2, 'Skema  Operator Press Produksi Rank B', 'Press', 1, '1609928421-press.png', '2021-01-06', 2),
(3, 'Skema Operator Press Produksi Rank A', 'Press', 1, '1609928438-press.png', '2021-01-06', 3),
(5, 'Skema OPERATOR DIE MAINTENANCE (RANK C)', 'Press Die Maintanance', 2, '1610075382-press-die-maintanance.png', '2021-01-08', 1),
(6, 'Skema OPERATOR DIE MAINTENANCE (RANK B)', 'Press Die Maintanance', 2, '1610075406-press-die-maintanance.png', '2021-01-08', 2),
(7, 'Skema OPERATOR DIE MAINTENANCE (RANK A)', 'Press Die Maintanance', 2, '1610075460-press-die-maintanance.png', '2021-01-08', 3),
(8, 'Skema Okupasi – Operator Press Qoality Control (Rank C)', 'Press Quality Control', 3, '1610075521-press-quality-control.png', '2021-01-08', 1),
(9, 'Skema Operator Press Qoality Control (Rank B1)', 'Press Quality Control', 3, '1610075550-press-quality-control.png', '2021-01-08', 2),
(10, 'Skema Operator Press Qoality Control (Rank B2)', 'Press Quality Control', 3, '1610075617-press-quality-control.png', '2021-01-08', 3),
(11, 'Skema Operator Press Qoality Control (Rank A1)', 'Press Quality Control', 3, '1610075644-press-quality-control.png', '2021-01-08', 4),
(12, 'Skema Operator Press Qoality Control (Rank A2)', 'Press Quality Control', 3, '1610075661-press-quality-control.png', '2021-01-08', 5),
(13, 'Skema Klaster - Pengoperasian Spot Welding (Rank C1)', 'Welding Body', 4, '1610087191-welding-body.png', '2021-01-08', 1),
(14, 'Skema Klaster -  Pengencangan Bolt dan Pembersihan Body (Rank C2)', 'Welding Body', 4, '1610089141-welding-body.png', '2021-01-08', 2),
(15, 'Skema Klaster -  Perakitan Under Body (Rank B1)', 'Welding Body', 4, '1610089191-welding-body.png', '2021-01-08', 3),
(16, 'Skeman Klaster - Perbaikan Body (Rank A)', 'Welding Body', 4, '1610089220-welding-body.png', '2021-01-08', 4),
(17, 'Skema Klaster -  Perakitan Upper Body (Rank B2)', 'Welding Body', 4, '1610089241-welding-body.png', '2021-01-08', 5),
(18, 'Skema Klaster - Perakitan Shell Body Sub Assy (Rank B3)', 'Welding Body', 4, '1610089258-welding-body.png', '2021-01-08', 6),
(19, 'Skema Klaster - Perakitan Shell Body Touch Up (Rank B4)', 'Welding Body', 4, '1610089277-welding-body.png', '2021-01-08', 7),
(20, 'Skema  Perakitan Rangka Kendaraan Roda Empat (Rank C)', 'Welding Frame', 5, '1610089336-welding-frame.png', '2021-01-08', 1),
(21, 'Skema Perakitan Rangka Kendaraan Roda Empat (Rank B) ', 'Welding Frame', 5, '1610089360-welding-frame.png', '2021-01-08', 2),
(22, 'Skema Pelapisan Anti Karat Rangka Kendaraan Roda Empat (Electro Deposition Coating)', 'Welding Frame', 5, '1610089380-welding-frame.png', '2021-01-08', 3),
(23, 'Skema Pengontrolan Dan Pengujian Material Pelapis Anti Karat (Electro Deposition Coating) ', 'Welding Frame', 5, '1610089396-welding-frame.png', '2021-01-08', 4),
(24, 'Skema Perakitan Rangka Kendaraan Roda Empat (Rank A) ', 'Welding Frame', 5, '1610089418-welding-frame.png', '2021-01-08', 5),
(25, 'Skema Klaster Memeriksa Surface dan Spec Cripple Rank C1 ', 'Welding Quality Control', 6, '1610089442-welding-quality-control.png', '2021-01-08', 1),
(26, 'Skema Klaster Memeriksa Function Dan Welding Rank C2', 'Welding Quality Control', 6, '1610089460-welding-quality-control.png', '2021-01-08', 2),
(27, 'Skema Klaster Memeriksa Surface dan Spec Cripple Rank B1', 'Welding Quality Control', 6, '1610089493-welding-quality-control.png', '2021-01-08', 3),
(28, 'Skema Klaster Memeriksa Function dan Welding Rank B2', 'Welding Quality Control', 6, '1610089520-welding-quality-control.png', '2021-01-08', 4),
(29, 'Skema Klaster Memeriksa Surface dan Spec Cripple Rank A1', 'Welding Quality Control', 6, '1610089540-welding-quality-control.png', '2021-01-08', 5),
(30, 'Skema Klaster Memeriksa Function dan Welding Rank A2', 'Welding Quality Control', 6, '1610089570-welding-quality-control.png', '2021-01-08', 6),
(31, 'Skema Klaster Memeriksa Body Fitting dan Body Accuracy Rank C3', 'Welding Quality Control', 6, '1610089596-welding-quality-control.png', '2021-01-08', 7),
(32, 'Skema Klaster Memeriksa Body Fitting dan Body Accuracy Rank B3', 'Welding Quality Control', 6, '1610089612-welding-quality-control.png', '2021-01-08', 8),
(33, 'Skema Klaster Memeriksa Body Fitting dan Body Accuracy Rank A3', 'Welding Quality Control', 6, '1610089628-welding-quality-control.png', '2021-01-08', 9),
(34, 'REPAIR  BLACK OUT ', 'Painting', 7, '1610089787-painting.png', '2021-01-08', 1),
(35, 'PEMBERIAN LAPISAN PEREDAM DAN PENCEGAH KEBOCORAN (Rank B1)', 'Painting', 7, '1610090143-painting.png', '2021-01-08', 2),
(36, 'PEMBERIAN CAT PADA BODY MOBIL (Rank B2)', 'Painting', 7, '1610090158-painting.png', '2021-01-08', 3),
(37, 'PENGONTROLAN MATERIAL PRETREATMENT ED (Rank B3)', 'Painting', 7, '1610090170-painting.png', '2021-01-08', 4),
(38, 'PERBAIKAN CACAT SETELAH PROSES TOP COAT (Rank B4)', 'Painting', 7, '1610090195-painting.png', '2021-01-08', 5),
(39, 'PERBAIKAN CACAT SEBELUM PROSES TOP COAT (Rank A)', 'Painting', 7, '1610090210-painting.png', '2021-01-08', 6),
(40, 'Skema Perakitan Kendaraan Roda 4 untuk Operator Rank C', 'Assembly', 8, '1610509036-assembly.png', '2021-01-13', 1),
(41, 'Skema Skema Perakitan Kendaraan Roda 4 untuk Operator Rank B', 'Assembly', 8, '1610509100-assembly.png', '2021-01-13', 2),
(42, 'Skema Perakitan Kendaraan Roda 4 untuk Operator Rank A (Repair)', 'Assembly', 8, '1610509163-assembly.png', '2021-01-13', 3),
(43, 'Skema Skema Perakitan Kendaraan Roda 4 untuk Operator Rank A', 'Assembly', 8, '1610509189-assembly.png', '2021-01-13', 4),
(44, 'Administrasi Barang yang Masuk dan Keluar (Rank C1)', 'Logistic', 9, '1610511052-logistic.png', '2021-01-13', 1),
(45, 'Menyiapkan Barang untuk Kebutuhan Produksi (Rank C2)', 'Logistic', 9, '1610511117-logistic.png', '2021-01-13', 2),
(46, 'Pengemasan Barang Keluar (Rank C3)', 'Logistic', 9, '1610511143-logistic.png', '2021-01-13', 3),
(47, 'Administrasi Barang yang Masuk dan Keluar (Rank B1)', 'Logistic', 9, '1610511175-logistic.png', '2021-01-13', 4),
(48, 'Menyiapkan Barang untuk Kebutuhan Produksi (Rank B2)', 'Logistic', 9, '1610511208-logistic.png', '2021-01-13', 5),
(49, 'Pengemasan Barang Keluar (Rank B3)', 'Logistic', 9, '1610511279-logistic.png', '2021-01-13', 6),
(50, 'Administrasi Barang  yang Masuk dan Keluar (Rank A1)', 'Logistic', 9, '1610511325-logistic.png', '2021-01-13', 7),
(51, ' Menyiapkan Barang untuk Kebutuhan Produksi (Rank A2)', 'Logistic', 9, '1610511374-logistic.png', '2021-01-13', 8),
(52, 'Skema Pemeriksa Kualitas Mobil Secara Statik (Rank C)', 'Vehicle Inspection', 10, '1610511635-vehicle-inspection.png', '2021-01-13', 1),
(53, 'Skema Pemeriksa Kualitas Mobil Secara Statik (Rank B1)', 'Vehicle Inspection', 10, '1610511695-vehicle-inspection.png', '2021-01-13', 2),
(54, 'Skema Investigasi Masalah Kualitas Secara Statik Pada Mobil (Rank B3)', 'Vehicle Inspection', 10, '1610511723-vehicle-inspection.png', '2021-01-13', 3),
(55, 'Skema Pemeriksa Kualitas Mobil Secara Statik (Rank A1) ', 'Vehicle Inspection', 10, '1610511747-vehicle-inspection.png', '2021-01-13', 4),
(56, 'Skema Investigasi Masalah Kualitas Secara Statik Pada Mobil (Rank A3)', 'Vehicle Inspection', 10, '1610511768-vehicle-inspection.png', '2021-01-13', 5),
(57, 'Skema Investigasi Masalah Kualitas Secara Dinamik Pada Mobil (Rank A4)', 'Vehicle Inspection', 10, '1610511796-vehicle-inspection.png', '2021-01-13', 6),
(58, 'Skema Pemeriksa Kualitas Mobil Secara Dinamik (Rank B2) ', 'Vehicle Inspection', 10, '1610511835-vehicle-inspection.png', '2021-01-13', 7),
(59, 'Skema Pemeriksa Kualitas Mobil Secara Dinamik (Rank A2)', 'Vehicle Inspection', 10, '1610511853-vehicle-inspection.png', '2021-01-13', 8),
(60, 'Skema  Manufacture Machine Maintenance Untuk Merawat Peralatan Mesin (Rank C1)', 'Machine Maintanance', 11, '1610511907-machine-maintanance.png', '2021-01-13', 1),
(61, 'Skema  Manufacture Machine Maintenance Untuk Merawat Peralatan Mesin (Rank C2)', 'Machine Maintanance', 11, '1610511968-machine-maintanance.png', '2021-01-13', 2),
(62, 'Skema  Manufacture Machine Maintenance Untuk Merawat Sistem Mesin (Rank C3) ', 'Machine Maintanance', 11, '1610512006-machine-maintanance.png', '2021-01-13', 3),
(63, 'Skema  Manufacture Machine Maintenance Untuk Merawat Sistem Mesin (Rank B1)', 'Machine Maintanance', 11, '1610512034-machine-maintanance.png', '2021-01-13', 4),
(64, 'Skema  Manufacture Machine Maintenance Untuk Memperbaiki Sistem Mesin (Rank B2)', 'Machine Maintanance', 11, '1610512055-machine-maintanance.png', '2021-01-13', 5),
(65, 'Skema  Manufacture Machine Maintenance Untuk Memperbaiki Sistem Mesin (Rank B3)', 'Machine Maintanance', 11, '1610512084-machine-maintanance.png', '2021-01-13', 6),
(66, 'Skema  Manufacture Machine Maintenance Untuk Memodifikasi Sistem Mesin (Rank A1)', 'Machine Maintanance', 11, '1610512117-machine-maintanance.png', '2021-01-13', 7),
(67, 'Skema  Manufacture Machine Maintenance Untuk Memodifikasi Sistem Mesin (Rank A2)', 'Machine Maintanance', 11, '1610512156-machine-maintanance.png', '2021-01-13', 8),
(68, 'Skema Okupasi - Operator Produksi Casting Die Cast Rank A2', 'Die Cating', 12, '1610512465-die-cating.png', '2021-01-13', 1),
(69, 'Skema Okupasi - Operator Produksi Casting Die Cast Rank C', 'Die Cating', 12, '1610512491-die-cating.png', '2021-01-13', 2),
(70, 'Skema Okupasi - Operator Produksi Casting Die Cast Rank B', 'Die Cating', 12, '1610512536-die-cating.png', '2021-01-13', 3),
(71, 'Skema Okupasi - Operator Produksi Casting Die Cast Rank A1', 'Die Cating', 12, '1610512569-die-cating.png', '2021-01-13', 4),
(72, 'Skema Okupasi - Operator Produksi Casting Low Pressure Rank A', 'Casting Low Pressure', 13, '1610512629-casting-low-pressure.png', '2021-01-13', 1),
(73, 'Skema Okupasi - Operator Produksi Casting Low Pressure Rank B', 'Casting Low Pressure', 13, '1610512643-casting-low-pressure.png', '2021-01-13', 2),
(74, 'Skema Okupasi - Operator Produksi Casting Low Pressure Rank C2', 'Casting Low Pressure', 13, '1610512659-casting-low-pressure.png', '2021-01-13', 3),
(75, 'Skema Okupasi - Operator Produksi Casting Low Pressure Rank C1', 'Casting Low Pressure', 13, '1610512676-casting-low-pressure.png', '2021-01-13', 4),
(76, 'Skema Okupasi - Operator Engine Machining Rank A', 'Engine Machining', 14, '1610512809-engine-machining.png', '2021-01-13', 1),
(77, 'Skema Okupasi - Operator Engine Machining Rank B', 'Engine Machining', 14, '1610512838-engine-machining.png', '2021-01-13', 2),
(78, 'Skema Okupasi - Operator Engine Machining Rank C2', 'Engine Machining', 14, '1610512873-engine-machining.png', '2021-01-13', 3),
(79, 'Skema Okupasi - Operator Engine Machining Rank C1', 'Engine Machining', 14, '1610512903-engine-machining.png', '2021-01-13', 4),
(80, 'Skema klaster - Merakit Komponen Engine Rank A', 'Engine Assembly', 15, '1610513005-engine-assembly.png', '2021-01-13', 1),
(81, 'Skema klaster - Merakit Komponen Engine Rank B', 'Engine Assembly', 15, '1610513023-engine-assembly.png', '2021-01-13', 2),
(82, 'Skema klaster - Merakit Komponen Engine Rank C', 'Engine Assembly', 15, '1610513042-engine-assembly.png', '2021-01-13', 3),
(83, 'Skema klaster - Menginspeksi Komponen Casting Rank A', 'Engine Inspection', 16, '1610513195-engine-inspection.png', '2021-01-13', 1),
(84, 'Skema klaster - Menginspeksi Komponen Casting Rank B', 'Engine Inspection', 16, '1610513220-engine-inspection.png', '2021-01-13', 2),
(85, 'Skema klaster - Menginspeksi Komponen Casting Rank C', 'Engine Inspection', 16, '1610513244-engine-inspection.png', '2021-01-13', 3),
(86, 'Skema klaster - Menginspeksi Komponen Machining Rank A', 'Engine Inspection', 16, '1610513273-engine-inspection.png', '2021-01-13', 4),
(87, 'Skema klaster - Menginspeksi Komponen Machining Rank B', 'Engine Inspection', 16, '1610513306-engine-inspection.png', '2021-01-13', 5),
(88, 'Skema klaster - nspeksi Komponen Machining Rank C', 'Engine Inspection', 16, '1610513330-engine-inspection.png', '2021-01-13', 6),
(89, 'Skema klaster - Menginspeksi Perakitan Engine Rank A', 'Engine Inspection', 16, '1610513364-engine-inspection.png', '2021-01-13', 7),
(90, 'Skema klaster - Menginspeksi Perakitan Engine Rank B', 'Engine Inspection', 16, '1610513391-engine-inspection.png', '2021-01-13', 8),
(91, 'Skema klaster - Menginspeksi Perakitan Engine Rank C', 'Engine Inspection', 16, '1610513423-engine-inspection.png', '2021-01-13', 9),
(92, 'Skema klaster - Merawat dan Mengkaliberasi alat Ukur Rank A', 'Engine Inspection', 16, '1610513451-engine-inspection.png', '2021-01-13', 10),
(93, 'Skema klaster - Merawat dan Mengkaliberasi alat Ukur Rank B', 'Engine Inspection', 16, '1610513480-engine-inspection.png', '2021-01-13', 11),
(94, 'Skema klaster - Merawat dan Mengkaliberasi alat Ukur Rank C', 'Engine Inspection', 16, '1610513524-engine-inspection.png', '2021-01-13', 12),
(95, 'Skema Okupasi - Menyiapkan Kondisi Die Standar Rank A', 'Casting Die Maintanance', 17, '1610513631-casting-die-maintanance.png', '2021-01-13', 1),
(96, 'Skema Okupasi - Menyiapkan Kondisi Die Standar Rank B2', 'Casting Die Maintanance', 17, '1610513653-casting-die-maintanance.png', '2021-01-13', 2),
(97, 'Skema Okupasi - Menyiapkan Kondisi Die Standar Rank B1', 'Casting Die Maintanance', 17, '1610513672-casting-die-maintanance.png', '2021-01-13', 3),
(98, 'Skema Okupasi - Menyiapkan Kondisi Die Standar Rank C2', 'Casting Die Maintanance', 17, '1610513693-casting-die-maintanance.png', '2021-01-13', 4),
(99, 'Skema Okupasi - Menyiapkan Kondisi Die Standar Rank C1', 'Casting Die Maintanance', 17, '1610513712-casting-die-maintanance.png', '2021-01-13', 5),
(100, 'Skema klaster - Melakukan Penggerindaan Cutting Tool Dengan Mesin  CNC Seri CNJ-MAKINO (Rank A2)', 'Tool Regriding', 18, '1610513769-tool-regriding.png', '2021-01-13', 1),
(101, 'Skema klaster - Melakukan Penggerindaan Cutting Tool Dengan Mesin Double Head (Rank A1)', 'Tool Regriding', 18, '1610513786-tool-regriding.png', '2021-01-13', 2),
(102, 'Skema klaster - Melakukan Penyettingan Insert MIilling Cutter (Rank B)', 'Tool Regriding', 18, '1610513804-tool-regriding.png', '2021-01-13', 3),
(103, 'Skema klaster - Melakukan Pengechekan Kualitas Cutting Tool (Rank C1)', 'Tool Regriding', 18, '1610513826-tool-regriding.png', '2021-01-13', 4),
(104, 'Skema klaster - Melakukan Pengechekan Kualitas Milling Cutter  (Rank C2)', 'Tool Regriding', 18, '1610513860-tool-regriding.png', '2021-01-13', 5);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_judul` varchar(100) NOT NULL,
  `album_deskripsi` text NOT NULL,
  `album_gambar` varchar(100) NOT NULL,
  `album_kategori` varchar(100) NOT NULL,
  `album_urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_judul`, `album_deskripsi`, `album_gambar`, `album_kategori`, `album_urutan`) VALUES
(35, 'Album Assesor Akti', '<p>-</p>', '3662774.jpg', '', 0),
(36, 'Album Teaching Factory', '<p>Album Galeri Teaching Factory</p>', '57015.jpg', '', 0),
(37, 'Fasilitas Kampus', '<p>Gedung Kampus Akademi Komunitas Toyota Indonesia</p>', '57012.jpg', 'fasilitas', 0),
(40, 'Fasilitas Laboratorium', '<p>Fasilitas Laboratorium yang digunakan untuk pembelajaran praktikum mahasiswa Akademi Komunitas Toyota Indonesia</p>', '1703.P.01.V01.maltwhiskey_font.jpg', 'fasilitas', 0),
(46, 'Fasilitas Asrama', '<p>Fasilitas Asrama yang disediakan untuk mahasiswa Akademi Komunitas Toyota Indonesia</p>', '49252.jpg', 'fasilitas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `album_galeri`
--

CREATE TABLE `album_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(100) NOT NULL,
  `galeri_deskripsi` text NOT NULL,
  `galeri_gambar` varchar(100) NOT NULL,
  `galeri_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `album_galeri`
--

INSERT INTO `album_galeri` (`galeri_id`, `galeri_judul`, `galeri_deskripsi`, `galeri_gambar`, `galeri_waktu`, `album_id`) VALUES
(70, 'Foto penyerahan Sertifikat Lisensi LSP oleh BNSP & Pemerintah', '<p>\r\n	-</p>\r\n', '33103.jpg', '2020-12-18 06:51:32', 35),
(71, 'Foto Bersama Ibu Menteri Ida Fauziah - Kemnaker', '<p>\r\n	-</p>\r\n', '6867.jpg', '2020-12-18 06:51:53', 35),
(72, 'Penyerahan Sertifikat Lisensi LSP – Ketua BNSP Sumarna F. Abumanan', '<p>\r\n	-</p>\r\n', 'R.png', '2021-09-18 03:00:59', 35),
(73, 'Kunjungan Bpk. Anton J Supit – Kadin Indonesia', '<p>\r\n	-</p>\r\n', 'uTD9fxqX5v1465896047.jpg', '2021-09-18 03:51:26', 35),
(74, 'Kunjungan Kadin Indonesia, Institut Otomotif Indonesia - Kemenperind', '<p>\r\n	-</p>\r\n', '9f1687b36272682d88ef7d3481444c51_XL.jpg', '2021-09-18 03:49:22', 35),
(75, 'Kunjunfan Ibu Ida Fauziah – Menteri Ketenagakerjaan RI', '<p>\r\n	-</p>\r\n', 'IMG-20210319-WA0085.jpg', '2021-09-18 03:02:03', 35),
(78, 'Digital Printing', '<p>\r\n	Foto Digital Printing</p>\r\n', 'OIP-_6_.jpg', '2021-09-18 04:27:45', 36),
(79, 'Fabrikasi', '<p>\r\n	Foto Fabrikasi</p>\r\n', 'IMG_0070.jpg', '2021-09-18 04:35:19', 36),
(80, 'Karakuri', '<p>\r\n	Foto 1 Karakuri</p>\r\n', 'OIP-_7_.jpg', '2021-09-18 04:36:59', 36),
(81, 'Karakuri 2', '<p>\r\n	Foto 2 Karakuri</p>\r\n', 'DB2019AL00795_full.jpg', '2021-09-18 04:38:30', 36),
(82, 'Mesin Bubut', '<p>\r\n	Foto Mesin Bubut</p>\r\n', 'R-_7_.jpg', '2021-09-18 04:41:01', 36),
(83, 'Mesin CNC Router', '<p>\r\n	Foto Mesin CNC Router</p>\r\n', '1516779690539066.jpg', '2021-09-18 04:42:07', 36),
(84, 'Robot EV', '<p>\r\n	Foto Robot Ev</p>\r\n', 'maxresdefault.jpg', '2021-09-18 04:43:20', 36),
(85, 'Tempat Cuci Tangan Prokes', '<p>\r\n	Foto Tempat Cuci Tangan</p>\r\n', 'images-2020-10-10t105837.816_copy_800x500.jpg', '2021-09-18 04:46:07', 36),
(86, 'Fasilitas 1', '<p>Lab Komputer</p>', 'Lab-Komputer-PS-web.jpg', '2021-09-18 05:26:54', 37),
(87, 'Fasilitas 2', '<p>\r\n	Sarana Olahraga</p>\r\n', 'OIP-_8_.jpg', '2021-09-18 05:31:10', 37),
(88, 'Fasilitas 3', '<p>\r\n	Gedung SerbaGuna</p>\r\n', 'Warren-County-MS-open-air-760-760x450.jpg', '2021-09-18 05:33:44', 37),
(89, 'Foto Mesin Las', '', 'Mesin_Las_MULTIPRO_MMA_120G_KR.jpg', '2021-09-18 05:43:02', 40),
(90, 'Foto Mobil Praktek', '', 'OIP-_9_.jpg', '2021-09-18 05:45:42', 40),
(91, 'Engine Separate', '', 'toyota-tnga-engines-(3).jpg', '2021-09-18 05:47:18', 40),
(92, 'Mesin Hidrolik', '', 'OIP-_10_ (1).jpg', '2021-09-18 05:49:04', 40),
(93, 'Kerja Bangku Monozukuri', '', 'R-_8_.jpg', '2021-09-18 05:50:29', 40),
(94, 'Mesin Praktek Elemen Mesin', '', '1.-Cara-Menghemat-Biaya-Service-Mobil3-1536x1024.jpg', '2021-09-18 05:51:27', 40),
(98, 'Penyerahan sertifikat kompetensi kepada peserta Magang PT.TMMIN di kadisnaker Kab. Karawang', '', 'sport5.jpg', '0000-00-00 00:00:00', 35),
(109, 'KEGIATAN SERTIFIKASI WELDING SHOP', '', '524daefc971e9.image.jpg', '0000-00-00 00:00:00', 35);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(100) NOT NULL,
  `headline` enum('N','Y') NOT NULL DEFAULT 'N',
  `berita_deskripsi` text NOT NULL,
  `berita_waktu` datetime NOT NULL,
  `berita_gambar` varchar(100) NOT NULL,
  `berita_hits` int(11) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `admin_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `headline`, `berita_deskripsi`, `berita_waktu`, `berita_gambar`, `berita_hits`, `tags`, `kategori_id`, `admin_nama`) VALUES
(4, 'Menyambut Hari Sumpah Pemuda Ke-91', 'Y', '<p>\r\n	Karawang (26/10), Kementerian Olahraga dan Kementerian Sastra dan Bahasa yang berada di bawah naungan Badan Eksekutif  Mahasiswa Akademi Komunitas Toyota Indonesia mengadakan beberapa pertandingan dan perlombaan di Asrama Akademi Komunitas Toyota Indonesia.</p>\r\n<p>\r\n	Upacara pembukaan dilaksanakan pada hari Sabtu, 26 Oktober 2019. Kegiatan ini bertujuan untuk menyambut Hari Sumpah Pemuda ke-91, mempererat tali silahturahmi antar mahasiswa/i serta menjaga persatuan dan kesatuan.</p>\r\n<p>\r\n	Pertandingan dan perlombaan yang diselenggarakan diantaranya ialah voli, tenis meja, desain poster, dan musikalisasi puisi. Acara berlangsung dengan semarak dan penuh semangat. Para peserta lomba  menunjukkan bakat yang mereka miliki  dengan penuh totalitas.</p>\r\n<p>\r\n	Penyerahan sertifikat dan pembagian hadiah kepada para pemenang juara 1, 2, dan 3 dilaksanakan pada hari Minggu 27 Oktober 2019 dalam upacara penutupan yang didampingi oleh Bapak Sukirman dan  Bapak Sudiyono selaku caretaker.</p>\r\n<p>\r\n	 </p>\r\n', '2015-11-22 23:47:59', '4259518.jpg', 61, '3', 2, 'rendi'),
(5, 'Dirgantara Marching Band Competiton 2019', 'N', '<p>\r\n	Sabtu, 14 Desember 2019. Proses tidak akan mengkhinati hasil, itulah peribahasa  yang pastinya sering kita dengar. Setelah melewati proses latihan yang cukup melelahkan , kemarin Team Marching Band AKTI  yaitu Praja Buana AKTI mengikuti perlombaan marching band yan g dilaksanakan di Lanud Atang Sudjaja Bogor. Perlombaan ni merupakan acara tahunan , dimana AKTI untuk pertama kalinya mengikuti perlombaan ini. Dengan berbekal  semangat dan percaya diri, mereka mampu menampilkan penampilan terbaik mereka di Dirgantara Marching Band Competition ini.</p>\r\n<p>\r\n	Meskipun dalam perlombaan tersebut terdapat para senior grup dari daerah lain yang memiliki skill luar biasa, mereka tak goyah semangat sedikitpun untuk menunjukan originalistas dan keunikan mereka.  Berbagaii grup dari  berbagai macam daerah hadir antusias mengikuti lomba ini.</p>\r\n<p>\r\n	Atas rahmat Allah, Alhamdulillah mereka berhasil membawa 4 penghargaan sekaligus  diantaranya  Juara 4 Band Terbaik Divisi Military , Juara  1 Kategori Musik Analysis  Umum , Juara 2 Kategori Visual Analysis Umum, dan Juara 1 Drum Battle Divisi Military. Semua penghargaan ini menjadi pengalaman baru mereka dan untuk perbaikan di perlombaan selanjutnya.</p>\r\n<p>\r\n	 </p>\r\n', '2015-11-22 23:53:53', '2010.i126.014.bar live music.jpg', 50, '', 2, 'rendi'),
(6, 'Opening Diesnatalis Ke-4 Th AKTI', 'N', '<p>\r\n	Rabu, 4 Desember 2019. Tepat pada tanggal tersebut  AKTI merayakan  hari ulang tahunnya yang ke-4 tahun. Terbukti di umurnya yag sudah menginjak 4 tahun, AKTI telah berhasil  mencetak lulusan-lulusan terbaiknya yang sekarang sudah berkelana berkarya di PT. TMMIN dan perusahaan-perusahaan supplier lainnya.</p>\r\n<p>\r\n	Di tahun yang ke-4 ini, AKTI memberi warna berbeda di hari ulang tahunnya .Dengan mengusung tema DIES NATALIS KE-4 TH AKTI , berbagai perlombaan akan diadakan untuk memeriahkan acara tersebut. Dimulai sejak tanggal 4 Desember 2019 hingga 21 Desember 2019, acara tersebut akan diikuti oleh seluruh keluarga besar AKTI dan Alumni. </p>\r\n<p>\r\n	Opening Dies Natalis ini diawali dengan pemotongan tumpeng oleh Bapak Mintardjo Damali selaku Ketua Yayasan didampingi oleh Bapak Sudibyo selaku Wakil Direktur 1 AKTI.Pemotongan tumpeng ini merupakan bentuk rasa syukur atas rahmat Tuhan dimana AKTI masih dapat berkarya hingga saat ini.</p>\r\n<p>\r\n	 </p>\r\n', '2015-11-22 23:57:49', 'grunge_party_people_0907.jpg', 339, '3', 2, 'rendi'),
(7, 'Sumber Daya Manusia Di AKTI', 'N', '<p>Saat ini Politeknik Pos Indonesia memiliki 72 dosen tetap yang tersebar di lima jurusan, dengan komposisi jabatan dan pendidikan sebagai berikut;Lektor 7 orang, asisten ahli 30 orang, . berdasarkan jenjang pendidikan, dosen yang berpendidikan Doktor (S-3) luar negeri 3 orang dan dalam negeri 3 orang, Magister (S-2) dalam negeri 20 orang dan luar negeri 2 orang. Politeknik Pos Indonesia juga didukung oleh sekitar 50 orang dosen luar biasa dari praktisi industri dan akademisi. Saat ini Politeknik Pos Indonesia juga dibantu oleh seorang konsultan tenaga ahli dalam bidang logistik dan manajemen rantai pasok dari CIM German untuk pengembangan kurikulum dan kerjasama internasional.</p><p>Selain itu juga terdapat 33 orang pegawai yang terdiri dari tenaga adminsitratif, laboran, pustakawan, dan cleaning services, dan petugas keamanan.</p>', '2015-11-01 00:02:29', '18959.jpg', 53, '', 2, 'rendi'),
(9, 'Upacara Peringatan Hari Sumpah Pemuda Ke-91', 'Y', '<p>\r\n	Senin, 28 Oktober 2019 mahasiswa/i Akademi Komunitas Toyota Indonesia Angkatan 5 melaksanakan upacara dalam rangka memperingati Hari Sumpah Pemuda yang ke -91. Upacara tersebut dilaksanakan untuk meningkatkan rasa cinta tanah air dan meningkatkan rasa nasionalisme. </p>\r\n<p>\r\n	Tanggal 28 Oktober  adalah hari yang bersejarah bagi Bangsa Indonesia, karena pada waktu itu  para pemuda/i Indonesia mengikrarkan Sumpah Pemuda. Tujuan dari adanya Sumpah Pemuda ini adalah untuk menghilangkan sifat-sifat kedaerahan yang masih melekat pada diri pemuda/i Indonesia waktu itu.</p>\r\n<p>\r\n	Bapak Sudibyo selaku Wakil Direktur 1 AKTI, kali ini menjadi pembina upacara. Beliau memberikan beberapa motivasi kepada para mahasiswa/i AKTI dalam sambutannya. “Saya berharap dengan memperingati Hari Sumpah Pemuda ,kalian sebagai generasi muda termotivasi untuk memajukan bangsa ini.” ucap beliau.  Upacara berjalan dengan lancar dan penuh khidmat. </p>\r\n', '2015-11-01 13:17:55', 'Merdeka_3_01.jpg', 20, '', 2, 'rendi'),
(19, 'City Tour  Akademi Komunitas Toyota Indoniesia 2019', 'Y', '<p>Kegiatan ini adalah bentuk acara tahunan yang disebut&nbsp; dengan Program City Tour, dimana kegiatan ini bertujuan untuk&nbsp; meningkatkan rasa kekeluargaan dan kekompakan dari para mahasiswa/i. Disamping itu kegiatan ini adalah bentuk kegiatan hiburan untuk melepas penat.&nbsp;</p><p>Sabtu, 30 November 2019. Kentong berkumpul asrama terdengar pukul&nbsp; 05.00 WIB, semua bersiap menuju ke lapangan B asrama AKTI&nbsp; untuk apel pengechekan keberangkatan. Seluruh mahasiswa/ i angkatan A#4 dan A#5 serta didampingi oleh para pembina&nbsp; akan&nbsp; beranjak dari asrama AKTI ke tempat tujuan yaitu Orchid Cikole Bandung.</p><p>Sekitar pukul 08.50 WIB, rombongan telah tiba di lokasi kegiatan. Diawali dengan apel pengecheckan, semuanya sangat antusias untuk segera masuk kedalam lokasi wisata. Udara sejuk nan pemandangan alam hijau dibawah riuhan pohon pinus yang memanjakan mata tersaji menyambut kedatangan rombongan. Kegiatan outbound dimulai pukul 09.30 WIB . Dengan beberapa games yang dimainkan. Mereka sangat menikmati berlangsungnya acara tersebut.</p>', '2016-01-08 00:33:51', '320693-P9HKXB-533.jpg', 438, '3', 2, 'rendi'),
(21, 'Perpustakaan AKTI on Rakornas RI ', 'Y', '<p>Selasa, 25 Februari 2020.<br>Perpustakaan AKTI yang berdiri pada tahun 2015 dan secara resmi dikelola sejak tahun 2017 mendapat kesempatan untuk mengahadiri undangan Rapat Koordinasi Nasional (Rakornas ) Bidang Perpustakaan Tahun 2020 di Ballroom Hotel Bidakara Jakarta, Jakarta. Perpustakaan AKTI terpilih menjadi salah satu perpustakaan perguruan tinggi dari 32 propinsi di Indonesia yang mendapat kesempatan untuk hadir dalam acara tersebut. Ibu Balqis Annisa Ramdhani, S.I.Pus selaku Pustakawan AKTI mewakili perpustakaan AKTI dalam acara tersebut.<br><br>Rakornas dibuka secara resmi oleh Menteri Dalam Negeri Tito Karnavian dengan pemukulan gong oleh beliau didampingi Kepala Perpustakaan Nasional Muhammad Syarif Bando, Deputi Bidang Pengembangan Sumber Daya Perpustakaan Woro Titi Haryanti, Deputi Pengembangan Bahan Pustaka dan Jasa Informasi Ofy Sofiana, dan Sekretaris Utama Perpusnas Sri Sumekar, Perpusnas, dan seluruh pemangku kepentingan di bidang Perpustakaan di Indonesia satukan tekad untuk tingkatkan inovasi dan kreativitas bagi para pustakawan demi penguatan indeks literasi untuk mewujudkan sumber daya manusia Unggul menuju Indonesia Maju.<br>Total peserta yang menghadiri Rakornas ini adalah sebanyak 1.500 orang, yang terdiri dari para kepala dinas perpustakaan Daerah baik provinsi maupun Kabupaten/Kota se-Indonesia, Bappeda se-Indonesia, Asosiasi Penerbit, Forum Perguruan Tinggi Negeri, Forum Pepustakaan khusus, Forum Perpustakaan Sekolah, Mitra Perpusnas diseluruh wilayah Indonesia, seluruh pustakawan perpusnas, pejabat perpusnas dan seluruh kepala UPT Perspusnas. Rakornas ini diagendakan selama tiga hari, yaitu pada tanggal 25 s.d. 27 Februari 2020.<br><br>Perpustakaan AKTI juga mendapat kesempatan untuk melakukan MOU penandatangan kerjasama dengan Perpustakaan Nasional Indonesia. Kesempatan ini sangat berharga bagi Perpustakaan AKTI karena di usianya yang masih dini, puji syukur dapat ikut serta dalam acara ini.</p>', '2021-01-21 11:24:35', '1758.jpg', 6, '3', 2, 'rendi'),
(22, 'Pengumuman Lomba Poster Lustrum 1 AKTI', 'N', '<p>\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Saatnya pengumuman juara Lomba nih, dalam rangka Memeriahkan Dies Natalis ke-5 dan Lustrum ke 1 AKTI dengan tema \"Tangguh di Masa Pandemi Covid-19\" yang diadakan oleh BEM AKTI A5</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Berikut nama-nama mahasiswa yang menjadi pemenang dalam kegiatan kali ini</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">1. Andhika Ali Syafiq A4</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">2. Dimas Maulana A5</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">3. Eka Saepudin A5</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Selamat kepada para pemanang. Terus semangat menciptakan karya-karya baru di ajang perlombaan berikutnya. Terimakasih pada para mahasiswa yang ikut serta dalam kegiatan ini, bagi belum beruntung tetap semangat dan jangan putus asa.</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Sampai Jumpa di Even Selanjutnya.</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Stay safe and healthy ya guys.</span></p>\r\n', '2021-01-21 12:41:35', '5191411.jpg', 10, '3', 1, 'rendi'),
(23, 'Pengumuman Lomba AKTI Home 5R Competition', 'N', '<p>Perlombaan ini dalam rangka memeriahkan Dies Natalies ke-5 dan Lustrum AKTI ke-1 dengan Tema Implementasi 5R, Mahasiswa membuat sebuah video tentang Kebersihan dirumah masing-masing terutama bagaimana cara kita mengamalkan setiap R(Ringkas,Rapi,Resik,Rawat dan Rajin) dan kepekaan terhadap lingkungan sekitar.<br>Siapa saja yang menang kali ini, Berikut nama-nama mahasiswa yang menjadi pemenang dalam kegiatan kali ini.<br>1. M Hadziq A5 (TOPKR-4)<br>2. Ahmad Nailul Huda A5 (TOPKR-4)<br>3. Rosa Tegar V A5 (TOPKR-4)<br>Selamat kepada para pemenang. Semangat terus dalam menjaga kebersihan dan peka terhadap lingkungan. Karena lingkungan kami adalah tempat tinggal kami.<br>Dan terimakasih kepada para mahasiswa yang telah ikut serta dalam kegiatan ini, Setidaknya lingkungan kita menjadi bersih.<br><br>Dengan kegiatan ini semoga mendorong teman-teman untuk menjaga serta meningkatkan semangat 5R.</p>', '2021-01-21 12:47:18', 'sport5.jpg', 18, '3', 1, 'rendi'),
(24, 'Kegiatan Seminar AKTI 2019 seluruh mahasiwa', 'Y', '<p>10/27/2020 -&nbsp;Seminar ini merupakan kegiatan rutinan yang diadakan oleh AKTI. Namun dalam pelaksanaan kali ini sedikit berbeda dengan biasanya. Dikarenakan massa Pandemi covid-19 maka seminar dilaksanakan dengan daring via ZOOM. Tema yang diambil dalam webinar kali ini adalah KIAT MEMBANGUN DAN MEMPERTAHANKAN PRODUKTIVITAS KERJA PADA MASSA PANDEMI COVID-19.<br><br>Kegiatan seminar dimulai pukul 09.00 WIB dengan dibuka oleh Ibu Melinda selaku MC dalam acara ini. Dilanjut dengan menyanyikan Indonesia Raya dan Mars AKTI. Kemudian sambutan dari ketua pelaksana yaitu bpk. Suhermanto dan sambutan dari direktur AKTI yaitu bpk. Amirul Chusni.<br><br>Kegiatan berlanjut pada pembahasan utama dengan pemateri pertama yaitu Bpk. Djatmiko, beliua menjelaskan tentang \"Hitozukuri untuk persiapan pada dunia kerja\". Hitozukuri sendiri menurut beliau adalah proses pembentukan orang agar siap menghadapi pekerjaannya. Setelah pembahasan dilanjut dengan sesi tanya jawab dan foto bersama.<br><br>Berlanjut pemateri kedua yaitu bpk. Hessa yang menjelaskan tentang \"Meningkatkan kualitas dengan pola pikir kaizen TPS\".<br>TPS adalah teknik dan pola pikir mencakup semua aspek dalam produksi.<br><br>Kegiatan berjalan menarik serta interaktif dari peserta webinar.<br>Webinar selesai pukul 11.35 WIB yang ditutup oleh MC yaitu Ibu Melinda.<br><br>Kami harap materi yang telah disampaikan dapat menambah wawasan bagi&nbsp;<a href=\"https://www.instagram.com/explore/tags/sahabatakti/\">#sahabatAKTI</a></p>', '2021-01-21 13:28:35', '17626.jpg', 20, '3', 2, 'rendi'),
(25, 'Inagurasi Mahasiswa AKTI Angkatan 5', 'Y', '<p>\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">10/02/2019 – Hari yang dinanti oleh para calon mahasiswa/I Akademi Komunitas Toyota Indonesia (AKTI) angkatan </span><a class=\"xil3i\" color:=\"\" href=\"https://www.instagram.com/explore/tags/5/\" overflow-wrap:=\"\" segoe=\"\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" tabindex=\"0\" text-decoration-line:=\"\" vertical-align:=\"\">#5</a><span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">. Pada hari ini mereka telah resmi dinyatakan sebagai mahasiwa/I AKTI tahun pelajaran 2019/2020. Bapak Mintarjo Damali selaku Ketua Yayasan Toyota Indonesia, para perwakilan pimpinan PT.TMIIN, Bapak Amirul Chusni selaku Direktur AKTI beserta para jajaran management dan staff, mahasiwa/I AKTI angkatan </span><a class=\"xil3i\" color:=\"\" href=\"https://www.instagram.com/explore/tags/4/\" overflow-wrap:=\"\" segoe=\"\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" tabindex=\"0\" text-decoration-line:=\"\" vertical-align:=\"\">#4</a><span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">, dan 64 mahasiwa/I angkatan </span><a class=\"xil3i\" color:=\"\" href=\"https://www.instagram.com/explore/tags/5/\" overflow-wrap:=\"\" segoe=\"\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" tabindex=\"0\" text-decoration-line:=\"\" vertical-align:=\"\">#5</a><span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \"> hadir dalam upacara inagurasi ini. Dipimpin oleh Tengku Milzam Faris dari angkatan </span><a class=\"xil3i\" color:=\"\" href=\"https://www.instagram.com/explore/tags/4/\" overflow-wrap:=\"\" segoe=\"\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \" tabindex=\"0\" text-decoration-line:=\"\" vertical-align:=\"\">#4</a><span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">,.</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Upacara inagurasi diawali dengan menyanyikan lagu kebangsaan Indonesia Raya dan mars TIA, kemudian dilanjutkan dengan penyematan almamater yang diwakili oleh Firman Aprilianto sebagai perwakilan dari program studi Teknik Pemeliharaan Mesin Otomasi (TPMO) dan Dayudhya Luthfiarasty sebagai perwakilan dari program studi Tata Operasi Produksi Kendaraan Roda-4yang secara simbolis disematkan oleh Bapak Amirul Chusni kepada seluruh mahasiwa/I baru yang diinagurasi.</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Acara dilanjutkan dengan sarasehan bersama yang membahas mengenai AKTI dan hal-hal yang bersifat motivasi untuk para mahasiswa/I baru. Terdapat pula sesi tanya jawab yang diberikan kepada para mahasiswa/I baru. Setelah sesi tanya jawab selesai dilanjutkan dengan sesi foto bersama sebagai penutup dari acara inagurasi ini.</span><br font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" />\r\n	<span font-size:=\"\" segoe=\"\" style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \">Semoga inagurasi ini menjadi salah satu langkah awal yang harus menjadi kesanggupan bagi mahasiwa/I baru untuk menunjukan prestasi mereka dan mengharumkan nama Akademi Komunitas Toyota Indonesia.</span></p>\r\n', '2021-01-21 13:40:20', '5836.jpg', 24, '3', 2, 'rendi'),
(26, 'Lomba Teknologi Tepat Guna AKTI', 'Y', '<p>2/24/2020 - AKTI mengadakan acara exhibiton &amp; ceremony lomba teknologi tepat guna di Kampus Akademi Komunitas Toyota Indonesia. Lomba Teknologi Tepat Guna (LTTG) ini bertujuan untuk meningkatkan dan mewujudkan kreativitas generasi muda, pelajar SMK dan industri kecil untuk menciptakan TTG(Teknologi Tepat Guna) untuk meningkatkan perekonomian dan efisiensi masyarakat.<br>Lomba TTG ini diikuti oleh 40 sekolah SMK binaan toyota, yang di seleksi sehingga menjadi 7 SMK. Adapun 7 SMK tersebut ialah :<br>1. SMK PGRI Telagasari<br>2. SMK Mitra Industri MM 2100<br>3. SMKN 1 Rengasdengklok<br>4. SMK Texar Klari<br>5. SMKN 1 Cikampek<br>6. SMKN 1 Karawang<br>7. SMK Tri Asyifa Cikampek<br>Acara dimulai pukul 8.30 WIB yang diawali sambutan dari ketua pelaksana LTTG Bpk Akmal Amir, serta sambutan dari direktur AKTI Bpk Amirul Chusni namun dikarenakan sedang berhalangan maka diwakilkan oleh Wakil Direktur 1 Bpk Sudibyo Agus Sutrisno. Acara berlanjut ke pemutaran video LTTG serta pengenalan juri.<br>Kemudian dilanjutkan presentasi dan sesi tanya jawab para peserta LTTG terhadap alat yang mereka buat yang dinilai oleh 3 juri dari AKTI yaitu Bpk. Sudibyo, Bpk. Yani, Bpk. Rusydi.<br>Acara tidak hanya monoton dengan presentasi saja, namun diselingi dengan penampilan Paduan suara serta musik akustik persembahan mahasiswa AKTI.<br>Setelah melihat presentasi dan genba ke stand peserta. Didapatlah 3 SMK dengan nilai tertinggi, yaitu :<br>Juara 1 SMKN 1 Karawang dengan alat Rancang bangun alat perawatan tananman hidroponik otomatis (Autoponik)<br>Juara 2 SMK Texar Klari dengan alat Mesin membuat dan mencacah pakan ternak fermentasi<br>Juara 3 SMKN 1 Rengasdengklok dengan alat converter peningkat daya 48 watt DC ke 2200 watt AC. Acara berakhir pukul 14.00 WIB<br>Semoga alat alat yang telah dibuat dapat bermanfaat dan dipergunakan dengan semestinya.</p>', '2021-01-21 22:32:07', '2650401.jpg', 17, '3', 2, 'rendi');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(20) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(2604, 1608615966, '::1', '0391'),
(2605, 1608616342, '::1', '6157');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `download_id` int(11) NOT NULL,
  `download_judul` varchar(50) NOT NULL,
  `download_deskripsi` text NOT NULL,
  `download_file` varchar(250) NOT NULL,
  `download_hits` int(11) NOT NULL,
  `download_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`download_id`, `download_judul`, `download_deskripsi`, `download_file`, `download_hits`, `download_waktu`) VALUES
(24, 'Test File', 'Test File', 'Account_Payable1 (1).pdf', 0, '2021-01-06 12:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `video_id` int(11) NOT NULL,
  `video_judul` varchar(100) NOT NULL,
  `video_deskripsi` varchar(250) NOT NULL,
  `video_type` enum('Link','Upload') DEFAULT NULL,
  `video_link` varchar(200) NOT NULL,
  `video_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `galeri_video`
--

INSERT INTO `galeri_video` (`video_id`, `video_judul`, `video_deskripsi`, `video_type`, `video_link`, `video_waktu`) VALUES
(5, 'Akademi Komunitas Toyota Indonesia Videos', '<p>\r\n	Akademi Komunitas Toyota Indonesia</p>\r\n', NULL, 'https://www.youtube.com/embed/asTFtXaX1BQ', '2020-12-21 16:02:21'),
(6, 'Toyota Vios', 'Mobil ini sangat bagus', NULL, 'https://www.youtube.com/embed/u6WRy6d_WSQ', '0000-00-00 00:00:00'),
(7, 'Rush', 'Mobil kuat nih bos', NULL, 'https://www.youtube.com/embed/74B90k9u4wQ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `identitas_id` int(11) NOT NULL,
  `identitas_website` varchar(250) NOT NULL,
  `identitas_deskripsi` text NOT NULL,
  `identitas_keyword` text NOT NULL,
  `identitas_alamat` varchar(250) NOT NULL,
  `identitas_notelp` char(20) NOT NULL,
  `identitas_fb` varchar(100) NOT NULL,
  `identitas_email` varchar(100) NOT NULL,
  `identitas_tw` varchar(100) NOT NULL,
  `identitas_ig` varchar(100) NOT NULL,
  `identitas_gp` varchar(100) NOT NULL,
  `identitas_yb` varchar(100) NOT NULL,
  `identitas_maps` varchar(50) NOT NULL,
  `identitas_favicon` varchar(250) NOT NULL,
  `identitas_author` varchar(100) NOT NULL,
  `identitas_warning` varchar(100) NOT NULL,
  `identitas_aktif` datetime NOT NULL,
  `identitas_sambutan` text DEFAULT NULL,
  `identitas_sambutan_jabatan` varchar(255) DEFAULT NULL,
  `identitas_sambutan_nama` varchar(255) DEFAULT NULL,
  `identitas_sambutan_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`identitas_id`, `identitas_website`, `identitas_deskripsi`, `identitas_keyword`, `identitas_alamat`, `identitas_notelp`, `identitas_fb`, `identitas_email`, `identitas_tw`, `identitas_ig`, `identitas_gp`, `identitas_yb`, `identitas_maps`, `identitas_favicon`, `identitas_author`, `identitas_warning`, `identitas_aktif`, `identitas_sambutan`, `identitas_sambutan_jabatan`, `identitas_sambutan_nama`, `identitas_sambutan_foto`) VALUES
(1, 'Akademi Komunitas Toyota Indonesia', 'Akademi Komunitas Toyota Indonesia adalah Perguruan Tinggi Vokasi yang mendidik mahasiswa dengan tanggap, tangkas dan Tangguh dengan dibekali pendidikan karakter yang kuat terhadap body and mine yang mana akan menjadikan perguruan tinggi yang unggul dalam bidang manufaktur otomotif dan ikut membangun perkembangan Industri Otomotif di Indonesia', 'Akademi Komunitas Toyota Indonesia, AKTI', 'Jl. Trans Heksa No.01 Desa Margamulya, Kec. Telukjambe Barat, Kab. Karawang – Jawa Barat 41361', '(0276) 644 480', 'https://web.facebook.com/ToyotaIndonesiaAcademy', 'akti@toyota.co.id', 'https://twitter.com/', 'https://www.instagram.com/akti_id/', 'https://plus.google.com/', 'https://www.youtube.com/embed/fZFaHIVOZcU?feature=oembed', '-6.357216094951194, 107.26047754348032', '1608040203-favicon_akti.png', 'www.crop.co.id', 'DEMO WEBSITE IS UP', '2025-07-31 11:18:00', '<p style=\"text-align: justify;\">\r\n	Akademi Komunitas Toyota Indonesia didirikan untuk memenuhi kebutuhan tenaga kerja yang mempunyai kompetensi yang dibutuhkan dunia industri khususnya industri otomotif. Hal ini karena kami sadari bahwa saat ini <em>link and match</em> pendidikan vokasi atau kejuruan dengan dunia industri masih kurang memadai baik dari sisi keilmuan maupun sisi demand-nya. Oleh sebab itu AKTI dirancang dan dibuat sedemikian rupa agar bisa menghasilkan lulusan yang siap kerja di industri manufaktur khususnya industri manufaktur otomotif.</p>\r\n<p style=\"text-align: justify;\">\r\n	Sebagai bukti bahwa lulusan AKTI mempunyai Kompetensi yang dibutuhkan oleh industri maka semua lulusan akti juga harus mengikuti&nbsp; uji komeptensi berbasis SKKNI sehingga mendapat pengakuan dari BNSP melalui sertifikasi Nasional. Karena industri itu sendiri terus berkembang seiring dengan berkembangnya teknologi tentu saja kurikulum di AKTI di buat adaptif mengikuti perkembangan teknologi tersebut, seperti halnya saat ini dikenal dengan revolusi Industri 4.0. Akti juga mulai menyusun dan menerapkan kurikulum yang bisa memenuhi kebutuhan industri dalam menghadapi Revolusi industri tersebut</p>\r\n<p style=\"text-align: justify;\">\r\n	AKTI juga mengemban Visi yang lain yaitu :</p>\r\n<p style=\"text-align: justify;\">\r\n	Pemerataan akses pendidikan untuk membantu mengurangi kesenjangan kualitas pendidikan antar daeran di indonesia, untuk itu&nbsp; &nbsp; &nbsp; &nbsp; AKTI mencari calon mahasiswa di 12 Provinsi ada dari Pulau Jawa dan &nbsp;luar Pulau Jawa.</p>\r\n<p style=\"text-align: justify;\">\r\n	Menjadi model pendidikan vokasi untuk industri manufaktur otomotif, AKTI secara aktif akan mengihabahkan kurikulum dan alat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />\r\n	peraga pendidikan dari hasil pengembangan bekerjasama dengan industri untuk SMK.</p>\r\n<p style=\"text-align: justify;\">\r\n	Kami sangat berharap dengan berdirinya AKTI bisa bermanfaat dalam memajukan pendidkan nasional yang <em>link and match</em> dengan dunia usaha dan dunia industri. pada akhirnya AKTI ikut berperan dalam mendukung daya saing SDM indonesia dalam mengahadapi kompetensi global.</p>\r\n', 'Amirul Chusni', 'Director', '1610944338-1609928039-Director.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_judul` varchar(50) NOT NULL,
  `kategori_warna` varchar(20) NOT NULL,
  `admin_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_judul`, `kategori_warna`, `admin_nama`) VALUES
(1, 'Pengumuman', '006fff', 'Nava Gia Ginasta'),
(2, 'Berita', '09ff00', 'Nava Gia Ginasta'),
(3, 'Karir', 'ff00ff', 'Nava Gia Ginasta');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_pengirim` varchar(30) NOT NULL,
  `komentar_email` varchar(50) NOT NULL,
  `komentar_deskripsi` text NOT NULL,
  `komentar_waktu` datetime NOT NULL,
  `komentar_status` enum('Y','N') NOT NULL DEFAULT 'N',
  `berita_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_kode` int(11) NOT NULL,
  `menu_nama` varchar(50) NOT NULL,
  `menu_deskripsi` varchar(50) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `menu_site` enum('A','H') NOT NULL DEFAULT 'A',
  `menu_level` char(1) NOT NULL,
  `menu_subkode` int(11) NOT NULL,
  `menu_urutan` int(11) NOT NULL,
  `menu_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_kode`, `menu_nama`, `menu_deskripsi`, `menu_url`, `menu_site`, `menu_level`, `menu_subkode`, `menu_urutan`, `menu_status`) VALUES
(196, 'Data Dosen', 'fa-users', 'dashboard/dataDosen', 'A', '1', 4, 2, 'H'),
(197, 'Data Akademik', 'fa-clock', 'dashboard/dataAkademik', 'A', '1', 3, 1, 'A'),
(198, 'Data Prodi ', 'fa-student', 'dashboard/dataProdi', 'A', '1', 2, 3, 'H'),
(199, 'Home', 'fa-home', '#', 'H', '1', 2, 1, 'H'),
(200, 'Agenda', 'fa-clipboard-list', 'agenda', 'A', '3', 0, 5, ''),
(201, 'Berita    ', 'fa-newspaper', 'berita', 'A', '1', 0, 4, ''),
(202, 'Login', '', 'crop/login', 'H', '', 0, 10, ''),
(207, 'Agenda', 'fa-clipboard-list', 'Agenda', 'A', '2', 0, 2, ''),
(208, 'Sidebar', 'fa-arrow-left', 'dashboard/Agenda', 'H', '3', 0, 12, ''),
(211, 'Coba', 'fa-trash', 'www.facebook.coim', 'A', '1', 0, 6, ''),
(212, 'statis  ', 'fa-home', 'dashboard/dataStatis', 'A', '1', 0, 2, ''),
(213, 'statis', 'fa-home', 'dashboard/dataStatis', 'A', '1', 0, 3, ''),
(214, 'statis', 'fa-statis', 'statis', 'A', '1', 0, 2, ''),
(215, 'fakta ', 'fa fa-fakta', 'dashboard/datafakta', 'A', '1', 0, 2, ''),
(216, 'Testimonial  ', 'fa fa-testimonial', 'dashboard/datatestimonial', 'A', '1', 0, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_admin`
--

CREATE TABLE `menu_admin` (
  `menu_admin_kode` int(11) NOT NULL,
  `menu_kode` int(11) NOT NULL,
  `admin_level_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menu_admin`
--

INSERT INTO `menu_admin` (`menu_admin_kode`, `menu_kode`, `admin_level_kode`) VALUES
(288, 196, 1),
(289, 197, 1),
(290, 198, 1),
(291, 200, 3),
(292, 201, 3),
(293, 197, 2),
(294, 196, 2),
(295, 198, 2),
(305, 207, 1),
(312, 201, 1),
(317, 212, 1),
(318, 215, 1),
(319, 216, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_sidebar`
--

CREATE TABLE `menu_sidebar` (
  `menu_kode_sidebar` int(11) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_icon` varchar(200) NOT NULL,
  `menu_url_sidebar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_sidebar`
--

INSERT INTO `menu_sidebar` (`menu_kode_sidebar`, `menu_title`, `menu_icon`, `menu_url_sidebar`) VALUES
(1, 'Data Akti ', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `mitra_kerja`
--

CREATE TABLE `mitra_kerja` (
  `mitra_id` int(11) NOT NULL,
  `mitra_gambar` text NOT NULL,
  `mitra_link` varchar(250) NOT NULL,
  `mitra_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `mitra_kerja`
--

INSERT INTO `mitra_kerja` (`mitra_id`, `mitra_gambar`, `mitra_link`, `mitra_waktu`) VALUES
(12, 'client-1.png', '#', '2020-12-18 13:20:41'),
(13, 'client-2.png', '#', '2020-12-18 13:21:01'),
(14, 'client-3.png', '#', '2020-12-18 13:21:15'),
(15, 'client-4.png', '#', '2020-12-18 13:21:25'),
(17, 'client-5.png', '#', '2021-01-20 11:05:18'),
(18, 'client-6.png', '#', '2021-01-20 11:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `news_id` int(11) NOT NULL,
  `news_email` varchar(100) NOT NULL,
  `news_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`news_id`, `news_email`, `news_post`) VALUES
(1, 'navagiaginasta@gmail.com', '2016-01-12 19:29:18'),
(4, 'nava@gmail.com', '2016-01-30 18:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `portal_id` int(11) NOT NULL,
  `portal_judul` varchar(100) NOT NULL,
  `portal_status` int(11) NOT NULL,
  `portal_link` varchar(100) NOT NULL,
  `portal_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`portal_id`, `portal_judul`, `portal_status`, `portal_link`, `portal_waktu`) VALUES
(4, 'PROFILE AKTI', 0, 'https://www.youtube.com/embed/fZFaHIVOZcU?feature=oembed', '2020-12-29 16:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('091afb19cd233b9b7e6fa69455aab4c5', '182.2.138.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613013140, 'a:5:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_user\";s:5:\"admin\";s:10:\"admin_nama\";s:13:\"Administrator\";s:11:\"admin_level\";s:1:\"1\";s:9:\"logged_in\";b:1;}'),
('2ae6ee5ff52dbf2fed790118f8dc9d52', '203.190.54.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613013529, 'a:5:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_user\";s:5:\"admin\";s:10:\"admin_nama\";s:13:\"Administrator\";s:11:\"admin_level\";s:1:\"1\";s:9:\"logged_in\";b:1;}'),
('346551e9bc7bbb4bf93c18f3c1a5b891', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1621350583, ''),
('3cc5235ffbb8bc9e4919f8b0a65a0678', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613015041, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_user\";s:5:\"admin\";s:10:\"admin_nama\";s:13:\"Administrator\";s:11:\"admin_level\";s:1:\"1\";s:9:\"logged_in\";b:1;s:17:\"flash:old:success\";s:41:\"Identitas Website telah berhasil diedit!,\";}'),
('63c16ca92875346b417a4feb6a4bf280', '203.190.54.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613013529, 'a:5:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_user\";s:5:\"admin\";s:10:\"admin_nama\";s:13:\"Administrator\";s:11:\"admin_level\";s:1:\"1\";s:9:\"logged_in\";b:1;}'),
('69bd5daa728fee7462edc43eb8264dfa', '182.2.138.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613011822, ''),
('bc938b4e029f713f5a1ebecf140bef0c', '182.2.138.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613011822, ''),
('cff951787e708cf882bd02c37c4ec706', '182.2.138.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613011822, ''),
('d67d0d4cfac272a57f733cc527a1a60f', '182.2.138.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613011821, 'a:5:{s:9:\"user_data\";s:0:\"\";s:10:\"admin_user\";s:5:\"admin\";s:10:\"admin_nama\";s:13:\"Administrator\";s:11:\"admin_level\";s:1:\"1\";s:9:\"logged_in\";b:1;}'),
('e2bffb183bfc8c28a30993fc5b8d65ac', '182.2.138.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1613011822, '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_judul` varchar(100) NOT NULL,
  `slide_gambar` varchar(100) NOT NULL,
  `slide_deskripsi` text NOT NULL,
  `slide_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_judul`, `slide_gambar`, `slide_deskripsi`, `slide_waktu`) VALUES
(1, 'slide3', '1607957961-slide3.png', '<p>\r\n	slide3</p>\r\n', '2020-12-14 21:58:31'),
(2, 'slide2', '1607957977-slide2.png', '<p>\r\n	slide2</p>\r\n', '2020-12-14 21:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `statis`
--

CREATE TABLE `statis` (
  `statis_id` int(11) NOT NULL,
  `statis_judul` varchar(100) NOT NULL,
  `statis_deskripsi` text NOT NULL,
  `statis_gambar` varchar(100) NOT NULL,
  `statis_status` enum('N','Y') NOT NULL,
  `statis_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `statis`
--

INSERT INTO `statis` (`statis_id`, `statis_judul`, `statis_deskripsi`, `statis_gambar`, `statis_status`, `statis_waktu`) VALUES
(5, 'Sejarah', '<p>PT. Toyota Motor Manufacturing Indonesia (TMMIN) sebagai salah satu produsen mobil untuk merk Toyota di Indonesia ingin membantu pemerintah, khususnya dalam meningkatkan kompetensi SDM Indonesia dalam proses manufaktur kendaraan roda empat. PT. TMMIN berencana untuk mendidik lulusan-lulusan SMK ternama di seluruh Indonesia yang nantinya diharapkan dapat menjadi pemimpin-pemimpin industri otomotif di masa yang akan datang.</p><p>Melihat adanya tantangan dan persaingan globalisasi di masa mendatang, Toyota merasa perlu untuk berperan aktif dalam transfer teknologi serta pengetahuan sehingga mampu meningkatkan skill dan pengetahuan masyarakat. Hal inilah yang mendasari Toyota Indonesia untuk mengembangkan Akademi Komunitas Toyota Indonesia. Sebagai payung hukum Akademi Komunitas Toyota Indonesia tersebut, maka pada bulan Maret 2015 didirikanlah <strong>Yayasan Toyota Indonesia (YTI).</strong></p><p><strong>Yayasan Toyota Indonesia</strong> adalah sebuah institusi independen yang dibentuk oleh manajemen PT. Toyota Motor Manufacturing Indonesia (TMMIN) yang berperan dalam pengembangan sumber daya manusia di bidang otomotif. Tugas utamanya adalah sebagai pengelola dan penanggung jawab&nbsp; Akademi Komunitas Toyota Indonesia.</p><p>Terkait dengan asal dari calon peserta didik yang akan dididik, Akademi Komunitas Toyota Indonesia berencana akan mendididik calon-calon peserta dari seluruh wilayah di Indonesia, mulai dari Aceh sampai dengan Papua. Mereka akan kami seleksi secara terbuka dan adil (<i>fair</i>) terkait dengan karakter dan mental dasar serta kompetensi dan keahlian dasar yang sudah dimiliki.</p><p>Selanjutnya, berkaitan dengan rencana penyerapan lulusan peserta didik, mereka akan dapat diserap oleh industri otomotif di Indonesia dan kami juga akan terus menjalin kerja sama dengan institusi pemerintah untuk dapat menyalurkan mereka tidak hanya untuk industri otomotif di Indonesia, tetapi juga mencakup industri otomotif di region Asia Pasifik dan bahkan dunia.</p><p>Peran Akademi Komunitas Toyota Indonesia diharapkan juga berlaku sebagai <i>agent of change</i> yang memiliki peranan sebagai berikut :</p><ol><li>Sebagai pusat benchmark pendidikan teknologi manufaktur di Indonesia.</li><li>Sebagai pusat benchmark terhadap teknologi baru untuk industri manufaktur.</li><li>Sebagai pusat benchmark untuk pengembangan mental dan <i>attitude</i> tenaga kerja manufaktur.</li></ol><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 'sejarah.png', 'N', '2015-11-01 13:33:47'),
(7, 'Profil AKTI', '<p>\r\n	<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:40%;\r\n}	</style>\r\n</p>\r\n<div class=\"default\">\r\n	<table align=\"center\" border=\"0\" style=\"border:1px solid #000;\">\r\n		<tbody>\r\n			<tr>\r\n				<th bgcolor=\"#f60\" colspan=\"3\">\r\n					<center>\r\n						<span style=\"color:#ffffff;\">PENGURUS YAYASAN PENDIDIKAN BHAKTI POS INDONESIA</span></center>\r\n				</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						<img alt=\"kepalaypbpi\" src=\"/poltekpos/assets/upload/images/1.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						<img alt=\"sekretarisypbpi\" src=\"/poltekpos/assets/upload/images/2.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						<img alt=\"sekretarisypbpi\" src=\"/poltekpos/assets/upload/images/3.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						Ka. YPBPI</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Sekretaris YPBPI</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Bendahara YPBPI</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						Roosdar Dewi Y, Dra., Psi., MM.</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Djoko Setia Budiantoro, SE, Ak., SE, MM.</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Hassanuddin, SE.</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th colspan=\"3\">\r\n					&nbsp;</th>\r\n			</tr>\r\n			<tr>\r\n				<th bgcolor=\"#f60\" colspan=\"3\">\r\n					<center>\r\n						<span style=\"color:#ffffff;\">PIMPINAN POLITEKNIK POS INDONESIA</span></center>\r\n				</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					<div>\r\n						<img alt=\"pudir1\" src=\"/poltekpos/assets/upload/images/4.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					<div>\r\n						Direktur Politeknik Pos Indonesia</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					<div>\r\n						DR. Ir. Agus Purnomo, M.T.</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						<img alt=\"pudir1\" src=\"/poltekpos/assets/upload/images/5.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						<img alt=\"pudir2\" src=\"/poltekpos/assets/upload/images/6.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n				<td align=\"center\" colspan=\"2\">\r\n					<div>\r\n						<img alt=\"pudir2\" src=\"/poltekpos/assets/upload/images/7.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						Pembantu Direktur I</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						<div>\r\n							Pembantu Direktur II</div>\r\n					</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Pembantu Direktur III</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" height=\"41\">\r\n					<div>\r\n						Dodi Permadi, ST.,MT</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Suparno Saputra, SE., MM.</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Hilman Setiadi, SE., S.Pd., MT</div>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<br />\r\n	<p>\r\n		<strong>Jajaran Struktural Politeknik Pos Indonesia :</strong></p>\r\n	<ol>\r\n		<li>\r\n			<strong>Ka.SPPMA : Sri Suharti, SE, MM.Ak</strong></li>\r\n		<li>\r\n			<strong>Ka.LPPM : Parman Sukarno, ST., MDC</strong></li>\r\n		<li>\r\n			<strong>Kapordi D3 Teknik Informatika : Iwan Setiawan, ST., MT</strong></li>\r\n		<li>\r\n			<strong>Kapordi D3 Manajemen Informatika : Mubassiran, S.Si., MT.</strong></li>\r\n		<li>\r\n			<strong>Kapordi D3 Akuntansi : Setyo Budiutomo, SE, M.Si, Ak</strong></li>\r\n		<li>\r\n			<strong>Kapordi D3 Manajemen Pemasaran : Rahmat Tri Yulianto, SE., MM</strong></li>\r\n		<li>\r\n			<strong>Kapordi D3 Logistik Bisnis : Made Irma Dwiputranti, SE., MT<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG /> </o:OfficeDocumentSettings> </xml><![endif]--></strong></li>\r\n		<li>\r\n			<strong>Kapordi D4 Teknik Informatika : Woro Isti Rahayu, ST., MT</strong></li>\r\n		<li>\r\n			<strong>Kapordi D4 Logistik Bisnis : Rd. Adriyani Oktora, ST.,MT</strong></li>\r\n		<li>\r\n			<strong>Kapordi D4 Manajemen Bisnis : Senny Handayani S, SE.,MM</strong></li>\r\n		<li>\r\n			<strong>Kapordi D4 Akuntansi : Indra Firmansyah, SE.Ak.,MM.</strong></li>\r\n		<li>\r\n			<strong>Ka.BAAK : Irma Rachmawati, SE</strong></li>\r\n		<li>\r\n			<strong>Ka.BAU : Pupung Puji Pramesti Iskandar, S.Kom</strong></li>\r\n		<li>\r\n			<strong>Ka.Recruitment Mahasiswa : Y.Casmadi.,SE.,MM</strong></li>\r\n		<li>\r\n			<strong>Deputi Bidang Kemahasiswaan dan Alumni : M. Ruslan Maulani, S.Kom., MT</strong></li>\r\n		<li>\r\n			<strong>Deputi Bidang Pengembangan dan Kerjasama : Agung Adiono, SE.,M.Si,Ak</strong></li>\r\n		<li>\r\n			<strong>Ka.Penunjang Akademik : Widia Resdiana, S.S., M.Pd.</strong></li>\r\n		<li>\r\n			<strong>Ka.TIK : Roni Habibi, S.Kom,MT</strong></li>\r\n	</ol>\r\n	<p>\r\n		<strong><strong>Senat Politeknik Pos Indonesia :</strong></strong></p>\r\n	<ol>\r\n		<li>\r\n			<strong><strong>Ketua : Suparno Saputra, SE.,MM.</strong></strong></li>\r\n		<li>\r\n			<strong><strong>Sekretaris : Dewi Selviani Yulientinah, S.S., M.Pd</strong></strong></li>\r\n		<li>\r\n			<strong><strong>Anggota : </strong></strong>\r\n			<ul>\r\n				<li>\r\n					<strong><strong>DR. Ir. Agus Purnomo, MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Dodi Permadi, ST., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Hilman Setiadi, SE., S.Pd., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Parman Sukarno, ST., MDC</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Woro Isti Rahayu, ST., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Iwan Setiawan, ST., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Mubassiran, ST., MT.</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Sari Armiati, ST., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Agung Adiono, SE., M.Si,Ak</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Setyo Budiutomo, SE, M.Si, Ak</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Surya Ramadhan Noor, SE., MM</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Rahmat Tri Yulianto, SE., MM</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Senny Handayani S.,SE.,MM.</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Ahmad Yunani, SE., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Rudy Dauhan, SE., MM</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Rd. Adriyani Oktora.,ST.,MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Made Irma Dwiputranti, SE., MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Ir. Suntoro, MT</strong></strong></li>\r\n				<li>\r\n					<strong><strong>Eduard Sondakh, ST., MT</strong></strong></li>\r\n			</ul>\r\n		</li>\r\n	</ol>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'profil.png', 'N', '2015-11-22 11:46:11'),
(8, 'Visi Misi', '<p>\r\n	<strong style=\"text-align: justify; font-size: 12px;\">VISI AKTI&nbsp;</strong>&nbsp;adalah:</p>\r\n<div class=\"default\">\r\n	<p style=\"text-align: justify;\">\r\n		Menjadi Institusi Pendidikan yang unggul dalam bidang Proses Manufaktur Otomotif pada tahun 2025 untuk menghasilkan lulusan yang Tanggap (Perceptive), Tangkas (Agile) dan Tangguh (Perseverance), sebagai fondasi dalam rangka mendukung Perkembangan Industri Otomotif Indonesia.</p>\r\n	<p style=\"text-align: justify;\">\r\n		<strong>MISI AKTI</strong> adalah:</p>\r\n	<ol>\r\n		<li>\r\n			Menyelenggarakan Program Pendidikan Proses Manufaktur Otomotif untuk Industri Otomotif di Indonesia melalui sistem Pendidikan Tinggi yang terencana dan terintegrasi dalam kurikulum yang dinamis, fasilitas pendukung lengkap dan Dosen yang kompeten.</li>\r\n		<li>\r\n			Melaksanakan penelitian untuk meningkatkan standar teknologi dalam bidang Proses Manufaktur Otomotif Industri dan Otomotif di Indonesia.</li>\r\n		<li>\r\n			Menyelenggarakan Pengabdian Kepada Masyarakat, khususnya pada bidang Industri Otomotif dalam meningkatkan taraf hidup masyarakat.</li>\r\n		<li>\r\n			Menyelenggarakan kerjasama baik Dalam Negeri maupun Luar Negeri dalam mengimplementasikan Visi serta Tridarma Perguruan Tinggi.</li>\r\n	</ol>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'visi.png', 'N', '2015-11-22 12:03:51'),
(9, 'Strategi Jangka Panjang 2009-2020', '<p>\r\n	Politeknik Pos Indonesia memiliki Rencana Strategis Pengembangan yang terdiri dari tiga tahap pengembangan:</p>\r\n<ul>\r\n	<li>\r\n		Pengembangan tahap I (2009-2011) bertujuan untuk membangun tata kelola perguruan tinggi yang baik (good university governance), sistem informasi yang terintegrasi (e-Campus) serta sistem penjaminan mutu yang efektif.</li>\r\n	<li>\r\n		Pengembangan tahap II (2012-2015) bertujuan untuk meningkatkan relevansi dan mutu pendidikan.</li>\r\n	<li>\r\n		Pengembangan tahap III (2016-2020) bertujuan untuk membangun keunggulan di tingkat nasional dan internasional. Sehingga pada tahun 2020 diharapkan Poltekpos Indonesia sudah mampu bersaing di tingkat global sebagai World Class Vocational University khususnya dalam bidang logistik dan manajemen rantai pasok.</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n', 'strategi.png', 'N', '2015-11-22 12:08:13'),
(10, 'Program Strategis', '   <p>Berdasarkan hasil evaluasi diri, Manajemen Poltekpos menilai bawa sudah saatnya Poltekpos Indonesia melakukan akselerasi dengan memasuki program pengembangan tahap II. Program Pengambangan tahap II ini bertujuan untuk membangun keunggulan Poltekpos di tingkat nasional khususnya sebagai Pendidikan vokasional di bidang logistik dan manajemen rantai pasok dengan motto “toward national center of excellence in integrated logistik and supply chain vocational education”. Pada tahap ini program pengembangan berfokus kepada empat isu strategis yaitu relevansi, kualitas, dan akses dengan empat program strategis, yaitu:\r\n<ol><li>Peningkatan relevansi Jurusan terhadap lingkungan  nasional dan internasional yang ditandai dengan peningkatan mutu lulusan dan keterserapan lulusan di dunia kerja yang sesuai.</li><li>Pengembangan Suasana akademik yang kondusif yang ditandai dengan terjadinya interaksi yang optimal antara dosen dan mahasiswa baik di dalam maupun di luar ruang kuliah dan laboratorium, kedisplinan para sivitas akademika dalam mengikuti prosedur baku untuk operasi (standard  operating procedures) yang telah ditetapkan.</li><li>Peningkatan Efisiensi dan produktivitas Jurusan yang ditandai dengan penyelesaian program akademik yang tepat waktu, masa studi yang sesuai dengan masa kurikulum (6 semester), minimalisasi angka drop-out, peningkatan kualitas mahasiswa baru. Di samping itu optimalisasi pemanfaatan sumberdaya (cost conciousness) baik menyangkut sumberdaya manusia (rasio dosen mahasiswa), sumber daya fisik (tingkat utilisasi ruangan dan peralatan), maupun sumber daya uang (penekanan unit cost, penganggaran   kinerja).</li><li>Perluasan kesempatan akses terhadap pendidikan di lingkungan Poltekpos Indonesia bagi mahasiswa/calon mahasiswa yang memiliki potensi akademis tetapi terkendala secara ekonomi.</li></ol></p>\r\n<p>keempat program  strategis yang diamanatkan oleh Renstra tersebut menjadi landasan dalam penyusunan setiap program pengembangan, baik melalui dana pengembangan internal maupun dana eksternal.</p>\r\n', 'programstrategis.png', 'N', '2015-11-22 12:10:31'),
(11, 'Paradigma Pendidikan', '', 'paradigma.png', 'N', '2015-11-22 12:12:20'),
(18, 'TOPKR4', '<style type=\"text/css\">\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable td{\r\n	font-size:9px;\r\n}\r\n	}</style>\r\n<p>\r\n	<strong>Sarjana Sains Terapan</strong></p>\r\n<p>\r\n	Program studi TOPKR4 dirancang untuk memenuhi tuntutan aplikasi Teknologi Informasi di sektor Industri dan Bisnis. Selama Proses belajar mahasiswa dibekali dengan materi-materi yang mendukung penguasaan Teknologi Informasi seperti jaringan komputer wireless, rekayasa perangkat lunak, database, &lsquo;multimedia, sistem keamanan informasi serta teknologi dan aplikasi WAP dan WEB. Seiring dengan perkembangan Teknologi Informasi yang sangat cepat, serta untuk mengantisipasi kebutuhan di masyarakat, lulusan yang dibekali dengan state of the art teknologi informasi, seperti Mobile Content and Apllication serta berbagai aspek hukum dan etika yang berhubungan dengan TI.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester I</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I161A3</td>\r\n			<td>\r\n				Agama/Religion</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I142H2</td>\r\n			<td>\r\n				Pengantar Logistik/Logistics Introduction</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I163A3</td>\r\n			<td>\r\n				General English I</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I262D2</td>\r\n			<td>\r\n				Matematika Diskrit/Discrete Mathematics</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I123A4</td>\r\n			<td>\r\n				Algoritma (C++) /Algorithm (C++)</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I114D4</td>\r\n			<td>\r\n				Arsitektur Komputer + (Assembler)/ Computer Architecture</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I312L3</td>\r\n			<td>\r\n				Fisika Dasar/Physic Fundamental</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				8</td>\r\n			<td>\r\n				T4I223I4</td>\r\n			<td>\r\n				Disain dan Pemrograman Web/ Web Design and Programming</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>25</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester II</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I212D2</td>\r\n			<td>\r\n				General English II</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I361C3</td>\r\n			<td>\r\n				PPkn/State&#39;s Ideology and civic education</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I263D3</td>\r\n			<td>\r\n				Bahasa Indonesia/ Indonesian Language</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I322I3</td>\r\n			<td>\r\n				Analisis dan Perancangan Sistem Informasi/ Information System Analysis &amp; Design</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I212D4</td>\r\n			<td>\r\n				Sistem Operasi/Operating System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I252P2</td>\r\n			<td>\r\n				Supply Chain Managemet</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I211D2</td>\r\n			<td>\r\n				Komunikasi Data/Data Communication</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				8</td>\r\n			<td>\r\n				T4I222D4</td>\r\n			<td>\r\n				Basis Data I/ Database I</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				9</td>\r\n			<td>\r\n				T3I212F2</td>\r\n			<td>\r\n				Proyek IT I/ Project I</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>25</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester III</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I363A2</td>\r\n			<td>\r\n				General English III</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I412E4</td>\r\n			<td>\r\n				Sistem Tersebar/Distributed systems</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I622AB2</td>\r\n			<td>\r\n				Sistem Tranportasi &amp; Distribusi / Transportation &amp; Distribution System</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I412M4</td>\r\n			<td>\r\n				Rekayasa Perangkat Lunak/ Software Engineering</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I322S4</td>\r\n			<td>\r\n				Basis Data II/ Database II</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I322K4</td>\r\n			<td>\r\n				Pemrograman Berorientasi Objek /object-oriented programming</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I312D4</td>\r\n			<td>\r\n				Jaringan Komputer /Computer Network</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>24</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester IV</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I522Y3</td>\r\n			<td>\r\n				Sistem ERP 2/ ERP System I</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I511A2</td>\r\n			<td>\r\n				Metodologi Penelitian/Research Methodology</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T4I412D4</td>\r\n			<td>\r\n				Administrasi Jaringan Komputer/ Network Administrator</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T4I542M2</td>\r\n			<td>\r\n				Manajemen Proyek/Project Management</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T4I512AE2</td>\r\n			<td>\r\n				Sistem Informasi Akuntansi/Accounting Information System</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T4I413D4</td>\r\n			<td>\r\n				Sistem Multimedia/Multimedia System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T4I412W4</td>\r\n			<td>\r\n				Web Service Programing</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				8</td>\r\n			<td>\r\n				T4I412F2</td>\r\n			<td>\r\n				Proyek IT II/ Project II</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>23</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester V</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T3I511A2</td>\r\n			<td>\r\n				Sistem ERP 2/ ERP System I</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T3I161C2</td>\r\n			<td>\r\n				Mobile Programming</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				T3I523X4</td>\r\n			<td>\r\n				Kapita Selekta/Capita-Selecta</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				T3I511D3</td>\r\n			<td>\r\n				Kewirausahaan/ Entrepreneurship</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				T3I561I2</td>\r\n			<td>\r\n				Network Security</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				T3I512L4</td>\r\n			<td>\r\n				Sistem Informasi Geografis/Geographic Information System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				T3I542M2</td>\r\n			<td>\r\n				Pemodelan dan Simulasi Logistik/ Modelling and Simulation of Logistic System</td>\r\n			<td align=\"center\">\r\n				3</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\" height=\"23\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>22</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester VI</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I612M2</td>\r\n			<td>\r\n				Internship I</td>\r\n			<td align=\"center\">\r\n				8</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>8</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester VII</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"10%\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\" width=\"10%\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I622AA4</div>\r\n			</td>\r\n			<td>\r\n				Data mining/Bisnis inteligence</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I722AG2</div>\r\n			</td>\r\n			<td>\r\n				Sistem Manajemen Pengetahuan / Knowledge Management System</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I711E2</div>\r\n			</td>\r\n			<td>\r\n				Etika Propesi/Profession ethic</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I711C2</div>\r\n			</td>\r\n			<td>\r\n				Manajemen dan Kepemimpinan/Management &amp; leadership</td>\r\n			<td align=\"center\">\r\n				2</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I713F4</div>\r\n			</td>\r\n			<td>\r\n				Kecerdasan Buatan/Artifical Intelegence</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I722AF4</div>\r\n			</td>\r\n			<td>\r\n				Sistem pendukung Keputusan/Decision Support System</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td align=\"center\">\r\n				<div align=\"left\">\r\n					T4I713G4</div>\r\n			</td>\r\n			<td>\r\n				Desain Interkasi/Interaction Design</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div align=\"right\">\r\n					<strong>Subtotal</strong></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				22</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class=\"table table-hover course-list-table tablesorter\">\r\n	<tbody>\r\n		<tr>\r\n			<th colspan=\"4\">\r\n				Semester VIII</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<strong>No</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Code</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Course</strong></td>\r\n			<td align=\"center\">\r\n				<strong>Credit</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				T4I811C4</td>\r\n			<td>\r\n				Internship II</td>\r\n			<td align=\"center\">\r\n				6</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				T4I811BA</td>\r\n			<td>\r\n				Proyek Akhir/Final Project</td>\r\n			<td align=\"center\">\r\n				4</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"right\" colspan=\"3\">\r\n				<strong>Subtotal</strong></td>\r\n			<td align=\"center\">\r\n				<strong>10</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'TOPKR4.png', 'N', '2015-11-22 18:41:15'),
(19, 'TPMO', '<style type=\"text/css\">\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable td{\r\n	font-size:9px;\r\n}\r\n	}</style>\r\n<div class=\"default\">\r\n	<p>\r\n		<strong>Sarjana Sains Terapan</strong></p>\r\n	<p>\r\n		Kurikulum TPMO dirancang agar para lulusan mempunyai kompetensi untuk menangani pekerjaan dan permasalahan dalam bidang operasional logistik yang mencakup berbagai aspek seperti Ekspor-Impor, Kepabeanan, Distribusi, Transportasi, Warehousing, Cargo &amp; Shipping, Inventory, Purchasing (Procurement), Good Inspections, Logistic Information Service, Perpajakan, Resiko dan Asuransi.</p>\r\n	<strong>DIPLOME 4 CURRICULUM</strong><br />\r\n	<!-- D-IV Semester I  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester I</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L151D2</td>\r\n				<td>\r\n					English Language 1+Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L151O2</td>\r\n				<td>\r\n					Introduction to Management</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L151H2</td>\r\n				<td>\r\n					Mathematics 1 + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L151J2</td>\r\n				<td>\r\n					Statistic 1</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L151L2</td>\r\n				<td>\r\n					Microeconomics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L151B3</td>\r\n				<td>\r\n					Indonesian Language</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L151A3</td>\r\n				<td>\r\n					Religious Education</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L153A2</td>\r\n				<td>\r\n					Introduction to Logistics System + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L152A3</td>\r\n				<td>\r\n					Introduction to Computer and Information Systems + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>22</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester II  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester II</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L251E2</td>\r\n				<td>\r\n					English Language 2+Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L251P2</td>\r\n				<td>\r\n					Human Resource Management</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L251I3</td>\r\n				<td>\r\n					Mathematics 2</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L251K3</td>\r\n				<td>\r\n					Statistic 2+Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L251M2</td>\r\n				<td>\r\n					Macroeconomics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L253B3</td>\r\n				<td>\r\n					Purchasing Management</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L251C3</td>\r\n				<td>\r\n					Citizenship Education</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L253C2</td>\r\n				<td>\r\n					Supply Chain Management + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L252B3</td>\r\n				<td>\r\n					Algorithm + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester III  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester III</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L351F2</td>\r\n				<td>\r\n					English Language 3 + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L351Q2</td>\r\n				<td>\r\n					Organizational Behavior</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L352K3</td>\r\n				<td>\r\n					Operations Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L352N2</td>\r\n				<td>\r\n					Quality Statistical Control + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L352H3</td>\r\n				<td>\r\n					Introductory Accounting + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L353H3</td>\r\n				<td>\r\n					Inventory Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L352F2</td>\r\n				<td>\r\n					Contract Law and Agency</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L353D3</td>\r\n				<td>\r\n					Distribution Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L352C3</td>\r\n				<td>\r\n					Database + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester IV  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester IV</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L451G2</td>\r\n				<td>\r\n					English Language 4 + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L452M3</td>\r\n				<td>\r\n					Operations Research + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L453F3</td>\r\n				<td>\r\n					Warehousing Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L452I3</td>\r\n				<td>\r\n					Taxation + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L452P2</td>\r\n				<td>\r\n					International Trade</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L452T3</td>\r\n				<td>\r\n					Export Import + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L453L2</td>\r\n				<td>\r\n					Transportation Management + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L452D3</td>\r\n				<td>\r\n					System Design + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L452G2</td>\r\n				<td>\r\n					International Trade Law</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester V  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester V</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L552V4</td>\r\n				<td>\r\n					Internship Program I</td>\r\n				<td align=\"center\">\r\n					4</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L552W3</td>\r\n				<td>\r\n					Final report 1</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>4</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester VI  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester VI</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L651R2</td>\r\n				<td>\r\n					Entrepreneurship</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L653K2</td>\r\n				<td>\r\n					Marketing Logistics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L652O2</td>\r\n				<td>\r\n					Decision Theory</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L652S3</td>\r\n				<td>\r\n					Goods Inspections + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L653G3</td>\r\n				<td>\r\n					Freight Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L652R3</td>\r\n				<td>\r\n					Management of Transportation Insurance + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L652Q3</td>\r\n				<td>\r\n					Customs + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L653M3</td>\r\n				<td>\r\n					Transport System + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L652E3</td>\r\n				<td>\r\n					Logistics Information System + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>24</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester VII  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester VII</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L551N3</td>\r\n				<td>\r\n					Research Methods</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L752L3</td>\r\n				<td>\r\n					Project Management + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					3</td>\r\n				<td>\r\n					L752U3</td>\r\n				<td>\r\n					Dangerous Goods</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					4</td>\r\n				<td>\r\n					L753J3</td>\r\n				<td>\r\n					Customer Servis Logistics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					5</td>\r\n				<td>\r\n					L752J3</td>\r\n				<td>\r\n					Costing Supply Chain Management/ Cost Accounting + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					6</td>\r\n				<td>\r\n					L751S2</td>\r\n				<td>\r\n					Capita Selecta</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					7</td>\r\n				<td>\r\n					L753N2</td>\r\n				<td>\r\n					Global Logistics</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					8</td>\r\n				<td>\r\n					L753I2</td>\r\n				<td>\r\n					Process of Logistics Products + Practice</td>\r\n				<td align=\"center\">\r\n					2</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					9</td>\r\n				<td>\r\n					L753O3</td>\r\n				<td>\r\n					e-Business Logistics + Practice</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>23</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<!-- D-IV Semester VIII  --><br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"4\">\r\n					Semester VIII</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<strong>No</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Code</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Course</strong></td>\r\n				<td align=\"center\">\r\n					<strong>Credit</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					1</td>\r\n				<td>\r\n					L852X3</td>\r\n				<td>\r\n					Internship Program I</td>\r\n				<td align=\"center\">\r\n					3</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					2</td>\r\n				<td>\r\n					L852Y6</td>\r\n				<td>\r\n					Thesis</td>\r\n				<td align=\"center\">\r\n					4</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">\r\n					<strong>Subtotal</strong></td>\r\n				<td align=\"center\">\r\n					<strong>7</strong></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<br />\r\n	<table class=\"table table-hover course-list-table tablesorter\">\r\n		<tbody>\r\n			<tr>\r\n				<th colspan=\"3\">\r\n					<strong>Total</strong></th>\r\n				<th>\r\n					<strong>152</strong></th>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		&nbsp;</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'tpmo.jpg', 'N', '2015-11-22 18:44:15');
INSERT INTO `statis` (`statis_id`, `statis_judul`, `statis_deskripsi`, `statis_gambar`, `statis_status`, `statis_waktu`) VALUES
(20, 'Lembaga Penelitian dan Pengabdian Masyarakat (LPPM)', '<p>\r\n	<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}	</style>\r\n</p>\r\n<table border=\"1\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n				<center>\r\n					<strong><font color=\"#FFFFFF\">JAJARAN STRUKTURAL LEMBAGA PENELITIAN &amp; PENGABDIAN MASYARAKAT </font></strong></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" height=\"17\" width=\"30%\">\r\n				&nbsp;</td>\r\n			<td align=\"center\" width=\"37%\">\r\n				<img alt=\"pudir2\" src=\"/poltekpos/assets/upload/images/8.jpg\" style=\"border-width: 0px; border-style: solid; width: 150px; height: 170px;\" /></td>\r\n			<td align=\"center\" width=\"33%\">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Kepala Lembaga Penelitian dan Pengabdian Masyarakat</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Parman Sukarno,ST.,MDC</td>\r\n		</tr>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n				<center>\r\n					<strong><font color=\"#FFFFFF\">STAFF LEMBAGA PENELITIAN &amp; PENGABDIAN MASYARAKAT</font></strong></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" height=\"17\" width=\"30%\">\r\n				&nbsp;</td>\r\n			<td align=\"center\" width=\"37%\">\r\n				<img alt=\"pudir2\" src=\"/poltekpos/assets/upload/images/9.jpg\" style=\"border-width: 0px; border-style: solid; width: 150px; height: 170px;\" /></td>\r\n			<td align=\"center\" width=\"33%\">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Staff Lembaga Penelitian dan Pengabdian Masyarakat</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Oki Nurjaman, A.Md</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	Sebagai lembaga pendidikan tinggi yang fokus dan memosisikan diri pada keunggulan bidang rantai pasok dan logistik, Politeknik Pos Indonesia sudah semestinya didukung oleh suatu pusat riset dan pengembangan yang menjembatani kebutuhan riset aplikatif dan pengembangan rantai pasok dan logistik oleh industri dengan kompetensi lembaga. Untuk itulah Lembaga Penelitian dan Pengabdian Masyarakat Politeknik Pos Indonesia (LPPM-Poltekpos) berperan.</p>\r\n<p>\r\n	Visi dan Misi LPPM<br />\r\n	Misi LPPM Politeknik Pos Indonesia:</p>\r\n<ol>\r\n	<li>\r\n		Meningkatkan kualitas karya ilmiah civitas akademika Politeknik Pos Indonesia khususnya dalam bidang rantai pasok dan logistik.</li>\r\n	<li>\r\n		Menghasilkan karya ilmiah di bidang rantai pasok dan logistik yang berkualitas dan memiliki sitasi tinggi di komunitas akademis dan bernilai praktis tinggi bagi industri.</li>\r\n	<li>\r\n		Meningkatkan peran serta dosen dan civitas akademika dalam kegiatan riset dan pemberdayaan masyarakat.</li>\r\n	<li>\r\n		Membangun dan mengembangkan jejaring riset baik dengan pusat riset perguruan tinggi maupun industri/institusi.</li>\r\n	<li>\r\n		Meningkatkan perolehan HAKI untuk hasil riset dan pemberdayaan masyarakat.</li>\r\n	<li>\r\n		Berperan aktif dalam peningkatan kualitas sumber daya masyarakat dan/atau industri..</li>\r\n</ol>\r\n<p>\r\n	<br />\r\n	<strong>Visi LPPM Poltekpos </strong><br />\r\n	Pusat keunggulan dalam penelitian dan pengabdian masyarakat di bidang logistik dan rantai pasok.<br />\r\n	<br />\r\n	<strong>Arah dan Tujuan LPPM</strong><br />\r\n	Sesuai dengan Rencana Strategi Poltekpos tahun 2009 ? 2019, konsep pengembangan penelitian Poltekpos diarahkan lebih banyak penelitian yang bersifat terapan (applied research). Hal ini disesuaikan dengan karakter Poltekpos sebagai institusi pendidikan jalur profesi dan keberadaannya tidak bisa dipisahkan dari dunia usaha dan industri.<br />\r\n	Sehingga arah penelitian difokuskan pada <strong><em>penelitian dan pengembangan di bidang rantai pasok dan logistik yang menjembatani kebutuhan penelitian aplikatif dan pengembangan rantai pasok dan logistik oleh industri.</em></strong><br />\r\n	<br />\r\n	<strong>Tujuan LPPM sendiri adalah </strong><br />\r\n	LPPM Politeknik Pos menjadikan dosen Politeknik Pos Indonesia:</p>\r\n<ol>\r\n	<li>\r\n		mempunyai kemampuan dalam menulis karya ilmiah</li>\r\n	<li>\r\n		mempunyai kemampuan dalam membuat penelitian yang berkualitas</li>\r\n	<li>\r\n		mempunyai karya ilmiah yang dipublikasikan baik nasional maupun internasional.</li>\r\n	<li>\r\n		Menghasilkan keluaran penelitian yang keluarannya dapat dipatenkan dan atau digunakan masyarakat baik industri, lembaga masyarakat maupun pemerintah</li>\r\n</ol>\r\n<p>\r\n	<strong>LPPM Politeknik Pos Indonesia menjadikan untuk setiap jurusannya:</strong></p>\r\n<ol>\r\n	<li>\r\n		Mempunyai jurnal yang terakreditasi</li>\r\n	<li>\r\n		Menghasilkan buku/bahan ajar yang diakui nasional dan sesuai dengan kompetensinya</li>\r\n	<li>\r\n		Menghasilkan dosen yang fokus arah penelitiannya sesuai dengan kompetensinya</li>\r\n	<li>\r\n		Menghasilkan keluaran penelitian yang dapat digunakan dalam pembelajaran matakuliah</li>\r\n</ol>\r\n<p>\r\n	LPPM-Poltekpos merupakan sebuah lembaga yang mewadahi aktivitas riset dan pengabdian masyarakat dan ketiga bagi para dosen dan mahasiswa Politeknik Pos Indonesia. Didukung oleh sekitar 60 orang tenaga peneliti, LPPM-Poltekpos memosisikan diri sebagai mitra terdepan riset dan pengembangan untuk bidang rantai pasok dan logistik bagi industri. Beberapa prestasi bidang riset antara lain berkaitan dengan topik-topik:</p>\r\n<ul>\r\n	<li>\r\n		Pemanfaatan RFID Untuk Pengelolaan Rantai Pasok.</li>\r\n	<li>\r\n		Pemetaan dan Perancangan Rantai Pasok Industri Kreatif.</li>\r\n	<li>\r\n		GIS Untuk Penentuan Lokasi Strategis dan Rute Terpendek Logistik.</li>\r\n	<li>\r\n		Perancangan Sistem Informasi Berbasis GIS Dalam Pengendalian Distribusi Pupuk.</li>\r\n	<li>\r\n		Perancangan Aplikasi Berbasis Service Oriented Architecture (SOA) Untuk Optimalisasi Manajemen Rantai Pasok Sistem Ketahanan Pangan Nasional.</li>\r\n	<li>\r\n		Perancangan e-Marketing Untuk Usaha Mikro.</li>\r\n	<li>\r\n		Analisis Kualitas Layanan dan Loyalitas Pelanggan.</li>\r\n	<li>\r\n		Aspek-Aspek Perlindungan Hukum Berkaitan Dengan Perancangan Aplikasi Tanda Tangan Digital.</li>\r\n</ul>\r\n<p>\r\n	dan berbagai topik bidang IT, Marketing, dan Accounting yang terkait dengan manajemen rantai pasok. Berbagai riset dan pengembangan yang dilakukan dibiayai oleh DP2M-Ditjen Dikti, BPPT-Ristek, dan pihak ketiga lainnya, serta dari internal Politeknik Pos Indonesia.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<table border=\"1\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th align=\"center\">\r\n				<strong>No</strong></th>\r\n			<th align=\"center\">\r\n				<strong>Nama Kegiatan</strong></th>\r\n			<th align=\"center\">\r\n				<strong>Mitra</strong></th>\r\n			<th align=\"center\">\r\n				<strong>Tahun</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				1</td>\r\n			<td>\r\n				Riset Kepuasan Pelanggan EMS, Pos Express dan PKH.</td>\r\n			<td>\r\n				PT Pos Indonesia</td>\r\n			<td align=\"center\">\r\n				2010</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				2</td>\r\n			<td>\r\n				Coding dan penyusunan tarif Pos Express dan PKH.</td>\r\n			<td>\r\n				PT Pos Indonesia</td>\r\n			<td align=\"center\">\r\n				2010</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				3</td>\r\n			<td>\r\n				Riset potensi angkutan feeder KRL Jabodetabek.</td>\r\n			<td>\r\n				PT Kereta Api Logistik</td>\r\n			<td align=\"center\">\r\n				2010</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				4</td>\r\n			<td>\r\n				Pembangunan aplikasi sistem kendali pembangunan.</td>\r\n			<td>\r\n				Pemkab Sumedang</td>\r\n			<td align=\"center\">\r\n				2010</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				5</td>\r\n			<td>\r\n				Pembangunan BIM Katapang.</td>\r\n			<td>\r\n				Pemkab Bandung</td>\r\n			<td align=\"center\">\r\n				2010</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				6</td>\r\n			<td>\r\n				Pendampingan migrasi ke Open Source.</td>\r\n			<td>\r\n				Pemkab Bandung</td>\r\n			<td align=\"center\">\r\n				2010</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				7</td>\r\n			<td>\r\n				Pelatihan IT bagi guru SMA/SMK/MA.</td>\r\n			<td>\r\n				Sekolah</td>\r\n			<td align=\"center\">\r\n				2009 - 2010</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Disamping riset dan pengembangan, LPPM-Poltekpos juga memberikan pelatihan-pelatihan aplikatif untuk bidang-bidang kompetensi Manajemen Rantai Pasok dan Logistik, Manajemen Informasi, Teknologi Informasi, Marketing, dan Akuntansi/Manajemen Keuangan. Pelatihan dapat berbentuk in-house training atau kelas khusus di Poltekpos.</p>\r\n<table align=\"center\" border=\"0\" style=\"border:1px solid #000;\" width=\"100% \">\r\n	<thead>\r\n		<tr style=\"mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 20.1pt;\">\r\n			<td style=\"width: 44.95pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.1pt;\" width=\"60\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<strong style=\"mso-bidi-font-weight:normal\"><span>Tahun</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.1pt;\" width=\"480\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<strong style=\"mso-bidi-font-weight:normal\"><span>Kerjasama<span style=\"mso-spacerun:yes\"> </span>LPPM Poltekpos</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.1pt;\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<strong style=\"mso-bidi-font-weight:normal\"><span>Jenis</span></strong></p>\r\n			</td>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr style=\"mso-yfti-irow:1\">\r\n			<td style=\"width: 44.95pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>2008</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>-</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"right\" class=\"MsoNormal\" style=\"text-align:right\">\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:2\">\r\n			<td style=\"width: 44.95pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>2009</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Pembangunan Community Access Point (CAP) Kecamatan Cilengkrang Kabupaten Bandung</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>PPM</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:3;mso-row-margin-right:60.3pt\">\r\n			<td colspan=\"2\" style=\"width: 405.0pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"540\">\r\n				<p align=\"right\" class=\"MsoNormal\" style=\"text-align:right\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>TOTAL</span></strong></p>\r\n			</td>\r\n			<td width=\"80\">\r\n				<p class=\"MsoNormal\">\r\n					?</p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:4\">\r\n			<td rowspan=\"5\" style=\"width: 44.95pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>2010</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Perencanaan Pembangunan Balai Informasi Masyarakat (BIM) Kabupaten Bandung</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>PPM</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:5\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Survey Kebutuhan Feeder KRL PT. Kereta Api Logistik</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:6\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Coding dan analisis data survey kepada pelanggan</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:7\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Pendampingan Migrasi Open Source Kabupaten Bandung</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>PPM</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:8\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Upaya Pemberdayaan UMK dan Pengentasan Kemiskinan Keluarga TKI melalui Implementasi Pengintegrasian Sektor Ekonomi Mikro dan Pendanaan UMK di Kabupaten Bandung Barat (IbM)</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>PPM</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:9;mso-row-margin-right:60.3pt\">\r\n			<td colspan=\"2\" style=\"width: 405.0pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"540\">\r\n				<p align=\"right\" class=\"MsoNormal\" style=\"text-align:right\">\r\n					<strong><span>TOTAL</span></strong></p>\r\n			</td>\r\n			<td width=\"80\">\r\n				<p class=\"MsoNormal\">\r\n					?</p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:10\">\r\n			<td rowspan=\"6\" style=\"width: 44.95pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>2011</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Evaluasi Kepemilikan Saham Pemprov. Jawa Barat dan PT. Jasa Sarana pada PT. Tirta Gemah Ripah</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:11\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Survey Tarif Layanan Pos Universal (LPU)</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:12\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Pembangunan Database Kemitraan PT Pos Indonesia</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:13\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Studi Kelayakan Spin-Off POS Logistics PT Pos Indonesia</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:14\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Penyusunan Business Plan Pembentukan Badan Hukum Rumah Sakit PT Perkebunan Nusantara VIII di Subang</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:15\">\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Penilaian Customer Satisfaction (CSI) Layanan Pos<span style=\"mso-spacerun:yes\"> </span>PT. Pos Indonesia (Persero)</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:16;mso-row-margin-right:60.3pt\">\r\n			<td style=\"width: 44.95pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; background: ; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p align=\"right\" class=\"MsoNormal\" style=\"text-align:right\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>TOTAL</span></strong></p>\r\n			</td>\r\n			<td width=\"80\">\r\n				<p class=\"MsoNormal\">\r\n					?</p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:17\">\r\n			<td style=\"width: 44.95pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<strong style=\"mso-bidi-font-weight:   normal\"><span>2012</span></strong></p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Penyusunan Daftar Tarif Pos Kilat</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style=\"mso-yfti-irow:18;mso-yfti-lastrow:yes\">\r\n			<td style=\"width: 44.95pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"60\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td style=\"width: 360.05pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"480\">\r\n				<p class=\"MsoNormal\" style=\"text-align:justify\">\r\n					<span>Penyusunan Studi Kelayakan Pembentukan Anak Perusahaan Rumah Sakit PT Perkebunan Nusantara II Medan</span></p>\r\n			</td>\r\n			<td style=\"width: 60.3pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"80\">\r\n				<p align=\"center\" class=\"MsoNormal\" style=\"text-align:center\">\r\n					<span>Penelitian</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'lembagapenelitian.png', 'N', '2015-11-01 20:44:54'),
(21, 'Satuan Pengawasan dan Penjaminan Mutu Akademik (SPPMA)', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:40%;\r\n}\r\n</style>\r\n<div class=\"default\">\r\n	<table border=\"1\">\r\n		<tbody>\r\n			<tr>\r\n				<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n					<center>\r\n						<strong><font color=\"#FFFFFF\">JAJARAN STRUKTURAL SATUAN PENGAWASAN &amp; PENJAMINAN MUTU AKADEMIK</font></strong></center>\r\n				</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" width=\"30%\">\r\n					&nbsp;</td>\r\n				<td align=\"center\" width=\"37%\">\r\n					<img alt=\"lppm\" src=\"/poltekpos/assets/upload/images/10.jpg\" style=\"width: 150px; height: 170px;\" /></td>\r\n				<td align=\"center\" width=\"33%\">\r\n					&nbsp;</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					Ka. Satuan Pengawasan dan Penjaminan Mutu Akademik</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					Sri Suharti, SE, MM.Ak</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		Satuan Pengawasan dan Penjaminan Mutu Akademik, disingkat SPPMA merupakan satuan unit kerja yang merancang mekanisme, melaksanakan monitoring dan evaluasi kualitas kinerja unsur pelaksana akademis / unsur pelaksana administrasi dan teknis di Poltekpos.</p>\r\n	<p>\r\n		Fungsi dari SPPMA sebagai berikut :</p>\r\n	<ul>\r\n		<li>\r\n			Menanamkan budaya kualitas dilingkungan Poltekpos.</li>\r\n		<li>\r\n			Menjaga agar program-program akademik di Poltekpos berjalan secara berkualitas melalui kegiatan monitoring dan evaluasi.</li>\r\n		<li>\r\n			Mengupayakan agar kualitas unsure pelaksana akademis/administrasi/teknis selalu meningkat</li>\r\n		<li>\r\n			Mengupayakan agar kegiatan yang berkaitan dengan aspek financial dapat terkontrol dan terkendali.</li>\r\n	</ul>\r\n	<p>\r\n		&nbsp;</p>\r\n	<table align=\"center\" border=\"0\">\r\n		<tbody>\r\n			<tr bgcolor=\"#F60\">\r\n				<th>\r\n					<div>\r\n						<center>\r\n							<span style=\"font-size: x-small; font-family: Verdana,Arial,Helvetica,sans-serif;\"><font color=\"#FFFFFF\">PELATIHAN SISTEM MANAJEMEN MUTU ADMINISTRASI PENDIDIKAN TINGGI BERBASIS ISO 9001-2008</font></span></center>\r\n					</div>\r\n				</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						<img alt=\"kepalasppma\" src=\"/poltekpos/assets/upload/images/11.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div style=\"text-align: center;\">\r\n						<span style=\"font-size: x-small; font-family: Verdana,Arial,Helvetica,sans-serif;\"><strong><img alt=\"kepalasppma\" src=\"/poltekpos/assets/upload/images/12.jpg\" style=\"border-width: 0px; border-style: solid;\" /></strong></span></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"justify\">\r\n					<div style=\"text-align: center;\">\r\n						<span style=\"font-size: x-small; font-family: Verdana,Arial,Helvetica,sans-serif;\"><strong><img alt=\"kepalasppma\" src=\"/poltekpos/assets/upload/images/13.jpg\" style=\"border-width: 0px; border-style: solid;\" /></strong></span></div>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		&nbsp;</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'pengawas.jpg', 'N', '2015-11-01 20:58:53'),
(22, 'Teknologi Informasi dan Komunikasi', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:20%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable img {\r\n	width:27%;\r\n	height:7%;\r\n}\r\n	}</style>\r\n<div class=\"default\">\r\n	<p>\r\n		<!-- .style3 {font-family: Verdana, Arial, Helvetica, sans-serif} --></p>\r\n	<table border=\"0\" style=\"text-align: justify;\">\r\n		<tbody>\r\n			<tr>\r\n				<th bgcolor=\"#f60\" colspan=\"3\">\r\n					<div style=\"text-align: center;\">\r\n						<center>\r\n							<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif; color:#fff;\">TEKNOLOGI INFORMASI DAN TELEKOMUNIKASI</span></center>\r\n					</div>\r\n				</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					<div>\r\n						<img src=\"/poltekpos/assets/upload/images/14.jpg\" style=\"border-width: 0px; border-style: solid;\" /></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					Ka.TIK</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\" colspan=\"3\">\r\n					<div>\r\n						Roni Habibi, S.Kom.,MT</div>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<table border=\"0\" style=\"text-align: justify;\">\r\n		<tbody>\r\n			<tr>\r\n				<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n					<center>\r\n						<strong><span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif; color:#fff;\">STAFF TEKNOLOGI INFORMASI DAN TELEKOMUNIKASI</span></strong></center>\r\n				</th>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<img alt=\"fachrie\" src=\"/poltekpos/assets/upload/images/15.jpg\" style=\"border-width: 0px; border-style: solid;\" /></td>\r\n				<td align=\"center\">\r\n					<img alt=\"muji\" src=\"/poltekpos/assets/upload/images/16.jpg\" style=\"border-width: 0px; border-style: solid;\" /></td>\r\n				<td align=\"center\">\r\n					<img alt=\"Zenner\" src=\"/poltekpos/assets/upload/images/17.jpg\" style=\"border-width: 0px; border-style: solid;\" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						IT SOP and Infrastructur</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						IT Database</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						IT Application and Development</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						Syafrizal Fachri Pane, S.T</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Mujiyono, S.T</div>\r\n				</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Yanri Zenner, A.Md</div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<img alt=\"fachrie\" src=\"/poltekpos/assets/upload/images/18.jpg\" style=\"border-width: 0px; border-style: solid;\" /></td>\r\n				<td align=\"center\">\r\n					&nbsp;</td>\r\n				<td align=\"center\">\r\n					<img alt=\"Zenner\" src=\"/poltekpos/assets/upload/images/19.png\" style=\"border-width: 0px; border-style: solid;\" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						<span class=\"style3\">Networking</span></div>\r\n				</td>\r\n				<td align=\"center\">\r\n					&nbsp;</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						<span class=\"style3\">Networking</span></div>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"center\">\r\n					<div>\r\n						<span class=\"style3\">San<span class=\"style3\"><span class=\"style3\">i Hak<span class=\"style3\">imudin </span></span></span></span></div>\r\n				</td>\r\n				<td align=\"center\">\r\n					&nbsp;</td>\r\n				<td align=\"center\">\r\n					<div>\r\n						Yadi Mulyadi</div>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		&nbsp;</p>\r\n	<p>\r\n		<a href=\"http://www.sim.poltekpos.ac.id\" target=\"_blank\">www.sim.poltekpos.ac.id</a></p>\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"font-size: medium;\"><strong><span style=\"text-decoration: underline;\">Tujuan</span></strong></span></p>\r\n	<p style=\"text-align: justify;\">\r\n		Mengarahkan dan mengembangkan strategi dan rencana TI Institusi Politeknik Pos Indonesia, mengkoordinasikan dan mengontrol implementasi layanan TI baik secara korporat maupun operasional, untuk memastikan tersedianya dukungan teknologi informasi yang handal, efektif dan efisien bagi kelancaran operasional perusahaan dalam mencapai sasaran sesuai dengan strategi institusi Politeknik Pos Indonesia.</p>\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"text-decoration: underline;\"><strong><span style=\"font-size: medium;\">Tugas Dan Jabatan</span></strong></span></p>\r\n	<p style=\"text-align: justify;\">\r\n		1. Head Of TIK:</p>\r\n	<ul style=\"text-align: justify;\">\r\n		<li>\r\n			Menganalisa dan mengkaji perkembangan dan tren teknologi informasi serta pengaruhnya ke industri dan bidang usaha berkecimpung, untuk menjadi landasan bagi penetapan dan penyusunan rekomendasi pengembangan TI secara korporat dan Menyusun anggaran bagian TI dan mengontrol penggunaan dan realisasi dari anggaran tersebut untuk memastikan efektifitas dan efisiensinya.</li>\r\n		<li>\r\n			Mengembangkan dan menyusun strategi dan rencana TI perusahaan untuk jangka pendek, menengah, dan panjang, untuk memastikan kesesuaian dengan strategi dan rencana institusi dalam mencapai sasaran institusi Politeknik Pos Indonesia.</li>\r\n		<li>\r\n			Mengkordinir perencanaan arsitektur TI dengan membangun suatu pendekatan arsitektural TI untuk keseluruhan sistem institusi Politeknik Pos Indonesia, menyiapkan kapasitas perencanaan sehingga pelayanan kepada pelanggan terpelihara secara konsisten dan tidak kompromis, mempertimbangkan kreasinilai dalam membangun suatu arsitektur perusahaan aplikasi, dan selalu mengupdate pengetahuan tentang perkembangan TI yang mutakhir.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkordinir perencanaan dan pelaksanaan proyek TI yang besar di seluruh institusi, untuk memastikan integrasi institusi terhadap unit - unit dan pencapaian target penyelesaian proyek dengan tepat waktu.</li>\r\n	</ul>\r\n	<p>\r\n		2. IT SPO ( Strategy,Planning and Operation) and Infrastruktur:</p>\r\n	<ul>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkordinir , Membuat dan merangcang Dokument Rekayasa Perangkat Lunak yang berjalan atau dalam pengembangan.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkoordinir dalam pengolahan Arsip dan Administrasi UPT.SIM</li>\r\n		<li style=\"text-align: justify;\">\r\n			Melaporkan keseluruhan terhadap kinerja setiap devisi kepada Ka. UPT. SIM</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkordinir Modul Modul Persentasi Sistem.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkordinir Seluruh Keluhan dan permasalahan yang terjadi pada institusi atau unit-unit terhadap system yang berjalan.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Menyiapkan kebutuhan dan pengolahan data terhadap institusi dan unit-unit di Politeknik Pos Indonesia khususnya pada akademik.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Memberikan solusi terhadap software dan hardware yang di butuhkan pada institusi dan unit-unit kerja Politeknik Pos Indonesia.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkoordinir terhadap rekaman document system.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Membantu penanganan data EPSBED KOPERTIS dan Akreditasi</li>\r\n	</ul>\r\n	<p>\r\n		3. IT Aplication And Development :</p>\r\n	<ul>\r\n		<li style=\"text-align: justify;\">\r\n			Bermitra dengan provider yang melayani institusi dan unit - unit untuk menjamin perolehan pelayanan yang benar dan yang dibutuhkan oleh kegiatan usaha agar sejalan dengan proses-proses dalam institusi.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkordinir pelaksanaan SLA (service level agreement) TI di seluruh unit di institusi.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Menjamin pemberian manajemen pelayanan SLA yang tepat, demikian pula untuk pelayanan internal.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Menyiapkan rencana pemulihan pada upaya antisipasi terhadap tiap serangan bahaya yang sama artinya dengan menjamin sistem TI secara maksimum</li>\r\n		<li style=\"text-align: justify;\">\r\n			Mempertimbangkan biaya dan dasar-dasar dalam negosiasi kontrak.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Menyeleksi, merekomendasikan dan memberikan pelatihan TI yang tepat kepada staff TI Institusi Politeknik Pos Indonesia.</li>\r\n	</ul>\r\n	<p>\r\n		4. IT Network And Database:</p>\r\n	<ul>\r\n		<li style=\"text-align: justify;\">\r\n			Mengkoordinir dan menganalisi struktur Database.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Memberikan Solusi terhadap analisa database kebutuhan user dan IT Aplication And Development.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Bertanggung jawab atas aliran datatabase.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Bertanggung jawab dalam backup database system yang berjalan.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Bertanggung jawab memberikan solusi terhadap keamanan ruang lingkup database.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Memegang kendali terhadap system administrator database.</li>\r\n		<li style=\"text-align: justify;\">\r\n			Memberikan pelayanan data terhadap kebutuhan institusi dan unit-unit kerja Politeknik Pos Indonesia.</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'tik.jpg', 'N', '2015-11-01 21:11:34'),
(23, 'Profil BAAK', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:25%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable img {\r\n	width:30%;\r\n	height:20%;\r\n}\r\n	}</style>\r\n<p>\r\n	&nbsp;</p>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th bgcolor=\"#F60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\" color:#fff\">BAAK POLITEKNIK POS INDONESIA</span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<span style=\"font-size: small;\"><img src=\"/poltekpos/assets/upload/images/20.jpg\" style=\"border-width: 0px; border-style: solid; height: 114px; width: 90px;\" /> </span></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				KEPALA BAAK</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Irma Rachmawati.,SE</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\"color:#fff;\"><strong>STAFF BAGIAN ADMINISTRASI AKADEMIK DAN KEMAHASISWAAN</strong></span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<span style=\"font-size: small;\"><img src=\"/poltekpos/assets/upload/images/19.png\" style=\"border-width: 0px; border-style: solid;\" /></span></td>\r\n			<td align=\"center\">\r\n				<span style=\"font-size: small;\"><img src=\"/poltekpos/assets/upload/images/21.jpg\" style=\"border-width: 0px; border-style: solid;\" /></span></td>\r\n			<td align=\"center\">\r\n				<span style=\"font-size: small;\"><img src=\"/poltekpos/assets/upload/images/19.png\" style=\"border-width: 0px; border-style: solid;\" /></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				Administrasi Akademik</td>\r\n			<td align=\"center\">\r\n				Administrasi Akademik</td>\r\n			<td align=\"center\">\r\n				Administrasi Akademik</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				Rd. Priatna Dwiangsa.,A.Md</td>\r\n			<td align=\"center\">\r\n				Dewi Eryanti, ST</td>\r\n			<td align=\"center\">\r\n				Budi Komara</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'profil.png', 'N', '2015-11-01 21:19:37'),
(24, 'Profil BAUK', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:20%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable img {\r\n	width:20%;\r\n	height:10%;\r\n}\r\n	}\r\n</style>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th bgcolor=\"#F60\" colspan=\"3\">\r\n				<div>\r\n					<center>\r\n						<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif; color:#fff;\">BAUK POLITEKNIK POS INDONESIA</span></center>\r\n				</div>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"36%\">\r\n				<div>\r\n					<img src=\"/poltekpos/assets/upload/images/22.jpg\" style=\"border-width: 0px; border-style: solid; \" /></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\">KEPALA BAUK</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div>\r\n					<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\">Pupung Puji Pramesti Iskandar.,S.Kom</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table align=\"center\" border=\"0\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th bgcolor=\"#F60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\"font-size: small; color:#FFF; font-family: Verdana,Arial,Helvetica,sans-serif;\"><strong>STAFF BAGIAN ADMINISTRASI UMUM DAN KEUANGAN</strong></span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"36%\">\r\n				<img src=\"/poltekpos/assets/upload/images/23.jpg\" style=\"border-width: 0px; border-style: solid; \" /></td>\r\n			<td align=\"center\" width=\"36%\">\r\n				<img src=\"/poltekpos/assets/upload/images/24.jpg\" style=\"border-width: 0px; border-style: solid; \" /></td>\r\n			<td align=\"center\" width=\"36%\">\r\n				<img src=\"/poltekpos/assets/upload/images/25.jpg\" style=\"border-width: 0px; border-style: solid; \" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small;\">Staf Keuangan Mahasiswa</span></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small;\">Staf SDM dan Sarana</span></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small;\">Staf Keuangan Administrasi</span></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small;\">Fitri Agustin, S.T.</span></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small;\">Yayat Ruhiyat ,A.Md.</span></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small;\">Puspo Retnaningtyas, A.Md.</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\">\r\n	Kepala Bagian Administrasi Umum dan Keuangan mempunyai tugas pokok, fungsi, werwenang, tanggung jawab, hubungan kerja, dan uraian tugas sebagai berikut :</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>Tanggungjawab:</strong></p>\r\n<ol style=\"text-align: justify;\">\r\n	<li>\r\n		Tersusunnya rencana dalam bidang administrasi umum dan keuangan Poltekpos;</li>\r\n	<li>\r\n		Terselenggaranya layanan administrasi umum dan keuangan secara efektif dan efisien;</li>\r\n	<li>\r\n		Terciptanya sistem informasi manajemen administrasi umum dan keuangan yang sesuai dengan visi dan misi Poltekpos;</li>\r\n	<li>\r\n		Pemanfaatan sarana dan peralatan yang di kelola unit organisasinya secara efektif dan efisien;</li>\r\n	<li>\r\n		Pembinaan tenaga administrasi di unit organisasinya;</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">\r\n	<strong>Uraian tugas :</strong></p>\r\n<ol style=\"text-align: justify;\">\r\n	<li>\r\n		Menyusun rancangan aturan kepegawaian, keuangan dan peralatan;</li>\r\n	<li>\r\n		Merencanakan, mengusulkan pengadaan kebutuhan dan penempatan pegawai;</li>\r\n	<li>\r\n		Memeriksa pembuatan daftar pembayaran gaji dan honorarium pegawai serta mengawasi pembayarannya;</li>\r\n	<li>\r\n		Mengawasi tertibadministrasi kepegawaian;</li>\r\n	<li>\r\n		Mengawasi permintaan kebutuhan dan penyelesaian panjar;</li>\r\n	<li>\r\n		Mengawasi tertib administrasi keuangan;</li>\r\n	<li>\r\n		Mengawasi dan mengendalikan permintaan kebutuhan dan pembelian peralatan;</li>\r\n	<li>\r\n		Mengawasi tertib administrasi peralatan;</li>\r\n	<li>\r\n		Mengawasi proses penyelesaian surat menyurat;</li>\r\n	<li>\r\n		Mengawasi tertib administrasi surat menyurat;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengawasi akomodasi dan penyediaan kebutuhan pimpinan;</li>\r\n</ol>\r\n', 'profil.png', 'N', '2015-11-01 21:33:44'),
(26, 'Penunjang Akademik', '<p>\r\n	<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:35%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:20%;\r\n}\r\n	}	</style>\r\n</p>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\"color:#ffffff;\"><strong><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">PENUNJANG AKADEMIK</font></strong></span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<img alt=\"\" src=\"/poltekpos/assets/upload/images/26.jpg\" style=\"height: 119px; width: 82px;\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Ka. Penunjang Akdamemik</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				Widia Resdiana, S.S., M.Pd.</td>\r\n		</tr>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\"color:#ffffff;\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\"><strong>STAFF PENUNJANG AKADEMIK</strong></font></span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"34%\">\r\n				<img alt=\"\" src=\"/poltekpos/assets/upload/images/19.png\" style=\"height: 119px; width: 92px;\" /></td>\r\n			<td align=\"center\" width=\"36%\">\r\n				&nbsp;</td>\r\n			<td align=\"center\" width=\"36%\">\r\n				<img alt=\"\" src=\"/poltekpos/assets/upload/images/19.png\" style=\"width: 92px; height: 119px;\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<div align=\"center\">\r\n					Bambang Indra N, S.Sos</div>\r\n			</td>\r\n			<td align=\"center\">\r\n				&nbsp;</td>\r\n			<td align=\"center\">\r\n				<div align=\"center\">\r\n					Haris</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<div align=\"center\">\r\n					Staff Perpustakaan</div>\r\n			</td>\r\n			<td align=\"center\">\r\n				&nbsp;</td>\r\n			<td align=\"center\">\r\n				<div align=\"center\">\r\n					Staff Perpustakaan</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'akademik.jpg', 'N', '2015-11-01 21:46:35'),
(27, 'Profil Perpustakaan', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:35%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:20%;\r\n}\r\n	}\r\n</style>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th bgcolor=\"#f60\" colspan=\"3\">\r\n				<div>\r\n					<center>\r\n						<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif; color:#fff;\">PERPUSTAKAAN POLITEKNIK POS INDONESIA</span></center>\r\n				</div>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"35%\">\r\n				<div>\r\n					<img src=\"/poltekpos/assets/upload/images/26.jpg\" style=\"border-width: 0px; border-style: solid; width: 160px; height: 180px;\" /></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\">KEPALA PENUNJANG AKADEMIK </span></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div>\r\n					<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\"><span class=\"style1\">Widia Resdiana.,SS.,M.Pd </span></span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#f60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\"font-size: small; color:#fff; font-family: Verdana,Arial,Helvetica,sans-serif;\"><strong>STAFF AHLI PERPUSTAKAAN</strong></span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"34%\">\r\n				&nbsp;</td>\r\n			<td align=\"center\" width=\"34%\">\r\n				&nbsp;</td>\r\n			<td align=\"center\" width=\"31%\">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<div>\r\n					&nbsp;</div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\">Pustakawan</span></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\">\r\n				<div>\r\n					&nbsp;</div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\">Bambang Indra , S.Sos</span></div>\r\n			</td>\r\n			<td align=\"center\">\r\n				<div>\r\n					&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'perpustakaan.jpg', 'N', '2015-11-01 21:51:33'),
(28, 'Recruitment Mahasiswa', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:35%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:20%;\r\n}\r\n	}</style>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th bgcolor=\"#f60\" colspan=\"3\">\r\n				<div>\r\n					<center>\r\n						<span class=\"style2\"><font color=\"#fff\">RECRUITMENT MAHASISWA POLITEKNIK POS INDONESIA</font></span></center>\r\n				</div>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"36%\">\r\n				<div>\r\n					<img alt=\"\" src=\"/poltekpos/assets/upload/images/28.jpg\" style=\"border-width: 0px; border-style: solid; height: 160px; width: 120px;\" /></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<span style=\"font-size: small; font-family: Verdana,Arial,Helvetica,sans-serif;\">KA. RECRUITMENT MAHASISWA </span></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div>\r\n					<span style=\"font-size: small; font-family: Verdana, Arial, Helvetica, sans-serif;\"><span class=\"style3\">Y. Casmadi, SE., MM </span></span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table align=\"center\" border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th align=\"center\" bgcolor=\"#F60\" colspan=\"3\">\r\n				<center>\r\n					<span style=\"font-size: small; color:#fff; font-family: Verdana,Arial,Helvetica,sans-serif;\"><strong>STAFF RECRUITMENT MAHASISWA</strong></span></center>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" width=\"36%\">\r\n				<img alt=\"bendaharaypbpi\" src=\"/poltekpos/assets/upload/images/29.jpg\" style=\"border-width: 0px; border-style: solid; height: 180px; width: 120px;\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div>\r\n					Roni Andarsyah , S.T.</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" colspan=\"3\">\r\n				<div>\r\n					Staff Recruitment Mahasiswa</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'mahasiswa.png', 'N', '2015-11-01 21:55:48');
INSERT INTO `statis` (`statis_id`, `statis_judul`, `statis_deskripsi`, `statis_gambar`, `statis_status`, `statis_waktu`) VALUES
(29, 'Penelitian', '<p><strong>Kegiatan Penelitian</strong><br/>\r\nkegiatan penelitian yang dilakukan oleh dosen tetap politeknik pos indonesia.</p>\r\n\r\n<p><strong>Publikasi Ilmiah</strong><br/>\r\nartikel dari hasil penelitian para peneliti, diterbitkan dalam bentuk majalah tri wulan Competitive.</p>\r\n\r\n<p>Untuk Informasi Lebih Lengkap kunjungi situs web LPPM<br/>\r\n<a href=\"http://www.lppm.poltekpos.ac.id \" title=\"Situs Resmi LPPM\" target=\"new\">www.lppm.poltekpos.ac.id</a></p>\r\n', 'penelitian.jpg', 'N', '2015-11-01 21:59:32'),
(30, 'Fasilitas', '<style type=\"text/css\">\r\ntable {\r\n	padding:5px;\r\n	border-collapse:collapse;\r\n	border:1px solid #CCC;\r\n	width:100%;\r\n}\r\ntable th {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable td  {\r\n	padding:5px;\r\n	border:1px solid #CCC;\r\n}\r\ntable img {\r\n	width:40%;\r\n	height:20%;\r\n}\r\n\r\n@media screen and (max-width:700px) {\r\ntable {\r\n	font-size:9px;\r\n}\r\ntable img {\r\n	width:20%;\r\n	height:10%;\r\n}\r\n	}</style>\r\n<p>\r\n	Dengan luas bangunan 20.930 m2 yang dibangun di atas tanah seluas 44.406 m2, memiliki sejumlah sarana dan fasilitas yang sangat memadai untuk proses belajar mengajar dengan baik.</p>\r\n<p>\r\n	Ada pun fasilitas yang dimaksud meliputi fasilitas untuk proses belajar mengajar maupun fasilitas penunjang pendidikan yaitu sebagai berikut :</p>\r\n<p>\r\n	<strong>Fasilitas pendidikan :</strong></p>\r\n<ul>\r\n	<li>\r\n		Lab komputer sebagai tempat praktik untuk melengkapi teori-teori yang telah diterima. Lab tersebut terdiri dari Lab. Lab. Perakitan,&nbsp; Lab. Multimedia, Lab. Simulasi. dan Lab Dasar.</li>\r\n	<li>\r\n		Lab Jurusan untuk kegiatan-kegiatan yang menunjang pembelajaran dalam bidang studi sesuai dengan Jurusan.</li>\r\n	<li>\r\n		Lab Bahasa Inggris, yang memungkinkan pengembangan bahasa Inggris mahasiswa untuk berkompetisi dalam lingkungan bisnis global.</li>\r\n	<li>\r\n		Ruangan kelas yang cukup representatif, dilengkapi dengan OHP atau LCD. Setiap kelas dibatasi sampai maksimal 45 orang sehingga proses belajar mengajar akan lebih efektif.</li>\r\n</ul>\r\n<p>\r\n	<strong>Fasilitas penunjang :</strong><br />\r\n	Fasilitas penunjang terdiri dari fasilitas untuk olah raga (Gedung Olah Raga = GOR untuk basket, voli, bulu tangkis, dan tenis meja), lapangan olah raga tenis serta panjat dinding, dan masjid kampus. Fasilitas lainnya adalah internet gratis, dan akses perpustakaan yang tidak hanya akses perpustakaan AKTI tetapi juga perpustakaan perguruan tinggi lain yang ada kerjasama dengan AKTI.</p>\r\n', 'fasilitas.jpg', 'N', '2015-11-01 22:02:52'),
(31, 'Kemahasiswaan', '   <p>\r\nOrganisasi Kemahasiswaan Politeknik Pos Indonesia merupakan nonstruktural pada organisasi Politeknik Pos Indonesia yang ditetapkan berdasarkan aturan yang berlaku yang merupakan wahana, sarana pengembangan diri mahasiswa kearah pengembangan wawasan dan peningkatan kemampuan intelektualnya serta integritas pribadi. Hal ini dapat diwujudkan dalam bentuk daya nalar dan daya analisis yang kuat yang dituangkan pada saat melakukan penyusunan program dan kegiatan kemahasiswaan. Kegiatan pengembangan kemahasiswaan dikelompokan atas dasar:\r\n</p>\r\n<p><ol>\r\n<li>Penalaran dan Keilmuan.</li>\r\n<p>\r\nKebutuhan pokok untuk pengembangan penalaran dan keilmuan harus dipenuhi oleh seorang mahasiswa pada saat menuntut Ilmu di Perguruan tinggi. Pemenuhannya dapat dilakukan melalui kegiatan kurikuler seperti dalam perkuliahan dan pelatihan yang diikuti dengan dengan kegiatan penalaran dan keilmuan esktra kurikuler. Kegiatan ini bertujuan untuk menanamkan sikap ilmiah, merangsang daya kreasi dan inovasi, meningkatkan kemampuan meneliti dan menulis karya ilmiah, pemahaman profesi, dan kerjasama mahasiswa dalam tim baik secara internal maupun eksternal. Kegiatan ini dalam berbentuk:\r\n</p>\r\n<ul>\r\n<li>Stadium general/symposium/seminar,</li>\r\n<li>Pekan Ilmiah Mahasiswa Tingkat Nasional (PIMNas),</li>\r\n<li>Pengembangan Kreativitas Mahasiswa (PKM),</li>\r\n<li>Lomba Karya Tulis Mahasiswa (LKTM),</li>\r\n<li>Mahasiswa Berprestasi Tingkat Nasional (Mawapres), dan</li>\r\n<li>Kegiatan lainnya yang sejenis.</li>\r\n</ul>\r\n<li>Minat, Bakat, dan Kemampuan.</li>\r\n<p>\r\nKegiatan ini bertujuan untuk meningkatkan kemampuan mahasiswa dalam manajemen praktis, berorganisasi, menumbuhkan apresiasi terhadap olahraga dan seni,  cinta alam, jurnalistik, dan baktisosial. Kebutuhan pokok  minat, bakat dan kemampuan ini dapat dipenuhi melalui kegiatan:\r\n</p>\r\n<ul>\r\n<li>Latihan Keterampilan Manajemen Mahasiswa (LKMM),</li>\r\n<li>Kegiatan Olah Raga,</li>\r\n<li>Kesenian(musik, seni tari tradisional/modern),</li>\r\n<li>Mahasiswa Pecinta Alam (Mapala),</li>\r\n<li>Kewirausahaan, dan  Himpunan Pengusaha Muda Indonesia (HIPMI),</li>\r\n<li>Pres Kampus, dan</li>\r\n<li>Kegiatan lainnya yang sejenis.</li>\r\n</ul>\r\n<li>Kesejahteraan.</li>\r\n<p>\r\nBertujuan untuk meningkatkan kesejahteraan fisik, mental, dan kerohanian mahasiswa. Kegiatan ini dipenuhi dalam bentuk:\r\n</p>\r\n<ul>\r\n<li>Beasiswa(dari DIKTI,PT Pos Indonesia,YPBPI,LKMS Net,Baznas,dll),</li>\r\n<li>Asuransi kecelakaan,</li>\r\n<li>Asrama Mahasiswa,</li>\r\n<li>Koperasi Mahasiswa (Kopma)/Pusat Inkubator Bisnis,</li>\r\n<li>Kegiatan Kerohaniaan, dan</li>\r\n<li>Kegiatan lainnya yang sejenis.</li>\r\n</ul>\r\n<li>Kepedulian Sosial.</li>\r\n<p>\r\nKegiatan ini bertujuan untuk meningkatkan pengabdian pada masyarakat, menanamkan rasa persatuan dan kesatuan bangsa, menumbuhkan kecintaan kepada tanah air dan lingkungan, kesadaran kehidupan bermasyarakat, berbangsa, dan bernegara. Kegiatan ini dilakukan dalam bentuk:\r\n</p>\r\n<ul>\r\n<li>Pelatihan Pendidikan,</li>\r\n<li>Kegiatan Donor Darah,</li>\r\n<li>Pencegahan Penyalahgunaan Narkoba,</li>\r\n<li>Pengembangan Desa Binaan, dan</li>\r\n<li>Kegiatan lainnya yang sejenis.</li>\r\n</ul>\r\n<li>Kegiatan Penunjang.</li>\r\n<ol>\r\n<li>Kegiatan-kegiatan yang bertujuan untuk meningkatkan sikap dan kemampuan dalam membimbing kegiatan kemahasiswaan. Kegiatan ini dalam berbentuk:</li>\r\n<ul>\r\n<li>Pelatihan Pelaksana Character Building mahasiswa baru,</li> \r\n<li>Pelatihan Pelatih Latihan Keterampilan Manajemen Mahasiswa (PP-LKMM),</li>  \r\n<li>Pelatihan Pembimbing Pendamping Penalaran Mahasiswa (PPPM), dan</li> \r\n<li>Kegiatan lainnya yang sejenis.</li>\r\n\r\n</ul>\r\n<li>Kegitan-kegitan yang bertujuan untuk meningkatkan sarana dan prasarana kegiatan kemahasiswaan.Kegiatan ini dalam berbentuk: </li>\r\n<ul>\r\n<li>Pengembangan sistem informasi kemahasiswaan,</li>\r\n<li>Pengadaan dan pemeliharaan sarana dan prasarana kegiatan kemahasiswaan (student center), dan</li> \r\n<li>Kegiatan lainnya yang sejenis.</li>\r\n</ul>\r\n</ol>\r\n</ol></p>\r\n', 'kemahasiswaan.jpg', 'N', '2015-11-01 22:12:17'),
(32, 'Unit Kegiatan Mahasiswa', ' <p>\r\nUnit Kegiatan Mahasiswa (UKM), merupakan wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian tertentu bagi para anggota-anggotanya. Organisasi ini berfungsi sebagai wadah untuk merencanakan, melaksanakan, dan mengembangkan kegiatan ekstrakurikuler di tingkat perguruan tinggi yang bersifat penalaran dan keilmuan, minat dan kegemaran, kerohanian, kesejahteraan mahasiswa, serta pengabdian pada masyarakat.\r\n</p>\r\n<p>\r\nUnit Kegiatan Mahasiswa terdiri dari 5(lima) kelompok minat:\r\n</p>\r\n<p><ol>\r\n<li>Unit-unit Kegiatan Olahraga (Futsal, Basket, Voli, Badminton, Tenis Lapangan, Tenis Meja, Taekwondo, Pencak Silat, Panjat Tebing).</li>\r\n<li>Unit-unit Kegiatan Kesenian dan Kebudayaan (Padus, Musik/Band, Seni tari tradisional dan modern).</li>\r\n<li>Unit-unit Keilmuan dan Kewirausahaan (HIPMI, IMA, dan English Debat Club).</li>\r\n<li>Unit Kerohanian (Hindu, Nasrani, dan Muslim).</li>\r\n<li>Unit Khusus (Pers Kampus, Koperasi Mahasiswa, dan lainnya).</li> \r\n</ol></p>\r\n\r\n', 'kegiatanmahasiswa.jpg', 'N', '2015-11-01 22:13:49'),
(33, 'Bidang Olahraga', 'Unit-unit Kegiatan Olahraga terdiri dari Futsal, Basket, Voli, Badminton, Tenis Lapangan, Tenis Meja, Taekwondo, Pencak Silat, Panjat Tebing.\r\n', 'olahraga.png', 'N', '2015-11-01 22:15:11'),
(36, 'Prestasi Mahasiswa', '<p><strong>POLITEKNIK POS INDONESIA PERTAHANKAN JUARA UMUM</strong></p><p><div align=\"justify\">\r\n\r\nMenjadi Peserta Olimpiade Akuntansi yang mampu Juara I dua berturut-turut\r\nBandung,\r\n\r\nMeskipun team 2, dan 3 Politeknik Pos Indonesia gagal menjuarai National Accounting Olympiad (NAO) namun tidak halnya dengan team 1 Politeknik Pos Indonesia yang dapat menjuarai National Accounting Olympiad (NAO) yang diselenggarakan oleh IAI Jabar – Polban. National Accounting Olympiad (NAO) yang diikuti 24 team Peserta Mahasiswa pendidikan vokasi (diploma) baik D1, D3 ataupun D4 se-Indonesia merupakan lomba akuntansi bagi mahasiswa pendidikan vokasi (diploma) perguruan tinggi di Indonesia untuk memperebutkan piala IAI Jabar. Kegiatan ini diharapkan dapat menambah wawasan dan menguji kemampuan mahasiswa juga mempererat silaturahmi mahasiswa akuntansi pendidikan vokasi se-Indonesia. Pada Babak Final, Poltek Pos Indonesia mengalahkan 4 peserta dari 5 peserta (Widyatama 2, Polmen, Polban 1 dan Bina Insani) mengikuti tahapan Extraordinary Round (cerdas cermat) dengan kedudukan akhir Poltek Pos 2075, Polban, 1787,5, Widyatama 1012,5, Polmen 237,5 dan Bina Insani 200.</div>\r\n</p>', 'prestasi.jpg', 'N', '2015-11-01 22:17:53'),
(37, 'Alumni', '<p>selengkapnya di <a href=\"http://www.alumni.poltekpos.ac.id/beranda\" target=\"_blank\" >ALUMNI POLTEKPOS<a></p>\r\n', 'alumni.png', 'N', '2015-11-01 22:18:58'),
(38, 'Keunggulan', '<p>\r\n	Belum ada data</p>\r\n', 'keunggulan.png', 'N', '2021-01-18 11:35:03'),
(39, 'Inovasi', '<p>\r\n	Belum ada data</p>\r\n', 'inovasi.jpg', 'N', '2021-01-18 11:43:04'),
(40, 'Kurikulum TPMO', '<p>\n	Halaman ini diisi Kurikulum Prodi Teknik Pemeliharaan Mesin Otomasi</p>\n', 'kurikulum.jpg', 'N', '2021-01-25 16:00:03'),
(41, 'Kurikulum TOPKR4', '<p>\n	Halaman ini diisi Kurikulum Prodi Tata Operasi Peraktian Kendaraan Roda 4</p>\n', 'kurikulumTOPKR4.jpg', 'N', '2021-01-25 16:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_judul` varchar(50) NOT NULL,
  `tag_seo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_judul`, `tag_seo`) VALUES
(3, 'Pengumuman', 'pengumuman'),
(4, 'Quiz', 'quiz'),
(5, 'Ukm', 'ukm');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_nama` varchar(100) NOT NULL,
  `testimonial_sumber` varchar(100) NOT NULL,
  `testimonial_kerja` varchar(200) NOT NULL,
  `testimonial_jabatan` varchar(200) NOT NULL,
  `testimonial_deskripsi` text NOT NULL,
  `testimonial_gambar` varchar(100) NOT NULL,
  `testimonial_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_nama`, `testimonial_sumber`, `testimonial_kerja`, `testimonial_jabatan`, `testimonial_deskripsi`, `testimonial_gambar`, `testimonial_waktu`) VALUES
(5, 'Nava Gia Ginasta, S.Tr.Kom., M.Kom, CISA', 'Lulusan', 'PT Crop Inspirasi Digital', 'Direktur Utama', '<p>\n	<font color=\"#000000\">Akademi Komunitas Toyota Indonesia memberikan materi pembelajaran yang sangat membantu pada dunia kerja</font></p>\n', 'kosong.png', '2015-11-22 03:54:50'),
(6, 'Amirul Chusni', 'Lulusan', 'Toyota Indonesia', 'Direktur', '<p>\n	<span style=\"font-size:12px;\"><span style=\"color:#000000;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: justify;\">Akademi Komunitas Toyota Indonesia didirikan untuk memenuhi kebutuhan tenaga kerja yang mempunyai kompetensi yang dibutuhkan dunia industri khususnya industri otomotif.</span></span></span></p>\n', '1611205610-Amirul.jpg', '2015-11-22 13:22:20'),
(8, 'Prof. Dr. Uman Suherman', '', 'LLDIKTI Wilayah 4 Jawa Barat dan Banten', 'Kepala', '<p>\n	<span style=\"font-size:14px;\">Akademi Komunitas Toyota Indonesia bisa lebih istimewa karena potensi itu sudah tersedia</span></p>\n', 'kosong.png', '2021-01-20 08:31:45'),
(9, 'M.Scandy.Pradapta.P', 'Mahasiswa', 'Institut Teknologi Nasional ', 'Mahasiswa', 'Menurut saya Akademi Komunitas Toyota Indonesia Ini suatu terebosan yang sangat bagus karena meningkatkan minat dan bakat pada bidang otomotif khususnya', '5.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_profile` varchar(50) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_level_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_profile`, `user_email`, `user_password`, `user_created_at`, `admin_level_kode`) VALUES
(24, 'Anggito Achmad', 'profile.jpg', 'anggitoachmad21@gmail.com', '$2y$10$G7xWkB1khwFwkUj7GnZSkuYnAcqgHvYKEJPdyFLToE4SnI7Ufj0OW', '2021-07-26 00:27:14', 1),
(32, 'Dimas', 'WIN_20181019_11_07_33_Pro.jpg', 'Dimas21@gmail.com', '$2y$10$k3.0DcQ9ZDGCMetHyXpsLuBermv.d/.m67bMbS77OxhNT.a1AlYli', '2021-07-29 20:33:00', 3),
(36, 'Ucut12', '', NULL, '$2y$10$vDdWlzu0b9BLpAajO2smnOXzu8XVv0QY.qJb3XPP4S8SkfxwGb75e', '2021-08-08 00:16:33', 2),
(39, 'Triana', '', NULL, '$2y$10$2cFFIZ1w.crIZgBd1AlxAenLZ29Ll4IvM5Dk8WvqV7p0Q1jdVmMvS', '2021-08-09 12:09:13', 3),
(41, 'rendi', '', NULL, '$2y$10$dWff1HwCGCiwFMyKaOfvnuG.rMGaYvwY4VSxH0p/zJk2PxuErZsOW', '2021-08-25 04:49:26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_user`) USING BTREE;

--
-- Indexes for table `admin_level`
--
ALTER TABLE `admin_level`
  ADD PRIMARY KEY (`admin_level_kode`) USING BTREE,
  ADD KEY `admin_level_nama` (`admin_level_nama`),
  ADD KEY `admin_level_status` (`admin_level_status`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`) USING BTREE;

--
-- Indexes for table `akti_akademik`
--
ALTER TABLE `akti_akademik`
  ADD PRIMARY KEY (`akademik_id`) USING BTREE;

--
-- Indexes for table `akti_assesor`
--
ALTER TABLE `akti_assesor`
  ADD PRIMARY KEY (`assesor_id`) USING BTREE;

--
-- Indexes for table `akti_contact`
--
ALTER TABLE `akti_contact`
  ADD PRIMARY KEY (`contact_id`) USING BTREE;

--
-- Indexes for table `akti_dosen`
--
ALTER TABLE `akti_dosen`
  ADD PRIMARY KEY (`dosen_id`) USING BTREE;

--
-- Indexes for table `akti_fakta`
--
ALTER TABLE `akti_fakta`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `akti_fasilitas`
--
ALTER TABLE `akti_fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`) USING BTREE;

--
-- Indexes for table `akti_pertanyaan`
--
ALTER TABLE `akti_pertanyaan`
  ADD PRIMARY KEY (`pertanyaan_id`) USING BTREE;

--
-- Indexes for table `akti_program_studi`
--
ALTER TABLE `akti_program_studi`
  ADD PRIMARY KEY (`prodi_id`) USING BTREE;

--
-- Indexes for table `akti_shortcourse`
--
ALTER TABLE `akti_shortcourse`
  ADD PRIMARY KEY (`sc_id`) USING BTREE;

--
-- Indexes for table `akti_shortcourse_program`
--
ALTER TABLE `akti_shortcourse_program`
  ADD PRIMARY KEY (`shortcourse_id`) USING BTREE;

--
-- Indexes for table `akti_skema_sertifikasi`
--
ALTER TABLE `akti_skema_sertifikasi`
  ADD PRIMARY KEY (`skema_id`) USING BTREE;

--
-- Indexes for table `akti_unit_kompetensi`
--
ALTER TABLE `akti_unit_kompetensi`
  ADD PRIMARY KEY (`unit_id`) USING BTREE;

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`) USING BTREE;

--
-- Indexes for table `album_galeri`
--
ALTER TABLE `album_galeri`
  ADD PRIMARY KEY (`galeri_id`) USING BTREE,
  ADD KEY `album_id` (`album_id`) USING BTREE;

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`) USING BTREE,
  ADD KEY `kategori_id` (`kategori_id`) USING BTREE;

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`) USING BTREE,
  ADD KEY `word` (`word`) USING BTREE;

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`download_id`) USING BTREE;

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`video_id`) USING BTREE;

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`identitas_id`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`) USING BTREE;

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`) USING BTREE,
  ADD KEY `berita_id` (`berita_id`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_kode`) USING BTREE;

--
-- Indexes for table `menu_admin`
--
ALTER TABLE `menu_admin`
  ADD PRIMARY KEY (`menu_admin_kode`) USING BTREE,
  ADD KEY `menu_kode` (`menu_kode`) USING BTREE,
  ADD KEY `admin_level_kode` (`admin_level_kode`) USING BTREE;

--
-- Indexes for table `menu_sidebar`
--
ALTER TABLE `menu_sidebar`
  ADD PRIMARY KEY (`menu_kode_sidebar`);

--
-- Indexes for table `mitra_kerja`
--
ALTER TABLE `mitra_kerja`
  ADD PRIMARY KEY (`mitra_id`) USING BTREE;

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`news_id`) USING BTREE;

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`portal_id`) USING BTREE;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`) USING BTREE,
  ADD KEY `last_activity_idx` (`last_activity`) USING BTREE;

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`) USING BTREE;

--
-- Indexes for table `statis`
--
ALTER TABLE `statis`
  ADD PRIMARY KEY (`statis_id`) USING BTREE;

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`) USING BTREE;

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `admin_level_kode` (`admin_level_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_level`
--
ALTER TABLE `admin_level`
  MODIFY `admin_level_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `akti_akademik`
--
ALTER TABLE `akti_akademik`
  MODIFY `akademik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `akti_assesor`
--
ALTER TABLE `akti_assesor`
  MODIFY `assesor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akti_contact`
--
ALTER TABLE `akti_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `akti_dosen`
--
ALTER TABLE `akti_dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `akti_fakta`
--
ALTER TABLE `akti_fakta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `akti_fasilitas`
--
ALTER TABLE `akti_fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akti_pertanyaan`
--
ALTER TABLE `akti_pertanyaan`
  MODIFY `pertanyaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akti_program_studi`
--
ALTER TABLE `akti_program_studi`
  MODIFY `prodi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `akti_shortcourse`
--
ALTER TABLE `akti_shortcourse`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `akti_shortcourse_program`
--
ALTER TABLE `akti_shortcourse_program`
  MODIFY `shortcourse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `akti_skema_sertifikasi`
--
ALTER TABLE `akti_skema_sertifikasi`
  MODIFY `skema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `akti_unit_kompetensi`
--
ALTER TABLE `akti_unit_kompetensi`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `album_galeri`
--
ALTER TABLE `album_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2606;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `identitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `menu_admin`
--
ALTER TABLE `menu_admin`
  MODIFY `menu_admin_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `menu_sidebar`
--
ALTER TABLE `menu_sidebar`
  MODIFY `menu_kode_sidebar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mitra_kerja`
--
ALTER TABLE `mitra_kerja`
  MODIFY `mitra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `portal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statis`
--
ALTER TABLE `statis`
  MODIFY `statis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
