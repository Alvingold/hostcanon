<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/dedicated-hosting.css">
    <title>HostCanon - Dedicated Hosting</title>
</head>
<body>
<?php include 'assets/includes/preloader.php';
    include 'assets/includes/nav-bar.php'; ?>


    <!-- HERO SECTION -->
 <section class="dedicated-hero">
    <div class="dedicated-container">
        <div class="hero-content">
            <!-- Text Content -->
            <div class="hero-text">
                <h1>Dedicated Hosting for Ultimate Performance</h1>
                <p>Unmatched speed, security, and control for your high-traffic websites. Power up your business with HostCanon's dedicated hosting solutions.</p>
                <div class="hero-actions">
                    <a href="#" class="hero-btn secondary">View Plans</a>
                </div>
            </div>
        </div>
        <div class="hero-shape"><img src="assets/media/server-room.webp" alt="Dedicated hosting image" width="100%"></div>
    </div>
    
</section>
<?php include "assets/includes/server-plan.php" ?>


<!-- Dedicated Plans -->
<section class="dedicated-server-features">
    <div class="features-container">
        <div class="section-header">
            <h2>Dedicated Server Features</h2>
            <p>Unlock the full potential of your hosting with our comprehensive feature set</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-category">
                <div class="category-icon">
                    <i class="bi bi-grid-fill"></i>
                </div>
                <h3>Core Infrastructure</h3>
                <ul>
                    <li>24/7/365 Support</li>
                    <li>Team Management</li>
                    <li>SSH and SFTP Access</li>
                    <li>IPMI and KVM access</li>
                </ul>
            </div>

            <div class="feature-category">
                <div class="category-icon">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <h3>Security Measures</h3>
                <ul>
                    <li>BitNinja Security</li>
                    <li>Dedicated Firewalls</li>
                    <li>DDoS Protection</li>
                    <li>Regular Security Patching</li>
                </ul>
            </div>

            <div class="feature-category">
                <div class="category-icon">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <h3>Performance Boosters</h3>
                <ul>
                    <li>Unlimited Bandwidth</li>
                    <li>Optimized With Advanced Caches</li>
                    <li>CDN Add-on</li>
                    <li>HTTP/2 Enabled Servers</li>
                </ul>
            </div>

            <div class="feature-category">
                <div class="category-icon">
                    <i class="bi bi-cloud-download-fill"></i>
                </div>
                <h3>Backup & Management</h3>
                <ul>
                    <li>Free Backups</li>
                    <li>Automated Backups</li>
                    <li>Staging Environment</li>
                    <li>Free Migration</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--Feat Section -->
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




    <!-- Uses SEctioin -->

    <div class="container py-5">
        <section class="uses-uses">
            <h2 class="uses-title">Dedicated Web Hosting Use Cases and Purpose</h2>
            <div class="benefit-list">
                <div class="benefit-item">
                    <i class="bi bi-shield-check list-icon"></i>
                    If you're serious about your business and want to take no risks, then dedicated servers are the way to go. A Dedicated server provides more reliability and stability than shared hosting.
                </div>
                <div class="benefit-item">
                    <i class="bi bi-globe list-icon"></i>
                    Whether you're a startup or a multinational corporation, dedicated servers offer enterprise-level solutions for your organization's essential business software, websites, and applications.
                </div>
                <!-- Continue with other use cases... -->
            </div>
        </section>

        <section class="uses-uses">
            <h2 class="uses-title">The Benefits of HostCanon Dedicated Servers</h2>
            <div class="benefit-list">
                <div class="benefit-item">
                    <i class="bi bi-hdd-rack list-icon"></i>
                    Dedicated server hosting provides a reliable, stable server to host your favorite video streaming platform or a high resources website.
                </div>
                <div class="benefit-item">
                    <i class="bi bi-speedometer2 list-icon"></i>
                    Dedicated servers give you complete control and unlimited bandwidth. You'll also receive faster load times and greater reliability.
                </div>
                <!-- Continue with other benefits... -->
            </div>
        </section>
    </div>


    <!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Dedicated Hosting - Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What is the typical setup time for a dedicated server?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Standard dedicated server configurations are typically deployed within 24-48 hours of confirmed payment. Custom hardware configurations may require 3-5 business days for proper setup and testing. You'll receive server access credentials via email once your server is fully provisioned and ready for use.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                When should I upgrade to a dedicated server from shared or VPS hosting?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Consider upgrading to a dedicated server when your website experiences consistent high traffic, requires specialized software configurations, demands guaranteed resource availability, or needs enhanced security protocols. Dedicated servers are ideal for enterprise applications, e-commerce sites processing sensitive payment information, and businesses with specific compliance requirements that shared infrastructure cannot satisfy.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How does dedicated hosting compare to VPS hosting?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Dedicated hosting provides exclusive access to an entire physical server with all its resources allocated solely to your applications, while VPS hosting creates virtualized environments where multiple users share underlying hardware. Dedicated servers offer superior performance, complete customization freedom, enhanced security isolation, and better reliability for resource-intensive workloads, though at a higher price point than virtualized solutions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What server management options are included with dedicated hosting plans?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Our dedicated hosting plans offer tiered management options to suit different technical expertise levels. Basic plans include essential infrastructure monitoring and hardware maintenance. Premium management packages add proactive security patching, performance optimization, backup configuration, and 24/7 technical incident response. You can select self-managed, semi-managed, or fully-managed service levels based on your internal IT capabilities and specific requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What makes dedicated hosting different from other hosting solutions?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Dedicated hosting provides exclusive use of physical server hardware located in enterprise-grade data centers. This infrastructure model eliminates resource contention issues common with shared hosting solutions. You receive root/administrator access to configure the server environment exactly to your specifications, including operating system selection, custom software installations, security configurations, and resource allocation priorities. This exclusive environment delivers consistent performance, greater security, and complete control over your hosting infrastructure.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Is website migration assistance available for dedicated server customers?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                We provide comprehensive migration support for new dedicated server customers. Our technical team handles the transfer of websites, applications, databases, and email services from your previous hosting provider. This managed transition process includes pre-migration planning, scheduled cutover coordination, and post-migration verification to ensure all components function correctly in the new environment with minimal downtime.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                What exactly is a bare metal server and how is it configured?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                A bare metal server is a single-tenant physical server without virtualization layers or hypervisors. These servers provide direct hardware access with zero resource overhead, making them ideal for performance-critical applications. Our bare metal configurations feature enterprise-grade components including latest-generation Intel or AMD processors, ECC memory, redundant power supplies, and SSD/NVMe storage options. This architecture delivers maximum performance, complete hardware control, and enhanced security for demanding workloads.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                Can dedicated servers support virtualization technologies?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                All our dedicated servers support major virtualization platforms including VMware, Hyper-V, KVM, and Proxmox. Our server processors feature hardware-assisted virtualization extensions, and configurations include sufficient memory and storage to efficiently run multiple virtual machines. This capability allows you to create isolated environments for different applications, maximize resource utilization, and implement advanced testing or development environments while maintaining full control over the physical hardware.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                                What operating system choices are available for dedicated servers?
                            </button>
                        </h2>
                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                We support a comprehensive range of operating systems including multiple Linux distributions (CentOS, Ubuntu, Debian, Rocky Linux, AlmaLinux) and Windows Server editions (2019, 2022). All OS installations include initial security hardening and performance optimization. We can also accommodate custom OS requirements or specific version deployments based on your application compatibility needs. OS licenses for commercial systems are either included in your plan or available as add-on options.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                                What security measures protect dedicated hosting environments?
                            </button>
                        </h2>
                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Our dedicated hosting security framework includes multiple protection layers starting with physical data center security (biometric access, 24/7 monitoring, fire suppression). Network security features enterprise-grade firewalls, DDoS mitigation, and intrusion prevention systems. Server-level protections include hardened OS configurations, automated vulnerability scanning, and optional managed security services. All infrastructure components receive regular security updates, and our Security Operations Center provides continuous monitoring to detect and respond to potential threats.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                                Are hardware upgrades possible after initial dedicated server deployment?
                            </button>
                        </h2>
                        <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                We support flexible hardware scaling throughout your service lifecycle. Memory and storage upgrades can typically be performed on your existing server with minimal downtime. More substantial upgrades involving processor changes or complete hardware refreshes require migration to new equipment, which our technical team coordinates to minimize service interruption. All hardware upgrades are thoroughly tested before returning to production status, and our engineering team provides guidance on optimal configuration options based on your performance requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq12">
                                What reliability guarantees come with dedicated server plans?
                            </button>
                        </h2>
                        <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <br>
                                Our dedicated hosting infrastructure is backed by a comprehensive 99.9% uptime SLA that covers network availability, power systems, and cooling infrastructure. This guarantee is supported by N+1 redundancy across all critical systems, including power distribution units, UPS systems, backup generators, and multiple network carriers. In the rare event of SLA violations, customers receive service credits according to our published compensation schedule. Our NOC team provides 24/7/365 infrastructure monitoring to ensure continuous availability of your mission-critical applications.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Thought of a domain Section -->
 <!-- Domain Thought -->
 <section class="domain-thought">
    <div class="domain-content">
        <h2>Have the ideal Hosting in mind?</h2>
        <p>Well waste no time pick it now.</p>
        <a href="#top" class="back-to-top">Get Started</a>
    </div>
</section>




<!-- Footer -->
<?php include 'assets/includes/footer.php'; ?>
    
    <!-- Scroll to Top Button -->
    <?php include 'assets/includes/scroll-up.php'; ?>
    
    <!-- Contact Buttons -->
    <?php include 'assets/includes/contact-btn.php'; ?>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // FAQ Fuctionality
        document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', () => {
            // Close previously active FAQ
            document.querySelectorAll('.faq-item.active').forEach(activeItem => {
                if (activeItem !== item) activeItem.classList.remove('active');
            });

            // Toggle current FAQ
            item.classList.toggle('active');
        });
    });
    </script>
</body>
</html>