<!-- jQuery 3 -->
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<!-- jvectormap  -->
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('des')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $('#isuedatepassport').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
  $('#expdatepassport').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
</script>

<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>