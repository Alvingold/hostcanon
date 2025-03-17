<style>
    body.loading {
        overflow: hidden;
    }

    .preloader {
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: #fff;
        z-index: 99999;
        align-items: center;
        justify-content: center;
        opacity: 1;
        transition: all 0.5s ease-in-out;
    }
    
    body:not(.loading) .preloader {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    .floating-logo {
        width: 150px; 
        height: 150px; 
        position: relative;
        animation: float 3s ease-in-out forwards;
    }

    .logo {
        width: 100%;
        height: 100%;
    }

    @keyframes float {
        0%, 100% {
        transform: translateY(0);
        }
        50% {
        transform: translateY(-20px);
        }
    }

    @media screen and (max-width: 768px) {
        .floating-logo {
            width: 75px; 
            height: 75px; 
            margin-left: 15px; 
        }
    }
</style>

<div class="preloader">
    <div class="preloader-content">
        <div class="floating-logo">
            <img src="/hostcanon/assets/media/preloader.gif" alt="Logo" class="logo">
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            document.body.classList.remove('loading');
            // To remove preloader from DOM after fade out
            setTimeout(function() {
                const preloader = document.querySelector('.preloader');
                if (preloader && preloader.parentNode) {
                    preloader.parentNode.removeChild(preloader);
                }
            }, 500);
        }, 500);
    });
</script>
