-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 05:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fosma`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `deskripsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `ukuran`, `tipe`, `deskripsi`) VALUES
(1, 'IMG20160827195521.jpg', 1836913, 'image/jpeg', 'IHT 2016'),
(2, 'IMG-20160911-WA0019.jpg', 151286, 'image/jpeg', 'IHT UNS 2016'),
(3, 'IMG-20160828-WA0024.jpg', 117791, 'image/jpeg', 'IHT UNS 2016'),
(4, 'IMG_0685.jpg', 2054523, 'image/jpeg', 'Fosma Berqurban');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'rpl2017');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`nim`, `nama`, `jabatan`, `fakultas`) VALUES
('2014051', 'Arni Yuliana', 'Divisi Sosma', 'FK'),
('B0215036', 'Linda Fatmala', 'Sekertaris', 'FIB'),
('B0315021', 'Fatimah Az-Zahroh', 'Divisi Kerohanian', 'FIB'),
('B0315032', 'Khoiruddin Yusup', 'Divisi BUF', 'FIB'),
('B0315038', 'Muhammad Afandy (Alm)', 'Divisi Humas', 'FIB'),
('B0515025', 'Miftakhul Jannah', 'Divisi Training', 'FIB'),
('B0515046', 'Angga Ramdani', 'Divisi Kerohanian', 'FIB'),
('C0513002', 'Afrial Anugrahadi', 'Koordinator Eksernal', 'FIB'),
('C1014006', 'Ayu Solichah', 'Divisi Kerohanian', 'FIB'),
('D0215018', 'Arwani Masykur Zakki', 'Divisi Kerohanian', 'FISIP'),
('E0014072', 'Cahyaning Ayu Camella Putri', 'Divisi BUF', 'FH'),
('E0014126', 'Elyana Safitri', 'Divisi BUF', 'FH'),
('F0315032', 'Fesa Budhiyarsih', 'Bendahara', 'FEB'),
('H0414015', 'Delima Canda Mustika', 'Divisi Training', 'FP'),
('H0414039', 'Rumiati Khasanah', 'Sekertaris', 'FP'),
('H0415034', 'Lulu Karimatul Azizah', 'Divisi PSO', 'FP'),
('H3415015', 'Danuta Savitskaya Gisyamadia', 'Divisi Training', 'FP'),
('K3114050', 'Tubagus Mohammad Irma Ari Irawan', 'Ketua Umum', 'FKIP'),
('K3115036', 'Nadia La Tsaniya', 'Divisi BUF', 'FKIP'),
('K3115048', 'Ridlo Pratama Saeful Millah', 'Divisi PSO', 'FKIP'),
('K3115055', 'Sofi Maharani Putri', 'Divisi Kerohanian', 'FKIP'),
('K3315002', 'Afifah Nur Aini', 'Divisi Humas', 'FKIP'),
('K3315014', 'Khusni Akhsanu Nadiyya', 'Divisi Humas', 'FKIP'),
('K3514036', 'Nurul Rizkanafiah', 'Divisi Humas', 'FKIP'),
('K4215022', 'Dwi Nurul Purwanti', 'Divisi PSO', 'FKIP'),
('K4315058', 'Salsabila Ayu Untari', 'Divisi Training', 'FKIP'),
('K6414004', 'Ahmad Ahadi Yusuf Setyawan', 'Divisi Training', 'FKIP'),
('M0213080', 'Rivaldi Hafiz', 'Divisi Humas', 'FMIPA'),
('M0515018', 'Ibrohim Habiburrohman', 'Koordinator Internal', 'FMIPA'),
('M0515019', 'Boim', 'Wakil Ketua', 'FMIPA'),
('R0314051', 'Rizky Muzanti', 'Bendahara', 'FK');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `nama_proker` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`nama_proker`, `tanggal`, `deskripsi`) VALUES
('Berkunjung ke FKA', '2017-03-29', 'Berkunjung ke rumah FKA'),
('Berkunjung ke Fosma Lain', '2017-05-04', 'Berkunjung ke fosma daerah lain dan sharing antar fosma'),
('BON CABE (Outbound Ceria Bersama Fosma)', '2017-07-31', 'Mengajak komunitas untuk bermain (outbound) dan belajar bersama berbagi ilmu dan manfaat'),
('Buku Pedoman Pengurus', '2017-05-26', 'Membuat buku pedoman kepengurusan'),
('DAUS (Database Pengurus)', '2017-06-01', 'Membuat data pengurus berdasarkan curriculum vitae'),
('Diary Pengurus', '2017-06-04', 'Buku diary dibuat oleh masing-masing bidang sekreatif mungkin'),
('IHT', '2017-09-23', 'Membantu berjalannya IHT untuk menjadi ATS, sebagai tangan panjang trainer'),
('J3 (Jalan-Jalan Jualan)', '2017-04-25', 'Menjual makanan atau minumam di salah satu tempat (CFD, Sunday Morning, Sunday Market)'),
('Kas Bulanan Fosma 165 Solo', '2017-08-30', 'Membayar kas setiap bulan Rp 5.000/bulan selama masa kepengurusan'),
('Khifos (Khimar Fosma)', '2017-04-02', 'Menjual Khimar untuk pengurus dan anggota (perempuan)'),
('Lada (Jualan di Wisuda)', '2017-04-12', 'Menjual barang-barang atau pernak-pernik untuk wisuda'),
('MCB', '2016-03-25', 'Melakukan training ESQ tingkat kedua setelah basic'),
('Notulensi & Presensi Kehadiran', '2017-03-11', 'Membuat presensi kehadiran rapat pengurus dan merekap buku presensi setiap dua bulan sekali'),
('PDH (Pakaian Dalam Harian)', '2017-10-22', 'Menjual PDH kepada pengurus Fosma'),
('Pengelolaan hutang piutang dan segala urusan keuan', '2017-02-04', 'Pencatatan yang relevan dan reliable pada setiap transaksi internal maupun eksternal'),
('Penghimpunan dana sosial Fosma 165 Solo', '2016-12-07', 'Kegiatan sosial yang didanai oleh Dana Sosial Fosma 165 Solo adalah kegiatan sosial yang telah mendapatkan persetujuan dari Ketua Fosma 165 Solo'),
('Public Speaking', '2017-03-23', 'Membuat acara pelatihan public speaking'),
('PUU (Peduli Ustadz-Ustadzah)', '2017-02-04', 'Melakukan training ESQ untuk Ustadz Ustadzah'),
('RAGI (Ramadhan Berbagi)', '2017-04-09', 'Sahur on the road, lanjut subuh berbagi'),
('Silaturahmi bersama Demisioner', '2017-06-09', 'Buka bersama antara fosma dan demisioner'),
('Terasi (Transparansi Keuangan dan Inventarisasi)', '2017-03-09', 'Membuat buku yang digunakan untuk transparansi keuangan dan inventarisasi'),
('YO MAMEN (Ayo Makrab dan Maintenance CFH)', '2017-12-17', 'Melakukan makrab,  menyisipkan materi maintenance Communication From Heart');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `title` varchar(30) NOT NULL,
  `deskripsi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`title`, `deskripsi`) VALUES
('Sejarah FOSMA UNS Solo', '<p>Ahahahahahahahahahahaahhah</p>\r\n\r\n<p>Are you crazy?</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`nama_proker`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
