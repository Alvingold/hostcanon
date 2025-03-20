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
                        <p>Start your own hosting business with our reliable, scalable, and profitable reseller hosting plans.</p>
                        <!-- <ul class="solution-features">
                            <li><i class="bi bi-check-circle"></i> Unlimited Bandwidth</li>
                        </ul> -->
                        <a href="reseller-hosting.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="bi bi-hdd-network"></i>
                        </div>
                        <h3 class="h4">Ecommerce Hosting</h3>
                        <p>Power your online store with our fast, secure, and feature-packed e-commerce hosting solutions.</p>
                        <!-- <ul class="solution-features">
                            <li><i class="bi bi-check-circle"></i> Dedicated Resources</li>
                        </ul> -->
                        <a href="ecommerce-hosting.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-card">
                        <div class="solution-icon">
                            <i class="bi bi-server"></i>
                        </div>
                        <h3>Email Hosting</h3>
                        <p>Elevate your communication with secure and professional email hosting, tailored for your domain.</p>
                        <!-- <ul class="solution-features">
                            <li><i class="bi bi-check-circle"></i> Full Server Access</li>
                        </ul> -->
                        <a href="email-hosting.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Affordable Reseller Hosting Plans</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Starter</h3>
                            <div class="price-tag">$24.99<span class="price-duration">/month</span></div>
                            <p>Perfect for beginners starting a hosting business</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 30 GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 500 GB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 30 cPanel Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Free WHMCS License</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Professional</h3>
                            <div class="price-tag">$49.99<span class="price-duration">/month</span></div>
                            <p>Ideal for growing hosting businesses</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 75 GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 1000 GB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 75 cPanel Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Free WHMCS License</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificates</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Enterprise</h3>
                            <div class="price-tag">$89.99<span class="price-duration">/month</span></div>
                            <p>For established resellers with high-volume needs</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 150 GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 2000 GB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 150 cPanel Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Free WHMCS License</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificates</li>
                                <li><i class="bi bi-check-circle"></i> Dedicated IP Address</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- Feature Section -->
    <section class="features-section">
        <div class="clo-container">
            <div class="section-header">
                <h2>Cloud <span>Hosting</span> Features</h2>
                <p>Elevate your digital presence with our enterprise-grade infrastructure and cutting-edge technologies</p>
            </div>

            <div class="features-container">
                <!-- Card 1 -->
                <div class="refeature-card">
                    <div class="feature-content">
                        <div class="feature-badge">RELIABILITY</div>
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h3 class="feature-title">99.99% Uptime Guarantee</h3>
                        <p class="feature-description">Our enterprise-grade infrastructure ensures your website remains operational at all times, even during peak traffic periods.</p>
                        <ul class="feature-list">
                            <li>Multi-zone redundancy</li>
                            <li>Proactive monitoring</li>
                            <li>Instant failover systems</li>
                        </ul>
                        <div class="feature-cta">
                            <div class="feature-stat">
                                <span class="feature-stat-number">99.99</span>
                                <span class="feature-stat-label">% uptime</span>
                            </div>
                            <div class="feature-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="refeature-card">
                    <div class="feature-content">
                        <div class="feature-badge">SECURITY</div>
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h3 class="feature-title">Advanced Security Suite</h3>
                        <p class="feature-description">Protect your website with enterprise-grade security features designed to block threats before they reach your site.</p>
                        <ul class="feature-list">
                            <li>DDoS protection</li>
                            <li>Free SSL certificates</li>
                            <li>Web application firewall</li>
                        </ul>
                        <div class="feature-cta">
                            <div class="feature-stat">
                                <span class="feature-stat-number">24/7</span>
                                <span class="feature-stat-label">monitoring</span>
                            </div>
                            <div class="feature-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="refeature-card">
                    <div class="feature-content">
                        <div class="feature-badge">PERFORMANCE</div>
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="16 12 12 8 8 12"></polyline>
                                <line x1="12" y1="16" x2="12" y2="8"></line>
                            </svg>
                        </div>
                        <h3 class="feature-title">Lightning Fast Speed</h3>
                        <p class="feature-description">Experience blazing-fast load times with our optimized hosting infrastructure and global CDN network.</p>
                        <ul class="feature-list">
                            <li>SSD storage</li>
                            <li>Global CDN</li>
                            <li>HTTP/3 support</li>
                        </ul>
                        <div class="feature-cta">
                            <div class="feature-stat">
                                <span class="feature-stat-number">0.5</span>
                                <span class="feature-stat-label">s load time</span>
                            </div>
                            <div class="feature-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="refeature-card">
                    <div class="feature-content">
                        <div class="feature-badge">SCALABILITY</div>
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                <line x1="6" y1="18" x2="6.01" y2="18"></line>
                            </svg>
                        </div>
                        <h3 class="feature-title">Elastic Scaling</h3>
                        <p class="feature-description">Scale your resources instantly to meet any traffic demand with our auto-scaling infrastructure.</p>
                        <ul class="feature-list">
                            <li>Auto-scaling</li>
                            <li>Load balancing</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <div class="feature-cta">
                            <div class="feature-stat">
                                <span class="feature-stat-number">∞</span>
                                <span class="feature-stat-label">scalability</span>
                            </div>
                            <div class="feature-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="refeature-card">
                    <div class="feature-content">
                        <div class="feature-badge">SUPPORT</div>
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                        </div>
                        <h3 class="feature-title">24/7 Expert Support</h3>
                        <p class="feature-description">Get instant help from our team of experienced hosting professionals whenever you need it.</p>
                        <ul class="feature-list">
                            <li>Live chat support</li>
                            <li>Technical expertise</li>
                            <li>Quick response time</li>
                        </ul>
                        <div class="feature-cta">
                            <div class="feature-stat">
                                <span class="feature-stat-number">24/7</span>
                                <span class="feature-stat-label">assistance</span>
                            </div>
                            <div class="feature-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="refeature-card">
                    <div class="feature-content">
                        <div class="feature-badge">BACKUP</div>
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Automatic Backups</h3>
                        <p class="feature-description">Keep your data safe with automated daily backups and easy restore options.</p>
                        <ul class="feature-list">
                            <li>Daily snapshots</li>
                            <li>One-click restore</li>
                            <li>Secure storage</li>
                        </ul>
                        <div class="feature-cta">
                            <div class="feature-stat">
                                <span class="feature-stat-number">30</span>
                                <span class="feature-stat-label">day retention</span>
                            </div>
                            <div class="feature-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-cloud cloud-1"></div>
            <div class="feature-cloud cloud-2"></div>
        </div>
    </section>


    <!-- Speed -->

    <section class="speed-domain">
    <div class="container">
        <div class="future-content">
            <!-- First Row -->
            <div class="row">
                <!-- Text Content -->
                <div class="text-section col-md-6">
                    <h2 class="section-titled">Speed. Reliability. Efficiency.</h2>
                    <p class="purple-section-subtitle">
                        Deliver top-tier performance and ensure your visitors enjoy a seamless browsing experience.
                    </p>

                    <div class="domain-info">
                        <div class="purple-domain-text">
                            <!-- <i class="fas fa-globe"></i> -->
                            <h3>Global Data Centers</h3>
                            <p>
                            Your website connects to the nearest data center in our worldwide network, maximizing speed and efficiency—at no extra cost.
                            </p>
                        </div>

                        <div class="purple-domain-text">
                            <!-- <i class="fas fa-tachometer-alt"></i> -->
                            <h3>Optimized Performance</h3>
                            <p>
                            Experience lightning-fast load times and stable performance, even during peak traffic periods.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="image-section col-md-6">
                    <img src="assets/media/dom.png" alt="Domain Management" width="100%">  
                </div>
            </div>

            <!-- Second Row -->
            <div class="row mt-4">
                <!-- Image Section First -->
                <div class="image-section col-md-6">
                    <img src="assets/media/domd.png" alt="Domain Search" width="100%">
                </div>

                <!-- Text Content Second -->
                <div class="text-section col-md-6">
                    <div class="domain-info">
                        <div class="purple-domain-text">
                            <!-- <i class="fas fa-shield-alt"></i> -->
                            <h3>Rock-Solid Security</h3>
                            <p>
                            Secure your site with automated backups, two-factor authentication, and DDoS protection with Cloudflare.
                            </p>
                        </div>

                        <div class="purple-domain-text">
                            <!-- <i class="fas fa-clock"></i> -->
                            <h3>Guaranteed 99.9% Uptime</h3>
                            <p>
                            Your website stays online 24/7 with our industry-leading uptime guarantee.
                            </p>
                        </div>

                        <button class="purple-domain-btn">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Difficulty Section -->
 
