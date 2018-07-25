<?php
  require 'templates/top.inc.php';
  require 'giftcardsContent.php';
  require 'popup.php';
  require 'templates/bottom.inc.php';
  require 'connect.inc.php';
?>
<style type="">
  .container{
    padding: 0;
    width: auto;
  }
  .hideShow {
  display: none;
}
  h3 {
  font-family: 'Dosis', sans-serif !important;
  color: #e60040;
}
  .btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
  .btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}
  .btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
</style>

<script src="js/giftcard.js"></script>