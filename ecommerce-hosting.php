<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Hosting</title>
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
   <!-- <link rel="stylesheet" href="assets/css/style.css">-->
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
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 180px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
            background-image: url('assets/media/pattern.svg');
            background-size: cover;
            opacity: 0.1;
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
        
        .btn-primary {
            background-color: var(--accent-color);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
          /* Features Section */
          .features-section {
            padding: var(--section-padding);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
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
            font-size: 1.9rem;
            color: white;
            margin-bottom: 20px;
            padding: 5px; 
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            border-radius: 12px;
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        /* Pricing section styles */
        .pricing-section {
            padding: var(--section-padding);
            background-color: #f5f5f5;
        }
        
        .pricing-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .pricing-header {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 30px 20px;
            text-align: center;
        }
        
        .price-tag {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 15px 0;
        }
        
        .price-duration {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .pricing-features {
            padding: 30px;
        }
        
        .pricing-features ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .pricing-features li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .pricing-features li:last-child {
            border-bottom: none;
        }
        
        .pricing-features i {
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .pricing-footer {
            padding: 20px 30px 30px;
            text-align: center;
        }
        
        .popular-badge {
            background-color: var(--accent-color);
            color: white;
            padding: 5px 10px;
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        /* Platforms section */
        .platforms-section {
            padding: var(--section-padding);
        }
        
        .platform-card {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .platform-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .platform-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .platform-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        /* FAQ Section */
        .faq-section {
            padding: var(--section-padding);
            background-color: #f5f5f5;
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .accordion-button {
            font-weight: 600;
            padding: 20px;
            background-color: white;
            color: var(--text-dark);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: var(--primary-color);
            color: var(--text-light);
        }
        
        .accordion-button:focus {
            box-shadow: none;
        }
        
        .accordion-body {
            padding: 20px;
            background-color: white;
        }
        
        /* Call to action section */
        .cta-section {
            padding: var(--section-padding);
            background-color: var(--primary-color);
            color: var(--text-light);
            text-align: center;
        }
        
        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-subtitle {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        /* Testimonial section */
        .testimonial-section {
            padding: var(--section-padding);
        }
        
        .testimonial-card {
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            height: 100%;
            position: relative;
        }
        
        .testimonial-card::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: var(--primary-color);
            opacity: 0.2;
            line-height: 1;
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            padding-left: 30px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }
        
        .author-info h5 {
            margin-bottom: 0;
            font-weight: 600;
        }
        
        .author-info p {
            margin-bottom: 0;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Footer styles */
        .footer {
            background-color: #222;
            color: #fff;
            padding: 70px 0 20px;
        }
        
        .footer-logo {
            margin-bottom: 20px;
        }
        
        .footer-about {
            margin-bottom: 30px;
        }
        
        .footer-heading {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--accent-color);
            padding-left: 5px;
        }
        
        .footer-contact-item {
            display: flex;
            margin-bottom: 15px;
        }
        
        .footer-contact-icon {
            margin-right: 15px;
            color: var(--accent-color);
        }
        
        .social-icons {
            display: flex;
            margin-top: 20px;
        }
        
        .social-icons a {
            width: 35px;
            height: 35px;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 10px;
            color: #fff;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            font-size: 0.9rem;
        }
        
        /* Live chat button */
        .live-chat-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
            transition: all 0.3s ease;
        }
        
        .live-chat-btn:hover {
            background-color: var(--secondary-color);
            transform: scale(1.1);
        }

        /* Updated Pricing Section */
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
    </style>
</head>
<body class="ecommerce-page loading">
    
<?php include('assets/includes/nav-bar.php'); ?>
 <!-- Hero Section -->
 <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Ecommerce Hosting</h1>
                    <p class="hero-subtitle">Ready to launch an online commerce store? Select from a plethora of our managed e-commerce hosting solutions with unlimited bandwidth and jumpstart your business today!</p>
                    <a href="#pricing" class="btn btn-primary">View Pricing Plans</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/ecommerce.png" alt="Reseller Hosting Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

     <!-- Features Section -->
     <section class="features-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Why Choose Our E-commerce Hosting</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="bi bi-rocket-takeoff feature-icon"></i>
                        <h3 class="feature-title">Blazing Fast Speed</h3>
                        <p>Your customers will love the lightning-fast loading times, ensuring they stay engaged and happy. We use cutting-edge technology to keep your site running smoothly.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="bi bi-shield-lock feature-icon"></i>
                        <h3 class="feature-title">Top-Notch Security</h3>
                        <p>We take security seriously! Your data and your customers' information are protected with advanced security measures, giving you peace of mind.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="bi bi-headset feature-icon"></i>
                        <h3 class="feature-title">24/7 Friendly Support</h3>
                        <p>Got a question or need help? Our friendly support team is available around the clock to assist you. We're here to help you succeed, every step of the way.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <i class="bi bi-gear feature-icon"></i>
                        <h3 class="feature-title">Easy-to-Use Tools</h3>
                        <p>Our platform comes with intuitive tools that make managing your online store a breeze. No tech headaches here! We want you to focus on what you do best: selling.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <i class="bi bi-graph-up feature-icon"></i>
                        <h3 class="feature-title">Scalable Resources</h3>
                        <p>As your business grows, so do your hosting needs. Our scalable resources ensure your site can handle increased traffic and sales without a hitch.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <i class="bi bi-cloud-check feature-icon"></i>
                        <h3 class="feature-title">Reliable Uptime</h3>
                        <p>We guarantee high uptime, so your store is always available to your customers. Say goodbye to downtime worries and hello to consistent sales!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-commerce Platforms Section -->
    <section class="platforms-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Supported E-commerce Platforms</h2>
            <div class="row mt-5">
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="platform-card">
                        <i class="bi bi-shop platform-icon"></i>
                        <h3 class="platform-title">WooCommerce</h3>
                        <p>WordPress-based solution perfect for small to medium businesses looking for customization and flexibility.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="platform-card">
                        <i class="bi bi-cart-plus platform-icon"></i>
                        <h3 class="platform-title">Shopify</h3>
                        <p>User-friendly platform with beautiful templates and integrated payment processing.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="platform-card">
                        <i class="bi bi-box-seam platform-icon"></i>
                        <h3 class="platform-title">Magento</h3>
                        <p>Robust solution for larger businesses with complex inventory and international sales needs.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="platform-card">
                        <i class="bi bi-basket platform-icon"></i>
                        <h3 class="platform-title">OpenCart</h3>
                        <p>Lightweight open-source solution with a wide range of extensions and themes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Choose Your E-commerce Hosting Plan</h2>
            <div class="row mt-5">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Starter</h3>
                            <div class="price-tag">$9.99<span class="price-duration">/month</span></div>
                            <p>Perfect for new stores</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 10GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 1 Website</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                                <li><i class="bi bi-check-circle"></i> 1-Click Installs</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                                <li><i class="bi bi-check-circle"></i> Up to 10,000 Monthly Visitors</li>
                                <li><i class="bi bi-check-circle"></i> 99.9% Uptime Guarantee</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <span class="popular-badge">Most Popular</span>
                            <h3>Business</h3>
                            <div class="price-tag">$24.99<span class="price-duration">/month</span></div>
                            <p>Ideal for growing businesses</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 50GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 5 Websites</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                                <li><i class="bi bi-check-circle"></i> 1-Click Installs</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                                <li><i class="bi bi-check-circle"></i> Up to 50,000 Monthly Visitors</li>
                                <li><i class="bi bi-check-circle"></i> 99.9% Uptime Guarantee</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Enterprise</h3>
                            <div class="price-tag">$49.99<span class="price-duration">/month</span></div>
                            <p>For high-traffic stores</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 100GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 10 Websites</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                                <li><i class="bi bi-check-circle"></i> 1-Click Installs</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                                <li><i class="bi bi-check-circle"></i> Up to 100,000 Monthly Visitors</li>
                                <li><i class="bi bi-check-circle"></i> 99.9% Uptime Guarantee</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is e-commerce hosting?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            E-commerce hosting is a type of web hosting service that is optimized for online stores. It provides the necessary resources and features to run an e-commerce website, such as secure payment processing, shopping cart functionality, and inventory management tools.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What are the benefits of e-commerce hosting?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            E-commerce hosting offers several benefits, including fast loading times, secure transactions, scalability, and reliable uptime. It also provides tools and features to help you manage your online store more efficiently and effectively.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I choose the right e-commerce hosting plan?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            When choosing an e-commerce hosting plan, consider factors such as your store's size, traffic volume, budget, and technical requirements. Look for a plan that offers the right balance of resources, features, and support to meet your needs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I upgrade my e-commerce hosting plan?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, most e-commerce hosting providers offer scalable plans that allow you to upgrade or downgrade your hosting resources as needed. This flexibility ensures that your online store can grow and adapt to changing demands.
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title" data-aos="fade-up">Ready to Launch Your Online Store?</h2>
            <p class="cta-subtitle" data-aos="fade-up" data-aos-delay="100">Choose from our e-commerce hosting plans and start selling online today. We're here to help you succeed!</p>
            <a href="#pricing" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">Get Started</a>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="testimonial-content">"I've been using Afriportal's e-commerce hosting for my online store, and I couldn't be happier. The speed and reliability are top-notch, and the support team is always there to help when I need it."</p>
                        <div class="testimonial-author">
                            <img src="assets/media/user-1.jpg" alt="User 1" class="author-image">
                            <div class="author-info">
                                <h5>John Doe</h5>
                                <p>Owner, Doe's Deals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="testimonial-content">"Afriportal's e-commerce hosting has been a game-changer for my business. The platform is easy to use, and the features are exactly what I need to manage my store effectively. I highly recommend it!"</p>
                        <div class="testimonial-author">
                            <img src="assets/media/user-2.jpg" alt="User 2" class="author-image">
                            <div class="author-info">
                                <h5>Jane Smith</h5>
                                <p>CEO, Smith's Store</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <img src="assets/media/afriportal.png" alt="Afriportal Logo" class="footer-logo">
                    <p class="footer-about">Afriportal is a leading web hosting provider that offers a wide range of hosting solutions for businesses and individuals. We provide high-quality hosting services at affordable prices to help our customers succeed online.</p>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="Reseller_hosting.php">Reseller Hosting</a></li>
                        <li><a href="ecommerce_hosting.php">E-commerce Hosting</a></li>
                        <li><a href="social_hosting.php">Social Network Hosting</a></li>
                        <li><a href="email_hosting.php">Email Hosting</a></li>
                        <li><a href="CRM_hosting.php">CRM Hosting</a></li>
                        <li><a href="radia_hosting.php">Radia Hosting</a></li>
                        <li><a href="envato_hosting.php">Envato Hosting</a></li>
                        <li><a href="websitechecker.php">Website Uptime Checker</a></li>
                    </ul>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="footer-heading">Contact Us</h5>
                    <div class="footer-contact-item">
                        <i class="bi bi-geo-alt footer-contact-icon"></i>
                        <p>123 Street, City, Country</p>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-telephone footer-contact-icon"></i>
                        <p>+1 234 567890</p>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-envelope footer-contact-icon"></i>
                        <p>
                            <a href="mailto:

                            ">

                            </a>
                        </p>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-instagram"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                    </div>
                </div>
    </footer>
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