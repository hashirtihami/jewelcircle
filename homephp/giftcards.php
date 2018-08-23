<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>
<title>Giftcards</title>
<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w w-full p-lr-40 p-t-27 p-lr-15-sm">	

						<div id="filters" class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="two_twofif">
										Rs200 - Rs250
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="twofif_tri">
										Rs250 - Rs300
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="tri_trifif">
										Rs300 - Rs350
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="trifif_for">
										Rs350 - Rs400
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="for_forfif">
										Rs400 - Rs450 
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="forfif_fif">
										Rs450 - Rs500 
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>


			<div class="row isotope-grid">
				<?php
					$query = "SELECT cardName,cardCost,fileExt FROM giftcard ORDER BY giftcardId";
					$query_run = mysqli_query($conn, $query);
					while(@$query_array = mysqli_fetch_array($query_run)){
						$cardName = $query_array['cardName'];
						$cardCost = $query_array['cardCost'];
						echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 item-slick2 isotope-item">';
						// <!-- Block2 -->
							echo '<div class="block2">';
								echo '<div class="block2-pic hov-img0">';
									echo '<img src="../assets/images/giftcards/'.$cardName.'-thumb.jpg" alt="IMG-PRODUCT" style="margin-top: 25%">';
									echo '<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg5 bor2 hov-btn1 p-lr-15 trans-04 giftcardAdd">';
										echo 'Add to cart';
									echo '</a>';
								echo '</div>';

								echo '<div class="block2-txt flex-w flex-t p-t-14">';
									echo '<div class="block2-txt-child1 flex-col-l ">';
										echo '<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
											echo '<span class="title">'.$cardName.'</span>';
										echo '</a>';
										echo '<span class="stext-105 cl3">';
											echo '<span class="discountedPrice"> Rs'.$cardCost.'</span>';
										echo '</span>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				?>
			</div>

			<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
		</div>
	</div>

<?php
	require 'quickview-modal.php';
	require 'templates/bottom.inc.php';
?>
<script type="text/javascript">
	$(document).ready(function(){
	   $(".overlay-modal1").css({
      "overflow-y" : "scroll"
   });

})

</script>