<?php
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Amount=$_POST['amount'];
	$Phone=$_POST['telnum'];

	include "instamojo/Instamojo.php";
	$api = new instamojo\Instamojo("test_39abb2dd9abcf0515669a0d6438","test_e5709779d8a2c39625c992d6d7a","https://test.instamojo.com/api/1.1/");


	try {
    $response = $api->paymentRequestCreate(array(
			"purpose" => "Donation",
			"amount" => $Amount,
			"phone" => $Phone,
			"buyer_name" => $Name,
			"send_email" => true,
			"email" => $Email,
			"send_sms" => true,
			"allow_repeated_payments" => false,
			"redirect_url" => "http://localhost/Baburam/redirect.php",
		//	"webhook" => "http://localhost/Donationgateway-master/redirect.php",

			));
		 // print_r($response);
		 $pay_url = $response['longurl'];
		 header("location:$pay_url");
	   }
	catch (Exception $e) {
		print("Error: " . $e->getMessage());
}

?>
