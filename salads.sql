-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 11:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salads`
--

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_30_073722_create_salads_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salads`
--

CREATE TABLE `salads` (
  `salad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salads`
--

INSERT INTO `salads` (`salad_id`, `created_at`, `updated_at`, `name`, `description`, `price`, `image_path`, `user_id`) VALUES
(1, '2022-01-11 22:16:14', '2022-01-11 22:16:14', 'Greek Salads', 'Please note: Salads\'s kitchen uses eggs, fish, milk, shellfish, soy, peanuts, tree nuts and wheat ingredients., Contains Milk.\r\n                The star of our elevated Greek salad is tangy feta cheese, with its unparalleled rustic flavor, creamy texture, and salty finish. It\'s mixed with juicy grape tomatoes, olives, cucumber crescents, red onion, and hearty romaine lettuce. Paired with our Greek dressing, this salad is refreshing and filling at the same time—perfect for a quick, satisfying lunch.\r\n                \r\n                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!', '7.99', 'Greek Salad.jpg', 7),
(2, '2022-01-11 22:16:14', '2022-01-11 22:16:14', 'Green Salad with Chicken', 'For this simply delicious salad, we add slices of grilled chicken (raised without antibiotics) to a bed of tender greens and a rainbow of refreshing veggies, including green beans, tomatoes, carrots, and cucumber. Mix in our tangy dressing for a fresh and tasty salad that makes a quick lunch or dinner entrée.\r\n\r\n                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!', '9.99', 'Green Salad with Chicken.jpg', 4),
(3, '2022-01-11 22:16:14', '2022-01-11 22:16:14', 'Buffalo Chicken Salad', 'Our Buffalo Chicken Salad features all your favorite game day flavors rolled over a bed of crispy greens. We combine shredded Buffalo chicken with crispy carrots, celery, grape tomatoes, and chopped romaine lettuce. Dressed with crumby Gorgonzola, pickled onions, and our blue cheese dressing, this salad is sure to satisfy the pickiest of eaters. So good, you won\'t miss the wings!\r\n                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!', '6.99', '1635633891-Buffalo Chicken Salad.jpg', 2),
(4, '2022-01-11 22:16:14', '2022-01-11 22:16:14', 'Arugula Salad with Beets and Goat Cheese', 'We balance peppery arugula with thick and creamy goat cheese, rich toasted walnuts, and the nutty tones of farro, all of which pair perfectly with savory bright-red baby beets and sweet dried cherries. A bright balsamic vinaigrette adds just the right finishing touch to marry the salad\'s deep flavors.\r\n                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!', '14.99', 'Arugula Salad with Beets and Goat Cheese.jpg', 4),
(5, '2022-01-11 22:16:14', '2022-01-11 22:16:14', 'Italian Chopped Salad', 'Our twist on this Italian classic starts with a bed of crispy romaine, shredded cabbage, and grape tomatoes. We then add sliced Genoa salami, Asiago cheese, marinated chickpeas, our insanely delicious Muffuletta mix, and finish with our homemade Greek dressing. Perfect for lunch, dinner, or as a great addition to pizza night.\r\n                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!', '9.99', 'Italian Chopped Salad.jpg', 10),
(6, '2022-01-11 22:16:14', '2022-01-11 22:16:14', 'Spinach Apple Salad', 'This spring inspired salad will brighten up the dreariest of desk lunches. Asparagus, steamed broccoli, green peas, cucumbers, sliced fennel, and fresh mint are combined atop a bed of peppery arugula. The salad is finished with ricotta salata cheese and our tangy dressing. Who knew eating well could be this delicious?\r\n                Delicious and convenient, our ready-to-go salads have been carefully planned, prepped, and packaged to maintain the quality of the ingredients, with a perfect portion of dressing on the side. Simply mix it up and enjoy!', '11.99', 'SpinachAppleSalad.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `ip_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Winston Weimann', 'marilou24@example.org', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '104.255.132.187', 'Bp3KIenFCM', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(2, 'Mrs. Dianna Kovacek IV', 'shyanne70@example.net', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '56.253.189.136', 'VgF703oSqh', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(3, 'Harmon Mueller', 'bkuhic@example.net', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '127.253.188.43', 'Kee4GS0W8b', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(4, 'Antonio Stoltenberg DVM', 'allene88@example.org', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '94.177.24.78', 'frpKZeeMMD', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(5, 'Miss Athena Botsford Sr.', 'nellie.prohaska@example.net', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '118.47.167.118', 'XLo586PHfN', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(6, 'Dr. Andreanne Heller', 'towne.angelo@example.net', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '116.144.146.255', '0nuBsZCbOo', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(7, 'Pedro Huel', 'gblick@example.org', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '47.103.212.191', 'FzL4kC5cio', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(8, 'Mr. Macey Terry', 'zwalsh@example.net', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '160.98.182.91', 'ZjiZjwueI7', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(9, 'Loyal Koch', 'kovacek.kaitlyn@example.com', '2022-01-11 22:16:14', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '45.8.62.155', '3eXyFgRgzX', '2022-01-11 22:16:14', '2022-01-11 22:16:14'),
(10, 'Jozsi', 'test@gmail.com', '2022-01-11 22:16:12', '$2y$10$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha', '192.168.0.12', NULL, '2022-01-11 22:16:12', '2022-01-11 22:16:12');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `salads`
--
ALTER TABLE `salads`
  ADD PRIMARY KEY (`salad_id`),
  ADD KEY `salads_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salads`
--
ALTER TABLE `salads`
  MODIFY `salad_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salads`
--
ALTER TABLE `salads`
  ADD CONSTRAINT `salads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
