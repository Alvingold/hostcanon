<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Hosting - Fast & Reliable Web Hosting Solutions</title>

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

<<<<<<< HEAD
=======
        /* Container styling */
        .currency-selector {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color:  #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Label styling */
        .currency-selector label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--primary-color);
        }
        
        /* Select styling */
        .currency-selector select {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
        font-size: 16px;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 14 14'%3E%3Cpath fill='%23333' d='M7 10l5-5H2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 12px;
        transition: border-color 0.3s;
        }
        
        .currency-selector select:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
        }
        
        /* Optgroup styling for organization */
        .currency-selector optgroup {
        font-weight: bold;
        font-style: normal;
        color: #4a90e2;
        background-color: #f8f9fa;
        }
        
        /* Option styling */
        .currency-selector option {
        padding: 10px;
        background-color: var(--primary-color);
        color: white;
        }
        
        /* Current selection message */
        .currency-selector p {
        margin-top: 16px;
        font-size: 14px;
        color: var(--primary-color);
        }
        
        #selected-currency {
        font-weight: 700;
        color: #4a90e2;
        }

>>>>>>> cc84cad1cf3d4e40d0554cf9fffca2f8c03e5529
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
<body class="loading">
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
                <img src="assets/media/reseller.webp" alt="Reseller Hosting Illustration" class="img-fluid">
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
            <div class="currency-selector" data-aos="fade-up" data-aos-delay="100">
    <label for="currency-selector">Select your currency: </label>
    <select id="currency-selector">
      <!-- Africa -->
      <option value="EGP">Egyptian Pound (EGP)</option>
      <option value="GHS">Ghanaian Cedi (GHS)</option>
      <option value="KES">Kenyan Shilling (KES)</option>
      <option value="NGN">Nigerian Naira (NGN)</option>
      <option value="ZAR">South African Rand (ZAR)</option>
      <option value="TZS">Tanzanian Shilling (TZS)</option>
      <option value="UGX">Ugandan Shilling (UGX)</option>
      <option value="XAF">CFA Franc BEAC (XAF)</option>
      <option value="XOF">CFA Franc BCEAO (XOF)</option>
      <option value="ETB">Ethiopian Birr (ETB)</option>
      
      <!-- Americas -->
      <option value="ARS">Argentine Peso (ARS)</option>
      <option value="BRL">Brazilian Real (BRL)</option>
      <option value="CAD">Canadian Dollar (CAD)</option>
      <option value="CLP">Chilean Peso (CLP)</option>
      <option value="COP">Colombian Peso (COP)</option>
      <option value="MXN">Mexican Peso (MXN)</option>
      <option value="PEN">Peruvian Sol (PEN)</option>
      <option value="USD">US Dollar (USD)</option>
      
      <!-- Asia & Pacific -->
      <option value="AUD">Australian Dollar (AUD)</option>
      <option value="BDT">Bangladeshi Taka (BDT)</option>
      <option value="CNY">Chinese Yuan (CNY)</option>
      <option value="HKD">Hong Kong Dollar (HKD)</option>
      <option value="INR">Indian Rupee (INR)</option>
      <option value="IDR">Indonesian Rupiah (IDR)</option>
      <option value="JPY">Japanese Yen (JPY)</option>
      <option value="KZT">Kazakhstani Tenge (KZT)</option>
      <option value="MYR">Malaysian Ringgit (MYR)</option>
      <option value="NZD">New Zealand Dollar (NZD)</option>
      <option value="PKR">Pakistani Rupee (PKR)</option>
      <option value="PHP">Philippine Peso (PHP)</option>
      <option value="SGD">Singapore Dollar (SGD)</option>
      <option value="KRW">South Korean Won (KRW)</option>
      <option value="LKR">Sri Lankan Rupee (LKR)</option>
      <option value="THB">Thai Baht (THB)</option>
      <option value="VND">Vietnamese Dong (VND)</option>
      
      <!-- Europe -->
      <option value="EUR">Euro (EUR)</option>
      <option value="BGN">Bulgarian Lev (BGN)</option>
      <option value="HRK">Croatian Kuna (HRK)</option>
      <option value="CZK">Czech Koruna (CZK)</option>
      <option value="DKK">Danish Krone (DKK)</option>
      <option value="HUF">Hungarian Forint (HUF)</option>
      <option value="ISK">Icelandic Krona (ISK)</option>
      <option value="NOK">Norwegian Krone (NOK)</option>
      <option value="PLN">Polish Zloty (PLN)</option>
      <option value="RON">Romanian Leu (RON)</option>
      <option value="RUB">Russian Ruble (RUB)</option>
      <option value="SEK">Swedish Krona (SEK)</option>
      <option value="CHF">Swiss Franc (CHF)</option>
      <option value="TRY">Turkish Lira (TRY)</option>
      <option value="GBP">British Pound (GBP)</option>
      <option value="UAH">Ukrainian Hryvnia (UAH)</option>
      
      <!-- Middle East -->
      <option value="BHD">Bahraini Dinar (BHD)</option>
      <option value="ILS">Israeli Shekel (ILS)</option>
      <option value="JOD">Jordanian Dinar (JOD)</option>
      <option value="KWD">Kuwaiti Dinar (KWD)</option>
      <option value="OMR">Omani Rial (OMR)</option>
      <option value="QAR">Qatari Riyal (QAR)</option>
      <option value="SAR">Saudi Riyal (SAR)</option>
      <option value="AED">UAE Dirham (AED)</option>
    </select>
    <p>Showing prices in <span id="selected-currency">USD</span></p>
  </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                        <h3>Shared Starter</h3>
                        <div class="price-tag" id="plan-0-price">$2.99<span class="price-duration">/mo</span></div>
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
                        <h3>Shared Basic</h3>
                        <div class="price-tag"  id="plan-1-price">$4.99<span class="price-duration">/mo</span></div>
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
                        <h3>Shared Business</h3>
                        <div class="price-tag"  id="plan-2-price">$7.99<span class="price-duration">/mo</span></div>
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
                    <img src="assets/media/security-features.webp" alt="Shared Hosting Benefits" class="img-fluid rounded shadow">
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
     <script>
    // Global Currency Converter for Hosting Site Pricing Plans

