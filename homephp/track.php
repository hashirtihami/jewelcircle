<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>
<style type="text/css">
	footer {
		margin-top: 0 !important;
	}
</style>
<title>Track My Order</title>
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(../assets/images/posters/track.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="  respon2" style="font-size:20px;color:white">
									Invoices of your orders can be downloaded <br> from your profile.
								</span>
							</div>
							
							<div style="padding-top:20px" class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600"  >
								<a style="background-color:#e60044; " href="userregister.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Log In
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
	require 'templates/modal.inc.php';
	require 'templates/bottom.inc.php';
?>