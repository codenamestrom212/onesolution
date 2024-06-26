-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 03:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onesolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `total_harga` varchar(11) NOT NULL,
  `konfirmasi_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `kode_booking`, `id_login`, `id_produk`, `nama_perusahaan`, `nama`, `alamat`, `no_tlp`, `tanggal`, `total_harga`, `konfirmasi_pembayaran`) VALUES
(25, '1719320357', 3, 16, 'JNE', 'nadya', 'Pekajangan Kedungwuni', '08813741157', '2024-06-25', '500.000', 'Pembayaran diterima, Pesanan diproses'),
(26, '1719321023', 3, 16, 'JNE', 'nadya', 'Pekalongan', '0892233366', '2024-06-25', '500.000', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `infoweb`
--

CREATE TABLE `infoweb` (
  `id` int(11) NOT NULL,
  `nama_jasa` varchar(255) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_rek` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `infoweb`
--

INSERT INTO `infoweb` (`id`, `nama_jasa`, `telp`, `alamat`, `email`, `no_rek`, `updated_at`) VALUES
(1, 'One Solution', '085647773475', 'Kota Pekalongan Jawa Tengah', 'onesolution309@gmail.com', 'DANA A/N Adiba Shofwatun Naja 08813741157', '2022-01-24 04:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Aryo', 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 'admin'),
(3, 'Krisna Waskita', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_booking` int(255) NOT NULL,
  `no_rekening` int(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_booking`, `no_rekening`, `nama_rekening`, `nominal`, `tanggal`) VALUES
