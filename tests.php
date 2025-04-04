<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Hosting - Creative Solutions</title>
    <link rel="shortcut icon" href="assets/media/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        color: #374151;
        background-color: #f9fafb;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .hero-section {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 0;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
        z-index: -2;
    }

    .floating-shapes {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.6;
    }

    .shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        filter: blur(20px);
        animation: float 15s infinite ease-in-out;
    }

    .shape:nth-child(1) {
        width: 300px;
        height: 300px;
        top: -100px;
        left: -150px;
        animation-delay: 0s;
    }

    .shape:nth-child(2) {
        width: 250px;
        height: 250px;
        top: 50%;
        right: -100px;
        animation-delay: -2s;
    }

    .shape:nth-child(3) {
        width: 400px;
        height: 400px;
        bottom: -200px;
        left: 20%;
        animation-delay: -5s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0) scale(1);
        }
        50% {
            transform: translateY(-40px) scale(1.1);
        }
    }

    .hero-content {
        max-width: 1100px;
        width: 90%;
        position: relative;
        z-index: 1;
        color: white;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .content-left {
        padding: 40px 0;
    }

    .hero-heading {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: white;
        line-height: 1.2;
    }

    .hero-subheading {
        font-size: 1.2rem;
        margin-bottom: 30px;
        opacity: 0.9;
        line-height: 1.6;
    }

    .hero-features {
        margin-bottom: 35px;
    }

    .feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding: 10px 15px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        backdrop-filter: blur(10px);
        transform: translateX(-20px);
        opacity: 0;
        animation: slideIn 0.5s forwards;
    }

    .feature-item:nth-child(1) { animation-delay: 0.1s; }
    .feature-item:nth-child(2) { animation-delay: 0.3s; }
    .feature-item:nth-child(3) { animation-delay: 0.5s; }

    @keyframes slideIn {
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .feature-icon {
        min-width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 1.25rem;
        background: #932C8B;
        color: white;
    }

    .btn-group {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
    }

    .btn-primary-action {
        background: white;
        color: #4B0082;
        padding: 15px 30px;
        border-radius: 30px;
        font-weight: 600;
        border: 0;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
        z-index: 1;
        transition: all 0.3s;
    }

    .btn-primary-action:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary-action {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        padding: 15px 30px;
        border-radius: 30px;
        font-weight: 600;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        transition: all 0.3s;
    }

    .btn-secondary-action:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .price-card {
        padding: 30px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
    }

    .price-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        z-index: -1;
    }

    .price-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #4B0082;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .price-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .price-amount {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 5px;
        color: white;
    }

    .price-period {
        opacity: 0.7;
        margin-bottom: 25px;
    }

    .price-features {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
    }

    .price-features li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
    }

    .price-features i {
        color: #10b981;
        margin-right: 10px;
    }

    .content-right {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 991px) {
        .hero-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .feature-item {
            justify-content: center;
        }

        .btn-group {
            justify-content: center;
        }

        .hero-heading {
            font-size: 2.8rem;
        }

        .price-card {
            max-width: 400px;
            margin: 0 auto;
        }
    }

    @media (max-width: 576px) {
        .hero-heading {
            font-size: 2.5rem;
        }

        .btn-group {
            flex-direction: column;
        }
    }
    </style>
</head>
<body>
<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="hero-content">
        <div class="content-left">
            <h1 class="hero-heading">WordPress Reimagined</h1>
            <h3 class="hero-subheading">Elevate your digital presence with our lightning-fast hosting, built for creators who demand the extraordinary.</h3>
            
            <div class="hero-features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <span class="feature-text">5x Faster Loading Speed</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <span class="feature-text">Advanced Security Suite</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <span class="feature-text">Auto-Optimization</span>
                </div>
            </div>
            
            <div class="btn-group">
                <button class="btn-primary-action">Launch Your Site</button>
                <button class="btn-secondary-action">Explore Plans</button>
            </div>
        </div>
        
        <div class="content-right">
            <div class="price-card">
                <div class="price-badge">Most Popular</div>
                <h3 class="price-title">Performance Plan</h3>
                <div class="price-amount">$2.80</div>
                <div class="price-period">per month</div>
                <ul class="price-features">
                    <li><i class="bi bi-check-lg"></i> 50GB SSD Storage</li>
                    <li><i class="bi bi-check-lg"></i> Unlimited Bandwidth</li>
                    <li><i class="bi bi-check-lg"></i> Free Domain (1 year)</li>
                    <li><i class="bi bi-check-lg"></i> LiteSpeed Cache Plugin</li>
                    <li><i class="bi bi-check-lg"></i> 24/7 Expert Support</li>
                </ul>
                <button class="btn-primary-action" style="width: 100%;">Get Started</button>
            </div>
        </div>
    </div>
</section>
</body>
</html>