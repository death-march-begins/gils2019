-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Feb 2020 pada 18.46
-- Versi server: 10.2.30-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n7064883_inovatornusantara`
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
(3, 'Menjamin Kehidupan yang Sehat dan Meningkatkan Kesejahteraan Seluruh Penduduk Semua Usia', 'Normalisasi Daerah Tambakrejo karena adanya Normalisasi aliran sungai\r\nPILAR (Pusat Informasi & Layanan Remaja) -> Program Dance4life Indonesia\r\n', '<ol>\r\n<li>Pada tahun 2030, mengurangi rasio angka kematian ibu menjadi kurang dari 70 per 100.000 kelahiran</li>\r\n<li>Pada tahun 2030, mengakhiri kematian yang dapat dicegah pada bayi baru lahir dan balita, dimana setiap negara menargetkan untuk mengurangi kematian neonatal setidaknya menjadi kurang dari 12 per 1000 kelahiran dan kematian balita menjadi serendah 25 per 1000 kelahiran</li>\r\n<li>Pada tahun 2030, mengakhiri epidemi AIDS, tuberculosis, malaria, dan penyakit tropis lainnya dan memerangi hepatitis, penyakit yang ditularkan lewat air dan penyakit menular lainnya</li>\r\n<li>Pada tahun 2030, mengurangi sepertiga dari kematian dini yang disebabkan oleh penyakit tidak menular, melalui tindakan pencegahan dan pengobatan serta menaikkan kesehatan mental dan kesejahteraan</li>\r\n<li>Memperkuat pencegahan dan pengobatan dari penyalahgunaan zat berbahaya, termasuk penyalahgunaan narkotika dan penggunaan yang berbahaya dari alkohol</li>\r\n<li>Pada tahun 2020, secara global mengurangi setengah dari angka kematian dan cedera akibat kecelakaan lalu lintas</li>\r\n<li>Pada tahun 2030, memastikan akses universal terhadap layanan kesehatan sexual dan reproduksi, termasuk untuk perencanaan, informasi, dan pendidikan keluarga, dan mengintegrasikan kesehatan reproduksi kedalam strategi dan program nasional</li>\r\n<li>Mencapai cakupan layanan kesehatan universal, termasuk lindungan resiko finansial, akses terhadap layanan kesehatan dasar yang berkualitas dan akses terhadap obatobatan dan vaksin yang aman, efektif, berkualitas dan terjangkau bagi semua</li>\r\n<li>Pada tahun 2030, secara substansial mengurangi angka kematian dan penyakit yang disebabkan oleh bahan kimia berbahaya dan juga polusi dan kontaminasi udara, air dan tanaha</li>\r\n</ol>\r\n<ul>\r\n<li>Menguatkan implementasi dari Kerangka Kerja Konvensi WHO mengenai Kontrolterhadap Tembakau di semua negara, sebagaimana layaknya</li>\r\n<li>Mendukung riset dan pengembangan dari vaksin dan obat-obatan untuk penyakit menulat dan tidak menular, yang secara khusus mempengaruhi negara-negara berkembang, menyediakan akses terhadap obat-obatan dasar dan vaksin yang terjangkau, sesuai dengan Deklarasi Doha mengenai Perjanjian TRIPS dan Kesehatan Publlik, yang menegaskan hak dari negara-negara berkembang unutk menggunakan secara penuh provisi dalam Perjanjian Aspek Terkait Perdagangan Hak Properti Intelektual mengenai fleksibilitas untuk melindungi kesehatan publik, dan terutama akses terhadap obat-obatan untuk semua</li>\r\n<li>Secara substansial meningkatkan pendanaan dan untuk perekrutan, pengembangan, training dan daya serap tenaga kerja kesehatan di negara-negara berkembang, terutama di negara kurang berkembang dan negara berkembang kepulauan kecil</li>\r\n<li>Menguatkan kapasitas di setiap negara, khususnya di negara berkembang untuk peringatan dini, pengurangan resiko dan manajemen resiko kesehatan nasional dan global</li>\r\n</ul>', 'GOODHEALTHWELL'),
(4, 'Menjamin Kualitas Pendidikan yang Inklusif dan Merata serta Meningkatkan Kesempatan Belajar Sepanjang Hayat untuk semua', 'ASA Edu Kampung Nelayan tambak lorok', '<ol>\r\n<li><span  >Pada tahun 2030, memastikan bahwa semua anak perempuan dan laki-laki menyelesaikan pendidikan primer dan sekunder yang gratis, setara dan berkualitas, yang mengarah pada hasil belajar yang relevan dan efektif</span></li>\r\n<li><span  >Pada tahun 2030, memastikan bahwa semua anak perempuan dan laki-laki mendapat akses terhadap pengembangan masa kanak-kanak secara dini yang berkualitas, juga pengasuhan dan pendidikan pra-dasar agar mereka siap untuk masuk ke pendidikan dasar</span></li>\r\n<li><span  >Pada tahun 2030, memastikan akses yang setara bagi semua perempuan dan lakilaki terhadap pendidikan tinggi, teknis dan kejuruan yang berkualitas dan terjangkau, termasuk universitas</span></li>\r\n<li><span  >Pada tahun 2030, secara substansial meningkatkan jumlah remaja dan orang dewasa yang memiliki keahlian yang relevan, termasuk keahlian teknis dan kejuruan, untuk mendapatkan pekerjaan yang layak dan wirausaha</span></li>\r\n<li><span  >Pada tahun 2030, menghilangkan disparitas gender dalam pendidikan dan memastikan akses yang setara terhadap semua tingkatan pendidikan dan training kejuruan bagi mereka yang rentan, termasuk yang memiliki disabilitas, masyarakat adat dan anak-anak yang berada dalam situasi rentan</span></li>\r\n<li><span  >Pada tahun 2030, memastikan bahwa semua remaja dan sejumlah orang dewasa, baik laki-laki maupun perempuan, mencapai kemampuan baca-tulis dan kemampuan berhitung</span></li>\r\n<li><span  >Pada tahun 2030, memastikan bahwa mereka yang belajar mendapatkan pengetahuan dan keahlian yang dibutuhkan untuk mendukung pembangunan yang berkelanjutan, termasuk antara lain, melalui pendidikan untuk pembangunan berkelanjutan dan gaya hidup yang berkelanjutan, HAM, kesetaraan gender, mendukung budaya perdamaian dan anti kekerasan, kependudukan global dan apresiasi terhadap keberagaman budaya dan kontribusi budaya kepada pembangunan berkelanjutan</span></li>\r\n</ol>\r\n<ul>\r\n<li><span  >Membangun dan meningkatkan mutu fasilitas pendidikan yang sensitif terhadap gender, anak dan disabilitas dan menyediakan lingkungan belajar yang aman, tanpa kekerasan, inklusif dan efektif bagi semua</span></li>\r\n<li><span  >Pada 2020, secara substansial memperbanyak jumlah beasiswa yang tersedia untuk negara-negara berkembang, khususnya negara kurang berkembang, negara berkemabng kepulauan kecil dan negara-negara Afrika, untuk masuk ke pendidikan tinggi, termasuk pelatihan kejuruan dan teknologi informasi dan komunikasi, teknik, program teknik dan sains, di negara-negara maju dan negara berkembang lainnya</span></li>\r\n<li><span  >Pada tahun 2030, secara substansial meningkatkan penyediaan guru-guru yang berkualitas, termasuk melalui kerjasama internasional untuk pelatihan guru di negaranegara berkembang, khususnya negara kurang berkembang dan negara berkembang kepulauan kecil</span></li>\r\n</ul>', 'QUALITYEDUCATION'),
(8, 'Meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan, kesempatan kerja yang produktif dan menyeluruh, serta pekerjaan yang layak untuk semua', 'https://kreskros.com/pages/our-story -> Lokasi di Ambarawa, Central Java, Indonesia 50612.', '<ol>\r\n<li>Memelihara pertumbuhan ekonomi perkapita sesuai dengan situasi nasional dan, khususnya, setidaknya mempertahankan 7 persen pertumbuhan produk domestik bruto pertahunnya di negara-negara kurang berkembang</li>\r\n<li>Mencapai level yang lebih tinggi untuk produktivitas ekonomi melalui disertifikasi, peningkatan mutu teknologi dan inovasi, termasuk melalui fokus terhadap sektor-sektor yang mempunyai nilai tambah lebih dan padat karya</li>\r\n<li>Mendorong kebijakan yang berorientasi pembangunan yang mendukung aktivitasaktivitas produktif, penciptaan lapangan kerja, kewirausahaan, kreativitas dan inovasi, dan mendorong pembentukan dan pertumbuhan usaha mikro, kecil dan menengah, termasuk melalui akses terhadap layanan pendanaan/permodalan</li>\r\n<li>Memperbaiki secara progresif, sampai tahun 2030, efisiensi sumberdaya global dalam hal konsumsi dan produksi dan berupaya untuk memisahkan pertumbuhan ekonomi dari degradasi lingkungan, sesuai dengan kerangka kerja 10 tahun program tentang konsumsi dan produksi yang berkelanjutan, dengan dipelopori negara- negara maju</li>\r\n<li>Pada tahun 2030, mencapai ketenagakerjaan secara penuh dan produktif dan pekerjaan yang layak bagi seluruh perempuan dan laki-laki, termasuk untuk kaum muda dan orang dengan disabilitas, juga kesetaraan upah bagi pekerjaan yang mempunyai nilai yang sama</li>\r\n<li>Pada tahun 2020, secara substansial mengurangi proporsi usia muda yang tidak bekerja, tidak berpendidikan atau terlatih</li>\r\n<li>Mengambil langkah-langkah segera dan efektif untuk mengentaskan kerja paksa, mengakhiri perbudakan modern dan perdagangan manusia dan menegakkan larangan dan eliminasi bentuk terburuk dari tenaga kerja anak, termasuk perekrutan dan pemanfaatan serdadu anak, dan pada tahun 2025 mengakhiri segala bentuk tenaga kerja anak</li>\r\n<li>Mellindungi hak-hak pekerja dan mendukung lingkungan kerja yang aman bagi seluruh pekerja, khususnya bagi perempuan buruh migran, dan pekerja dalam situasi genting</li>\r\n<li>Pada tahun 2030, merancang dan mengimplementasikan kebijakan yang mendukung turisme yang berkelanjutan yang dapat menciptakan lapangan kerja sekaligus mendukung budaya dan produk lokal</li>\r\n<li>Menguatkan kapasitas institusi keuangan domestik untuk mendorong dan melauskan akses terhadap perbankan, asuransi dan layanan pendanaan untuk semua</li>\r\n</ol>\r\n<ul>\r\n<li>Meningkatkan Bantuan untuk Perdagangan (Aid for Trade) untuk negara-negara berkembang, terutama negara kurang berkembang, termasuk melalui Kerangka Kerja Terintegrasi yang Diperluas untuk Bantuan Teknis Terkait Perdagangan bagi Negara-negara Kurang Berkembang</li>\r\n<li>Pada tahun 2020, mengembangkan dan mengoperasionalkan strategi global bagi angkatan kerja muda dan mengimplementasikan Pakta Kerja Global milik Organisasi Buruh Internasional (ILO)</li>\r\n</ul>', 'DECENTWORK'),
(11, 'Sustainable cities and communities', 'Normalisasi Daerah Tambakrejo karena adanya Normalisasi aliran sungai', '<ol>\r\n<li>Pada tahun 2030, memastikan akses terhadap perumahan dan pelayanan dasar yang layak, aman dan terjangkau bagi semua dan meningkatkan mutu pemukiman kumuh</li>\r\n<li>Pada tahun 2030, menyediakan akses terhadap sistem transportasi yang aman, terjangkau, mudah diakses, dan berkelanjutan bagi semua, meningkatkan keamanan jalan, dengan memperbanyak transportasi publik, dengan perhatian khusus terhadap kebutuhan dari mereka yang berada di situasi rentan, perempuan, anak-anak, orang dengan disablitas dan manula</li>\r\n<li>Pada tahun 2030, meningkatkan urbanisasi yang inklusif dan berkelanjutan dan kapasitas untuk perencanaan dan pengelolaan pemukiman yang partisipatoris, terintegrasi dan berkelanjutan di setiap negara</li>\r\n<li>Menguatkan upaya untuk melindungi dan menjaga warisan budaya dan natural dunia</li>\r\n<li>Pada tahun 2030, secara signifikan mengurangi jumlah kematian dan jumlah orang yang terkena dampak dan secara substantif mengurangi kerugian ekonomi langsung yang berhubungan dengan produk domestik bruto global yang disebabkan oleh bencana, termasuk bencana terkait air, dengan fokus kepada melindungi yang miskin dan yang berada di situasi rentan</li>\r\n<li>Pada tahun 2030, mengurangi dampak buruk terhadap lingkungan perkapita di perkotaan, termasuk dengan memberikan perhatian khusus kepada kualitas udara dan kotamadya dan manajemen limbah lainnya</li>\r\n<li>Pada tahun 2030, menyediakan akses universal terhadap ruang-ruang publik yang aman, inklusif dan mudah diakses, dan hijau, terutama bagi perempuan dan anakanak, manula dan orang dengan disabilitas</li>\r\n</ol>\r\n<ul>\r\n<li>Mendukung hubungan ekonomi, sosial dan lingkungan yang positif diantara area urban, peri-urban dan rural dengan menguatkan perencanaan pembangunan nasional dan regional</li>\r\n<li>Pada tahun 2020, secara substantif meningkatkan jumlah kota dan pemukiman yang mengadopsi dan mengimplementasikan kebijakan dan rencana yang terintegrasi menuju inklusif, efisiensi sumber daya, mitigasi dan adaptasi terhadap perubahan iklim, tahan terhadap bencana, dan mengembangkan dan mengimplementasikan, sejalan dengan the Sendai Framework for Disaster Risk Reduction 2015-2030, dan manajemen resiko bencana yang holistic pada semua level</li>\r\n<li>Mendukung negara-negara kurang berkembang, termasuk melalui bantuan finansial dan teknis, dalam membangun bangunan yang berkelanjutan dan tahan lama dengan memanfaatkan bahan material lokal</li>\r\n</ul>', 'SUSCITIES'),
(13, 'Mengambil tindakan cepat untuk mengatasi perubahan iklim dan dampaknya', 'Desa Mangkang (Pengolahan limbah plastik)', '<ol>\r\n<li>Menguatkan daya tahan dan kapasitas adaptasi terhadap bahaya hal-hal yang berkaitan dengan iklim dan bencana alam di semua negara</li>\r\n<li>Mengintegrasikan ukuran-ukuran perubahan iklim kedalam kebijakan, strategi dan perencanaan nasional</li>\r\n<li>Memperbaiki pendidikan, penyadaran dan juga kapasitas baik manusia maupun institusi terhadap mitigasi perubahan iklim, adaptasi, pengurangan dampak dan peringatan dini</li>\r\n</ol>\r\n<ul>\r\n<li>Mengimplementasikan komitmen yang dibuat oleh pihak negara-negara maju kepada Kerangka Kerja Konvensi PBB mengenai Perubahan Iklim dengan tujuan untuk memobilisasikan secara bersama $100 milyar pertahunnya pada tahun 2020 dari segala sumber untuk memenuhi kebutuhan negara-negara berkembang dalam konteks aksi mitigasi dan transparansi terhadap implementasinya dan secara penuh mengoperasionalisasikan Dana Iklim Hijau (Green Climate Fund/GCF) melalui kapitalisasiya secepat mungkin</li>\r\n<li>Mendukung mekanisme untuk peningkatan kapasitas untuk perencanaan dan manjemen terkait perubahan iklim yang efektif di negara-negara kurang berkembang dan negara berkembang kepulauan kecil, dengan berfokus pada perempuan, remaja, dan masyarakat lokal dan marjinal</li>\r\n</ul>', 'CLIMATEACTION'),
(16, 'Menguatkan masyarakat yang inklusif dan damai untuk pembangunan berkelanjutan, menyediaakan akses keadilan untuk semua dan membangun kelembagaan yang efektif, akuntabel, dan inklusif d semua tingkatan', 'UID di Thekelan Kab. Semarang', '<ol>\r\n<li>Secara signifikan mengurangi segala macam bentuk kekerasan dan angka kematian terkait dimanapun</li>\r\n<li>Mengakhiri pelecehan, eksploitasi, perdagangan dan segala macem bentuk kekerasan dan penyiksaan terhadap anak</li>\r\n<li>Mendukung perangkat hukum di tingkat nasional dan internasional dan akses keadilan yang sama untuk semua</li>\r\n<li>Pada 2030, secara signifikan mengurangi aliran keuangan dan senjata terlarang, memperkuat pemulihan dan pengembalian asset yang dicuri dan memerangi semua jenis tindak kejahatan kriminal yang terorganisir</li>\r\n<li>Secara substansialmengurangi korupsi dan suap dalam segala bentuk</li>\r\n<li>Membangun institusi-institusi yang akuntabel dan transparan di semua level</li>\r\n<li>Memastikan pengambilan keputusan yang responsif, inklusif, partisipatif dan representatif di semua level</li>\r\n<li>Memperlebar dan menguatkan partisipasi dari negara-negara berkembang dalam institusi dan tata-kelola global</li>\r\n<li>Pada tahun 2030, menyediakan identitas legal bagi semua, termasuk akta kelahiran</li>\r\n<li>Memastikan akses publik terhadap informasi dan melindungi kebabasan fundamental, sesuai dengan perundang-undangan nasional dan perjanjian internasional</li>\r\n</ol>\r\n<ul>\r\n<li>Memperkuat institusi nasional yang terkait, termasuk melalui kerjasama internasional, untuk pengembangan kapasitas pada semua level, khususnya di negara-negara berkembang, untuk mencegah kekerasan dan memerangi terorisme serta kejahatan</li>\r\n<li>Mendukung dan mendorong hukum dan kebijakan non-diskriminatif untuk pembangunan berkelanjutan</li>\r\n</ul>', 'PEACEJUSTICE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pendaftaran`
--

