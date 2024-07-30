<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit This User</h1>
                    <?php if (isset($validation)) : ?>
                        <div style="color: red;">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <form action="/admin/update-user/<?= $user['user_id'] ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" value="<?= isset($user['name']) ? $user['name'] : '' ?>" name="name" id="name" placeholder="Enter the name">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" value="<?= isset($user['email']) ? $user['email'] : '' ?>" name="email" id="email" placeholder="Enter the email">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control form-control-border <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password" id="password" placeholder="Enter new password to change">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="custom-select form-control-border <?= ($validation->hasError('role')) ? 'is-invalid' : '' ?>" name="role" id="role">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('role'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mx-1">Update user</button>
                        <a href=<?= base_url('/admin/users') ?> class="btn btn-danger">Cancel</a>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>