// Main pricing plans in USD
const pricingPlans = [
  { name: "Basic", price: 9.99, features: ["10GB SSD Storage", "1 Website", "100GB Bandwidth", "Free SSL Certificate", " 5 Email Accounts", "Daily Backups", "Priority Support", "CDN Integration", "Dedicated IP Address"] },
  { name: "Premium", price: 19.99, features: ["30GB SSD Storage", "3 Website", "500GB Bandwidth", "Free SSL Certificate", "Unlimited Email Accounts", "Daily Backups", "Priority Support", "CDN Integration", "Dedicated IP Address"] },
  { name: "Business", price: 29.99, features: ["100GB SSD Storage", "unlimited websites", "2TB Bandwidth", "Free SSL Certificate", "Unlimited Email Accounts", "Daily Backups", "Priority Support", "CDN Integration", "Dedicated IP Address"] }
];

// Exchange rates (relative to USD)
// These would typically come from an API in a production environment
const exchangeRates = {
  USD: 1.00,      // United States Dollar
  EUR: 0.92,      // Euro
  GBP: 0.79,      // British Pound
  CAD: 1.36,      // Canadian Dollar
  AUD: 1.53,      // Australian Dollar
  INR: 83.60,     // Indian Rupee
  JPY: 151.73,    // Japanese Yen
  CNY: 7.23,      // Chinese Yuan
  BRL: 5.15,      // Brazilian Real
  MXN: 16.73,     // Mexican Peso
  RUB: 92.16,     // Russian Ruble
  ZAR: 18.31,     // South African Rand
  SGD: 1.34,      // Singapore Dollar
  NZD: 1.66,      // New Zealand Dollar
  CHF: 0.88,      // Swiss Franc
  HKD: 7.81,      // Hong Kong Dollar
  SEK: 10.49,     // Swedish Krona
  NOK: 10.71,     // Norwegian Krone
  DKK: 6.87,      // Danish Krone
  PLN: 3.95,      // Polish Zloty
  THB: 35.05,     // Thai Baht
  KRW: 1358.58,   // South Korean Won
  IDR: 15920.25,  // Indonesian Rupiah
  SAR: 3.75,      // Saudi Riyal
  AED: 3.67,      // UAE Dirham
  MYR: 4.27,      // Malaysian Ringgit
  PHP: 56.92,     // Philippine Peso
  TRY: 32.18,     // Turkish Lira
  EGP: 47.25,     // Egyptian Pound
  PKR: 278.14,    // Pakistani Rupee
  NGN: 1485.11,   // Nigerian Naira
  CLP: 921.85,    // Chilean Peso
  COP: 3953.38,   // Colombian Peso
  ARS: 876.50,    // Argentine Peso
  PEN: 3.72,      // Peruvian Sol
  VND: 25187.50,  // Vietnamese Dong
  ILS: 3.68,      // Israeli Shekel
  CZK: 23.35,     // Czech Koruna
  HUF: 361.95,    // Hungarian Forint
  RON: 4.58,      // Romanian Leu
  BGN: 1.80,      // Bulgarian Lev
  HRK: 6.97,      // Croatian Kuna
  ISK: 137.81,    // Icelandic Krona
  UAH: 39.30,     // Ukrainian Hryvnia
  QAR: 3.64,      // Qatari Riyal
  KWD: 0.31,      // Kuwaiti Dinar
  BHD: 0.38,      // Bahraini Dinar
  OMR: 0.38,      // Omani Rial
  JOD: 0.71,      // Jordanian Dinar
  KZT: 446.92,    // Kazakhstani Tenge
  BDT: 110.25,    // Bangladeshi Taka
  LKR: 295.38,    // Sri Lankan Rupee
  KES: 130.50,    // Kenyan Shilling
  GHS: 14.75,     // Ghanaian Cedi
  UGX: 3772.43,   // Ugandan Shilling
  TZS: 2581.47,   // Tanzanian Shilling
  ETB: 56.51,     // Ethiopian Birr
  XOF: 605.02,    // CFA Franc BCEAO
  XAF: 605.02     // CFA Franc BEAC
};

