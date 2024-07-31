<?php $assets_dir = base_url('assets/'); ?>

<!-- jQuery -->
<script src="<?= $assets_dir ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= $assets_dir ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<script>
    new PureCounter();

    // Datatable code
    $(function() {
        $("#datatable").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                ['5', '10', '25', '50', 'All']
            ],
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datatable-wrapper .col-md-6:eq(0)');
    });

    $(document).ready(function() {
        <?php if (session()->getFlashdata('success')) : ?>
            toastr.success("<?= session()->getFlashdata('success') ?>");
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            toastr.error("<?= session()->getFlashdata('error') ?>");
        <?php endif; ?>
    });
</script>

<!-- DataTables  & Plugins -->
<script src="<?= $assets_dir ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $assets_dir ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= $assets_dir ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= $assets_dir ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= $assets_dir ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= $assets_dir ?>plugins/toastr/toastr.min.js"></script>

</body>

</html>