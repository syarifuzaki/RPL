-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 06:53 AM
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
(10, 'unnamed.jpg', 44798, 'image/jpeg', 'Raker 2016 (1) 123'),
(11, 'raker 1 (2).jpeg', 237979, 'image/jpeg', 'Raker 2016 (2)'),
(12, 'raker 1 (3).jpeg', 220411, 'image/jpeg', 'Raker 2016 (3)'),
(13, 'raker 1 (4).jpeg', 274462, 'image/jpeg', 'Raker 2016 (4)'),
(14, 'hari ibu 1.jpeg', 211562, 'image/jpeg', 'Hari Ibu (1)'),
(15, 'hari ibu 2.jpeg', 289361, 'image/jpeg', 'Hari Ibu (2)'),
(16, 'hari ibu 3.jpeg', 286715, 'image/jpeg', 'Hari Ibu (3)'),
(17, 'hari ibu 4.jpeg', 258411, 'image/jpeg', 'Hari Ibu (4)'),
(18, 'hari ibu 5.jpeg', 212224, 'image/jpeg', 'Hari Ibu (5)'),
(19, 'iht uns 2016 1.jpeg', 189841, 'image/jpeg', 'IHT UNS 2016 (1)'),
(20, 'iht uns 2016 2.jpeg', 258875, 'image/jpeg', 'IHT UNS 2016 (2)'),
(21, 'iht uns 2016 3.jpeg', 143482, 'image/jpeg', 'IHT UNS 2016 (3)'),
(22, 'iht uns 2016 4.jpeg', 244443, 'image/jpeg', 'IHT UNS 2016 (4)'),
(23, 'Fosma Berqurban 2015 2.jpeg', 339787, 'image/jpeg', 'Fosma Berqurban 2015'),
(24, 'Fosma Berqurban 2015 3.jpeg', 314181, 'image/jpeg', 'Fosma Berqurban 2015 (2)'),
(25, 'Fosma Berqurban 2015 4.jpeg', 256960, 'image/jpeg', 'Fosma Berqurban 2015 (3)'),
(26, 'Fosma Berqurban 2015 5.jpeg', 223045, 'image/jpeg', 'Fosma Berqurban 2015 (4)'),
(27, 'Fosma Berqurban 2015.jpeg', 248307, 'image/jpeg', 'Fosma Berqurban 2015 (5)'),
(28, 'maintenance 1.jpeg', 165938, 'image/jpeg', 'Maintenance 2017 (1)'),
(29, 'maintenance 2.jpeg', 187996, 'image/jpeg', 'Maintenance 2017 (2)'),
(30, 'maintenance 3.jpeg', 214980, 'image/jpeg', 'Maintenance 2017 (3)'),
(31, 'maintenance 4.jpeg', 183314, 'image/jpeg', 'Maintenance 2017 (4)'),
(32, 'WhatsApp Image 2017-05-16 at 23.44.59.jpeg', 215092, 'image/jpeg', 'PUU Solo Angkatan II (1)'),
(33, 'WhatsApp Image 2017-05-16 at 23.44.59 (2).jpeg', 221424, 'image/jpeg', 'PUU Solo Angkatan II (2)'),
(34, 'WhatsApp Image 2017-05-16 at 23.44.59 (4).jpeg', 178083, 'image/jpeg', 'PUU Solo Angkatan II (3)'),
(35, 'WhatsApp Image 2017-05-16 at 23.44.59.jpeg', 215092, 'image/jpeg', 'PUU Solo Angkatan II (4)');

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
('31312312', 'qwewqe', 'qeeqeqweq', 'FIB'),
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
('Berkunjung ke Fosma Lain', '2017-05-04', 'Berkunjung ke fosma daerah lain dan sharing antar fosma'),
('bismillah bisa', '2016-12-12', 'bismillahiraohmanirahim'),
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
('Sejarah FOSMA UNS Solo', '<p>Pada mulanya Fosma bukan pergerakan yang menyebar &nbsp;ke setiap pelosok daerah di Indonesia seperti yang ada saat ini. Fosma lahir dari sebuah pengajian yang dilakukan rutin sebulan sekali. Meski anggota yang hadir pengajian pada waktu itu sedikit. Namun isi dari pengajian yang berkualitas, menjadikan para anggotanya memiliki pribadi yang memiliki semangat tinggi. Semangat tinggi untuk mendekat pada Ilahi, menuntut ilmu dan menjalin silaturahmi. Kepekaan dan kepedulian akan kondisi masyarakat yang jauh dari nilai-nilai islam dan moral membuat para anggota pengajian memiliki gagasan untuk melakukan perubahan untuk Indonesia. Kemudian didirikanlah Fosma, oleh Satria Wicaksono delapan tahun lalu.</p>\r\n\r\n<p>Pendirian FOSMA 165 di berbagai daerah tidak lepas dari peran Obbie Solichin, salah satu pionir FOSMA 165 yang saat itu bekerja di ARP (bagian card center). Di setiap training ESQ yang diselenggarakan di daerah-daerah, Obbie selalu &lsquo;memprovokasi&rsquo; alumni-alumni mahasiswa untuk mendirikan FOSMA 165 di tempatnya masing-masing. Tawaran Obbie disambut dengan sangat hangat oleh teman-teman daerah. Ternyata teman-teman di daerah juga memiliki visi yang sama, yaitu membangun wadah untuk berjuang menyebarkan 165.</p>\r\n\r\n<p>Sebelum FKA ESQ berdiri, FOSMA 165 telah menjalar ke hampir seluruh daerah yang pernah mengadakan training ESQ. Persaudaraan antar FOSMA 165 semakin erat setelah pada bulan Februari tahun 2007 berhasil diadakan Munas dan Rakernas untuk pertama kalinya.</p>\r\n\r\n<p>Bentuk Total action FOSMA 165 tertuang dalam program kerja. Masing-masing daerah memiliki bentuk-bentuk perjuangan yang berbeda-beda, bahkan bisa dibilang masing-masing daerah memiliki ciri khas masing-masing. FOSMA 165 Jogjakarta terkenal dengan Seminar dan Workshop Corporate Social Responsibility (CSR)-nya. FOSMA 165 Jawa Barat terkenal dengan Youth Camp dan kegiatan-kegiatan bertemakan &lsquo;Rudi dan Sikat Gigi&rsquo;-nya. FOSMA 165 Bekasi sering diundang oleh SMP dan SMA dari berbagai kota, bahkan oleh Lembaga Permasyarakatan (Lapas) Anak, untuk memberikan training motivasi, LDKS (Latihan Dasar Kepemimpinan Sekolah), GeMAH (Gerakan Moral Asmaul Husna), dan Seminar.</p>\r\n\r\n<p>Freesex, Aborsi, dan Narkoba. FOSMA 165 Jadetabek hadir dengan ide kegiatan &lsquo;1000 Senyum Ramadhan&rsquo; dan training khusus aktivis BEM yang lebih dikenal dengan training Generasi Emas (GE). Namun, kegiatan yang pasti dimiliki oleh setiap cabang FOSMA 165 adalah kegiatan sosial. Kegiatan sosial tersebut bisa bermacam-macam seperti donor darah, penjualan sembako murah, pengobatan gratis, santunan anak yatim piatu, sampai aksi cepat tanggap penanggulangan bencana alam.</p>\r\n\r\n<p>FOSMA 165 juga bersinergi dengan ESQ LC dan FKA ESQ dalam menjalankan program-programnya seperti membantu mengkoordinir ATS (Alumni Training Support) dan membantu acara-acara yang diselenggarakan oleh FKA ESQ. Bentuk lain dari sinergitas FOSMA 165 dengan ESQ LC adalah dalam upaya mengganti Ospek yang penuh penggojlokan fisik dan mental dengan training ESQ. Upaya FOSMA 165 dalam mewujudkan tujuan tersebut dengan mengadakan training Generasi Emas (GE) khusus aktivis BEM. Ketua FOSMA 165 Indonesia, Fauzi Manurung, merupakan pencetus ide tersebut. Saat itu Fauzi masih menjadi Ketua Bidang Penelitian dan Pengembangan FOSMA 165 DKI Jakarta (sebelum berubah nama menjadi FOSMA 165 Jadetabek). &ldquo;Ide itu (membuat training GE) muncul karena kita merasa perlu untuk mengembangkan FOSMA 165 sampai ke kampus-kampus untuk menggantikan kegiatan Ospek dengan training ESQ,&rdquo; katanya. &ldquo;Sejak itu grafik swagriya training ESQ mahasiswa meningkat sangat tajam.&rdquo; Oleh FOSMA 165 DKI Jakarta, ide training GE dilempar ke daerah-daerah, dan sekarang sudah banyak FOSMA 165 di daerah yang mengadakan training GE.</p>\r\n\r\n<p>Seiring makin banyaknya swagriya training ESQ mahasiswa, makin banyak pula FOSMA 165 komisariat kampus berdiri. FOSMA 165 komisariat ini kemudian bersinergi dengan BEM universitas maupun fakultas dalam mengadakan acara-acara.</p>\r\n\r\n<p>FOSMA 165/ FOSMA ESQ UNS diharapkan menjadi wadah terbentuknya karakter mahasiswa-mahasiswa yang kuat secara , spiritual, &nbsp;intelektual, dan moral, sehingga kelak mereka akan menjadi pelaku utama pembangunan sosial, budaya, ekonomi, politik dan IPTEK Indonesia di masa yang akan datang.</p>\r\n\r\n<ul>\r\n	<li>Visi\r\n	<ol>\r\n		<li>Terwujudnya sistem dan struktur FOSMA yang berasaskan kekeluargaan dalam rangka membentuk mahasiswa yang kokoh dalam karakter, spiritual,&nbsp;intelektual, dan moral.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Misi\r\n	<ol>\r\n		<li>Mengoptimalkan pola koordinasi antar departemen.</li>\r\n		<li>Mengoptimalkan sistem kaderisasi dalam rangka membentuk mahasiswa yang berkarakter, berspiritual, berintelektual, dan bermoral.</li>\r\n		<li>Memperkuat eksistensi FOSMA di tingkatan Fakultas dan Universitas.</li>\r\n		<li>Pemberdayaan kader untuk mengoptimalkan pergerakan FOSMA.</li>\r\n		<li>Mengoptimalkan nilai-nilai 165 di lingkungan Fakultas dan Universitas.</li>\r\n		<li>Mensinergikan nilai-nilai 7 budi utama dengan ACTIVE di lingkungan Universitas.</li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
