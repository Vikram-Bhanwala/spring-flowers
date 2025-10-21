-- Check if blog_posts table exists and its structure
DESCRIBE blog_posts;

-- Check all blog posts
SELECT * FROM blog_posts ORDER BY id DESC;

-- Check if there are any blog posts
SELECT COUNT(*) as total_posts FROM blog_posts;
