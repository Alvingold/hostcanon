<?php
// Start the session if needed
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Plans</title>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="assets/css/currency.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"> -->
    <style>

        *{
            margin: 0;
            padding: 0;
            /* box-sizing: content-box; */
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            overflow-x: hidden;
        }
    /* Base Styles */
    /* Base Styles */
    .main-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .text-center {
        text-align: center;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .section-title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #666;
    }

    /* Filter Styles */
    /* Filter Section Styles */
.filter-section {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}
.filter-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}
.filter-header h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin: 0;
    color: #333;
}
.btn-reset {
    background: linear-gradient(135deg, #4B0082, #932C8B);
    color: white;
    border: none;
    border-radius: 25px;
    padding: 10px 24px;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: block;
    float: left;
}
.btn-reset:hover {
    background: linear-gradient(135deg, #3a006a, #7f267a);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(75, 0, 130, 0.2);
}
.filter-row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
    gap: 20px;
}
.filter-group {
    flex: 1;
    min-width: 200px;
}
.filter-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #555;
    font-size: 0.9rem;
}
/* Add these new styles */
.sidebar-filter {
        width: 100%;
        max-width: 300px;
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        margin-right: 30px;
        height: fit-content;
    }

    @media (max-width: 991px) {
        .sidebar-filter {
            display: none;
        }
    }

    .pricings-section {
        padding: 60px 0;
    }

    .d-flex {
        display: flex;
    }

    .flex-column {
        flex-direction: column;
    }

    @media (min-width: 992px) {
        .flex-lg-row {
            flex-direction: row;
        }
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mb-lg-0 {
        @media (min-width: 992px) {
            margin-bottom: 0 !important;
        }
    }
.range-slider {
    position: relative;
}
.slider {
    width: 100%;
    height: 6px;
    background: #ddd;
    border-radius: 5px;
    outline: none;
    -webkit-appearance: none;
    appearance: none;
}
.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: #4B0082;
    cursor: pointer;
}
.range-value {
    margin-top: 8px;
    font-size: 0.9rem;
    color: #666;
}
.checkbox-group {
    display: flex;
    gap: 15px;
}
.checkbox-main-container {
    display: flex;
    align-items: center;
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    font-size: 0.9rem;
    color: #666;
    user-select: none;
}
.checkbox-main-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 4px;
}
.checkbox-main-container:hover input ~ .checkmark {
    background-color: #ccc;
}
.checkbox-main-container input:checked ~ .checkmark {
    background-color: #4B0082;
}
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
.checkbox-main-container input:checked ~ .checkmark:after {
    display: block;
}
.checkbox-main-container .checkmark:after {
    left: 7px;
    top: 3px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
.form-select {
    display: block;
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 0.9rem;
    color: #333;
    background-color: #fff;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px;
}
.btn-apply {
    background: linear-gradient(135deg, #4B0082, #932C8B);
    color: white;
    border: none;
    border-radius: 25px;
    padding: 10px 24px;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: block;
    margin-left: auto;
}
.btn-apply:hover {
    background: linear-gradient(135deg, #3a006a, #7f267a);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(75, 0, 130, 0.2);
}

/* Modal and Responsive Styles */
.filter-btn-mobile {
    display: none;
    width: 100%;
    background: linear-gradient(135deg, #4B0082, #932C8B);
    color: white;
    border: none;
    border-radius: 8px;
    padding: 12px;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 20px;
    cursor: pointer;
    transition: all 0.3s;
}

.filter-btn-mobile:hover {
    background: linear-gradient(135deg, #3a006a, #7f267a);
    box-shadow: 0 4px 12px rgba(75, 0, 130, 0.2);
}

.filter-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: white;
    margin: 30% auto;
    width: 90%;
    max-width: 500px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    animation: modalFadeIn 0.3s;
}

@keyframes modalFadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
}

.modal-header h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin: 0;
    color: #333;
}

.close-modal {
    font-size: 1.5rem;
    font-weight: bold;
    color: #aaa;
    cursor: pointer;
    transition: color 0.2s;
}

.close-modal:hover {
    color: #333;
}

.modal-body {
    padding: 20px;
}

/* Media Queries */
@media (max-width: 768px) {
    .filter-section {
        display: none;
    }
    
    .filter-btn-mobile {
        display: block;
    }
    
    .filter-group {
        min-width: 100%;
        margin-bottom: 15px;
    }
    
    .filter-row {
        flex-direction: column;
        gap: 10px;
        margin-bottom: 10px;
    }
    
    .checkbox-group {
        flex-wrap: wrap;
    }
}
    /* Pricing Card Styles */
    .pricings-section {
        padding: 40px 0;
    }

    .pricings-card-wrapper {
        flex: 0 0 100%;
        padding: 15px;
        max-width: 350px;
        min-width: 280px;
    }

    .pricings-row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        justify-content: center;
        gap: 20px;
    }

    .pricings-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    transition: transform 0.4s ease, border-color 0.4s ease;
    height: 100%;
    position: relative;
    border: 2px solid transparent;
    will-change: transform;
    }

    .pricings-card:hover {
    transform: translateY(-5px);
    border-color: #4B0082;
    box-shadow: 0 10px 20px rgba(75, 0, 130, 0.1);
    }
    .pricings-card.popular {
    border-color: #4B0082;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(75, 0, 130, 0.15);
    }
    .pricings-header {
    background: linear-gradient(135deg, #4B0082, #932C8B);
    color: white;
    padding: 1.5rem 1rem;
    text-align: center;
    position: relative;
    overflow: hidden;
    }
    .pricings-header::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent 45%, rgba(255,255,255,0.1) 45%, rgba(255,255,255,0.1) 55%, transparent 55%);
    }
    .pricings-header h3 {
        font-size: 1.2rem;
        margin-bottom: 15px;
        position: relative;
        color: white;
    }

    .price-tag {
    font-size: 2rem;
    font-weight: 700;
    margin: 0.5rem 0;
    line-height: 1;
    }

    .price-duration {
    font-size: 0.8rem;
    opacity: 0.8;
    }
    .pricings-features {
    padding: 1.2rem;
    }
    .location-badge {
        display: inline-block;
        padding: 5px 15px;
        background: #f8f9fa;
        border-radius: 20px;
        font-size: 0.9rem;
        color: #666;
        margin-top: 10px;
    }

    .pricings-features ul {
    list-style: none;
    padding: 0;
    margin: 0;
    color: #666;
    }

    .pricings-features li {
    padding: 0.7rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    gap: 0.7rem;
    font-size: 0.9rem;
    }

    .pricings-features li:last-child {
        border-bottom: none;
    }

    .pricings-features i {
    color: #4B0082;
    font-size: 1rem;
    background: rgba(75, 0, 130, 0.1);
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pricings-footer {
    padding: 0 1.2rem 1.2rem;
    text-align: center;
    }

    .btn-primary {
    text-decoration: none;
    border: 2px solid #4B0082;
    border-radius: 30px;
    padding: 0.8rem 2rem;
    font-size: 1rem;
    font-weight: 600;
    background: transparent;
    color: #4B0082;
    transition: all 0.3s ease;
    width: 100%;
    }

    .btn-primary:hover {
    /* transform: translateY(-2px); */
    box-shadow: 0 4px 12px rgba(75, 0, 130, 0.2);
    }

    .popular {
        border: 2px solid  #4B0082;
    }

    .popular-badge {
        position: absolute;
        top: -12px;
        right: 20px;
        background: #4B0082;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
    }
    .location-badge {
    position: absolute;
    bottom: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.2);
    color: white;
    padding: 2px 8px;
    font-size: 0.7rem;
    border-top-left-radius: 6px;
    }

    /* No Result Message */
    .no-results-message {
    text-align: center;
    padding: 40px 20px;
    }

    .alert {
    background: #fff3cd;
    border: 1px solid #ffeeba;
    color: #856404;
    padding: 15px 20px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    }

    .alert i {
    font-size: 1.5rem;
    }

    @media (min-width: 768px) {
        .pricings-card-wrapper {
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px);
        }
    }

    @media (min-width: 992px) {
        .pricings-card-wrapper {
            flex: 0 0 calc(33.333% - 30px);
            max-width: calc(33.333% - 30px);
        }
    }

    @media (max-width: 1200px) {
        .pricings-card {
            margin-bottom: 30px;
        }
        .pricings-features li {
            font-size: 0.85rem;
            padding: 0.6rem 0;
        }
        .price-tag {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 991px) {
        .sidebar-filter {
            display: none;
        }
        .filter-btn-mobile {
            display: block;
        }
        .pricings-row {
            margin-top: 20px;
        }
    }

</style>
<body>

<section class="pricings-section">
    <div class="main-container">
        <div class="text-center mb-4">
            <h2 class="section-title">Choose Your Server Plan</h2>
            <p class="section-subtitle">Dedicated resources with full control</p>
        </div>
        <div class="currency-selector">
    <label for="currency-selector">Select your currency: </label>
    <select id="currency-selector">
      <!-- Africa -->
      <option value="EGP">Egyptian Pound (EGP)</option>
      <option value="GHS">Ghanaian Cedi (GHS)</option>
      <option value="KES">Kenyan Shilling (KES)</option>
      <option value="NGN">Nigerian Naira (NGN)</option>
      <option value="ZAR">South African Rand (ZAR)</option>
      <option value="TZS">Tanzanian Shilling (TZS)</option>
      <option value="UGX">Ugandan Shilling (UGX)</option>
      <option value="XAF">CFA Franc BEAC (XAF)</option>
      <option value="XOF">CFA Franc BCEAO (XOF)</option>
      <option value="ETB">Ethiopian Birr (ETB)</option>
      
      <!-- Americas -->
      <option value="ARS">Argentine Peso (ARS)</option>
      <option value="BRL">Brazilian Real (BRL)</option>
      <option value="CAD">Canadian Dollar (CAD)</option>
      <option value="CLP">Chilean Peso (CLP)</option>
      <option value="COP">Colombian Peso (COP)</option>
      <option value="MXN">Mexican Peso (MXN)</option>
      <option value="PEN">Peruvian Sol (PEN)</option>
      <option value="USD">US Dollar (USD)</option>
      
      <!-- Asia & Pacific -->
      <option value="AUD">Australian Dollar (AUD)</option>
      <option value="BDT">Bangladeshi Taka (BDT)</option>
      <option value="CNY">Chinese Yuan (CNY)</option>
      <option value="HKD">Hong Kong Dollar (HKD)</option>
      <option value="INR">Indian Rupee (INR)</option>
      <option value="IDR">Indonesian Rupiah (IDR)</option>
      <option value="JPY">Japanese Yen (JPY)</option>
      <option value="KZT">Kazakhstani Tenge (KZT)</option>
      <option value="MYR">Malaysian Ringgit (MYR)</option>
      <option value="NZD">New Zealand Dollar (NZD)</option>
      <option value="PKR">Pakistani Rupee (PKR)</option>
      <option value="PHP">Philippine Peso (PHP)</option>
      <option value="SGD">Singapore Dollar (SGD)</option>
      <option value="KRW">South Korean Won (KRW)</option>
      <option value="LKR">Sri Lankan Rupee (LKR)</option>
      <option value="THB">Thai Baht (THB)</option>
      <option value="VND">Vietnamese Dong (VND)</option>
      
      <!-- Europe -->
      <option value="EUR">Euro (EUR)</option>
      <option value="BGN">Bulgarian Lev (BGN)</option>
      <option value="HRK">Croatian Kuna (HRK)</option>
      <option value="CZK">Czech Koruna (CZK)</option>
      <option value="DKK">Danish Krone (DKK)</option>
      <option value="HUF">Hungarian Forint (HUF)</option>
      <option value="ISK">Icelandic Krona (ISK)</option>
      <option value="NOK">Norwegian Krone (NOK)</option>
      <option value="PLN">Polish Zloty (PLN)</option>
      <option value="RON">Romanian Leu (RON)</option>
      <option value="RUB">Russian Ruble (RUB)</option>
      <option value="SEK">Swedish Krona (SEK)</option>
      <option value="CHF">Swiss Franc (CHF)</option>
      <option value="TRY">Turkish Lira (TRY)</option>
      <option value="GBP">British Pound (GBP)</option>
      <option value="UAH">Ukrainian Hryvnia (UAH)</option>
      
      <!-- Middle East -->
      <option value="BHD">Bahraini Dinar (BHD)</option>
      <option value="ILS">Israeli Shekel (ILS)</option>
      <option value="JOD">Jordanian Dinar (JOD)</option>
      <option value="KWD">Kuwaiti Dinar (KWD)</option>
      <option value="OMR">Omani Rial (OMR)</option>
      <option value="QAR">Qatari Riyal (QAR)</option>
      <option value="SAR">Saudi Riyal (SAR)</option>
      <option value="AED">UAE Dirham (AED)</option>
    </select>
    <p>Showing prices in <span id="selected-currency">USD</span></p>
  </div>
        
        <!-- Filter Section -->
        <!-- Mobile Filter Button (shows on small screens) -->
<button class="filter-btn-mobile">
    <i class="bi bi-filter"></i> Filter 
</button>

<!-- Original Filter Section (hidden on mobile) -->
<div class="main-container d-flex flex-column flex-lg-row">
    <!-- Sidebar Filter Section -->
    <div class="sidebar-filter mb-4 mb-lg-0">
        <div class="filter-section">
            <div class="filter-header">
                <h3>Filter Options</h3>
                <button id="resetFilters" class="btn-reset">Reset Filter</button>
            </div>
            <div class="filter-body">
                <div class="filter-group mb-4">
                    <label>CPU Cores</label>
                    <div class="range-slider">
                        <input type="range" id="coresSlider" min="4" max="64" value="4" class="slider">
                        <div class="range-value"><span id="coresValue">4+</span> Cores</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Threads</label>
                    <div class="range-slider">
                        <input type="range" id="threadsSlider" min="8" max="128" value="8" class="slider">
                        <div class="range-value"><span id="threadsValue">8+</span> Threads</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>RAM (GB)</label>
                    <div class="range-slider">
                        <input type="range" id="ramSlider" min="16" max="512" step="16" value="16" class="slider">
                        <div class="range-value"><span id="ramValue">16+</span> GB</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Price</label>
                    <div class="range-slider">
                        <input type="range" id="priceSlider" min="50" max="500" value="300" class="slider">
                        <div class="range-value">$<span id="priceValue">300</span> or less</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Storage Type</label>
                    <div class="checkbox-group">
                        <label class="checkbox-main-container">
                            <input type="checkbox" id="ssdFilter" checked>
                            <span class="checkmark"></span>
                            SSD
                        </label>
                        <label class="checkbox-main-container">
                            <input type="checkbox" id="nvmeFilter" checked>
                            <span class="checkmark"></span>
                            NVMe
                        </label>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Location</label>
                    <select id="locationFilter" class="form-select">
                        <option value="all">All Locations</option>
                        <option value="us">United States</option>
                        <option value="eu">Europe</option>
                        <option value="asia">Asia Pacific</option>
                    </select>
                </div>
                <button id="applyFilters" class="btn-apply">Apply Filters</button>
            </div>
        </div>
    </div>

    <!-- Modal for Mobile -->
    <div id="filterModal" class="filter-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Filter Options</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="filter-group mb-4">
                    <label>CPU Cores</label>
                    <div class="range-slider">
                        <input type="range" id="coresSliderModal" min="4" max="64" value="4" class="slider">
                        <div class="range-value"><span id="coresValueModal">4+</span> Cores</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Threads</label>
                    <div class="range-slider">
                        <input type="range" id="threadsSliderModal" min="8" max="128" value="8" class="slider">
                        <div class="range-value"><span id="threadsValueModal">8+</span> Threads</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>RAM (GB)</label>
                    <div class="range-slider">
                        <input type="range" id="ramSliderModal" min="16" max="512" step="16" value="16" class="slider">
                        <div class="range-value"><span id="ramValueModal">16+</span> GB</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Price</label>
                    <div class="range-slider">
                        <input type="range" id="priceSliderModal" min="50" max="500" value="300" class="slider">
                        <div class="range-value">$<span id="priceValueModal">300</span> or less</div>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Storage Type</label>
                    <div class="checkbox-group">
                        <label class="checkbox-main-container">
                            <input type="checkbox" id="ssdFilterModal" checked>
                            <span class="checkmark"></span>
                            SSD
                        </label>
                        <label class="checkbox-main-container">
                            <input type="checkbox" id="nvmeFilterModal" checked>
                            <span class="checkmark"></span>
                            NVMe
                        </label>
                    </div>
                </div>
                <div class="filter-group mb-4">
                    <label>Location</label>
                    <select id="locationFilterModal" class="form-select">
                        <option value="all">All Locations</option>
                        <option value="us">United States</option>
                        <option value="eu">Europe</option>
                        <option value="asia">Asia Pacific</option>
                    </select>
                </div>
                <button id="resetFiltersModal" class="btn-reset">Reset Filters</button>
                <button id="applyFiltersModal" class="btn-apply">Apply Filters</button>
            </div>
        </div>
    </div>


        <!-- pricings Cards -->
        <div class="row pricings-row" id="pricingsmain-container">
            <div class="pricings-card-wrapper" data-cores="4" data-threads="8" data-ram="16" data-price="74.80" data-storage="ssd" data-location="us">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Starter</h3>
                        <div class="price-tag" id="plan-0-price">$74.80<span class="price-duration">/mo</span></div>
                        <div class="location-badge">US East</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 4 Cores / 8 Threads</li>
                            <li><i class="bi bi-memory"></i> 16 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 1x 480 GB SSD</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 1 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="pricings-card-wrapper" data-cores="8" data-threads="16" data-ram="64" data-price="115.80" data-storage="ssd" data-location="us">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Professional</h3>
                        <div class="price-tag" id="plan-1-price">$115.80<span class="price-duration">/mo</span></div>
                        <div class="location-badge">US East</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 8 Cores / 16 Threads</li>
                            <li><i class="bi bi-memory"></i> 64 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 2x 960 GB SSD</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 1 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="pricings-card-wrapper" data-cores="16" data-threads="32" data-ram="128" data-price="174.25" data-storage="nvme" data-location="us">
                <div class="pricings-card popular">
                    <div class="popular-badge">Popular</div>
                    <div class="pricings-header">
                        <h3 class="plan-name">Enterprise</h3>
                        <div class="price-tag" id="plan-2-price">$174.25<span class="price-duration">/mo</span></div>
                        <div class="location-badge">US East</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 16 Cores / 32 Threads</li>
                            <li><i class="bi bi-memory"></i> 128 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 2x 960GB NVMe</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 10 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="pricings-card-wrapper" data-cores="24" data-threads="48" data-ram="256" data-price="257.80" data-storage="nvme" data-location="us">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Ultra</h3>
                        <div class="price-tag" id="plan-3-price">$257.80<span class="price-duration">/mo</span></div>
                        <div class="location-badge">US East</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 24 Cores / 48 Threads</li>
                            <li><i class="bi bi-memory"></i> 256 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 2x 960 GB NVMe SSD</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 10 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- Additional Servers -->
            <div class="pricings-card-wrapper" data-cores="8" data-threads="16" data-ram="32" data-price="98.50" data-storage="ssd" data-location="eu">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Euro Standard</h3>
                        <div class="price-tag" id="plan-4-price">$98.50<span class="price-duration">/mo</span></div>
                        <div class="location-badge">EU</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 8 Cores / 16 Threads</li>
                            <li><i class="bi bi-memory"></i> 32 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 1x 960 GB SSD</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 1 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="pricings-card-wrapper" data-cores="16" data-threads="32" data-ram="64" data-price="145.30" data-storage="nvme" data-location="eu">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Euro Pro</h3>
                        <div class="price-tag" id="plan-5-price">$145.30<span class="price-duration">/mo</span></div>
                        <div class="location-badge">EU</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 16 Cores / 32 Threads</li>
                            <li><i class="bi bi-memory"></i> 64 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 2x 480 GB NVMe</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 10 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="pricings-card-wrapper" data-cores="4" data-threads="8" data-ram="16" data-price="82.40" data-storage="ssd" data-location="asia">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Asia Starter</h3>
                        <div class="price-tag" id="plan-6-price">$82.40<span class="price-duration">/mo</span></div>
                        <div class="location-badge">Asia</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 4 Cores / 8 Threads</li>
                            <li><i class="bi bi-memory"></i> 16 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 1x 480 GB SSD</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 1 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="pricings-card-wrapper" data-cores="32" data-threads="64" data-ram="256" data-price="295.70" data-storage="nvme" data-location="asia">
                <div class="pricings-card">
                    <div class="pricings-header">
                        <h3 class="plan-name">Asia Enterprise</h3>
                        <div class="price-tag" id="plan-7-price">$295.70<span class="price-duration">/mo</span></div>
                        <div class="location-badge">Asia</div>
                    </div>
                    <div class="pricings-features">
                        <ul>
                            <li><i class="bi bi-cpu"></i> 32 Cores / 64 Threads</li>
                            <li><i class="bi bi-memory"></i> 256 GB RAM DDR5</li>
                            <li><i class="bi bi-device-hdd"></i> 2x 1.9 TB NVMe SSD</li>
                            <li><i class="bi bi-globe"></i> 1 IPv4 Address</li>
                            <li><i class="bi bi-speedometer2"></i> 10 Gbps Network</li>
                        </ul>
                    </div>
                    <div class="pricings-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- No Results Message -->
        <div id="noResults" class="no-results-message" style="display: none;">
            <div class="alert">
                <i class="bi bi-exclamation-circle"></i>
                <p>No servers match your current filter criteria. Please adjust your filters.</p>
            </div>
        </div>
    </div>
</section>



<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<script>
    // Global Currency Converter for Hosting Site Pricing Plans

// Main pricing plans in USD
const pricingPlans = [
  { name: "Starter", price: 74.80, features: ["4 Cores / 8 Threads", "16 GB RAM DDR5", "1x 480 GB SSD", "F1 IPv4 Address",  "1 Gbps Network"] },
  { name: "Professional", price: 115.80, features: ["8 Cores / 16 Threads",  "64 GB RAM DDR5", "2x 960 GB SSD","F1 IPv4 Address", "1 Gbps Network"] },
  { name: "Enterprise", price: 174.25, features: ["16 Cores / 32 Threads", "128 GB RAM DDR5", "2x 960GB NVMe", "1 IPv4 Address", "10 Gbps Network"] },
  { name: "Ultra", price: 257.80, features: ["24 Cores / 48 Threads",  "256 GB RAM DDR5", "2x 960 GB NVMe SSD", "1 IPv4 Address", "10 Gbps Network"] },
  { name: "Euro Standard", price: 98.50, features: ["8 Cores / 16 Threads", "32 GB RAM DDR5",  "1x 960 GB SSD", "1 IPv4 Address", "1 Gbps Network"] },
  { name: "Euro Pro", price: 145.30, features: ["16 Cores / 32 Threads",  "64 GB RAM DDR5", "2x 480 GB NVMe", "1 IPv4 Address", "10 Gbps Network"] },
  { name: "Asia Starter", price: 82.40, features: ["4 Cores / 8 Threads", "16 GB RAM DDR5", "1x 480 GB SSD", "1 IPv4 Address", "1 Gbps Network"] },
  { name: "Asia Enterprise", price: 295.70, features: ["32 Cores / 64 Threads",  "256 GB RAM DDR5", "2x 1.9 TB NVMe SSD", "1 IPv4 Address", "10 Gbps Network"] }
];

// Replace the static exchangeRates object with this variable declaration
let exchangeRates = {};

// Add this function to fetch real-time exchange rates
async function fetchExchangeRates() {
  try {
    // Replace with your API endpoint and API key
    const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
    const data = await response.json();
    
    // Update the rates in your application
    exchangeRates = data.rates;
    
    // Update displayed prices with new rates
    const currentCurrency = document.getElementById('currency-selector').value;
    updatePrices(currentCurrency);
    
  } catch (error) {
    console.error('Error fetching exchange rates:', error);
    // Fallback to some default rates if the API call fails
  }
}

// Then in your existing DOMContentLoaded event listener, add the call to fetchExchangeRates:
document.addEventListener('DOMContentLoaded', function() {
  // Create currency selection dropdown
  const currencySelector = document.getElementById('currency-selector');
  
  if (currencySelector) {
    // Add event listener for currency changes
    currencySelector.addEventListener('change', function() {
      updatePrices(this.value);
    });
  }
  
  // Fetch real-time exchange rates
  fetchExchangeRates();
  
  // If you also want to keep the user currency detection:
  // detectUserCurrency();
});

// Currency symbols and formatting options
const currencyFormats = {
  USD: { symbol: '$', position: 'before', decimalPlaces: 2 },
  EUR: { symbol: '€', position: 'after', decimalPlaces: 2 },
  GBP: { symbol: '£', position: 'before', decimalPlaces: 2 },
  CAD: { symbol: 'C$', position: 'before', decimalPlaces: 2 },
  AUD: { symbol: 'A$', position: 'before', decimalPlaces: 2 },
  INR: { symbol: '₹', position: 'before', decimalPlaces: 2 },
  JPY: { symbol: '¥', position: 'before', decimalPlaces: 0 },
  CNY: { symbol: '¥', position: 'before', decimalPlaces: 2 },
  BRL: { symbol: 'R$', position: 'before', decimalPlaces: 2 },
  MXN: { symbol: 'Mex$', position: 'before', decimalPlaces: 2 },
  RUB: { symbol: '₽', position: 'after', decimalPlaces: 2 },
  ZAR: { symbol: 'R', position: 'before', decimalPlaces: 2 },
  SGD: { symbol: 'S$', position: 'before', decimalPlaces: 2 },
  NZD: { symbol: 'NZ$', position: 'before', decimalPlaces: 2 },
  CHF: { symbol: 'CHF', position: 'before', decimalPlaces: 2 },
  HKD: { symbol: 'HK$', position: 'before', decimalPlaces: 2 },
  SEK: { symbol: 'kr', position: 'after', decimalPlaces: 2 },
  NOK: { symbol: 'kr', position: 'after', decimalPlaces: 2 },
  DKK: { symbol: 'kr', position: 'after', decimalPlaces: 2 },
  PLN: { symbol: 'zł', position: 'after', decimalPlaces: 2 },
  THB: { symbol: '฿', position: 'before', decimalPlaces: 2 },
  KRW: { symbol: '₩', position: 'before', decimalPlaces: 0 },
  IDR: { symbol: 'Rp', position: 'before', decimalPlaces: 0 },
  SAR: { symbol: '﷼', position: 'after', decimalPlaces: 2 },
  AED: { symbol: 'د.إ', position: 'after', decimalPlaces: 2 },
  MYR: { symbol: 'RM', position: 'before', decimalPlaces: 2 },
  PHP: { symbol: '₱', position: 'before', decimalPlaces: 2 },
  TRY: { symbol: '₺', position: 'before', decimalPlaces: 2 },
  EGP: { symbol: 'E£', position: 'before', decimalPlaces: 2 },
  PKR: { symbol: '₨', position: 'before', decimalPlaces: 2 },
  NGN: { symbol: '₦', position: 'before', decimalPlaces: 2 },
  CLP: { symbol: 'CLP$', position: 'before', decimalPlaces: 0 },
  COP: { symbol: 'COL$', position: 'before', decimalPlaces: 0 },
  ARS: { symbol: 'ARS$', position: 'before', decimalPlaces: 2 },
  PEN: { symbol: 'S/', position: 'before', decimalPlaces: 2 },
  VND: { symbol: '₫', position: 'after', decimalPlaces: 0 },
  ILS: { symbol: '₪', position: 'before', decimalPlaces: 2 },
  CZK: { symbol: 'Kč', position: 'after', decimalPlaces: 2 },
  HUF: { symbol: 'Ft', position: 'after', decimalPlaces: 0 },
  RON: { symbol: 'lei', position: 'after', decimalPlaces: 2 },
  BGN: { symbol: 'лв', position: 'after', decimalPlaces: 2 },
  HRK: { symbol: 'kn', position: 'after', decimalPlaces: 2 },
  ISK: { symbol: 'kr', position: 'after', decimalPlaces: 0 },
  UAH: { symbol: '₴', position: 'after', decimalPlaces: 2 },
  QAR: { symbol: '﷼', position: 'after', decimalPlaces: 2 },
  KWD: { symbol: 'د.ك', position: 'after', decimalPlaces: 3 },
  BHD: { symbol: 'BD', position: 'before', decimalPlaces: 3 },
  OMR: { symbol: '﷼', position: 'after', decimalPlaces: 3 },
  JOD: { symbol: 'JD', position: 'before', decimalPlaces: 3 },
  KZT: { symbol: '₸', position: 'after', decimalPlaces: 2 },
  BDT: { symbol: '৳', position: 'before', decimalPlaces: 2 },
  LKR: { symbol: '₨', position: 'before', decimalPlaces: 2 },
  KES: { symbol: 'KSh', position: 'before', decimalPlaces: 2 },
  GHS: { symbol: '₵', position: 'before', decimalPlaces: 2 },
  UGX: { symbol: 'USh', position: 'before', decimalPlaces: 0 },
  TZS: { symbol: 'TSh', position: 'before', decimalPlaces: 0 },
  ETB: { symbol: 'Br', position: 'before', decimalPlaces: 2 },
  XOF: { symbol: 'CFA', position: 'after', decimalPlaces: 0 },
  XAF: { symbol: 'FCFA', position: 'after', decimalPlaces: 0 }
};

// Country to currency mapping
const countryCurrencyMap = {
  'US': 'USD', 'CA': 'CAD', 'GB': 'GBP', 'AU': 'AUD', 'NZ': 'NZD',
  'IN': 'INR', 'JP': 'JPY', 'CN': 'CNY', 'BR': 'BRL', 'MX': 'MXN',
  'RU': 'RUB', 'ZA': 'ZAR', 'SG': 'SGD', 'CH': 'CHF', 'HK': 'HKD',
  'SE': 'SEK', 'NO': 'NOK', 'DK': 'DKK', 'PL': 'PLN', 'TH': 'THB',
  'KR': 'KRW', 'ID': 'IDR', 'SA': 'SAR', 'AE': 'AED', 'MY': 'MYR',
  'PH': 'PHP', 'TR': 'TRY', 'EG': 'EGP', 'PK': 'PKR', 'NG': 'NGN',
  'CL': 'CLP', 'CO': 'COP', 'AR': 'ARS', 'PE': 'PEN', 'VN': 'VND',
  'IL': 'ILS', 'CZ': 'CZK', 'HU': 'HUF', 'RO': 'RON', 'BG': 'BGN',
  'HR': 'HRK', 'IS': 'ISK', 'UA': 'UAH', 'QA': 'QAR', 'KW': 'KWD',
  'BH': 'BHD', 'OM': 'OMR', 'JO': 'JOD', 'KZ': 'KZT', 'BD': 'BDT',
  'LK': 'LKR', 'KE': 'KES', 'GH': 'GHS', 'UG': 'UGX', 'TZ': 'TZS',
  'ET': 'ETB', 'BJ': 'XOF', 'BF': 'XOF', 'CI': 'XOF', 'GW': 'XOF',
  'ML': 'XOF', 'NE': 'XOF', 'SN': 'XOF', 'TG': 'XOF', 'CM': 'XAF',
  'CF': 'XAF', 'TD': 'XAF', 'CG': 'XAF', 'GQ': 'XAF', 'GA': 'XAF',
  // Euro countries
  'DE': 'EUR', 'FR': 'EUR', 'IT': 'EUR', 'ES': 'EUR', 'PT': 'EUR',
  'NL': 'EUR', 'BE': 'EUR', 'AT': 'EUR', 'GR': 'EUR', 'IE': 'EUR',
  'FI': 'EUR', 'SK': 'EUR', 'SI': 'EUR', 'LT': 'EUR', 'LV': 'EUR',
  'EE': 'EUR', 'CY': 'EUR', 'MT': 'EUR', 'LU': 'EUR', 'MC': 'EUR'
};

/**
 * Format price according to currency formatting rules
 */
function formatPrice(price, currency) {
  const format = currencyFormats[currency] || { symbol: currency, position: 'before', decimalPlaces: 2 };
  const formattedNumber = price.toFixed(format.decimalPlaces);
  
  return format.position === 'before' 
    ? `${format.symbol}${formattedNumber}`
    : `${formattedNumber} ${format.symbol}`;
}

/**
 * Convert price from USD to target currency
 */
function convertPrice(priceInUSD, targetCurrency) {
  if (!exchangeRates[targetCurrency]) {
    console.error(`Currency ${targetCurrency} not supported`);
    return priceInUSD; // Return original price if currency not found
  }
  
  return priceInUSD * exchangeRates[targetCurrency];
}

/**
 * Update displayed prices based on selected currency
 */
function updatePrices(currency) {
  pricingPlans.forEach((plan, index) => {
    const convertedPrice = convertPrice(plan.price, currency);
    const formattedPrice = formatPrice(convertedPrice, currency);
    
    // Update price display in DOM
    const priceElement = document.getElementById(`plan-${index}-price`);
    if (priceElement) {
      priceElement.textContent = formattedPrice;
    }
  });
  
  // Update currency selection display
  const currencyDisplay = document.getElementById('selected-currency');
  if (currencyDisplay) {
    currencyDisplay.textContent = currency;
  }
}

/**
 * Get user's country and set appropriate currency
 * This uses the ip-api.com service which has free tier limitations
 */
function detectUserCurrency() {
  fetch('http://ip-api.com/json/?fields=countryCode')
    .then(response => response.json())
    .then(data => {
      let currency = 'USD'; // Default
      
      if (countryCurrencyMap[data.countryCode]) {
        currency = countryCurrencyMap[data.countryCode];
      }
      
      // Update currency selector and prices
      const currencySelector = document.getElementById('currency-selector');
      if (currencySelector) {
        currencySelector.value = currency;
      }
      
      updatePrices(currency);
    })
    .catch(error => {
      console.error('Error detecting user location:', error);
      updatePrices('USD'); // Fallback to USD
    });
}

/**
 * Initialize the currency converter when the page loads
 */
document.addEventListener('DOMContentLoaded', function() {
  // Create currency selection dropdown
  const currencySelector = document.getElementById('currency-selector');
  
  if (currencySelector) {
    // Add event listener for currency changes
    currencySelector.addEventListener('change', function() {
      updatePrices(this.value);
    });
  }
  
  // Try to detect user's currency automatically
  detectUserCurrency();
});

/**
 * Format price according to currency formatting rules with thousand separators
 */
function formatPrice(price, currency) {
  const format = currencyFormats[currency] || { symbol: currency, position: 'before', decimalPlaces: 2 };
  
  // Format the number with proper decimal places
  let formattedNumber = price.toFixed(format.decimalPlaces);
  
  // Add thousand separators
  // Split number into integer and decimal parts
  const parts = formattedNumber.split('.');
  // Add commas to the integer part
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  // Rejoin with decimal part if it exists
  formattedNumber = parts.join('.');
  
  // Apply currency symbol in the correct position
  return format.position === 'before' 
    ? `${format.symbol}${formattedNumber}`
    : `${formattedNumber} ${format.symbol}`;
}
  </script>
<script defer>
    
    document.addEventListener('DOMContentLoaded', function() {
    // Modal Elements
    const filterBtn = document.querySelector('.filter-btn-mobile');
    const filterModal = document.getElementById('filterModal');
    const closeModal = document.querySelector('.close-modal');
    
    // Show modal when filter button is clicked
    filterBtn.addEventListener('click', function() {
        filterModal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    });
    
    // Close modal when X is clicked
    closeModal.addEventListener('click', function() {
        filterModal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore scrolling
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target == filterModal) {
            filterModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Restore scrolling
        }
    });
    
    // Slider functionality for desktop
    setupSlider('coresSlider', 'coresValue', '+');
    setupSlider('threadsSlider', 'threadsValue', '+');
    setupSlider('ramSlider', 'ramValue', '+');
    setupSlider('priceSlider', 'priceValue', '');
    
    // Slider functionality for mobile modal
    setupSlider('coresSliderModal', 'coresValueModal', '+');
    setupSlider('threadsSliderModal', 'threadsValueModal', '+');
    setupSlider('ramSliderModal', 'ramValueModal', '+');
    setupSlider('priceSliderModal', 'priceValueModal', '');
    
    // Sync values between desktop and mobile modal
    syncFilters();
    
    // Reset filters functionality
    document.getElementById('resetFilters').addEventListener('click', resetAllFilters);
    document.getElementById('resetFiltersModal').addEventListener('click', resetAllFilters);
    
    // Apply filters functionality
    document.getElementById('applyFilters').addEventListener('click', applyFilters);
    document.getElementById('applyFiltersModal').addEventListener('click', function() {
        applyFilters();
        filterModal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore scrolling
    });
});

