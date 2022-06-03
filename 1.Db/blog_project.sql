-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 03:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upper_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lower_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `upper_description`, `about_image`, `lower_description`, `mission_description`, `mission_1`, `mission_2`, `mission_3`, `created_at`, `updated_at`) VALUES
(2, '<p>A news blog is a type of news-publishing platform that mainly generates written and current-stories content.<br />\r\n<br />\r\nWhen learning how to start a news blog or starting a news blog, the language used will be different from most other reporting sites or broadcasts, meaning it can be more informal, as long as it captures the news&rsquo; essence.<br />\r\n<br />\r\nWhen it comes to local news blogs, these mainly run on published blog posts that concern a certain area.&nbsp;</p>', 'assets/images/about/1653542498778.jpg', 'The possibility to share ideas with like-minded people is the number-one benefit of starting a news blog. After you’ve built your loyalty and trust, you will have readers flooding your site daily.', 'Similarly to a global news blogger, the things you need to do for your local blog include:', 'Launch your blog', 'Consider the statistics', 'Customize and design your blog', '2022-05-25 23:21:38', '2022-05-26 07:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `blog_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_image`, `blog_description`, `status`, `created_at`, `updated_at`) VALUES
(3, 7, 'Port city drowns after drizzle', 'assets/images/blog/1653213776722.jpg', '<p>A drizzle in the morning was all it took to submerge Chattogram city&#39;s low-lying areas yesterday, resulting in residents, commuters and pedestrians having to deal with muddy and waterlogged roads.</p>\r\n\r\n<p>Although Chattogram Development Authority (CDA) has been implementing a Tk 5,617-crore mega-project to address waterlogging in the city since 2017, city dwellers alleged that they are not seeing any benefits even four years after the project&#39;s commencement.</p>\r\n\r\n<p>&quot;We see that CDA has been working on many canals [36 canals] and drains for the last four years, but the waterlogging problem did not improve in our area,&quot; said Abdur Razzak, a resident of Chawkbazar area.</p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-05-22 04:02:56', '2022-05-26 06:19:08'),
(4, 7, 'Paddy processing on roads: A danger invited', 'assets/images/blog/1653213864494.jpg', '<p>Regardless of smooth vehicular movement and impending danger, farmers in different areas of Lalmonirhat and Kurigram districts are using roads and highways for threshing and drying paddy as Boro harvest gains momentum.</p>\r\n\r\n<p>Around 3,000 vehicles including buses and trucks ply the Lalmonirhat-Burimari highway, Kurigram-Bhurungamri highway and Rangpur-Kurigram highway and they face much hurdles negotiating the roads because of the presence of careless farmers processing paddy, said leaders of Transport Workers&#39; Union.</p>\r\n\r\n<p>Locals said very often, straw gets entangled with the wheels causing them to veer off the roads. The roads become more treacherous when rains drench the straw strewn on them.</p>', 1, '2022-05-22 04:04:24', '2022-05-26 06:23:17'),
(5, 8, 'Sri Lanka warns of food shortages as it battles economic crisis', 'assets/images/blog/1653214040285.jpg', '<p><strong>Sri Lanka&#39;s prime minister has warned of a food shortage as the island nation battles a devastating economic crisis and vowed the government will buy enough fertiliser for the next planting season to boost productivity.</strong></p>\r\n\r\n<p>A decision in April last year by President Gotabaya Rajapaksa to ban all chemical fertilisers drastically cut yields and although the government has reversed the ban, no substantial imports have yet taken place.</p>\r\n\r\n<p>&quot;While there may not be time to obtain fertiliser for this Yala (May-August) season, steps are being taken to ensure adequate stocks for the Maha (September-March) season,&quot; Prime Minister Ranil Wickremesinghe said in a message on Twitter late on Thursday.</p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-05-22 04:07:20', '2022-05-26 06:24:39'),
(6, 8, '1 US dollar now worth 200 Pakistani rupees', 'assets/images/blog/1653214276843.jpg', '<p><strong>The US dollar, which had closed at a historic high of Rs200 on Thursday, extended its gains against the rupee for the 11th consecutive session today (Friday) as it gained 25 paisa by close.</strong></p>\r\n\r\n<p>According to the Forex Association of Pakistan (FAP), the greenback closed at Rs200.25, another record. Data released by State Bank of Pakistan (SBP) showed the dollar closed at Rs200.10.</p>\r\n\r\n<p>The persistent decline in the rupee&#39;s value since last Tuesday has been largely attributed to the country&#39;s rising import bill, widening current account deficit and depleting foreign exchange reserves of the State Bank of Pakistan.</p>', 1, '2022-05-22 04:11:16', '2022-05-26 06:26:05'),
(7, 9, 'Biden, S Korea’s Yoon vow to deter N Korea', 'assets/images/blog/1653214391497.jpg', '<p>President Joe Biden and his new South Korean counterpart yesterday agreed to hold bigger military drills and deploy more US weapons if necessary to deter North Korea, while offering to send Covid-19 vaccines and potentially meet Kim Jong Un.</p>\r\n\r\n<p>Biden and Yoon Suk-yeol said their countries&#39; decades-old alliance needed to develop not only to face North Korean threats but to keep the Indo-Pacific region &quot;free and open&quot; and protect global supply chains.</p>\r\n\r\n<p>The two leaders are meeting in Seoul for their first diplomatic engagement since the South Korean president&#39;s inauguration 11 days ago. The friendly encounter between allies was clouded by intelligence showing North Korean leader Kim Jong Un is prepared to conduct nuclear or missile tests.</p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-05-22 04:13:11', '2022-05-26 06:27:00'),
(8, 9, 'Anthony Albanese set to become next Australian PM', 'assets/images/blog/1653214513768.jpg', '<p><strong>Anthony Albanese, who is set to be Australia&#39;s next prime minister, is a pragmatic leader from a working-class background who has pledged to end divisions in the country.</strong></p>\r\n\r\n<p>&quot;I want to unite the country,&quot; the Labor Party leader said after conservative Prime Minister Scott Morrison conceded defeat following an election on Saturday.</p>\r\n\r\n<p>&quot;I think people want to come together, look for our common interest, look towards that sense of common purpose. I think people have had enough of division, what they want is to come together as a nation and I intend to lead that.&quot;</p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-05-22 04:15:13', '2022-05-26 06:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Bangladesh', 'assets/images/category/1653213573377.jpg', 1, '2022-05-22 03:59:33', '2022-05-22 03:59:33'),
(8, 'Asia', 'assets/images/category/1653213613892.jpg', 1, '2022-05-22 04:00:13', '2022-05-22 04:00:13'),
(9, 'World', 'assets/images/category/1653213644701.jpg', 1, '2022-05-22 04:00:44', '2022-05-22 04:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `description`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, '<p>For any query, please contact us. We are always ready to help you.</p>', 'pabelmahmud57@gmail.com', '01992 242920', 'Lalkuthi, Mirpur-1, Dhaka-1216', '2022-05-25 22:35:55', '2022-05-25 22:35:55');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_16_085224_create_sessions_table', 1),
(7, '2022_05_19_160631_create_categories_table', 1),
(8, '2022_05_22_080228_create_blogs_table', 1),
(9, '2022_05_24_121235_create_contacts_table', 2),
(10, '2022_05_26_035636_create_abouts_table', 3),
(11, '2022_05_26_065451_create_emails_table', 4),
(12, '2022_05_26_071954_create_emails_table', 5);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('W49gOft70UnvNzfm95tBVZV1256UzO0m89DzG0dI', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibFh2YXpRQjREQnhuYTdGMm10Y2dud0o0VW5mc09IaDhBem5KU3d6NSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly9sb2NhbGhvc3QvMC5QYWJlbC9ibG9nLXByb2plY3QvcHVibGljL21hbmFnZS1hYm91dCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGJ0cEE2TGdKaUZJaFVEd3J6TzhIbU9hM21YbTExWHJOS1k4RUQ0enpSbTVacGo5a2xlTG1DIjt9', 1653570641);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$btpA6LgJiFIhUDwrzO8HmOa3mXm11XrNKY8ED4zzRm5Zpj9kleLmC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-22 02:15:28', '2022-05-22 02:15:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
