<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add a new user.</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <form action="/admin/adduser" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-border" name="name" id="name" placeholder="Enter the name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-border" name="email" id="email" placeholder="Enter the email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-border" name="password" id="password" placeholder="Enter the password">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="custom-select form-control-border" name="role" id="role">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-1">Add new user</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
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