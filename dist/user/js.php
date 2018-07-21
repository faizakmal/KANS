<script src="../../dist/adminlte/adminlte/jquery/dist/jquery.min.js"></script>
<script src="../../dist/adminlte/adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../dist/adminlte/adminlte/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="../../dist/adminlte/adminlte/select2/dist/js/select2.full.min.js"></script>
<script src="../../dist/adminlte/adminlte/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../dist/adminlte/adminlte/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../dist/adminlte/adminlte/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../dist/adminlte/js/adminlte.min.js"></script>
<script src="../../dist/adminlte/js/demo.js"></script>
<script>
function checkLogout(){
    return confirm('Yakin Mau Logout?');
}
 function checkInput(){
    return confirm('Apakah data yang diinputkan sudah benar?');
}

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>