<?= $this->extend('layout/template') ?>
<?php $image_dir = base_url('img/'); ?>

<?= $this->section('content') ?>

<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <form action="<?= base_url('/auth/register') ?>" method="post" class="card-body p-5 text-center">

                        <h3 class="mb-5">Register</h3>

                        <?php if (isset($validation)) : ?>
                            <div style="color: red;">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" name="name" id="name" class="form-control form-control-lg <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" required />
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                            <label class="form-label" for="name">Username</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" required />
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                            <label class="form-label" for="email">Email</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" name="password" id="password" class="form-control form-control-lg <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" required />
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Register</button>

                        <hr class="my-4">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>