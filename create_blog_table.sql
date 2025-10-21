-- SQL to create blog_posts table for blog management system
-- Run this query in your database to create the blog posts table

CREATE TABLE `blog_posts` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `meta_title` VARCHAR(255) NOT NULL COMMENT 'SEO meta title',
  `meta_description` TEXT DEFAULT NULL COMMENT 'SEO meta description',
  `title` VARCHAR(255) NOT NULL COMMENT 'Blog post title',
  `main_description` TEXT NOT NULL COMMENT 'Main blog content',
  `image` VARCHAR(255) DEFAULT NULL COMMENT 'Featured image filename',
  `image_alt` VARCHAR(255) DEFAULT NULL COMMENT 'Image alt text for SEO',
  `date` DATE NOT NULL COMMENT 'Publication date',
  `slug` VARCHAR(255) NOT NULL COMMENT 'URL-friendly slug',
  `category` VARCHAR(100) NOT NULL COMMENT 'Blog category',
  `status` ENUM('draft', 'published', 'archived') DEFAULT 'draft' COMMENT 'Post status',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Creation timestamp',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last update timestamp',
  
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_slug` (`slug`),
  KEY `idx_category` (`category`),
  KEY `idx_status` (`status`),
  KEY `idx_date` (`date`),
  KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Blog posts management';

-- Insert sample blog post
INSERT INTO `blog_posts` (
  `meta_title`,
  `meta_description`,
  `title`,
  `main_description`,
  `image`,
  `image_alt`,
  `date`,
  `slug`,
  `category`,
  `status`
) VALUES (
  '10 Essential House Cleaning Tips for a Spotless Home',
  'Discover the best house cleaning tips and tricks to keep your home spotless. Professional cleaning advice from Spring Flowers cleaning services.',
  '10 Essential House Cleaning Tips for a Spotless Home',
  'Keeping your home clean and organized doesn\'t have to be a daunting task. With the right techniques and a little planning, you can maintain a spotless home that you\'ll be proud to show off. Here are our top 10 essential house cleaning tips that will make your cleaning routine more efficient and effective.\n\n1. Start from the top and work your way down\n2. Use the right cleaning products for each surface\n3. Declutter before you clean\n4. Create a cleaning schedule\n5. Focus on high-traffic areas\n6. Don\'t forget about hidden spots\n7. Use microfiber cloths for better results\n8. Keep cleaning supplies organized\n9. Clean as you go\n10. Consider professional cleaning services for deep cleans',
  'house-cleaning-tips.jpg',
  'Professional house cleaning tips and techniques',
  '2024-01-15',
  '10-essential-house-cleaning-tips',
  'Cleaning Tips',
  'published'
);
