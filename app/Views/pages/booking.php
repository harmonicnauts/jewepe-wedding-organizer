<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Book a Package</h1>
    <form action="<?= base_url('user/bookPackage') ?>" method="post">
        <div class="form-group">
            <label for="package_id">Package</label>
            <select id="package_id" name="package_id" class="form-control" required>
                <?php foreach ($packages as $package) : ?>
                    <option value="<?= $package['id'] ?>"><?= $package['name'] ?> - <?= $package['price'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="event_date">Event Date</label>
            <input type="date" id="event_date" name="event_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="special_requests">Special Requests</label>
            <textarea id="special_requests" name="special_requests" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>

<?= $this->endSection() ?>