<?php
require_once 'includes/Auth.php';

header('Content-Type: text/plain');

function runTests() {
    echo "Starting Authentication System Tests\n";
    echo "===================================\n\n";

    $auth = new Auth();
    
    // Test 1: Registration
    echo "Test 1: User Registration\n";
    echo "-------------------------\n";
    $result = $auth->register("John", "Doe", "john.doe@example.com", "Test123Password");
    echo "Registration Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
    echo "Message: " . $result['message'] . "\n\n";

    // Test 2: Duplicate Registration
    echo "Test 2: Duplicate Registration\n";
    echo "---------------------------\n";
    $result = $auth->register("John", "Doe", "john.doe@example.com", "Test123Password");
    echo "Duplicate Registration Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
    echo "Message: " . $result['message'] . "\n\n";

    // Test 3: Login with correct credentials
    echo "Test 3: Login (Correct Credentials)\n";
    echo "--------------------------------\n";
    $result = $auth->login("john.doe@example.com", "Test123Password");
    echo "Login Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
    echo "Message: " . $result['message'] . "\n\n";

    // Test 4: Login with incorrect password
    echo "Test 4: Login (Incorrect Password)\n";
    echo "--------------------------------\n";
    $result = $auth->login("john.doe@example.com", "WrongPassword");
    echo "Login Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
    echo "Message: " . $result['message'] . "\n\n";

    // Test 5: Password Reset Request
    echo "Test 5: Password Reset Request\n";
    echo "----------------------------\n";
    $result = $auth->requestPasswordReset("john.doe@example.com");
    echo "Reset Request Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
    echo "Message: " . $result['message'] . "\n";
    if (isset($result['token'])) {
        echo "Reset Token: " . $result['token'] . "\n\n";
        
        // Test 6: Password Reset
        echo "Test 6: Password Reset\n";
        echo "--------------------\n";
        $result = $auth->resetPassword("john.doe@example.com", $result['token'], "NewTest123Pass");
        echo "Reset Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
        echo "Message: " . $result['message'] . "\n\n";

        // Test 7: Login with new password
        echo "Test 7: Login with New Password\n";
        echo "----------------------------\n";
        $result = $auth->login("john.doe@example.com", "NewTest123Pass");
        echo "Login Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
        echo "Message: " . $result['message'] . "\n\n";
    }

    // Test 8: Logout
    echo "Test 8: Logout\n";
    echo "-------------\n";
    $result = $auth->logout();
    echo "Logout Result: " . ($result['success'] ? "Success" : "Failed") . "\n";
    echo "Message: " . $result['message'] . "\n\n";

    echo "Tests Completed\n";
    echo "==============\n";
}

// Run the tests
try {
    runTests();
} catch (Exception $e) {
    echo "Error occurred during testing: " . $e->getMessage() . "\n";
}
?>