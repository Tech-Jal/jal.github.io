<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FoodFusion</title>
    <link rel="stylesheet" href="bstp\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #e67e22;
            --secondary-color: #2c3e50;
            --accent-color: #f39c12;
            --light-bg: #f8f9fa;
            --dark-bg: #2c3e50;
        }

         /* Navigation Styles */
         .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                        url('https://images.unsplash.com/photo-1556911220-e15b29be8c8f?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .contact-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .contact-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
        .faq-card {
            border: none;
            border-radius: 15px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .faq-card .card-header {
            background-color: white;
            border: none;
            padding: 1rem 1.25rem;
            cursor: pointer;
        }
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .social-links a {
            color: #333;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #0d6efd;
        }
        .office-image {
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 1rem;
        }
        .team-support {
            background: #f8f9fa;
            padding: 40px 0;
            margin-top: 40px;
        }
        .support-member {
            text-align: center;
            margin-bottom: 20px;
        }
        .support-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        /* Footer */
        .footer-dark {
            background-color: var(--dark-bg);
            color: white;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            transition: background 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-egg-fried me-2"></i>FoodFusion
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recipe.html">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cookbook.html">Cookbook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.html">Learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-outline-primary me-2">Login</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinModal">Join Us</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Get in Touch</h1>
            <p class="lead">We'd love to hear from you! Share your thoughts, questions, or recipe ideas.</p>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card contact-card text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-phone contact-icon"></i>
                            <h4>Call Us</h4>
                            <p class="text-muted">Mon-Fri, 9am-6pm</p>
                            <p class="mb-0">+1 (555) 123-4567</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card contact-card text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-envelope contact-icon"></i>
                            <h4>Email Us</h4>
                            <p class="text-muted">24/7 Support</p>
                            <p class="mb-0">support@foodfusion.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card contact-card text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            <h4>Visit Us</h4>
                            <p class="text-muted">Our Office</p>
                            <p class="mb-0">123 Culinary Street, Foodie City</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h2 class="mb-4">Send Us a Message</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <select class="form-select">
                                <option>General Inquiry</option>
                                <option>Recipe Request</option>
                                <option>Technical Support</option>
                                <option>Partnership Opportunity</option>
                                <option>Feedback</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Attach Files (Optional)</label>
                            <input type="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Our Location</h2>
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c" alt="Office" class="office-image w-100">
                    <div class="card contact-card p-4 mt-4">
                        <h4>FoodFusion Headquarters</h4>
                        <p>123 Culinary Street<br>Foodie City, FC 12345<br>United States</p>
                        <hr>
                        <h5>Business Hours</h5>
                        <p class="mb-2">Monday - Friday: 9:00 AM - 6:00 PM</p>
                        <p class="mb-0">Saturday - Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Team Section -->
    <section class="team-support">
        <div class="container">
            <h2 class="text-center mb-4">Our Support Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="support-member">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" alt="Support Team Member">
                        <h5>Emily Johnson</h5>
                        <p class="text-muted">Customer Support Lead</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-member">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Support Team Member">
                        <h5>Michael Chen</h5>
                        <p class="text-muted">Technical Support</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-member">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Support Team Member">
                        <h5>Sofia Rodriguez</h5>
                        <p class="text-muted">Community Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="card faq-card">
                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#faq1">
                        <h5 class="mb-0">How can I submit my recipe to FoodFusion?</h5>
                    </div>
                    <div id="faq1" class="collapse show" data-bs-parent="#faqAccordion">
                        <div class="card-body">
                            You can submit your recipe through our Community section. Simply create an account, click on "Share Your Recipe," and follow the submission guidelines.
                        </div>
                    </div>
                </div>
                <div class="card faq-card">
                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#faq2">
                        <h5 class="mb-0">What should I do if I encounter technical issues?</h5>
                    </div>
                    <div id="faq2" class="collapse" data-bs-parent="#faqAccordion">
                        <div class="card-body">
                            For technical support, please email our support team at support@foodfusion.com with details about the issue you're experiencing. Include screenshots if possible.
                        </div>
                    </div>
                </div>
                <div class="card faq-card">
                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#faq3">
                        <h5 class="mb-0">How can I become a featured chef on FoodFusion?</h5>
                    </div>
                    <div id="faq3" class="collapse" data-bs-parent="#faqAccordion">
                        <div class="card-body">
                            Active community members who consistently share quality recipes and engage with other members are considered for featured chef status. Keep contributing and building your reputation!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-dark py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-3">About FoodFusion</h5>
                    <p class="mb-3">Your ultimate destination for culinary exploration and creativity. Join our community of food enthusiasts and discover amazing recipes.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light me-2"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Recipes</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Cookbook</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Learn</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="bstp/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
