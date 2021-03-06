-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 12:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innovatornusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `chamber`
--

CREATE TABLE `chamber` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `project_engagement` text NOT NULL,
  `indikator` text NOT NULL,
  `pendaftaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chamber`
--

INSERT INTO `chamber` (`id`, `nama`, `project_engagement`, `indikator`, `pendaftaran`) VALUES
(3, 'Menjamin Kehidupan yang Sehat dan Meningkatkan Kesejahteraan Seluruh Penduduk Semua Usia', 'Normalisasi Daerah Tambakrejo karena adanya Normalisasi aliran sungai\r\nPILAR (Pusat Informasi & Layanan Remaja) -> Program Dance4life Indonesia\r\n', '3.7 Pada tahun 2030, memastikan akses universal terhadap layanan kesehatan sexual dan reproduksi, termasuk untuk perencanaan, informasi, dan pendidikan keluarga, dan mengintegrasikan kesehatan reproduksi kedalam strategi dan program nasional', 'GOODHEALTHWELL'),
(4, 'Menjamin Kualitas Pendidikan yang Inklusif dan Merata serta Meningkatkan Kesempatan Belajar Sepanjang Hayat untuk semua', 'ASA Edu Kampung Nelayan tambak lorok', 'Pada tahun 2030, menjamin bahwa semua anak perempuan dan laki-laki menyelesaikan SD-SMP tanpa dipungut biaya, setara, dan berkualitas, yang mengarah pada capaian pembelajaran yang relevan dan efektif', 'QUALITYEDUCATION'),
(8, 'Meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan, kesempatan kerja yang produktif dan menyeluruh, serta pekerjaan yang layak untuk semua', 'https://kreskros.com/pages/our-story -> Lokasi di Ambarawa, Central Java, Indonesia 50612.', '8.3 Menggalakkan kebijakan pembangunan yang mendukung kegiatan produktif, penciptaan lapangan kerja layak, kewirausahaan, kreativitas dan inovasi, dan mendorong formalisasi dan pertumbuhan usaha mikro, kecil dan menengah, termasuk melalui akses terhadap jasa keuangan. ', 'DECENTWORK'),
(11, 'Sustainable cities and communities', 'Normalisasi Daerah Tambakrejo karena adanya Normalisasi aliran sungai', '11.3 Pada tahun 2030, memperkuat urbanisasi yang inklusif dan berkelanjutan\r\nserta kapasitas partisipasi, perencanaan penanganan permukiman yang\r\nberkelanjutan dan terintegrasi di semua negara.\r\n', 'SUSCITIES'),
(13, 'Mengambil tindakan cepat untuk mengatasi perubahan iklim dan dampaknya', 'Desa Mangkang (Pengolahan limbah plastik)', '13.3 Menguatkan daya tahan dan kapasitas untuk beradaptasi dari bahaya-bahaya terkait perubahan iklim dan bencana alam di semua negara', 'CLIMATEACTION'),
(16, 'Menguatkan masyarakat yang inklusif dan damai untuk pembangunan berkelanjutan, menyediaakan akses keadilan untuk semua dan membangun kelembagaan yang efektif, akuntabel, dan inklusif d semua tingkatan', 'UID di Thekelan Kab. Semarang', '16.B Menggalakan dan Menegakkan Undang-Undang dan Kebijakan yang tidak diskriminatif untuk pembangunan berkelanjutan', 'PEACEJUSTICE');

-- --------------------------------------------------------

--
-- Table structure for table `form_pendaftaran`
--

CREATE TABLE `form_pendaftaran` (
  `id_form` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  `Profesi` varchar(225) NOT NULL,
  `Institusi` varchar(225) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`id_form`, `Nama`, `Email`, `No_Hp`, `Profesi`, `Institusi`, `Date`) VALUES
(1, 'andika', 'Apratama918@gmail.com', '0000000000', '0', '0', '2019-09-29'),
(2, 'budi', 'budi@gmail.com', '1111111111111', '0', '0', '2019-09-29'),
(3, 'yuda', 'yuda@gmail.com', '2222222222222', '0', '0', '2019-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