// Currency symbols and formatting options
const currencyFormats = {
  USD: { symbol: '$', position: 'before', decimalPlaces: 2 },
  EUR: { symbol: '€', position: 'after', decimalPlaces: 2 },
  GBP: { symbol: '£', position: 'before', decimalPlaces: 2 },
  CAD: { symbol: 'C$', position: 'before', decimalPlaces: 2 },
  AUD: { symbol: 'A$', position: 'before', decimalPlaces: 2 },
  INR: { symbol: '₹', position: 'before', decimalPlaces: 2 },
  JPY: { symbol: '¥', position: 'before', decimalPlaces: 0 },
  CNY: { symbol: '¥', position: 'before', decimalPlaces: 2 },
  BRL: { symbol: 'R$', position: 'before', decimalPlaces: 2 },
  MXN: { symbol: 'Mex$', position: 'before', decimalPlaces: 2 },
  RUB: { symbol: '₽', position: 'after', decimalPlaces: 2 },
  ZAR: { symbol: 'R', position: 'before', decimalPlaces: 2 },
  SGD: { symbol: 'S$', position: 'before', decimalPlaces: 2 },
  NZD: { symbol: 'NZ$', position: 'before', decimalPlaces: 2 },
  CHF: { symbol: 'CHF', position: 'before', decimalPlaces: 2 },
  HKD: { symbol: 'HK$', position: 'before', decimalPlaces: 2 },
  SEK: { symbol: 'kr', position: 'after', decimalPlaces: 2 },
  NOK: { symbol: 'kr', position: 'after', decimalPlaces: 2 },
  DKK: { symbol: 'kr', position: 'after', decimalPlaces: 2 },
  PLN: { symbol: 'zł', position: 'after', decimalPlaces: 2 },
  THB: { symbol: '฿', position: 'before', decimalPlaces: 2 },
  KRW: { symbol: '₩', position: 'before', decimalPlaces: 0 },
  IDR: { symbol: 'Rp', position: 'before', decimalPlaces: 0 },
  SAR: { symbol: '﷼', position: 'after', decimalPlaces: 2 },
  AED: { symbol: 'د.إ', position: 'after', decimalPlaces: 2 },
  MYR: { symbol: 'RM', position: 'before', decimalPlaces: 2 },
  PHP: { symbol: '₱', position: 'before', decimalPlaces: 2 },
  TRY: { symbol: '₺', position: 'before', decimalPlaces: 2 },
  EGP: { symbol: 'E£', position: 'before', decimalPlaces: 2 },
  PKR: { symbol: '₨', position: 'before', decimalPlaces: 2 },
  NGN: { symbol: '₦', position: 'before', decimalPlaces: 2 },
  CLP: { symbol: 'CLP$', position: 'before', decimalPlaces: 0 },
  COP: { symbol: 'COL$', position: 'before', decimalPlaces: 0 },
  ARS: { symbol: 'ARS$', position: 'before', decimalPlaces: 2 },
  PEN: { symbol: 'S/', position: 'before', decimalPlaces: 2 },
  VND: { symbol: '₫', position: 'after', decimalPlaces: 0 },
  ILS: { symbol: '₪', position: 'before', decimalPlaces: 2 },
  CZK: { symbol: 'Kč', position: 'after', decimalPlaces: 2 },
  HUF: { symbol: 'Ft', position: 'after', decimalPlaces: 0 },
  RON: { symbol: 'lei', position: 'after', decimalPlaces: 2 },
  BGN: { symbol: 'лв', position: 'after', decimalPlaces: 2 },
  HRK: { symbol: 'kn', position: 'after', decimalPlaces: 2 },
  ISK: { symbol: 'kr', position: 'after', decimalPlaces: 0 },
  UAH: { symbol: '₴', position: 'after', decimalPlaces: 2 },
  QAR: { symbol: '﷼', position: 'after', decimalPlaces: 2 },
  KWD: { symbol: 'د.ك', position: 'after', decimalPlaces: 3 },
  BHD: { symbol: 'BD', position: 'before', decimalPlaces: 3 },
  OMR: { symbol: '﷼', position: 'after', decimalPlaces: 3 },
  JOD: { symbol: 'JD', position: 'before', decimalPlaces: 3 },
  KZT: { symbol: '₸', position: 'after', decimalPlaces: 2 },
  BDT: { symbol: '৳', position: 'before', decimalPlaces: 2 },
  LKR: { symbol: '₨', position: 'before', decimalPlaces: 2 },
  KES: { symbol: 'KSh', position: 'before', decimalPlaces: 2 },
  GHS: { symbol: '₵', position: 'before', decimalPlaces: 2 },
  UGX: { symbol: 'USh', position: 'before', decimalPlaces: 0 },
  TZS: { symbol: 'TSh', position: 'before', decimalPlaces: 0 },
  ETB: { symbol: 'Br', position: 'before', decimalPlaces: 2 },
  XOF: { symbol: 'CFA', position: 'after', decimalPlaces: 0 },
  XAF: { symbol: 'FCFA', position: 'after', decimalPlaces: 0 }
};

