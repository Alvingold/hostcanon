<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Engineered Server Solutions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <style>
    /* Base styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    
    /* feat section */
    .dedicated-feat {
      background-color: #f8f9fa;
      padding: 70px 20px;
      position: relative;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    
    /* Header styles - MODIFIED: smaller font, black color, centered */
    .feat-header {
      text-align: center;
      margin-bottom: 60px;
      position: relative;
    }
    
    .feat-header::after {
      content: "";
      display: block;
      width: 70px;
      height: 3px;
      background: #000;
      margin: 20px auto 0;
      border-radius: 2px;
    }
    
    .feat-header h2 {
      font-size: 2.2rem; /* Reduced from 2.6rem */
      font-weight: 700;
      margin-bottom: 20px;
      color: #000; /* Changed to black */
    }
    
    .feat-header p {
      font-size: 1.1rem; /* Reduced from 1.2rem */
      color: #333; /* Darkened from #6c757d */
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.7;
    }
    
    /* Grid layout */
    .feat-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 40px 30px;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    /* Feature styles */
    .feature-card {
      display: flex;
      align-items: flex-start;
      padding: 0 0 20px 0;
      border-bottom: 2px solid #eef2f7;
      transition: all 0.3s ease;
    }
    
    .feature-card:hover {
      border-bottom: 2px solid #4B0082;
      transform: translateY(-3px);
    }
    
    /* Icon styling */
    .feature-icon {
      margin-right: 25px;
      flex-shrink: 0;
      font-size: 2.2rem;
      color: #4B0082;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
    }
    
    .feature-card:hover .feature-icon {
      transform: scale(1.1);
    }
    
    .feature-content {
      flex: 1;
    }
    
    .feature-title {
      font-size: 1.2rem; /* Reduced from 1.35rem */
      font-weight: 600;
      margin-bottom: 12px;
      color: #000; /* Changed to black */
    }
    
    .feature-description {
      font-size: 1rem; /* Reduced from 1.05rem */
      color: #333; /* Darkened from #6c757d */
      margin-bottom: 15px;
      line-height: 1.6;
    }
    
    .feature-badge {
      display: inline-block;
      padding: 4px 10px;
      background-color: rgba(0, 123, 255, 0.1);
      border-radius: 4px;
      font-size: 0.85rem;
      font-weight: 600;
      color: #4B0082;
      letter-spacing: 0.5px;
      transition: background-color 0.3s ease;
    }
    
    .feature-card:hover .feature-badge {
      background-color: rgba(0, 123, 255, 0.2);
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
      .feat-grid {
        gap: 30px 25px;
      }
      
      .feature-icon {
        font-size: 2rem;
        margin-right: 20px;
      }
      
      .feature-title {
        font-size: 1.15rem; /* Reduced from 1.3rem */
      }
    }
    
    @media (max-width: 768px) {
      .dedicated-feat {
        padding: 50px 20px;
      }
      
      .feat-header h2 {
        font-size: 1.9rem; /* Reduced from 2.2rem */
      }
      
      .feat-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }
    
    @media (max-width: 480px) {
      .feat-header {
        margin-bottom: 40px;
      }
      
      .feat-header h2 {
        font-size: 1.7rem; /* Further reduced for small screens */
      }
      
      .feature-card {
        padding-bottom: 20px;
      }
      
      .feature-icon {
        margin-right: 15px;
      }
      
      .feature-title {
        font-size: 1.1rem; /* Further reduced for small screens */
      }
    }
  </style>
</head>
<body>
  <!-- Enhanced feat Section -->
  <section class="dedicated-feat">
    <div class="container">
      <div class="feat-header">
        <h2>Engineered Server Solutions</h2>
        <p>
          Discover a new paradigm of digital infrastructure. Our dedicated servers are meticulously crafted to deliver unparalleled performance, security, and scalability for businesses that demand excellence.
        </p>
      </div>

      <div class="feat-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="bi bi-lightning-charge-fill"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">Hyper-Performance Storage</h3>
            <p class="feature-description">
              NVMe technology delivering blazing-fast read/write speeds and microsecond latency. Ideal for data-intensive applications, real-time analytics, and high-performance computing environments.
            </p>
            <span class="feature-badge">Ultra Speed</span>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">Adaptive Security Framework</h3>
            <p class="feature-description">
              Multi-layered security architecture with real-time threat detection, automated risk mitigation, and comprehensive protection against evolving cybersecurity challenges.
            </p>
            <span class="feature-badge">Secure</span>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="bi bi-speedometer2"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">Intelligent Caching</h3>
            <p class="feature-description">
              Advanced caching ecosystem leveraging Varnish, Memcached, and Redis. Dynamically optimizes data retrieval and application performance with intelligent resource allocation.
            </p>
            <span class="feature-badge">Optimized</span>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="bi bi-sliders"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">Modular Infrastructure</h3>
            <p class="feature-description">
              Fully customizable server configurations with granular control over CPU, RAM, and storage. Seamless scalability to match your evolving business requirements.
            </p>
            <span class="feature-badge">Flexible</span>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="bi bi-check2-circle"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">Reliability Assurance</h3>
            <p class="feature-description">
              Redundant infrastructure with advanced failover mechanisms guaranteeing 99.9% uptime. Continuous monitoring and load balancing for uninterrupted service.
            </p>
            <span class="feature-badge">Reliable</span>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="bi bi-headset"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">Expert Support</h3>
            <p class="feature-description">
              24/7 dedicated support from certified technical experts. Immediate response, proactive system management, and comprehensive problem resolution.
            </p>
            <span class="feature-badge">Always Available</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>