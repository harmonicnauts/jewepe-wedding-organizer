<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add a new Package</h1>
                    <?php if (isset($validation)) : ?>
                        <div style="color: red;">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Package</li>
                    </ol>
                </div>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <form action="/admin/add-package" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" name=" name" id="name" placeholder="Enter the name">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('price')) ? 'is-invalid' : '' ?>" name=" price" id="price" placeholder="Enter the price">
                            <div class="invalid-feedback">
                                <?= $validation->getError('price'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="capacity">Capacity</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('capacity')) ? 'is-invalid' : '' ?>" name=" capacity" id="capacity" placeholder="Enter the capacity">
                            <div class="invalid-feedback">
                                <?= $validation->getError('capacity'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Location</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('location')) ? 'is-invalid' : '' ?>" name=" location" id="location" placeholder="Enter the location">
                            <div class="invalid-feedback">
                                <?= $validation->getError('location'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control form-control-border <?= ($validation->hasError('description')) ? 'is-invalid' : '' ?>" name=" description" id="summernote"></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('description'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" type="file" id="image" name="image">
                            <div class="invalid-feedback">
                                <?= $validation->getError('image'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mx-1">Add new package</button>
                        <a href=<?= base_url('/admin/packages') ?> class="btn btn-danger">Cancel</a>
                    </div>
            </div>
            <!-- /.card-body -->
            </form>
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- ./wrapper -->

<?= $this->endSection() ?>