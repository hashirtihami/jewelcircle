<?php
  require 'templates/top.inc.php';
  require 'ordersTable.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<script src="js/tables.js"></script>
<script type="">
	$(document).ready(function() {
	var $rows = $('#tableBody tr');
	$('#myInput').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
});
</script>