CREATE TABLE `form_pendaftaran` (
  `id_form` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  `Profesi` varchar(225) NOT NULL,
  `Institusi` varchar(225) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Code` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `Bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`id_form`, `Nama`, `Email`, `No_Hp`, `Profesi`, `Institusi`, `Date`, `Code`, `Active`, `Bayar`) VALUES
(8, 'Nurul Laili Khasanah', 'laily.fillaah@gmail.com', '+628998972240', 'Umum', 'MA Manba\'ul A\'laa', '2019-10-08', 'ytGCMO1wdXD5', 1, 36000),
(9, 'Almaun Natun Nisfah', 'almaunnatun@gmail.com', '085712209858', 'Umum', 'KB Tunas Melati', '2019-10-08', 'yECKcUuAthHm', 1, 36000),
(10, 'Jayanti Rizqi Novianka Putri', 'jayanti.rizqinp@gmail.com', '089656194294', 'Mahasiswa', 'Polines', '2019-10-08', '7krKQwZhG36p', 1, 32000),
(11, 'Hardianto Hitimala', 'hardyantohitimala@gmail.com', '082198100975', 'Mahasiswa', 'Universitas Pattimura', '2019-10-08', '5DY4pZ6o29xF', 1, 32000),
(12, 'Dimas Seto Wicaksana', 'dimas2112seto@gmail.com', '087719682272', 'Mahasiswa', 'Dian Nuswantoro University', '2019-10-08', 'UWBxntpFbA35', 1, 32000),
(13, 'RINDANG RENA ADINA', 'rindangrena99@gmail.com', '08995975988', 'Mahasiswa', 'POLITEKNIK NEGERI SEMARANG', '2019-10-09', 'x4pAePBfajwK', 1, 32000),
(14, 'Laksmi Puspa Dewi', 'laksmipuspadewi@gmail.com', '082122269930', 'Pelajar', 'Politeknik negeri semarang', '2019-10-09', 'BefVM45YKbvP', 1, 32000),
(15, 'Hudaefah', 'evamuhit@gmail.com', '083812713609', 'Mahasiswa', 'Uin walisongo semarang', '2019-10-09', 'CdBvn64mqpst', 1, 32000),
(16, 'Bilqis sania ibrohim gobel', 'evamuhit@gmail.com', '083812713609', 'Mahasiswa', 'Uin walisongo semarang', '2019-10-09', 'B74WFhCuftpA', 1, 32000),
(17, 'Diarni Septa Krismona', 'diarnisepta@gmail.com', '085230895559', 'Mahasiswa', 'Universitas Negeri Semarang', '2019-10-09', 'pnSC7QrlWRzf', 1, 32000),
(18, 'Adistya Kurnia Ananda', 'adistyaananda43@gmail.com', '082211696257', 'Mahasiswa', 'Universitas Negeri Semarang', '2019-10-09', 'pnSC7QrlWRzf', 1, 32000),
(19, 'Melina Cahya Trisnawati', 'melinacahyaaa@gmail.com', '082243676527', 'Mahasiswa', 'Universitas Ivet', '2019-10-09', 'f9X5oSZusv7z', 1, 32000),
(20, 'Nahda naila ranti', 'nairanahda@gmail.com', '085225565500', 'Mahasiswa', 'Undip', '2019-10-11', 'ZsIqPb4uOjoh', 1, 32000),
(21, 'Dwiki Adnan Fuadi', 'dwikiadnanfuadi@gmail.com', '085733166606', 'Mahasiswa', 'Universitas Diponegoro', '2019-10-11', '7nuXCr8fYHB6', 1, 32000),
(22, 'Mira Rizky Amalia Rahim', 'mirarizkyamalia@gmail.com', '085813537427', 'Mahasiswa', 'Undip', '2019-10-12', 'JSvA4RqVf6ME', 1, 32000),
(23, 'Mika Anisatun Karimah', 'mikakarimah19@gmail.com', '+628231307120', 'Mahasiswa', 'Universitas Negeri Semarang', '2019-10-16', 'W8IpCGyvSdDs', 1, 32000),
(24, 'Andi dedy dhp', 'dedyandi09@gmail.com', '08114113776', 'Umum', 'IBTIE SULSEL', '2019-10-16', 'ObN1BKUonYWy', 1, 36000),
(25, 'Nabilah Rizki', 'nabilahrizki@gmail.com', '089674023066', 'Mahasiswa', 'Universitas Diponegoro', '2019-10-17', 'xolCXeHOWfYP', 1, 32000),
(26, 'Latifatul Muta\'arofah', 'latifatul.arfh@gmail.com', '085858564680', 'Mahasiswa', 'UNNES', '2019-10-18', 'rdhEXx8n6QIz', 1, 32000),
(27, 'Shela Mareta Fera Feronica', 'ferafeonica@gmail.com', '081332510009', 'Mahasiswa', 'UNNES', '2019-10-18', 'rdhEXx8n6QIz', 1, 32000),
(28, 'Astriana Bhakti Utami', 'astrianabhaktiutami@gmail.com', '085804846467', 'Mahasiswa', 'Universitas Diponegoro', '2019-10-19', 'e328jtGSg71z', 1, 32000),
(29, 'Wildan Aulia Octaviani', 'wildaoctaviani14@gmail.com', '081288385837', 'Mahasiswa', 'Universitas Bina Nusantara', '2019-10-21', 'L73BmZDvSqfg', 1, 32000),
(30, 'Shelyana Wulandari', 'shellyana.wulandary@gmail.com', '082362092194', 'Mahasiswa', 'Universitas Diponegoro', '2019-10-21', 'ponKRHZVrCQ7', 1, 32000),
(31, 'Aldilla Oktavia Putri', 'aldillaktv@gmail.com', '081288184413', 'Mahasiswa', 'Universitas Negeri Semarang', '2019-10-21', 'tZBeHMq2FD3A', 0, 40000),
(32, 'OKTAVIARNI ISTIQOMAH', 'oktaviarni1098@gmail.com', '085201142915', 'Mahasiswa', 'Universitas Negeri Semarang', '2019-10-21', 'mVdzIt2pfUJy', 1, 32000),
(33, 'Muh. Enggi Sulaiman', 'enggihb99@gmail.com', '+628524005047', 'Mahasiswa', 'Universitas Mulawarman', '2019-10-21', 'dWYGfmyoSTp7', 1, 32000),
(34, 'Aina Gladis Novia Salma', 'v.ainagladis@gmail.com', '+628224149278', 'Mahasiswa', 'Universitas Veteran', '2019-10-21', 'Yt58vzdPqnf1', 1, 32000),
(35, 'Noviyanti Wulansari AR', 'noviyantsa@gmail.com', '081392983516', 'Mahasiswa', 'UIN Walisongo Semarang', '2019-10-21', 'V7Efehm1qxgC', 1, 32000),
(36, 'Aidil fitriansyah', 'aidilfitriansyah1512@gmail.com', '081244272765', 'Mahasiswa', 'Universitas Halu Oleo', '2019-10-21', 'WQIJ6mzqZfgE', 1, 32000),
(37, 'Hidayatul Khoirunnisa', 'hidayatul05nisa@gmail.com', '081328857118', 'Pelajar', 'universitas darusalam (UNIDA)', '2019-10-21', 'eBj1SQyqUpbr', 1, 32000),
(38, 'Hidayatul Khoirunnisa', 'hidayatul05nisa@gmail.com', '081328857118', 'Pelajar', 'universitas darusalam (UNIDA)', '2019-10-21', 'MGZ59xbjNPDw', 0, 40000),
(39, 'Adam', 'adamhawa@gmail.com', '081234958765', 'Umum', 'UI', '2019-10-21', 'ZWe6PY5kVpOt', 0, 45000),
(40, 'Maulana ilham', 'ilhamaulana601@gmail.com', '6282328171463', 'Mahasiswa', 'Uin maulana malik ibrahim malang', '2019-10-21', 'pOuSRI2owhF3', 1, 32000),
(41, 'Zachwa Nugrai Gusti', 'zachwa58@gmail.com', '081772827061', 'Umum', 'Banyubiru', '2019-10-22', 'hbIOPcZT8GME', 1, 36000),
(42, 'FITRIA NUR ARIFAH', 'fitrianura1@gmail.com', '089688911951', 'Mahasiswa', 'UNIVERSITAS DIAN NUSWANTORO', '2019-10-22', 'ln8h96jqTWzN', 1, 32000),
(43, 'FADILLA RAHMI ', 'Fadillarahmi92@gmail.com', '082283773747', 'Mahasiswa', 'Universitas komputer indonesia (unikom) bandung ', '2019-10-23', 'mYXlPxzeNwKv', 1, 32000),
(44, 'FADILLA RAHMI ', 'Fadillarahmi92@gmail.com', '082283773747', 'Mahasiswa', 'Universitas komputer indonesia (unikom) bandung ', '2019-10-23', 'sDwlO5KqHpb1', 1, 32000),
(45, 'Winta Wiguna', 'wintawiguna8@gmail.com', '081261467608', 'Umum', 'SMPIT Bina Amal', '2019-10-23', 'z4BgELaCbRie', 1, 36000),
(46, 'SALMA NADIRA', 'nadirasalma@gmail.com', '085212389889', 'Mahasiswa', 'Universitas Gajah Mada', '2019-10-23', 'pOcaHRSoGYDI', 0, 40000),
(47, 'Kristanto irawan putra', 'kristanto_irawan_putra@yahoo.co.id', '082298167872', 'Umum', 'Masyarakat Transportasi Salatiga', '2019-10-24', 'XGZPJhWiClwR', 1, 36000),
(48, 'Nurur rohmah ', 'nururrohmah77@yahoo.com', '082110590209', 'Mahasiswa', 'Universitas negeri semarang', '2019-10-24', 'xG1cBVDjRYNH', 0, 40000),
(49, 'Lintang Cahyaning Pratiwi', 'lintangcp1997@gmail.com', '083865970734', 'Umum', 'Universitas Gadjah Mada', '2019-10-24', 'axDOSty4ClmL', 1, 36000),
(50, 'Fauziah Sulistyani', 'fauziahsulistyani97@gmail.com', '091226796012', 'Umum', 'Universitas Atma Jaya Yogyakarta', '2019-10-24', 'RPu3AZtJKpNV', 1, 36000),
(51, 'Intan Wahyu Ningsih', 'intanwn6@gmail.com', '085325441667', 'Mahasiswa', 'Universitas Sebelas Maret', '2019-10-24', '8H6GfpvY2hil', 1, 32000),
(52, 'Ahmad Edwin Risaludin', 'ahmadedwinrisaludin@gmail.com', '+628776181846', 'Mahasiswa', 'Universitas Mataram', '2019-10-25', 'GdNuTbxgEUYj', 1, 32000),
(53, 'FIDAA MUSTAGHFIROH', 'fidaa2fidaa@gmail.com', '085706085572', 'Mahasiswa', 'UIN Walisongo Semarang', '2019-10-25', 'Z2MRnIwLslvg', 1, 32000),
(54, 'ANIFAH ALIWARTAYA', 'anifahaliwartaya@gmail.com', '+628574123828', 'Mahasiswa', 'Universitas Diponegoro', '2019-10-25', 'abJcAmLXry4h', 1, 32000),
(55, 'Letus Sepsamli', 'sepsamliletus@gmail.com', '089693459612', 'Mahasiswa', 'Universitas Diponegoro Semarang', '2019-10-25', 'ws4LEevicbUP', 0, 40000),
(56, 'Almubdy Siraj Ramadhan', 'almubdy35@gmail.com', '081255506291', 'Mahasiswa', 'Uin Alauddin Makassar', '2019-10-25', '4Xy5K6Ok718o', 0, 40000),
(57, 'Muhammad Dwi Diyanto', 'mdwidiyanto@gmail.com', '+628952611167', 'Mahasiswa', 'Universitas Semarang', '2019-10-26', 'tiMK3CWoGERz', 1, 32000),
(58, 'Firda Hanifa', 'firdhanifa@gmail.com', '+628151369821', 'Mahasiswa', 'Universitas Muhammadiyah Prof. DR. HAMKA', '2019-10-27', 'Ob3Ra8AUzsKe', 1, 32000),
(59, 'Aninda Aprilliana Hasan', 'Aninda16493@gmail.com', '082283747755', 'Umum', 'Sd al kahfi islamic school', '2019-10-29', 'L1qFcths5amO', 0, 45000),
(60, 'Adinda Ruth Simwani Sinaga', 'adindasinaga68@gmail.com', '083199484156', 'Pelajar', 'Sma n 1 medan', '2019-11-06', 'TS8wIP6BMjLv', 1, 32000),
(61, 'Rida Roudotus Syarifah', 'ridasyarifah16@gmail.com', '082240094441', 'Mahasiswa', 'UIN Syarif Hidayatullah Jakarta', '2019-11-08', 'XETmspFkVSHd', 1, 32000),
(62, 'Neng Siti Ratna Gumilang', 'Milanklalala@gmail.com', '+628569721090', 'Mahasiswa', 'UHAMKA', '2019-11-18', '1HaoU8hQRvEI', 1, 32000),
(63, 'Gian gihwani', 'gian.gihwani@gmail.com', '083800622931', 'Pelajar', 'SMAN 2 MANDAU', '2019-11-18', 'A8FMIPUlQ7He', 1, 32000),
(64, 'Depika Mulia', 'depikamulia411@gmail.com', '082285366757', 'Mahasiswa', 'UIN SUSKA RIAU', '2019-11-19', 'jZ4Na5YxdyGn', 1, 32000),
(65, 'Vincencia Clara', 'claravincenvia@yahoo.com', '08118830322', 'Pelajar', 'Universitas Tarumanagara', '2019-11-19', '8WpDYBS3Ul6b', 0, 40000),
(66, 'Vincencia Clara', 'claravincencia@yahoo.com', '08118830322', 'Pelajar', 'Universitas Tarumanagara', '2019-11-19', 'NqXEaCiGf5cy', 1, 32000),
(67, 'IRKAB ALA FIRDAUSY ', 'irkabalafirdausy@gmail.com', '085212422416', 'Mahasiswa', 'Universitas Kadiri ', '2019-11-19', 'Znfst1LROeFc', 1, 32000),
(68, 'Ahmad muzaki ', 'tenz100600@gmail.com', '082230236609', 'Mahasiswa', 'Universitas negeri malang', '2019-11-20', 'HQgjiaTEUtwh', 1, 40000),
(69, 'Wahyu', 'wahyunurrizki05@gmail.com', '085389718761', 'Mahasiswa', 'Universitas Mulawarman', '2019-11-21', 'SC3xd5ZcwPbi', 1, 40000),
(70, 'Eurelliya Purwa Enka Putri', 'eurellyaenka254@gmail.com', '081542941281', 'Mahasiswa', 'Universitas Pamulang ', '2019-11-22', 'qcI5w96LUtHl', 1, 40000),
(71, 'Mela Mawaddatun Nisa', 'nisamela357@gmail.com', '+628213073355', 'Mahasiswa', 'Universitas Pendidikan Indonesia', '2019-11-25', 'PgblKGMeLSBv', 1, 40000),
(72, 'Jaenal aripin', 'zaenal221097@gmail.com', '081221730019', 'Mahasiswa', 'Universitas islam bandung', '2019-11-27', 'JaiwRYgVZTcX', 1, 40000),
(73, 'Ayu anita', 'anitaayu721@gmail.com', '082284333704', 'Mahasiswa', 'University of Riau', '2019-12-12', 'UDWCZQdwGeLp', 1, 40000),
(74, 'Nisa Nur Fauziah', 'nisanrfzh@gmail.com', '081248458832', 'Mahasiswa', 'UIN Sunan Gunung Djati Bandung', '2020-01-21', 'oi7DO8YXktfs', 0, 40000),
(75, 'WENNY AFIFAH ANINDITANTI', 'wennyafifah2205@gmail.com', '089514167929', 'Mahasiswa', 'Politeknik STIA LAN Bandung', '2020-01-23', 'CODL9FRcztaI', 1, 40000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
