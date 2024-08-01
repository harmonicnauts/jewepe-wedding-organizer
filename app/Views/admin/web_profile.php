<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/profile') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="description">Who are we</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter who are we"><?= $description ?? '' ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="vision">Vision</label>
                            <textarea class="form-control" name="vision" id="vision" rows="3" placeholder="Enter vision"><?= $vision ?? '' ?></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="successful_marriage">Successful Marriages</label>
                                <input type="number" class="form-control" name="successful_marriage" id="successful_marriage" placeholder="Successful Marriages" value="<?= $successful_marriage ?? '' ?>">
                            </div>
                            <div class="col-sm-4">
                                <label for="satisfied_customer">Satisfied Customers</label>
                                <input type="number" class="form-control" name='satisfied_customer' id="satisfied_customer" placeholder="Satisfied Customers" value="<?= $satisfied_customer ?? '' ?>">
                            </div>
                            <div class="col-sm-4">
                                <label for="guests">Guests</label>
                                <input type="number" class="form-control" name='guests' id="guests" placeholder="Guests" value="<?= $guests ?? '' ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>