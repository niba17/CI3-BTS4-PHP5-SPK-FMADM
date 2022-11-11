<!-- <footer class="main-footer">
   <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
   </div>
</footer> -->

<!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->
</div>




<script>
   $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>

<!-- <script src="<?= base_url('assets/') ?>plugins/sparklines/sparkline.js"></script> -->

<!-- <script src="<?= base_url('assets/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->

<!-- <script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script> -->
<!-- <script src="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script> -->

<!-- <script src="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.js"></script>

<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->

<script src="<?= base_url('assets/') ?>dist/js/adminlte.js?v=3.2.0"></script>

<!-- <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script> -->

<!-- <script src="<?= base_url('assets/') ?>dist/js/pages/dashboard.js"></script> -->


<!-- Bootstrap core JavaScript-->
<!-- <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src='<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js'></script>-->
<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css" />



<!-- Page level plugins -->
<!-- <script src="<?= base_url(); ?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/datatables/dataTables.bootstrap4.min.js"></script> -->


<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/demo/datatables-demo.js"></script>
<script>
   $('.preloader').children()[0].src = `<?= base_url('assets/dist/img/AdminLTELogo.png') ?>`
   $(function() { // this replaces document.ready
      setTimeout(function() {
         $('#preloader').fadeOut('slow', function() {
            $(this).remove();
         });
      }, 1500);
   });

   // $(document).on('click', (e) => {
   //    if ($(e.target).hasClass('dropdown-toggle')) {
   //       if ($(e.target.parentNode.children[1]).hasClass('show')) {
   //          $(e.target.parentNode.children[1]).removeClass('show')
   //       } else {
   //          $(e.target.parentNode.children[1]).addClass('show')
   //       }
   //    } else {
   //       if ($('.dropdown-menu').hasClass('show')) {
   //          $('.dropdown-menu').removeClass('show')
   //       }
   //    }

   // })
</script>

</body>

</html>