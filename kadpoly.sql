-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 11:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kadpoly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(7, 'Timothy Iloba', 'timothy@gmail.com', '08185375580', '$2y$10$0qA8dZZ49TDMhXmzA.EU.OTNct.LZpng0A8/qePouwlDA6RnhvptK', '2021-08-23 18:33:08', '2021-08-23 18:33:08'),
(8, 'Kayettumi Wakili', 'kaye@gmail.com', '08063945233', '$2y$10$2doJPqlIiLWVG/B74L2TiOkljpHHqS/lz8FtX/QGXHq9sYT8f8HKC', '2021-08-23 23:14:33', '2021-08-23 23:14:33'),
(9, 'Victor Iloba', 'victor@gmail.com', '08054478966', '$2y$10$UeeETDyqOpIGL8itdDZYE.Wkt.nOAr/E02Cb/dqE9Cmn3m30hGQH.', '2021-08-24 01:47:27', '2021-08-24 01:47:27'),
(10, 'Ebenezer', 'ebenezer@gmail.com', '08054421899', '$2y$10$8c2JpyknO/6up7UZGAMPS.QPslI41kdmvU/hpraigJ3tx5RHzOpIK', '2021-09-02 09:35:53', '2021-09-02 09:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `document`, `created_at`, `updated_at`) VALUES
(12, 'Resume', 'EMEKA ILOBA EUROPASS-RESUME.pdf', '2021-08-25 17:57:03', '2021-08-25 17:57:03'),
(13, 'Letter of recommendation', 'Letter of recommendation.pdf', '2021-08-25 17:57:20', '2021-08-25 17:57:20'),
(15, 'sferytyghgtfseghyjtui', 'Assessement for Graphics Design.docx', '2021-08-26 05:20:37', '2021-08-26 05:20:37'),
(16, 'fhgnhgnh', '1-page-cv.docx', '2021-08-26 08:34:36', '2021-08-26 08:34:36'),
(17, 'fghjgvgdgfghgdfggygdgrtfgfdsfggvbfdgfhfvgf', 'API-DOCUMENTATION.docx', '2021-08-28 13:16:14', '2021-08-28 13:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_08_23_180157_create_admins_table', 2),
(5, '2021_08_24_153145_create_documents_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `passport`, `lastname`, `firstname`, `middlename`, `gender`, `staff_id`, `phone`, `position`, `office_address`, `course`, `level`, `cv`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emeka Iloba', 'emeka@gmail.com', '$2y$10$tu6ceXulHoa9R0ZFttLb3OCuYHciPGLl0xBetNJl.02tOEsMgAXKy', 'DSC_2757 copy.jpg', 'Haruna', 'Bello', 'Timothy', 'Male', 'Comp/Har/8537558', '08185375580', 'Lecturer', 'Kaduna', 'English', '8', '1st November.docx', NULL, '2021-08-23 06:22:58', '2021-09-01 09:18:07'),
(3, 'Kayettumi Wakili', 'admin@example.com', '$2y$10$3PpUMT6M0ymh9jfHE9FTIuX.mfoHHWRPNZxv/IPArM2qhGDvFInku', 'DSC_2757 copy.jpg', 'Kyla', 'Dorothy', 'Aidan', 'Female', 'Comp/Kyl/', '50', 'Hop', 'Nisi laboriosam vel', 'Brady', '39', '1st November.docx', NULL, '2021-08-26 05:17:30', '2021-08-26 05:18:21'),
(5, 'Timothy Iloba', 'timo@gmail.com', '$2y$10$JKR/5nnQrbGQnHRHXgC2UO0KFaD4YorWlxWSyFrpaTX3p8Jni6Yxu', '1605095891.jpg', 'Kevyn', 'Lydia', 'Nelle', 'Female', 'Comp/Kev/', '81', 'Amanda', 'Dicta sed commodi ut', 'Akeem', '78', '1-page-cv.docx', NULL, '2021-08-28 12:46:41', '2021-08-28 12:49:17'),
(6, 'Ebenezer', 'ebenezer@gmail.com', '$2y$10$xQ44XRP6WcrtloHdunBDwOlF8QJ.NFwWe.juQxtuW7HLtM96IFFLa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-02 09:34:31', '2021-09-02 09:34:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