<section class="page-container">
        <h2 class="section-title">Zero Difficulty</h2>
        
        <div class="page-service-card">
            <div class="page-service-title">WordPress Wizardry Unleashed</div>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="page-feature-block">
                        <div class="page-feature-icon">
                            <i class="bi bi-rocket"></i>
                        </div>
                        <div class="page-feature-details">
                            <div class="page-feature-name">Lightning-Fast Performance</div>
                            <p class="page-service-text">Pages that load in milliseconds, not seconds, keeping visitors engaged.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-feature-block">
                        <div class="page-feature-icon">
                            <i class="bi bi-shield"></i>
                        </div>
                        <div class="page-feature-details">
                            <div class="page-feature-name">Rock-Solid Reliability</div>
                            <p class="page-service-text">Built on cutting-edge technology with expert support you can count on.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="page-service-text">Your WordPress dreams deserve <span class="text-accent">extraordinary hosting</span>. Our managed solutions don't just host - they elevate your digital presence. Powered by cutting-edge technology and backed by experts who truly care, HostCanon delivers performance that defies expectations. Imagine your site handling a sudden influx of visitors with grace, loading pages in milliseconds instead of seconds. This isn't just good for users - it's a love letter to Google's ranking algorithms that reward lightning-fast experiences. Your visitors won't just browse; they'll be captivated by seamless interactions that keep them coming back.</p>
            
            <a href="#" class="btn-primary-action">Discover WordPress Excellence</a>
        </div>
        
        <div class="page-service-card">
            <div class="page-service-title">E-Commerce, Simplified</div>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="page-feature-block">
                        <div class="page-feature-icon">
                            <i class="bi bi-cart4"></i>
                        </div>
                        <div class="page-feature-details">
                            <div class="page-feature-name">Conversion-Optimized</div>
                            <p class="page-service-text">Every millisecond matters - we've engineered our platform to turn browsers into buyers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-feature-block">
                        <div class="page-feature-icon">
                            <i class="bi bi-speedometer"></i>
                        </div>
                        <div class="page-feature-details">
                            <div class="page-feature-name">20X Faster Loading</div>
                            <p class="page-service-text">Advanced caching technologies that leave competitors in the dust.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="page-service-text"><span class="text-accent">Transform Your Vision</span> into a Digital Storefront</p>
            
            <p class="page-service-text">Forget complicated setups and frustrating technical hurdles. Our e-commerce hosting creates the perfect foundation for your online business ambitions. With intelligent caching and next-generation server architecture, your products shine in their best light - loading 20 times faster than standard solutions. Every millisecond matters in the race for conversions, and we've engineered every aspect of our platform to turn browsers into buyers. Build your empire on bedrock that scales with your success, keeping your store responsive even during your biggest sales events.</p>
            
            <a href="#" class="btn-primary-action">Explore E-Commerce Mastery</a>
        </div>
    </section>

    
    
    <!-- MIGRATION SECTION -->
    <section class="migration-wrapper">
        <div class="migration-hero">
            <div class="migration-icon-wrap">
                <div class="migration-circle-icon">
                    <i class="bi bi-rocket-takeoff-fill"></i>
                </div>
            </div>
            <h2>Website Migration <span>Effortlessly Simple</span></h2>
            <p>Already hosting elsewhere? Join over 3 million website owners who've discovered the HostCanon advantage: lightning-fast, secure, and reliable web hosting that never compromises. Our expert migration team handles everything while your site remains fully operational throughout the entire process.</p>
        </div>
        
        <div class="migration-grid">
            <div class="migration-box">
                <div class="migration-number">1</div>
                <div class="migration-box-icon">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </div>
                <h3>Select Your Plan</h3>
                <p>Choose the perfect hosting plan for your website needs with our easy-to-understand comparison tools.</p>
            </div>
            
            <div class="migration-box">
                <div class="migration-number">2</div>
                <div class="migration-box-icon">
                    <i class="bi bi-file-earmark-text-fill"></i>
                </div>
                <h3>Quick Migration Form</h3>
                <p>Fill in a few simple details about your current hosting setup, and we'll handle the technical aspects.</p>
            </div>
            
            <div class="migration-box">
                <div class="migration-number">3</div>
                <div class="migration-box-icon">
                    <i class="bi bi-cup-hot-fill"></i>
                </div>
                <h3>We Handle The Rest</h3>
                <p>Relax while our experts seamlessly transfer your website. We'll notify you once everything is optimized.</p>
            </div>
        </div>
        
        <div class="migration-cta">
            <a href="#" class="migration-button">
                <i class="bi bi-arrow-right-circle"></i> Get Started
            </a>
        </div>
    </section>

    <!-- Success -->

    <section class="success">
        <h2>Everything You Need for Online Success</h2>
        <div class="addon-section">
            <div class="addon-card">
                <h3 class="sub">Domain Registration</h3>
                <p class="paragraph">Secure your perfect domain in minutes at competitive prices.</p>
                <a href="#" class="calltoaction-button">Get Started Now</a>
            </div>
            <div class="addon-card">
                <h3 class="sub">SSL Certificates</h3>
                <p class="paragraph">Protect your website with industry-leading security solutions.</p>
                <a href="#" class="calltoaction-button">View Pricing</a>
            </div>
            <div class="addon-card">
                <h3 class="sub">Advanced Server Management & Security</h3>
                <p class="paragraph">Keep your online business running smoothly with premium tools and services.</p>
                <a href="#" class="calltoaction-button">Explore More Solutions</a>
            </div>
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