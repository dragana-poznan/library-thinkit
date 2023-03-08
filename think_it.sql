-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 04:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `think_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `surname`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Desanka', 'Maksimovic', NULL, NULL, '2023-03-08 11:02:18', NULL),
(2, 'Emil', 'Zola', NULL, NULL, '2023-03-08 11:02:18', NULL),
(3, 'Predrag', 'Petkovic', NULL, NULL, '2023-03-08 11:02:44', NULL),
(4, 'Fjodor', 'Dostojevski', NULL, NULL, '2023-03-08 11:02:44', NULL),
(5, 'Dragana', 'prezime', NULL, NULL, '2023-03-08 14:09:18', '2023-03-08 14:09:18'),
(6, 'Olja', 'Vujic', '1678288338 lavabo.webp', NULL, '2023-03-08 14:12:18', '2023-03-08 14:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `book_no` bigint(20) NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `book_no`, `author_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Veniam ea facere et.', 'Vel quia voluptas ea ullam non dolorum aut. Ea quisquam et quae accusantium non culpa. Repellat non qui nisi et aut. Laudantium omnis corrupti nemo temporibus ab ratione. Consequatur quis ratione ullam velit fuga et. Ut porro quae ullam. Non sunt sed sequi laborum dolorum est ea.', 58, 1, '2023-03-08 10:47:39', '2023-03-08 10:03:25', '2023-03-08 10:47:39'),
(2, 'Vero at possimus molestiae voluptatem excepturi sit.', 'Optio dolorum nesciunt autem tempora reprehenderit necessitatibus dicta qui. Quia in temporibus et non et et. Qui deleniti vero voluptatem necessitatibus esse velit. Accusantium fugit natus est quod quis nesciunt alias. Perspiciatis totam minus accusamus voluptatem voluptas. Et qui molestiae amet ex hic necessitatibus odit aut.', 37, 4, NULL, '2023-03-08 10:03:25', '2023-03-08 10:03:25'),
(3, 'Ea in doloribus qui sed.', 'Sit repudiandae dicta vel recusandae nihil nam. Nisi consequatur sed laboriosam aut soluta ea ipsam. Itaque natus suscipit asperiores aut voluptatum molestiae. Qui ducimus accusantium non ratione iure suscipit explicabo qui. Est et quibusdam sint sit iure dignissimos itaque. Quasi et quo nisi repudiandae quas pariatur. Qui iusto possimus voluptas enim.', 14, 2, '2023-03-08 10:48:08', '2023-03-08 10:03:25', '2023-03-08 10:48:08'),
(4, 'Hic omnis amet et.', 'Vero quo expedita dolorem aut mollitia nemo natus nisi. Sit sequi eos aut at aperiam esse est. Eaque magnam qui facere temporibus ut impedit error. Eos quia consequatur voluptas dolores sed culpa molestiae.', 19, 1, '2023-03-08 10:47:53', '2023-03-08 10:03:25', '2023-03-08 10:47:53'),
(5, 'Maiores ab alias ipsa repellendus ullam saepe.', 'Sed dolore quo numquam ex excepturi. Et eos a enim aut ea animi quam aut. Ipsa reiciendis corporis omnis natus nihil consequuntur. Est quo quod ducimus dolor iusto aut officia impedit. Molestias sit mollitia ratione ullam laudantium odio vel. Excepturi aut ipsum qui eum in aut quam. Pariatur aut in blanditiis distinctio eaque.', 81, 4, NULL, '2023-03-08 10:03:25', '2023-03-08 10:48:19'),
(6, 'Ut cum nihil impedit ducimus sed.', 'Est repudiandae itaque dolorem nihil harum error aperiam. Dolorem molestias animi libero. Et exercitationem autem temporibus eum quia repellendus. Et sed veniam ut mollitia magni in. Culpa cupiditate accusantium et.', 10, 3, '2023-03-08 11:59:40', '2023-03-08 10:03:25', '2023-03-08 11:59:40'),
(7, 'test Velit ipsam ut culpa tempora.', 'test test Et maxime accusantium repellat beatae. Veritatis est porro mollitia incidunt impedit aut ut ut. Quia aut est dolore in earum quaerat. Quia occaecati molestiae voluptatibus quia modi dolorem. Possimus nihil aut repudiandae sed vitae iusto. Quis maxime quo vitae. Laborum itaque nisi magni voluptatem.', 83, 1, NULL, '2023-03-08 10:03:25', '2023-03-08 12:15:52'),
(8, 'Omnis quod et quam.', 'Ut ipsum non expedita aspernatur distinctio cum ea doloribus. Architecto quia odit blanditiis ut itaque hic. Non vel amet quaerat hic qui velit. Officiis unde corrupti pariatur similique et architecto.', 84, 1, NULL, '2023-03-08 10:03:25', '2023-03-08 10:03:25'),
(11, 'Eum qui veritatis magni voluptates.', 'Nihil quam placeat dolores iure. Earum doloribus sit consectetur alias saepe amet. Et in voluptatibus voluptatem in autem at perferendis quidem. Id animi architecto repellat enim exercitationem est. Sapiente error in voluptatum explicabo id. Quo magnam rem quidem corporis. Et ex omnis architecto odio sapiente.', 6, 1, NULL, '2023-03-08 10:05:26', '2023-03-08 10:05:26'),
(12, 'Eligendi exercitationem nihil voluptate provident.', 'Impedit et enim omnis. Eos adipisci pariatur porro eum ab non unde. Temporibus rerum nihil sit et neque. Facilis optio aut quisquam at. Dolor quod nisi voluptatem quis minima eos culpa.', 63, 1, NULL, '2023-03-08 10:05:26', '2023-03-08 10:05:26'),
(13, 'Accusantium tenetur omnis sint facilis odio.', 'Id aperiam dolores voluptatem. Eius expedita molestias iusto cum dolorem. Id accusantium vel modi aut unde asperiores autem voluptatum. Nobis sed corrupti molestiae officia qui. Deserunt eos animi et. Et voluptatem veritatis tenetur consequatur. Aut labore repudiandae maiores laudantium incidunt.', 85, 1, NULL, '2023-03-08 10:05:26', '2023-03-08 10:05:26'),
(15, 'test', 'test test desc', 99, 2, NULL, '2023-03-08 11:18:12', '2023-03-08 11:59:55'),
(16, 'Put kojim se redje ide', 'Opis filozofije', 11, 1, NULL, '2023-03-08 11:19:46', '2023-03-08 11:19:46'),
(17, 'Znakovi pored puta', 'filozofija', 17, 4, NULL, '2023-03-08 11:20:29', '2023-03-08 11:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `book_user`
--

CREATE TABLE `book_user` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_user`
--

INSERT INTO `book_user` (`book_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, '2023-03-08 11:08:31', '2023-03-08 11:08:31'),
(5, 3, '2023-03-06 11:08:50', '2023-03-06 11:08:50'),
(4, 1, '2023-03-08 11:08:50', '2023-03-08 11:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_03_06_165140_create_books_table', 1),
(12, '2023_03_08_105041_create_book_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `is_librarian` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `is_librarian`, `email`, `email_verified_at`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Librarian', 'Sokic', 1, 'librarian@gmail.com', NULL, '$2y$10$PonYHD6Xp6QRSPShxqPyz.pH15E2CFjJ0cSEw1VoSTzQStA3pKmTG', NULL, NULL, '2023-03-08 10:01:06', '2023-03-08 10:01:06'),
(2, 'Reader', 'Miljkovic', 0, 'reader@gmail.com', NULL, '$2y$10$cVy9UwsnmF90nhYDWdanXO/X7QDxGVC22SCn4cyCSg3bg1sCkg7hK', NULL, NULL, '2023-03-08 10:01:32', '2023-03-08 10:01:32'),
(3, 'Dragana', 'Poznan', 1, 'potestati@gmail.com', NULL, '$2y$10$GKI4zXGv2akqlUACvNxY.evjR.unv4LY3xQMR3I02CrDJLlmiynXa', NULL, NULL, '2023-03-08 10:01:55', '2023-03-08 10:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_book_no_unique` (`book_no`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `book_user`
--
ALTER TABLE `book_user`
  ADD KEY `book_user_book_id_foreign` (`book_id`),
  ADD KEY `book_user_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_user`
--
ALTER TABLE `book_user`
  ADD CONSTRAINT `book_user_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
