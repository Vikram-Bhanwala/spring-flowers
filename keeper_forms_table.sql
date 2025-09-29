-- SQL for keeper_forms table to store property booking data
-- This table stores all property booking form submissions

-- Drop table if exists (for fresh installation)
DROP TABLE IF EXISTS `keeper_forms`;

-- Create keeper_forms table
CREATE TABLE `keeper_forms` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  
  -- Property Details
  `num_rooms` INT DEFAULT NULL COMMENT 'Number of rooms in the property',
  `num_kitchens` INT DEFAULT NULL COMMENT 'Number of kitchens in the property', 
  `num_bathrooms` INT DEFAULT NULL COMMENT 'Number of bathrooms in the property',
  
  -- Customer Information
  `name` VARCHAR(255) NOT NULL COMMENT 'Customer full name',
  `phone` VARCHAR(50) NOT NULL COMMENT 'Customer phone number',
  `address` TEXT NOT NULL COMMENT 'Full property address',
  `city` VARCHAR(100) DEFAULT NULL COMMENT 'City name',
  `postal_code` VARCHAR(20) DEFAULT NULL COMMENT 'Postal/ZIP code',
  `town_area` VARCHAR(100) DEFAULT NULL COMMENT 'Town or area name',
  
  -- Service Plan Details
  `plan` ENUM('Daily', 'Weekly', 'Fortnightly', 'Monthly') DEFAULT NULL COMMENT 'Service frequency plan',
  `selected_date` DATE DEFAULT NULL COMMENT 'Selected start date for service',
  `selected_days` TEXT DEFAULT NULL COMMENT 'Selected days of week (comma-separated)',
  `timing` ENUM('Morning', 'Afternoon') DEFAULT NULL COMMENT 'Preferred time of day',
  
  -- Legacy fields (for backward compatibility)
  `date` DATE DEFAULT NULL COMMENT 'Legacy date field',
  
  -- Timestamps
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Record creation timestamp',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Record update timestamp',
  
  PRIMARY KEY (`id`),
  INDEX `idx_name` (`name`),
  INDEX `idx_phone` (`phone`),
  INDEX `idx_plan` (`plan`),
  INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Property booking form submissions';

-- Insert sample data for testing
INSERT INTO `keeper_forms` (
  `num_rooms`, `num_kitchens`, `num_bathrooms`, 
  `name`, `phone`, `address`, `city`, `postal_code`, `town_area`,
  `plan`, `selected_date`, `selected_days`, `timing`
) VALUES 
(
  3, 1, 2,
  'John Smith', '07123456789', '123 Main Street, Apartment 4B', 'Bristol', 'BS1 1AA', 'Bristol',
  'Weekly', '2024-02-01', 'monday,wednesday,friday', 'Morning'
),
(
  2, 1, 1,
  'Sarah Johnson', '07987654321', '456 Oak Avenue', 'Cheltenham', 'GL50 1BB', 'Cheltenham', 
  'Daily', '2024-02-05', '', 'Afternoon'
),
(
  4, 2, 3,
  'Michael Brown', '07555123456', '789 Pine Road, House 12', 'Bath', 'BA1 2CC', 'Bath',
  'Monthly', '2024-02-10', 'saturday', 'Morning'
);

-- Query to view all bookings
SELECT 
  id,
  name,
  phone,
  CONCAT(address, ', ', city, ' ', postal_code) as full_address,
  CONCAT(num_rooms, ' rooms, ', num_kitchens, ' kitchen(s), ', num_bathrooms, ' bathroom(s)') as property_details,
  plan,
  selected_date,
  selected_days,
  timing,
  created_at
FROM keeper_forms 
ORDER BY created_at DESC;

-- Query to view recent bookings (last 30 days)
SELECT 
  id,
  name,
  phone,
  city,
  plan,
  selected_date,
  timing,
  created_at
FROM keeper_forms 
WHERE created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
ORDER BY created_at DESC;

-- Query to count bookings by plan type
SELECT 
  plan,
  COUNT(*) as booking_count
FROM keeper_forms 
WHERE plan IS NOT NULL
GROUP BY plan
ORDER BY booking_count DESC;

-- Query to view bookings by city
SELECT 
  city,
  COUNT(*) as booking_count
FROM keeper_forms 
WHERE city IS NOT NULL
GROUP BY city
ORDER BY booking_count DESC;
