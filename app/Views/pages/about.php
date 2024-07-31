<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Team Section -->
<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title mt-4" data-aos="fade-up">
        <h2>About the Developer</h2>
        <p>
            Final year Informatics student from Gunadarma University.
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row gy-12">
            <div class="col-xl-12 col-md-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src=<?= base_url('uploads/profile/portrait.jpeg') ?> class="img-fluid" alt="" />
                    <h4>Rachmat</h4>
                    <span>51420022 / 4IA01</span>
                    <div class="social">
                        <a href="github.com/harmonicnauts/"><i class="bi bi-github"></i></a>
                        <a href="https://www.instagram.com/nst.rachmat/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/rachmat-nasution"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
        </div>
    </div>
</section>
<!-- /Team Section -->
<?= $this->endSection() ?>