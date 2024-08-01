<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<?php $image_dir = base_url('assets/img'); ?>
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
            <div class="col order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2><span>Welcome to </span><span class="accent">Jewepe Wedding Organizer</span></h2>
                <p>We specialize in turning your wedding dreams into a flawless reality. From intimate gatherings to grand celebrations, our experienced team of wedding organizers is dedicated to crafting unforgettable moments that reflect your unique style and love story.</p>
                <div class="d-flex">
                    <a href="#" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">
                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-palette"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Design & Decor</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar-check"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">On the day coordination</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-clock"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Punctuality</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-house-door"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Venue Selection</a></h4>
                    </div>
                </div><!--End Icon Box -->
            </div>

        </div>
    </div>

</section><!-- /Hero Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">
            <div class="col">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="stats-item d-flex">
                            <i class="bi bi-heart-fill flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $successful_marriage ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Successful Marriages</strong> <span>created with care</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4">
                        <div class="stats-item d-flex">
                            <i class="bi bi-emoji-smile flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $satisfied_customer ?>"" data-purecounter-duration=" 1" class="purecounter"></span>
                                <p><strong>Satisfied Customers</strong> <span>who loved their day</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4">
                        <div class="stats-item d-flex">
                            <i class="bi bi-people-fill flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $guests ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Guests</strong> <span>celebrated joyfully</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->


                </div>

            </div>

        </div>

    </div>

</section><!-- /Stats Section -->

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Who are we?<br></h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= base_url('uploads/profile/whoarewe.jpg') ?>" class="img-fluid rounded-4 mb-4" alt="">
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic d-flex align-items-center">
                        "Where there is love, there is life." - Mahatma Gandhi
                    </p>
                    <p>
                        <?= $description ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Vision<br></h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic d-flex align-items-center">
                        "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope." - Maya Angelou
                    </p>
                    <p>
                        <?= $vision ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= base_url('uploads/profile/vision.jpg') ?>" class="img-fluid rounded-4 mb-4" alt="">
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section">

    <div class="container">
        <img src="<?= $image_dir ?>/cta-bg.jpg" alt="">
        <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Explore more of what we offer.</h3>
                    <a class="cta-btn" href="<?= base_url('catalogue') ?>">Our catalogues</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Call To Action Section -->

<?= $this->endSection() ?>