(13, 25, 2147483647, 'nanad', '500.000', '2024-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `denda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `merk`, `harga`, `deskripsi`, `status`, `gambar`) VALUES
(11, 'PAKET STARTUP', '15.000.000 - 20.000.000', 'Meliputi :\r\n<li>Menentukan konsep menu <br>\r\n<li>Membuat HPP & harga jual <br>\r\n<li>Rekrutmen karyawan <br>\r\n<li>Equipment & utensil <br>\r\n<li>Info suplier & pelatihan karyawan <br>\r\n\r\n<ul class=\"list-group list-group-flush\">\r\n                    <?php if($hasil[\'status\'] == \'Tersedia\'){?>\r\n                    <li class=\"list-group-item bg-primary text-white\">\r\n                        <i class=\"fa fa-check\"></i> Available\r\n                    </li>\r\n                    <li class=\"list-group-item bg-info text-white\"><i class=\"fa fa-check\"></i>\r\n                    Pendampingan bisnis dan konsultasi selama 1 bulan\r\n                    <ul>setelah Grand Opening</ul>\r\n                    </li>\r\n                    <li class=\"list-group-item bg-dark text-white\">\r\n                        <i class=\"fa fa-check\"></i> Training & coaching SDM\r\n                    </li>\r\n                </ul>', 'Tersedia', '1719068276.jpeg'),
(12, 'PAKET DIGITAL CONTENT', '1.500.000', 'Meliputi :\r\n<li>Design dan pembuatan website</li>\r\n<li>Digital marketing Google Ads & Google SEO</li>\r\n<li>Foto & video product</li>\r\n\r\n<ul class=\"list-group list-group-flush\">\r\n                    <?php if($hasil[\'status\'] == \'Tersedia\'){?>\r\n                    <li class=\"list-group-item bg-primary text-white\">\r\n                        <i class=\"fa fa-check\"></i> Available\r\n                    </li>\r\n                    <li class=\"list-group-item bg-info text-white\"><i class=\"fa fa-check\"></i>\r\n                    Konten dan optimasi media sosial\r\n                    <ul>beserta iklan selama 3 bulan awal</ul>\r\n                    </li>\r\n                    <li class=\"list-group-item bg-dark text-white\">\r\n                        <i class=\"fa fa-check\"></i> BrandKit identity dan logo\r\n                    </li>\r\n                </ul>', 'Tersedia', '1719068288.jpeg'),
(13, 'PAKET BUILDING DESAIN', '5.000.000 - 10.000.000', 'Start  from 85/km^2 <br>\r\nMeliputi :\r\n<li>Arsitektur Eksterior</li>\r\n<li>Arsitektur Interior</li>\r\n<li>Arsitektur Full Desain</li>\r\n\r\n<ul class=\"list-group list-group-flush\">\r\n                    <?php if($hasil[\'status\'] == \'Tersedia\'){?>\r\n                    <li class=\"list-group-item bg-primary text-white\">\r\n                        <i class=\"fa fa-check\"></i> Available\r\n                    </li>\r\n                    <li class=\"list-group-item bg-info text-white\"><i class=\"fa fa-check\"></i>\r\n                    Denah/Layout, 3D Eksterior & Interior, Gambar Teknik,\r\n                    <ul> Video Animasi 3D, dan RAB</ul>\r\n                    </li>\r\n                    <li class=\"list-group-item bg-dark text-white\">\r\n                        <i class=\"fa fa-check\"></i> Dibuat sesuai konsep yang anda inginkan\r\n                    </li>\r\n                </ul>', 'Tersedia', '1719060230.jpg'),
(14, 'PAKET MANAGERIAL', '2.000.000', 'Meliputi :\r\n<li>Penyusunan rencana bisnis komprehensif</li>\r\n<li>Optimalisasi proses operasional</li>\r\n<li>Implementasi SOP dan pelatihan staf</li>\r\n<li>Sistem manajemen kualitas\r\n\r\n<ul class=\"list-group list-group-flush\">\r\n                    <?php if($hasil[\'status\'] == \'Tersedia\'){?>\r\n                    <li class=\"list-group-item bg-primary text-white\">\r\n                        <i class=\"fa fa-check\"></i> Available\r\n                    </li>\r\n                    <li class=\"list-group-item bg-info text-white\"><i class=\"fa fa-check\"></i>\r\n                   Program pelatihan manajemen dan pelayanan\r\n                    </li>\r\n                    <li class=\"list-group-item bg-dark text-white\">\r\n                        <i class=\"fa fa-check\"></i> Pengembangan budaya kerja positif\r\n                    </li>\r\n                </ul>', 'Tersedia', '1719060963.jpg'),
(15, 'PAKET F&E', '2.000.000', 'Furniture & Equipment<br>\r\nMeliputi :\r\n<li>Analisis kebutuhan ruang dan gaya\r\n<li>Rekomendasi desain yang sesuai dengan tema dan konsep bisnis\r\n<li>Dapat disesuaikan dengan budget dan RAB\r\n<li>Identifikasi dan pemilihan peralatan dapur dan bar yang efisien\r\n\r\n<ul class=\"list-group list-group-flush\">\r\n                    <?php if($hasil[\'status\'] == \'Tersedia\'){?>\r\n                    <li class=\"list-group-item bg-primary text-white\">\r\n                        <i class=\"fa fa-check\"></i> Available\r\n                    </li>\r\n                    <li class=\"list-group-item bg-info text-white\"><i class=\"fa fa-check\"></i>\r\n                  Saran tentang tata letak dan penempatan, serta\r\n<ul> layanan pemeliharaan rutin furniture & peralatan</ul>\r\n                    </li>\r\n                    <li class=\"list-group-item bg-dark text-white\">\r\n                        <i class=\"fa fa-check\"></i> Solusi cost-effective tanpa mengorbankan kualitas\r\n                    </li>\r\n                </ul>\r\n', 'Tersedia', '1719062648.jpg'),
(16, 'PAKET CUSTOM', '500.000', 'Paket yang dapat disesuaikan dengan kebutuhan dan keadaan bisnis Anda <br>\r\nDengan layanan ini, setiap aspek dari desain hingga operasional dapat diatur sesuai dengan visi dan tujuan bisnis Anda\r\n\r\n<ul class=\"list-group list-group-flush\">\r\n                    <?php if($hasil[\'status\'] == \'Tersedia\'){?>\r\n                    <li class=\"list-group-item bg-primary text-white\">\r\n                        <i class=\"fa fa-check\"></i> Available\r\n                    </li>\r\n                    <li class=\"list-group-item bg-info text-white\"><i class=\"fa fa-check\"></i>\r\n                 Setiap solusi dirancang khusus sesuai kebutuhan\r\n                    </li>\r\n                    <li class=\"list-group-item bg-dark text-white\">\r\n                        <i class=\"fa fa-check\"></i> Penyesuaian layanan mencakup semua aspek dari desain hingga operasional.\r\n                    </li>\r\n                </ul>', 'Tersedia', '1719068308.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
