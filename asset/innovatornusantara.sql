-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jun 2019 pada 15.39
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
-- Struktur dari tabel `chamber`
--

CREATE TABLE `chamber` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `project_engagement` text NOT NULL,
  `indikator` text NOT NULL,
  `pendaftaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chamber`
--

INSERT INTO `chamber` (`id`, `nama`, `project_engagement`, `indikator`, `pendaftaran`) VALUES
(3, 'Menjamin Kehidupan yang Sehat dan Meningkatkan Kesejahteraan Seluruh Penduduk Semua Usia', 'Normalisasi Daerah Tambakrejo karena adanya Normalisasi aliran sungai\r\nPILAR (Pusat Informasi & Layanan Remaja) -> Program Dance4life Indonesia\r\n', '3.7 Pada tahun 2030, memastikan akses universal terhadap layanan kesehatan sexual dan reproduksi, termasuk untuk perencanaan, informasi, dan pendidikan keluarga, dan mengintegrasikan kesehatan reproduksi kedalam strategi dan program nasional', 'GOODHEALTHWELL'),
(4, 'Menjamin Kualitas Pendidikan yang Inklusif dan Merata serta Meningkatkan Kesempatan Belajar Sepanjang Hayat untuk semua', 'ASA Edu Kampung Nelayan tambak lorok', 'Pada tahun 2030, menjamin bahwa semua anak perempuan dan laki-laki menyelesaikan SD-SMP tanpa dipungut biaya, setara, dan berkualitas, yang mengarah pada capaian pembelajaran yang relevan dan efektif', 'QUALITYEDUCATION'),
(8, 'Meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan, kesempatan kerja yang produktif dan menyeluruh, serta pekerjaan yang layak untuk semua', 'https://kreskros.com/pages/our-story -> Lokasi di Ambarawa, Central Java, Indonesia 50612.', '8.3 Menggalakkan kebijakan pembangunan yang mendukung kegiatan produktif, penciptaan lapangan kerja layak, kewirausahaan, kreativitas dan inovasi, dan mendorong formalisasi dan pertumbuhan usaha mikro, kecil dan menengah, termasuk melalui akses terhadap jasa keuangan. ', 'DECENTWORK'),
(11, 'Sustainable cities and communities', 'Normalisasi Daerah Tambakrejo karena adanya Normalisasi aliran sungai', '11.3 Pada tahun 2030, memperkuat urbanisasi yang inklusif dan berkelanjutan\r\nserta kapasitas partisipasi, perencanaan penanganan permukiman yang\r\nberkelanjutan dan terintegrasi di semua negara.\r\n', 'SUSCITIES'),
(13, 'Mengambil tindakan cepat untuk mengatasi perubahan iklim dan dampaknya', 'Desa Mangkang (Pengolahan limbah plastik)', '13.3 Menguatkan daya tahan dan kapasitas untuk beradaptasi dari bahaya-bahaya terkait perubahan iklim dan bencana alam di semua negara', 'CLIMATEACTION'),
(16, 'Menguatkan masyarakat yang inklusif dan damai untuk pembangunan berkelanjutan, menyediaakan akses keadilan untuk semua dan membangun kelembagaan yang efektif, akuntabel, dan inklusif d semua tingkatan', 'UID di Thekelan Kab. Semarang', '16.B Menggalakan dan Menegakkan Undang-Undang dan Kebijakan yang tidak diskriminatif untuk pembangunan berkelanjutan', 'PEACEJUSTICE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
