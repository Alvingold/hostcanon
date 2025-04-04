// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the search elements
    const searchInput = document.querySelector('.search-input');
    const searchButton = document.querySelector('.search-btn');
    
    // Function to handle domain search
    function searchDomain() {
        // Get the domain text from input
        const domainText = searchInput.value.trim();
        
        // Basic validation
        if (!domainText) {
            alert('Please enter a domain name to search');
            return;
        }
        
        // If user didn't include TLD, add .com
        let searchDomain = domainText;
        if (!domainText.includes('.')) {
            searchDomain = domainText + '.com';
        }
        
        // Redirect to results page with search query
        window.location.href = `domain-results.php?domain=${encodeURIComponent(searchDomain)}`;
    }
    
    // Add event listener to search button
    searchButton.addEventListener('click', searchDomain);
    
    // Add event listener for Enter key in search input
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchDomain();
        }
    });
    
    // Add event listeners to domain links
    const domainLinks = document.querySelectorAll('.domain-link');
    domainLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.textContent.toLowerCase();
            if (action.includes('transfer')) {
                window.location.href = 'domain-transfer.php';
            } else if (action.includes('existing')) {
                window.location.href = 'existing-domain.php';
            }
        });
    });
});