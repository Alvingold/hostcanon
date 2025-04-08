// domain-results.js - Domain availability checker using free RDAP API

document.addEventListener('DOMContentLoaded', function() {
    // Get domain from URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const domain = urlParams.get('domain');
    
    // Ensure domain has proper format (add .com if no TLD specified)
    let formattedDomain = domain;
    if (domain && !domain.includes('.')) {
        formattedDomain = domain + '.com';
    }
    
    // Get UI elements
    const loadingIndicator = document.getElementById('loading-indicator');
    const mainDomainResult = document.getElementById('main-domain-result');
    const alternativeDomains = document.getElementById('alternative-domains');
    const searchInput = document.getElementById('results-search-input');
    const searchButton = document.getElementById('results-search-btn');
    
    // Set the search input value to the current domain
    if (formattedDomain) {
        searchInput.value = formattedDomain;
    }
    
    // Configure search button
    searchButton.addEventListener('click', function() {
        const newDomain = searchInput.value.trim();
        if (newDomain) {
            window.location.href = `domain-results.php?domain=${encodeURIComponent(newDomain)}`;
        }
    });
    
    // Allow search on Enter key
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchButton.click();
        }
    });
    
    // If domain is present, check availability
    if (formattedDomain) {
        // Display main domain immediately to improve UX
        mainDomainResult.innerHTML = `
            <div class="domain-info checking">
                <div class="domain-name">
                    <h3>${formattedDomain}</h3>
                    <span class="status checking">Checking availability...</span>
                </div>
            </div>
        `;
        
        checkDomainAvailability(formattedDomain);
        generateAlternatives(formattedDomain);
    } else {
        // Handle no domain case
        mainDomainResult.innerHTML = `
            <div class="error-message">
                <i class="bi bi-exclamation-triangle"></i>
                <p>No domain specified. Please try your search again.</p>
            </div>
        `;
        loadingIndicator.style.display = 'none';
    }
    
    // Function to check domain availability using RDAP API
    function checkDomainAvailability(domain) {
        // Show loading indicator
        loadingIndicator.style.display = 'flex';
        
        // Get domain parts
        const domainParts = domain.split('.');
        const tld = domainParts.pop();
        
        // Enhanced TLD pricing list with more options
        const tldPrices = {
            'com': 12.99,
            'net': 11.99,
            'org': 10.99,
            'io': 39.99,
            'co': 24.99,
            'app': 15.99,
            'dev': 14.99,
            'ai': 69.99,
            'me': 19.99,
            'tech': 39.99,
            'store': 49.99,
            'online': 29.99,
            'site': 24.99,
            'xyz': 9.99,
            'info': 12.99,
            'biz': 16.99,
            'blog': 17.99,
            'design': 45.99,
            'shop': 29.99,
            'club': 9.99,
            'us': 8.99,
            'uk': 9.99,
            'ca': 12.99,
            'au': 12.99,
            'email': 19.99,
            'live': 19.99,
            'agency': 24.99,
            'cloud': 19.99,
            'digital': 29.99,
            'media': 24.99
        };
        const price = tldPrices[tld] || 9.99;
        
        console.log(`Checking availability for domain: ${domain}`);
        
        // Use the free RDAP API to check domain status
        fetch(`https://rdap.org/domain/${domain}`)
            .then(response => {
                console.log(`RDAP response status for ${domain}: ${response.status}`);
                
                // Explicitly handle 404 as available
                if (response.status === 404) {
                    console.log(`Domain ${domain} is available (404 response)`);
                    return { available: true };
                } else if (response.ok) {
                    console.log(`Domain ${domain} exists (response OK)`);
                    return response.json().then(data => {
                        return { available: false, data: data };
                    });
                } else {
                    console.log(`Error checking ${domain}: ${response.status}`);
                    throw new Error(`HTTP Error: ${response.status}`);
                }
            })
            .then(data => {
                console.log(`Processing availability data for ${domain}: ${data.available ? 'Available' : 'Not Available'}`);
                displayDomainResult(domain, { 
                    available: data.available, 
                    price: price 
                });
                loadingIndicator.style.display = 'none';
            })
            .catch(error => {
                console.error('Error checking domain availability:', error);
                // If there's a specific error, try DNS lookup as fallback
                fallbackDnsCheck(domain);
                });
        }
    
        // Function to update alternative domain card with availability and price
        function updateAlternativeDomain(card, data) {
            const statusElement = card.querySelector('.alt-domain-status');
            const priceElement = card.querySelector('.alt-domain-price');
            
            if (data.available) {
                statusElement.textContent = 'Available';
                priceElement.textContent = `$${data.price}/year`;
                card.classList.add('available');
            } else {
                statusElement.textContent = 'Unavailable';
                card.classList.add('unavailable');
            }
        }
    });
    
    // Fallback DNS lookup when RDAP fails
    function fallbackDnsCheck(domain) {
        console.log(`Using fallback DNS check for domain: ${domain}`);
        
        fetch(`https://dns.google/resolve?name=${domain}`)
            .then(response => response.json())
            .then(data => {
                // If we get any records, domain exists
                const isAvailable = !data.Answer || data.Answer.length === 0;
                const tld = domain.split('.').pop();
                
                // Use the expanded TLD pricing for fallback too
                const tldPrices = {
                    'com': 12.99,
                    'net': 11.99,
                    'org': 10.99,
                    'io': 39.99,
                    'co': 24.99,
                    'app': 15.99,
                    'dev': 14.99,
                    'ai': 69.99,
                    'me': 19.99,
                    'tech': 39.99,
                    'store': 49.99,
                    'online': 29.99,
                    'site': 24.99,
                    'xyz': 9.99,
                    'info': 12.99,
                    'biz': 16.99,
                    'blog': 17.99,
                    'design': 45.99,
                    'shop': 29.99,
                    'club': 9.99,
                    'us': 8.99,
                    'uk': 9.99,
                    'ca': 12.99,
                    'au': 12.99,
                    'email': 19.99,
                    'live': 19.99,
                    'agency': 24.99,
                    'cloud': 19.99,
                    'digital': 29.99,
                    'media': 24.99
                };
                const price = tldPrices[tld] || 9.99;
                
                console.log(`Fallback DNS check for ${domain}: ${isAvailable ? 'Available' : 'Not Available'}`);
                
                displayDomainResult(domain, { 
                    available: isAvailable, 
                    price: price 
                });
                loadingIndicator.style.display = 'none';
            })
            .catch(error => {
                console.error('Error in fallback DNS check:', error);
                displayErrorResult(domain);
                loadingIndicator.style.display = 'none';
            });
    }
    
    // Function to display domain availability result
    function displayDomainResult(domain, data) {
        const isAvailable = data.available;
        const price = data.price || '9.99';
        
        console.log(`Displaying result for ${domain}: ${isAvailable ? 'Available' : 'Not Available'}`);
        
        mainDomainResult.innerHTML = `
            <div class="domain-info ${isAvailable ? 'available' : 'unavailable'}">
                <div class="domain-name">
                    <h3>${domain}</h3>
                    ${isAvailable 
                        ? `<span class="status available">Available</span>` 
                        : `<span class="status unavailable">Unavailable</span>`}
                </div>
                ${isAvailable ? `
                    <div class="domain-pricing">
                        <span class="price">$${price}</span>
                        <span class="period">/year</span>
                    </div>
                    <div class="domain-actions">
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                ` : `
                    <div class="domain-actions">
                        <button class="whois-btn">View WHOIS</button>
                        <button class="make-offer-btn">Make an Offer</button>
                    </div>
                `}
            </div>
        `;
        
        // Add event listeners to buttons
        if (isAvailable) {
            const addToCartBtn = mainDomainResult.querySelector('.add-to-cart-btn');
            addToCartBtn.addEventListener('click', function() {
                addDomainToCart(domain, price);
            });
        } else {
            const whoisBtn = mainDomainResult.querySelector('.whois-btn');
            const makeOfferBtn = mainDomainResult.querySelector('.make-offer-btn');
            
            whoisBtn.addEventListener('click', function() {
                window.open(`https://who.is/whois/${domain}`, '_blank');
            });
            
            makeOfferBtn.addEventListener('click', function() {
                window.location.href = `domain-offer.php?domain=${encodeURIComponent(domain)}`;
            });
        }
    }
    
    // Function to display error result
    function displayErrorResult(domain) {
        mainDomainResult.innerHTML = `
            <div class="domain-info error">
                <div class="domain-name">
                    <h3>${domain}</h3>
                    <span class="status error">Error checking availability</span>
                </div>
                <div class="domain-actions">
                    <button class="retry-btn">Try Again</button>
                </div>
            </div>
        `;
        
        const retryBtn = mainDomainResult.querySelector('.retry-btn');
        retryBtn.addEventListener('click', function() {
            checkDomainAvailability(domain);
        });
    }
    
    // Function to generate alternative domain suggestions
    function generateAlternatives(domain) {
        // Extract the domain name without TLD
        const domainParts = domain.split('.');
        const domainName = domainParts[0];
        const currentTld = domainParts.length > 1 ? `.${domainParts[1]}` : '.com';
        
        // Expanded list of TLDs to check (exclude current TLD)
        const tlds = [
            '.com', '.net', '.org', '.io', '.co', '.app', '.dev', 
            '.ai', '.me', '.tech', '.store', '.online', '.site', 
            '.xyz', '.info', '.biz', '.blog', '.design', '.shop', 
            '.club', '.us', '.uk', '.ca', '.au'
        ].filter(tld => tld !== currentTld);
        
        // Create alternative domain suggestions
        let alternativesHTML = '';
        
        tlds.forEach(tld => {
            const altDomain = `${domainName}${tld}`;
            alternativesHTML += `
                <div class="alt-domain-card" data-domain="${altDomain}">
                    <div class="alt-domain-name">${altDomain}</div>
                    <div class="alt-domain-status">Checking...</div>
                    <div class="alt-domain-price"></div>
                </div>
            `;
        });
        
        alternativeDomains.innerHTML = alternativesHTML;
        
        // Check availability for each alternative domain
        document.querySelectorAll('.alt-domain-card').forEach(card => {
            const altDomain = card.getAttribute('data-domain');
            checkAlternativeDomain(altDomain, card);
        });
    }
    
    // Function to check alternative domain availability
    function checkAlternativeDomain(domain, card) {
        // Use the same RDAP API for alternative domains
        fetch(`https://rdap.org/domain/${domain}`)
            .then(response => {
                // Explicitly handle 404 as available
                if (response.status === 404) {
                    return { available: true };
                } else if (response.ok) {
                    return response.json().then(data => {
                        return { available: false, data: data };
                    });
                } else {
                    throw new Error(`HTTP Error: ${response.status}`);
                }
            })
            .then(data => {
                const tld = domain.split('.').pop();
                
                // Use expanded TLD pricing list
                const tldPrices = {
                    'com': 12.99,
                    'net': 11.99,
                    'org': 10.99,
                    'io': 39.99,
                    'co': 24.99,
                    'app': 15.99,
                    'dev': 14.99,
                    'ai': 69.99,
                    'me': 19.99,
                    'tech': 39.99,
                    'store': 49.99,
                    'online': 29.99,
                    'site': 24.99,
                    'xyz': 9.99,
                    'info': 12.99,
                    'biz': 16.99,
                    'blog': 17.99,
                    'design': 45.99,
                    'shop': 29.99,
                    'club': 9.99,
                    'us': 8.99,
                    'uk': 9.99,
                    'ca': 12.99,
                    'au': 12.99,
                    'email': 19.99,
                    'live': 19.99,
                    'agency': 24.99,
                    'cloud': 19.99,
                    'digital': 29.99,
                    'media': 24.99
                };
                const price = tldPrices[tld] || 9.99;
                
                updateAlternativeDomain(card, {
                    available: data.available,
                    price: price
                });
            })
            .catch(error => {
                console.error(`Error checking alternative domain ${domain}:`, error);
                // Try DNS lookup as fallback
                fetch(`https://dns.google/resolve?name=${domain}`)
                    .then(response => response.json())
                    .then(data => {
                        const isAvailable = !data.Answer || data.Answer.length === 0;
                        const tld = domain.split('.').pop();
                        
                        // Use expanded TLD pricing here too
                        const tldPrices = {
                            'com': 12.99,
                            'net': 11.99,
                            'org': 10.99,
                            'io': 39.99,
                            'co': 24.99,
                            'app': 15.99,
                            'dev': 14.99,
                            'ai': 69.99,
                            'me': 19.99,
                            'tech': 39.99,
                            'store': 49.99,
                            'online': 29.99,
                            'site': 24.99,
                            'xyz': 9.99,
                            'info': 12.99,
                            'biz': 16.99,
                            'blog': 17.99,
                            'design': 45.99,
                            'shop': 29.99,
                            'club': 9.99,
                            'us': 8.99,
                            'uk': 9.99,
                            'ca': 12.99,
                            'au': 12.99,
                            'email': 19.99,
                            'live': 19.99,
                            'agency': 24.99,
                            'cloud': 19.99,
                            'digital': 29.99,
                            'media': 24.99
                        };
                        const price = tldPrices[tld] || 9.99;
                        
                        updateAlternativeDomain(card, {
                            available: isAvailable,
                            price: price
                        });
                    })
                    .catch(error => {
                        console.error(`Error in fallback DNS check for ${domain}:`, error);
                        card.querySelector('.alt-domain-status').textContent = 'Error';
                        card.classList.add('error');
                    });
            });
    }
    // Function to add domain to cart
function addDomainToCart(domain, price) {
    // Show loading state
    const addToCartBtn = document.querySelector('.add-to-cart-btn');
    if (addToCartBtn) {
        addToCartBtn.disabled = true;
        addToCartBtn.textContent = 'Adding...';
    }

    fetch('/hostcanon/cart/add-domain.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({
            domain: domain,
            price: parseFloat(price),
            type: 'domain'
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update cart UI
            const cartCounter = document.querySelector('.cart-counter');
            if (cartCounter) {
                cartCounter.textContent = data.cartCount;
                cartCounter.style.display = 'block';
            }
            
            // Show success message
            alert(`${domain} has been added to your cart!`);
        } else {
            throw new Error(data.message || 'Failed to add domain to cart');
        }
    })
    .catch(error => {
        console.error('Error adding to cart:', error);
        alert(`Error adding ${domain} to cart. Please try again.`);
    });
}