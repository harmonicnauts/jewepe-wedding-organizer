<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container">
    <h1>Laporan Pesanan</h1>
    <form action="<?= base_url('admin/generateReport') ?>" method="post">
        <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" id="start_date" name="start_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" id="end_date" name="end_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Laporan</button>
    </form>
</div>

<?= $this->include('layout/footer') ?>