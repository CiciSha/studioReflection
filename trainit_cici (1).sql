-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Feb 2020 pada 07.19
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
-- Database: `trainit_cici`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_detail_pemesanan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_detail_studio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_detail_pemesanan`, `id_pemesanan`, `id_detail_studio`) VALUES
(1, 1, 1),
(2, 1, 7),
(3, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_studio`
--

CREATE TABLE `detail_studio` (
  `id_detail_studio` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `nama_background` int(1) NOT NULL,
  `foto_background` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_studio`
--

INSERT INTO `detail_studio` (`id_detail_studio`, `id_studio`, `nama_background`, `foto_background`) VALUES
(1, 1, 1, 'Pass_foto1.jpeg'),
(4, 1, 2, 'st8.PNG'),
(5, 1, 3, 'st5.PNG'),
(6, 2, 1, 'Pass_foto1.jpeg'),
(7, 2, 2, 'st8.PNG'),
(8, 2, 3, 'st5.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `username_member` varchar(50) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `email_member` varchar(50) NOT NULL,
  `no_telepon_member` char(13) NOT NULL,
  `alamat_member` text NOT NULL,
  `status_member` enum('Sudah Verifikasi','Belum Verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `username_member`, `password_member`, `email_member`, `no_telepon_member`, `alamat_member`, `status_member`) VALUES
(1, 'nurul', 'nurulkho', '8cb2237d0679ca88db6464eac60da96345513964', 'nurul_khotimah@gmail.com', '087638928977', 'Jalan Kaliurang km 14.5', ''),
(2, 'cici', 'cici_sha', '1234567', 'harya_sriharyati07@gmail.com', '085747554797', 'Jalan Kaliurang Km 14,5 ', ''),
(3, 'ghina', 'ghina_alfish19', '54321', 'ghinaalfish19@gmail.com', '08587435677', 'Jalan Slamet Riyadi', ''),
(4, 'Mutiara', 'mutirnuya', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', 'mutiara@gmail.com', '874937898', 'Kota Gede', 'Belum Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `foto_paket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `foto_paket`) VALUES
(1, 'Graduation & Family', 'Graduationfamily.jpg'),
(3, 'Maternity & Baby', 'Maternity1.jpg'),
(4, 'Couple', 'Prewed_indoor2.jpg'),
(5, 'Personal', 'Graduationfamily11.jpg'),
(13, 'Group', 'Group2.jpg'),
(14, 'Pass Foto', 'Graduationfamily1.jpg'),
(15, 'Prewedding Indoor', 'Prewed_indoor3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_studio`
--

CREATE TABLE `paket_studio` (
  `id_paket_studio` int(11) NOT NULL,
  `id_tipe_paket` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_studio`
--

INSERT INTO `paket_studio` (`id_paket_studio`, `id_tipe_paket`, `id_studio`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 1),
(4, 3, 2),
(5, 3, 3),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `no_rekening` int(50) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `status_pembayaran` enum('DP','Lunas') NOT NULL,
  `foto_bukti_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_tipe_paket` int(11) NOT NULL,
  `kode_pemesanan` varchar(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_booking` date NOT NULL,
  `status_pemesanan` enum('Pending','Cancel','DP','Lunas','Menunggu Konfirmasi') NOT NULL,
  `jumlah_orang` int(2) NOT NULL,
  `total_bayar` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_member`, `id_tipe_paket`, `kode_pemesanan`, `tanggal_pemesanan`, `tanggal_booking`, `status_pemesanan`, `jumlah_orang`, `total_bayar`) VALUES
(1, 1, 3, 'U231M', '2020-02-11', '2020-02-11', 'Pending', 12, '825000'),
(2, 1, 1, 'I0H78', '2020-02-12', '2020-02-12', 'Pending', 12, '355000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_pengaturan` varchar(100) NOT NULL,
  `isi_pengaturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `nama_pengaturan`, `isi_pengaturan`) VALUES
(1, 'Tarif Tambah Orang', '15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `foto`, `keterangan`) VALUES
(1, 'GRADUATIONFAMILY2.jpeg', 'Graduation merupakan moment yang sangat ditunggu-tunggu oleh mahasiswa, sehingga momet tersebut wajib untuk diabadikan:)'),
(2, 'COUPLE.jpeg', 'Couple'),
(3, 'PERSONAL.jpeg', 'personal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `nama_studio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`id_studio`, `nama_studio`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_paket`
--

CREATE TABLE `tipe_paket` (
  `id_tipe_paket` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_tipe_paket` varchar(50) NOT NULL,
  `harga_tipe_paket` varchar(8) NOT NULL,
  `deskripsi_tipe_paket` text NOT NULL,
  `min_dp_tipe_paket` varchar(6) NOT NULL,
  `max_jumlah_orang` int(2) NOT NULL,
  `foto_tipe_paket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_paket`
--

INSERT INTO `tipe_paket` (`id_tipe_paket`, `id_paket`, `nama_tipe_paket`, `harga_tipe_paket`, `deskripsi_tipe_paket`, `min_dp_tipe_paket`, `max_jumlah_orang`, `foto_tipe_paket`) VALUES
(1, 1, 'Bronze', '325000', '3 print foto 8RW\r\n1 DVD foto edit\r\nmax 10 orang\r\n5 pose\r\n1 background\r\n', '75000', 10, 'Graduationfamily11.jpg'),
(2, 1, 'Silver', '488000', '<ul>\r\n	<li>4 print foto 8RW\r\n	</li>\r\n	<li>1 print foto 12R + \"Minimalis Frame\"\r\n	</li>\r\n	<li>1 DVD foto edit\r\n	</li>\r\n	<li>Max. 10 orang</li>\r\n	<li>6 pose</li>\r\n	<li>1 background</li>\r\n</ul>\r\n\r\n\r\n', '100000', 10, 'Graduationfamily.jpg'),
(3, 1, 'Gold', '795000', '4 print foto 8RW, 1 print foto 16R, 1 DVD foto edit, max 10 orang, 7 pose, 2 backgound', '125000', 10, 'Graduationfamily111.jpg'),
(4, 1, 'Platinum', '995000', '5 print foto 8RW, 1 DVD foto edit, max 10 orang, 10 pose, 2 background', '150000', 10, 'Graduationfamily1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pemesanan`);

--
-- Indexes for table `detail_studio`
--
ALTER TABLE `detail_studio`
  ADD PRIMARY KEY (`id_detail_studio`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_studio`
--
ALTER TABLE `paket_studio`
  ADD PRIMARY KEY (`id_paket_studio`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `tipe_paket`
--
ALTER TABLE `tipe_paket`
  ADD PRIMARY KEY (`id_tipe_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_detail_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `detail_studio`
--
ALTER TABLE `detail_studio`
  MODIFY `id_detail_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `paket_studio`
--
ALTER TABLE `paket_studio`
  MODIFY `id_paket_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipe_paket`
--
ALTER TABLE `tipe_paket`
  MODIFY `id_tipe_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
