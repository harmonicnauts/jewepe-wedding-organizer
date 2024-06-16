<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Reports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Package Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($packages)) : ?>
                                <?php $num = 1; ?>
                                <?php foreach ($packages as $package) : ?>
                                    <tr>
                                        <td><?= $num ?></td>
                                        <td class="d-flex justify-content-center">
                                            <img src="<?= base_url("uploads/package/{$package['image']}") ?>" alt="Package Image" style="width:150px; height:150px;">
                                        </td>
                                        <td><?= esc($package['name']) ?></td>
                                        <td><?= esc($packageQuantities[$package['package_id']] ?? 0) ?></td>
                                        <td><?= esc($package['price']) ?></td>
                                    </tr>
                                    <?php $num++; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5">No Packages found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Package Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>