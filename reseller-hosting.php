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
        
        /* Features Section */
        .features-section {
            padding: 80px 0;
        }
        
        .section-title {
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

        /* Support Section */
.support-section {
    padding: var(--section-padding);
    background-color: #f8f9fa;
    position: relative;
}

/* Support Cards */
.support-card {
    background: white;
    border-radius: 10px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.support-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.support-icon {
    margin-bottom: 20px;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, rgba(75, 0, 130, 0.1), rgba(147, 44, 139, 0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.support-icon i {
    font-size: 2.5rem;
    color: var(--primary-color);
}

.support-card h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--text-dark);
}

.support-card p {
    color: #666;
    margin-bottom: 0;
}

/* Benefits Section */
.support-content, .support-channels-wrapper {
    height: 100%;
}

.support-content h3, .support-channels-wrapper h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-color);
    position: relative;
    padding-bottom: 10px;
}

.support-content h3::after, .support-channels-wrapper h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background-color: var(--primary-color);
    border-radius: 2px;
}

.benefit-icon, .channel-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    background: linear-gradient(135deg, rgba(75, 0, 130, 0.1), rgba(147, 44, 139, 0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-icon i, .channel-icon i {
    font-size: 1.5rem;
    color: var(--primary-color);
}

.support-benefit h4, .support-channel-item h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: var(--text-dark);
}

.support-benefit p, .support-channel-item p {
    color: #666;
    margin-bottom: 0;
}

/* Button */
.support-section .btn {
    margin-top: 20px;
    padding: 0.8rem 2.5rem;
}

/* Responsive */
@media (max-width: 991px) {
    .support-channels-wrapper {
        margin-top: 30px;
    }
}

@media (max-width: 767px) {
    .support-card {
        padding: 20px 15px;
    }
    
    .support-icon {
        width: 60px;
        height: 60px;
    }
    
    .support-icon i {
        font-size: 2rem;
    }
    
    .support-card h3 {
        font-size: 1.3rem;
    }
    
    .support-content h3, .support-channels-wrapper h3 {
        font-size: 1.5rem;
    }
    
    .benefit-icon, .channel-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
    }
    
    .benefit-icon i, .channel-icon i {
        font-size: 1.2rem;
    }
    
    .support-benefit h4, .support-channel-item h4 {
        font-size: 1.1rem;
    }
}

        /* Guidance Section */
        .guidance {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 30px;
    max-width: 800px;
    margin: 0 auto;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-bottom: 50px;
}

.guidance h2 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
}

.steps-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.step {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.step-number {
    background-color: #4B0082;
    color: white;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-content h3 {
    color: #2c3e50;
    margin-top: 0;
    margin-bottom: 8px;
    font-size: 18px;
}

.step-content p {
    color: #7f8c8d;
    margin: 0;
    line-height: 1.5;
}

.cta-container {
    margin-top: 30px;
    text-align: center;
}

.cta-button {
    display: inline-block;
    background-color: #4B0082;
    color: white;
    padding: 12px 24px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color:rgb(68, 27, 97);
}

.support-text {
    margin-top: 10px;
    font-size: 14px;
    color: #7f8c8d;
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
        
    </style>
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
const pricingPlans = [
  { name: "Starter", price: 24.99, features: ["30 GB SSD Storage", "500 GB Bandwidth", "30 cPanel Accounts", "Free WHMCS License", "24/7 Support", "Priority Support", "Free SSL Certificates", "Daily Backups", "Dedicated IP Address"] },
  { name: "Professional", price: 49.99, features: ["75 GB SSD Storage", "1000 GB Bandwidth", "75 cPanel Accounts", "Free WHMCS License", "24/7 Support", "Priority Support", "Free SSL Certificates", "Daily Backups", "Dedicated IP Address"] },
  { name: "Enterprise", price: 89.99, features: ["150 GB SSD Storage", "2000 GB Bandwidth", "150 cPanel Accounts", "Free WHMCS License", "24/7 Support", "Priority Support", "Free SSL Certificates", "Daily Backups", "Dedicated IP Address"] }
];
</script>
</body>
</html>