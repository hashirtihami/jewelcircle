<?php
  require 'templates/top.inc.php';
  require 'couponsTable.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<?php
	if(isset($_POST['submit'])){
		$couponCode = strtoupper($_POST['couponCode']);
		$desc = $_POST['description'];
		$discount = $_POST['discount'];
		$expDate = $_POST['expiryDate'];
		$query = "SELECT * FROM coupon WHERE couponCode = '$couponCode'";
        //echo $query;
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
          echo "<script type='text/javascript'>
                  function error(){
                    $('#warning').css('display', 'block');
                   }
                   error();
                </script>";
        }else if(!empty($couponCode)&&!empty($desc)&&!empty($discount)&&!empty($expDate)){
			$query = "INSERT INTO coupon (couponCode, description, discount, expiryDate) VALUES ('$couponCode','$desc', '$discount', '$expDate')";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
      echo "<meta http-equiv='refresh' content='0'>";
		}
	}
?>

<link rel="stylesheet" type="text/css" href="utils.css">

<!-- <script src="../viewForm.js"></script> -->
<script src="js/tables.js"></script>

  <!-- DISABLE INVOICE AND DISPATCH BUTTON -->
<script type="text/javascript">
  $(document).ready(function() {
    $('.orderButtons').addClass("disabled");
    $('button.orderButtons span').hide();
  })

</script>
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


