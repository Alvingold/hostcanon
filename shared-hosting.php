<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Hosting - Fast & Reliable Web Hosting Solutions</title>
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4B0082;
            --secondary-color: #6A0DAD;
            --accent-color: #9370DB;
            --text-light: #FFFFFF;
            --text-dark: #333333;
            --section-padding: 80px 0;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
            background-color: #f9f9f9;
        }

         /* Hero Section */
         .hero-section {
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            color: white;
            padding: 180px 0 100px;
            position: relative;
            overflow: hidden;
        }
                
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .btn {
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

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
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
            padding: 80px 0;
        }
        
        .section-title h2{
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.6rem;
                font-weight: 600;
            }
        }
        
        .feature-card {
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Shared Hosting Benefits Section Styles */
.benefits-section {
    padding: 100px 0;
    background-color: #f8f9fa;
    overflow: hidden;
}

.benefits-section .section-title h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 25px;
    color: var(--primary-color);
    line-height: 1.3;
}

@media (max-width: 768px) {
    .benefits-section .section-title h2 {
        font-size: 1.8rem;
    }
}

.benefits-list {
    margin-top: 30px;
}

.benefit-item {
    margin-bottom: 20px;
}

.benefit-item h5 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: #333;
}

.benefit-item p {
    font-size: 0.95rem;
    color: #666;
    margin-bottom: 0;
}

