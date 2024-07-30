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
                            <input type="text" class="form-control form-control-border" name="name" id="name" placeholder="Enter the name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control form-control-border" name="price" id="price" placeholder="Enter the price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control form-control-border" name="description" id="description" placeholder="Enter the description">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
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
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>