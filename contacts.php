<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Afriportal Network Ltd</title>

    <?php include 'assets/includes/optimize-loading.php'; ?>

    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="contact-page loading">
    <?php
    include 'assets/includes/preloader.php';
    include 'assets/includes/nav-bar.php';
    ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-primary-soft mb-3">Contact Us</span>
                    <h1 class="display-4 fw-bold text-white mb-4">Let's Connect</h1>
                    <p class="lead text-white mb-4">Have questions about our programs? We're here to help you take the next step in your tech journey.</p>
                </div>
            </div>
        </div>
        <div class="hero-shape"></div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container" style="margin-top: -100px;">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="contact-form bg-white shadow-sm">
                        <h2 class="h3 fw-bold mb-4">Request Support</h2>
                        <form id="contactForm" action="" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder=" " required>
                                        <label for="name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" style="height: 150px" placeholder="Describe your issue" required></textarea>
                                        <label for="message">Issue Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        Submit Support Request
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-card">
                        <h2 class="h3 fw-bold mb-4">Get in Touch</h2>
                        
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="content">
                                <h5>Our Location</h5>
                                <p>142 Isoko Road, By NNPC Roundabout,Ughelli, Delta State</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="content">
                                <h5>Call Us</h5>
                                <p><a href="tel:+2347018031709">(+234) 701-803-1709</a></p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h5>Email Us</h5>
                                <p><a href="mailto:support@afriportalnetworkltd.com">support@afriportalnetworkltd.com</a></p>
                            </div>
                        </div>

                        <div class="social-links mt-4">
                            <a href="https://www.facebook.com/afriportalnetwork" target="_blank" class="facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="twitter">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="#" class="instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Section -->
    <section class="help-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-4 mx-auto">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h3 class="h4 mb-3">Learn FAQ</h3>
                            <p class="text-muted mb-4">Check if there is an answer in the base of typical questions.</p>
                            <a href="knowledge-base/faq.php" class="btn btn-outline-primary">View FAQs</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-4 mx-auto">
                                <i class="bi bi-book"></i>
                            </div>
                            <h3 class="h4 mb-3">Knowledge Base</h3>
                            <p class="text-muted mb-4">Find the answer to commonly asked questions and useful web hosting how-to articles.</p>
                            <a href="knowledge-base/index.php" class="btn btn-outline-primary">Browse Articles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-4 mx-auto">
                                <i class="bi bi-ticket-detailed"></i>
                            </div>
                            <h3 class="h4 mb-3">Send Ticket</h3>
                            <p class="text-muted mb-4">You have extra questions? Day or night, rain or shine, anytime 24/7/365 our team is here for you!</p>
                            <a href="#contactForm" class="btn btn-outline-primary">Create Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How do I get started with server support?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Simply fill out our support request form above with your details and requirements. Our team will contact you promptly to begin assistance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What are your support hours?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our technical support team is available from 09:00 to 18:00 local time. For after-hours support, please submit a ticket and we'll respond as soon as possible.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What's included in server support?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our server support includes system monitoring, security updates, performance optimization, backup management, and technical troubleshooting.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Toast Notification -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-check-circle me-2"></i>
                    Thank you for your message. We will get back to you soon!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('assets/includes/footer.php'); ?>
    <!-- Footer -->
     
    <!-- Scroll to Top Button -->
    <?php include 'assets/includes/scroll-up.php'; ?>

    <!-- Contact Buttons -->
    <?php include 'assets/includes/contact-btn.php'; ?>
     
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('load', function() {
                setTimeout(function() {
                    AOS.init({
                        duration: 800,
                        once: true
                    });
                }, 600);
            });
        });
        
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toast = new bootstrap.Toast(document.getElementById('successToast'));
            toast.show();
            this.reset();
        });
    </script>
</body>
</html>