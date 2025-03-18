<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
/* HostCanon Footer Styles - For Include Folder */
.footer {
    background-color: #2D0459;
    color: #ffffff;
    padding: 3rem 1rem;
    width: 100%;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    /* gap: 2.5rem; */
    justify-content: space-between;
    align-items: flex-start;
}

.footer-logo {
    display: flex;
    align-items: center;
    margin-bottom: 1.6rem;
}

.footer-logo img {
    height: 40px;
    width: auto;
    margin-right: 12px;
}

.footer-logo h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.footer-column {
    width: 100%;
}

.footer-column p {
    line-height: 1.7;
    margin-bottom: 1.5rem;
    color: #e0e0e0;
    font-size: 0.95rem;
}
#footer-hosting{
    margin-left: 2rem;
}
.footer-heading {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1.2rem;
    padding-bottom: 0.5rem;
    color: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    position: relative;
}

.footer-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: #7CB9E8;
}

.footer-heading .dropdown-icon {
    display: none;
}

.footer-links {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.3rem;
}

.footer-links a {
    color: #e0e0e0;
    text-decoration: none;
    transition: all 0.3s ease;
    display: block;
    padding: 3px 0;
    font-size: 0.95rem;
}

.footer-links a:hover {
    color: #7CB9E8;
    text-decoration: underline;
    transform: translateX(5px);
}

.social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.social-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #3D1A68;
    color: #ffffff;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    background-color: #7CB9E8;
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.footer-bottom {
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 1px solid #3D1A68;
    text-align: center;
    color: #e0e0e0;
    font-size: 0.9rem;
}

.footer-bottom a {
    color: #e0e0e0;
    text-decoration: none;
    transition: color 0.3s ease;
    padding: 0 5px;
}

.footer-bottom a:hover {
    color: #7CB9E8;
    text-decoration: underline;
}

.contact-info {
    margin-top: 1.2rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 0.8rem;
    color: #e0e0e0;
}

.contact-item i {
    margin-right: 0.8rem;
    color: #7CB9E8;
    font-size: 1.1rem;
    margin-top: 0.2rem;
}

.contact-item span {
    line-height: 1.5;
}

/* Extra Large Screens */
@media (min-width: 1400px) {
    .footer-container {
        max-width: 1320px;
    }
    
    .footer-content {
        gap: 2rem;
    }
}

/* Large Screens */
@media (max-width: 1199px) and (min-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(5, 1fr);
    }
    
    .footer-column:first-child {
        grid-column: span 2;
    }
}

