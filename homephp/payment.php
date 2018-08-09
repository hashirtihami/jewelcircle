<?php
require 'templates/top.inc.php';
?>
<script type="text/javascript" href="js/charge.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet"  href="css/style.css">

<div class="container" style="padding-bottom:80px; padding-top:50px;">
  <form action="charge.php" method="post" id="payment-form">
    <div class="form-row">
      
      <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
      <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
      <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
      
      <label for="card-element">
        Credit or debit card
      </label>
      <div id="card-element"  class="form-control">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
    </div>

    <button class="btn btn-primary btn-block mt-4" >Submit Payment</button>
  </form>
</div>




<?php
  require 'templates/bottom.inc.php';
?>