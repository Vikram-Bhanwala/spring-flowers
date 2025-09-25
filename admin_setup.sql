-- Create admins table
CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(191) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert admin with hashed password (password: admin123)
-- The password hash below is for 'admin123'
INSERT INTO `admins` (`email`, `password`, `name`) VALUES 
('admin@springflowers.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin User')
ON DUPLICATE KEY UPDATE 
`password` = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
`name` = 'Admin User',
`updated_at` = CURRENT_TIMESTAMP;

-- Alternative: Insert with plain password (will be auto-hashed by the model)
-- DELETE FROM `admins` WHERE email = 'admin@springflowers.com';
-- INSERT INTO `admins` (`email`, `password`, `name`) VALUES 
-- ('admin@springflowers.com', 'admin123', 'Admin User');