/* Medium Screens */
@media (max-width: 991px) and (min-width: 768px) {
    .footer-content {
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }
    
    .footer-column:first-child {
        grid-column: span 3;
        margin-bottom: 1.5rem;
    }
    
    .contact-info {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .contact-item {
        flex: 1 0 45%;
    }
}

/* Small Screens */
@media (max-width: 767px) and (min-width: 576px) {
    .footer {
        padding: 2.5rem 1rem;
    }
    
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    
    .footer-column:first-child {
        grid-column: span 2;
        margin-bottom: 1.5rem;
    }
    
    .social-icons {
        justify-content: flex-start;
    }
}

/* Extra Small Screens */
@media (max-width: 575px) {
    .footer {
        padding: 2rem 1rem;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .footer-column {
        width: 100%;
        margin-bottom: 0.5rem;
    }
    
    .footer-column:first-child {
        margin-bottom: 1.5rem;
    }
    
    .footer-heading {
        padding: 12px 0;
        margin-bottom: 0;
        border-bottom: 1px solid #3D1A68;
    }
    
    .footer-heading::after {
        display: none;
    }

    .footer-heading .dropdown-icon {
        display: block;
        font-size: 1rem;
        transition: transform 0.3s ease;
    }

    .footer-links {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out, padding 0.3s ease;
        padding: 0 0 0 1rem;
        margin: 0;
    }
    
    .footer-links li {
        margin-bottom: 0.7rem;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
        transition-delay: 0.1s;
    }

    .footer-column.active .footer-links {
        max-height: 300px;
        padding: 0.5rem 0 1rem 1rem;
        margin-top: 0.5rem;
    }

    .footer-column.active .footer-links li {
        opacity: 1;
        transform: translateY(0);
    }

    .footer-column.active .dropdown-icon {
        transform: rotate(180deg);
    }

    /* Generate transition delays for list items */
    .footer-links li:nth-child(1) { transition-delay: 0.1s; }
    .footer-links li:nth-child(2) { transition-delay: 0.15s; }
    .footer-links li:nth-child(3) { transition-delay: 0.2s; }
    .footer-links li:nth-child(4) { transition-delay: 0.25s; }
    .footer-links li:nth-child(5) { transition-delay: 0.3s; }
    .footer-links li:nth-child(6) { transition-delay: 0.35s; }

    /* Keep company info always visible */
    .footer-column:first-child .footer-links {
        display: block;
        max-height: none;
        padding: 0;
        margin: 0;
        overflow: visible;
    }
    
    .footer-column:first-child .footer-links li {
        opacity: 1;
        transform: translateY(0);
    }

    .footer-column:first-child .footer-heading .dropdown-icon {
        display: none;
    }
    
    .footer-column:first-child .footer-heading {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .footer-column:first-child .footer-heading::after {
        display: block;
    }
    
    .footer-bottom {
        margin-top: 2rem;
        padding-top: 1.5rem;
        font-size: 0.8rem;
        line-height: 1.6;
    }
    
    .footer-bottom p {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
}

/* Portrait Phones */
@media (max-width: 360px) {
    .footer-logo {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }
    
    .footer-logo img {
        margin-bottom: 10px;
    }
    
    .social-icons {
        justify-content: space-between;
    }
}
</style>
<!-- HostCanon Footer Component - For Include Folder -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-column">
                <div class="footer-logo">
                    <img src="/api/placeholder/40/40" alt="HostCanon Logo" />
                    <!-- <h3>HostCanon</h3> -->
                </div>
                <p>Reliable web hosting solutions for businesses of all sizes. Fast, secure, and backed by 24/7 expert support.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        <span>+1 (800) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        <span>support@hostcanon.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>1234 Tech Drive, Server City, TC 98765</span>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="footer-column" id="footer-hosting">
                <h4 class="footer-heading">
                    Hosting Services
                    <span class="dropdown-icon"><i class="bi bi-chevron-down"></i></span>
                </h4>
                <ul class="footer-links">
                    <li><a href="#">Shared Hosting</a></li>
                    <li><a href="#">VPS Hosting</a></li>
                    <li><a href="#">Dedicated Servers</a></li>
                    <li><a href="#">WordPress Hosting</a></li>
                    <li><a href="reseller-hosting.php">Reseller Hosting</a></li>
                    <li><a href="email-hosting.php">Email Hosting</a></li>
                    <li><a href="website-checker.php">Website Checker</a></li>
                    <li><a href="ecommerce-hosting.php">Ecommerce Hosting</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4 class="footer-heading">
                    Domain Services
                    <span class="dropdown-icon"><i class="bi bi-chevron-down"></i></span>
                </h4>
                <ul class="footer-links">
                    <li><a href="#">Domain Registration</a></li>
                    <li><a href="#">Domain Transfer</a></li>
                    <li><a href="#">Domain Backorder</a></li>
                    <li><a href="website-checker.php">Website Checker</a></li>
                    <li><a href="#">SSL Certificates</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4 class="footer-heading">
                    Company
                    <span class="dropdown-icon"><i class="bi bi-chevron-down"></i></span>
                </h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="contacts.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4 class="footer-heading">
                    Support
                    <span class="dropdown-icon"><i class="bi bi-chevron-down"></i></span>
                </h4>
                <ul class="footer-links">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="knowledge-base/index.php">Knowledge Base</a></li>
                    <li><a href="contacts.php">Contact Us</a></li>
                    <li><a href="#">Submit a Ticket</a></li>
                    <li><a href="#">Live Chat</a></li>
                    <li><a href="server-support.php">Server Support</a></li>
                    <li><a href="knowledge-base/faq.php">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 HostCanon. All rights reserved. | <a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a> | <a href="#">Acceptable Use Policy</a></p>
        </div>
    </div>
</footer>

<script>
    // HostCanon Footer JavaScript - For Include Folder
document.addEventListener('DOMContentLoaded', function() {
  const footerHeadings = document.querySelectorAll('.footer-heading');
  
  // Mobile dropdown functionality
  footerHeadings.forEach(heading => {
    heading.addEventListener('click', function() {
      // Skip the first column (company info)
      if (this.parentElement.classList.contains('footer-column') && 
          !this.parentElement.isEqualNode(document.querySelector('.footer-column:first-child'))) {
        
        // Close all other open dropdowns
        footerHeadings.forEach(otherHeading => {
          if (otherHeading !== this && 
              otherHeading.parentElement.classList.contains('active') &&
              !otherHeading.parentElement.isEqualNode(document.querySelector('.footer-column:first-child'))) {
            otherHeading.parentElement.classList.remove('active');
          }
        });
        
        // Toggle current dropdown
        this.parentElement.classList.toggle('active');
      }
    });
  });
  
  // Handle window resize to reset dropdowns when switching from mobile to desktop
  let resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      if (window.innerWidth >= 576) {
        document.querySelectorAll('.footer-column.active').forEach(column => {
          if (!column.isEqualNode(document.querySelector('.footer-column:first-child'))) {
            column.classList.remove('active');
          }
        });
      }
    }, 250); // 250ms delay to // 250ms delay to avoid excessive function calls during resize
  });
  
  // Initialize state based on current window size
  if (window.innerWidth >= 576) {
    document.querySelectorAll('.footer-column.active').forEach(column => {
      if (!column.isEqualNode(document.querySelector('.footer-column:first-child'))) {
        column.classList.remove('active');
      }
    });
  }
  
  // Close dropdowns when clicking outside
  document.addEventListener('click', function(event) {
    if (window.innerWidth < 576) {
      const isClickInsideFooter = event.target.closest('.footer-column');
      
      if (!isClickInsideFooter) {
        document.querySelectorAll('.footer-column.active').forEach(column => {
          if (!column.isEqualNode(document.querySelector('.footer-column:first-child'))) {
            column.classList.remove('active');
          }
        });
      }
    }
  });
});
</script>