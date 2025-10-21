-- Create blog_posts table if it doesn't exist
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text,
  `title` varchar(255) NOT NULL,
  `main_description` longtext NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `status` (`status`),
  KEY `category` (`category`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
