<?php
require_once 'Auth.php';

header('Content-Type: application/json');

try {
    $auth = new Auth();
    $result = $auth->logout();
    
    // Clear any additional session data or cookies if needed
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    
    echo json_encode($result);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Logout failed: ' . $e->getMessage()]);
}
?> 