// Function to setup slider behavior
function setupSlider(sliderId, valueId, suffix) {
    const slider = document.getElementById(sliderId);
    const output = document.getElementById(valueId);
    
    // Update the current slider value
    output.innerHTML = slider.value + suffix;
    
    slider.oninput = function() {
        output.innerHTML = this.value + suffix;
    };
}

// Function to sync filters between desktop and mobile
function syncFilters() {
    // Create pairs of desktop and modal elements
    const pairs = [
        { desktop: 'coresSlider', modal: 'coresSliderModal' },
        { desktop: 'threadsSlider', modal: 'threadsSliderModal' },
        { desktop: 'ramSlider', modal: 'ramSliderModal' },
        { desktop: 'priceSlider', modal: 'priceSliderModal' },
        { desktop: 'ssdFilter', modal: 'ssdFilterModal' },
        { desktop: 'nvmeFilter', modal: 'nvmeFilterModal' },
        { desktop: 'locationFilter', modal: 'locationFilterModal' }
    ];
    
    // Sync initial values
    pairs.forEach(pair => {
        const desktopEl = document.getElementById(pair.desktop);
        const modalEl = document.getElementById(pair.modal);
        
        if (desktopEl.type === 'range' || desktopEl.type === 'select-one') {
            modalEl.value = desktopEl.value;
        } else if (desktopEl.type === 'checkbox') {
            modalEl.checked = desktopEl.checked;
        }
    });
    
    // Setup event listeners for two-way syncing
    pairs.forEach(pair => {
        const desktopEl = document.getElementById(pair.desktop);
        const modalEl = document.getElementById(pair.modal);
        
        desktopEl.addEventListener('input', function() {
            if (desktopEl.type === 'range' || desktopEl.type === 'select-one') {
                modalEl.value = desktopEl.value;
                
                // Also update display value for sliders
                if (desktopEl.type === 'range') {
                    const desktopValueId = pair.desktop.replace('Slider', 'Value');
                    const modalValueId = pair.modal.replace('Slider', 'Value');
                    const suffix = desktopValueId === 'priceValue' ? '' : '+';
                    
                    document.getElementById(modalValueId).textContent = desktopEl.value + suffix;
                }
            } else if (desktopEl.type === 'checkbox') {
                modalEl.checked = desktopEl.checked;
            }
        });
        
        modalEl.addEventListener('input', function() {
            if (modalEl.type === 'range' || modalEl.type === 'select-one') {
                desktopEl.value = modalEl.value;
                
                // Also update display value for sliders
                if (modalEl.type === 'range') {
                    const desktopValueId = pair.desktop.replace('Slider', 'Value');
                    const modalValueId = pair.modal.replace('Slider', 'Value');
                    const suffix = desktopValueId === 'priceValue' ? '' : '+';
                    
                    document.getElementById(desktopValueId).textContent = modalEl.value + suffix;
                }
            } else if (modalEl.type === 'checkbox') {
                desktopEl.checked = modalEl.checked;
            }
        });
    });
}

