<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinary Resources - FoodFusion</title>
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
                        url('https://images.unsplash.com/photo-1556911220-bec6393d0c62');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .resource-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            height: 100%;
        }
        .resource-card:hover {
            transform: translateY(-5px);
        }
        .resource-image {
            height: 200px;
            object-fit: cover;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .download-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
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
            <h1 class="display-4">Culinary Resources</h1>
            <p class="lead">Enhance your cooking journey with our collection of downloadable resources, tutorials, and kitchen hacks.</p>
        </div>
    </section>

    <!-- Downloadable Recipe Cards Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Downloadable Recipe Cards</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352" alt="Classic Recipes" class="resource-image">
                        <span class="download-badge"><i class="fas fa-download"></i> PDF</span>
                        <div class="card-body">
                            <span class="category-badge">Classic Recipes</span>
                            <h5 class="card-title">Essential Recipe Collection</h5>
                            <p class="card-text">A curated collection of timeless recipes every home cook should master.</p>
                            <a href="#" class="btn btn-primary">Download Cards</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061" alt="Seasonal Recipes" class="resource-image">
                        <span class="download-badge"><i class="fas fa-download"></i> PDF</span>
                        <div class="card-body">
                            <span class="category-badge">Seasonal</span>
                            <h5 class="card-title">Spring/Summer Recipe Cards</h5>
                            <p class="card-text">Fresh and vibrant recipes perfect for warm weather dining.</p>
                            <a href="#" class="btn btn-primary">Download Cards</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1506368249639-73a05d6f6488" alt="Dessert Recipes" class="resource-image">
                        <span class="download-badge"><i class="fas fa-download"></i> PDF</span>
                        <div class="card-body">
                            <span class="category-badge">Desserts</span>
                            <h5 class="card-title">Sweet Treats Collection</h5>
                            <p class="card-text">Delightful dessert recipes for every occasion.</p>
                            <a href="#" class="btn btn-primary">Download Cards</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Tutorials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Cooking Tutorials</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card resource-card">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/placeholder1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <span class="category-badge">Knife Skills</span>
                            <h5 class="card-title">Essential Knife Techniques</h5>
                            <p class="card-text">Master the basic knife skills every chef needs to know.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card resource-card">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/placeholder2" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <span class="category-badge">Cooking Basics</span>
                            <h5 class="card-title">Mastering Basic Cooking Methods</h5>
                            <p class="card-text">Learn fundamental cooking techniques from sautéing to braising.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kitchen Hacks Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kitchen Hacks & Tips</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1556911261-6bd341186b2f" alt="Kitchen Organization" class="resource-image">
                        <div class="card-body">
                            <h5 class="card-title">Kitchen Organization</h5>
                            <p class="card-text">Smart tips for organizing your kitchen space efficiently.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Pantry organization</li>
                                <li><i class="fas fa-check text-success me-2"></i>Storage solutions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Workflow optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1547592180-85f173990554" alt="Food Prep Tips" class="resource-image">
                        <div class="card-body">
                            <h5 class="card-title">Meal Prep Secrets</h5>
                            <p class="card-text">Time-saving techniques for efficient meal preparation.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Batch cooking</li>
                                <li><i class="fas fa-check text-success me-2"></i>Ingredient prep</li>
                                <li><i class="fas fa-check text-success me-2"></i>Storage tips</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1516594798947-e65505dbb29d" alt="Kitchen Tools" class="resource-image">
                        <div class="card-body">
                            <h5 class="card-title">Essential Tools Guide</h5>
                            <p class="card-text">Must-have kitchen tools and their creative uses.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Tool recommendations</li>
                                <li><i class="fas fa-check text-success me-2"></i>Maintenance tips</li>
                                <li><i class="fas fa-check text-success me-2"></i>Creative applications</li>
                            </ul>
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