<?php
require 'templates/top.inc.php';
?>

<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet"  href="css/payment.css">

<div class="container" style="padding-bottom:80px; padding-top:50px;">
  <h1></h1>
  <form action="charge.php" method="post" id="payment-form">
    <div class="form-row">
      
      <input type="email" required name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
      
      <label for="card-element">
        Credit or debit card
      </label>
      <div id="card-element"  class="form-control">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
    </div>
    
    <div style="padding-top:20px">
      <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="float:right;" class="btn btn-primary" >Submit Payment</button>
    </div>

  </form>
</div>
<script type="text/javascript" src="js/charge.js"></script>

<?php
  require 'templates/bottom.inc.php';
?>