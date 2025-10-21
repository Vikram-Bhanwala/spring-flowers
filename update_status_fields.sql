-- SQL queries to update status fields with new values: new, won, lost
-- Run these queries in your database to update the status functionality

-- Update contact table status field
ALTER TABLE `contact` 
MODIFY COLUMN `status` ENUM('new', 'won', 'lost') DEFAULT 'new' COMMENT 'Lead status';

-- Update keeper_forms table status field  
ALTER TABLE `keeper_forms` 
MODIFY COLUMN `status` ENUM('new', 'won', 'lost') DEFAULT 'new' COMMENT 'Lead status';

-- Update subscriptions table status field
ALTER TABLE `subscriptions` 
MODIFY COLUMN `status` ENUM('new', 'won', 'lost') DEFAULT 'new' COMMENT 'Lead status';

-- Update registrations table status field
ALTER TABLE `registrations` 
MODIFY COLUMN `status` ENUM('new', 'won', 'lost') DEFAULT 'new' COMMENT 'Lead status';

-- Set default status for existing records
UPDATE `contact` SET `status` = 'new' WHERE `status` IS NULL OR `status` NOT IN ('new', 'won', 'lost');
UPDATE `keeper_forms` SET `status` = 'new' WHERE `status` IS NULL OR `status` NOT IN ('new', 'won', 'lost');
UPDATE `subscriptions` SET `status` = 'new' WHERE `status` IS NULL OR `status` NOT IN ('new', 'won', 'lost');
UPDATE `registrations` SET `status` = 'new' WHERE `status` IS NULL OR `status` NOT IN ('new', 'won', 'lost');
