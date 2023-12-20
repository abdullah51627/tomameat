-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2023 at 11:05 AM
-- Server version: 8.2.0
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


;
;
;
;

--
-- Database: `tomameat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(1, '2023-12-08 04:19:58', '2023-12-08 04:19:58', 'Beef', NULL),
(2, '2023-12-08 04:19:58', '2023-12-08 04:19:58', 'Mutton', NULL),
(3, '2023-12-08 04:19:58', '2023-12-08 04:19:58', 'Lamb', NULL),
(4, '2023-12-08 04:19:58', '2023-12-08 04:19:58', 'Chicken', NULL),
(5, '2023-12-08 04:19:58', '2023-12-08 04:19:58', 'Cuts', NULL),
(6, '2023-12-08 04:19:58', '2023-12-08 04:19:58', 'Frozen', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_03_003719_create_categories_table', 1),
(6, '2023_12_03_003737_create_products_table', 1),
(7, '2023_12_03_003949_create_orders_table', 1),
(8, '2023_12_03_004316_product_images', 1),
(9, '2023_12_03_004845_create_table_for_product_cuts', 1),
(10, '2023_12_04_224737_udpate_products_table_for_quantinty', 2),
(11, '2023_12_06_195028_update_categories_table_for_all_columns', 2),
(12, '2023_12_06_201219_update_description_in_products', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliver_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` double(8,2) DEFAULT NULL,
  `amount` double(8,2) NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `delivery_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `order_cancel_status` tinyint NOT NULL DEFAULT '0',
  `order_canceled_on` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `p_status_Updated_By` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category` bigint UNSIGNED NOT NULL,
  `priority` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `delivery_charges` double(8,2) DEFAULT NULL,
  `additional_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qty` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `priority`, `name`, `description`, `url`, `rating`, `price`, `discount`, `title`, `keywords`, `meta_description`, `status`, `delivery_charges`, `additional_info`, `created_at`, `updated_at`, `qty`) VALUES
