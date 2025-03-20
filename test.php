<section class="dedicated-hero">
    <div class="container">
        <div class="hero-content">
            <!-- Text Content -->
            <div class="hero-text">
                <span class="hero-badge">Enterprise-Grade Solution</span>
                <h1>Dedicated Hosting for Ultimate Performance</h1>
                <p>Unmatched speed, security, and control for your high-traffic websites. Power up your business with HostCanon's dedicated hosting solutions.</p>
                <div class="hero-actions">
                    <a href="#" class="hero-btn primary">Get Started</a>
                    <a href="#" class="hero-btn secondary">View Plans</a>
                </div>
                <div class="hero-features">
                    <div class="feature"><i class="feature-icon speed"></i>99.9% Uptime</div>
                    <div class="feature"><i class="feature-icon security"></i>DDoS Protection</div>
                    <div class="feature"><i class="feature-icon support"></i>24/7 Support</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<style>
.dedicated-hero {
    position: relative;
    background: linear-gradient(135deg, rgba(75, 0, 130, 0.85) 0%, rgba(147, 44, 139, 0.85) 100%), url('server-room.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 120px 0 140px;
    overflow: hidden;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.hero-content {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    z-index: 2;
}

.hero-text {
    max-width: 600px;
}

.hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 30px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
    backdrop-filter: blur(5px);
}

.hero-text h1 {
    font-size: 48px;
    font-weight: 800;
    line-height: 1.2;
    margin: 0 0 20px;
    letter-spacing: -0.5px;
}

.hero-text p {
    font-size: 18px;
    margin: 0 0 30px;
    line-height: 1.7;
    opacity: 0.9;
}

.hero-actions {
    display: flex;
    gap: 15px;
    margin-bottom: 40px;
}

.hero-btn {
    display: inline-block;
    padding: 14px 28px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    letter-spacing: 0.3px;
}

.hero-btn.primary {
    background: #fff;
    color: #4B0082;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.hero-btn.primary:hover {
    background: #f5f5f5;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.hero-btn.secondary {
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
    backdrop-filter: blur(5px);
}

.hero-btn.secondary:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-3px);
}

.hero-features {
    display: flex;
    gap: 30px;
}

.feature {
    display: flex;
    align-items: center;
    font-size: 15px;
    font-weight: 500;
}

.feature-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-right: 8px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

.feature-icon.speed {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z'/%3E%3C/svg%3E");
}

.feature-icon.security {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z'/%3E%3C/svg%3E");
}

.feature-icon.support {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 1c-4.97 0-9 4.03-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2c0-3.87 3.13-7 7-7s7 3.13 7 7v2h-4v8h3c1.66 0 3-1.34 3-3v-7c0-4.97-4.03-9-9-9z'/%3E%3C/svg%3E");
}

.hero-shape {
    position: absolute;
    bottom: -100px;
    right: -100px;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 50%;
    z-index: 1;
}

@media (max-width: 768px) {
    .dedicated-hero {
        padding: 80px 0 100px;
    }
    
    .hero-text h1 {
        font-size: 36px;
    }
    
    .hero-text p {
        font-size: 16px;
    }
    
    .hero-actions {
        flex-direction: column;
        gap: 10px;
    }
    
    .hero-btn {
        width: 100%;
        text-align: center;
    }
    
    .hero-features {
        flex-direction: column;
        gap: 15px;
    }
}
</style>