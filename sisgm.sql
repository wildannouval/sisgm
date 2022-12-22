-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 10:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `nama_customer`, `keluhan`, `solusi`) VALUES
(2, 'Wildan Nouval', 'Mobilnya ada sedikit lecet dibagian pintu', 'akan di cek oleh teknisi dan dilakukan pemolesan'),
(3, 'Daffa', 'Terdapat bunyi yang mengganggu ketika dilakukan pengereman', 'Akan di lakukan pengecekan untuk diganti remnya');

-- --------------------------------------------------------

--
-- Table structure for table `pemasaran`
--

CREATE TABLE `pemasaran` (
  `id_pemasaran` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `promo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasaran`
--

INSERT INTO `pemasaran` (`id_pemasaran`, `id_produk`, `deskripsi`, `harga`, `promo`) VALUES
(1, 4, 'Born from a vision. Created for electric mobility. Thanks to efficient BMW eDrive technology and its fully electric all-wheel drive, the BMW iX achieves an exceptional range and delivers powerful acceleration from a standstill. The intelligent BMW Operating System 8 always keeps itself up to date and can be operated completely intuitively.', 10000, 'Gratis pasang kaca film Solar Guard!!!');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `no_pengiriman` int(11) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `no_invoice` int(11) NOT NULL,
  `wkt_pengiriman` time NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `almt_penerima` text NOT NULL,
  `no_hp_penerima` bigint(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `qty_barang` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `eqpt_pengiriman` text NOT NULL,
  `terms` text NOT NULL,
  `nama_sopir` varchar(50) NOT NULL,
  `no_hp_sopir` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lokasi_terkini` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`no_pengiriman`, `tgl_pengiriman`, `no_invoice`, `wkt_pengiriman`, `nama_penerima`, `almt_penerima`, `no_hp_penerima`, `nama_barang`, `qty_barang`, `total`, `keterangan`, `eqpt_pengiriman`, `terms`, `nama_sopir`, `no_hp_sopir`, `status`, `lokasi_terkini`) VALUES
(2111, '2022-12-14', 1002, '18:12:00', 'Wildan Nouval', 'Purwokerto', 62456789, 'Mazda RX-8', 1, 900000000, 'Mobil dilapisi nano ceramic coating', 'Buku Panduan, Buku Service, 2 Kunci remote, First Aid Kit, dan Tool kit', 'Mobil yang dikirim telah melalui pengecekan. Apabila terdapat cacat, fisik maupun fungsi customer dapat komplain atau konsultasi kepada showroom selama 3 hari setelah mobil diterima. Showroom menjamin mesin dengan garansi 5 Tahun selama tidak ada modifikasi atau kerusakan akibat human error.', 'Budi', 625896320, 'Perjalanan', 'Purbalingga'),
(2112, '2022-12-14', 1003, '12:05:00', 'Daffa', 'Purwokerto', 62547189, 'BMW iX', 1, 2147483647, 'Kaca Film Solar Guard 80% Semua sisi', 'Buku Panduan, Buku Service, 2 Kunci remote, First Aid Kit, dan Tool kit', 'Mobil yang dikirim telah melalui pengecekan. Apabila terdapat cacat, fisik maupun fungsi customer dapat komplain atau konsultasi kepada showroom selama 3 hari setelah mobil diterima. Showroom menjamin mesin dengan garansi 5 Tahun selama tidak ada modifikasi atau kerusakan akibat human error.', 'Budi', 625896320, 'Terkirim', 'Purwokerto');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `no_tlp_perusahaan` bigint(20) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `no_tlp_perusahaan`, `alamat_perusahaan`, `laporan`) VALUES
(1, 'SISGM', 62281698789, 'Purbalingga', 'Lap');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `stock`, `gambar_produk`) VALUES
(4, 'BMW iX', 'Born from a vision. Created for electric mobility. Thanks to efficient BMW eDrive technology and its fully electric all-wheel drive, the BMW iX achieves an exceptional range and delivers powerful acceleration from a standstill. The intelligent BMW Operating System 8 always keeps itself up to date and can be operated completely intuitively.', 2147483647, 1, 'image.1622059048727.jpg'),
(5, 'NEW BMW 3', 'The new BMW 3 Series Sedan offers outstanding driving dynamics and comprehensive, technologically modern support for the driver in the new sporty design.', 1500000000, 1, 'image.1652314283382.jpg'),
(6, 'BMW Z4 Roadster', 'Inside and out, the design of the BMW Z4 Roadster conveys a feeling of relaxed sportiness and individual aesthetics. Powerful features of the dynamic appearance include the BMW kidney grille in mesh design, the elegant roof and elements of the M Shadow Line. The interior rounds off the coherent design concept with optional equipment such as the M Sport seats or the ambient lighting.', 1645000000, 1, 'bmw-zseries-z4-firstedition-modellfinder.png'),
(7, 'BMW 7 Series Sedan', 'Master every performance, enjoy every moment. The BMW 7 Series Sedan stands for self-assured presence, exceptional performance and maximum comfort. As the BMW 740Li powered by a newly developed BMW TwinPower Turbo 8-cylinder petrol engine and with xDrive as standard, it is quite simply created for assuming the leading position.', 2147483647, 1, 'bmw-series-7-sedan-onepager-mc-dynamics-hero-desktop.jpg.asset.1627456206853.jpg'),
(8, 'Mithubishi Lancer', 'Mitsubishi Lancer adalah sebuah mobil sedan buatan pabrikan otomotif Jepang Mitsubishi Motors. Antara tahun 1973 dan 2009, sudah terjual lebih dari 7 juta unit di seluruh dunia.', 900000000, 1, 'png-transparent-2017-mitsubishi-lancer-2015-mitsubishi-lancer-mitsubishi-lancer-evolution-car-mitsubishi-compact-car-sedan-vehicle-removebg-preview.png'),
(9, 'Mazda RX-8', 'Mazda RX-8 adalah mobil sport yang diproduksi Mazda Motor Corporation. Diperkenalkan tahun 2001 di North American International Auto Show. Merupakan penerus dari RX-7 dan seperti pendahulunya, mobil ini menggunakan mesin Wankel.', 900000000, 1, 'pngwing.com (3).png');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `id_produk`, `nama_produk`, `stock`) VALUES
(1, 4, 'BMW iX', 1),
(2, 5, 'NEW BMW 3', 1),
(3, 6, 'BMW Z4 Roadster', 1),
(4, 7, 'BMW 7 Series Sedan', 1),
(5, 8, 'Mithubishi Lancer', 1),
(6, 9, 'Mazda RX-8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_invoice` int(11) NOT NULL,
  `tgl_invoice` date NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `no_hp_customer` bigint(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `qty_produk` int(11) NOT NULL,
  `harga_produk` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_invoice`, `tgl_invoice`, `nama_customer`, `no_hp_customer`, `id_produk`, `nama_produk`, `qty_produk`, `harga_produk`, `total`) VALUES
(1, '2022-12-07', 'Wildan', 62456789, 9, 'Mazda RX-8', 1, 900000000, 900000000),
(2, '2022-12-07', 'Daffa', 62547189, 4, 'BMW  iX', 1, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `no_hp`, `email`, `password`, `role`) VALUES
(1, 'Wildan Nouval', 'Purwokerto', 2147483647, 'wildan@wildan.com', '123', 'customer'),
(2, 'owner', 'Purwokerto', 123456789, 'owner@owner.com', '123', 'owner'),
(3, 'admin', 'purwokerto', 123456789, 'admin@admin.com', '123', 'admin'),
(4, 'supplier', 'Purwokerto', 123456789, 'supplier@supplier.com', '123', 'supplier'),
(5, 'marketing', 'Purwokerto', 123456789, 'marketing@marketing.com', '123', 'marketing'),
(6, 'treasury', 'Purwokerto', 123456789, 'treasury@treasury.com', '123', 'treasury'),
(7, 'sopir', 'Purwokerto', 123456789, 'sopir@sopir.com', '123', 'sopir'),
(8, 'customer service', 'Purwokerto', 123456789, 'cs@cs.com', '123', 'cs'),
(9, 'Daffa', 'Purwokerto', 628123456789, 'daffa@daffa.com', '123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `pemasaran`
--
ALTER TABLE `pemasaran`
  ADD PRIMARY KEY (`id_pemasaran`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`no_pengiriman`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_invoice`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemasaran`
--
ALTER TABLE `pemasaran`
  MODIFY `id_pemasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `no_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2113;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemasaran`
--
ALTER TABLE `pemasaran`
  ADD CONSTRAINT `pemasaran_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
