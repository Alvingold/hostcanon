 <style>
    .dedicated-hero {
    width: 100%;
    position: relative;
    background: linear-gradient(135deg, rgba(75, 0, 130, 1) 0%, rgba(147, 44, 139, 1) 100%);
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 80px 0;
    overflow: hidden;
}

.dedicated-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    position: relative;
    padding: 0 20px;
}

.hero-content {
    width: 50%;
    z-index: 2;
}

.hero-shape {
    width: 50%;
    position: relative;
    display: flex;
    justify-content: flex-end;
    z-index: 1;
}

.hero-shape img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
}

@media (max-width: 1024px) {
    .dedicated-container {
        flex-direction: column;
        text-align: center;
    }

    .hero-content, .hero-shape {
        width: 100%;
    }

    .hero-content {
        margin-bottom: 40px;
    }

    .hero-shape {
        justify-content: center;
    }

    .hero-actions {
        justify-content: center;
    }

    .hero-features {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .dedicated-hero {
        padding: 50px 0;
    }
    
    .hero-text h1 {
        font-size: 2.5rem;
    }
    
    .hero-text p {
        font-size: 1rem;
    }
    
    .hero-btn {
        width: 100%;
        text-align: center;
        padding: 12px 24px;
        font-size: 0.9rem;
    }
    
    .hero-features {
        flex-direction: column;
        gap: 15px;
        align-items: center;
    }

    .feature {
        margin-bottom: 15px;
    }
}

@media (max-width: 480px) {
    .hero-text h1 {
        font-size: 2rem;
}

    .hero-text p {
        font-size: 0.9rem;
    }
}
 </style>
 <!-- HERO SECTION -->
 <section class="dedicated-hero">
    <div class="dedicated-container">
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
                    <div class="featuredd"><i class="feature-icon speed"></i>99.9% Uptime</div>
                    <div class="featuredd"><i class="feature-icon security"></i>DDoS Protection</div>
                    <div class="featuredd"><i class="feature-icon support"></i>24/7 Support</div>
                </div>
            </div>
        </div>
        <div class="hero-shape"><img src="assets/media/server-room.webp" alt="Dedicated hosting image" width="100%"></div>
    </div>
    
</section>