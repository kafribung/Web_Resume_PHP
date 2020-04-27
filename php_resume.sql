-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 11:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `subject`, `photo`, `user_id`) VALUES
(1, 'Nama lengkapnya Kafriansyah, waktu masih kecil sering dipanggil Kafri Bung. Lahir di Tasiu Kab. Mamuju Sulawesi Barat tgl 07-Juli-1999. Memiliki motto \"Tidak ada yang susah selagi mau belajar\". Senang berimajinasi berpikir positif untuk masa depan yang lebih cerah.  ', 'IMG_20190721_174055.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(4, 'muspira', 'pira@pira.com', 'Test 123');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `school` varchar(30) NOT NULL,
  `memo` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school`, `memo`, `date`, `user_id`, `img`) VALUES
(1, 'SD INP TASIU II', 'Senang bermain bola, takraw dan badminton. Menjadi ketua  dan memperoleh juara kelas sejak kelas 3 hingga kelas 6 SD. ', '2005 - 2011', 1, 'image_1.png'),
(2, 'SMP BUDI MULYA KALUKKU', 'Mulai jatuh cinta dengan komputer. Senang membaca buku TIK. Sering bermain futsal dan takraw. Menjadi ketua kelas dan sering mendapat hadiah ketika penerimaan rapor. Sering fotocopy buku. ', '2011 - 2014', 1, 'image_2.png'),
(3, 'SMK BUDI MULYA KALUKKU', 'Mengambil jurusan teknik komputer dan jaringan (TKJ). Ingin fokus dengan hobby. Senang belajar jaringan dan mengotak-atik komputer. Menjadi lulusan terbaik.', '2014 - 2017', 1, 'image_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `motivation`
--

CREATE TABLE `motivation` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `deskription` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motivation`
--

INSERT INTO `motivation` (`id`, `title`, `deskription`, `user_id`) VALUES
(1, 'Berharap', 'Aku sudah pernah merasakan semua kepahitan dalam hidup dan yang paling pahit ialah berharap kepada manusia.', 1),
(2, 'Kesempatan', 'Kesempatan datang bagai awan berlalu. Pegunakanlah ketika ia nampak di hadapanmu.', 1),
(3, 'Belajar', 'Belajar dari kemarin, hidup untuk sekarang, berharap untuk besok. Hal yang paling penting adalah jangan berhenti bertanya.', 1),
(4, 'Kehidupan', 'Kalau hidup sekadar hidup, babi di hutan juga hidup.\r\nKalau bekerja sekadar bekerja, kera juga bekerja.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `handpone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `alamat`, `email`, `handpone`) VALUES
(1, 'kafriansyah', '12345', 'Jl. Pahlawan Kalukku, Kabupaten Mamuju', 'kafribung07@gmail.com', '85331459400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `motivation`
--
ALTER TABLE `motivation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motivation`
--
ALTER TABLE `motivation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `motivation`
--
ALTER TABLE `motivation`
  ADD CONSTRAINT `motivation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
