<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Afriportal Network Limited</title>
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">

    <?php include 'assets/includes/optimize-loading.php'; ?>

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
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.95), rgba(147, 44, 139, 0.95));
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
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s ease;
        }

        .hero-btn .btn-primary:hover::before {
            left: 100%;
        }

        .hero-btn .btn-outline-light {
            color: white;
            border: 2px solid white;
            border-radius: 50px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .hero-btn .btn-outline-light:hover {
            color: black;
            background: white;
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

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-subtitle {
                font-size: 1rem;
            }
            .hero-section img{
                display: none;
            }
            
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
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
        }

        .features-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><rect width="1" height="1" fill="%234B0082" opacity="0.05"/></svg>');
            opacity: 0.5;
        }

        /* .features-section .section-title {
            margin-bottom: 3rem;
            color: #2d2d2d;
            font-weight: 800;
            position: relative;
        } */

        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(75, 0, 130, 0.1);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.05), rgba(147, 44, 139, 0.05));
            opacity: 0;
            transition: all 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(75, 0, 130, 0.2);
            box-shadow: 0 15px 35px rgba(75, 0, 130, 0.1);
        }

        .feature-card:hover::before {
            opacity: 1;
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

        .feature-card h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2d2d2d;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .features-section {
                padding: 60px 0;
            }
            
            .feature-card {
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
        /* Server Specifications Styling */
        .specs-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .specs-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><rect width="1" height="1" fill="%234B0082" opacity="0.05"/></svg>');
            opacity: 0.3;
            pointer-events: none;
        }

        .spec-card {
            border: 1px solid rgba(75, 0, 130, 0.1);
            transition: all 0.4s ease;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .spec-card:hover {
            transform: translateY(-5px);
            border-color: #4B0082;
            box-shadow: 0 15px 35px rgba(75, 0, 130, 0.15) !important;
        }

        .spec-card h4 {
            color: #4B0082;
            font-size: 1.25rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .spec-card h4 i {
            font-size: 1.5rem;
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.1), rgba(147, 44, 139, 0.1));
            padding: 0.5rem;
            border-radius: 10px;
            color: #4B0082;
        }

        .spec-card ul li {
            position: relative;
            padding: 0.75rem 0;
            margin-bottom: 0;
            color: #666;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(75, 0, 130, 0.05);
            display: flex;
            align-items: center;
        }

        .spec-card ul li:last-child {
            border-bottom: none;
        }

        .spec-card ul li i {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(75, 0, 130, 0.1);
            border-radius: 50%;
            margin-right: 1rem;
            font-size: 0.8rem;
            color: #4B0082;
            transition: all 0.3s ease;
        }

        .spec-card ul li:hover {
            color: #4B0082;
            transform: translateX(5px);
        }

        /* FAQ Section Styling */
        .faq-section {
            background-color: #ffffff;
        }

        .accordion-item {
            border: 1px solid rgba(75, 0, 130, 0.1);
            margin-bottom: 1rem;
            border-radius: 10px !important;
            overflow: hidden;
        }

        .accordion-button {
            font-weight: 600;
            color: #2d2d2d;
            background-color: #fff;
            box-shadow: none !important;
            padding: 1.25rem;
        }

        .accordion-button:not(.collapsed) {
            color: #4B0082;
            background-color: rgba(75, 0, 130, 0.05);
        }

        .accordion-button:focus {
            border-color: rgba(75, 0, 130, 0.1);
        }

        .accordion-body {
            padding: 1.25rem;
            color: #666;
            background-color: #fff;
        }
    </style>
</head>
<body class="loading">
    <?php include 'assets/includes/preloader.php'; ?>
    <?php include 'assets/includes/contact-btn.php'; ?>
    <?php include 'assets/includes/nav-bar.php'; ?>
    <?php include 'assets/includes/scroll-up.php'; ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="hero-title">Virtual Private Server Solutions</h1>
                    <p class="hero-subtitle">Experience unmatched performance and complete control with our VPS hosting solutions. Perfect for growing businesses that need dedicated resources.</p>
                    <div class="hero-btn d-flex gap-3">
                        <a href="#pricing" class="btn btn-primary">View Plans</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/vps.webp" alt="VPS Hosting" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title text-center">Why Choose Our VPS Hosting?</h2>
            <p class="text-center text-muted mt-3 mb-5 fw-bold">Experience the power of dedicated resources and complete control</p>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h4>Lightning Fast Performance</h4>
                        <p>Powered by NVMe SSD storage and latest-gen processors for up to 20x faster performance than traditional hosting.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Enterprise Security</h4>
                        <p>DDoS protection, SSL certificates, automated backups, and 24/7 infrastructure monitoring to keep your data safe.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h4>Full Root Access</h4>
                        <p>Complete control over your server with root access, choice of OS, and custom resource allocation.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4>Instant Scalability</h4>
                        <p>Easily upgrade resources as your business grows with zero downtime and no service interruption.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4>24/7 Expert Support</h4>
                        <p>Our experienced technical team is available round-the-clock to assist you with any server issues.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4>99.9% Uptime</h4>
                        <p>Guaranteed uptime with redundant infrastructure and constant monitoring for maximum reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Vps Services -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Choose Your VPS Hosting Plan</h2>
            <p class="text-center text-muted mt-3 mb-5 fw-bold" data-aos="fade-up" data-aos-delay="100">Scalable solutions for your growing business needs</p>
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
            <div class="row mt-5">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Starter VPS</h3>
                            <div class="price-tag" id="plan-0-price">$19.99<span class="price-duration">/month</span></div>
                            <p>For small businesses and personal projects</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 2 vCPU Cores</li>
                                <li><i class="bi bi-check-circle"></i> 2GB RAM</li>
                                <li><i class="bi bi-check-circle"></i> 40GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 2TB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 1 Dedicated IP</li>
                                <li><i class="bi bi-check-circle"></i> Full Root Access</li>
                                <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Weekly Backups</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Business VPS</h3>
                            <div class="price-tag" id="plan-1-price">$39.99<span class="price-duration">/month</span></div>
                            <p>For growing businesses and online presence</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 4 vCPU Cores</li>
                                <li><i class="bi bi-check-circle"></i> 4GB RAM</li>
                                <li><i class="bi bi-check-circle"></i> 80GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 4TB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 2 Dedicated IPs</li>
                                <li><i class="bi bi-check-circle"></i> Full Root Access</li>
                                <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-x-circle text-danger"></i> Weekly Backups</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Enterprise VPS</h3>
                            <div class="price-tag" id="plan-2-price">$59.99<span class="price-duration">/month</span></div>
                            <p>For high-traffic websites and applications</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 8 vCPU Cores</li>
                                <li><i class="bi bi-check-circle"></i> 8GB RAM</li>
                                <li><i class="bi bi-check-circle"></i> 160GB SSD Storage</li>
                                <li><i class="bi bi-check-circle"></i> 8TB Bandwidth</li>
                                <li><i class="bi bi-check-circle"></i> 3 Dedicated IPs</li>
                                <li><i class="bi bi-check-circle"></i> Full Root Access</li>
                                <li><i class="bi bi-check-circle"></i> DDoS Protection</li>
                                <li><i class="bi bi-check-circle"></i> Priority Support</li>
                                <li><i class="bi bi-check-circle"></i> Weekly Backups</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Order Now</a>
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
  { name: "Basic", price: 9.99, features: ["2 vCPU Cores", "2GB RAM", "40GB SSD Storage", "2TB Bandwidth", " 1 Dedicated IP", "Full Root Access", "DDoS Protection", "Priority Support", "Weekly Backups"] },
  { name: "Premium", price: 19.99, features: ["4 vCPU Cores", "4GB RAM", "80GB SSD Storage", "4TB Bandwidth", "2 Dedicated IP", "Full Root Access", "DDoS Protection", "Priority Support", "Weekly Backups"] },
  { name: "Business", price: 29.99, features: ["8 vCPU Cores", "8GB RAM", "160GB SSD Storage", "8TB Bandwidth", "3 Dedicated IP", "Full Root Access", "DDoS Protection", "Priority Support", "Weekly Backups"] }
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

    <!-- Server Specifications -->
    <section class="specs-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Premium Server Infrastructure</h2>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="spec-card p-4 rounded-4 shadow-sm h-100">
                        <h4 class="mb-4">
                            <i class="bi bi-cpu"></i>
                            Hardware Specifications
                        </h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i>Latest Gen Intel Xeon Processors</li>
                            <li><i class="bi bi-check-circle-fill"></i>NVMe SSD Storage Arrays</li>
                            <li><i class="bi bi-check-circle-fill"></i>ECC DDR4 RAM</li>
                            <li><i class="bi bi-check-circle-fill"></i>Enterprise-grade Network Infrastructure</li>
                            <li><i class="bi bi-check-circle-fill"></i>RAID-10 Configuration</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="spec-card p-4 rounded-4 shadow-sm h-100">
                        <h4 class="mb-4">
                            <i class="bi bi-hdd-network"></i>
                            Network Features
                        </h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i>1Gbps Network Port</li>
                            <li><i class="bi bi-check-circle-fill"></i>Multiple Tier-1 Network Providers</li>
                            <li><i class="bi bi-check-circle-fill"></i>Advanced DDoS Protection</li>
                            <li><i class="bi bi-check-circle-fill"></i>Low-latency Global Routes</li>
                            <li><i class="bi bi-check-circle-fill"></i>IPv4 & IPv6 Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="vpsAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What is VPS hosting?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#vpsAccordion">
                                <div class="accordion-body">
                                    VPS (Virtual Private Server) hosting provides you with dedicated resources on a virtualized server. Unlike shared hosting, you get guaranteed CPU, RAM, and storage allocation, ensuring consistent performance for your applications.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How do I manage my VPS?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#vpsAccordion">
                                <div class="accordion-body">
                                    You can manage your VPS through our intuitive control panel or via SSH with full root access. We provide management tools and a user-friendly interface for easy server administration.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Can I upgrade my VPS plan?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#vpsAccordion">
                                <div class="accordion-body">
                                    Yes, you can easily upgrade your VPS plan at any time. Our scalable infrastructure allows seamless upgrades with minimal downtime, ensuring your business can grow without constraints.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section py-5" style="background: linear-gradient(135deg, #4B0082, #932C8B);">
        <div class="container">
            <div class="row justify-content-center text-center text-white">
                <div class="col-lg-8" data-aos="zoom-in">
                    <h2 class="mb-4">Ready to Get Started with VPS Hosting?</h2>
                    <p class="mb-4">Experience the power of dedicated resources and take your business to the next level</p>
                    <a href="#pricing" class="btn btn-light btn-lg px-5">Choose Your Plan</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'assets/includes/footer.php'; ?>

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
</body>
</html>

