-- =====================================================
-- COMPLETE BLOG SYSTEM SETUP AND DIAGNOSTIC QUERY
-- =====================================================

-- 1. CHECK CURRENT DATABASE STATUS
SELECT '=== DATABASE STATUS ===' as status;
SELECT USER() as current_user, DATABASE() as current_database, VERSION() as mysql_version;

-- 2. CHECK IF BLOG_POSTS TABLE EXISTS
SELECT '=== TABLE EXISTENCE CHECK ===' as status;
SHOW TABLES LIKE 'blog_posts';

-- 3. CREATE BLOG_POSTS TABLE IF IT DOESN'T EXIST
SELECT '=== CREATING BLOG_POSTS TABLE ===' as status;
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

-- 4. CHECK TABLE STRUCTURE
SELECT '=== TABLE STRUCTURE ===' as status;
DESCRIBE blog_posts;

-- 5. CHECK CURRENT BLOG POSTS COUNT
SELECT '=== CURRENT BLOG POSTS ===' as status;
SELECT COUNT(*) as total_posts FROM blog_posts;

-- 6. SHOW ALL EXISTING BLOG POSTS
SELECT '=== EXISTING BLOG POSTS ===' as status;
SELECT 
  id, 
  title, 
  slug, 
  status, 
  category,
  DATE(date) as post_date,
  created_at, 
  updated_at 
FROM blog_posts 
ORDER BY id DESC;

-- 7. CHECK FOR DATA VALIDATION ISSUES
SELECT '=== DATA VALIDATION CHECK ===' as status;
SELECT 
  id,
  title,
  CASE 
    WHEN title IS NULL OR title = '' THEN '❌ Missing Title'
    WHEN LENGTH(title) > 255 THEN '❌ Title Too Long'
    ELSE '✅ OK'
  END as title_status,
  CASE 
    WHEN main_description IS NULL OR main_description = '' THEN '❌ Missing Content'
    WHEN LENGTH(main_description) < 10 THEN '⚠️ Very Short Content'
    ELSE '✅ OK'
  END as content_status,
  CASE 
    WHEN slug IS NULL OR slug = '' THEN '❌ Missing Slug'
    WHEN slug NOT REGEXP '^[a-z0-9-]+$' THEN '⚠️ Invalid Slug Format'
    ELSE '✅ OK'
  END as slug_status,
  CASE 
    WHEN date IS NULL THEN '❌ Missing Date'
    WHEN date > CURDATE() THEN '⚠️ Future Date'
    ELSE '✅ OK'
  END as date_status
FROM blog_posts;

-- 8. CHECK FOR DUPLICATE SLUGS
SELECT '=== DUPLICATE SLUGS CHECK ===' as status;
SELECT slug, COUNT(*) as count 
FROM blog_posts 
GROUP BY slug 
HAVING count > 1;

-- 9. INSERT SAMPLE BLOG POSTS FOR TESTING
SELECT '=== INSERTING SAMPLE BLOG POSTS ===' as status;

-- Insert sample blog post 1
INSERT IGNORE INTO blog_posts (
  meta_title, 
  meta_description, 
  title, 
  main_description, 
  image, 
  image_alt, 
  date, 
  slug, 
  category, 
  status
) VALUES (
  'Spring Flowers Blog - Home Cleaning Tips',
  'Learn the best home cleaning tips and tricks from Spring Flowers professional cleaning services.',
  'Professional Home Cleaning Tips for 2024',
  '<h2>Introduction</h2><p>Welcome to our comprehensive guide on professional home cleaning tips. At Spring Flowers, we have years of experience in providing top-quality cleaning services.</p><h3>Key Cleaning Tips</h3><ul><li>Start with the most cluttered areas first</li><li>Use the right cleaning products for each surface</li><li>Clean from top to bottom</li><li>Don\'t forget to disinfect high-touch areas</li></ul><p>These tips will help you maintain a clean and healthy home environment.</p>',
  'cleaning-tips.jpg',
  'Professional cleaning tips image',
  '2024-01-15',
  'professional-home-cleaning-tips-2024',
  'Cleaning Tips',
  'published'
);

-- Insert sample blog post 2
INSERT IGNORE INTO blog_posts (
  meta_title, 
  meta_description, 
  title, 
  main_description, 
  image, 
  image_alt, 
  date, 
  slug, 
  category, 
  status
) VALUES (
  'Spring Flowers - Why Choose Professional Cleaning',
  'Discover the benefits of hiring professional cleaning services for your home or office.',
  'Why Choose Professional Cleaning Services?',
  '<h2>The Benefits of Professional Cleaning</h2><p>Professional cleaning services offer numerous advantages over DIY cleaning.</p><h3>Time Saving</h3><p>Save valuable time by letting professionals handle your cleaning needs.</p><h3>Better Results</h3><p>Professional cleaners have the right tools and expertise to deliver superior results.</p><h3>Health Benefits</h3><p>Regular professional cleaning helps maintain a healthier living environment.</p>',
  'professional-cleaning.jpg',
  'Professional cleaning services',
  '2024-01-10',
  'why-choose-professional-cleaning-services',
  'Services',
  'published'
);

