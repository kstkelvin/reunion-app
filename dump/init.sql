-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2019 às 22:37
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reunion_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_05_190654_create_salas_table', 1),
(5, '2019_11_05_211346_create_reservas_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sala_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocupado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `sala_id`, `user_id`, `hora`, `ocupado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '8:00', 1, '2019-11-06 21:32:46', '2019-11-07 02:48:33'),
(2, 1, 3, '9:00', 1, '2019-11-06 21:32:46', '2019-11-07 03:57:52'),
(3, 1, NULL, '10:00', 0, '2019-11-06 21:32:46', '2019-11-07 03:55:36'),
(4, 1, NULL, '11:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(5, 1, NULL, '12:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(6, 1, NULL, '13:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(7, 1, NULL, '14:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(8, 1, NULL, '15:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(9, 1, NULL, '16:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(10, 1, NULL, '17:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(11, 1, NULL, '18:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(12, 1, NULL, '19:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(13, 1, NULL, '20:00', 0, '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(14, 2, NULL, '8:00', 0, '2019-11-07 02:51:49', '2019-11-07 02:51:49'),
(15, 2, 1, '9:00', 1, '2019-11-07 02:51:49', '2019-11-07 03:23:43'),
(16, 2, NULL, '10:00', 0, '2019-11-07 02:51:49', '2019-11-07 02:51:49'),
(17, 2, NULL, '11:00', 0, '2019-11-07 02:51:49', '2019-11-07 03:54:42'),
(18, 2, NULL, '12:00', 0, '2019-11-07 02:51:49', '2019-11-07 02:51:49'),
(19, 2, NULL, '13:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(20, 2, NULL, '14:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(21, 2, NULL, '15:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(22, 2, NULL, '16:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(23, 2, NULL, '17:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(24, 2, NULL, '18:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(25, 2, NULL, '19:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(26, 2, NULL, '20:00', 0, '2019-11-07 02:51:50', '2019-11-07 02:51:50'),
(27, 3, NULL, '8:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(28, 3, NULL, '9:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(29, 3, 1, '10:00', 1, '2019-11-07 03:25:44', '2019-11-07 19:53:08'),
(30, 3, NULL, '11:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(31, 3, NULL, '12:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(32, 3, NULL, '13:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(33, 3, NULL, '14:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(34, 3, NULL, '15:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(35, 3, NULL, '16:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(36, 3, NULL, '17:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(37, 3, NULL, '18:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(38, 3, NULL, '19:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44'),
(39, 3, NULL, '20:00', 0, '2019-11-07 03:25:44', '2019-11-07 03:25:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Elf Practice', '2019-11-06 21:32:46', '2019-11-06 21:32:46'),
(2, 'Teste', '2019-11-07 02:51:49', '2019-11-07 02:51:49'),
(3, 'Dorgas', '2019-11-07 03:25:44', '2019-11-07 03:25:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kelvin', 'kstkelvin@gmail.com', '$2y$10$1sgs6vvZuRkaAIb9sXQkPOrWG9enom.Eh6ZHlQ3hIE79NKHwmg11W', NULL, '2019-11-06 21:32:37', '2019-11-06 21:32:37'),
(2, 'Doido', 'doidodoido@gmail.com', '$2y$10$9dau2n.wYwRkmgMiRGOYYOsVEtZtrvj2tFWbE77QnxOOATT2DfBvG', NULL, '2019-11-07 03:29:27', '2019-11-07 03:29:27'),
(3, 'Doh', 'kstkelvin2@gmail.com', '$2y$10$5IuJcMusZpJ5Abtt3LDrPOYOrURA.QmR8lU5HVVz4OwOrt173skeK', NULL, '2019-11-07 03:35:58', '2019-11-07 03:35:58');

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
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `salas`
--
ALTER TABLE `salas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
