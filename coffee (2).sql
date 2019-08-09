-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2018 pada 13.40
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dtl_transaksi`
--

CREATE TABLE `tbl_dtl_transaksi` (
  `id_dtl` int(10) NOT NULL,
  `id_menu` char(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_dtl` varchar(10) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dtl_transaksi`
--

INSERT INTO `tbl_dtl_transaksi` (`id_dtl`, `id_menu`, `jumlah`, `status_dtl`, `id_transaksi`) VALUES
(64, 'K2', 1, '3', 15),
(65, 'K1', 1, '3', 15),
(67, 'M4', 1, '3', 15),
(68, 'K2', 1, '3', 16),
(69, 'K1', 1, '3', 16),
(70, 'K4', 1, '3', 17),
(71, 'K3', 1, '3', 17),
(72, 'M3', 1, '3', 17),
(73, 'M4', 1, '3', 17),
(74, 'K2', 1, '3', 17),
(75, 'K3', 1, '3', 17),
(76, 'K1', 1, '3', 18),
(77, 'K2', 1, '3', 18),
(78, 'K3', 1, '3', 19),
(79, 'K2', 1, '3', 19),
(80, 'M3', 1, '3', 19),
(81, 'M4', 1, '3', 19),
(82, 'K4', 1, '3', 20),
(83, 'K3', 1, '3', 20),
(84, 'M2', 1, '3', 20),
(85, 'M3', 2, '3', 20),
(86, 'K4', 1, '3', 21),
(87, 'K3', 1, '3', 21),
(88, 'M2', 2, '3', 21),
(89, 'M1', 1, '3', 21),
(90, 'K3', 2, '3', 22),
(91, 'K4', 1, '3', 22),
(92, 'K3', 1, '3', 23),
(93, 'K2', 2, '3', 23),
(94, 'K1', 2, '3', 24),
(95, 'K4', 1, '3', 24),
(96, 'K3', 1, '3', 24),
(97, 'K2', 1, '3', 24),
(114, 'K2', 2, '3', 28),
(115, 'K1', 1, '3', 28),
(116, 'K2', 2, '3', 28),
(117, 'K1', 1, '3', 28),
(118, 'K2', 1, '3', 30),
(119, 'K1', 1, '3', 30),
(120, 'K3', 2, '3', 30),
(121, 'K3', 1, '1', 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kopi`
--

