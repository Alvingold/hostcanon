<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Registration Guide - Knowledge Base</title>
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
                <div class="article-content" data-aos="fade-in" data-aos-delay="200">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../index.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item">Domain</li>
                            <li class="breadcrumb-item active">Domain Registration</li>
                        </ol>
                    </nav>

                    <h1>How to Register a Domain Name</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-clock"></i> Last Updated: Nov 15, 2023</span>
                        <span><i class="bi bi-eye"></i> 0 views</span>
                    </div>

                    <div class="article-body">
                        <p class="lead">Learn how to register your domain name in simple steps...</p>
                        
                        <h2>Prerequisites</h2>
                        <ul>
                            <li>Valid email address</li>
                            <li>Payment method</li>
                        </ul>

                        <h2>Step-by-Step Guide</h2>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php include '../../../assets/includes/footer.php'; ?>

    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    document.addEventListener('DOMContentLoaded', function() {
        // Fix dropdown functionality
        const dropdowns = document.querySelectorAll('[data-bs-toggle="collapse"]');
        dropdowns.forEach(dropdown => {
            new bootstrap.Collapse(document.querySelector(dropdown.getAttribute('href')), {
                toggle: false
            });
        });

        // Highlight active item
        const currentPath = window.location.pathname;
        document.querySelectorAll('.sub-nav a').forEach(link => {
            if (currentPath.includes(link.getAttribute('href'))) {
                link.classList.add('active');
                const parentCollapse = link.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');
                    const trigger = document.querySelector(`[href="#${parentCollapse.id}"]`);
                    if (trigger) {
                        trigger.classList.add('active');
                        trigger.setAttribute('aria-expanded', 'true');
                    }
                }
            }
        });
    });
    </script>
</body>
</html>
