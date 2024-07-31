<?php $assets_dir = base_url('assets/'); ?>

<!-- dropzonejs -->
<script src="<?= $assets_dir ?>plugins/dropzone/min/dropzone.min.js"></script>
<!-- jQuery -->
<script src="<?= $assets_dir ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= $assets_dir ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Summernote -->
<script type="text/javascript" src="<?= $assets_dir ?>plugins/summernote/summernote-lite.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    })

    // Datatable code
    $(function() {
        $("#datatable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>

<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
<!-- overlayScrollbars -->
<script src="<?= $assets_dir ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $assets_dir ?>dist/js/adminlte.js"></script>

</body>

</html>