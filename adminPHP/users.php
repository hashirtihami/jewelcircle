<?php
  require 'templates/top.inc.php';
  require 'usersTable.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>
<script src="js/tables.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>