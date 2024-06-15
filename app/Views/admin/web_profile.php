<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">General Elements</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form>
            <div class="form-group m-4 row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" value="<?= $web_info['title'] ?? '' ?>">
                </div>
            </div>

            <div class="form-group m-4 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter Description"><?= $web_info['description'] ?? '' ?></textarea>
                </div>
            </div>

            <div class="form-group m-4 row">
                <label for="successful_marriage" class="col-sm-2 col-form-label">Successful Marriages</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="successful_marriage" placeholder="Successful Marriages" value="<?= $web_info['successful_marriage'] ?? '' ?>">
                </div>
                <label for="satisfied_customer" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="satisfied_customer" placeholder="Satisfied Customers" value="<?= $web_info['satisfied_customer'] ?? '' ?>">
                </div>

            </div>

            <div class="form-group m-4 row">
                <label for="guests" class="col-sm-2 col-form-label">Guests</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="guests" placeholder="Guests" value="<?= $web_info['guests'] ?? '' ?>">
                </div>
            </div>

            <!-- Additional fields as per your database columns -->

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>

<?= $this->endSection() ?>