// Country to currency mapping
const countryCurrencyMap = {
  'US': 'USD', 'CA': 'CAD', 'GB': 'GBP', 'AU': 'AUD', 'NZ': 'NZD',
  'IN': 'INR', 'JP': 'JPY', 'CN': 'CNY', 'BR': 'BRL', 'MX': 'MXN',
  'RU': 'RUB', 'ZA': 'ZAR', 'SG': 'SGD', 'CH': 'CHF', 'HK': 'HKD',
  'SE': 'SEK', 'NO': 'NOK', 'DK': 'DKK', 'PL': 'PLN', 'TH': 'THB',
  'KR': 'KRW', 'ID': 'IDR', 'SA': 'SAR', 'AE': 'AED', 'MY': 'MYR',
  'PH': 'PHP', 'TR': 'TRY', 'EG': 'EGP', 'PK': 'PKR', 'NG': 'NGN',
  'CL': 'CLP', 'CO': 'COP', 'AR': 'ARS', 'PE': 'PEN', 'VN': 'VND',
  'IL': 'ILS', 'CZ': 'CZK', 'HU': 'HUF', 'RO': 'RON', 'BG': 'BGN',
  'HR': 'HRK', 'IS': 'ISK', 'UA': 'UAH', 'QA': 'QAR', 'KW': 'KWD',
  'BH': 'BHD', 'OM': 'OMR', 'JO': 'JOD', 'KZ': 'KZT', 'BD': 'BDT',
  'LK': 'LKR', 'KE': 'KES', 'GH': 'GHS', 'UG': 'UGX', 'TZ': 'TZS',
  'ET': 'ETB', 'BJ': 'XOF', 'BF': 'XOF', 'CI': 'XOF', 'GW': 'XOF',
  'ML': 'XOF', 'NE': 'XOF', 'SN': 'XOF', 'TG': 'XOF', 'CM': 'XAF',
  'CF': 'XAF', 'TD': 'XAF', 'CG': 'XAF', 'GQ': 'XAF', 'GA': 'XAF',
  // Euro countries
  'DE': 'EUR', 'FR': 'EUR', 'IT': 'EUR', 'ES': 'EUR', 'PT': 'EUR',
  'NL': 'EUR', 'BE': 'EUR', 'AT': 'EUR', 'GR': 'EUR', 'IE': 'EUR',
  'FI': 'EUR', 'SK': 'EUR', 'SI': 'EUR', 'LT': 'EUR', 'LV': 'EUR',
  'EE': 'EUR', 'CY': 'EUR', 'MT': 'EUR', 'LU': 'EUR', 'MC': 'EUR'
};

