<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Support Services</title>

    <?php include 'assets/includes/optimize-loading.php'; ?>
    
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .server-page .hero-section {
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.95), rgba(147, 44, 139, 0.95));
            padding: 160px 0 100px;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            background: url('assets/media/hero-img.webp') no-repeat center center/cover;
            opacity: 0.1;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
            max-width: 100%;
        }

        .hero-btn .btn{
            background: linear-gradient(135deg, #4B0082, #932C8B);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(75, 0, 130, 0.2);
            position: relative;
            overflow: hidden;  
        }

        .hero-btn .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;
        }

        .hero-btn .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1) 45%, rgba(255,255,255,0.1) 55%, transparent 55%);
            transition: all 0.4s ease;
        }

        .hero-btn .btn:hover::before {
            left: 100%;
        }

        .hero-btn .btn-outline-light {
            background: transparent;
            color: white;
            border: 2px solid white;
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .hero-btn .btn-outline-light:hover {
            background: white;
            color: #4B0082;
            border-color: transparent;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
            background: transparent;
        }

        .stat-icon {
            font-size: 2rem;
            color: orange;
            flex-shrink: 0;
        }

        .stat-content {
            display: flex;
            flex-direction: column;
        }

        .stat-title {
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            line-height: 1.2;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            line-height: 1.4;
        }

        @media (max-width: 768px) {
            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .hero-section::before{
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

        /* Migration Section Styles */
        .migration-section {
            padding: 100px 0;
            background: white;
        }

        .migration-process {
            position: relative;
            padding: 2rem 0;
        }

        .migration-step {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .migration-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(75, 0, 130, 0.1);
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .migration-connect {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #4B0082, #932C8B);
            z-index: 0;
        }

        @media (max-width: 768px) {
            .migration-connect {
                display: none;
            }
        }

        .migration-btn .btn{
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

        .migration-btn .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;   
        }

        .migration-btn .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .migration-btn .btn:hover::before {
            left: 100%;
        }

        .support-section {
            padding: 100px 0;
            background: #f8f9fa;
            position: relative;
            overflow: hidden;
        }

        .support-image {
            position: relative;
            height: 100%;
            min-height: 400px;
        }

        .support-image img {
            position: absolute;
            right: -50px;
            top: 50%;
            transform: translateY(-50%);
            width: 580px;
            height: 400px;
            object-fit: contain;
            box-shadow: none;
            border-radius: 0;
        }

        @media (max-width: 991.98px) {
            .support-image img {
                width: 100%;
                height: 350px;
                right: 0;
            }
        }

        .support-section .btn {
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

        .support-section .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;
        }

        .support-section .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .support-section .btn:hover::before {
            left: 100%;
        }
    </style>
</head>
<body class="server-page loading">
    <?php include 'assets/includes/preloader.php'; ?>
    <?php include 'assets/includes/nav-bar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <h1 class="display-4 fw-bold text-white mb-4">Server Support Services</h1>
                    <p class="lead text-white mb-4">Technical support communicates with customers and fulfills their requests from 09:00 to 18:00 local time. If you need to do something at night, for example, when there is less traffic, you must first agree with support agent.</p>
                    <div class="hero-btn d-flex gap-3 mb-5">
                        <a href="#pricing" class="btn btn-primary btn-lg">View Pricing</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Contact Sales</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-graph-up-arrow stat-icon"></i>
                            <div class="stat-content">
                                <div class="stat-title">Growing Network</div>
                            </div>
                        </div>
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-headset stat-icon"></i>
                            <div class="stat-content">
                                <div class="stat-title">24x7 Sales Support</div>
                            </div>
                        </div>
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-gear-wide-connected stat-icon"></i>
                            <div class="stat-content">
                                <div class="stat-title">Technical After Sales Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape"></div>
    </section>

    <!-- Server Support Services -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Server Support Service Our Basic Plans</h2>
            <p class="text-center text-muted mt-3 mb-5 fw-bold" data-aos="fade-up" data-aos-delay="100">Choose the plan that best suits your needs</p>
            <div class="row mt-5">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Economy</h3>
                            <div class="price-tag">₦25,000<span class="price-duration">/month</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 10GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> Basic Server Monitoring</li>
                                <li><i class="bi bi-check-circle"></i> Email Support</li>
                                <li><i class="bi bi-check-circle"></i> Weekly Backups</li>
                                <li><i class="bi bi-check-circle"></i> Security Updates</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Performance Optimization</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Dedicated Support Team</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Custom Solutions</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Standard</h3>
                            <div class="price-tag">₦45,000<span class="price-duration">/month</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 50GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> Advanced Monitoring</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Email & Phone Support</li>
                                <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                                <li><i class="bi bi-check-circle"></i> Security Updates</li>
                                <li><i class="bi bi-check-circle"></i> Performance Optimization</li>
                                <li><i class="bi bi-check-circle"></i> Monthly Reports</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Dedicated Support Team</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Custom Solutions</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Business</h3>
                            <div class="price-tag">₦85,000<span class="price-duration">/month</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 100GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> Enterprise Monitoring</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Hourly Backups</li>
                                <li><i class="bi bi-check-circle"></i> Real-time Security Updates</li>
                                <li><i class="bi bi-check-circle"></i> Advanced Performance Tuning</li>
                                <li><i class="bi bi-check-circle"></i> Weekly Reports</li>
                                <li><i class="bi bi-check-circle"></i> Dedicated Support Team</li>
                                <li><i class="bi bi-check-circle"></i> Custom Solutions</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Migration Section -->
    <section class="migration-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h1 mb-3">Seamless Migration Process</h2>
                <p class="lead text-muted">We make switching to our services easy with our proven migration process</p>
            </div>
            
            <div class="migration-process">
                <div class="migration-connect d-none d-md-block"></div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="migration-step">
                            <div class="step-number">1</div>
                            <h3 class="h5 mb-3">Initial Assessment</h3>
                            <p class="mb-0">We evaluate your current setup and create a detailed migration plan tailored to your needs.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="migration-step">
                            <div class="step-number">2</div>
                            <h3 class="h5 mb-3">Data Transfer</h3>
                            <p class="mb-0">Secure transfer of your data, configurations, and applications with zero data loss.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="migration-step">
                            <div class="step-number">3</div>
                            <h3 class="h5 mb-3">Testing & Launch</h3>
                            <p class="mb-0">Thorough testing and validation before going live to ensure everything works perfectly.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="migration-btn text-center mt-5">
                <a href="#contact" class="btn btn-primary btn-lg">Start Your Migration</a>
            </div>
        </div>
    </section>

    <!-- 24/7 Support Section -->
    <section class="support-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="h3 fw-bolder mb-4">24/7 Expert Support Always at Your Service</h2>
                    <p class="lead fw-semibold text-muted mb-4">Our dedicated team of server specialists is available round the clock to ensure your infrastructure runs smoothly and your business never stops. With continuous monitoring and instant issue detection, we ensure maximum uptime and optimal performance for your servers.</p>
                    <div class="mt-4">
                        <a href="contacts.php" class="btn">
                            <i class="bi bi-headset me-2"></i>Contact Support
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="support-image">
                        <img src="assets/media/pattern.webp" alt="24/7 Support Team">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'assets/includes/footer.php'; ?>
    
    <?php include 'assets/includes/scroll-up.php'; ?>
    
    <!-- Contact Buttons -->
    <?php include 'assets/includes/contact-btn.php'; ?>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        AOS.init({
            duration: 800,
            once: true
        });

    </script>
</body>
</html>
