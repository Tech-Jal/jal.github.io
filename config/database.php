<?php
define('DB_HOST', '127.0.0.1'); // Using IP instead of 'localhost' to avoid socket connection issues
define('DB_USER', 'root');  // Using root temporarily for setup
define('DB_PASS', 'foodfusion123');  // Use the password you set during installation
define('DB_NAME', 'foodfusion');

// Create connection
function connectDB() {
    try {
        // First try to connect to MySQL server
        $conn = @new mysqli(DB_HOST, DB_USER, DB_PASS);
        
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error . 
                "\nPlease verify:\n" .
                "1. MySQL service is running\n" .
                "2. Credentials are correct (using root/foodfusion123)\n" .
                "3. MySQL server is accepting connections");
        }

        // Create database if it doesn't exist
        $sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME . " CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
        if (!$conn->query($sql)) {
            throw new Exception("Error creating database: " . $conn->error);
        }

        // Select the database
        if (!$conn->select_db(DB_NAME)) {
            throw new Exception("Error selecting database: " . $conn->error);
        }
        
        // Set charset to UTF-8
        $conn->set_charset("utf8mb4");
        
        return $conn;
    } catch (Exception $e) {
        throw new Exception("Database connection error: " . $e->getMessage());
    }
}

// Close database connection
function closeDB($conn) {
    if ($conn && $conn instanceof mysqli) {
        $conn->close();
    }
}
?> 