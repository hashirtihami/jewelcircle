<?php
  require 'templates/top.inc.php';
  require 'giftcardsContent.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>
<style type="text/css">
	.container{
    padding: 0;
    width: auto;
  }
  .img-thumb {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.hideShow {
	display: none;
}
h3 {
  font-family: 'Dosis', sans-serif !important;
  color: #e60040;
}
</style>

<script src="../viewForm.js"></script>