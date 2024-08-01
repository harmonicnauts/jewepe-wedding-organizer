<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">
    <!-- Section Title -->
    <div class="container section-title mt-4" data-aos="fade-up">
        <h2>Our Catalogue</h2>
        <p>
            Check out what we have to offer.
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">

            <div class="container">
                <div class="row">
                    <?php foreach ($packages as $package) : ?>
                        <div class="col-xxl-4 col-xl-6 col-lg-12">
                            <div class="card mb-4 mb-xl-0 card-hover border">
                                <a href="<?= base_url('user/order/') ?><?= $package['package_id'] ?>">
                                    <img src="<?= base_url("uploads/package/{$package['image']}") ?>" alt="package-image" class="img-fluid w-100 rounded-top-3">
                                </a>
                                <div class="card-body">
                                    <h3 class="mb-4 text-truncate">
                                        <a href="<?= base_url('user/order/') ?><?= $package['package_id'] ?>" class="text-inherit "><?= $package['name'] ?></a>
                                    </h3>
                                    <div class="mb-4">
                                        <div class="mb-3 lh-1">
                                            <span class="me-1">
                                                <i class="bi bi-geo-alt"></i>
                                            </span>
                                            <span><?= $package['location'] ?></span>
                                        </div>
                                        <div class="lh-1">
                                            <span class="me-1">
                                                <i class="bi bi-people"></i>
                                            </span>
                                            <span>Capacity: <?= $package['capacity'] ?> people</span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="me-1">
                                            <i class="bi bi-currency-dollar"></i>
                                        </span>
                                        <span>IDR <?= number_format($package['price'], 0, ',', '.') ?></span>
                                    </div>
                                    <div>
                                        <?php if (session()->get('isLoggedIn')) : ?>
                                            <a href="<?= base_url('user/order/') ?><?= $package['package_id'] ?>" class="btn btn-success">Order this package</a>
                                        <?php else : ?>
                                            <div class="btn-danger">Please login to order this package</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- End post list item -->
        </div>
        <!-- End recent posts list -->
    </div>
</section>
<!-- /Recent Posts Section -->

<?= $this->endSection() ?>