<?= $this->extend('layout/template') ?>
<?php $image_dir = base_url('img/'); ?>

<?= $this->section('content') ?>

<section id="about" class="about section">

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= base_url('assets/img') ?>/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <h1>Login</h1>
                    <form action="<?= base_url('auth/authenticate') ?>" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<?= $this->endSection() ?>