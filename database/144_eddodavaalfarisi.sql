-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 03.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `144_eddodavaalfarisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd1647213ca0137ab5b713464ea092f42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `tanggal`, `gambar`) VALUES
(9, 'BPSDMP Kominfo Surabaya Resmi Tutup Pelatihan Sertifikasi Kompetensi 2021 di Pamekasan', 'Setelah berlangsung hampir selama 5 hari pelaksanaan pelatihan sertfikasi kompetensi sejak selasa hingga sabtu, 9 sampai dengan 13 Maret 2021, Balai Pengembangan Sumber Daya Manusia dan Penelitian (BPSDMP) Kominfo Surabaya, akhirnya resmi tutup pelatihan sertifikasi kompetensi tahun 2021 di Pamekasan, Sabtu 13/3/2021.\r\nBPSDMP-Kominfo Surabaya 2 tahun ini sudah menjalin kemitraan dengan Kabupaten Pamekasan khususnya dengan Dinas Kominfo Pamekasan dan beberapa kali melaksanakan pelatihan yang berbeda, ini semata mata karena memang program pusat juga diplihnya Pamekasan karena masyarakat di Pamekasan Dinamis sekali, Ucap Bagus Winarko dari BPSDMP Kominfo Surabaya.’’\r\n“Dipilihnya Kabupaten Pamekasan, selain memang Kabupaten dengan sebutan Gerbang Salam ini sudah menjadi prioritas dari Kementerian Kominfo Pusat, juga karena proses perizinan di daerah ini simple dan tidak berberlit belit, terbukti kami dari BPSDMP-Kominfo Surabaya sudah beberapa kali melaksanakan kegiatan pelatihan, selain memang faktor utama dipilihnya Kabupaten Pamekasan memang memiliki masyarakat yang antusias terhadap perkembangan Dunia Digital, termasuk ibu ibu rumah tangganya yang kami juga bidik dalam skema terampil menggunakan teknologi, para pelaku UMKM juga pernah kita laksanakan di Pamekasan ini, Ucap pria Low Profile ini.’’\r\nBagus sapaan akrabnya, juga mengatakan bahwa pelatihan yang sekarang ini (dengan 2 skema yakni Junior Grpahic Designer dan Staf Manajemen Data) semua proses pendaftaran termasuk verifikasi administrasi dari calon peserta ini murni Pusat yang memilih, kami dan Dinas Kominfo Pamekasan menerima semua konsep terkait dengan kepesertaan pelatihan kali ini, dirinya juga mengatakan sangat berterima kasih sekali kepada Jajaran Pemerintah Kabupaten Pamekasan lebih lebih kepada Dinas Kominfo Pamekasan.\r\nPelatihan sertifikasi dan Kompetensi ini, sebelumnya di dahului dengan pelaksanaan Rapid Test oleh Panitia BPSDMP Kominfo Surabaya dengan Dinas Kominfo Pamekasan kepada Peserta yang sudah dinyatakan lolos, dengan pelaksanaan Rapid Test Antigen, yang dilaksanakan Senin 8/3/2021 dihalaman Parkir Timur FrontOne Hotel.', '2023-08-15', 'GAMBAR KEGIATAN 3.png'),
(10, 'Pembukaan Government Transformation Academy Tahun 2021 dan Penandatangan MOU dengan Gubernur NTB', 'Senin, 25 Oktober 2021. Kementerian Komunikasi dan Informatika melalui Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) menyelenggarakan kegiatan Pembukaan Pelatihan Government Transformation Academy (GTA) Tahun 2021. Kegiatan pembukaan dan orientasi ini diselenggarakan secara tatap muka (langsung) di Kota Mataram NTB dan online via aplikasi video conference di berberapa daerah diantaranya Palangkaraya, Jember dan Mamuju.\r\nKegiatan yang diadakan di Kantor BPSDMD Provinsi NTB ini dibuka secara resmi oleh Wakil Gubernur NTB, Ibu Dr. Ir. Hj. Sitti Rohmi Djalilah, M.Pd. Dihadiri oleh Kepala Badan Litbang SDM Kemenkominfo Bapak Harry Budiarto, Sekretaris Balitbang SDM, Kepala BPSDMP Kominfo Surabaya, Kapokja GTA, dan beberapa Kepala OPD Provinsi NTB.\r\nDalam sambutan Wakil Gubernur NTB, beliau menyampaikan bahwa NTB sangat menyambut baik kegiatan DTS GTA di NTB karena pelatihan ini merupakan suatu kebutuhan. Khususnya di masa pandemi kemampuan digitalisasi sangat membantu pekerjaan pemerintah. Pelatihan ini diharapkan dapat dimanfaatkan untuk meningkatkan kemampuan para ASN dalam menghadapi perkembangan teknologi.\r\nSkema pelatihan pada program GTA dirancang mulai dari tingkat basic skill yang berkaitan dengan literasi digital, intermediate skill yang menekankan peningkatan kompetensi teknis, hingga advance skill yang menyasar ke para pengambil keputusan. Pelatihan GTA ini berlangsung secara online dan blended yang memadukan metode online dan offline. Durasi pelatihan berbeda-beda sesuai dengan tema pelatihan. Pada pelatihan online, peserta dapat mengatur sendiri waktu belajar secara mandiri dalam batas waktu pelatihan.\r\nSebagai informasi tambahan, Pelatihan GTA tahun 2021 berfokus pada 13 (tiga belas) skema pelatihan yakni Get Connected, IT Essential, Cybersecurity Essentials, WI-lenial, IT Business Analyst, IT Project Management, Digital Public Relations, Social Media Analyst, Business Process Engineer, Network Administrator, Junior Graphic Designer, Data Mining Fundamental, dan Analis Kota Cerdas SNI ISO 37122:2019', '2023-08-16', 'GAMBAR KEGIATAN 1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