(3, 1, 1, 'Beef cubes', 'Beef cubes boneless feature an excellent mix of gamey, tender, and savory cubes of boneless beef. You get flavor-rich beef with an excellent mouth-feel that can be cooked in several ways. However, the beef cubes boneless taste the best when slow-cooked using moist heat methods.', 'beef-cubes', NULL, 900, NULL, 'Beef Cubes', 'a:2:{i:0;s:9:\"beefcubes\";i:1;s:4:\"beef\";}', 'Beef cubes boneless feature an excellent mix of gamey, tender, and savory cubes of boneless beef. You get flavor-rich beef with an excellent mouth-feel that can be cooked in several ways. However, the beef cubes boneless taste the best when slow-cooked using moist heat methods.', 1, NULL, NULL, '2023-12-08 05:40:14', '2023-12-08 05:40:14', 150),
(4, 1, 1, 'Beef Steak Brisket', 'The beef steak brisket comes from a cut of beef located at the lower chest or breast section of the animal. The brisket cut meat includes the deep pectoral muscles of beef and is a relatively tough primal cut.\r\nThe beef steak brisket is best cooked slowly due to its toughness, and this results in a juicy and flavor-packed steak. We recommend using your favorite dry rub, although, the beef steak brisket tastes equally delicious with a simple salt and pepper rub.', 'beef-steak', NULL, 1200, NULL, 'Beef Steak', 'a:2:{i:0;s:9:\"beefsteak\";i:1;s:4:\"beef\";}', 'The beef steak brisket comes from a cut of beef located at the lower chest or breast section of the animal. The brisket cut meat includes the deep pectoral muscles of beef and is a relatively tough primal cut.\r\nThe beef steak brisket is best cooked slowly due to its toughness, and this results in a juicy and flavor-packed steak. We recommend using your favorite dry rub, although, the beef steak brisket tastes equally delicious with a simple salt and pepper rub.', 1, NULL, NULL, '2023-12-08 05:43:37', '2023-12-08 05:43:37', 80),
(5, 1, 3, 'Beef Steak Brisket', 'The beef steak brisket comes from a cut of beef located at the lower chest or breast section of the animal. The brisket cut meat includes the deep pectoral muscles of beef and is a relatively tough primal cut.\r\nThe beef steak brisket is best cooked slowly due to its toughness, and this results in a juicy and flavor-packed steak. We recommend using your favorite dry rub, although, the beef steak brisket tastes equally delicious with a simple salt and pepper rub', 'beef-steak-brisket', NULL, 1250, NULL, 'Beef Steak Brisket', 'a:2:{i:0;s:18:\"Beef Steak Brisket\";i:1;s:4:\"beef\";}', 'The beef steak brisket comes from a cut of beef located at the lower chest or breast section of the animal. The brisket cut meat includes the deep pectoral muscles of beef and is a relatively tough primal cut.\r\nThe beef steak brisket is best cooked slowly due to its toughness, and this results in a juicy and flavor-packed steak. We recommend using your favorite dry rub, although, the beef steak brisket tastes equally delicious with a simple salt and pepper rub', 1, NULL, NULL, '2023-12-08 05:45:12', '2023-12-08 05:45:12', 50),
(6, 4, 1, 'Chicken Breast', 'Chicken breast is a must have item in every freezer. It\'s a rich source of protein which is vital for muscle building. Chicken breast is highly versatile and a great addition to everyday meals.', 'chicken-breast', NULL, 750, NULL, 'Chicken Breast', 'a:2:{i:0;s:14:\"Chicken Breast\";i:1;s:7:\"Chicken\";}', 'Chicken breast is a must have item in every freezer. It\'s a rich source of protein which is vital for muscle building. Chicken breast is highly versatile and a great addition to everyday meals.', 1, NULL, NULL, '2023-12-08 05:48:31', '2023-12-08 05:48:31', 100),
(7, 4, 2, 'Chicken Cubes', 'On-the-bone chicken has its charm, but even it can’t beat the shorter cooking time afforded by boneless chicken—not least when it’s diced, boneless chicken.', 'chicken-cubes', NULL, 800, NULL, 'Chicken Cubes', 'a:2:{i:0;s:13:\"Chicken Cubes\";i:1;s:7:\"chicken\";}', 'On-the-bone chicken has its charm, but even it can’t beat the shorter cooking time afforded by boneless chicken—not least when it’s diced, boneless chicken.', 1, NULL, NULL, '2023-12-08 05:50:05', '2023-12-08 05:50:05', 150),
(8, 4, 3, 'Chicken Mince', 'Chicken Mince is a leaner version of its Beef counterpart. It\'s perfect for Kebabs, Meat balls, Burgers and Patties.', 'chicken-mince', NULL, 920, NULL, 'Chicken mince', 'a:2:{i:0;s:12:\"chickenmince\";i:1;s:7:\"chicken\";}', 'Chicken Mince is a leaner version of its Beef counterpart. It\'s perfect for Kebabs, Meat balls, Burgers and Patties.', 1, NULL, NULL, '2023-12-08 05:52:07', '2023-12-08 05:52:07', 80),
(9, 3, 1, 'Lamb Neck', 'Bone-In Lamb Neck is the neck of the lamb, the perfect cut of lamb for neck chops. It is fatty, full of gelatin, wrapped around flavorful cartilaginous bones. It’s ideal for moist, low, and slow cooking methods to properly break down the connective tissue. \r\n\r\nWe highly recommend slowly braising the lamb neck for cooking dishes, such as Mongolian Lamb, Moroccan or Sichuan Braised Lamb, or a simple Wine Braised Lamb dish. You can also cook a Middle Eastern Spiced Lamb or a delicious Slow-Cooked Lamb Neck Curry.', 'lamb-neck', NULL, 1700, NULL, 'Lamb Neck', 'a:2:{i:0;s:8:\"lambneck\";i:1;s:4:\"lamb\";}', 'Bone-In Lamb Neck is the neck of the lamb, the perfect cut of lamb for neck chops. It is fatty, full of gelatin, wrapped around flavorful cartilaginous bones. It’s ideal for moist, low, and slow cooking methods to properly break down the connective tissue. \r\n\r\nWe highly recommend slowly braising the lamb neck for cooking dishes, such as Mongolian Lamb, Moroccan or Sichuan Braised Lamb, or a simple Wine Braised Lamb dish. You can also cook a Middle Eastern Spiced Lamb or a delicious Slow-Cooked Lamb Neck Curry.', 1, NULL, NULL, '2023-12-08 05:53:37', '2023-12-08 05:53:37', 400),
(10, 2, 1, 'Mutton Whole', 'Mutton whole is the entire carcass in its intact form. It includes the neck, shoulders, ribs, legs, and the loin connected as a whole to the spine. You get all the primal cuts of mutton, including connective tissue, fat, and bones.\r\nMutton whole can be divided into any number of cuts to cook as you please. Whether you want to grill, braise, roast, or make the healthiest bone broth of any meat, a mutton whole can supply the meat and marrow for it.', 'mutton-whole', NULL, 18000, NULL, 'Mutton whole', 'a:1:{i:0;s:6:\"mutton\";}', 'Mutton whole is the entire carcass in its intact form. It includes the neck, shoulders, ribs, legs, and the loin connected as a whole to the spine. You get all the primal cuts of mutton, including connective tissue, fat, and bones.\r\nMutton whole can be divided into any number of cuts to cook as you please. Whether you want to grill, braise, roast, or make the healthiest bone broth of any meat, a mutton whole can supply the meat and marrow for it.', 1, NULL, NULL, '2023-12-08 05:56:40', '2023-12-08 05:56:40', 80),
(11, 2, 2, 'Mutton Chop', 'Traditionally, mutton chops are steaks that require less cooking than beefsteaks due to a lack of fat on their exterior.\r\n\r\nHowever, despite their rather bare exterior, these cuts do have quite a bit of fat, iron, and protein to their name. They also contribute to the immune system and are therefore a staple red meat for every meat lover.\r\n\r\nThey can be stuffed with filling or serve as one themselves, depending on the type of cut you prefer. However, you can also use their natural aesthetics as part of a lovely three-course meal with fine company. \r\n\r\nJust be sure to sear each side to a minimum, and bake it for no more than 15 minutes, or until you can separate the meat from the bone with a fork. Serve upon a mint puree, light salad, or both.', 'mutton-chop', NULL, 1600, NULL, 'Mutton Chop', 'a:1:{i:0;s:11:\"Mutton Chop\";}', 'Traditionally, mutton chops are steaks that require less cooking than beefsteaks due to a lack of fat on their exterior.\r\n\r\nHowever, despite their rather bare exterior, these cuts do have quite a bit of fat, iron, and protein to their name. They also contribute to the immune system and are therefore a staple red meat for every meat lover.\r\n\r\nThey can be stuffed with filling or serve as one themselves, depending on the type of cut you prefer. However, you can also use their natural aesthetics as part of a lovely three-course meal with fine company. \r\n\r\nJust be sure to sear each side to a minimum, and bake it for no more than 15 minutes, or until you can separate the meat from the bone with a fork. Serve upon a mint puree, light salad, or both.', 1, NULL, NULL, '2023-12-08 05:57:39', '2023-12-08 05:57:39', 60),
(12, 2, 3, 'Mutton Ribs', 'Taken from either side of the backbone, mutton ribs are closer to the bone than most other mutton cuts, making them rich in flavor. High bone content in mutton ribs means you will want to cook these for longer to get all the flavor out.\r\nThey are one of the most elegant cuts of mutton and perfect for braising and grilling. You can roast them to fall-of-the-bone perfection or cook delicious sticky mutton ribs using a honey and brown sugar sauce/glaze.', 'mutton-ribs', NULL, 1500, NULL, 'Mutton Ribs', 'a:1:{i:0;s:11:\"Mutton Ribs\";}', 'Taken from either side of the backbone, mutton ribs are closer to the bone than most other mutton cuts, making them rich in flavor. High bone content in mutton ribs means you will want to cook these for longer to get all the flavor out.\r\nThey are one of the most elegant cuts of mutton and perfect for braising and grilling. You can roast them to fall-of-the-bone perfection or cook delicious sticky mutton ribs using a honey and brown sugar sauce/glaze.', 1, NULL, NULL, '2023-12-08 05:58:50', '2023-12-08 05:58:50', 75),
(13, 5, 1, 'Beef Steak Ribeye', 'The beef steak ribeye is taken from rib six through twelve of the animal, between the loin and the shoulder. It is well-known for having the best flavor of any beef steak and is perfect for steak lovers who value flavor over texture.\r\n\r\nBeing less lean and fattier than a tenderloin, it is best to cook them to at least medium rare. This cuts of beef is excellent for pan searing. The beef steak ribeye can also be a great option for Asian-style marinade, like a soy and ginger marinade, or a Korean Bulgogi (fire meat).', 'beef-steak-ribeye', NULL, 1545, NULL, 'Beef Steak Ribeye', 'a:1:{i:0;s:17:\"Beef Steak Ribeye\";}', 'The beef steak ribeye is taken from rib six through twelve of the animal, between the loin and the shoulder. It is well-known for having the best flavor of any beef steak and is perfect for steak lovers who value flavor over texture.\r\n\r\nBeing less lean and fattier than a tenderloin, it is best to cook them to at least medium rare. This cuts of beef is excellent for pan searing. The beef steak ribeye can also be a great option for Asian-style marinade, like a soy and ginger marinade, or a Korean Bulgogi (fire meat).', 1, NULL, NULL, '2023-12-08 06:00:37', '2023-12-08 06:00:37', 300),
(14, 5, 2, 'Beef Tomahawk Steak', 'The beef steak tomahawk is taken from the prime rib of beef. It is essentially a large beef ribeye steak with at least 5-inches of rib bone left intact. Beef steak tomahawks are full of flavor and nicely marbled, and the rib bone adds to its flavor.\r\n\r\nBeing naturally tender pieces of meat, they are an excellent choice of beef steak for roasting and can be used in any beef dish that requires thinly cut beef. We highly recommend grilling the beef steak tomahawk; season and finish it with some butter to bring out its true flavors', 'beef-tomahawk-steak', NULL, 980, NULL, 'Beef Tomahawk Steak', 'a:1:{i:0;s:19:\"Beef Tomahawk Steak\";}', 'The beef steak tomahawk is taken from the prime rib of beef. It is essentially a large beef ribeye steak with at least 5-inches of rib bone left intact. Beef steak tomahawks are full of flavor and nicely marbled, and the rib bone adds to its flavor.\r\n\r\nBeing naturally tender pieces of meat, they are an excellent choice of beef steak for roasting and can be used in any beef dish that requires thinly cut beef. We highly recommend grilling the beef steak tomahawk; season and finish it with some butter to bring out its true flavors', 1, NULL, NULL, '2023-12-08 06:02:13', '2023-12-08 06:02:13', 370),
(15, 5, 3, 'Beef T-Bone Steak', 'Beef T-Bone Steak', 'beef-t-bone-steak', NULL, 800, NULL, 'Beef T-Bone Steak', 'a:1:{i:0;s:17:\"Beef T-Bone Steak\";}', 'Beef T-Bone Steak', 1, NULL, NULL, '2023-12-08 06:03:49', '2023-12-08 06:03:49', 480);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_for_product_cuts`
--

CREATE TABLE `table_for_product_cuts` (
  `id` bigint UNSIGNED NOT NULL,
  `cut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@themesbrand.com', NULL, '$2y$10$4pjgr6jwa.tiZKnGq3qyl.mRPssVLlV3i315CELV.ppPFTXTaCU3S', NULL, '2023-12-04 13:55:11', '2023-12-04 13:55:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_foreign` (`category`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `table_for_product_cuts`
--
ALTER TABLE `table_for_product_cuts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_for_product_cuts`
--
ALTER TABLE `table_for_product_cuts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

;
;
;
