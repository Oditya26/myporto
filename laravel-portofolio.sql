-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2024 pada 15.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-portofolio`
--

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
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(4, 'Oditya Ridho Darmanto', '<div><span style=\"text-align: var(--bs-body-text-align);\">As an undergraduate student at Binus University Malang, pursuing a degree in Computer Science, I am deeply immersed in the dynamic world of technology. My fascination with the subject extends beyond the classroom, as I eagerly delve into emerging trends, innovative developments, and cutting-edge advancements within the realm of computing. Beyond academics, I actively engage in a plethora of campus activities, where I find fulfillment in contributing to various initiatives. Whether it\'s collaborating with event committees to organize impactful gatherings, participating in the vibrant student association to foster a sense of community, or dedicating my time to volunteer work that serves the greater good, I am committed to making a meaningful difference in both academic and extracurricular realms.</span><br></div>', '2024-04-17 19:37:39', '2024-04-19 16:00:01'),
(6, 'Awards', '<ul><li>1st Place in District Level Poster Design Competition<span style=\"font-size: 14px;\"><br></span></li></ul>', '2024-04-17 20:08:28', '2024-04-19 15:59:47'),
(7, 'Interest', 'My passion for technology extends beyond mere curiosity; it\'s a driving force in my academic and extracurricular pursuits. Alongside my dedication to technological advancements, I am deeply engaged in fostering a vibrant campus community. This involvement manifests through my active participation in diverse campus activities. Whether it\'s collaborating within event committees, contributing to the student association, or dedicating my time to volunteer initiatives, I thrive in environments where I can make meaningful contributions and connect with others who share my enthusiasm for growth and impact.', '2024-04-19 13:56:15', '2024-04-19 16:39:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `metadata`
--

INSERT INTO `metadata` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, '_language', 'c, java, mysql, go, git, laravel, php, illustrator, photoshop, aftereffects, premierepro, anaconda, kotlin, bootstrap, androidstudio, visualstudio', '2024-04-18 13:25:01', '2024-04-19 14:56:11'),
(2, '_workflow', '<ul><li>Github</li></ul>', '2024-04-18 13:25:01', '2024-04-19 16:00:22'),
(3, '_email', 'oditrdh@gmail.com', '2024-04-18 15:08:48', '2024-04-18 15:12:53'),
(4, '_foto', '240419105909.jpg', '2024-04-18 15:11:25', '2024-04-19 15:59:09'),
(5, '_kota', 'Ngawi', '2024-04-18 15:28:50', '2024-04-18 15:34:37'),
(6, '_provinsi', 'Jawa Timur', '2024-04-18 15:28:51', '2024-04-18 15:28:51'),
(7, '_nohp', '+62 822-2933-1485', '2024-04-18 15:28:51', '2024-04-19 13:33:33'),
(8, '_facebook', 'odit.aremania', '2024-04-18 15:28:51', '2024-04-19 15:49:36'),
(9, '_twitter', 'OditRidho', '2024-04-18 15:28:51', '2024-04-19 15:49:37'),
(10, '_linkedin', 'oditya', '2024-04-18 15:28:51', '2024-04-19 15:49:38'),
(11, '_github', 'Oditya26', '2024-04-18 15:28:51', '2024-04-19 15:49:38'),
(12, '_instagram', 'oditya.rdh', '2024-04-18 15:28:51', '2024-04-19 16:00:33'),
(13, '_halaman_about', '4', '2024-04-18 16:09:19', '2024-04-19 13:23:05'),
(14, '_halaman_interest', '7', '2024-04-18 16:18:04', '2024-04-19 13:57:33'),
(15, '_halaman_award', '6', '2024-04-18 16:18:05', '2024-04-18 16:18:05');

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
(2, '2024_04_17_120459_table_users_add_column_google_id', 2),
(3, '2024_04_17_191418_user_add_column_avatar', 3),
(4, '2024_04_18_005906_create_halaman_table', 4),
(5, '2024_04_18_083243_create_riwayat_table', 5),
(6, '2024_04_18_193504_create_metadata_table', 6),
(7, '2014_10_12_100000_create_password_resets_table', 7),
(8, '2019_08_19_000000_create_failed_jobs_table', 7),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe` enum('experience','education') NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `info1` varchar(255) DEFAULT NULL,
  `info2` varchar(255) DEFAULT NULL,
  `info3` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `judul`, `tipe`, `tgl_mulai`, `tgl_akhir`, `info1`, `info2`, `info3`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Binusian Ambassador Even Semester 2023/2024', 'experience', '2024-02-01', NULL, 'Bina Nusantara', NULL, NULL, '<div style=\"line-height: 19px;\">As a Student Mentor at Bina Nusantara University, I am committed to guiding the next generation of leaders towards academic excellence, personal growth, and professional success. I am passionate about education and believe in the potential of every student. I am honored to play a pivotal role in their educational journey.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Academic Guidance: Providing one-on-one mentoring to computer science students, assisting them in setting and achieving academic goals, and offering support with coursework, study strategies, and time management.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Fostering a nurturing and inclusive environment where students can explore their interests, talents, and aspirations, while encouraging self-discovery and personal growth. Fostering a nurturing and inclusive environment where students can explore their interests, talents, and aspirations, while encouraging self-discovery and personal growth. Helping students advance their careers.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Assisting students in identifying their career paths, exploring internships, co-op opportunities, and job placements, and offering guidance on resume building and interview preparation.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Providing emotional support by serving as a trusted confidant and offering a supportive presence during challenging times, whether academic or personal.<br></div>', '2024-04-18 02:44:38', '2024-04-19 16:21:49'),
(4, 'Bina Nusantara', 'education', '2024-04-17', '2024-04-30', 'School of Computer Science', 'Computer Science', '3.9', NULL, '2024-04-18 11:16:45', '2024-04-18 11:16:45'),
(5, 'Teaching Assistant', 'experience', '2023-09-01', NULL, 'Bina Nusantara', NULL, NULL, '<div style=\"line-height: 19px;\"><div style=\"\">Teaching Assistant is a program under Digital Technopreneur Laboratory. My job is to assist the lecturer in laboratory class or to teach in a LAB class.<br style=\"box-sizing: inherit;\">I worked for 2 periods namely on :<br style=\"box-sizing: inherit;\">- Odd Semester 2023/2024 = Algorithm and Programming<br style=\"box-sizing: inherit;\">- Even Semester 2023/2024 =Data Structures Scientific Computing, and Business Application Development.<br></div><div style=\"color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre; background-color: rgb(30, 30, 30);\"></div></div>', '2024-04-19 14:18:17', '2024-04-19 16:21:57'),
(6, 'Freshmen Parthner', 'experience', '2023-09-01', NULL, 'Bina Nusantara', NULL, NULL, 'Freshmen Partner (FP) is a companion for Freshmen during the first year of college (semester 1 and semester 2).', '2024-04-19 16:22:55', '2024-04-19 16:22:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` text NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`) VALUES
(1, 'Oditya Ridho', 'odityaridho@gmail.com', NULL, NULL, NULL, '2024-04-17 06:55:38', '2024-04-17 12:43:33', '112931748534499700859', '112931748534499700859.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