// Function to reset all filters
function resetAllFilters() {
    // Reset desktop sliders
    document.getElementById('coresSlider').value = 4;
    document.getElementById('threadsSlider').value = 8;
    document.getElementById('ramSlider').value = 16;
    document.getElementById('priceSlider').value = 300;
    
    // Reset modal sliders
    document.getElementById('coresSliderModal').value = 4;
    document.getElementById('threadsSliderModal').value = 8;
    document.getElementById('ramSliderModal').value = 16;
    document.getElementById('priceSliderModal').value = 300;
    
    // Reset slider values
    document.getElementById('coresValue').textContent = '4+';
    document.getElementById('threadsValue').textContent = '8+';
    document.getElementById('ramValue').textContent = '16+';
    document.getElementById('priceValue').textContent = '300';
    
    document.getElementById('coresValueModal').textContent = '4+';
    document.getElementById('threadsValueModal').textContent = '8+';
    document.getElementById('ramValueModal').textContent = '16+';
    document.getElementById('priceValueModal').textContent = '300';
    
    // Reset checkboxes
    document.getElementById('ssdFilter').checked = true;
    document.getElementById('nvmeFilter').checked = true;
    document.getElementById('ssdFilterModal').checked = true;
    document.getElementById('nvmeFilterModal').checked = true;
    
    // Reset select dropdown
    document.getElementById('locationFilter').value = 'all';
    document.getElementById('locationFilterModal').value = 'all';
}

