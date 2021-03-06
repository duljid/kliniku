-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2021 pada 03.04
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_pasien`
--

CREATE TABLE `antrian_pasien` (
  `id` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` text NOT NULL,
  `poli` varchar(10) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `layanan` varchar(20) NOT NULL,
  `no_bpjs` varchar(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Pendaftaran', 'Akun Pendaftaran'),
(3, 'Pasien', 'Akun Pasien'),
(4, 'Perawat', 'Akun Perawat'),
(5, 'Dokter', 'Akun Dokter'),
(6, 'Rumah Bersalin', 'Akun Rumah Bersalin'),
(7, 'Apotek', 'Akun Apotek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 40),
(1, 40),
(1, 40),
(2, 51),
(2, 51),
(2, 51),
(3, 61),
(3, 65),
(3, 66),
(5, 62),
(5, 67),
(6, 60),
(6, 60),
(6, 60),
(7, 59),
(7, 59),
(7, 59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'duljid', 1, '2021-07-14 00:31:56', 0),
(2, '::1', 'duljid', 1, '2021-07-14 00:39:20', 0),
(3, '::1', 'eva1703@gmail.com', 1, '2021-07-14 02:18:53', 1),
(4, '::1', 'eva1703@gmail.com', 1, '2021-07-14 03:43:08', 1),
(5, '::1', 'eva1703@gmail.com', 1, '2021-07-14 04:24:58', 1),
(6, '::1', 'eva1703@gmail.com', 1, '2021-07-14 19:45:14', 1),
(7, '::1', 'majid12339@yahoo.com', 4, '2021-07-15 02:05:53', 1),
(8, '::1', 'duljid', NULL, '2021-07-15 02:27:03', 0),
(9, '::1', 'eva1703@gmail.com', 1, '2021-07-15 02:27:16', 1),
(10, '::1', 'eva1703@gmail.com', 1, '2021-07-21 05:51:06', 1),
(11, '::1', 'duljid', NULL, '2021-07-21 18:42:34', 0),
(12, '::1', 'eva1703@gmail.com', 1, '2021-07-21 18:42:44', 1),
(13, '::1', 'useranwar@gmail.com', 8, '2021-07-21 20:37:17', 1),
(14, '::1', 'abdul', NULL, '2021-09-11 06:55:50', 0),
(15, '::1', 'abdul@gmail.com', 1, '2021-09-11 06:56:00', 1),
(16, '::1', 'pasien', NULL, '2021-09-17 12:24:27', 0),
(17, '::1', 'Pasien', NULL, '2021-09-17 12:24:36', 0),
(18, '::1', 'admin@gmail.com', 19, '2021-09-17 12:24:45', 1),
(19, '::1', 'admin@gmail.com', 19, '2021-09-17 12:27:10', 1),
(20, '::1', 'Admin', NULL, '2021-09-17 12:27:39', 0),
(21, '::1', 'admin@gmail.com', 19, '2021-09-17 12:27:48', 1),
(22, '::1', 'pasien@gmail.com', 20, '2021-09-17 12:54:05', 1),
(23, '::1', 'pasien@gmail.com', 20, '2021-09-17 12:54:13', 1),
(24, '::1', 'abdulduar', NULL, '2021-09-18 10:44:01', 0),
(25, '::1', 'abdulduar', NULL, '2021-09-18 10:46:51', 0),
(26, '::1', 'abdulduar', NULL, '2021-09-18 10:47:09', 0),
(27, '::1', 'admin', NULL, '2021-09-18 10:48:59', 0),
(28, '::1', 'admin', NULL, '2021-09-18 10:49:06', 0),
(29, '::1', 'admin', NULL, '2021-09-18 10:49:29', 0),
(30, '::1', 'admin', NULL, '2021-09-18 10:49:39', 0),
(31, '::1', 'Admin', NULL, '2021-09-18 10:49:55', 0),
(32, '::1', 'Admin', NULL, '2021-09-18 10:50:05', 0),
(33, '::1', 'admin@gmail.com', NULL, '2021-09-18 10:50:26', 0),
(34, '::1', 'admin', NULL, '2021-09-18 10:51:53', 0),
(35, '::1', 'Admin', NULL, '2021-09-18 10:52:01', 0),
(36, '::1', 'pasien@gmail.com', 38, '2021-09-18 23:14:06', 1),
(37, '::1', 'pasien@gmail.com', 38, '2021-09-18 23:17:05', 1),
(38, '::1', 'pasien@gmail.com', 38, '2021-09-18 23:23:57', 1),
(39, '::1', 'admin@gmail.com', 40, '2021-09-18 23:28:29', 1),
(40, '::1', 'pasien', NULL, '2021-09-18 23:36:24', 0),
(41, '::1', 'pasien@gmail.com', 38, '2021-09-18 23:36:33', 1),
(42, '::1', 'admin@gmail.com', 40, '2021-09-19 00:02:10', 1),
(43, '::1', 'admin@gmail.com', 40, '2021-09-19 00:05:26', 1),
(44, '::1', 'admin@gmail.com', 40, '2021-09-19 00:12:10', 1),
(45, '::1', 'admin@gmail.com', 40, '2021-09-19 00:13:11', 1),
(46, '::1', 'admin@gmail.com', 40, '2021-09-19 00:18:25', 1),
(47, '::1', 'admin@gmail.com', 40, '2021-09-19 00:18:43', 1),
(48, '::1', 'pasien@gmail.com', 38, '2021-09-19 00:28:18', 1),
(49, '::1', 'admin@gmail.com', 40, '2021-09-19 00:29:41', 1),
(50, '::1', 'admin@gmail.com', 40, '2021-09-19 00:31:11', 1),
(51, '::1', 'admin@gmail.com', 40, '2021-09-19 00:54:30', 1),
(52, '::1', 'admin@gmail.com', 40, '2021-09-19 00:55:23', 1),
(53, '::1', 'admin@gmail.com', 40, '2021-09-19 01:23:09', 1),
(54, '::1', 'admin@gmail.com', 40, '2021-09-19 01:24:21', 1),
(55, '::1', 'admin@gmail.com', 40, '2021-09-19 01:25:42', 1),
(56, '::1', 'admin@gmail.com', 40, '2021-09-19 01:26:53', 1),
(57, '::1', 'admin@gmail.com', 40, '2021-09-19 01:29:18', 1),
(58, '::1', 'admin@gmail.com', 40, '2021-09-19 01:30:44', 1),
(59, '::1', 'admin@gmail.com', 40, '2021-09-19 01:31:20', 1),
(60, '::1', 'admin@gmail.com', 40, '2021-09-19 01:32:55', 1),
(61, '::1', 'admin@gmail.com', 40, '2021-09-19 01:35:45', 1),
(62, '::1', 'admin@gmail.com', 40, '2021-09-19 01:38:04', 1),
(63, '::1', 'admin@gmail.com', 40, '2021-09-19 01:39:13', 1),
(64, '::1', 'admin@gmail.com', 40, '2021-09-19 01:39:57', 1),
(65, '::1', 'admin@gmail.com', 40, '2021-09-19 01:40:10', 1),
(66, '::1', 'admin@gmail.com', 40, '2021-09-19 01:40:25', 1),
(67, '::1', 'admin@gmail.com', 40, '2021-09-19 01:41:26', 1),
(68, '::1', 'admin@gmail.com', 40, '2021-09-19 01:41:34', 1),
(69, '::1', 'admin@gmail.com', 40, '2021-09-19 01:43:01', 1),
(70, '::1', 'admin@gmail.com', 40, '2021-09-19 01:44:33', 1),
(71, '::1', 'admin@gmail.com', 40, '2021-09-19 01:49:44', 1),
(72, '::1', 'admin@gmail.com', 40, '2021-09-19 01:51:18', 1),
(73, '::1', 'admin@gmail.com', 40, '2021-09-19 01:52:01', 1),
(74, '::1', 'admin@gmail.com', 40, '2021-09-19 01:52:56', 1),
(75, '::1', 'admin@gmail.com', 40, '2021-09-19 04:15:35', 1),
(76, '::1', 'admin@gmail.com', 40, '2021-09-19 04:18:08', 1),
(77, '::1', 'admin', NULL, '2021-09-19 04:18:59', 0),
(78, '::1', 'admin@gmail.com', 40, '2021-09-19 04:19:07', 1),
(79, '::1', 'admin', NULL, '2021-09-20 04:10:00', 0),
(80, '::1', 'admin', NULL, '2021-09-20 10:41:10', 0),
(81, '::1', 'admin', NULL, '2021-09-20 10:41:16', 0),
(82, '::1', 'admin', NULL, '2021-09-20 10:41:26', 0),
(83, '::1', 'admin@gmail.com', 40, '2021-09-20 10:41:35', 1),
(84, '::1', 'admin', NULL, '2021-09-25 02:09:21', 0),
(85, '::1', 'admin@gmail.com', 40, '2021-09-25 02:09:29', 1),
(86, '::1', 'admin', NULL, '2021-09-25 03:27:26', 0),
(87, '::1', 'admin@gmail.com', 40, '2021-09-25 03:27:33', 1),
(88, '::1', 'admin@gmail.com', 40, '2021-09-25 03:27:53', 1),
(89, '::1', 'admin@gmail.com', 40, '2021-09-25 03:28:17', 1),
(90, '::1', 'admin@gmail.com', 40, '2021-09-25 03:29:37', 1),
(91, '::1', 'admin', NULL, '2021-09-27 00:50:59', 0),
(92, '::1', 'admin@gmail.com', 40, '2021-09-27 00:51:06', 1),
(93, '::1', 'admin@gmail.com', 40, '2021-09-27 21:24:15', 1),
(94, '::1', 'admin@gmail.com', 40, '2021-09-27 21:57:07', 1),
(95, '::1', 'admin@gmail.com', 40, '2021-09-28 01:32:21', 1),
(96, '::1', 'admin@gmail.com', 40, '2021-09-28 02:04:05', 1),
(97, '::1', 'admin@gmail.com', 40, '2021-09-28 02:56:32', 1),
(98, '::1', 'admin@gmail.com', 40, '2021-09-29 09:20:49', 1),
(99, '::1', 'admin@gmail.com', 40, '2021-09-29 09:24:35', 1),
(100, '::1', 'pendaftaran', NULL, '2021-09-29 09:27:37', 0),
(101, '::1', 'pendaftaran@gmail.com', 51, '2021-09-29 09:27:48', 1),
(102, '::1', 'admin@gmail.com', 40, '2021-09-29 11:05:57', 1),
(103, '::1', 'pendaftaran@gmail.com', 51, '2021-09-29 11:08:28', 1),
(104, '::1', 'admin@gmail.com', 40, '2021-09-30 07:47:41', 1),
(105, '::1', 'admin@gmail.com', 40, '2021-10-01 21:29:16', 1),
(106, '::1', 'pendaftaran@gmail.com', 51, '2021-10-01 21:29:40', 1),
(107, '::1', 'admin@gmail.com', 40, '2021-10-02 02:07:50', 1),
(108, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 02:26:28', 1),
(109, '::1', 'admin@gmail.com', 40, '2021-10-02 02:28:09', 1),
(110, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 02:30:43', 1),
(111, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 02:41:35', 1),
(112, '::1', 'admin@gmail.com', 40, '2021-10-02 04:39:17', 1),
(113, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 04:40:33', 1),
(114, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 04:57:32', 1),
(115, '::1', 'admin@gmail.com', 40, '2021-10-02 06:55:33', 1),
(116, '::1', 'admin@gmail.com', 40, '2021-10-02 07:00:32', 1),
(117, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 07:03:32', 1),
(118, '::1', 'admin@gmail.com', 40, '2021-10-02 07:13:46', 1),
(119, '::1', 'admin@gmail.com', 40, '2021-10-02 10:23:36', 1),
(120, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 10:26:24', 1),
(121, '::1', 'admin@gmail.com', 40, '2021-10-02 20:58:12', 1),
(122, '::1', 'pendaftaran@gmail.com', 51, '2021-10-02 20:58:57', 1),
(123, '::1', 'admin@gmail.com', 40, '2021-10-02 22:43:11', 1),
(124, '::1', 'admin@gmail.com', 40, '2021-10-02 22:50:26', 1),
(125, '::1', 'admin@gmail.com', 40, '2021-10-05 01:38:50', 1),
(126, '::1', 'admin@gmail.com', 40, '2021-10-06 04:11:26', 1),
(127, '::1', 'pendaftaran@gmail.com', 51, '2021-10-06 05:16:22', 1),
(128, '::1', 'pendaftaran@gmail.com', 51, '2021-10-06 07:57:35', 1),
(129, '::1', 'admin@gmail.com', 40, '2021-10-06 08:06:13', 1),
(130, '::1', 'pendaftaran', NULL, '2021-10-06 08:30:48', 0),
(131, '::1', 'pendaftaran@gmail.com', 51, '2021-10-06 08:30:55', 1),
(132, '::1', 'admin@gmail.com', 40, '2021-10-06 10:19:39', 1),
(133, '::1', 'pendaftaran@gmail.com', 51, '2021-10-06 10:25:14', 1),
(134, '::1', 'admin', NULL, '2021-10-06 10:31:01', 0),
(135, '::1', 'admin@gmail.com', 40, '2021-10-06 10:31:06', 1),
(136, '::1', 'admin@gmail.com', 40, '2021-10-06 20:49:31', 1),
(137, '::1', 'pendaftaran@gmail.com', 51, '2021-10-06 20:54:49', 1),
(138, '::1', 'admin@gmail.com', 40, '2021-10-06 21:49:23', 1),
(139, '::1', 'pendaftaran@gmail.com', 51, '2021-10-07 20:19:14', 1),
(140, '::1', 'admin@gmail.com', 40, '2021-10-07 20:21:08', 1),
(141, '::1', 'admin', NULL, '2021-10-08 08:07:19', 0),
(142, '::1', 'admin@gmail.com', 40, '2021-10-08 08:07:25', 1),
(143, '::1', 'admin', NULL, '2021-10-08 19:02:55', 0),
(144, '::1', 'admin@gmail.com', 40, '2021-10-08 19:03:04', 1),
(145, '::1', 'pendaftaran@gmail.com', 51, '2021-10-08 19:29:46', 1),
(146, '::1', 'admin@gmail.com', 40, '2021-10-08 19:32:27', 1),
(147, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-08 19:33:42', 1),
(148, '::1', 'admin@gmail.com', 40, '2021-10-08 20:04:17', 1),
(149, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-08 20:04:54', 1),
(150, '::1', 'admin@gmail.com', 40, '2021-10-08 20:07:49', 1),
(151, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-08 23:33:02', 1),
(152, '::1', 'pendaftaran@gmail.com', 51, '2021-10-08 23:33:48', 1),
(153, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-08 23:36:08', 1),
(154, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-09 04:57:46', 1),
(155, '::1', 'admin@gmail.com', 40, '2021-10-09 05:31:15', 1),
(156, '::1', 'admin@gmail.com', 40, '2021-10-09 11:05:35', 1),
(157, '::1', 'admin', NULL, '2021-10-09 21:04:28', 0),
(158, '::1', 'admin@gmail.com', 40, '2021-10-09 21:04:35', 1),
(159, '::1', 'admin@gmail.com', 40, '2021-10-10 01:28:52', 1),
(160, '::1', 'kimiafarma@gmail.com', 57, '2021-10-10 01:40:02', 1),
(161, '::1', 'admin@gmail.com', 40, '2021-10-10 01:45:23', 1),
(162, '::1', 'apotek@gmail.com', 58, '2021-10-10 01:46:35', 1),
(163, '::1', 'apotek', NULL, '2021-10-10 01:54:11', 0),
(164, '::1', 'apotek', NULL, '2021-10-10 01:54:24', 0),
(165, '::1', 'apotek', NULL, '2021-10-10 01:54:34', 0),
(166, '::1', 'apotek', NULL, '2021-10-10 01:54:43', 0),
(167, '::1', 'apotek', NULL, '2021-10-10 01:54:54', 0),
(168, '::1', 'admin@gmail.com', 40, '2021-10-10 01:55:04', 1),
(169, '::1', 'apotek@gmail.com', 59, '2021-10-10 01:56:34', 1),
(170, '::1', 'admin@gmail.com', 40, '2021-10-10 08:42:04', 1),
(171, '::1', 'pendaftaran@gmail.com', 51, '2021-10-10 08:48:49', 1),
(172, '::1', 'pendaftaran@gmail.com', 51, '2021-10-12 09:32:58', 1),
(173, '::1', 'admin@gmail.com', 40, '2021-10-12 20:16:04', 1),
(174, '::1', 'pendaftaran', NULL, '2021-10-12 23:40:55', 0),
(175, '::1', 'pendaftaran@gmail.com', 51, '2021-10-12 23:41:06', 1),
(176, '::1', 'apotek@gmail.com', 59, '2021-10-13 00:29:10', 1),
(177, '::1', 'admin@gmail.com', 40, '2021-10-13 00:41:46', 1),
(178, '::1', 'rumahbersalin', NULL, '2021-10-13 00:42:09', 0),
(179, '::1', 'rumahbersalin@gmail.com', 60, '2021-10-13 00:42:34', 1),
(180, '::1', 'pendaftaran@gmail.com', 51, '2021-10-13 02:11:52', 1),
(181, '::1', 'apotek@gmail.com', 59, '2021-10-13 02:14:02', 1),
(182, '::1', 'pendaftaran@gmail.com', 51, '2021-10-13 02:16:33', 1),
(183, '::1', 'pendaftaran@gmail.com', 51, '2021-10-13 02:18:12', 1),
(184, '::1', 'apotek@gmail.com', 59, '2021-10-13 02:22:17', 1),
(185, '::1', 'pendaftaran@gmail.com', 51, '2021-10-13 02:23:02', 1),
(186, '::1', 'rumahbersalin', NULL, '2021-10-15 18:19:56', 0),
(187, '::1', 'rumahbersalin', NULL, '2021-10-15 18:20:04', 0),
(188, '::1', 'rumahbersalin@gmail.com', 60, '2021-10-15 18:21:02', 1),
(189, '::1', 'pendaftaran@gmail.com', 51, '2021-10-15 18:23:48', 1),
(190, '::1', 'admin@gmail.com', 40, '2021-10-15 21:20:20', 1),
(191, '::1', 'pendaftaran@gmail.com', 51, '2021-10-15 21:37:05', 1),
(192, '::1', 'duljid', NULL, '2021-10-15 21:43:37', 0),
(193, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-15 21:43:43', 1),
(194, '::1', 'rumahbersalin@gmail.com', 60, '2021-10-23 03:56:38', 1),
(195, '::1', 'abdulmajidard@gmail.com', 56, '2021-10-23 03:57:45', 1),
(196, '::1', 'pendaftaran@gmail.com', 51, '2021-10-23 03:58:11', 1),
(197, '::1', 'pendaftaran@gmail.com', 51, '2021-10-23 04:39:28', 1),
(198, '::1', 'pendaftaran@gmail.com', 51, '2021-10-23 07:16:50', 1),
(199, '::1', 'pendaftaran@gmail.com', 51, '2021-10-29 02:07:41', 1),
(200, '::1', 'admin@gmail.com', 40, '2021-10-29 20:24:43', 1),
(201, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-29 20:29:56', 1),
(202, '::1', 'admin@gmail.com', 40, '2021-10-29 20:31:30', 1),
(203, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-29 21:02:06', 1),
(204, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-29 21:03:16', 1),
(205, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-29 22:53:46', 1),
(206, '::1', 'pendaftaran@gmail.com', 51, '2021-10-29 23:46:19', 1),
(207, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-29 23:49:02', 1),
(208, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 00:25:27', 1),
(209, '::1', 'pendaftaran@gmail.com', 51, '2021-10-30 00:31:35', 1),
(210, '::1', 'duljid', NULL, '2021-10-30 00:32:32', 0),
(211, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 00:32:39', 1),
(212, '::1', 'pendaftaran@gmail.com', 51, '2021-10-30 00:34:54', 1),
(213, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 00:39:10', 1),
(214, '::1', 'pendaftaran@gmail.com', 51, '2021-10-30 00:39:41', 1),
(215, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 00:52:54', 1),
(216, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 04:25:38', 1),
(217, '::1', 'pendaftaran@gmail.com', 51, '2021-10-30 04:26:16', 1),
(218, '::1', 'admin@gmail.com', 40, '2021-10-30 04:38:19', 1),
(219, '::1', 'ahmad@gmail.com', 62, '2021-10-30 04:40:12', 1),
(220, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 06:03:24', 1),
(221, '::1', 'admin@gmail.com', 40, '2021-10-30 06:15:37', 1),
(222, '::1', 'pendaftaran@gmail.com', 51, '2021-10-30 06:16:05', 1),
(223, '::1', 'pendaftaran@gmail.com', 51, '2021-10-30 06:29:18', 1),
(224, '::1', 'admin@gmail.com', 40, '2021-10-30 06:29:42', 1),
(225, '::1', 'admin', NULL, '2021-10-30 06:35:35', 0),
(226, '::1', 'admin@gmail.com', 40, '2021-10-30 06:35:41', 1),
(227, '::1', 'syarif', NULL, '2021-10-30 06:47:56', 0),
(228, '::1', 'syarif', NULL, '2021-10-30 06:48:04', 0),
(229, '::1', 'admin@gmail.com', 40, '2021-10-30 06:48:15', 1),
(230, '::1', 'syarif@gmail.com', 64, '2021-10-30 06:49:29', 1),
(231, '::1', 'abdulmajidard@gmail.com', 61, '2021-10-30 06:53:06', 1),
(232, '::1', 'nani@gmail.com', 65, '2021-10-30 06:58:31', 1),
(233, '::1', 'aliyakub727@gmail.com', 66, '2021-10-30 07:05:16', 1),
(234, '::1', 'admin@gmail.com', 40, '2021-10-30 07:09:35', 1),
(235, '::1', 'syarif@gmail.com', 67, '2021-10-30 07:11:06', 1),
(236, '::1', 'admin@gmail.com', 40, '2021-10-31 01:13:36', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'Tambah Akun', 'Menambahkan Akun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bersalin`
--

CREATE TABLE `bersalin` (
  `no_pasien` int(3) NOT NULL,
  `nama_pasien` varchar(32) NOT NULL,
  `umur_pasien` int(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `dokter` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bersalin`
--

INSERT INTO `bersalin` (`no_pasien`, `nama_pasien`, `umur_pasien`, `alamat`, `tgl`, `dokter`, `status`) VALUES
(1, 'Sinta', 27, 'Bekasi', '2021-10-16', 'Dr Yeni', 'Pendataan'),
(2, 'Rara', 23, 'Jonggol', '2021-10-23', 'Dr Ruri', 'On Prosess'),
(3, 'Ratu', 29, 'Jakarta', '2021-10-09', 'Dr Resi', 'On Prosess'),
(4, 'Susi', 25, 'Jakarta Barat', '2021-10-29', 'Dr Siapa', 'OK'),
(5, 'Sinta', 27, 'Bekasi', '2021-10-06', 'Dr.Sasa', '-'),
(6, 'Yuri', 20, 'kp duren', '2021-10-02', 'Dr. Susi', 'Periksa'),
(7, 'Sika', 21, 'Bogor', '2021-10-15', 'Siska', 'On Prosess'),
(8, 'Yanisa', 22, 'Bogor', '2021-10-23', 'Dr Sarih', 'On Prosess');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `jenis_dokter` varchar(50) DEFAULT NULL,
  `jadwal_praktek` varchar(255) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`jenis_dokter`, `jadwal_praktek`, `id_dokter`, `created_at`, `updated_at`, `deleted_at`, `id`) VALUES
('Dokter Anak', 'Rabu', 62, '2021-10-30 04:40:24', '2021-10-30 04:40:24', NULL, 2),
('Dokter Anak', 'Rabu', 67, '2021-10-30 07:11:34', '2021-10-30 07:11:34', NULL, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1626235555, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` bigint(20) NOT NULL,
  `kode_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `satuan_obat` enum('Botol','Pcs','Strip') NOT NULL,
  `jenis_obat` enum('Kapsul','Sirup','Tablet') NOT NULL,
  `stok_obat` bigint(20) NOT NULL,
  `tgl_exp` date NOT NULL,
  `kegunaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `kode_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `tanggallahir_pasien` date NOT NULL,
  `umur_pasien` int(11) NOT NULL,
  `telepon_pasien` varchar(13) NOT NULL,
  `jeniskelamin_pasien` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`kode_pasien`, `nama_pasien`, `alamat_pasien`, `tanggallahir_pasien`, `umur_pasien`, `telepon_pasien`, `jeniskelamin_pasien`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Abdul Majid', ' Villa Asri 2 Blok P18 ', '2011-03-02', 10, '082130302521', '', '2021-10-02 03:18:45', '2021-10-02 03:18:45', NULL),
(2, 'Jamaludin', ' Villa Asri 2 Blok P18 ', '2016-02-10', 5, '082130302521', 'Laki - laki', '2021-10-02 03:20:12', '2021-10-02 03:20:12', NULL),
(3, 'Abdul Majid', '', '2021-10-05', -1, '082130302521', 'Perempuan', '2021-10-02 03:22:20', '2021-10-02 03:22:20', NULL),
(4, 'affafaefea', '', '0000-00-00', 51, '', 'Laki - laki', '2021-10-02 03:41:53', '2021-10-02 03:41:53', NULL),
(5, 'Abdul Majid Ardiansyah', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', '2001-03-09', 20, '082130302521', 'Laki - laki', '2021-10-30 02:14:56', '2021-10-30 02:14:56', NULL),
(6, 'Ali Yakub', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', '1990-12-13', 30, '082130302521', 'Laki - laki', '2021-10-30 07:05:37', '2021-10-30 07:05:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_berobat`
--

CREATE TABLE `pasien_berobat` (
  `id_berobat` int(11) NOT NULL,
  `kode_pasien` int(11) NOT NULL,
  `poli_berobat` varchar(20) DEFAULT NULL,
  `dokter_berobat` varchar(50) DEFAULT NULL,
  `tanggal_berobat` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien_berobat`
--

INSERT INTO `pasien_berobat` (`id_berobat`, `kode_pasien`, `poli_berobat`, `dokter_berobat`, `tanggal_berobat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Poli Anak', 'Abdul Majid', '2021-10-23', '2021-10-23 06:30:32', '2021-10-23 06:30:32', NULL),
(2, 6, 'Poli Anak', 'Abdul Majid', '2021-11-12', '2021-10-30 07:06:39', '2021-10-30 07:06:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `tanggal_lahir`, `jenis_kelamin`, `phone`, `alamat`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(40, 'admin@gmail.com', 'admin', 'Demo Akun Administrator', '2021-09-10', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$LtKwJ2fFVMAWr..Nx9dEWOnQgPiB.kfS8mdK.2Lc8/z1lwpqfemoO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-18 23:27:45', '2021-09-18 23:27:45', NULL),
(51, 'pendaftaran@gmail.com', 'pendaftaran', 'Demo Akun Pendaftaran', '2021-09-07', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$pQ.yb4oWp2CBIyXkgcjfUOTs/Q1s6jgBs6hRNOcFh.v01zVwaESie', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-29 09:27:02', '2021-09-29 09:27:02', NULL),
(59, 'apotek@gmail.com', 'apotek', 'Demo Akun Apotek', '2021-10-10', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$ocgAYiNBgMEMm949PG3tpeveR9Sxhj1VcUC7IVqSoq77LTgC59WVu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-10 01:56:09', '2021-10-10 01:56:09', NULL),
(60, 'rumahbersalin@gmail.com', 'rumahbersalin', 'Demo Rumah Bersalin', '2021-10-13', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$8P/gznfdsJrzPpsqSM4B6uy8sHAk9rnER8UZhagRDpRu7mc9.MgdC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-12 20:17:23', '2021-10-12 20:17:23', NULL),
(61, 'abdulmajidard@gmail.com', 'duljid', 'Abdul Majid Ardiansyah', '2001-03-09', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$ZlX9CQCCGHyfYO/dx8jG3O4VfJ5OUilVL/DMkmTd37rb4oFz2lzpi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-29 20:29:50', '2021-10-29 20:29:50', NULL),
(62, 'ahmad@gmail.com', 'ahmad', 'Ahmad', '2019-01-30', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$nOXxuqs3QPvUvJ2kT16zWuvLPE4OAdjPAnYNk5b7JqdYIbfPI.KLW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-30 04:39:49', '2021-10-30 04:39:49', NULL),
(65, 'nani@gmail.com', 'nani', 'Nani Ninu Nana', '2000-01-12', 'Perempuan', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$ll5eqpttPUKHrfmcHebnMONyjgEM4ZFsxjYcj681plhHLZpgwBocW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-30 06:58:23', '2021-10-30 06:58:23', NULL),
(66, 'aliyakub727@gmail.com', 'ali', 'Ali Yakub', '1990-12-13', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$c9FTM67uHYIu0DzlZlc89OqFoloisOFHsoSV74Q2yZqW1dr0FC6su', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-30 07:05:09', '2021-10-30 07:05:09', NULL),
(67, 'syarif@gmail.com', 'syarif', 'Dr. Syarifuddin', '2000-03-09', 'Laki - laki', '082130302521', 'Villa Asri 2 Block P No 18 Desa Wanaherang, Kecamatan Gunungputri', 'default.jpg', '$2y$10$feKCI01VpFykQp.li4xf0usscLZZBc4NRceaXMuiQy0fGZGbG1/le', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-30 07:10:50', '2021-10-30 07:10:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian_pasien`
--
ALTER TABLE `antrian_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `bersalin`
--
ALTER TABLE `bersalin`
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD UNIQUE KEY `kode_obat` (`kode_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- Indeks untuk tabel `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian_pasien`
--
ALTER TABLE `antrian_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kode_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
