-- Complete SQL to fix admin password issue

-- Step 1: Check current admin record
SELECT * FROM `admins` WHERE email = 'admin@springflowers.com';

-- Step 2: Delete existing admin (if any)
DELETE FROM `admins` WHERE email = 'admin@springflowers.com';

-- Step 3: Insert new admin with plain password (model will auto-hash it)
INSERT INTO `admins` (`email`, `password`, `name`, `created_at`, `updated_at`) VALUES 
('admin@springflowers.com', 'admin123', 'Admin User', NOW(), NOW());

-- Step 4: Verify the record was created
SELECT id, email, name, created_at FROM `admins` WHERE email = 'admin@springflowers.com';

-- Alternative: If you want to manually hash the password
-- DELETE FROM `admins` WHERE email = 'admin@springflowers.com';
-- INSERT INTO `admins` (`email`, `password`, `name`, `created_at`, `updated_at`) VALUES 
-- ('admin@springflowers.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin User', NOW(), NOW());

-- Test credentials:
-- Email: admin@springflowers.com
-- Password: admin123
