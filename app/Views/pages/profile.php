<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Profile</h1>
    <h2>Order History</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Package ID</th>
                <th>Event Date</th>
                <th>Special Requests</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?= $order['id'] ?></td>
                    <td><?= $order['package_id'] ?></td>
                    <td><?= $order['event_date'] ?></td>
                    <td><?= $order['special_requests'] ?></td>
                    <td><?= $order['status'] ?></td>
                    <td><?= $order['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>