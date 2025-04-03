<?php
// Critical resources preloading
$criticalResources = [
    ['href' => 'assets/css/style.css', 'as' => 'style'],
    ['href' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', 'as' => 'style'],
    ['href' => 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap', 'as' => 'style']
];

foreach ($criticalResources as $resource) {
    echo "<link rel='preload' href='{$resource['href']}' as='{$resource['as']}'>\n";
}
?>
<!-- Deferred Script Loading -->
<script>
function loadScript(src, defer = true) {
    return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = src;
        script.defer = defer;
        script.onload = resolve;
        script.onerror = reject;
        document.body.appendChild(script);
    });
}

window.addEventListener('load', async () => {
    const scripts = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
    ];

    for (const src of scripts) {
        await loadScript(src);
    }

    // Initialize AOS with shorter duration
    AOS.init({
        duration: 600,
        once: true
    });
});
</script>
