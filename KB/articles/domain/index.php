<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Articles - Knowledge Base</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/kb-styles.css">
</head>
<body class="kb-page">
    <?php include '../../../knowledge-base/includes/kb-nav.php'; ?>
    
    <div class="container mb-4 mt-4">
        <div class="kb-wrapper">
            <?php include '../../../knowledge-base/includes/kb-sidebar.php'; ?>
            
            <main class="kb-main">
                <div class="article-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../index.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item active">Domain Articles</li>
                        </ol>
                    </nav>

                    <h1 class="mb-4">Domain Management Articles</h1>
                    
                    <div class="row g-4">
                        <!-- Domain Registration -->
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="article-card">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-globe fs-4 text-primary me-3"></i>
                                            <h3 class="h5 mb-0">Domain Registration</h3>
                                        </div>
                                        <p class="text-muted">Learn how to register and manage your domain names effectively.</p>
                                        <a href="registration.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Domain Transfer -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="article-card">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-arrow-left-right fs-4 text-primary me-3"></i>
                                            <h3 class="h5 mb-0">Domain Transfer</h3>
                                        </div>
                                        <p class="text-muted">Guide to transferring domains between registrars seamlessly.</p>
                                        <a href="transfer.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DNS Management -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="article-card">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-diagram-3 fs-4 text-primary me-3"></i>
                                            <h3 class="h5 mb-0">DNS Management</h3>
                                        </div>
                                        <p class="text-muted">Understanding and configuring DNS records for your domain.</p>
                                        <a href="dns-management.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php include '../../../assets/includes/footer.php'; ?>

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