-- Insert sample blog post 3 (draft)
INSERT IGNORE INTO blog_posts (
  meta_title, 
  meta_description, 
  title, 
  main_description, 
  image, 
  image_alt, 
  date, 
  slug, 
  category, 
  status
) VALUES (
  'Spring Flowers - Office Cleaning Guide',
  'Complete guide to office cleaning and maintenance for businesses.',
  'Complete Office Cleaning Guide',
  '<h2>Office Cleaning Best Practices</h2><p>Maintaining a clean office environment is crucial for productivity and employee health.</p><h3>Daily Cleaning Tasks</h3><ul><li>Empty trash bins</li><li>Wipe down desks and surfaces</li><li>Vacuum carpets</li><li>Clean restrooms</li></ul><h3>Weekly Cleaning Tasks</h3><ul><li>Deep clean floors</li><li>Sanitize all surfaces</li><li>Clean windows</li><li>Organize storage areas</li></ul>',
  'office-cleaning.jpg',
  'Office cleaning services',
  '2024-01-20',
  'complete-office-cleaning-guide',
  'Office Cleaning',
  'draft'
);

-- 10. TEST UPDATE FUNCTIONALITY
SELECT '=== TESTING UPDATE FUNCTIONALITY ===' as status;

-- Update the first blog post
UPDATE blog_posts SET 
  title = 'Updated: Professional Home Cleaning Tips for 2024',
  main_description = '<h2>Updated Introduction</h2><p>Welcome to our updated comprehensive guide on professional home cleaning tips. At Spring Flowers, we have years of experience in providing top-quality cleaning services.</p><h3>Updated Key Cleaning Tips</h3><ul><li>Start with the most cluttered areas first</li><li>Use eco-friendly cleaning products</li><li>Clean from top to bottom</li><li>Don\'t forget to disinfect high-touch areas</li><li>Use microfiber cloths for better results</li></ul><p>These updated tips will help you maintain a clean and healthy home environment in 2024.</p>',
  meta_title = 'Updated: Spring Flowers Blog - Home Cleaning Tips',
  updated_at = NOW()
WHERE slug = 'professional-home-cleaning-tips-2024';

-- 11. VERIFY UPDATE WAS SUCCESSFUL
SELECT '=== VERIFYING UPDATE ===' as status;
SELECT 
  id,
  title,
  LEFT(main_description, 100) as content_preview,
  updated_at
FROM blog_posts 
WHERE slug = 'professional-home-cleaning-tips-2024';

-- 12. FINAL STATUS CHECK
SELECT '=== FINAL STATUS ===' as status;
SELECT 
  COUNT(*) as total_posts,
  SUM(CASE WHEN status = 'published' THEN 1 ELSE 0 END) as published_posts,
  SUM(CASE WHEN status = 'draft' THEN 1 ELSE 0 END) as draft_posts,
  SUM(CASE WHEN status = 'archived' THEN 1 ELSE 0 END) as archived_posts
FROM blog_posts;

-- 13. SHOW ALL BLOG POSTS WITH DETAILS
SELECT '=== ALL BLOG POSTS ===' as status;
SELECT 
  id,
  title,
  slug,
  status,
  category,
  DATE(date) as post_date,
  LENGTH(main_description) as content_length,
  created_at,
  updated_at
FROM blog_posts 
ORDER BY id DESC;

-- 14. CHECK FOR ANY REMAINING ISSUES
SELECT '=== FINAL VALIDATION ===' as status;
SELECT 
  'Missing Titles' as issue_type,
  COUNT(*) as count
FROM blog_posts 
WHERE title IS NULL OR title = ''

UNION ALL

SELECT 
  'Missing Content' as issue_type,
  COUNT(*) as count
FROM blog_posts 
WHERE main_description IS NULL OR main_description = ''

UNION ALL

SELECT 
  'Missing Slugs' as issue_type,
  COUNT(*) as count
FROM blog_posts 
WHERE slug IS NULL OR slug = ''

UNION ALL

SELECT 
  'Duplicate Slugs' as issue_type,
  COUNT(*) as count
FROM (
  SELECT slug, COUNT(*) as cnt 
  FROM blog_posts 
  GROUP BY slug 
  HAVING cnt > 1
) as duplicates;

-- 15. SUCCESS MESSAGE
SELECT '=== SETUP COMPLETE ===' as status;
SELECT 'Blog system setup and testing completed successfully!' as message;
