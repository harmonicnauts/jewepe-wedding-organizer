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
                        <h1 class="m-0">Manage Catalogue</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Catalogue</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="<?= base_url('/admin/add-package') ?>" class="btn btn-primary">Add new package</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Last Updated</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($packages)) : ?>
                                <?php foreach ($packages as $package) : ?>
                                    <tr>
                                        <td><?= esc($package['package_id']) ?></td>
                                        <td><?= esc($package['name']) ?></td>
                                        <td><?= esc($package['description']) ?></td>
                                        <td><?= esc($package['price']) ?></td>
                                        <td class="d-flex justify-content-center">
                                            <img src="<?= base_url("uploads/package/{$package['image']}") ?>" alt="Package Image" style="width:150px; height:150px;">
                                        </td>
                                        <td><?= esc($package['created_at']) ?></td>
                                        <td><?= esc($package['updated_at']) ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <form action="/admin/update-package/<?= esc($package['package_id']) ?>" method="GET" style="display: inline;">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                </form>
                                                <form action="/admin/update-package/<?= esc($package['package_id']) ?>" method="POST" style="display: inline;">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7">No Packages found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
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