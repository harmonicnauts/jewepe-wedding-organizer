<nav id="navmenu" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Jewepe Wedding Organizer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/catalogue">Catalogue</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if (session()->get('isLoggedIn')) : ?>
                    <?php if (session()->get('role') === 'admin') : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">Admin Dashboard</a>
                        </li>
                    <?php endif; ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/user/profile"><?= session()->get('name') ?></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= session()->get('name') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('user/history/') ?><?= session()->get('user_id') ?>">Show Orders</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>