-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:08 PM
-- Server version: 10.4.24-MariaDB
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
  `id_produk` int(12) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga_produk` varchar(200) NOT NULL,
  `stok_produk` varchar(200) NOT NULL,
  `desc_produk` varchar(500) NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `link_produk` varchar(500) NOT NULL,
  `wa_produk` varchar(500) NOT NULL,
  `kategori_produk` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `type` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `desc_produk`, `foto_produk`, `link_produk`, `wa_produk`, `kategori_produk`, `size`, `type`) VALUES
(9, 'baju baru', '120000', '1222', 'hahahhh', '131WhatsApp Image 2022-06-26 at 21.33.37.jpeg', 'hahahgg', '0823', 'bajuuuu', 'image/jpeg', 107178),
(10, 'oversize kaos', '150.000', '100', 'baju bagus', '6429p0.jpg', 'hahah', '0823', 'bajuuuu', 'image/jpeg', 46932),
(11, 'baju12', '78000', '12', 'baju bagus', '6288Kaos Oversize A1 new Design (178160) 1.jpg', 'hahah', '0823', 'bajuuuu', 'image/jpeg', 70527),
(12, 'apaaa', '1200', '100', 'hahahhh', '5355WhatsApp Image 2022-06-26 at 21.33.37 (1).jpeg', 'hahahgg', '0823', 'bajuuuu', 'image/jpeg', 49341);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usersname` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_hp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usersname`, `password`, `alamat`, `nomor_hp`) VALUES
(2074, 'rajan', '$2y$10$FORnHipN7GOVVA1pb9Qv8uMwfm5/jkMpEtU8yEJZmF03hdGC52VDG', ' jl.perintis no 71 baubau', '082344068300'),
(734823, 'zukran', '$2y$10$Uo/9wLVFxN.wHABZIkCUP.4.z85Oz/w47E6HOkrNvRvoZ4BqjBBbm', ' jl.perintis no 71 baubau', '082344068300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
