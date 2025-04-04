<?php
// Get the searched domain from the URL parameter
$searchedDomain = isset($_GET['domain']) ? htmlspecialchars($_GET['domain']) : '';

// If no domain is provided, redirect back to domain search page
if (empty($searchedDomain)) {
    header('Location: domain.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Search Results - <?php echo $searchedDomain; ?></title>
    <!-- Link to your CSS -->
    <link rel="stylesheet" href="path/to/your/styles.css">
    <!-- Add Bootstrap Icons if you're using them -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Add results page styling -->
    <link rel="stylesheet" href="assets/css/domain-results.css">
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="domain.php">Domain Search</a>
                </div>
                <!-- Add your navigation links here -->
            </nav>
        </div>
    </header>

    <!-- Search Results Section -->
    <section class="results-section">
        <div class="container">
            <!-- Search Again Area -->
            <div class="search-again-container">
                <h2>Domain Search Results</h2>
                <div class="search-container">
                    <div class="search-input-wrapper">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" id="results-search-input" class="search-input" 
                               placeholder="Search another domain..." 
                               value="<?php echo $searchedDomain; ?>">
                    </div>
                    <button id="results-search-btn" class="search-btn">Search</button>
                </div>
            </div>

            <!-- Loading Indicator -->
            <div id="loading-indicator" class="loading-indicator">
                <div class="spinner"></div>
                <p>Checking domain availability...</p>
            </div>

            <!-- Main Domain Result -->
            <div id="main-domain-result" class="domain-result-card">
                <!-- Content will be inserted by JavaScript -->
            </div>

            <!-- Alternative Domains -->
            <div class="alternatives-section">
                <h3>More Domain Options</h3>
                <div id="alternative-domains" class="domain-grid">
                    <!-- Content will be inserted by JavaScript -->
                </div>
            </div>

            <!-- Call to Action -->
            <div class="domain-cta">
                <h3>Need help choosing the right domain?</h3>
                <p>Our domain experts are ready to assist you.</p>
                <a href="contact.php" class="contact-btn">Contact Support</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2025 Domain Search Service. All rights reserved.</p>
        </div>
    </footer>

    <!-- Results Page JavaScript -->
    <script src="Java/domain-results.js"></script>
</body>
</html>