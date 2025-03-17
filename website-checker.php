<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Uptime Checker - Afriportal</title>
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
            --primary-color: #4B0082; /* Indigo background color */
            --secondary-color: #9370DB; /* Medium purple for accents */
            --text-light: #ffffff;
            --text-dark: #212529;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-light);
            background-color: #f8f9fa;
        }
        
        .navbar {
            background-color: transparent;
            transition: all 0.3s ease;
            padding: 20px 0;
        }
        
        .navbar.scrolled {
            background-color: rgba(75, 0, 130, 0.95);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }
        
        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--secondary-color) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--secondary-color);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        
        .dropdown-menu {
            background-color: rgba(75, 0, 130, 0.95);
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .dropdown-item {
            color: var(--text-light);
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        
        .dropdown-item:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateX(5px);
        }
        
        .dropdown-animation {
            animation: fadeIn 0.3s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .toggler-icon {
            display: block;
            width: 30px;
            height: 2px;
            background-color: var(--text-light);
            margin: 6px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-toggler:not(.collapsed) .top-bar {
            transform: rotate(45deg) translate(5px, 6px);
        }
        
        .navbar-toggler:not(.collapsed) .middle-bar {
            opacity: 0;
        }
        
        .navbar-toggler:not(.collapsed) .bottom-bar {
            transform: rotate(-45deg) translate(5px, -6px);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), #2c0449);
            padding: 160px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/media/pattern.svg');
            opacity: 0.1;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .hero-text {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        /* Button Styles */
        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(147, 112, 219, 0.4);
        }
        
        .btn-primary:hover {
            background-color: #8560c8;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(147, 112, 219, 0.5);
        }
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background-color: #ffffff;
            color: var(--text-dark);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }
        
        .feature-card {
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-color: var(--secondary-color);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .feature-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        /* Uptime Checker Form */
        .checker-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-color), #2c0449);
            position: relative;
        }
        
        .checker-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/media/dot-pattern.svg');
            opacity: 0.1;
        }
        
        .checker-card {
            background-color: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            padding: 15px 20px;
            border-radius: 50px;
            border: 1px solid #e2e2e2;
            font-size: 1rem;
            box-shadow: none !important;
        }
        
        .input-group .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .input-group .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            padding-left: 25px;
            padding-right: 25px;
        }
        
        /* Results Table */
        .result-table {
            border-radius: 15px;
            overflow: hidden;
            margin-top: 30px;
        }
        
        .result-table th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            border: none;
        }
        
        .result-table .status-badge {
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        
        .status-up {
            background-color: rgba(40, 167, 69, 0.15);
            color: var(--success-color);
        }
        
        .status-down {
            background-color: rgba(220, 53, 69, 0.15);
            color: var(--danger-color);
        }
        
        .status-slow {
            background-color: rgba(255, 193, 7, 0.15);
            color: var(--warning-color);
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 100px 0;
            background-color: #f8f9fa;
            color:black
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px !important;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .accordion-button {
            padding: 20px 25px;
            font-weight: 600;
            color: var(--primary-color);
            background-color: white;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: var(--primary-color);
            color: white;
        }
        
        .accordion-button:focus {
            box-shadow: none;
        }
        
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234B0082'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .feature-card, .pricing-card {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .navbar-collapse {
                background-color: rgba(75, 0, 130, 0.95);
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
            }
            
            .hero-section {
                padding: 130px 0 80px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .checker-card {
                padding: 25px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .pricing-price {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    
    <?php include('assets/includes/nav-bar.php'); ?>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">24/7 Website Uptime Monitoring</h1>
                    <p class="hero-text" data-aos="fade-up" data-aos-delay="200">Monitor your website's performance and uptime with our advanced monitoring service. Get instant alerts when your site goes down and comprehensive uptime reports.</p>
                    <a href="#checker" class="btn btn-primary me-3" data-aos="fade-up" data-aos-delay="300">Check Your Website Now</a>
                </div>
                <div class="col-lg-6">
                    <img src="assets/media/web.webp" alt="Website Uptime Checker" class="img-fluid" data-aos="fade-left" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Why Monitor Your Website?</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Stay ahead of potential issues with our comprehensive website monitoring service</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="bi bi-graph-up feature-icon"></i>
                        <h3 class="feature-title">Maximize Uptime</h3>
                        <p>Detect downtime instantly and minimize lost revenue and customer trust with our 24/7 monitoring.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="bi bi-bell feature-icon"></i>
                        <h3 class="feature-title">Instant Alerts</h3>
                        <p>Receive instant notifications via email, SMS, or webhook when your website experiences any issues.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="bi bi-speedometer feature-icon"></i>
                        <h3 class="feature-title">Performance Tracking</h3>
                        <p>Monitor response times and page load speeds to ensure optimal user experience at all times.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h3 class="feature-title">SSL Monitoring</h3>
                        <p>Get notified before your SSL certificates expire to maintain security and user trust.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <i class="bi bi-file-earmark-bar-graph feature-icon"></i>
                        <h3 class="feature-title">Detailed Reports</h3>
                        <p>Access comprehensive analytics and historical data to track your website's performance over time.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <i class="bi bi-globe feature-icon"></i>
                        <h3 class="feature-title">Global Monitoring</h3>
                        <p>Check your website's availability from multiple locations worldwide for a complete picture.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Uptime Checker Section -->
    <section class="checker-section" id="checker">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white" data-aos="fade-up">Check Your Website Status</h2>
                <p class="lead text-white opacity-75" data-aos="fade-up" data-aos-delay="100">Test your website's uptime and performance right now</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checker-card" data-aos="fade-up" data-aos-delay="200">
                        <form id="uptimeForm">
                            <div class="mb-4">
                                <label for="websiteUrl" class="form-label fw-bold text-dark">Enter your website URL</label>
                                <div class="input-group">
                                <input type="text" class="form-control" id="websiteUrl" placeholder="example.com" required>
                                    <button type="submit" class="btn btn-primary">Check Now</button>
                                </div>
                            </div>
                        </form>
                        
                        <div id="resultSection" class="mt-4 d-none">
                            <h4 class="text-dark mb-3">Results for <span id="checkedUrl" class="text-primary"></span></h4>
                            
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card text-center h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Status</h5>
                                            <p class="card-text fs-4 fw-bold" id="statusResult">Online</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card text-center h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Response Time</h5>
                                            <p class="card-text fs-4 fw-bold" id="responseTime">237 ms</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="card text-center h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-warning">SSL Status</h5>
                                            <p class="card-text fs-4 fw-bold" id="sslStatus">Valid</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <h5 class="text-dark mb-3">Detailed Results</h5>
                            <div class="table-responsive result-table">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Response Time</th>
                                        </tr>
                                    </thead>
                                    <tbody id="locationResults"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Find answers to common questions about our website monitoring service</p>
            </div>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is website uptime monitoring?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Website uptime monitoring is the process of tracking your website's availability and performance. It involves checking your site at regular intervals to ensure it is online and functioning correctly.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How does website monitoring work?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Website monitoring works by sending requests to your site at regular intervals to check its availability. If the site is down or experiencing issues, you will receive an alert so you can take action.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Why is website monitoring important?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Website monitoring is important because it helps you detect issues with your site before they impact your users. By monitoring uptime and performance,
                            you can ensure your site is always available and running smoothly.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            does the website aviability checker tools have any limit
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        No, there are no limits to the number of checks you can perform with our website availability checker tool. You can use it to monitor your website's availability as often as needed.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            is the website checker availabilty checker compiatable with all platform and host?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        yes, our website availability checker tool is compatible with all website platforms and hosting providers. You can use it to monitor any website, regardless of the platform or hosting service.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            is the website checker availabilty checker service free?
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Yes, the website availability checker is a free tool that you can use as often as needed.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                    <h2 class="accordion-header" id="headingseven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                            How often should I monitor my website?
                        </button>
                    </h2>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            It is recommended to monitor your website at least every 5 minutes to ensure you catch any issues as soon as they occur. You can adjust the monitoring frequency based on your needs.
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