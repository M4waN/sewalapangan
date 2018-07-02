-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jul 2018 pada 18.59
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewalapangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_booking`
--

CREATE TABLE `data_booking` (
  `id_booking` varchar(50) NOT NULL,
  `id_member` varchar(50) NOT NULL,
  `id_lapangan` varchar(50) NOT NULL,
  `waktu_mulai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `waktu_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration_time` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_booking`
--

INSERT INTO `data_booking` (`id_booking`, `id_member`, `id_lapangan`, `waktu_mulai`, `waktu_selesai`, `duration_time`, `created_at`, `status`) VALUES
('0e37e70b54b1f87246c766613a9fd607', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 10:00:00', '2018-06-06 12:00:00', 120, '2018-07-01 18:23:31', 'belum_bayar'),
('0e9151fd3647bb75be353673f0a967e2', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:51', 'belum_bayar'),
('121331a8be54d391ccc1fbc992af3098', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:27:34', 'belum_bayar'),
('1befdb0bca11791bfb455b1342e4c350', '5f507ee31fae3db1dbaa69ecea9966a0', '525ed6dc3cf8cfda5bda62a7de70694c', '2018-06-06 10:00:00', '2018-06-06 12:00:00', 120, '2018-07-02 00:06:34', 'belum_bayar'),
('1c4f097ba0811ae961be3feac5307611', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:57', 'belum_bayar'),
('3b220f3e389563522767704d373855e8', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 05:00:00', '2018-06-06 06:00:00', 60, '2018-07-01 02:23:37', 'belum_bayar'),
('3e15bc731ab4e732db89cd6e0621d106', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 19:00:00', '2018-06-05 22:00:00', 180, '2018-06-30 12:15:22', 'belum_bayar'),
('3f670842dc20a46f81baf4e09905d5a1', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:18:23', 'belum_bayar'),
('4366f13206d00ae80ae7e78f2323dacc', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:22:44', 'belum_bayar'),
('45a606747217c69b18c11ac8fe6c47bc', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-06-30 16:35:13', 'belum_bayar'),
('55dc3937bdc421b54ff9fedb98ed0311', '5f507ee31fae3db1dbaa69ecea9966a0', '525ed6dc3cf8cfda5bda62a7de70694c', '2018-06-06 05:00:00', '2018-06-06 07:00:00', 120, '2018-06-29 03:49:23', 'lunas'),
('567tgu7', '7e23df4f16e26e3833335fa56af01ca8', '525ed6dc3cf8cfda5bda62a7de70694c', '2018-06-06 01:00:00', '2018-06-06 02:00:00', 60, '2018-06-26 17:00:00', 'belum_lunas'),
('5e092779d11d92fe6343987083eafc21', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:23:46', 'belum_bayar'),
('6d6edc65e1fe1ccc9d0e1ba761261a60', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:20:22', 'belum_bayar'),
('6fbd3ecc602a1ef34ca9c4f90bec080c', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 05:00:00', '2018-06-06 06:00:00', 60, '2018-07-01 02:23:54', 'belum_bayar'),
('73dbd8f21bc47da25228d1ed1f905e6a', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:21:04', 'belum_bayar'),
('7570d32125bb1b2b959632ea3853d3ac', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:52', 'belum_bayar'),
('76f8271d74dfa4f60383f72c534915fe', '5f507ee31fae3db1dbaa69ecea9966a0', '525ed6dc3cf8cfda5bda62a7de70694c', '2018-06-06 04:00:00', '2018-06-06 05:00:00', 60, '2018-06-29 03:49:23', 'lunas'),
('7f33e6d73426cdcac911536a257b88cf', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:28:10', 'belum_bayar'),
('7ff4aa12c0c9a7ded8837c547fc12843', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 05:00:00', '2018-06-06 06:00:00', 60, '2018-07-01 02:21:56', 'belum_bayar'),
('80e316b700975e4127348d416cb42fcf', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 19:00:00', '2018-06-05 21:00:00', 120, '2018-06-30 12:15:39', 'belum_bayar'),
('828ccb4c369a03a88fb6995c16025461', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 05:00:00', '2018-06-06 06:00:00', 60, '2018-07-01 02:21:57', 'belum_bayar'),
('8e9c21f0e72afeb6cf26ccd55354dbc1', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-06 03:00:00', '2018-06-06 05:00:00', 120, '2018-06-28 13:47:49', 'lunas'),
('9e2e590991ab1cf9f46aa484f22a2ef2', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:56', 'belum_bayar'),
('b1b3b24d396192e552c76680b06227cd', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:53', 'belum_bayar'),
('bed3184a562b109f31449d8315b2ba5d', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 05:00:00', '2018-06-06 06:00:00', 60, '2018-07-01 02:23:40', 'belum_bayar'),
('c082045c3474b18c62e754c4e5c429d0', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 19:00:00', '2018-06-05 20:00:00', 60, '2018-07-01 02:27:49', 'belum_bayar'),
('c848c2f8ab9e72082c2fd723b51bc76d', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:54', 'belum_bayar'),
('cfeabe414be88541d5a5ec94ce7ae2f7', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 05:00:00', '2018-06-06 06:00:00', 60, '2018-07-01 02:21:58', 'belum_bayar'),
('dac92fb4b2ed7040937cd432138f5246', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-05 18:00:00', '2018-06-05 19:00:00', 60, '2018-07-01 02:20:48', 'belum_bayar'),
('dc6cfd28b3387accfe058ae079310603', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-05 18:00:00', '2018-06-05 20:00:00', 120, '2018-07-01 16:18:52', 'belum_bayar'),
('f058dc66c5072c87ddf35bdb513fca1b', '5f507ee31fae3db1dbaa69ecea9966a0', 'd1b6cc2b0fdbdeb65ae01c3e8b582fc3', '2018-06-06 02:00:00', '2018-06-06 03:00:00', 60, '2018-06-28 14:24:29', 'lunas'),
('f3c07752e1c6019d28ed19c901ea235b', '5f507ee31fae3db1dbaa69ecea9966a0', 'c6a083216eac49861e889a937e023405', '2018-06-06 08:00:00', '2018-06-06 09:00:00', 60, '2018-07-01 18:07:33', 'belum_bayar'),
('fc8e6c21c0d9587a58da5fd4cc010aeb', '5f507ee31fae3db1dbaa69ecea9966a0', '525ed6dc3cf8cfda5bda62a7de70694c', '2018-06-06 01:00:00', '2018-06-06 03:00:00', 120, '2018-06-28 14:24:29', 'barudp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lapangan`
--

