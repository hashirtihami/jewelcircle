	<!-- Footer -->
	<footer style="background-color:#0a0204; margin-top: 30px;" class="bg3 p-t-75 p-b-32 txt-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Terms and Policies
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="track" class=" stext-107 cl7 hov-cl1 trans-04">
								Track My Order
							</a>
						</li>
						<li class="p-b-10">
							<a href="policy" class="stext-107 cl7 hov-cl1 trans-04">
								Delivery Policy
							</a>
						</li>
						<li class="p-b-10">
							<a href="terms" class="stext-107 cl7 hov-cl1 trans-04">
								Terms Of Services
							</a>
						</li>
						<li class="p-b-10">
							<a href="faq" class="stext-107 cl7 hov-cl1 trans-04">
								FAQ
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Company Info
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="aboutus" class="stext-107 cl7 hov-cl1 trans-04">
								About Us
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Jewel Circle Reviews
							</a>
						</li>
						<li class="p-b-10">
							<a href="infprogram" class="stext-107 cl7 hov-cl1 trans-04">
								Influencer Program
							</a>
						</li>
						<li class="p-b-10">
							<a href="reseller" class="stext-107 cl7 hov-cl1 trans-04">
								Reseller Inquiry
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Contact Us
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								info@jewelcircle.net
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								+92 334 3118434
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Jewel Circle
							</a>
						</li>
					</ul>
					<div class="p-t-27">
						<a href="https://www.facebook.com/JewelCircle/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="https://www.instagram.com/jewel_circle/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>
					</div>
				</div>
			</div>
			<h6 class=" copyright  txt-center">
					© Copyright 2018 JEWEL CIRCLE | Website by <a href="https://www.runglab.com">w.h.e.m</a>
				</h6>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			$(this).on('click', function(){
				var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>