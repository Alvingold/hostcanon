<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Hosting</title>

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
                    <img src="assets/media/ecommerce.webp" alt="Reseller Hosting Illustration" class="img-fluid">
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
                            <h3>Starter</h3>
                            <div class="price-tag" id="plan-0-price">$9.99<span class="price-duration">/month</span></div>
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
                            <h3>Business</h3>
                            <div class="price-tag" id="plan-1-price">$24.99<span class="price-duration">/month</span></div>
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
                            <div class="price-tag" id="plan-2-price">$49.99<span class="price-duration">/month</span></div>
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
                 <!-- Include the currency converter script -->
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

<script>
    // Global Currency Converter for Hosting Site Pricing Plans

// Main pricing plans in USD
const pricingPlans = [
  { name: "Starter", price: 9.99, features: ["10GB SSD Storage", "1 Website", "Free SSL Certificate", "Daily Backups", "Basic CDN", "Premium Themes", "Priority Support", "Dedicated IP", "Performance Optimization"] },
  { name: "Business", price: 24.99, features: ["30GB SSD Storage", "3 Website", "Free SSL Certificate", "Daily Backups", "Premium CDN", "Premium Themes", "Priority Support", "Dedicated IP", "Performance Optimization"] },
  { name: "Enterprise", price: 49.99, features: ["100GB SSD Storage", "Unlimited Websites", "Free SSL Certificate", "Daily Backups", "Premium CDN", "Premium Themes", "Priority Support", "Dedicated IP", "Performance Optimization"] }
];

// Replace the static exchangeRates object with this variable declaration
let exchangeRates = {};

// Add this function to fetch real-time exchange rates
async function fetchExchangeRates() {
  try {
    // Replace with your API endpoint and API key
    const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
    const data = await response.json();
    
    // Update the rates in your application
    exchangeRates = data.rates;
    
    // Update displayed prices with new rates
    const currentCurrency = document.getElementById('currency-selector').value;
    updatePrices(currentCurrency);
    
  } catch (error) {
    console.error('Error fetching exchange rates:', error);
    // Fallback to some default rates if the API call fails
  }
}

// Then in your existing DOMContentLoaded event listener, add the call to fetchExchangeRates:
document.addEventListener('DOMContentLoaded', function() {
  // Create currency selection dropdown
  const currencySelector = document.getElementById('currency-selector');
  
  if (currencySelector) {
    // Add event listener for currency changes
    currencySelector.addEventListener('change', function() {
      updatePrices(this.value);
    });
  }
  
  // Fetch real-time exchange rates
  fetchExchangeRates();
  
  // If you also want to keep the user currency detection:
  // detectUserCurrency();
});

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
>>>>>>> cc84cad1cf3d4e40d0554cf9fffca2f8c03e5529
</body>
</html>