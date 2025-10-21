-- Quick diagnostic queries for blog update issues

-- 1. Check if blog_posts table exists
SHOW TABLES LIKE 'blog_posts';

-- 2. Check table structure
DESCRIBE blog_posts;

-- 3. Check if there are any blog posts
SELECT COUNT(*) as total_posts FROM blog_posts;

-- 4. Check recent blog posts
SELECT id, title, slug, status, created_at, updated_at 
FROM blog_posts 
ORDER BY id DESC 
LIMIT 5;

-- 5. Check for any validation issues
SELECT 
  id,
  title,
  CASE 
    WHEN title IS NULL OR title = '' THEN 'Missing Title'
    WHEN LENGTH(title) > 255 THEN 'Title Too Long'
    ELSE 'OK'
  END as title_status,
  CASE 
    WHEN main_description IS NULL OR main_description = '' THEN 'Missing Content'
    ELSE 'OK'
  END as content_status,
  CASE 
    WHEN slug IS NULL OR slug = '' THEN 'Missing Slug'
    ELSE 'OK'
  END as slug_status
FROM blog_posts;

-- 6. Check for duplicate slugs
SELECT slug, COUNT(*) as count 
FROM blog_posts 
GROUP BY slug 
HAVING count > 1;

-- 7. Check database connection and permissions
SELECT USER(), DATABASE(), VERSION();
