 <style>
.dedicated-hero {
    width: 100%;
    position: relative;
    background: linear-gradient(135deg, rgba(75, 0, 130, 1) 0%, rgba(147, 44, 139, 1) 100%);
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0;
    overflow: hidden;
    box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.3);
}

.dedicated-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    position: relative;
    padding: 0 40px;
    gap: 40px;
}

.hero-content {
    width: 50%;
    z-index: 2;
}

.hero-text h1 {
    font-size: 3.2rem;
    margin-bottom: 1.5rem;
    line-height: 1.2;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.hero-text p {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.1);
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    margin-bottom: 1rem;
    backdrop-filter: blur(5px);
}

.hero-actions {
    display: flex;
    gap: 15px;
    margin-bottom: 2rem;
}

.hero-btn {
    padding: 12px 28px;
    border-radius: 6px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
}

.hero-btn.primary {
    background: #fff;
    color: rgba(75, 0, 130, 1);
}

.hero-btn.secondary {
    border: 2px solid #fff;
    color: #fff;
}

.hero-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.hero-features {
    display: flex;
    gap: 25px;
}

.featuredd {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.95rem;
    opacity: 0.9;
}

.hero-shape {
    width: 50%;
    position: relative;
}

.hero-shape img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.2));
    transition: transform 0.3s ease;
}

.hero-shape img:hover {
    transform: scale(1.02);
}

@media (max-width: 1024px) {
    .dedicated-container {
        flex-direction: column;
        text-align: center;
        padding: 0 20px;
    }

    .hero-content, .hero-shape {
        width: 100%;
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
        padding: 60px 0;
    }
    
    .hero-text h1 {
        font-size: 2.5rem;
    }
    
    .hero-features {
        flex-wrap: wrap;
    }
}

@media (max-width: 480px) {
    .hero-text h1 {
        font-size: 2rem;
    }

    .hero-actions {
        flex-direction: column;
    }

    .hero-btn {
        width: 100%;
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