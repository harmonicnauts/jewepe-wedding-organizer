<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Orders</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>User Id</th>
                                <th>Package Id</th>
                                <th>Event Date</th>
                                <th>Special Requests</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($orders)) : ?>
                                <?php foreach ($orders as $order) : ?>
                                    <tr>
                                        <td><?= esc($order['order_id']) ?></td>
                                        <td><?= esc($order['user_id']) ?></td>
                                        <td><?= esc($order['package_id']) ?></td>
                                        <td><?= esc($order['event_date']) ?></td>
                                        <td><?= esc($order['special_requests']) ?></td>
                                        <td><?= esc($order['status']) ?></td>
                                        <td><?= esc($order['created_at']) ?></td>
                                        <td><?= esc($order['updated_at']) ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <form action="/admin/changeorderstatus/<?= esc($order['order_id']) ?>" method="POST" style="display: inline;">
                                                    <input type="hidden" name="_method" value="PUT"> <!-- Use PUT method for update -->
                                                    <button type="submit" class="btn <?= esc($order['status']) == 'approved' ? 'btn-danger' : 'btn-primary' ?>">
                                                        <?= esc($order['status']) == 'approved' ? 'Unapprove' : 'Approve' ?>
                                                    </button>
                                                </form>
                                                <!-- <form action="/admin/deleteorder/<?= esc($order['order_id']) ?>" method="POST" style="display: inline;">
                                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form> -->
                                            </div>
                                        </td>
                                    </tr>
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
                                <th>User Id</th>
                                <th>Package Id</th>
                                <th>Event Date</th>
                                <th>Special Requests</th>
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
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>