-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 09:20 AM
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
-- Database: `db_kulitanjing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpasien`
--

CREATE TABLE `tbpasien` (
  `idpasien` int(10) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `no_telp_pemilik` varchar(15) NOT NULL,
  `nama_anjing` varchar(10) NOT NULL,
  `jenis_kelamin_anjing` varchar(10) NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `umur_anjing` varchar(20) NOT NULL,
  `jenis_anjing` varchar(20) NOT NULL,
  `berat_badan_anjing` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbpasien`
--

INSERT INTO `tbpasien` (`idpasien`, `nama_pemilik`, `no_telp_pemilik`, `nama_anjing`, `jenis_kelamin_anjing`, `noip`, `tanggal`, `umur_anjing`, `jenis_anjing`, `berat_badan_anjing`) VALUES
(60, 'Yuki', '081237183903', 'Eron', 'Jantan', '::1', '2024-09-19', '10 tahun', 'Beagle', 15),
(59, 'Putri', '0813423', 'Eron', 'Jantan', '::1', '2024-09-18', '10000thn', 'Siberian Husky', 100),
(58, 'Putri', '0813423', 'Eron', 'Betina', '::1', '2024-09-18', '10 thn', 'Anjing Bali', 100),
(57, 'Putr', '323595395', 'Eron', 'Jantan', '::1', '2024-09-18', '10 tahun', 'Bichon Frise', 10),
(56, 'RIN', '081242352353', 'Kenzo', 'Jantan', '::1', '2024-09-18', '10 tahun', 'Shih Tzu', 4),
(55, 'Rama', '081234234', 'Surya', 'Jantan', '::1', '2024-09-18', '2 tahun', 'Anjing Bali', 5),
(61, 'Uti', '03282342352355', 'Santa', 'Jantan', '::1', '2024-09-19', '23 tahun', 'Chihuahua', 1),
(62, 'weetet', 'easdaf', 'sfsfsf', 'Jantan', '::1', '2024-09-19', '3 bulan', 'Golden Retriever', 343),
(63, 'Andi Saputra', '081234567890', 'Rocky', 'Jantan', '::1', '2024-09-19', '2 tahun 3 bulan', 'Chowchow', 25),
(64, 'Yodi', '081243252', 'Eyon', 'Jantan', '::1', '2024-09-19', '10 tahun 15 bulan', 'Beagle', 25),
(65, 'Andi', '32424', 'Tokek', 'Betina', '::1', '2024-09-19', '10 tahun 15 bulan', 'Bullmastiff', 70),
(66, 'Khrisna', '08199555831', 'Pichu', 'Jantan', '::1', '2024-09-20', '4-6 bulan', 'Dachshund', 5),
(67, 'Budiono Siregar', '0812237283903', 'Kapal Lauw', 'Betina', '::1', '2024-09-20', '2 bulan', 'Healder', 25),
(68, 'Arun', '24242', 'HAHAHIHI', 'Jantan', '::1', '2024-09-21', '4 THN', 'Golden Retriever', 34),
(69, 'uti', 'r35523523', 'erong', 'Jantan', '::1', '2024-09-21', '12tthn', 'Beagle', 45),
(70, 'erong', '213142', 'gfdxdvdv', 'Jantan', '::1', '2024-09-21', 'esfs', 'Golden Retriever', 0),
(71, 'Jevon', '024135332643637', 'pUTRI', 'Betina', '::1', '2024-09-22', '22 tahun', 'bsh', 324242),
(72, 'oon', '081', 'eron', 'Jantan', '::1', '2024-09-22', '2 tahun', 'Dachshund', 6),
(81, 'putri', '08123214', 'eron', 'Jantan', '::1', '2024-09-30', '4 tahun', 'Labrador Retriever', 3),
(80, 'putri wirawan', '081237183903', 'Eron', 'Jantan', '::1', '2024-09-30', '10 tahun', 'Beagle', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(23, 'G23', 'Gatal terasa perih'),
(21, 'G21', 'Timbul benjolan - benjolan bernanah'),
(22, 'G22', 'Diare'),
(18, 'G18', 'Kulit bersisik'),
(19, 'G19', 'Kebotakan'),
(20, 'G20', 'Luka pada wajah'),
(17, 'G17', 'Luka pada hidung'),
(15, 'G15', 'Rambut tampak memiliki warna dan struktur yang sedikit berbeda'),
(16, 'G16', 'Kulit kering dan kasar atau kusam'),
(14, 'G14', 'Bercak kasar pada kulit'),
(13, 'G13', 'Mata berair'),
(11, 'G11', 'Bersin - bersin'),
(12, 'G12', 'Hidung mengeluarkan cairan'),
(10, 'G10', 'Kerontokan rambut'),
(8, 'G08', 'Area kulit tertentu tampak lebih gelap (Hiperpigmentasi)'),
(9, 'G09', 'Kulit bernanah'),
(7, 'G07', 'Kulit berwarna kemerahan'),
(4, 'G04', 'Pembengkakan'),
(5, 'G05', 'Penebalan kulit'),
(6, 'G06', 'Benjolan'),
(1, 'G01', 'Gatal'),
(2, 'G02', 'Kekurangan nafsu makan (anoreksia)'),
(3, 'G03', 'Kekurangan antusiasme (lesu)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `idhasil` int(5) NOT NULL,
  `idpasien` int(5) NOT NULL,
  `kdpenyakit` varchar(4) NOT NULL,
  `persentase` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`idhasil`, `idpasien`, `kdpenyakit`, `persentase`, `tanggal`) VALUES
(143, 49, 'P3', 42.15, '2024-09-15 08:15:37'),
(144, 49, 'P2', 17.36, '2024-09-15 08:15:37'),
(441, 73, 'P05', 47.37, '2024-09-30 12:00:20'),
(442, 73, 'P08', 21.05, '2024-09-30 12:00:20'),
(448, 75, 'P05', 24, '2024-09-30 13:19:03'),
(449, 75, 'P08', 17.31, '2024-09-30 13:19:03'),
(450, 75, 'P09', 3.74, '2024-09-30 13:19:03'),
(451, 76, 'P05', 43.18, '2024-09-30 13:21:10'),
(452, 76, 'P08', 22.73, '2024-09-30 13:21:10'),
(453, 77, 'P05', 35.85, '2024-09-30 13:52:04'),
(454, 77, 'P08', 18.87, '2024-09-30 13:52:04'),
(455, 78, 'P05', 51.61, '2024-09-30 14:11:19'),
(456, 78, 'P08', 19.35, '2024-09-30 14:11:19'),
(457, 78, 'P02', 4.35, '2024-09-30 14:15:11'),
(458, 78, 'P05', 0, '2024-09-30 14:15:11'),
(459, 78, 'P07', 16.31, '2024-09-30 14:15:11'),
(460, 78, 'P08', 4.83, '2024-09-30 14:15:11'),
(461, 78, 'P09', 3.63, '2024-09-30 14:15:11'),
(462, 78, 'P05', 43.18, '2024-09-30 14:18:29'),
(463, 78, 'P08', 22.73, '2024-09-30 14:18:29'),
(464, 79, 'P05', 28.57, '2024-09-30 14:19:30'),
(465, 79, 'P08', 28.57, '2024-09-30 14:19:30'),
(466, 79, 'P05', 43.18, '2024-09-30 14:19:45'),
(467, 79, 'P08', 22.73, '2024-09-30 14:19:45'),
(468, 79, 'P05', 43.18, '2024-09-30 14:23:46'),
(469, 79, 'P08', 22.73, '2024-09-30 14:23:46'),
(470, 79, 'P05', 43.18, '2024-09-30 14:23:57'),
(471, 79, 'P08', 22.73, '2024-09-30 14:23:57'),
(472, 79, 'P05', 43.18, '2024-09-30 14:26:37'),
(473, 79, 'P08', 22.73, '2024-09-30 14:26:37'),
(474, 79, 'P07', 19.35, '2024-09-30 14:26:52'),
(475, 79, 'P07', 19.35, '2024-09-30 14:28:36'),
(476, 79, 'P07', 19.35, '2024-09-30 14:28:38'),
(477, 79, 'P07', 19.35, '2024-09-30 14:29:18'),
(478, 79, 'P05', 51.61, '2024-09-30 14:29:31'),
(479, 79, 'P08', 19.35, '2024-09-30 14:29:31'),
(480, 79, 'P05', 26.47, '2024-09-30 14:29:54'),
(481, 79, 'P08', 29.41, '2024-09-30 14:29:54'),
(482, 79, 'P07', 17.82, '2024-09-30 14:30:13'),
(483, 79, 'P05', 32.45, '2024-09-30 14:30:40'),
(484, 79, 'P08', 18.87, '2024-09-30 14:30:40'),
(485, 79, 'P05', 53.27, '2024-09-30 14:30:55'),
(486, 79, 'P08', 29.91, '2024-09-30 14:30:55'),
(487, 79, 'P09', 0, '2024-09-30 14:30:55'),
(488, 79, 'P05', 20.43, '2024-09-30 14:31:11'),
(489, 79, 'P07', 20.65, '2024-09-30 14:31:11'),
(490, 79, 'P08', 47.31, '2024-09-30 14:31:11'),
(491, 79, 'P09', -0, '2024-09-30 14:31:11'),
(492, 79, 'P05', 28.57, '2024-09-30 14:31:32'),
(493, 79, 'P08', 28.57, '2024-09-30 14:31:32'),
(494, 79, 'P12', 0, '2024-09-30 14:31:32'),
(495, 79, 'P08', 11.76, '2024-09-30 14:31:54'),
(496, 80, 'P02', 14.84, '2024-09-30 14:36:49'),
(497, 80, 'P06', 13.19, '2024-09-30 14:36:49'),
(498, 80, 'P08', 6.59, '2024-09-30 14:36:49'),
(499, 80, 'P02', 7.89, '2024-09-30 14:40:38'),
(500, 80, 'P06', 31.58, '2024-09-30 14:40:38'),
(501, 80, 'P08', 7.89, '2024-09-30 14:40:38'),
(502, 80, 'P02', 26.47, '2024-09-30 14:40:50'),
(503, 80, 'P06', 17.65, '2024-09-30 14:40:50'),
(504, 80, 'P08', 0, '2024-09-30 14:40:50'),
(505, 80, 'P02', 26.47, '2024-09-30 14:46:45'),
(506, 80, 'P06', 17.65, '2024-09-30 14:46:45'),
(507, 80, 'P08', 0, '2024-09-30 14:46:45'),
(508, 80, 'P01', 72.67, '2024-09-30 14:48:37'),
(509, 80, 'P05', 0.84, '2024-09-30 14:48:37'),
(510, 80, 'P08', 0.2, '2024-09-30 14:48:37'),
(511, 80, 'P09', 0, '2024-09-30 14:48:37'),
(512, 80, 'P02', 18.53, '2024-09-30 14:49:25'),
(513, 80, 'P02', 18.53, '2024-09-30 14:50:06'),
(514, 80, 'P02', 18.53, '2024-09-30 14:50:18'),
(515, 81, 'P05', 29.91, '2024-09-30 15:34:01'),
(516, 81, 'P08', 28.04, '2024-09-30 15:34:01'),
(517, 81, 'P05', 6.3, '2024-09-30 15:39:37'),
(518, 81, 'P08', 16.58, '2024-09-30 15:39:37'),
(519, 81, 'P09', 0, '2024-09-30 15:39:37'),
(520, 81, 'P05', 39.09, '2024-10-01 07:36:11'),
(521, 81, 'P08', 22.73, '2024-10-01 07:36:11'),
(522, 81, 'P02', 9.66, '2024-10-01 07:37:19'),
(523, 81, 'P05', 11.47, '2024-10-01 07:37:19'),
(524, 81, 'P07', 27.16, '2024-10-01 07:37:19'),
(525, 81, 'P08', 4.02, '2024-10-01 07:37:19'),
(526, 81, 'P09', 0, '2024-10-01 07:37:19'),
(527, 81, 'P02', 9.66, '2024-10-01 07:49:10'),
(528, 81, 'P05', 11.47, '2024-10-01 07:49:10'),
(529, 81, 'P07', 27.16, '2024-10-01 07:49:10'),
(530, 81, 'P08', 4.02, '2024-10-01 07:49:10'),
(531, 81, 'P09', 0, '2024-10-01 07:49:10'),
(532, 81, 'P02', 9.66, '2024-10-01 08:14:17'),
(533, 81, 'P05', 11.47, '2024-10-01 08:14:17'),
(534, 81, 'P07', 27.16, '2024-10-01 08:14:17'),
(535, 81, 'P08', 4.02, '2024-10-01 08:14:17'),
(536, 81, 'P09', 0, '2024-10-01 08:14:17'),
(537, 81, 'P02', 9.66, '2024-10-01 08:15:51'),
(538, 81, 'P05', 11.47, '2024-10-01 08:15:51'),
(539, 81, 'P07', 27.16, '2024-10-01 08:15:51'),
(540, 81, 'P08', 4.02, '2024-10-01 08:15:51'),
(541, 81, 'P09', 0, '2024-10-01 08:15:51'),
(542, 81, 'P02', 9.66, '2024-10-01 08:28:56'),
(543, 81, 'P05', 11.47, '2024-10-01 08:28:56'),
(544, 81, 'P07', 27.16, '2024-10-01 08:28:56'),
(545, 81, 'P08', 4.02, '2024-10-01 08:28:56'),
(546, 81, 'P09', 0, '2024-10-01 08:28:56'),
(547, 81, 'P02', 9.66, '2024-10-01 08:30:20'),
(548, 81, 'P05', 11.47, '2024-10-01 08:30:20'),
(549, 81, 'P07', 27.16, '2024-10-01 08:30:20'),
(550, 81, 'P08', 4.02, '2024-10-01 08:30:20'),
(551, 81, 'P09', 0, '2024-10-01 08:30:20'),
(552, 81, 'P02', 9.66, '2024-10-01 08:30:35'),
(553, 81, 'P05', 11.47, '2024-10-01 08:30:35'),
(554, 81, 'P07', 27.16, '2024-10-01 08:30:35'),
(555, 81, 'P08', 4.02, '2024-10-01 08:30:35'),
(556, 81, 'P09', 0, '2024-10-01 08:30:35'),
(557, 81, 'P02', 9.66, '2024-10-01 08:30:45'),
(558, 81, 'P05', 11.47, '2024-10-01 08:30:45'),
(559, 81, 'P07', 27.16, '2024-10-01 08:30:45'),
(560, 81, 'P08', 4.02, '2024-10-01 08:30:45'),
(561, 81, 'P09', 0, '2024-10-01 08:30:45'),
(562, 81, 'P02', 9.66, '2024-10-01 08:30:56'),
(563, 81, 'P05', 11.47, '2024-10-01 08:30:56'),
(564, 81, 'P07', 27.16, '2024-10-01 08:30:56'),
(565, 81, 'P08', 4.02, '2024-10-01 08:30:56'),
(566, 81, 'P09', 0, '2024-10-01 08:30:56'),
(567, 81, 'P02', 9.66, '2024-10-01 08:31:21'),
(568, 81, 'P05', 11.47, '2024-10-01 08:31:21'),
(569, 81, 'P07', 27.16, '2024-10-01 08:31:21'),
(570, 81, 'P08', 4.02, '2024-10-01 08:31:21'),
(571, 81, 'P09', 0, '2024-10-01 08:31:21'),
(572, 81, 'P05', 65.52, '2024-10-01 08:31:31'),
(573, 81, 'P08', 13.79, '2024-10-01 08:31:31'),
(574, 81, 'P05', 65.52, '2024-10-01 08:32:07'),
(575, 81, 'P08', 13.79, '2024-10-01 08:32:07'),
(576, 81, 'P05', 65.52, '2024-10-01 08:32:22'),
(577, 81, 'P08', 13.79, '2024-10-01 08:32:22'),
(578, 81, 'P05', 23.88, '2024-10-01 08:32:35'),
(579, 81, 'P08', 22.39, '2024-10-01 08:32:35'),
(580, 81, 'P05', 3.1, '2024-10-01 08:32:52'),
(581, 81, 'P07', 25.8, '2024-10-01 08:32:52'),
(582, 81, 'P08', 2.29, '2024-10-01 08:32:52'),
(583, 81, 'P09', 23.74, '2024-10-01 08:32:52'),
(584, 81, 'P01', 20.57, '2024-10-01 08:33:33'),
(585, 81, 'P02', 0.63, '2024-10-01 08:33:33'),
(586, 81, 'P03', 12.17, '2024-10-01 08:33:33'),
(587, 81, 'P04', 0, '2024-10-01 08:33:33'),
(588, 81, 'P05', 8.33, '2024-10-01 08:33:33'),
(589, 81, 'P06', 13.55, '2024-10-01 08:33:33'),
(590, 81, 'P07', 34.95, '2024-10-01 08:33:33'),
(591, 81, 'P08', 1.76, '2024-10-01 08:33:33'),
(592, 81, 'P09', 0, '2024-10-01 08:33:33'),
(593, 81, 'P12', 0, '2024-10-01 08:33:33'),
(594, 81, 'P08', 40, '2024-10-01 08:48:08'),
(595, 81, 'P05', 60, '2024-10-01 08:48:25'),
(596, 81, 'P05', 40, '2024-10-01 08:48:33'),
(597, 81, 'P05', 37.5, '2024-10-01 08:48:46'),
(598, 81, 'P08', 40, '2024-10-01 08:48:57'),
(599, 81, 'P07', 37.5, '2024-10-01 08:49:20'),
(600, 81, 'P03', 60, '2024-10-01 08:49:49'),
(601, 81, 'P03', 60, '2024-10-01 08:50:02'),
(602, 81, 'P07', 37.5, '2024-10-01 08:50:11'),
(603, 81, 'P05', 14.29, '2024-10-01 08:52:46'),
(604, 81, 'P05', 19.23, '2024-10-01 08:52:59'),
(605, 81, 'P07', 19.35, '2024-10-01 08:53:12'),
(606, 81, 'P03', 37.5, '2024-10-01 08:53:53'),
(607, 81, 'P04', 15, '2024-10-01 08:53:53'),
(608, 81, 'P04', 48, '2024-10-01 08:57:29'),
(609, 81, 'P09', 15, '2024-10-01 08:57:39'),
(610, 81, 'P09', 15, '2024-10-01 08:57:57'),
(611, 81, 'P01', 20.57, '2024-10-01 08:58:17'),
(612, 81, 'P02', 0.63, '2024-10-01 08:58:17'),
(613, 81, 'P03', 12.17, '2024-10-01 08:58:17'),
(614, 81, 'P04', 0, '2024-10-01 08:58:17'),
(615, 81, 'P05', 8.33, '2024-10-01 08:58:17'),
(616, 81, 'P06', 13.55, '2024-10-01 08:58:17'),
(617, 81, 'P07', 34.95, '2024-10-01 08:58:17'),
(618, 81, 'P08', 1.76, '2024-10-01 08:58:17'),
(619, 81, 'P09', 0, '2024-10-01 08:58:17'),
(620, 81, 'P12', 0, '2024-10-01 08:58:17'),
(621, 81, 'P01', 20.57, '2024-10-01 08:59:13'),
(622, 81, 'P02', 0.63, '2024-10-01 08:59:13'),
(623, 81, 'P03', 12.17, '2024-10-01 08:59:13'),
(624, 81, 'P04', 0, '2024-10-01 08:59:13'),
(625, 81, 'P05', 8.33, '2024-10-01 08:59:13'),
(626, 81, 'P06', 13.55, '2024-10-01 08:59:13'),
(627, 81, 'P07', 34.95, '2024-10-01 08:59:13'),
(628, 81, 'P08', 1.76, '2024-10-01 08:59:13'),
(629, 81, 'P09', 0, '2024-10-01 08:59:13'),
(630, 81, 'P12', 0, '2024-10-01 08:59:13'),
(631, 81, 'P08', 40, '2024-10-01 08:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `foto_penyakit` varchar(255) DEFAULT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `Gejala` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `foto_penyakit`, `kdpenyakit`, `nama_penyakit`, `definisi`, `Gejala`, `solusi`) VALUES
(1, 'AcralLickGranuloma.jpg', 'P01', 'Acral Lick Granuloma', 'Sebuah luka kulit kronis yang disebabkan\r\noleh anjing menjilat area tertentu pada\r\nkaki atau tungkai secara berlebihan, yang\r\ndapat menyebabkan peradangan dan\r\ninfeksi.', 'Gatal, kekurangan nafsu makan\r\n(anoreksia), kekurangan antusiasme\r\n(lesu), Benjolan, kulit berwarna\r\nkemerahan, Area kulit tertentu tampak\r\nlebih gelap (Hiperpigmentasi),\r\nKerontokan rambut, Rambut tampak\r\nmemiliki warna dan struktur yang sedikit\r\nberbeda, Kulit kering dan kasar atau\r\nkusam, Kebotakan.', 'Perbaiki pola makannya, berikan gizi yang berimbang untuk meningkatkan daya tahan tubuh pada anjing, \r\nBerikan multivitamin dan suplemen tambahan untuk meningkatkan daya tahan tubuh anjing peliharaan, Gunakan Obat Antihistamin\r\nseperti : Hydroxzyne, chlorpheniramine, Dexopin dan obat topikal Kortikosteroid. '),
(2, 'AcuteMoistDermatitis.jpg', 'P02', 'Acute Moist Dermatitis', 'Acute Moist Dermatitis dikenal sebagai\r\n\"hot spot\" kondisi kulit yang terjadi\r\nsecara tiba-tiba ketika area kulit menjadi\r\nbasah dan terinfeksi, biasanya karena\r\ngigitan serangga atau luka kecil lainnya.', 'Gatal, Penebalan kulit, Kulit berwarna\r\nkemerahan, Kerontokan rambut, Kulit\r\nkering dan kasar atau kusam, Kebotakan.', 'Cukur rambut pada permukaan kulit anjing yang terinfeksi, Gunakan Obat Antihistamin seperti vetadryll dan obat Kortikosteroid seperti Dexametasone untuk anti inflamasi adanya radang.'),
(3, 'AtopicDermatitis.jpg', 'P03', 'Atopic\r\nDermatitis', 'Kondisi kulit yang kronis dan gatal yang\r\ndisebabkan oleh reaksi alergi terhadap\r\nbahan-bahan di lingkungan sekitar,\r\nseperti serbuk sari, tungau, atau jamur.', 'Gatal, Benjolan, Kulit berwarna\r\nkemerahan, Kerontokan rambut, Bersin –\r\nbersin, Hidung mengeluarkan cairan,\r\nMata berair, Bercak kasar pada kulit, Kulit\r\nkering dan kasar atau kusam, Kebotakan.', 'Gunakan shampoo yang mengandung benzoyl\r\nperoxida (4-7 hari), Gunakan spray atau lotion yang mengandung hydrocortisone, Berikan makanan yang mengandung suplemen fatty acid, omega-3, dan omega-6, Gunakan obat anti radang dan anti alergi, Gunakan anastesi lokal dan topikal untuk menghilangkan gatal dan sakit yang muncul. '),
(4, 'FollicularDysplasia.jpg', 'P04', 'Follicular\r\nDysplasia', 'Sebuah kondisi genetik yang\r\nmenyebabkan kerusakan pada folikel\r\nrambut, sering kali mengakibatkan\r\nkerontokan bulu dan peradangan kulit.', 'Area kulit tertentu tampak lebih gelap\r\n(Hiperpigmentasi), Kerontokan rambut,\r\nBercak kasar pada kulit, Rambut tampak\r\nmemiliki warna dan struktur yang sedikit\r\nberbeda, Kulit kering dan kasar atau\r\nkusam, Kulit bersisik, Kebotakan.', 'Berikan suplemen yang mengandung asam lemak esensial, Gunakan shampoo antimikroba topikal, lalu bilas dengan conditioner.'),
(5, 'MalasseziaDermatitis.jpg', 'P05', 'Malassezia\r\nDermatitis', 'Infeksi jamur pada kulit anjing yang\r\ndisebabkan oleh jenis jamur tertentu,\r\nyang dapat menyebabkan\r\nperadangan dan gatal-gatal pada kulit.', 'Gatal, Kekurangan nafsu makan\r\n(anoreksia), Kekurangan antusiasme\r\n(lesu), Pembengkakan, Kerontokan\r\nrambut, Kulit kering dan kasar atau\r\nkusam, Kulit bersisik, Kebotakan.', 'Gunakan shampoo dengan kandungan sulfur 0,5% dan chlorhexadine 0,5% (2x seminggu). '),
(6, 'SarcopticMange.jpg', 'P06', 'Sarcoptic Mange', 'Sebuah infeksi kulit yang disebabkan\r\noleh tungau Sarcoptes scabiei, yang\r\nmenyebabkan rasa gatal yang parah dan\r\npembentukan kerak pada kulit.', 'Gatal, Benjolan, Kulit berwarna\r\nkemerahan, Area kulit tertentu tampak\r\nlebih gelap (Hiperpigmentasi), Kulit\r\nbernanah, Kerontokan rambut, Bercak\r\nkasar pada kulit, Kulit bersisik,\r\nKebotakan.', 'Mandi dengan shampoo yang mengandung sulfur 2-3% selama seminggu sekali sampai sembuh, minimal 6-8x mandi, Berikan lotion topikal seperti lotion scabisid, bersihkan\r\narea luka dengan air hangat lalu oleskan pada daerah luka yang mengalami rontok,\r\nkerak, dan gatal 2-3x dalam seminggu, Sebagai tindakan preventif sebaiknya anjing diletakkan pada lingkungan yang tertutup, Berikan obat kortikosteroid untuk mengurangi rasa gatal (1-3 hari). '),
(7, 'Dermatophytosis.jpg', 'P07', 'Dermatophytosis', 'Infeksi jamur pada kulit anjing, juga\r\ndikenal sebagai \"ringworm\" yang dapat\r\nmenyebabkan peradangan dan\r\nkehilangan bulu pada anjing.', 'Gatal, Kulit berwarna kemerahan, Area\r\nkulit tertentu tampak lebih gelap\r\n(Hiperpigmentasi), Kulit bernanah,\r\nKerontokan rambut, Bercak kasar pada\r\nkulit, Kulit bersisik, Kebotakan, Luka pada\r\nwajah.', 'Gunakan shampoo yang mengandung chlorhexidine dan miconazole. Berikan obat anti jamur seperti griseofulvin, ketoconazole, dan itraconazole. '),
(8, 'PemphigusFoliaceus.jpg', 'P08', 'Pemphigus\r\nfoliaceus', 'Sebuah penyakit autoimun di mana sistem kekebalan tubuh menyerang sel-sel kulit, menyebabkan pembentukan lepuhan dan keropeng pada kulit anjing.', 'Gatal, Kekurangan nafsu makan\r\n(anoreksia), Penebalan kulit, Kulit\r\nberwarna kemerahan, Luka pada hidung,\r\nKulit bersisik, Luka pada wajah.', 'Gunakan kortikosteroid seperti prednisone dan dexametasone, Jika sudah diberikan obat kortikosteroid sebaiknya\r\npakan diubah menjadi rendah lemak agar hewan terhindar dari pancreatitis, Berikan antibiotik tetrasiulin, dekosiulin untuk\r\nmenghindari infeksi sekunder. '),
(9, 'Demodicosis.jpg', 'P09', 'Demodicosis', 'Infestasi kulit oleh tungau Demodex,\r\nyang dapat menyebabkan peradangan,\r\nkerontokan bulu, dan pembentukan\r\nkerak pada kulit.', 'Gatal, Kekurangan nafsu makan\r\n(anoreksia), Kekurangan antusiasme\r\n(lesu), Kulit berwarna kemerahan, Area\r\nkulit tertentu tampak lebih gelap\r\n(Hiperpigmentasi), Kerontokan rambut,\r\nLuka pada hidung, Kulit bersisik,\r\nKebotakan, Luka pada wajah.', 'Gunakan invermectin seminggu sekali, Gunakan Amitraz 1:100 ml untuk mandi, Gunakan obat antibakteri seperti Erythromycin. '),
(10, 'Pediculosis.jpg', 'P10', 'Pediculosis', 'Infestasi kutu pada kulit anjing, yang\r\ndapat menyebabkan gatal-gatal, iritasi\r\nkulit, dan kerontokan bulu', 'Gatal, Penebalan kulit, Benjolan, Area\r\nkulit tertentu tampak lebih gelap\r\n(Hiperpigmentasi), Kulit bernanah,\r\nKerontokan rambut, Bercak kasar pada\r\nkulit, Rambut tampak memiliki warna dan\r\nstruktur yang sedikit berbeda, Kulit kering dan kasar atau kusam, Kebotakan.', 'Cukur rambut yang terserang kutu, berikan spray insektisida seperti fipronil dan selamectine. '),
(11, 'Impetigo.jpg', 'P11', 'Impetigo', 'Infeksi kulit akibat bakteri yang\r\ndisebabkan oleh staphylococcus aureus.\r\nPenyakit kulit ini paling sering terjadi\r\npada anak anjing usia 3 - 6 bulan.', 'Gatal, Kekurangan antusiasme (lesu),\r\nTimbul benjolan - benjolan bernanah,\r\nDiare.', 'Salep antibiotik tanpa resep topikal, seperti Neosporin, Antibiotik oral, seperti amoksisilin-klavulanat acid dan\r\nsefalosporin, Jika tidak mempan, berikan clindamycin atau trimethoprim sulfamethoxazole. (dengan resep dokter)\r\n'),
(12, 'CaninePyoderma .jpg', 'P12', 'Canine\r\nPyoderma', 'Infeksi bakteri pada kulit anjing\r\nPyoderma pada anjing bisa berisfat\r\nsuperfisal (infeksi pada lapisan kulit atas) atau infeksi yang mencapai lapisan kulit yang lebih dalam.', 'Kulit berwarna kemerahan, Kerontokan\r\nrambut, Kulit bersisik, Timbul benjolan -\r\nbenjolan bernanah, Gatal terasa perih.', 'Berikan obat antibiotik seperti cefadroxil, colaxacillin untuk jangka waktu antara dua dan enam minggu, Gunakan spray dan shampoo yang  antibakteri yang direkomendasikan oleh dokter hewan untuk membantu mengatasi infeksi kulit, Jaga kebersihan kulit dan bulu anjing dengan rutin memandikannya menggunakan produk yang sesuai, Lakukan kontrol secara berkala dengan dokter hewan untuk memastikan infeksi benar-benar sembuh dan tidak kambuh.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_penyakitKulit` int(11) NOT NULL,
  `id_gejalaKulit` int(11) NOT NULL,
  `belief` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id_penyakitKulit`, `id_gejalaKulit`, `belief`) VALUES
(7, 14, 0.6),
(7, 10, 0.8),
(7, 9, 0.6),
(7, 7, 0.4),
(7, 1, 1),
(6, 19, 0.8),
(6, 18, 0.8),
(6, 14, 0.8),
(6, 10, 0.8),
(6, 8, 0.6),
(6, 7, 0.8),
(6, 6, 0.6),
(6, 1, 1),
(5, 19, 0.6),
(5, 18, 0.4),
(5, 16, 0.4),
(5, 10, 0.6),
(5, 4, 0.4),
(5, 3, 0.6),
(5, 1, 1),
(4, 19, 0.6),
(4, 18, 0.6),
(4, 16, 0.8),
(4, 15, 0.6),
(4, 14, 0.4),
(4, 10, 0.8),
(4, 8, 0.6),
(3, 19, 0.8),
(3, 16, 1),
(3, 14, 0.8),
(3, 13, 0.6),
(3, 10, 1),
(3, 7, 0.4),
(3, 1, 1),
(2, 16, 0.4),
(2, 10, 0.6),
(2, 7, 1),
(2, 5, 0.4),
(2, 1, 0.6),
(1, 19, 0.8),
(1, 16, 0.4),
(1, 15, 0.4),
(1, 10, 0.8),
(1, 8, 0.6),
(1, 7, 0.8),
(1, 6, 0.6),
(1, 1, 1),
(7, 18, 0.8),
(7, 19, 0.8),
(7, 20, 0.6),
(8, 1, 0.8),
(8, 2, 0.4),
(8, 5, 0.6),
(8, 7, 0.8),
(8, 17, 0.8),
(8, 18, 0.6),
(8, 20, 0.8),
(9, 3, 0.4),
(9, 7, 0.6),
(9, 8, 0.6),
(9, 10, 0.8),
(9, 17, 0.4),
(9, 18, 0.4),
(9, 19, 0.8),
(9, 20, 0.8),
(10, 1, 0.8),
(10, 10, 0.8),
(10, 19, 0.6),
(11, 21, 0.6),
(12, 7, 0.8),
(12, 10, 0.6),
(12, 18, 0.6),
(12, 21, 0.8),
(12, 23, 0.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpasien`
--
ALTER TABLE `tbpasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id_penyakitKulit`,`id_gejalaKulit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpasien`
--
ALTER TABLE `tbpasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `idhasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=632;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
