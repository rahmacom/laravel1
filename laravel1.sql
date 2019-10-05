-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 05:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_artikel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `users_id`, `created_at`, `updated_at`, `kategori_artikel_id`) VALUES
(8, 'Bahayanya Game Untuk Mata', 'Game yang biasanya digunakan oleh seluruh kalangan, apa lagi di zaman now ini anak - anak di bawah umur 4 tahun udah mulai mengenal yang namanya Game. Game ini digunakan untuk refreshing dan menghilangkan rasa jenuh sehingga banyaknya kalangan yang bermain game. apa lagi di era sekarang ini banyak game yang menghasilkan uang, seperti contohya game PUBG kemudian di buat konten youtube sehingga menghasilkan viewers yang banyak dan menghasilkan uang. Tetapi tau kah kalian, dalam bermain game juga ada hal negative loh, apa lagi buat kesehatan Mata. karena radiasi hp yang sangat tinggi, selain itu juga membuat para pemain merasa malas dalam melakukan pekerjaan yang disuruh oleh orang tua nya. Apalagi jika para pemain sudah merasa kencanduan dalam bermain, hp itu rasanya tak ingin di lepas.\r\njadi buat para kalangan jika main game jangan terlalu sering, jagalah kesehatan mata kalian', 1, '2019-09-28 13:16:33', '2019-09-28 13:16:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_berita_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `users_id`, `created_at`, `updated_at`, `kategori_berita_id`) VALUES
(15, '\r\nAksi Demo Mahasiswa di Samarinda\r\n', 'Samarinda, Kamis 26 september 2019 tepatnya di depan kantor DPRD, JL. Tengku Umar, Karang Paci, terjadi nya Aksi Demo yang dilaksanakan oleh Mahasiswa/i di berbagai kampus samarinda dan tenggarong untuk menolak UU KPK dan RKUHP.', 1, '2019-09-29 04:27:35', '2019-09-29 04:27:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_galeri_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `keterangan`, `path`, `users_id`, `created_at`, `updated_at`, `kategori_galeri_id`) VALUES
(1, 'rahma', 'Picture', '', 1, '2019-09-29 04:48:14', '2019-09-29 04:48:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'rahma', '', 1, '2019-09-29 05:46:56', '2019-09-29 05:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id`, `nama`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'rahma', 1, '2019-09-25 14:04:33', '2019-09-25 14:04:33'),
(2, 'rahma', 1, '2019-09-25 14:12:04', '2019-09-25 14:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `nama`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'rahma', 1, '2019-09-29 04:23:39', '2019-09-29 04:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id`, `nama`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'rahma', 1, '2019-09-29 04:29:50', '2019-09-29 04:29:50'),
(2, 'rahma', 1, '2019-09-29 04:29:54', '2019-09-29 04:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengumuman`
--

CREATE TABLE `kategori_pengumuman` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pengumuman`
--

INSERT INTO `kategori_pengumuman` (`id`, `nama`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'rahma', 1, '2019-09-29 05:12:14', '2019-09-29 05:12:14'),
(2, 'rahma', 1, '2019-09-29 05:12:19', '2019-09-29 05:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_19_050613_create_kategori_table', 1),
(5, '2019_09_25_012800_create_kategori_artikel_table', 2),
(6, '2019_09_25_012800_create_kategori_berita_table', 2),
(7, '2019_09_25_012800_create_kategori_galeri_table', 2),
(8, '2019_09_25_012800_create_kategori_pengumuman_table', 2),
(9, '2019_09_25_012801_create_artikel_table', 2),
(10, '2019_09_25_012801_create_berita_table', 2),
(11, '2019_09_25_012801_create_galeri_table', 2),
(12, '2019_09_25_012801_create_pengumuman_table', 2),
(13, '2019_09_25_012802_add_foreign_keys_to_artikel_table', 2),
(14, '2019_09_25_012802_add_foreign_keys_to_berita_table', 2),
(15, '2019_09_25_012802_add_foreign_keys_to_galeri_table', 2),
(16, '2019_09_25_012802_add_foreign_keys_to_kategori_artikel_table', 2),
(17, '2019_09_25_012802_add_foreign_keys_to_kategori_berita_table', 2),
(18, '2019_09_25_012802_add_foreign_keys_to_kategori_galeri_table', 2),
(19, '2019_09_25_012802_add_foreign_keys_to_kategori_pengumuman_table', 2),
(20, '2019_09_25_012802_add_foreign_keys_to_pengumuman_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_pengumuman_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `users_id`, `created_at`, `updated_at`, `kategori_pengumuman_id`) VALUES
(1, 'pemberitahuan masuk kuliah', 'diberitahukan kepada seluruh mahasiswa/i POLITANI SAMARINDA bahwasanya jadwal masuk kuliah perdana pada tanggal 2 September 2019 yang bertempat di Auditorium Politani.\r\n', 1, '2019-09-29 05:18:12', '2019-09-29 05:18:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rahma', 'rahmanrahma30@gmail.com', '08123456789', NULL, '$2y$10$p.Fe1Cs1STyxh9gXPRxvmu4zuQw6nowWRjy8FhopJJ5SBqtnjq7Wy', NULL, '2019-09-25 06:02:03', '2019-09-25 06:02:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_users_idx` (`users_id`),
  ADD KEY `fk_artikel_kategori_artikel1_idx` (`kategori_artikel_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_users_idx` (`users_id`),
  ADD KEY `fk_berita_kategori_berita1_idx` (`kategori_berita_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_galeri_users_idx` (`users_id`),
  ADD KEY `fk_galeri_kategori_berita1_idx` (`kategori_galeri_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_user_id_foreign` (`user_id`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_users_idx` (`users_id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_users_idx` (`users_id`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_galeri_users_idx` (`users_id`);

--
-- Indexes for table `kategori_pengumuman`
--
ALTER TABLE `kategori_pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_users_idx` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_users_idx` (`users_id`),
  ADD KEY `fk_pengumuman_kategori_pengumuman1_idx` (`kategori_pengumuman_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_pengumuman`
--
ALTER TABLE `kategori_pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_artikel_kategori_artikel1` FOREIGN KEY (`kategori_artikel_id`) REFERENCES `kategori_artikel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kategori_users0` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_berita_kategori_berita1` FOREIGN KEY (`kategori_berita_id`) REFERENCES `kategori_berita` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kategori_users000` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `fk_galeri_kategori_berita1` FOREIGN KEY (`kategori_galeri_id`) REFERENCES `kategori_berita` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_galeri_users000` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD CONSTRAINT `fk_kategori_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD CONSTRAINT `fk_kategori_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD CONSTRAINT `fk_galeri_users10` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kategori_pengumuman`
--
ALTER TABLE `kategori_pengumuman`
  ADD CONSTRAINT `fk_kategori_users10` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `fk_kategori_users00` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengumuman_kategori_pengumuman1` FOREIGN KEY (`kategori_pengumuman_id`) REFERENCES `kategori_pengumuman` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
