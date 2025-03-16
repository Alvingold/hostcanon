<div class="kb-sidebar">
    <div class="sidebar-header">
        <h4>Knowledge Base</h4>
    </div>
    <div class="sidebar-search mb-4">
        <div class="input-group">
            <span class="input-group-text border-0 bg-transparent">
                <i class="bi bi-search"></i>
            </span>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search...">
        </div>
    </div>
    <ul class="sidebar-nav">
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#domainCollapse" role="button" aria-expanded="false" aria-controls="domainCollapse">
                <i class="bi bi-globe"></i> Domain <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="domainCollapse">
                <ul class="sub-nav">
                    <li><a href="/hostcanon/knowledge-base/articles/domain/registration.php">Domain Registration</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#vpsCollapse" role="button" aria-expanded="false" aria-controls="vpsCollapse">
                <i class="bi bi-hdd-network"></i> VPS Server <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="vpsCollapse">
                <ul class="sub-nav">
                    <li><a href="articles/vps/management.php">VPS Management</a></li>
                    <li><a href="articles/vps/backup.php">Backups</a></li>
                    <li><a href="articles/vps/security.php">Security</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#serverCollapse" role="button" aria-expanded="false" aria-controls="serverCollapse">
                <i class="bi bi-server"></i> Dedicated Servers <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="serverCollapse">
                <ul class="sub-nav">
                    <li><a href="articles/server/management.php">Server Management</a></li>
                    <li><a href="articles/server/monitoring.php">Monitoring</a></li>
                    <li><a href="articles/server/security.php">Security</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#sharedCollapse" role="button" aria-expanded="false" aria-controls="sharedCollapse">
                <i class="bi bi-diagram-3"></i> Shared Server Hosting <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="sharedCollapse">
                <ul class="sub-nav">
                    <li><a href="articles/shared/cpanel.php">cPanel Guide</a></li>
                    <li><a href="articles/shared/email.php">Email Setup</a></li>
                    <li><a href="articles/shared/databases.php">Databases</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add active class to current page link
    const currentPage = window.location.pathname;
    document.querySelectorAll('.sub-nav a').forEach(link => {
        if (link.getAttribute('href').includes(currentPage)) {
            link.classList.add('active');
            link.closest('.collapse').classList.add('show');
            link.closest('li').querySelector('.nav-link').classList.add('active');
        }
    });
});
</script>