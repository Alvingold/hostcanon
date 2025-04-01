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
        transition: all 0.3s ease-out;
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
            <img src="/hostcanon/assets/media/preloader.gif" alt="Logo" class="logo" width="150" height="150">
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.body.classList.remove('loading');
            setTimeout(() => {
                const preloader = document.querySelector('.preloader');
                if (preloader) preloader.remove();
            }, 300);
        }, 300);
    });
</script>
