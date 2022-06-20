-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarewis`
--

-- --------------------------------------------------------

--
-- Table structure for table `favlist`
--

CREATE TABLE `favlist` (
  `id_fav` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favlist`
--

INSERT INTO `favlist` (`id_fav`, `user_id`, `id_tempat`) VALUES
(4, 2, 4),
(16, 1, 3),
(17, 1, 6),
(23, 1, 1),
(24, 1, 4),
(26, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `id_tempat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `rating` float NOT NULL,
  `desc` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempatwisata`
--

INSERT INTO `tempatwisata` (`id_tempat`, `nama`, `daerah`, `harga`, `fasilitas`, `rating`, `desc`, `gambar`) VALUES
(1, 'Tanah Lot', 'bali', 'Gratis', 'Sedang', 4.1, '', 'bg1.jpg'),
(2, 'Finn Beach Club', 'bali', 'Murah', 'Istimewa', 3.9, '', 'bg1.jpg'),
(3, 'Tukad Ayung', 'bali', 'Sedang', 'Baik', 4.2, '', 'bg1.jpg'),
(4, 'Bali Safari and Marine', 'bali', 'Murah', 'Istimewa', 4.6, '', 'bg1.jpg'),
(5, 'Tegalalang Rice Field', 'bali', 'Gratis', 'Baik', 3.8, '', 'bg1.jpg'),
(6, 'Hard Rock Cafe', 'bali', 'Murah', 'Istimewa', 4.4, '', 'bg1.jpg'),
(7, 'Tegenungan Waterfall', 'bali', 'Murah', 'Sedang', 3.5, '', 'bg1.jpg'),
(8, 'Kuta Beach', 'bali', 'Gratis', 'Baik', 4.5, '', 'bg1.jpg'),
(9, 'Monkey Forest', 'bali', 'Murah', 'Baik', 4.3, '', 'bg1.jpg'),
(10, 'Sate Bawah Pohon', 'bali', 'Gratis', 'Baik', 4.5, '', 'bg1.jpg'),
(11, 'Sky Garden', 'bali', 'Murah', 'Baik', 4.2, '', 'bg1.jpg'),
(12, 'Nasi Ayam Kedewatan', 'bali', 'Gratis', 'Baik', 4.3, '', 'bg1.jpg'),
(13, 'Uluwatu Temple', 'bali', 'Murah', 'Baik', 4.5, '', 'bg1.jpg'),
(14, 'Potato Head', 'bali', 'Murah', 'Istimewa', 4.5, '', 'bg1.jpg'),
(15, 'Babi Guling Selingsing', 'bali', 'Gratis', 'Sedang', 4.6, '', 'bg1.jpg'),
(16, 'Mertha Sari Beach', 'bali', 'Gratis', 'Baik', 3, '', 'bg1.jpg'),
(17, 'Big Garden Corner', 'bali', 'Murah', 'Baik', 3, '', 'bg1.jpg'),
(18, 'Bukit Sikunir', 'Jawa', 'Sedang', 'Sedang', 4.3, '', 'bg.jpg'),
(19, 'Telaga Warna', 'Jawa', 'Sedang', 'Sedang', 4.5, '', 'bg.jpg'),
(20, 'Candi Prambanan', 'Jawa', 'Sedang', 'Sedang', 4.2, '', 'bg.jpg'),
(21, 'Candi Borobudur', 'Jawa', 'Sedang', 'Sedang', 4.1, '', 'bg.jpg'),
(22, 'Baobab Safari Resort', 'Jawa', 'Mahal', 'Istimewa', 4.7, '', 'bg.jpg'),
(23, 'Djawatan Benculuk', 'Jawa', 'Mahal', 'Istimewa', 4.6, '', 'bg.jpg'),
(24, 'Kawah Putih', 'Jawa', 'Murah', 'Baik', 4, '', 'bg.jpg'),
(25, 'Gunung Tangkuban Perahu', 'Jawa', 'Murah', 'Sedang', 4.3, '', 'bg.jpg'),
(26, 'Trans Studio Bandung', 'Jawa', 'Mahal', 'Baik', 4.2, '', 'bg.jpg'),
(27, 'Curug Cikaso', 'Jawa', 'Gratis', 'Sedang', 3.9, '', 'bg.jpg'),
(28, 'Monumen Nasional Jakarta', 'Jawa', 'Sedang', 'Sedang', 3.9, '', 'bg.jpg'),
(29, 'Pulau Seribu', 'Jawa', 'Mahal', 'Istimewa', 4.8, '', 'bg.jpg'),
(30, 'Pulau Biawak', 'Jawa', 'Sedang', 'Sedang', 4, '', 'bg.jpg'),
(31, 'Green Canyon', 'Jawa', 'Murah', 'Sedang', 3.4, '', 'bg.jpg'),
(32, 'Keraton Surakarta ', 'Jawa', 'Sedang', 'Sedang', 3.5, '', 'bg.jpg'),
(33, 'Karimunjawa Jepara', 'Jawa', 'Murah', 'Baik', 3.8, '', 'bg.jpg'),
(34, 'Bromo - Semeru', 'Jawa', 'Sedang', 'Baik', 4.8, '', 'bg.jpg'),
(35, 'Pantai Pink', 'Nusa Tenggara', 'Murah', 'Sedang', 3.5, '', 'bg2.jpg'),
(36, 'Danau Kelimutu', 'Nusa Tenggara', 'Gratis', 'Tidak Baik', 3.3, '', 'bg2.jpg'),
(37, 'Pulau Padar', 'Nusa Tenggara', 'Sedang', 'Baik', 4.5, '', 'bg2.jpg'),
(38, 'Pantai Oesapa', 'Nusa Tenggara', 'Murah', 'Baik', 4.6, '', 'bg2.jpg'),
(39, 'Bukit Wairinding', 'Nusa Tenggara', 'Sedang', 'Sedang', 3, '', 'bg2.jpg'),
(40, 'Desa Wae Rebo', 'Nusa Tenggara', 'Gratis', 'Sedang', 3.9, '', 'bg2.jpg'),
(41, 'Pulau Meko', 'Nusa Tenggara', 'Sedang', 'Sedang', 4, '', 'bg2.jpg'),
(42, 'Bukit Cinta', 'Nusa Tenggara', 'Gratis', 'Tidak Baik', 3.5, '', 'bg2.jpg'),
(43, 'Teluk Cendrawasih', 'Nusa Tenggara', 'Mahal', 'Baik', 3.4, '', 'bg2.jpg'),
(44, 'Raja Ampat', 'Nusa Tenggara', 'Sedang', 'Istimewa', 4.9, '', 'bg2.jpg'),
(45, 'Danau Sentani', 'Nusa Tenggara', 'Murah', 'Sedang', 4, '', 'bg2.jpg'),
(46, 'Danau Paniai', 'Nusa Tenggara', 'Murah', 'Tidak Baik', 3.8, '', 'bg2.jpg'),
(47, 'Lembah Baliam', 'Nusa Tenggara', 'Murah', 'Tidak Baik', 3.7, '', 'bg2.jpg'),
(48, 'Desa Wisata Sauwandarek', 'Nusa Tenggara', 'Murah', 'Sedang', 3.4, '', 'bg2.jpg'),
(49, 'Pantai Bosnik', 'Nusa Tenggara', 'Murah', 'Sedang', 3.5, '', 'bg2.jpg'),
(50, 'Pantai Amai', 'Nusa Tenggara', 'Murah', 'Sedang', 3.7, '', 'bg2.jpg'),
(51, 'Clean Water', 'Maluku', 'Sedang', 'Baik', 3.8, '', 'bg3.jpg'),
(52, 'Pantai Liang', 'Maluku', 'Murah', 'Baik', 4, '', 'bg3.jpg'),
(53, 'Pantai Ora', 'Maluku', 'Murah', 'Sedang', 4, '', 'bg3.jpg'),
(54, 'Gong Perdamaian Dunia', 'Maluku', 'Mahal', 'Baik', 4, '', 'bg3.jpg'),
(55, 'Latuhalat', 'Maluku', 'Sedang', 'Baik', 4.2, '', 'bg3.jpg'),
(56, 'Pantai Bula', 'Maluku', 'Murah', 'Sedang', 3.4, '', 'bg3.jpg'),
(57, 'Pantai Pintu Kota', 'Maluku', 'Gratis', 'Tidak Baik', 3.7, '', 'bg3.jpg'),
(58, 'Pulau Bair', 'Maluku', 'Mahal', 'Sedang', 3.8, '', 'bg3.jpg'),
(59, 'Benteng Amsterdam', 'Maluku', 'Mahal', 'Baik', 3.9, '', 'bg3.jpg'),
(60, 'Pulau Molana', 'Maluku', 'Sedang', 'Sedang', 4.9, '', 'bg3.jpg'),
(61, 'Kepulauan Bandar Neira', 'Maluku', 'Sedang', 'Baik', 4.7, '', 'bg3.jpg'),
(62, 'Pulau Hatta', 'Maluku', 'Sangat Mahal', 'Istimewa', 4.9, '', 'bg3.jpg'),
(63, 'Danau Tolire', 'Maluku', 'Murah', 'Baik', 3.8, '', 'bg3.jpg'),
(64, 'Danau Rana', 'Maluku', 'Murah', 'Baik', 3.5, '', 'bg3.jpg'),
(65, 'Pantai Hitu', 'Maluku', 'Murah', 'Baik', 3.9, '', 'bg3.jpg'),
(66, 'Patung Martha Christina', 'Maluku', 'Sedang', 'Baik', 4, '', 'bg3.jpg'),
(67, 'Pesisir Kalianda', 'Sumatra', 'Gratis', 'Tidak Baik', 3.2, '', 'bg4.jpg'),
(68, 'Pantai Gigi Hiu', 'Sumatra', 'Sedang', 'Sedang', 3.6, '', 'bg4.jpg'),
(69, 'Pantai Krui', 'Sumatra', 'Murah', 'Sedang', 3.4, '', 'bg4.jpg'),
(70, 'Kawah Nirwana', 'Sumatra', 'Mahal', 'Istimewa', 4.8, '', 'bg4.jpg'),
(71, 'Danau Ranau', 'Sumatra', 'Murah', 'Sedang', 3.8, '', 'bg4.jpg'),
(72, 'Curup Buluh, Lahat', 'Sumatra', 'Murah', 'Baik', 4, '', 'bg4.jpg'),
(73, 'Bukit Khayangan', 'Sumatra', 'Sedang', 'Baik', 4, '', 'bg4.jpg'),
(74, 'Danau Gunung Tujuh', 'Sumatra', 'Sedang', 'Baik', 4.2, '', 'bg4.jpg'),
(75, 'Pantai Panjang Bengkulu', 'Sumatra', 'Murah', 'Baik', 4, '', 'bg4.jpg'),
(76, 'Layang Kelok Sembilan', 'Sumatra', 'Murah', 'Sedang', 4.1, '', 'bg4.jpg'),
(77, 'Lembah Harau', 'Sumatra', 'Sedang', 'Sedang', 4.3, '', 'bg4.jpg'),
(78, 'Ngarai Sianok', 'Sumatra', 'Sedang', 'Baik', 4.2, '', 'bg4.jpg'),
(79, 'Istano Baso Pagruyung', 'Sumatra', 'Mahal', 'Istimewa', 4.3, '', 'bg4.jpg'),
(80, 'Danau Singkarak, Padang', 'Sumatra', 'Gratis', 'Sedang', 4.4, '', 'bg4.jpg'),
(81, 'Danau Maninjau', 'Sumatra', 'Gratis', 'Sedang', 3, '', 'bg4.jpg'),
(82, 'Kawasan Danau Toba', 'Sumatra', 'Gratis', 'Sedang', 3.8, '', 'bg4.jpg'),
(83, 'Taman Laut Bunaken', 'Sulawesi', 'Murah', 'Sedang', 3.8, '', 'bg5.jpg'),
(84, 'Tana Toraja', 'Sulawesi', 'Murah', 'Baik', 3.7, '', 'bg5.jpg'),
(85, 'Taman Nasional Windu', 'Sulawesi', 'Sedang', 'Baik', 3.9, '', 'bg5.jpg'),
(86, 'Wakatobi', 'Sulawesi', 'Mahal', 'Baik', 4.5, '', 'bg5.jpg'),
(87, 'Kepulauan Togean', 'Sulawesi', 'Gratis', 'Sedang', 4.5, '', 'bg5.jpg'),
(88, 'Taman Nasional Bantimurung', 'Sulawesi', 'Murah', 'Istimewa', 3.7, '', 'bg5.jpg'),
(89, 'Pantai Tanjung Bira', 'Sulawesi', 'Sedang', 'Baik', 4, '', 'bg5.jpg'),
(90, 'Taman Laut Takabonerate', 'Sulawesi', 'Murah', 'Istimewa', 3.2, '', 'bg5.jpg'),
(91, 'Benteng Sumba Opu', 'Sulawesi', 'Gratis', 'Baik', 3.3, '', 'bg5.jpg'),
(92, 'Bukit Kasih Kanonang', 'Sulawesi', 'Murah', 'Istimewa', 3.7, '', 'bg5.jpg'),
(93, 'Pantai Losari', 'Sulawesi', 'Murah', 'Sedang', 4.2, '', 'bg5.jpg'),
(94, 'Pulau Samalona', 'Sulawesi', 'Gratis', 'Baik', 4, '', 'bg5.jpg'),
(95, 'Pulau Gusung', 'Sulawesi', 'Murah', 'Sedang', 4.7, '', 'bg5.jpg'),
(96, 'Malino', 'Sulawesi', 'Gratis', 'Tidak Baik', 4.6, '', 'bg5.jpg'),
(97, 'Kerajinan Perahu Phinisi', 'Sulawesi', 'Sedang', 'Baik', 4.5, '', 'bg5.jpg'),
(98, 'Goa Tampang Allo', 'Sulawesi', 'Mahal', 'Istimewa', 4, '', 'bg5.jpg'),
(99, 'Pulau Bulupoloe', 'Sulawesi', 'Sangat Mahal', 'Istimewa', 4.9, '', 'bg5.jpg'),
(100, 'Pulau Kapoposang', 'Sulawesi', 'Murah', 'Baik', 5, '', 'bg5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `password`) VALUES
(1, 'ang', '123'),
(2, 'her', '123'),
(3, 'ovi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favlist`
--
ALTER TABLE `favlist`
  ADD PRIMARY KEY (`id_fav`);

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favlist`
--
ALTER TABLE `favlist`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=825;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
