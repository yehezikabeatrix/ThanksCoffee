-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 06:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thankscoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `kode_pelanggan` int(11) NOT NULL,
  `kode_product` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `dibuat` date NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `kode_pelanggan`, `kode_product`, `jumlah`, `dibuat`, `status`) VALUES
(186, 154, 7, 1, '2022-02-12', 1),
(187, 154, 9, 1, '2022-02-12', 1),
(188, 154, 10, 4, '2022-02-12', 1),
(189, 155, 7, 3, '2022-02-12', 1),
(190, 155, 15, 5, '2022-02-12', 1),
(191, 156, 9, 2, '2022-02-12', 0),
(192, 156, 10, 2, '2022-02-12', 0),
(193, 156, 19, 2, '2022-02-12', 0),
(194, 156, 17, 2, '2022-02-12', 0),
(195, 157, 7, 1, '2022-02-14', 1),
(196, 157, 9, 1, '2022-02-14', 1),
(197, 157, 10, 4, '2022-02-14', 1),
(198, 158, 15, 1, '2022-02-17', 1),
(199, 158, 19, 1, '2022-02-17', 1),
(200, 158, 17, 2, '2022-02-17', 1),
(201, 158, 14, 2, '2022-02-17', 1),
(202, 158, 13, 2, '2022-02-17', 1),
(203, 159, 7, 1, '2022-02-17', 0),
(204, 159, 9, 1, '2022-02-17', 0),
(205, 159, 15, 1, '2022-02-17', 0),
(206, 159, 17, 1, '2022-02-17', 0),
(207, 159, 19, 1, '2022-02-17', 0),
(208, 159, 13, 1, '2022-02-17', 0),
(209, 159, 14, 1, '2022-02-17', 0),
(210, 162, 31, 1, '2022-02-17', 1),
(211, 162, 33, 1, '2022-02-17', 1),
(212, 162, 26, 1, '2022-02-17', 1),
(213, 162, 27, 3, '2022-02-17', 1),
(214, 162, 29, 2, '2022-02-17', 1),
(215, 162, 30, 1, '2022-02-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `tanggal`) VALUES
(154, 'adek', '2022-02-12'),
(155, 'as', '2022-02-12'),
(156, 'ssasa', '2022-02-12'),
(157, 'dq', '2022-02-12'),
(158, 'adek', '2022-02-17'),
(159, 'alo', '2022-02-17'),
(160, 'username', '2022-02-17'),
(161, 'name', '2022-02-17'),
(162, 'as', '2022-02-17'),
(163, 'ade', '2022-02-17'),
(164, 'lele', '2022-02-17'),
(165, 'lo', '2022-02-17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemasukan_harian`
-- (See below for the actual view)
--
CREATE TABLE `pemasukan_harian` (
`tanggal_transaksi` date
,`total` decimal(36,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `penjualan_product`
-- (See below for the actual view)
--
CREATE TABLE `penjualan_product` (
`dibuat` date
,`nama` varchar(50)
,`jumlah` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kategori` varchar(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stock` int(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(7, 'Black Coffee', 'coffee', 8000, 150, '../asset/product/coffee_black-coffee.jpg'),
(9, 'Cappucino', 'coffee', 10000, 20, '../asset/product/coffee_cappucino.jpg'),
(10, 'Espresso', 'coffee', 15000, 30, '../asset/product/coffee_espresso.jpg'),
(13, 'American Platter', 'snack', 25000, 30, '../asset/product/snack_american-platter.jpg'),
(14, 'Beef Burger', 'snack', 25000, 30, '../asset/product/snack_beef-burger.jpg'),
(15, 'Ice Berry Milkshake', 'non coffee', 20000, 30, '../asset/product/non-coffee_ice-berry-milkshake.jpg'),
(17, 'Ice Choco Milkshake', 'non coffee', 20000, 30, '../asset/product/non-coffee_ice-choco-milkshake.jpg'),
(19, 'Ice Matcha Latte', 'non coffee', 20000, 30, '../asset/product/non-coffee_ice-matcha-latte.jpg'),
(20, 'Ice Avocado Coffee', 'coffee', 20000, 30, '../asset/product/coffee_ice-avocado-coffee.jpg'),
(21, 'Ice Coffee Gula Aren', 'coffee', 18000, 15, '../asset/product/coffee_ice-coffee.jpg'),
(22, 'Ice Latte Macciato', 'coffee', 25000, 100, '../asset/product/coffee_latte-macciato.jpg'),
(23, 'Ice Avocado Milk', 'non coffee', 19000, 50, '../asset/product/non-coffee_avocado_latte.jpg'),
(24, 'Ice Milo', 'non coffee', 23000, 90, '../asset/product/non-coffee_ice-milo.jpg'),
(25, 'Matcha Latte', 'non coffee', 20000, 39, '../asset/product/non-coffee_matcha-latte.jpg'),
(26, 'Americano Malang 500g', 'beans', 40000, 10, '../asset/product/beans_americano_malang.jpg'),
(27, 'Java Origin 500g', 'beans', 40000, 10, '../asset/product/beans_java_origin.jpg'),
(28, 'Robusta Lawu', 'beans', 40000, 10, '../asset/product/beans_robusta_lawu.jpg'),
(29, 'Longsleeve L', 'merchant', 100000, 0, '../asset/product/merch_longsleeve.jpg'),
(30, 'Totebag', 'merchant', 50000, 20, '../asset/product/merch_totebag.jpg'),
(31, 'Chicken Wings', 'snack', 60000, 20, '../asset/product/snack_chicken_wings.jpg'),
(32, 'Chicken Burger', 'snack', 25000, 20, '../asset/product/snack_chicken-burger.jpg'),
(33, 'Croffle', 'snack', 20000, 20, '../asset/product/snack_croffle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `nama_cabang` varchar(100) DEFAULT NULL,
  `alamat_cabang` varchar(100) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email_cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`nama_cabang`, `alamat_cabang`, `nomor_telepon`, `email_cabang`) VALUES
('ThanksCoffee Ciseeng', 'Jalan Raya Putat Nutug 1 Bogor', '0899089923452', 'thanksciseeng@thankscoffee.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `total` int(15) NOT NULL,
  `bayar` int(15) NOT NULL,
  `kembalian` int(15) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal_transaksi` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `total`, `bayar`, `kembalian`, `status`, `tanggal_transaksi`) VALUES
(45, 154, 78000, 100000, 22000, 1, '2022-02-12'),
(46, 155, 124000, 200000, 76000, 1, '2022-02-12'),
(47, 156, 130000, 0, 0, 2, '2022-02-12'),
(48, 157, 78000, 100000, 22000, 1, '2022-02-14'),
(101, 158, 180000, 200000, 20000, 1, '2022-02-17'),
(102, 159, 128000, 0, 0, 2, '2022-02-17'),
(103, 162, 490000, 500000, 10000, 1, '2022-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` enum('manajer','karyawan') NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `jabatan`, `avatar`) VALUES
('karyawan', '9e014682c94e0f2cc834bf7348bda428', 'karyawan', '../asset/avatar/father.jfif'),
('manajer', '69b731ea8f289cf16a192ce78a37b4f0', 'manajer', '../asset/avatar/manajer.jfif'),
('rojali', 'a0cac7368165fdbfdf3cf40d41f2a07c', 'karyawan', '../asset/avatar/rojali.jfif'),
('sinta', '08ca451b5ef1a7c86763d31e7711a522', 'karyawan', '../asset/avatar/sinta.jfif');

-- --------------------------------------------------------

--
-- Structure for view `pemasukan_harian`
--
DROP TABLE IF EXISTS `pemasukan_harian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemasukan_harian`  AS SELECT `transaksi`.`tanggal_transaksi` AS `tanggal_transaksi`, sum(`transaksi`.`total`) AS `total` FROM `transaksi` WHERE `transaksi`.`status` = 1 GROUP BY `transaksi`.`tanggal_transaksi` ;

-- --------------------------------------------------------

--
-- Structure for view `penjualan_product`
--
DROP TABLE IF EXISTS `penjualan_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `penjualan_product`  AS SELECT `cart`.`dibuat` AS `dibuat`, `product`.`nama` AS `nama`, sum(`cart`.`jumlah`) AS `jumlah` FROM (`cart` join `product` on(`cart`.`kode_product` = `product`.`id_product`)) WHERE `cart`.`status` = 1 GROUP BY `cart`.`kode_product`, `cart`.`dibuat` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `kode_pelanggan` (`kode_pelanggan`),
  ADD KEY `kode_product` (`kode_product`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_pelanggan_2` (`id_pelanggan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`kode_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`kode_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `hapus_pelanggan` ON SCHEDULE EVERY 1 MONTH STARTS '2022-02-06 10:44:52' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
DELETE FROM pelanggan where pelanggan.tanggal < now();

ALTER TABLE pelanggan DROP id_pelanggan;

ALTER TABLE  `pelanggan` ADD `id_pelanggan` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
