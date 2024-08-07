<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/dashboard') ?>" class="brand-link py-4">
        <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JWO Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item py-3">
                    <a href="<?= base_url('admin/users') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Manage Users
                        </p>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a href="<?= base_url('admin/packages') ?>" class="nav-link">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Manage Packages
                        </p>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a href="<?= base_url('admin/orders') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Manage Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a href="<?= base_url('admin/profile') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Web Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a href="<?= base_url('admin/reports') ?>" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column mt-auto">
                <li class="nav-item py-3">
                    <a href="<?= base_url('/auth/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>