-- SQL queries to check if property booking data is being saved

-- 1. Check if keeper_forms table exists
SHOW TABLES LIKE 'keeper_forms';

-- 2. View table structure
DESCRIBE keeper_forms;

-- 3. Count total records
SELECT COUNT(*) as total_bookings FROM keeper_forms;

-- 4. View all recent bookings (last 10)
SELECT 
  id,
  name,
  phone,
  city,
  plan,
  selected_date,
  selected_days,
  timing,
  created_at
FROM keeper_forms 
ORDER BY created_at DESC 
LIMIT 10;

-- 5. View today's bookings
SELECT 
  id,
  name,
  phone,
  plan,
  selected_date,
  timing,
  created_at
FROM keeper_forms 
WHERE DATE(created_at) = CURDATE()
ORDER BY created_at DESC;

-- 6. Check for any incomplete bookings (missing required fields)
SELECT 
  id,
  name,
  phone,
  plan,
  selected_date,
  timing,
  created_at
FROM keeper_forms 
WHERE name IS NULL 
   OR phone IS NULL 
   OR address IS NULL
   OR (plan IS NULL AND created_at >= DATE_SUB(NOW(), INTERVAL 1 DAY))
ORDER BY created_at DESC;

-- 7. View booking details for a specific customer (replace 'Customer Name' with actual name)
-- SELECT * FROM keeper_forms WHERE name LIKE '%Customer Name%';

-- 8. View bookings by service plan
SELECT 
  plan,
  COUNT(*) as count,
  MIN(created_at) as first_booking,
  MAX(created_at) as latest_booking
FROM keeper_forms 
WHERE plan IS NOT NULL
GROUP BY plan
ORDER BY count DESC;
