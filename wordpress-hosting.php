<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>wordpress-hosting</title>
    <?php include 'assets/includes/optimize-loading.php'; ?>
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/bootstrap-icons.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    /* Header Styles */
        .header {
            background: linear-gradient(135deg, #4B0082, #932C8b);
            padding-left: 50px;
            color: white;
            padding-top: 100px;
            border-radius: 8px 8px 50% 50% / 0 0 10% 10%;
        }
        .header-a h1 {
            font-family: 'Poppins', sans-serif; 
            font-size: 50px;
            padding-bottom: 20px;
            font-weight: bolder;
            color: white;
        }
        .header-a h3 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
        }
        .header-b {
            display: flex;
            justify-content: space-between;
            padding-right: 350px;
            padding-top: 50px;
            font-size: larger;
            padding-bottom: 30px;
        }
        .headerbtn {
            display: flex;
            gap: 50px;
            padding-bottom: 30px;
        }
        .headerbtn .btn {
            background: linear-gradient(135deg, #0056b3, #003a75);
            padding: 20px 40px 20px;
            border-radius: 15px;
            font-size: larger;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            border: 0px;
            color: white;
        }
        .headerbtn .btn:hover {
            background-color: rgb(52, 16, 119);
            color: black;
        }
        .headerbtn .btna {
            background-color: rgb(245, 245, 236);
            padding: 20px 31px 20px;
            border-radius: 15px;
            font-size: larger;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            border: 0px;
        }
        .nav1 {
            display: flex;
        }
        .icon {
            display: flex;
        }
        .icon .bi .bi-device-ssd {
            height: 150px;
            width: 150px;
        }
        .nav2 {
            display: flex;
            padding-left: 50px;
            padding-bottom: 30px;
        }
        .nav-2 i {
            fill: rgb(73, 8, 8);
            fill-opacity: 0.2;
        }

        /* Media Queries */
        @media (max-width: 1200px) {
            .header {
                padding-left: 30px;
                padding-top: 80px;
            }
            .header-b {
                padding-right: 500px;
                padding-top: 40px;
            }
            .headerbtn {
                gap: 30px;
                padding-bottom: 20px;
            }
            .headerbtn .btn, .headerbtn .btna {
                padding: 15px 30px;
                font-size: medium;
            }
        }

        @media (max-width: 992px) {
            .header {
                padding-left: 20px;
                padding-top: 60px;
            }
            .header-b {
                flex-direction: column;
                align-items: flex-start;
                padding-right: 0;
                padding-top: 30px;
            }
            .headerbtn {
                flex-direction: column;
                gap: 20px;
                padding-bottom: 20px;
            }
            .headerbtn .btn, .headerbtn .btna {
                padding: 10px 20px;
                font-size: small;
            }
            .nav1 {
                flex-direction: column;
            }
            .nav2 {
                padding-left: 0;
                margin-top: 20px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding-left: 10px;
                padding-top: 40px;
            }
            .header-a h1 {
                font-size: 24px;
            }
            .header-a h3 {
                font-size: 16px;
            }
            .header-b {
                font-size: medium;
            }
            .headerbtn .btn, .headerbtn .btna {
                padding: 8px 16px;
                font-size: small;
            }
            .nav2 {
                margin-top: 10px;
            }
        }

        @media (max-width: 576px) {
            .header {
                padding-left: 5px;
                padding-top: 20px;
            }
            .header-a h1 {
                font-size: 20px;
            }
            .header-a h3 {
                font-size: 14px;
            }
            .header-b {
                font-size: small;
            }
            .headerbtn .btn, .headerbtn .btna {
                padding: 6px 12px;
                font-size: x-small;
            }
            .nav2 {
                margin-top: 5px;
            }
        }

        /* Container Styles */
        .container1 {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 1200px;
        }
        .container1 h1 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .one {
            color: rgb(7, 34, 58);
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            padding-top: 70px;
        }

        /* Plan Container Styles */
        .plan-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 25px;
        }
        .plan-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 250px;
        }
        .plan-card:hover {
            transform: translatex(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        .card-header {
            padding: 25px 20px;
            background: linear-gradient(135deg, #0056b3, #003a75);
            color: white;
        }
        .card-header h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }
        .card-header p {
            font-size: 14px;
            opacity: 0.9;
            line-height: 1.5;
        }
        .price-section {
            background-color: #f0f8ff;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #e6e6e6;
        }
        .discount {
            font-size: 26px;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 5px;
        }
        .discount s {
            font-size: 18px;
            color: #777;
            margin-left: 5px;
        }
        .save-tag {
            background-color: #f44336;
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
            margin-top: 5px;
        }
        .billing-term {
            font-size: 13px;
            color: #666;
            margin-top: 10px;
        }
        .cta-button {
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            padding: 12px 40px;
            border-radius: 30px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
            margin: 20px auto;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 8px rgba(0, 86, 179, 0.3);
        }
        .cta-button:hover {
            background-color: #003a75;
        }
        .features-section {
            padding: 20px;
            flex-grow: 1;
        }
        .features-title {
            color: #4b4949;
            margin-bottom: 15px;
            font-size: 18px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .features-list {
            list-style: none;
        }
        .features-list li {
            padding: 8px 0 8px 25px;
            position: relative;
            font-size: 14px;
            color: #555;
        }
        .features-list li:before {
            content: "✓";
            color: #0056b3;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        /* Plan Container Media Queries */
        @media (max-width: 1200px) {
            .plan-container {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        @media (max-width: 992px) {
            .plan-container {
                grid-template-columns: repeat(2, 1fr);
            }
            h1 {
                font-size: 28px;
            }
        }
        @media (max-width: 768px) {
            .plan-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            .card-header h3 {
                font-size: 20px;
            }
            .cta-button {
                padding: 10px 30px;
            }
            body {
                padding: 30px 0;
            }
        }
        @media (max-width: 576px) {
            .plan-container {
                grid-template-columns: 1fr;
            }
            h1 {
                font-size: 24px;
                margin-bottom: 25px;
            }
            .container {
                padding: 0 15px;
            }
            .card-header {
                padding: 20px 15px;
            }
            .price-section, .features-section {
                padding: 15px;
            }
        }
        @media (max-width: 380px) {
            .discount {
                font-size: 22px;
            }
            .card-header h3 {
                font-size: 18px;
            }
            .cta-button {
                padding: 10px 25px;
                font-size: 14px;
            }
            .features-list li {
                font-size: 13px;
            }
            body {
                padding: 20px 0;
            }
        }

        /* Hosting Features Styles */
        .hosting-features {
            padding: 40px 0;
            background-color: #f9f9f9; /* Light background for the section */
        }
        .container {
            width: 80%; /* Adjust as needed */
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        .hosting-features h2 {
            margin-bottom: 30px;
            color: #333;
            padding-top: 50px;
        }
        .feature-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            justify-content: center; /* Center the list items */
        }
        .feature-list li {
            background-color: #fff;
            border: 1px solid #eee;
            padding: 15px 20px;
            margin: 10px;
            border-radius: 5px;
            flex: 0 1 250px; /* Adjust width as needed */
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            .feature-list li {
                flex: 0 1 100%;
            }
        }

        /* FAQ Section Styles */
        .faq-section {
            padding: 50px 0;
            background-color: #f7f7f7;
        }
        .faq-container {
            width: 80%;
            max-width: 960px;
            margin: 0 auto;
        }
        .faq-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .faq-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .faq-question {
            background-color: #f0f0f0;
            color: #333;
            padding: 15px;
            width: 100%;
            text-align: left;
            border: none;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            justify-content: space-between; /* Add space between text and icon */
            align-items: center;
        }
        .faq-question::after {
            content: '+'; /* Initial icon */
            font-size: 1.2em;
        }
        .faq-question.active::after {
            content: '-'; /* Change icon when active */
        }
        .faq-answer {
            padding: 15px;
            background-color: white;
            display: none; /* Initially hide answers */
        }
        .faq-answer p {
            margin: 0;
            line-height: 1.6;
        }
        @media (max-width: 768px) {
            .faq-container {
                width: 95%;
            }
        }

        /* Customer Call Line Styles */
        .customer-call-line {
            position: fixed; /* Fixed position so it stays on the screen */
            bottom: 20px; /* Adjust as needed */
            right: 20px; /* Adjust as needed */
            z-index: 1000; /* Ensure it's on top of other elements */
        }
        .call-button {
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #0056b3, #003a75); /* Blue, or your brand color */
            color: white;
            padding: 10px 20px;
            border-radius: 50px; /* Rounded button */
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }
        .call-button:hover {
            background-color: rgb(96, 109, 122); /* Darker blue on hover */
        }
        .phone-icon {
            width: 24px; /* Adjust icon size */
            height: 24px;
            margin-right: 10px;
        }
        @media (max-width: 768px) {
            .customer-call-line {
                bottom: 10px;
                right: 10px;
            }
            .call-button {
                padding: 8px 16px;
            }
            .phone-icon {
                width: 20px;
                height: 20px;
            }
        }
    </style>
</head>
<body class="wordpress-page loading">
<?php include 'assets/includes/preloader.php'; ?>
<?php include 'assets/includes/nav-bar.php'; ?>

<nav class="header">
    <!-- Header introduction and value proposition -->
    <div class="header-a">
        <h1>Managed WordPress Hosting</h1>
        <h3>Take your website to the next level with our LiteSpeed WordPress Hosting plans and experience our 5x faster loading times than competing services. our WP hosting solutions are precisely built to maximize speed and performance.</h3>
    </div>
    
    <!-- Key features section with checkmarks -->
    <div class="header-b">
        <i class="bi bi-check-circle-fill"> Easy to Manage</i>
        <i class="bi bi-check-circle-fill"> 24/7/365 Support</i>
        <i class="bi bi-check-circle-fill"> Extreme Speed</i> 
        <i class="bi bi-check-circle-fill"> WordPress Pre-Installed</i>
    </div>
    
    <!-- Call to action buttons -->
    <div class="headerbtn">
        <button class="btn">Start Now</button>
        <button class="btna"><i class="bi bi-sliders2"> Compare plans</i></button>
    </div>
    
    <!-- Pricing and feature highlights -->
    <div class="nav1">
        <!-- Starting price information -->
        <div class="nav-last">
            <h2>Starting at $3.60/mo</h2>
            <h4>Ideal for small businesses to start with</h4>
        </div>
        
        <!-- Feature icons section -->
        <div class="nav2">
            <div class="nav-2">
                <i class="bi bi-device-ssd" style="font-size: 70px;"></i>
            </div>
            <b style="font-size: 1.5rem; padding-top: 20px;">SSD & NVMe <br>Storage</b>
        </div>
        <div class="nav2">
            <div class="nav-2">
                <i class="bi bi-patch-check-fill" style="font-size: 70px;"></i>
            </div>
            <b style="font-size: 1.5rem; padding-top: 20px;">Built-in<br>Security Updates</b>
        </div>
        <div class="nav2">
            <div class="nav-2">
                <i class="bi bi-file-lock2-fill" style="font-size: 70px;"></i>
            </div>
            <b style="font-size: 1.5rem; padding-top: 20px;">Free<br>SSL Certificate</b>
        </div>
    </div>
</nav>

<!-- Main pricing plans section -->
<div class="container">
    <h1 class="one">Choose the Best Managed WordPress Hosting Plan</h1>
    <div class="plan-container">
        
        <!-- Plan 1: Entry-level WordPress hosting -->
        <div class="plan-card" data-aos="fade-up">
            <div class="card-header">
                <h3>afriportal WordPress</h3>
                <p>The ideal starting point into WordPress hosting!</p>
            </div>
            
            <div class="price-section">
                <div class="discount">$2.80/mo <s>$4.80</s></div>
                <span class="save-tag">Save 40%</span>
                <p class="billing-term">Billed for 24-month term.</p>
            </div>
            
            <div style="text-align: center;">
                <a class="cta-button" href="#">ORDER</a>
            </div>
            
            <div class="features-section">
                <h4 class="features-title">Features</h4>
                <ul class="features-list">
                    <li>1 Website</li>
                    <li>30 GB NVMe SSD</li>
                    <li>~10000 Visits Monthly</li>
                    <li>Free WordPress Manager</li>
                    <li>1 Email Account</li>
                    <li>WordPress Acceleration</li>
                    <li>WP-CLI</li>
                    <li>2 Databases</li>
                </ul>
            </div>
        </div>
        
        <!-- Plan 2: Mid-tier WordPress hosting -->
        <div class="plan-card" data-aos="fade-up" data-aos-delay="100">
            <div class="card-header">
                <h3>WordPress Starter</h3>
                <p>Everything you need to power a successful website online.</p>
            </div>
            
            <div class="price-section">
                <div class="discount">$4.50/mo <s>$7.50</s></div>
                <span class="save-tag">Save 40%</span>
                <p class="billing-term">Billed for 24-month term.</p>
            </div>
            
            <div style="text-align: center;">
                <a class="cta-button" href="#">ORDER</a>
            </div>
            
            <div class="features-section">
                <h4 class="features-title">Features</h4>
                <ul class="features-list">
                    <li>100 Websites</li>
                    <li>100 GB NVMe SSD</li>
                    <li>~25000 Visits Monthly</li>
                    <li>Free WordPress Manager</li>
                    <li>Free Emails</li>
                    <li>WordPress Acceleration</li>
                    <li>WordPress Multisite</li>
                    <li>WP-CLI</li>
                    <li>Unlimited Databases</li>
                </ul>
            </div>
        </div>
        
        <!-- Plan 3: Business-level WordPress hosting -->
        <div class="plan-card" data-aos="fade-up" data-aos-delay="200">
            <div class="card-header">
                <h3>Business WordPress</h3>
                <p>A growth engine for your business with plenty of room to grow.</p>
            </div>
            
            <div class="price-section">
                <div class="discount">$6.50/mo <s>$10.80</s></div>
                <span class="save-tag">Save 40%</span>
                <p class="billing-term">Billed for 24-month term.</p>
            </div>
            
            <div style="text-align: center;">
                <a class="cta-button" href="#">ORDER</a>
            </div>
            
            <div class="features-section">
                <h4 class="features-title">Features</h4>
                <ul class="features-list">
                    <li>100 Websites</li>
                    <li>100 GB NVMe SSD</li>
                    <li>~100000 Visits Monthly</li>
                    <li>Free WordPress Manager</li>
                    <li>Free Emails</li>
                    <li>WordPress Acceleration</li>
                    <li>WordPress Multisite</li>
                    <li>WP-CLI</li>
                    <li>Unlimited Databases</li>
                </ul>
            </div>
        </div>
        
        <!-- Plan 4: Premium VPS WordPress hosting -->
        <div class="plan-card" data-aos="fade-up" data-aos-delay="300">
            <div class="card-header">
                <h3>VPS WordPress</h3>
                <p>Advanced solution which can handle multiple high-traffic sites easily.</p>
            </div>
            
            <div class="price-section">
                <div class="discount">$23.80/mo <s>$39.50</s></div>
                <span class="save-tag">Save 40%</span>
                <p class="billing-term">Billed for 24-month term.</p>
            </div>
            
            <div style="text-align: center;">
                <a class="cta-button" href="#">ORDER</a>
            </div>
            
            <div class="features-section">
                <h4 class="features-title">Features</h4>
                <ul class="features-list">
                    <li>300 Websites</li>
                    <li>100 GB NVMe SSD</li>
                    <li>~300000 Visits Monthly</li>
                    <li>Free WordPress Manager</li>
                    <li>Free Emails</li>
                    <li>WordPress Acceleration</li>
                    <li>WordPress Multisite</li>
                    <li>WP-CLI</li>
                    <li>Unlimited Databases</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Common features across all hosting plans -->
<section class="hosting-features">
    <div class="container">
        <h2>All Our Low Cost WordPress Hosting Plans Come With:</h2>
        <ul class="feature-list">
            <li>24/7/365 Support</li>
            <li>WordPress Optimized</li>
            <li>BitNinja Security</li>
            <li>WordPress Staging Tool</li>
            <li>One-click Automatic Install</li>
            <li>Unlimited Bandwidth</li>
            <li>Free Backups</li>
            <li>Free Domain Transfer</li>
            <li>Free SSL Certificate(s)</li>
            <li>30-Days Money-Back</li>
            <li>Dedicated Firewalls</li>
            <li>Managed WordPress</li>
            <li>Optimized With Advanced Caches</li>
            <li>CDN Add-on</li>
            <li>24/7 Real-time Monitoring</li>
            <li>Regular Security Patching</li>
            <li>Unlimited Application Installation</li>
            <li>Free Migration Plugin</li>
            <li>Automated Backups</li>
            <li>Managed WP & PHP</li>
        </ul>
    </div>
</section>

<!-- FAQ accordion section -->
<section class="faq-section">
    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        
        <!-- FAQ Item 1 -->
        <div class="faq-item">
            <button class="faq-question">What is web hosting?</button>
            <div class="faq-answer">
                <p>Web hosting is a service that allows organizations and individuals to post a website or web page onto the Internet. A web host, or web hosting service provider, is a business that provides the technologies and services needed for the website or webpage to be viewed in the Internet.</p>
            </div>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="faq-item">
            <button class="faq-question">What types of web hosting do you offer?</button>
            <div class="faq-answer">
                <p>We offer a variety of hosting options including shared hosting, VPS hosting, dedicated servers, and WordPress hosting to cater to different needs and budgets.</p>
            </div>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="faq-item">
            <button class="faq-question">How do I choose the right hosting plan for my website?</button>
            <div class="faq-answer">
                <p>The right hosting plan depends on your website's traffic, storage needs, and technical requirements. We recommend starting with shared hosting for small websites and upgrading as your site grows. Our support team can also help you choose the best plan.</p>
            </div>
        </div>
        
        <!-- FAQ Item 4 -->
        <div class="faq-item">
            <button class="faq-question">Do you offer domain registration?</button>
            <div class="faq-answer">
                <p>Yes, we offer domain registration services. You can register a new domain or transfer an existing one to us.</p>
            </div>
        </div>
        
        <!-- FAQ Item 5 -->
        <div class="faq-item">
            <button class="faq-question">Which WordPress Hosting Plan Should I Buy</button>
            <div class="faq-answer">
                <p>afriportal offers various WordPress-specific options. For low traffic, start with the WordPress Starter Plan. For high traffic or multiple sites, choose a dedicated server or the VPS WordPress Plan. Custom packages are available.</p>
            </div>
        </div>
        
        <!-- FAQ Item 6 -->
        <div class="faq-item">
            <button class="faq-question">What kind of support do you provide?</button>
            <div class="faq-answer">
                <p>We provide 24/7 technical support via live chat, email, and phone. Our support team is always ready to assist you with any hosting-related issues.</p>
            </div>
        </div>
    </div>
</section>

<!-- Customer support contact section -->
<div class="customer-call-line">
    <a href="tel: +234 8064075956" class="call-button">
        <img src="assets/media/call.webp" alt="Call Us" class="phone-icon">
        <span>Call Us: +2348064075956</span>
    </a>
</div>

<!-- Footer -->
<?php include('assets/includes/footer.php'); ?>
<!-- Scroll to Top Button -->
<?php include 'assets/includes/scroll-up.php'; ?>
    
    <!-- Contact Buttons -->
    <?php include 'assets/includes/contact-btn.php'; ?>

    

<!-- AOS animation library initialization -->
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

<!-- FAQ accordion functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');

                // Close all other answers
                faqQuestions.forEach(q => {
                    if (q !== question) {
                        q.classList.remove('active');
                        q.nextElementSibling.style.display = 'none';
                    }
                });

                if (isActive) {
                    question.classList.remove('active');
                    answer.style.display = 'none';
                } else {
                    question.classList.add('active');
                    answer.style.display = 'block';
                }
            });
        });
    });
</script>
</body>
</html>