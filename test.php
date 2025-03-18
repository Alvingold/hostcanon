
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Hosting Features</title>
    <style>
        :root {
            --primary: #4B0082; /* Indigo */
            --secondary: #932C8B; /* Purple */
            --accent: #B23A8F; /* Pink-Purple */
            --dark: #1e293b;
            --light: #f8fafc;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
        }

        .section-header::after {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .refeature-card::before {
            background: linear-gradient(135deg, rgba(75, 0, 130, 0.9) 0%, rgba(147, 44, 139, 0.9) 100%);
        }

        .feature-icon::before {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        .feature-badge {
            background-color: rgba(75, 0, 130, 0.1);
            color: var(--primary);
        }

        .feature-arrow {
            background-color: rgba(75, 0, 130, 0.1);
        }

        .cloud-1 {
            background-color: var(--primary);
        }

        .cloud-2 {
            background-color: var(--secondary);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        .features-section {
            padding: 100px 0;
            overflow: hidden;
            position: relative;
        }

        .features-section::before {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.1) 0%, rgba(37, 99, 235, 0) 70%);
            top: -150px;
            left: -150px;
            z-index: -1;
        }

        .features-section::after {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.1) 0%, rgba(6, 182, 212, 0) 70%);
            bottom: -200px;
            right: -200px;
            z-index: -1;
        }

        .clo-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
        }

        .section-header::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .section-header h2 {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-header h2 span {
            color: var(--primary);
        }

        .section-header p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            color: #64748b;
        }

        .features-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .feature-column {
            flex: 1;
            min-width: 300px;
            max-width: 380px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .feature-column:nth-child(2) {
            transform: translateY(50px);
        }

        .refeature-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            position: relative;
            z-index: 1;
            cursor: pointer;
        }

        .refeature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.2);
        }

        .refeature-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            opacity: 0;
            z-index: -1;
            transition: opacity 0.5s ease;
        }

        .refeature-card:hover::before {
            opacity: 0.05;
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
            transition: all 0.5s ease;
        }

        .feature-icon::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            opacity: 0.1;
            z-index: -1;
        }

        .refeature-card:hover .feature-icon {
            transform: scale(1.1);
        }

        .feature-icon svg {
            width: 40px;
            height: 40px;
            color: var(--primary);
            transition: all 0.5s ease;
        }

        .refeature-card:hover .feature-icon svg {
            transform: rotateY(180deg);
        }

        .feature-content {
            padding: 30px;
        }

        .feature-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .refeature-card:hover .feature-title {
            color: var(--primary);
        }

        .feature-description {
            color: #64748b;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .feature-badge {
            display: inline-block;
            padding: 5px 12px;
            background-color: rgba(37, 99, 235, 0.1);
            color: var(--primary);
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature-list {
            list-style: none;
        }

        .feature-list li {
            padding-left: 30px;
            position: relative;
            margin-bottom: 10px;
        }

        .feature-list li::before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            left: 0;
            top: 2px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%232563eb' viewBox='0 0 24 24'%3E%3Cpath d='M10.2426 16.3137L6 12.071L7.41421 10.6568L10.2426 13.4853L16.3137 7.41421L17.7279 8.82842L10.2426 16.3137Z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3Z'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
        }

        .feature-cta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .feature-stat {
            display: flex;
            align-items: baseline;
        }

        .feature-stat-number {
            font-size: 26px;
            font-weight: 800;
            color: var(--primary);
        }

        .feature-stat-label {
            font-size: 14px;
            color: #64748b;
            margin-left: 5px;
        }

        .feature-arrow {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(37, 99, 235, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .refeature-card:hover .feature-arrow {
            background-color: var(--primary);
            transform: translateX(5px);
        }

        .feature-arrow svg {
            width: 20px;
            height: 20px;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .refeature-card:hover .feature-arrow svg {
            color: white;
        }

        .feature-cloud {
            position: absolute;
            width: 300px;
            height: 300px;
            opacity: 0.05;
            z-index: -1;
            filter: blur(40px);
        }

        .cloud-1 {
            background-color: var(--primary);
            top: 20%;
            left: 5%;
        }

        .cloud-2 {
            background-color: var(--secondary);
            bottom: 10%;
            right: 5%;
        }

        @media (max-width: 992px) {
            .feature-column:nth-child(2) {
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .section-header h2 {
                font-size: 36px;
            }

            .feature-column {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <section class="features-section">
        <div class="clo-container">
            <div class="section-header">
                <h2>Cloud <span>Hosting</span> Features</h2>
                <p>Elevate your digital presence with our enterprise-grade infrastructure and cutting-edge technologies</p>
            </div>

            <div class="features-container">
                <div class="feature-column">
                    <div class="refeature-card">
                        <div class="feature-content">
                            <div class="feature-badge">RELIABILITY</div>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <h3 class="feature-title">99.99% Uptime Guarantee</h3>
                            <p class="feature-description">Our enterprise-grade infrastructure ensures your website remains operational at all times, even during peak traffic periods.</p>
                            <ul class="feature-list">
                                <li>Multi-zone redundancy</li>
                                <li>Proactive monitoring</li>
                                <li>Instant failover systems</li>
                            </ul>
                            <div class="feature-cta">
                                <div class="feature-stat">
                                    <span class="feature-stat-number">99.99</span>
                                    <span class="feature-stat-label">% uptime</span>
                                </div>
                                <div class="feature-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="refeature-card">
                        <div class="feature-content">
                            <div class="feature-badge">SECURITY</div>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                            <h3 class="feature-title">Advanced Security Suite</h3>
                            <p class="feature-description">Protect your website with enterprise-grade security features designed to block threats before they reach your site.</p>
                            <ul class="feature-list">
                                <li>DDoS protection</li>
                                <li>Free SSL certificates</li>
                                <li>Web application firewall</li>
                            </ul>
                            <div class="feature-cta">
                                <div class="feature-stat">
                                    <span class="feature-stat-number">24/7</span>
                                    <span class="feature-stat-label">monitoring</span>
                                </div>
                                <div class="feature-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-column">
                    <div class="refeature-card">
                        <div class="feature-content">
                            <div class="feature-badge">PERFORMANCE</div>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="16 12 12 8 8 12"></polyline>
                                    <line x1="12" y1="16" x2="12" y2="8"></line>
                                </svg>
                            </div>
                            <h3 class="feature-title">Lightning Fast Speed</h3>
                            <p class="feature-description">Experience blazing-fast load times with our optimized hosting infrastructure and global CDN network.</p>
                            <ul class="feature-list">
                                <li>SSD storage</li>
                                <li>Global CDN</li>
                                <li>HTTP/3 support</li>
                            </ul>
                            <div class="feature-cta">
                                <div class="feature-stat">
                                    <span class="feature-stat-number">0.5</span>
                                    <span class="feature-stat-label">s load time</span>
                                </div>
                                <div class="feature-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-column">
                    <div class="refeature-card">
                        <div class="feature-content">
                            <div class="feature-badge">SCALABILITY</div>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                    <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                    <line x1="6" y1="18" x2="6.01" y2="18"></line>
                                </svg>
                            </div>
                            <h3 class="feature-title">Elastic Scaling</h3>
                            <p class="feature-description">Scale your resources instantly to meet any traffic demand with our auto-scaling infrastructure.</p>
                            <ul class="feature-list">
                                <li>Auto-scaling</li>
                                <li>Load balancing</li>
                                <li>Unlimited bandwidth</li>
                            </ul>
                            <div class="feature-cta">
                            <div class="feature-stat">
                            <span class="feature-stat-number">∞</span>
                            <span class="feature-stat-label">scalability</span>
                            </div>
                            <div class="feature-arrow">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feature-cloud cloud-1"></div>
                                        <div class="feature-cloud cloud-2"></div>                                                                                                                                                                                                                                    
        </div>
    </section>
</body>
</html>