/**
 * Format price according to currency formatting rules
 */
function formatPrice(price, currency) {
  const format = currencyFormats[currency] || { symbol: currency, position: 'before', decimalPlaces: 2 };
  const formattedNumber = price.toFixed(format.decimalPlaces);
  
  return format.position === 'before' 
    ? `${format.symbol}${formattedNumber}`
    : `${formattedNumber} ${format.symbol}`;
}

/**
 * Convert price from USD to target currency
 */
function convertPrice(priceInUSD, targetCurrency) {
  if (!exchangeRates[targetCurrency]) {
    console.error(`Currency ${targetCurrency} not supported`);
    return priceInUSD; // Return original price if currency not found
  }
  
  return priceInUSD * exchangeRates[targetCurrency];
}

/**
 * Update displayed prices based on selected currency
 */
function updatePrices(currency) {
  pricingPlans.forEach((plan, index) => {
    const convertedPrice = convertPrice(plan.price, currency);
    const formattedPrice = formatPrice(convertedPrice, currency);
    
    // Update price display in DOM
    const priceElement = document.getElementById(`plan-${index}-price`);
    if (priceElement) {
      priceElement.textContent = formattedPrice;
    }
  });
  
  // Update currency selection display
  const currencyDisplay = document.getElementById('selected-currency');
  if (currencyDisplay) {
    currencyDisplay.textContent = currency;
  }
}

/**
 * Get user's country and set appropriate currency
 * This uses the ip-api.com service which has free tier limitations
 */
function detectUserCurrency() {
  fetch('http://ip-api.com/json/?fields=countryCode')
    .then(response => response.json())
    .then(data => {
      let currency = 'USD'; // Default
      
      if (countryCurrencyMap[data.countryCode]) {
        currency = countryCurrencyMap[data.countryCode];
      }
      
      // Update currency selector and prices
      const currencySelector = document.getElementById('currency-selector');
      if (currencySelector) {
        currencySelector.value = currency;
      }
      
      updatePrices(currency);
    })
    .catch(error => {
      console.error('Error detecting user location:', error);
      updatePrices('USD'); // Fallback to USD
    });
}

/**
 * Initialize the currency converter when the page loads
 */
document.addEventListener('DOMContentLoaded', function() {
  // Create currency selection dropdown
  const currencySelector = document.getElementById('currency-selector');
  
  if (currencySelector) {
    // Add event listener for currency changes
    currencySelector.addEventListener('change', function() {
      updatePrices(this.value);
    });
  }
  
  // Try to detect user's currency automatically
  detectUserCurrency();
});
/**
 * Format price according to currency formatting rules with thousand separators
 */
function formatPrice(price, currency) {
  const format = currencyFormats[currency] || { symbol: currency, position: 'before', decimalPlaces: 2 };
  
  // Format the number with proper decimal places
  let formattedNumber = price.toFixed(format.decimalPlaces);
  
  // Add thousand separators
  // Split number into integer and decimal parts
  const parts = formattedNumber.split('.');
  // Add commas to the integer part
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  // Rejoin with decimal part if it exists
  formattedNumber = parts.join('.');
  
  // Apply currency symbol in the correct position
  return format.position === 'before' 
    ? `${format.symbol}${formattedNumber}`
    : `${formattedNumber} ${format.symbol}`;
}
  </script>
<<<<<<< HEAD
=======
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
                    <img src="assets/media/security-features.webp" alt="Shared Hosting Benefits" class="img-fluid rounded shadow">
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
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
>>>>>>> cc84cad1cf3d4e40d0554cf9fffca2f8c03e5529
</body>
</html>