<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinary Education - FoodFusion</title>
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
                        url('https://images.unsplash.com/photo-1577106263724-2c8e03bfe9cf');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .education-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            height: 100%;
        }
        .education-card:hover {
            transform: translateY(-5px);
        }
        .course-image {
            height: 200px;
            object-fit: cover;
        }
        .infographic-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        .infographic-container img {
            width: 100%;
            transition: transform 0.3s;
        }
        .infographic-container:hover img {
            transform: scale(1.05);
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 15px;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .category-badge {
            background: #0d6efd;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 10px;
            display: inline-block;
        }
        .progress-indicator {
            height: 5px;
            background-color: #e9ecef;
            border-radius: 3px;
            margin: 10px 0;
        }
        .progress-bar {
            height: 100%;
            border-radius: 3px;
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
            <h1 class="display-4">Culinary Education Hub</h1>
            <p class="lead">Expand your culinary knowledge with our comprehensive learning resources</p>
        </div>
    </section>

    <!-- Online Courses Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Courses</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card education-card">
                        <img src="https://images.unsplash.com/photo-1507048331197-7d4ac70811cf" alt="Knife Skills" class="course-image">
                        <div class="card-body">
                            <span class="category-badge">Beginner</span>
                            <h5 class="card-title">Mastering Knife Skills</h5>
                            <p class="card-text">Learn essential knife techniques from professional chefs.</p>
                            <div class="progress-indicator">
                                <div class="progress-bar bg-success" style="width: 75%"></div>
                            </div>
                            <small class="text-muted">8 lessons • 3 hours total</small>
                            <a href="#" class="btn btn-primary mt-3 w-100">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card education-card">
                        <img src="https://images.unsplash.com/photo-1556911220-bec6393d0c62" alt="Cooking Basics" class="course-image">
                        <div class="card-body">
                            <span class="category-badge">Intermediate</span>
                            <h5 class="card-title">Cooking Fundamentals</h5>
                            <p class="card-text">Master basic cooking techniques and flavor combinations.</p>
                            <div class="progress-indicator">
                                <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                            <small class="text-muted">12 lessons • 6 hours total</small>
                            <a href="#" class="btn btn-primary mt-3 w-100">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card education-card">
                        <img src="https://images.unsplash.com/photo-1514986888952-8cd320577b68" alt="Baking" class="course-image">
                        <div class="card-body">
                            <span class="category-badge">Advanced</span>
                            <h5 class="card-title">Advanced Baking</h5>
                            <p class="card-text">Perfect your pastry skills with advanced techniques.</p>
                            <div class="progress-indicator">
                                <div class="progress-bar bg-success" style="width: 40%"></div>
                            </div>
                            <small class="text-muted">15 lessons • 8 hours total</small>
                            <a href="#" class="btn btn-primary mt-3 w-100">Start Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infographics Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Culinary Infographics</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="infographic-container">
                        <img src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f" alt="Cooking Methods" class="img-fluid">
                        <div class="card-body">
                            <h5 class="mt-3">Essential Cooking Methods</h5>
                            <p>A visual guide to different cooking techniques and their applications.</p>
                            <a href="#" class="btn btn-outline-primary">Download PDF</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="infographic-container">
                        <img src="https://images.unsplash.com/photo-1466637574441-749b8f19452f" alt="Ingredient Substitutions" class="img-fluid">
                        <div class="card-body">
                            <h5 class="mt-3">Ingredient Substitution Guide</h5>
                            <p>Common ingredient substitutions for dietary restrictions and preferences.</p>
                            <a href="#" class="btn btn-outline-primary">Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Videos Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Educational Videos</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card education-card">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/placeholder1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <span class="category-badge">Technique</span>
                            <h5 class="card-title">Basic Knife Skills</h5>
                            <p class="card-text">Learn proper knife handling and basic cutting techniques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card education-card">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/placeholder2" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <span class="category-badge">Kitchen Tips</span>
                            <h5 class="card-title">Kitchen Organization</h5>
                            <p class="card-text">Professional tips for organizing your kitchen efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Tips Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Quick Culinary Tips</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card education-card text-center p-3">
                        <i class="fas fa-temperature-high fa-2x text-primary mb-3"></i>
                        <h5>Temperature Guide</h5>
                        <p>Essential cooking temperatures for different foods</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card education-card text-center p-3">
                        <i class="fas fa-weight fa-2x text-primary mb-3"></i>
                        <h5>Measurement Conversions</h5>
                        <p>Quick reference for kitchen measurements</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card education-card text-center p-3">
                        <i class="fas fa-clock fa-2x text-primary mb-3"></i>
                        <h5>Cooking Times</h5>
                        <p>Standard cooking times for common ingredients</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card education-card text-center p-3">
                        <i class="fas fa-seedling fa-2x text-primary mb-3"></i>
                        <h5>Herb Guide</h5>
                        <p>Common herbs and their culinary uses</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
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