// Function to apply filters
function applyFilters() {
    const filters = {
        cores: parseInt(document.getElementById('coresSlider').value),
        threads: parseInt(document.getElementById('threadsSlider').value),
        ram: parseInt(document.getElementById('ramSlider').value),
        price: parseFloat(document.getElementById('priceSlider').value),
        ssd: document.getElementById('ssdFilter').checked,
        nvme: document.getElementById('nvmeFilter').checked,
        location: document.getElementById('locationFilter').value
    };

    const cards = document.querySelectorAll('#pricingsmain-container > div');
    let visibleCards = 0;

    cards.forEach(card => {
        const matchesCores = parseInt(card.dataset.cores) >= filters.cores;
        const matchesThreads = parseInt(card.dataset.threads) >= filters.threads;
        const matchesRam = parseInt(card.dataset.ram) >= filters.ram;
        const matchesPrice = parseFloat(card.dataset.price) <= filters.price;
        const matchesStorage = (filters.ssd && card.dataset.storage === 'ssd') || 
                             (filters.nvme && card.dataset.storage === 'nvme');
        const matchesLocation = filters.location === 'all' || card.dataset.location === filters.location;

        if (matchesCores && matchesThreads && matchesRam && matchesPrice && matchesStorage && matchesLocation) {
            card.style.display = 'block';
            visibleCards++;
        } else {
            card.style.display = 'none';
        }
    });

    // Show/hide no results message
    const noResults = document.getElementById('noResults');
    noResults.style.display = visibleCards === 0 ? 'block' : 'none';
}
</script>
</body>