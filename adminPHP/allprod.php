<?php
  require 'templates/top.inc.php';
  require 'allprodtable.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>

<link rel="stylesheet" type="text/css" href="utils.css">
<script src="js/tables.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('tbody > div').addClass('deleteSelection');
  })
</script>