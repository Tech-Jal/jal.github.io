<?php
require_once 'Auth.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$action = $_POST['action'] ?? '';

try {
    $auth = new Auth();
    
    switch ($action) {
        case 'request':
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if (empty($email)) {
                echo json_encode(['success' => false, 'message' => 'Email is required']);
                exit;
            }
            
            $result = $auth->requestPasswordReset($email);
            // In production, you would send the reset token via email
            // For now, we'll return it in the response
            echo json_encode($result);
            break;
            
        case 'reset':
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $token = $_POST['token'] ?? '';
            $newPassword = $_POST['newPassword'] ?? '';
            
            if (empty($email) || empty($token) || empty($newPassword)) {
                echo json_encode(['success' => false, 'message' => 'Email, token, and new password are required']);
                exit;
            }
            
            // Validate password strength
            if (strlen($newPassword) < 8) {
                echo json_encode(['success' => false, 'message' => 'Password must be at least 8 characters long']);
                exit;
            }
            
            if (!preg_match('/[A-Z]/', $newPassword) || !preg_match('/[a-z]/', $newPassword) || !preg_match('/[0-9]/', $newPassword)) {
                echo json_encode(['success' => false, 'message' => 'Password must contain at least one uppercase letter, one lowercase letter, and one number']);
                exit;
            }
            
            $result = $auth->resetPassword($email, $token, $newPassword);
            echo json_encode($result);
            break;
            
        default:
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
            break;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Password reset failed: ' . $e->getMessage()]);
}
?> 