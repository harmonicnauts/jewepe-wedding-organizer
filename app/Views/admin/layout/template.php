<?= $this->include('admin/layout/header') ?>
<?= $this->include('admin/layout/sidebar') ?>
<?= $this->include('admin/layout/navbar') ?>
<?= $this->include('admin/layout/preloader') ?>


<div>
    <?= $this->renderSection('content') ?>
</div>

<?= $this->renderSection('additional-scripts') ?>

<?= $this->include('admin/layout/footer') ?>