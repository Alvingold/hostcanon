<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Hosting - Afriportal</title>
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
        
        /* Navigation */
        .navbar {
            transition: all 0.3s ease;
            padding: 15px 0;
        }
        
        .navbar-brand img {
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }
        
        .navbar.scrolled .navbar-brand img {
            height: 35px;
        }
        
        .navbar .nav-link {
            color: var(--light-color);
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .navbar .nav-link:hover, .navbar .nav-link.active {
            color: var(--accent-color);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        
        .dropdown-item {
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        
        .dropdown-item:hover {
            background-color: rgba(75, 0, 130, 0.1);
            color: var(--primary-color);
        }
        
        /* Hero Section */
        .hero-section {
            background-color: var(--primary-color);
            color: white;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(100px, -200px);
        }
        
        .hero-section::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-100px, 100px);
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
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
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
    height: 100%; /* Makes all cards equal */
    display: flex;
    flex-direction: column; /* Align content in a column */
    justify-content: space-between; /* Distributes content evenly */
}

/* Platforms section title color */
.platforms-section .section-title {
    color: var(--primary-color); /* Matches the primary theme color */
    font-weight: 700; /* Optional: Makes it bold */
    text-transform: capitalize; /* Optional: Adjusts styling */
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
    flex-grow: 1; /* Ensures equal height even with different text lengths */
}

        /* Pricing Section */
        .pricing-section {
            padding: 100px 0;
            background-color: white;
        }
        
        .pricing-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .pricing-card.featured {
            border: 2px solid var(--primary-color);
            transform: scale(1.05);
        }
        
        .pricing-card.featured::before {
            content: "POPULAR";
            position: absolute;
            top: 15px;
            right: -25px;
            background: var(--primary-color);
            color: white;
            padding: 5px 30px;
            font-size: 0.8rem;
            font-weight: 600;
            transform: rotate(45deg);
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .pricing-card.featured:hover {
            transform: scale(1.05) translateY(-10px);
        }
        
        .price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 20px 0;
        }
        
        .price span {
            font-size: 1rem;
            color: #6c757d;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(106, 13, 173, 0.4);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(75, 0, 130, 0.3);
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 100px 0;
            background-color: var(--light-color);
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .accordion-header .accordion-button {
            padding: 20px 25px;
            font-weight: 600;
            background-color: white;
            color: var(--dark-color);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: white;
            color: var(--primary-color);
            box-shadow: none;
        }
        
        .accordion-button:focus {
            box-shadow: none;
        }
        
        .accordion-body {
            padding: 20px 25px;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 80px 0 20px;
        }
        
        footer h5 {
            font-weight: 600;
            margin-bottom: 25px;
        }
        
        footer .nav-link {
            color: rgba(255, 255, 255, 0.7);
            padding: 5px 0;
            transition: all 0.3s ease;
        }
        
        footer .nav-link:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 50px;
        }
        
        /* Responsive */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: var(--primary-color);
                padding: 20px;
                border-radius: 10px;
                margin-top: 10px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }
        
        /* Toggler Icon Animation */
        .navbar-toggler {
            border: none;
            padding: 0;
            width: 30px;
            height: 20px;
            position: relative;
            transition: .5s ease-in-out;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .toggler-icon {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: white;
            border-radius: 3px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }
        
        .middle-bar {
            margin-top: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .top-bar {
            top: 0;
        }
        
        .bottom-bar {
            bottom: 0;
        }
        
        .navbar-toggler.collapsed .top-bar {
            transform: rotate(0);
        }
        
        .navbar-toggler.collapsed .middle-bar {
            opacity: 1;
        }
        
        .navbar-toggler.collapsed .bottom-bar {
            transform: rotate(0);
        }
        
        .navbar-toggler .top-bar {
            transform: rotate(135deg);
            top: 8.5px;
        }
        
        .navbar-toggler .middle-bar {
            opacity: 0;
        }
        
        .navbar-toggler .bottom-bar {
            transform: rotate(-135deg);
            top: 8.5px;
        }
    </style>
</head>
<body>
    
    <?php include('assets/includes/nav-bar.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Professional Email Hosting Solutions</h1>
                    <p class="hero-subtitle">Elevate your business communication with secure, reliable, and professional email hosting services tailored for African businesses.</p>
                    <div class="d-flex gap-3">
                        <a href="#pricing" class="btn btn-primary">View Plans</a>
                        <a href="contacts.php" class="btn btn-outline-light">Contact Sales</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/img email.webp" alt="Email Hosting" class="img-fluid">
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
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h4>Startup</h4>
                        <div class="price">$2.99<span>/month</span></div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">5 Email Accounts</li>
                            <li class="mb-2">5GB Storage per Account</li>
                            <li class="mb-2">Webmail Access</li>
                            <li class="mb-2">Basic Spam Protection</li>
                            <li class="mb-2">Mobile Device Compatible</li>
                            <li class="mb-2">24/7 Email Support</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card featured">
                        <h4>Business</h4>
                        <div class="price">$5.99<span>/month</span></div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">20 Email Accounts</li>
                            <li class="mb-2">10GB Storage per Account</li>
                            <li class="mb-2">Webmail & IMAP/POP3</li>
                            <li class="mb-2">Advanced Spam & Virus Protection</li>
                            <li class="mb-2">Email Forwarding & Autoresponders</li>
                            <li class="mb-2">24/7 Phone & Email Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h4>Enterprise</h4>
                        <div class="price">$11.99<span>/month</span></div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">Unlimited Email Accounts</li>
                            <li class="mb-2">25GB Storage per Account</li>
                            <li class="mb-2">Full Suite Access Options</li>
                            <li class="mb-2">Premium Security Features</li>
                            <li class="mb-2">Collaborative Tools & Calendar</li>
                            <li class="mb-2">Priority 24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="mb-4">Ready to Upgrade Your Email Experience?</h2>
                    <p class="mb-5">Join thousands of African businesses that trust Afriportal for their email hosting needs.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#pricing" class="btn btn-light">View Plans</a>
                        <a href="contacts.php" class="btn btn-outline-light">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Google Reviews -->
    <script src="https://static.elfsight.com/apps/google-reviews/stable/472cfdc9950a5d6058a097e99a4203036834b5ca/app/googleReviews.js" defer="defer" charset="utf-8"></script>
    
    <script>
        // Navigation Scroll Effect
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