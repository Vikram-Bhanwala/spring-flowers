-- Fix blog update issues

-- 1. Check if the table exists
SHOW TABLES LIKE 'blog_posts';

-- 2. If table doesn't exist, create it
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

-- 3. Check current blog posts
SELECT id, title, slug, status, created_at, updated_at FROM blog_posts ORDER BY id DESC;

-- 4. Test update query (replace 1 with actual blog post ID)
-- UPDATE blog_posts SET 
--   title = 'Updated Test Title',
--   main_description = '<p>Updated content</p>',
--   updated_at = NOW()
-- WHERE id = 1;

-- 5. Check for any duplicate slugs
SELECT slug, COUNT(*) as count FROM blog_posts GROUP BY slug HAVING count > 1;

-- 6. Fix any duplicate slugs by adding numbers
-- UPDATE blog_posts SET slug = CONCAT(slug, '-', id) WHERE id IN (
--   SELECT id FROM (
--     SELECT id FROM blog_posts WHERE slug IN (
--       SELECT slug FROM blog_posts GROUP BY slug HAVING COUNT(*) > 1
--     ) AND id NOT IN (
--       SELECT MIN(id) FROM blog_posts GROUP BY slug HAVING COUNT(*) > 1
--     )
--   ) AS temp
-- );
