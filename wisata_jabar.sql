-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 10:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_jabar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'farhan kamil', 'admin', '$2y$10$Z.guinGl3ZXC93.FecYhMeohi4unumJ3IdOiZ5RtWvlfi53aQVhg6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_saran`, `nama`, `email`, `no_telp`, `saran`, `tanggal`, `waktu`) VALUES
(6, 'Farhan Kamil', 'kamilfarhan223@gmail.com', '0898923949', '		\'no_telpon\' 		=> $_POST[\"no_telpon\"],\r\n', '2023-06-18', '03:07:07'),
(7, 'anu', 'kamilfarhan225@gmail.com', '0898923949', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, tempore. Necessitatibus possimus voluptate repudiandae, maiores repellendus eligendi sunt distinctio aspernatur.', '2023-06-18', '03:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_tiket` varchar(225) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `maps` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `nama_wisata`, `alamat`, `deskripsi`, `harga_tiket`, `kategori`, `maps`, `foto`, `tanggal`, `waktu`) VALUES
(1, 'Pantai Ujung Genteng', 'Jl. Ujung Genteng, Ujung Genteng, Kec. Ciracap, Kabupaten Sukabumi, Jawa Barat 43176', 'Setelah puas menikmati berbagai pantai di Kabupaten Pangandaran, kamu bisa melanjutkan perjalanan dengan berwisata ke Sukabumi. Ada banyak pantai yang terkenal di sini, salah satunya Pantai Ujung Genteng. Di pantai berpasir putih ini, kamu dapat melihat ikan-ikan, kepiting kecil, bintang laut, serta rumput laut pada banyak batu karang yang tersebar di sekitar pantai. Kamu pun diperbolehkan untuk bermain air dan berenang di pesisir pantai.', '15000', 'Pantai', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63316.70473188497!2d106.31502312167966!3d-7.320830400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42ae8de072e167%3A0xf2744c02a3bd4556!2sPantai%20Pasir%20Putih%20Ujung%20Genteng!5e0!3m2!1sid!2sid!4v1687193470243!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'pantai-1.png', '2023-06-19', '23:51:28'),
(2, 'Gunung Gede', 'Cipendawa, Kec. Pacet, Kabupaten Cianjur, Jawa Barat', 'Gunung Gede masuk ke dalam kawasan Taman Nasional (TN) Gede Pangrango, yang merupakan salah satu dari lima taman nasional yang pertama kali diumumkan Indonesia pada tahun 1980.\r\n\r\nLokasinya terletak di dua wilayah kabupaten, yaitu Kabupaten Cianjur dan Sukabumi dengan ketinggian 2.958 mdpl. Terdapat beberapa objek wisata yang dapat dikunjungi oleh wisatawan mulai dari Telaga Biru, air panas, dan alun-alun Suryakencana tempat berkemah pendaki sebelum melakukan \'summit attack\' ke puncak ke kawah Gunung Gede.', '70000', 'Gunung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15847.411344436752!2d106.97164462997813!3d-6.787756283896922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684b3541f23511%3A0x9e90d6a101b0bcfd!2sGn.%20Gede!5e0!3m2!1sid!2sid!4v1687193670985!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'StockSnap_RAR2JXAYNA.png', '2023-06-19', '23:55:50'),
(3, 'Curug Leuwi Hejo', 'Jalan raya, Cibadak, Kec. Sukamakmur, Kabupaten Bogor, Jawa Barat 16830', 'Curug Leuwi Hejo berlokasi di Kampung Wangan Cileungsi, Babakan Madang, Kabupaten Bogor. Meskipun air terjun ini tidak terlalu tinggi, namun Curug Leuwi Hejo menyajikan kolam berwarna hijau jernih yang dapat direnangi.\r\n\r\nCurug ini juga dikelilingi oleh tebing bebatuan yang membuatnya menjadi lebih indah. Curug Leuwi Hejo juga ditemani oleh air terjun lain yang dapat dikunjungi juga.\r\n', '15000', 'Curug', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7926.943125945569!2d106.9496138368347!3d-6.588156915588279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b8538fd00129%3A0xfa8b547834f0ac2c!2sLeuwihejo%20trip%20tracking%20sentull!5e0!3m2!1sid!2sid!4v1687194081510!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'aditya-hermawan-K5WNouzf-TQ-unsplash.png', '2023-06-20', '00:01:52'),
(4, 'Curug Malela ', 'Sindangjaya, Kec. Gununghalu, Kabupaten Bandung Barat, Jawa Barat', 'Curug Malela memiliki tinggi 60 meter dan lebar 55 meter. Curug yang terletak di Rongga, Bandung Barat ini kerap disebut sebagai kembaran air terjun Niagara di Amerika Utara.\r\n\r\nCurug Malela memiliki bentuk yang berundak-undak dan memiliki aliran air jernih yang tak jarang membentur bebatuan. Terlebih lagi di musim hujan yang membuat debit air lebih banyak dan air terjun pun tampak menjadi payung pada tebing setinggi 60 meter.', '10000', 'Curug', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.696085618947!2d107.19691473003645!3d-7.018217090654378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6859502d1faae5%3A0x637a7f90a74e56e2!2sCurug%20Malela!5e0!3m2!1sid!2sid!4v1687194204003!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'florian-giorgio-0lQIJQ2aqVQ-unsplash.png', '2023-06-20', '00:04:04'),
(5, 'Curug Cikaso', 'Desa Ciniti, Cibitung Sukabumi, Jawa Barat', 'Curug Cikaso berlokasi di Kampung Ciniti, Cibitung, Kabupaten Sukabumi. Curug ini memiliki ketinggian yang mencapai sekitar 80 meter. Di bawah air terjun tinggi tersebut juga pengunjung dapat berenang.\r\n\r\nSelain menyuguhkan air terjun yang indah, Curug Cikaso ini juga menyajikan pemandangan air terjun di tengah tebing dan hutan yang asri. Di perjalanan menuju lokasi juga akan tersajikan pemandangan pantai dan perbukitan.', '5000', 'Curug', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.941368787824!2d106.61500307389466!3d-7.360469472423237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6803ed47e2eb67%3A0x51bcada251eb2d6d!2sCurug%20Cikaso!5e0!3m2!1sid!2sid!4v1687194388240!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'StockSnap_U98GW31JSC.png', '2023-06-20', '00:07:35'),
(6, 'Pantai Rancabuaya', 'Purbayani, Kec. Caringin, Kabupaten Garut, Jawa Barat', 'Pantai Rancabuaya terletak di Kabupaten Garut. Pantai ini merupakan salah satu pantai paling dekat dari Kota Bandung, dengan durasi perjalanan kurang lebih 3 jam 50 menit via Jalur Ciwidey-Cidaun atau 4 jam via Jalur Pangalengan.\r\n\r\nSalah satu daya pikat pantai ini adalah air lautnya yang memiliki tiga warna yang kontras. Jika dilihat dari dekat, air laut ini sangat jernih, namun bila dilihat dari udara akan terlihat perpaduan tiga warna yakni putih, hijau dan biru tua karena berbagai faktor geografis.', '5000', 'Pantai', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.4316945868163!2d107.47339008885497!3d-7.527803299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e662fe251b0e1ff%3A0x8a884bf747995988!2sRancabuaya%20Beach!5e0!3m2!1sid!2sid!4v1687194757470!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'rahmat-zumarli-iHZR3yl7Sn8-unsplash.jpg', '2023-06-20', '00:13:48'),
(7, 'Gunung Ciremai', 'Babakanmulya, Kec. Jalaksana, Kabupaten Kuningan, Jawa Barat', 'Gunung Ciremai merupakan gunung yang tertinggi di Jawa Barat. Gunung ini memiliki ketinggian sekitar 3.078 mdpl. Secara administratif gunung ini terletak di antara Kabupaten Majalengka dan Kabupaten Kuningan.\r\n\r\nGunung ini memiliki kawah ganda. Kawah barat yang beradius 400 m terpotong oleh kawah timur yang beradius 600 m. Pada ketinggian sekitar 2.900 m dpl di lereng selatan terdapat bekas titik letusan yang dinamakan Gowa Walet.', '50000', 'Gunung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8615603965077!2d108.41112226898632!3d-6.90715285230409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3d455552df21%3A0xb2853e1d35351916!2sTaman%20Nasional%20Gunung%20Ciremai!5e0!3m2!1sid!2sid!4v1687194914237!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'StockSnap_69ZSCL39KZ.png', '2023-06-20', '00:16:13'),
(8, 'Gunung Cikuray', 'Dangiang, Kec. Cilawu, Kabupaten Garut, Jawa Barat', 'Pemandangan indah Gunung Cikuray dapat dilihat dari Kabupaten Garut. Lokasinya, sekitar dua ratus kilometer dari ibukota Jakarta. Perjalanan melelahkan akan terbayar begitu masuk ke kawasan Gunung Cikuray.\r\n\r\nGunung ini memiliki ketinggian 2.821 mdpl yang menjadikannya sebagai gunung tertinggi keempat di Jabar. Secara administratif gunung yang melengkapi predikat Garut sebagai Kota Intan ini, berada di Dayeuhmanggung.', '50000', 'Gunung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15829.11767998283!2d107.8497002301156!3d-7.322478500114659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68af5b99bab92d%3A0xd94171a9a84909b8!2sGn.%20Cikuray!5e0!3m2!1sid!2sid!4v1687195080923!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'StockSnap_EAJ9O432GY.png', '2023-06-20', '00:18:32'),
(9, 'Pantai Pondok Bali', 'Mayangan, Kec. Legonkulon, Kabupaten Subang, Jawa Barat', 'Pantai Pondok Bali di Kabupaten Subang, barangkali merupakan salah satu pantai yang paling dekat dari Kota Bandung yang berada dalam daftar ini. Sebab, waktu tempuh ke pantai ini hanya memakan waktu sekitar 2 jam 37 menit via Tol Cipularang dan Jalan Raya Pantura.\r\n\r\nDilansir dari laman subang.go.id, yang menjadi ciri khas Pantai Pondok Bali ialah hamparan pasir putih yang membentang di sepanjang bibir pantai. Aneka kegiatan yang bisa di lakukan oleh patra wisatawan seperti berenang, memancing di laut. Pemandangan saat matahari tenggelam pun menjadi incaran wisatawan.', '10000', 'Pantai', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.728772112352!2d107.76656852983736!3d-6.206583268417945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e695b92bf77a2ab%3A0x1a5d663dbccf5c61!2sPantai%20Pondok%20Bali!5e0!3m2!1sid!2sid!4v1687195212904!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'sergey-chuprin-I-sSog-oj0M-unsplash.jpg', '2023-06-20', '00:21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
