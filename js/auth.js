// Authentication Module
const Auth = {
    // User Registration
    register: async function(firstName, lastName, email, password) {
        try {
            const formData = new FormData();
            formData.append('firstName', firstName);
            formData.append('lastName', lastName);
            formData.append('email', email);
            formData.append('password', password);

            const response = await fetch('/includes/register_handler.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            
            if (result.success) {
                // Show success message and redirect to login
                this.showMessage('success', 'Registration successful! Please login.');
                setTimeout(() => window.location.href = '/login.html', 2000);
            } else {
                this.showMessage('error', result.message);
            }
            
            return result;
        } catch (error) {
            this.showMessage('error', 'An error occurred during registration.');
            console.error('Registration error:', error);
        }
    },

    // User Login
    login: async function(email, password) {
        try {
            const formData = new FormData();
            formData.append('email', email);
            formData.append('password', password);

            const response = await fetch('/includes/login_handler.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            
            if (result.success) {
                // Show success message and redirect to dashboard
                this.showMessage('success', 'Login successful!');
                setTimeout(() => window.location.href = '/dashboard.html', 1000);
            } else {
                this.showMessage('error', result.message);
            }
            
            return result;
        } catch (error) {
            this.showMessage('error', 'An error occurred during login.');
            console.error('Login error:', error);
        }
    },

    // User Logout
    logout: async function() {
        try {
            const response = await fetch('/includes/logout_handler.php', {
                method: 'POST'
            });

            const result = await response.json();
            
            if (result.success) {
                // Show success message and redirect to home
                this.showMessage('success', 'Logout successful!');
                setTimeout(() => window.location.href = '/', 1000);
            } else {
                this.showMessage('error', result.message);
            }
        } catch (error) {
            this.showMessage('error', 'An error occurred during logout.');
            console.error('Logout error:', error);
        }
    },

    // Password Reset Request
    requestPasswordReset: async function(email) {
        try {
            const formData = new FormData();
            formData.append('action', 'request');
            formData.append('email', email);

            const response = await fetch('/includes/password_reset_handler.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            
            if (result.success) {
                this.showMessage('success', 'Password reset instructions have been sent to your email.');
            } else {
                this.showMessage('error', result.message);
            }
            
            return result;
        } catch (error) {
            this.showMessage('error', 'An error occurred while requesting password reset.');
            console.error('Password reset request error:', error);
        }
    },

    // Reset Password
    resetPassword: async function(email, token, newPassword) {
        try {
            const formData = new FormData();
            formData.append('action', 'reset');
            formData.append('email', email);
            formData.append('token', token);
            formData.append('newPassword', newPassword);

            const response = await fetch('/includes/password_reset_handler.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            
            if (result.success) {
                this.showMessage('success', 'Password has been reset successfully!');
                setTimeout(() => window.location.href = '/login.html', 2000);
            } else {
                this.showMessage('error', result.message);
            }
            
            return result;
        } catch (error) {
            this.showMessage('error', 'An error occurred while resetting password.');
            console.error('Password reset error:', error);
        }
    },

    // Form Validation
    validatePassword: function(password) {
        const minLength = 8;
        const hasUpperCase = /[A-Z]/.test(password);
        const hasLowerCase = /[a-z]/.test(password);
        const hasNumbers = /\d/.test(password);

        return {
            isValid: password.length >= minLength && hasUpperCase && hasLowerCase && hasNumbers,
            errors: [
                ...(password.length < minLength ? ['Password must be at least 8 characters long'] : []),
                ...(!hasUpperCase ? ['Password must contain at least one uppercase letter'] : []),
                ...(!hasLowerCase ? ['Password must contain at least one lowercase letter'] : []),
                ...(!hasNumbers ? ['Password must contain at least one number'] : [])
            ]
        };
    },

    validateEmail: function(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    },

    // UI Helpers
    showMessage: function(type, message) {
        // Check if message container exists, if not create it
        let messageContainer = document.getElementById('message-container');
        if (!messageContainer) {
            messageContainer = document.createElement('div');
            messageContainer.id = 'message-container';
            messageContainer.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 1000;
                max-width: 300px;
            `;
            document.body.appendChild(messageContainer);
        }

        // Create message element
        const messageElement = document.createElement('div');
        messageElement.className = `alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
        messageElement.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        // Add message to container
        messageContainer.appendChild(messageElement);

        // Remove message after 5 seconds
        setTimeout(() => {
            messageElement.remove();
        }, 5000);
    }
};

// Event Handlers
document.addEventListener('DOMContentLoaded', function() {
    // Registration Form Handler
    const registrationForm = document.getElementById('registration-form');
    if (registrationForm) {
        registrationForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const firstName = this.querySelector('[name="firstName"]').value;
            const lastName = this.querySelector('[name="lastName"]').value;
            const email = this.querySelector('[name="email"]').value;
            const password = this.querySelector('[name="password"]').value;
            
            // Validate input
            if (!Auth.validateEmail(email)) {
                Auth.showMessage('error', 'Please enter a valid email address');
                return;
            }
            
            const passwordValidation = Auth.validatePassword(password);
            if (!passwordValidation.isValid) {
                Auth.showMessage('error', passwordValidation.errors.join('\n'));
                return;
            }
            
            await Auth.register(firstName, lastName, email, password);
        });
    }

    // Login Form Handler
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const email = this.querySelector('[name="email"]').value;
            const password = this.querySelector('[name="password"]').value;
            
            if (!Auth.validateEmail(email)) {
                Auth.showMessage('error', 'Please enter a valid email address');
                return;
            }
            
            await Auth.login(email, password);
        });
    }

    // Password Reset Request Form Handler
    const resetRequestForm = document.getElementById('reset-request-form');
    if (resetRequestForm) {
        resetRequestForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const email = this.querySelector('[name="email"]').value;
            
            if (!Auth.validateEmail(email)) {
                Auth.showMessage('error', 'Please enter a valid email address');
                return;
            }
            
            await Auth.requestPasswordReset(email);
        });
    }

    // Password Reset Form Handler
    const resetPasswordForm = document.getElementById('reset-password-form');
    if (resetPasswordForm) {
        resetPasswordForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const email = this.querySelector('[name="email"]').value;
            const token = this.querySelector('[name="token"]').value;
            const newPassword = this.querySelector('[name="newPassword"]').value;
            
            if (!Auth.validateEmail(email)) {
                Auth.showMessage('error', 'Please enter a valid email address');
                return;
            }
            
            const passwordValidation = Auth.validatePassword(newPassword);
            if (!passwordValidation.isValid) {
                Auth.showMessage('error', passwordValidation.errors.join('\n'));
                return;
            }
            
            await Auth.resetPassword(email, token, newPassword);
        });
    }

    // Logout Button Handler
    const logoutButton = document.getElementById('logout-button');
    if (logoutButton) {
        logoutButton.addEventListener('click', async function(e) {
            e.preventDefault();
            await Auth.logout();
        });
    }
}); 