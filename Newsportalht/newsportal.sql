-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 04.04
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `EmailAdmin` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `TanggalDibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `TanggalUpdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `Username`, `Password`, `EmailAdmin`, `Is_Active`, `TanggalDibuat`, `TanggalUpdate`) VALUES
(1, 'admin', '$2y$12$yiVnZVED2bBwMJwKEMUUAulAgtm7VLIy5rZNcQE7T7okB6tWq4sz6', 'campcodes@gmail.com', 1, '2020-03-27 17:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblberita`
--

CREATE TABLE `tblberita` (
  `id` int(11) NOT NULL,
  `JudulBerita` longtext DEFAULT NULL,
  `IdKategori` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `DetailBerita` longtext CHARACTER SET utf8 DEFAULT NULL,
  `TanggalPosting` timestamp NULL DEFAULT current_timestamp(),
  `TanggalUpdate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL,
  `UrlBerita` mediumtext DEFAULT NULL,
  `GambarBerita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblberita`
--

INSERT INTO `tblberita` (`id`, `JudulBerita`, `IdKategori`, `SubCategoryId`, `DetailBerita`, `TanggalPosting`, `TanggalUpdate`, `Is_Active`, `UrlBerita`, `GambarBerita`) VALUES
(7, 'Ralf Rangnick Isyaratkan Tak Suka Pemain Tua, Kode Keras Buat Bintang MU?', 3, 0, '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"\"><font color=\"#ff9c00\">iNDOiNFO, Malang</font></span><span lang=\"EN-US\" style=\"color:#444444\">&nbsp;Ralf Rangnick telah\r\nberada di belakang kemudi di Manchester United atau MU selama lebih dari\r\nseminggu sekarang tetapi sudah sangat menyadari tugas besar yang dia hadapi\r\nsaat menangani klub&nbsp;</span><span lang=\"EN-US\"><a href=\"https://www.liputan6.com/tag/liga-inggris\"><span style=\"color:#FF3300\">Liga Inggris</span></a></span><span lang=\"EN-US\" style=\"color:#444444\">&nbsp;itu.<o:p></o:p></span></p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">Terakhir,&nbsp;</span><span lang=\"EN-US\"><a href=\"https://www.liputan6.com/tag/rangnick\"><span style=\"color:#FF3300\">Rangnick</span></a></span><span lang=\"EN-US\" style=\"color:#444444\">&nbsp;frustrasi karena dia merasa instruksinya\r\ndiabaikan pemainnya. Kini, pelatih asal Jerman itu memiliki banyak waktu untuk\r\nmemperbaikinya.<o:p></o:p></span></p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">Setelah dia\r\nsepenuhnya menilai sisi MU, Rangnick akan memiliki ide bagus tentang siapa yang\r\nada dan tidak bergabung dengan rezimnya. Dan, saat ini ada sejumlah pemain yang\r\nhabis kontraknya musim panas dan karena itu bisa pergi di jendela Januari.<o:p></o:p></span></p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">Paul Pogba,\r\nJesse Lingard dan Edinson Cavani semuanya bisa menjadi subyek tawaran dari klub\r\nlain hanya dalam beberapa minggu dan Rangnick akan membuat keputusan besar\r\nuntuk itu.<o:p></o:p></span></p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">Cavani\r\nsebelumnya sempat mempertimbangkan untuk meninggalkan&nbsp;</span><span lang=\"EN-US\"><a href=\"https://www.liputan6.com/tag/mu\"><span style=\"color:#FF3300\">MU</span></a></span><span lang=\"EN-US\" style=\"color:#444444\">&nbsp;ketika dia mendapati waktu bermain\r\nsemakin sulit didapat. Januari lalu, Cavani bahkan menghubungi Boca Juniors\r\nuntuk kemungkinan pindah.<o:p></o:p></span></p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">Ketua\r\nBoca Juan Roman Riquelme mengungkapkan Cavani menghubunginya untuk menanyakan\r\ntentang peluang bergabung dengan tim Argentina pada Januari 2020.<o:p></o:p></span></p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">“Pada bulan\r\nJanuari, Cavani menelepon saya mengatakan bahwa dia ingin datang karena dia\r\nbermain sedikit di sana,” kata Riquelme kepada TNT Sports.<o:p></o:p></span></p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">“Saya\r\nsudah berbicara dengannya untuk waktu yang lama dan dia menelepon saya pada\r\nbulan Januari untuk datang karena dia tidak bermain di sana. Saya ingat kami\r\nberbicara suatu hari dan hari berikutnya dia masuk dan mencetak dua gol di\r\nmenit-menit terakhir,\" ujar Riquelme.<o:p></o:p></span></p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">\"Dia\r\nmembuat comeback. Sejak saat itu dia mulai mencetak gol di semua pertandingan\r\ndan mereka memperbarui kontrak dengannya.\"<o:p></o:p></span></p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">MU\r\nsebelumnya memang mampu meyakinkan Cavani untuk bertahan dan menyelesaikan\r\nmusim dengan performa bagus. Dia kemudian menandatangani kontrak baru untuk\r\nsatu musim lagi.<o:p></o:p></span></p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-US\" style=\"color:#444444\">Sebelum\r\nkedatangan Rangnick, kutipan-kutipan muncul dari pelatih asal Jerman pada tahun\r\n2020 di mana ia menghapuskan rencana bekerja dengan pemain yang lebih tua.<o:p></o:p></span></p>', '2021-12-10 11:49:23', '2021-12-10 11:21:40', 1, 'Ralf-Rangnick-Isyaratkan-Tak-Suka-Pemain-Tua,-Kode-Keras-Buat-Bintang-MU?', '374c4dfd040b99e708141df2cab98dba.jpg'),
(10, 'Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal', 5, 0, '<h1 style=\"box-sizing: inherit; margin-top: 0px; padding: 0px; font-family: Roboto, sans-serif; font-size: 38px; line-height: normal; letter-spacing: -0.5px; color: rgb(51, 51, 51);\"><span itemprop=\"headline\" style=\"box-sizing: inherit;\">Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal</span>Tata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel Deal</h1>', '2018-06-30 19:08:56', '2021-12-07 04:25:06', 1, 'Tata-Steel,-Thyssenkrupp-Finalise-Landmark-Steel-Deal', '505e59c459d38ce4e740e3c9f5c6caf7.jpg'),
(11, 'UNs Jean Pierre Lacroix thanks India for contribution to peacekeeping', 6, 8, '<p>UNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeeping<br></p>', '2018-06-30 19:10:36', '2018-08-28 16:01:35', 1, 'UNs-Jean-Pierre-Lacroix-thanks-India-for-contribution-to-peacekeeping', '27095ab35ac9b89abb8f32ad3adef56a.jpg'),
(12, 'Shah holds meeting with NE states leaders in Manipur', 6, 7, '<p><span style=\"color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">New Delhi: BJP president Amit Shah today held meetings with his party leaders who are in-charge of 11 Lok Sabha seats spread across seven northeast states as part of a drive to ensure that it wins the maximum number of these constituencies in the general election next year.</span><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><webviewcontentdata style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">Shah held separate meetings with Lok Sabha toli (group) of Arunachal Pradesh, Tripura, Meghalaya, Mizoram, Nagaland, Sikkim and Manipur in Manipur, the partys media head Anil Baluni said.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Baluni said that Shah was in West Bengal for two days before he arrived in Manipur. The BJP chief would reach Odisha tomorrow.</webviewcontentdata><br></p>', '2018-06-30 19:11:44', '2018-08-28 16:01:43', 1, 'Shah-holds-meeting-with-NE-states-leaders-in-Manipur', '7fdc1a630c238af0815181f9faa190f5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblhalaman`
--

CREATE TABLE `tblhalaman` (
  `id` int(11) NOT NULL,
  `NamaHalaman` varchar(200) DEFAULT NULL,
  `JudulHalaman` mediumtext DEFAULT NULL,
  `Deskripsi` longtext DEFAULT NULL,
  `TanggalPosting` timestamp NULL DEFAULT current_timestamp(),
  `TanggalUpdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblhalaman`
--

INSERT INTO `tblhalaman` (`id`, `NamaHalaman`, `JudulHalaman`, `Deskripsi`, `TanggalPosting`, `TanggalUpdate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2018-06-30 18:01:03', '2018-06-30 19:19:51'),
(2, 'contactus', 'Kontak', '<p><br></p><p><b>Address :&nbsp; </b>Malang, Jawa Timur, Indonesia</p><p><b>Contact Person : </b>+62 87761139183</p><p><b>Email : </b>infoindo@gmail.com</p>', '2018-06-30 18:01:36', '2021-12-05 17:44:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkategori`
--

CREATE TABLE `tblkategori` (
  `id` int(11) NOT NULL,
  `Kategori` varchar(200) DEFAULT NULL,
  `Deskripsi` mediumtext DEFAULT NULL,
  `TanggalPosting` timestamp NULL DEFAULT current_timestamp(),
  `TanggalUpdate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblkategori`
--

INSERT INTO `tblkategori` (`id`, `Kategori`, `Deskripsi`, `TanggalPosting`, `TanggalUpdate`, `Is_Active`) VALUES
(2, 'Pendidikan', 'Bollywood News', '2018-06-06 10:28:09', '2018-06-30 18:41:07', 1),
(3, 'Olahraga', 'Related to sports news', '2018-06-06 10:35:09', '2018-06-14 11:11:55', 1),
(5, 'Teknologi', 'Entertainment related  News', '2018-06-14 05:32:58', '2018-06-14 05:33:41', 1),
(6, 'Politik', 'Politics', '2018-06-22 15:46:09', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkomentar`
--

CREATE TABLE `tblkomentar` (
  `id` int(11) NOT NULL,
  `IdBerita` char(11) DEFAULT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `komentar` mediumtext DEFAULT NULL,
  `TanggalPosting` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblkomentar`
--

INSERT INTO `tblkomentar` (`id`, `IdBerita`, `nama`, `email`, `komentar`, `TanggalPosting`, `status`) VALUES
(1, '12', 'Anuj', 'anuj@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', '2018-11-21 11:06:22', 0),
(2, '12', 'Test user', 'test@gmail.com', 'This is sample text for testing.', '2018-11-21 11:25:56', 1),
(3, '7', 'ABC', 'abc@test.com', 'This is sample text for testing.', '2018-11-21 11:27:06', 1),
(4, '12', 'Sefalo AF', 'sefaloaf@gmail.com', 'waaw', '2021-11-28 15:21:31', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 5, 'Bollywood ', 'Bollywood masala', '2018-06-22 15:45:38', '0000-00-00 00:00:00', 1),
(4, 3, 'Cricket', 'Cricket\r\n\r\n', '2018-06-30 09:00:43', '0000-00-00 00:00:00', 1),
(5, 3, 'Football', 'Football', '2018-06-30 09:00:58', '0000-00-00 00:00:00', 1),
(6, 5, 'Television', 'TeleVision', '2018-06-30 18:59:22', '0000-00-00 00:00:00', 1),
(7, 6, 'National', 'National', '2018-06-30 19:04:29', '0000-00-00 00:00:00', 1),
(8, 6, 'International', 'International', '2018-06-30 19:04:43', '0000-00-00 00:00:00', 1),
(9, 7, 'India', 'India', '2018-06-30 19:08:42', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblberita`
--
ALTER TABLE `tblberita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblhalaman`
--
ALTER TABLE `tblhalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblkomentar`
--
ALTER TABLE `tblkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tblberita`
--
ALTER TABLE `tblberita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tblhalaman`
--
ALTER TABLE `tblhalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblkomentar`
--
ALTER TABLE `tblkomentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
