<?= $this->extend('layout/template') ?>
<?php $image_dir = base_url('img/'); ?>

<?= $this->section('content') ?>

<section id="about" class="about section">

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <h1>Register</h1>
                    <form action="<?= base_url('auth/register') ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= base_url('assets/img') ?>/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<?= $this->endSection() ?>

<!-- <div class="container">
    <h1>Register</h1>
    <form action="<?= base_url('auth/register') ?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div> -->