.benefit-icon {
    flex-shrink: 0;
    color: var(--primary-color);
    font-size: 1.5rem;
}
.benefit a{
     background: linear-gradient(135deg, #4B0082, #932C8B);
     border: none;
     border-radius: 30px;
}

.benefits-image {
    position: relative;
    padding: 20px;
    border-radius: 20px;
}

.benefits-image img {
    box-shadow: 0 25px 50px rgba(75, 0, 130, 0.1);
    transition: all 0.5s ease;
}

.benefits-image:hover img {
    transform: translateY(-10px);
}

.stats-card {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border-radius: 15px; 
    bottom: -30px; 
    right: -30px; 
    max-width: 280px;
}

.stats-card h5{
    color: #4B0082;
}

.stats-card i{
    color: #4B0082; 
    font-size: 1.5rem;
}
.stats-card .start{
    width: 50px; 
    height: 50px; 
    border-radius: 12px; 
    background: rgba(75, 0, 130, 0.1); 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    margin-right: 15px;
}

.benefits-image:hover .stats-card {
    transform: translateY(-5px) translateX(-5px);
}

.btn-primary {
    background: linear-gradient(135deg, #4B0082, #932C8B);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(75, 0, 130, 0.2);
}

/* Animation styles for AOS */
[data-aos="fade-right"] {
    transform: translateX(-50px);
    opacity: 0;
    transition-property: transform, opacity;
}

[data-aos="fade-left"] {
    transform: translateX(50px);
    opacity: 0;
    transition-property: transform, opacity;
}

[data-aos="fade-right"].aos-animate,
[data-aos="fade-left"].aos-animate {
    transform: translateX(0);
    opacity: 1;
}

 /* FAQ Section */
 .faq-section {
            background-color: #f5f5f5;
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 1rem;
            border-radius: 15px !important;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .accordion-button {
            padding: 1.5rem;
            font-weight: 600;
            color: #2d2d2d;
            background: white;
            border: none;
            box-shadow: none;
        }
        
        .accordion-button:not(.collapsed) {
            color: #4B0082;
            background: linear-gradient(to right, rgba(75, 0, 130, 0.05), transparent);
        }

        .faq-section .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234B0082'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transition: all 0.3s ease;
        }
        
        .accordion-body {
            padding: 20px;
            background-color: white;
        }

.cta-section {
            background-color: var(--primary-color);
            padding: var(--section-padding);
            text-align: center;
            color:white
        }

        .cta-section h2 {
            font-weight: 700;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
<?php include 'assets/includes/preloader.php';
    include 'assets/includes/nav-bar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
    <div class="hero-shape"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="hero-title">Reliable Shared Hosting for Your Website</h1>
                <p class="hero-subtitle">Fast, secure, and affordable web hosting with 99.9% uptime guarantee. Get started in minutes with our easy setup process.</p>
                <a href="#pricing" class="btn btn-primary mb-4">View Pricing Plans</a>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0" data-aos="fade-left">
                <img src="assets/media/reseller.png" alt="Reseller Hosting Illustration" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="features-section" id="features">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Why Choose Our shared Hosting</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">We provide the best hosting experience with cutting-edge technology and reliable service.</p>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="bi bi-rocket-takeoff feature-icon"></i>
                        <h3 class="feature-title">Lightning Fast Speeds</h3>
                        <p>Our SSD-based infrastructure and optimized server configurations ensure your website loads quickly for visitors.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h3 class="feature-title">superior Security</h3>
                        <p>Free SSL certificates, daily backups, and advanced security features keep your website safe from threats.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="bi bi-headset feature-icon"></i>
                        <h3 class="feature-title">24/7 Expert Support</h3>
                        <p>Our knowledgeable support team is available around the clock to assist you with any issues.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <i class="bi bi-hdd-stack feature-icon"></i>
                        <h3 class="feature-title">99.9% Uptime Guarantee</h3>
                        <p>We promise reliable hosting with minimal downtime, backed by our service level agreement.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <i class="bi bi-mouse feature-icon"></i>
                        <h3 class="feature-title">One-Click Installations</h3>
                        <p>Install popular CMS platforms like WordPress, Joomla, and more with just a single click.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <i class="bi bi-arrow-repeat feature-icon"></i>
                        <h3 class="feature-title">Free Migrations</h3>
                        <p>We'll transfer your existing website to our servers for free, making the switch painless.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
 <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Choose Your Shared Hosting Plan</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Select the perfect hosting solution for your needs with our flexible and affordable plans. All plans include 24/7 support and a 30-day money-back guarantee.</p>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                        <h3>Shared Starter</h3>
                        <div class="price-tag">$2.99<span class="price-duration">/mo</span></div>
                        <p>Perfect for personal websites and blogs</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> 10GB SSD Storage</li>
                            <li><i class="bi bi-check-circle"></i> 1 Website</li>
                            <li><i class="bi bi-check-circle"></i> 100GB Bandwidth</li>
                            <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                            <li><i class="bi bi-check-circle"></i> 5 Email Accounts</li>
                            <li><i class="bi bi-x-circle text-danger"></i> Daily Backups</li>
                            <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                            <li><i class="bi bi-x-circle text-danger"></i> CDN Integration</li>
                            <li><i class="bi bi-x-circle text-danger"></i> Dedicated IP</li>
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
                        <h3>Shared Basic</h3>
                        <div class="price-tag">$4.99<span class="price-duration">/mo</span></div>
                        <p>Great for small projects and starting businesses</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> 30GB SSD Storage</li>
                            <li><i class="bi bi-check-circle"></i> 3 Websites</li> 
                            <li><i class="bi bi-check-circle"></i> 500GB Bandwidth</li>
                            <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                            <li><i class="bi bi-check-circle"></i> Unlimited Email Accounts</li>
                            <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                            <li><i class="bi bi-check-circle"></i> Priority Support</li>
                            <li><i class="bi bi-x-circle text-danger"></i> CDN Integration</li>
                            <li><i class="bi bi-x-circle text-danger"></i> Dedicated IP</li>
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
                        <h3>Shared Business</h3>
                        <div class="price-tag">$7.99<span class="price-duration">/mo</span></div>
                        <p>Ideal for growing businesses and e-commerce</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> 100GB SSD Storage</li>
                            <li><i class="bi bi-check-circle"></i> Unlimited Websites</li>
                            <li><i class="bi bi-check-circle"></i> 2TB Bandwidth</li>
                            <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                            <li><i class="bi bi-check-circle"></i> Unlimited Email Accounts</li>
                            <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                            <li><i class="bi bi-check-circle"></i> Priority Support</li>
                            <li><i class="bi bi-check-circle"></i> CDN Integration</li>
                            <li><i class="bi bi-check-circle"></i> Dedicated IP</li>
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
    <!-- Shared Hosting Benefits Section -->
<section class="benefits-section py-5" id="benefits">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="section-title">
                    <h2>We provide Shared Hosting with unbeatable features and benefits</h2>
                </div>
                <p class="mb-4">Our shared hosting solutions are designed to give you maximum performance, security, and value. Whether you're launching your first website or managing multiple projects, we've got you covered.</p>
                
                <div class="benefits-list">
                    <div class="benefit-item d-flex align-items-start mb-3">
                        <div class="benefit-icon me-3">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div>
                            <h5>Free Domain Registration</h5>
                            <p>Get a free domain name for the first year with any annual hosting plan.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex align-items-start mb-3">
                        <div class="benefit-icon me-3">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div>
                            <h5>SSD Storage</h5>
                            <p>Lightning-fast solid-state drives for superior website performance.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex align-items-start mb-3">
                        <div class="benefit-icon me-3">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div>
                            <h5>Free Website Migration</h5>
                            <p>Our expert team will transfer your existing website for free.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex align-items-start">
                        <div class="benefit-icon me-3">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div>
                            <h5>30-Day Money-Back Guarantee</h5>
                            <p>Try our hosting risk-free with our no-questions-asked refund policy.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="#pricing" class="btn btn-primary px-4 py-2">View Hosting Plans</a>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="benefits-image position-relative">
                    <img src="assets/media/security-features.png" alt="Shared Hosting Benefits" class="img-fluid rounded shadow">
                    <div class="stats-card position-absolute p-4 bg-white shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="start">
                                <i class="bi bi-rocket"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">99.9%</h5>
                                <p class="mb-0 text-muted">Uptime Guarantee</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="start">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">2X</h5>
                                <p class="mb-0 text-muted">Faster Loading</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- FAQ Section -->
    <section class="faq-section py-5" id="faq">
        <div class="container">
            <h2 class="section-title text-center mb-4" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is shared hosting?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Shared hosting is a type of web hosting where multiple websites share the same server resources. This makes it a cost-effective solution for individuals and small businesses.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How do I migrate my website to your shared hosting?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our team will assist you with the migration process. Simply contact our support team, and we will guide you through the steps.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can I upgrade my plan later?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, you can easily upgrade your hosting plan at any time. Just contact our support team for assistance.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What payment methods do you accept?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We accept various payment methods including credit cards, PayPal, and bank transfers.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Is there a money-back guarantee?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer a 30-day money-back guarantee on all our hosting plans.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Do you offer a free trial?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We do not offer a free trial, but you can take advantage of our 30-day money-back guarantee to test our services risk-free.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Call to Action Section -->
    <section class="cta-section text-center"  data-aos="fade-right">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Join thousands of satisfied customers and experience the best shared hosting service.</p>
            <a href="#pricing" class="btn btn-primary">Get Started Now</a>
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