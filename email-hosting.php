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
            height: 100vh;
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
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
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
            <div class="row g-4">
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
<script>
    // Global Currency Converter for Hosting Site Pricing Plans

// Main pricing plans in USD
const pricingPlans = [
  { name: "Basic", price: 9.99, features: ["10GB  Storage", "5 Email Accounts", "Spam Protection", "Webmail Access", "Custom Domain", "Mobile Sync", " Priority Support", "Advanced Security"] },
  { name: "Premium", price: 19.99, features: ["25GB Storage", "15 Email Accounts", "Spam Protection", "Webmail Access", "Custom Domain", "Mobile Sync", "priority Support",  "Advanced Security"] },
  { name: "Business", price: 29.99, features: ["50GB Storage", "Unlimited Email Accounts", "Spam Protection", "Webmail Access", "Custom Domain", "Mobile Sync", "Priority Support",  "Performance Optimization"] }
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
  </script>
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