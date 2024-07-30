<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit This Package</h1>
                    <?php if (isset($validation)) : ?>
                        <div style="color: red;">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Package</li>
                    </ol>
                </div>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <form action="/admin/update-package/<?= $data['package']['package_id'] ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" value="<?= isset($data['package']['name']) ? $data['package']['name'] : '' ?>" name="name" id="name" placeholder="Enter the name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('price')) ? 'is-invalid' : '' ?>" value="<?= isset($data['package']['price']) ? $data['package']['price'] : '' ?>" name="price" id="price" placeholder="Enter the price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('description')) ? 'is-invalid' : '' ?>" value="<?= isset($data['package']['description']) ? $data['package']['description'] : '' ?>" name="description" id="description" placeholder="Enter the description">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" type="file" id="image" name="image">
                        </div>
                        <div>
                            <p>current image : <?= ($data['package']['image'] == '') ? 'placeholder.jpg' : $data['package']['image'] ?></p>
                            <!-- uploads/package/{$package['image']} -->
                            <img src="<?= ($data['package']['image'] == '') ?
                                            base_url('uploads/placeholder.jpg') :
                                            base_url("uploads/package/{$data['package']['image']}") ?>" alt="Package Image" style="width:150px; height:150px;border-radius: 15px;" '>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mx-1">Update package</button>
                        <a href=<?= base_url('/admin/packages') ?> class="btn btn-danger">Cancel</a>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>