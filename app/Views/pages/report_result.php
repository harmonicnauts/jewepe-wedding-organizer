<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container">
    <h1>Hasil Laporan Pesanan</h1>
    <?php if (count($orders) > 0) : ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
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
                        <td><?= $order['user_id'] ?></td>
                        <td><?= $order['package_id'] ?></td>
                        <td><?= $order['event_date'] ?></td>
                        <td><?= $order['special_requests'] ?></td>
                        <td><?= $order['status'] ?></td>
                        <td><?= $order['created_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No orders found for the selected date range.</p>
    <?php endif; ?>
</div>

<?= $this->include('layout/footer') ?>