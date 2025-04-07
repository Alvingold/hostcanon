<?php
// Calculate relative path to KB root
$currentPath = $_SERVER['PHP_SELF'];
$kbRoot = '/hostcanon/KB/';
$depth = substr_count(str_replace($kbRoot, '', $currentPath), '/');
$prefix = str_repeat('../', $depth);
?>
<style>
    /* KB Navigation Styles */
.kb-navbar {
    background: #4B0082;
    padding: 1rem 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.kb-navbar .nav-link {
    color: rgba(255,255,255,0.8) !important;
    font-weight: 500;
    padding: 0.5rem 1rem !important;
    transition: all 0.3s ease;
}

.kb-navbar .nav-link:hover,
.kb-navbar .nav-link.active {
    color: white !important;
}

    /* Hamburger Menu Styles */
    .navbar-toggler {
        border: none;
        padding: 0;
        width: 30px;
        height: 30px;
        position: relative;
        background: transparent;
    }

    .navbar-toggler:focus {
        box-shadow: none;
        outline: none;
    }

    .toggler-icon {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: #fff;  
        border-radius: 2px;
        opacity: 1;
        transition: .3s ease-in-out;  
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


/* Mobile responsiveness */
@media (max-width: 991.98px) {
    .kb-navbar .navbar-collapse {
        background: #4B0082;
        padding: 1rem;
        border-radius: 0 0 15px 15px;
    }
}
</style>
<nav class="kb-navbar navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $prefix; ?>../index.php">
            <img src="<?php echo $prefix; ?>../assets/media/afriportal.png" alt="Afriportal Logo" height="40">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kbNavbar">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="kbNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>knowledge-base.php">Knowledge Base Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>../contacts.php">Contact Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $prefix; ?>../index.php">Back to Main Site</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
