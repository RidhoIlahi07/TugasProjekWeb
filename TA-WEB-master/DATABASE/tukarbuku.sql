-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 09:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tukarbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Bambang');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `deskripsi` varchar(520) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `pengarang`, `tahun_terbit`, `deskripsi`) VALUES
(1, 'The Perfect Muslimah', 'Ahmad Rifai Rifan', 2017, 'The Perfect Muslimah. Indah akhlaknya, teduh parasnya, brilian otaknya, mantap ilmu agamanya, luas pergaulannya, dahsyat prestasinya, dan hebat kontribusinya. Auratnya terjaga, pergaulannya terjaga, perilakunya terjaga. Matanya berkilau oleh air mata takwa, bibirnya basah dengan untaian petuah, rambutnya tertutup oleh juluran jilbabnya. Biacaranya dakwah, pendengarannya tilawah, geraknya jihad fii sabilillah. \r\n\r\n\r\n\r\nHatinya penuh zikir, otaknya penuh pikir, dipercantik oleh terjaganya lahir. Kaulah gemintang yang '),
(2, 'Kaya Tujuh Turunan (Crazy Rich', 'Kevin Kwan', 2016, 'Ketika Rachel Chu, dosen ekonomi keturunan Cina, setuju untuk pergi ke Singapura bersama kekasihnya, Nick, ia membayangkan rumah sederhana, jalan-jalan keliling pulau, dan menghabiskan waktu bersama pria yang mungkin akan menikah dengannya itu. Ia tidak tahu bahwa rumah keluarga Nick bagai istana, bahwa ia akan lebih sering naik pesawat pribadi daripada mobil, dan dengan pria incaran se-Asia dalam pelukannya, Rachel seperti dimusuhi semua wanita.  Di dunia yang kemewahannya tak pernah terbayangkan oleh Rachel itu, '),
(3, 'Gadis Pesisir', 'Nunuk Y. Kusmiana', 2018, 'Kisah cinta berlatar Papua'),
(4, 'Seni Hidup Minimalis', 'Francine Jay', 2018, 'Pernahkah Anda menatap semua barang yang Anda beli, warisi, atau terima di rumah, dan merasa pengap, bukannya senang? Apakah Anda mengalami kesulitan mengatasi utang kartu kredit, bahkan tidak ingat lagi apa saja yang telah Anda beli? Pernahkah Anda berharap ada angin kencang yang meniup semua kekacauan di rumah agar Anda bisa memulai lembaran baru?    Buku ini bisa menjadi penyelamat Anda! Bagian pertama buku ini akan menumbuhkan pola pikir minimalis. Bagian kedua berisi metode STREAMLINEâ€”satu dari sepuluh tekni'),
(5, 'Hijrah Aja Dulu', 'Fahdmaya', 2019, 'Ketika seseorang ingin berhijrah, ada banyak yang mengatakan tidak pantas karena memiliki masa lalu yang kelam dan akhirnya ia selalu merasa hina. Tetapi, cobalah untuk hijrah aja dulu dan jangan jadikan masa lalumu sebagai alasan, sebab masa depanmu masih suci. Hijrah aja dulu, istikamah kemudian. Ini merupakan kata-kata yang pas bagi mereka yang mempunyai rasa takut tidak istikamah yang berlebihan. Ketahuilah, rasa takut itu hanyalah karena niat yang setengah-setengah. Saat kita sudah yakin dengan pilihan kita, i'),
(6, 'Young Adult: Satu Setengah Met', 'Rachael Lippincott, ', 2018, 'Bisakah kau mencintai seseorang yang tidak bisa kausentuh? Stella Grant suka memegang kendali. Hanya satu yang tak bisa dia kendalikan, yaitu penyakit fibrosis kistik yang membuatnya keluar masuk rumah sakit. Pada titik tersebut, yang harus Stella lakukan adalah menjauhkan diri dari siapa pun atau apa pun yang mungkin bisa menularkan infeksi dan menggagalkan transplantasi paru-paru. Terpisah dua meter. Tidak ada perkecualian.   Satu-satunya hal yang ingin Will Newman kendalikan adalah keluar dari rumah sakit. Dia t'),
(8, 'Komet', 'Tere Liye', 2018, 'Setelah â€œmusuh besarâ€ kami lolos, dunia paralel dalam situasi genting. Hanya soal waktu, pertempuran besar akan terjadi. Bagaimana jika ribuan petarung yang bisa menghilang, mengeluarkan petir, termasuk teknologi maju lainnya muncul di permukaan Bumi? Tidak ada yang bisa membayangkan kekacauan yang akan terjadi. Situasi menjadi lebih rumit lagi saat Ali, pada detik terakhir, melompat ke portal menuju Klan Komet. Kami bertiga tersesat di klan asing untuk mencari pusaka paling hebat di dunia paralel.   Buku ini b');

-- --------------------------------------------------------

--
-- Table structure for table `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id_buku` int(11) NOT NULL,
  `id_pengguna` varchar(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `deskripsi` varchar(520) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_donasi`
--

INSERT INTO `data_donasi` (`id_buku`, `id_pengguna`, `judul_buku`, `pengarang`, `tahun_terbit`, `deskripsi`, `status`) VALUES
(7, '1', 'Silly Gilly Daily', 'Naela Ali', 2019, 'Gilly is Silly and you\'re gonna see her daily', 1),
(8, '1', 'Komet', 'Tere Liye', 2018, 'Setelah â€œmusuh besarâ€ kami lolos, dunia paralel dalam situasi genting. Hanya soal waktu, pertempuran besar akan terjadi. Bagaimana jika ribuan petarung yang bisa menghilang, mengeluarkan petir, termasuk teknologi maju lainnya muncul di permukaan Bumi? Tidak ada yang bisa membayangkan kekacauan yang akan terjadi. Situasi menjadi lebih rumit lagi saat Ali, pada detik terakhir, melompat ke portal menuju Klan Komet. Kami bertiga tersesat di klan asing untuk mencari pusaka paling hebat di dunia paralel.   Buku ini b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `nama`) VALUES
(1, 'Subandi_aja', '123', 'Subandi');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_pengguna` text NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `nomor_tlp` varchar(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_pengguna`, `jenis_kelamin`, `nomor_tlp`, `email`, `status`) VALUES
(1, 'Kartono', '123', 'Pomnom', 'pria', '22222222', 'dddd', '');

-- --------------------------------------------------------

--
-- Table structure for table `tukar_buku`
--

CREATE TABLE `tukar_buku` (
  `id_tukar` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tukar_buku`
--

INSERT INTO `tukar_buku` (`id_tukar`, `id_pengguna`, `judul_buku`, `id_buku`, `status`) VALUES
(1, 1, 'Kaya Tujuh Turunan (Crazy Rich', 43, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tukar_buku`
--
ALTER TABLE `tukar_buku`
  ADD PRIMARY KEY (`id_tukar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tukar_buku`
--
ALTER TABLE `tukar_buku`
  MODIFY `id_tukar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
