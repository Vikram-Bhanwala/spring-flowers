-- Test blog update functionality

-- 1. Insert a test blog post
INSERT INTO blog_posts (
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
  'Test Meta Title',
  'Test Meta Description',
  'Test Blog Post',
  '<p>This is a test blog post content.</p>',
  'test-image.jpg',
  'Test Image Alt',
  '2024-01-15',
  'test-blog-post',
  'Technology',
  'draft'
);

-- 2. Check the inserted post
SELECT * FROM blog_posts WHERE slug = 'test-blog-post';

-- 3. Test update the blog post
UPDATE blog_posts SET 
  title = 'Updated Test Blog Post',
  main_description = '<p>This is the updated content of the test blog post.</p><p>It now has more content.</p>',
  meta_title = 'Updated Test Meta Title',
  updated_at = NOW()
WHERE slug = 'test-blog-post';

-- 4. Verify the update
SELECT * FROM blog_posts WHERE slug = 'test-blog-post';

-- 5. Clean up test data (uncomment to remove test post)
-- DELETE FROM blog_posts WHERE slug = 'test-blog-post';
