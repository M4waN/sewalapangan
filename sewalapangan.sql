-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jun 2018 pada 19.28
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
  `waktu_mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration_time` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_booking`
--

INSERT INTO `data_booking` (`id_booking`, `id_member`, `id_lapangan`, `waktu_mulai`, `waktu_selesai`, `duration_time`, `created_at`, `status`) VALUES
('234234', '7e23df4f16e26e3833335fa56af01ca8', 'c6a083216eac49861e889a937e023405', '2018-06-05 17:00:00', '2018-06-05 18:00:00', 200, '0000-00-00 00:00:00', '');

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
('525ed6dc3cf8cfda5bda62a7de70694c', 'Lapangan C OUTDOOR RUMPUT', '', 234777, NULL, '2018-06-20 12:26:21', '2018-06-14 04:11:42'),
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
('7e23df4f16e26e3833335fa56af01ca8', 'evanscaem', '827ccb0eea8a706c4c34a16891f84e7b', 'Evans', 'Gultom', 'Jalan jaalan', 'evan@mail.com', '0823421123', '', '2018-06-07 23:46:09', '2018-06-07 23:46:09');

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
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
