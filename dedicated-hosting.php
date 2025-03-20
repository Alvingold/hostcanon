<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="assets/css/dedicated-hosting.css">
    <title>HostCanon - Dedicated Hosting</title>
</head>
<body>
<?php include 'assets/includes/preloader.php';
    include 'assets/includes/nav-bar.php'; ?>


    <!-- HERO SECTION -->
<section class="dedicated-hero">
    <div class="dedicated-container">
        <div class="hero-content">
            <!-- Text Content -->
            <div class="hero-text">
                <span class="hero-badge">Enterprise-Grade Solution</span>
                <h1>Dedicated Hosting for Ultimate Performance</h1>
                <p>Unmatched speed, security, and control for your high-traffic websites. Power up your business with HostCanon's dedicated hosting solutions.</p>
                <div class="hero-actions">
                    <a href="#" class="hero-btn primary">Get Started</a>
                    <a href="#" class="hero-btn secondary">View Plans</a>
                </div>
                <div class="hero-features">
                    <div class="feature"><i class="feature-icon speed"></i>99.9% Uptime</div>
                    <div class="feature"><i class="feature-icon security"></i>DDoS Protection</div>
                    <div class="feature"><i class="feature-icon support"></i>24/7 Support</div>
                </div>
            </div>
        </div>
        <div class="hero-shape"><img src="assets/media/server-room.png" alt="Dedicated hosting image" width="100%"></div>
    </div>
    
</section>









<!-- Footer -->
<?php include 'assets/includes/footer.php'; ?>
    
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