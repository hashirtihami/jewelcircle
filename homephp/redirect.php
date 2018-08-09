<?php
	require 'connect.inc.php';
	require 'templates/top.inc.php';
?>

<script type="text/javascript">
	var product = JSON.parse(localStorage.product);
	$.post("product.php", {product: product}, function(data){
		console.log(data);
	});
</script>

<?php
	require 'quickview-modal.php';
	require 'templates/bottom.inc.php';
?>