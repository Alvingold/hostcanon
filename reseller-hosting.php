<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseller Hosting - Afriportal</title>

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
    <link rel="stylesheet" href="assets/css/reseller-hosting.css">
</head>

<body class="reseller-page loading">

    <?php include('assets/includes/nav-bar.php'); ?>
    <?php include('assets/includes/preloader.php'); ?>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Premium Reseller Hosting Solutions</h1>
                    <p class="hero-subtitle">Start your own hosting business with our reliable, scalable, and profitable reseller hosting plans.</p>
                    <a href="#pricing" class="btn btn-primary mb-4">View Pricing Plans</a>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0" data-aos="fade-left">
                    <img src="assets/media/reseller.webp" alt="Reseller Hosting Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Why Choose Our Reseller Hosting</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Empower your business with our feature-rich reseller hosting plans designed for success.</p>
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
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Choose a plan that fits your business needs and start your hosting journey today.</p>

            <?php include 'assets/includes/currency-selector.php'; ?>

            <div class="row mt-4">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3 class="plan-name">Starter</h3>
                            <div class="price-tag" id="plan-0-price">$24.99<span class="price-duration">/month</span></div>
                            <p>Perfect for beginners starting a hosting business</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 30 GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 500 GB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 30 cPanel Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Free WHMCS License</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Free SSL Certificates</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Daily Backups</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Dedicated IP Address</li>
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
                            <h3 class="plan-name">Professional</h3>
                            <div class="price-tag" id="plan-1-price">$49.99<span class="price-duration">/month</span></div>
                            <p>Ideal for growing hosting businesses</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 75 GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 1000 GB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 75 cPanel Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Free WHMCS License</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificates</li>
                                <li><i class="bi bi-check-circle"></i> Daily Backups</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Dedicated IP Address</li>
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
                            <h3 class="plan-name">Enterprise</h3>
                            <div class="price-tag" id="plan-2-price">$89.99<span class="price-duration">/month</span></div>
                            <p>For established resellers with high-volume needs</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 150 GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 2000 GB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 150 cPanel Accounts</li>
                                <li><i class="bi bi-check-circle"></i> Free WHMCS License</li>
                                <li><i class="bi bi-check-circle"></i> 24/7 Support</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Free SSL Certificates</li>
                                <li><i class="bi bi-check-circle"></i> Daily Backups</li>
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
        <!-- Include the currency converter script -->
    </section>

    <!-- 24/7 Support Section -->
    <section class="support-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">24/7 Dedicated Support</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Your success is our priority. We're always here to help you and your customers.</p>

            <div class="row g-4">
                <!-- Support Card 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="support-card">
                        <div class="support-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h3>Around the Clock</h3>
                        <p>Our support team is available 24/7/365, ensuring you're never left without assistance.</p>
                    </div>
                </div>

                <!-- Support Card 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="support-card">
                        <div class="support-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h3>Fast Response</h3>
                        <p>Average response time under 15 minutes for critical issues.</p>
                    </div>
                </div>

                <!-- Support Card 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="support-card">
                        <div class="support-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Expert Team</h3>
                        <p>Seasoned professionals with deep technical knowledge of hosting systems.</p>
                    </div>
                </div>

                <!-- Support Card 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="support-card">
                        <div class="support-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3>Multiple Channels</h3>
                        <p>Get help via live chat, email, phone, or ticket system.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="support-content p-4 bg-white rounded-3 shadow-sm">
                        <h3 class="mb-4">How Our Support Benefits Your Business</h3>

                        <div class="support-benefit d-flex mb-4">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-patch-check"></i>
                            </div>
                            <div>
                                <h4>Focus on Growth</h4>
                                <p>We handle technical issues so you can concentrate on growing your client base and business.</p>
                            </div>
                        </div>

                        <div class="support-benefit d-flex mb-4">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-award"></i>
                            </div>
                            <div>
                                <h4>Build Reputation</h4>
                                <p>Reliable hosting backed by responsive support helps you build a stellar reputation.</p>
                            </div>
                        </div>

                        <div class="support-benefit d-flex">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <div>
                                <h4>Reduce Churn</h4>
                                <p>Quick issue resolution keeps your customers satisfied and reduces turnover.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                    <div class="support-channels-wrapper p-4 bg-white rounded-3 shadow-sm">
                        <h3 class="mb-4">Contact Our Support Team</h3>

                        <div class="support-channel-item d-flex align-items-center mb-4">
                            <div class="channel-icon me-3">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <div>
                                <h4>Live Chat</h4>
                                <p class="mb-0">Available 24/7 with an average response time of 2 minutes</p>
                            </div>
                        </div>

                        <div class="support-channel-item d-flex align-items-center mb-4">
                            <div class="channel-icon me-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h4>Email Support</h4>
                                <p class="mb-0">Send detailed requests to support@afriportal.com</p>
                            </div>
                        </div>

                        <div class="support-channel-item d-flex align-items-center mb-4">
                            <div class="channel-icon me-3">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h4>Phone Support</h4>
                                <p class="mb-0">Call us directly at +1-234-567-8900</p>
                            </div>
                        </div>

                        <div class="support-channel-item d-flex align-items-center">
                            <div class="channel-icon me-3">
                                <i class="bi bi-ticket"></i>
                            </div>
                            <div>
                                <h4>Ticket System</h4>
                                <p class="mb-0">Submit tickets through your client area for tracking issues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-primary">Contact Support</a>
            </div>
        </div>
    </section>
    <!--guidance-->
    <div class="guidance">
        <h2>How to Start Selling</h2>
        <div class="guidance-content">
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Sign up for our reseller hosting plan</h3>
                        <p>Get started with our affordable and reliable reseller packages that include all the tools you need.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Customize and brand your hosting packages</h3>
                        <p>Make it your own with custom branding, plans, and features tailored to your target audience.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Set your own prices and market your services</h3>
                        <p>Determine your pricing strategy and use our marketing tools to reach potential customers.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Start selling to your customers and earn profits</h3>
                        <p>Begin growing your hosting business while we handle the technical infrastructure behind the scenes.</p>
                    </div>
                </div>
            </div>
            <div class="cta-container">
                <a href="#get-started" class="cta-button">Get Started Today</a>
                <p class="support-text">Need help? <a href="#support">Contact our support team</a></p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="text-center mb-5">
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
                            Can i Make Money with resseller hosting?
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



    <script>
        // Global Currency Converter for Hosting Site Pricing Plans

        // Main pricing plans in USD
        const pricingPlans = [{
                name: "Starter",
                price: 24.99,
                features: ["30 GB SSD Storage", "500 GB Bandwidth", "30 cPanel Accounts", "Free WHMCS License", "24/7 Support", "Priority Support", "Free SSL Certificates", "Daily Backups", "Dedicated IP Address"]
            },
            {
                name: "Professional",
                price: 49.99,
                features: ["75 GB SSD Storage", "1000 GB Bandwidth", "75 cPanel Accounts", "Free WHMCS License", "24/7 Support", "Priority Support", "Free SSL Certificates", "Daily Backups", "Dedicated IP Address"]
            },
            {
                name: "Enterprise",
                price: 89.99,
                features: ["150 GB SSD Storage", "2000 GB Bandwidth", "150 cPanel Accounts", "Free WHMCS License", "24/7 Support", "Priority Support", "Free SSL Certificates", "Daily Backups", "Dedicated IP Address"]
            }
        ];
    </script>
</body>
</html>