<?php
	require 'templates/top.inc.php';
	require 'shippingTable.php';
	require 'popup.php';
	require 'templates/bottom.inc.php';
	require 'connect.inc.php';
?>

<?php
	if(isset($_POST['submit'])){
		$country = $_POST['country'];
		$cost = $_POST['cost'];
		$query = "SELECT * FROM shipping WHERE country = '$country'";
        //echo $query;
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
          echo "<script type='text/javascript'>
                  function error(){
                    $('#warning').css('display', 'block');
                   }
                   error();
                </script>";
        }else if(!empty($country)&&!empty($cost)){
			$query = "INSERT INTO shipping (country, cost) VALUES ('$country','$cost')";
			if(mysqli_query($conn, $query)){
			    echo mysqli_use_result($conn);
			}
			echo "<meta http-equiv='refresh' content='0'>";
		}
	}
?>

<link rel="stylesheet" type="text/css" href="utils.css">
<script src="js/tables.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('tbody > div').addClass('deleteSelection');
  })
</script>