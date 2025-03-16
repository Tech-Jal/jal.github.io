<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FoodFusion</title>
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
                        url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }
        .value-card {
            border: none;
            transition: transform 0.3s;
            background: #f8f9fa;
            border-radius: 15px;
        }
        .value-card:hover {
            transform: translateY(-10px);
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .social-links a {
            color: #333;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #007bff;
        }
        .philosophy-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        .values-section {
            padding: 80px 0;
        }
        .team-section {
            background-color: #f8f9fa;
            padding: 80px 0;
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recipe.php">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cookbook.php">Cookbook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.php">Learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
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
            <h1 class="display-4">About FoodFusion</h1>
            <p class="lead">Bringing people together through the love of cooking</p>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="philosophy-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Our Culinary Philosophy</h2>
                    <p class="lead">At FoodFusion, we believe that cooking is more than just preparing meals – it's about creating memories, sharing traditions, and bringing people together.</p>
                    <p>Our platform is built on the foundation that everyone can cook, and every dish tells a story. We're dedicated to making cooking accessible, enjoyable, and rewarding for food enthusiasts of all skill levels.</p>
                    <p>Through our community-driven approach, we encourage the exchange of recipes, techniques, and culinary wisdom across cultures and generations.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d" alt="Cooking Philosophy" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="text-center mb-5">Our Core Values</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-heart fa-3x mb-4 text-primary"></i>
                            <h4 class="card-title">Passion for Food</h4>
                            <p class="card-text">We're driven by our love for culinary arts and our desire to share this passion with others.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x mb-4 text-primary"></i>
                            <h4 class="card-title">Community First</h4>
                            <p class="card-text">Building and nurturing a supportive community of food enthusiasts is at our core.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-lightbulb fa-3x mb-4 text-primary"></i>
                            <h4 class="card-title">Innovation</h4>
                            <p class="card-text">We encourage creativity and new approaches to cooking while respecting traditional methods.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="text-center mb-5">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" alt="Sarah Johnson">
                        <h4>Sarah Johnson</h4>
                        <p class="text-muted">Founder & Head Chef</p>
                        <p class="small">With 15 years of culinary experience, Sarah leads our vision of making cooking accessible to everyone.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="David Chen">
                        <h4>David Chen</h4>
                        <p class="text-muted">Culinary Director</p>
                        <p class="small">David brings his expertise in Asian fusion cuisine and modern cooking techniques to our platform.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Maria Rodriguez">
                        <h4>Maria Rodriguez</h4>
                        <p class="text-muted">Community Manager</p>
                        <p class="small">Maria ensures our community stays engaged and connected through various events and initiatives.</p>
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