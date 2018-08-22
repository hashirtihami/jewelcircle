<?php
  require 'templates/top.inc.php';
  session_start();
?>

<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet"  href="css/payment.css">

<div style="padding-top:50px;" class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-6 col-xl-6 m-lr-auto m-b-50">
      <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-25 m-r--38 m-lr-0-xl">
        <h4 class="mtext-109 cl2 p-b-30">Pay Online</h4>
        <p>You will be directed to a secure checkout payment gateway to complete the transaction.</p>
        <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
          <input type='hidden' name='sid' value='901389480' />
          <input type='hidden' name='mode' value='2CO' />
          <input type='hidden' name='li_0_type' value='product' />
          <input type='hidden' name='li_0_name' value='invoice123' />
          <input type='hidden' name='li_0_price' value='25.99' />
          <input type='hidden' name='li_0_tangible' value='Y' />
          <input type='hidden' name='li_1_type' value='shipping' />
          <input type='hidden' name='li_1_name' value='Express Shipping' />
          <input type='hidden' name='li_1_price' value='13.99' />
          <input type='hidden' name='card_holder_name' value='Checkout Shopper' />
          <input type='hidden' name='street_address' value='123 Test Address' />
          <input type='hidden' name='street_address2' value='Suite 200' />
          <input type='hidden' name='city' value='Columbus' />
          <input type='hidden' name='state' value='OH' />
          <input type='hidden' name='zip' value='43228' />
          <input type='hidden' name='country' value='USA' />
          <input type='hidden' name='ship_name' value='Checkout Shopper' />
          <input type='hidden' name='ship_street_address' value='123 Test Address' />
          <input type='hidden' name='ship_street_address2' value='Suite 200' />
          <input type='hidden' name='ship_city' value='Columbus' />
          <input type='hidden' name='ship_state' value='OH' />
          <input type='hidden' name='ship_zip' value='43228' />
          <input type='hidden' name='ship_country' value='USA' />
          <input type='hidden' name='email' value='example@2co.com' />
          <input type='hidden' name='phone' value='614-921-2450' />
          <div class="p-t-20">
              <input type="submit" name='submit' value='Checkout' class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer"/>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-12 col-lg-6 col-xl-6 m-lr-auto m-b-50">
      <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
        <form action="payment-success.php">
          <h4 class="mtext-109 cl2 p-b-30">
            Cash on Delivery
          </h4>
          <p>Your package will be delivered to you within 10-15 days</p>
          <div class="p-t-20">
            <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
             Checkout
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/charge.js"></script>
<script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>


<?php
  require 'templates/bottom.inc.php';
?>