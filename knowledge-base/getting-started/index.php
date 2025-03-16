<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started - Knowledge Base | Afriportal Network Ltd</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            padding: 160px 0 100px;
            position: relative;
        }
        .article-list {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .article-item {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .article-item:last-child {
            border-bottom: none;
        }

        .article-item:hover {
            background: rgba(75, 0, 130, 0.02);
            transform: translateX(5px);
        }

        .article-item h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .article-meta {
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <?php include '../../assets/includes/nav-bar.php'; ?>

    <!-- Category Header -->
    <section class="py-5 mt-5 hero-section">
        <div class="container">
            <h1 class="mb-4">Getting Started</h1>
            <div class="article-list">
                <!-- Articles will be listed here -->
                <div class="article-item">
                    <h3><a href="introduction.php">Introduction to APN</a></h3>
                    <div class="article-meta">
                        <span><i class="bi bi-clock"></i> 5 min read</span>
                        <span class="ms-3"><i class="bi bi-eye"></i> 1.2k views</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../../assets/includes/footer.php'; ?>
</body>
</html>
