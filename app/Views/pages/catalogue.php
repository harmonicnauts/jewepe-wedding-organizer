<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">
    <!-- Section Title -->
    <div class="container section-title mt-4" data-aos="fade-up">
        <h2>Our Catalogue</h2>
        <p>
            Check out what we has to offer.
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            <?php foreach ($packages as $package) : ?>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <article>
                        <div class="post-img">
                            <img src="<?= base_url("uploads/package/{$package['image']}") ?>" alt="" class="img-fluid" />
                        </div>

                        <h2 class="title">
                            <a href="blog-details.html"><?= $package['name'] ?></a>
                        </h2>
                        <p class="post-category"><?= $package['price'] ?></p>
                    </article>
                </div>
                <!-- End post list item -->
            <?php endforeach; ?>
        </div>
        <!-- End recent posts list -->
    </div>
</section>
<!-- /Recent Posts Section -->

<?= $this->endSection() ?>