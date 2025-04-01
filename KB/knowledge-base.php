<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Base - Afriportal Network Ltd</title>
    <link rel="shortcut icon" href="../assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="assets/css/kb-styles.css">
    <style>
        .kb-page .hero-section {
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            padding: 160px 0 100px;
            position: relative;
        }

        .kb-page .search-box {
            max-width: 600px;
            margin: 0 auto;
        }

        .wave-bg {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            line-height: 0;
            transform: rotate(180deg);
        }

        .wave-bg svg {
            position: relative;
            display: block;
            width: 100%;
            height: 80px;
        }

        .wave-bg .shape-fill {
            fill: #FFFFFF;
        }

        @media (max-width: 767px) {
            .wave-bg svg {
                height: 50px;
            }
        }
        
        .kb-page .category-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .kb-page .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(75, 0, 130, 0.1);
        }

        .kb-page .icon-box {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4B0082, #932C8B);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .kb-page .category-card h3{
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #2d2d2d;
            text-decoration: none;
        }

        .kb-page .category-card ul li {
            margin-bottom: 1rem;
        }

        .kb-page .category-card ul li a {
            color: #666;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .kb-page .category-card ul li a:hover {
            color: #4B0082;
            transform: translateX(5px);
        }
    </style>
</head>
<body class="kb-page loading">
    <!-- <?php include '../assets/includes/preloader.php'; ?> -->
    <?php include '../assets/includes/nav-bar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold text-white mb-4">How can we help you?</h1>
                    <p class="lead text-white mb-4">Tens of topics and articles that will guide you through using and managing your hostcanon services.</p>
                    <div class="search-box bg-white p-2 rounded-pill shadow-sm">
                        <form class="d-flex">
                            <div class="input-group">
                                <span class="input-group-text border-0 bg-transparent">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search articles...">
                                <button class="btn btn-primary rounded-pill px-4" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bg">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Getting Started -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="category-card">
                        <div class="icon-box mb-4">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h3>Getting Started</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="bi bi-file-text"></i> Introduction to APN</a></li>
                            <li><a href="#"><i class="bi bi-file-text"></i> Account Setup Guide</a></li>
                            <li><a href="#"><i class="bi bi-file-text"></i> Basic Navigation</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Technical Support -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="icon-box mb-4">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3>Technical Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="bi bi-file-text"></i> Server Configuration</a></li>
                            <li><a href="#"><i class="bi bi-file-text"></i> Troubleshooting Guide</a></li>
                            <li><a href="#"><i class="bi bi-file-text"></i> Network Settings</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Billing & Accounts -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="icon-box mb-4">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <h3>Billing & Accounts</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="bi bi-file-text"></i> Payment Methods</a></li>
                            <li><a href="#"><i class="bi bi-file-text"></i> Subscription Plans</a></li>
                            <li><a href="#"><i class="bi bi-file-text"></i> Billing FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Articles -->
    <section class="popular-articles py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Popular Articles</h2>
            <div class="row g-4">
                <!-- Article cards will be here -->
            </div>
        </div>
    </section>

    <!-- Need More Help -->
    <section class="help-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Still Need Help?</h2>
            <p class="mb-4">Can't find what you're looking for? Our support team is here to help.</p>
            <a href="../contacts.php" class="btn btn-primary btn-lg">Contact Support</a>
        </div>
    </section>

    <?php include('../assets/includes/footer.php'); ?>
    <?php include '../assets/includes/scroll-up.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>