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
    <style>
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.95), rgba(147, 44, 139, 0.95));
            color: white;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
            height: 100vh;
        }

        .hero-btn .btn-primary {
            background: linear-gradient(135deg, #4B0082, #932C8B);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 1rem 2.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(75, 0, 130, 0.2);
            position: relative;
            overflow: hidden;
        }

        .hero-btn .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;
        }

        .hero-btn .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .hero-btn .btn-primary:hover::before {
            left: 100%;
        }

        .hero-btn .btn-outline-light {
            color: white;
            border: 2px solid white;
            border-radius: 50px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .hero-btn .btn-outline-light:hover {
            color: black;
            background: white;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-subtitle {
                font-size: 1rem;
            }
            .hero-section img{
                display: none;
            }
            
        }

        /* Pricing Section */
        .pricing-section {
            padding: 100px 0;
            background: #f8f9fa;
        }
        
        .pricing-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            border: 2px solid transparent;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: #4B0082;
            box-shadow: 0 20px 40px rgba(75, 0, 130, 0.1);
        }
        
        .pricing-header {
            background: linear-gradient(135deg, #4B0082, #932C8B);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .pricing-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 45%, rgba(255,255,255,0.1) 45%, rgba(255,255,255,0.1) 55%, transparent 55%);
        }
        
        .pricing-header h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .price-tag {
            font-size: 3rem;
            font-weight: 700;
            margin: 1rem 0;
            line-height: 1;
        }
        
        .price-duration {
            font-size: 1rem;
            opacity: 0.8;
        }
        
        .pricing-features {
            padding: 2rem;
        }
        
        .pricing-features ul {
            list-style: none;
            padding: 0;
            margin: 0;
            color: #666;
        }
        
        .pricing-features li {
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .pricing-features li:last-child {
            border-bottom: none;
        }
        
        .pricing-features i {
            color: #4B0082;
            font-size: 1.2rem;
            background: rgba(75, 0, 130, 0.1);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .pricing-footer {
            padding: 0 2rem 2rem;
            text-align: center;
        }
        
        .pricing-card .btn {
            border: 2px solid #4B0082;
            border-radius: 30px;
            padding: 0.8rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            background: transparent;
            color: #4B0082;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .pricing-card .btn:hover {
            color: white;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            border-color: transparent;
            transform: translateY(-2px);
        }

        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
        }

        .features-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><rect width="1" height="1" fill="%234B0082" opacity="0.05"/></svg>');
            opacity: 0.5;
        }

        /* .features-section .section-title {
            margin-bottom: 3rem;
            color: #2d2d2d;
            font-weight: 800;
            position: relative;
        } */

        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(75, 0, 130, 0.1);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.05), rgba(147, 44, 139, 0.05));
            opacity: 0;
            transition: all 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(75, 0, 130, 0.2);
            box-shadow: 0 15px 35px rgba(75, 0, 130, 0.1);
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.1), rgba(147, 44, 139, 0.1));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            font-size: 1.8rem;
            color: #4B0082;
        }

        .feature-card h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2d2d2d;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .features-section {
                padding: 60px 0;
            }
            
            .feature-card {
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body class="loading">
    <?php include 'assets/includes/preloader.php'; ?>
    <?php include 'assets/includes/contact-btn.php'; ?>
    <?php include 'assets/includes/nav-bar.php'; ?>
    <?php include 'assets/includes/scroll-up.php'; ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Virtual Private Server Solutions</h1>
                    <p class="hero-subtitle">Experience unmatched performance and complete control with our VPS hosting solutions. Perfect for growing businesses that need dedicated resources.</p>
                    <div class="hero-btn d-flex gap-3">
                        <a href="#pricing" class="btn btn-primary">View Plans</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/vps.webp" alt="VPS Hosting" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title text-center">Why Choose Our VPS Hosting?</h2>
            <p class="text-center text-muted mt-3 mb-5 fw-bold">Experience the power of dedicated resources and complete control</p>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h4>Lightning Fast Performance</h4>
                        <p>Powered by NVMe SSD storage and latest-gen processors for up to 20x faster performance than traditional hosting.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Enterprise Security</h4>
                        <p>DDoS protection, SSL certificates, automated backups, and 24/7 infrastructure monitoring to keep your data safe.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h4>Full Root Access</h4>
                        <p>Complete control over your server with root access, choice of OS, and custom resource allocation.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4>Instant Scalability</h4>
                        <p>Easily upgrade resources as your business grows with zero downtime and no service interruption.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4>24/7 Expert Support</h4>
                        <p>Our experienced technical team is available round-the-clock to assist you with any server issues.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4>99.9% Uptime</h4>
                        <p>Guaranteed uptime with redundant infrastructure and constant monitoring for maximum reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Vps Services -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Choose Your VPS Hosting Plan</h2>
            <p class="text-center text-muted mt-3 mb-5 fw-bold" data-aos="fade-up" data-aos-delay="100">Scalable solutions for your growing business needs</p>
            <div class="row mt-5">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Starter VPS</h3>
                            <div class="price-tag">₦25,000<span class="price-duration">/month</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 2 vCPU Cores</li>
                                <li><i class="bi bi-check-circle"></i> 2GB RAM</li>
                                <li><i class="bi bi-check-circle"></i> 40GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 2TB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 1 Dedicated IP</li>
                                <li><i class="bi bi-check-circle"></i> Full Root Access</li>
                                <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Business VPS</h3>
                            <div class="price-tag">₦45,000<span class="price-duration">/month</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 4 vCPU Cores</li>
                                <li><i class="bi bi-check-circle"></i> 4GB RAM</li>
                                <li><i class="bi bi-check-circle"></i> 80GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 4TB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 2 Dedicated IPs</li>
                                <li><i class="bi bi-check-circle"></i> Full Root Access</li>
                                <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Enterprise VPS</h3>
                            <div class="price-tag">₦85,000<span class="price-duration">/month</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 8 vCPU Cores</li>
                                <li><i class="bi bi-check-circle"></i> 8GB RAM</li>
                                <li><i class="bi bi-check-circle"></i> 160GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 8TB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 3 Dedicated IPs</li>
                                <li><i class="bi bi-check-circle"></i> Full Root Access</li>
                                <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Weekly Backups</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'assets/includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>    
    <script>
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

