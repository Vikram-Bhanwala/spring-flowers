-- SQL for registration table to store job seeker registration data
-- This table stores all registration form submissions

-- Drop table if exists (for fresh installation)
DROP TABLE IF EXISTS `registrations`;

-- Create registrations table
CREATE TABLE `registrations` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  
  -- Job Search Details
  `job_type` ENUM('House Keeper', 'Companion', 'Cook', 'Groundman', 'Nanny', 'Security', 'Head House Keeper') NOT NULL COMMENT 'Type of job being sought',
  
  -- Personal Information
  `name` VARCHAR(255) NOT NULL COMMENT 'Full name of the applicant',
  `phone` VARCHAR(50) NOT NULL COMMENT 'Phone number',
  `email` VARCHAR(255) NOT NULL COMMENT 'Email address',
  `country_of_living` VARCHAR(100) NOT NULL COMMENT 'Country where applicant currently lives',
  `county` VARCHAR(100) NOT NULL COMMENT 'County/State where applicant lives',
  
  -- Work Preferences
  `type_of_work` ENUM('live_in_work', 'live_out_work', 'flexible_work') NOT NULL COMMENT 'Type of work preference',
  `availability_type` ENUM('full_time_availability', 'part_time_availability', 'flexible_availability') NOT NULL COMMENT 'Availability preference',
  `start_date` ENUM('asap_start', 'flexible_start') NOT NULL COMMENT 'Preferred start date',
  
  -- Additional Information
  `message` TEXT DEFAULT NULL COMMENT 'Additional message from applicant',
  `cv_filename` VARCHAR(255) DEFAULT NULL COMMENT 'Uploaded CV filename',
  `cv_path` VARCHAR(500) DEFAULT NULL COMMENT 'Path to uploaded CV file',
  
  -- Status and Timestamps
  `status` ENUM('pending', 'reviewed', 'contacted', 'hired', 'rejected') DEFAULT 'pending' COMMENT 'Application status',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Registration timestamp',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last update timestamp',
  
  PRIMARY KEY (`id`),
  INDEX `idx_email` (`email`),
  INDEX `idx_phone` (`phone`),
  INDEX `idx_job_type` (`job_type`),
  INDEX `idx_status` (`status`),
  INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Job seeker registration submissions';

-- Insert sample data for testing
INSERT INTO `registrations` (
  `job_type`, `name`, `phone`, `email`, `country_of_living`, `county`,
  `type_of_work`, `availability_type`, `start_date`, `message`
) VALUES 
(
  'House Keeper', 'Sarah Johnson', '07123456789', 'sarah.johnson@email.com', 'United Kingdom', 'Gloucestershire',
  'live_in_work', 'full_time_availability', 'asap_start', 'I am hardworking, reliable, and take pride in keeping spaces clean and organized.'
),
(
  'Companion', 'Michael Brown', '07987654321', 'michael.brown@email.com', 'United Kingdom', 'Somerset',
  'live_out_work', 'part_time_availability', 'flexible_start', 'Experienced companion with excellent communication skills.'
),
(
  'Cook', 'Emma Wilson', '07555123456', 'emma.wilson@email.com', 'United Kingdom', 'Wiltshire',
  'flexible_work', 'flexible_availability', 'asap_start', 'Professional chef with 10 years of experience in fine dining.'
);

-- Query to view all registrations
SELECT 
  id,
  name,
  phone,
  email,
  job_type,
  country_of_living,
  county,
  type_of_work,
  availability_type,
  start_date,
  status,
  created_at
FROM registrations 
ORDER BY created_at DESC;

-- Query to view recent registrations (last 30 days)
SELECT 
  id,
  name,
  phone,
  email,
  job_type,
  status,
  created_at
FROM registrations 
WHERE created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
ORDER BY created_at DESC;

-- Query to count registrations by job type
SELECT 
  job_type,
  COUNT(*) as registration_count
FROM registrations 
GROUP BY job_type
ORDER BY registration_count DESC;

-- Query to view registrations by status
SELECT 
  status,
  COUNT(*) as count,
  MIN(created_at) as first_registration,
  MAX(created_at) as latest_registration
FROM registrations 
GROUP BY status
ORDER BY count DESC;
