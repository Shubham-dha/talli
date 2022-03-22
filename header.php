<?php
//require('connection.inc.php');
require('functions.inc.php');
require('modal.php');
require('cartjs.php')
?>

<script>
$( document ).ready(function() {

  const successCallback =(position)=>{
    console.log(position);
    var long=position.coords.longitude;
    var lat=position.coords.latitude;

  var api_key = '4683449d0007440cbea5f0aa1ca29f42';
  var latitude = lat;
  var longitude = long;

  var api_url = 'https://api.opencagedata.com/geocode/v1/json'

  var request_url = api_url
    + '?'
    + 'key=' + api_key
    + '&q=' + encodeURIComponent(latitude + ',' + longitude)
    + '&pretty=1'
    + '&no_annotations=1';

  // see full list of required and optional parameters:
  // https://opencagedata.com/api#forward

  var request = new XMLHttpRequest();
  request.open('GET', request_url, true);

  request.onload = function() {
    // see full list of possible response codes:
    // https://opencagedata.com/api#codes

    if (request.status === 200){ 
      // Success!
      var data = JSON.parse(request.responseText);
      
      var loc=data.results[0].formatted;
     // alert(loc); // print the location
      document.getElementById("location").innerHTML = loc;
   
    } else if (request.status <= 500){ 
      // We reached our target server, but it returned an error
                           
      console.log("unable to geocode! Response code: " + request.status);
      var data = JSON.parse(request.responseText);
      console.log('error msg: ' + data.status.message);
    } else {
      console.log("server error");
    }
  };

  request.onerror = function() {
    // There was a connection error of some sort
    console.log("unable to connect to server");        
  };

  request.send();  // make the request
                             
    
  };
  const errorCallback =(error)=>{
    console.error(error);
  };
    navigator.geolocation.getCurrentPosition(successCallback,errorCallback);
  });
                         
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/cart.css" />
  <link rel="stylesheet" href="css/shop.css" />
  <link rel="stylesheet" href="css/signup.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/header/header.css" />
  <link rel="stylesheet" href="css/hover.css" />
  <link rel="stylesheet" href="css/contactus.css" />
  

  <!----Animate css------>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!----owl carousel ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
  
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



  <title>Talli - Your Online SoftDrink Store</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 


</head>

<body>
  <div class="container-fluid" id="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <p>Softdrink delivered to your doorstep.</p>
        </div>
        <div class="col-md-4">
          <span class="location" id="location"> <i class="fa fa-map-marker" aria-hidden="true"></i> </span>
          
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg" id="header-menu">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/talli-logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Register</a>
          </li>
        </ul>
     
        
        <button class="btn" type="submit"><a style="color:black" data-bs-toggle="modal" data-bs-target="#cart"> <i class="fa fa-shopping-cart"  aria-hidden="true"></i></a><span class="cart-items">(0)</span></button>
      </div>
    </div>
  </nav>

</body>

</html>

