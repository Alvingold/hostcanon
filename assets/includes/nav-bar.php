<?php
//To  Determine if we're in a subdirectory by checking if KB/ or get-started/ is in the current path
$isInSubdir = (strpos($_SERVER['PHP_SELF'], '/KB/') !== false || strpos($_SERVER['PHP_SELF'], '/get-started/') !== false);
$prefix = $isInSubdir ? '../' : '';
?>

<style>
    .navbar {
        background: transparent;
        transition: all 0.3s ease-in-out;
        padding: 1.5rem 0;
    }

    .navbar.scrolled {
        background: #4B0082;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    /* Logo */
    .navbar-brand img {
        height: 50px;
        transition: all 0.3s ease-in-out;
    }

    .navbar.scrolled .navbar-brand img {
        height: 45px;
    }

    /* Nav Links */
    .nav-link {
        color: white !important;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link:hover {
        color: orange !important;
    }

    .nav-link:hover::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 30%;
        height: 2px;
        background: orange;
        border-radius: 2px;
        transition: width 0.3s ease;
    }

    /* User Actions Section */
    .user-actions {
        display: flex;
        align-items: center;
        margin-left: 1.5rem;
    }

    /* Search Button */
    .search-btn {
        background: transparent;
        border: none;
        color: white;
        padding: 0.5rem;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }


    .search-btn:hover {
        color: orange;
    }

    .cart-btn {
        position: relative;
        background: transparent;
        border: none;
        color: white;
        padding: 0.5rem;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }

    .cart-btn:hover {
        color: orange;
        transform: scale(1.1);
    }

    .cart-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: orange;
        color: #4B0082;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        font-size: 0.7rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    /* Auth Buttons */
    .auth-btn {
        color: white;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        padding: 0.5rem 1.2rem;
        margin-left: 0.5rem;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 0.9rem;
        text-decoration: none;;
    }

    .auth-btn:hover {
        background: orange;
        color: #4B0082;
        border-color: orange;
        transform: translateY(-2px);
    }

    .auth-btn.signup {
        background: orange;
        color: #4B0082;
        border-color: orange;
    }

    .auth-btn.signup:hover {
        background: #ffb733;
    }

    /* Search Modal */
    .search-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(75, 0, 130, 0.98);
        z-index: 2000;
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .search-modal.show {
        display: flex;
        opacity: 1;
    }

    .search-modal-content {
        width: 80%;
        max-width: 800px;
        margin: auto;
    }

    .search-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .search-modal-header h3 {
        color: white;
        margin: 0;
    }

    .search-modal-close {
        background: transparent;
        border: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .search-modal-close:hover {
        color: orange;
        transform: rotate(90deg);
    }

    .search-form {
        position: relative;
    }

    .search-input {
        width: 100%;
        padding: 1rem 1.5rem;
        border: none;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .search-input:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 0 15px rgba(255, 165, 0, 0.3);
        border-color: rgba(255, 165, 0, 0.5);
    }

    .search-submit {
        position: absolute;
        right: 5px;
        top: 5px;
        border: none;
        background: orange;
        color: #4B0082;
        border-radius: 50px;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .search-submit:hover {
        background: #ffb733;
        transform: scale(1.05);
    }

    /* Dropdown Styles */
    @media (min-width: 992px) {
        .navbar .nav-item.dropdown {
            position: static;
        }

        .navbar .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -15px;
            left: 0;
            right: 0;
            height: 15px;
        }

        .navbar .dropdown-menu {
            display: block !important;
            visibility: hidden;
            opacity: 0;
            transform: translateY(-1rem);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            pointer-events: none;
            margin-top: 15px !important;
        }

        .navbar .dropdown:hover .dropdown-menu,
        .navbar .dropdown-menu:hover {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .navbar .dropdown-menu .menu-grid {
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.2s ease-out 0.1s;
        }

        .navbar .dropdown:hover .menu-grid {
            opacity: 1;
            transform: translateY(0);
        }

        .navbar .dropdown-menu {
            width: 100%;
            padding: 2rem;
            margin-top: 1rem !important;
            border: none;
            border-radius: 0 0 15px 15px;
            background: rgb(74, 1, 126);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .navbar .dropdown-menu .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        /* Dropdown Items */
        .navbar .dropdown-menu .dropdown-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 1.2rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }

        /* Icons */
        .navbar .dropdown-menu .dropdown-item i {
            width: 45px;
            height: 45px;
            font-size: 1.25rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        /* Hover Effects */
        .navbar .dropdown-menu .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .navbar .dropdown-menu .dropdown-item:hover i {
            background: orange;
            color: #4B0082;
            transform: scale(1.1);
        }

        .navbar .dropdown-menu .dropdown-item div {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .navbar .dropdown-menu .dropdown-item strong {
            font-size: 1rem;
            color: white;
        }

        .navbar .dropdown-menu .dropdown-item small {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
        }
    }

    /* Mobile Styles */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: #4B0082;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
            max-height: calc(100vh - 100px);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
        }

        .navbar-collapse::-webkit-scrollbar {
            width: 5px;
        }

        .navbar-collapse::-webkit-scrollbar-track {
            background: transparent;
        }

        .navbar-collapse::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
        }

        .navbar .dropdown-menu {
            display: none;
            background: rgba(255, 255, 255, 0.05);
            padding: 0;
            margin: 0;
            border: none;
            max-height: none;
            position: static;
            padding: 0.5rem;
            margin: 0.5rem 0;
            border-radius: 8px;
        }

        .navbar .dropdown-menu.show {
            display: block;
            animation: slideDown 0.3s ease forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar .menu-grid {
            display: block;
        }

        .navbar .menu-group {
            margin-bottom: 0;
        }

        .navbar .dropdown-item {
            padding: 0.8rem;
            margin: 0;
            border-radius: 0;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            color: white;
        }

        .navbar .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            color: #fff;
        }

        .navbar .dropdown-item i {
            width: 30px;
            height: 30px;
            font-size: 1rem;
        }

        .navbar .dropdown-item strong {
            font-size: 0.9rem;
        }

        .navbar .dropdown-item small {
            display: none;
        }


        /* Improved Mobile User Actions */
        .user-actions {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            margin: 1rem 0 0;

            /* Mobile User Actions */
            .user-actions .auth-btns {
                display: flex;
                gap: 0.5rem;
                margin-top: 1rem;
                width: 100%;
            }

            .user-actions .auth-btn {
                flex: 1;
                text-align: center;
                margin-left: 0;
            }

            .search-btn,
            .cart-btn {
                background: rgba(255, 255, 255, 0.05);
                border-radius: 8px;
                padding: 0.5rem;
                margin: 0 0.5rem 0 0;
            }
        }

        .user-actions .utility-btns {
            display: flex;
            align-items: center;
        }

        .user-actions .auth-btns {
            display: flex;
            gap: 0.5rem;
        }

        .search-btns,
        .cart-btn {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 0.7rem;
            margin-right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-btn {
            padding: 0.6rem 1rem;
            font-size: 0.85rem;
        }

        /* Improved navbar toggle */
        .navbar-toggler {
            margin-right: 0.5rem;
        }
    }


    .navbar .container {
        max-width: 1320px;
        margin: 0 auto;
        width: 100%;
        padding-right: var(--bs-gutter-x, 0.75rem);
        padding-left: var(--bs-gutter-x, 0.75rem);
    }

    /* removal of dropdown arrow */
    .navbar .dropdown-toggle::after,
    .navbar .dropdown-toggle::before {
        display: none !important;
    }

    @media (min-width: 992px) {
        .navbar .dropdown-menu {
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 100%;
            transform: none;
            padding: 2rem;
        }

        .navbar .dropdown-menu .menu-grid {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 0.75rem;
        }
    }

    /* Hamburger Menu Styles */
    .navbar-toggler {
        border: none;
        padding: 0;
        width: 30px;
        height: 30px;
        position: relative;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .toggler-icon {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: orange;
        border-radius: 1px;
        opacity: 1;
        transition: .25s ease-in-out;
    }

    .toggler-icon.top-bar {
        top: 25%;
    }

    .toggler-icon.middle-bar {
        top: 50%;
        transform: translateY(-50%);
    }

    .toggler-icon.bottom-bar {
        bottom: 25%;
    }

    .navbar-toggler.collapsed .top-bar {
        transform: rotate(0);
    }

    .navbar-toggler.collapsed .middle-bar {
        opacity: 1;
    }

    .navbar-toggler.collapsed .bottom-bar {
        transform: rotate(0);
    }

    .navbar-toggler:not(.collapsed) .top-bar {
        transform: rotate(45deg);
        transform-origin: 15%;
        top: 6px;
    }

    .navbar-toggler:not(.collapsed) .middle-bar {
        opacity: 0;
    }

    .navbar-toggler:not(.collapsed) .bottom-bar {
        transform: rotate(-45deg);
        transform-origin: 15%;
        bottom: 6px;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $prefix; ?>index.php">
            <img src="<?php echo $prefix; ?>assets/media/afriportal.png" alt="Afriportal Logo" height="40">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>domain.php">Domain</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-expanded="false">Hosting</a>
                    <ul class="dropdown-menu">
                        <div class="menu-grid">
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>shared-hosting.php">
                                        <i class="bi bi-globe"></i>
                                        <div>
                                            <strong>Shared Hosting</strong>
                                            <small>Affordable shared hosting</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>wordpress-hosting.php">
                                        <i class="bi bi-wordpress"></i>
                                        <div>
                                            <strong>WordPress Hosting</strong>
                                            <small>Managed WordPress hosting</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>email-hosting.php">
                                        <i class="bi bi-envelope"></i>
                                        <div>
                                            <strong>Email Hosting</strong>
                                            <small>Promote your business with email hosting</small>
                                        </div>
                                    </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>vps-hosting.php">
                                        <i class="bi bi-server"></i>
                                        <div>
                                            <strong>Vps Hosting</strong>
                                            <small>High performance VPS hosting</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>ecommerce-hosting.php">
                                        <i class="bi bi-shop"></i>
                                        <div>
                                            <strong>Ecommerce Hosting</strong>
                                            <small>Managed e-commerce hosting solutions.</small>
                                        </div>
                                    </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>dedicated-hosting.php">
                                        <i class="bi bi-hdd-rack"></i>
                                        <div>
                                            <strong>Dedicated Hosting</strong>
                                            <small>High performance dedicated hosting</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>reseller-hosting.php">
                                        <i class="bi bi-people"></i>
                                        <div>
                                            <strong>Reseller Hosting</strong>
                                            <small>Start your own hosting business</small>
                                        </div>
                                    </a></li>
                            </div>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle">Tools & Services</a>
                    <ul class="dropdown-menu">
                        <div class="menu-grid">
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>website-checker.php">
                                        <i class="bi bi-search"></i>
                                        <div>
                                            <strong>Website Checker</strong>
                                            <small>Website availability checker</small>
                                        </div>
                                    </a></li>
                            </div>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle">Support</a>
                    <ul class="dropdown-menu">
                        <div class="menu-grid">
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>KB/knowledge-base.php">
                                        <i class="bi bi-book"></i>
                                        <div>
                                            <strong>Knowledge Base</strong>
                                            <small>Empower yourself with self-help resources.</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>KB/faq.php">
                                        <i class="bi bi-question-circle"></i>
                                        <div>
                                            <strong>FAQ</strong>
                                            <small>Frequently asked questions</small>
                                        </div>
                                    </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>contacts.php">
                                        <i class="bi bi-envelope"></i>
                                        <div>
                                            <strong>Contact Us</strong>
                                            <small>Get in touch with us</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="<?php echo $prefix; ?>server-support.php">
                                        <i class="bi bi-hdd-network"></i>
                                        <div>
                                            <strong>Server Support</strong>
                                            <small>Technical assistance</small>
                                        </div>
                                    </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-newspaper"></i>
                                        <div>
                                            <strong>Blog</strong>
                                            <small>Learn something new every day.</small>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-ticket"></i>
                                        <div>
                                            <strong>Support Ticket</strong>
                                            <small>Create a new ticket</small>
                                        </div>
                                    </a></li>
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>

            <!-- New User Actions Section -->
            <div class="user-actions">
                <!-- Search Button -->
                <button type="button" class="search-btn" id="searchBtn">
                    <i class="bi bi-search"></i>
                </button>

                <!-- Cart Button -->
                <a href="<?php echo $prefix; ?>cart.php" class="cart-btn">
                    <i class="bi bi-cart"></i>
                    <span class="cart-badge">0</span>
                </a>

                <!-- Auth Buttons -->
                <div class="auth-btns">
                    <a href="<?php echo $prefix; ?>get-started/form.php" class="auth-btn signup">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Search Modal -->
<div class="search-modal" id="searchModal">
    <div class="search-modal-content">
        <div class="search-modal-header">
            <h3>Search Our Website</h3>
            <button type="button" class="search-modal-close" id="searchClose">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <form class="search-form">
            <input type="text" class="search-input" placeholder="What are you looking for?">
            <button type="submit" class="search-submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
    </div>
</div>

<script>
    // Scroll handler
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile dropdown handler
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Close other dropdowns
                dropdownToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        otherToggle.setAttribute('aria-expanded', 'false');
                        otherToggle.closest('.dropdown').querySelector('.dropdown-menu').classList.remove('show');
                    }
                });

                const menu = this.closest('.dropdown').querySelector('.dropdown-menu');
                menu.classList.toggle('show');
                this.setAttribute('aria-expanded', menu.classList.contains('show'));
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    menu.closest('.dropdown').querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
                });
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    menu.closest('.dropdown').querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
                });
            }
        });

        // Search Modal Functionality
        const searchBtn = document.getElementById('searchBtn');
        const searchModal = document.getElementById('searchModal');
        const searchClose = document.getElementById('searchClose');

        if (searchBtn && searchModal && searchClose) {
            searchBtn.addEventListener('click', function() {
                searchModal.classList.add('show');
                setTimeout(() => {
                    document.querySelector('.search-input').focus();
                }, 300);
            });

            searchClose.addEventListener('click', function() {
                searchModal.classList.remove('show');
            });

            // Close search modal when clicking outside
            searchModal.addEventListener('click', function(e) {
                if (e.target === searchModal) {
                    searchModal.classList.remove('show');
                }
            });

            // Close search modal with escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && searchModal.classList.contains('show')) {
                    searchModal.classList.remove('show');
                }
            });
        }
    });
</script>