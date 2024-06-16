<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">General Elements</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/profile') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="form-group m-4 row">
                <label for="description" class="col-sm-2 col-form-label">Who are we</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter who are we"><?= $description ?? '' ?></textarea>
                </div>
            </div>

            <div class="form-group m-4 row">
                <label for="vision" class="col-sm-2 col-form-label">Vision</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="vision" id="vision" rows="3" placeholder="Enter vision"><?= $vision ?? '' ?></textarea>
                </div>
            </div>

            <div class="form-group m-4 row">
                <label for="successful_marriage" class="col-sm-2 col-form-label">Successful Marriages</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="successful_marriage" id="successful_marriage" placeholder="Successful Marriages" value="<?= $successful_marriage ?? '' ?>">
                </div>
                <label for="satisfied_customer" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name='satisfied_customer' id="satisfied_customer" placeholder="Satisfied Customers" value="<?= $satisfied_customer ?? '' ?>">
                </div>
            </div>

            <div class="form-group m-4 row">
                <label for="guests" class="col-sm-2 col-form-label">Guests</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name='guests' id="guests" placeholder="Guests" value="<?= $guests ?? '' ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>