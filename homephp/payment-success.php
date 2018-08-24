<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must <a href=\"userregister.php\">log in or sign up</a>.";
  if( isset($_SESSION['message']))
  {  
    header("location: error");
    exit();    
  }
}

	require 'connect.inc.php';
	session_start();
	date_default_timezone_set('Asia/Karachi');
	$date = date('Y/m/d h:i:s a', time());
	$email = $_SESSION['email'];
	$firstName = $_SESSION['first_name'];
	$lastName = $_SESSION['last_name'];
	if(isset($_SESSION['products'])){
		$products = $_SESSION['products'];
		$totalAmount = $_SESSION['total'];
		$query = "SELECT customerID FROM customer WHERE email='".$email."'";
		$query_run = mysqli_query($conn, $query);
		if($query_array = mysqli_fetch_array($query_run))
			$customerID = $query_array['customerID'];
		$query = "INSERT INTO `order` (orderDate, totalAmount, customerID) VALUES ('".$date."', '".$totalAmount."', '".$customerID."')";
		echo $query;
		$query_run = mysqli_query($conn, $query);
		foreach ($products as $key) {
			if(isset($key['productID'])){
				$plating = $key['plating'];
				$language = $key['language'];
				$nametype = $key['nametype'];
				$quantity = $key['quantity'];
				$query = "SELECT platingID FROM plating WHERE platingType='".$plating."'";
				$query_run = mysqli_query($conn, $query);
				if($query_array = mysqli_fetch_array($query_run))
					$platingID = $query_array['platingID'];
				$query = "SELECT languageID FROM language WHERE languageName='".$language."'";
				$query_run = mysqli_query($conn, $query);
				if($query_array = mysqli_fetch_array($query_run))
					$languageID = $query_array['languageID'];
				$query = "SELECT nameTypeID FROM nametype WHERE nameTypeValue='".$nametype."'";
				$query_run = mysqli_query($conn, $query);
				if($query_array = mysqli_fetch_array($query_run))
					$nameTypeID = $query_array['nameTypeID'];
				$detailsID = $key['productID'].$languageID.$platingID.$nameTypeID;
				$query = "INSERT INTO order_product (orderID, productID, detailsID, nameOnProduct, quantity, size, type) VALUES ((SELECT orderID FROM `order` ORDER BY orderID DESC LIMIT 1), '".$key['productID']."', '".$detailsID."', '".$key['nameOnProduct']."', '".$quantity."', '".$key['size']."', 'product')";
				$query_run = mysqli_query($conn, $query);

			}
			if(isset($key['cardName'])){
				$cardName = $key['cardName'];
				$cardCost = $key['cardCost'];
				$quantity = $key['quantity'];
				$query = "INSERT INTO order_product (orderID, productID, detailsID, nameOnProduct, quantity, size, type) VALUES ((SELECT orderID FROM `order` ORDER BY orderID DESC LIMIT 1), (SELECT giftcardId FROM giftcard WHERE cardName = '$cardName'), 'NULL', 'NULL', '".$quantity."', 'NULL', 'giftcard')";
				$query_run = mysqli_query($conn, $query);
			}
		}

		 	

	unset($_SESSION['products']);
	unset($_SESSION['total']);
			$_POST['email']= $email;
			$to = $email;
            $subject = ' Message from jewelcircle.net ';
            $message_body = '
        
            <div style=" background-color:#fff2fd; text-align:center;"> 
                    <div style=" background-color:#E60044;  font-size:40px; color:white; padding:40px;";>
                        JEWEL CIRCLE
                    </div>

                        <div class="container" style="padding:40px">


                            Dear '.$firstName.' '.$lastName .',<br><br>
                         	In this time of gratitude, we give thanks for you. We value your patronage and appreciate your confidence in us. <br>Counting you among our customers is something for which we are especially grateful. <br>For your records, your username is '.$email.'.<br>
                         	The current status of your order will be viewed on your profile at Jewel Circle.<br>
                         	Log in to your account where you can also download the Cash Receipt by simply clicking the download icon next to your order
                          
                            <br><br>
                           	Regards,<br>
                            The Jewel Circle Team.<br> <br>
                            <sub>
                            Follow us:<br>

                            Instagram: https://www.instagram.com/jewel_circle/ <br>

                            Facebook: https://www.facebook.com/JewelCircle/<br><br>

                            For any queries feel free to email us at info@jewelcircle.net
                            <br><br><hr>
                            <font style="font-size:10px">We apologize if you received this email in error. Please ignore it if you didn\'t make the request.</font>
                            <sub>
                         </div>
                </div> ';
            require'mailsender.php';

	$_SESSION['message'] = "Order Placed Successfully.<br> The current status of your order will be viewed <a href=\"userprofile.php\"> here</a>.<br>You can also download the Cash Receipt by simply clicking the download icon next to your order.<br>Thank You!  ";
	header("location: success");
	}
	else{
		$_SESSION['message'] = "Cart is empty";
		header("location: error");
	}
 ?>