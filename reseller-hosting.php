<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseller Hosting - Afriportal</title>
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
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
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
        
        /* FAQ Section */
        .faq-section {
            padding: var(--section-padding);
            background-color: #f5f5f5;
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px !important;
            overflow: hidden;
        }
        
        .accordion-button {
            font-weight: 600;
            padding: 20px;
            background-color: white;
            color: var(--text-dark);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: white;
            color: var(--primary-color);
            box-shadow: none;
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: transparent;
        }
        
        .accordion-body {
            padding: 20px;
            background-color: white;
        }
        
        /* CTA Section */
        .cta-section {
            padding: var(--section-padding);
            background-color: var(--primary-color);
            color: var(--text-light);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('assets/media/pattern.svg');
            background-size: cover;
            opacity: 0.1;
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
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
       /* Guidance Section */
.guidance {
    background:white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 140px ;  /* Centers and adds margin*/
    text-align: center;
    width: 80%;  /* Adjusted width */
    max-width: 1300px; /* Ensures it doesn't stretch too much */
}

.guidance h2 {
    color:var(--primary-color);;
    font-size: 20px;
    margin-bottom: 8px;
    font-weight:bolder;
}

.guidance ol {
    list-style: none;
    padding: 0;
}

.guidance ol li {
    background: white;
    margin: 6px 0;
    padding: 8px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 14px;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .guidance, .faq {
        width: 90%;
        max-width: 900px;
        margin: auto;
    }
}

@media (max-width: 768px) {
    .guidance, .faq {
        width: 95%;
        max-width: 600px;
        margin: auto;
        padding: 10px;
    }

    .guidance h2, .faq h2 {
        font-size: 18px;
    }

    .faq-question {
        font-size: 13px;
        padding: 8px;
    }

    .faq-answer {
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .guidance, .faq {
        width: 100%;
        max-width: 400px;
        margin: auto;
        padding: 8px;
    }

    .guidance h2, .faq h2 {
        font-size: 16px;
    }

    .faq-question {
        font-size: 12px;
        padding: 6px;
    }

    .faq-answer {
        font-size: 11px;
    }
}
        /* Responsive */
        @media (max-width: 767px) {
            .hero-section {
                padding: 150px 0 80px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .pricing-card.featured {
                transform: none;
                margin: 20px 0;
            }
            
            .pricing-card.featured:hover {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body class="reseller-page loading">
   
    <?php include('assets/includes/nav-bar.php'); ?>
    <?php include('assets/includes/preloader.php'); ?>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Premium Reseller Hosting Solutions</h1>
                    <p class="hero-subtitle">Start your own hosting business with our reliable, scalable, and profitable reseller hosting plans.</p>
                    <a href="#pricing" class="btn btn-primary">View Pricing Plans</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/reseller.png" alt="Reseller Hosting Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Why Choose Our Reseller Hosting</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="bi bi-speedometer2 feature-icon"></i>
                        <h3 class="feature-title">High Performance</h3>
                        <p>Powered by NVMe SSD storage and optimized servers for lightning-fast load times and enhanced reliability.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h3 class="feature-title">White Label Solution</h3>
                        <p>Fully brandable hosting platform with your own logo, company name, and custom control panel.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="bi bi-cash-coin feature-icon"></i>
                        <h3 class="feature-title">Profit Maximization</h3>
                        <p>Set your own prices and create custom plans while we handle the technical infrastructure.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <i class="bi bi-headset feature-icon"></i>
                        <h3 class="feature-title">24/7 Support</h3>
                        <p>Round-the-clock technical support to help you resolve any issues and answer customer queries.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <i class="bi bi-gear feature-icon"></i>
                        <h3 class="feature-title">Easy Management</h3>
                        <p>Intuitive control panel with cPanel/WHM for seamless account and resource management.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <i class="bi bi-arrow-up-circle feature-icon"></i>
                        <h3 class="feature-title">Scalable Resources</h3>
                        <p>Easily upgrade your plan as your business grows without any service interruption.</p>
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

     <!-- Guidance Section -->
     <div class="guidance">
            <h2>How to Start Selling</h2>
            <ol>
                <li>Sign up for our reseller hosting plan.</li>
                <li>Customize and brand your hosting packages.</li>
                <li>Set your own prices and market your services.</li>
                <li>Start selling to your customers and earn profits.</li>
            </ol>
        </div>

        <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Find answers to common questions about our reseller hosting service</p>
            </div>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is reseller hosting?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Reseller hosting allows you to sell hosting services to your own customers.You can repackage and sell server resources through reseller web hosting just like you would your own. Your allotted hard drive space and bandwidth can be used to host websites for other organizations and people. In essence, it allows you to operate as your own web hosting business. You can charge whatever price you want because you have your own clients and operate under your own brand.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Can i  Make Money with resseller hosting?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        yes, by buying hosting resources in bulk from afriportal and then reselling them to your own clients at a higher price, you may make money with reseller hosting. Adding extra services like website design, domain registration, and email hosting will help you earn more money. Correct execution can make it a lucrative venture, but it also necessitates some familiarity with web construction and hosting.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How does reseller hosting work?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Establishing your reseller hosting business takes a few steps. You have to:<br>

1. Research the market and find an appropriate hosting company.<br>
2. Purchase the reseller package that best suits the needs of your business.<br>
3. Research your target market to locate potential customers.<br>
4. Create your own brand and branded hosting packages, decide on their cost.<br>
5. Sell them to clients.<br>
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        what are the benefit of reseller hosting?
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        There are benefits to becoming a reseller host, whether you're developing a new brand or want to strengthen an existing one:<br>

1. Practice being a hosting company by building websites and gaining management expertise.<br>
2. Generate additional revenue.<br>
3. Create your own hosting packages that are especially suited to your target market.<br>
4. Develop a distinctive brand.<br>
5. Design a customized cPanel control panel for the users.<br>
6. Most customers wind up saving money over time due to the initial low start-up costs and the ability to upgrade on-demand.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        do you backup my clients server?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Yes, we perform a nightly backup of every account. JetBackup in cPanel makes it simple for customers to retrieve these backups.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        How do I set up my hosting business?
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        you sign up for a reseller plan, brand your packages, and start selling.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingeight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Can I upgrade my plan later?
                        </button>
                    </h2>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Yes, you can upgrade your reseller plan as your business grows.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                    <h2 class="accordion-header" id="headingseven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Do you offer support for my clients?
                        </button>
                    </h2>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        >We provide backend support, but you handle direct customer service.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title" data-aos="fade-up">Ready to Start Your Hosting Business?</h2>
            <p class="cta-subtitle" data-aos="fade-up" data-aos-delay="100">Get started with our reseller hosting plans and take the first step towards building your own hosting business.</p>
            <a href="#pricing" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">View Pricing Plans</a>
        </div>
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
</body>
</html>