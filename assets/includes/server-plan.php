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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"> -->
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: content-box;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            overflow-x: hidden;
        }
    /* Base Styles */
    .pricings-section {
    padding: 60px 0;
    background: #f8f9fa;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.section-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #333;
}
.section-subtitle {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 1.5rem;
}

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
    background: transparent;
    border: 1px solid #ccc;
    border-radius: 20px;
    padding: 6px 14px;
    font-size: 0.85rem;
    cursor: pointer;
    transition: all 0.2s;
}
.btn-reset:hover {
    background: #f0f0f0;
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
    margin: 10% auto;
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

/* pricings Card Styles */
.pricings-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: center;
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
.pricings-card-wrapper {
    flex: 0 0 100%;
    padding: 15px;
    max-width: 350px;
}

@media (min-width: 768px) {
    .pricings-card-wrapper {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (min-width: 992px) {
    .pricings-card-wrapper {
        flex: 0 0 25%;
        max-width: 25%;
    }
}
.popular-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #4B0082;
    color: white;
    padding: 0.3rem 0.7rem;
    font-size: 0.7rem;
    font-weight: 600;
    border-radius: 20px;
    z-index: 10;
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
    margin-bottom: 0.5rem;
    position: relative;
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
    background: linear-gradient(135deg, #3a006a, #7f267a);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(75, 0, 130, 0.2);
}

/* No Results Message */
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

/* Column definitions */
.col-lg-3, .col-md-6 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

/* Responsive adjustments */
@media (min-width: 768px) {
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (min-width: 992px) {
    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
}

/* Card responsive styles */
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

@media (max-width: 992px) {
    .pricings-card {
        margin-bottom: 25px;
        min-height: auto;
    }
    .pricings-card.popular {
        transform: none;
    }
    .pricings-header {
        padding: 1.2rem 0.8rem;
    }
    .pricings-header h3 {
        font-size: 1.1rem;
    }
    .price-tag {
        font-size: 1.6rem;
    }
    .pricings-features {
        padding: 1rem;
    }
    .btn-primary {
        padding: 0.7rem 1.5rem;
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .pricings-section {
        padding: 30px 15px;
    }
    .section-title {
        font-size: 1.4rem;
    }
    .section-subtitle {
        font-size: 1rem;
    }
    .pricings-card {
        max-width: 400px;
        margin: 0 auto 20px;
    }
    .pricings-features li i {
        width: 20px;
        height: 20px;
        font-size: 0.8rem;
    }
    .pricings-footer {
        padding: 0 1rem 1rem;
    }
}

@media (max-width: 576px) {
    .pricings-card {
        margin-bottom: 15px;
    }
    .pricings-header h3 {
        font-size: 1rem;
    }
    .price-tag {
        font-size: 1.4rem;
    }
    .price-duration {
        font-size: 0.7rem;
    }
    .pricings-features li {
        font-size: 0.8rem;
        padding: 0.5rem 0;
        gap: 0.5rem;
    }
    .btn-primary {
        padding: 0.6rem 1.2rem;
        font-size: 0.85rem;
    }
    .popular-badge {
        font-size: 0.65rem;
        padding: 0.2rem 0.5rem;
    }
    .location-badge {
        font-size: 0.65rem;
        padding: 1px 6px;
    }
}

/* main-container and utility classes */
.main-container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .main-container {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .main-container {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .main-container {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .main-container {
        max-width: 1140px;
    }
}

.text-center {
    text-align: center;
}
.mb-4 {
    margin-bottom: 1.5rem;
}
.mb-5 {
    margin-bottom: 3rem;
}

/* Filter modal styles */
.filter-modal-trigger {
    display: none;
    width: 100%;
    padding: 12px 20px;
    background: #4B0082;
    color: white;
    border: none;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
}

@media (max-width: 768px) {
    .filter-section {
        display: none;
    }
    .filter-modal-trigger {
        display: block;
    }
    body.modal-open {
        overflow: hidden;
    }
}


/* Add these rules to your existing CSS */
.pricings-card-wrapper {
    flex: 0 0 100%;
    padding: 15px;
    max-width: 350px;
    /* Add this to ensure minimal width */
    min-width: 200px;
}

.pricings-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: flex-start; /* Change from center to flex-start */
    gap: 20px; /* Add consistent gap between cards */
}

/* Update the media queries */
@media (min-width: 768px) {
    .pricings-card-wrapper {
        flex: 0 0 calc(50% - 40px); /* Account for gap */
        max-width: calc(50% - 40px);
    }
}

@media (min-width: 992px) {
    .pricings-card-wrapper {
        flex: 0 0 calc(25% - 40px); /* Account for gap */
        max-width: calc(25% - 40px);
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
                        <h3>Starter</h3>
                        <div class="price-tag">$74.80<span class="price-duration">/mo</span></div>
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
                        <h3>Professional</h3>
                        <div class="price-tag">$115.80<span class="price-duration">/mo</span></div>
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
                        <h3>Enterprise</h3>
                        <div class="price-tag">$174.25<span class="price-duration">/mo</span></div>
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
                        <h3>Ultra</h3>
                        <div class="price-tag">$257.80<span class="price-duration">/mo</span></div>
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
                        <h3>Euro Standard</h3>
                        <div class="price-tag">$98.50<span class="price-duration">/mo</span></div>
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
                        <h3>Euro Pro</h3>
                        <div class="price-tag">$145.30<span class="price-duration">/mo</span></div>
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
                        <h3>Asia Starter</h3>
                        <div class="price-tag">$82.40<span class="price-duration">/mo</span></div>
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
                        <h3>Asia Enterprise</h3>
                        <div class="price-tag">$295.70<span class="price-duration">/mo</span></div>
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