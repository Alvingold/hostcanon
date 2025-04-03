<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions - Afriportal Network Ltd</title>
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
</head>
<body class="kb-page">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/hostcanon/KB/includes/kb-nav.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold text-white mb-4">Frequently Asked Questions</h1>
                    <p class="lead text-white mb-4">Find quick answers to common questions about our hosting services.</p>
                    <div class="search-box bg-white p-2 rounded-pill shadow-sm">
                        <form class="d-flex">
                            <div class="input-group">
                                <span class="input-group-text border-0 bg-transparent">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search FAQs...">
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
    
    <div class="container" style="margin-top: -50px; position: relative;">
        <div class="kb-wrapper">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/hostcanon/KB/includes/kb-sidebar.php'; ?>
            
            <main class="kb-main">
                <div class="category-overview" id="categoryOverview">
                    <div class="row g-4">
                        <!-- Domain -->
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="kb-category-card">
                                <div class="category-header">
                                    <i class="bi bi-globe"></i>
                                    <h3><a href="articles/domain/">Domain</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- VPS -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="kb-category-card">
                                <div class="category-header">
                                    <i class="bi bi-hdd-network"></i>
                                    <h3>VPS Server</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Dedicated Servers -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="kb-category-card">
                                <div class="category-header">
                                    <i class="bi bi-server"></i>
                                    <h3>Dedicated Servers</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Shared Hosting -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="kb-category-card">
                                <div class="category-header">
                                    <i class="bi bi-diagram-3"></i>
                                    <h3>Shared Server Hosting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/hostcanon/assets/includes/footer.php'; ?>
    <?php include '../assets/includes/scroll-up.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true
            });
        });
    </script>
</body>
</html>