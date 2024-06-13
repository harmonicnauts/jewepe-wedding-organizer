<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<?php $image_dir = base_url('assets/img'); ?>
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
            <div class="col order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2><span>Welcome to </span><span class="accent">Jewepe Wedding Organizer</span></h2>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
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
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-gem"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-command"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
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
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Succesful Marriage</strong> <span>consequuntur quae</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4">
                        <div class="stats-item d-flex">
                            <i class="bi bi-emoji-smile flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Satisfied Customer</strong> <span>adipisci atque cum quia aut</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4">
                        <div class="stats-item d-flex">
                            <i class="bi bi-people-fill flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Guests</strong> <span>aut commodi quaerat</span></p>
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
                <img src="<?= $image_dir ?>/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic d-flex align-items-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur
                    </p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= $image_dir ?>/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
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
                    <a class="cta-btn" href="#">Our catalogues</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Call To Action Section -->

<?= $this->endSection() ?>