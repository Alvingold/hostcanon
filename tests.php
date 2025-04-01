<!-- HERO SECTION -->
<section class="dedicated-hero">
    <div class="dedicated-container">
        <!-- Text Content -->
        <div class="hero-content">
            <span class="hero-badge">Enterprise-Grade Solution</span>
            <h1>Dedicated Hosting for <span class="highlight">Ultimate Performance</span></h1>
            <p>Unmatched speed, security, and control for your mission-critical applications.</p>
            
            <!-- Key Stats in Cards -->
            <div class="hero-stats">
                <div class="stat-card">
                    <span class="stat-number">99.9%</span>
                    <span class="stat-label">Uptime Guarantee</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Expert Support</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Hardware Control</span>
                </div>
            </div>
            
            <div class="hero-actions">
                <a href="#" class="hero-btn primary">Deploy Your Server</a>
                <a href="#" class="hero-btn secondary">Compare Plans</a>
            </div>
        </div>
        
        <!-- Server Image -->
        <div class="hero-image">
            <img src="assets/media/server-room.webp" alt="Enterprise-grade server infrastructure">
        </div>
    </div>
</section>

<style>
/* HERO SECTION */
.dedicated-hero {
    width: 100%;
    background: linear-gradient(135deg, rgba(75, 0, 130, 1) 0%, rgba(147, 44, 139, 1) 100%);
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
    padding: 0 30px;
    gap: 60px;
}

.hero-content {
    width: 50%;
    max-width: 580px;
}

h1 {
    font-size: 3rem;
    margin: 16px 0;
    line-height: 1.2;
    font-weight: 800;
}

h1 .highlight {
    background: linear-gradient(90deg, #fff, #f0c5ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

p {
    font-size: 1.1rem;
    line-height: 1.5;
    margin-bottom: 32px;
    opacity: 0.95;
}

.hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.15);
    padding: 8px 16px;
    border-radius: 30px;
    font-size: 0.9rem;
    font-weight: 600;
    backdrop-filter: blur(5px);
}

/* Stats Section */
.hero-stats {
    display: flex;
    gap: 16px;
    margin-bottom: 32px;
}

.stat-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
    border-radius: 12px;
    padding: 16px;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.15);
}

.stat-number {
    font-size: 1.8rem;
    font-weight: 700;
    background: linear-gradient(90deg, #fff, #f0c5ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.stat-label {
    font-size: 0.85rem;
    opacity: 0.9;
    margin-top: 4px;
}

.hero-actions {
    display: flex;
    gap: 16px;
}

.hero-btn {
    padding: 14px 28px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    text-align: center;
}

.hero-btn.primary {
    background: #fff;
    color: rgba(75, 0, 130, 1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.hero-btn.secondary {
    border: 1px solid rgba(255, 255, 255, 0.6);
    color: #fff;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(5px);
}

.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
}

.hero-image {
    width: 50%;
}

.hero-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 16px;
    box-shadow: 0 16px 32px rgba(0, 0, 0, 0.3);
}

@media (max-width: 992px) {
    .dedicated-container {
        flex-direction: column;
        padding: 0 24px;
        gap: 40px;
    }

    .hero-content, .hero-image {
        width: 100%;
        max-width: 600px;
    }
    
    h1 {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .dedicated-hero {
        padding: 60px 0;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 12px;
    }
    
    .stat-card {
        width: 100%;
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
        padding: 12px 16px;
    }
    
    .stat-card:hover {
        transform: none;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    .dedicated-hero {
        padding: 40px 0;
    }
    
    h1 {
        font-size: 2rem;
    }
    
    p {
        font-size: 1rem;
    }

    .hero-actions {
        flex-direction: column;
    }

    .hero-btn {
        width: 100%;
    }
    
    .hero-image img {
        border-radius: 12px;
    }
}
</style>