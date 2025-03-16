<?php
require_once 'config/database.php';

class Auth {
    private $conn;
    private $max_attempts = 3;
    private $lockout_time = 180; // 3 minutes in seconds

    public function __construct() {
        $this->conn = connectDB();
    }

    public function register($firstName, $lastName, $email, $password) {
        // Validate input
        if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
            return ['success' => false, 'message' => 'All fields are required'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'message' => 'Invalid email format'];
        }

        // Check if email already exists
        $stmt = $this->conn->prepare("SELECT user_id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            return ['success' => false, 'message' => 'Email already registered'];
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $this->conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Registration successful'];
        }

        return ['success' => false, 'message' => 'Registration failed'];
    }

    public function login($email, $password) {
        // Check if account is locked
        $stmt = $this->conn->prepare("SELECT user_id, password, login_attempts, last_login_attempt, account_locked FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Invalid email or password'];
        }

        $user = $result->fetch_assoc();

        // Check if account is locked
        if ($user['account_locked']) {
            $lockout_ends = strtotime($user['last_login_attempt']) + $this->lockout_time;
            if (time() < $lockout_ends) {
                $remaining_time = $lockout_ends - time();
                return ['success' => false, 'message' => "Account is locked. Try again in {$remaining_time} seconds"];
            } else {
                // Reset lock if lockout period has passed
                $this->resetLoginAttempts($user['user_id']);
            }
        }

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Reset login attempts on successful login
            $this->resetLoginAttempts($user['user_id']);
            
            // Start session
            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            
            // Create session record
            $session_id = session_id();
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            
            $stmt = $this->conn->prepare("INSERT INTO user_sessions (session_id, user_id, ip_address, user_agent, last_activity) VALUES (?, ?, ?, ?, NOW())");
            $stmt->bind_param("siss", $session_id, $user['user_id'], $ip_address, $user_agent);
            $stmt->execute();

            return ['success' => true, 'message' => 'Login successful'];
        }

        // Increment login attempts
        $this->incrementLoginAttempts($user['user_id'], $user['login_attempts']);

        return ['success' => false, 'message' => 'Invalid email or password'];
    }

    private function incrementLoginAttempts($userId, $currentAttempts) {
        $newAttempts = $currentAttempts + 1;
        $locked = $newAttempts >= $this->max_attempts ? 1 : 0;

        $stmt = $this->conn->prepare("UPDATE users SET login_attempts = ?, account_locked = ?, last_login_attempt = NOW() WHERE user_id = ?");
        $stmt->bind_param("iii", $newAttempts, $locked, $userId);
        $stmt->execute();
    }

    private function resetLoginAttempts($userId) {
        $stmt = $this->conn->prepare("UPDATE users SET login_attempts = 0, account_locked = 0, last_login_attempt = NULL WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
    }

    public function logout() {
        session_start();
        
        if (isset($_SESSION['user_id'])) {
            // Remove session from database
            $session_id = session_id();
            $stmt = $this->conn->prepare("DELETE FROM user_sessions WHERE session_id = ?");
            $stmt->bind_param("s", $session_id);
            $stmt->execute();
            
            // Clear session
            session_unset();
            session_destroy();
            
            return ['success' => true, 'message' => 'Logout successful'];
        }
        
        return ['success' => false, 'message' => 'No active session'];
    }

    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['user_id']);
    }

    public function getCurrentUser() {
        if (!$this->isLoggedIn()) {
            return null;
        }

        $stmt = $this->conn->prepare("SELECT user_id, first_name, last_name, email, profile_image, role FROM users WHERE user_id = ?");
        $stmt->bind_param("i", $_SESSION['user_id']);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function requestPasswordReset($email) {
        $stmt = $this->conn->prepare("SELECT user_id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        
        if ($stmt->get_result()->num_rows === 0) {
            return ['success' => false, 'message' => 'Email not found'];
        }

        // Generate token
        $token = bin2hex(random_bytes(32));
        
        // Store token
        $stmt = $this->conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // In a real application, send email with reset link
        // For now, just return the token
        return ['success' => true, 'token' => $token];
    }

    public function resetPassword($email, $token, $newPassword) {
        $stmt = $this->conn->prepare("SELECT * FROM password_resets WHERE email = ? AND token = ? AND created_at > DATE_SUB(NOW(), INTERVAL 1 HOUR)");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();
        
        if ($stmt->get_result()->num_rows === 0) {
            return ['success' => false, 'message' => 'Invalid or expired reset token'];
        }

        // Update password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashedPassword, $email);
        
        if ($stmt->execute()) {
            // Remove used token
            $stmt = $this->conn->prepare("DELETE FROM password_resets WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            
            return ['success' => true, 'message' => 'Password reset successful'];
        }

        return ['success' => false, 'message' => 'Password reset failed'];
    }

    public function __destruct() {
        closeDB($this->conn);
    }
}
?> 