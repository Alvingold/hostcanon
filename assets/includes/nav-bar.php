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
            background:rgb(74, 1, 126);
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
            transform: none !important;
            padding: 0.5rem;
            margin: 0.5rem 0;
            border-radius: 8px;
        }

        .navbar .dropdown-menu.show {
            display: block;
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
        }

        .navbar .dropdown-item:hover{
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
        <a class="navbar-brand" href="/hostcanon/index.php">
            <img src="/hostcanon/assets/media/afriportal.png" alt="Afriportal Logo" height="40">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/hostcanon/domain.php">Domain</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-expanded="false">Hosting</a>
                    <ul class="dropdown-menu">
                        <div class="menu-grid">
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="/hostcanon/shared-hosting.php">
                                    <i class="bi bi-globe"></i>
                                    <div>
                                        <strong>Shared Hosting</strong>
                                        <small>Affordable shared hosting</small>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item" href="/hostcanon/wordpress-hosting.php">
                                    <i class="bi bi-wordpress"></i>
                                    <div>
                                        <strong>WordPress Hosting</strong>
                                        <small>Managed WordPress hosting</small>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item" href="/hostcanon/email-hosting.php">
                                <i class="bi bi-envelope"></i>
                                <div>
                                    <strong>Email Hosting</strong>
                                    <small>Promote your business with email hosting</small>
                                </div>
                                </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="#">
                                    <i class="bi bi-server"></i>
                                    <div>
                                        <strong>Vps Hosting</strong>
                                        <small>High performance VPS hosting</small>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item" href="/hostcanon/ecommerce-hosting.php">
                                <i class="bi bi-shop"></i>
                                <div>
                                    <strong>Ecommerce Hosting</strong>
                                    <small>Managed e-commerce hosting solutions.</small>
                                </div>
                                </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="/hostcanon/dedicated-hosting.php">
                                    <i class="bi bi-hdd-rack"></i>
                                    <div>
                                        <strong>Dedicated Hosting</strong>
                                        <small>High performance dedicated hosting</small>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item" href="/hostcanon/reseller-hosting.php">
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
                                <li><a class="dropdown-item" href="website-checker.php">
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
                                <li><a class="dropdown-item" href="/hostcanon/knowledge-base/index.php">
                                    <i class="bi bi-book"></i>
                                    <div>
                                        <strong>Knowledge Base</strong>
                                        <small>Empower yourself with self-help resources.</small>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item" href="/hostcanon/knowledge-base/faq.php">
                                    <i class="bi bi-question-circle"></i>
                                    <div>
                                        <strong>FAQ</strong>
                                        <small>Frequently asked questions</small>
                                    </div>
                                </a></li>
                            </div>
                            <div class="menu-group">
                                <li><a class="dropdown-item" href="/hostcanon/contacts.php">
                                    <i class="bi bi-envelope"></i>
                                    <div>
                                        <strong>Contact Us</strong>
                                        <small>Get in touch with us</small>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item" href="/hostcanon/server-support.php">
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
        </div>
    </div>
</nav>

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
    });
</script>