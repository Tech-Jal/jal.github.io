<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Cookbook - FoodFusion</title>
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
            padding: 100px 0;
        }
        .community-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: transform 0.3s;
        }
        .community-card:hover {
            transform: translateY(-5px);
        }
        .recipe-image {
            height: 200px;
            object-fit: cover;
        }
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .tip-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .engagement-icons i {
            font-size: 1.2rem;
            margin-right: 15px;
            color: #6c757d;
            cursor: pointer;
            transition: color 0.3s;
        }
        .engagement-icons i:hover {
            color: #0d6efd;
        }
        .share-recipe-form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .comment-section {
            max-height: 300px;
            overflow-y: auto;
        }
        .featured-member {
            text-align: center;
            padding: 20px;
        }
        .featured-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #fff;
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
            <h1 class="display-4">Community Cookbook</h1>
            <p class="lead">Share your culinary masterpieces and learn from fellow food enthusiasts</p>
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#shareRecipeModal">Share Your Recipe</button>
        </div>
    </section>

    <!-- Share Recipe Modal -->
    <div class="modal fade" id="shareRecipeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share Your Recipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="share-recipe-form">
                        <div class="mb-3">
                            <label class="form-label">Recipe Title</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Preparation Time</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Difficulty Level</label>
                                <select class="form-select">
                                    <option>Easy</option>
                                    <option>Medium</option>
                                    <option>Hard</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ingredients</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Instructions</label>
                            <textarea class="form-control" rows="6" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Photos</label>
                            <input type="file" class="form-control" accept="image/*" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Share Recipe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Community Members -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Featured Community Members</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="featured-member">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" alt="Featured Member">
                        <h5>Maria Garcia</h5>
                        <p class="text-muted">Master Chef | 50+ Recipes</p>
                        <span class="badge bg-primary">Top Contributor</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-member">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Featured Member">
                        <h5>John Smith</h5>
                        <p class="text-muted">Pastry Expert | 30+ Recipes</p>
                        <span class="badge bg-success">Rising Star</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-member">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Featured Member">
                        <h5>Sarah Wilson</h5>
                        <p class="text-muted">Home Chef | 40+ Recipes</p>
                        <span class="badge bg-info">Community Favorite</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Recipes -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Latest Community Recipes</h2>
            <div class="row">
                <!-- Recipe Card 1 -->
                <div class="col-md-6">
                    <div class="card community-card">
                        <img src="https://images.unsplash.com/photo-1551183053-bf91a1d81141" class="card-img-top recipe-image" alt="Recipe">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" class="user-avatar me-3" alt="User">
                                <div>
                                    <h6 class="mb-0">Maria Garcia</h6>
                                    <small class="text-muted">Posted 2 days ago</small>
                                </div>
                            </div>
                            <h5 class="card-title">Homemade Chocolate Truffles</h5>
                            <p class="card-text">Rich and decadent chocolate truffles perfect for special occasions.</p>
                            <div class="engagement-icons mb-3">
                                <i class="far fa-heart"></i> 245
                                <i class="far fa-comment"></i> 18
                                <i class="far fa-bookmark"></i>
                            </div>
                            <a href="#" class="btn btn-outline-primary">View Full Recipe</a>
                        </div>
                    </div>
                </div>

                <!-- Recipe Card 2 -->
                <div class="col-md-6">
                    <div class="card community-card">
                        <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187" class="card-img-top recipe-image" alt="Recipe">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" class="user-avatar me-3" alt="User">
                                <div>
                                    <h6 class="mb-0">John Smith</h6>
                                    <small class="text-muted">Posted 3 days ago</small>
                                </div>
                            </div>
                            <h5 class="card-title">Sourdough Bread</h5>
                            <p class="card-text">My grandmother's recipe for the perfect crusty sourdough bread.</p>
                            <div class="engagement-icons mb-3">
                                <i class="far fa-heart"></i> 189
                                <i class="far fa-comment"></i> 24
                                <i class="far fa-bookmark"></i>
                            </div>
                            <a href="#" class="btn btn-outline-primary">View Full Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cooking Tips Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Community Cooking Tips</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="tip-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" class="user-avatar me-3" alt="User">
                            <div>
                                <h6 class="mb-0">Sarah Wilson</h6>
                                <small class="text-muted">Kitchen Hack</small>
                            </div>
                        </div>
                        <p>Store fresh herbs in a glass of water with a plastic bag over them to keep them fresh for weeks!</p>
                        <div class="engagement-icons">
                            <i class="far fa-thumbs-up"></i> 156
                            <i class="far fa-comment"></i> 12
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tip-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" class="user-avatar me-3" alt="User">
                            <div>
                                <h6 class="mb-0">Maria Garcia</h6>
                                <small class="text-muted">Pro Tip</small>
                            </div>
                        </div>
                        <p>Always bring your meat to room temperature before cooking for more even results!</p>
                        <div class="engagement-icons">
                            <i class="far fa-thumbs-up"></i> 203
                            <i class="far fa-comment"></i> 15
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tip-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" class="user-avatar me-3" alt="User">
                            <div>
                                <h6 class="mb-0">John Smith</h6>
                                <small class="text-muted">Baking Tip</small>
                            </div>
                        </div>
                        <p>Use room temperature eggs for better incorporation in baking recipes!</p>
                        <div class="engagement-icons">
                            <i class="far fa-thumbs-up"></i> 178
                            <i class="far fa-comment"></i> 9
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