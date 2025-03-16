<?php
require_once 'config/database.php';

function testDatabase() {
    echo "Testing Database Connection and Setup\n";
    echo "===================================\n\n";

    try {
        // Test database connection
        echo "1. Testing Database Connection...\n";
        $conn = connectDB();
        echo "   ✓ Database connection successful\n\n";

        // Create tables if they don't exist
        echo "2. Creating/Verifying Database Tables...\n";
        
        // Read and execute SQL from foodfusion.sql
        $sqlFile = __DIR__ . '/database/foodfusion.sql';
        if (!file_exists($sqlFile)) {
            throw new Exception("SQL file not found: foodfusion.sql");
        }

        $sql = file_get_contents($sqlFile);
        if ($sql === false) {
            throw new Exception("Could not read SQL file");
        }
        
        // Split SQL into individual statements
        $statements = array_filter(array_map('trim', explode(';', $sql)));
        
        foreach ($statements as $statement) {
            if (!empty($statement)) {
                if ($conn->query($statement) === TRUE) {
                    echo "   ✓ Successfully executed: " . substr($statement, 0, 50) . "...\n";
                } else {
                    echo "   ✗ Error executing: " . $conn->error . "\n";
                }
            }
        }
        
        // Verify tables exist
        echo "\n3. Verifying Required Tables...\n";
        $required_tables = [
            'users',
            'recipes',
            'comments',
            'likes',
            'bookmarks',
            'user_sessions',
            'password_resets',
            'achievements',
            'notifications'
        ];
        
        $result = $conn->query("SHOW TABLES");
        if ($result === false) {
            throw new Exception("Could not fetch tables: " . $conn->error);
        }

        $existing_tables = [];
        while ($row = $result->fetch_array()) {
            $existing_tables[] = $row[0];
        }
        
        $missing_tables = [];
        foreach ($required_tables as $table) {
            if (in_array($table, $existing_tables)) {
                echo "   ✓ Table '$table' exists\n";
            } else {
                echo "   ✗ Table '$table' is missing\n";
                $missing_tables[] = $table;
            }
        }
        
        closeDB($conn);

        if (empty($missing_tables)) {
            echo "\nDatabase setup completed successfully!\n";
        } else {
            throw new Exception("Some tables are missing: " . implode(", ", $missing_tables));
        }
        
    } catch (Exception $e) {
        echo "\nError: " . $e->getMessage() . "\n";
        echo "\nTroubleshooting steps:\n";
        echo "1. Make sure MySQL server is running\n";
        echo "2. Verify MySQL credentials in config/database.php\n";
        echo "3. Check if you have permissions to create databases\n";
        echo "4. Verify that the foodfusion.sql file exists in the database directory\n";
    }
}

// Run the test
testDatabase();
?> 