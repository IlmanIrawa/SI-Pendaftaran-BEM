-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 07.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekp4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `nim` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`nim`, `status`, `catatan`) VALUES
(1222222, 'Disetujui', 'Selamat ! Pendaftaran Disetujui, Silahkan Lanjutkan Pengumpulan Berkas !'),
(133333333, 'Ditolak', 'Mohon Maaf Pendaftaran Kami Tolak Karena Anda terlau Tua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE `kuis` (
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_models`
--

CREATE TABLE `pendaftaran_models` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `status_mahasiswa` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '..',
  `catatan` varchar(255) NOT NULL DEFAULT '..'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran_models`
--

INSERT INTO `pendaftaran_models` (`id`, `nim`, `nama`, `alamat`, `no_telp`, `email`, `tanggal_lahir`, `jenis_kelamin`, `tanggal_pendaftaran`, `jurusan`, `status_mahasiswa`, `foto`, `status`, `catatan`) VALUES
(1, 1222222, 'Ilman Irawan', 'Kp. Cikaroya', '93988186', 'cek@gmail.com', '2024-05-06', 'Laki-Laki', '2024-05-05', 'Teknik Informatika', 'Aktif', 'ilmann.jpeg', '', ''),
(2, 133333333, 'Fahmi', 'Cikutra', '121324', 'cek@gmail.com', '2024-05-01', 'Laki-Laki', '2024-05-08', 'sistem Informasi', 'Aktif', 'Fahmi.jpeg', '', ''),
(3, 44444444, 'Rania', 'Pahlawan', '123444', 'cek@gmail.com', '2024-05-06', 'laki-laki', '2024-05-08', 'Sistem Informasi', 'Aktif', 'rania.jpeg', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nama`, `username`, `email`, `nim`, `password`, `konfirmasi_password`, `jenis_kelamin`, `remember_token`, `created_at`, `updated_at`) VALUES
('cek', 'Ilman1401', 'cek@gmail.com', '0', '$2y$12$5YA3dVu34x5auOVZL9KHR.fp3KGpsGnW3cWKftc.WkZQuABeqrFNC', '$2y$12$jTa5TKil1tpIc1L4V6r77OPhL/zHo7HB1To.T38afpvkTFurjMFcW', 'on', NULL, '2024-05-09 04:32:37', '2024-05-09 04:32:37'),
('tes', '1', 'cek@gmail.com', '11', '$2y$12$2QGyu8xB28iukv7qYpes7ekOLVzCn8luF5Mi9bXd5Ttf/7W5Lw2d2', '$2y$12$qh1DQerzpC98MG3.aW041.I3HUnoDl5ChbMM50E/W53UB4LcCn/X6', 'on', NULL, '2024-05-18 20:32:02', '2024-05-18 20:32:02'),
('ILMAN IRAWAN', 'admin', 'cek@gmail.com', '112', '$2y$12$n0nUCe1CjM2coDYuVYudGuGNe0cKgGc8j4bhVhLpnYMVZ65AR01NO', '$2y$12$ya1wrgMd.lUeOV/d634dRO3Dvc6M6RxNA1bHKwNn5eW/laVEZNmGW', NULL, NULL, '2024-05-01 23:30:34', '2024-05-01 23:30:34'),
('tes', 'admin', 'cek@gmail.com', '1222302', '$2y$12$QSbA./Cc1v.p6mLFLhV23.WJsT9N7y7h.AaWjbN8PO78Z.VLzC0y2', '$2y$12$934MFni2Hz2Bu50aFEb4feSAlcl2.LJv00nlPKMpKYOnsIOwuxoQm', 'on', NULL, '2024-05-18 01:37:01', '2024-05-18 01:37:01'),
('ILMAN IRAWAN', 'ilman irawan14', 'cek@gmail.com', '3232', '$2y$12$ApxVL3i9zVx0fjkLnyAw/elv/j1DrjK4l6PL1uG5rO2HvhnLS5mjm', '$2y$12$xApGHmD6467v.ItrtYW8hu.Z464xMpykjUIC/V3LKWwSdxaOfz94e', NULL, NULL, '2024-05-01 23:29:07', '2024-05-01 23:29:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_adm`
--

CREATE TABLE `user_adm` (
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_models`
--

CREATE TABLE `user_models` (
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_models`
--

INSERT INTO `user_models` (`nama`, `nim`, `divisi`, `email`, `password`, `jenis_kelamin`, `alamat`, `updated_at`, `created_at`) VALUES
('ILMAN IRAWAN', 1222302, 'Data dan Kaderisasi', 'ilmanirawan6@gmail.com', '$2y$12$zAyEvvBvxS/r7h1bmS2znuDeiB21df/C3cqa5s02eCN/AONSN.fM6', 'Laki-Laki', 'Kp. Cikaroya RT/RW 001/007', '2024-05-18 11:26:52', '2024-05-17 19:20:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran_models`
--
ALTER TABLE `pendaftaran_models`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_nim_unique` (`nim`);

--
-- Indeks untuk tabel `user_adm`
--
ALTER TABLE `user_adm`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133333334;

--
-- AUTO_INCREMENT untuk tabel `kuis`
--
ALTER TABLE `kuis`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222304;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_models`
--
ALTER TABLE `pendaftaran_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_adm`
--
ALTER TABLE `user_adm`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_models`
--
ALTER TABLE `user_models`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222303;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
