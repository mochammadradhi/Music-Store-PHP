-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 07:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040039`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `category` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `rekomendasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `category`, `image`, `nama`, `deskripsi`, `harga`, `rekomendasi`) VALUES
(1, 'guitar', 'yamahalj6.jpg', 'Yamaha LJ 6', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 4200000, '4.7/5.0'),
(2, 'guitar', 'gibsonlg0.jfif', 'Gibson LG 17', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 4200000, '4.7/5.0'),
(3, 'guitar', 'martinlx1.jpg', 'Martin LX 1', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 4200000, '4.7/5.0'),
(4, 'guitar', 'taylorgs.jfif', 'Taylor GS', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 4200000, '4.7/5.0'),
(5, 'guitar', 'washburnR314kk.jpg', 'Washburn R314 KK', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 4200000, '4.7/5.0'),
(6, 'bass', 'cortb4plus.jpg', 'Cort B4 Plus', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 3000000, '4.7/5.0'),
(7, 'bass', 'gibsonthunderbird.jpg', 'Gibson Thunder Bird', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 3000000, '4.7/5.0'),
(8, 'bass', 'ibanezgsr200.jpg', 'Ibanez GSR 200', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 3000000, '4.7/5.0'),
(9, 'bass', 'warwickgermanpro.jpg', 'Warwick German Pro', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 3000000, '4.7/5.0'),
(10, 'bass', 'yamahatrbx504.jpg', 'Yamaha TRB X 504', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 3000000, '4.7/5.0'),
(11, 'violin', 'belmonte9045classical-01.jpg', 'Belmonte 9045 Classic', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.0/5.0'),
(12, 'violin', 'knillingp4kfbucharest1-01.jpg', 'Knilling P4K Bucharest', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.0/5.0'),
(13, 'violin', 'palatinovn350.jpg', 'Palatino VN 350', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.5/5.0'),
(14, 'violin', 'stentor1500student.jpg', '5tentor 1500 Student', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.5/5.0'),
(15, 'violin', 'tiedyeviolin-01.jpg', 'Tiedye Violin', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.5/5.0'),
(16, 'flute', 'azumiaz2srbo-01.jpg', 'Azumi AZ2 SR', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 4120000, '4.3/5.0'),
(17, 'flute', 'gameinhardt2spstraght.jpg', 'Gameinhard T2S', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 4120000, '4.3/5.0'),
(18, 'flute', 'etudewwfet30sl.jpg', 'Etude WWF 30SL', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 4120000, '4.3/5.0'),
(19, 'flute', 'jupiterjfl700.jpg', 'Jupiter JFL700', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 4120000, '4.3/5.0'),
(20, 'flute', 'yamahayfl221.jpg', 'Yamaha YFL 221', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 4120000, '4.3/5.0'),
(21, 'saxophone', 'yamahayas23.jfif', 'Yamaha YAS23', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 5000000, '3.8/5.0'),
(22, 'saxophone', 'selmerbundyii.jfif', 'Selmer Bundy II', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 5000000, '3.8/5.0'),
(23, 'saxophone', 'bundybas300.jpg', 'Bundy BAS300', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 5000000, '3.8/5.0'),
(24, 'saxophone', 'yanagisawaawo10-01.jpg', 'Yanagisawa AWO10', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 5000000, '3.8/5.0'),
(25, 'saxophone', 'jeanpaults400.jfif', 'Jean Paul TS 400', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 9000000, '4.6/5.0');

-- --------------------------------------------------------

--
-- Table structure for table `music_gear`
--

CREATE TABLE `music_gear` (
  `ID` int(11) NOT NULL,
  `img_music_gear` varchar(20) DEFAULT NULL,
  `nama_music_gear` varchar(30) DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `rekomendasi` varchar(8) DEFAULT NULL,
  `category` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_gear`
--

INSERT INTO `music_gear` (`ID`, `img_music_gear`, `nama_music_gear`, `deskripsi`, `harga`, `rekomendasi`, `category`) VALUES
(1, '1-04.jpg', 'Guitar Acoustic', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 4800000, '4.7/5.0', 'guitar'),
(2, '1-05.jpg', 'Bass Electric', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 3000000, '4.5/5.0', ''),
(3, '1-01.jpg', 'Biola', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.0/5.0', ''),
(4, '1-06.jpg', 'Flute', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 7120000, '3.8/5.0', ''),
(5, '1-10.jpg', 'Saxophone', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 4200000, '4.0/5.0', ''),
(6, '1-03.jpg', 'Drum ', 'Drum adalah kelompok alat musik perkusi yang terdiri dari kulit yang direntangkan dan dipukul dengan tangan atau sebuah batang. Selain kulit, drum juga digunakan dari bahan lain, misalnya plastik. ... Orang yang memainkan drum set disebut drummer.', 25490000, '4.8/5.0', ''),
(7, '1-07.jpg', 'Kajon Acoustic', 'Kajon adalah alat musik perkusi berbentuk kotak bersisi enam dengan lubang di salah satu sisi yang dimainkan dengan menepuk sisi-sisinya dengan tangan, jari, atau berbagai alat lain seperti stik atau sikat (drum)', 760000, '4.5/5.0', ''),
(8, '1-08.jpg', 'Loop Station', 'Looper ini mempunyai fitur tiga stereo track yg bisa disinkronisasi dengan knob volume khusus, master Expression pedal, dan ultra-wide control panel deluxe untuk manipulasi performa live terbaik.Sambungkan gitar Anda, bass, keyboard, atau instrumen a', 10750000, '4.0/5.0', ''),
(9, '1-02.jpg', 'DJ Set', 'DJ Mixer memberikan dj fungsi untuk mengatur volume, pitch (kekuatan frequency suara masuk), Treble (suara tinggi), Middle (suara tengah), Bass (suara rendah), Effects dan lain sebagainya. 2. DJ Headphones. Headphones memiliki peran yang cukup pentin', 23990000, ' 4.7/5.0', ''),
(10, '1-09.jpg', 'Piano', 'Piano adalah alat musik yang dimainkan dengan jari-jemari tangan. Pemain piano disebut pianis. Piano adalah salah jenis alat musik yang populer di dunia. alat musik piano juga dapat dikategorikan sebagai alat musik tertua dan juga memiliki harga yang', 10990000, '4.5/5.0', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `priority`) VALUES
(1, 'admin', '$2y$10$Razd.J04V4r8Xvka/uVO7OfIVGeC2oMLwsuXBrViF2ZnY0MxqageS', 1),
(2, 'adminsuper', '$2y$10$H1n9MJPOB0k3fPgt3f/VyunLRG9qytbdZziQsj1lctLMcNLJAU8VW', 1),
(3, 'user1', '$2y$10$qjYkFDuFhXeCJmIoYv/RW.t99Qy3M2x84hTARORPCmk1iNzYD.43q', 4),
(4, 'mochammadradhi', '$2y$10$c3DhjUcY47ZJiMQuLv591.pKRUsal3RFBUwnBX4yoWjMRkeOMzTh6', 1),
(5, 'user2', '$2y$10$yejZmp8XWglPughACJLp2uiL76nTLZ.xQQPo7LfB5Ahvzep/RxsAW', 4),
(6, 'toko1', '$2y$10$bjAyh8y29JuKaHzv2NXfXOSg9DhtmblROBwPobvdV9M1bR5/g/cPy', 4),
(8, 'admin3', '$2y$10$ziIPYWzhs8j4wIY2GvCz4O80vlq2sOlwyMk5OGWPrGIPX6NlL8gN2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `category` (`category`);

--
-- Indexes for table `music_gear`
--
ALTER TABLE `music_gear`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `music_gear`
--
ALTER TABLE `music_gear`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
