-- SQL queries to add status fields to lead management tables
-- Run these queries in your database to add the status functionality

-- Add status field to contact table
ALTER TABLE `contact` 
ADD COLUMN `status` ENUM('open', 'started', 'done', 'closed') DEFAULT 'open' COMMENT 'Lead status';

-- Add status field to keeper_forms table  
ALTER TABLE `keeper_forms` 
ADD COLUMN `status` ENUM('open', 'started', 'done', 'closed') DEFAULT 'open' COMMENT 'Lead status';

-- Add status field to subscriptions table
ALTER TABLE `subscriptions` 
ADD COLUMN `status` ENUM('open', 'started', 'done', 'closed') DEFAULT 'open' COMMENT 'Lead status';

-- Update existing registrations table to use new status values (optional)
-- This will map existing statuses to new ones
UPDATE `registrations` SET `status` = 'open' WHERE `status` = 'pending';
UPDATE `registrations` SET `status` = 'started' WHERE `status` = 'reviewed';
UPDATE `registrations` SET `status` = 'done' WHERE `status` = 'hired';
UPDATE `registrations` SET `status` = 'closed' WHERE `status` = 'rejected';

-- Modify registrations table to use new status values
ALTER TABLE `registrations` 
MODIFY COLUMN `status` ENUM('open', 'started', 'done', 'closed') DEFAULT 'open' COMMENT 'Lead status';

-- Add indexes for better performance
ALTER TABLE `contact` ADD INDEX `idx_status` (`status`);
ALTER TABLE `keeper_forms` ADD INDEX `idx_status` (`status`);
ALTER TABLE `subscriptions` ADD INDEX `idx_status` (`status`);
