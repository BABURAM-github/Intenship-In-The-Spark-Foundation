<!DOCTYPE html>
<html lang="en">

<head>
    <title> Veerat Babu Foundationd - Thank you page!</title>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <style>
  body{ 
  background: url('img/don.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  backdrop-filter: blur(5px);
}
</style>
</head>
<body>
  <!--NAVBAR START -->
    <nav class="navbar navbar-dark bg-secondary navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"> </span>   
            </button>
            <a class="navbar-brand mr-auto" href="index.html"><i> Veerat Babu Foundationd</i></a>
            <div class="collapse navbar-collapse" id="Navbar">
               <ul class="navbar-nav ml-auto">
                 <li class="nav-item active"><a class="nav-link" href="./index.html"><span class="fa fa- fa-lg"></span>Intro </a></li>
                  <li class="nav-item "><a class="nav-link" href="./home.html"><span class="fa fa-home fa-lg"></span> Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="faq.html"><span class="fa fa-list fa-lg"></span> FAQ's</a></li>
                  <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact Us</a></li> 
               </ul>
            
             </div>  
        </div>    
    </nav>
<!--NAVBAR END -->

<!--THANKYOU CARD-->
    <div class="container" style="padding-top: 20px;">
      <div class="page-header" style="background-color: white;opacity:0.8;">
        <strong><p style="font-size:34px;"><i> Veerat Babu Foundationd - Thank you For Your Donation!</i></p></strong>
    <p style="font-size: 20px;"><i> 
Together we are making a difference! Your continued support of our mission is deeply gratifying to us, and we hope it is the same for you. We were honored to see that you have chosen to increase your donation this [month/year]. Your gift has already started to impact.Please feel free to contact, if you have any specific questions, we would love the opportunity to thank you again! With deepest gratitude, and warmest wishes,</i>
</p></div>
<?php

include 'instamojo/Instamojo.php';

$api = new Instamojo\Instamojo('test_39abb2dd9abcf0515669a0d6438', 'test_e5709779d8a2c39625c992d6d7a','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];

try {
    $response = $api->paymentRequestStatus($payid); ?>
  <div class="row">
             <div class="col-sm offset-md-3 col-md-6">  
  <div class="card" style="border-radius: 10px;">
  <div class="card-header bg-dark" style="color: white;"><h2><i>Transaction details</i></h2></div>
  <div class="card-body">
    <div style="padding-left: 10px;font-size: 20px;">
                <p><b>Donar Name :</b> <?php echo htmlentities($response['payments'][0]['buyer_name']); ?></p>
                <p><b>Donar Email-ID:</b> <?php echo htmlentities($response['payments'][0]['buyer_email']); ?></p>
                <p><b>Donated Amount:</b> <?php echo htmlentities($response['payments'][0]['amount']); ?></p>
                <p><b>Payment ID:</b> <?php echo htmlentities($response['payments'][0]['payment_id']); ?></p>
            </div>     
  </div>
  <div class="card-footer"><h4>Status: <?php echo htmlentities($response['status']); ?></h4>  </div>
</div>
</div>
</div>
<?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
  ?>
<div class="row" style="padding-top:30px;">
  <div class="col-xs-12 offset-md-3 col-md-6">
<div style="background-color: black; font-size: 15px;text-align: center; color: white;"><i>Kindly Check Your Email For Transaction Details and confirmation message!</i> </div>  
</div>
</div>   
</div> 
<!--THANKYOU CARD-->

 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>