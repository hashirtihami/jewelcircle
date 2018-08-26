<?php
//require_once('vendor/autoload.php');
session_start();

Twocheckout::privateKey('4C4F2255-FF88-41B8-88B6-3634484F3F75');
Twocheckout::sellerId('901248204');
// Twocheckout::sandbox(true);  #Uncomment to use Sandbox

try {
    $charge = Twocheckout_Charge::auth(array(
        "merchantOrderId" => "123",
        "token" => 'Y2U2OTdlZjMtOGQzMi00MDdkLWJjNGQtMGJhN2IyOTdlN2Ni',
        "currency" => 'USD',
        "total" => '10.00',
        "billingAddr" => array(
            "name" => 'Testing Tester',
            "addrLine1" => '123 Test St',
            "city" => 'Columbus',
            "state" => 'OH',
            "zipCode" => '43123',
            "country" => 'USA',
            "email" => 'testingtester@2co.com',
            "phoneNumber" => '555-555-5555'
        ),
        "shippingAddr" => array(
            "name" => 'Testing Tester',
            "addrLine1" => '123 Test St',
            "city" => 'Columbus',
            "state" => 'OH',
            "zipCode" => '43123',
            "country" => 'USA',
            "email" => 'testingtester@2co.com',
            "phoneNumber" => '555-555-5555'
        )
    ), 'array');
    if ($charge['response']['responseCode'] == 'APPROVED') {
        echo "Thanks for your Order!";
    }
} catch (Twocheckout_Error $e) {
    $e->getMessage();
}=  
  
?>

<script type="text/javascript" src ="js/charge.js"></script>