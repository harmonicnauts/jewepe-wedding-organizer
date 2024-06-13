<?php $assets_dir = base_url('assets/'); ?>

<!-- jQuery -->
<script src="<?= $assets_dir ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= $assets_dir ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
    $(function() {
        $("#datatable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

<!-- Bootstrap 4 -->
<script src="<?= $assets_dir ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= $assets_dir ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= $assets_dir ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= $assets_dir ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= $assets_dir ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= $assets_dir ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= $assets_dir ?>plugins/moment/moment.min.js"></script>
<script src="<?= $assets_dir ?>plugins/daterangepicker/daterangepicker.js"></script>
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
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= $assets_dir ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= $assets_dir ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= $assets_dir ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $assets_dir ?>dist/js/adminlte.js"></script>
</body>

</html>