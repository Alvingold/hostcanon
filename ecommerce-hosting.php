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
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease; 
        }

        .btn-primary:hover::before {
            left: 100%;
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
           /* display: inline-block;*/
        }
        
       /* .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }*/
        
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
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            font-size: 1.8rem;
            color: white;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
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
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            font-size: 1.8rem;
            color: white;
            margin: 0 auto;
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
    </style>
</head>
<body class="ecommerce-page loading">
    
<?php include('assets/includes/nav-bar.php'); ?>
<?php include('assets/includes/preloader.php'); ?>
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
            <p class="text-center" data-aos="fade-up" data-aos-delay="100">Our e-commerce hosting solutions are designed to provide you with everything you need to run a successful online store. Here are some of the key features:</p>
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
            <p class="text-center" data-aos="fade-up" data-aos-delay="100">We support a variety of popular e-commerce platforms, making it easy for you to set up and manage your online store.</p>
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
            <p class="text-center" data-aos="fade-up" data-aos-delay="100">Select the plan that best fits your business needs. All plans come with a 30-day money-back guarantee!</p>
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
                                <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                                <li><i class="bi bi-check-circle"></i> Basic CDN</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Premium Themes</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Dedicated IP</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Performance Optimization</li>
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
                                <li><i class="bi bi-check-circle"></i> 30GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 3 Websites</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                                <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                                <li><i class="bi bi-check-circle"></i> Premium CDN</li>
                                <li><i class="bi bi-check-circle"></i> Premium Themes</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Dedicated IP</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Performance Optimization</li>
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
                                <li><i class="bi bi-check-circle"></i> Unlimited Websites</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificate</li>
                                <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                                <li><i class="bi bi-check-circle"></i> Premium CDN</li>
                                <li><i class="bi bi-check-circle"></i> Premium Themes</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Dedicated IP</li>
                                <li><i class="bi bi-check-circle"></i> Performance Optimization</li>
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