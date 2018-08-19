<?php
	require 'connect.inc.php';
	session_start();
	if(!isset($_SESSION['logged_in'])){
		if(!$_SESSION['logged_in']){
			$_SESSION['message'] = "<a href='userregister.php'>Register or log in</a> to place an order";
			header("location: error.php");
		}
	}
	require 'templates/top.inc.php';
?>

<div class="container">
	<div class="row">
		<?php
			if(isset($_SESSION['logged_in'])){
				if($_SESSION['logged_in']){
					echo '<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">';
						echo '<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">';
						echo '<form action="payment.php">';
							echo '<h4 class="mtext-109 cl2 p-b-30">';
								echo 'Use Login Info';
							echo '</h4>';

							echo '<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">';
								echo 'Checkout';
							echo '</button>';
						echo '<form>';
						echo '</div>';
					echo '</div>';
				}
			}
		?>
	</div>
</div>

<?php 
	require 'templates/bottom.inc.php'
?>