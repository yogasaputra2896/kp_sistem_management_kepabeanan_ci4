<header class="mb-4">
    <nav class="navbar navbar-expand navbar-light navbar-top shadow-sm bg-white">
        <div class="container-fluid">
            <!-- Hamburger menu (sidebar toggle) -->
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <div class="d-flex align-items-center ms-auto">
                <!-- Notifications -->
                <div class="dropdown me-3">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle text-gray-600">
                        <i class="bi bi-bell fs-5"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header">Notifications</h6></li>
                        <li><a class="dropdown-item">New user registered</a></li>
                        <li><a class="dropdown-item">System update available</a></li>
                        <li><a class="dropdown-item">Backup completed</a></li>
                    </ul>
                </div>

                <!-- User Profile -->
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="d-flex align-items-center">
                        <img src="/assets/images/faces/1.jpg" class="rounded-circle me-2" style="width:35px;height:35px;">
                        <span class="fw-bold"><?= user()->username ?? 'User' ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= site_url('logout') ?>"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
