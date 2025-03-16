<button id="scroll-up-btn" title="Go to top">
    <i class="bi bi-arrow-up"></i>
</button>

<style>
#scroll-up-btn {
    opacity: 0;
    visibility: hidden;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: linear-gradient(135deg, #932C8B, #4B0082 );
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    font-size: 18px;
    transition: all 0.3s ease;
    z-index: 1000;
}

#scroll-up-btn:hover {
    background: linear-gradient(135deg, #4B0082, #932C8B);
    transform: translateY(-3px);
}
</style>

<script>
const scrollBtn = document.getElementById("scroll-up-btn");

// Show button when user scrolls down 20px from top
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollBtn.style.opacity = "1";
        scrollBtn.style.visibility = "visible";
    } else {
        scrollBtn.style.opacity = "0";
        scrollBtn.style.visibility = "hidden";
    }
};

// Scroll to top when button is clicked
scrollBtn.addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>
