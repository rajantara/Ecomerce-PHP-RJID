-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 03:38 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga_produk` varchar(200) NOT NULL,
  `stok_produk` varchar(200) NOT NULL,
  `desc_produk` varchar(500) NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `link_produk` varchar(500) NOT NULL,
  `wa_produk` varchar(500) NOT NULL,
  `kategori_produk` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `desc_produk`, `foto_produk`, `link_produk`, `wa_produk`, `kategori_produk`, `size`, `type`) VALUES
(13, 'OVERSIZED / KAOS POLOS OVERSIZE POCKET COTTON COMBED 20s / KAOS PRIA - Putih', '35.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '11002022-07-13 21_34_26-Window.png', 'https://www.tokopedia.com/rj-id/oversized-kaos-polos-oversize-pocket-cotton-combed-20s-kaos-pria', '082344068300', 'fahsion pria', 'image/png', 426053),
(14, 'Baju Kaos Oversized Distro WASH POLOS COTTON COMBED 20s / KAOS WASH - oversize wash', '70.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '63162022-07-14 16_51_35-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion pria', 'image/png', 410760),
(15, 'tes 2', '35.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '81802022-07-15 15_09_40-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion pria', 'image/png', 407233),
(16, 'tes 3', '35.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '99752022-07-15 15_17_38-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion pria', 'image/png', 146226),
(17, 'tes 4', '70.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '80022022-07-15 15_32_51-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion pria', 'image/png', 414994);

-- --------------------------------------------------------

--
-- Table structure for table `produk2`
--

CREATE TABLE `produk2` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga_produk` varchar(200) NOT NULL,
  `stok_produk` varchar(200) NOT NULL,
  `desc_produk` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `link_produk` varchar(200) NOT NULL,
  `wa_produk` varchar(200) NOT NULL,
  `kategori_produk` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk2`
--

INSERT INTO `produk2` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `desc_produk`, `foto_produk`, `link_produk`, `wa_produk`, `kategori_produk`, `size`, `type`) VALUES
(1, 'Baju Kaos Oversized Distro WASH POLOS COTTON COMBED 20s / KAOS WASH - oversize wash', '35.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '39632022-07-13 21_22_08-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion wanita', 'image/png', 431714),
(2, 'OVERSIZED / KAOS POLOS OVERSIZE POCKET COTTON COMBED 20s / KAOS PRIA - Putih', '35.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '28952022-07-13 21_21_54-Window.png', 'https://www.tokopedia.com/rj-id/oversized-kaos-polos-oversize-pocket-cotton-combed-20s-kaos-pria', '082344068300', 'fahsion wanita', 'image/png', 210694),
(3, 'tes 3', '70.000', '10', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '33882022-07-14 14_51_16-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion wanita', 'image/png', 265344),
(4, 'tes 4', '70.000', '100', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '17712022-07-13 21_50_33-Window.png', 'https://www.tokopedia.com/rj-id/oversized-kaos-polos-oversize-pocket-cotton-combed-20s-kaos-pria', '082344068300', 'fahsion wanita', 'image/png', 242753),
(5, 'tes 3', '35.000', '100', ' Selamat Di Tokoh Kami RJ.ID Official Store!\r\n\r\n\r\nNote Penting:\r\nUntuk detail produk bisa langsung chat admin.\r\nKarena barang kita cepat habis\r\nMohon tanyakan ketersediaan stok sebelum berbelanja , Trimakasih\r\nNOTE!! Apabila barang ready di store pusat, barang akan segera dikirim, tapi apabila barang ready distore cabang, maka akan dikirim 2 hari setelah melakukan payment.\r\n\r\n\r\nkunjungi web kami:\r\nhttp://webrjidstore.epizy.com/', '65872022-07-14 14_38_27-Window.png', 'https://www.tokopedia.com/rj-id/baju-kaos-oversized-distro-wash-polos-cotton-combed-20s-kaos-wash-oversize-wash', '082344068300', 'fahsion wanita', 'image/png', 280254);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `usersname` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_hp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usersname`, `password`, `nomor_hp`) VALUES
(77497432, 'rajan', '$2y$10$iavm0voQD7BYve6Z9Ua3uunNqwBAcsafATzPzYuW3RmGSGnHKdeZu', '32435345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk2`
--
ALTER TABLE `produk2`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `produk2`
--
ALTER TABLE `produk2`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
