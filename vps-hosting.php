<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Afriportal Network Limited</title>
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">

    <?php include 'assets/includes/optimize-loading.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/vps-hosting.css">
</head>

<body class="loading">
    <?php include 'assets/includes/preloader.php'; ?>
    <?php include 'assets/includes/nav-bar.php'; ?>

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
            <?php include 'assets/includes/currency-selector.php'; ?>
            <div class="row mt-5">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Starter VPS</h3>
                            <div class="price-tag" id="plan-0-price">$19.99<span class="price-duration">/month</span></div>
                            <p>For small businesses and personal projects</p>
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
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Weekly Backups</li>
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
                            <div class="price-tag" id="plan-1-price">$39.99<span class="price-duration">/month</span></div>
                            <p>For growing businesses and online presence</p>
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
                                <li><i class="bi bi-x-circle text-danger"></i> Weekly Backups</li>
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
                            <div class="price-tag" id="plan-2-price">$59.99<span class="price-duration">/month</span></div>
                            <p>For high-traffic websites and applications</p>
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
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
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
        <!-- Include the currency converter script -->
    </section>

    <!-- Server Specifications -->
    <section class="specs-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Premium Server Infrastructure</h2>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="spec-card p-4 rounded-4 shadow-sm h-100">
                        <h4 class="mb-4">
                            <i class="bi bi-cpu"></i>
                            Hardware Specifications
                        </h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i>Latest Gen Intel Xeon Processors</li>
                            <li><i class="bi bi-check-circle-fill"></i>NVMe SSD Storage Arrays</li>
                            <li><i class="bi bi-check-circle-fill"></i>ECC DDR4 RAM</li>
                            <li><i class="bi bi-check-circle-fill"></i>Enterprise-grade Network Infrastructure</li>
                            <li><i class="bi bi-check-circle-fill"></i>RAID-10 Configuration</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="spec-card p-4 rounded-4 shadow-sm h-100">
                        <h4 class="mb-4">
                            <i class="bi bi-hdd-network"></i>
                            Network Features
                        </h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i>1Gbps Network Port</li>
                            <li><i class="bi bi-check-circle-fill"></i>Multiple Tier-1 Network Providers</li>
                            <li><i class="bi bi-check-circle-fill"></i>Advanced DDoS Protection</li>
                            <li><i class="bi bi-check-circle-fill"></i>Low-latency Global Routes</li>
                            <li><i class="bi bi-check-circle-fill"></i>IPv4 & IPv6 Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="vpsAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What is VPS hosting?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#vpsAccordion">
                                <div class="accordion-body">
                                    VPS (Virtual Private Server) hosting provides you with dedicated resources on a virtualized server. Unlike shared hosting, you get guaranteed CPU, RAM, and storage allocation, ensuring consistent performance for your applications.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How do I manage my VPS?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#vpsAccordion">
                                <div class="accordion-body">
                                    You can manage your VPS through our intuitive control panel or via SSH with full root access. We provide management tools and a user-friendly interface for easy server administration.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Can I upgrade my VPS plan?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#vpsAccordion">
                                <div class="accordion-body">
                                    Yes, you can easily upgrade your VPS plan at any time. Our scalable infrastructure allows seamless upgrades with minimal downtime, ensuring your business can grow without constraints.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section py-5" style="background: linear-gradient(135deg, #4B0082, #932C8B);">
        <div class="container">
            <div class="row justify-content-center text-center text-white">
                <div class="col-lg-8" data-aos="zoom-in">
                    <h2 class="mb-4">Ready to Get Started with VPS Hosting?</h2>
                    <p class="mb-4">Experience the power of dedicated resources and take your business to the next level</p>
                    <a href="#pricing" class="btn btn-light btn-lg px-5">Choose Your Plan</a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'assets/includes/scroll-up.php'; ?>
    <?php include 'assets/includes/contact-btn.php'; ?>
    <?php include 'assets/includes/footer.php'; ?>
    <script>
        // Global Currency Converter for Hosting Site Pricing Plans
        // Main pricing plans in USD
        const pricingPlans = [{
                name: "Starter VPS",
                price: 19.99,
                features: ["2 vCPU Cores", "2GB RAM", "40GB SSD Storage", "2TB Bandwidth", " 1 Dedicated IP", "Full Root Access", "DDoS Protection", "Priority Support", "Weekly Backups"]
            },
            {
                name: "Business VPS",
                price: 39.99,
                features: ["4 vCPU Cores", "4GB RAM", "80GB SSD Storage", "4TB Bandwidth", "2 Dedicated IP", "Full Root Access", "DDoS Protection", "Priority Support", "Weekly Backups"]
            },
            {
                name: "Enterprise VPS",
                price: 59.99,
                features: ["8 vCPU Cores", "8GB RAM", "160GB SSD Storage", "8TB Bandwidth", "3 Dedicated IP", "Full Root Access", "DDoS Protection", "Priority Support", "Weekly Backups"]
            }
        ];
    </script>
</body>
</html>