CREATE TABLE `data_lapangan` (
  `id_lapangan` varchar(50) NOT NULL,
  `nama_lapangan` varchar(50) NOT NULL,
  `id_jenis_lapangan` varchar(50) NOT NULL,
  `harga_lapangan` int(10) NOT NULL,
  `images_lapangan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_lapangan`
--

INSERT INTO `data_lapangan` (`id_lapangan`, `nama_lapangan`, `id_jenis_lapangan`, `harga_lapangan`, `images_lapangan`, `created_at`, `updated_at`) VALUES
('525ed6dc3cf8cfda5bda62a7de70694c', 'Lapangan C OUTDOOR RUMPUT', 'e4esrd35454d', 234777, NULL, '2018-06-26 18:51:00', '2018-06-14 04:11:42'),
('c6a083216eac49861e889a937e023405', 'Lapangan B  INDOOR RUMPUT', 'e4esrd35454d', 50000, NULL, '2018-06-20 12:26:21', '2018-06-07 14:36:15'),
('d1b6cc2b0fdbdeb65ae01c3e8b582fc3', 'Lapangan A INDOOR SINTETIS', 'e4esrd35454d', 150000, NULL, '2018-06-20 12:26:21', '2018-06-07 22:05:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_member`
--

CREATE TABLE `data_member` (
  `id_member` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_member`
--

INSERT INTO `data_member` (`id_member`, `username`, `password`, `firstname`, `lastname`, `alamat`, `email`, `no_telp`, `img`, `created_at`, `updated_at`) VALUES
('0db9c6223325439422d87b9c77ef2671', 'abdulrohman', '912ec803b2ce49e4a541068d495ab570', 'Abdul ', 'Rohman', 'jalan sono', 'abdul@gmail.com', '2314970234', '', '2018-06-08 01:59:58', '2018-06-08 01:59:58'),
('40b4b80389aea1445b6d7ddfdd6f6c69', 'budi.last', '827ccb0eea8a706c4c34a16891f84e7b', 'Budi', 'Terakhir', 'ajlsl.sd.fsdkfj', 'wow@gmail.com', '09232381283', '', '2018-06-24 06:30:54', '2018-06-24 06:30:54'),
('5f507ee31fae3db1dbaa69ecea9966a0', 'armawan', '827ccb0eea8a706c4c34a16891f84e7b', 'Armawan', 'Aritonang', '160 Raccoon Run', 'armawan10@gmail.com', '6666555', '', '2018-06-21 15:00:22', '2018-06-21 15:00:22'),
('7e23df4f16e26e3833335fa56af01ca8', 'evanscaem', '827ccb0eea8a706c4c34a16891f84e7b', 'Evans', 'Gultom', 'Jalan jaalan', 'evan@mail.com', '0823421123', '', '2018-06-07 23:46:09', '2018-06-07 23:46:09'),
('b73f69165d2451c1a1a18d74a1083a19', 'mail', '827ccb0eea8a706c4c34a16891f84e7b', 'William', 'L. Belcher', '4085 Burning Memory Lane', 'mail@mail.com', '082311468821', '', '2018-06-24 06:54:54', '2018-06-24 06:54:54'),
('ceff370ba8a0589bd0e8b76e24020576', 'hehe', '827ccb0eea8a706c4c34a16891f84e7b', 'Haha', 'Hehe', 'lajlasj', 'haha@mail.com', '02184021', '', '2018-06-24 06:55:35', '2018-06-24 06:55:35'),
('ea8a637203bebc3e13a82e70675e7237', 'lagi.lagi', '827ccb0eea8a706c4c34a16891f84e7b', 'Lagi', 'Sibudi', 'jl.fslsjf', 'again@mail.com', '29342348', '', '2018-06-24 06:53:55', '2018-06-24 06:53:55'),
('f113aa76a06c435dc9a830c44442c0e8', 'skjdfljs', '464215a935b2433e0979837eb58a4c4e', 'Kjhjsdfkhs', 'Askdjfsdf', 'sdfsdf', 'kjsdf@gmai.com', 'sdfsdf', '', '2018-06-24 13:04:40', '2018-06-24 13:04:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_booking` varchar(50) NOT NULL,
  `total_terbayar` int(100) NOT NULL,
  `total_tarif` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `id_booking`, `total_terbayar`, `total_tarif`, `status`, `tgl_transaksi`, `updated_at`) VALUES
('262dd070377aa2a8486aac56be10114f', '1befdb0bca11791bfb455b1342e4c350', 0, 469554, '', '2018-07-02 00:06:34', '2018-07-02 00:06:34'),
('28897a14db68507f4f382c5498f7adbf', '7f33e6d73426cdcac911536a257b88cf', 0, 100000, '', '2018-07-01 16:28:10', '2018-07-01 16:28:10'),
('99035175c51f8e9a52f6fb118393f998', 'f3c07752e1c6019d28ed19c901ea235b', 0, 50000, '', '2018-07-01 18:07:33', '2018-07-01 18:07:33'),
('ab8777072dd06efb8d96f460b81c29b3', '0e37e70b54b1f87246c766613a9fd607', 0, 300000, '', '2018-07-01 18:23:31', '2018-07-01 18:23:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `first_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat` text CHARACTER SET latin1 NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) NOT NULL,
  `images_biodata` varchar(100) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `password`, `level`, `first_name`, `last_name`, `alamat`, `no_telp`, `email`, `images_biodata`, `created_at`, `updated_at`) VALUES
('0bc670897d5c06a698480414b5d908d8', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Armawan', 'Aritonang', '160 Raccoon Run', '082311468821', 'armawan@mawan.com', '', '2018-06-07 23:13:58', '2018-06-04 17:04:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` varchar(50) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start`, `end`, `allDay`) VALUES
(234234, 'test', 'sflskfjl', '#3a87ad', '2018-06-18 17:00:00', '2018-06-18 18:00:00', 'false');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_lapangan`
--

CREATE TABLE `jenis_lapangan` (
  `id_jenis_lapangan` varchar(50) NOT NULL,
  `nama_jenis_lapangan` varchar(100) NOT NULL,
  `desc_jenis_lapangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_lapangan`
--

INSERT INTO `jenis_lapangan` (`id_jenis_lapangan`, `nama_jenis_lapangan`, `desc_jenis_lapangan`, `created_at`) VALUES
('e4esrd35454d', 'FUTSAL', 'FUTSAL', '2018-06-20 12:24:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `id_konfirmasi` varchar(50) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `gambar_bukti` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statis_corousel`
--

CREATE TABLE `statis_corousel` (
  `id` varchar(50) NOT NULL,
  `image_corousel` varchar(50) NOT NULL,
  `desc_corousel` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statis_website`
--

CREATE TABLE `statis_website` (
  `id` varchar(50) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `profil_website` text NOT NULL,
  `img_logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `statis_website`
--

INSERT INTO `statis_website` (`id`, `nama_website`, `profil_website`, `img_logo`) VALUES
('statispage', 'Armawan Aritonang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt elementum auctor. Pellentesque elementum lacus nulla. Quisque cursus nulla nec justo lobortis tempus. Aenean congue vitae risus ac bibendum. Sed laoreet urna id interdum vehicula. Curabitur posuere lorem a arcu convallis, eu aliquet mi consectetur. Fusce viverra augue eu justo iaculis ultrices.', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_users` varchar(50) NOT NULL,
  `id_biodata` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_users`, `id_biodata`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
('2f22897a4acdb8b141acfcbbc9667bf6', '5c1a8bf3a4885b6ba1a027e07086fff2', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'member', '2018-06-06 01:24:38', '2018-06-06 06:24:39'),
('653481f15727f6daa0fb28c538566bc5', '30532192b033e15d76281a02f2029c41', 'armawan10', '202cb962ac59075b964b07152d234b70', 'member', '2018-06-04 18:41:45', '2018-06-04 23:41:45'),
('6d6aed7008b20bb0496d21c79bd3b41a', '0d2ed9154d1ad08b08cb79c8115cbd82', '1231231', '4297f44b13955235245b2497399d7a93', 'member', '2018-06-05 02:38:47', '2018-06-05 07:38:47'),
('9572aafb919ad5ec32d43afe0f5f8d31', '5f142187de20240a7a7ddb4ff0ab7d75', 'safsd', 'ede28437d08995573ef74e1136391df0', 'member', '2018-06-04 19:29:28', '2018-06-05 00:29:28'),
('9b32007072426c52472c82380e7038c5', '6cb30686a22434bcb9ab35c9cb94a59f', 'asfs', '912ec803b2ce49e4a541068d495ab570', 'member', '2018-06-04 19:28:42', '2018-06-05 00:28:43'),
('e0d1b615d616ef9aacfe86907efce814', 'adb4dc5bcb1767428c839660f5d3ca1c', 'sdfsd', 'fcdd8ec146156ea729eaa5cf09df8e44', 'member', '2018-06-04 19:32:50', '2018-06-05 00:32:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_booking`
--
ALTER TABLE `data_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `data_lapangan`
--
ALTER TABLE `data_lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `data_member`
--
ALTER TABLE `data_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_lapangan`
--
ALTER TABLE `jenis_lapangan`
  ADD PRIMARY KEY (`id_jenis_lapangan`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statis_corousel`
--
ALTER TABLE `statis_corousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statis_website`
--
ALTER TABLE `statis_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234235;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
