<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Hosting</title>

    <?php include 'assets/includes/optimize-loading.php'; ?>

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
    <link rel="stylesheet" href="assets/css/currency.css">
    <style>
        :root {
            --primary-color: #4B0082;
            --secondary-color: #6A0DAD;
            --light-color: #F8F9FA;
            --dark-color: #212529;
            --accent-color: #FFD700;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            background-color: var(--primary-color);
            color: white;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }

        .hero-btn .btn-primary:hover::before {
            left: 100%;
        }

        .hero-btn .btn-outline-light {
            color: white;
            border: none;
            border-radius: 50px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-left: 10px;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            box-shadow: 0 5px 15px rgba(75, 0, 130, 0.2);
        }

        .hero-btn .btn-outline-light:hover {
            color: white;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
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

        /* Features Section */
        .features-section {
            padding: 100px 0;
            background-color: var(--light-color);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
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
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        /* Platforms section */
        .platforms-section {
            padding: var(--section-padding);
        }

        /* Use flexbox to equalize heights */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Ensures all cards have the same height */
        .platform-card {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            /* Makes all cards equal */
            display: flex;
            flex-direction: column;
            /* Align content in a column */
            justify-content: space-between;
            /* Distributes content evenly */
        }

        /* Platforms section title color */
        .platforms-section .section-title {
            color: var(--primary-color);
            /* Matches the primary theme color */
            font-weight: 700;
            /* Optional: Makes it bold */
            text-transform: capitalize;
            /* Optional: Adjusts styling */
            margin-top: 30px;
        }

        /* Reduce hover effect */
        .platform-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        /* Adjust icon size */
        .platform-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        /* Adjust title */
        .platform-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Ensure consistent text size */
        .platform-card p {
            font-size: 0.9rem;
            line-height: 1.4;
            flex-grow: 1;
            /* Ensures equal height even with different text lengths */
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
            transition: all 0.3s ease;
        }

        .accordion-body {
            padding: 20px;
            background-color: white;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
        }

        .cta-section .btn-light {
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

        .cta-section .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.3);
            color: white;
        }

        .cta-section .btn-light::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }

        .cta-section .btn-light:hover::before {
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
            background: linear-gradient(45deg, transparent 45%, rgba(255, 255, 255, 0.1) 45%, rgba(255, 255, 255, 0.1) 55%, transparent 55%);
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
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
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

<body class="email-page loading">

    <?php include('assets/includes/nav-bar.php'); ?>
    <?php include 'assets/includes/preloader.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Professional Email Hosting Solutions</h1>
                    <p class="hero-subtitle">Elevate your business communication with secure, reliable, and professional email hosting services tailored for African businesses.</p>
                    <div class="hero-btn d-flex gap-3">
                        <a href="#pricing" class="btn btn-primary">View Plans</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/email.webp" alt="Email Hosting" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Why Choose Our Email Hosting</h2>
                <p>Designed for reliability, security, and ease of use</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="feature-title">Advanced Security</h4>
                        <p>Enterprise-grade spam filtering, anti-virus protection, and encryption to keep your communications secure.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="feature-title">Multi-Device Access</h4>
                        <p>Access your emails from any device with our responsive webmail interface or set up on your favorite email client.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cloud-check"></i>
                        </div>
                        <h4 class="feature-title">99.9% Uptime</h4>
                        <p>Our redundant infrastructure ensures your emails are always available when you need them.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4 class="feature-title">Professional Identity</h4>
                        <p>Create email addresses with your own domain name to establish a professional brand identity.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4 class="feature-title">Scalable Storage</h4>
                        <p>Start with what you need and easily upgrade as your business grows with flexible storage options.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="feature-title">24/7 Local Support</h4>
                        <p>Our Africa-based support team is available around the clock to help with any issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-commerce Platforms Section -->
    <section class="platforms-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Set Up Your Email Hosting in a Few Clicks</h2>
            <div class="row mt-5">
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="platform-card">
                        <i class="bi bi-1-circle platform-icon"></i>
                        <h3 class="platform-title">Choose an email hosting plan</h3>
                        <p>Running a new business? Go with the US$ 0.59/mo Business Starter plan. If you need more resources, opt for the US$ 2.99/mo Business Premium plan. Note that prices are per mailbox.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="platform-card">
                        <i class="bi bi-2-circle platform-icon"></i>
                        <h3 class="platform-title">Proceed to checkout</h3>
                        <p>Select the number of mailboxes and subscription period. Once you’ve completed the payment process, you will be able to access your business email address dashboard.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="platform-card">
                        <i class="bi bi-3-circle platform-icon"></i>
                        <h3 class="platform-title">Configure your email hosting</h3>
                        <p>Finally, create a business email account based on your own domain name, like your email@yourdomain.com set up the DNS settings, and sync your email to other devices. That’s it – you can start sending your emails.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="platform-card">
                        <i class="bi bi-4-circle platform-icon"></i>
                        <h3 class="platform-title">Test & Monitor Email Performance</h3>
                        <p>Send test emails to confirm that everything is working.Check your spam folder to ensure your emails are not being flagged.Use email tracking tools (like Google Postmaster Tools) to monitor deliverability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Choose Your Email Hosting Plan</h2>
                <p>Affordable solutions for businesses of all sizes</p>
            </div>
            <?php include 'assets/includes/currency-selector.php'; ?>
            <div class="row mt-5 g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Startup</h3>
                            <div class="price-tag" id="plan-0-price">$2.99<span class="price-duration">/month</span></div>
                            <p>Perfect for small businesses</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 10GB Storage</li>
                                <li><i class="bi bi-check-circle"></i> 5 Email Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Spam Protection</li>
                                <li><i class="bi bi-check-circle"></i> Webmail Access</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Custom Domain</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Mobile Sync</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Advanced Security</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Business</h3>
                            <div class="price-tag" id="plan-1-price">$5.99<span class="price-duration">/month</span></div>
                            <p>For growing teams</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 25GB Storage</li>
                                <li><i class="bi bi-check-circle"></i> 15 Email Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Spam Protection</li>
                                <li><i class="bi bi-check-circle"></i> Webmail Access</li>
                                <li><i class="bi bi-check-circle"></i> Custom Domain</li>
                                <li><i class="bi bi-check-circle"></i> Mobile Sync</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Advanced Security</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Enterprise</h3>
                            <div class="price-tag" id="plan-2-price">$11.99<span class="price-duration">/month</span></div>
                            <p>For large organizations</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 50GB Storage</li>
                                <li><i class="bi bi-check-circle"></i> Unlimited Email Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Spam Protection</li>
                                <li><i class="bi bi-check-circle"></i> Webmail Access</li>
                                <li><i class="bi bi-check-circle"></i> Custom Domain</li>
                                <li><i class="bi bi-check-circle"></i> Mobile Sync</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Advanced Security</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include the currency converter script -->
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our email hosting services</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    what is email hosting?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Email hosting is a dedicated service that works independently from website hosting. So even while getting everything set up, your business will still be able to operate at full scale.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I use my own domain name with your email hosting?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, all our email hosting plans allow you to use your own domain name. If you don't have a domain yet, we can help you register one, or you can use your existing domain with our email services.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I access my emails after signing up?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can access your emails through our webmail interface using any web browser, or set up your account with email clients like Microsoft Outlook, Apple Mail, or mobile applications. We provide detailed setup guides for all major platforms.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is migration from my current email provider included?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, our Business and Enterprise plans include free email migration services. Our team will help you transfer your existing emails, contacts, and calendar data from your current provider to our platform with minimal disruption.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What security measures do you have in place?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our email hosting includes multi-layer spam filtering, antivirus protection, TLS/SSL encryption for all communications, and two-factor authentication options. Business and Enterprise plans also include advanced phishing protection and email archiving.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can I upgrade my plan as my business grows?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! You can easily upgrade your email hosting plan at any time through your control panel. The transition is seamless with no downtime, and you'll only pay the prorated difference for the remainder of your billing cycle.
                                </div>
                            </div>
                        </div>
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
    <script>
        // Global Currency Converter for Hosting Site Pricing Plans

        // Main pricing plans in USD
        const pricingPlans = [{
                name: "Startup",
                price: 2.99,
                features: ["10GB  Storage", "5 Email Accounts", "Spam Protection", "Webmail Access", "Custom Domain", "Mobile Sync", " Priority Support", "Advanced Security"]
            },
            {
                name: "Business",
                price: 5.99,
                features: ["25GB Storage", "15 Email Accounts", "Spam Protection", "Webmail Access", "Custom Domain", "Mobile Sync", "priority Support", "Advanced Security"]
            },
            {
                name: "Enterprise",
                price: 11.99,
                features: ["50GB Storage", "Unlimited Email Accounts", "Spam Protection", "Webmail Access", "Custom Domain", "Mobile Sync", "Priority Support", "Performance Optimization"]
            }
        ];
    </script>
</body>

</html>