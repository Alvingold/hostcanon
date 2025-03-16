<style>
    body.loading {
        overflow: hidden;
    }

    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        z-index: 99999;
        animation: fadeOut 1s ease-in-out forwards;
        animation-delay: 4.5s;
    }

    .preloader-content {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .floating-logo {
        width: 120px;
        height: 120px;
        position: relative;
        animation: logoAnimation 3s ease-in-out forwards;
    }

    .logo {
        width: 100%;
        height: 100%;
        filter: drop-shadow(0 0 10px rgba(0,0,0,0.2));
        animation: pulse 2s ease-in-out infinite;
    }

    .site-name {
        font-size: 3rem;
        font-weight: bold;
        display: flex;
        gap: 2px;
    }

    .site-name span {
        opacity: 0;
        transform: translateY(20px);
        display: inline-block;
        animation: letterReveal 0.5s ease-in-out forwards;
    }

    .site-name span:nth-child(1) { animation-delay: 2.1s; }
    .site-name span:nth-child(2) { animation-delay: 2.2s; }
    .site-name span:nth-child(3) { animation-delay: 2.3s; }
    .site-name span:nth-child(4) { animation-delay: 2.4s; }
    .site-name span:nth-child(5) { animation-delay: 2.5s; }
    .site-name span:nth-child(6) { animation-delay: 2.6s; }
    .site-name span:nth-child(7) { animation-delay: 2.7s; }
    .site-name span:nth-child(8) { animation-delay: 2.8s; }
    .site-name span:nth-child(9) { animation-delay: 2.9s; }
    .site-name span:nth-child(10) { animation-delay: 3.0s; }

    .network {
        margin-left: 15px;
        color: #4a90e2;
        animation-delay: 3.2s !important;
    }

    @keyframes logoAnimation {
        0% {
            transform: translateX(0) scale(1) rotate(0);
        }
        30% {
            transform: translateX(0) scale(1.2) rotate(360deg);
        }
        60% {
            transform: translateX(-40px) scale(1) rotate(360deg);
        }
        100% {
            transform: translateX(-40px) scale(1) rotate(360deg);
        }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    @keyframes letterReveal {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            visibility: hidden;
        }
    }

    @media only screen and (max-width: 767px) {
        .preloader-content {
            gap: 15px;
            padding: 0 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .floating-logo {
            width: 60px;
            height: 60px;
        }

        .site-name {
            font-size: 1.5rem;
            text-align: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .network {
            margin-left: 5px;
        }

        @keyframes logoAnimation {
            0% {
                transform: translateX(0) scale(1) rotate(0);
            }
            30% {
                transform: translateX(0) scale(1.2) rotate(360deg);
            }
            60% {
                transform: translateX(-20px) scale(1) rotate(360deg);
            }
            100% {
                transform: translateX(-20px) scale(1) rotate(360deg);
            }
        }
    }
</style>

<div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-content">
        <div class="floating-logo">
            <img src="./assets/media/favicon.png" alt="Logo" class="logo">
        </div>
        <div class="site-name">
            <span>A</span><span>f</span><span>r</span><span>i</span><span>P</span><span>o</span><span>r</span><span>t</span><span>a</span><span>l</span>
            <span class="network">Network</span>
        </div>
    </div>
</div>


<script>
    document.body.classList.add('loading');

    window.addEventListener("load", function () {
        const preloader = document.querySelector(".preloader");
        setTimeout(function () {
            preloader.remove();
            document.body.classList.remove('loading');
        }, 2500);
    });
</script>