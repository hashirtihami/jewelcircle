<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>
<title>Giftcards</title>
<!-- Product -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('../assets/images/posters/giftbanner.jpg');">
		<h3 class=" cl0 txt-center" style=" font-family:anydore; font-size:3.5rem; color:white; text-shadow:5px 5px 10px black; ">
			Make the gift special with a hand made card
		</h3>
	</section>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
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