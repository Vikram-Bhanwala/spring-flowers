<?php
// Simple script to create an admin user with hashed password
// Run this once: php create_admin.php

// Database connection (adjust these settings to match your config)
$host = '127.0.0.1';
$dbname = 'spring'; // Change this to your actual database name
$username = 'root';    // Change this to your actual username
$password = '';    // Change this to your actual password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Admin credentials
    $adminEmail = 'admin@springflowers.com';
    $adminPassword = 'admin123';
    $adminName = 'Admin User';
    
    // Hash the password
    $hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);
    
    // Check if admin already exists
    $stmt = $pdo->prepare("SELECT id FROM admins WHERE email = ?");
    $stmt->execute([$adminEmail]);
    
    if ($stmt->rowCount() > 0) {
        // Update existing admin
        $stmt = $pdo->prepare("UPDATE admins SET password = ?, name = ?, updated_at = NOW() WHERE email = ?");
        $stmt->execute([$hashedPassword, $adminName, $adminEmail]);
        echo "Admin account updated successfully!\n";
    } else {
        // Insert new admin
        $stmt = $pdo->prepare("INSERT INTO admins (email, password, name, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
        $stmt->execute([$adminEmail, $hashedPassword, $adminName]);
        echo "Admin account created successfully!\n";
    }
    
    echo "Email: $adminEmail\n";
    echo "Password: $adminPassword\n";
    echo "Hashed Password: $hashedPassword\n";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Please update the database connection settings in this file.\n";
}
?>
