<?php
require_once 'config/database.php';

class SessionManager {
    private $conn;
    private $session_lifetime = 3600; // 1 hour in seconds
    private $cleanup_probability = 10; // Cleanup will run with 1/10 probability
    
    public function __construct() {
        $this->conn = connectDB();
        
        // Configure session settings
        ini_set('session.use_strict_mode', 1);
        ini_set('session.use_only_cookies', 1);
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_secure', 1);
        ini_set('session.cookie_samesite', 'Strict');
        
        // Random cleanup of old sessions
        if (mt_rand(1, $this->cleanup_probability) === 1) {
            $this->cleanupOldSessions();
        }
    }
    
    public function startSession() {
        session_start();
        
        if (!$this->isValidSession()) {
            $this->destroySession();
            return false;
        }
        
        $this->updateSessionActivity();
        return true;
    }
    
    private function isValidSession() {
        if (!isset($_SESSION['user_id'])) {
            return false;
        }
        
        // Check if session exists in database
        $session_id = session_id();
        $stmt = $this->conn->prepare("SELECT last_activity FROM user_sessions WHERE session_id = ? AND user_id = ?");
        $stmt->bind_param("si", $session_id, $_SESSION['user_id']);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            return false;
        }
        
        $session = $result->fetch_assoc();
        
        // Check if session has expired
        if (strtotime($session['last_activity']) + $this->session_lifetime < time()) {
            return false;
        }
        
        return true;
    }
    
    private function updateSessionActivity() {
        $session_id = session_id();
        $stmt = $this->conn->prepare("UPDATE user_sessions SET last_activity = NOW() WHERE session_id = ?");
        $stmt->bind_param("s", $session_id);
        $stmt->execute();
        
        $_SESSION['last_activity'] = time();
    }
    
    private function cleanupOldSessions() {
        $stmt = $this->conn->prepare("DELETE FROM user_sessions WHERE last_activity < DATE_SUB(NOW(), INTERVAL ? SECOND)");
        $stmt->bind_param("i", $this->session_lifetime);
        $stmt->execute();
    }
    
    public function regenerateSession() {
        $old_session_id = session_id();
        session_regenerate_id(true);
        $new_session_id = session_id();
        
        // Update session ID in database
        $stmt = $this->conn->prepare("UPDATE user_sessions SET session_id = ? WHERE session_id = ?");
        $stmt->bind_param("ss", $new_session_id, $old_session_id);
        $stmt->execute();
    }
    
    public function destroySession() {
        $session_id = session_id();
        
        // Remove session from database
        $stmt = $this->conn->prepare("DELETE FROM user_sessions WHERE session_id = ?");
        $stmt->bind_param("s", $session_id);
        $stmt->execute();
        
        // Clear session data
        session_unset();
        session_destroy();
        
        // Clear session cookie
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }
    }
    
    public function __destruct() {
        closeDB($this->conn);
    }
}
?> 