<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afriportal Network Limited | About Us</title>
  <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Service",
      "serviceType": "ICT Training",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Afriportal Network"
      },
      "areaServed": {
        "@type": "State",
        "name": "Delta"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Web Development",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "Front-end design",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "HTML"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "CSS"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Javascript"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Programming",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "PHP"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Python"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Linux Server Administration"
                }
              }
            ]
          }
        ]
      }
    }
  </script>
</head>
<body class="about-page loading">
  <?php
  include 'assets/includes/preloader.php';
  ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/media/afriportal.png" alt="Afriportal Logo" height="40">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="internship.php">Internship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="about-hero-section position-relative overflow-hidden">
        <div class="about-hero-shape"></div>
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-primary-soft mb-3">About Us</span>
                    <h1 class="display-4 fw-bold text-white mb-4">About Afriportal Network</h1>
                    <p class="lead text-white mb-4">Afriportal Network Limited is an Information and Communication technology Company with broad expertise in ICT consultancy.</p>
                    <p class="text-white opacity-75">The company was established in 2014 with the aim of providing Web development services, training in ICT courses like Web Development (Html, Css, Javascript, React and NodeJs). We also offer training in <span class="fw-bold">Data Analysis (Python, Excel, SQL) and MS SQL Server.</span></p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/media/p4.jpg" alt="About Us" class="img-fluid rounded-4 shadow-lg hover-lift">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section py-5 bg-light position-relative">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="video-container rounded-4 overflow-hidden shadow-lg">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/M_2Zj2023Ok" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <div class="mission-content">
                        <span class="section-badge">Our Mission</span>
                        <h2 class="section-title">Empowering Through Technology</h2>
                        <p class="lead mb-4">At our training arm of Afriportal Network, we believe that <em class="fw-bold">ICT is the best education</em>. 
                            That is why we offer in-depth and comprehensive training to our students, giving them the global advantage.
                        </p>
                        <p class="lead mb-4">
                            Our Software development arm provides programming solutions to companies and organisations. <em class="fw-bold">We design and build applications and softwares that provides value and solves problems as expected!</em>
                        </p>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number">200+</div>
                                <div class="stat-label">Students Trained</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">100%</div>
                                <div class="stat-label">Success Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">The principles that guide our commitment to excellence</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <h3>Excellence</h3>
                        <p>We strive for excellence in every aspect of our training and service delivery.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3>Community</h3>
                        <p>Building a strong community of tech professionals and enthusiasts.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-lightning"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>Embracing new technologies and innovative teaching methods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Leadership</span>
                <!-- <h2 class="section-title">Meet Our Team</h2> -->
            </div>
            <div class="team-grid">
                <div class="team-member" data-aos="fade-up">
                    <div class="member-card">
                        <div class="member-image">
                            <img src="assets/media/Micah Atoma.jpeg" alt="Team Member">
                        </div>
                        <div class="member-info">
                            <h3>Micah Atoma</h3>
                            <p>Founder & CEO</p>
                            <div class="social-links">
                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.facebook.com/Atomamicah1" target="_blank"><i class="bi bi-facebook"></i></a>
                                <a href="https://x.com/atomamicah" target="_blank"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://ng.linkedin.com/in/atoma-micah" target="_blank"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="section-badge" data-aos="fade-up">Our Gallery</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Our Learning Environment</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">Take a glimpse into our training sessions</p>
            </div>
            <div class="gallery-slider-container" data-aos="fade-up">
                <div class="swiper gallery-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 1.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 2.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 3.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 4.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 5.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 6.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 7.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 8.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 9.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-slide-inner">
                                <img src="assets/media/gallery/image 10.jpeg" alt="Gallery Image" class="gallery-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-controls">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="Lightbox Image">
    </div>

    <!-- Footer -->
    <?php include 'assets/includes/footer.php'; ?>
    <!-- Footer -->

    <!-- Scroll to top button -->
    <?php include 'assets/includes/scroll-up.php'; ?>

    <!-- Contact Buttons -->
    <?php include 'assets/includes/contact-btn.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
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

        // Gallery lightbox functionality
        const galleryImages = document.querySelectorAll('.gallery-slide-inner img');
        const lightbox = document.querySelector('.lightbox');
        const lightboxImg = lightbox.querySelector('img');
        const lightboxClose = document.querySelector('.lightbox-close');

        galleryImages.forEach(img => {
            img.addEventListener('click', () => {
                lightbox.style.display = 'flex';
                lightboxImg.src = img.src;
                document.body.style.overflow = 'hidden';
            });
        });

        function closeLightbox() {
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close on clicking outside image
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Close on clicking X button
        lightboxClose.addEventListener('click', closeLightbox);

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });

        // Initialize Swiper
        const gallerySwiper = new Swiper('.gallery-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
      </script>
</body>
</html>