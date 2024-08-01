<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-body" id="overview">
                    <div class="d-flex align-items-center">
                        <div>
                            <h1 class="mb-0"><?= $package['name'] ?></h1>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div style="max-height: 300px; overflow: hidden;">
                            <img src="<?= base_url("uploads/package/{$package['image']}") ?>" alt="Your Image Alt Text" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" />
                        </div>
                    </div>

                    <div class="mt-4" id="detail">
                        <h2 class="mb-3">Detail</h2>
                        <div>
                            <p>
                                <?= $package['description'] ?>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div id="location" class="">
                        <h4 class="">Location: <?= $package['location'] ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 position-sticky">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="mb-3">Detail</h2>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0">Harga</p>
                            <div>
                                <span>IDR <?= number_format($package['price'], 0, ',', '.') ?></span>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0">Kapasitas</p>
                            <span class="font-weight-bold"><?= $package['capacity'] ?> pax</span>
                        </div>
                    </div>
                    <hr>
                    <form action="<?= site_url('user/order/' . $package['package_id']) ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-4">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="text" class="click form-control" id="datepicker" name="event_date" placeholder="Select a date" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success btn-block">
                                Pesan Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.0/dist/js/bootstrap-datepicker.min.js
"></script>

<script>
    $(document).ready(function() {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

<?= $this->endSection() ?>