-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 02:00 PM
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
-- Database: `laravel_curd`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manglik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_of_birth`, `gender`, `occupation`, `family_type`, `manglik`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Cade Todd', 'wulyboma@mailinator.com', '$2y$10$.qQb7R9rW6WnlrkHT4zHmOplCRjUMyeP9k6/dbGfgpFcnxVxSRqkO', '1997-08-18', 'male', 'private job', 'other', 'no', '30000', '2021-12-05 03:29:28', '2021-12-05 03:29:28'),
(5, 'Rohit Parashar', 'parasharjirohit@gmail.com', '$2y$10$oJ4UG.YGTlK/7Hbk1SXWie3skswTKG2CS.T4JNdM1454fTF7PloeS', '2021-12-15', 'male', 'business', 'joint family', 'yes', '20000', '2021-12-05 03:41:59', '2021-12-05 03:41:59'),
(7, 'Aileen Burks', 'motutejyhu@mailinator.com', '$2y$10$WVsbaPSGwYLdUtU353tktOhUQtSiT2NJg/jUHz8tlNr2AD0GU5T1S', '1979-12-08', 'other', 'other', 'other', 'no', '10000', '2021-12-05 03:44:36', '2021-12-05 03:44:36'),
(8, 'Kaseem Bullock', 'talo@mailinator.com', '$2y$10$aio4yviUduc2BS7YIXgWmewKKDtONVdjFBDlZTrU8bZAa4o4tJ9JG', '1983-10-22', 'male', 'other', 'joint family', 'yes', '40000', '2021-12-05 04:10:42', '2021-12-05 04:10:42'),
(9, 'Gavin Shelton', 'hyvexuzu@mailinator.com', '$2y$10$u7HQam1/xl0dkTg31aMkWuQmQVrbjLO2ELJcSnQYQYc5cOJ3mmyRm', '1993-04-15', 'other', 'govt job', 'joint family', 'no', '20000', '2021-12-05 04:16:32', '2021-12-05 04:16:32'),
(10, 'Roary Lopez', 'basugyg@mailinator.com', '$2y$10$jC9otGaKDJxLaJ7fVhd/5.LDmFrLUlhy33BVk1f2cWceeuaCBX952', '1991-03-12', 'male', 'private job', 'other', 'no', '10000', '2021-12-05 05:15:54', '2021-12-05 05:15:54'),
(11, 'Bevis Johnston', 'majo@mailinator.com', '$2y$10$ZRLY6q2rBrwO8V9ooOtsRObIXa2LXMiYtoXi3Ej/lr4shXOrrC2tO', '1991-02-06', 'other', 'private job', 'nuclear family', 'yes', '50000', '2021-12-05 05:16:07', '2021-12-05 05:16:07'),
(12, 'Iliana Meadows', 'soxanyke@mailinator.com', '$2y$10$MOY/yl6WMXHd7n.zWNQ1e.rkQjfrXGGHK6ye/yiuVbNoKwR912nXS', '1986-11-13', 'male', 'private job', 'other', 'no', '50000', '2021-12-05 05:16:18', '2021-12-05 05:16:18'),
(13, 'Jasper Kirkland', 'vubux@mailinator.com', '$2y$10$7hUxDSANoLgqHUyOQGJ27.ydplgB14zxJF70nZ8q8ylbmDYQZ8QzO', '2014-09-21', 'male', 'business', 'other', 'yes', '30000', '2021-12-05 05:16:52', '2021-12-05 05:16:52'),
(14, 'Angela Kelly', 'wuvosehebu@mailinator.com', '$2y$10$GVm87fNeJj/0G.2Yeh.jjOZ/oSAiLArvdjtgqtTIqBzaCil9KGSj.', '1990-02-19', 'male', 'business', 'nuclear family', 'no', '10000', '2021-12-05 05:17:06', '2021-12-05 05:17:06'),
(15, 'Nash Wynn', 'dehubojyqe@mailinator.com', '$2y$10$aDAo5JwU67F5DASJMxI3LOYcyfuumOa..zvFeYGFBVtGFDrb3M.vC', '2011-05-26', 'other', 'private job', 'other', 'no', '30000', '2021-12-05 05:17:17', '2021-12-05 05:17:17'),
(16, 'Axel Guthrie', 'tuwirufet@mailinator.com', '$2y$10$2/uKUSCgd7VJl/kt4HXDX.tjbHs/MDeNviSrXpWfSJFgr.JJMmsAq', '1972-10-27', 'other', 'other', 'other', 'yes', '20000', '2021-12-05 05:17:25', '2021-12-05 05:17:25'),
(17, 'Hayes Pacheco', 'mucak@mailinator.com', '$2y$10$ysSHXCG.489LjkgV9iimx.Fv22sbOCfdOYJGh.Z2efhubxxrRFKB.', '2016-10-12', 'other', 'business', 'nuclear family', 'yes', '20000', '2021-12-05 05:17:49', '2021-12-05 05:17:49'),
(18, 'Ronan Farley', 'pujivob@mailinator.com', '$2y$10$kSzPpBmrAm0q7XOICf2sseLTs4vMp/Hy30V29Z08ZbWsgyoBtzOc2', '1971-03-27', 'male', 'govt job', 'nuclear family', 'yes', '50000', '2021-12-05 05:18:05', '2021-12-05 05:18:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
