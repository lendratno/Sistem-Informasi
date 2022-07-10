-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 03:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_senibudaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seni`
--

CREATE TABLE `tbl_seni` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `image` varchar(128) NOT NULL,
  `video` varchar(128) NOT NULL,
  `sumber` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seni`
--

INSERT INTO `tbl_seni` (`id`, `nama`, `deskripsi`, `kategori`, `image`, `video`, `sumber`) VALUES
(1, 'Tapis', 'Kain Tapis merupakan salah satu jenis kerajinan tradisional masyarakat Lampung. Kain tapis dibuat dari benang katun dan benang emas. Benang katun adalah benang yang berasal dari bahan kapas dan digunakan sebagai bahan dasar dalam pembuatan kain tapis, sedangkan benang emas dipakai untuk membuat ragam hias pada tapis dengan sistem sulam.', 'Seni Rupa', 'tapis.jpg', 'tapis_lpg.mp4', 'Youtube.com'),
(2, 'Siger', 'Siger adalah mahkota untuk pengantin wanita Lampung yang berbentuk segitiga, berwarna emas dan biasanya memiliki cabang atau lekuk berjumlah sembilan atau tujuh. Siger dibuat dari lempengan tembaga, kuningan, atau logam lain yang dicat dengan warna emas.', 'Seni Rupa', 'siger-seni.png', 'siger.mp4', 'Youtube.com'),
(3, 'Souvenir Gajah', 'Gajah bisa dibilang sebagai salah satu ikon ataupun kebanggaan dari warga Lampung. Bukan tanpa alasan, pasalnya di Lampung ini terdapat pusat penangkaran gajah Sumatrera terbesar di Indonesia', 'Seni Rupa', 'sovenir.jpg', 'sovenir.mp4', 'Youtube.com'),
(4, 'Sulam Usus', 'Sulam usus merupakan kerajinan sulam berbentuk usus ayam dengan berbahan baku kain satin dengan motif yang khas. Sulam usus ini sudah ada sejak dulu dalam masyarakat Lampung Pepadun. Sulam usus sudah ada sejak abad ke-16. Dahulu sulam usus digunakan sebagai penutup di bagian dada para wanita dan penari saat berlangsungnya pesta pernikahan.', 'Seni Rupa', 'sulamusus.jpg', 'Sulamusus.mp4', ''),
(5, 'Tari Bedana', 'Djujor termasuk ritual adat pernikahan di Lampung. Muli atau gadis akan diambil oleh mekhanai atau pria bujang untuk dijadikan sebagai istri. Sang mekhanai dan keluarganya harus membayar bandi lunik atau mahar kepada wali sang muli.', 'Seni Tari', 'taribedana.jpg', 'taribedana.mp4', 'Youtube.com'),
(6, 'Tari Cangget', 'Tari Cangget merupakan salah satu tari tradisi yang dimiliki oleh masyarakat Lampung beradat pepadun. Pada tahun 1942 sebelum kedatangan Jepang ke Indonesia, Tari Cangget ditampilkan untuk acara gawi adat, seperti saat panen raya, upacara mendirikan rumah ataupun untuk mengantar orang yang akan pergi haji.', 'Seni Tari', 'tari-cangget-3.jpg', 'cangget.mp4', 'Youtube.com'),
(7, 'Tari Nyambai', 'Tari Nyambai adalah tari kelompok berpasangan yang dilakukan oleh gadis dan bujang sebagai ajang pertemuan atau ajang silahturahmi untuk mencari jodoh. Sebagai tarian adat pada masyarakat saibatin, kehadirannya menjadi bagian dari rangkaian upacara perkawinan yang disebut dengan upacara Nayuh/Penayuhan.', 'Seni Tari', 'nyambai.jpg', 'nyambai.mp4', ''),
(8, 'Tari Sembah', 'Tari Sigeh Penguten merupakan salah satu tari kreasi baru dari daerah Lampung. Awalnya tari ini bernama tari Melinting dan tari Sembah, namun baik tari Melinting maupun tari Sembah telah dikukuhkan namanya menjadi tari Sigeh Penguten.', 'Seni Tari', 'sembah.jpg', 'sembah.mp4', ''),
(9, 'Cangget Agung', 'Cangget Agung merupakan sebuah Upacara Lampung Pepadun yang di anggap sakral atau di Sakralkan dapat juga di artikan sebagai upacara agung, dalam penyelenggaraan tari agung atau tari kemuliaan.', 'Lagu', 'CANGGETAGUNG.png', 'canggetagung.mp4', ''),
(10, 'Lipang Lipangdang', 'Lipang Lipandang merupakan lagu daerah Lampung yang biasanya dinyanyikan pada upacara adat lampung ataupun upacara pernikahan. Lagu ini biasanya dinyanyikan oleh bujang gadis lampung atau muli mekhanai dalam bahasa lampung.', 'Lagu', 'lipang_lipandang.png', 'lipang.mp4', ''),
(11, 'Sang Bumi Ruwa Jurai', 'Sang Bumi Ruwa Jurai adalah lagu kebangsaan Lampung, Indonesia. Judulnya juga berfungsi sebagai moto provinsi. Ditulis oleh Syaiful Anwar, lirik lagu tersebut berbicara tentang persatuan antara masyarakat Pesisir dan Pepadun Lampung.', 'Lagu', 'Sang_bumi_ruwa_jurai.png', 'sbrj.mp4', ''),
(12, 'Teluk Lampung', 'Merupakan satu dari sekian banyak lagu daerah asli Lampung yang selalu dinyanyikan di acara-acara baik pernikahan, pemerintahan dan acara lainnya. Lagu ini bercerita tentang Keindahan Teluk Lampung di sore hari.', 'Lagu', 'Teluk_Lampung.png', 'teluk.mp4', ''),
(13, 'Lamban Balak', 'Rumah adat tradisional Lampung yang dihuni oleh entitas Lampung yang beradat Saibatin disebut dengan Lamban atau Lamban Balak. Bagian bawah rumah panggung disebut dengan Bah Lamban, biasanya difungsikan sebagai tempat penyimpanan hasil panen', 'Rumah Adat', 'Rumah-Adat-Lamban-Balak.jpg', 'Lamban Balak.mp4', ''),
(14, 'Lamban Pesagi', 'Rumah adat Lampung ini memiliki arti kata, yaitu lamban adalah rumah dan pesagi adalah persegi, karena denahnya berbentuk segi empat. Rumah ini berasal dari Desa Kenali, Kecamatan Belalau, daerah Gunung Pesagi di Lampung Barat yang bersuhu dingin. Lokasi tersebut mempengaruhi gaya arsitektur Lamban Pesagi yang tertutup atau tidak ditemui serambi terbuka di bagian depan.', 'Rumah Adat', 'Rumah-Adat-Lamban-Pesagi.jpg', 'lpesagi.mp4', ''),
(15, 'Nuwou Balak', 'Nuwou Balak merupakan rumah adat bagi etnis Lampung yang beradat Pepadun atau yangmenganut sistem kepenyimbangan, rumah adatnya dikenal dengan sebutan Nuwo.Rumah Nuwo Balak merupakan rumah tinggal dari kepala adat (penyimbang adat) yangdalam bahasa Lampung disebut Balai Keratun.', 'Rumah Adat', 'Rumah-Adat-Nuwou-Balak.jpg', 'nbalak.mp4', ''),
(16, 'Nuwou Sesat', 'Nuwo Sesat adalah salah satu rumah tradisional yang ada di Provinsi Lampung. Nuwo Sesat berfungsi sebagai tempat pertemuan adat bagi para purwatin pada saat mengadakan pepung adat. Karena itu rumah tradisional ini juga disebut Balai Agung.', 'Rumah Adat', 'Rumah-Adat-Nowou-Sesat.jpg', 'Nsesat.mp4', ''),
(17, 'Bende', 'Alat musik ini sering digunakan dalam berbagai acara resmi ataupun acara adat. Lampung memiliki beberapa jenis alat musik daerah yang unik dan khas. Salah satu contohnya bende yang termasuk dalam jenis alat musik idiofon. Bende memiliki suara khas yang ditimbulkan ketika alat musik ini dipukul.', 'Alat Musik', 'cintaindonesiawebid-0b9cedbf2a7780f83a6334b4cbfc6cc4.jpg', 'bende.mp4', ''),
(18, 'Gambus', 'Gambus adalah alat musik petik seperti mandolin yang berasal dari Timur Tengah. Paling sedikit gambus dipasangi 3 senar sampai paling banyak 12 senar. Gambus dimainkan sambil diiringi gendang. Sebuah orkes memakai alat musik utama berupa gambus dinamakan orkes gambus atau disebut gambus saja.', 'Alat Musik', 'img-20200311-wa0044-615cf468a4b8f96d13a72ed846999948.jpg', 'Gambus.mp4', ''),
(19, 'Gamolan', 'Gamolan adalah instrumen musik tradisional Lampung, diperkirakan telah ada pada zaman Hindu, ratusan tahun yang lalu. Instrumen tersebut terbuat dari bahan baku bambu yang termasuk ke dalam klasifikasi instrumen musik berlempeng yang dimainkan dengan cara dipukul.', 'Alat Musik', 'gamolan-pekhing-0f4e8acd17791538741ba030890ff795.jpg', 'Gamolan.mp4', ''),
(20, 'Kompang', 'Kompang merupakan alat musik tradisional dari Provinsi Lampung yang dibuat dari kayu dan kulit kambing. Alat musik ini juga erat kaitannya dengan penyebaran agama Islam di Indonesia. Alat musik ini hampir mirip dengan alat musik rebana. Kompang dimainkan dengan menggunakan kedua belah tangan.', 'Alat Musik', 'usleducationcom-30ea9dc4a71560c17a00e65452773c32.jpg', 'kompang.mp4', ''),
(21, 'Kulintang', 'Kulintang pring adalah salah satu alat musik tradisional Lampung, Beberapa wilayah persebarannya antara lain di Kabupaten Way Kanan, Lampung Tengah, dan Lampung Timur. Alat musik tersebut dibuat dari bamboo', 'Alat Musik', 'unnamed-0e19acdd70d80e4344b8f3b3e53c74c1.jpg', 'kulintang.mp4', ''),
(22, 'Serdam', 'Serdam Lampung adalah alat musik tradisinonal yang dimainkan dengan cara ditiup dan bentuknya menyerupai alat musik suling (seruling). Suara atau bunyi serdam yang dihasilkan bernada dasar G sebagai Do-nya dan terdiri dari lima buah lubang yang nantinya akan menghasilkan nada Do – Sol.', 'Alat Musik', 'serdam.jpg', 'serdam.mp4', ''),
(23, 'Bebandung', 'Bebandung adalah salah satu jenis sastra lisan Lampung yang berbentuk puisi yang berisi petuah-petuah atau ajaran agama islam. Bebandung biasanya diungkapkan untuk melengkapi acara cangget atau tarian adat, pertemuan resmi, meninabobokkan anak dan pengisi waktu bersantai. Bebandung setiap bait berjumlah 4 baris.', 'Seni Sastra Lisan', 'BEBANDUNG.png', 'bebandung.mp4', ''),
(24, 'Hahiwang', 'Hahiwang merupakan salah satu bentuk sastra lisan Lampung yang semakin hari semakin sepi peminatnya. Hal ini disebabkan oleh beberapa faktor, diantaranya adalah relatif sulit dipelajari, kurangnya proses regenerasi, dan perhatian serta dukungan dari pemerintah setempat.', 'Seni Sastra Lisan', 'hahiwang.png', 'hahiwang.mp4', ''),
(25, 'Paradinei', 'Paradinei/paghadini adalah puisi Lampung yang biasa digunakan dalam upacara penyambutan tamu pada saat berlangsungnya pesta pernikahan secara adat. Paradinei/paghadini diucapkan juru bicara masing-masing pihak, baik pihak yang datang maupun yang didatangi.', 'Seni Sastra Lisan', 'PARADINEI.png', 'paradinei.mp4', ''),
(26, 'Peppacur', 'Pepaccur merupakan salah satu jenis puisi Lampung yang di dalamnya berisi tentang nasihat. Nasihat yang diberikan melalui Pepaccur dilakukan dalam prosesi pemberian gelar adat. Pemberian gelar adat merupakan suatu tradisi turun-temurun yang dilakukan oleh masyarakat Lampung.', 'Seni Sastra Lisan', 'PEPPACUR.png', 'peppacur.mp4', ''),
(27, 'Ringget', 'Ringget merupakan salah satu jenis sastra lisan Lampung yang berbentuk puisi yang lazim digunakan untuk menyampaikan pesan atau nasihat dari mempelai wanita kepada kedua orang tua dan keluarga yang ditinggalkan. Ringget sering digunakan dalam adat istiadat lampung yaitu ngebekas.', 'Seni Sastra Lisan', 'RINGGET.png', 'ringget.mp4', ''),
(28, 'Segata', 'Sagata merupakan istilah penyebutan dalam Bahasa Lampung yakni pantun. Pantun/Sagata merupakan pantun lampung yang berisi nasehat dan sindiran dengan sajak ABAB, terdiri dari 2 bait lampiran dan 2 bait akhir sebagai isi yang di maksudkan', 'Seni Sastra Lisan', 'SEGATA.png', 'segata.mp4', ''),
(30, 'Seni Teater', '\"Warahan adalah sebuah teater tradisi asli Lampung, perlu diperkenalkan kepada generasi baru dengan pendekatan yang lebih modern, dan itu salah satu target pementasan ini,\" kata Manajer Teater Satu, Imas Sobariah.', 'Seni Teater', 'Teater2.jpg', 'VideoEditor_20220629_115324.mp4', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan`
--

CREATE TABLE `tbl_tanggapan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subjek` varchar(25) NOT NULL,
  `pesan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tanggapan`
--

INSERT INTO `tbl_tanggapan` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Rizka Putri', 'rizkaputri@gmail.com', 'Kesenian', 'Info kesenian disitus ini sangat lengkap. Saya sangat suka dan akan merekomendasikan ke rekan-rekan saya.'),
(2, 'Alvaro Dinata', 'alvarodinata@gmail.com', 'Tari Cangget', 'Tari Cangget lampung sangat indah sekali, didesa ku sering ada Tari Cangget jika ada acara.'),
(3, 'Nia Ramadhani', 'nia.ramadhani@gmail.com', 'Tapis', 'Tapis di Lampung sangat indah, detailnya dan pola sangat unik. Rasanya mau liburan ke Lampung lagi..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_seni`
--
ALTER TABLE `tbl_seni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_seni`
--
ALTER TABLE `tbl_seni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
