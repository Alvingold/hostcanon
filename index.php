<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Afriportal Network Limited</title>
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home-page loading">
    <?php include 'assets/includes/preloader.php';
    include 'assets/includes/nav-bar.php'; ?>

    <!-- Hero Section -->
    <section class="hero position-relative overflow-hidden">
        <div class="hero-shape"></div>
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up">
                    <div class="hero-content">
                        <span class="badge bg-primary-soft mb-4">Welcome To HostCanon</span>
                        <h1 class="display-4 fw-bold mb-4">Transform Your Online Presence with Fast & Secure Hosting</h1>
                        <p class="lead mb-5">Get lightning-fast SSD hosting with 99.9% uptime guarantee and round-the-clock expert support.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="hero-image-wrapper" data-aos="fade-left">
                        <img src="assets/media/hero-right.png" alt="Web Hosting" class="img-fluid">
                        <div class="floating-card card-1">
                            <i class="bi bi-hdd-rack"></i>
                            <span>NVMe SSD</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="bi bi-shield-check"></i>
                            <span>SSL Included</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Domain Search Section -->
    <section class="domain-search py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="h1 mb-4">Find Your Perfect Domain Name</h2>
                    <div class="domain-search-box bg-white p-4 rounded-4 shadow">
                        <form class="d-flex">
                            <div class="input-group">
                                <span class="input-group-text border-0 bg-transparent">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Enter Your Domain Name...">
                                <button class="btn btn-primary px-4" type="submit">Search</button>
                            </div>
                        </form>
                        <div class="domain-prices mt-4">
                            <span class="domain-price">.com ₦8,500</span>
                            <span class="domain-price">.net ₦9,500</span>
                            <span class="domain-price">.org ₦8,900</span>
                            <span class="domain-price">.info ₦7,500</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose Our Hosting</h2>
                <p class="section-subtitle">Experience the difference with our premium features</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-rocket"></i>
                        </div>
                        <h3>Fast SSD Storage</h3>
                        <p>Lightning-fast NVMe SSD storage for optimal website performance and speed.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Advanced Security</h3>
                        <p>Free SSL certificates and DDoS protection to keep your website secure.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Expert technical support available around the clock to assist you.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h3>Daily Backups</h3>
                        <p>Automated daily backups to keep your data safe and secure.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h3>99.9% Uptime</h3>
                        <p>Guaranteed uptime to keep your website running smoothly.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h3>Easy Management</h3>
                        <p>User-friendly control panel for easy website management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hosting Solutions -->
    <section class="solutions-section py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Choose the Right Hosting Solution</h2>
                <p class="section-subtitle">Find the perfect hosting package for your website</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="bi bi-share"></i>
                        </div>
                        <h3>Reseller Hosting</h3>
                        <p>...</p>
                        <ul class="solution-features">
                            <li><i class="bi bi-check-circle"></i> Unlimited Bandwidth</li>
                        </ul>
                        <a href="#Reseller-plans" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="bi bi-hdd-network"></i>
                        </div>
                        <h3 class="h4">Ecommerce Hosting</h3>
                        <p>...</p>
                        <ul class="solution-features">
                            <li><i class="bi bi-check-circle"></i> Dedicated Resources</li>
                        </ul>
                        <a href="#Ecommerce-plans" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="bi bi-server"></i>
                        </div>
                        <h3>Email Hosting</h3>
                        <p>...</p>
                        <ul class="solution-features">
                            <li><i class="bi bi-check-circle"></i> Full Server Access</li>
                        </ul>
                        <a href="#Email Hosting" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer -->
    <?php include('assets/includes/footer.php'); ?>
    
    <!-- Scroll to Top Button -->
    <?php include 'assets/includes/scroll-up.php'; ?>
    
    <!-- Contact Buttons -->
    <?php include 'assets/includes/contact-btn.php'; ?>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://static.elfsight.com/apps/google-reviews/stable/472cfdc9950a5d6058a097e99a4203036834b5ca/app/googleReviews.js" defer="defer" charset="utf-8"></script>
    
    <script>
        <!-- Navigation Scroll Effect -->
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Initialize AOS after preloader removes loading class
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('load', function() {
                setTimeout(function() {
                    AOS.init({
                        duration: 1000,
                        once: true
                    });
                }, 600);
            });
        });
    </script>
</body>
</html>

git remote add origin https://github.com/Alvingold/hostcanon.git