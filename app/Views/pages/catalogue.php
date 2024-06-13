<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Wedding Packages</h1>
    <div class="row">
        <?php foreach ($packages as $package) : ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('uploads/' . $package['image']) ?>" class="card-img-top" alt="<?= $package['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $package['name'] ?></h5>
                        <p class="card-text"><?= $package['description'] ?></p>
                        <p class="card-text"><strong>Price: </strong><?= $package['price'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>