CREATE TABLE `tbl_kopi` (
  `id_menu` char(5) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `rating` float NOT NULL,
  `harga` int(10) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kopi`
--

INSERT INTO `tbl_kopi` (`id_menu`, `nama_menu`, `deskripsi`, `kategori`, `rating`, `harga`, `foto`, `status`) VALUES
('K1', 'V60 (Manual Brew)', 'Metode pour over  merupakan metode dalam penyeduhan kopi yang sudah dikenal sejak lama. Metode ini memang tidak sulit namun juga tidak sederhana, karena dalam menyeduh kopi membutuhkan proses yang jeli agar dihasilkan seduhan kopi yang berkualitas dan nikmat. V60 Hario merupakan salah satu alat seduh kopi dengan metode pour over. Secara sekilas bentuk dari alat kopi ini menyerupai cangkir biasa yang digunakan untuk meminum teh. Tampilan seperti inilah yang menajadikan gelas tersebut banyak diperhatikan orang, bentuknya membuat orang penasaran karena meski mirip dengan cangkir biasa untuk teh tapi memang memiliki sisi yang tak biasa.', 'kopi', 4, 15000, 'v60.jpg', 1),
('K2', 'Flat Bottom', 'Dengan menggunakan flat bottom dripper kita akan mendapatkan hasil berwing yang lebih merata, hal ini dikarenakan type ini cenderung lebih lama mengendapkan air.\r\n\r\nMokhamano Transparant Flat Bottom Pour Over Coffee Dripper Size 02 mengambil style seperti kalita pour over dengan 3 lubang memungkinan extraksi dengan lebih baik.', 'kopi', 4, 15000, 'flat_bottom.jpg', 1),
('K3', 'Japanese Ice', 'Japanese Iced Coffee tidak memerlukan alat cold brew atau coffee dripper yang seperti layaknya membuat kopi dingin selama ini. Hanya diperlukan sebuah dripper yang biasa dipakai dalam metode pour over V60. Dan saya yakin semua pecinta kopi dengan metode manual brewing pasti memiliki dripper ini. Selain dripper diperlukan juga paper filter karena cara membuat Japanese Iced Coffee hampir mirip dengan pour over yang biasa digunakan.\r\n\r\nMeskipun tekniknya terdengar sederhana, namun kopi dingin yang satu ini menghasilkan cita rasa jenius yang tak main-main. Perbedaan yang paling mencolok antara metode pour over V60 biasa dengan Japanese Iced Coffee adalah di dalam pembuatan kopi dingin ini rasio air yang digunakan setengahnya digantikan dengan batu es. Sedangkan pada pour over V60 biasa tidak menggunakan batu es.', 'kopi', 5, 15000, 'japanese_ice.jpg', 1),
('K4', 'Vietnamese Drip Cofee', 'Kehadiran Vietnamese Drip Coffee yang menggunakan sweetened condensed milk (susu kental manis) ternyata memiliki sejarah pula. Pada masanya, Viet Nam kesulitan menemukan susu segar untuk dikonsumsi dan untuk menggantik krim dan susu sebagai campuran kopi, masyarakat masa itu menggunakan susu kental manis. Budaya minum kopi dengan campuran susu kental manis itu dilakukan turun temurun hingga saat ini.\r\nVietnamese Drip Coffee pada awalnya menggunakan dark roast coffee dan campuran susu kental manis sebagai penyeimbang rasa pahitnya. Tapi sekarang peminum kopi seluruh dunia bereksperimen dengan berbagai jenis kopi dan campurannya untuk mendapatkan rasa Vietnamese coffee sesuai dengan selera mereka. Selain Vietnamese Coffee versi hangat, Vietnamese Iced Coffee (ca phe da) juga telah menjadi jenis minuman yang disukai di seluruh dunia.', 'kopi', 3, 10000, 'vietnam_drip.jpg', 1),
('M1', 'French Fries', 'hidangan yang dibuat dari potongan-potongan kentang yang digoreng dalam minyak goreng panas. Di dalam menu rumah-rumah makan, kentang goreng yang dipotong panjang-panjang dan digoreng dalam keadaan terendam di dalam minyak goreng panas.', 'food', 4, 12000, 'ff.png', 1),
('M2', 'Grilled Sausage + FF', 'Sosis Goreng yang goreng dengan kematangan yang amat pas, di temani kentang cantik dengan rasa yang wah.', 'food', 3, 20000, 'sosis.jpg', 1),
('M3', 'Roti Bakar', 'Roti yang di bakar dengan matang, di oles dengan selai coklat yang di taburi keju mahal.', 'food', 4, 10000, 'roti_bakar.jpg', 1),
('M4', 'Spaghetti + Sosis', 'Spagehtti dengan resep rumahan yang wah, ditambah taburan sosis bakar yang sedap.', 'food', 5, 18000, 'spaghetti.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_meja`
--

CREATE TABLE `tbl_meja` (
  `id_meja` int(5) NOT NULL,
  `nama_meja` varchar(30) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'kosong'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_meja`
--

INSERT INTO `tbl_meja` (`id_meja`, `nama_meja`, `status`) VALUES
(1, 'Meja Langganan', 'kosong'),
(2, 'Meja 2', 'kosong'),
(3, 'Meja 3', 'kosong'),
(4, 'Meja 4', 'kosong'),
(5, 'Meja 1', 'kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `pass_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `alamat`, `jk`, `jabatan`, `id_user`, `pass_user`) VALUES
(1, 'Gulah', 'Jl.Cijagra', 'Laki-Laki', 'Owner 1', 'adminG', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Kiki', 'Jl.Cijagra', 'Laki-Laki', 'Owner 2', 'adminK', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_meja` int(5) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `tanggal`, `total`, `status`, `id_meja`, `id_petugas`) VALUES
(15, '2018-06-30 03:02:45', 48000, '3', 2, 1),
(16, '2018-07-07 03:38:55', 30000, '3', 3, 1),
(17, '2018-07-08 16:13:54', 83000, '3', 5, 1),
(18, '2018-07-08 16:34:34', 30000, '3', 1, 1),
(19, '2018-07-09 02:46:10', 58000, '3', 1, 1),
(20, '2018-07-10 02:20:05', 65000, '3', 5, 1),
(21, '2018-07-13 06:50:35', 77000, '3', 3, 1),
(22, '2018-07-13 07:05:57', 40000, '3', 4, 1),
(23, '2018-07-13 10:21:13', 45000, '3', 3, 1),
(24, '2018-07-13 10:29:06', 70000, '3', 2, 1),
(28, '2018-07-30 15:17:51', 45000, '3', 2, NULL),
(29, '2018-07-30 15:18:09', 45000, '3', 2, NULL),
(30, '2018-07-30 15:20:35', 60000, '3', 5, NULL),
(31, '2018-08-03 13:17:55', 15000, '0', 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dtl_transaksi`
--
ALTER TABLE `tbl_dtl_transaksi`
  ADD PRIMARY KEY (`id_dtl`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `tbl_kopi`
--
ALTER TABLE `tbl_kopi`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_meja`
--
ALTER TABLE `tbl_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_meja` (`id_meja`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dtl_transaksi`
--
ALTER TABLE `tbl_dtl_transaksi`
  MODIFY `id_dtl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `tbl_meja`
--
ALTER TABLE `tbl_meja`
  MODIFY `id_meja` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_dtl_transaksi`
--
ALTER TABLE `tbl_dtl_transaksi`
  ADD CONSTRAINT `tbl_dtl_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_dtl_transaksi_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tbl_kopi` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_meja`) REFERENCES `tbl_meja` (`id_meja`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tbl_petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
