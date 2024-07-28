-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2024 pada 07.18
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprivat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `awal`
--

CREATE TABLE `awal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `awal`
--

INSERT INTO `awal` (`id`, `nama`, `email`, `judul`, `pesan`) VALUES
(1, 'Muhammad Fakhrizal', 'fakhrizalgarnindyo@gmail.com', 'tester', 'hanya untuk tester aja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@nurulfikri.acc.id|127.0.0.1', 'i:2;', 1722084535),
('admin@nurulfikri.acc.id|127.0.0.1:timer', 'i:1722084535;', 1722084535);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `kelas_semester` varchar(50) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `no_ortu` varchar(100) NOT NULL,
  `lokasi_belajar` varchar(100) NOT NULL,
  `kendala` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id`, `nama_lengkap`, `no_tlp`, `email`, `alamat`, `jenjang`, `pendidikan`, `kelas_semester`, `nama_ortu`, `no_ortu`, `lokasi_belajar`, `kendala`, `jam`, `catatan`) VALUES
(5, 'Muhammad Fakhrizal Garnindyo', '082123439604', 'Muhammadfakhrizal@gmail.com', 'Bojonggede,Kabupaten Bogor', 'Kuliah', 'Kuliah', '3', 'Agus Garnindyo', '081284888239', 'Offline dan Online', 'Hanya untuk tester', '21:45:00', 'Hanya untuk test bisa apa kagak'),
(7, 'Nindya Aisyah Ainiiiii', '081284888239', 'nindyaaini@gmail.com', 'bojonggede,kabupaten bogor', 'SMA', 'SMA', 'KELAS 3', 'Agus Garnindyo', '081284888239', 'OFFLINE', 'TIDAK ADA KENDALA', '22:54:00', 'TIDAK ADA CATATAN BELAJAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nama_murid` varchar(100) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `waktu_input_presensi` time NOT NULL,
  `tanggal_input_presensi` date NOT NULL,
  `presensi1` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi2` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi3` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi4` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi5` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi6` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi7` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi8` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi9` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi10` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi11` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi12` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi13` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi14` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi15` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi16` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi17` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi18` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi19` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi20` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi21` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi22` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi23` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi24` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi25` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi26` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi27` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi28` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi29` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `presensi30` enum('Presensi Belum Dimasukkan','Hadir','Tidak Hadir') NOT NULL,
  `biaya` double NOT NULL,
  `catatan_belajar` varchar(255) NOT NULL,
  `kelas_semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `nama_murid`, `jenjang`, `waktu_input_presensi`, `tanggal_input_presensi`, `presensi1`, `presensi2`, `presensi3`, `presensi4`, `presensi5`, `presensi6`, `presensi7`, `presensi8`, `presensi9`, `presensi10`, `presensi11`, `presensi12`, `presensi13`, `presensi14`, `presensi15`, `presensi16`, `presensi17`, `presensi18`, `presensi19`, `presensi20`, `presensi21`, `presensi22`, `presensi23`, `presensi24`, `presensi25`, `presensi26`, `presensi27`, `presensi28`, `presensi29`, `presensi30`, `biaya`, `catatan_belajar`, `kelas_semester`) VALUES
(1, 'Muhammad Fakhrizal Garnindyo', 'Mahasiswa', '20:28:43', '2024-07-07', 'Hadir', 'Hadir', 'Hadir', 'Hadir', 'Hadir', 'Hadir', 'Hadir', 'Hadir', 'Hadir', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 'Presensi Belum Dimasukkan', 0, 'ini hanya untuk test', 'semester 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C6YrrKXGBkhYvwO2Dx7WIJvdbtxJwUCw9lqScSFs', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY0ljTGRiSDVvUU9TbjZPaVZUalc2cThYdzFsd0k0N3VKSk9jc2lBMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tdXJpZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1722142140),
('hLCKWvAwII5xIoKEl6cgRQ2tJV8HIRm6TX3CXxGj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicTFuZ1hRc0xRUlYwdmYweU9QYncyWmlMTlZQT2x4ZlhXOEQxdTBBdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hd2FsIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1722102482);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Agus Garnindyo', 'agusprivat@example.ac.id', NULL, '$2y$12$Zh3QNBxJaROyDJ2iXAK0u.41CSY4srZ.apSYR5X0FYtPsv0614P02', NULL, '2024-07-25 07:00:55', '2024-07-26 05:19:20', 'administrator'),
(2, 'Umi Hamzah', 'umihamzah@gmail.com', NULL, '$2y$12$I6ugfarjhmDrZuLVVQK8FeC02p9CHacg2wIWdnObPgPuxfbjM/Wta', NULL, '2024-07-26 06:57:55', '2024-07-26 06:57:55', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `awal`
--
ALTER TABLE `awal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `awal`
--
ALTER TABLE `awal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
