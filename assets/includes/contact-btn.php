<div class="custom-contact-buttons">
    <div class="contact-btn main-btn" onclick="toggleContactButtons()">
        <span class="icon-wrapper">
            <i class="bi bi-chat-dots-fill chat-icon"></i>
            <i class="bi bi-x-lg close-icon"></i>
        </span>
    </div>
    <div class="contact-options">
        <div class="contact-btn call-btn" onclick="window.location.href='tel:09035726810'">
            <i class="bi bi-telephone-fill"></i>
        </div>
        <div class="contact-btn whatsapp-btn" onclick="window.location.href='https://wa.me/2347018031709'">
            <i class="bi bi-whatsapp"></i>
        </div>
        <div class="contact-btn facebook-btn" onclick="window.location.href='https://www.facebook.com/afriportalnetwork'">
            <i class="bi bi-facebook"></i>
        </div>
    </div>
</div>

<style>
    .custom-contact-buttons {
        position: fixed;
        left: 20px;
        bottom: 20px;
        z-index: 1000;
    }

    .contact-options {
        position: absolute;
        bottom: 60px;
        left: 5px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        opacity: 0;
        transform: translateY(20px);
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .contact-options.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
    }

    .contact-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: transform 0.3s ease;
        background: #932C8B;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .main-btn {
        position: relative;
        overflow: hidden;
    }

    .icon-wrapper {
        position: relative;
        width: 18px;
        height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chat-icon,
    .close-icon {
        position: absolute;
        transition: all 0.3s ease;
    }

    .chat-icon {
        opacity: 1;
        transform: rotate(0deg);
    }

    .close-icon {
        opacity: 0;
        transform: rotate(-180deg);
    }

    .main-btn.active .chat-icon {
        opacity: 0;
        transform: rotate(180deg);
    }

    .main-btn.active .close-icon {
        opacity: 1;
        transform: rotate(0deg);
    }

    .contact-btn:hover {
        transform: scale(1.1);
    }

    .contact-btn i {
        color: white;
        font-size: 18px;
    }

    .call-btn { background: #932C8B; }
    .whatsapp-btn { background: #25D366; }
    .facebook-btn { background: #1877F2; }
</style>

<script>
    function toggleContactButtons() {
        const options = document.querySelector('.contact-options');
        const mainBtn = document.querySelector('.main-btn');
        options.classList.toggle('show');
        mainBtn.classList.toggle('active');
    }

    // Close contact options when outside is clicked
    document.addEventListener('click', function(event) {
        const contactButtons = document.querySelector('.custom-contact-buttons');
        if (!contactButtons.contains(event.target)) {
            document.querySelector('.contact-options').classList.remove('show');
            document.querySelector('.main-btn').classList.remove('active');
        }
    });
</script>