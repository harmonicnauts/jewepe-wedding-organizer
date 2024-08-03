<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- History Section -->
<section id="history" class="section">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body" id="datatable-wrapper">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Email</th>
                        <th>Package</th>
                        <th>Event Date</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($orders)) : ?>
                        <?php foreach ($orders as $order) : ?>
                            <?php if (esc($order['visibility'])) : ?>
                                <tr>
                                    <td><?= esc($order['order_id']) ?></td>
                                    <td><?= esc($order['email']) ?></td>
                                    <td><?= esc($order['name']) ?></td>
                                    <td><?= esc($order['event_date']) ?></td>
                                    <td><?= esc($order['status']) ?></td>
                                    <td><?= esc($order['created_at']) ?></td>
                                    <td><?= esc($order['updated_at']) ?></td>
                                    <td>
                                        <div class="btn-group d-flex justify-content-center">
                                            <?php if ($order['status'] !== 'rejected' && $order['status'] !== 'request'):?>
                                            <form action="<?= base_url('user/history-detail/') ?><?= esc($order['order_id']) ?>" method="GET" style="display: inline;">
                                                <button type="submit" class="btn mx-2 btn-light">Show Receipt</button>
                                            </form>
                                            <?php endif;?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="9">No orders found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Order Id</th>
                        <th>Email</th>
                        <th>Package</th>
                        <th>Event Date</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /History Section -->
<?= $this->endSection() ?>