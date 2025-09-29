-- SQL queries to check registration data
-- This file contains queries to view and analyze registration submissions

-- View all registrations
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
    cv_filename,
    created_at
FROM registrations 
ORDER BY created_at DESC;

-- View recent registrations (last 30 days)
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

-- Count registrations by job type
SELECT 
    job_type,
    COUNT(*) as registration_count
FROM registrations 
GROUP BY job_type
ORDER BY registration_count DESC;

-- Count registrations by status
SELECT 
    status,
    COUNT(*) as count,
    MIN(created_at) as first_registration,
    MAX(created_at) as latest_registration
FROM registrations 
GROUP BY status
ORDER BY count DESC;

-- Count registrations by work type preference
SELECT 
    type_of_work,
    COUNT(*) as count
FROM registrations 
GROUP BY type_of_work
ORDER BY count DESC;

-- Count registrations by availability
SELECT 
    availability_type,
    COUNT(*) as count
FROM registrations 
GROUP BY availability_type
ORDER BY count DESC;

-- Count registrations by start date preference
SELECT 
    start_date,
    COUNT(*) as count
FROM registrations 
GROUP BY start_date
ORDER BY count DESC;

-- View registrations with CV uploads
SELECT 
    id,
    name,
    email,
    job_type,
    cv_filename,
    cv_path,
    created_at
FROM registrations 
WHERE cv_filename IS NOT NULL
ORDER BY created_at DESC;

-- View registrations by country
SELECT 
    country_of_living,
    COUNT(*) as count
FROM registrations 
GROUP BY country_of_living
ORDER BY count DESC;

-- View registrations by county
SELECT 
    county,
    COUNT(*) as count
FROM registrations 
GROUP BY county
ORDER BY count DESC;

-- Daily registration count for the last 30 days
SELECT 
    DATE(created_at) as registration_date,
    COUNT(*) as daily_count
FROM registrations 
WHERE created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
GROUP BY DATE(created_at)
ORDER BY registration_date DESC;

-- Monthly registration count
SELECT 
    YEAR(created_at) as year,
    MONTH(created_at) as month,
    COUNT(*) as monthly_count
FROM registrations 
GROUP BY YEAR(created_at), MONTH(created_at)
ORDER BY year DESC, month DESC;

-- View pending registrations (need review)
SELECT 
    id,
    name,
    phone,
    email,
    job_type,
    type_of_work,
    availability_type,
    start_date,
    message,
    cv_filename,
    created_at
FROM registrations 
WHERE status = 'pending'
ORDER BY created_at ASC;

-- View registrations with messages
SELECT 
    id,
    name,
    email,
    job_type,
    message,
    created_at
FROM registrations 
WHERE message IS NOT NULL AND message != ''
ORDER BY created_at DESC;

-- Search registrations by name or email
-- Replace 'search_term' with the actual search term
SELECT 
    id,
    name,
    phone,
    email,
    job_type,
    status,
    created_at
FROM registrations 
WHERE name LIKE '%search_term%' 
   OR email LIKE '%search_term%'
ORDER BY created_at DESC;

-- View registration statistics summary
SELECT 
    'Total Registrations' as metric,
    COUNT(*) as value
FROM registrations
UNION ALL
SELECT 
    'Pending Reviews' as metric,
    COUNT(*) as value
FROM registrations 
WHERE status = 'pending'
UNION ALL
SELECT 
    'With CV Uploads' as metric,
    COUNT(*) as value
FROM registrations 
WHERE cv_filename IS NOT NULL
UNION ALL
SELECT 
    'This Month' as metric,
    COUNT(*) as value
FROM registrations 
WHERE created_at >= DATE_FORMAT(NOW(), '%Y-%m-01')
UNION ALL
SELECT 
    'This Week' as metric,
    COUNT(*) as value
FROM registrations 
WHERE created_at >= DATE_SUB(NOW(), INTERVAL WEEKDAY(NOW()) DAY);
